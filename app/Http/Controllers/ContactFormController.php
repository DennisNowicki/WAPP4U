<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Contactus;
use App\Application;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',

        ]);
        $contact = new Contactus([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'message' => $request->get('message')

        ]);
        $contact->save();
        
        Mail::to('WAPP4U@development.com')->send(new ContactFormMail($data));

        return redirect('contact')
            ->with('message', 'Thanks for your message. We\'ll be in touch.');
    }

    public function list()
    {
        $data = Contactus::all();
        $notFinished = Application::where('finished','0')->get();
        return view('contactinfo', ['data'=>$data])
        ->with('notFinished', $notFinished);
       
        
    }

}
