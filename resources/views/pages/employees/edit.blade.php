@extends('template.main')
@section('judul', 'Form Employees')
@section('title_form', 'Edit')
@section('main')
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-md-12">
                    <form action="/employees/{{ $employee->id }}/edit" method="post">
                        @csrf
                        @method('PUT')
                        @include('pages.employees._form')
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
