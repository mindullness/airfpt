<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aircrafts extends Model
{
    use HasFactory;
    protected $table = 'aircrafts';
    protected $fillable = ['reg','config', 'type'];
    public $timestamps = true;
}
