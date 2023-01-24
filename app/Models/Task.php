<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'eventName', 'category', 'startDate', 'endDate', 'startTime', 'endTime', 'description', 'image'
    ];
}
