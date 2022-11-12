<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageItem;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\PortfolioPhoto;
use App\Models\PortfolioVideo;

class PortfolioController extends Controller
{
    public function index()
    {

        $portfolios = Portfolio::orderBy('id', 'asc')->paginate(9);
        $page_data = PageItem::where('id', 1)->first();
        $portfolio_categories = PortfolioCategory::orderBy('id', 'asc')->get();

        return view('Front.portfolios', compact('portfolios', 'page_data', 'portfolio_categories'));
    }

    public function detail($slug)
    {
        $portfolio_data = Portfolio::orderBy('id', 'asc')->get();
        $portfolio_detail = Portfolio::where('slug', $slug)->first();
        $portfolio_photos = PortfolioPhoto::where('portfolio_id', $portfolio_detail->id)->get();
        $portfolio_videos = PortfolioVideo::where('portfolio_id', $portfolio_detail->id)->get();
        return view('Front.portfolio_detail', compact('portfolio_detail', 'portfolio_data', 'portfolio_photos', 'portfolio_videos'));
    }

}
