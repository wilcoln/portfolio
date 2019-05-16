<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message; 

class MessagesController extends Controller
{
   public function submit(Request $request){
      $this->validate($request,[
          'name' => 'required',
          'email' => 'required',
          'message' => 'required'
      ]);
      // creating new message
      $message = new Message();
      $message->name = $request->input('name');
      $message->email = $request->input('email');
      $message->message = $request->input('message');
      //Saving message
      $message->save();

      return redirect('/')->with('success', 'Your message was sent successfully');
      
   }

   public function getMessages(){
       $messages = Message::all()->reverse();
       return view('inbox')->with('messages',$messages);
   }
}
