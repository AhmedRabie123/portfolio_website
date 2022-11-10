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
            $final_name = 'banner_services_'. time() . '.' . $ext;
            $request->file('services_banner')->move(public_path('uploads/'), $final_name);
            $page_data->services_banner = $final_name;
        }

        $page_data->services_heading  =  $request->services_heading;
        $page_data->services_seo_title  =  $request->services_seo_title;
        $page_data->services_seo_meta_description  =  $request->services_seo_meta_description;
        $page_data->update();

        return redirect()->route('admin_home')->with('success', 'Services Page Updated Successfully');
    }

    public function portfolios()
    {
        $page_data = PageItem::where('id', 1)->first();
        return view('Admin.page_portfolios', compact('page_data'));
    }

    public function portfolios_update(Request $request)
    {

        $page_data = PageItem::where('id', 1)->first();

        $request->validate([
            'portfolios_heading' => 'required'
        ]);


        if ($request->hasFile('portfolios_banner')) {
            $request->validate([
                'portfolios_banner' => 'image|mimes:jpg,jpeg,png,svg,gif'
            ]);

            if (file_exists(public_path('uploads/' . $page_data->portfolios_banner)) && $page_data->portfolios_banner != NULL) {
                unlink(public_path('uploads/' . $page_data->portfolios_banner));
            }

            $ext = $request->file('portfolios_banner')->extension();
            $final_name = 'banner_portfolios_'. time() . '.' . $ext;
            $request->file('portfolios_banner')->move(public_path('uploads/'), $final_name);
            $page_data->portfolios_banner = $final_name;
        }

        $page_data->portfolios_heading  =  $request->portfolios_heading;
        $page_data->portfolios_seo_title  =  $request->portfolios_seo_title;
        $page_data->portfolios_seo_meta_description  =  $request->portfolios_seo_meta_description;
        $page_data->update();

        return redirect()->route('admin_home')->with('success', 'Portfolio Page Updated Successfully');
    }

}
