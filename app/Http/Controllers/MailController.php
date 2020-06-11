<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function getContact() {
        return view('pages.contact');
    }

    public function postContact(Request $r) {

        $data = [
            'name' => $r->name,
            'email' => $r->email,
            'subject' => $r->subject,
            'content' => $r->content,
        ];

        // return view('mails.contact', $data);

        Mail::send('mails.contact', $data, function ($message) use($r) {
            $message->sender(env('MAIL_FROM_ADDRESS'), 'Jeroen Vervaeck');
            $message->to('jeroverv@student.arteveldehs.be', 'Jeroen Vervaeck');
            $message->cc($r->email, $r->name);
            $message->bcc('frederick.roegiers@arteveldehs.be', 'Fredrick Rogiers');
            $message->subject($r->subject);
        });

    }
}
