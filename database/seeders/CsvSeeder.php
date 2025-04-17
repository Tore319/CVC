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
        $csv1 = new Csv();
        $csv1->hash = 'hashPrueba';
        $csv1->csv = 'csvPrueba';
        $csv1->DNI = '20947867L';
        $csv1->nombre = 'Juanjo';
        $csv1->apellidos = 'Torres Roig';
        $csv1->correo = 'juanjo@gmail.com';
        $csv1->archivo = 'csv/yU0drobNbcYstr1fZaEl4ZUvvZUg9uBjJh5f5teZ.pdf';
        $csv1->save();

        $csv2 = new Csv();
        $csv2->hash = 'hashPrueba';
        $csv2->csv = 'csvPrueba';
        $csv2->DNI = '20947869Y';
        $csv2->nombre = 'Marc';
        $csv2->apellidos = 'Meola';
        $csv2->correo = 'marc@gmail.com';
        $csv2->archivo = 'csv/yU0drobNbcYstr1fZaEl4ZUvvZUg9uBjJh5f5teZ.pdf';
        $csv2->save();
    }
}
