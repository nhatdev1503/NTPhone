<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Hiển thị danh sách người dùng
    public function index(Request $request)
    {
        $query = User::query();
    
        // Lọc theo vai trò
        if ($request->has('role') && !empty($request->role)) {
            $query->where('role', $request->role);
        }
    
        // Lọc theo trạng thái
        if ($request->has('status') && !empty($request->status)) {
            $query->where('status', $request->status);
        }
    
        $users = $query->orderBy('id', 'desc')->paginate(10);
    
        return view('admin.users.index', compact('users'));
    }
    
    

    // Hiển thị form thêm người dùng
    public function create()
    {
        
        return view('admin.users.create');
    }

    // Xử lý thêm người dùng
  public function store(Request $request)
{
    $request->validate([
        'fullname' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'username' => 'required|string|unique:users',
        'password' => 'required|min:6',
        'role' => 'required|in:staff,customer',
        'status' => 'required|in:active,inactive',
    ]);

    User::create([
        'fullname' => $request->fullname,
        'email' => $request->email,
        'username' => $request->username,
        'password' => Hash::make($request->password),
        'status' => $request->status,
        'role' => $request->role,
    ]);

    return redirect()->route('admin.users.index')->with('success', 'Tài khoản đã được tạo thành công.');
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
           
            'role' => 'required|in:admin,staff,customer',
        ]);

        $user->update($request->only(['fullname', 'email', 'phone', 'address', 'avatar', 'status', 'role']));

        return redirect()->route('admin.users.index')->with('success', 'Tài khoản đã được cập nhật.');
    }

    // Xóa người dùng
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'Tài khoản đã bị xóa.');
    }
}
