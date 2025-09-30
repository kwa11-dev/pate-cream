<?php

namespace App\Http\Controllers\Api;

use App\Services\CategoryService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        return response()->json($this->categoryService->getAll());
    }

    public function show($id)
    {
        return response()->json($this->categoryService->find($id));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'  => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images/categories', 'public');
        }

        $category = $this->categoryService->create($data);

        return response()->json($category, 201);
    }

    public function update(Request $request, $id)
    {
                //dd(json_encode($request->all()));

        $data = $request->validate([
            'name'  => 'sometimes|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images/categories', 'public');
        }

        $category = $this->categoryService->update($id, $data);
        return response()->json($category);
    }

    public function destroy($id)
    {
        $this->categoryService->delete($id);
        return response()->json(null, 204);
    }
}
