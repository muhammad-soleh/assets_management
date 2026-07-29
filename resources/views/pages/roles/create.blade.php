@extends('template.main')
@section('judul', 'Form Employees')
@section('title_form', 'Add')
@section('main')
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-md-12">
                    <form action="/roles/create" method="post">
                        @csrf
                        @include('pages.roles._form')
                    </form>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
