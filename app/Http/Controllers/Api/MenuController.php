<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\MenuService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    protected MenuService $menuService;

    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }

    public function getAll(): JsonResponse
    {
        return response()->json($this->menuService->getAllConstants());
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'keyName' => 'required|string|unique:menu_constants,keyName',
            'keyValue' => 'nullable|string',
        ]);

        $constant = $this->menuService->createConstant($validated['keyName'], $validated['keyValue'] ?? null);

        return response()->json($constant, 201);
    }

    public function update(Request $request, string $key): JsonResponse
    {
        $validated = $request->validate([
            'keyValue' => 'nullable|string',
        ]);

        $updated = $this->menuService->updateConstant($key, $validated['keyValue'] ?? null);

        if (! $updated) {
            return response()->json(['message' => 'Key not found'], 404);
        }

        return response()->json(['message' => 'Updated successfully']);
    }

    public function destroy(string $key): JsonResponse
    {
        $deleted = $this->menuService->deleteConstant($key);

        if (! $deleted) {
            return response()->json(['message' => 'Key not found'], 404);
        }

        return response()->json(['message' => 'Deleted successfully']);
    }

    public function updateMultiple(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'constants' => 'required|array',
            'constants.*' => 'nullable|string',
        ]);

        $updatedCount = 0;

        foreach ($validated['constants'] as $key => $value) {
            $updated = $this->menuService->updateConstant($key, $value);
            if ($updated) {
                $updatedCount++;
            }
        }

        return response()->json([
            'message' => "Successfully updated {$updatedCount} constants",
            'updated_count' => $updatedCount
        ]);
    }
}
