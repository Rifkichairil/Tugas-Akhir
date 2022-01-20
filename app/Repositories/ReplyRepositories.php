<?php

namespace App\Repositories;

use App\Models\Reply;
use App\Models\ResepMasakan;
use Illuminate\Support\Facades\DB;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class ReplyRepositories.
 */
class ReplyRepositories extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function get()
    {
        $reply = Reply::get();

        return $reply;
    }

    public function save($req, $id)
    {
        $resep = ResepMasakan::where('id', $id)->first();

        DB::beginTransaction();
        try {
            $reply = Reply::create([
                'name'     => $req->name,
                'content'  => $req->content,
                'reply_id' => $req->reply_id,
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
        DB::commit();

        return true;
    }
}
