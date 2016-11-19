<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
class HomeController extends Controller
{
    public function index()
    {
        $data=[
            'title'=>'GuestBook on Laravel 5.3',
            'pageTitle'=>'GuestBook',
            'messages'=>Message::orderBy('updated_at','desc')->paginate(1),
            'count'=>Message::count()
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
