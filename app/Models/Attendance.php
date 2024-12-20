<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attendance extends Model{
    use HasFactory;

    protected $table = 'attendance';

    protected $fillable = [
        'hex_ref',
        'full_name',
        'student_id',
        'student_name',
        'student_email',
        'attendance_date',
        'present',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'student_id');
    }
}

