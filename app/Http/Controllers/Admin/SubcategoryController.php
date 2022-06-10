<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subcategory;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubcategoryController extends Controller
{

  /**
   * @var Subcategory
   */
  private $subcategory;

  public function __construct(Subcategory $subcategory)
  {
    $this->subcategory = $subcategory;
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $subcategories = $this->subcategory::orderBy('category_id', 'desc')->paginate(12);

    $data = ['subcategories' => $subcategories];


    return view('admin.subcategories.index', $data);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $categories = Category::all(['id', 'nome_categoria']);
    $data = ['categories' => $categories];

    return view('admin.subcategories.create', $data);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $data = $request->all();
    //$data['created_at'] = date('Y-m-d H:i:s');
    $data['cadastrado_por'] = Auth::user()->id;
    //dd($data);
    $subcategory = $this->subcategory->create($data);

    //flash('Categoria Criado com Sucesso!')->success();
    return redirect()->route('admin.subcategories.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $subcategory = $this->subcategory->findOrFail($id);
    $categories = Category::all(['id', 'nome_categoria']);

    $data = ['subcategory' => $subcategory, 'categories' => $categories];

    return view('admin.subcategories.edit', $data);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }

  public function getSubcategoriesByCategory($id)
  {
    $subcategories = Subcategory::where('category_id', $id)->get();
    return response()->json($subcategories);
  }
}