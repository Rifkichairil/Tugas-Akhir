<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use ScoutElastic\Searchable;

class ResepMasakan extends Model
{
    //
    // use Searchable;

    protected $keyType = 'bigint';


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'resep_masakan';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $indexConfigurator = ProductIndexConfigurator::class;

    protected $fillable = [
        'id', 'Title', 'Loves', 'Ingredients', 'Steps', 'URL', 'created_at'
    ];

    protected $mapping = [
        'properties' => [
            'Title' => [
                'type' => 'text',
                'analyzer' => 'ngram_tokenizer_analyzer',
                // 'search_analyzer' => 'autocomplete_search'
            ],
            'Loves' => [
                'type' => 'long',
            ],
            'Ingredients' => [
                'type' => 'text',
                'analyzer' => 'ngram_tokenizer_analyzer',
                // 'search_analyzer' => 'autocomplete_search'
            ],
            'Steps' => [
                'type' => 'text',
                'analyzer' => 'standard'
            ],
            'URL' => [
                'type' => 'keyword',
            ],
        ]
    ];
}
