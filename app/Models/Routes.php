<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routes extends Model
{
    use HasFactory;
    protected $table = 'route';
    protected $fillable = ['origin','depart_time', 'duration'];
    
    public $timestamps = false;
}
