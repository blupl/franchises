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
                <td>  </td>
            </tr>
            <tr>
                <td>Player</td>
                <td>  </td>
            </tr>
            <tr>
                <td>Team Managements</td>
                <td>  </td>
            </tr>
            <tr>
                <td>Team Stuff Supports</td>
                <td>  </td>
            </tr>
        </tbody>
    </table>
@stop
