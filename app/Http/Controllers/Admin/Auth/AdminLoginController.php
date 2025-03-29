<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Session;

class AdminLoginController extends Controller
{
    use AuthenticatesUsers;

    public function getLoginAdmin()
    {
        return view('admin.auth.login');
    }

    public function postLoginAdmin(Request $request)
    {
        if (\Auth::guard('admins')->attempt(['email' => $request->email, 'password' => $request->password])) {
//            return redirect()->intended('/api-admin');
            $admin = \Auth::guard('admins')->user();
            $originalValues = $admin->getOriginal();
            Session::put('admin',$originalValues);
            return redirect()->route('admin.statistical');
        }

        return redirect()->back();
    }

    public function getLogoutAdmin()
    {
        \Auth::guard('admins')->logout();
        Session::forget('admin');
        return redirect()->to('/');
    }
}
