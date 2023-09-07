<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\BlogCategoryDataTable;
use App\DataTables\CategoryDataTable;
use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Str;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BlogCategoryDataTable $dataTable)
    {
        return $dataTable->render('admin.blog-category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog-category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:200']
        ]);

        $blog_category = new BlogCategory();
        $blog_category->name = $request->name;
        $blog_category->slug = Str::slug($request->name);
        $blog_category->save();
        toastr()->success('Blog Category Created Successfully!');
        return redirect()->route('admin.blog-category.index');
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
        $blog_category = BlogCategory::findOrFail($id);
        return view('admin.blog-category.edit', compact('blog_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'max:200']
        ]);

        $edit_blog_category = BlogCategory::findOrFail($id);
        $edit_blog_category->name = $request->name;
        $edit_blog_category->slug = Str::slug($request->name);
        $edit_blog_category->save();

        toastr()->success('Blog Category Updated Successfully');
        return redirect()->route('admin.blog-category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog_category = BlogCategory::findOrFail($id);
        $blog_category->delete();
        // $hasItem = PortfolioItem::where('category_id', $category->id)->count();
        // if($hasItem == 0) {
        //     $blog_category->delete();
        //     return true;
        // }
        // return response(['status' => 'error']);
    }
}