<template>
    <div class="bg-gray-800" v-on-clickaway="onClickAwayMainMenu">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="flex justify-between items-center py-4 md:justify-start md:space-x-10">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <a href="#" class="">
                        <img class="h-8 w-auto sm:h-10 inline-block" src="/images/logo-icon.png" alt="Taxidrivers">
                        <span class="md:hidden text-red-500 font-bold font-serif">Taxi</span>
                        <span class="md:hidden text-blue-500 font-bold font-serif">Drivers</span>
                        <span class="md:hidden text-blue-500 font-bold font-serif">Cuba</span>
                    </a>
                </div>
                <div class="-mr-2 -my-2 md:hidden">
                    <button type="button" @click="isMenuOpen = !isMenuOpen" class="bg-gray-800 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-900 hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                        <span class="sr-only">Open menu</span>
                        <!-- Heroicon name: menu -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
                <nav class="hidden md:flex space-x-10">
                    <div class="relative" v-on-clickaway="onClickAwayServicesMenu">
                        <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                        <button type="button" @click="isServicesMenuOpen = !isServicesMenuOpen" class="menu-btn">
                            <span>{{ ServicesTitle }}</span>
                            <!--
                              Heroicon name: chevron-down

                              Item active: "text-gray-600", Item inactive: "text-gray-400"
                            -->
                            <svg class="ml-2 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>

                        <!--
                          'Solutions' flyout menu, show/hide based on flyout menu state.

                          Entering: "transition ease-out duration-200"
                            From: "opacity-0 translate-y-1"
                            To: "opacity-100 translate-y-0"
                          Leaving: "transition ease-in duration-150"
                            From: "opacity-100 translate-y-0"
                            To: "opacity-0 translate-y-1"
                        -->
                        <transition
                            enter-active-class="transition ease-out duration-200"
                            enter-class="opacity-0 translate-y-1"
                            enter-to-class="opacity-100 translate-y-0"
                            leave-active-class="transition ease-in duration-100"
                            leave-class="opacity-100 translate-y-0"
                            leave-to-class="opacity-0 translate-y-1"
                        >
                            <div v-show="isServicesMenuOpen" class="absolute z-10 -ml-4 mt-3 transform px-2 w-screen max-w-md sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
                            <div class="submenu-container">
                                <div class="submenu-grid">
                                    <a href="#" class="submenu-btn">
                                        <!-- Heroicon name: modified-plane -->
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M 8.0891558,11.861231 10.775375,20.680764 22.019312,3.9900631 1.920395,5.0094884 Z m 0,0 6.9650822,-3.9355788" />
                                        </svg>
                                        <div>
                                            <p>
                                                {{ NavServicesAirportTransferTitle  }}
                                            </p>
                                            <p>
                                                {{ NavServicesAirportTransferIntro }}
                                            </p>
                                        </div>
                                    </a>

                                    <a href="#" class="submenu-btn">
                                        <!-- Heroicon name: sparkles -->
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                                        </svg>
                                        <div class="ml-4">
                                            <p class="text-base font-medium text-gray-200">
                                                {{ NavServicesExperiencesTitle }}
                                            </p>
                                            <p class="mt-1 text-sm text-gray-400">
                                                {{ NavServicesExperiencesIntro }}
                                            </p>
                                        </div>
                                    </a>

                                    <a href="#" class="submenu-btn">
                                        <!-- Heroicon name: location-marker -->
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                        <div class="ml-4">
                                            <p class="text-base font-medium text-gray-200">
                                                {{ NavServicesTaxiTitle }}
                                            </p>
                                            <p class="mt-1 text-sm text-gray-400">
                                                {{ NavServicesTaxiIntro }}
                                            </p>
                                        </div>
                                    </a>

                                </div>
                                <div class="submenu-foot space-y-6 sm:flex sm:space-y-0 sm:space-x-10 sm:px-8">

                                    <div class="flow-root">
                                        <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-200 hover:bg-gray-500">
                                            <!-- Heroicon name: map -->
                                            <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                                            </svg>

                                            <span class="ml-3">{{ NavServicesCustomItinerary }}</span>
                                        </a>
                                    </div>

                                    <div class="flow-root">
                                        <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-200 hover:bg-gray-500">
                                            <!-- Heroicon name: view-grid-add -->
                                            <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z"/>
                                            </svg>
                                            <span class="ml-3">{{ NavServicesRelated }}</span>
                                        </a>
                                    </div>


                                </div>
                            </div>
                        </div>
                        </transition>
                    </div>

                    <div class="relative" v-on-clickaway="onClickAwayAboutMenu">
                        <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                        <button type="button" @click="isAboutMenuOpen = !isAboutMenuOpen"  class="menu-btn">
                            <span> {{ AboutUsTitle }}</span>
                            <!--
                              Heroicon name: chevron-down

                              Item active: "text-gray-600", Item inactive: "text-gray-400"
                            -->
                            <svg class="ml-2 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>

                        <!--
                          'More' flyout menu, show/hide based on flyout menu state.

                          Entering: "transition ease-out duration-200"
                            From: "opacity-0 translate-y-1"
                            To: "opacity-100 translate-y-0"
                          Leaving: "transition ease-in duration-150"
                            From: "opacity-100 translate-y-0"
                            To: "opacity-0 translate-y-1"
                        -->
                        <transition
                            enter-active-class="transition ease-out duration-200"
                            enter-class="opacity-0 translate-y-1"
                            enter-to-class="opacity-100 translate-y-0"
                            leave-active-class="transition ease-in duration-100"
                            leave-class="opacity-100 translate-y-0"
                            leave-to-class="opacity-0 translate-y-1"
                        >
                            <div v-show="isAboutMenuOpen"  class="absolute z-10 left-1/2 transform -translate-x-1/2 mt-3 px-2 w-screen max-w-md sm:px-0">
                            <div class="submenu-container">
                                <div class="submenu-grid">
                                    <a href="#" class="submenu-btn">
                                        <!-- Heroicon name: identification -->
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"/>
                                        </svg>
                                        <div class="ml-4">
                                            <p>
                                                {{ NavAboutWhoWeAreTitle }}
                                            </p>
                                            <p>
                                                {{ NavAboutWhoWeAreIntro }}
                                            </p>
                                        </div>
                                    </a>

                                    <a href="#" class="submenu-btn">
                                        <!-- Heroicon name: presentation-chart-bar -->
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"/>
                                        </svg>
                                        <div >
                                            <p>
                                                {{ NavAboutWeInNumbersTitle }}
                                            </p>
                                            <p>
                                                {{ NavAboutWeInNumbersIntro }}
                                            </p>
                                        </div>
                                    </a>

                                    <a href="#" class="submenu-btn">
                                        <!-- Heroicon name: user-group -->
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                        </svg>
                                        <div>
                                            <p>
                                                {{ NavAboutReviewsTitle }}
                                            </p>
                                            <p>
                                                {{ NavAboutReviewsIntro }}
                                            </p>
                                        </div>
                                    </a>

                                </div>
                                <div class="submenu-foot sm:px-8 sm:py-8">
                                    <div>
                                        <h3 class="text-sm tracking-wide font-medium text-gray-200 uppercase">
                                            {{ NavAboutRecentPost }}
                                        </h3>
                                        <ul class="mt-4 space-y-4">
                                            <li class="text-base truncate">
                                                <a href="#" class="font-medium text-gray-900 hover:text-gray-200">
                                                    Boost your conversion rate
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mt-5 text-sm">
                                        <a href="#" class="font-medium text-blue-500 hover:text-blue-300">
                                            {{ NavAboutAllPosts }} <span aria-hidden="true">&rarr;</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </transition>
                    </div>

                    <a href="#ContactSection" class="menu-btn">
                        {{ ContactTitle }}
                    </a>


                </nav>
                <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                    <a class="mr-3 font-medium text-gray-400 hover:text-gray-200" href="https://www.facebook.com/taxidriverscuba/" target="_blank">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>

                    <a class="mr-3 font-medium text-gray-400 hover:text-gray-200" href="https://www.instagram.com/taxidriverscuba/" target="_blank">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>

                    <a class="mr-3 font-medium text-gray-400 hover:text-gray-200" href="https://www.tripadvisor.es/Attraction_Review-g2198348-d13554747-Reviews-Taxi_Drivers_Cuba-Ciudad_de_la_Habana_Province_Cuba.html" target="_blank">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"  viewBox="0 0 512 512">
                            <path d="M313.57 106.827c14.281 2.02 28.267 5.607 42.087 9.853a288.003 288.003 0 0168.299 31.139c1.49.924 3.478 1.51 5.233 1.51 25.147.104 50.285.068 75.411.089 2.025 0 4.04.213 6.059.327 0 .493.072.7-.01.815-1.174 1.807-2.363 3.587-3.541 5.389-8.53 13.082-15.819 26.767-20.122 41.895-.468 1.625-.566 2.985.534 4.579 22.386 32.146 29.53 67.437 20.174 105.48-8.202 33.366-27.328 59.38-56.39 77.8-20.77 13.17-43.717 19.442-68.231 19.577a119.082 119.082 0 01-30.61-3.93c-24.513-6.36-45.528-18.58-62.847-37.088-2.284-2.43-4.434-4.968-6.869-7.714-9.157 13.648-18.17 27.073-27.4 40.851l-26.95-40.275c-.612.322-.788.358-.908.472a4.18 4.18 0 00-.534.561c-20.948 24.737-47.3 39.902-79.404 44.974-17.859 2.83-35.546 1.812-52.891-2.97-24.582-6.754-45.472-19.722-62.35-38.858-16.493-18.71-26.751-40.431-30.603-65.127-4.408-23.05.96-45.275 2.3-50.669 3.883-15.678 10.652-30.074 19.945-43.313.654-.94.883-2.6.571-3.722-3.79-13.897-10.32-26.539-17.968-38.645-1.941-3.079-4.267-5.929-6.416-8.883v-1.028c.43.052.856.135 1.277.135 25.729.01 51.453.021 77.182-.03 1.121 0 2.367-.463 3.322-1.076 18.077-11.597 37.337-20.786 57.574-27.94a312.87 312.87 0 0144.688-12.112 358.005 358.005 0 0144.45-5.835c36.438-2.804 65.563 1.054 84.937 3.769zm-32.255 169.922c0 56.5 45.84 102.657 102.137 102.439 56.51-.203 102.142-45.062 102.1-102.184-.04-58.867-47.792-103.119-104.291-101.971-55.777 1.157-99.438 46.116-99.946 101.716zM128.109 174.643c-54.957-.477-102.875 45.39-101.914 103.814.893 54.485 45.799 100.674 103.056 100.18 55.985-.477 100.985-46.193 101.088-101.555a101.888 101.888 0 00-102.23-102.439zm5.067-26.653c31.045 1.895 58.316 12.714 81.355 33.667 22.993 20.911 36.465 46.998 41.36 77.675 5.037-30.313 18.156-56.156 40.718-76.86 22.598-20.724 49.506-31.6 80.042-33.9-36.237-16.11-74.446-22.952-113.777-23.71-44.698-.877-88.177 5.71-129.698 23.128z"/><path d="M383.244 212.292c34.965-.057 63.284 28.112 63.284 63.04 0 35.063-27.836 62.168-60.678 63.42-36.678 1.406-66.025-27.817-66.015-63.264.032-35.853 29.587-63.788 63.41-63.196zm41.241 63.196c-.015-22.79-18.44-41.314-41.075-41.314-22.894 0-41.532 18.425-41.625 41.148-.083 22.624 18.648 41.448 41.33 41.51 22.717.089 41.38-18.595 41.37-41.344zM126.76 212.292c34.944-.036 63.305 28.184 63.217 63.108-.099 35.348-27.962 61.861-60.227 63.33-36.823 1.682-66.534-27.67-66.466-63.31.072-36.106 29.83-63.73 63.476-63.128zm41.194 63.056c-.067-22.931-18.611-41.21-41.76-41.169-22.328.042-41.039 18.887-40.987 41.298.057 22.672 18.747 41.314 41.49 41.377 22.604.051 41.315-18.773 41.257-41.506z"/><path d="M383.275 254.509c11.588-.01 21.088 9.495 20.98 21.015-.115 11.546-9.455 20.901-20.85 20.906-11.733 0-21.166-9.272-21.14-20.76.021-11.92 9.184-21.15 21.01-21.161zm-256.625-.187a21.155 21.155 0 0121.264 21.114c.047 11.629-9.495 21.176-21.202 21.202-11.987.026-21.233-9.236-21.223-21.285 0-11.832 9.226-21.015 21.161-21.03z"/>
                        </svg>
                    </a>
                    <locale-selector :current-lang="CurrentLang"></locale-selector>

                </div>
            </div>
        </div>

        <!--
          Mobile menu, show/hide based on mobile menu state.

          Entering: "duration-200 ease-out"
            From: "opacity-0 scale-95"
            To: "opacity-100 scale-100"
          Leaving: "duration-100 ease-in"
            From: "opacity-100 scale-100"
            To: "opacity-0 scale-95"
        -->
        <transition
            enter-active-class="transition ease-out duration-200 transform"
            enter-class="opacity-0 scale-95"
            enter-to-class="opacity-100 scale-100"
            leave-active-class="transition ease-in duration-100 transform"
            leave-class="opacity-100 scale-100"
            leave-to-class="opacity-0 scale-95"
        >
            <div v-show="isMenuOpen" class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
            <div class="rounded-lg shadow-lg ring-4 ring-gray-400 ring-opacity-10 bg-gray-800 divide-y-2 divide-gray-50">
                <div class="pt-5 pb-6 px-5">
                    <div class="flex items-center justify-between">
                        <div>
                            <a href="#" class="md:hidden">
                                <img class="h-8 w-auto sm:h-10 inline-block" src="/images/logo-icon.png" alt="Taxidrivers">
                                <span class="text-red-500 font-bold font-serif">Taxi</span>
                                <span class="text-blue-500 font-bold font-serif">Drivers</span>
                                <span class="text-blue-500 font-bold font-serif">Cuba</span>
                            </a>
                        </div>
                        <div class="-mr-2">
                            <button type="button" @click="isMenuOpen = false" class="bg-gray-800 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-900 hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                                <span class="sr-only">Close menu</span>
                                <!-- Heroicon name: x -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="mt-6">
                        <nav class="grid gap-y-8">
                            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-700">
                                <!-- Heroicon name: modified-plane -->
                                <svg class="flex-shrink-0 h-6 w-6 text-blue-600"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M 8.0891558,11.861231 10.775375,20.680764 22.019312,3.9900631 1.920395,5.0094884 Z m 0,0 6.9650822,-3.9355788" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-400">
                                    {{ NavServicesAirportTransferTitle  }}
                                </span>
                            </a>

                            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-700">
                                <!-- Heroicon name: sparkles -->
                                <svg class="flex-shrink-0 h-6 w-6 text-blue-600"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-400">
                                    {{ NavServicesExperiencesTitle  }}
                                </span>
                            </a>

                            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-700">
                                <!-- Heroicon name: location-marker -->
                                <svg class="flex-shrink-0 h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-400">
                                    {{ NavServicesTaxiTitle  }}
                                </span>
                            </a>

                            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-700">
                                <!-- Heroicon name: map -->
                                <svg class="flex-shrink-0 h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-400">
                                    {{ NavServicesCustomItinerary  }}
                                </span>
                            </a>

                        </nav>
                    </div>
                </div>
                <div class="py-6 px-5 space-y-6">
                    <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                        <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-400">
                            {{ NavAboutWhoWeAreTitle }}
                        </a>

                        <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-400">
                            {{ NavAboutReviewsTitle }}
                        </a>

                        <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-400">
                            {{ NavAboutRecentPost }}
                        </a>

                        <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-400">
                            {{ NavAboutWeInNumbersTitle }}
                        </a>

                    </div>
                    <div>
                        <p class="mt-6 text-center text-base font-medium text-gray-500">
                            {{ MobileNavContactMsg }}
                            <a href="#" class="text-indigo-600 hover:text-indigo-500">
                                {{ ContactTitle }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </transition>
    </div>

</template>

<script>
import { directive as onClickaway } from 'vue-clickaway';
import localeSelector from '../layout/localeSelector';
export default {
    name: "headerMenu",
    directives: {
        onClickaway: onClickaway,
    },
    data: () => ({
        isMenuOpen: false,
        isServicesMenuOpen: false,
        isAboutMenuOpen: false,
    }),
    methods: {
        onClickAwayAboutMenu() {
            this.$data.isAboutMenuOpen = false;
        },
        onClickAwayMainMenu() {
            this.$data.isMenuOpen = false;
        },
        onClickAwayServicesMenu() {
            this.$data.isServicesMenuOpen = false;
        },
    },
    props: {
        CurrentLang: {
            type: String,
            default: 'en'
        },
        ServicesTitle: {
            type: String,
            default: '__Services'
        },
        AboutUsTitle: {
            type: String,
            default: '__About Us'
        },
        ContactTitle: {
            type: String,
            default: '__Contact'
        },
        NavServicesAirportTransferTitle: {
            type: String,
            default: '__Airport transfer'
        },
        NavServicesAirportTransferIntro: {
            type: String,
            default: '__Get a taxi to or from any cuban airport'
        },
        NavServicesExperiencesTitle: {
            type: String,
            default: '__Experiences'
        },
        NavServicesExperiencesIntro: {
            type: String,
            default: '__Live Cuba in first person enjoying an unforgettable experience'
        },
        NavServicesTaxiTitle: {
            type: String,
            default: '__Intercity Taxi'
        },
        NavServicesRelated: {
            type: String,
            default: '__Related Services'
        },
        NavServicesCustomItinerary: {
            type: String,
            default: '__Custom Itinerary'
        },
        NavAboutWhoWeAreTitle: {
            type: String,
            default: '__Who we are?'
        },
        NavAboutWhoWeAreIntro: {
            type: String,
            default: '__A small team with great passion for classic cars'
        },
        NavAboutWeInNumbersTitle: {
            type: String,
            default: '__Taxi Drivers in numbers'
        },
        NavAboutWeInNumbersIntro: {
            type: String,
            default: '__You are our priority from day one'
        },
        NavAboutReviewsTitle: {
            type: String,
            default: '__Reviews & Testimonials'
        },
        NavAboutReviewsIntro: {
            type: String,
            default: '__'
        },

        NavAboutRecentPost: {
            type: String,
            default: '__Recent Posts'
        },
        NavAboutAllPosts: {
            type: String,
            default: '__View all posts'
        },

        MobileNavContactMsg: {
            type: String,
            default: '__Anything else?'
        },



    },
    components: { localeSelector}

}
</script>

<style scoped>

</style>
