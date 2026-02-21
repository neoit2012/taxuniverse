<x-app-layout>
    <div class="bg-white dark:bg-gray-900">
        {{-- Hero Section --}}
        <div class="relative bg-indigo-900 overflow-hidden">
            <div class="absolute inset-0">
                <img class="w-full h-full object-cover opacity-30" src="https://images.unsplash.com/photo-1526304640152-d4619684e484?ixlib=rb-1.2.1&auto=format&fit=crop&w=2000&q=80" alt="Global Business">
                <div class="absolute inset-0 bg-indigo-900 mix-blend-multiply" aria-hidden="true"></div>
            </div>
            <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">
                    Go Global.
                </h1>
                <p class="mt-6 text-xl text-indigo-100 max-w-3xl mx-auto">
                    Take your Indian business to the world. Incorporate in the USA, Singapore, or Dubai from the comfort of your home.
                </p>
                <div class="mt-10 max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center">
                    <div class="space-y-4 sm:space-y-0 sm:mx-auto sm:inline-grid sm:grid-cols-2 sm:gap-5">
                        <a href="#us-inc" class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-indigo-700 bg-white hover:bg-indigo-50 sm:px-8">
                            US Incorporation
                        </a>
                        <a href="#sg-inc" class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-500 bg-opacity-60 hover:bg-opacity-70 sm:px-8">
                            Singapore Incorporation
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- US Incorporation Section --}}
        <div id="us-inc" class="py-16 bg-white dark:bg-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
                    <div>
                        <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">
                            United States (C-Corp / LLC)
                        </h2>
                        <p class="mt-3 text-lg text-gray-500 dark:text-gray-400">
                            The gold standard for startups raising global capital. We handle Delaware C-Corp or Wyoming LLC registration seamlessly.
                        </p>
                        
                        <dl class="mt-10 space-y-10">
                            <div class="relative">
                                <dt>
                                    <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                                    </div>
                                    <p class="ml-16 text-lg leading-6 font-medium text-gray-900 dark:text-white">Easy Banking</p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500 dark:text-gray-400">
                                    Get an EIN (Employer Identification Number) to open US bank accounts (Mercury, Brex, SVB).
                                </dd>
                            </div>

                            <div class="relative">
                                <dt>
                                    <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    </div>
                                    <p class="ml-16 text-lg leading-6 font-medium text-gray-900 dark:text-white">Access to Capital</p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500 dark:text-gray-400">
                                    US investors prefer Delaware C-Corps due to favorable corporate laws and standard frameworks.
                                </dd>
                            </div>
                        </dl>
                    </div>
                     <div class="mt-10 lg:mt-0 bg-gray-50 dark:bg-gray-700 rounded-xl shadow-lg border border-gray-100 dark:border-gray-600 p-8 text-center">
                        <img src="https://upload.wikimedia.org/wikipedia/en/a/a4/Flag_of_the_United_States.svg" alt="USA" class="w-20 h-auto mx-auto mb-4 border border-gray-200">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Delaware Incorporation</h3>
                        <p class="mt-2 text-gray-500 dark:text-gray-400">Starting at</p>
                        <div class="text-4xl font-extrabold text-indigo-600 dark:text-indigo-400 my-4">$499</div>
                        <ul class="text-left text-sm text-gray-600 dark:text-gray-300 space-y-2 mb-6 max-w-xs mx-auto">
                            <li>✓ Certificate of Incorporation</li>
                            <li>✓ Federal EIN Application</li>
                            <li>✓ Registered Agent (1 Year)</li>
                            <li>✓ Digital Postbox</li>
                        </ul>
                         <form action="{{ route('orders.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="service_id" value="{{ $service->id }}"> {{-- Logic to handle variant selection needed later --}}
                            <input type="hidden" name="variant" value="us_inc">
                            <button type="submit" class="w-full btn-indigo-lg">Start US Company</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- Singapore Incorporation Section --}}
        <div id="sg-inc" class="py-16 bg-gray-50 dark:bg-gray-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
                    <div class="order-2 lg:order-1 mt-10 lg:mt-0 bg-white dark:bg-gray-800 rounded-xl shadow-lg border border-gray-100 dark:border-gray-700 p-8 text-center">
                         <img src="https://upload.wikimedia.org/wikipedia/commons/4/48/Flag_of_Singapore.svg" alt="Singapore" class="w-20 h-auto mx-auto mb-4 border border-gray-200">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Singapore Pvt Ltd</h3>
                        <p class="mt-2 text-gray-500 dark:text-gray-400">Starting at</p>
                        <div class="text-4xl font-extrabold text-indigo-600 dark:text-indigo-400 my-4">$999</div>
                        <ul class="text-left text-sm text-gray-600 dark:text-gray-300 space-y-2 mb-6 max-w-xs mx-auto">
                            <li>✓ ACRA Comp. Incorporation</li>
                            <li>✓ Company Constitution</li>
                            <li>✓ Company Secretary (1 Year)</li>
                            <li>✓ Nominee Director Assessment</li>
                        </ul>
                        <form action="{{ route('orders.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="service_id" value="{{ $service->id }}">
                             <input type="hidden" name="variant" value="sg_inc">
                            <button type="submit" class="w-full btn-white-lg bg-indigo-600 text-white hover:bg-indigo-700 py-3 rounded-md font-bold transition">Start SG Company</button>
                        </form>
                    </div>

                    <div class="order-1 lg:order-2">
                        <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">
                            Singapore
                        </h2>
                         <p class="mt-3 text-lg text-gray-500 dark:text-gray-400">
                            The gateway to Southeast Asia. Known for its low tax regime, 0% capital gains tax, and ease of doing business.
                        </p>
                        
                        <dl class="mt-10 space-y-10">
                             <div class="relative">
                                <dt>
                                    <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    </div>
                                    <p class="ml-16 text-lg leading-6 font-medium text-gray-900 dark:text-white">Tax Efficiency</p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500 dark:text-gray-400">
                                    Enjoy simplified tax filing and exemptions for new startups for the first 3 years of operation.
                                </dd>
                            </div>
                            <div class="relative">
                                <dt>
                                    <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                         <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    </div>
                                    <p class="ml-16 text-lg leading-6 font-medium text-gray-900 dark:text-white">Global Connectivity</p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500 dark:text-gray-400">
                                    Perfect hub for trading and tech companies targeting the APAC markets.
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
