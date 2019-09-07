<?php namespace Fytinnovations\StoreManagement\Updates;

use Seeder;
use Fytinnovations\StoreManagement\Models\Category;

class SeedCategoriesTable extends Seeder
{
    public function run()
    {
        
        $mens = Category::create([
            'name'                  => "Men's Fashion",
            'slug'                  => 'men-fashion',
            'description'           => "Buy latest Men's Fashion trends of the world from our online store.",
            'is_published'          => true,
        ]);

        $womens = Category::create([
            'name'                  => "Women's Fashion",
            'slug'                  => 'womens-fashion',
            'description'           => "Buy latest women fashion clothing, accessories, makeup & footwear Online at our store.",
            'is_published'          => true,
        ]);
        
        $sport_shoes = Category::create([
            'name'                  => 'Sports Shoes',
            'slug'                  => 'sports-shoes',
            'description'           => "Buy Sports Shoes Online from our store from top brands like Adidas, Puma, Reebok, Nike shoes at reasonable price range.",
            'is_published'          => true,
        ]);

        $western_wear = Category::create([
            'name'                  => 'Western Wear',
            'slug'                  => 'western-wear',
            'description'           => 'Western Wear For Women - Online Shopping for stylish western tops, t-shirts & dresses for ladies at great prices.',
            'is_published'          => true,
        ]);
        
        $sport_shoes->makeChildOf($mens);
        $western_wear->makeChildOf($womens);
    }
}