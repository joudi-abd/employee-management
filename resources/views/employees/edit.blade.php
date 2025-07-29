<!DOCTYPE html>
<html>
<head>
    <title>تعديل بيانات الموظف</title>
    <style>
        form { max-width: 600px; margin: 0 auto; }
        label { display: block; margin-top: 10px; }
        input, textarea, select { width: 100%; padding: 8px; margin-top: 5px; }
        button { margin-top: 15px; padding: 10px 20px; }
    </style>
</head>
<body>
    <h1>تعديل بيانات الموظف</h1>

    <form action="{{ route('employees.update' , $employee) }}" method="POST">
        @csrf
        @method('PUT')

        @include('employees._form')
        <button type="submit">تحديث</button>
    </form>
</body>
</html>