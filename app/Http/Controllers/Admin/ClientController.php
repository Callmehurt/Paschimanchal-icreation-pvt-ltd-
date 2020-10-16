<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $clients = DB::table('clients')->orderBy('id', 'desc')->get();
        return view('admin.clients')->with(['clients' => $clients]);
    }

    public function store(Request $request){

        if(request()->hasFile('image')){
            request()->validate([

                'image' => 'required|image|mimes:png|max:5048',

            ]);
        }

        $this -> validate($request, [
            'name' => ['required', 'string', 'max:255', 'unique:clients'],
        ]);


        $image = $request->file('image');
        $name = time().'.'. $image->getClientOriginalExtension();
        $image->move(public_path('clients'), $name);
        $client = new Client();
        $client -> name = $request->input('name');
        $client -> image = $name;
        $client -> save();

        if($client){
            return back()->with('success', "Client Added successfully");
        };
    }

    public function destroy(Client $client){
        $client->delete();
        if($client){
            return back()->with('success', 'Removed Successfully');
        }
    }

    public function update(Request $request, $id){
        if(request()->hasFile('image')){
            request()->validate([

                'image' => 'required|image|mimes:png|max:5048',

            ]);
        }

        $this -> validate($request, [
            'name' => ['required', 'string', 'max:255'],
        ]);

        if(request()->hasFile('image')){
            $image = $request->file('image');
            $filename = time().'.'. $image->getClientOriginalExtension();
            $image->move(public_path('clients'), $filename);
            $img = Client::find($id);
            $img->image = $filename;
            $img->save();
        }

        $update = Client::find($id)->update([
            'name' => $request->input('name'),
        ]);

        if($update){
            return back()->with('success', "Updated Successfully");
        }
        if($img){
            return back()->with('success', "Updated Successfully");
        }
    }

}
