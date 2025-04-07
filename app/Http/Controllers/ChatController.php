<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use App\Models\ChatRoom;
use App\Events\MessageSent;
use App\Models\ChatMessage;
use Illuminate\Http\Request;
use App\Events\NotificationMessage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ChatController extends Controller
{
    // public function getChats()
    // {
    //     $userId = Auth::id();

    //     $chats = Message::where('sender_id', $userId)
    //         ->orWhere('receiver_id', $userId)
    //         ->orderBy('created_at', 'desc')
    //         ->get()
    //         ->groupBy(function ($message) use ($userId) {
    //             return $message->sender_id === $userId ? $message->receiver_id : $message->sender_id;
    //         });
    //     return response()->json($chats);
    // }

    // public function getMessages($userId)
    // {
    //     $authId = Auth::id();

    //     $messages = Message::where(function ($query) use ($authId, $userId) {
    //         $query->where('sender_id', $authId)->where('receiver_id', $userId);
    //     })->orWhere(function ($query) use ($authId, $userId) {
    //         $query->where('sender_id', $userId)->where('receiver_id', $authId);
    //     })->orderBy('created_at', 'asc')->get();

    //     return response()->json($messages);
    // }

    // public function sendMessage(Request $request)
    // {
    //     $message = Message::create([
    //         'sender_id' => Auth::id(),
    //         'receiver_id' => $request->receiver_id,
    //         'message' => $request->message,
    //     ]);

    //     Log::info('Phát sự kiện MessageSent:', ['message' => $message]);

    //     broadcast(new \App\Events\MessageSent($message))->toOthers();

    //     return response()->json(['message' => $message]);
    // }

    public function index()
    {
        $users = User::getUser();
        return view('admin.chat', compact('users'));
    }

    public function sendMessage(Request $request)
    {
        Log::info('data', $request->all());
        $request->validate([
            'message' => 'required|string',
            'receiver_id' => 'required|exists:users,id',
        ]);

        $sender = auth()->user();
        $receiver = User::find($request->receiver_id);

        if (!$receiver) {
            return response()->json(['status' => 'Receiver not found'], 404);
        }

        $roomId = $sender->isAdmin() ? $receiver->id : $sender->id;

        if($sender->isAdmin() && $receiver->isAdmin()){
            $roomId = $sender->id > $receiver->id 
            ? $sender->id * 100000 + $receiver->id 
            : $receiver->id * 100000 + $sender->id;
        }

        if (!$sender->isAdmin() && !$receiver->isAdmin()) {
            $admin = User::where('role', 'admin')->first();
            if ($admin) {
                $receiver = $admin;
                $roomId = $sender->id;
            }
        }
        Log::info('roomId: ' . $roomId);
        $mediaPath = null;
        $mediaType = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $timestamp = now()->format('Ymd_His');
            $extension = $file->getClientOriginalExtension();
            $fileName = "{$timestamp}.{$extension}";

            $mediaPath = $file->storeAs('messages', $fileName, 'public'); 
            $mediaType = $file->getMimeType();
        }

        // Save message in database
        $chatMessage = ChatMessage::create([
            'sender_id' => $sender->id,
            'receiver_id' => $receiver->id,
            'room_id' => $roomId,
            'message' => $request->message ?? '', 
            'media_type' => $mediaType,
            'media_path' => $mediaPath,
        ]);

        // Broadcast event
        broadcast(new MessageSent($roomId, $sender, $receiver, $chatMessage->message ,$mediaPath));
     //   broadcast(new NotificationMessage($roomId, $sender, $receiver, $chatMessage->message));
        return response()->json([
            'status' => 'Message sent successfully',
            'message' => $chatMessage->message,
            'media_path' => $mediaPath ? asset("storage/{$mediaPath}") : null,
            'roomId' =>$chatMessage->room_id
        ]);
    }

    public function getRoomId(Request $request)
    {
        $loggedInUser = auth()->user(); // Người đang đăng nhập
        $otherUser = User::find($request->user_id); // Người khác từ request

        if (!$otherUser) {
            return response()->json(['status' => 'error', 'message' => 'User not found'], 404);
        }

        // Kiểm tra quyền admin của người dùng
        $isLoggedInUserAdmin = $loggedInUser->isAdmin(); // Hàm isAdmin() bạn cần định nghĩa
        $isOtherUserAdmin = $otherUser->isAdmin(); // Hàm isAdmin() bạn cần định nghĩa

        // Tính toán roomId
        $roomId = $this->calculateRoomId(
            $loggedInUser->id,
            $otherUser->id,
            $isLoggedInUserAdmin,
            $isOtherUserAdmin
        );

        return response()->json([
            'status' => 'success',
            'roomId' => $roomId,
        ]);
    }

    public function getDataChatAdmin(Request $request)
    {
        $sender = auth()->user();
        $receiver = User::find($request->userId);
    
        if (!$receiver) {
            return response()->json(['status' => 'Receiver not found'], 404);
        }
        if ($sender->isAdmin() && $receiver->isAdmin()) {
            $roomId = $sender->id > $receiver->id
                      ? $sender->id * 100000 + $receiver->id
                      : $receiver->id * 100000 + $sender->id;
        } else {
            $roomId = $sender->isAdmin() ? $receiver->id : $sender->id;
        }
        $data = ChatMessage::getChatMessages($roomId);
        return response()->json(['data',  $data]);
    }

    // public function deleteMessage(Request $request)
    // {
    //     $request->validate([
    //         'id' => 'required|exists:messages,id'
    //     ]);

    //     $message = Message::findOrFail($request->id);

    //     // Check if user has permission to delete the message
    //     if ($message->sender_id !== Auth::id()) {
    //         return response()->json(['error' => 'Unauthorized'], 403);
    //     }

    //     // Delete associated file if exists
    //     if ($message->media_path && Storage::disk('public')->exists($message->media_path)) {
    //         Storage::disk('public')->delete($message->media_path);
    //     }

    //     $message->delete();

    //     return response()->json([
    //         'success' => true,
    //         'message' => 'Message deleted successfully'
    //     ]);
    // }

    public function getDataChatClient()
    {
        $data = ChatMessage::getChatMessageClient();
        if ($data == null) {
            return response()->json(['status' => false]);
        }
        return response()->json(['data' => $data, 'status' => true]);
    }

        /**
     * Tính toán Room ID dựa trên ID của người dùng.
     *
     * @param int $loggedInUserId
     * @param int $otherUserId
     * @param bool $isLoggedInUserAdmin
     * @param bool $isOtherUserAdmin
     * @return int
     */
    private function calculateRoomId(int $loggedInUserId, int $otherUserId, bool $isLoggedInUserAdmin, bool $isOtherUserAdmin): int
    {
        if ($isLoggedInUserAdmin && $isOtherUserAdmin) {
            return $loggedInUserId > $otherUserId
                ? $loggedInUserId * 100000 + $otherUserId
                : $otherUserId * 100000 + $loggedInUserId;
        }

        return $isLoggedInUserAdmin ? $otherUserId : $loggedInUserId;
    }
}
