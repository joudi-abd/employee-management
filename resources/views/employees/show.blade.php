@extends('layouts.app')
@section('title', 'Employee Details')
@section('page title', 'Employee Details')
@section('breadcrumb')
    <li class="breadcrumb-item">Employee List</li>
    <li class="breadcrumb-item active" aria-current="page">Employee Details</li>
@endsection
@section('content')
    <div class="container p-4 rounded shadow-sm" style=" 
            background-color: #f0f2f5;
            padding: 40px;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Full Name:</strong> {{ $employee->first_name }} {{ $employee->last_name }}</li>
            <li class="list-group-item"><strong>Rank:</strong> {{ $employee->rank }}</li>
            <li class="list-group-item"><strong>Email:</strong> {{ $employee->email }}</li>
            <li class="list-group-item"><strong>Phone:</strong> {{ $employee->phone }}</li>
            <li class="list-group-item"><strong>City:</strong> {{ $employee->city }}</li>
            <li class="list-group-item"><strong>Department:</strong> {{ $employee->department }}</li>
            <li class="list-group-item"><strong>Salary:</strong> ${{ number_format($employee->salary, 2) }}</li>
            <li class="list-group-item"><strong>Description:</strong> {{ $employee->description }}</li>
        </ul>

        <div class="mt-4 text-end">
            <a href="{{ route('employees.index') }}" class="btn btn-outline-secondary">Back to List</a>
        </div>
    </div>
@endsection