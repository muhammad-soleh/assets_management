@extends('template.main')
@section('judul', 'Suppliers')
@section('main')

    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Table Suppliers</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="mb-4">
                                <a href="/suppliers/create" class="btn btn-primary">Add Suppliers</a>
                            </div>
                            <table class="table table-bordered" role="table">
                                <thead>
                                    <tr>
                                        <th style="width: 10px" scope="col">#</th>
                                        <th scope="col">Supplier Name</th>
                                        <th scope="col">Contact Person</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($suppliers as $supplier)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $supplier->name }}</td>
                                            <td>{{ $supplier->contact_person }}</td>
                                            <td>{{ $supplier->address }}</td>
                                            <td>{{ $supplier->phone }}</td>
                                            <td>{{ $supplier->email }}</td>

                                            <td><a href="/suppliers/{{ $supplier->id }}/edit"
                                                    class="btn btn-sm btn-warning">Edit</a>
                                            </td>
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
