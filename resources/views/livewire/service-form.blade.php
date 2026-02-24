<div class="max-w-4xl mx-auto py-8">
    {{-- Progress Indicator --}}
    <div class="mb-8">
        <div class="flex items-center justify-between">
            @for ($i = 1; $i <= $totalSteps; $i++)
                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center border-2 {{ $currentStep >= $i ? 'border-indigo-600 bg-indigo-600 text-white' : 'border-gray-300 text-gray-500' }}">
                        {{ $i }}
                    </div>
                    <span class="text-xs mt-2 {{ $currentStep >= $i ? 'text-indigo-600 font-bold' : 'text-gray-500' }}">
                        @if($i == 1) Details @elseif($i == 2) Documents @else Review @endif
                    </span>
                </div>
                @if($i < $totalSteps)
                    <div class="flex-1 h-0.5 mt-5 {{ $currentStep > $i ? 'bg-indigo-600' : 'bg-gray-300' }}"></div>
                @endif
            @endfor
        </div>
    </div>

    <div class="bg-white shadow-xl rounded-2xl p-8 border border-gray-100">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">{{ $service->name }}</h2>

        @if($currentStep == 1)
            {{-- Step 1: Input Details --}}
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Business Name</label>
                    <input type="text" wire:model="formData.business_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 transition duration-150">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Contact Person</label>
                    <input type="text" wire:model="formData.contact_person" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            </div>
        @elseif($currentStep == 2)
            {{-- Step 2: Document Upload --}}
            <div class="space-y-4 text-center">
                <p class="text-gray-600 mb-4 italic">Please upload the required documents as per the checklist.</p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @foreach($service->cms_content['documents'] ?? [] as $docName)
                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 hover:border-indigo-500 transition cursor-pointer relative">
                            <label class="block text-sm font-semibold text-gray-700 mb-2">{{ $docName }}</label>
                            <input type="file" wire:model="documents.{{ \Illuminate\Support\Str::slug($docName) }}" class="absolute inset-0 opacity-0 cursor-pointer">
                            <div class="text-indigo-600">Click to upload or drag & drop</div>
                            <div wire:loading wire:target="documents.{{ \Illuminate\Support\Str::slug($docName) }}">Uploading...</div>
                        </div>
                    @endforeach
                </div>
            </div>
        @elseif($currentStep == 3)
            {{-- Step 3: Review & Summary --}}
            <div class="bg-indigo-50 rounded-xl p-6">
                <h3 class="text-lg font-bold text-indigo-900 mb-4">Order Summary</h3>
                <div class="space-y-2 text-sm text-indigo-800">
                    <p><strong>Service:</strong> {{ $service->name }}</p>
                    <p><strong>Total Amount:</strong> ₹{{ number_format($service->price, 2) }}</p>
                    <p><strong>Business Name:</strong> {{ $formData['business_name'] }}</p>
                </div>
            </div>
        @endif

        {{-- Footer Controls --}}
        <div class="mt-10 flex justify-between border-t pt-6">
            @if($currentStep > 1)
                <button wire:click="previousStep" class="px-6 py-2 rounded-lg text-gray-600 hover:bg-gray-100 font-semibold transition">Back</button>
            @else
                <div></div>
            @endif

            @if($currentStep < $totalSteps)
                <button wire:click="nextStep" class="px-8 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 font-bold shadow-md transition transform hover:-translate-y-0.5">Continue</button>
            @else
                <button wire:click="submit" class="px-8 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 font-bold shadow-md transition transform hover:-translate-y-0.5">Submit Order</button>
            @endif
        </div>
    </div>
</div>
