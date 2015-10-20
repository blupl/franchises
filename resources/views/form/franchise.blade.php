@set_meta('title', 'Franchise Form')

{!! Form::open(['handles'=>'blupl/franchise::management/franchise']) !!}
<fieldset>
    <div class="form-group">
        <div class="col-md-6">
            {!! Form::label('accredit_category', 'ACCREDITATION CATEGORY') !!}
            {!! Form::text('accredit_category', 'Franchise', ['class'=>'form-control', 'readonly']) !!}
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
            {!! Form::label('designation', 'DESIGNATION') !!}
            {!! Form::select('designation', ['chairman'=>'Chairman', 'managing-director'=>'Managing Director', 'director'=>'Director'], null, ['class'=>'form-control select2']) !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6">
            {!! Form::label('gender', 'GENDER') !!}
            {!! Form::select('gender', ['male'=>'Male', 'female'=>'Female', 'other'=>'Other'], null, ['class'=>'form-control select2']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::label('mobile', 'CONTACT PHONE NUMBER') !!}
            {!! Form::text('mobile', null, ['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            {!! Form::label('email', 'CONTACT E-MAIL ID') !!}
            {!! Form::text('email', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-md-6">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            {!! Form::label('address', 'FRANCHISES OFFICE ADDRESS') !!}
            {!! Form::text('address1', null, ['class'=>'form-control', 'placeholder'=>'Line 1']) !!}
            {!! Form::text('address2', null, ['class'=>'form-control', 'placeholder'=>'Line 1']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::text('city', null, ['class'=>'form-control', 'placeholder'=>'City']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::text('zip', null, ['class'=>'form-control', 'placeholder'=>'Post Code']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            {!! Form::label('personal_id', 'PASSPORT OR NID NUMBER') !!}
            {!! Form::text('personal_id', null,['class'=>'form-control']) !!}
        </div>
        <div class="col-md-6">

        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            {!! Form::label('attachment', 'SCAN COPY OF PASSPORT BIO-PAGE OR BOTH SIDES OF NID') !!}
            {!! Form::text('attachment', null,['class'=>'form-control']) !!}
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