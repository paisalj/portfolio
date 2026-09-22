<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use App\Models\About;
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
            'unread_messages' => Message::where('is_read', false)->count(),
        ];

        $latestMessages = Message::latest()->take(5)->get();

        $latestProjects = Project::latest()->take(5)->get();

        return view('admin.dashboard.index', compact(
            'stats',
            'latestMessages',
            'latestProjects'
        ));
    }
}