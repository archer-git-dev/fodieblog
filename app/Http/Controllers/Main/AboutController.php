<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index() {
        return view('main.about');
    }
}
