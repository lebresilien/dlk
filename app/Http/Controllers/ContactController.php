<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(Request $request) {
        
        if(isset($request->type)) {

            Mail::to('petitotapondjou@gmail.com')->send(new ContactMail($request->all()));

            return response()->json(['message' => 'success']);

        } else {
            
            $request->validate([
                'name' => 'bail|required|alpha',
                'phone' => 'bail|required',
                'subject' => 'bail|required|alpha',
                'email' => 'bail|required|email',
                'message' => 'bail|required|max:250'
            ]);

            Mail::to('petitotapondjou@gmail.com')->send(new ContactMail($request->all()));

            return back()->withText(__('sent'));

        }

       
    }
}
