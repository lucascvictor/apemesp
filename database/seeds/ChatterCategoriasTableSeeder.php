<?php

use Illuminate\Database\Seeder;

class ChatterCategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // CREATE THE CATEGORIES

        \DB::table('chatter_categories')->delete();

        \DB::table('chatter_categories')->insert([
            0 => [
                'id'         => 1,
                'parent_id'  => null,
                'order'      => 1,
                'name'       => 'Tratamentos',
                'color'      => '#3498DB',
                'slug'       => 'tratamentos',
                'created_at' => null,
                'updated_at' => null,
            ],
            1 => [
                'id'         => 2,
                'parent_id'  => null,
                'order'      => 2,
                'name'       => 'Gravidez',
                'color'      => '#2ECC71',
                'slug'       => 'gravidez',
                'created_at' => null,
                'updated_at' => null,
            ],
            2 => [
                'id'         => 3,
                'parent_id'  => null,
                'order'      => 3,
                'name'       => 'Autismo',
                'color'      => '#9B59B6',
                'slug'       => 'autismo',
                'created_at' => null,
                'updated_at' => null,
            ],
            3 => [
                'id'         => 4,
                'parent_id'  => null,
                'order'      => 4,
                'name'       => 'Dúvidas',
                'color'      => '#E67E22',
                'slug'       => 'duvidas',
                'created_at' => null,
                'updated_at' => null,
            ],
            4 => [
                'id'         => 5,
                'parent_id'  => null,
                'order'      => 5,
                'name'       => 'Instrumentos',
                'color'      => '#E67022',
                'slug'       => 'instrumentos',
                'created_at' => null,
                'updated_at' => null,
            ],
        ]);
    }
}
