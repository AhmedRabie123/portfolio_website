<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\PageItem;

class ServiceController extends Controller
{
    public function index()
    {
        $service_data = Service::orderBy('item_order', 'asc')->paginate(9);
        $page_data = PageItem::where('id', 1)->first();
        return view('Front.services', compact('service_data', 'page_data'));
    }

    public function detail($slug)
    {
        $service_detail = Service::where('slug', $slug)->first();
        $service_data = Service::orderBy('item_order', 'asc')->get();
        return view('Front.service_detail', compact('service_detail', 'service_data'));
    }
}
