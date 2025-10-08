<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewsletterWelcomeMail;

class NewslettersController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletters,email',
        ]);

        $newsletter = Newsletter::create([
            'email' => $request->email,
        ]);

        // Send welcome email
        Mail::to($newsletter->email)->send(new NewsletterWelcomeMail($newsletter->email));


        return response()->json(['message' => 'Thank you for subscribing!']);
    }
}
