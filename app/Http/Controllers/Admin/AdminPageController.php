<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageItem;

class AdminPageController extends Controller
{
    public function services()
    {
        $page_data = PageItem::where('id', 1)->first();
        return view('Admin.page_services', compact('page_data'));
    }

    public function services_update(Request $request)
    {

        $page_data = PageItem::where('id', 1)->first();

        $request->validate([
            'services_heading' => 'required'
        ]);


        if ($request->hasFile('services_banner')) {
            $request->validate([
                'services_banner' => 'image|mimes:jpg,jpeg,png,svg,gif'
            ]);

            if (file_exists(public_path('uploads/' . $page_data->services_banner)) && $page_data->services_banner != NULL) {
                unlink(public_path('uploads/' . $page_data->services_banner));
            }

            $ext = $request->file('services_banner')->extension();
            $final_name = 'banner_services_'. time() . '-' . $ext;
            $request->file('services_banner')->move(public_path('uploads/'), $final_name);
            $page_data->services_banner = $final_name;
        }

        $page_data->services_heading  =  $request->services_heading;
        $page_data->update();

        return redirect()->route('admin_home')->with('success', 'Services Page Updated Successfully');
    }

}
