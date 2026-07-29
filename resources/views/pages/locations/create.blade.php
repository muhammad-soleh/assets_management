@extends('template.main')
@section('judul', 'Form Location')
@section('title_form', 'Add')
@section('main')
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-md-6">
                    <form action="/locations/create" method="post">
                        @csrf
                        @include('pages.locations._form')
                </div>
                </form>
            </div>

        </div>
    </div>
    </div>
    </div>
@endsection
