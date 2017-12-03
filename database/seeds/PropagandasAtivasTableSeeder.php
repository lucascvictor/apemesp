<?php

use Illuminate\Database\Seeder;

class PropagandasAtivasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = date("Y-m-d H:i:s");
       DB::table('propagandas_ativas')->delete();
       DB::table('propagandas_ativas')->insert([
           [
               "id"        => 1,
               "quantidade"    => 2,
               "created_at"    => $data,
               "updated_at"    => $data,

           ],
       ]);
   }
    
}
