<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TwitterLoginController extends Controller
{
    public function index()
    {
        return view('admin.twitter.login');
    }
}
