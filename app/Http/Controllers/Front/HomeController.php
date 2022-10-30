<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePageItem;
use App\Models\Skill;

class HomeController extends Controller
{
    public function index()
    {

        $page_data = HomePageItem::where('id', 1)->first();
        $left_skills = Skill::where('side', 'Left')->get();
        $right_skills = Skill::where('side', 'Right')->get();
        return view('Front.home', compact('page_data', 'left_skills', 'right_skills'));
    }
}
