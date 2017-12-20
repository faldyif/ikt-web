<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class TestController extends Controller
{
    public function test()
    {
        global $results;
        $results = News::find(1)->translate('id');

        return strip_tags($results->content);
    }
}
