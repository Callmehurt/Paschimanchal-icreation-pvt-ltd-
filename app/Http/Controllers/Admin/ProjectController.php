<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('admin.projects');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage_project()
    {
        $projects = DB::table('projects')->orderBy('id', 'desc')->get();
        return view('admin.manage-project')->with(['projects' => $projects]);

    }


    public function store(Request $request)
    {
        if(request()->hasFile('image')){
            request()->validate([

                'image' => 'required|image|mimes:jpeg,jpg|max:5048',

            ]);
        }

        $this -> validate($request, [
            'project_name' => ['required', 'string', 'max:255', 'unique:projects'],
            'client' => ['required', 'string', 'max:255'],
            'area' => ['required', 'string', 'max:255'],
            'year' => ['required', 'date', 'max:255'],
            'customer' => ['required', 'string', 'max:255'],
        ]);


        $image = $request->file('image');
        $name = time().'.'. $image->getClientOriginalExtension();
        $image->move(public_path('projects'), $name);
        $project = new Project();
        $project -> project_name = $request->input('project_name');
        $project -> client = $request->input('client');
        $project -> area = $request->input('area');
        $project -> year = $request->input('year');
        $project -> contract_name = $request->input('contract_name');
        $project -> customer = $request->input('customer');
        $project -> description = $request->input('description');
        $project -> quantity = $request->input('quantity');
        $project -> image = $name;
        $project -> save();

        if($project){
            return back()->with('success', "Blog created successfully");
        };
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        if(request()->hasFile('image')){
            request()->validate([

                'image' => 'required|image|mimes:jpeg,jpg|max:5048',

            ]);
        }

        $this -> validate($request, [
            'project_name' => ['required', 'string', 'max:255'],
            'client' => ['required', 'string', 'max:255'],
            'area' => ['required', 'string', 'max:255'],
            'year' => ['required', 'date', 'max:255'],
            'customer' => ['required', 'string', 'max:255'],
        ]);

        if(request()->hasFile('image')){
            $image = $request->file('image');
            $filename = time().'.'. $image->getClientOriginalExtension();
            $image->move(public_path('projects'), $filename);
            $img = Project::find($id);
            $img->image = $filename;
            $img->save();
        }

        $update = Project::find($id)->update([
            'project_name' => $request->input('project_name'),
            'client' => $request->input('client'),
            'area' => $request->input('area'),
            'year' => $request->input('year'),
            'contract_name' => $request->input('contract_name'),
            'customer' => $request->input('customer'),
            'description' => $request->input('description'),
            'quantity' => $request->input('quantity'),
        ]);

        if($update){
            return back()->with('success', "Updated Successfully");
        }
        if($img){
            return back()->with('success', "Updated Successfully");
        }
    }


    public function destroy(Project $project)
    {
        $project->delete();
        if($project){
            return back()->with('success', 'Removed Successfully');
        }
    }
}


