
@set_meta('title', 'Team Management Form')

{!! Form::open(['handles'=>'blupl/franchise::management/team-managements']) !!}

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
            {!! Form::select('role', [
            'head-coach'=>'Head Coach'
            'assistant-coach'=>'Assistant Coach'
            'bowling-coach'=>'Bowling Coach'
            'fielding-coach'=>'Fielding Coach'
            'trainer'=>'Trainer'
            'physio'=>'Physio'
            'team-manager'=>'Team Manager'
            'video-analyst'=>'Video Analyst'
            'media-manager'=>'Media Manager'
            'technical-adviser'=>'Team Technical Adviser'
            'logistic-manager'=>'Team Logistic Manager'], null, ['class'=>'form-control select2']) !!}
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
        <div class="col-md-12">
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
    {!! Form::submit('Submit', ['class'=>'btn btn-default']) !!}
</fieldset>
{!! FOrm::close() !!}