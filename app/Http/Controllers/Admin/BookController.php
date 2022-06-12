<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
  /**
   * @var Book
   */
  private $book;

  public function __construct(Book $book)
  {
    $this->book = $book;
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $books = $this->book->paginate(10);

    $data = ['books' => $books];

    return view('admin.books.index', $data);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $categories = Category::all(['id', 'nome_categoria']);
    $subcategories = Subcategory::all(['id', 'nome_subcategoria']);
    $data = ['categories' => $categories, 'subcategories' => $subcategories];

    return view('admin.books.create', $data);
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

    $data['cadastrado_por'] = Auth::user()->id;
    //dd($data);
    $book = $this->book->create($data);

    //flash('Categoria Criado com Sucesso!')->success();
    return redirect()->route('admin.books.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($slug)
  {
    $book = $this->book->where('slug', $slug)->first();
    $summaries = $book->summaries()->paginate(10);

    $data = ['book' => $book, 'summaries' => $summaries];

    return view('admin.books.show', $data);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
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

  public function getIsbnAjax($isbn)
  {

    $reg = json_decode(file_get_contents("https://www.googleapis.com/books/v1/volumes?q=9786558820291+$isbn&maxResults=1"));

    $dados['total'] = $reg->totalItems;

    if ($reg->totalItems > 0) {
      $item = $reg->items[0]->volumeInfo;

      $dados['titulo'] = $item->title;

      $dados['autores'] = "";
      $dados['subtitulo'] = "";
      $dados['editora'] = "";
      $dados['obs'] = "";
      $dados['paginas'] = "";
      $dados['dataPublicado'] = "";
      $dados['capa'] = "";

      if (!empty($item->subtitle)) {
        $dados['subtitulo'] = $item->subtitle;
      }
      if (!empty($item->publisher)) {
        $dados['editora'] = $item->publisher;
      }
      if (!empty($item->description)) {
        $dados['obs'] = $item->description;
      }
      if (!empty($item->pageCount)) {
        $dados['paginas'] = $item->pageCount;
      }
      if (!empty($item->publishedDate)) {
        $data = explode('-', $item->publishedDate);
        $dados['dataPublicado'] = $data[0];
      }
      if (!empty($item->imageLinks)) {
        $dados['capa'] = $item->imageLinks->thumbnail;
      }
      if (!empty($item->authors)) {
        foreach ($item->authors as $author) {
          $dados['autores'] .= $author . "; ";
        }
      }
    }

    return response()->json($dados);
  }
}