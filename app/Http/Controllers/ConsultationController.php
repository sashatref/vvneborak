<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function enumView(Request $request)
    {
        return Consultation::where("enabled", "true");
    }
}
