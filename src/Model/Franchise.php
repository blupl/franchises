<?php namespace Blupl\Franchises\Model;

use Illuminate\Database\Eloquent\Model;

class Franchise extends Model {

    protected $table = 'franchises';

    protected $morphClass = 'franchises';

    protected $guarded = [
        '_token'
    ];

    protected $fillable = [
        'user_id',
        'name'
    ];

    public function management()
    {
        return $this->hasMany('Blupl\Franchises\Model\FranchiseManagement', 'franchise_id');
    }

    public function player()
    {
        return $this->hasMany('Blupl\Franchises\Model\Player', 'franchise_id');
    }

    public function teamManagement()
    {
        return $this->hasMany('Blupl\Franchises\Model\TeamManagement', 'franchise_id');
    }

    public function teamSupportStuff()
    {
        return $this->hasMany('Blupl\Franchises\Model\TeamSupportStuff', 'franchise_id');
    }
}