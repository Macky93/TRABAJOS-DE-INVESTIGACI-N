<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        $books = DB::table('books')
            ->join('authors', 'books.author_id', '=', 'authors.id')
            ->select('books.*', 'authors.name as author_name')
            ->get();

        return response()->json($books);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author_id' => 'required|integer'
        ]);

        DB::table('books')->insert([
            'title' => $request->title,
            'author_id' => $request->author_id,
            'available' => true
        ]);

        return response()->json(['message' => 'Book added successfully']);
    }
}