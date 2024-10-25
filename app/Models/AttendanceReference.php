<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceReference extends Model
{
    use HasFactory;

    protected $table = 'attendance_ref';
    protected $primaryKey = 'hexa_reference';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'hexa_reference',
        'module_code',
        'module_date',
        'period',
    ];
}
