<?php

namespace App\Repositories;

use Illuminate\Support\Facades\App;

/**
 * @method find(int $int)
 * @method create(array $array)
 * @method delete()
 */

abstract class BaseRepository
{
    protected static string $model;

    public function __call(string $name, array $arguments)
    {
        return App::make(static::$model)->{$name}(...$arguments);
    }

    public function findBy(array $parameters): ?object
    {
        return $this->where($parameters)->first();
    }

}
