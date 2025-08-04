<<<<<<< HEAD
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
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <style>
        body {
           font-family:'Georgia', serif;
            background-color: #f8f9fa;
            padding: 20px;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .btn-group .btn {
            margin-right: 5px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1 class="mb-4 ">Employee List</h1>
>>>>>>> 6a2501a0b9da707eed50dfce04ff10742915cc35

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
<<<<<<< HEAD
            <a href="{{ route('employees.create') }}" class="btn craete" >
                <i class="fa-solid fa-plus"></i>
                 Add New Employee
            </a>
        </div>
=======
            <a href="{{ route('employees.create') }}" class="btn btn-outline-info">
                + Add New Employee
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover shadow-sm bg-white">
                <thead class="table-info">
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
                                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-outline-secondary btn-sm">Edit</a>
                                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger btn-sm" type="submit">Delete</button>
                                    </form>
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
>>>>>>> 6a2501a0b9da707eed50dfce04ff10742915cc35

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

<<<<<<< HEAD
@endsection

=======

</body>
</html>

>>>>>>> 6a2501a0b9da707eed50dfce04ff10742915cc35
