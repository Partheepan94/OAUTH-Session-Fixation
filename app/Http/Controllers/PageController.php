<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Session;
use App\User;
use DB;
use Redirect;

class PageController extends Controller
{
    public function firstLogin()
    {
        $sessionId = uniqid();

        $insert=DB::table('sessions')->insert(['session' => $sessionId]);

        return Redirect::to('login/'. $sessionId);
    }

    public function login($id)
    { 
        return view('login', array('session' => $id));
    }

    public function register()
    {
        return view('register');
    }

    public function homepage($id)
    { 
        // Gets the session id and adds the session details to the homepage
        // $session = Session::where('session', $id)->first();
        // return view('homepage', array('session' => $id, 'status' => $session->status, 'name' => $session->name));

        //For demontration purposes
        return view('homepage', array('session' => $id, 'status' => true, 'name' => 'Test User'));
    }
}
