<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutAdminController extends Controller
{
    public function index()
    {
        return view('admin.about.index');
    }
}
