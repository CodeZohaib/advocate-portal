<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'contact' => 'required|string|max:15',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048', 
        ]);

        if ($request->hasFile('profile_image')) 
        {
            $path = $request->file('profile_image')->store('profiles');
            $storedName = basename($path);
        }
        else 
        {
            $storedName = 'profile.JPG';
        }
    
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_no' => $request->contact,
            'password' => Hash::make($request->password),
            'profile_image' => $storedName,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
