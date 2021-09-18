<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\admin;

class AdminController extends Controller {
    function check(Request $request) {
        // Validate inputs
        $request->validate([
            'email' => 'required|email|exists:admins,email',
            'password' => 'required|min:5|max:30'
        ], [
            'email.exists' => 'Email is not available'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.home');
        } else {
            return redirect()->back()->with('fail', 'Incorrect credentials');
        }
    }

    function logout() {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}