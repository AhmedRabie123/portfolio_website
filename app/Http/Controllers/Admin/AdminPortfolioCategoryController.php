<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PortfolioCategory;

class AdminPortfolioCategoryController extends Controller
{
    public function index()
    {
        $portfolio_category = PortfolioCategory::orderBy('id', 'asc')->get();
        return view('Admin.portfolio_category_show', compact('portfolio_category'));
    }

    public function portfolio_category_create()
    {
        return view('Admin.portfolio_category_create');
    }

    public function portfolio_category_store(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
        ]);

        $category_portfolio = new PortfolioCategory();


        $category_portfolio->category_name = $request->category_name;
        $category_portfolio->save();

        return redirect()->route('admin_portfolio_category_show')->with('success', 'Category Saved Successfully.');
    }

    public function portfolio_category_edit($id)
    {
        $category_single = PortfolioCategory::where('id', $id)->first();
        return view('Admin.portfolio_category_edit', compact('category_single'));
    }

    public function portfolio_category_update(Request $request, $id)
    {

        $request->validate([
            'category_name' => 'required',
        ]);


        $category_portfolio = PortfolioCategory::where('id', $id)->first();

        $category_portfolio->category_name = $request->category_name;
        $category_portfolio->update();

        return redirect()->route('admin_portfolio_category_show')->with('success', 'Category Updated Successfully.');
    }

    public function portfolio_category_delete($id)
    {
        $category_single = PortfolioCategory::where('id', $id)->first();
        $category_single->delete();

        return redirect()->route('admin_portfolio_category_show')->with('success', 'Category Deleted Successfully.');
    }
    
}
