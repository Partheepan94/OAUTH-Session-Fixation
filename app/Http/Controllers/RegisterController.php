<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $input = $request->all();

        // Adds new user into the database
        $insert=DB::table('users')->insert(['email' => $request->input('email'), 'name' => $request->input('name'), 'password' => $request->input('password')]);

        return redirect('firstLogin');
    }
}
