<?php namespace Fytinnovations\StoreManagement\Updates;

use Seeder;
use Fytinnovations\StoreManagement\Models\StoreType;

class SeedStoreTypesTable extends Seeder
{
    public function run()
    {
        $store_type = StoreType::create([
            'name'                  => 'Uncategorized',
            'slug'                  => 'uncategorized',
            'description'           => 'Default category for stores',
            'is_published'          => true,
        ]);

        $store_type = StoreType::create([
            'name'                  => 'Department Stores',
            'slug'                  => 'department-stores',
            'description'           => 'These stores stock a large variety of goods separated into separate departments (home goods, toys, furniture). Often, you can find them as the cornerstones of malls or other large facilities that house a variety of retailers.',
            'is_published'          => true,
        ]);

        $store_type = StoreType::create([
            'name'                  => 'Speciality Stores',
            'slug'                  => 'speciality-stores',
            'description'           => 'This type of retail store is similar to a department or big box store, but focus on one vertical product. Think Best Buy as an example of a speciality store focusing on electronics, or Jockey for underwear, lingerie, and sleepwear.',
            'is_published'          => true,
        ]);

        $store_type = StoreType::create([
            'name'                  => 'Discount Stores',
            'slug'                  => 'discount-stores',
            'description'           => 'These stores are similar to department stores, but feature items at a discount or brands with lower price points. These items are also sourced from a variety of places and may belong to the store’s proprietary brands..',
            'is_published'          => true,
        ]);
    }
}