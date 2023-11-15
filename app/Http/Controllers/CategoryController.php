<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.kategoriIndex', ['title' => 'Kategori', 'categories' => Category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kategoriCreate', [
            "title" => "Buat Kategori",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'src' => 'required|file|max:500',
            'price' => 'required|max:255',

        ]);

        if ($request->file('src')) {
            $validated['src'] = $request->file('src')->store('kategori-img');
        }

        Category::create($validated);
        return redirect('/kategori')->with('alert', 'Kategori added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('admin.kategoriEdit', [
            "title" => "Edit Category",
            "category" => Category::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|max:255',
        ]);

        if ($request->file('src')) {
            $validated['src'] = $request->file('src')->store('place-img');
            $locImg = "storage/" . Category::find($id)->src;
            File::delete($locImg);
        }

        Category::where('id', $id)->update($validated);
        return redirect('/kategori')->with('alert', 'Kategori updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
