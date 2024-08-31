<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certification;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Profile;
use App\Models\skill;

class PortfolioController extends Controller
{

    public function index()
    {
        $profile = Profile::first();
        return view('portfolio.index', compact('profile'));
    }


    public function about()
    {
        $profile = Profile::first();
        $skill = skill::all();
        return view('portfolio.about', compact('profile', 'skill'));
    }

    public function resume()
    {
        $profile = Profile::first();
        $education = Education::all();
        $experience = Experience::all();
        $certification = Certification::all();
        return view('portfolio.resume', compact('profile', 'education',  'experience', 'certification'));
    }
}
