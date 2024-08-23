<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all()->sortBy('nombres');;
        return view('employees.index', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cedula' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'ciudad' => 'required',
            'cargo' => 'required',
            'salario' => 'required',
        ]);
        Employee::create($request->all());
        return redirect()->route('employees.index')
          ->with('success','Employee created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee = Post::find($id);
        return view('employees.show', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'cedula' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'ciudad' => 'required',
            'cargo' => 'required',
            'salario' => 'required',
        ]);
        $employee = Employee::find($id);
        $employee->update($request->all());
        return redirect()->route('employees.index')
          ->with('success', 'Employee updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->route('employees.index')
          ->with('success', 'Employee deleted successfully');
    }

    public function create()
    {
      return view('employees.create');
    }

    public function edit($id)
    {
      $employee = Employee::find($id);
      return view('employees.edit', compact('employee'));
    }
}
