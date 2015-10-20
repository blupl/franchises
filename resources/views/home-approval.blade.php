@extends('blupl/printmedia::select-media')

@section('navbar')
    @include('blupl/franchises::widgets.header')
@endsection

@section('content')
    @foreach($franchises as $franchise)
        <h2>{{ $franchise->name }}</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th></th>
                <th>Number of Entries</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Franchisee</td>
                <td><a href="{{ handles('blupl/franchise::approval/franchise/'.$franchise->id.'/management') }}"> {{ $franchise->management->count() }}</a></td>
            </tr>
            <tr>
                <td>Player</td>
                <td> <a href="{{ handles('blupl/franchise::approval/franchise/'.$franchise->id.'/player') }}"> {{ $franchise->player->count() }} </a></td>
            </tr>
            <tr>
                <td>Team Managements</td>
                <td> <a href="{{ handles('blupl/franchise::approval/franchise/'.$franchise->id.'/teamManagement') }}"> {{ $franchise->teamManagement->count() }} </a></td>
            </tr>
            <tr>
                <td>Team Stuff Supports</td>
                <td> <a href="{{ handles('blupl/franchise::approval/franchise/'.$franchise->id.'/teamSupportStuff') }}"> {{ $franchise->teamSupportStuff->count() }} </a></td>
            </tr>
            </tbody>
        </table>
    @endforeach
@stop
