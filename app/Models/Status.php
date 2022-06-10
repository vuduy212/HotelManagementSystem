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
        'checkin',
        'checkout',
    ];

    public function rooms()
    {
        return $this->belongsTo(Room::class);
    }

    public function saveStatus(Request $data)
    {
        $status = $this->create([
            'room_id' => $data['room_id'],
            'checkin' => $data['checkin'],
            'checkout' => $data['checkout'],
        ]);

        return $status;
    }

    public function search_by_checkin_checkout($checkin, $checkout)
    {
        $query1 = 'select *, r.id as room_id from rooms r
                    join room_categories rc on r.category_name = rc.category_name
                    and r.room_name not in';
        $query2 = 'select r.room_name from rooms r
                    join reservations r1 on r.room_name = r1.room_name
                    join room_categories rc on r.category_name = rc.category_name
                    where ((r1.checkin <= ' . '\'' . $checkin . '\' and ' . '\'' . $checkin . '\'' . ' < r1.checkout) or (r1.checkin < ' . '\'' . $checkout  . '\' and ' . '\'' . $checkout . '\'' . ' <= r1.checkout))';
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

    public function reservationDuplicate($room_name, $checkin, $checkout)
    {
        $query = 'select * from rooms r
                    join reservations r1 on r.room_name = r1.room_name
                    where r.room_name = ' . '\'' . $room_name . '\'' . '
                    and ((r1.checkin <= ' . '\'' . $checkin . '\' and ' . '\'' . $checkin . '\'' . ' < r1.checkout) or (r1.checkin < ' . '\'' . $checkout  . '\' and ' . '\'' . $checkout . '\'' . ' <= r1.checkout))';
        $result = DB::select($query);
        return $result;
    }

    public function checkReservationDuplicated($room_name, $checkin, $checkout)
    {
        $data = $this->reservationDuplicate($room_name, $checkin, $checkout);
        if ($data != []) {
            return true;
        } else {
            return false;
        }
    }

    public function listConflictRoom($category, $checkInTime, $checkOutTime)
    {
        $query = 'select room_id from statuses s
                    join rooms r on s.room_id = r.id
                    join room_categories rc on r.category_name = rc.category_name
                    where category_id = ' . $category
            . ' and (\'' . $checkInTime . '\' < checkin < \'' . $checkOutTime . '\' or \'' . $checkInTime . ' \' < checkout < \'' . $checkOutTime . '\')';
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
                    and (\'' . $checkInTime . '\' < checkin < \'' . $checkOutTime . '\' or \'' . $checkInTime . ' \' < checkout < \'' . $checkOutTime . '\')';
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
