@extends('layouts.app')
@section('title', 'Employee List')
@section('page title', 'Employee List') 
@section('breadcrumb')  
    <li class="breadcrumb-item active" aria-current="page">Employee List</li>
@endsection
@section('content')
    <div class="container" style=" 
            background-color: #f0f2f5;
            padding: 20px;">

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('update'))
            <div class="alert alert-info">{{ session('update') }}</div>
        @endif
        @if(session('destroy'))
            <div class="alert alert-danger">{{ session('destroy') }}</div>
        @endif

        <div class="mb-3 text-end">
            <a href="{{ route('employees.create') }}" class="btn craete" >
                <i class="fa-solid fa-plus"></i>
                 Add New Employee
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover shadow-sm bg-white">
                <thead >
                    <tr>
                        <th>Full Name</th>
                        <th>Rank</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>City</th>
                        <th>Department</th>
                        <th>Salary</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($employees as $employee)
                        <tr>
                            <td>{{ $employee->first_name }} {{ $employee->last_name }}</td>
                            <td>{{ $employee->rank }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->phone }}</td>
                            <td>{{ $employee->city }}</td>
                            <td>{{ $employee->department }}</td>
                            <td>${{ number_format($employee->salary, 2) }}</td>
                            <td>{{ $employee->description }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-outline-info btn-sm">View</a>
                                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger btn-sm" type="submit">Delete</button>
                                    </form>
                                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-outline-secondary btn-sm">Edit</a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="10" class="text-center">No employees found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection

