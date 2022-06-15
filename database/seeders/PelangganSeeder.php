<?php

namespace Database\Seeders;
use App\Models\Pelanggan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        $data = [
            'pelanggan' => 'Gorengan',
            'alamat' => 'Pisang Goreng',
            'telp' => '082301392317'
        ];
            Pelanggan::create($data);
    }
}
