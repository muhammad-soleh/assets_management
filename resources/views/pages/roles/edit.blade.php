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
                    <form action="/roles/{{ $role->id }}/edit" method="post">
                        @csrf
                        @method('PUT')
                        @include('pages.roles._form')
                    </form>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
