<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;

class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = DB::table('blogs')->orderBy('id', 'desc')->get();
        return view('admin.blogs')->with(['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        if(request()->hasFile('image')){
            request()->validate([

                'image' => 'required|image|mimes:jpeg,jpg|max:5048',

            ]);
        }

        $this -> validate($request, [
            'title' => ['required', 'string', 'max:255', 'unique:blogs'],
            'content' => ['required', 'string'],
        ]);


        $image = $request->file('image');
        $name = time().'.'. $image->getClientOriginalExtension();
        $image->move(public_path('images'), $name);
        $blog = new Blog();
        $blog -> title = $request->input('title');
        $blog -> content = $request->input('content');
        $blog -> image = $name;
        $blog -> admin_id = Auth::user()->id;
        $blog -> save();

        if($blog){
            return back()->with('success', "Blog created successfully");
        };
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(request()->hasFile('image')){
            request()->validate([

                'image' => 'required|image|mimes:jpeg,jpg|max:5048',

            ]);
        }

        $this -> validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
        ]);

        if(request()->hasFile('image')){
            $image = $request->file('image');
            $filename = time().'.'. $image->getClientOriginalExtension();
            $image->move(public_path('images'), $filename);
            $img = Blog::find($id);
            $img->image = $filename;
            $img->save();
        }

        $update = Blog::find($id)->update([
            'title' => $request->input('title'),
            'content' => $request->input('content')
        ]);

        if($update){
            return back()->with('success', "Blog updated successfully");
        }
        if($img){
            return back()->with('success', "Blog updated successfully");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        if ($blog){
            return back()->with('success', "Blog Deleted successfully");
        }
    }
}
