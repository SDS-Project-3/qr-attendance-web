<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceReference extends Model
{
    use HasFactory;

    protected $fillable = [
        'hexa_reference',
        'module_code',
        'module_date',
        'period',
    ];
}
