<?php

namespace App\Models;

use ScoutElastic\IndexConfigurator;
use ScoutElastic\Migratable;

class ProductIndexConfigurator extends IndexConfigurator
{
    use Migratable;

    /**
     * @var array
     */
    protected $settings = [
        //
        'analysis' => [
            'filter' => [
                'ngram_tokenizer' => [
                    'type' => 'edge_ngram',
                    'min_gram' => '2',
                    'max_gram' => '7',
                    'operator' => 'AND'
                ]
            ],

            'analyzer' => [
                'ngram_tokenizer_analyzer' => [
                    'type' => 'custom',
                    'tokenizer' => 'standard',
                    'filter' => [
                        'lowercase',
                        'ngram_tokenizer'
                    ]
                ],

                'search_ngram' => [
                    'type' => 'custom',
                    'tokenizer' => 'keyword',
                    'filter' => 'lowercase'
                ]
            ]
        ],
    ];
}
