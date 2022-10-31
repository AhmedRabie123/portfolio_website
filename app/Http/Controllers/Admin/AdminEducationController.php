<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education;

class AdminEducationController extends Controller
{
    public function index()
    {
        $all_education = Education::orderBy('item_order', 'asc')->get();
        return view('Admin.education_show', compact('all_education'));
    }

    public function education_create()
    {
        return view('Admin.education_create');
    }

    public function education_store(Request $request)
    {
        $request->validate([
           'degree' => 'required',
           'institute' => 'required',
           'time' => 'required',
           'item_order' => 'required'
        ]);

        $education = new Education();

        $education->degree = $request->degree;
        $education->institute = $request->institute;
        $education->time = $request->time;
        $education->item_order = $request->item_order;
        $education->save();

        return redirect()->route('admin_education_show')->with('success', 'Education Saved Successfully.');

    }

    public function education_edit($id)
    {
        $education_single = Education::where('id', $id)->first();
        return view('Admin.education_edit', compact('education_single'));
    }

    public function education_update(Request $request, $id)
    {

        $request->validate([
            'degree' => 'required',
            'institute' => 'required',
            'time' => 'required',
            'item_order' => 'required'
        ]);


        $education = Education::where('id', $id)->first();


        $education->degree = $request->degree;
        $education->institute = $request->institute;
        $education->time = $request->time;
        $education->item_order = $request->item_order;
        $education->update();

        return redirect()->route('admin_education_show')->with('success', 'Education Updated Successfully.');

    }

    public function education_delete($id)
    {
        $education_single = Education::where('id', $id)->first();
        $education_single->delete();

        return redirect()->route('admin_education_show')->with('success', 'Education Deleted Successfully.');

    }

}
