<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomBill extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_name',
        'ID_card',
        'phone',
        'email',
        'address',
        'payment_method',
        'total_money',
        'bill_status',
        'created_at'
    ];
}
