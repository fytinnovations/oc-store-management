<?php

return [
    'plugin' => [
        'name' => 'Store Management',
        'description' => 'Manage multiple stores with ease. Comes with catalog, orders, and store management out of the box.'
    ],
    'general' =>[
        'show_published' => 'Show Published',
        'show_unpublished'=>'Show Unpublished',
    ],
    'form' =>[
        'create'=>'Create',
        'create_and_close'=> 'Create and Close',
        'cancel'=>'Cancel',
        'new'=>'New',
        'delete_selected'=>'Delete selected',
        'publish'=>'Publish',
        'unpublish'=>'Unpublished',
        'id' =>'ID',
        'name'=>'Name',
        'description'=>'Description',
        'published'=>'Published',
        'slug'=>'Slug',
        'icon'=>'Icon',
        'featured_image'=>'Featured Images',
        'more_images'=>'More Images',
        'email'=>'Email',
        'phone'=>'Phone',
        'published_selected' => 'Published selected records',
        'unpublished_selected' => 'Unpublished selected records',
        'unable_to_unpublish_selected' => 'Unable to unpublish record as it is under use',
    ],
    'address'=>[
        'name'=>'Address',
    ],
    'city'=>[
        'name'=>'City',
    ],
    'zip'=>[
        'name'=>'Zip',
    ],
    'country_code'=>[
        'name'=>'Country Code',
    ],
    'state_code'=>[
        'name'=>'State Code',
    ],
    'latitude'=>[
        'name'=>'Latitude',
    ],
    'longitude'=>[
        'name'=>'Longitude',
    ],
    'vicinity'=>[
        'name'=>'Vicinity',
    ],
    'stores'=>[
        'label'=>'Allow the user to manage all stores',
        'no_of_stores'=>'No of Stores',
        'menu_label'=>'Stores',
        'create'=>'Create Store Type',
        'edit'=> 'Edit Store Type',
        'preview'=> 'Preview Store Type',
        'delete_selected'=>'Are you sure you want to delete the selected Stores?',
        'publish_selected'=>'Are you sure you want to publish the selected Stores?',
        'unpublish_selected'=>'Are you sure you want to unpublish the selected Stores?',
        'list_name'=>'Manage Stores',
        'return_to_list'=>'Return to Stores list',
    ],
    'store'=>[
        'label'=>'Only manage store assigned to the user',
        'manager'=>'Manager',
        'manager_placeholder'=>'-- select a manager --'
    ],
    'store_types'=>[
        'name'=>'Store Types',
        'create'=>'Create Store Type',
        'edit'=> 'Edit Store Type',
        'preview'=> 'Preview Store Type',
        'delete_selected'=>'Are you sure you want to delete the selected Store Types?',
        'publish_selected'=>'Are you sure you want to publish the selected Store Types?',
        'unpublish_selected'=>'Are you sure you want to unpublish the selected Store Types?',
        'menu_label'=>'Store Types',
        'list_name'=>'Manage Store Types',
        'return_to_list'=>'Return to store types list',
    ],
    'store_type'=>[
        'name'=>'Store Type',
        'is_published_comment'=>'Allow this store type to be attached to stores.'
    ],
    'categories'=>[
        'name'=>'Categories',
        'create'=>'Create Category Type',
        'edit'=> 'Edit Category Type',
        'preview'=> 'Preview Category Type',
        'delete_selected'=>'Are you sure you want to delete the selected Categories and all its children?',
        'publish_selected'=>'Are you sure you want to publish the selected Categories and all its children?',
        'unpublish_selected'=>'Are you sure you want to unpublish the selected Categories and all its children?',
        'menu_label'=>'Product Categories',
        'list_name'=>'Manage Categories',
        'return_to_list'=>'Return to Categories list',
        'reorder'=>'Reorder Categories'
    ],
    'category'=>[
        'name'=>'Category',
    ],
    'products'=>[
        'menu_label'=>'Products'
    ],
    'orders'=>[
        'menu_label'=>'Orders'
    ],
    'dashboard'=>[
        'menu_label'=>'Dashboard'
    ]

];  