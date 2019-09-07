<?php namespace Fytinnovations\StoreManagement\Models;


/**
 * Store Model
 */
class Store extends Model
{
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
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
