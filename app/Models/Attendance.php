<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model{
    use HasFactory;

    protected $table = 'attendance';
    
    protected $fillable = [
        'hex_ref',
        'full_name',
        'student_id',
    ];
}
