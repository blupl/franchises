@extends('orchestra/foundation::layouts.page')

@section('navbar')
    @include('blupl/franchises::widgets.header')
@endsection

@section('content')
    {!! Form::open(['url'=>'franchise/store']) !!}
    {!! Form::hidden('user_id', Auth::user()->id) !!}
    <fieldset>
        <div class="form-group">
            <div class="col-md-6">
                {!! Form::label('name', ' FRANCHISE NAME') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>
        </div>
    </fieldset>
    <fieldset>
        <div class="divider"></div>
        <div class="form-group">
            <div class="col-md-12">
                {!! Form::submit('Submit', ['class'=>'btn-success']) !!}
            </div>
        </div>
    </fieldset>

    {!! Form::close() !!}
@stop


@push('orchestra.footer')
@include('blupl/printmedia::common._inputScript')
<script type="text/javascript" src="{{ asset('packages/blucms/foundation/js/wizard/jquery.smartWizard.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        // Smart Wizard
        $('#wizard').smartWizard();

        function onFinishCallback() {
            $('#wizard').smartWizard('showMessage', 'Finish Clicked');
            //alert('Finish Clicked');
        }
    });

    $(document).ready(function () {
        // Smart Wizard
        $('#wizard_verticle').smartWizard({
            transitionEffect: 'slide'
        });

    });

    $(document).ready(function () {
        $('.form-active').on('click', function() {
            var filed = $(this).parents('fieldset');
            filed.prop("disabled", false);
            $(this).hide();
        });
    });
</script>



@endpush

@push('orchestra.footer')
@include('blupl/printmedia::form.style')
@endpush