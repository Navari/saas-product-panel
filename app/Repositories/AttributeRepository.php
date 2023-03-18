<?php

namespace App\Repositories;

use App\Models\Attribute;

class AttributeRepository extends BaseRepository
{
    protected static string $model = Attribute::class;

    public function getAttributesByCategoryId(int $categoryId): array
    {
        return $this->where('category_id', $categoryId)->get()->toArray();
    }
}
