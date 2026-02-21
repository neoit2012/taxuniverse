<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $service->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-3 lg:gap-8">
                {{-- Main Content --}}
                <div class="col-span-2">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 mb-6">
                        <div class="flex items-center mb-6">
                            <div class="bg-indigo-100 dark:bg-indigo-900/50 p-4 rounded-full mr-4">
                                @if($service->icon_url)
                                     <img src="{{ $service->icon_url }}" alt="{{ $service->name }}" class="h-10 w-10">
                                @else
                                    <svg class="w-10 h-10 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                @endif
                            </div>
                            <div>
                                <h3 class="text-3xl font-bold text-gray-900 dark:text-white">{{ $service->name }}</h3>
                                <div class="flex items-center mt-1">
                                    <span class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ $service->category }}</span>
                                    <span class="mx-2 text-gray-300">•</span>
                                    <span class="text-sm font-medium text-green-600 dark:text-green-400">Available Now</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="prose dark:prose-invert max-w-none text-gray-600 dark:text-gray-300">
                            <p class="text-lg leading-relaxed mb-4">{{ $service->description }}</p>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                        <h4 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">What's Included</h4>
                        <ul class="space-y-3">
                            @if(is_array($service->features))
                                @foreach($service->features as $feature)
                                    <li class="flex items-start">
                                        <svg class="w-6 h-6 text-green-500 mr-2 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-gray-700 dark:text-gray-300">{{ $feature }}</span>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>

                {{-- Sidebar --}}
                <div class="mt-8 lg:mt-0">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 sticky top-6 border border-indigo-100 dark:border-indigo-900">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Pricing Summary</h4>
                        
                        <div class="flex justify-between items-center mb-6 pb-6 border-b border-gray-100 dark:border-gray-700">
                            <span class="text-gray-600 dark:text-gray-400">Professional Fees</span>
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">₹{{ number_format($service->price, 0) }}</span>
                        </div>
                        
                        <div class="space-y-4">
                            <form action="{{ route('orders.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="service_id" value="{{ $service->id }}">
                                <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-200">
                                    Buy Now
                                </button>
                            </form>
                            <p class="text-xs text-center text-gray-500 dark:text-gray-400">
                                Secure payment via Razorpay / Stripe.
                            </p>
                        </div>

                        <div class="mt-8">
                             <h4 class="text-sm font-semibold text-gray-900 dark:text-white mb-2">Need Help?</h4>
                             <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Call our support team at +91-9876543210</p>
                             <a href="#" class="text-sm text-indigo-600 hover:text-indigo-500 font-medium">Chat with us &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
