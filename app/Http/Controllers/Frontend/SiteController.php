<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Client;
use App\Models\CompanyDetail;
use App\Models\Gallery;
use App\Models\Job;
use App\Models\NewsAndEvent;
use App\Models\Project;
use App\Models\Service;
use App\Models\Team;
use App\Models\WorkPlace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index(){
        $services = DB::table('services')->limit(6)->get();
        $clients = Client::all();
        $projects = Project::all();
        $company_details = CompanyDetail::all();
        $news = DB::table('news_and_events')->limit(4)->orderBy('created_at', 'desc')->get();
        return view('site.home')
            ->with(['services' => $services])
            ->with(['clients' => $clients])
            ->with(['projects' => $projects])
            ->with(['news' => $news])
            ->with(['company_details' => $company_details])
            ;
    }

    public function services(){
        $company_details = CompanyDetail::all();
        $services = DB::table('services')->orderBy('created_at', 'desc')->get();
        $news = DB::table('news_and_events')->limit(4)->orderBy('created_at', 'desc')->get();
        return view('site.services')->with(['services' =>$services])
            ->with(['news' => $news])
            ->with(['company_details' => $company_details]);
    }

    public function single_service($id){
        $company_details = CompanyDetail::all();
        $service = Service::find($id);
        $news = DB::table('news_and_events')->limit(4)->orderBy('created_at', 'desc')->get();
        return view('site.single-service')->with(['service' =>$service])
            ->with(['news' => $news])
            ->with(['company_details' => $company_details]);
    }


    public function portfolio(){
        $company_details = CompanyDetail::all();
        $projects = Project::all();
        $news = DB::table('news_and_events')->limit(4)->orderBy('created_at', 'desc')->get();
        return view('site.portfolio')
            ->with(['projects' => $projects])
            ->with(['news' => $news])
            ->with(['company_details' => $company_details]);
    }

    public function single_project($id){
        $company_details = CompanyDetail::all();
        $project = Project::find($id);
        $news = DB::table('news_and_events')->limit(4)->orderBy('created_at', 'desc')->get();
        return view('site.single-project')
            ->with(['project' => $project])
            ->with(['news' => $news])
            ->with(['company_details' => $company_details]);
    }

    public function news_and_events(){
        $company_details = CompanyDetail::all();
        $news = DB::table('news_and_events')->limit(4)->orderBy('created_at', 'desc')->get();
        $allnews = DB::table('news_and_events')->orderBy('created_at', 'desc')->get();
        return view('site.news-event')
            ->with(['allnews' => $allnews])
            ->with(['news' => $news])
            ->with(['company_details' => $company_details]);

    }

    public function single_ne($id){
        $company_details = CompanyDetail::all();
        $news = DB::table('news_and_events')->limit(4)->orderBy('created_at', 'desc')->get();
        $news_events = NewsAndEvent::find($id);
        $photos = DB::table('galleries')->where('event_id', $id)->get();
        return view('site.single-news-event')
            ->with(['news_events' => $news_events])
            ->with(['news' => $news])
            ->with(['photos' => $photos])
            ->with(['company_details' => $company_details]);
    }

    public function case_study(){
        $company_details = CompanyDetail::all();
        $news = DB::table('news_and_events')->limit(4)->orderBy('created_at', 'desc')->get();
        $blogs = DB::table('blogs')->orderBy('created_at', 'desc')->get();
        return view('site.case-study')
            ->with(['blogs' => $blogs])
            ->with(['news' => $news])
            ->with(['company_details' => $company_details]);

    }

    public function single_case_study($id){
        $company_details = CompanyDetail::all();
        $news = DB::table('news_and_events')->limit(4)->orderBy('created_at', 'desc')->get();
        $blog = Blog::find($id);
        return view('site.single-blog')
            ->with(['blog' => $blog])
            ->with(['news' => $news])
            ->with(['company_details' => $company_details]);

    }


    public function about_page(){
        $company_details = CompanyDetail::all();
        $news = DB::table('news_and_events')->limit(4)->orderBy('created_at', 'desc')->get();
        $team = Team::all();
        return view('site.about-page')
            ->with(['team' => $team])
            ->with(['news' => $news])
            ->with(['company_details' => $company_details]);

    }

    public function contact(){
        $company_details = CompanyDetail::all();
        $work_place = WorkPlace::all();
        $news = DB::table('news_and_events')->limit(4)->orderBy('created_at', 'desc')->get();
        return view('site.contact-page')
            ->with(['work_place' => $work_place])
            ->with(['news' => $news])
            ->with(['company_details' => $company_details]);

    }


    public function career(){
        $company_details = CompanyDetail::all();
        $jobs = DB::table('jobs')->orderBy('created_at', 'desc')->get();
        $news = DB::table('news_and_events')->limit(4)->orderBy('created_at', 'desc')->get();
        return view('site.career')
            ->with(['news' => $news])
            ->with(['jobs' => $jobs])
            ->with(['company_details' => $company_details]);
    }

    public function single_career($id){
        $company_details = CompanyDetail::all();
        $news = DB::table('news_and_events')->limit(4)->orderBy('created_at', 'desc')->get();
        $vacancy = Job::find($id);
        return view('site.single-career')
            ->with(['news' => $news])
            ->with(['vacancy' => $vacancy])
            ->with(['company_details' => $company_details]);
    }

    public function application_page($id){
        $job_post = Job::find($id);
        $company_details = CompanyDetail::all();
        $news = DB::table('news_and_events')->limit(4)->orderBy('created_at', 'desc')->get();
        return view('site.application-page', compact('job_post', 'company_details', 'news'));
    }



}
