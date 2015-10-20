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

    public function player()
    {
        $this->hasMany('Blupl\Franchise\Model\Player', 'franchise_id');
    }

    public function teamManagement()
    {
        $this->hasMany('Blupl\Franchise\Model\TeamManagement', 'franchise_id');
    }

    public function teamSupportStuff()
    {
        $this->hasMany('Blupl\Franchise\Model\TeamSupportStuff', 'franchise_id');
    }
}