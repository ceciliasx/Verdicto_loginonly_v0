<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\FormExistLogin;
use App\Models\FormEntry;
use App\Models\LawyerEntry;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showForm()
    {
        return view('form_login');
    }

    public function handleForm(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $client = FormEntry::where('username', $request->username)->first();
        if ($client && $request->password === $client->password) {
            return redirect()->route('thankyou')->with('success', 'Logged in successfully!');
        }

        $lawyer = LawyerEntry::where('username', $request->username)->first();
        if ($lawyer && $request->password === $lawyer->password) {
            return redirect()->route('thankyou')->with('success', 'Logged in successfully!');
        }

        return back()->withErrors(['login' => 'Username or password does not match.'])->withInput();
    }
}
