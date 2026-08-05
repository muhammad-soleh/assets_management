@extends('template.main')
@section('judul', 'Form Assets')
@section('title_form', 'Edit')
@section('main')
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-md-12">
                    <form action="/master-assets/{{ $asset->id }}/edit" method="post">
                        @csrf
                        @method('PUT')
                        @include('pages.assets._form')

                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
@endsection
