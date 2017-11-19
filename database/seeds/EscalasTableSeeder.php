<?php

use Illuminate\Database\Seeder;

class EscalasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('escalas')->delete();
      DB::table("escalas")->insert([
          [
              "id"      => 1,
              "escala"   => "Segunda à Sexta",
          ],


      ]);
    }
}
