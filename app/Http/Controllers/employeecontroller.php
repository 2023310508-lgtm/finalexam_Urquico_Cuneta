<?php

namespace App\Http\Controllers;
use Illuminate\Support\Fascades\DB;
use Response;
use Illuminate\Http\Request;
use App\Models\employee;

class employeecontroller extends Controller
{
    public function index()
    {   
        return view ('employee.index');
    }


    public function create()
    {
        return view ('employee.create');
    }


    public function store(Request $request)
    {
        $employee = new employee;
        $employee->fname = $request->input('fname');
        $employee->mname = $request->input('mname');
        $employee->lname = $request->input('lname');
        $employee->address = $request->input('address');
        $employee->dob = $request->input('dob');
        $employee->contactNo = $request->input('contactNo');
        $employee->save();

        return redirect()->route('employee.index')->with('success', 'Employee created successfully.');
    }

    public function edit( int $id)
    {
        $employee = employee::find($id);
        return view ('employee.edit', compact('employee'));
    }

    public function update(Request $request, int $id) {
        //
    }

    public function destroy(int $id){
      //
    }
}
