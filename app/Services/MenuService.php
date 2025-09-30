<?php

namespace App\Services;

use App\Models\MenuConstant;
use Illuminate\Support\Facades\DB;

class MenuService
{
    public function getAllConstants(): array
    {
        return [
            'merry_cream_first_flavor' => MenuConstant::getValue('merry_cream_first_flavor'),
            'merry_cream_second_flavor' => MenuConstant::getValue('merry_cream_second_flavor'),
            'facebook_url' => MenuConstant::getValue('facebook_url'),
            'instagram_url' => MenuConstant::getValue('instagram_url'),
            'whatsapp_url' => MenuConstant::getValue('whatsapp_url'),
        ];
    }

    public function createConstant(string $key, ?string $value = null): MenuConstant
    {
        return MenuConstant::create([
            'keyName' => $key,
            'keyValue' => $value,
        ]);
    }

    public function updateConstant(string $key, ?string $value = null): bool
    {
        return MenuConstant::where('keyName', $key)
            ->update(['keyValue' => $value]) > 0;
    }

    public function deleteConstant(string $key): bool
    {
        return MenuConstant::where('keyName', $key)->delete() > 0;
    }
}
