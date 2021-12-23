<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DocumentsTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('document_types')->insert([
            'type_name' => 'Ata',
            'type_name' => 'Recibo',
            'type_name' => 'Autorização',
            'type_name' => 'Aval',
            'type_name' => 'Fatura'
        ]);
    }
}
