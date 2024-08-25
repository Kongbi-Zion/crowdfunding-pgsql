@extends('layouts.main')
@section('content')

<div>
    <div class="relative bg-white dark:bg-dark pt-[120px] pb-[110px] lg:pt-[150px] w-full overflow-x-hidden">
        <div class="w-full flex justify-center">
            <div class="max-w-screen-xl">
                <div class="flex flex-wrap">
                    <div class="w-full px-4 lg:w-5/12">
                    <div class="hero-content">
                        <h1 class="mb-3 text-4xl font-bold leading-snug text-dark sm:text-[42px] lg:text-[40px] xl:text-[42px] dark:text-white">
                        Startup Site Template Built-with TailGrids Components
                        </h1>
                        <p class="mb-8 max-w-[480px] text-base dark:text-dark-6 text-body-color">
                        With TailGrids, business and students thrive together. Business
                        can perfectly match their staffing to changing demand throughout
                        the dayed.
                        </p>
                        <ul class="flex flex-wrap items-center">
                        <li>
                            <a href="javascript:void(0)" class="inline-flex items-center justify-center px-6 py-3 text-base font-medium text-center text-white rounded-md bg-blue-700 hover:bg-blue-dark lg:px-7">
                            Get Started
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="inline-flex items-center justify-center py-3 px-5 text-center text-base font-medium text-[#464646] dark:text-white hover:text-blue-700">
                            <span class="mr-2">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12.6152" r="12" fill="#3758F9"></circle>
                                <rect x="7.99893" y="14.979" width="8.18182" height="1.63636" fill="white"></rect>
                                <rect x="11.2717" y="7.61523" width="1.63636" height="4.09091" fill="white"></rect>
                                <path d="M12.0898 14.1606L14.9241 11.0925H9.25557L12.0898 14.1606Z" fill="white"></path>
                                </svg>
                            </span>
                            Download App
                            </a>
                        </li>
                        </ul>
                        <div class="pt-16 clients">
                        <h6 class="flex items-center mb-2 text-xs font-normal text-body-color">
                            Used by Thriving Brands
                            <span class="ml-2 inline-block h-[1px] w-8 bg-body-color"></span>
                        </h6>
                        <div class="flex max-w-[550px] items-center">
                            <div class="w-full py-3 mr-4">
                            <img src="https://demo.tailgrids.com/templates/startup/build/src/assets/images/brands/ayroui.svg" alt="ayroui">
                            </div>
                            <div class="w-full py-3 mr-4">
                            <img src="https://demo.tailgrids.com/templates/startup/build/src/assets/images/brands/graygrids.svg" alt="graygrids">
                            </div>
                            <div class="w-full py-3 mr-4">
                            <img src="https://demo.tailgrids.com/templates/startup/build/src/assets/images/brands/uideck.svg" alt="uideck">
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="hidden px-4 lg:block lg:w-1/12"></div>
                    <div class="w-full px-4 lg:w-6/12">
                    <div class="lg:ml-auto lg:text-right">
                        <div class="relative z-10 inline-block pt-11 lg:pt-0">
                        <img src="https://demo.tailgrids.com/templates/startup/build/src/assets/images/hero/hero-image-01.png" alt="hero" class="max-w-full lg:ml-auto">
                        {{-- <img src="{{ asset('child.jpg') }}" alt="hero" class="max-w-full lg:ml-auto"> --}}
                        <span class="absolute -left-8 -bottom-8 z-[-1]">
                            <svg width="93" height="93" viewBox="0 0 93 93" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3"></circle>
                            <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3"></circle>
                            <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3"></circle>
                            <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3"></circle>
                            <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3"></circle>
                            <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3"></circle>
                            <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3"></circle>
                            <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3"></circle>
                            <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3"></circle>
                            <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3"></circle>
                            <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3"></circle>
                            <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3"></circle>
                            <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3"></circle>
                            <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3"></circle>
                            <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3"></circle>
                            <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3"></circle>
                            <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3"></circle>
                            <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3"></circle>
                            <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3"></circle>
                            <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3"></circle>
                            <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3"></circle>
                            <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3"></circle>
                            <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3"></circle>
                            <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3"></circle>
                            <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3"></circle>
                            </svg>
                        </span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
    <section class="pt-20 pb-7 dark:bg-dark lg:pt-[120px] lg:pb-14 w-full flex justify-center">
        <div class="  w-full max-w-screen-xl">
            <div class="flex flex-wrap justify-center -mx-4">
            <div class="w-full px-4">
                <div class="mb-[60px] max-w-[510px] lg:mb-[70px]">
                <span class="block mb-2 text-lg font-semibold text-primary">
                    Testimonials
                </span>
                <h2 class="text-dark dark:text-white mb-3 text-3xl leading-[1.2] font-bold sm:text-4xl md:text-[40px]">
                    What our Clients Says
                </h2>
                <p class="text-base text-body-color dark:text-dark-6">
                    There are many variations of passages of Lorem Ipsum available
                    but the majority have suffered alteration in some form.
                </p>
                </div>
            </div>
            </div>

            <div class="flex flex-wrap justify-center -mx-4">
            <div class="w-full px-4 md:w-1/2">
                <div class="shadow-testimonial-6 dark:shadow-none relative mb-10 overflow-hidden rounded-[10px] bg-white dark:bg-dark-2 p-8 sm:p-10 md:py-10 md:px-6 lg:p-10">
                <div class="flex items-center mb-10">
                    <div class="mr-5 h-20 w-full max-w-[80px] overflow-hidden rounded md:h-[60px] md:max-w-[60px] lg:h-20 lg:max-w-[80px]">
                    <img src="https://demo.tailgrids.com/templates/startup/build/src/assets/images/testimonials/testimonial-05/image-01.jpg" alt="image" class="w-full">
                    </div>
                    <div class="w-full">
                    <h5 class="mb-1 text-lg font-semibold text-dark dark:text-white">
                        Jason Keys
                    </h5>
                    <p class="text-xs text-body-color dark:text-dark-6">
                        Founder @ Dreampeet.
                    </p>
                    </div>
                </div>

                <p class="text-base text-body-color dark:text-dark-6">
                    “I believe in lifelong learning and Learn. is a great place to
                    learn from experts. I've learned a lot and recommend it to all
                    my friends and familys.”
                </p>

                <div>
                    <span class="absolute top-0 right-0">
                    <svg width="104" height="102" viewBox="0 0 104 102" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.6" d="M28.707 23.8032C31.0493 22.4301 33.9507 22.4301 36.293 23.8032L56.4389 35.6133C58.7351 36.9594 60.1458 39.4218 60.1458 42.0835V65.9165C60.1458 68.5782 58.7351 71.0406 56.4388 72.3867L36.293 84.1968C33.9507 85.5699 31.0493 85.5699 28.707 84.1968L8.56115 72.3867C6.26492 71.0406 4.85417 68.5782 4.85417 65.9165V42.0835C4.85417 39.4218 6.26492 36.9594 8.56115 35.6133L28.707 23.8032Z" stroke="#3758F9"></path>
                        <path opacity="0.6" d="M105.25 12.7424C107.571 11.4027 110.429 11.4027 112.75 12.7424L144.587 31.1236C146.908 32.4634 148.337 34.9393 148.337 37.6188V74.3812C148.337 77.0607 146.908 79.5366 144.587 80.8764L112.75 99.2576C110.429 100.597 107.571 100.597 105.25 99.2576L73.4128 80.8764C71.0923 79.5366 69.6628 77.0607 69.6628 74.3812V37.6188C69.6628 34.9393 71.0923 32.4634 73.4128 31.1236L105.25 12.7424Z" stroke="#13C296"></path>
                        <path opacity="0.6" d="M59.25 -23.2576C61.5705 -24.5973 64.4295 -24.5973 66.75 -23.2576L82.1327 -14.3764C84.4532 -13.0366 85.8827 -10.5607 85.8827 -7.8812V9.8812C85.8827 12.5607 84.4532 15.0366 82.1327 16.3764L66.75 25.2576C64.4295 26.5973 61.5705 26.5973 59.25 25.2576L43.8673 16.3764C41.5468 15.0366 40.1173 12.5607 40.1173 9.8812V-7.8812C40.1173 -10.5607 41.5468 -13.0366 43.8673 -14.3764L59.25 -23.2576Z" stroke="#F98B69"></path>
                    </svg>
                    </span>
                </div>
                </div>
            </div>
            <div class="w-full px-4 md:w-1/2">
                <div class="shadow-testimonial-6 dark:shadow-none relative mb-10 overflow-hidden rounded-[10px] bg-white dark:bg-dark-2 p-8 sm:p-10 md:py-10 md:px-6 lg:p-10">
                <div class="flex items-center mb-10">
                    <div class="mr-5 h-20 w-full max-w-[80px] overflow-hidden rounded md:h-[60px] md:max-w-[60px] lg:h-20 lg:max-w-[80px]">
                    <img src="https://demo.tailgrids.com/templates/startup/build/src/assets/images/testimonials/testimonial-05/image-02.jpg" alt="image" class="w-full">
                    </div>
                    <div class="w-full">
                    <h5 class="mb-1 text-lg font-semibold text-dark dark:text-white">
                        Anee Doe
                    </h5>
                    <p class="text-xs text-body-color dark:text-dark-6">
                        CEO @ Trorex.
                    </p>
                    </div>
                </div>

                <p class="text-base text-body-color dark:text-dark-6">
                    “I believe in lifelong learning and Learn. is a great place to
                    learn from experts. I've learned a lot and recommend it to all
                    my friends and familys.”
                </p>

                <div>
                    <span class="absolute top-0 right-0">
                    <svg width="104" height="102" viewBox="0 0 104 102" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.6" d="M28.707 23.8032C31.0493 22.4301 33.9507 22.4301 36.293 23.8032L56.4389 35.6133C58.7351 36.9594 60.1458 39.4218 60.1458 42.0835V65.9165C60.1458 68.5782 58.7351 71.0406 56.4388 72.3867L36.293 84.1968C33.9507 85.5699 31.0493 85.5699 28.707 84.1968L8.56115 72.3867C6.26492 71.0406 4.85417 68.5782 4.85417 65.9165V42.0835C4.85417 39.4218 6.26492 36.9594 8.56115 35.6133L28.707 23.8032Z" stroke="#3758F9"></path>
                        <path opacity="0.6" d="M105.25 12.7424C107.571 11.4027 110.429 11.4027 112.75 12.7424L144.587 31.1236C146.908 32.4634 148.337 34.9393 148.337 37.6188V74.3812C148.337 77.0607 146.908 79.5366 144.587 80.8764L112.75 99.2576C110.429 100.597 107.571 100.597 105.25 99.2576L73.4128 80.8764C71.0923 79.5366 69.6628 77.0607 69.6628 74.3812V37.6188C69.6628 34.9393 71.0923 32.4634 73.4128 31.1236L105.25 12.7424Z" stroke="#13C296"></path>
                        <path opacity="0.6" d="M59.25 -23.2576C61.5705 -24.5973 64.4295 -24.5973 66.75 -23.2576L82.1327 -14.3764C84.4532 -13.0366 85.8827 -10.5607 85.8827 -7.8812V9.8812C85.8827 12.5607 84.4532 15.0366 82.1327 16.3764L66.75 25.2576C64.4295 26.5973 61.5705 26.5973 59.25 25.2576L43.8673 16.3764C41.5468 15.0366 40.1173 12.5607 40.1173 9.8812V-7.8812C40.1173 -10.5607 41.5468 -13.0366 43.8673 -14.3764L59.25 -23.2576Z" stroke="#F98B69"></path>
                    </svg>
                    </span>
                </div>
                </div>
            </div>
            <div class="w-full px-4 md:w-1/2">
                <div class="shadow-testimonial-6 dark:shadow-none relative mb-10 overflow-hidden rounded-[10px] bg-white dark:bg-dark-2 p-8 sm:p-10 md:py-10 md:px-6 lg:p-10">
                <div class="flex items-center mb-10">
                    <div class="mr-5 h-20 w-full max-w-[80px] overflow-hidden rounded md:h-[60px] md:max-w-[60px] lg:h-20 lg:max-w-[80px]">
                    <img src="https://demo.tailgrids.com/templates/startup/build/src/assets/images/testimonials/testimonial-05/image-03.jpg" alt="image" class="w-full">
                    </div>
                    <div class="w-full">
                    <h5 class="mb-1 text-lg font-semibold text-dark dark:text-white">
                        Dipali Dow
                    </h5>
                    <p class="text-xs text-body-color dark:text-dark-6">
                        Founder @ Cradow.
                    </p>
                    </div>
                </div>

                <p class="text-base text-body-color dark:text-dark-6">
                    “I believe in lifelong learning and Learn. is a great place to
                    learn from experts. I've learned a lot and recommend it to all
                    my friends and familys.”
                </p>

                <div>
                    <span class="absolute top-0 right-0">
                    <svg width="104" height="102" viewBox="0 0 104 102" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.6" d="M28.707 23.8032C31.0493 22.4301 33.9507 22.4301 36.293 23.8032L56.4389 35.6133C58.7351 36.9594 60.1458 39.4218 60.1458 42.0835V65.9165C60.1458 68.5782 58.7351 71.0406 56.4388 72.3867L36.293 84.1968C33.9507 85.5699 31.0493 85.5699 28.707 84.1968L8.56115 72.3867C6.26492 71.0406 4.85417 68.5782 4.85417 65.9165V42.0835C4.85417 39.4218 6.26492 36.9594 8.56115 35.6133L28.707 23.8032Z" stroke="#3758F9"></path>
                        <path opacity="0.6" d="M105.25 12.7424C107.571 11.4027 110.429 11.4027 112.75 12.7424L144.587 31.1236C146.908 32.4634 148.337 34.9393 148.337 37.6188V74.3812C148.337 77.0607 146.908 79.5366 144.587 80.8764L112.75 99.2576C110.429 100.597 107.571 100.597 105.25 99.2576L73.4128 80.8764C71.0923 79.5366 69.6628 77.0607 69.6628 74.3812V37.6188C69.6628 34.9393 71.0923 32.4634 73.4128 31.1236L105.25 12.7424Z" stroke="#13C296"></path>
                        <path opacity="0.6" d="M59.25 -23.2576C61.5705 -24.5973 64.4295 -24.5973 66.75 -23.2576L82.1327 -14.3764C84.4532 -13.0366 85.8827 -10.5607 85.8827 -7.8812V9.8812C85.8827 12.5607 84.4532 15.0366 82.1327 16.3764L66.75 25.2576C64.4295 26.5973 61.5705 26.5973 59.25 25.2576L43.8673 16.3764C41.5468 15.0366 40.1173 12.5607 40.1173 9.8812V-7.8812C40.1173 -10.5607 41.5468 -13.0366 43.8673 -14.3764L59.25 -23.2576Z" stroke="#F98B69"></path>
                    </svg>
                    </span>
                </div>
                </div>
            </div>
            <div class="w-full px-4 md:w-1/2">
                <div class="shadow-testimonial-6 dark:shadow-none relative mb-10 overflow-hidden rounded-[10px] bg-white dark:bg-dark-2 p-8 sm:p-10 md:py-10 md:px-6 lg:p-10">
                <div class="flex items-center mb-10">
                    <div class="mr-5 h-20 w-full max-w-[80px] overflow-hidden rounded md:h-[60px] md:max-w-[60px] lg:h-20 lg:max-w-[80px]">
                    <img src="https://demo.tailgrids.com/templates/startup/build/src/assets/images/testimonials/testimonial-05/image-04.jpg" alt="image" class="w-full">
                    </div>
                    <div class="w-full">
                    <h5 class="mb-1 text-lg font-semibold text-dark dark:text-white">
                        John Doe
                    </h5>
                    <p class="text-xs text-body-color dark:text-dark-6">
                        Founder @ Poettry.
                    </p>
                    </div>
                </div>

                <p class="text-base text-body-color dark:text-dark-6">
                    “I believe in lifelong learning and Learn. is a great place to
                    learn from experts. I've learned a lot and recommend it to all
                    my friends and familys.”
                </p>

                <div>
                    <span class="absolute top-0 right-0">
                    <svg width="104" height="102" viewBox="0 0 104 102" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.6" d="M28.707 23.8032C31.0493 22.4301 33.9507 22.4301 36.293 23.8032L56.4389 35.6133C58.7351 36.9594 60.1458 39.4218 60.1458 42.0835V65.9165C60.1458 68.5782 58.7351 71.0406 56.4388 72.3867L36.293 84.1968C33.9507 85.5699 31.0493 85.5699 28.707 84.1968L8.56115 72.3867C6.26492 71.0406 4.85417 68.5782 4.85417 65.9165V42.0835C4.85417 39.4218 6.26492 36.9594 8.56115 35.6133L28.707 23.8032Z" stroke="#3758F9"></path>
                        <path opacity="0.6" d="M105.25 12.7424C107.571 11.4027 110.429 11.4027 112.75 12.7424L144.587 31.1236C146.908 32.4634 148.337 34.9393 148.337 37.6188V74.3812C148.337 77.0607 146.908 79.5366 144.587 80.8764L112.75 99.2576C110.429 100.597 107.571 100.597 105.25 99.2576L73.4128 80.8764C71.0923 79.5366 69.6628 77.0607 69.6628 74.3812V37.6188C69.6628 34.9393 71.0923 32.4634 73.4128 31.1236L105.25 12.7424Z" stroke="#13C296"></path>
                        <path opacity="0.6" d="M59.25 -23.2576C61.5705 -24.5973 64.4295 -24.5973 66.75 -23.2576L82.1327 -14.3764C84.4532 -13.0366 85.8827 -10.5607 85.8827 -7.8812V9.8812C85.8827 12.5607 84.4532 15.0366 82.1327 16.3764L66.75 25.2576C64.4295 26.5973 61.5705 26.5973 59.25 25.2576L43.8673 16.3764C41.5468 15.0366 40.1173 12.5607 40.1173 9.8812V-7.8812C40.1173 -10.5607 41.5468 -13.0366 43.8673 -14.3764L59.25 -23.2576Z" stroke="#F98B69"></path>
                    </svg>
                    </span>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <section class="relative z-10 overflow-hidden  dark:bg-dark py-20 lg:py-[120px]">
        <div class="w-full flex justify-center">
            <div class="flex flex-wrap lg:justify-between w-full max-w-screen-xl">
            <div class="w-full px-4 lg:w-1/2 xl:w-6/12">
                <div class="mb-12 max-w-[570px] lg:mb-0">
                <span class="block mb-4 text-base font-semibold text-primary">
                    Contact Us
                </span>
                <h2 class="text-dark dark:text-white mb-6 text-[32px] font-bold uppercase sm:text-[40px] lg:text-[36px] xl:text-[40px]">
                    GET IN TOUCH WITH US
                </h2>
                <p class="text-base leading-relaxed text-body-color dark:text-dark-6 mb-9">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eius tempor incididunt ut labore et dolore magna aliqua. Ut enim
                    adiqua minim veniam quis nostrud exercitation ullamco
                </p>

                <div class="mb-8 flex w-full max-w-[370px]">
                    <div class="bg-primary/5 text-primary mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded sm:h-[70px] sm:max-w-[70px]">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M30.6 11.8002L17.7 3.5002C16.65 2.8502 15.3 2.8502 14.3 3.5002L1.39998 11.8002C0.899983 12.1502 0.749983 12.8502 1.04998 13.3502C1.39998 13.8502 2.09998 14.0002 2.59998 13.7002L3.44998 13.1502V25.8002C3.44998 27.5502 4.84998 28.9502 6.59998 28.9502H25.4C27.15 28.9502 28.55 27.5502 28.55 25.8002V13.1502L29.4 13.7002C29.6 13.8002 29.8 13.9002 30 13.9002C30.35 13.9002 30.75 13.7002 30.95 13.4002C31.3 12.8502 31.15 12.1502 30.6 11.8002ZM13.35 26.7502V18.5002C13.35 18.0002 13.75 17.6002 14.25 17.6002H17.75C18.25 17.6002 18.65 18.0002 18.65 18.5002V26.7502H13.35ZM26.3 25.8002C26.3 26.3002 25.9 26.7002 25.4 26.7002H20.9V18.5002C20.9 16.8002 19.5 15.4002 17.8 15.4002H14.3C12.6 15.4002 11.2 16.8002 11.2 18.5002V26.7502H6.69998C6.19998 26.7502 5.79998 26.3502 5.79998 25.8502V11.7002L15.5 5.4002C15.8 5.2002 16.2 5.2002 16.5 5.4002L26.3 11.7002V25.8002Z" fill="currentColor"></path>
                    </svg>
                    </div>
                    <div class="w-full">
                    <h4 class="mb-1 text-xl font-bold text-dark dark:text-white">
                        Our Location
                    </h4>
                    <p class="text-base text-body-color dark:text-dark-6">
                        99 S.t Jomblo Park Pekanbaru 28292. Indonesia
                    </p>
                    </div>
                </div>

                <div class="mb-8 flex w-full max-w-[370px]">
                    <div class="bg-primary/5 text-primary mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded sm:h-[70px] sm:max-w-[70px]">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_941_17577)">
                        <path d="M24.3 31.1499C22.95 31.1499 21.4 30.7999 19.7 30.1499C16.3 28.7999 12.55 26.1999 9.19997 22.8499C5.84997 19.4999 3.24997 15.7499 1.89997 12.2999C0.39997 8.59994 0.54997 5.54994 2.29997 3.84994C2.34997 3.79994 2.44997 3.74994 2.49997 3.69994L6.69997 1.19994C7.74997 0.599942 9.09997 0.899942 9.79997 1.89994L12.75 6.29994C13.45 7.34994 13.15 8.74994 12.15 9.44994L10.35 10.6999C11.65 12.7999 15.35 17.9499 21.25 21.6499L22.35 20.0499C23.2 18.8499 24.55 18.4999 25.65 19.2499L30.05 22.1999C31.05 22.8999 31.35 24.2499 30.75 25.2999L28.25 29.4999C28.2 29.5999 28.15 29.6499 28.1 29.6999C27.2 30.6499 25.9 31.1499 24.3 31.1499ZM3.79997 5.54994C2.84997 6.59994 2.89997 8.74994 3.99997 11.4999C5.24997 14.6499 7.64997 18.0999 10.8 21.2499C13.9 24.3499 17.4 26.7499 20.5 27.9999C23.2 29.0999 25.35 29.1499 26.45 28.1999L28.85 24.0999C28.85 24.0499 28.85 24.0499 28.85 23.9999L24.45 21.0499C24.45 21.0499 24.35 21.0999 24.25 21.2499L23.15 22.8499C22.45 23.8499 21.1 24.1499 20.1 23.4999C13.8 19.5999 9.89997 14.1499 8.49997 11.9499C7.84997 10.8999 8.09997 9.54994 9.09997 8.84994L10.9 7.59994V7.54994L7.94997 3.14994C7.94997 3.09994 7.89997 3.09994 7.84997 3.14994L3.79997 5.54994Z" fill="currentColor"></path>
                        <path d="M29.3 14.25C28.7 14.25 28.25 13.8 28.2 13.2C27.8 8.15003 23.65 4.10003 18.55 3.75003C17.95 3.70003 17.45 3.20003 17.5 2.55003C17.55 1.95003 18.05 1.45003 18.7 1.50003C24.9 1.90003 29.95 6.80003 30.45 13C30.5 13.6 30.05 14.15 29.4 14.2C29.4 14.25 29.35 14.25 29.3 14.25Z" fill="currentColor"></path>
                        <path d="M24.35 14.7002C23.8 14.7002 23.3 14.3002 23.25 13.7002C22.95 11.0002 20.85 8.90018 18.15 8.55018C17.55 8.50018 17.1 7.90018 17.15 7.30018C17.2 6.70018 17.8 6.25018 18.4 6.30018C22.15 6.75018 25.05 9.65018 25.5 13.4002C25.55 14.0002 25.15 14.5502 24.5 14.6502C24.4 14.7002 24.35 14.7002 24.35 14.7002Z" fill="currentColor"></path>
                        </g>
                        <defs>
                        <clipPath id="clip0_941_17577">
                            <rect width="32" height="32" fill="white"></rect>
                        </clipPath>
                        </defs>
                    </svg>
                    </div>
                    <div class="w-full">
                    <h4 class="mb-1 text-xl font-bold text-dark dark:text-white">
                        Phone Number
                    </h4>
                    <p class="text-base text-body-color dark:text-dark-6">
                        (+62)81 414 257 9980
                    </p>
                    </div>
                </div>

                <div class="mb-8 flex w-full max-w-[370px]">
                    <div class="bg-primary/5 text-primary mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded sm:h-[70px] sm:max-w-[70px]">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M28 4.7998H3.99998C2.29998 4.7998 0.849976 6.1998 0.849976 7.9498V24.1498C0.849976 25.8498 2.24998 27.2998 3.99998 27.2998H28C29.7 27.2998 31.15 25.8998 31.15 24.1498V7.8998C31.15 6.1998 29.7 4.7998 28 4.7998ZM28 7.0498C28.05 7.0498 28.1 7.0498 28.15 7.0498L16 14.8498L3.84998 7.0498C3.89998 7.0498 3.94998 7.0498 3.99998 7.0498H28ZM28 24.9498H3.99998C3.49998 24.9498 3.09998 24.5498 3.09998 24.0498V9.2498L14.8 16.7498C15.15 16.9998 15.55 17.0998 15.95 17.0998C16.35 17.0998 16.75 16.9998 17.1 16.7498L28.8 9.2498V24.0998C28.9 24.5998 28.5 24.9498 28 24.9498Z" fill="currentColor"></path>
                    </svg>
                    </div>
                    <div class="w-full">
                    <h4 class="mb-1 text-xl font-bold text-dark dark:text-white">
                        Email Address
                    </h4>
                    <p class="text-base text-body-color dark:text-dark-6">
                        info@yourdomain.com
                    </p>
                    </div>
                </div>
                </div>
            </div>
            <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
                <div class="relative p-8 bg-white rounded-lg shadow-lg dark:bg-dark-2 sm:p-12">
                <form>
                    <div class="mb-6">
                    <input type="text" placeholder="Your Name" class="border-stroke dark:border-dark-3 dark:text-dark-6 dark:bg-dark text-body-color focus:border-primary w-full rounded border py-3 px-[14px] text-base outline-none">
                    </div>
                    <div class="mb-6">
                    <input type="email" placeholder="Your Email" class="border-stroke dark:border-dark-3 dark:text-dark-6 dark:bg-dark text-body-color focus:border-primary w-full rounded border py-3 px-[14px] text-base outline-none">
                    </div>
                    <div class="mb-6">
                    <input type="text" placeholder="Your Phone" class="border-stroke dark:border-dark-3 dark:text-dark-6 dark:bg-dark text-body-color focus:border-primary w-full rounded border py-3 px-[14px] text-base outline-none">
                    </div>
                    <div class="mb-6">
                    <textarea rows="6" placeholder="Your Message" class="border-stroke dark:border-dark-3 dark:text-dark-6 dark:bg-dark text-body-color focus:border-primary w-full resize-none rounded border py-3 px-[14px] text-base outline-none"></textarea>
                    </div>
                    <div>
                    <button type="submit" class="w-full p-3 text-white transition border rounded border-primary bg-primary hover:bg-opacity-90">
                        Send Message
                    </button>
                    </div>
                </form>
                <div>
                    <span class="absolute -top-10 -right-9 z-[-1]">
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 100C0 44.7715 0 0 0 0C55.2285 0 100 44.7715 100 100C100 100 100 100 0 100Z" fill="#3056D3"></path>
                    </svg>
                    </span>
                    <span class="absolute -right-10 top-[90px] z-[-1]">
                    <svg width="34" height="134" viewBox="0 0 34 134" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="31.9993" cy="132" r="1.66667" transform="rotate(180 31.9993 132)" fill="#13C296"></circle>
                        <circle cx="31.9993" cy="117.333" r="1.66667" transform="rotate(180 31.9993 117.333)" fill="#13C296"></circle>
                        <circle cx="31.9993" cy="102.667" r="1.66667" transform="rotate(180 31.9993 102.667)" fill="#13C296"></circle>
                        <circle cx="31.9993" cy="88" r="1.66667" transform="rotate(180 31.9993 88)" fill="#13C296"></circle>
                        <circle cx="31.9993" cy="73.3333" r="1.66667" transform="rotate(180 31.9993 73.3333)" fill="#13C296"></circle>
                        <circle cx="31.9993" cy="45" r="1.66667" transform="rotate(180 31.9993 45)" fill="#13C296"></circle>
                        <circle cx="31.9993" cy="16" r="1.66667" transform="rotate(180 31.9993 16)" fill="#13C296"></circle>
                        <circle cx="31.9993" cy="59" r="1.66667" transform="rotate(180 31.9993 59)" fill="#13C296"></circle>
                        <circle cx="31.9993" cy="30.6666" r="1.66667" transform="rotate(180 31.9993 30.6666)" fill="#13C296"></circle>
                        <circle cx="31.9993" cy="1.66665" r="1.66667" transform="rotate(180 31.9993 1.66665)" fill="#13C296"></circle>
                        <circle cx="17.3333" cy="132" r="1.66667" transform="rotate(180 17.3333 132)" fill="#13C296"></circle>
                        <circle cx="17.3333" cy="117.333" r="1.66667" transform="rotate(180 17.3333 117.333)" fill="#13C296"></circle>
                        <circle cx="17.3333" cy="102.667" r="1.66667" transform="rotate(180 17.3333 102.667)" fill="#13C296"></circle>
                        <circle cx="17.3333" cy="88" r="1.66667" transform="rotate(180 17.3333 88)" fill="#13C296"></circle>
                        <circle cx="17.3333" cy="73.3333" r="1.66667" transform="rotate(180 17.3333 73.3333)" fill="#13C296"></circle>
                        <circle cx="17.3333" cy="45" r="1.66667" transform="rotate(180 17.3333 45)" fill="#13C296"></circle>
                        <circle cx="17.3333" cy="16" r="1.66667" transform="rotate(180 17.3333 16)" fill="#13C296"></circle>
                        <circle cx="17.3333" cy="59" r="1.66667" transform="rotate(180 17.3333 59)" fill="#13C296"></circle>
                        <circle cx="17.3333" cy="30.6666" r="1.66667" transform="rotate(180 17.3333 30.6666)" fill="#13C296"></circle>
                        <circle cx="17.3333" cy="1.66665" r="1.66667" transform="rotate(180 17.3333 1.66665)" fill="#13C296"></circle>
                        <circle cx="2.66536" cy="132" r="1.66667" transform="rotate(180 2.66536 132)" fill="#13C296"></circle>
                        <circle cx="2.66536" cy="117.333" r="1.66667" transform="rotate(180 2.66536 117.333)" fill="#13C296"></circle>
                        <circle cx="2.66536" cy="102.667" r="1.66667" transform="rotate(180 2.66536 102.667)" fill="#13C296"></circle>
                        <circle cx="2.66536" cy="88" r="1.66667" transform="rotate(180 2.66536 88)" fill="#13C296"></circle>
                        <circle cx="2.66536" cy="73.3333" r="1.66667" transform="rotate(180 2.66536 73.3333)" fill="#13C296"></circle>
                        <circle cx="2.66536" cy="45" r="1.66667" transform="rotate(180 2.66536 45)" fill="#13C296"></circle>
                        <circle cx="2.66536" cy="16" r="1.66667" transform="rotate(180 2.66536 16)" fill="#13C296"></circle>
                        <circle cx="2.66536" cy="59" r="1.66667" transform="rotate(180 2.66536 59)" fill="#13C296"></circle>
                        <circle cx="2.66536" cy="30.6666" r="1.66667" transform="rotate(180 2.66536 30.6666)" fill="#13C296"></circle>
                        <circle cx="2.66536" cy="1.66665" r="1.66667" transform="rotate(180 2.66536 1.66665)" fill="#13C296"></circle>
                    </svg>
                    </span>
                    <span class="absolute -left-7 -bottom-7 z-[-1]">
                    <svg width="107" height="134" viewBox="0 0 107 134" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="104.999" cy="132" r="1.66667" transform="rotate(180 104.999 132)" fill="#13C296"></circle>
                        <circle cx="104.999" cy="117.333" r="1.66667" transform="rotate(180 104.999 117.333)" fill="#13C296"></circle>
                        <circle cx="104.999" cy="102.667" r="1.66667" transform="rotate(180 104.999 102.667)" fill="#13C296"></circle>
                        <circle cx="104.999" cy="88" r="1.66667" transform="rotate(180 104.999 88)" fill="#13C296"></circle>
                        <circle cx="104.999" cy="73.3333" r="1.66667" transform="rotate(180 104.999 73.3333)" fill="#13C296"></circle>
                        <circle cx="104.999" cy="45" r="1.66667" transform="rotate(180 104.999 45)" fill="#13C296"></circle>
                        <circle cx="104.999" cy="16" r="1.66667" transform="rotate(180 104.999 16)" fill="#13C296"></circle>
                        <circle cx="104.999" cy="59" r="1.66667" transform="rotate(180 104.999 59)" fill="#13C296"></circle>
                        <circle cx="104.999" cy="30.6666" r="1.66667" transform="rotate(180 104.999 30.6666)" fill="#13C296"></circle>
                        <circle cx="104.999" cy="1.66665" r="1.66667" transform="rotate(180 104.999 1.66665)" fill="#13C296"></circle>
                        <circle cx="90.3333" cy="132" r="1.66667" transform="rotate(180 90.3333 132)" fill="#13C296"></circle>
                        <circle cx="90.3333" cy="117.333" r="1.66667" transform="rotate(180 90.3333 117.333)" fill="#13C296"></circle>
                        <circle cx="90.3333" cy="102.667" r="1.66667" transform="rotate(180 90.3333 102.667)" fill="#13C296"></circle>
                        <circle cx="90.3333" cy="88" r="1.66667" transform="rotate(180 90.3333 88)" fill="#13C296"></circle>
                        <circle cx="90.3333" cy="73.3333" r="1.66667" transform="rotate(180 90.3333 73.3333)" fill="#13C296"></circle>
                        <circle cx="90.3333" cy="45" r="1.66667" transform="rotate(180 90.3333 45)" fill="#13C296"></circle>
                        <circle cx="90.3333" cy="16" r="1.66667" transform="rotate(180 90.3333 16)" fill="#13C296"></circle>
                        <circle cx="90.3333" cy="59" r="1.66667" transform="rotate(180 90.3333 59)" fill="#13C296"></circle>
                        <circle cx="90.3333" cy="30.6666" r="1.66667" transform="rotate(180 90.3333 30.6666)" fill="#13C296"></circle>
                        <circle cx="90.3333" cy="1.66665" r="1.66667" transform="rotate(180 90.3333 1.66665)" fill="#13C296"></circle>
                        <circle cx="75.6654" cy="132" r="1.66667" transform="rotate(180 75.6654 132)" fill="#13C296"></circle>
                        <circle cx="31.9993" cy="132" r="1.66667" transform="rotate(180 31.9993 132)" fill="#13C296"></circle>
                        <circle cx="75.6654" cy="117.333" r="1.66667" transform="rotate(180 75.6654 117.333)" fill="#13C296"></circle>
                        <circle cx="31.9993" cy="117.333" r="1.66667" transform="rotate(180 31.9993 117.333)" fill="#13C296"></circle>
                        <circle cx="75.6654" cy="102.667" r="1.66667" transform="rotate(180 75.6654 102.667)" fill="#13C296"></circle>
                        <circle cx="31.9993" cy="102.667" r="1.66667" transform="rotate(180 31.9993 102.667)" fill="#13C296"></circle>
                        <circle cx="75.6654" cy="88" r="1.66667" transform="rotate(180 75.6654 88)" fill="#13C296"></circle>
                        <circle cx="31.9993" cy="88" r="1.66667" transform="rotate(180 31.9993 88)" fill="#13C296"></circle>
                        <circle cx="75.6654" cy="73.3333" r="1.66667" transform="rotate(180 75.6654 73.3333)" fill="#13C296"></circle>
                        <circle cx="31.9993" cy="73.3333" r="1.66667" transform="rotate(180 31.9993 73.3333)" fill="#13C296"></circle>
                        <circle cx="75.6654" cy="45" r="1.66667" transform="rotate(180 75.6654 45)" fill="#13C296"></circle>
                        <circle cx="31.9993" cy="45" r="1.66667" transform="rotate(180 31.9993 45)" fill="#13C296"></circle>
                        <circle cx="75.6654" cy="16" r="1.66667" transform="rotate(180 75.6654 16)" fill="#13C296"></circle>
                        <circle cx="31.9993" cy="16" r="1.66667" transform="rotate(180 31.9993 16)" fill="#13C296"></circle>
                        <circle cx="75.6654" cy="59" r="1.66667" transform="rotate(180 75.6654 59)" fill="#13C296"></circle>
                        <circle cx="31.9993" cy="59" r="1.66667" transform="rotate(180 31.9993 59)" fill="#13C296"></circle>
                        <circle cx="75.6654" cy="30.6666" r="1.66667" transform="rotate(180 75.6654 30.6666)" fill="#13C296"></circle>
                        <circle cx="31.9993" cy="30.6666" r="1.66667" transform="rotate(180 31.9993 30.6666)" fill="#13C296"></circle>
                        <circle cx="75.6654" cy="1.66665" r="1.66667" transform="rotate(180 75.6654 1.66665)" fill="#13C296"></circle>
                        <circle cx="31.9993" cy="1.66665" r="1.66667" transform="rotate(180 31.9993 1.66665)" fill="#13C296"></circle>
                        <circle cx="60.9993" cy="132" r="1.66667" transform="rotate(180 60.9993 132)" fill="#13C296"></circle>
                        <circle cx="17.3333" cy="132" r="1.66667" transform="rotate(180 17.3333 132)" fill="#13C296"></circle>
                        <circle cx="60.9993" cy="117.333" r="1.66667" transform="rotate(180 60.9993 117.333)" fill="#13C296"></circle>
                        <circle cx="17.3333" cy="117.333" r="1.66667" transform="rotate(180 17.3333 117.333)" fill="#13C296"></circle>
                        <circle cx="60.9993" cy="102.667" r="1.66667" transform="rotate(180 60.9993 102.667)" fill="#13C296"></circle>
                        <circle cx="17.3333" cy="102.667" r="1.66667" transform="rotate(180 17.3333 102.667)" fill="#13C296"></circle>
                        <circle cx="60.9993" cy="88" r="1.66667" transform="rotate(180 60.9993 88)" fill="#13C296"></circle>
                        <circle cx="17.3333" cy="88" r="1.66667" transform="rotate(180 17.3333 88)" fill="#13C296"></circle>
                        <circle cx="60.9993" cy="73.3333" r="1.66667" transform="rotate(180 60.9993 73.3333)" fill="#13C296"></circle>
                        <circle cx="17.3333" cy="73.3333" r="1.66667" transform="rotate(180 17.3333 73.3333)" fill="#13C296"></circle>
                        <circle cx="60.9993" cy="45" r="1.66667" transform="rotate(180 60.9993 45)" fill="#13C296"></circle>
                        <circle cx="17.3333" cy="45" r="1.66667" transform="rotate(180 17.3333 45)" fill="#13C296"></circle>
                        <circle cx="60.9993" cy="16" r="1.66667" transform="rotate(180 60.9993 16)" fill="#13C296"></circle>
                        <circle cx="17.3333" cy="16" r="1.66667" transform="rotate(180 17.3333 16)" fill="#13C296"></circle>
                        <circle cx="60.9993" cy="59" r="1.66667" transform="rotate(180 60.9993 59)" fill="#13C296"></circle>
                        <circle cx="17.3333" cy="59" r="1.66667" transform="rotate(180 17.3333 59)" fill="#13C296"></circle>
                        <circle cx="60.9993" cy="30.6666" r="1.66667" transform="rotate(180 60.9993 30.6666)" fill="#13C296"></circle>
                        <circle cx="17.3333" cy="30.6666" r="1.66667" transform="rotate(180 17.3333 30.6666)" fill="#13C296"></circle>
                        <circle cx="60.9993" cy="1.66665" r="1.66667" transform="rotate(180 60.9993 1.66665)" fill="#13C296"></circle>
                        <circle cx="17.3333" cy="1.66665" r="1.66667" transform="rotate(180 17.3333 1.66665)" fill="#13C296"></circle>
                        <circle cx="46.3333" cy="132" r="1.66667" transform="rotate(180 46.3333 132)" fill="#13C296"></circle>
                        <circle cx="2.66536" cy="132" r="1.66667" transform="rotate(180 2.66536 132)" fill="#13C296"></circle>
                        <circle cx="46.3333" cy="117.333" r="1.66667" transform="rotate(180 46.3333 117.333)" fill="#13C296"></circle>
                        <circle cx="2.66536" cy="117.333" r="1.66667" transform="rotate(180 2.66536 117.333)" fill="#13C296"></circle>
                        <circle cx="46.3333" cy="102.667" r="1.66667" transform="rotate(180 46.3333 102.667)" fill="#13C296"></circle>
                        <circle cx="2.66536" cy="102.667" r="1.66667" transform="rotate(180 2.66536 102.667)" fill="#13C296"></circle>
                        <circle cx="46.3333" cy="88" r="1.66667" transform="rotate(180 46.3333 88)" fill="#13C296"></circle>
                        <circle cx="2.66536" cy="88" r="1.66667" transform="rotate(180 2.66536 88)" fill="#13C296"></circle>
                        <circle cx="46.3333" cy="73.3333" r="1.66667" transform="rotate(180 46.3333 73.3333)" fill="#13C296"></circle>
                        <circle cx="2.66536" cy="73.3333" r="1.66667" transform="rotate(180 2.66536 73.3333)" fill="#13C296"></circle>
                        <circle cx="46.3333" cy="45" r="1.66667" transform="rotate(180 46.3333 45)" fill="#13C296"></circle>
                        <circle cx="2.66536" cy="45" r="1.66667" transform="rotate(180 2.66536 45)" fill="#13C296"></circle>
                        <circle cx="46.3333" cy="16" r="1.66667" transform="rotate(180 46.3333 16)" fill="#13C296"></circle>
                        <circle cx="2.66536" cy="16" r="1.66667" transform="rotate(180 2.66536 16)" fill="#13C296"></circle>
                        <circle cx="46.3333" cy="59" r="1.66667" transform="rotate(180 46.3333 59)" fill="#13C296"></circle>
                        <circle cx="2.66536" cy="59" r="1.66667" transform="rotate(180 2.66536 59)" fill="#13C296"></circle>
                        <circle cx="46.3333" cy="30.6666" r="1.66667" transform="rotate(180 46.3333 30.6666)" fill="#13C296"></circle>
                        <circle cx="2.66536" cy="30.6666" r="1.66667" transform="rotate(180 2.66536 30.6666)" fill="#13C296"></circle>
                        <circle cx="46.3333" cy="1.66665" r="1.66667" transform="rotate(180 46.3333 1.66665)" fill="#13C296"></circle>
                        <circle cx="2.66536" cy="1.66665" r="1.66667" transform="rotate(180 2.66536 1.66665)" fill="#13C296"></circle>
                    </svg>
                    </span>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
</div>

@endsection