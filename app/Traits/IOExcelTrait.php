<?php

namespace App\Traits;

use App\Models\Cadastro;
use App\Models\Endereco;
use Illuminate\Http\Request;
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
      if (count($item) == 14) {
        //your condition here to first line
        if ($line == 0) {
          //
        }
        if ($line > 0) {
          $dt_nascimento = date("Y-m-d", strtotime($item[4]));
          $lines[$i] = $item;
          //verify if the current customer exists
          $cpf = $this->validCpf($item[3]);
          $cadastro = Cadastro::where('cpf', $cpf)->first();
          //if exists cadastro
          if (!empty($cadastro)) {
            $cadastro->update([
              'nome' => $item[0],
              'dt_nascimento' => $dt_nascimento,
              'sexo' => $item[2],
              'celular' => $item[11],
              'email' => $item[12],
              'cpf' => $cpf,
              'nome_social' => $item[1],
              'profissao' => $item[13],
              'nacionalidade' => $item[5]
            ]);
            $updated++;
            //if not exists
          } else {
            $voluntario = Cadastro::create([
              'nome' => $item[0],
              'dt_nascimento' => $dt_nascimento,
              'sexo' => $item[2],
              'celular' => $item[11],
              'email' => $item[12],
              'cpf' => $cpf,
              'nome_social' => $item[1],
              'profissao' => $item[13],
              'nacionalidade' => $item[5]
            ]);

            Endereco::create([
              'logradouro' => $item[6],
              'bairro' => $item[7],
              'cidade' => $item[8],
              'uf' => $item[9],
              'cep' => $item[10],
              'cadastro_id' => $voluntario->id
            ]);

            $created++;
          }
          $i++;
        }
        $line++;
        //not exists 3 columns in the worksheet

      } else {
        throw new Exception();
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