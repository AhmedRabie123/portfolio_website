<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Service;

class AdminServiceController extends Controller
{
    public function index()
    {
        $all_service = Service::orderBy('item_order', 'asc')->get();
        return view('Admin.service_show', compact('all_service'));
    }

    public function service_create()
    {
        return view('Admin.service_create');
    }

    public function service_store(Request $request)
    {
        $request->validate([
           'name' => 'required',
           'slug' => 'required|alpha_dash|unique:services',
           'short_description' => 'required',
           'description' => 'required',
           'icon' => 'required',
           'item_order' => 'required',
           'banner' => 'required|image|mimes:jpg,png,jpeg,svg,gif',
           'photo' => 'required|image|mimes:jpg,png,jpeg,svg,gif'
        ]);

        $service = new Service();

        $now = time();
        $ext = $request->file('photo')->extension();
        $final_name = 'service_photo_'. $now . '.' . $ext;
        $request->file('photo')->move(public_path('uploads/'), $final_name);
        $service->photo = $final_name;

        $ext1 = $request->file('banner')->extension();
        $final_name1 = 'service_banner_'. $now . '.' . $ext1;
        $request->file('banner')->move(public_path('uploads/'), $final_name1);
        $service->banner = $final_name1;

        $service->name = $request->name;
        $service->slug = $request->slug;
        $service->short_description = $request->short_description;
        $service->description = $request->description;
        $service->icon = $request->icon;
        $service->seo_title = $request->seo_title;
        $service->seo_meta_description = $request->seo_meta_description;
        $service->item_order = $request->item_order;
        $service->save();

        return redirect()->route('admin_service_show')->with('success', 'Service Saved Successfully.');

    }

    public function service_edit($id)
    {
        $service_single = Service::where('id', $id)->first();
        return view('Admin.service_edit', compact('service_single'));
    }

    public function service_update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'slug' => ['required','alpha_dash', Rule::unique('services')->ignore($id)],
            'short_description' => 'required',
            'description' => 'required',
            'icon' => 'required',
            'item_order' => 'required',
        ]);


        $service = Service::where('id', $id)->first();

        if ($request->hasFile('photo')) {

            $request->validate([
                'photo' => 'image|mimes:jpg,png,jpeg,svg,gif'
            ]);

            if (file_exists(public_path('uploads/' . $service->photo)) && $service->photo != NULL) {
                unlink(public_path('uploads/' . $service->photo));
            }

            $now = time();
            $ext = $request->file('photo')->extension();
            $final_name = 'service_photo_'. $now . '.' . $ext;
            $request->file('photo')->move(public_path('uploads/'), $final_name);
            $service->photo = $final_name;
        }

        if ($request->hasFile('banner')) {

            $request->validate([
                'banner' => 'image|mimes:jpg,png,jpeg,svg,gif'
            ]);

            if (file_exists(public_path('uploads/' . $service->banner)) && $service->banner != NULL) {
                unlink(public_path('uploads/' . $service->banner));
            }

            $now = time();
            $ext1 = $request->file('banner')->extension();
            $final_name1 = 'service_banner_'. $now . '.' . $ext1;
            $request->file('banner')->move(public_path('uploads/'), $final_name1);
            $service->banner = $final_name1;
        }

        $service->name = $request->name;
        $service->slug = $request->slug;
        $service->short_description = $request->short_description;
        $service->description = $request->description;
        $service->icon = $request->icon;
        $service->seo_title = $request->seo_title;
        $service->seo_meta_description = $request->seo_meta_description;
        $service->item_order = $request->item_order;
        $service->update();

        return redirect()->route('admin_service_show')->with('success', 'Service Updated Successfully.');

    }

    public function service_delete($id)
    {
        $service_single = Service::where('id', $id)->first();
        unlink(public_path('uploads/' . $service_single->photo));
        unlink(public_path('uploads/' . $service_single->banner));
        $service_single->delete();

        return redirect()->route('admin_service_show')->with('success', 'Service Deleted Successfully.');

    }
}
