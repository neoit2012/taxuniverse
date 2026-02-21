<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'TaxUniverse') }} - Simplify Your Business Compliance</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 font-sans">

    {{-- Navigation --}}
    <nav x-data="{ open: false }" class="fixed w-full z-50 transition-all duration-300 bg-white/80 dark:bg-gray-900/80 backdrop-blur-md border-b border-gray-100 dark:border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-800 dark:text-gray-200" />
                        <span class="ml-2 text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400">TaxUniverse</span>
                    </a>
                </div>
                
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="{{ route('services.index') }}" class="text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 font-medium transition">Services</a>
                    <a href="#how-it-works" class="text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 font-medium transition">How it Works</a>
                    <a href="#testimonials" class="text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 font-medium transition">Reviews</a>
                    
                    @auth
                        <a href="{{ route('dashboard') }}" class="px-5 py-2.5 rounded-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold shadow-lg shadow-indigo-500/30 transition transform hover:-translate-y-0.5">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 font-medium transition">Login</a>
                        <a href="{{ route('register') }}" class="px-5 py-2.5 rounded-full bg-gray-900 dark:bg-white text-white dark:text-gray-900 font-semibold hover:bg-gray-800 dark:hover:bg-gray-100 transition">
                            Get Started
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    {{-- Hero Section --}}
    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
        {{-- Background blobs --}}
        <div class="absolute top-0 left-1/2 w-full -translate-x-1/2 h-full z-0 pointer-events-none">
            <div class="absolute top-20 left-10 w-72 h-72 bg-purple-300 dark:bg-purple-900 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
            <div class="absolute top-20 right-10 w-72 h-72 bg-indigo-300 dark:bg-indigo-900 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
            <div class="absolute -bottom-8 left-20 w-72 h-72 bg-pink-300 dark:bg-pink-900 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-4000"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6 leading-tight">
                Business Compliance, <br>
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400">Reimagined.</span>
            </h1>
            <p class="mt-4 text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto mb-10">
                India's most advanced AI-powered platform for Company Registration, GST, and Trademark filing. Fast, paperless, and incredibly secure.
            </p>
            
            <div class="flex justify-center gap-4">
                <a href="{{ route('services.index') }}" class="px-8 py-4 rounded-full bg-indigo-600 hover:bg-indigo-700 text-white text-lg font-bold shadow-xl shadow-indigo-500/30 transition transform hover:-translate-y-1">
                    Explore Services
                </a>
                <a href="#how-it-works" class="px-8 py-4 rounded-full bg-white dark:bg-gray-800 text-gray-900 dark:text-white text-lg font-bold border border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                    Learn More
                </a>
            </div>

            {{-- Trust Stats --}}
            <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto border-t border-gray-200 dark:border-gray-800 pt-8">
                <div>
                    <div class="text-3xl font-bold text-gray-900 dark:text-white">50k+</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400 uppercase tracking-wide">Businesses</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-gray-900 dark:text-white">99.9%</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400 uppercase tracking-wide">Success Rate</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-gray-900 dark:text-white">4.8/5</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400 uppercase tracking-wide">User Rating</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-gray-900 dark:text-white">24/7</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400 uppercase tracking-wide">Expert Support</div>
                </div>
            </div>
        </div>
    </section>

    {{-- How It Works Section --}}
    <section id="how-it-works" class="py-20 bg-gray-50 dark:bg-gray-900 border-t border-gray-200 dark:border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">How It Works</h2>
                <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">Get your business compliant in 4 simple steps.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                {{-- Step 1 --}}
                <div class="relative text-center">
                    <div class="w-16 h-16 mx-auto bg-indigo-100 dark:bg-indigo-900/50 rounded-full flex items-center justify-center text-indigo-600 dark:text-indigo-400 text-2xl font-bold mb-4">1</div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Choose Service</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Select the service you need from our comprehensive catalog.</p>
                </div>
                {{-- Step 2 --}}
                <div class="relative text-center">
                    <div class="w-16 h-16 mx-auto bg-indigo-100 dark:bg-indigo-900/50 rounded-full flex items-center justify-center text-indigo-600 dark:text-indigo-400 text-2xl font-bold mb-4">2</div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Upload Details</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Fill a simple form and upload your documents securely.</p>
                </div>
                {{-- Step 3 --}}
                <div class="relative text-center">
                    <div class="w-16 h-16 mx-auto bg-indigo-100 dark:bg-indigo-900/50 rounded-full flex items-center justify-center text-indigo-600 dark:text-indigo-400 text-2xl font-bold mb-4">3</div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Expert Processing</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Our AI experts verify and file your application with the authorities.</p>
                </div>
                {{-- Step 4 --}}
                <div class="relative text-center">
                    <div class="w-16 h-16 mx-auto bg-indigo-100 dark:bg-indigo-900/50 rounded-full flex items-center justify-center text-green-600 dark:text-green-400 text-2xl font-bold mb-4">4</div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Get Delivered</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Receive your registration certificate or acknowledgment via email.</p>
                </div>
            </div>
        </div>

    {{-- Services Highlighting Section --}}
    <section id="services" class="py-20 bg-white dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Everything You Need to Start & Grow</h2>
                <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">From incorporation to intellectual property, we handle the bureaucracy so you can focus on building.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                {{-- Service Card 1 --}}
                <div class="group relative bg-gray-50 dark:bg-gray-900 rounded-3xl p-8 transition-all hover:-translate-y-2 hover:shadow-2xl hover:shadow-indigo-500/10 border border-gray-100 dark:border-gray-800">
                    <div class="h-14 w-14 bg-blue-100 dark:bg-blue-900/30 rounded-2xl flex items-center justify-center mb-6 text-blue-600 dark:text-blue-400">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Company Registration</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-6">Pvt Ltd, LLP, or One Person Company. We draft the MOA/AOA and handle the filings.</p>
                    <a href="{{ route('services.show', 'pvt-ltd-registration') }}" class="inline-flex items-center text-indigo-600 dark:text-indigo-400 font-semibold group-hover:translate-x-1 transition">Get Started <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></a>
                </div>

                {{-- Service Card 2 --}}
                <div class="group relative bg-gray-50 dark:bg-gray-900 rounded-3xl p-8 transition-all hover:-translate-y-2 hover:shadow-2xl hover:shadow-indigo-500/10 border border-gray-100 dark:border-gray-800">
                    <div class="h-14 w-14 bg-green-100 dark:bg-green-900/30 rounded-2xl flex items-center justify-center mb-6 text-green-600 dark:text-green-400">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">GST Filings</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-6">Registration, monthly returns, and audit support. Stay 100% compliant without the headache.</p>
                    <a href="{{ route('services.show', 'gst-registration') }}" class="inline-flex items-center text-indigo-600 dark:text-indigo-400 font-semibold group-hover:translate-x-1 transition">Get Started <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></a>
                </div>

                {{-- Service Card 3 --}}
                <div class="group relative bg-gray-50 dark:bg-gray-900 rounded-3xl p-8 transition-all hover:-translate-y-2 hover:shadow-2xl hover:shadow-indigo-500/10 border border-gray-100 dark:border-gray-800">
                    <div class="h-14 w-14 bg-purple-100 dark:bg-purple-900/30 rounded-2xl flex items-center justify-center mb-6 text-purple-600 dark:text-purple-400">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.131A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.2-2.85.577-4.147"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Trademark & IP</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-6">Secure your brand identity. Comprehensive search, objection handling, and registration.</p>
                    <a href="{{ route('services.show', 'trademark-registration') }}" class="inline-flex items-center text-indigo-600 dark:text-indigo-400 font-semibold group-hover:translate-x-1 transition">Get Started <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></a>
                </div>

                {{-- Service Card 4: Global --}}
                <div class="group relative bg-gray-50 dark:bg-gray-900 rounded-3xl p-8 transition-all hover:-translate-y-2 hover:shadow-2xl hover:shadow-indigo-500/10 border border-gray-100 dark:border-gray-800">
                    <div class="h-14 w-14 bg-indigo-100 dark:bg-indigo-900/30 rounded-2xl flex items-center justify-center mb-6 text-indigo-600 dark:text-indigo-400">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Go Global</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-6">Incorporate in USA, Singapore, or Dubai. We handle the cross-border compliance.</p>
                    <a href="{{ route('services.show', 'global-incorporation') }}" class="inline-flex items-center text-indigo-600 dark:text-indigo-400 font-semibold group-hover:translate-x-1 transition">Get Started <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></a>
                </div>

                {{-- Service Card 5: Income Tax --}}
                <div class="group relative bg-gray-50 dark:bg-gray-900 rounded-3xl p-8 transition-all hover:-translate-y-2 hover:shadow-2xl hover:shadow-indigo-500/10 border border-gray-100 dark:border-gray-800">
                    <div class="h-14 w-14 bg-red-100 dark:bg-red-900/30 rounded-2xl flex items-center justify-center mb-6 text-red-600 dark:text-red-400">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Income Tax</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-6">Expert-assisted ITR filing for Salaried, Business, and Capital Gains.</p>
                    <a href="{{ route('services.show', 'income-tax-filing') }}" class="inline-flex items-center text-indigo-600 dark:text-indigo-400 font-semibold group-hover:translate-x-1 transition">Get Started <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></a>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="bg-gray-900 text-white py-12 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <div class="col-span-1 md:col-span-1">
                     <span class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-indigo-400 to-purple-400">
                        TaxUniverse
                    </span>
                    <p class="mt-4 text-gray-400 text-sm">Simplifying business compliance for the modern entrepreneur.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Services</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-white transition">Company Registration</a></li>
                        <li><a href="#" class="hover:text-white transition">GST Filing</a></li>
                        <li><a href="#" class="hover:text-white transition">Trademark</a></li>
                        <li><a href="#" class="hover:text-white transition">Income Tax</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Company</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-white transition">About Us</a></li>
                        <li><a href="#" class="hover:text-white transition">Careers</a></li>
                        <li><a href="#" class="hover:text-white transition">Contact</a></li>
                        <li><a href="#" class="hover:text-white transition">Privacy Policy</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Newsletter</h4>
                    <p class="text-gray-400 text-sm mb-4">Subscribe for the latest tax updates.</p>
                    <form class="flex">
                        <input type="email" placeholder="Your email" class="px-4 py-2 bg-gray-800 border-none rounded-l-md focus:ring-1 focus:ring-indigo-500 w-full text-sm">
                        <button class="bg-indigo-600 px-4 py-2 rounded-r-md hover:bg-indigo-700 transition">Go</button>
                    </form>
                </div>
            </div>
            <div class="mt-12 pt-8 border-t border-gray-800 text-center text-gray-500 text-sm">
                &copy; {{ date('Y') }} TaxUniverse. All rights reserved.
            </div>
        </div>
    </footer>
</body>
</html>
