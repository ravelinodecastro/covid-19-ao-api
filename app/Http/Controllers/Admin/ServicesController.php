<?php

namespace App\Http\Controllers\admin;

use Inertia\Inertia;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function index()
    {
        app()->setLocale('pt');
        return Inertia::render('Services/Index', [
            'filters' => Request::all('search', 'trashed'),
            'services' => Service::orderBy('name')
               // ->filter(Request::only('search', 'trashed'))
                ->paginate()
        ]);
    }

    public function create()
    {
        return Inertia::render('Services/Create');
    }

    public function store()
    {  
        Request::validate([
        'name' => ['required', 'max:100'],
        'category_id' => ['required', 'max:50'],
        ]);
        Service::create([
            'id' =>  Request::get('id'),
            'name' => Request::get('name'),
            //'description' =>  Request::get('description'),
            'android' =>  Request::get('android'),
            'ios' =>  Request::get('ios'),
            'web' =>  Request::get('web'),
            'category_id' =>  Request::get('category_id'),
            'status' =>  Request::get('status'),
            'image' => Request::file('photo') ? basename(Request::file('photo')->store('services')) : null,
            ]);

        return Redirect::route('services')->with('success', 'Serviço cadastrado.');
    }

    public function edit(Service $service)
    {
        app()->setLocale('pt');
        return Inertia::render('Services/Edit', [
            'service' => [
                'id' => $service->id,
                'name' => $service->name,
                'description' => $service->description,
                'android' => $service->android,
                'image' => $service->image,
                'ios' => $service->ios,
                'web' => $service->web,
                'category_id' => $service->category_id,
                'status' => $service->status,
                'updated_at' => $service->updated_at,
                'created_at' => $service->created_at,
            ],
            'categories'=> Category::get()
        ]);
    }

    public function update(Service $service)
    {
        $service->update(
            Request::validate([
                'name' => ['required', 'max:100'],
                'category_id' => ['required', 'max:50'],
            ])
        );
        if (Request::file('photo')) {
            $user->update(['image' => basename(Request::file('photo')->store('services'))]);
        }

        return Redirect::back()->with('success', 'Serviço actualizado.');
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return Redirect::back()->with('success', 'Service eliminado.');
    }

    public function restore(Service $service)
    {
        $service->restore();

        return Redirect::back()->with('success', 'Service restaurado.');
    }
}
