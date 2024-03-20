<?php

namespace App\Http\Controllers\API;

use App\Models\Kurss;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KursaController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nosaukums' => 'required|string|max:255',
            'pask_text' => 'required|text',
            'banner_andress' => 'required|string',
            'cilv_sk_kursa' => 'required|integer',
        ]);
        dd('Dati tika ievaditi');
        $kurss = Kurss::create($validatedData);
        return response()->json(['message' => 'It has been created successfully', 'data' => $kurss], 201);
    }

    public function index()
    {
        $kurss = Kurss::all();
        return response()->json(['data' => $kurss], 200);
    }
}
