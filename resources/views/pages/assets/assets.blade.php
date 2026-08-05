@extends('template.main')
@section('judul', 'Assets')
@section('main')

    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Table Assets</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="mb-4">
                                <a href="/master-assets/create" class="btn btn-primary">Add Assets</a>
                            </div>
                            <table class="table table-bordered" role="table">
                                <thead>
                                    <tr>
                                        <th style="width: 10px" scope="col">#</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Asset Code</th>
                                        <th scope="col">Asset Name</th>
                                        <th scope="col">Brand</th>
                                        <th scope="col">Model</th>
                                        <th scope="col">Unit</th>
                                        <th scope="col">Minimum Stock</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($assets as $asset)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $asset->category->name }}</td>
                                            <td>{{ $asset->asset_code }}</td>
                                            <td>{{ $asset->asset_name }}</td>
                                            <td>{{ $asset->brand }}</td>
                                            <td>{{ $asset->model }}</td>
                                            <td>{{ $asset->unit }}</td>
                                            <td>{{ $asset->minimum_stock }}</td>
                                            <td>{{ $asset->description }}</td>
                                            <td>{{ $asset->status }}</td>
                                            <td><a href="/master-assets/{{ $asset->id }}/edit"
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
