<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        
        $stats = [
            'total_orders' => $user->orders()->count(),
            'pending_orders' => $user->orders()->where('status', 'pending')->count(),
            'completed_orders' => $user->orders()->where('status', 'completed')->count(),
            'documents_uploaded' => $user->documents()->count(),
        ];

        $recentOrders = $user->orders()->with('service')->latest()->take(5)->get();

        return view('dashboard', compact('stats', 'recentOrders'));
    }
}
