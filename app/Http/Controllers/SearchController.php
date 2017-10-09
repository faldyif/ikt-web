<?php

namespace App\Http\Controllers;

use App\News;
use App\NewsTranslation;
use App\PressRelease;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $this->validate($request, [
            'q' => 'required'
        ]);

        $newsResults = NewsTranslation::where('locale', App::getLocale())
            ->where('content', 'LIKE', '%' . $request->q . '%')
            ->orWhere('title', 'LIKE', '%' . $request->q . '%')
            ->get();
        $pressReleaseResults = PressRelease::where('content', 'LIKE', '%' . $request->q . '%')
            ->orWhere('title', 'LIKE', '%' . $request->q . '%')
            ->get();

        $newsResultsCount = NewsTranslation::where('locale', App::getLocale())
            ->where('content', 'LIKE', '%' . $request->q . '%')
            ->orWhere('title', 'LIKE', '%' . $request->q . '%')
            ->get()->count();
        $pressReleaseResultsCount = PressRelease::where('content', 'LIKE', '%' . $request->q . '%')
            ->orWhere('title', 'LIKE', '%' . $request->q . '%')
            ->get()->count();
        return view('search-view')
            ->with('q', $request->q)
            ->with('newsResults', $newsResults)
            ->with('pressReleaseResults', $pressReleaseResults)
            ->with('newsResultsCount', $newsResultsCount)
            ->with('pressReleaseResultsCount', $pressReleaseResultsCount);
    }
}
