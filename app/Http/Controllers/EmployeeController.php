<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    
    public function index()
    {
        // $employees = Employee::all();
        return view('employees.index', ['employees'=> Employee::all()]);
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => [
                'required',
                'string',
                'max:255',
                'min:1',
                'filter'
            ],
            'last_name' => [
                'required',
                'string',
                'max:255',
                'min:1',
                'filter'
            ],
            'rank' => [
                'required',
                'string',
                'max:255',
                'filter'
            ],
            'email' => [
                'required',
                'email',
                'unique:employees',
                'filter'
            ],
            'phone' => [
                'required',
                'string',
                'max:20',
                'filter'
            ],
            'city' => [
                'required',
                'string',
                'max:100',
                'filter'
            ],
            'salary' => [
                'required',
                'numeric',
                'min:0',
                'filter'
            ],
            'department' => [
                'required',
                'string',
                'max:100',
                'filter'
            ],
            'description' => [
                'nullable',
                'string',
                'max:500',
                'filter'
            ],
        ]);
        Employee::create($request->all());

        
        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }


    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.show', compact('employee'));
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => [
                'required',
                'string',
                'max:255',
                'min:1',
                'filter'
            ],
            'last_name' => [
                'required',
                'string',
                'max:255',
                'min:1',
                'filter'
            ],
            'rank' => [
                'required',
                'string',
                'max:255',
                'filter'
            ],
            'email' => [
                'required',
                'email',
                'unique:employees,email,'.$id,
                'filter'
            ],
            'phone' => [
                'required',
                'string',
                'max:20',
                'filter'
            ],
            'city' => [
                'required',
                'string',
                'max:100',
                'filter'
            ],
            'salary' => [
                'required',
                'numeric',
                'min:0',
                'filter'
            ],
            'department' => [
                'required',
                'string',
                'max:100',
                'filter'
            ],
            'description' => [
                'nullable',
                'string',
                'max:500',
                'filter'
            ],
        ]);
        $employee = Employee::findOrFail($id);
        $employee->update($request->all());
        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy($id)
    {
        $employee= Employee::findOrFail($id);
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
