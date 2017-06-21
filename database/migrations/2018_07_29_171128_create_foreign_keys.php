<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration
{
    public function up()
    {
        Schema::table('chatter_discussion', function (Blueprint $table) {
            $table->foreign('chatter_category_id')->references('id')->on('chatter_categories')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });

        Schema::table('chatter_post', function (Blueprint $table) {
            $table->foreign('chatter_discussion_id')->references('id')->on('chatter_discussion')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });

         Schema::table('dados_profissionais', function (Blueprint $table) {
        $table->foreign('id_user')->references('id')->on('users')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });


        Schema::table('users', function (Blueprint $table) {
             $table->foreign('id_status')->references('id')->on('status')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('id_perfil')->references('id')->on('perfis')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('id_cadastro')->references('id')->on('cadastros')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });

         Schema::table('menus', function (Blueprint $table) {
             $table->foreign('id_perfil')->references('id')->on('perfis')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });

         Schema::table('paginas', function (Blueprint $table) {
             $table->foreign('id_user')->references('id')->on('users')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });

         Schema::table('comissoes_users', function (Blueprint $table) {
             $table->foreign('id_user')->references('id')->on('users')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('id_comissao')->references('id')->on('comissoes')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });

         Schema::table('mensagens', function (Blueprint $table) {
             $table->foreign('id_assunto')->references('id')->on('assuntos')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });

        Schema::table('posts', function (Blueprint $table) {
             $table->foreign('id_tag')->references('id')->on('tags')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('id_user')->references('id')->on('users')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });

       

        Schema::table('dados_pessoais', function (Blueprint $table) {

        $table->foreign('id_cidade')->references('id')->on('cidades')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        $table->foreign('id_nacionalidade')->references('id')->on('nacionalidade')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        $table->foreign('id_estado')->references('id')->on('estados')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        $table->foreign('id_user')->references('id')->on('users')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });

        

        Schema::table('formacoes_academicas', function (Blueprint $table) {
             $table->foreign('id_estado')->references('id')->on('estados')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
             $table->foreign('id_cidade')->references('id')->on('cidades')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
             $table->foreign('id_usuario')->references('id')->on('users')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
             $table->foreign('id_categoria_formacao')->references('id')->on('categorias_formacoes')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });

        Schema::table('usuario_categoria', function (Blueprint $table) {
             $table->foreign('id_user')->references('id')->on('users')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
             $table->foreign('id_categoria')->references('id')->on('categorias')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
           
        });

       

    }

    public function down()
    {
        Schema::table('chatter_discussion', function (Blueprint $table) {
            $table->dropForeign('chatter_discussion_chatter_category_id_foreign');
            $table->dropForeign('chatter_discussion_user_id_foreign');
        });
        Schema::table('chatter_post', function (Blueprint $table) {
            $table->dropForeign('chatter_post_chatter_discussion_id_foreign');
            $table->dropForeign('chatter_post_user_id_foreign');
        });

        Schema::table('dados_profissionais', function (Blueprint $table) {
            $table->dropForeign('dados_profissionais_id_user_foreign');
        });

        Schema::table('dados_pessoais', function (Blueprint $table) {
            $table->dropForeign('dados_pessoais_id_users_foreign');
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign('posts_id_users_foreign');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_id_perfil_foreign');
        });

        Schema::table('menus', function (Blueprint $table) {
            $table->dropForeign('menus_id_perfil_foreign');
        });

        Schema::table('paginas', function (Blueprint $table) {
            $table->dropForeign('paginas_id_users_foreign');
        });

        Schema::table('comissoes_users', function (Blueprint $table) {
            $table->dropForeign('comissoes_users_users_id_foreign');
            $table->dropForeign('comissoes_users_comissoes_id_foreign');
        });

         Schema::table('mensagens', function (Blueprint $table) {
            $table->dropForeign('mensagens_id_assuntos_foreign');
        });

         Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign('posts_id_tags_foreign');
        });

         Schema::table('dados_pessoais', function (Blueprint $table) {
            $table->dropForeign('dados_pessoais_id_nacionalidade_foreign');
        });

         Schema::table('dados_pessoais', function (Blueprint $table) {
            $table->dropForeign('dados_pessoais_id_cidades_foreign');
        });

         Schema::table('dados_pessoais', function (Blueprint $table) {
            $table->dropForeign('dados_pessoais_id_estados_foreign');
        });
    }
}