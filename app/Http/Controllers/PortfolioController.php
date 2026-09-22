<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\About;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Experience;
use App\Models\educations;
use App\Models\Certificate;

class PortfolioController extends Controller
{
    public function index()
    {
        // HOME
        $home = Home::first();

        // ABOUT
        $about = About::first();

        // SKILLS
        $skills = Skill::orderBy('percentage', 'desc')->get();

        // PROJECTS
        $projects = Project::with('skills')
            ->where('is_featured', true)
            ->latest()
            ->get();

        // EXPERIENCE
        $experiences = Experience::orderBy('start_date', 'desc')->get();

        // EDUCATION
        $educations = educations::orderBy('start_date', 'desc')->get();

        // CERTIFICATES
        $certificates = Certificate::orderBy('issue_date', 'desc')->get();

        return view('portfolio.index', compact(
            'home',
            'about',
            'skills',
            'projects',
            'experiences',
            'educations',
            'certificates'
        ));
    }
}