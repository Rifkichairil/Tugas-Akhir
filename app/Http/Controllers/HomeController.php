<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use App\Models\Reply;
use App\Repositories\RecipeRepository;
use App\Http\Controllers\Controller;
use App\Models\ResepMasakan;
use Illuminate\Http\Request;;

use PDF;
use Illuminate\Support\Facades\Http;

use PhpParser\ErrorHandler\Collecting;

class HomeController extends Controller
{

    protected $recipeRepository;

    public function __construct(RecipeRepository $recipeRepository)
    {
        $this->recipeRepository = $recipeRepository;
    }

    public function index()
    {
        $resep = ResepMasakan::paginate(9);
        return view('main.pages.home', compact('resep'));
    }

    public function detail($id)
    {

        $resep  = ResepMasakan::where('id', $id)->firstOrFail();
        $rating = Rating::where('resep_masakan_id', $id)->count();


        return view('main.pages.detail', compact('resep', 'rating'));
    }

    public function invoicepdf($id)
    {
        $resep = ResepMasakan::where('id', $id)->firstOrFail();
        $pdf = PDF::loadView('main.pages.invoice', compact('resep'));
        return $pdf->stream('Resep-Masakan', $id);
    }
}
