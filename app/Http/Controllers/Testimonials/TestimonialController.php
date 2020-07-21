<?php

namespace App\Http\Controllers\Testimonials;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.index',compact('testimonials'));
    }

    public function testimonialForm()
    {
        return view('admin.testimonial-form');
    }

    public function postTestimonial(Request $request)
    {
        if ($request->has('id') && $request->id !=null){
            $testimonial =Testimonial::find($request->id);
        }
        else{
            $testimonial = new Testimonial();
        }
        $testimonial->client_name = $request->client_name;
        $testimonial->client_business_position = $request->client_business_position;
        $testimonial->client_business_location = $request->client_business_location;
        $testimonial->client_testimonial = $request->client_testimonial;
        $testimonial->save();
        return redirect('/superbroom/admin')->with('status','Testimonial Saved Successfully');
    }

    public function editTestimonial(Testimonial $testimonial)
    {
        Session::flash('_old_input',$testimonial);
        return view('admin.testimonial-form');
    }

    public function deleteTestimonial(Testimonial $testimonial)
    {
        $testimonial->delete();
        return response()->json(['success']);

    }

}
