<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // ...
            [
                'barang_id' => 1,
                'user_id' => 1,
                'stok_tanggal' => now(),
                'stok_jumlah' => 30,
                
            ],
            [
                'barang_id' => 2,
                'user_id' => 1,
                'stok_tanggal' => now(),
                'stok_jumlah' => 50,
            
            ],
            [
                'barang_id' => 3,
                'user_id' => 1,
                'stok_tanggal' => now(),
                'stok_jumlah' => 40,
        
            ],
            [
                'barang_id' => 4,
                'user_id' => 2,
                'stok_tanggal' => now(),
                'stok_jumlah' => 30,
                
            ],
            [
                'barang_id' => 5,
                'user_id' => 2,
                'stok_tanggal' => now(),
                'stok_jumlah' => 50,
            
            ],
            [
                'barang_id' => 6,
                'user_id' => 2,
                'stok_tanggal' => now(),
                'stok_jumlah' => 40,
        
            ],
            [
                'barang_id' => 7,
                'user_id' => 3,
                'stok_tanggal' => now(),
                'stok_jumlah' => 30,
                
            ],
            [
                'barang_id' => 8,
                'user_id' => 3,
                'stok_tanggal' => now(),
                'stok_jumlah' => 50,
            
            ],
            [
                'barang_id' => 9,
                'user_id' => 3,
                'stok_tanggal' => now(),
                'stok_jumlah' => 40,
        
            ],
            [
                'barang_id' => 10,
                'user_id' => 1,
                'stok_tanggal' => now(),
                'stok_jumlah' => 40,
        
            ],
            // Add more data as needed
        ];

        // Insert data into m_stoks table
        DB::table('t_stok')->insert($data);
    }
}