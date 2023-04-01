<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\NewsArticle;

class DashboardController extends Controller
{
    public function index()
    {
        $json = Storage::get('tokyo_tomorrow.json');

        if ($json === false) {
            return view('dashboard', ['newsArticles' => []]);
        }

        $newsArticles = json_decode($json, true);

        if ($newsArticles === null) {
            return view('dashboard', ['newsArticles' => []]);
        }

        return view('dashboard', compact('newsArticles'));
    }
}


// class DashboardController extends Controller
// {
//     //
// }
