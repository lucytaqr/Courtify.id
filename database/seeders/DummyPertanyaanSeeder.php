<?php

namespace Database\Seeders;

use App\Models\Pertanyaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyPertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pertanyaanData = [
            [
                'name'=>'User Courtify',
                'email'=>'courtifyadmin@gmail.com',
                'phone'=>'081223456789',
                'domisili'=>'Kota Jakarta',
                'pertanyaan' =>'Apa bisa jika saya ingin mendaftarkan venue saya?'
            ],
            [
                'name'=>'Lucyta Qutsyaning',
                'email'=>'lucytaqr08@gmail.com',
                'phone'=>'082334235300',
                'domisili'=>'Kota Malang',
                'pertanyaan' =>'Apa bisa jika saya ingin menyewa venue?'
            ],
            [
                'name'=>'Fatma Yuniardini',
                'email'=>'fatmadini@gmail.com',
                'phone'=>'081223456789',
                'domisili'=>'Kota Surabaya',
                'pertanyaan' =>'Apa bisa jika saya ingin membeli venue?'
            ],
            [
                'name'=>'Chalista Yulia',
                'email'=>'chalistahazizah@gmail.com',
                'phone'=>'082334235300',
                'domisili'=>'Kota Batu',
                'pertanyaan' =>'Apa bisa jika saya ingin menjual venue?'
            ],
            [
                'name'=>'Dono Martono',
                'email'=>'dono@gmail.com',
                'phone'=>'081223456789',
                'domisili'=>'Kota Blitar',
                'pertanyaan' =>'Apa yang bisa saya bantu?'
            ],
            [
                'name'=>'Yono Sumarno',
                'email'=>'yono@gmail.com',
                'phone'=>'082334235300',
                'domisili'=>'Kota Saranjana',
                'pertanyaan' =>'Apa yang bisa saya lakukan dalam website ini?'
            ],
        ];

        foreach($pertanyaanData as $key => $val){
            Pertanyaan::create($val);
        }
    }
}
