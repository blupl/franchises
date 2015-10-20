<?php namespace Blupl\Franchises\Model;

use Illuminate\Database\Eloquent\Model;

class Player extends Model {


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
        'country_of_birth',
        'mobile',
        'passport_expiry',
        'noc_authority',
        'email',
        'photo',
        'attachment'
    ];

}
