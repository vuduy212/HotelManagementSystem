<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'check_in',
        'check_out',
    ];

    public function rooms()
    {
        return $this->belongsTo(Room::class);
    }

    public function saveStatus(Request $data)
    {
        $status = $this->create([
            'room_id' => $data['room_id'],
            'check_in' => $data['check_in'],
            'check_out' => $data['check_out'],
        ]);

        return $status;
    }

    public function search_by_checkin_checkout($checkInTime, $checkOutTime)
    {
        $query1 = 'select *, r.id as room_id from rooms r
                    join room_categories rc on r.category_id = rc.id
                    and r.id not in';
        $query2 = 'select room_id from statuses s
                    join rooms r on s.room_id = r.id
                    join room_categories rc on r.category_id = rc.id
                    where (\'' . $checkInTime . '\' < check_in < \'' . $checkOutTime . '\' or \'' . $checkInTime . ' \' < check_out < \'' . $checkOutTime . '\')';
        $result = DB::select($query1 . ' (' . $query2 . ')');
        return $result;
    }

    public function searchByTimeInput(array $data)
    {
        $checkInTime = array_key_exists('checkin', $data) ? $data['checkin'] : null;
        $checkOutTime = array_key_exists('checkout', $data) ? $data['checkout'] : null;

        return $this
            ->search_by_checkin_checkout($checkInTime, $checkOutTime);
        // ->latest('id')
        // ->paginate(array_key_exists('number', $data) ? $data['number'] : 5);
    }

    public function listConflictRoom($category, $checkInTime, $checkOutTime)
    {
        $query = 'select room_id from statuses s
                    join rooms r on s.room_id = r.id
                    join room_categories rc on r.category_id = rc.id
                    where category_id = ' . $category
            . ' and (\'' . $checkInTime . '\' < check_in < \'' . $checkOutTime . '\' or \'' . $checkInTime . ' \' < check_out < \'' . $checkOutTime . '\')';
        $result = DB::select($query);
        return $result;
    }

    public function listSuitableRoom($category, $checkInTime, $checkOutTime)
    {
        $query1 = 'select * from rooms r
                    join room_categories rc on r.category_id = rc.id
                    where category_name like \'%' . $category . '%\'
                    and r.id not in';
        $query2 = 'select room_id from statuses s
                    join rooms r on s.room_id = r.id
                    join room_categories rc on r.category_id = rc.id
                    like \'%' . $category . '%\'
                    and (\'' . $checkInTime . '\' < check_in < \'' . $checkOutTime . '\' or \'' . $checkInTime . ' \' < check_out < \'' . $checkOutTime . '\')';
        $result = DB::select($query1 . ' (' . $query2 . ')');
        return $result;
    }

    public function scopeFilterByStatus($query, $filterStatus)
    {
        return $query->where('status', 'like', '%' . $filterStatus . '%');
    }

    public function scopeWhereHasRoom($query, $room)
    {
        return $query->where('room_id', 'like', '%' . $room . '%');
    }
}
