<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = ['nome_categoria', 'cadastrado_por', 'ativo'];
  public $timestamps = true;

  use HasFactory;
}