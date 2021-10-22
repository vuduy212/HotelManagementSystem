<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_name',
        'description',
    ];

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
