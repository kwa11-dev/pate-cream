<?php

namespace App\Services;

use App\Models\AdminUser;
use Illuminate\Support\Facades\Hash;

class AdminUserService
{
    public function findByEmail($email)
    {
        return AdminUser::where('email', $email)->first();
    }

    public function create(array $data)
    {
        $data['password'] = Hash::make($data['password']);
        return AdminUser::create($data);
    }
}
