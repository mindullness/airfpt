<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infants extends Model
{
    use HasFactory;
    protected $table = 'infants';
    protected $fillable = ['first_name', 'last_name', 'dob'];
    public $timestampe = false;
}
