<<<<<<< HEAD
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

=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            padding: 40px;
        }
        .profile-img {
            max-width: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="container bg-white p-4 rounded shadow-sm">
        <h2 class="mb-4">Employee Details</h2>

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

>>>>>>> 6a2501a0b9da707eed50dfce04ff10742915cc35
        <div class="mt-4 text-end">
            <a href="{{ route('employees.index') }}" class="btn btn-outline-secondary">Back to List</a>
        </div>
    </div>
@endsection