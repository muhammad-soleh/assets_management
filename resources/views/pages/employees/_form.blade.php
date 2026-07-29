<div class="card card-primary card-outline mb-4">
    <div class="card-header">
        <div class="card-title">@yield('title_form') Employee</div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card-body">
        <div class="row">

            <!-- Kolom Kiri -->
            <div class="col-md-6">
                <p>Employee Login</p>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email', $employee->user->email ?? '') }}" id="email" name="email">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                        name="password">
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select id="role" name="role_id" class="form-control">
                        <option value="" selected>Select Employee Role</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}"
                                {{ old('role_id', $employee->user->role_id ?? '') == $role->id ? 'selected' : '' }}>
                                {{ $role->name }}
                            </option>
                        @endforeach
                    </select>
                </div>


            </div>

            <!-- Kolom Kanan -->
            <div class="col-md-6 border-start ">
                <p>Employee Info</p>
                <div class="mb-3">
                    <label for="employee_number" class="form-label">Employee Number</label>
                    <input type="text" class="form-control @error('employee_number') is-invalid @enderror"
                        value="{{ old('employee_number', $employee->employee_number ?? '') }}" id="employee_number"
                        name="employee_number">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name', $employee->user->name ?? '') }}" id="name" name="name">
                </div>

                <div class="mb-3">
                    <label for="departments" class="form-label">departments</label>
                    <select id="departments" name="department_id" class="form-control">
                        <option value="" selected>Select Employee departments</option>
                        @foreach ($departments as $department)
                            <option value="{{ $department->id }}"
                                {{ old('department_id', $employee->department_id ?? '') == $department->id ? 'selected' : '' }}>
                                {{ $department->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="locations" class="form-label">locations</label>
                    <select id="locations" name="location_id" class="form-control">
                        <option value="" selected>Select Employee locations</option>
                        @foreach ($locations as $location)
                            < <option value="{{ $location->id }}"
                                {{ old('location_id', $employee->location_id ?? '') == $location->id ? 'selected' : '' }}>
                                {{ $location->name }}
                                </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror"
                        value="{{ old('phone', $employee->phone ?? '') }}" id="phone" name="phone">
                </div>

                <div class="mb-3">
                    <label for="position" class="form-label">Position</label>
                    <input type="text" class="form-control @error('position') is-invalid @enderror"
                        value="{{ old('position', $employee->position ?? '') }}" id="position" name="position">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="" selected>Select Employee Status</option>
                        <option value="Active">Active</option>
                        <option value="Resign">Resign</option>
                    </select>
                </div>
            </div>

        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
