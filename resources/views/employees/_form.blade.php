@csrf
@if(isset($employee))
    @method('PUT')
@endif

<div class="mb-3">
    <label class="form-label">First Name</label>
    <input type="text" name="first_name" class="form-control" value="{{ old('first_name', $employee->first_name ?? '') }}">
    @error('first_name')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Last Name</label>
    <input type="text" name="last_name" class="form-control" value="{{ old('last_name', $employee->last_name ?? '') }}">
    @error('last_name')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Rank</label>
    <select name="rank" class="form-select">
        <option value="Employee" {{ old('rank', $employee->rank ?? '') == 'Employee' ? 'selected' : '' }}>Employee</option>
        <option value="Manager" {{ old('rank', $employee->rank ?? '') == 'Manager' ? 'selected' : '' }}>Manager</option>
    </select>
    @error('rank')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $employee->email ?? '') }}">
    @error('email')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Phone</label>
    <input type="text" name="phone" class="form-control" value="{{ old('phone', $employee->phone ?? '') }}">
    @error('phone')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">City</label>
    <input type="text" name="city" class="form-control" value="{{ old('city', $employee->city ?? '') }}">
    @error('city')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Salary</label>
    <input type="number" name="salary" class="form-control" value="{{ old('salary', $employee->salary ?? '') }}">
    @error('salary')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Department</label>
    <input type="text" name="department" class="form-control" value="{{ old('department', $employee->department ?? '') }}">
    @error('department')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Description</label>
    <textarea name="description" class="form-control">{{ old('description', $employee->description ?? '') }}</textarea>
    @error('description')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>