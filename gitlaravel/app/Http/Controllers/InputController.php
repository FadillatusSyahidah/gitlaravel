<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    public function viewPostData()
    {
        return view('input');
    }

public function processPostData(Request $request)
{
    echo 'nama:'.$request->nama. '<br>';
    echo 'email:'.$request->email;
}
}
