<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ShutterPhotos;
use Illuminate\Support\Str;

class Shutter extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'name',
        'tag',
        'desc',
        'desc_out',
        'name_out',
        'features',
        'key_features',
    ];

    public function photos()
    {
        return $this->hasMany(ShutterPhotos::class);
    }
}
