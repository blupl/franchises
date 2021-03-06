<?php namespace Blupl\Franchises\Model;

use Illuminate\Database\Eloquent\Model;

class TeamManagement extends Model {

    protected $table = 'franchise_team_managements';

    protected $morphClass = 'team_managements';

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
        'email',
        'photo',
        'attachment'
    ];

    public function franchise()
    {
        return $this->belongsTo('Blupl\Franchises\Model\Franchise', 'franchise_id');
    }

    public function zone()
    {
        return $this->morphMany('Blupl\PrintMedia\Model\Zone', 'zoneable');
    }

}
