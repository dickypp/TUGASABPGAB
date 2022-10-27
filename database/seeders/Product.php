<?php

namespace Database\Seeders;

use \Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'nama_produk' => 'Buku',
            'stok' => '10',
        ]);
    }
}
