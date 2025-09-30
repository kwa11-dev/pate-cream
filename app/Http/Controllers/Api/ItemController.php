<?php

namespace App\Http\Controllers\Api;

use App\Services\ItemService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    protected $itemService;

    public function __construct(ItemService $itemService)
    {
        $this->itemService = $itemService;
    }

    public function index()
    {
        return response()->json($this->itemService->getAll());
    }

    public function show($id)
    {
        return response()->json($this->itemService->find($id));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|numeric|min:0',
            'is_sale'     => 'boolean',
            'sale_price'  => 'nullable|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'image'       => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images/items', 'public');
        }

        $item = $this->itemService->create($data);

        return response()->json($item, 201);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name'        => 'sometimes|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'sometimes|numeric|min:0',
            'is_sale'     => 'boolean',
            'sale_price'  => 'nullable|numeric|min:0',
            'category_id' => 'sometimes|exists:categories,id',
            'image'       => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images/items', 'public');
        }
        $item = $this->itemService->update($id, $data);

        return response()->json($item);
    }

    public function destroy($id)
    {
        $this->itemService->delete($id);
        return response()->json(null, 204);
    }
}
