<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageItem;
use App\Models\post;
use App\Models\PostCategory;
use App\Models\Archive;

class PostController extends Controller
{
    public function index()
    {

        $posts = post::orderBy('id', 'desc')->paginate(9);
        $page_data = PageItem::where('id', 1)->first();
        $post_categories = PostCategory::orderBy('id', 'asc')->get();

        return view('Front.posts', compact('posts', 'page_data', 'post_categories'));
    }

    public function detail($slug)
    {
        $post_data = post::orderBy('id', 'desc')->take(5)->get();
        $post_detail = post::with('rPostCategory')->where('slug', $slug)->first();
        $post_categories = PostCategory::orderBy('category_name', 'asc')->get();
        $archives = Archive::orderBy('id', 'desc')->get();
        return view('Front.post', compact('post_detail', 'post_data', 'post_categories', 'archives'));
    }

    public function category($slug)
    {
        $page_data = PageItem::where('id', 1)->first();
        $post_categories = PostCategory::where('category_slug', $slug)->first();
        $posts = post::orderBy('id', 'desc')->where('post_category_id', $post_categories->id)->paginate(9);

        return view('Front.category', compact('posts', 'page_data', 'post_categories'));
    }

    public function archive($month, $year)
    {
        $page_data = PageItem::where('id', 1)->first();
        $posts = post::orderBy('id', 'desc')->paginate(9);
        return view('Front.archive', compact('posts', 'page_data', 'month', 'year'));
    }

    public function search(Request $request)
    {
        $search_text = $request->search_text;
        $search_text_filter = '%'.$search_text. '%';
        $posts = post::orderBy('id', 'desc')->where('title', 'LIKE' , $search_text_filter)->orWhere('description', 'LIKE' , $search_text_filter)->paginate(9);
        $page_data = PageItem::where('id', 1)->first();
        return view('Front.search', compact('posts', 'page_data', 'search_text'));
    }
}
