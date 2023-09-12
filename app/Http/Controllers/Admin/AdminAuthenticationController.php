<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Http\Requests\HandleLoginRequest;

class AdminAuthenticationController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }
    public function handleLogin(HandleLoginRequest $request)
    {
        $request->authenticate();
        return redirect()->route('admin.dashboard');
    }
}
