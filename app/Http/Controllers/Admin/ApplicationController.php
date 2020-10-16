<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ApplicationController extends Controller
{

    public function index($id){
        $applications = DB::table('applications')->where('job_id', $id)->orderBy('created_at', 'desc')->get();
        return view('admin.applications', compact('applications'));
    }

    public function view_cv($id){
        $cv = Application::find($id);
        return view('admin.view-cv', compact('cv'));
    }

    public function store(Request $request)
    {
        if(request()->hasFile('cv')){
            request()->validate([

                'cv' => 'required|mimes:pdf|max:5048',

            ]);
        }

        $this -> validate($request, [
            'fullname' => ['required', 'string', 'max:255'],
            'contact' => ['required', 'string'],
            'email' => ['required', 'email'],
        ]);


        $cv = $request->file('cv');
        $name = time().'.'. $cv->getClientOriginalExtension();
        $cv->move(public_path('cv'), $name);
        $app = new Application();
        $app -> fullname = $request->input('fullname');
        $app -> contact = $request->input('contact');
        $app -> email = $request->input('email');
        $app -> cv = $name;
        $app -> job_id = $request->input('job_id');;
        $app -> save();

        if($app){
            return back()->with('success', "Applied !");
        };
    }

    public function destroy(Application $application){
        $application->delete();
        if($application){
            return back()->with('success', 'Removed Successfully');
        }
    }
}
