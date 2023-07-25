<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected function authenticated(Request $request, $user)
    {
        if ($user->role === 'admin') {
            return redirect('/admin/dashboard');
        }

        return redirect('/home'); // Default redirect path for regular users
    }

    public function dashboard()
    {
        // Your admin dashboard logic here
        return view('admin.dashboard');
    }
}
