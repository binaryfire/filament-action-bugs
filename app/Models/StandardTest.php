<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StandardTest extends Model
{
    use HasFactory;

    protected $fillable = [
        'options',
    ];

    protected $casts = [
        'options' => 'array',
    ];    
}
