<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Testimonial;
use App\Models\Client;
use App\Models\Portfolio;
use App\Models\Post;
use App\Models\Service;

class AdminHomeController extends Controller
{
    public function index()
    {
        $all_skill = Skill::count();
        $all_education = Education::count();
        $all_experience = Experience::count();
        $all_testimonial = Testimonial::count();
        $all_client = Client::count();
        $all_services = Service::count();
        $all_portfolios = Portfolio::count();
        $all_blogs = Post::count();

        return view('Admin.home', compact('all_skill', 'all_education', 'all_experience', 'all_testimonial', 'all_client', 'all_services', 'all_portfolios', 'all_blogs'));
     
    }
}
