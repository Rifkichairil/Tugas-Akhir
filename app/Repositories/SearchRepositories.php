<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
//use Your Model

/**
 * Class SearchRepositories.
 */
interface SearchRepositories
{
    public function search(string $query = ''): Collection;
}
