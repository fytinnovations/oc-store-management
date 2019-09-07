<?php namespace Fytinnovations\StoreManagement\Models;

/**
 * Product Category Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\NestedTree;
    use \October\Rain\Database\Traits\Validation;
    
    public $rules = [
        'name'                  => 'required',
        'slug'    => ['required', 'regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i', 'unique:fytinnovations_storemanagement_categories'],
    ];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'fytinnovations_storemanagement_categories';

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
        'featured_image'=>"System\Models\File"
    ];
    public $attachMany = [
        'more_images'=>"System\Models\File"
    ];

}
