<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ShutterPhotos;
class PhotosCategory extends Model
{
    protected $fillable = [
        'name',
    ];
    public function photos()
    {
        return $this->hasMany(ShutterPhotos::class, 'category_id');
    }
    use HasFactory;
}
