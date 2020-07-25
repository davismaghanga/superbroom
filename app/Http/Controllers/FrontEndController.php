<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function welcome()
    {
        $testimonials  = Testimonial::all();
        return view('welcome',compact('testimonials'));
    }
}
