<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flights extends Model
{
    use HasFactory;
    protected $table = 'flights';
    protected $primaryKey = 'id';
    protected $fillable = ['id','flight_number','date', 'etd', 'gate', 'flight_status', 'ac_id', 'current_seatmap', 'avai_seat', 'base_price'];
    public $timestamps = true;
}
