<?php

use Illuminate\Database\Seeder;

class EscalasTableSeeder extends Seeder
{

     public function run()
     {
       DB::table('escalas')->delete();
       DB::table("escalas")->insert([
           [
               "id"      => 1,
               "escala"   => "Segunda à Sexta",
           ],
           [
               "id"      => 2,
               "escala"   => "Fim de semana",
           ],
       ]);
     }
}
