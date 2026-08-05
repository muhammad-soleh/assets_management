@extends('template.main')
@section('judul', 'Form Suppliers')
@section('title_form', 'Add')
@section('main')
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-md-6">
                    <form action="/suppliers/create" method="post">
                        @csrf
                        @include('pages.suppliers._form')
                    </form>

                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
@endsection
