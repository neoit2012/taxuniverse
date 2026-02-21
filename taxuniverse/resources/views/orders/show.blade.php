<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Order #{{ $order->id }} - {{ $order->service->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                {{-- Order Details --}}
                <div class="md:col-span-2 space-y-6">
                    {{-- Status Card --}}
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">Order Status</h3>
                        <div class="flex items-center space-x-4">
                            <div class="flex-1">
                                <div class="relative pt-1">
                                    <div class="flex mb-2 items-center justify-between">
                                        <div>
                                            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full 
                                                @if($order->status === 'completed') text-green-600 bg-green-200
                                                @elseif($order->status === 'rejected') text-red-600 bg-red-200
                                                @else text-indigo-600 bg-indigo-200 @endif">
                                                {{ ucfirst($order->status) }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-gray-200 dark:bg-gray-700">
                                        <div style="width:{{ $order->status === 'completed' ? '100%' : ($order->status === 'processing' ? '50%' : '10%') }}"
                                             class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            Order placed on {{ $order->created_at->format('F j, Y, g:i a') }}
                        </p>
                    </div>

                    {{-- Documents Section --}}
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">Documents</h3>
                        
                        @if(session('success'))
                            <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{-- Upload Form --}}
                        <form action="{{ route('documents.store', $order) }}" method="POST" enctype="multipart/form-data" class="mb-8 border-b border-gray-200 dark:border-gray-700 pb-8">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="type" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Document Type</label>
                                    <select id="type" name="type" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
                                        @php
                                            $requiredDocs = $order->service->required_documents ?? ['PAN Card', 'Aadhar Card', 'Other'];
                                            $uploadedTypes = $order->documents->pluck('type')->toArray();
                                        @endphp
                                        @foreach($requiredDocs as $doc)
                                            <option value="{{ $doc }}" @if(in_array($doc, $uploadedTypes)) class="text-gray-400" @endif>
                                                {{ $doc }} @if(in_array($doc, $uploadedTypes)) (Uploaded) @endif
                                            </option>
                                        @endforeach
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="document" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Select File</label>
                                    <input type="file" name="document" id="document" class="mt-1 block w-full text-sm text-gray-500 dark:text-gray-400
                                        file:mr-4 file:py-2 file:px-4
                                        file:rounded-full file:border-0
                                        file:text-sm file:font-semibold
                                        file:bg-indigo-50 file:text-indigo-700
                                        hover:file:bg-indigo-100
                                        dark:file:bg-indigo-900 dark:file:text-indigo-300
                                    ">
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Upload Document
                                </button>
                            </div>
                        </form>

                        {{-- Uploaded Documents List --}}
                        <div class="space-y-4">
                            @forelse($order->documents as $document)
                                <div class="flex items-center justify-between p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                    <div class="flex items-center">
                                        <svg class="w-8 h-8 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                        <div>
                                            <p class="text-sm font-medium text-gray-900 dark:text-gray-100">{{ $document->type }}</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">Uploaded {{ $document->created_at->diffForHumans() }}</p>
                                        </div>
                                    </div>
                                    <a href="{{ route('documents.download', $document) }}" class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-300 text-sm font-medium">Download</a>
                                </div>
                            @empty
                                <p class="text-gray-500 dark:text-gray-400 text-sm text-center">No documents uploaded yet.</p>
                            @endforelse
                        </div>
                    </div>
                </div>

                {{-- Order Summary Sidebar --}}
                <div class="space-y-6">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">Payment Summary</h3>
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-600 dark:text-gray-400">Total Amount</span>
                            <span class="text-xl font-bold text-gray-900 dark:text-gray-100">₹{{ number_format($order->total_amount, 2) }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                             <span class="text-gray-600 dark:text-gray-400">Status</span>
                             <span class="text-sm font-semibold {{ $order->payment_status === 'paid' ? 'text-green-600' : 'text-red-500' }}">
                                 {{ ucfirst($order->payment_status) }}
                             </span>
                        </div>
                        
                        @if($order->payment_status !== 'paid')
                            <button class="w-full mt-6 bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded transition duration-150 ease-in-out">
                                Pay Now
                            </button>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
