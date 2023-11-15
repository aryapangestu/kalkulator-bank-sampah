<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryCollection;
use App\Models\Income;
use Illuminate\Http\Request;

class InputUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index', ['title' => 'Dashboard']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.input', ['title' => 'Input', 'categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'totalPrice' => 'required',
        ]);

        $income = Income::create([
            'user_id' => 1,
            'total' => $validated['totalPrice'],
        ]);

        $requestData = $request->except('_token', 'totalPrice');

        // Loop untuk menyimpan data
        foreach ($requestData as $categoryName => $total) {
            CategoryCollection::create([
                'income_id' => $income->id,
                'category_name' => $categoryName,
                'total' => $total,
            ]);
        }

        return redirect('/input')->with('alert', 'Sampah added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
