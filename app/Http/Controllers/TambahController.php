<?php

namespace App\Http\Controllers;

use App\Models\ResepMasakan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;



class TambahController extends Controller
{
    //
    public function create()
    {
        return view('main.pages.create');
    }

    public function store(Request $req)
    {
        $endpoint   = "http://localhost:9200/resep_banget/_doc/";
        $random1    = Str::random(8);
        $random2    = Str::random(11);
        $rand       = mt_rand(1000, 9999);;

        // dd($rand);
        $datas = $req->all();

        $data = Http::put($endpoint . $random1 . '-' . $random2, [
            'id'    => "$rand",
            'Title' => $req->Title,
            'Ingredients' => $req->Ingredients,
            'Steps' => $req->Steps,
            'Loves' => 0,
            'URL'   => NULL
        ])->json();
        // $data = Http::put($endpoint . $random1 . '-' . $random2, $datas)->json();

        $resep = ResepMasakan::create([
            'id'    => $rand,
            'Title' => $req->Title,
            'Ingredients' => $req->Ingredients,
            'Steps' => $req->Steps,
            'Loves' => 0,
            'URL'   => NULL
        ]);

        // dd($random1);

        return redirect()->route('main.home');
    }
}
