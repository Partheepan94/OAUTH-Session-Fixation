<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Session;
use App\User;
use DB;
use Redirect;

class LoginController extends Controller
{
    protected $namespace = 'App\Http\Controllers';

    public function login(Request $request)
    {
        $input = $request->all();
       
        // $user = User::where('email',$input['email'])->first();

        // if ($user->password == $input['password'])
        // {
        //     $session = Session::where('session', $input['sessionId'])->first();
        //     $session->status = true;
        //     $session->name = $user->name;
        //     $session->save();
        //     return Redirect::to('homepage/'. $input['sessionId']);
        // }
        // else
        // {
        //     return Redirect::to('firstLogin');
        // }

        // For demonstration purposes
        return Redirect::to('homepage/'. $input['sessionId']);
    }
}
