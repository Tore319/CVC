<?php

namespace Database\Seeders;

use App\Models\Csv;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CsvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csv = new Csv();
        $csv->hash = 'prueba';
        $csv->csv = 'csvPrueba';
        $csv->DNI = '20947867L';
        $csv->nombre = 'Juanjo';
        $csv->apellidos = 'Torres Roig';
        $csv->correo = 'juanjo@gmail.com';
        $csv->archivo = 'prueba';
        $csv->tipo_archivo = 'pdf';
        $csv->save();
    }
}
