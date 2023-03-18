<?php

namespace App\Services;

use App\Models\Brand;
use App\Repositories\BrandRepository;
use Illuminate\Support\Str;

class BrandService
{
    public function __construct(
        private readonly BrandRepository $brandRepository
    ){}

    public function create(array $data): void
    {
        $this->brandRepository->create([
            'name' => $data['name'],
            'slug' => Str::slug($data['name'])
        ]);
    }

    public function get(int $id): Brand
    {
        return $this->brandRepository->find($id);
    }

    public function update(array $data, int $id): void
    {
        $this->brandRepository->find($id)->update($data);
    }

    public function delete(int $id): void
    {
        $this->brandRepository->find($id)->delete();
    }
}
