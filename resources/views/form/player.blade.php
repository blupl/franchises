@set_meta('title', 'Player Form')


{!! Form::open(['handles'=>'blupl/franchise::management/player']) !!}

<fieldset>
    <div class="form-group">
        <div class="col-md-6">
            {!! Form::label('accredit_category', 'ACCREDITATION CATEGORY') !!}
            {!! Form::text('accredit_category', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::label('name_franchise', 'NAME OF FRANCHISE') !!}
            {!! Form::text('name_franchise', null, ['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            {!! Form::label('name', 'NAME OF APPLICANT') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::label('nationality', 'NATIONALITY') !!}
            {!! Form::text('nationality', null, ['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6">
            {!! Form::label('personal_id', 'PASSPORT NUMBER / NID') !!}
            {!! Form::text('personal_id', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::label('role', 'ROLE') !!}
            {!! Form::select('role', ['player'=>'Player'], 'player', ['class'=>'form-control select2']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            {!! Form::label('date_of_birth', 'DATE OF BIRTH') !!}
            {!! Form::text('date_of_birth', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::label('country_of_birth', 'COUNTRY OF BIRTH') !!}
            {!! Form::text('country_of_birth', null, ['class'=>'form-control']) !!}
        </div>
    </div>
    {{--<div class="form-group">--}}
        {{--<div class="col-md-12">--}}
            {{--{!! Form::label('address', 'FRANCHISE'S OFFICE ADDRESS') !!}--}}
            {{--{!! Form::text('address1', ['class'=>'form-control', 'placeholder'=>'Line 1']) !!}--}}
            {{--{!! Form::text('address2', ['class'=>'form-control', 'placeholder'=>'Line 1']) !!}--}}
        {{--</div>--}}
        {{--<div class="col-md-6">--}}
            {{--{!! Form::text('city', ['class'=>'form-control', 'placeholder'=>'City']) !!}--}}
        {{--</div>--}}
        {{--<div class="col-md-6">--}}
            {{--{!! Form::text('zip', ['class'=>'form-control', 'placeholder'=>'Post Code']) !!}--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="form-group">
        <div class="col-md-6">
            {!! Form::label('mobile', 'MOBILE PHONE NUMBER') !!}
            {!! Form::text('mobile', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::label('passport_expiry', 'PASSPORT EXPIRY DATE') !!}
            {!! Form::text('passport_expiry', null, ['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            {!! Form::label('noc_authority', 'NOC ISSUING AUTHORITY') !!}
            {!! Form::select('noc_authority', [
                'cricket-australia'=>'Cricket Australia',
                'cricket-bangladesh'=>'Bangladesh Cricket Board',
                'cricket-england'=>'England and Wales Cricket Board',
                'cricket-india'=>'Board of Control for Cricket in India',
                'cricket-newzealand'=>'New Zealand Cricket',
                'cricket-pakistan'=>'Pakistan Cricket Board',
                'cricket-southafrica'=>'Cricket South Africa Sri Lanka'
                'cricket-westindies'=>'Cricket West Indies Cricket
                'cricket-zimbabwe'=>Board Zimbabwe Cricket
                'cricket-afghanistan'=>Afghanistan Cricket Board
                'cricket-scotland'=>Cricket Scotland
                'cricket-royaldutch'=>Royal Dutch Cricket Association],
            null, ['class'=>'form-control select2']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::label('email', 'E-MAIL ID') !!}
            {!! Form::text('email', null, ['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            {!! Form::label('attachment', 'SCAN COPY OF PASSPORT BIO-PAGE OR BOTH SIDES OF NID') !!}
            {!! Form::text('attachment', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::label('photo', 'UPLOAD RECENTLY TAKEN PORTRAIT PHOTO') !!}
            {!! Form::text('photo', null, ['class'=>'form-control']) !!}
        </div>
    </div>
</fieldset>
<fieldset>
    {!! Form::submit('Submit', ['class'=>'form-control']) !!}
</fieldset>
{!! FOrm::close() !!}