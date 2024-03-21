<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Search;

class Searchs extends Controller
{
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        // Perform the search using LIKE operator
        $results = Search::where('description', 'like', '%' . $searchTerm . '%')
                            ->get();

        return view('search_results', ['results' => $results]);
    }
}
