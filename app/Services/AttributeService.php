<?php

namespace App\Services;

use App\Models\Attribute;
use App\Repositories\AttributeRepository;
use Illuminate\Support\Str;

class AttributeService
{
    public function __construct(
        private readonly AttributeRepository $attributeRepository
    )
    {
    }

    public function create(array $data): void
    {
        $this->attributeRepository->create(
            [
                'slug' => Str::slug($data['name']),
                'is_filterable' => 0,
                'is_required' => 0,
                'is_unique' => 0,
                'options' => explode(',', $data['options']),
                'name' => $data['name'],
                'type' => $data['type'],
            ]
        );
    }

    public function delete(int $id): void
    {
        $this->attributeRepository->find($id)->delete();
    }

    public function get(int $id): Attribute
    {
        return $this->attributeRepository->find($id);
    }

    public function update(array $data, $id): void
    {
        $this->attributeRepository->find($id)->update(
            [
                'slug' => Str::slug($data['name']),
                'is_filterable' => 0,
                'is_required' => 0,
                'is_unique' => 0,
                'options' => explode(',', $data['options']),
                'name' => $data['name'],
                'type' => $data['type'],
            ]
        );
    }
}
