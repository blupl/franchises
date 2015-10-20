@extends('orchestra/foundation::layouts.page')

@section('navbar')
    @include('blupl/franchises::widgets.header')
@endsection

@section('content')
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Date / Time</th>
            <th>Batch Approva</th>
            <th>Name</th>
            <th>Organization</th>
            <th>Role</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->created_at }}</td>
            <td><input type="checkbox"></td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->role }}</td>
            <td>{{ ($item->status == true ? 'Approved' : 'Pending') }}</td>
            <td>
                @if ($item->status == false )
                    <a href="{{ handles('blupl/franchise::approval/franchise/'.$item->franchise->id) }}/{{ $category.'/'.$item->id  }}/">Approve</a>
                @endif
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>
@stop
