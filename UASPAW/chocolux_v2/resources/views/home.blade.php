@extends('layouts.app')

@section('title', 'Home - Chocolux')

@section('content')
    <!-- Hero Section with Enhanced Design -->
    <div class="bg-gradient-to-r from-amber-700 to-amber-500 relative overflow-hidden">
        <!-- Decorative elements -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-10">
            <div class="absolute -top-12 -left-12 w-64 h-64 bg-white rounded-full mix-blend-overlay"></div>
            <div class="absolute top-1/4 right-1/4 w-96 h-96 bg-amber-300 rounded-full mix-blend-overlay"></div>
            <div class="absolute bottom-0 right-0 w-64 h-64 bg-amber-800 rounded-full mix-blend-overlay"></div>
        </div>

        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-28 sm:px-6 lg:px-8 relative">
            <div class="text-center">
                <h1 class="text-5xl font-extrabold text-white sm:text-6xl sm:tracking-tight lg:text-7xl">
                    Welcome to <span class="text-amber-200">Chocolux</span>
                </h1>
                <div class="mt-4 flex justify-center">
                    <div class="w-24 h-1 bg-amber-300 rounded"></div>
                </div>
                <p class="mt-6 max-w-2xl mx-auto text-xl text-amber-100">
                    Discover our premium selection of handcrafted chocolates
                </p>
                <div class="mt-10 flex justify-center gap-5">
                    <a href="{{ url('/products') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-amber-700 bg-white hover:bg-amber-50 transition duration-300">
                        Explore Products
                        <svg class="ml-2 -mr-1 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                    <a href="{{ url('/about') }}" class="inline-flex items-center px-6 py-3 border border-white text-base font-medium rounded-md text-white hover:bg-amber-600 transition duration-300">
                        Our Story
                    </a>
                </div>
            </div>
        </div>

        <!-- Chocolate decoration at the bottom -->
        <div class="absolute bottom-0 left-0 w-full">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 70" class="w-full">
                <path fill="#ffffff" fill-opacity="1" d="M0,32L48,37.3C96,43,192,53,288,53.3C384,53,480,43,576,37.3C672,32,768,32,864,37.3C960,43,1056,53,1152,58.7C1248,64,1344,64,1392,64L1440,64L1440,70L1392,70C1344,70,1248,70,1152,70C1056,70,960,70,864,70C768,70,672,70,576,70C480,70,384,70,288,70C192,70,96,70,48,70L0,70Z"></path>
            </svg>
        </div>
    </div>

    <!-- Featured Products Section with Cards -->
    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Featured Products
                </h2>
                <div class="mt-2 flex justify-center">
                    <div class="w-16 h-1 bg-amber-500 rounded"></div>
                </div>
                <p class="mt-4 text-lg text-gray-600">
                    Explore our most popular chocolate selections
                </p>
            </div>

            <!-- Featured Products Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Featured Product 1 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100 hover:shadow-xl transition-all duration-300 group">
                    <div class="relative h-52">
                        <img src="{{ asset('assets/images/silverqueen1.png') }}" alt="Classic Chocolate" class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute top-2 right-2 bg-amber-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                            BEST SELLER
                        </div>
                    </div>
                    <div class="p-6 bg-gradient-to-br from-white to-amber-50">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Silverqueen Classic</h3>
                        <div class="flex items-center text-amber-500 mb-2">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        </div>
                        <p class="text-xl font-bold text-amber-600 mb-4">
                            Rp 15.000
                        </p>
                        <a href="{{ url('/products') }}" class="block text-center bg-amber-600 text-white px-4 py-2 rounded-lg hover:bg-amber-700 transition-colors">
                            View Details
                        </a>
                    </div>
                </div>

                <!-- Featured Product 2 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100 hover:shadow-xl transition-all duration-300 group">
                    <div class="relative h-52">
                        <img src="{{ asset('assets/images/dairy1.png') }}" alt="Dairy Milk" class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute top-2 right-2 bg-amber-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                            POPULAR
                        </div>
                    </div>
                    <div class="p-6 bg-gradient-to-br from-white to-amber-50">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Dairy Milk Classic</h3>
                        <div class="flex items-center text-amber-500 mb-2">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        </div>
                        <p class="text-xl font-bold text-amber-600 mb-4">
                            Rp 18.000
                        </p>
                        <a href="{{ url('/products') }}" class="block text-center bg-amber-600 text-white px-4 py-2 rounded-lg hover:bg-amber-700 transition-colors">
                            View Details
                        </a>
                    </div>
                </div>

                <!-- Featured Product 3 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100 hover:shadow-xl transition-all duration-300 group">
                    <div class="relative h-52">
                        <img src="{{ asset('assets/images/ferrero1.png') }}" alt="Ferrero" class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute top-2 right-2 bg-amber-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                            PREMIUM
                        </div>
                    </div>
                    <div class="p-6 bg-gradient-to-br from-white to-amber-50">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Ferrero Rocher Classic</h3>
                        <div class="flex items-center text-amber-500 mb-2">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        </div>
                        <p class="text-xl font-bold text-amber-600 mb-4">
                            Rp 35.000
                        </p>
                        <a href="{{ url('/products') }}" class="block text-center bg-amber-600 text-white px-4 py-2 rounded-lg hover:bg-amber-700 transition-colors">
                            View Details
                        </a>
                    </div>
                </div>

                <!-- Featured Product 4 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100 hover:shadow-xl transition-all duration-300 group">
                    <div class="relative h-52">
                        <img src="{{ asset('assets/images/Toblerone1.png') }}" alt="Toblerone" class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute top-2 right-2 bg-amber-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                            NEW
                        </div>
                    </div>
                    <div class="p-6 bg-gradient-to-br from-white to-amber-50">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Toblerone Classic</h3>
                        <div class="flex items-center text-amber-500 mb-2">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        </div>
                        <p class="text-xl font-bold text-amber-600 mb-4">
                            Rp 30.000
                        </p>
                        <a href="{{ url('/products') }}" class="block text-center bg-amber-600 text-white px-4 py-2 rounded-lg hover:bg-amber-700 transition-colors">
                            View Details
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-10">
                <a href="{{ url('/products') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-amber-600 hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500 transition duration-300">
                    View All Products
                </a>
            </div>
        </div>
    </div>

    <!-- Why Choose Us Section -->
    <div class="bg-amber-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Why Choose Chocolux
                </h2>
                <div class="mt-2 flex justify-center">
                    <div class="w-16 h-1 bg-amber-500 rounded"></div>
                </div>
                <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-600">
                    Discover what makes our chocolate experience exceptional
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-10">
                <!-- Feature 1 -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden p-6 hover:shadow-md transition-shadow">
                    <div class="flex justify-center mb-4">
                        <div class="bg-amber-100 p-3 rounded-full">
                            <svg class="w-8 h-8 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-center text-gray-900 mb-2">Premium Quality</h3>
                    <p class="text-gray-600 text-center">
                        We use only the finest ingredients to create our exceptional chocolate products
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden p-6 hover:shadow-md transition-shadow">
                    <div class="flex justify-center mb-4">
                        <div class="bg-amber-100 p-3 rounded-full">
                            <svg class="w-8 h-8 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-center text-gray-900 mb-2">Unique Flavors</h3>
                    <p class="text-gray-600 text-center">
                        Explore our innovative and exciting flavor combinations that will delight your taste buds
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden p-6 hover:shadow-md transition-shadow">
                    <div class="flex justify-center mb-4">
                        <div class="bg-amber-100 p-3 rounded-full">
                            <svg class="w-8 h-8 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-center text-gray-900 mb-2">Worldwide Shipping</h3>
                    <p class="text-gray-600 text-center">
                        We deliver our exquisite chocolates to chocolate lovers across the globe
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial Section -->
    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    What Our Customers Say
                </h2>
                <div class="mt-2 flex justify-center">
                    <div class="w-16 h-1 bg-amber-500 rounded"></div>
                </div>
                <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-600">
                    Hear from chocolate lovers who have experienced the Chocolux difference
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gradient-to-br from-amber-50 to-white rounded-xl shadow-md overflow-hidden p-6 hover:shadow-lg transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="h-10 w-10 rounded-full bg-amber-200 flex items-center justify-center text-amber-700 font-bold text-lg">
                            D
                        </div>
                        <div class="ml-3">
                            <h3 class="text-lg font-semibold text-gray-900">David Thompson</h3>
                            <p class="text-sm text-gray-500">Jakarta</p>
                        </div>
                    </div>
                    <div class="flex text-amber-500 mb-2">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                    </div>
                    <p class="text-gray-700 italic">
                        "The chocolate gift box I ordered arrived beautifully packaged and the chocolates were absolutely divine. Perfect balance of flavors!"
                    </p>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-gradient-to-br from-amber-50 to-white rounded-xl shadow-md overflow-hidden p-6 hover:shadow-lg transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="h-10 w-10 rounded-full bg-amber-200 flex items-center justify-center text-amber-700 font-bold text-lg">
                            A
                        </div>
                        <div class="ml-3">
                            <h3 class="text-lg font-semibold text-gray-900">Amelia Putri</h3>
                            <p class="text-sm text-gray-500">Bali</p>
                        </div>
                    </div>
                    <div class="flex text-amber-500 mb-2">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                    </div>
                    <p class="text-gray-700 italic">
                        "I've tried many chocolate brands, but Chocolux's single-origin dark chocolate bars are in a league of their own. The flavor complexity is amazing."
                    </p>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-gradient-to-br from-amber-50 to-white rounded-xl shadow-md overflow-hidden p-6 hover:shadow-lg transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="h-10 w-10 rounded-full bg-amber-200 flex items-center justify-center text-amber-700 font-bold text-lg">
                            R
                        </div>
                        <div class="ml-3">
                            <h3 class="text-lg font-semibold text-gray-900">Robert Chen</h3>
                            <p class="text-sm text-gray-500">Surabaya</p>
                        </div>
                    </div>
                    <div class="flex text-amber-500 mb-2">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                    </div>
                    <p class="text-gray-700 italic">
                        "The chocolate-covered fruits are my favorite! Fresh and perfectly balanced sweetness. Would definitely recommend."
                    </p>
                </div>
            </div>

            <div class="text-center mt-10">
                <a href="{{ url('/testimonials') }}" class="inline-flex items-center px-6 py-3 border border-amber-600 text-base font-medium rounded-md text-amber-600 bg-white hover:bg-amber-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500 transition duration-300">
                    View All Testimonials
                    <svg class="ml-2 -mr-1 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- CTA Banner -->
    <div class="bg-gradient-to-r from-amber-700 to-amber-500 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="rounded-2xl bg-amber-800 bg-opacity-20 backdrop-blur-sm shadow-xl overflow-hidden">
                <div class="px-6 py-12 md:py-16 md:px-12 lg:flex lg:items-center lg:justify-between">
                    <div>
                        <h2 class="text-3xl font-extrabold tracking-tight text-white md:text-4xl">
                            Ready to indulge?
                        </h2>
                        <p class="mt-3 max-w-3xl text-lg text-amber-100">
                            Explore our premium chocolate collection and treat yourself or your loved ones to an exceptional chocolate experience.
                        </p>
                    </div>
                    <div class="mt-8 flex lg:mt-0 lg:shrink-0">
                        <div class="inline-flex rounded-md shadow">
                            <a href="{{ url('/products') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-amber-700 bg-white hover:bg-amber-50 transition-all duration-300">
                                Shop Now
                            </a>
                        </div>
                        <div class="ml-3 inline-flex rounded-md shadow">
                            <a href="{{ url('/contact') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-amber-800 hover:bg-amber-900 transition-all duration-300">
                                Contact Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
<style>
    /* Additional custom styles */
    .bg-gradient-to-r {
        background-size: 200% 200%;
        animation: gradient 15s ease infinite;
    }

    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }
</style>
@endpush
