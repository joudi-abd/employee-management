@extends('layouts.app')
@section('title', 'Add New Employee')
@section('page title', 'Add New Employee')  
@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Add Employee</li>    
@endsection
@section('content')
    <div class="container" style=" 
            background-color: #f0f2f5;
            padding: 10px;">
        <form action="{{ route('employees.store') }}" method="POST" class="bg-white p-4 rounded shadow-sm">
            @include('employees._form')
            <div class="text-end">
                <button type="submit" class="btn" style="background-color:#2c3e50; color:#f0f2f5">Save Employee</button>
                <a href="{{ route('employees.index') }}" class="btn btn-outline-secondary">Back</a>
            </div>
        </form>
    </div>
@endsection