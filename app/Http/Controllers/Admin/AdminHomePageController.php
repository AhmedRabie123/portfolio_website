<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePageItem;

class AdminHomePageController extends Controller
{
    public function index()
    {
        $page_data = HomePageItem::where('id', 1)->first();
        return view('Admin.home_banner_show', compact('page_data'));
    }
}
