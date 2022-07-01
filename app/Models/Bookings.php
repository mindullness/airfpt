<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;
    protected $table = 'bookings';
    protected $primaryKey = 'id';
    protected $fillable = ['PNR','flight_id', 'mem_id', 'title', 'first_name', 'last_name', 'gender', 'inf_id', 'seat_no', 'boarding_pass', 'status', 'mobile', 'email', 'price'];
    public $timestamps = true;
}
