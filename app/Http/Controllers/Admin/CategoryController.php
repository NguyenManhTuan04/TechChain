<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all()->sortByDesc('is_type');
        return view('admin.category.index', compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if ($request->isMethod('POST')) {
            $param = $request->except('_token');
            $param = $request->validate([
                'name' => 'required|max:255',
                'is_type' => 'required',
            ]);
            if ($request->hasFile('image')) {
                $filePath = $request->file('image')->store('uploads/categoris', 'public');
            } else {
                $filePath = null;
            }
            $param['image'] = $filePath;
//            dd($param);
            Category::create($param);

            return redirect()->route('admins.category.index')->with('success', 'Thêm danh mục thành công');
        }
//        $data['created_at'] = now();
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
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
//        $data = $request->validate([
//            'name' => 'required|string|min:5|max:255',
//        ]);
//        $category = Category::find($id);
//        $data['updated_at'] = now();
//        if ($category) {
//            $category->update($data);
//        } else {
//            return redirect()->route('admins.category.index')->with('error', 'Category not found!');
//        }
//        return redirect()->route('admins.category.index')->with('success', 'Category updated successfully!');

        if ($request->isMethod('PUT')) {
            $param = $request->except('_token', '_method');
            $category = Category::findOrFail($id);
            $param = $request->validate([
                'name' => 'required|max:255',
                'is_type' => 'required',
            ]);
            if ($request->hasFile('image')) {
                if ($category->image && Storage::disk('public')->exists($category->image)) {
                    Storage::disk('public')->delete($category->image);
                }
                $filePath = $request->file('image')->store('uploads/categoris', 'public');
            } else {
                $filePath = $category->image;
            }
            $param['image'] = $filePath;
//            dd($param);
            $category->update($param);

            return redirect()->route('admins.category.index');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        if ($category->image && Storage::disk('public')->exists($category->image)) {
            Storage::disk('public')->delete($category->image);
        }

        return redirect()->route('admins.category.index');
    }

}
