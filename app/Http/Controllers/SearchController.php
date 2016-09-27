<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Vinkla\Algolia\Facades\Algolia;

class SearchController extends Controller
{

    /**
     * SearchController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function putThrough(Request $request)
    {
        $query = $request->get('query');
        $algo = Algolia::initIndex('social_university');

         $result = $algo->search($query);
        return view('layouts.search_result', compact('result'));
    }






}
