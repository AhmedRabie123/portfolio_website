<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageItem;
use App\Mail\Websitemail;
use App\Models\Admin;


class ContactController extends Controller
{
    public function index()
    {
        $page_data = PageItem::where('id', 1)->first();
        return view('Front.contact', compact('page_data'));
    }

    public function send_email(Request $request)
    {

        $request->validate([
           'name' => 'required',
           'email' => 'required|email',
           'message' => 'required',
        ]);

       $admin_data = Admin::where('id', 1)->first();
       $admin_email = $admin_data->email;

       $subject =  'Contact Form Message';
       $message =  'Visitor Information </br></br>';
       $message .= '<b> Name: </b></br>' .$request->name.'</br></br>';
       $message .= '<b> E-mail:  </b></br>'.$request->email.'</br></br>';
       $message .= '<b> Phone:  </b></br>'.$request->phone.'</br></br>';
       $message .= '<b> message:  </b></br>'.$request->message;

       \Mail::to($admin_email)->send(new Websitemail($subject, $message));
 
       return redirect()->route('contact')->with('success', 'E-Mail Is Send Successfully');

    }
}
