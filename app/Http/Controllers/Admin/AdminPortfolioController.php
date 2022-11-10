<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\PortfolioPhoto;
use App\Models\PortfolioVideo;

class AdminPortfolioController extends Controller
{
    public function index()
    {
        $all_portfolio = Portfolio::with('rPortfolioCategory')->orderBy('id', 'asc')->get();
        return view('Admin.portfolio_show', compact('all_portfolio'));
    }

    public function portfolio_create()
    {
        $portfolio_categories = PortfolioCategory::get();
        return view('Admin.portfolio_create', compact('portfolio_categories'));
    }

    public function portfolio_store(Request $request)
    {
        $request->validate([
           'name' => 'required',
           'portfolio_category_id' => 'required',
           'slug' => 'required|alpha_dash|unique:portfolios',
           'description' => 'required',
           'banner' => 'required|image|mimes:jpg,png,jpeg,svg,gif',
           'photo' => 'required|image|mimes:jpg,png,jpeg,svg,gif'
        ]);

        $portfolio = new Portfolio();

        $now = time();
        $ext = $request->file('photo')->extension();
        $final_name = 'portfolio_photo_'. $now . '.' . $ext;
        $request->file('photo')->move(public_path('uploads/'), $final_name);
        $portfolio->photo = $final_name;

        $ext1 = $request->file('banner')->extension();
        $final_name1 = 'portfolio_banner_'. $now . '.' . $ext1;
        $request->file('banner')->move(public_path('uploads/'), $final_name1);
        $portfolio->banner = $final_name1;

        $portfolio->name = $request->name;
        $portfolio->portfolio_category_id = $request->portfolio_category_id;
        $portfolio->slug = $request->slug;
        $portfolio->description = $request->description;
        $portfolio->project_client = $request->project_client;
        $portfolio->project_company = $request->project_company;
        $portfolio->project_start_date = $request->project_start_date;
        $portfolio->project_end_date = $request->project_end_date;
        $portfolio->project_cost = $request->project_cost;
        $portfolio->project_website = $request->project_website;
        $portfolio->seo_title = $request->seo_title;
        $portfolio->seo_meta_description = $request->seo_meta_description;
        $portfolio->save();

        return redirect()->route('admin_portfolio_show')->with('success', 'portfolio Saved Successfully.');

    }

    public function portfolio_edit($id)
    {
        $portfolio_categories = PortfolioCategory::get();
        $portfolio_single = Portfolio::where('id', $id)->first();
        return view('Admin.portfolio_edit', compact('portfolio_single', 'portfolio_categories'));
    }

