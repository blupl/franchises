@set_meta('title', 'Team Support Stuffs')


{!! Form::open(['handles'=>'blupl/franchise::management/team-support-stuffs']) !!}

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
            {!! Form::text('role', null, ['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            {!! Form::label('date_of_birth', 'DATE OF BIRTH') !!}
            {!! Form::text('date_of_birth', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-md-6">
            <div class="col-md-12">
                {!! Form::label('permanent_address', 'PERMANENT ADDRESS') !!}
                {!! Form::text('permanent_address1', null, ['class'=>'form-control', 'placeholder'=>'Line 1']) !!}
                {!! Form::text('permanent_address2', null, ['class'=>'form-control', 'placeholder'=>'Line 1']) !!}
            </div>
            <div class="col-md-6">
                {!! Form::select('permanent_city', [
                'barguna'=>'Barguna'
                'barisal'=>'Barisal'
                'bhola'=>'Bhola'
                'bogra'=>'Bogra'
                'jhalokati'=>'Jhalokati'
                'patuakhali'=>'Patuakhali'
                'pirojpur'=>'Pirojpur'
                'bandarban'=>'Bandarban'
                'brahmanbaria'=>'Brahmanbaria'
                'chandpur'=>'Chandpur'
                'chittagong'=>'Chittagong'
                'comilla'=>'Comilla'
                'cox-bazar'=>'Cox&rsquo;s Bazar'
                'feni'=>'Feni'
                'khagrachhari'=>'Khagrachhari'
                'lakshmipur'=>'Lakshmipur'
                'noakhali'=>'Noakhali'
                'rangamati'=>'Rangamati'
                'dhaka'=>'Dhaka'
                'faridpur'=>'Faridpur'
                'gazipur'=>'Gazipur'
                'gopalganj'=>'Gopalganj'
                'kishoreganj'=>'Kishoreganj'
                'madaripur'=>'Madaripur'
                'manikganj'=>'Manikganj'
                'munshiganj'=>'Munshiganj'
                'narayanganj'=>'Narayanganj'
                'narsingdi'=>'Narsingdi'
                'rajbari'=>'Rajbari'
                'shariatpur'=>'Shariatpur'
                'tangail'=>'Tangail'
                'bagerhat'=>'Bagerhat'
                'chuadanga'=>'Chuadanga'
                'jessore'=>'Jessore'
                'jhenaidah'=>'Jhenaidah'
                'khulna'=>'Khulna'
                'kushtia'=>'Kushtia'
                'magura'=>'Magura'
                'meherpur'=>'Meherpur'
                'narail'=>'Narail'
                'satkhira'=>'Satkhira'
                'jamalpur'=>'Jamalpur'
                'mymensingh'=>'Mymensingh'
                'netrakona'=>'Netrakona'
                'sherpur'=>'Sherpur'
                'joypurhat'=>'Joypurhat'
                'naogaon'=>'Naogaon'
                'natore'=>'Natore'
                'chapainawabganj'=>'Chapainawabganj'
                'pabna'=>'Pabna'
                'rajshahi'=>'Rajshahi'
                'sirajganj'=>'Sirajganj'
                'dinajpur'=>'Dinajpur'
                'gaibandha'=>'Gaibandha'
                'kurigram'=>'Kurigram'
                'lalmonirhat'=>'Lalmonirhat'
                'nilphamari'=>'Nilphamari'
                'panchagarh'=>'Panchagarh'
                'rangpur'=>'Rangpur'
                'thakurgaon'=>'Thakurgaon'
                'habiganj'=>'Habiganj'
                'moulvibazar'=>'Moulvibazar'
                'sunamganj'=>'Sunamganj'
                'sylhet'=>'Sylhet'
                ], null, ['class'=>'form-control select2', 'placeholder'=>'District-Choose from list']) !!}
            </div>
            <div class="col-md-6">
                {!! Form::text('permanent_zip', null, ['class'=>'form-control', 'placeholder'=>'Post Code']) !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6">
            {!! Form::label('mobile', 'MOBILE PHONE NUMBER') !!}
            {!! Form::text('mobile', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-md-6">
            <div class="col-md-12">
                {!! Form::label('present_address', 'PRESENT ADDRESS') !!}
                {!! Form::text('present_address1', null, ['class'=>'form-control', 'placeholder'=>'Line 1']) !!}
                {!! Form::text('present_address2', null, ['class'=>'form-control', 'placeholder'=>'Line 1']) !!}
            </div>
            <div class="col-md-6">
                {!! Form::select('permanent_city', [
                'barguna'=>'Barguna'
                'barisal'=>'Barisal'
                'bhola'=>'Bhola'
                'bogra'=>'Bogra'
                'jhalokati'=>'Jhalokati'
                'patuakhali'=>'Patuakhali'
                'pirojpur'=>'Pirojpur'
                'bandarban'=>'Bandarban'
                'brahmanbaria'=>'Brahmanbaria'
                'chandpur'=>'Chandpur'
                'chittagong'=>'Chittagong'
                'comilla'=>'Comilla'
                'cox-bazar'=>'Cox&rsquo;s Bazar'
                'feni'=>'Feni'
                'khagrachhari'=>'Khagrachhari'
                'lakshmipur'=>'Lakshmipur'
                'noakhali'=>'Noakhali'
                'rangamati'=>'Rangamati'
                'dhaka'=>'Dhaka'
                'faridpur'=>'Faridpur'
                'gazipur'=>'Gazipur'
                'gopalganj'=>'Gopalganj'
                'kishoreganj'=>'Kishoreganj'
                'madaripur'=>'Madaripur'
                'manikganj'=>'Manikganj'
                'munshiganj'=>'Munshiganj'
                'narayanganj'=>'Narayanganj'
                'narsingdi'=>'Narsingdi'
                'rajbari'=>'Rajbari'
                'shariatpur'=>'Shariatpur'
                'tangail'=>'Tangail'
                'bagerhat'=>'Bagerhat'
                'chuadanga'=>'Chuadanga'
                'jessore'=>'Jessore'
                'jhenaidah'=>'Jhenaidah'
                'khulna'=>'Khulna'
                'kushtia'=>'Kushtia'
                'magura'=>'Magura'
                'meherpur'=>'Meherpur'
                'narail'=>'Narail'
                'satkhira'=>'Satkhira'
                'jamalpur'=>'Jamalpur'
                'mymensingh'=>'Mymensingh'
                'netrakona'=>'Netrakona'
                'sherpur'=>'Sherpur'
                'joypurhat'=>'Joypurhat'
                'naogaon'=>'Naogaon'
                'natore'=>'Natore'
                'chapainawabganj'=>'Chapainawabganj'
                'pabna'=>'Pabna'
                'rajshahi'=>'Rajshahi'
                'sirajganj'=>'Sirajganj'
                'dinajpur'=>'Dinajpur'
                'gaibandha'=>'Gaibandha'
                'kurigram'=>'Kurigram'
                'lalmonirhat'=>'Lalmonirhat'
                'nilphamari'=>'Nilphamari'
                'panchagarh'=>'Panchagarh'
                'rangpur'=>'Rangpur'
                'thakurgaon'=>'Thakurgaon'
                'habiganj'=>'Habiganj'
                'moulvibazar'=>'Moulvibazar'
                'sunamganj'=>'Sunamganj'
                'sylhet'=>'Sylhet'
                ], null, ['class'=>'form-control select2', 'placeholder'=>'District-Choose from list']) !!}
            </div>
            <div class="col-md-6">
                {!! Form::text('present_zip', null, ['class'=>'form-control', 'placeholder'=>'Post Code']) !!}
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            {!! Form::label('email', 'E-MAIL ID') !!}
            {!! Form::text('email', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-md-6">

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