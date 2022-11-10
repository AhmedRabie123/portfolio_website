<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageItem;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;

class PortfolioController extends Controller
{
    public function index()
    {

        $portfolios = Portfolio::orderBy('id', 'asc')->paginate(9);
        $page_data = PageItem::where('id', 1)->first();
        $portfolio_categories = PortfolioCategory::orderBy('id', 'asc')->get();

        return view('Front.portfolios', compact('portfolios', 'page_data', 'portfolio_categories'));
    }

}
