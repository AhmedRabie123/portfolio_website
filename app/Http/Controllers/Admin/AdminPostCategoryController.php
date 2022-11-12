<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\PostCategory;

class AdminPostCategoryController extends Controller
{
    public function index()
    {
        $post_category = PostCategory::orderBy('id', 'asc')->get();
        return view('Admin.post_category_show', compact('post_category'));
    }

    public function post_category_create()
    {
        return view('Admin.post_category_create');
    }

    public function post_category_store(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
            'category_slug' => 'required|alpha_dash|unique:post_categories',
        ]);

        $category_post = new PostCategory();


        $category_post->category_name = $request->category_name;
        $category_post->category_slug = $request->category_slug;
        $category_post->save();

        return redirect()->route('admin_post_category_show')->with('success', 'Category Saved Successfully.');
    }

    public function post_category_edit($id)
    {
        $category_single = PostCategory::where('id', $id)->first();
        return view('Admin.post_category_edit', compact('category_single'));
    }

    public function post_category_update(Request $request, $id)
    {

        $request->validate([
            'category_name' => 'required',
            'category_slug' => ['required','alpha_dash', Rule::unique('post_categories')->ignore($id)],
        ]);


        $category_post = PostCategory::where('id', $id)->first();

        $category_post->category_name = $request->category_name;
        $category_post->category_slug = $request->category_slug;
        $category_post->update();

        return redirect()->route('admin_post_category_show')->with('success', 'Category Updated Successfully.');
    }

    public function post_category_delete($id)
    {
        $category_single = PostCategory::where('id', $id)->first();
        $category_single->delete();
        // $count = Post::where('post_category_id', $id)->count();
 
        // if($count == 0){
        //     $category_single->delete();
        // }else{
        //     return redirect()->back()->with('error', 'You Can  Not delete this portfolio category, because there is one or more portfolio under this.');
        // }

       

        return redirect()->route('admin_post_category_show')->with('success', 'Category Deleted Successfully.');
    }
}
