<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Product;
use App\Models\User;
use App\Services\ProductService;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
        parent::__construct();
    }

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

    public function exportExcel(UserService $userService)
    {
        $userService->exportExcel(User::all());
    }

    public function exportCsv()
    {
        $this->userService->exportCsv(User::all());
    }
}
