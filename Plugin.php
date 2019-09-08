<?php namespace Fytinnovations\StoreManagement;

use Backend;
use System\Classes\PluginBase;

/**
 * StoreManagement Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * @var array Plugin dependencies
     */
    public $require = ['Rainlab.User','Rainlab.Location'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'fytinnovations.storemanagement::lang.plugin.name',
            'description' => 'fytinnovations.storemanagement::lang.plugin.description',
            'author'      => 'Fytinnovations',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Fytinnovations\StoreManagement\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'fytinnovations.storemanagement.manage_stores' => [
                'tab' => 'fytinnovations.storemanagement::lang.plugin.name',
                'label' => 'fytinnovations.storemanagement::lang.stores.label'
            ],
            'fytinnovations.storemanagement.manage_store' => [
                'tab' => 'fytinnovations.storemanagement::lang.plugin.name',
                'label' => 'fytinnovations.storemanagement::lang.store.label'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'storemanagement' => [
                'label'       => 'fytinnovations.storemanagement::lang.plugin.name',
                'url'         => Backend::url('fytinnovations/storemanagement/dashboard'),
                'icon'        => 'icon-shopping-basket',
                'permissions' => ['fytinnovations.storemanagement.*'],
                'order'       => 500,
                'sideMenu' => [
                    'dashboard' => [
                        'label'       => 'fytinnovations.storemanagement::lang.dashboard.menu_label',
                        'icon'        => 'icon-dashcube',
                        'url'         => Backend::url('fytinnovations/storemanagement/dashboard'),
                        'permissions' => ['fytinnovations.storemanagement.manage_stores'],
                    ],
                    'stores' => [
                        'label'       => 'fytinnovations.storemanagement::lang.stores.menu_label',
                        'icon'        => 'icon-home',
                        'url'         => Backend::url('fytinnovations/storemanagement/stores'),
                        'permissions' => ['fytinnovations.storemanagement.manage_stores'],
                    ],
                    'store_types' => [
                        'label'       => 'fytinnovations.storemanagement::lang.store_types.menu_label',
                        'icon'        => 'icon-sitemap',
                        'url'         => Backend::url('fytinnovations/storemanagement/storetypes'),
                        'permissions' => ['fytinnovations.storemanagement.manage_stores'],
                    ],
                    'products' => [
                        'label'       => 'fytinnovations.storemanagement::lang.products.menu_label',
                        'icon'        => 'icon-product-hunt',
                        'url'         => Backend::url('fytinnovations/storemanagement/storetypes'),
                        'permissions' => ['fytinnovations.storemanagement.manage_stores'],
                    ],
                    'categories' => [
                        'label'       => 'fytinnovations.storemanagement::lang.categories.menu_label',
                        'icon'        => 'icon-database',
                        'url'         => Backend::url('fytinnovations/storemanagement/categories'),
                        'permissions' => ['fytinnovations.storemanagement.manage_stores'],
                    ],
                    'orders' => [
                        'label'       => 'fytinnovations.storemanagement::lang.orders.menu_label',
                        'icon'        => 'icon-shopping-cart',
                        'url'         => Backend::url('fytinnovations/storemanagement/storetypes'),
                        'permissions' => ['fytinnovations.storemanagement.manage_stores'],
                    ]
                ]
            ],
        ];
    }

    public function registerListColumnTypes()
    {
        return [
            'published' => function($value) {
                if($value){
                    return '<i class="icon-check-circle icon-lg"></i>';
                }else{
                    return '<i class="icon-times-circle icon-lg"></i>'; 
                }
            }
        ];
    }

}
