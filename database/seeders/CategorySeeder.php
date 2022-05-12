<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('categories')->insert(
      [
        'nome_categoria' => 'Redes de Computadores',
        'cadastrado_por' => 1,
        'created_at' => date('Y-m-d H:i:s'),
      ]
    );
    DB::table('categories')->insert([
      'nome_categoria' => 'Web',
      'cadastrado_por' => 1,
      'created_at' => date('Y-m-d H:i:s'),
    ]);
    DB::table('categories')->insert([
      'nome_categoria' => 'Banco de Dados',
      'cadastrado_por' => 1,
      'created_at' => date('Y-m-d H:i:s'),
    ]);
    DB::table('categories')->insert([
      'nome_categoria' => 'Linguagem de Programação',
      'cadastrado_por' => 1,
      'created_at' => date('Y-m-d H:i:s'),
    ]);
    DB::table('categories')->insert([
      'nome_categoria' => 'Sistemas Operacionais',
      'cadastrado_por' => 1,
      'created_at' => date('Y-m-d H:i:s'),
    ]);
    DB::table('categories')->insert([
      'nome_categoria' => 'Hardware',
      'cadastrado_por' => 1,
      'created_at' => date('Y-m-d H:i:s'),
    ]);
    DB::table('categories')->insert([
      'nome_categoria' => 'Dispositivos Móveis',
      'cadastrado_por' => 1,
      'created_at' => date('Y-m-d H:i:s'),
    ]);
    DB::table('categories')->insert([
      'nome_categoria' => 'Jogos',
      'cadastrado_por' => 1,
      'created_at' => date('Y-m-d H:i:s'),
    ]);
    DB::table('categories')->insert([
      'nome_categoria' => 'Engenharia de Software',
      'cadastrado_por' => 1,
      'created_at' => date('Y-m-d H:i:s'),
    ]);
    DB::table('categories')->insert([
      'nome_categoria' => 'Fisiologia',
      'cadastrado_por' => 1,
      'created_at' => date('Y-m-d H:i:s'),
    ]);
    DB::table('categories')->insert([
      'nome_categoria' => 'Morfologia Humana',
      'cadastrado_por' => 1,
      'created_at' => date('Y-m-d H:i:s'),
    ]);
    DB::table('categories')->insert([
      'nome_categoria' => 'Fisioterapia',
      'cadastrado_por' => 1,
      'created_at' => date('Y-m-d H:i:s'),
    ]);
  }
}