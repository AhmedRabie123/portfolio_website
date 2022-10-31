<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Experience;

class AdminExperienceController extends Controller
{
    public function index()
    {
        $all_experience = Experience::orderBy('item_order', 'asc')->get();
        return view('Admin.experience_show', compact('all_experience'));
    }

    public function experience_create()
    {
        return view('Admin.experience_create');
    }

    public function experience_store(Request $request)
    {
        $request->validate([
           'company' => 'required',
           'designation' => 'required',
           'time' => 'required',
           'item_order' => 'required'
        ]);

        $experience = new Experience();

        $experience->company = $request->company;
        $experience->designation = $request->designation;
        $experience->time = $request->time;
        $experience->item_order = $request->item_order;
        $experience->save();

        return redirect()->route('admin_experience_show')->with('success', 'Experience Saved Successfully.');

    }

    public function experience_edit($id)
    {
        $experience_single = Experience::where('id', $id)->first();
        return view('Admin.experience_edit', compact('experience_single'));
    }

    public function experience_update(Request $request, $id)
    {

        $request->validate([
            'company' => 'required',
            'designation' => 'required',
            'time' => 'required',
            'item_order' => 'required'
        ]);


        $experience = Experience::where('id', $id)->first();


        $experience->company = $request->company;
        $experience->designation = $request->designation;
        $experience->time = $request->time;
        $experience->item_order = $request->item_order;
        $experience->update();

        return redirect()->route('admin_experience_show')->with('success', 'Experience Updated Successfully.');

    }

    public function experience_delete($id)
    {
        $experience_single = Experience::where('id', $id)->first();
        $experience_single->delete();

        return redirect()->route('admin_experience_show')->with('success', 'Experience Deleted Successfully.');

    }
}
