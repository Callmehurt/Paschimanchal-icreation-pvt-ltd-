<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsAndEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventAndNewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        $events = DB::table('news_and_events')->orderBy('id', 'desc')->get();
        return view('admin.manage-news-events')->with(['events' => $events]);
    }

    public function manage_photo($id){
        $images = DB::table('galleries')->where('event_id', $id)->orderBy('id', 'desc')->get();
        return view('admin.photo-gallery')->with(['images' => $images, 'id' => $id]);
    }

    public function store(Request $request)
    {
        if(request()->hasFile('image')){
            request()->validate([

                'image' => 'required|image|mimes:jpeg,jpg|max:5048',

            ]);
        }

        $this -> validate($request, [
            'title' => ['required', 'string', 'max:255', 'unique:news_and_events'],
            'content' => ['required', 'string'],
        ]);


        $image = $request->file('image');
        $name = time().'.'. $image->getClientOriginalExtension();
        $image->move(public_path('events'), $name);
        $event = new NewsAndEvent();
        $event -> title = $request->input('title');
        $event -> content = $request->input('content');
        $event -> image = $name;
        $event -> location = $request->input('location');
        $event -> date = $request->input('date');
        $event -> save();

        if($event){
            return back()->with('success', "Added Successfully");
        };
    }


    public function update(Request $request, $id)
    {
        if(request()->hasFile('image')){
            request()->validate([

                'image' => 'required|image|mimes:jpeg,jpg|max:5120',

            ]);
        }

        $this -> validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
        ]);

        if(request()->hasFile('image')){
            $image = $request->file('image');
            $filename = time().'.'. $image->getClientOriginalExtension();
            $image->move(public_path('events'), $filename);
            $img = NewsAndEvent::find($id);
            $img->image = $filename;
            $img->save();
        }

        $update = NewsAndEvent::find($id)->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'location' => $request->input('location'),
            'date' => $request->input('date'),
        ]);

        if($update){
            return back()->with('success', "Updated Successfully");
        }
        if($img){
            return back()->with('success', "Updated Successfully");
        }
    }

    public function destroy(NewsAndEvent $newsAndEvent){
        $newsAndEvent->delete();
        if($newsAndEvent){
            return back()->with('success', "Deleted Successfully");
        }
    }
}
