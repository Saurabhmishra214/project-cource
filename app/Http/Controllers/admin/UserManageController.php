<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserManageController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'user')->latest()->paginate(10);
        return view('admin_dashboard.user_manage.list', compact('users'));
    }

    public function details($id)
    {
        $user = User::findOrFail($id);
        return view('admin_dashboard.user_manage.details', compact('user'));
    }

    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();

        return redirect()->route('admin.user.list')->with('success', 'User data deleted successfully!');
    }
}
