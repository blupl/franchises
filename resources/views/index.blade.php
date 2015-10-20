@extends('orchestra/foundation::layouts.page')

@section('navbar')
    @include('blupl/franchises::widgets.header')
@endsection

@section('content')
    {!! $table !!}
@stop
