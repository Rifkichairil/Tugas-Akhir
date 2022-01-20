<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    //
    protected $keyType = 'bigint';

    protected $table = 'reply';

    protected $fillable = ['name', 'comment', 'reply_id', 'resep_masakan_id', 'created_at'];

    public function resep()
    {
        return $this->belongsTo('App\Models\ResepMasakan', 'resep_masakan_id');
    }
}
