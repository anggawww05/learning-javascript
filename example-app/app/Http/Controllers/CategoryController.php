<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function view()
    {
        $categories = Category::all();
        return view('admin.list', compact('categories'));
    }

    public function viewAdd()
    {
        return view('admin.user');
    }

    public function viewEdit($id)
    {
        $category = Category::where('id', $id)->first();
        return view('admin.editUser', compact('category'));
    }

    public function viewDetail($id)
    {
        // dd($id);
        $category = Category::where('id', $id)->first();
        // dd($category);
        return view('admin.detailCategory', compact('category'));
    }

    public function createCategory()
    {
        try {
            //code...
            $validate = request()->validate([
                'category' => ['required', 'string', 'max:255'],
            ]);

            Category::create([
                'name' => $validate['category'],
            ]);
            return redirect()->route('view.crud')->with('success', 'Successing for add category');

        } catch (\Exception $e) {
            logger($e->getMessage());
            return redirect()->back()->with('error', 'tidak memenuhi aturan');
        }
    }

    public function updateCategory()
    {
        // dd(request()->all());
        try {
            //code...
            $validate = request()->validate([
                'category' => ['required', 'string', 'max:255'],
            ]);

            Category::where('id', request()->id)->update([
                'name' => $validate['category'],
            ]);
            return redirect()->route('view.crud')->with('success', 'Successing for update category');

        } catch (\Exception $e) {
            logger($e->getMessage());
            return redirect()->back()->with('error', 'tidak memenuhi aturan');
        }
    }

    public function deleteCategory($id)
    {
        try {
            //code...
            Category::where('id', $id)->delete();
            return redirect()->route('view.crud')->with('success', 'Successing for delete category');
        } catch (\Exception $e) {
            logger($e->getMessage());
            return redirect()->back()->with('error', 'tidak memenuhi aturan');
        }
    }
}
