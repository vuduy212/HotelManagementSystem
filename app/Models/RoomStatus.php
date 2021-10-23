<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class RoomStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_name',
        'status',
        'time',
    ];

    public function rooms()
    {
        return $this->belongsTo(Room::class);
    }

    public function saveStatus(Request $data)
    {
        $status = $this->create([
            'room_name' => $data['room_name'],
            'status' => $data['status'],
            'time' => $data['time'],
        ]);

        return $status;
    }

    public function search(array $data)
    {
        $roomStatusName = array_key_exists('key', $data) ? $data['key'] : null;

        return $this->SearchRoomStatusName($roomStatusName)->latest('id')->paginate(array_key_exists('number', $data) ? $data['number'] : 5);
    }

    public function scopeSearchRoomStatusName($query, $roomStatusName)
    {
        return $query->where('room_name', 'like', '%' . $roomStatusName . '%');
    }
}
