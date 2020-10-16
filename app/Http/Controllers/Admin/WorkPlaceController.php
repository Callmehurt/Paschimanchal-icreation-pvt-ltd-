<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WorkPlace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class WorkPlaceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $places = DB::table('work_places')->orderBy('id', 'desc')->get();
        return view('admin.work-place')->with(['places' => $places]);
    }


    public function store(Request $request)
    {

        $this -> validate($request, [
            'location' => ['required', 'string', 'max:150', 'unique:work_places'],
            'staffcount' => ['required', 'integer'],
        ]);

        $places = new WorkPlace();
        $places -> location = $request->input('location');
        $places -> staffcount = $request->input('staffcount');
        $places->save();

        if($places){
            return back()->with('success', 'Added Successfully');
        }

    }


    public function update(Request $request, $id)
    {
        $this -> validate($request, [
            'location' => ['required', 'string', 'max:150'],
            'staffcount' => ['required', 'integer'],
        ]);

        $update = WorkPlace::find($id)->update([
            'location' => $request->input('location'),
            'staffcount' => $request->input('staffcount')
        ]);


        if($update){
            return back()->with('success', 'Updated Successfully');
        }

    }

    public function destroy(WorkPlace $workPlace){
        $workPlace->delete();
        if($workPlace){
            return back()->with('success', 'Removed Successfully');
        }

    }
}
