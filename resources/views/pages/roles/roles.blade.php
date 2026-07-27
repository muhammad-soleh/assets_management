@extends('template.main')
@section('judul', 'Roles')
@section('main')
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Table Roles</h3>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="mb-4">
                                <a href="/roles/form" class="btn btn-primary">Add Roles</a>
                            </div>
                            <table class="table table-bordered" role="table">
                                <thead>
                                    <tr>
                                        <th style="width: 10px" scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td>{{ $role->description }}</td>
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
