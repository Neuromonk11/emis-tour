<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact1;

class ArticleController extends Controller
{
    public function allContacts() {
        $contacts = contact1::All();

        return view('welcome', ['contacts' => $contacts]);
    }
    public function post(Request $req) {
        $contact = new contact1;

        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->back();
    }
}
