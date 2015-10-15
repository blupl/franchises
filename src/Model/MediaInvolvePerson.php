<?php namespace Blupl\Franchises\Model;

use Illuminate\Database\Eloquent\Model;

class MediaInvolvePerson extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'media_involve_people';

    /**
     * The class name to be used in polymorphic relations.
     *
     * @var string
     */
    protected $morphClass = 'MediaInvolvePerson';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'form_id',
        'category',
        'name',
        'designation',
        'mobile_number',
        'email'
    ];

    public function organization()
    {
        return $this->belongsTo('Blupl\Franchises\Model\MediaOrganization', 'organization_id');
    }

}
