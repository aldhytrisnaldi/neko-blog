<?php

use App\Specialist;
use Illuminate\Database\Seeder;

class SpecialistSeeder extends Seeder
{
    public function run()
    {
        $specialist = [
            'Spesialis Anak',
            'Spesialis Bedah Umum',
            'Spesialis Bedah Mulut',
            'Speslalis Gizi Klinik',
            'Spesialis Kulit dan Kelamin',
            'Spesialis Mata',
            'Spesialis Obstetri dan Ginekologi',
            'Spesialis Penyakit Dalam',
            'Spesialis Radiologi',
            'Spesialis Saraf',
            'Spesialis THT',
            'Spesialis Urologi',
            'Dokter Gigi',
        ];

        foreach ($specialist as $s)
        {
            Specialist::create(['specialist_name' => $s]);
        }
    }
}
