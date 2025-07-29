<!DOCTYPE html>
<html>
<head>
    <title>تفاصيل الموظف</title>
    <style>
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .item { margin-bottom: 10px; }
        .label { font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <h1>تفاصيل الموظف</h1>
        <div class="item"><span class="label">الاسم الأول:</span> {{ $employee->first_name }}</div>
        <div class="item"><span class="label">الاسم الأخير:</span> {{ $employee->last_name }}</div>
        <div class="item"><span class="label">المسمى الوظيفي:</span> {{ $employee->rank }}</div>
        <div class="item"><span class="label">البريد الإلكتروني:</span> {{ $employee->email }}</div>
        <div class="item"><span class="label">رقم الهاتف:</span> {{ $employee->phone }}</div>
        <div class="item"><span class="label">المدينة:</span> {{ $employee->city }}</div>
        <div class="item"><span class="label">القسم:</span> {{ $employee->department }}</div>
        <div class="item"><span class="label">الراتب:</span> {{ $employee->salary }}</div>
        <div class="item"><span class="label">الوصف:</span> {{ $employee->description }}</div>

        <a href="{{ route('employees.index') }}">الرجوع إلى القائمة</a>
    </div>
</body>
</html>