<?php namespace Blupl\Franchises\Model;

use Illuminate\Database\Eloquent\Model;

class TeamSupportStuff extends Model {

    protected $table = 'players';

    protected $morphClass = 'players';

    protected $fillable = [
        'user_id',
        'franchise_id',
        'accredit_category',
        'name_franchise',
        'name',
        'nationality',
        'personal_id',
        'role',
        'date_of_birth',
        'permanent_address1',
        'permanent_address2',
        'permanent_district',
        'permanent_zip',
        'present_address1',
        'present_address2',
        'present_district',
        'present_zip',
        'mobile',
        'email',
        'photo'
    ];

}
