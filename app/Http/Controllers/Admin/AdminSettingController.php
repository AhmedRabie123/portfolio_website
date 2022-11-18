<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class AdminSettingController extends Controller
{
    public function index()
    {
        $all_setting = Setting::where('id', 1)->first();
        return view('Admin.setting', compact('all_setting'));
    }

    public function setting_update(Request $request)
    {
        $request->validate([
            'footer_copyright' => 'required',
            'theme_color' => 'required'
        ]);

        $all_setting = Setting::where('id', 1)->first();

        if ($request->hasFile('logo')) {

            $request->validate([
                'logo' => 'image|mimes:jpg,png,jpeg,svg,gif'
            ]);

            if (file_exists(public_path('uploads/' . $all_setting->logo)) && $all_setting->logo != NULL ) {
                unlink(public_path('uploads/' . $all_setting->logo));
            }

            $now = time();
            $ext = $request->file('logo')->extension();
            $final_name = 'setting_logo_'. $now . '.' . $ext;
            $request->file('logo')->move(public_path('uploads/'), $final_name);
            $all_setting->logo = $final_name;
        }

        if ($request->hasFile('favicon')) {

            $request->validate([
                'favicon' => 'image|mimes:jpg,png,jpeg,svg,gif'
            ]);

            if (file_exists(public_path('uploads/' . $all_setting->favicon)) && $all_setting->favicon != NULL) {
                unlink(public_path('uploads/' . $all_setting->favicon));
            }

            $now = time();
            $ext1 = $request->file('favicon')->extension();
            $final_name1 = 'setting_favicon_'. $now . '.' . $ext1;
            $request->file('favicon')->move(public_path('uploads/'), $final_name1);
            $all_setting->favicon = $final_name1;
        }

        if ($request->hasFile('logo_footer')) {

            $request->validate([
                'logo_footer' => 'image|mimes:jpg,png,jpeg,svg,gif'
            ]);

            if (file_exists(public_path('uploads/' . $all_setting->logo_footer)) && $all_setting->logo_footer != NULL) {
                unlink(public_path('uploads/' . $all_setting->logo_footer));
            }

            $now = time();
            $ext2 = $request->file('logo_footer')->extension();
            $final_name2 = 'setting_logo_footer_'. $now . '.' . $ext2;
            $request->file('logo_footer')->move(public_path('uploads/'), $final_name2);
            $all_setting->logo_footer = $final_name2;
        }

        $all_setting->footer_text = $request->footer_text;
        $all_setting->footer_icon_1 = $request->footer_icon_1;
        $all_setting->footer_icon_1_url = $request->footer_icon_1_url;
        $all_setting->footer_icon_2 = $request->footer_icon_2;
        $all_setting->footer_icon_2_url = $request->footer_icon_2_url;
        $all_setting->footer_icon_3 = $request->footer_icon_3;
        $all_setting->footer_icon_3_url = $request->footer_icon_3_url;
        $all_setting->footer_icon_4 = $request->footer_icon_4;
        $all_setting->footer_icon_4_url = $request->footer_icon_4_url;
        $all_setting->footer_copyright = $request->footer_copyright;
        $all_setting->preloader_status = $request->preloader_status;
        $all_setting->theme_color = $request->theme_color;
        $all_setting->update();

        return redirect()->route('admin_home')->with('success', 'Setting Updated Successfully.');


    }
}
