@extends('orchestra/foundation::layouts.page')

@section('navbar')
    @include('blupl/franchises::widgets.header')
@endsection

@section('content')
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
                <td>{{ $franchise->management->count() }}</td>
            </tr>
            <tr>
                <td>Player</td>
                <td> {{ $franchise->player->count() }} </td>
            </tr>
            <tr>
                <td>Team Managements</td>
                <td> {{ $franchise->teamManagement->count() }} </td>
            </tr>
            <tr>
                <td>Team Stuff Supports</td>
                <td> {{ $franchise->teamSupportStuff->count() }} </td>
            </tr>
        </tbody>
    </table>
@stop
