<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryPage extends Model
{
    use HasFactory;

    protected $table = 'gallery_page';

    protected $fillable = ["enabled"];

    public function childrenPhotos()
    {
        return $this->hasMany(GalleryPhoto::class, "gallery_page_id", "id")
            ->where("enabled", true);
    }
}
