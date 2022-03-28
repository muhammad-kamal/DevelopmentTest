<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Models\Payment;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Kamal',
            'surname' => 'al-Quwatli',
            'email' => 'Muhammad.Kamal.RA@gmail.com'
        ]);
        User::create([
            'name' => 'Maher',
            'surname' => 'Azon',
            'email' => 'Maher@gmail.com'
        ]);
        Product::create([
            'productname' => 'mouse',
        ]);
        Product::create([
            'productname' => 'keyboard',
        ]);
        Order::create([
            'products' => ['keyboard','mouse'],
            'userid' => '1',
            'price' => '150'
        ]);
        Order::create([
            'products' => ['keyboard'],
            'userid' => '2',
            'price' => '100'
        ]);
        Payment::create([
            'paymenttype' => ['creditcard','wiretransfer'],
            'price' => '150'
        ]);
        Payment::create([
            'paymenttype' => ['wiretransfer'],
            'price' => '100'
        ]);
    }
}
