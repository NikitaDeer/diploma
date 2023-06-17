<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

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
      'surname' => ['required', 'string', 'max:255'],
      'patronymic' => ['required', 'string', 'max:255'],
      'phone' => ['required', 'string', 'max:255', 'unique:' . User::class, 'regex:/^[\d\s\-\+\(\)]+$/'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
      'password' => ['required', 'confirmed', Rules\Password::defaults()],
    ]);

    $user = User::create([
      'name' => $request->name,
      'surname' => $request->surname,
      'patronymic' => $request->patronymic,
      'phone' => $request->phone,
      'email' => $request->email,
      'password' => Hash::make($request->password),

    ]);

    $user->assignRole('User');

    event(new Registered($user));

    Auth::login($user);

    return redirect(RouteServiceProvider::HOME);
  }
}