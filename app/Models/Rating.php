<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    //
    protected $keyType = 'bigint';

    protected $table = 'rating';

    protected $fillable = ['ip', 'resep_masakan_id', 'created_at'];

    public function resep()
    {
        return $this->belongsTo('App\Models\ResepMasakan', 'resep_masakan_id');
    }
}
