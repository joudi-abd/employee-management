<!DOCTYPE html>
<html>
<head>
    <title>Employee List</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px; }
    </style>
</head>
<body>
    <h1>قائمة الموظفين</h1>

    <table>
        <thead>
            <tr>
                <th>الاسم الأول</th>
                <th>الاسم الأخير</th>
                <th>البريد الإلكتروني</th>
                <th>المدينة</th>
                <th>القسم</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->first_name }}</td>
                    <td>{{ $employee->last_name }}</td>
                   
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>