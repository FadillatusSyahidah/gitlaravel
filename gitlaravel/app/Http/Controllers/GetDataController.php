<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetDataController extends Controller
{
public function viewGetData(Request $request)
{
    echo '<h3>Metode GET</h3>';
    echo 'nama:'.$request->nama.'<br>';

    echo 'email:'.$request->email;
}
}
