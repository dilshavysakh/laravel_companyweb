<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::id())
        {
        $company=Company::paginate(10);
        
        return view('company_home',compact("company"));
        }
        else{
            return redirect('login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::id())
        {
        $company=Company::all();
        return view('create_company',compact("company"));
        }
        else{
            return redirect('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            "name"=>"required",
            "logo"  => "dimensions:min_width=100,min_height=100",
            
        ]);
        if(Auth::id())
        {

        $company=new Company();
        $company->name=$request->name;
        $company->email=$request->email;
        $company->website=$request->website;

        if($request->hasFile('logo')){
            $destination_path='public/images/logo';
            $image=$request->file('logo');
            $imagename=$image->getClientOriginalName();
            $path=$request->file('logo')->storeAs($destination_path,$imagename);

            $company->logo=$imagename;
        }

        $company->save();

        return redirect()->back();
        }
        else{
            return redirect('login');
        }
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
        if(Auth::id())
        {
        $company=Company::find($id);
        return view('update_company',compact('company'));
        }
        else{
            return redirect('login');
        }
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
        if(Auth::id())
        {
        $company=Company::find($id);
        

        $company->name=$request->name;
        $company->email=$request->email;
        $company->website=$request->website;

        if($request->hasFile('logo')){
            $destination_path='public/images/logo';
            $image=$request->file('logo');
            $imagename=$image->getClientOriginalName();
            $path=$request->file('logo')->storeAs($destination_path,$imagename);

            $company->logo=$imagename;
        }

        $company->save();

        return redirect()->back()->with('message','Company Details Updated Successfully!');
        }
        else{
            return redirect('login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::id())
        {
        $data=Company::find($id);
        $data->delete();
        return redirect()->back();
        }
        else{
            return redirect('login');
        }
    }
}
