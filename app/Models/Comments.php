<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'title',
        'comment',
        'mem_id', // Lưu id của thằng A
        'reply_userid', // Lưu id của thằng B -> link tới bảng user
        'reply', // Lưu nội dung reply
        // 'reply_id', -> thay bằng comment_userID
        // 1 comment - 1reply
        // user A comment -> user B reply -> comment_userID = user ID của thằng B
        'created_at',
        'updated_at'
    
    ];
}
