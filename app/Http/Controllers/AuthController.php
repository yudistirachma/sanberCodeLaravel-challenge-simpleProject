<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form()
    {
        return view('form');
    }
    public function show(Request $request)
    {
        return view('welcome', ["firstname" => $request['firstname'], "lastname" => $request['lastname']]);
    }
}
