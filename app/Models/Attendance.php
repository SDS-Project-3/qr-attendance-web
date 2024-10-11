<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'hex_ref',
        'module_code',
        'module_date',
        'period',
        'full_name',
        'student_id',
    ];
}
