<<<<<<< HEAD
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
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            padding: 40px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mb-4">Add New Employee</h2>

        <form action="{{ route('employees.store') }}" method="POST" class="bg-white p-4 rounded shadow-sm">
            @include('employees._form')
            <div class="text-end">
                <button type="submit" class="btn btn-primary">Save Employee</button>
>>>>>>> 6a2501a0b9da707eed50dfce04ff10742915cc35
                <a href="{{ route('employees.index') }}" class="btn btn-outline-secondary">Back</a>
            </div>
        </form>
    </div>
<<<<<<< HEAD
@endsection
=======
</body>
</html>
>>>>>>> 6a2501a0b9da707eed50dfce04ff10742915cc35
