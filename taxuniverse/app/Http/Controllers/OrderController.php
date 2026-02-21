<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id',
        ]);

        $service = \App\Models\Service::findOrFail($request->service_id);

        $order = auth()->user()->orders()->create([
            'service_id' => $service->id,
            'total_amount' => $service->price,
            'status' => 'pending',
            'payment_status' => 'unpaid',
        ]);

        return redirect()->route('orders.show', $order);
    }

    public function index()
    {
        $orders = auth()->user()->orders()->with('service')->latest()->get();
        return view('orders.index', compact('orders'));
    }

    public function show(\App\Models\Order $order)
    {
        $this->authorize('view', $order);
        $order->load(['service', 'documents']);
        return view('orders.show', compact('order'));
    }
}
