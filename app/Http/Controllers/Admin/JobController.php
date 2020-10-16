<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        return view('admin.career-post');

    }

    public function manage_job(){
        $jobs = DB::table('jobs')->orderBy('created_at', 'desc')->get();
        return view('admin.manage-job')->with(['jobs' => $jobs]);

    }

    public function store(Request $request)
    {

        $this -> validate($request, [
            'title' => ['required', 'string', 'max:255', 'unique:jobs'],
            'location' => ['required', 'string'],
            'job_description' => ['required', 'string'],
            'job_requirement' => ['required', 'string'],
        ]);


        $job = new Job();
        $job -> title = $request->input('title');
        $job -> location = $request->input('location');
        $job -> job_description = $request->input('job_description');
        $job -> job_requirement = $request->input('job_requirement');
        $job -> save();

        if($job){
            return back()->with('success', "Created Successfully");
        };
    }

    public function update(Request $request, $id){

        $this -> validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'job_description' => ['required', 'string'],
            'job_requirement' => ['required', 'string'],
        ]);

        $update = Job::find($id)->update([
            'title' => $request->input('title'),
            'location' => $request->input('location'),
            'job_description' => $request->input('job_description'),
            'job_requirement' => $request->input('job_requirement'),
        ]);

        if($update){
            return back()->with('success', "Details Updated Successfully");
        }
    }


    public function destroy(Job $job){
        $job->delete();
        if($job){
            return back()->with('success', 'Removed Successfully');
        }
    }
}
