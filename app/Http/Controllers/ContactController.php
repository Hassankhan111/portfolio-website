<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    public function save(Request $request){
        
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        // Save the contact message to the database
         $contact = Contact::create($validatedData);
          
         if($contact){
            // Redirect back with a success message
            return redirect('/contact')->with('success', 'Your message has been sent!');
        }
        // Redirect back with an error message
        return redirect('/contact')->with('error', 'Failed to send your message.');
    }
}