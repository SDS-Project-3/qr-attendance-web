<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Authenticatable
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = [
        'student_id',
        'student_name',
        'student_email',
        'student_password',
    ];


    public function attendances()
    {
        return $this->hasMany(Attendance::class, 'student_id', 'student_id');
    }

    public function getAuthPassword(){
        return $this->student_password;  // Change 'lecturer_password' to your actual field name
    }
}
