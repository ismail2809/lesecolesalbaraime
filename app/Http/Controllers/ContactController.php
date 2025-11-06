<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Redirect; 
use Validator; 
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail; 
// use App\Mail\Contact;
use App\Models\Contact;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.contact'); 
    }

    public function form_contact(Request $request)
    { 
        $validator = Validator::make($request->all(),[ 
        'name' => 'required', 
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required', 
        ]);                

        if($validator->fails()){
            return back()->withErrors($validator->errors())->withInput();
        }
        
        $contact = []; 
        $contact['name']  = $request->name; 
        $contact['email']  = $request->email;
        $contact['subject']  = $request->subject;
        $contact['message']  = $request->message;
        // $adresse = "contact@albaraime.com";

        $contact = new Contact($contact); 
        $contact->save(); 
        //$mailable = new Contact($contact); 
        //Mail::to($adresse)->send($mailable);          

        Log::info("Page contact ContactController contactForm");
        Alert::success('Success', 'Votre message a été envoyé avec succès !'); 

        return back();
    }
}
