<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Post;
use App\Models\PostCategory;

class AdminPostController extends Controller
{
    public function index()
    {
        $all_posts = Post::with('rPostCategory')->orderBy('id', 'asc')->get();
        return view('Admin.post_show', compact('all_posts'));
    }

    public function post_create()
    {
        $post_categories = PostCategory::get();
        return view('Admin.post_create', compact('post_categories'));
    }

    public function post_store(Request $request)
    {
        $request->validate([
           'title' => 'required',
           'post_category_id' => 'required',
           'slug' => 'required|alpha_dash|unique:posts',
           'short_description' => 'required',
           'description' => 'required',
           'show_comment' => 'required',
           'banner' => 'required|image|mimes:jpg,png,jpeg,svg,gif',
           'photo' => 'required|image|mimes:jpg,png,jpeg,svg,gif'
        ]);

        $post = new Post();

        $now = time();

        $ext = $request->file('photo')->extension();
        $final_name = 'post_photo_'. $now . '.' . $ext;
        $request->file('photo')->move(public_path('uploads/'), $final_name);
        $post->photo = $final_name;

        $ext1 = $request->file('banner')->extension();
        $final_name1 = 'post_banner_'. $now . '.' . $ext1;
        $request->file('banner')->move(public_path('uploads/'), $final_name1);
        $post->banner = $final_name1;

        $post->title = $request->title;
        $post->post_category_id = $request->post_category_id;
        $post->slug = $request->slug;
        $post->description = $request->description;
        $post->short_description = $request->short_description;
        $post->show_comment = $request->show_comment;
        $post->seo_title = $request->seo_title;
        $post->seo_meta_description = $request->seo_meta_description;
        $post->save();

        return redirect()->route('admin_post_show')->with('success', 'Post Saved Successfully.');

    }

    public function post_edit($id)
    {
        $post_categories = PostCategory::get();
        $post_single = Post::where('id', $id)->first();
        return view('Admin.post_edit', compact('post_single', 'post_categories'));
    }

    public function post_update(Request $request, $id)
    {

        $request->validate([
            
            'title' => 'required',
            'post_category_id' => 'required',
            'slug' => ['required','alpha_dash', Rule::unique('posts')->ignore($id)],
            'short_description' => 'required',
            'description' => 'required',
            'show_comment' => 'required',
        ]);


        $post = Post::with('rPostCategory')->where('id', $id)->first();

        if ($request->hasFile('photo')) {

            $request->validate([
                'photo' => 'image|mimes:jpg,png,jpeg,svg,gif'
            ]);

            if (file_exists(public_path('uploads/' . $post->photo)) && $post->photo != NULL  && $post->photo != '') {
                unlink(public_path('uploads/' . $post->photo));
            }

            $now = time();
            $ext = $request->file('photo')->extension();
            $final_name = 'post_photo_'. $now . '.' . $ext;
            $request->file('photo')->move(public_path('uploads/'), $final_name);
            $post->photo = $final_name;
        }

        if ($request->hasFile('banner')) {

            $request->validate([
                'banner' => 'image|mimes:jpg,png,jpeg,svg,gif'
            ]);

            if (file_exists(public_path('uploads/' . $post->banner)) && $post->banner != NULL && $post->banner != '') {
                unlink(public_path('uploads/' . $post->banner));
            }

            $now = time();
            $ext1 = $request->file('banner')->extension();
            $final_name1 = 'post_banner_'. $now . '.' . $ext1;
            $request->file('banner')->move(public_path('uploads/'), $final_name1);
            $post->banner = $final_name1;
        }

        $post->title = $request->title;
        $post->post_category_id = $request->post_category_id;
        $post->slug = $request->slug;
        $post->description = $request->description;
        $post->short_description = $request->short_description;
        $post->show_comment = $request->show_comment;
        $post->seo_title = $request->seo_title;
        $post->seo_meta_description = $request->seo_meta_description;
        $post->update();

        return redirect()->route('admin_post_show')->with('success', 'Post Updated Successfully.');

    }

    public function post_delete($id)
    {
        $post_single = Post::where('id', $id)->first();
        unlink(public_path('uploads/' . $post_single->photo));
        unlink(public_path('uploads/' . $post_single->banner));
        $post_single->delete();
        
        return redirect()->route('admin_post_show')->with('success', 'Post Deleted Successfully.');

    }

}
