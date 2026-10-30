<?php

namespace App\Http\Controllers;

use App\Mail\RegistrationEmail;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:30'],
            'ticket' => ['required', 'in:general-admission,premium'],
        ]);
        
        $registration = Registration::create($validated);

        Mail::to($registration->email)->send(new RegistrationEmail($registration));

        return redirect()
            ->route('home')
            ->with('success', 'Your registration has been saved.');
    }
}
