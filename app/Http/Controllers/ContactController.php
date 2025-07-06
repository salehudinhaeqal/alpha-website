<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // 1. Validasi data form
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // 2. Kirim email
        Mail::to('salehudinhaeqal@gmail.com')->send(new ContactFormMail($validatedData));

        // 3. Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Pesan Anda telah berhasil terkirim!');
    }
}