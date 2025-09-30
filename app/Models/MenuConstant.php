<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuConstant extends Model
{
    protected $table = 'menu_constants';

    protected $fillable = [
        'keyName',
        'keyValue',
    ];

    public $timestamps = true;

    /**
     * Get a constant by key
     */
    public static function getValue(string $key): ?string
    {
        $record = self::where('keyName', $key)->first();
        return $record ? $record->keyValue : null;
    }
}
