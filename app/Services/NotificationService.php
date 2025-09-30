<?php

namespace App\Services;

use App\Models\Notification;

class NotificationService
{
    public function getAll()
    {
        return Notification::with('item')->get();
    }

    public function create(array $data)
    {
        return Notification::create($data);
    }
}
