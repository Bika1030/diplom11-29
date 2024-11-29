<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\YourModel;

use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){
        $books = Book::all();
        $authors = Author::all();
        $categories = Category::all();
        return view('home.index', compact('categories', 'books','authors'));
    }

    public function read($id)
    {
        $book = Book::query()->findOrFail($id);
        if ($book->book_pdf) {
            return response()->file($book->book_pdf);
        } else {
            return redirect()->back()->with('error', 'PDF not found');
        }
    }

    public function book_details($id)
    {
        $book = Book::query()->findOrFail($id);
        return view('home.book_details', compact('book'));
    }

    public function authors()
    {
        $authors = Author::all();
        return view('home.author', compact('authors'));
    }
    public function author_detail($id)
    {
        $authors = Author::query()->findOrFail($id);
        return view('home.author_detail', compact('authors'));
    }
    public  function author_book($id){
        $books = Book::query()->where('author_id',$id)->get();
        $authors = Author::all();
        return view('home.author_detail', compact('authors', 'books'));
    }



    public function explore(){
        $data = Book::all();
        return view('home.explore',compact('data'));
    }

    public function categories()
    {
        $categoties = Category::all();
        return view('home.category',compact('categories'));
    }

    public function category($id)
    {
        $books = Book::query()->where('category_id',$id)->get();
        $categories = Category::all();
        return view('home.index', compact('categories', 'books'));
    }

    public function search(Request $request){
        $categories = Category::all();
        $authors = Author::all();
        $search = $request->search;
        $books = Book::where('title', 'LIKE', '%' . $search . '%')->orWhere('category_id', $request->cat_title)
        ->orWhere('author_id', $request->name)
        ->paginate(10);  // This will paginate the results, 10 per page
        return view('home.index', compact('books', 'categories', 'authors'));
    }
}
