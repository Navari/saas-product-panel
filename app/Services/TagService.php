<?php

namespace App\Services;

use App\Models\Tag;
use App\Repositories\TagRepository;
use Illuminate\Support\Str;

class TagService
{
    public function __construct(
        private readonly TagRepository $tagRepository
    ){}

    public function create(array $data): void
    {
        $this->tagRepository->create([
            'name' => $data['name'],
            'slug' => Str::slug($data['name']),
            'color' => $data['color'],
        ]);
    }

    public function get(int $id): Tag
    {
        return $this->tagRepository->find($id);
    }

    public function update(array $data, int $id): void
    {
        $this->tagRepository->find($id)->update([
            'name' => $data['name'],
            'slug' => Str::slug($data['name']),
            'color' => $data['color'],
        ]);
    }

    public function delete(int $id): void
    {
        $this->tagRepository->find($id)->delete();
    }
}
