<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resep;
use App\Http\Controllers\Controller;
use App\Models\ResepMasakan;
use App\Repositories\SearchRepositories;
use App\Repositories\RecipeRepository;
use Illuminate\Support\Facades\Http;


class SearchController extends Controller
{


    public function elasticsearch(Request $request)
    {
        $q = $request->get('q');

        $data = Http::get('http://localhost:9200/resep_banget/_search?q=' . $q)->json();
        // $resep = ResepMasakan::search($q)->paginate(15);
        $hits = $data['hits'];

        return view('main.pages.search', compact('q', 'data', 'hits'));
    }
}
