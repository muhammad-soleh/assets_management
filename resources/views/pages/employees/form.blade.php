@extends('template.main')
@section('judul', 'Form Employees')
@section('main')
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-md-12">
                    <form action="/employees/form" method="post">
                        <div class="card card-primary card-outline mb-4">
                            <div class="card-header">
                                <div class="card-title">Add Employee</div>
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
                                            <input type="email" class="form-control" id="email" name="email">
                                        </div>

                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password" name="password">
                                        </div>

                                        <div class="mb-3">
                                            <label for="role" class="form-label">Role</label>
                                            <select id="role" name="role_id" class="form-control">
                                                <option value="" selected>Select Employee Role</option>
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->id }}">
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
                                            <input type="text" class="form-control" id="employee_number"
                                                name="employee_number">
                                        </div>

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                        </div>

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="departments" class="form-label">departments</label>
                                            <select id="departments" name="department_id" class="form-control">
                                                <option value="" selected>Select Employee departments</option>
                                                @foreach ($departments as $department)
                                                    <option value="{{ $department->id }}">
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
                                                    <option value="{{ $location->id }}">
                                                        {{ $location->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Phone</label>
                                            <input type="text" class="form-control" id="phone" name="phone">
                                        </div>

                                        <div class="mb-3">
                                            <label for="position" class="form-label">Position</label>
                                            <input type="text" class="form-control" id="position" name="position">
                                        </div>
                                        <div class="mb-3">
                                            <label for="status" class="form-label">Status</label>
                                            <option value="" selected>Select Employee Status</option>
                                            <option value="Active">Active</option>
                                            <option value="Resign">Resign</option>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>

    <script>
        new TomSelect("#role", {
            create: true,
            sortField: {
                field: "text",
                direction: "asc"
            }
        });
    </script>
@endsection
