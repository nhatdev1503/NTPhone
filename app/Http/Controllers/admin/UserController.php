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
        $query = User::query();

        // Lọc theo trạng thái
        if ($request->has('status') && !empty($request->status)) {
            $query->where('status', $request->status);
        }

        $users = $query->orderBy('id', 'desc')->paginate(10)->appends($request->query());

        return view('admin.users.index', compact('users'));
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
    public function update(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);

        $data = $request->except('password', 'avatar');
        
        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->password);
        }
        // Xử lý avatar
        if ($request->hasFile('avatar')) {
            // Xóa avatar cũ nếu có
            if ($user->avatar) {
                Storage::disk('public')->delete($user->avatar);
            }

            // Lưu avatar mới vào thư mục "storage/app/public/avatar"
            $avatarPath = $request->file('avatar')->store('avatar', 'public');
            $data['avatar'] = $avatarPath;
        }
        $user->role = 'customer';
        $user->save();
        $user->update($data);

        return redirect()->route('users.show',$user->id)->with('success', 'Cập nhật tài khoản thành công!');
    }

    // Xóa người dùng
    public function destroy(Request $request, User $user)
    {    
        $data = $request->all();
        if($user->status == 'active'){
            $user->update([
                'status' => 'inactive',
                'block_reason' => $data['block_reason']
            ]);      
        }else {
            $user->update([
                'status' =>'active',
                'block_reason' => null
            ]);   
        }
  
        return redirect()->route('users.index')
            ->with('success', 'Cập nhật thành công');
    }
}
