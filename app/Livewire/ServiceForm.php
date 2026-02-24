<?php

namespace App\Livewire;

use Livewire\WithFileUploads;
use App\Models\Service;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class ServiceForm extends Component
{
    use WithFileUploads;

    public $service;
    public $currentStep = 1;
    public $totalSteps = 3;

    // Form Data
    public $formData = [];
    public $documents = [];

    protected $rules = [
        1 => [], // Validated dynamically based on service features
        2 => [], // Validated based on document checklist
    ];

    public function mount($serviceId)
    {
        $this->service = Service::findOrFail($serviceId);
        $this->initializeFormData();
    }

    private function initializeFormData()
    {
        // Placeholder for dynamic field initialization from service metadata
        $this->formData = [
            'business_name' => '',
            'contact_person' => Auth::user()->name,
            'email' => Auth::user()->email,
        ];
    }

    public function nextStep()
    {
        $this->validateStep();
        $this->currentStep++;
    }

    public function previousStep()
    {
        $this->currentStep--;
    }

    private function validateStep()
    {
        // Dynamic validation logic will go here
    }

    public function submit()
    {
        // Final submission logic
        $order = Order::create([
            'user_id' => Auth::id(),
            'service_id' => $this->service->id,
            'status' => 'pending',
            'total_amount' => $this->service->price,
            'payment_status' => 'unpaid',
            // 'data' => json_encode($this->formData), // If using JSON extension
        ]);

        // Handle document uploads
        foreach ($this->documents as $type => $file) {
            $order->addMedia($file)->toMediaCollection($type, 'private');
        }

        session()->flash('success', 'Order submitted successfully!');
        return redirect()->route('orders.show', $order);
    }

    public function render()
    {
        return view('livewire.service-form');
    }
}
