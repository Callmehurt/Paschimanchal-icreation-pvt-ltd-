<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        return view('admin.services');
    }

    public function manage_service(){
        $services = DB::table('services')->orderBy('id', 'desc')->get();
        return view('admin.manage-service')->with(['services' => $services]);

    }

    public function store(Request $request){

        if(request()->hasFile('image')){
            request()->validate([

                'image' => 'required|image|mimes:jpeg,jpg|max:5048',

            ]);
        }

        $this -> validate($request, [
            'title' => ['required', 'string', 'max:255', 'unique:services'],
            'description' => ['required', 'string'],
            'designing' => ['required', 'string', 'max:255'],
            'deployment' => ['required', 'string', 'max:255'],
            'testing' => ['required', 'string', 'max:255'],
            'support' => ['required', 'string', 'max:255'],
        ]);


        $image = $request->file('image');
        $name = time().'.'. $image->getClientOriginalExtension();
        $image->move(public_path('services'), $name);
        $service = new Service();
        $service -> title = $request->input('title');
        $service -> description = $request->input('description');
        $service -> designing = $request->input('designing');
        $service -> deployment = $request->input('deployment');
        $service -> testing = $request->input('testing');
        $service -> support = $request->input('support');
        $service -> image = $name;
        $service -> save();

        if($service){
            return back()->with('success', "Service Added Successfully");
        };
    }


    public function destroy(Service $service){
        $service->delete();
        if($service){
            return back()->with('success', "Removed Successfully");
        };
    }


    public function update(Request $request, $id){

        if(request()->hasFile('image')){
            request()->validate([

                'image' => 'required|image|mimes:jpeg,jpg|max:5048',

            ]);
        }

        $this -> validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'designing' => ['required', 'string', 'max:255'],
            'deployment' => ['required', 'string', 'max:255'],
            'testing' => ['required', 'string', 'max:255'],
            'support' => ['required', 'string', 'max:255'],
        ]);

        if(request()->hasFile('image')){
            $image = $request->file('image');
            $filename = time().'.'. $image->getClientOriginalExtension();
            $image->move(public_path('services'), $filename);
            $img = Service::find($id);
            $img->image = $filename;
            $img->save();
        }

        $update = Service::find($id)->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'designing' => $request->input('designing'),
            'deployment' => $request->input('deployment'),
            'testing' => $request->input('testing'),
            'support' => $request->input('support'),
        ]);

        if($update){
            return back()->with('success', "Updated Successfully");
        }
        if($img){
            return back()->with('success', "Updated Successfully");
        }
    }

}
