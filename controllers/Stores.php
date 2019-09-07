<?php namespace Fytinnovations\StoreManagement\Controllers;

use BackendMenu;

/**
 * Stores Back-end Controller
 */
class Stores extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Fytinnovations.StoreManagement', 'storemanagement', 'stores');
    }
}
