<?php

namespace App\Http\Controllers;

use App\Models\Summary;
use Illuminate\Http\Request;

class GuestController extends Controller
{

  public function index()
  {
    return view('home');
  }

  public function processSearch(Request $request)
  {
    $busca = $request->get('search');

    return redirect()->route('busca', $busca);
  }

  public function busca(string $busca)
  {
    $summaries = Summary::where('titulo', 'like', '%' . $busca . '%')
      ->orWhere('objetivos', 'like', '%' . $busca . '%')
      ->get();
    $data = ['summaries' => $summaries, 'busca' => $busca];

    return view('guest.busca', $data);
  }
}