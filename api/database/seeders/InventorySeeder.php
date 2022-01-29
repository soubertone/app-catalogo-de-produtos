<?php

namespace Database\Seeders;

use App\Models\Inventory;
use App\Models\Product;
use Illuminate\Database\Seeder;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= count(Product::all()); $i++) {
            Inventory::create([
                'product_id' => $i,
                'quantity' => random_int(1,99),
                'size' => '39'
            ]);

            Inventory::create([
                'product_id' => $i,
                'quantity' => random_int(1,99),
                'size' => '40'
            ]);

            Inventory::create([
                'product_id' => $i,
                'quantity' => random_int(1,99),
                'size' => '41'
            ]);

            Inventory::create([
                'product_id' => $i,
                'quantity' => random_int(1,99),
                'size' => '42'
            ]);

            Inventory::create([
                'product_id' => $i,
                'quantity' => random_int(1,99),
                'size' => '43+'
            ]);
        }
    }
}
