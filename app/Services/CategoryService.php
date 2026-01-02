<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    public function getAll()
    {
        return Category::with('items')->get();
    }

    public function find($id)
    {
        return Category::with('items')->findOrFail($id);
    }

    public function create(array $data)
    {
        return Category::create($data);
    }

    public function update($id, array $data)
    {
        $category = Category::findOrFail($id);
        $category->update($data);
        return $category;
    }

    public function delete($id)
    {
        $category = Category::findOrFail($id);
        return $category->delete();
    }
}
