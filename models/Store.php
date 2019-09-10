<?php namespace Fytinnovations\StoreManagement\Models;


/**
 * Store Model
 */
class Store extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Nullable;

    public $rules = [
        'name'                  => 'required',
        'slug'                  => 'required|unique:fytinnovations_storemanagement_stores',
        'store_type_id'         => 'required|exists:fytinnovations_storemanagement_store_types,id',
        'email'                 => 'nullable|email',
        'is_published'          => 'boolean',
        'phone'                 => 'nullable|digits_between:7,12',
        'zip'                   => 'nullable|between:2,10',
        'latitude'              => ['nullable','regex:/^[-]?(([0-8]?[0-9])\.(\d+))|(90(\.0+)?)$/'],
        'longitude'              => ['nullable','regex:/^[-]?(([0-8]?[0-9])\.(\d+))|(90(\.0+)?)$/'],
        'manager_id'              => ['nullable','exists:backend_users,id'],
        'country_id'              => ['nullable','exists:rainlab_location_countries,id'],
        'state_id'              => ['nullable','exists:rainlab_location_states,id'],
    ];

    protected $nullable = ['description','email','phone','address',
                            'city','zip','latitude','longitude',
                            'vicinity','manager_id','country_id','state_id'];

    public $implement = ['RainLab.Location.Behaviors.LocationModel'];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'fytinnovations_storemanagement_stores';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    protected $jsonable = ['contact_nos'];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'store_type'=>'Fytinnovations\StoreManagement\Models\StoreType',
        'manager'=>"Backend\Models\User"
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'featured_image'=>'System\Models\File'
    ];
    public $attachMany = [
        'images'=>"System\Models\File"
    ];

    public function filterFields($fields, $context = null)
    {
        //Auto fill the manager email field on change
        if($fields->manager->value){
            $fields->{'email'}->value=$this->manager->email;
        } 
    }
}
