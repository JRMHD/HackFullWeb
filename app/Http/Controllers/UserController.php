<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import the User model if not already imported

class UserController extends Controller
{
    // Display the form
    public function create()
    {
        return redirect()->route('home');
    }

    // Handle form submission
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'phone_number' => 'required|string|max:20',
            'state' => 'required|string|max:255',
        ]);

        // Create a new User instance and populate it with the form data
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');
        $user->state = $request->input('state');

        // Save the user to the database
        $user->save();

        // Set a success message in the session
        session()->flash('success', 'Data submitted successfully.');

        // Redirect back to the create form for further entries
        return redirect()->route('home');
    }
}
