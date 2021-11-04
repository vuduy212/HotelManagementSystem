<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_name',
        'description',
        'category_name'
    ];

    public function status()
    {
        return $this->hasMany(RoomStatus::class);
    }

    public function categories()
    {
        return $this->belongsTo(RoomCategories::class);
    }

    public function saveRoom(Request $data)
    {
        $room = $this->create([
            'room_name' => $data['room_name'],
            'description' => $data['description'],
            'category_name' => $data['category_name'],
        ]);

        return $room;
    }

    public function search(array $data)
    {
        $roomName = array_key_exists('key', $data) ? $data['key'] : null;

        return $this->SearchRoomName($roomName)->latest('id')->paginate(array_key_exists('number', $data) ? $data['number'] : 5);
    }

    public function scopeSearchRoomName($query, $roomName)
    {
        return $query->where('room_name', 'like', '%' . $roomName . '%');
    }
}
