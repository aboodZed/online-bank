<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    protected $pirmaryKey = 'id';
    public $incrementing = false;
    
    protected $fillable = [
        'id',
        'number',
    ];
}
