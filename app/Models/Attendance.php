<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model{
    use HasFactory;

    protected $table = 'attendance';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = [
        'hex_ref',
        'full_name',
        'student_id',
    ];
    

    protected $primaryKey = ['hex_ref', 'id'];
}
