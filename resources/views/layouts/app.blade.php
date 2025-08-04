<!DOCTYPE html><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Edu+QLD+Beginner:wght@400..700&display=swap" rel="stylesheet">
    <style>
        :root {
            --sidebar-width: 250px;
            --navbar-height: 60px;
            --primary-color: #2c3e50;
            --secondary-color: #fff3cd;
            --light-color: #f0f2f5;
        }
        body {
            padding-top: var(--navbar-height);
            padding-left: var(--sidebar-width);
            transition: all 0.3s;
            height: 100vh;
            font-family: 'Georgia', serif;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: var(--sidebar-width);
            height: 100%;
            background-color: var(--primary-color);
            color: var(--light-color);
            padding: 20px 0;
            z-index: 1000;
            overflow-y: auto;
        }

        .col-md-6{
            padding-left: 0;

        }
        .sidebar-header {
            padding: 0 20px 20px;
            font-style: normal;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .sidebar-nav {
            padding: 0;
            list-style: none;
        }

        .sidebar-nav li {
            margin: 5px 0;
        }

        .sidebar-nav a {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: var(--light-color);
            text-decoration: none;
            border-left: 3px solid transparent;
        }

        .sidebar-nav a:hover,
        .sidebar-nav a.active {
            background-color: rgba(255, 255, 255, 0.1);
            color: var(--secondary-color);
            border-left: 3px solid var(--secondary-color);
        }

        .sidebar-nav i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }

        .page-header {
            padding: 0.75rem 1.25rem;
            margin: 0;
            background-color: var(--light-color);
            border-bottom: 1px solid #dee2e6;
            width: 100%;
        }

        .page-header .breadcrumb {
            margin-bottom: 0;
            background: transparent;
            padding: 0;
        }
        .page-header h4 {
        
            color: var(--primary-color);
        }           
        .navbar-custom {
            position: fixed;
            top: 0;
            left: var(--sidebar-width);
            right: 0;
            height: var(--navbar-height);
            background-color: var(--light-color);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            z-index: 1001;
        }

        .navbar-brand h1 {
            font-weight: bold;
            margin: 0;
            color: var(--primary-color);
        
        }

        .navbar-brand {
            margin-left: 10px;
        }
        .table th{
            background-color: #2c3e50; 
            color: white;
             vertical-align: middle;
        }
        .table td {
            color:#2c3e50;
            vertical-align: middle;
        }
        .craete{
           background-color: #2c3e50; 
           color: white;
        }
        .create :hover{
            color: #2c3e50;
            background-color: #fff3cd;
            border-color: #2c3e50;
        }
        .btn-group .btn {
            margin-right: 5px;
        }
        @media (max-width: 768px) {
            body {
                padding-left: 0;
            }

            .sidebar {
                width: 70%;
                transform: translateX(-100%);
            }

            .navbar-brand {
                margin-right: 60px;
            }
            .page-header {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }
        }
    </style>

</head>
<body class="d-flex flex-column min-vh-100">
    @include('layouts.sections.sidebar')
    @include('layouts.sections.header')
    <main class="flex-grow-1" >
       <div class="page-header">
            <div class="row align-items-center mx-0">
                <div class="col-md-6">
                    <h4 class="mb-0 ">
                        @yield('page title')
                    </h4>
                </div>
                <div class="col-md-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-md-end">
                            <li class="breadcrumb-item">Home</li>
                            @yield('breadcrumb')
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container-fluid py-4">
            @yield('content')
        </div>
    </main>

@include('layouts.sections.footer')

</body>
</html>


