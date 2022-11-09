<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class AdminTestimonialController extends Controller
{
    public function index()
    {
        $all_testimonial = Testimonial::orderBy('id', 'desc')->get();
        return view('Admin.testimonial_show', compact('all_testimonial'));
    }

    public function testimonial_create()
    {
        return view('Admin.testimonial_create');
    }

    public function testimonial_store(Request $request)
    {
        $request->validate([
           'name' => 'required',
           'designation' => 'required',
           'comment' => 'required',
           'photo' => 'required|image|mimes:jpg,png,jpeg,svg,gif'
        ]);

        $testimonial = new Testimonial();

        $now = time();
        $ext = $request->file('photo')->extension();
        $final_name = 'testimonial_photo_'. $now . '.' . $ext;
        $request->file('photo')->move(public_path('uploads/'), $final_name);
        $testimonial->photo = $final_name;

        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->comment = $request->comment;
        $testimonial->save();

        return redirect()->route('admin_testimonial_show')->with('success', 'Testimonial Saved Successfully.');

    }

    public function testimonial_edit($id)
    {
        $testimonial_single = Testimonial::where('id', $id)->first();
        return view('Admin.testimonial_edit', compact('testimonial_single'));
    }

    public function testimonial_update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'comment' => 'required'
        ]);


        $testimonial = Testimonial::where('id', $id)->first();

        if ($request->hasFile('photo')) {

            $request->validate([
                'photo' => 'image|mimes:jpg,png,jpeg,svg,gif'
            ]);

            if (file_exists(public_path('uploads/' . $testimonial->photo)) && $testimonial->photo != NULL) {
                unlink(public_path('uploads/' . $testimonial->photo));
            }

            $now = time();
            $ext = $request->file('photo')->extension();
            $final_name = 'testimonial_photo_'. $now . '.' . $ext;
            $request->file('photo')->move(public_path('uploads/'), $final_name);
            $testimonial->photo = $final_name;
        }

        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->comment = $request->comment;
        $testimonial->update();

        return redirect()->route('admin_testimonial_show')->with('success', 'Testimonial Updated Successfully.');

    }

    public function testimonial_delete($id)
    {
        $testimonial_single = Testimonial::where('id', $id)->first();
        unlink(public_path('uploads/' . $testimonial_single->photo));
        $testimonial_single->delete();

        return redirect()->route('admin_testimonial_show')->with('success', 'Testimonial Deleted Successfully.');

    }
}
