<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainpageController extends Controller
{


    public function index()
    {
        return view('main.index');
    }

    public function projects(){
        return view('main.projects');
    }

    public function project(){
        return view('main.project');
    }

    public function page()
    {
        return view('main.page');
    }

    public function contact()
    {
        return view('main.contact');
    }

    public function services()
    {
        return view('main.services');
    }

    public function service()
    {
        return view('main.service');
    }

    public function blog()
    {
        return view('main.blog');
    }

    public function post()
    {
        return view('main.post');
    }

    public function gallery()
    {
        return view('main.gallery');
    }


}
