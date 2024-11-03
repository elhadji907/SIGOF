<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = request()->validate([
            'email'         =>  ['required', 'email'],
            'telephone'     =>  ['required', 'string'],
            'objet'         =>  ['required', 'string'],
            'message'       =>  ['required', 'string'],

        ]);

        $contact = new Contact([
            'email'         => $data['email'],
            'telephone'     => $data['telephone'],
            'objet'         => $data['objet'],
            'message'       => $data['message'],
        ]);

        $contact->save();

        Alert::success("Félicitations !!!", "Votre message a été envoyé. Merci!");

        $status = "Félicitation, Votre message a été envoyé. Merci!";
        
        return redirect()->back()->with('status', $status);
    }
}
