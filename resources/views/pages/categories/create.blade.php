@extends('template.main')
@section('judul', 'Form Categories')
@section('title_form', 'Add')
@section('main')
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-md-6">
                    <form action="/categories/create" method="post">
                        @csrf
                        @include('pages.categories._form')
                    </form>

                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
@endsection
