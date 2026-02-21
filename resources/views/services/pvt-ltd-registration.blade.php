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
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white sm:text-5xl md:text-6xl">
                            <span class="block">Launch Your Dream Company</span>
                            <span class="block text-indigo-600 dark:text-indigo-400">In Just 10 Days</span>
                        </h1>
                        <p class="mt-3 max-w-md mx-auto text-base text-gray-500 dark:text-gray-400 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                            The fastest, most reliable way to register your Private Limited Company in India. 100% Online. No hidden fees. Trusted by 50,000+ founders.
                        </p>
                        <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                            <div class="rounded-md shadow">
                                <a href="#pricing" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                    Get Started
                                </a>
                            </div>
                            <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                                <a href="#process" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50 dark:bg-gray-800 dark:text-indigo-400 dark:hover:bg-gray-700 md:py-4 md:text-lg md:px-10">
                                    How it Works
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Trust Markers --}}
        <div class="bg-gray-50 dark:bg-gray-800 py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 gap-8 md:grid-cols-4">
                    <div class="flex flex-col items-center">
                        <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500 dark:text-gray-400">Happy Founders</dt>
                        <dd class="order-1 text-5xl font-extrabold text-indigo-600 dark:text-indigo-400">50k+</dd>
                    </div>
                    <div class="flex flex-col items-center">
                        <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500 dark:text-gray-400">Cities Covered</dt>
                        <dd class="order-1 text-5xl font-extrabold text-indigo-600 dark:text-indigo-400">600+</dd>
                    </div>
                    <div class="flex flex-col items-center">
                        <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500 dark:text-gray-400">Google Rating</dt>
                        <dd class="order-1 text-5xl font-extrabold text-indigo-600 dark:text-indigo-400">4.8</dd>
                    </div>
                    <div class="flex flex-col items-center">
                        <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500 dark:text-gray-400">Support</dt>
                        <dd class="order-1 text-5xl font-extrabold text-indigo-600 dark:text-indigo-400">24/7</dd>
                    </div>
                </div>
            </div>
        </div>

        {{-- Benefits Section --}}
        <div class="py-16 bg-white dark:bg-gray-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center">
                    <h2 class="text-base text-indigo-600 dark:text-indigo-400 font-semibold tracking-wide uppercase">Why Choose Us</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                        Everything you need to scale
                    </p>
                    <p class="mt-4 max-w-2xl text-xl text-gray-500 dark:text-gray-400 lg:mx-auto">
                        We don't just register your company; we set you up for success with a complete compliance ecosystem.
                    </p>
                </div>

                <div class="mt-10">
                    <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                        <div class="relative">
                            <dt>
                                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                </div>
                                <p class="ml-16 text-lg leading-6 font-medium text-gray-900 dark:text-white">Lightning Fast Process</p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500 dark:text-gray-400">
                                Our AI-driven platform automates document drafting, reducing processing time by 50%.
                            </dd>
                        </div>

                        <div class="relative">
                            <dt>
                                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path></svg>
                                </div>
                                <p class="ml-16 text-lg leading-6 font-medium text-gray-900 dark:text-white">Transparent Pricing</p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500 dark:text-gray-400">
                                What you see is what you pay. No hidden charges for DIN, DSC, or government fees.
                            </dd>
                        </div>

                        <div class="relative">
                            <dt>
                                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <p class="ml-16 text-lg leading-6 font-medium text-gray-900 dark:text-white">Expert Verified</p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500 dark:text-gray-400">
                                Every application is reviewed by a qualified Company Secretary (CS) to ensure zero rejections.
                            </dd>
                        </div>

                        <div class="relative">
                            <dt>
                                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                                </div>
                                <p class="ml-16 text-lg leading-6 font-medium text-gray-900 dark:text-white">Bank-Grade Security</p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500 dark:text-gray-400">
                                Your documents are encrypted and stored securely. We take data privacy seriously.
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>

        {{-- Process Steps --}}
        <div id="process" class="py-16 bg-gray-50 dark:bg-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-extrabold text-center text-gray-900 dark:text-white mb-12">4 Simple Steps to Launch</h2>
                <div class="relative">
                    {{-- Connecting Line --}}
                    <div class="hidden md:block absolute top-1/2 left-0 w-full h-1 bg-gray-200 dark:bg-gray-700 transform -translate-y-1/2 z-0"></div>
                    
                    <div class="relative z-10 grid grid-cols-1 md:grid-cols-4 gap-8">
                        {{-- Step 1 --}}
                        <div class="bg-white dark:bg-gray-900 p-6 rounded-xl shadow-lg text-center transform hover:-translate-y-2 transition-transform duration-300">
                            <div class="w-16 h-16 mx-auto bg-indigo-100 dark:bg-indigo-900 rounded-full flex items-center justify-center text-2xl font-bold text-indigo-600 dark:text-indigo-400 mb-4 border-4 border-white dark:border-gray-800">1</div>
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Fill Details</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-sm">Submit simple form with director & company details.</p>
                        </div>
                        {{-- Step 2 --}}
                        <div class="bg-white dark:bg-gray-900 p-6 rounded-xl shadow-lg text-center transform hover:-translate-y-2 transition-transform duration-300">
                            <div class="w-16 h-16 mx-auto bg-indigo-100 dark:bg-indigo-900 rounded-full flex items-center justify-center text-2xl font-bold text-indigo-600 dark:text-indigo-400 mb-4 border-4 border-white dark:border-gray-800">2</div>
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Get DSC</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-sm">We generate Digital Signatures for all directors.</p>
                        </div>
                        {{-- Step 3 --}}
                        <div class="bg-white dark:bg-gray-900 p-6 rounded-xl shadow-lg text-center transform hover:-translate-y-2 transition-transform duration-300">
                            <div class="w-16 h-16 mx-auto bg-indigo-100 dark:bg-indigo-900 rounded-full flex items-center justify-center text-2xl font-bold text-indigo-600 dark:text-indigo-400 mb-4 border-4 border-white dark:border-gray-800">3</div>
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Filing</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-sm">Experts draft MOA/AOA and file SPICe+ with MCA.</p>
                        </div>
                         {{-- Step 4 --}}
                         <div class="bg-white dark:bg-gray-900 p-6 rounded-xl shadow-lg text-center transform hover:-translate-y-2 transition-transform duration-300">
                            <div class="w-16 h-16 mx-auto bg-green-100 dark:bg-green-900 rounded-full flex items-center justify-center text-2xl font-bold text-green-600 dark:text-green-400 mb-4 border-4 border-white dark:border-gray-800 pointer-events-none">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Launched!</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-sm">Receive Certificate of Incorporation, PAN & TAN.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Pricing / CTA --}}
        <div id="pricing" class="py-16 bg-white dark:bg-gray-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-indigo-700 rounded-2xl shadow-xl overflow-hidden md:flex">
                    <div class="p-8 md:w-3/5 text-white">
                        <h2 class="text-3xl font-extrabold mb-4">Start your Private Limited Company today</h2>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center"><svg class="w-5 h-5 mr-3 text-indigo-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> DIN for 2 Directors</li>
                            <li class="flex items-center"><svg class="w-5 h-5 mr-3 text-indigo-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> DSC for 2 Directors</li>
                            <li class="flex items-center"><svg class="w-5 h-5 mr-3 text-indigo-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Name Approval & Filing Fees</li>
                            <li class="flex items-center"><svg class="w-5 h-5 mr-3 text-indigo-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> PAN & TAN Allotment</li>
                            <li class="flex items-center"><svg class="w-5 h-5 mr-3 text-indigo-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> MOA & AOA Drafting</li>
                        </ul>
                    </div>
                    <div class="p-8 md:w-2/5 bg-gray-50 dark:bg-gray-800 flex flex-col justify-center items-center">
                         <div class="text-center mb-6">
                            <span class="text-gray-500 dark:text-gray-400 text-lg">All Inclusive Price</span>
                            <div class="text-4xl font-extrabold text-gray-900 dark:text-white mt-2">₹{{ number_format($service->price, 0) }}</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">+ Govt Fees as applicable</span>
                        </div>
                        <form action="{{ route('orders.store') }}" method="POST" class="w-full">
                            @csrf
                            <input type="hidden" name="service_id" value="{{ $service->id }}">
                            <button type="submit" class="w-full block text-center bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-4 px-6 rounded-lg shadow-lg hover:shadow-xl transition transform hover:-translate-y-1">
                                Launch Now
                            </button>
                        </form>
                        <p class="mt-4 text-xs text-gray-500 text-center">Secure Payment • Money Back Guarantee</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
