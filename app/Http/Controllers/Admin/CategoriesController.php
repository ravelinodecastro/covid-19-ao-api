<?php

namespace App\Http\Controllers\admin;

use Inertia\Inertia;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
        app()->setLocale('pt');
        return Inertia::render('Categories/Index', [
            'filters' => Request::all('search', 'trashed'),
            'categories' => Category::orderBy('name')
               // ->filter(Request::only('search', 'trashed'))
                ->paginate()
        ]);
    }

    public function create()
    {
        return Inertia::render('Categories/Create');
    }

    public function store()
    {  
        app()->setLocale('pt');
        Request::validate([
        'name' => ['required', 'max:100'],
        'category_id' => ['required', 'max:50'],
        ]);
        Category::create([
            'id' =>  Request::get('id'),
            'name' => Request::get('name'),
           
            ]);

        return Redirect::route('categories')->with('success', 'category created.');
    }

    public function edit(category $category)
    {
        app()->setLocale('pt');
        return Inertia::render('Categories/Edit', [
            'category' => [
                'id' => $category->id,
                'name' => $category->name,
               
                'updated_at' => $category->updated_at,
                'created_at' => $category->created_at,
            ],
            'categories'=> Category::get()
        ]);
    }

    public function update(category $category)
    {
        $category->update(
            Request::validate([
                'name' => ['required', 'max:100'],
               
            ])
        );
        if (Request::file('photo')) {
            $user->update(['image' => basename(Request::file('photo')->store('categories'))]);
        }

        return Redirect::back()->with('success', 'Categoria actualizada.');
    }

    public function destroy(category $category)
    {
        $category->delete();

        return Redirect::back()->with('success', 'Categoria eliminada.');
    }

    public function restore(category $category)
    {
        $category->restore();

        return Redirect::back()->with('success', 'Categoria restaurada.');
    }
}
