<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'subject',
        'user_create',
        'user_responsible',
        'status',
        'created_at',
        'updated_at',
        'user_update',
    ];
}
