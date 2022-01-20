<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reply;
use App\Models\ResepMasakan;
use Illuminate\Support\Facades\DB;

class ReplyController extends Controller
{
    //
    public function storeComment(Request $req, $id)
    {
        $resep     = ResepMasakan::where('id', $id)->first();

        DB::beginTransaction();
        try {
            $reply = Reply::create([
                'name'             => $req->name,
                'comment'          => $req->comment,
                'resep_masakan_id' => $resep->id
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
        DB::commit();

        return redirect()->route('main.detail', $resep->id);
    }
}
