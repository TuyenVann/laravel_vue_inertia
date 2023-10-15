<?php

namespace App\Http\Controllers\Auth;

use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Inertia\Inertia;
use Request;



class RegisterController extends Controller
{


    public function create()
    {
        return Inertia::render('Auth/Register');
    }

    public function store()
    {
        $attributes  = Request::validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('users')],
            'password' => 'required',
        ]);

        $user = User::create($attributes);
        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
        // return redirect('/');
    }



}
