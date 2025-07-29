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
    @if(session('success'))
        <div style="background-color: #d4edda; color: #155724; padding: 10px; margin-bottom: 15px; border: 1px solid #c3e6cb;">
            {{ session('success') }}
        </div>
    @endif


    <h1>قائمة الموظفين</h1>

    <table>
        <thead>
            <tr>
                <th>الاسم الأول</th>
                <th>الاسم الأخير</th>
                <th>المرتبة الوظيفية</th>
                <th>البريد الإلكتروني</th>
                <th>رقم الهاتف</th>
                <th>المدينة</th>
                <th>القسم</th>
                <th>الراتب</th>
                <th>الوصف</th>
                <th>إجرائيات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->first_name }}</td>
                    <td>{{ $employee->last_name }}</td>
                    <td>{{ $employee->rank}}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->phone }}</td>
                    <td>{{ $employee->city }}</td>
                    <td>{{ $employee->department }}</td>
                    <td>{{ $employee->salary }}</td>
                    <td>{{ $employee->description }}</td>
                    <td>
                        <form action="{{ route('employees.edit', $employee->id) }}" method="GET" style="display:inline;">
                            <button type="submit">تعديل</button>
                        </form>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('هل أنت متأكد من حذف هذا الموظف؟')">حذف</button>
                        </form>
                        <form action="{{ route('employees.show', $employee->id) }}" method="GET" style="display:inline;">
                            <button type="submit">عرض التفاصيل</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>