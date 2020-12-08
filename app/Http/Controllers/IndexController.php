<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\GalleryPage;
use App\Models\Review;
use App\Models\Service;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view("index", [
            "consultArr" => Consultation::where("enabled", true)->get(),
            "reviewArr" => Review::where("enabled", true)->get(),
            "serviceArr" => Service::where("enabled", true)->get(),
            "galleryPageArr" => GalleryPage::where("enabled", true)->with("childrenPhotos")->get()
        ]);
    }
}
