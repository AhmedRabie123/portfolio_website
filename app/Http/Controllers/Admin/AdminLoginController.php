<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Mail\Websitemail;
use Hash;
use Auth;

class AdminLoginController extends Controller
{
    public function index()
    {
        // $pass = Hash::make(1234);
        // dd($pass);
        return view('Admin.login');
    }


    public function forget_password()
    {
        return view('Admin.forget_password');
    }

    public function forget_password_submit(Request $request)
    {
        // echo($request->email);

        $request->validate([
            'email' => 'required|email',
        ]);

        $admin_data = Admin::where('email', $request->email)->first();

        if(!$admin_data){
            return redirect()->back()->with('error', 'email address not found');
        }

        $token = hash('sha256', time());
        $admin_data->token = $token;
        $admin_data->save();
 
        $reset_link = url('admin/reset-password/'. $token. '/' .$request->email);
        $subject = 'reset password';
        $message = 'please click on the follow link: <br>';
        $message .= '<a href="'.$reset_link.'">Click Here</a>';

        \Mail::to($request->email)->send(new Websitemail($subject, $message));

        return redirect()->route('admin_login')->with('success', 'please check your email and follow the steps there ');

    }


    public function login_submit(Request $request)
    {
        //echo($request);
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|'
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::guard('admin')->attempt($credential)) {
            return redirect()->route('admin_home');
        } else {
            return redirect()->route('admin_login')->with('error', 'information is not correct');
        }
    }

    public function admin_logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login');
    }
}
