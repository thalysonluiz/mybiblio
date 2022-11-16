<?php

namespace App\Traits;

use App\Models\Book;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpOffice\PhpSpreadsheet\IOFactory;

trait IOExcelTrait
{

  public function importExcel(Request $request)
  {
    $arquivo = $request->all();

    //$data['cadastrado_por'] = Auth::user()->id;
    //dd($arquivo['arquivo_dados']);
    $read = IOFactory::load($arquivo['arquivo_dados']);
    $data = $read->getActiveSheet()->toArray();
    $line = 0;
    $created = 0;
    $updated = 0;
    $lines = [];
    $i = 0;
    foreach ($data as $item) {
      //condition to verify if has 3 collumns in the worksheet
      if (count($item) == 12) {
        //your condition here to first line
        if ($line == 0) {
          //
        }
        if ($line > 0) {
          //$dt_criacao = date("Y-m-d H:i:s");
          $cadastrado_por = Auth::user()->id;
          $lines[$i] = $item;

          $book = Book::where('isbn', $item[0])->first();
          //if exists book
          if (!empty($book)) {
            $book->update([
              'isbn' => $item[0],
              'titulo' => $item[1],
              'subtitulo' => $item[2],
              'autor' => $item[3],
              'editora' => $item[4],
              'ano' => $item[5],
              'edicao' => $item[6],
              'n_paginas' => $item[7],
              'descricao' => $item[8],
              'cadastrado_por' => $cadastrado_por,
              'category_id' => $item[9],
              'subcategory_id' => $item[10],
              'capa' => $item[11]
            ]);
            $updated++;
            //if not exists
          } else {
            $livro = book::create([
              'isbn' => $item[0],
              'titulo' => $item[1],
              'subtitulo' => $item[2],
              'autor' => $item[3],
              'editora' => $item[4],
              'ano' => $item[5],
              'edicao' => $item[6],
              'n_paginas' => $item[7],
              'descricao' => $item[8],
              'cadastrado_por' => $cadastrado_por,
              'category_id' => $item[9],
              'subcategory_id' => $item[10],
              'capa' => $item[11]
            ]);

            $created++;
          }
          $i++;
        }
        $line++;
        //not exists 3 columns in the worksheet

      } else {
        throw new Exception("Número de colunas inválido");
      }
    }
    //returns imported worksheet notification
    $notification = [
      'message' => "worksheet_imported",
      'created' => $created,
      'updated' => $updated,
    ];

    return $notification;
  }

  public function onlyNumbers($string)
  {
    return preg_replace('/[^0-9]/', '', $string);
  }

  public function validCpf($string)
  {
    $clear_cpf = $this->onlyNumbers($string);
    if (is_numeric($clear_cpf)) {
      $clear_cpf = substr(str_repeat("0", 11) . $clear_cpf, -11);
      return $clear_cpf;
    }
    return null;
  }
}