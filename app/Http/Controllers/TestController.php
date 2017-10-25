<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class TestController extends Controller
{
    public function test()
    {
        global $results;
        $results = Excel::load('test_1.xls', function($reader) {
        })->get();

        return json_encode($results);
    }
}
