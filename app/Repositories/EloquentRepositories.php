<?php

namespace App\Repositories;

use App\Models\Resep;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class EloquentRepositories.
 */
class EloquentRepositories implements SearchRepositories
{
    // enter yoour code
    public function search(string $query = ''): Collection
    {
        return Resep::query()
            ->where('Title', 'like', "%{$query}%")
            ->orWhere('Ingredients', 'like', "%{$query}%")
            ->get();
    }
}
