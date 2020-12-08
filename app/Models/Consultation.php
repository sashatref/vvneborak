<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    protected $table = 'consultation';

    protected $fillable = ["enabled", "title", "content", "cost", "duration", "image_url"];
}
