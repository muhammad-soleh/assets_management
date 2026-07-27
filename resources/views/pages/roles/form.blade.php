@extends('template.main')
@section('judul', 'Form Employees')
@section('main')
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-md-12">
                    <form action="/roles/form" method="post">
                        <div class="card card-primary card-outline mb-4">
                            <div class="card-header">
                                <div class="card-title">Add Employee</div>
                            </div>

                            <div class="card-body">
                                <div class="row">

                                    <!-- Kolom Kiri -->
                                    <div class="col-md-6">
                                        <p>Employee Login</p>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Role Name</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                        </div>

                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea class="form-control" id="description" placeholder="Add description here" style="height: 6rem"
                                                name="description"></textarea>
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
@endsection
