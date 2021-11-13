<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_name',
        'description',
        'category_id'
    ];

    public function status()
    {
        return $this->hasMany(RoomStatus::class);
    }

    public function categories()
    {
        return $this->belongsTo(RoomCategories::class, 'category_id');
    }

    public function saveRoom(Request $data)
    {
        $room = $this->create([
            'room_name' => $data['room_name'],
            'description' => $data['description'],
            'category_id' => $data['category_id'],
        ]);

        return $room;
    }

    public function search(array $data)
    {
        $roomName = array_key_exists('key', $data) ? $data['key'] : null;
        $category = array_key_exists('filter_category', $data) ? $data['filter_category'] : null;

        return $this
                    ->SearchRoomName($roomName)
                    ->WhereHasCategory($category)
                    ->latest('id')
                    ->paginate(array_key_exists('number', $data) ? $data['number'] : 2);
    }

    public function scopeSearchRoomName($query, $roomName)
    {
        return $query->where('room_name', 'like', '%' . $roomName . '%');
    }

    public function scopeWhereHasCategory($query, $category)
    {
        return $query->where('category_id', 'like', '%' . $category . '%');
    }
}
