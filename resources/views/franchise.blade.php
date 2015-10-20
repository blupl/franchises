@extends('orchestra/foundation::layouts.page')

@section('navbar')
    @include('blupl/franchises::widgets.header')
@endsection

@section('content')

    <div class="col-md-3"></div>
    <div class="col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <a href="#">
                    <i class="fa fa-print"></i>
                    <p class="box-title">Print</p>
                </a>
                <a class="col-md-offset-1" href="#">
                    <i class="fa fa-save"></i>
                    <p class="box-title">Save As PDF</p>
                </a>
            </div>

            <div class="box-body">
                <div class="box-body" style="border: 1px solid #f4f4f4; margin: 10px auto;">
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="exampleInputName">NAME</label>
                            <p>{{ $item->name }}<p>
                        </div>
                        <div class="col-sm-4">
                            <label for="exampleInputRole1">Role</label>
                            <p>{{ $item->role }}<p>
                        </div>
                        <div class="col-sm-4">
                            <label for="exampleInputId">National ID / Passport Number</label>
                            <p>{{ $item->personal_id }}<p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="exampleInputGender">Gender</label>
                            <p>{{ $item->gender }}<p>
                        </div>
                        <div class="col-sm-4">
                            <label for="exampleInputDate">Date of Birth</label>
                            <p>{{ $item->date_of_birth }}<p>
                        </div>
                        <div class="col-sm-4">
                            <label for="exampleInputEmail1">Mobile Phone Number</label>
                            <p>{{ $item->mobile }}<p>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="col-sm-4">
                            <label for="exampleInputRole1">Work Station</label>
                            <p>{{ $item->work_station }}<p>
                        </div>
                        <div class="col-sm-4">
                            <label for="exampleInputRole1">Select card collection point</label>
                            <p>{{ $item->card_collection_point }}<p>
                        </div>
                        <div class="col-sm-4">
                            <label for="exampleInputEmail1">E-Mail ID</label>
                            <p>{{ $item->email }}<p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <label for="exampleInputFile">Photo</label>
                            <img src="/images/social_skype_button_blue.png" style="width: 50px;"/>
                            <h5>File Upload</h5>
                            <a href="#">DOWNLOAD</a>
                        </div>
                    </div>
                </div>



                {!! Form::open(['method'=>'PUT']) !!}

                <div class="box-body" style="border: 1px solid #f4f4f4; margin: 10px auto;">
                    <div class="form-group">
                        {{--{!! Form::hidden('member_id[]', $item->id) !!}--}}
                        @for($x=1; $x <= 6; $x++)
                            <label style="margin-right: 25px;">
                                {{--<input  name="zone[{{ $item->id }}][{{ $x }}]" type="checkbox" value="{{ $x }}"> --}}
                                {!! Form::checkbox( 'zone[]', $x, false,['class'=>'minimal']) !!} Zone # {{ $x }}
                            </label>
                        @endfor
                    </div>
                </div>
                {!! Form::submit('Approve', ['class'=>'btn btn-block btn-warning btn-sm']) !!}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@stop
