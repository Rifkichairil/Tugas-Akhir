<?php

namespace App\Http\Controllers;

use App\Models\ResepMasakan;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RatingController extends Controller
{
    public function storeRating(Request $req, $id)
    {
        $resep     = ResepMasakan::where('id', $id)->first();
        $ip        = request()->ip();

        DB::beginTransaction();
        try {
            $rating = Rating::create([
                'ip'               => $ip,
                'resep_masakan_id' => $resep->id,
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
        DB::commit();

        return redirect()->route('main.detail', $resep->id);
    }
}
