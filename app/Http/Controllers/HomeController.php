<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data=[
            'title'=>'GuestBook on Laravel 5.3',
            'pageTitle'=>'GuestBook'
        ];
        return view('pages.messages.index')->with($data);
    }

    public function edit()
    {
        $data=[
            'title'=>'Edit GuestBook on Laravel 5.3',
            'pageTitle'=>'Edit GuestBook'
        ];
        return view('pages.messages.edit')->with($data);
    }
}
