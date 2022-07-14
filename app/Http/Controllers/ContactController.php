<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\mail\ContactNotification;


class ContactController extends Controller
{
    public function show() {
        return view("contacts.show");
    }

    public function store(Request $request) {

        Mail::to("emiliovm@outlook.es")->send(new ContactNotification($request->email, $request->message));

        if ($request->email == "") {
            return back()->with("error", "no hemos podido enviar su mensaje");
        } else {
            return back() -> with ("success", "Hemos recibido su consulta en breve nos pondremos en contacto con usted");
        }
    }
}
