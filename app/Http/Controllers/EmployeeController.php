<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
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
        
        $datas=Employee::paginate(10);
        
        return view('emp_home',compact("datas"));
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
        $employee=Employee::all();
        $company=Company::all();
        
        return view('create_employee',compact("employee","company"));
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
            "firstname"=>"required",
            "lastname"  => "required",
            
        ]);

        if(Auth::id())
        {
        $data=new Employee();

        $data->firstname=$request->firstname;
        $data->lastname=$request->lastname;
        $data->company_id=$request->company;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->save();

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
        $employee=Employee::find($id);
        $emp_array=Employee::all();
        $company=Company::all();
        return view('update_employee',compact('employee','emp_array','company'));
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
        $data=Employee::find($id);
        $data->firstname=$request->firstname;
        $data->lastname=$request->lastname;
        $data->company_id=$request->company;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->save();
        return redirect()->back();
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
        $data=Employee::find($id);
        $data->delete();
        return redirect()->back();
        }
        else{
            return redirect('login');
        }
    }
}
