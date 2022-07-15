<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table = 'member';

    protected $primaryKey = 'id';

    protected $fillable = ['title','first_name','last_name','username','password','role','points','discount_rate_id','email','phone'];
    
    public $timestamps = true;
}
