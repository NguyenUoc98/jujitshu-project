@extends('layouts.master')

@section('title', 'Trang chủ')

@push('styles')
    <style>
        .jssora094 {
            display: block;
            position: absolute;
            cursor: pointer;
        }

        .jssora094 .c {
            fill: none;
            stroke: #000;
            stroke-width: 400;
            stroke-miterlimit: 10;
        }

        .jssora094 .a {
            fill: none;
            stroke: #000;
            stroke-width: 400;
            stroke-miterlimit: 10;
        }

        .jssora094:hover {
            opacity: .8;
        }

        .jssora094.jssora094dn {
            opacity: .6;
        }

        .jssora094.jssora094ds {
            opacity: .3;
            pointer-events: none;
        }
    </style>
@endpush

@section('content')
    <main>
        <div class="relative pt-16 pb-32 flex content-center items-center justify-center h-screen">
            <div class="bg-cover bg-center absolute top-0 w-full h-full"
                 style="background-image: linear-gradient(rgba(0,0,0,.8),rgba(0,0,0,.8)),url('{{ asset('images/background.png') }}');"></div>
            <div class="container max-w-8xl relative mx-auto">
                <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                        <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:text-6xl lg:mt-6 xl:text-7xl">
                            <span class="block">Liên đoàn</span>
                            <span class="block text-indigo-400">Jujit-shu Việt Nam</span>
                        </h1>
                        <div class="text-gray-200"><p
                                class="undefined text-lg font-light leading-relaxed mt-6 mb-4">This is a simple
                                example of a Landing Page you can build using Material Tailwind. It features
                                multiple components based on the Tailwind CSS and Material Design by Google.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="pb-20 bg-gray-100 -mt-32">
            <div class="container max-w-7xl mx-auto px-4">
                <div class="flex flex-wrap relative z-50 space-y-4">
                    <div class="w-full md:w-4/12 px-4 flex justify-center text-center">
                        <div class="w-full bg-white rounded-xl overflow-hdden shadow-md p-4 undefined">
                            <div class="p-4 undefined">
                                <div
                                    class="p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-md rounded-full bg-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white"
                                         viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                </div>
                                <h1 class="text-gray-900 text-xl font-bold leading-normal mt-0 mb-2">Thành tích</h1>
                                <p class="text-blue-gray-700 text-base font-light leading-relaxed mt-0 mb-4">Divide
                                    details about your product or agency work into parts. A paragraph describing a
                                    feature will be enough.</p></div>
                        </div>
                    </div>
                    <div class="w-full md:w-4/12 px-4 flex justify-center text-center">
                        <div class="w-full bg-white rounded-xl overflow-hdden shadow-md p-4 undefined">
                            <div class="p-4 undefined">
                                <div
                                    class="p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-md rounded-full bg-blue-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white"
                                         viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                              d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <h1 class="text-gray-900 text-xl font-bold leading-normal mt-0 mb-2">Lịch sử</h1>
                                <p class="text-blue-gray-700 text-base font-light leading-relaxed mt-0 mb-4">Keep you
                                    user engaged by providing meaningful information. Remember that by this time, the
                                    user is curious.</p></div>
                        </div>
                    </div>
                    <div class="w-full md:w-4/12 px-4 flex justify-center text-center">
                        <div class="w-full bg-white rounded-xl overflow-hdden shadow-md p-4 undefined">
                            <div class="p-4 undefined">
                                <div
                                    class="p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-md rounded-full bg-teal-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white"
                                         viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                              d="M6.625 2.655A9 9 0 0119 11a1 1 0 11-2 0 7 7 0 00-9.625-6.492 1 1 0 11-.75-1.853zM4.662 4.959A1 1 0 014.75 6.37 6.97 6.97 0 003 11a1 1 0 11-2 0 8.97 8.97 0 012.25-5.953 1 1 0 011.412-.088z"
                                              clip-rule="evenodd"/>
                                        <path fill-rule="evenodd"
                                              d="M5 11a5 5 0 1110 0 1 1 0 11-2 0 3 3 0 10-6 0c0 1.677-.345 3.276-.968 4.729a1 1 0 11-1.838-.789A9.964 9.964 0 005 11zm8.921 2.012a1 1 0 01.831 1.145 19.86 19.86 0 01-.545 2.436 1 1 0 11-1.92-.558c.207-.713.371-1.445.49-2.192a1 1 0 011.144-.83z"
                                              clip-rule="evenodd"/>
                                        <path fill-rule="evenodd"
                                              d="M10 10a1 1 0 011 1c0 2.236-.46 4.368-1.29 6.304a1 1 0 01-1.838-.789A13.952 13.952 0 009 11a1 1 0 011-1z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <h1 class="text-gray-900 text-xl font-bold leading-normal mt-0 mb-2">Phát triển</h1>
                                <p class="text-blue-gray-700 text-base font-light leading-relaxed mt-0 mb-4">Write a few
                                    lines about each one. A paragraph describing a feature will be enough. Keep you user
                                    engaged!</p></div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap items-center lg:mt-32 mt-24">
                    <div class="w-full md:w-5/12 px-4 mx-auto">
                        <div
                            class="text-blue-gray-800 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h1 class="text-gray-900 text-3xl font-bold leading-normal mt-0 mb-2">Giới thiệu chung</h1>
                        <p class="text-blue-gray-700 text-lg font-light leading-relaxed mt-6 mb-4">Don't let your uses
                            guess by attaching tooltips and popoves to any element. Just make sure you enable them first
                            via JavaScript.</p>
                        <p class="text-blue-gray-700 text-lg font-light leading-relaxed mt-6 mb-4">The kit comes with
                            three pre-built pages to help you get started faster. You can change the text and images and
                            you're good to go. Just make sure you enable them first via JavaScript.</p>
                        <a href="#pablo" class="font-medium text-light-blue-500 mt-2 inline-block">
                            Read More
                        </a>
                    </div>
                    <div class="w-full md:w-4/12 px-4 mx-auto flex justify-center mt-24 lg:mt-0">
                        <div class="w-full bg-white rounded-xl overflow-hdden shadow-md p-4 undefined">
                            <img alt="Card Image" class="w-full rounded-lg -mt-9 shadow-lg undefined"
                                 src="{{ asset('images/img1.jpg') }}">
                            <div class="p-4 undefined">
                                <h1 class="text-gray-900 text-xl font-bold leading-normal mt-0 mb-2">Top
                                    Notch Services</h1>
                                <p class="text-blue-gray-700 text-base font-light leading-relaxed mt-0 mb-4">The Arctic
                                    Ocean freezes every winter and much of the sea-ice then thaws every summer, and that
                                    process will continue whatever happens.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="min-h-[600px] bg-cover flex items-center"
                 style="background-image: url('{{ asset('images/img2.jpg') }}')">
            <div class="container mx-auto text-white pl-4">
                <p class="text-3xl lg:text-5xl">CHÚNG TÔI LÀ AI?</p>
                <p class=" text-xl font-bold my-4">Bộ máy tổ chức VJJF</p>
                <a href="#">
                    Tìm hiểu
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" viewBox="0 0 20 20"
                         fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                              clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>
        </section>

        <section>
            <div class="container mx-auto overflow-hidden pb-20">
                <div class="flex flex-wrap items-center">
                    <div class="w-full md:w-4/12 px-12 md:px-4 ml-auto mr-auto md:mt-32 mt-24">
                        <div
                            class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path
                                    d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z"/>
                            </svg>
                        </div>
                        <h3 class="text-3xl mb-2 font-semibold leading-normal">Các hoạt động</h3>
                        <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-blueGray-600">Every element that you
                            need in a product comes built in as a component. All components fit perfectly with each
                            other and can have different colours.</p>
                        <div class="block pb-6"><span
                                class="text-xs font-semibold bg-gray-200 inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2">Buttons</span><span
                                class="text-xs font-semibold bg-gray-200 inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2">Inputs</span><span
                                class="text-xs font-semibold bg-gray-200 inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2">Labels</span><span
                                class="text-xs font-semibold bg-gray-200 inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2">Menus</span><span
                                class="text-xs font-semibold bg-gray-200 inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2">Navbars</span><span
                                class="text-xs font-semibold bg-gray-200 inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2">Pagination</span><span
                                class="text-xs font-semibold bg-gray-200 inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2">Progressbars</span><span
                                class="text-xs font-semibold bg-gray-200 inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2">Typography</span>
                        </div>
                        <a href="https://www.creative-tim.com/learning-lab/tailwind/react/alerts/notus?ref=nr-index"
                           target="_blank"
                           class="font-bold text-blueGray-700 hover:text-blueGray-500 ease-linear transition-all duration-150">View
                            All <i class="fa fa-angle-double-right ml-1 leading-relaxed"></i></a></div>
                    <div class="w-full md:w-5/12 px-4 mr-auto ml-auto md:mt-48 mt-4 lg:scale-125">
                        <img src="{{ asset('images/test1.png') }}">
                    </div>
                </div>

                <div class="flex flex-wrap items-center">
                    <div class="w-full md:w-6/12 px-4 mr-auto ml-auto lg:mt-32 mt-24">
                        <div class="justify-center flex flex-wrap relative">
                            <div class="my-4 w-full lg:w-6/12 px-4">
                                <div class="shadow-lg rounded-lg text-center overflow-hidden aspect-[3/2]">
                                    <img class="object-cover w-full h-full" src="{{ asset('images/test2.jpg') }}">
                                </div>

                                <div class="shadow-lg rounded-lg text-center mt-8 overflow-hidden aspect-[3/2]">
                                    <img class="object-cover w-full h-full" src="{{ asset('images/test3.jpg') }}">
                                </div>

                                <div
                                    class="bg-blueGray-700 shadow-lg rounded-lg text-center mt-8 overflow-hidden aspect-[3/2]">
                                    <img class="object-cover w-full h-full" src="{{ asset('images/test4.jpeg') }}">
                                </div>

                            </div>
                            <div class="my-4 w-full lg:w-6/12 px-4 lg:mt-16">
                                <div
                                    class="bg-blueGray-700 shadow-lg rounded-lg text-center mt-8 overflow-hidden aspect-[3/2]">
                                    <img class="object-cover w-full h-full" src="{{ asset('images/test5.jpeg') }}">
                                </div>
                                <div
                                    class="bg-blueGray-700 shadow-lg rounded-lg text-center mt-8 overflow-hidden aspect-[3/2]">
                                    <img class="object-cover w-full h-full" src="{{ asset('images/test6.jpg') }}">
                                </div>
                                <div
                                    class="bg-blueGray-700 shadow-lg rounded-lg text-center mt-8 overflow-hidden aspect-[3/2]">
                                    <img class="object-cover w-full h-full" src="{{ asset('images/test7.jpg') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-4/12 px-12 md:px-4 ml-auto mr-auto lg:mt-48 mt-10">
                        <div
                            class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h3 class="text-3xl mb-2 font-semibold leading-normal">Hệ thống các giải đấu</h3>
                        <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-blueGray-600">In order to create a
                            great User Experience some components require JavaScript. In this way you can manipulate the
                            elements on the page and give more options to your users.</p>
                        <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-blueGray-600">We created a set of
                            Components that are dynamic and come to help you.</p>
                        <div class="block pb-6"><span
                                class="text-xs font-semibold bg-gray-200 inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2">Alerts</span><span
                                class="text-xs font-semibold bg-gray-200 inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2">Dropdowns</span><span
                                class="text-xs font-semibold bg-gray-200 inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2">Menus</span><span
                                class="text-xs font-semibold bg-gray-200 inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2">Modals</span><span
                                class="text-xs font-semibold bg-gray-200 inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2">Navbars</span><span
                                class="text-xs font-semibold bg-gray-200 inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2">Popovers</span><span
                                class="text-xs font-semibold bg-gray-200 inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2">Tabs</span><span
                                class="text-xs font-semibold bg-gray-200 inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2">Tooltips</span>
                        </div>
                        <a href="https://www.creative-tim.com/learning-lab/tailwind/react/alerts/notus?ref=nr-index"
                           target="_blank"
                           class="font-bold text-blueGray-700 hover:text-blueGray-500 ease-linear transition-all duration-150">View
                            all <i class="fa fa-angle-double-right ml-1 leading-relaxed"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-gray-100 py-10 md:min-h-[500px]">
            <div class="container mx-auto">
                <div class="max-w-7xl mx-auto px-12 md:px-4">
                    <div
                        class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-16 h-16 md:mb-6 mb-4 shadow-lg rounded-full bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm3 2h6v4H7V5zm8 8v2h1v-2h-1zm-2-2H7v4h6v-4zm2 0h1V9h-1v2zm1-4V5h-1v2h1zM5 5v2H4V5h1zm0 4H4v2h1V9zm-1 4h1v2H4v-2z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-3xl mb-4 font-semibold leading-normal ml-4 md:inline">TV shows</h3>
                </div>

                <div id="slider1_container"
                     class="relative top-0 left-0 aspect-video w-full md:w-4/5 mx-auto px-8 overflow-hidden">
                    <!-- Slides Container -->
                    <div data-u="slides" class="absolute top-0 left-0 aspect-video w-full px-8">
                        <div>
                            <iframe class="aspect-video w-full px-8" src="https://www.youtube.com/embed/zPd1B3HMVsI"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                        <div>
                            <iframe class="aspect-video w-full px-8" src="https://www.youtube.com/embed/vouN5yKWfVU"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                        <div>
                            <iframe class="aspect-video w-full px-8" src="https://www.youtube.com/embed/PUguwLbAbwg"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                    <div data-u="arrowleft" class="jssora094" style="width:50px;height:50px;top:0px;left:30px;"
                         data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                        <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                            <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
                            <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
                        </svg>
                    </div>
                    <div data-u="arrowright" class="jssora094" style="width:50px;height:50px;top:0px;right:30px;"
                         data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                        <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                            <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
                            <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
                        </svg>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 bg-gray-600 overflow-hidden">
            <div class="container mx-auto pb-64">
                <div class="flex flex-wrap justify-center">
                    <div class="w-full md:w-5/12 px-12 md:px-4 ml-auto mr-auto md:mt-64">
                        <div
                            class="p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                            </svg>
                        </div>
                        <h3 class="text-3xl mb-2 font-semibold leading-normal text-white">Tinh thần thi đấu hết mình</h3>
                        <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-white">Since
                            <a
                                href="https://tailwindcss.com/?ref=creativetim"
                                target="_blank">Tailwind CSS</a> is an open source project we wanted to continue this
                            movement too. You can give this version a try to feel the design and also test the quality
                            of the code!</p>
                        <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-white">Get it free on Github
                            and please help us spread the news with a Star!</p>
                    </div>
                    <div class="w-full md:w-1/2 px-4 mr-auto ml-auto mt-10 relative">
                        <img src="{{ asset('images/test5.png') }}" class="absolute -top-150-px -right-100 left-auto opacity-80">
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container mx-auto my-20">
                <div class="max-w-7xl mx-auto px-4">
                    <div class="w-full px-4 ml-auto mr-auto md:mt-24">
                        <div
                            class="p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="text-3xl mb-2 font-semibold leading-normal ml-4 md:inline">Tin tức</h3>
                    </div>

                    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-5 mt-4">
                    <a class="bg-white rounded-md p-4 space-y-3 border" title="HLV Lê Công bất ngờ chia tay đội tuyển karate Việt Nam" href="https://thechatvietnam.com/bai-viet/hlv-le-cong-bat-ngo-chia-tay-doi-tuyen-karate-viet-nam">
                        <img class="w-full h-52 object-cover rounded-md mb-3" src="https://thechatvietnam.com/storage/posts/June2021/tQnbpDJ0BTbdSCtjM6hd.jpg" alt="HLV Lê Công bất ngờ chia tay đội tuyển karate Việt Nam">
                        <span class="font-semibold md:px-4 px-2 md:py-2 py-1 rounded md:text-sm text-xs uppercase" style="background-color: #c7fff8">Bài viết</span>
                        <h2 class="font-semibold md:leading-6 leading-5 md:text-lg text-black">HLV Lê Công bất ngờ chia tay đội tuyển karate Việt Nam</h2>
                        <div class="flex justify-between">
                    <span class="text-black text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                                                    30 thg 05, 2021
                                            </span>
                            <span class="text-black text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        12

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                    0
                    </span>
                        </div>
                    </a>
                    <a class="bg-white rounded-md p-4 space-y-3 border" title="Đội tuyển Karate Việt Nam giành 2 HCB tại Karate Premier League 2014" href="https://thechatvietnam.com/bai-viet/doi-tuyen-karate-viet-nam-gianh-2-hcb-tai-karate-premier-league-2014">
                        <img class="w-full h-52 object-cover rounded-md mb-3" src="https://thechatvietnam.com/storage/posts/June2021/Roil81GxXEMgUrwyDz1R.jpg" alt="Đội tuyển Karate Việt Nam giành 2 HCB tại Karate Premier League 2014">
                        <span class="font-semibold md:px-4 px-2 md:py-2 py-1 rounded md:text-sm text-xs uppercase" style="background-color: #c7fff8">Bài viết</span>
                        <h2 class="font-semibold md:leading-6 leading-5 md:text-lg text-black">Đội tuyển Karate Việt Nam giành 2 HCB tại Karate Premier League 2014</h2>
                        <div class="flex justify-between">
                    <span class="text-black text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                                                    30 thg 05, 2021
                                            </span>
                            <span class="text-black text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        10

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                    0
                    </span>
                        </div>
                    </a>
                    <a class="bg-white rounded-md p-4 space-y-3 border" title="Chính thức: Karate 1-Premier League Rabat bị hoãn, Lisbon thay thế cho vòng loại Olympic 2020" href="https://thechatvietnam.com/bai-viet/chinh-thuc-karate-1-premier-league-rabat-bi-hoan-lisbon-thay-the-cho-vong-loai-olympic-2020">
                        <img class="w-full h-52 object-cover rounded-md mb-3" src="https://thechatvietnam.com/storage/posts/May2021/destacado-noticia20200102100629.jpg" alt="Chính thức: Karate 1-Premier League Rabat bị hoãn, Lisbon thay thế cho vòng loại Olympic 2020">
                        <span class="font-semibold md:px-4 px-2 md:py-2 py-1 rounded md:text-sm text-xs uppercase" style="background-color: #c7fff8">Bài viết</span>
                        <h2 class="font-semibold md:leading-6 leading-5 md:text-lg text-black">Chính thức: Karate 1-Premier League Rabat bị hoãn, Lisbon thay thế cho...</h2>
                        <div class="flex justify-between">
                    <span class="text-black text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                                                    30 thg 05, 2021
                                            </span>
                            <span class="text-black text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        7

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                    0
                    </span>
                        </div>
                    </a>
                    <a class="bg-white rounded-md p-4 space-y-3 border" title="WKF dời lịch thi đấu Karate 1-Premier League vì Covid-19" href="https://thechatvietnam.com/bai-viet/wkf-doi-lich-thi-dau-karate-1-premier-league-vi-covid-19">
                        <img class="w-full h-52 object-cover rounded-md mb-3" src="https://thechatvietnam.com/storage/posts/May2021/moscowkarate.jpg" alt="WKF dời lịch thi đấu Karate 1-Premier League vì Covid-19">
                        <span class="font-semibold md:px-4 px-2 md:py-2 py-1 rounded md:text-sm text-xs uppercase" style="background-color: #c7fff8">Bài viết</span>
                        <h2 class="font-semibold md:leading-6 leading-5 md:text-lg text-black">WKF dời lịch thi đấu Karate 1-Premier League vì Covid-19</h2>
                        <div class="flex justify-between">
                    <span class="text-black text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                                                    30 thg 05, 2021
                                            </span>
                            <span class="text-black text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        3

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                    0
                    </span>
                        </div>
                    </a>
                    <a class="bg-white rounded-md p-4 space-y-3 border" title="Ngả mũ trước quyết tâm chinh phục Karate của võ sĩ khuyết tật" href="https://thechatvietnam.com/bai-viet/nga-mu-truoc-quyet-tam-chinh-phuc-karate-cua-vo-si-khuyet-tat">
                        <img class="w-full h-52 object-cover rounded-md mb-3" src="https://thechatvietnam.com/storage/posts/May2021/gaza-man-with-disabilities-conquers-karate-1.jpg" alt="Ngả mũ trước quyết tâm chinh phục Karate của võ sĩ khuyết tật">
                        <span class="font-semibold md:px-4 px-2 md:py-2 py-1 rounded md:text-sm text-xs uppercase" style="background-color: #c7fff8">Bài viết</span>
                        <h2 class="font-semibold md:leading-6 leading-5 md:text-lg text-black">Ngả mũ trước quyết tâm chinh phục Karate của võ sĩ khuyết tật</h2>
                        <div class="flex justify-between">
                    <span class="text-black text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                                                    30 thg 05, 2021
                                            </span>
                            <span class="text-black text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        9

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                    0
                    </span>
                        </div>
                    </a>
                    <a class="bg-white rounded-md p-4 space-y-3 border" title="Chính thức: Sự kiện karate quốc tế cuối cùng của năm 2020 bị hủy bỏ" href="https://thechatvietnam.com/bai-viet/chinh-thuc-su-kien-karate-quoc-te-cuoi-cung-cua-nam-2020-bi-huy-bo">
                        <img class="w-full h-52 object-cover rounded-md mb-3" src="https://thechatvietnam.com/storage/posts/May2021/destacado-noticia20200112194729.jpg" alt="Chính thức: Sự kiện karate quốc tế cuối cùng của năm 2020 bị hủy bỏ">
                        <span class="font-semibold md:px-4 px-2 md:py-2 py-1 rounded md:text-sm text-xs uppercase" style="background-color: #c7fff8">Bài viết</span>
                        <h2 class="font-semibold md:leading-6 leading-5 md:text-lg text-black">Chính thức: Sự kiện karate quốc tế cuối cùng của năm 2020 bị hủy bỏ</h2>
                        <div class="flex justify-between">
                    <span class="text-black text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                                                    30 thg 05, 2021
                                            </span>
                            <span class="text-black text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        6

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                    0
                    </span>
                        </div>
                    </a>
                </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <script src="{{ asset('js/jssor.slider.min.js') }}"></script>
    <script>
        jQuery(document).ready(function ($) {
            var options = {
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,
                    $ChanceToShow: 2
                }
            };
            var jssor_slider1 = new $JssorSlider$('slider1_container', options);
        });
    </script>
@endpush
