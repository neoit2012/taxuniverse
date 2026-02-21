<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $query = \App\Models\Service::query();

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('description', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        $services = $query->get();
        $categories = \App\Models\Service::select('category')->distinct()->pluck('category');

        return view('services.index', compact('services', 'categories'));
    }

    public function show($slug)
    {
        $service = \App\Models\Service::where('slug', $slug)->firstOrFail();
        
        // Check if a custom view exists for this specific service slug
        // e.g., resources/views/services/pvt-ltd-registration.blade.php
        if (view()->exists("services.{$slug}")) {
            return view("services.{$slug}", compact('service'));
        }

        if ($service->category === 'Startup' && view()->exists('services.startup-dynamic')) {
             return view('services.startup-dynamic', compact('service'));
        }

        return view('services.show', compact('service'));
    }
}
