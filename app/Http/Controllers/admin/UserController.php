<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    // Hiển thị danh sách người dùng
    public function index(Request $request)
    {
        $query = User::query()->where('status', 'active')
        ->where('role', '!=', 'admin');

        // Search by name or email
        if ($request->filled('keyword')) {
            $keyword = $request->keyword;
            $query->where(function($q) use ($keyword) {
                $q->where('name', 'like', "%{$keyword}%")
                  ->orWhere('email', 'like', "%{$keyword}%");
            });
        }

        // Filter by role
        if ($request->filled('role')) {
            $query->where('role', $request->role);
        }

        $users = $query->orderBy('id', 'desc')
                      ->paginate(10)
                      ->withQueryString();

        return view('admin.users.index', compact('users'));
    }

    public function locked(Request $request)
    {
        $query = User::query()->where('status', 'inactive');

        // Search by name or email
        if ($request->filled('keyword')) {
            $keyword = $request->keyword;
            $query->where(function($q) use ($keyword) {
                $q->where('name', 'like', "%{$keyword}%")
                  ->orWhere('email', 'like', "%{$keyword}%");
            });
        }

        // Filter by role
        if ($request->filled('role')) {
            $query->where('role', $request->role);
        }

        $users = $query->orderBy('id', 'desc')
                      ->paginate(10)
                      ->withQueryString();

        return view('admin.users.locked', compact('users'));
    }

    // Hiển thị form thêm người dùng
    public function create()
    {
        return view('admin.users.create');
    }

    // Xử lý thêm người dùng
    public function store(UserRequest $request)
    {
        $data = $request->except('password', 'avatar');
        $data['password'] = bcrypt($request->password);

        if ($request->hasFile('avatar')) {
            // Lưu ảnh vào thư mục "storage/app/public/avatar"
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $data['avatar'] = $avatarPath;
        }

        User::create($data);

        return redirect()->route('users.index')->with('success', 'Tài khoản đã được tạo thành công!');
    }

    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }
    
    // Hiển thị form chỉnh sửa người dùng
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    // Xử lý cập nhật người dùng
    public function update(Request $request, User $user)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'required|string|max:20',
            'status' => 'required|in:active,inactive',
            'block_reason' => 'nullable|required_if:status,inactive|string|max:255',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->status = $request->status;
        $user->block_reason = $request->block_reason;

        if ($request->hasFile('avatar')) {
            // Xóa ảnh cũ nếu có
            if ($user->avatar && Storage::disk('public')->exists($user->avatar)) {
                Storage::disk('public')->delete($user->avatar);
            }
        
            // Lưu ảnh mới
            $file = $request->file('avatar');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('avatars', $fileName, 'public');
            $user->avatar = 'avatars/' . $fileName;
        } elseif ($request->has('remove_avatar')) {
            if ($user->avatar && Storage::disk('public')->exists($user->avatar)) {
                Storage::disk('public')->delete($user->avatar);
            }
            $user->avatar = null;
        }

        $user->save();

        return redirect()->route('users.show', $user->id)->with('success', 'Cập nhật tài khoản thành công!');
    }

    // Xử lý khóa tài khoản
    public function lock(Request $request, User $user)
    {    
        $request->validate([
            'lock_reason' => 'required|string|max:255',
        ]);

        $user->update([
            'status' => 'inactive',
            'block_reason' => $request->lock_reason
        ]);
        
        return redirect()->route('users.index')->with('success', 'Tài khoản đã bị khóa thành công!');
    }

    // Xử lý mở khóa tài khoản
    public function unlock(User $user)
    {    
        $user->update([
            'status' => 'active',
            'block_reason' => null
        ]);
        
        return redirect()->route('users.locked')->with('success', 'Tài khoản đã được mở khóa thành công!');
    }

    // Xử lý xóa mềm tài khoản
    public function destroy(User $user)
    {    
        $user->delete();
        
        return redirect()->route('users.locked')->with('success', 'Tài khoản đã được xóa thành công!');
    }
}
