<?php namespace Blupl\Franchises\Model;

use Illuminate\Database\Eloquent\Model;

class FranchiseManagement extends Model {

    protected $table = 'franchise_management';

    protected $morphClass = 'franchises';

    protected $fillable = [
        'user_id',
        'franchise_id',
        'accredit_category',
        'name_franchise',
        'name',
        'designation',
        'gender',
        'email',
        'mobile',
        'address1',
        'address2',
        'city',
        'zip',
        'personal_id',
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