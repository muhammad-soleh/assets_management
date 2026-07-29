@extends('template.main')
@section('judul', 'Form Departments')
@section('title_form', 'Edit')
@section('main')
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-md-6">
                    <form action="/departments/{{ $department->id }}/edit" method="post">
                        @csrf
                        @method('PUT')
                        @include('pages.departments._form')

                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
@endsection
