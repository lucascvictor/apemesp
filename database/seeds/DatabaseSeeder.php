<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CadastrosTableSeeder::class);
        $this->call(TagsTableSeeder::class);
    	$this->call(StatusTableSeeder::class);
    	$this->call(PerfisTableSeeder::class);
    	$this->call(UsersTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(AssuntosTableSeeder::class);
        $this->call(MensagensTableSeeder::class);
        $this->call(PaginasTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(CategoriasTableSeeder::class);
        $this->call(CategoriasFormacoesTableSeeder::class);
        $this->call(NacionalidadesTableSeeder::class);
    	$this->call(ChatterCategoriasTableSeeder::class);
    	$this->call(ChatterDiscussoesTableSeeder::class);
        $this->call(ChatterPostsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(LinhaDoTempoTableSeeder::class);
        $this->call(DadosPessoaisTableSeeder::class);
        $this->call(DadosAcademicosTableSeeder::class);
        $this->call(EspecialidadeTableSeeder::class);
        $this->call(ProximidadeGeograficaTableSeeder::class);
        $this->call(LiteraturaTableSeeder::class);
        $this->call(PropagandasTableSeeder::class);
        $this->call(DadosAcademicosTableSeeder::class);
        $this->call(FormacoesAcademicasTableSeeder::class);
        $this->call(EscalasTableSeeder::class);
        $this->call(ControleAnosTableSeeder::class);
        $this->call(StatusAnuidadesTableSeeder::class);
        $this->call(AnuidadesTableSeeder::class);
        $this->call(ConquistasTableSeeder::class);
        $this->call(FormacoesTableSeeder::class);
        $this->call(PropagandasAtivasTableSeeder::class);
    }
}
