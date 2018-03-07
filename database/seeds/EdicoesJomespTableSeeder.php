<?php

use Illuminate\Database\Seeder;

class EdicoesJomespTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('edicoes_jomesp')->delete();
       DB::table("edicoes_jomesp")->insert([
        [
            "id"      => 1,
            "arquivo"   => "1ºEdição.pdf",
            "edicao" => '1ª Edição JoMESP',
            "linkexterno" => '',
            "created_at" =>'2017-11-30 14:27:56 ',
            "updated_at" =>'2017-11-30 14:27:56 ',
        ],
        [
            "id"      => 2,
            "arquivo"   => "2ºEdição.pdf",
            "edicao" => '2ª Edição JoMESP',
            "linkexterno" => '',
            "created_at" =>'2017-11-30 14:27:56 ',
            "updated_at" =>'2017-11-30 14:27:56 ',
        ],
        [
            "id"      => 3,
            "arquivo"   => "3ºEdição.pdf",
            "edicao" => '3ª Edição JoMESP',
            "linkexterno" => '',
            "created_at" =>'2017-11-30 14:27:56 ',
            "updated_at" =>'2017-11-30 14:27:56 ',
        ],
        [
            "id"      => 4,
            "arquivo"   => "4ºEdição.pdf",
            "edicao" => '4ª Edição JoMESP',
            "linkexterno" => '',
            "created_at" =>'2017-11-30 14:27:56 ',
            "updated_at" =>'2017-11-30 14:27:56 ',
        ],
        [
            "id"      => 5,
            "arquivo"   => "5ºEdição.pdf",
            "edicao" => '5ª Edição JoMESP',
            "linkexterno" => 'https://goo.gl/GRRVCE',
            "created_at" =>'2017-11-30 14:27:56 ',
            "updated_at" =>'2017-11-30 14:27:56 ',
        ],
        [
            "id"      => 6,
            "arquivo"   => "6ºEdição-EspecialCLAM.pdf",
            "edicao" => '6ª Edição JoMESP',
            "linkexterno" => 'https://goo.gl/fM1v4f',
            "created_at" =>'2017-11-30 14:27:56 ',
            "updated_at" =>'2017-11-30 14:27:56 ',
        ],
        [
            "id"      => 7,
            "arquivo"   => "7ºEdição.pdf",
            "edicao" => '7ª Edição JoMESP',
            "linkexterno" => 'https://goo.gl/fscUnh',
            "created_at" =>'2017-11-30 14:27:56 ',
            "updated_at" =>'2017-11-30 14:27:56 ',
        ],
        [
            "id"      => 8,
            "arquivo"   => "8ºEdição.pdf",
            "edicao" => '8ª Edição JoMESP',
            "linkexterno" => 'https://goo.gl/BU4EQE',
            "created_at" =>'2017-11-30 14:27:56 ',
            "updated_at" =>'2017-11-30 14:27:56 ',
        ],
        [
            "id"      => 9,
            "arquivo"   => "9ºEdição.pdf",
            "edicao" => '9ª Edição JoMESP',
            "linkexterno" => 'https://goo.gl/paFCCG',
            "created_at" =>'2017-11-30 14:27:56 ',
            "updated_at" =>'2017-11-30 14:27:56 ',
        ],
        [
            "id"      => 10,
            "arquivo"   => "10ºEdição.pdf",
            "edicao" => '10ª Edição JoMESP',
            "linkexterno" => 'https://goo.gl/pUoeea',
            "created_at" =>'2017-11-30 14:27:56 ',
            "updated_at" =>'2017-11-30 14:27:56 ',
        ],
    
        ]);
    }
}
