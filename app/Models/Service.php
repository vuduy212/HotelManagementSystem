<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'service_name',
        'description',
        'image',
    ];

    public function room_categories()
    {
        return $this->belongsToMany(RoomCategories::class, 'room_category_service', 'service_id', 'category_id');
    }
}
