@csrf

@if(isset($employee))
    @method('PUT')
@endif

<label>الاسم الأول:</label>
<input type="text" name="first_name" value="{{ old('first_name', $employee->first_name ?? '') }}">
@error('first_name')
    <div style="color: red;">{{ $message }}</div>
@enderror

<label>الاسم الأخير:</label>
<input type="text" name="last_name" value="{{ old('last_name', $employee->last_name ?? '') }}">
@error('last_name')
    <div style="color: red;">{{ $message }}</div>
@enderror

<label for="rank">المسمى الوظيفي:</label>
<select name="rank" id="rank">
    <option value="موظف عادي" {{ old('rank', $employee->rank ?? '') == 'موظف عادي' ? 'selected' : '' }}>موظف عادي</option>
    <option value="مدير" {{ old('rank', $employee->rank ?? '') == 'مدير' ? 'selected' : '' }}>مدير</option>
</select>
@error('rank')
    <div style="color: red;">{{ $message }}</div>
@enderror

<label>البريد الإلكتروني:</label>
<input type="email" name="email" value="{{ old('email', $employee->email ?? '') }}">
@error('email')
    <div style="color: red;">{{ $message }}</div>
@enderror

<label>رقم الهاتف:</label>
<input type="text" name="phone" value="{{ old('phone', $employee->phone ?? '') }}">
@error('phone')
    <div style="color: red;">{{ $message }}</div>
@enderror

<label>المدينة:</label>
<input type="text" name="city" value="{{ old('city', $employee->city ?? '') }}">
@error('city')
    <div style="color: red;">{{ $message }}</div>
@enderror

<label>الراتب الشهري:</label>
<input type="number" name="salary" value="{{ old('salary', $employee->salary ?? '') }}">
@error('salary')
    <div style="color: red;">{{ $message }}</div>
@enderror

<label>القسم:</label>
<input type="text" name="department" value="{{ old('department', $employee->department ?? '') }}">
@error('department')
    <div style="color: red;">{{ $message }}</div>
@enderror

<label>الوصف الوظيفي:</label>
<textarea name="description">{{ old('description', $employee->description ?? '') }}</textarea>
@error('description')
    <div style="color: red;">{{ $message }}</div>
@enderror