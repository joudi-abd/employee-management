<!DOCTYPE html>
<html>
<head>
    <title>إضافة موظف جديد</title>
    <style>
        form { max-width: 600px; margin: 0 auto; }
        label { display: block; margin-top: 10px; }
        input, textarea, select { width: 100%; padding: 8px; margin-top: 5px; }
        button { margin-top: 15px; padding: 10px 20px; }
    </style>
</head>
<body>
    <h1>إضافة موظف جديد</h1>

    <form action="{{ route('employees.store') }}" method="POST">
        @csrf

        <label>الاسم الأول:</label>
        <input type="text" name="first_name" required>

        <label>الاسم الأخير:</label>
        <input type="text" name="last_name" required>

        <label>المرتبة الوظيفية:</label>
        <input type="text" name="rank">

        <label>البريد الإلكتروني:</label>
        <input type="email" name="email" required>

        <label>رقم الهاتف:</label>
        <input type="text" name="phone">

        <label>المدينة:</label>
        <input type="text" name="city">

        <label>الراتب الشهري:</label>
        <input type="number" name="salary">

        <label>القسم:</label>
        <input type="text" name="department">

        <label>الوصف الوظيفي:</label>
        <textarea name="description"></textarea>

        <button type="submit">إضافة</button>
    </form>
</body>
</html>