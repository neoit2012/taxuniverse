<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            {{-- Stats Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-indigo-500">
                    <div class="text-gray-500 dark:text-gray-400 text-sm font-medium uppercase tracking-wide">Total Orders</div>
                    <div class="mt-2 text-3xl font-bold text-gray-900 dark:text-white">{{ $stats['total_orders'] }}</div>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-yellow-500">
                    <div class="text-gray-500 dark:text-gray-400 text-sm font-medium uppercase tracking-wide">Pending</div>
                    <div class="mt-2 text-3xl font-bold text-gray-900 dark:text-white">{{ $stats['pending_orders'] }}</div>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-green-500">
                    <div class="text-gray-500 dark:text-gray-400 text-sm font-medium uppercase tracking-wide">Completed</div>
                    <div class="mt-2 text-3xl font-bold text-gray-900 dark:text-white">{{ $stats['completed_orders'] }}</div>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-purple-500">
                    <div class="text-gray-500 dark:text-gray-400 text-sm font-medium uppercase tracking-wide">Documents</div>
                    <div class="mt-2 text-3xl font-bold text-gray-900 dark:text-white">{{ $stats['documents_uploaded'] }}</div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                {{-- Recent Orders --}}
                <div class="col-span-2">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700 flex justify-between items-center">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Recent Activity</h3>
                            <a href="{{ route('orders.index') }}" class="text-indigo-600 dark:text-indigo-400 text-sm hover:underline">View All</a>
                        </div>
                        <div class="p-6">
                            @if($recentOrders->isEmpty())
                                <p class="text-gray-500 dark:text-gray-400 text-center py-4">No recent activity.</p>
                            @else
                                <div class="space-y-4">
                                    @foreach($recentOrders as $order)
                                        <div class="flex items-center justify-between p-4 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                            <div class="flex items-center">
                                                <div class="bg-indigo-100 dark:bg-indigo-900/50 p-2 rounded-lg mr-4 text-indigo-600 dark:text-indigo-400">
                                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                                                </div>
                                                <div>
                                                    <h4 class="text-sm font-semibold text-gray-900 dark:text-white">{{ $order->service->name }}</h4>
                                                    <p class="text-xs text-gray-500 dark:text-gray-400">Ordered {{ $order->created_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="px-2 py-1 text-xs font-semibold rounded-full 
                                                    @if($order->status === 'completed') bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200
                                                    @elseif($order->status === 'pending') bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200
                                                    @else bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300 @endif">
                                                    {{ ucfirst($order->status) }}
                                                </span>
                                                <a href="{{ route('orders.show', $order) }}" class="ml-4 text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                {{-- Quick Actions --}}
                <div class="col-span-1">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg h-full">
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Quick Actions</h3>
                        </div>
                        <div class="p-6 space-y-4">
                            <a href="{{ route('services.index') }}" class="block w-full p-4 bg-indigo-50 dark:bg-indigo-900/20 rounded-xl border border-indigo-100 dark:border-indigo-800 hover:bg-indigo-100 dark:hover:bg-indigo-900/40 transition group">
                                <div class="flex items-center">
                                    <div class="bg-indigo-600 text-white p-2 rounded-lg mr-4 group-hover:bg-indigo-700 transition">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900 dark:text-white">Start New Service</h4>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">Register a company or file returns</p>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="#" class="block w-full p-4 bg-purple-50 dark:bg-purple-900/20 rounded-xl border border-purple-100 dark:border-purple-800 hover:bg-purple-100 dark:hover:bg-purple-900/40 transition group">
                                <div class="flex items-center">
                                    <div class="bg-purple-600 text-white p-2 rounded-lg mr-4 group-hover:bg-purple-700 transition">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900 dark:text-white">Contact Support</h4>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">Get help with your application</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
