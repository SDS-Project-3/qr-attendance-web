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
        'password',
    ];


    public function attendances()
    {
        return $this->hasMany(Attendance::class, 'student_id', 'student_id');
    }
}
