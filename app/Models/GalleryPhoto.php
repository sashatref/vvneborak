<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryPhoto extends Model
{
    use HasFactory;

    protected $table = 'gallery_photo';

    protected $fillable = ["image_url", "gallery_page_id", "enabled"];
}
