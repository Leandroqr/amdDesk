<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use app\Models\Sgimatrizincidente;
use Illuminate\Http\Request;

class SgimatrizSeccionController extends Controller
{
    public function index(Request $request)
    {
        $search_term = $request->input('q');
        $form = collect($request->input('form'))->pluck('value', 'name');

        $options = Sgimatrizincidente::query();

        // if no category has been selected, show no options
        if (!$form['matriz_id']) {
            return [];
        }

        // if a category has been selected, only show articles in that category
        if ($form['matriz_id']) {
            $options = $options->where('matriz_id', $form['matriz_id']);
        }

        if ($search_term) {
            $results = $options->where('name', 'LIKE', '%' . $search_term . '%')->paginate(10);
        } else {
            $results = $options->paginate(10);
        }

        return $options->paginate(10);
    }

    public function show($id)
    {
        return Sgimatrizincidente::find($id);
    }
}
