<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {

        $contact = Contact::find(1);
        return view('admin.contact.index', compact('contact'));
    }
    public function edit($id)
    {
        try {
            $contact = Contact::findOrFail($id);
            return view('admin.contact.edit', compact('contact'));
        } catch (ModelNotFoundException $exception) {
            return redirect()->action('ContactController@index');
        }
    }
    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->phone = $request->input('phone');
        $contact->email = request('email');
        $contact->address = request('address');
        $contact->facebook = request('facebook');
        $contact->twitter = request('twitter');
        $contact->instagram = request('instagram');
        $contact->linkedin = request('linkedin');
        $contact->latitude = request('latitude');
        $contact->longitude = request('longitude');

        $contact->save();

        if ($contact) {
            return redirect()->route('contact.index');
        } else {
            return redirect()->back();
        }
    }
}
