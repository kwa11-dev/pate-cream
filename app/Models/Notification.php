<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


/**
* Note: this model is named Notification and uses the "notifications" table.
* That name does not conflict with the framework's Notification classes due to namespacing,
* but if you prefer a different name (e.g. ShopNotification) tell me and I will rename it.
*/
class Notification extends Model
{
use HasFactory;


protected $table = 'notifications';


protected $fillable = [
'message',
'related_item',
];


public function item()
{
return $this->belongsTo(Item::class, 'related_item');
}
}