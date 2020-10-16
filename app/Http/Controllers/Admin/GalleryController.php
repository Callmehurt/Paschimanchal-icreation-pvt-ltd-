<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.news-events');
    }

    public function store(Request $request){

        $input = $request->all();

        $file = $request->file('file');
        if($file){
            $filename = $file->getClientOriginalName();
            $file->move(public_path('gallery'), $filename);

            $upload = Gallery::create([
                'image' => $filename,
                'event_id' => $request->input('event_id'),
            ]);

            if($upload){

                return back()->with('success', 'Plz Reload the page');
            }


        }

//        $image = $request->file('file');
//        $imagename = $image->getClientOriginalName();
//        $image->move(public_path('gallery'), $imagename);
//
//        $upload = new Gallery();
//        $upload->image = $imagename;
//        $upload->event_id = 1;
//        $upload->save();

    }


    public function update(Request $request, $id){

        if(request()->hasFile('image')){
            request()->validate([

                'image' => 'required|image|mimes:jpeg,jpg|max:5048',

            ]);
        }


        if(request()->hasFile('image')){
            $image = $request->file('image');
            $filename = time().'.'. $image->getClientOriginalExtension();
            $image->move(public_path('gallery'), $filename);
            $img = Gallery::find($id);
            $img->image = $filename;
            $img->save();
        }

        if($img){
            return back()->with('success', "Updated Successfully");
        }
    }

    public function destroy(Gallery $gallery){
        $gallery->delete();
        if($gallery){
            return back()->with('success', "Deleted Successfully");
        }
    }
}
