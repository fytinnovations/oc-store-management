<?php namespace Fytinnovations\StoreManagement\Controllers;

use BackendMenu;

class Dashboard extends Controller
{
    public $pageTitle="Dashboard";
    
    public $requiredPermissions = ['fytinnovations.storemanagement.*'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Fytinnovations.StoreManagement', 'storemanagement', 'dashboard');
    }

    /**
     * Manually creating the action as this page does not implement FormBehaviour
     *
     * @return void
     */
    public function index(){
        
    }
}
