<?php

return [
    'plugin' => [
        'name' => 'Store Management',
        'description' => 'Manage multiple stores with ease. Comes with catalog, orders, and store management out of the box.'
    ],
    'general' =>[
        'show_published' => "Show Published",
        'show_unpublished'=>"Show Unpublished",
    ],
    'form' =>[
        'create'=>"Create",
        'create_and_close'=> "Create and Close",
        'cancel'=>"Cancel",
        'new'=>"New",
        'delete_selected'=>"Delete selected",
        'publish'=>"Publish",
        'unpublish'=>"Unpublished",
        "id" =>"ID",
        "name"=>"Name",
        "description"=>"Description",
        "published"=>"Published",
        "slug"=>"Slug",
        "icon"=>"Icon",
        "featured_image"=>"Featured Images",
        "more_images"=>"More Images"
    ],
    'stores'=>[
        'label'=>'Allow the user to manage all stores',
        'menu_label'=>'Stores'
    ],
    'store'=>[
        'label'=>'Only manage store assigned to the user',
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
        'return_to_list'=>"Return to store types list"
    ],
    'store_type'=>[
        'name'=>'Store Type',
    ],
    'categories'=>[
        'name'=>'Categories',
        'create'=>'Create Category Type',
        'edit'=> 'Edit Category Type',
        'preview'=> 'Preview Category Type',
        'delete_selected'=>'Are you sure you want to delete the selected Categories and all its children?',
        'publish_selected'=>'Are you sure you want to publish the selected Categories and all its children?',
        'unpublish_selected'=>'Are you sure you want to unpublish the selected Categories and all its children?',
        'menu_label'=>'Categories',
        'list_name'=>'Manage Categories',
        'return_to_list'=>"Return to Categories list",
        'reorder'=>"Reorder Categories"
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