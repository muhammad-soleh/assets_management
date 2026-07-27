@extends('template.main')
@section('judul', 'Employees')
@section('main')
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Table Employees</h3>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="mb-4">
                                <a href="/employees/form" class="btn btn-primary">Add Employee</a>
                            </div>
                            <table class="table table-bordered" role="table">
                                <thead>
                                    <tr>
                                        <th style="width: 10px" scope="col">#</th>
                                        <th style="width: 70px" scope="col">Employee Number</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Department</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Position</th>
                                        <th scope="col">Roles</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $employee)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $employee->employee_number }}</td>
                                            <td>{{ $employee->user->name }}</td>
                                            <td>{{ $employee->user->email }}</td>
                                            <td>{{ $employee->department->name }}</td>
                                            <td>{{ $employee->location->name }}</td>
                                            <td>{{ $employee->phone }}</td>
                                            <td>{{ $employee->position }}</td>
                                            <td>{{ $employee->user->role->name }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-end">
                                <li class="page-item">
                                    <a class="page-link" href="#">«</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">»</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!--end::Container-->
    </div>
@endsection
