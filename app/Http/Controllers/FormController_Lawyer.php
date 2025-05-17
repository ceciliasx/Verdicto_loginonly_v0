<?php

namespace App\Http\Controllers;
use App\Models\FormEntry;
use App\Models\LawyerEntry;
use Illuminate\Http\Request;

class FormController_Lawyer extends Controller
{
    public function showForm()
    {
        return view('form_2');
    }

    public function handleForm(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'phone' => ['required', 'regex:/^\+?[0-9\s\-()]{7,20}$/'],
            'password'=> 'required|confirmed|min:6',
            'gender' => 'required|in:male,female,other'
        ]);

        $data = $request->except(['password_confirmation']);
        $data['password'] = bcrypt($data['password']);

        LawyerEntry::create($validated);

        // return back()->with('success', 'Form submitted!')->withInput();
        return redirect()->route('thankyou');
    }

    public function viewEntries()
    {
        $entries = LawyerEntry::latest()->get();
        return view('form_entries', compact('entries'));
    }

}

