<?php namespace Fytinnovations\StoreManagement\Models;

/**
 * StoreType Model
 */
class StoreType extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $rules = [
        'name'                  => 'required',
        'slug'    => ['required', 'regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i', 'unique:fytinnovations_storemanagement_store_types'],
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'fytinnovations_storemanagement_store_types';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];

    public $attachOne = [
        'icon' => 'System\Models\File'
    ];

    public $attachMany = [];
}
