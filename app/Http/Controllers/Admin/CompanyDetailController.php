<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyDetailController extends Controller
{
    public function index(){
        $details = DB::table('company_details')->get();
        return view('admin.company-detail')->with(['details' => $details]);

    }

    public function update(Request $request, $id){

        $this -> validate($request, [
            'office_location' => ['required', 'string', 'max:255'],
            'landline' => ['required', 'string'],
            'mobile' => ['required', 'string'],
            'mail' => ['required', 'email'],
            'gmail' => ['required', 'email'],
            'domain' => ['required', 'string'],
        ]);

        $update = CompanyDetail::find($id)->update([
            'office_location' => $request->input('office_location'),
            'landline' => $request->input('landline'),
            'mobile' => $request->input('mobile'),
            'mail' => $request->input('mail'),
            'gmail' => $request->input('gmail'),
            'domain' => $request->input('domain'),
        ]);

        if($update){
            return back()->with('success', "Details Updated Successfully");
        }
    }
}
