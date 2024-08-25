<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Crowdfunding application</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="overflow-hidden">
            <nav class="bg-white fixed w-full z-[105] top-0 start-0 border-b border-gray-200">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="{{ url('/') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('donation.svg') }}" class="h-10 md:h-12" alt="crowdfunding logo">
                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <div class="justify-end hidden sm:flex">
                        <a href="{{ url('login') }}" class="py-3 text-base font-medium px-7 text-dark dark:text-white hover:text-blue-700">
                        Login
                        </a>
                        <a href="{{ url('register') }}" class="py-3 text-base font-medium text-white rounded-lg bg-blue-700 px-7 hover:bg-opacity-90">
                        Sign Up
                        </a>
                    </div>
                
                    <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                    <li>
                    <a href="{{ url('/') }}" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0" aria-current="page">Home</a>
                    </li>
                    <li>
                    <a href="{{ url('donations') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">Donations</a>
                    </li>     
                    <li>
                    <a href="{{ url('donations/create') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">Request donation</a>
                    </li>
                </ul>
                </div>
                </div>
            </nav>
            
            <div class=''>@yield('content')</div>

            <footer class="bg-white rounded-lg shadow mt-4">
                <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
                    <div class="sm:flex sm:items-center sm:justify-between">
                        <a href="{{ url('/') }}" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                            <img src="{{ asset('donation.svg') }}" class="h-10 md:h-12" alt="crowdfunding logo">
                        </a>
                        <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0">
                            <li>
                                <a href="{{ url('/') }}" class="hover:underline me-4 md:me-6">Home</a>
                            </li>
                            <li>
                                <a href="{{ url('donations') }}" class="hover:underline me-4 md:me-6">Donations</a>
                            </li>
                            <li>
                                <a href="{{ url('donations/create') }}" class="hover:underline me-4 md:me-6">Request donations</a>
                            </li>
                        </ul>
                    </div>
                    <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
                    <span class="block text-sm text-gray-500 sm:text-center">© 2023 <a href="{{ url('/') }}" class="hover:underline">Crowdfunding</a>. All Rights Reserved.</span>
                </div>
            </footer>
        </div>
    </body>
</html>