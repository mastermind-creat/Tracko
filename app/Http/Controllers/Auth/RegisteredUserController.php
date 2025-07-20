<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
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
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'role' => 'required|in:admin,project_manager,contractor,public_viewer',
            'phone' => 'nullable|string|max:20',
            'organization' => 'nullable|string|max:255',
            'department' => 'nullable|string|max:255',
            'position' => 'nullable|string|max:255',
            'work_id' => 'nullable|string|max:255',
            'county' => 'nullable|string|max:255',
            'subcounty' => 'nullable|string|max:255',
            'id_number' => 'nullable|string|max:50',
            'photo' => 'nullable|file|image|max:2048',
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('user_photos', 'public');
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'phone' => $request->phone,
            'organization' => $request->organization,
            'department' => $request->department,
            'position' => $request->position,
            'work_id' => $request->work_id,
            'county' => $request->county,
            'subcounty' => $request->subcounty,
            'id_number' => $request->id_number,
            'photo' => $photoPath,
        ]);

        event(new Registered($user));

        // Do not log in the user automatically
        // Auth::login($user);

        // Redirect to login page with success message
        return redirect()->route('login')->with('status', 'Registration successful! Please log in.');
    }
}
