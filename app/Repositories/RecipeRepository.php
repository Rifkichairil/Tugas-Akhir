<?php

namespace App\Repositories;

use App\Models\Resep;

// use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class RecipeRepository.
 */
class RecipeRepository
{
    /**
     * @return string
     *  Return the model
     */

    public function first($Title)
    {
        $resep = Resep::whereId($Title)->firstOrFail();

        return $resep;
    }

    public function get()
    {
        $resep = Resep::paginate(9);
        return $resep;
    }
}
