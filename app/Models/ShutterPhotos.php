<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shutter;
use App\Models\PhotosCategory;

class ShutterPhotos extends Model
{
    protected $fillable = [
        'shutter_id',
        'category_id',
        'image_url',
    ];
    public function shutter()
    {
        return $this->belongsTo(Shutter::class);
    }

    public function category()
    {
        return $this->belongsTo(PhotosCategory::class);
    }
    use HasFactory;
}
