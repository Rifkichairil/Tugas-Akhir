<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class recipe extends Model
{
    //
    # Code
    use SoftDeletes;

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var array
     */
    protected $keyType = 'int';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'recipe';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'loves', 'ingredients', 'steps', 'URL', 'created_at'
    ];

    // public function menus()
    // {
    //     return $this->belongsToMany('App\Models\Menu', 'menu_bahan', 'menu_id', 'bahan_id');
    // }
}
