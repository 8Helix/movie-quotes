<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
	public function login(): RedirectResponse
	{
		$attributes = request()->validate([
			'email'    => 'required|email',
			'password' => 'required',
		]);

		if (!auth()->attempt($attributes))
		{
			throw ValidationException::withMessages([
				'email' => __('texts.validation_error'),
			]);
		}

		session()->regenerate();

		return redirect()->route('home');
	}

	public function logout(): RedirectResponse
	{
		auth()->logout();

		return redirect()->route('home');
	}
}
