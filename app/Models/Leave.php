<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;  
    protected $fillable = [
        'emp_id',
        'factory_name',
        'date1',
        'date2',
        'reason',
        'reason_text',
        'description',
        'status',
        ];
}
