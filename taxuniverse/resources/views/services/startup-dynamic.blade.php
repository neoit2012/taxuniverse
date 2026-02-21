<x-app-layout>
    <div class="bg-white dark:bg-gray-900">
        {{-- Hero Section --}}
        <div class="relative overflow-hidden">
            <div class="absolute inset-y-0 h-full w-full pointer-events-none" aria-hidden="true">
                <div class="relative h-full">
                    <div class="absolute right-0 top-0 h-full w-1/2 bg-gradient-to-l from-indigo-50 to-transparent dark:from-gray-800 opacity-20 transform translate-x-1/2"></div>
                </div>
            </div>
            <div class="relative pt-6 pb-16 sm:pb-24">
                <div class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6 lg:px-8">
                    <div class="text-center">
                        @if(isset($service->hero['badge']))
                            <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800 mb-4">
                                {{ $service->hero['badge'] }}
                            </span>
                        @endif
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white sm:text-5xl md:text-6xl">
                            <span class="block">{{ $service->hero['title'] }}</span>
                            <span class="block text-indigo-600 dark:text-indigo-400">100% Online Process</span>
                        </h1>
                        <p class="mt-3 max-w-md mx-auto text-base text-gray-500 dark:text-gray-400 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                            {{ $service->hero['subtitle'] }}
                        </p>
                        <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                            <div class="rounded-md shadow">
                                <a href="#pricing" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                    Get Started
                                </a>
                            </div>
                            <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                                <a href="#process" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50 dark:bg-gray-800 dark:text-indigo-400 dark:hover:bg-gray-700 md:py-4 md:text-lg md:px-10">
                                    Process
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Benefits Section --}}
        <div class="py-16 bg-white dark:bg-gray-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center">
                    <h2 class="text-base text-indigo-600 dark:text-indigo-400 font-semibold tracking-wide uppercase">Why Choose This?</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                        Key Features & Benefits
                    </p>
                </div>

                <div class="mt-10">
                    <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                        @foreach($service->benefits as $benefit)
                            <div class="relative">
                                <dt>
                                    <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <p class="ml-16 text-lg leading-6 font-medium text-gray-900 dark:text-white">{{ $benefit['title'] }}</p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500 dark:text-gray-400">
                                    {{ $benefit['desc'] }}
                                </dd>
                            </div>
                        @endforeach
                    </dl>
                </div>
            </div>
        </div>

        {{-- Process Steps --}}
        <div id="process" class="py-16 bg-gray-50 dark:bg-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-extrabold text-center text-gray-900 dark:text-white mb-12">How It Works</h2>
                <div class="relative">
                    <div class="relative z-10 grid grid-cols-1 md:grid-cols-4 gap-8">
                        @foreach($service->process as $step)
                            <div class="bg-white dark:bg-gray-900 p-6 rounded-xl shadow-lg text-center transform hover:-translate-y-2 transition-transform duration-300">
                                <div class="w-16 h-16 mx-auto bg-indigo-100 dark:bg-indigo-900 rounded-full flex items-center justify-center text-2xl font-bold text-indigo-600 dark:text-indigo-400 mb-4 border-4 border-white dark:border-gray-800">{{ $step['step'] }}</div>
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">{{ $step['title'] }}</h3>
                                <p class="text-gray-500 dark:text-gray-400 text-sm">{{ $step['desc'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- Documents Required --}}
        @if(isset($service->cms_content['documents']))
        <div class="py-16 bg-white dark:bg-gray-900">
             <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-extrabold text-center text-gray-900 dark:text-white mb-12">Documents Required</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    @foreach($service->cms_content['documents'] as $doc)
                        <div class="flex items-center p-4 bg-gray-50 dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700">
                            <svg class="w-6 h-6 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="text-gray-700 dark:text-gray-200 font-medium">{{ $doc }}</span>
                        </div>
                    @endforeach
                </div>
             </div>
        </div>
        @endif

        {{-- Pricing / CTA --}}
        <div id="pricing" class="py-16 bg-indigo-50 dark:bg-gray-900">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl overflow-hidden md:flex">
                    <div class="p-8 md:w-3/5">
                        <h2 class="text-2xl font-extrabold text-gray-900 dark:text-white mb-4">Package Inclusions</h2>
                        <ul class="space-y-3">
                             @foreach($service->features ?? [] as $feature)
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 mr-3 text-green-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> 
                                    <span class="text-gray-600 dark:text-gray-300">{{ $feature }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="p-8 md:w-2/5 bg-indigo-600 text-white flex flex-col justify-center items-center">
                         <div class="text-center mb-6">
                            <span class="text-indigo-200 text-lg">Professional Fees</span>
                            <div class="text-4xl font-extrabold mt-2">₹{{ number_format($service->price, 0) }}</div>
                            <span class="text-sm text-indigo-200">+ Govt Fees</span>
                        </div>
                        <form action="{{ route('orders.store') }}" method="POST" class="w-full">
                            @csrf
                            <input type="hidden" name="service_id" value="{{ $service->id }}">
                            <button type="submit" class="w-full block text-center bg-white text-indigo-600 font-bold py-4 px-6 rounded-lg shadow-lg hover:bg-gray-100 transition transform hover:-translate-y-1">
                                Launch Now
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
