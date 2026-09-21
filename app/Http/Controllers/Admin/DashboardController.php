<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Experience;
use App\Models\educations;
use App\Models\Certificate;
use App\Models\Message;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'skills' => Skill::count(),
            'projects' => Project::count(),
            'experiences' => Experience::count(),
            'educations' => educations::count(),
            'certificates' => Certificate::count(),
            'messages' => Message::count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}