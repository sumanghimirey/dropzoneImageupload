@extends('layout')

@section('head')
    {!! HTML::style('/packages/dropzone/dropzone.css') !!}
@stop

@section('footer')
    {!! HTML::script('/packages/dropzone/dropzone.js') !!}
    {!! HTML::script('/assets/js/dropzone-config.js') !!}
@stop

@section('content')






    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Thumbnail Gallery</h1>
            </div>

@foreach($images as $image)
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive"  src="{{ asset('images/full_size/'.$image->filename ) }}" alt="" >
                </a>
            </div>
@endforeach

    </div>
    </div>






    @endsection