<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class biodataController extends Controller
{
    public function index()
    {
        $nama = 'fadillatus syahidah';
        return view('biodata',['nama'=> $nama]);
    }
    public function biodata(){
        $nama = 'fadillatus syahidah';
        $umur = '19 years old';
        $hobi = ['mancing','tidur','main game'];
        return view('biodata',['nama'=> $nama, 'hobi' => $hobi, 'umur'=>$umur]);

    }
}
