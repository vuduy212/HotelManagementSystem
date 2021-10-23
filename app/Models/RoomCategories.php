<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomCategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'description',
        'images',
        'price'
    ];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    public function search(array $data)
    {
        $roomCategoryName = array_key_exists('key', $data) ? $data['key'] : null;

        return $this->SearchRoomCategoryName($roomCategoryName)->latest('id')->paginate(array_key_exists('number', $data) ? $data['number'] : 5);
    }

    public function scopeSearchRoomCategoryName($query, $roomCategoryName)
    {
        return $query->where('category_name', 'like', '%' . $roomCategoryName . '%');
    }
}
