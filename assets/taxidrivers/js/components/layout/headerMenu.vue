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
                    <a class="mr-3 font-medium text-gray-400 hover:text-gray-200" href="#">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>

                    <a class="mr-3 font-medium text-gray-400 hover:text-gray-200" href="#">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
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
