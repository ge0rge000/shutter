<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
        'name',
        'contact',
        'message'
    ];
    use HasFactory;
}
