<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'product_name'      => 'Sugar',
            'product_id'        => 'PDT1',
            'available_stocks'  => '30',
            'product_price'     => '100.00',
            'tax_percentage'    => '7.25',
        ]);

        Product::create([
            'product_name'      => 'Rice',
            'product_id'        => 'PDT2',
            'available_stocks'  => '50',
            'product_price'     => '500.00',
            'tax_percentage'    => '12.15',
        ]);

        Product::create([
            'product_name'      => 'Toothpaste',
            'product_id'        => 'PDT3',
            'available_stocks'  => '70',
            'product_price'     => '30.00',
            'tax_percentage'    => '4.50',
        ]);

        Product::create([
            'product_name'      => 'Coconut oil',
            'product_id'        => 'PDT4',
            'available_stocks'  => '95',
            'product_price'     => '200.00',
            'tax_percentage'    => '10.21',
        ]);

        Product::create([
            'product_name'      => 'Olive oil',
            'product_id'        => 'PDT5',
            'available_stocks'  => '25',
            'product_price'     => '150.00',
            'tax_percentage'    => '5.25',
        ]);
    }
}
