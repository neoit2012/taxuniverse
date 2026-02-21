<x-app-layout>
    <div class="bg-gray-50 dark:bg-gray-900">
        {{-- Hero Section --}}
        <div class="bg-indigo-600">
            <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8 lg:flex lg:justify-between">
                <div class="max-w-xl">
                    <h2 class="text-4xl font-extrabold text-white sm:text-5xl sm:tracking-tight lg:text-6xl">
                        Tax Filing Metrics
                    </h2>
                    <p class="mt-5 text-xl text-indigo-200">
                        Expert-assisted Income Tax Filing for Salaried, Professionals, and Businesses. Maximum Refund. Zero Notices.
                    </p>
                    <div class="mt-10 w-full sm:max-w-xs">
                        <a href="#plans" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50 md:py-4 md:text-lg md:px-10">
                            View Plans
                        </a>
                    </div>
                </div>
                <div class="mt-10 w-full max-w-xs lg:mt-0">
                     <div class="bg-white rounded-lg shadow-xl p-6 text-center">
                        <p class="text-gray-500 font-medium">Filing Deadline</p>
                        <div class="text-4xl font-bold text-red-600 my-2">31st July</div>
                        <p class="text-sm text-gray-400">Avoid late fees up to ₹5,000</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Features Grid --}}
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white">Stress-Free Tax Season</h2>
                <p class="mt-4 text-lg text-gray-500 dark:text-gray-400">We don't just file forms; we optimize your taxes.</p>
            </div>
            <dl class="mt-12 space-y-10 sm:space-y-0 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 lg:grid-cols-4 lg:gap-x-8">
                <div class="relative">
                    <dt>
                        <svg class="absolute h-6 w-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <p class="ml-9 text-lg leading-6 font-medium text-gray-900 dark:text-white">Expert Review</p>
                    </dt>
                    <dd class="mt-2 ml-9 text-base text-gray-500 dark:text-gray-400">
                        Every return is reviewed by a CA to ensure 100% accuracy.
                    </dd>
                </div>
                <div class="relative">
                    <dt>
                        <svg class="absolute h-6 w-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <p class="ml-9 text-lg leading-6 font-medium text-gray-900 dark:text-white">Max Refund</p>
                    </dt>
                    <dd class="mt-2 ml-9 text-base text-gray-500 dark:text-gray-400">
                        We identify all eligible deductions to maximize your refund.
                    </dd>
                </div>
                <div class="relative">
                    <dt>
                        <svg class="absolute h-6 w-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <p class="ml-9 text-lg leading-6 font-medium text-gray-900 dark:text-white">Notice Support</p>
                    </dt>
                    <dd class="mt-2 ml-9 text-base text-gray-500 dark:text-gray-400">
                        Free support if you receive any notice from the IT Department.
                    </dd>
                </div>
                <div class="relative">
                    <dt>
                        <svg class="absolute h-6 w-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <p class="ml-9 text-lg leading-6 font-medium text-gray-900 dark:text-white">Data Security</p>
                    </dt>
                    <dd class="mt-2 ml-9 text-base text-gray-500 dark:text-gray-400">
                        256-bit encryption ensures your financial data stays safe.
                    </dd>
                </div>
            </dl>
        </div>

        {{-- Pricing Plans --}}
        <div id="plans" class="bg-gray-900">
            <div class="pt-12 sm:pt-16 lg:pt-24">
                <div class="max-w-7xl mx-auto text-center px-4 sm:px-6 lg:px-8">
                    <div class="max-w-3xl mx-auto space-y-2 lg:max-w-none">
                        <h2 class="text-lg leading-6 font-semibold text-gray-300 uppercase tracking-wider">Pricing Plans</h2>
                        <p class="text-3xl font-extrabold text-white sm:text-4xl lg:text-5xl">
                            The right price for you, whoever you are
                        </p>
                    </div>
                </div>
            </div>
            <div class="mt-8 pb-12 bg-gray-50 dark:bg-gray-800 sm:mt-12 sm:pb-16 lg:mt-16 lg:pb-24">
                <div class="relative">
                    <div class="absolute inset-0 h-3/4 bg-gray-900"></div>
                    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="max-w-md mx-auto space-y-4 lg:max-w-5xl lg:grid lg:grid-cols-3 lg:gap-5 lg:space-y-0">
                            
                            {{-- Plan 1: Salaried --}}
                            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                                <div class="px-6 py-8 bg-white dark:bg-gray-700 sm:p-10 sm:pb-6">
                                    <div>
                                        <h3 class="inline-flex px-4 py-1 rounded-full text-sm font-semibold tracking-wide uppercase bg-indigo-100 text-indigo-600" id="tier-standard">
                                            Salaried
                                        </h3>
                                    </div>
                                    <div class="mt-4 flex items-baseline text-6xl font-extrabold text-gray-900 dark:text-white">
                                        ₹799
                                    </div>
                                    <p class="mt-5 text-lg text-gray-500 dark:text-gray-300">
                                        For employees with single or multiple Form-16s.
                                    </p>
                                </div>
                                <div class="flex-1 flex flex-col justify-between px-6 pt-6 pb-8 bg-gray-50 dark:bg-gray-600 space-y-6 sm:p-10 sm:pt-6">
                                    <ul class="space-y-4">
                                        <li class="flex items-start"><svg class="flex-shrink-0 h-6 w-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="ml-3 text-base text-gray-700 dark:text-gray-200">ITR-1 / ITR-2 Filing</span></li>
                                        <li class="flex items-start"><svg class="flex-shrink-0 h-6 w-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="ml-3 text-base text-gray-700 dark:text-gray-200">HRA & 80C Optimization</span></li>
                                    </ul>
                                    <div class="rounded-md shadow">
                                         <form action="{{ route('orders.store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="service_id" value="{{ $service->id }}">
                                            <input type="hidden" name="variant" value="salaried">
                                            <button type="submit" class="w-full flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-800 hover:bg-gray-900 dark:bg-gray-900 dark:hover:bg-black transition">
                                                Buy Now
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            {{-- Plan 2: Capital Gains (Highlighted) --}}
                            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden transform scale-105 z-10">
                                <div class="px-6 py-8 bg-white dark:bg-gray-700 sm:p-10 sm:pb-6">
                                    <div>
                                        <h3 class="inline-flex px-4 py-1 rounded-full text-sm font-semibold tracking-wide uppercase bg-indigo-100 text-indigo-600" id="tier-standard">
                                            Capital Gains
                                        </h3>
                                    </div>
                                    <div class="mt-4 flex items-baseline text-6xl font-extrabold text-gray-900 dark:text-white">
                                        ₹1,499
                                    </div>
                                    <p class="mt-5 text-lg text-gray-500 dark:text-gray-300">
                                        For investors with income from stocks, MF, or crypto.
                                    </p>
                                </div>
                                <div class="flex-1 flex flex-col justify-between px-6 pt-6 pb-8 bg-gray-50 dark:bg-gray-600 space-y-6 sm:p-10 sm:pt-6">
                                    <ul class="space-y-4">
                                        <li class="flex items-start"><svg class="flex-shrink-0 h-6 w-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="ml-3 text-base text-gray-700 dark:text-gray-200">ITR-2 / ITR-3 Filing</span></li>
                                        <li class="flex items-start"><svg class="flex-shrink-0 h-6 w-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="ml-3 text-base text-gray-700 dark:text-gray-200">Crypto Tax Calculation</span></li>
                                         <li class="flex items-start"><svg class="flex-shrink-0 h-6 w-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="ml-3 text-base text-gray-700 dark:text-gray-200">Loss Carry Forward</span></li>
                                    </ul>
                                    <div class="rounded-md shadow">
                                         <form action="{{ route('orders.store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="service_id" value="{{ $service->id }}">
                                            <input type="hidden" name="variant" value="cap_gains">
                                            <button type="submit" class="w-full flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 transition">
                                                Buy Now
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                             {{-- Plan 3: Business --}}
                            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                                <div class="px-6 py-8 bg-white dark:bg-gray-700 sm:p-10 sm:pb-6">
                                    <div>
                                        <h3 class="inline-flex px-4 py-1 rounded-full text-sm font-semibold tracking-wide uppercase bg-indigo-100 text-indigo-600" id="tier-standard">
                                            Business/Pro
                                        </h3>
                                    </div>
                                    <div class="mt-4 flex items-baseline text-6xl font-extrabold text-gray-900 dark:text-white">
                                        ₹2,499
                                    </div>
                                    <p class="mt-5 text-lg text-gray-500 dark:text-gray-300">
                                        For freelancers, doctors, lawyers, and small business owners.
                                    </p>
                                </div>
                                <div class="flex-1 flex flex-col justify-between px-6 pt-6 pb-8 bg-gray-50 dark:bg-gray-600 space-y-6 sm:p-10 sm:pt-6">
                                    <ul class="space-y-4">
                                        <li class="flex items-start"><svg class="flex-shrink-0 h-6 w-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="ml-3 text-base text-gray-700 dark:text-gray-200">ITR-3 / ITR-4 Filing</span></li>
                                        <li class="flex items-start"><svg class="flex-shrink-0 h-6 w-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="ml-3 text-base text-gray-700 dark:text-gray-200">Presumptive Taxation</span></li>
                                        <li class="flex items-start"><svg class="flex-shrink-0 h-6 w-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="ml-3 text-base text-gray-700 dark:text-gray-200">Balance Sheet Prep</span></li>
                                    </ul>
                                    <div class="rounded-md shadow">
                                         <form action="{{ route('orders.store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="service_id" value="{{ $service->id }}">
                                            <input type="hidden" name="variant" value="business">
                                            <button type="submit" class="w-full flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-800 hover:bg-gray-900 dark:bg-gray-900 dark:hover:bg-black transition">
                                                Buy Now
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
