<?php namespace Fytinnovations\StoreManagement\Controllers;

use BackendMenu;
/**
 * Store Types Back-end Controller
 */
class StoreTypes extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $requiredPermissions = ['fytinnovations.storemanagement.manage_stores'];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $guarded=['*'];

    public $fillable=['name','slug','description','is_active'];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Fytinnovations.StoreManagement', 'storemanagement', 'store_types');
    }

    public function listOverrideColumnValue($record, $column, $definition){
        if($column){

        }
    }
}
