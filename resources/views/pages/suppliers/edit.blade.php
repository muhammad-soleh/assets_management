@extends('template.main')
@section('judul', 'Form Suppliers')
@section('title_form', 'Edit')
@section('main')
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-md-6">
                    <form action="/suppliers/{{ $supplier->id }}/edit" method="post">
                        @csrf
                        @method('PUT')
                        @include('pages.suppliers._form')

                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
@endsection
