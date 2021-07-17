<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            "title" => "About",
            "name" => "Azhe-kun",
            "email" => "admin@azhe.my.id",
            "quotes" => "On Error Resume Next"
        ]);
    }
}
