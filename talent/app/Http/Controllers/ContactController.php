<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('pages.contact');
    }

    public function index1(){
        $contacts = Contact::all();
        return view('admin.contact',compact('contacts'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'name'    => 'required|min:4',
            'email'   => 'required|email',
            'message' => 'required|min:6',
        ]);

        $var = new Contact;
        $var->name    = $request->input('name');
        $var->email   = $request->input('email');
        $var->message = $request->input('message');

        $var->save();
        return back()->with('success', 'Thank you for getting in touch!.');
    }


    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return back()->with('success', 'Contact deleted!');
    }
}
