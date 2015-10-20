<?php namespace Blupl\Franchises\Model;

use Illuminate\Database\Eloquent\Model;

class TeamManagement extends Model {

    protected $table = 'team_managements';

    protected $morphClass = 'team_managements';

    protected $fillable = [
        'accredit_category',
        'name_franchise',
        'name',
        'nationality',
        'personal_id',
        'role',
        'date_of_birth',
        'country_of_birth',
        'mobile',
        'passport_expiry',
        'email',
        'photo',
        'attachment'
    ];

}
