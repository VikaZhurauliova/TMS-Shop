<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::query()->orderByDesc('created_at')->paginate(10);
        return view('admin.users.index', [
            'users' => $users
        ]);
    }

    public function destroy(User $user)
    {
        $user->delete();
        session()->flash('success', 'User has been successfully deleted.');
        return back();
    }
}
