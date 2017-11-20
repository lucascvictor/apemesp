<?php

use Illuminate\Database\Seeder;

class ControleAnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table("controle_de_anos")->delete();
      DB::table("controle_de_anos")->insert([

              0 => [
                  "ano"            => 2010,
              ],
              1 => [
                  "ano"            => 2011,
              ],
              2 => [
                  "ano"            => 2012,
              ],
              3 => [
                  "ano"            => 2013,
              ],
              4 => [
                  "ano"            => 2014,
              ],
              5 => [
                  "ano"            => 2015,
              ],
              6 => [
                  "ano"            => 2016,
              ],
              7 => [
                  "ano"            => 2017,
              ],
          ]);
    }
}
