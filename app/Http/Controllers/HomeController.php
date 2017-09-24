<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Mail\Mailer;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    public function projects()
    {
        return view('projects');
    } 

    public function contact()
    {
        return view('contact');
    }

    public function sendcontact(Request $request)
    {
        $name = $request->contact_name;
        $email = $request->contact_email;
        $message = $request->contact_msg;
        $email_data = array(
          //   'recipient' => $user->user_email,
             'recipient' => 'support@theinnovestors.com',
             'subject' => 'New Email From Personal Site'
              );
                $view_data = array(
                'email' => $request->contact_email,
                'name' => $request->contact_name,
                'messag' => $request->contact_msg
            );

              Mail::send('emails.contact_message', $view_data, function($message) use ($email_data) {
                  $message->to( $email_data['recipient'] )
                          ->subject( $email_data['subject'] );
              }); 
              session()->flash('message', 'Message Sent!');
        return view('contact');
    }
}
