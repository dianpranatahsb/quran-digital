<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SearchHistory;

class SearchController extends Controller{
    public function store(Request $request){
    $request->validate([
        'keyword' => 'required|string|max:255'
    ]);
    return SearchHistory::create([
        'keyword' => $request->keyword
    ]);
}
    public function index(){
        return SearchHistory::latest()->get();
    }
}
