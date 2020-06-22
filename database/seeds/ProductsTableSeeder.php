<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'LATEST WOMAN BAG',
            'slug' => 'LATEST WOMAN BAG',
            'details' => 'LATEST WOMAN BAG DETAILS',
            'price' => 25.00,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);
    
        Product::create([
            'name' => 'LATEST MAN JEANS',
            'slug' => 'LATEST MAN JEANS',
            'details' => 'LATEST MAN JEANS DETAILS',
            'price' => 25.00,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);
    
        Product::create([
            'name' => 'LATEST MAN WATCH',
            'slug' => 'LATEST MAN WATCH',
            'details' => 'LATEST MAN WATCH DETAILS',
            'price' => 25.00,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);
    
        Product::create([
            'name' => 'LATEST MAN SNEAKERS',
            'slug' => 'LATEST MAN SNEAKERS',
            'details' => 'LATEST MAN SNEAKERS DETAILS',
            'price' => 25.00,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);
    
        Product::create([
            'name' => 'LATEST MAN WATCH MODEL 2',
            'slug' => 'LATEST MAN WATCH MODEL 2',
            'details' => 'LATEST MAN WATCH MODEL 2 DETAILS',
            'price' => 25.00,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);
    
        Product::create([
            'name' => 'LATEST MAN SNEAKERS MODEL 2',
            'slug' => 'LATEST MAN SNEAKERS MODEL 2',
            'details' => 'LATEST MAN SNEAKERS MODEL 2 DETAILS',
            'price' => 25.00,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);
    
        Product::create([
            'name' => 'LATEST MAN JEANS MODEL 2',
            'slug' => 'LATEST MAN JEANS MODEL 2',
            'details' => 'LATEST MAN JEANS MODEL 2 DETAILS',
            'price' => 25.00,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);
    
        Product::create([
            'name' => 'LATEST WOMAN BAG MODEL 2',
            'slug' => 'LATEST WOMAN BAG MODEL 2',
            'details' => 'LATEST WOMAN BAG MODEL 2 DETAILS',
            'price' => 25.00,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);
    
        Product::create([
            'name' => 'LATEST MAN SNEAKERS MODEL 3',
            'slug' => 'LATEST MAN SNEAKERS MODEL 3',
            'details' => 'LATEST MAN SNEAKERS MODEL 3 DETAILS',
            'price' => 25.00,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);
    }
}
