<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePageItem;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Testimonial;
use App\Models\Client;

class HomeController extends Controller
{
    public function index()
    {

        $page_data = HomePageItem::where('id', 1)->first();
        $left_skills = Skill::where('side', 'Left')->get();
        $right_skills = Skill::where('side', 'Right')->get();
        $education_data = Education::orderBy('item_order', 'asc')->get();
        $experience_data = Experience::orderBy('item_order', 'asc')->get();
        $testimonial_data = Testimonial::orderBy('id', 'desc')->get();
        $client_data = Client::orderBy('id', 'desc')->get();
        return view('Front.home', compact('page_data', 'left_skills', 'right_skills', 'education_data', 'experience_data', 'testimonial_data', 'client_data'));
    }
}
