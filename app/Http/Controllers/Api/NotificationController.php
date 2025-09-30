<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\NotificationService;

class NotificationController extends Controller
{
    protected $notificationService;

    public function __construct(NotificationService $notificationService)
    {
        $this->notificationService = $notificationService;
    }

    public function index()
    {
        return response()->json($this->notificationService->getAll());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'message' => 'required|string',
            'related_item' => 'nullable|exists:items,id',
        ]);
        return response()->json($this->notificationService->create($data), 201);
    }
}
