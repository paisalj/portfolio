<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Experience;
use App\Models\educations;
use App\Models\Certificate;

class PortfolioController extends Controller
{
    public function index()
    {
        $profile = Profile::first();

        $skills = Skill::orderBy('percentage', 'desc')->get();

        $projects = Project::with('skills')
            ->where('is_featured', true)
            ->latest()
            ->get();

        $experiences = Experience::orderBy('start_date', 'desc')->get();

        $educations = educations::orderBy('start_date', 'desc')->get();

        $certificates = Certificate::orderBy('issue_date', 'desc')->get();

        return view('portfolio.index', compact(
            'profile',
            'skills',
            'projects',
            'experiences',
            'educations',
            'certificates'
        ));
    }
}