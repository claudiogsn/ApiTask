<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orion\Concerns\DisablePagination;

class Task extends Model
{
    use HasFactory;
    use DisablePagination;
    protected $perPage = 0;

    protected $fillable = [
        'id',
        'title',
        'subject',
        'status',
    ];
}
