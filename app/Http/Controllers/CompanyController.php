<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index() {
        return view('about');
    }
    public function blog() {
        return view('blog');
    }
    public function blogDetail() {
        return view('blogDetail');
    }
    public function join() {
        return view('join');
    }
    public function become() {
        return view('become');
    }
    public function become_post() {
        return view('become');
    }
}