    public function portfolio_update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'portfolio_category_id' => 'required',
            'slug' => ['required','alpha_dash', Rule::unique('portfolios')->ignore($id)],
            'description' => 'required',
        ]);


        $portfolio = Portfolio::with('rPortfolioCategory')->where('id', $id)->first();

        if ($request->hasFile('photo')) {

            $request->validate([
                'photo' => 'image|mimes:jpg,png,jpeg,svg,gif'
            ]);

            if (file_exists(public_path('uploads/' . $portfolio->photo)) && $portfolio->photo != NULL) {
                unlink(public_path('uploads/' . $portfolio->photo));
            }

            $now = time();
            $ext = $request->file('photo')->extension();
            $final_name = 'portfolio_photo_'. $now . '.' . $ext;
            $request->file('photo')->move(public_path('uploads/'), $final_name);
            $portfolio->photo = $final_name;
        }

        if ($request->hasFile('banner')) {

            $request->validate([
                'banner' => 'image|mimes:jpg,png,jpeg,svg,gif'
            ]);

            if (file_exists(public_path('uploads/' . $portfolio->banner)) && $portfolio->banner != NULL) {
                unlink(public_path('uploads/' . $portfolio->banner));
            }

            $now = time();
            $ext1 = $request->file('banner')->extension();
            $final_name1 = 'portfolio_banner_'. $now . '.' . $ext1;
            $request->file('banner')->move(public_path('uploads/'), $final_name1);
            $portfolio->banner = $final_name1;
        }

        $portfolio->name = $request->name;
        $portfolio->portfolio_category_id = $request->portfolio_category_id;
        $portfolio->slug = $request->slug;
        $portfolio->description = $request->description;
        $portfolio->project_client = $request->project_client;
        $portfolio->project_company = $request->project_company;
        $portfolio->project_start_date = $request->project_start_date;
        $portfolio->project_end_date = $request->project_end_date;
        $portfolio->project_cost = $request->project_cost;
        $portfolio->project_website = $request->project_website;
        $portfolio->seo_title = $request->seo_title;
        $portfolio->seo_meta_description = $request->seo_meta_description;
        $portfolio->update();

        return redirect()->route('admin_portfolio_show')->with('success', 'Portfolio Updated Successfully.');

    }

    public function portfolio_delete($id)
    {
        $portfolio_single = Portfolio::where('id', $id)->first();
        unlink(public_path('uploads/' . $portfolio_single->photo));
        unlink(public_path('uploads/' . $portfolio_single->banner));
        $portfolio_single->delete();


        // Delete Photo Gallery Items

        $portfolio_gallery_photo = PortfolioPhoto::where('portfolio_id', $id)->get();
        foreach($portfolio_gallery_photo as $item){
            unlink(public_path('uploads/' . $item->photo));
            $item->delete();
        }

        
        // Delete Video Gallery Items

        $portfolio_gallery_video = PortfolioVideo::where('portfolio_id', $id)->get();
        foreach($portfolio_gallery_video as $item){
            $item->delete();
        }
        

        return redirect()->route('admin_portfolio_show')->with('success', 'Portfolio Deleted Successfully.');

    }

    public function photo_gallery($id)
    {
        $portfolio_single = Portfolio::where('id', $id)->first();
        $portfolio_photo = PortfolioPhoto::where('portfolio_id', $id)->get();
        return view('Admin.portfolio_photo_gallery_show', compact('portfolio_photo', 'portfolio_single'));
    }

    public function photo_gallery_submit(Request $request)
    {
        $portfolio_photo = new PortfolioPhoto();

        $request->validate([
            'photo' => 'required|image|mimes:jpg,png,jpeg,svg,gif'
        ]);

        $now = time();
        $ext = $request->file('photo')->extension();
        $final_name = 'portfolio_gallery_photo_'. $now . '.' . $ext;
        $request->file('photo')->move(public_path('uploads/'), $final_name);
        $portfolio_photo->photo = $final_name;

        $portfolio_photo->portfolio_id = $request->portfolio_id;
        $portfolio_photo->save();

        return redirect()->back()->with('success', 'Portfolio Photo Saved Successfully.');

    }

    public function photo_gallery_delete($id)
    {
        $portfolio_gallery_single = PortfolioPhoto::where('id', $id)->first();
        unlink(public_path('uploads/' . $portfolio_gallery_single->photo));
        $portfolio_gallery_single->delete();

        return redirect()->route('admin_portfolio_show')->with('success', 'Portfolio Deleted Successfully.');
    }

    public function video_gallery($id)
    {
        $portfolio_single = Portfolio::where('id', $id)->first();
        $portfolio_video = PortfolioVideo::where('portfolio_id', $id)->get();
        return view('Admin.portfolio_video_gallery_show', compact('portfolio_single', 'portfolio_video'));
    }

    public function video_gallery_submit(Request $request)
    {
        $portfolio_video = new PortfolioVideo();

        $request->validate([
            'caption' => 'required',
            'video_id' => 'required',
        ]);

        $portfolio_video->portfolio_id = $request->portfolio_id;
        $portfolio_video->caption = $request->caption;
        $portfolio_video->video_id = $request->video_id;
        $portfolio_video->save();

        return redirect()->back()->with('success', 'Portfolio Video Saved Successfully.');

    }

    public function video_gallery_delete($id)
    {
        $portfolio_gallery_single = PortfolioVideo::where('id', $id)->first();
        $portfolio_gallery_single->delete();

        return redirect()->route('admin_portfolio_show')->with('success', 'Portfolio Deleted Successfully.');
    }

}
