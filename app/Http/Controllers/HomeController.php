<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Blog;
use App\Models\Job;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard(){
        $job_count = Job::all()->count();
        $application_count = Application::all()->count();
        $blog_count = Blog::all()->count();
        $project_count = Project::all()->count();
        return view('admin/dashboard', compact('job_count', 'application_count', 'blog_count', 'project_count'));
    }
}
