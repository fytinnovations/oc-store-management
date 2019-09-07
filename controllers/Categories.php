<?php namespace Fytinnovations\StoreManagement\Controllers;

use BackendMenu;
/**
 * Store Types Back-end Controller
 */
class Categories extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.ReorderController'
    ];

    public $requiredPermissions = ['fytinnovations.storemanagement.*'];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Fytinnovations.StoreManagement', 'storemanagement', 'categories');
    }
}
