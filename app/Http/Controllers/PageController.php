<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function workIndex()
    {
        return view('work.index');
    }

    public function work1()
    {
        return view('work.work1');
    }

    public function work2()
    {
        return view('work.work2');
    }

    public function work3()
    {
        return view('work.work3');
    }

    public function contact()
    {
        return view('contact');
    }

    public function certificate()
    {
        return view('certificate');
    }
}
