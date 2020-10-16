<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Team;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $team = DB::table('teams')->orderBy('id', 'desc')->get();
        return view('admin.team')->with(['team' => $team]);

    }

    public function store(Request $request){
        if(request()->hasFile('image')){
            request()->validate([

                'image' => 'required|image|mimes:jpeg,jpg|max:5048',

            ]);
        }

        $this -> validate($request, [
            'fullname' => ['required', 'string', 'max:255', 'unique:teams'],
            'designation' => ['required', 'string', 'max:255'],
            'contact' => ['required', 'string', 'max:255'],
            'intro' => ['required', 'string', 'max:255'],
            'link' => ['required', 'string', 'max:255'],
        ]);


        $image = $request->file('image');
        $name = time().'.'. $image->getClientOriginalExtension();
        $image->move(public_path('team'), $name);
        $team = new Team();
        $team -> fullname = $request->input('fullname');
        $team -> designation = $request->input('designation');
        $team -> contact = $request->input('contact');
        $team -> intro = $request->input('intro');
        $team -> link = $request->input('link');
        $team -> image = $name;
        $team -> save();

        if($team){
            return back()->with('success', "Added Successfully");
        };
    }

    public function update(Request $request, $id){

        if(request()->hasFile('image')){
            request()->validate([

                'image' => 'required|image|mimes:jpeg,jpg|max:5048',

            ]);
        }

        $this -> validate($request, [
            'fullname' => ['required', 'string', 'max:255'],
            'designation' => ['required', 'string', 'max:255'],
            'contact' => ['required', 'string', 'max:255'],
            'intro' => ['required', 'string', 'max:255'],
        ]);

        if(request()->hasFile('image')){
            $image = $request->file('image');
            $filename = time().'.'. $image->getClientOriginalExtension();
            $image->move(public_path('team'), $filename);
            $img = Team::find($id);
            $img->image = $filename;
            $img->save();
        }

        $update = Team::find($id)->update([
            'fullname' => $request->input('fullname'),
            'designation' => $request->input('designation'),
            'contact' => $request->input('contact'),
            'intro' => $request->input('intro'),
            'link' => $request->input('link'),
        ]);

        if($update){
            return back()->with('success', "Updated Successfully");
        }
        if($img){
            return back()->with('success', "Updated Successfully");
        }
    }

    public function destroy(Team $team){
        $team->delete();
        if($team){
            return back()->with('success', "Removed Successfully");
        }
    }
}
