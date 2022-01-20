<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Elasticquent\ElasticquentTrait;



class Resep extends Model
{
    // Enter your code below
    use ElasticquentTrait;

    //
    # Code

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'resep';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Title', 'Loves', 'Ingredients', 'Steps', 'URL'
    ];

    protected $mappingProperties = array(
        'Title' => [
            'type' => 'string',
            "analyzer" => "standard",
        ],
        'Loves' => [
            'type' => 'string',
            "analyzer" => "standard",
        ],
        'Ingredients' => [
            'type' => 'string',
            "analyzer" => "standard",
        ],
        'Steps' => [
            'type' => 'string',
            "analyzer" => "standard",
        ],
        'URL' => [
            'type' => 'string',
            "analyzer" => "standard",
        ],
    );
}
