<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoanController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'book_id' => 'required|integer',
        ]);

        $book = DB::table('books')->where('id', $request->book_id)->first();
        if (!$book || !$book->available) {
            return response()->json(['message' => 'Book not available'], 400);
        }

        DB::table('loans')->insert([
            'user_id' => $request->user_id,
            'book_id' => $request->book_id,
            'loan_date' => now(),
            'return_date' => null
        ]);

        DB::table('books')->where('id', $request->book_id)->update(['available' => false]);

        return response()->json(['message' => 'Loan registered successfully']);
    }
}