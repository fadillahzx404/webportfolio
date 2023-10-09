@extends('layouts.app')
@section('title')
    HomePage
@endsection
@section('content')
    <div class="splash-screen absolute z-50 -top-4">
        <div class="splash flex justify-center">
            <img src="images/logo.png" class="image-splash" alt="">
            <p class="pl-3 text-xl mt-2 text-white pt-1 text-center font-black dev">Dev</p>
            <p class=" text-xl mt-2 text-white pt-1 text-center font-black des">Des</p>
            <p class=" text-xl mt-2 text-white pt-1 text-center font-black id">.id</p>
        </div>
    </div>
    <div class="container-fluid mx-auto p-5 [@media(min-width:768px)]:mt-20">
        <section
            class="Profile [@media(min-width:768px)]:grid [@media(min-width:768px)]:grid-cols-2 max-sm:flex max-sm:flex-col-reverse  mt-3">
            <div class="text-heading place-self-center">
                <p class="[@media(min-width:768px)]:text-3xl text-xl font-semibold max-sm:text-center">
                    Hello ! I am Fadillah a Software Engineer,<br />
                    UI/UX Designer And Data Science.
                </p>
                <p class="text-sm text-gray-500 py-2 [@media(min-width:768px)]:text-end max-sm:text-center">
                    Being Professional in every work to getting best result, and
                    take a goal, let’s work together.
                </p>
                <div class="flex
                    flex-row justify-start gap-3 mt-2 max-sm:justify-center">
                    <a href="/contact"
                        class="[@media(min-width:768px)]:p-2 max-sm:text-sm p-2 bg-gray-800 text-white rounded-md hover:bg-gray-500 hover:text-gray-800 shadow-lg shadow-gray-800/50 hover:scale-90 duration-300">Contact
                        Me</a>
                    <a href="/packet"
                        class="px-3 py-2 bg-gray-800 max-sm:text-sm text-white rounded-md hover:bg-gray-500 hover:text-gray-800 shadow-lg shadow-gray-800/50 hover:scale-90 duration-300">Packet</a>
                </div>
            </div>
            <div class="image-profile flex justify-center ">
                <img src="images/fotoku1.png" class="w-4/5 mb-3" alt="" />
            </div>
        </section>





        <section class="created-with grid gap-3 mt-12 justify-items-center">
            <div class="title">
                <p class="text-4xl text-gray-800 font-black max-sm:text-2xl">This Website Uses</p>
            </div>
            <div class="flex flex-row [@media(min-width:768px)]:gap-16 gap-10 my-5">
                <div class="icon-title-1 grid justify-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 max-sm:h-14" viewBox="0 0 512 512">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <style>
                            svg {
                                fill: #6b7280;
                            }
                        </style>
                        <path
                            d="M504.4,115.83a5.72,5.72,0,0,0-.28-.68,8.52,8.52,0,0,0-.53-1.25,6,6,0,0,0-.54-.71,9.36,9.36,0,0,0-.72-.94c-.23-.22-.52-.4-.77-.6a8.84,8.84,0,0,0-.9-.68L404.4,55.55a8,8,0,0,0-8,0L300.12,111h0a8.07,8.07,0,0,0-.88.69,7.68,7.68,0,0,0-.78.6,8.23,8.23,0,0,0-.72.93c-.17.24-.39.45-.54.71a9.7,9.7,0,0,0-.52,1.25c-.08.23-.21.44-.28.68a8.08,8.08,0,0,0-.28,2.08V223.18l-80.22,46.19V63.44a7.8,7.8,0,0,0-.28-2.09c-.06-.24-.2-.45-.28-.68a8.35,8.35,0,0,0-.52-1.24c-.14-.26-.37-.47-.54-.72a9.36,9.36,0,0,0-.72-.94,9.46,9.46,0,0,0-.78-.6,9.8,9.8,0,0,0-.88-.68h0L115.61,1.07a8,8,0,0,0-8,0L11.34,56.49h0a6.52,6.52,0,0,0-.88.69,7.81,7.81,0,0,0-.79.6,8.15,8.15,0,0,0-.71.93c-.18.25-.4.46-.55.72a7.88,7.88,0,0,0-.51,1.24,6.46,6.46,0,0,0-.29.67,8.18,8.18,0,0,0-.28,2.1v329.7a8,8,0,0,0,4,6.95l192.5,110.84a8.83,8.83,0,0,0,1.33.54c.21.08.41.2.63.26a7.92,7.92,0,0,0,4.1,0c.2-.05.37-.16.55-.22a8.6,8.6,0,0,0,1.4-.58L404.4,400.09a8,8,0,0,0,4-6.95V287.88l92.24-53.11a8,8,0,0,0,4-7V117.92A8.63,8.63,0,0,0,504.4,115.83ZM111.6,17.28h0l80.19,46.15-80.2,46.18L31.41,63.44Zm88.25,60V278.6l-46.53,26.79-33.69,19.4V123.5l46.53-26.79Zm0,412.78L23.37,388.5V77.32L57.06,96.7l46.52,26.8V338.68a6.94,6.94,0,0,0,.12.9,8,8,0,0,0,.16,1.18h0a5.92,5.92,0,0,0,.38.9,6.38,6.38,0,0,0,.42,1v0a8.54,8.54,0,0,0,.6.78,7.62,7.62,0,0,0,.66.84l0,0c.23.22.52.38.77.58a8.93,8.93,0,0,0,.86.66l0,0,0,0,92.19,52.18Zm8-106.17-80.06-45.32,84.09-48.41,92.26-53.11,80.13,46.13-58.8,33.56Zm184.52,4.57L215.88,490.11V397.8L346.6,323.2l45.77-26.15Zm0-119.13L358.68,250l-46.53-26.79V131.79l33.69,19.4L392.37,178Zm8-105.28-80.2-46.17,80.2-46.16,80.18,46.15Zm8,105.28V178L455,151.19l33.68-19.4v91.39h0Z" />
                    </svg>
                    <p class="mt-2 text-gray-600 max-sm:text-sm">Laravel 10</p>
                </div>
                <div class="icon-title-2 grid justify-items-center">
                    <svg style="color: rgb(107, 114, 128)" class="h-20 max-sm:h-14" role="img" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z"
                            fill="#6b7280"></path>
                    </svg>
                    <p class="mt-2 text-gray-600 max-sm:text-sm">Tailwind CSS 3.3</p>
                </div>
                <div class="icon-title-3 grid justify-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 max-sm:h-14" viewBox="0 0 640 512">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <style>
                            svg {
                                fill: #6b7280;
                            }
                        </style>
                        <path
                            d="M320 104.5c171.4 0 303.2 72.2 303.2 151.5S491.3 407.5 320 407.5c-171.4 0-303.2-72.2-303.2-151.5S148.7 104.5 320 104.5m0-16.8C143.3 87.7 0 163 0 256s143.3 168.3 320 168.3S640 349 640 256 496.7 87.7 320 87.7zM218.2 242.5c-7.9 40.5-35.8 36.3-70.1 36.3l13.7-70.6c38 0 63.8-4.1 56.4 34.3zM97.4 350.3h36.7l8.7-44.8c41.1 0 66.6 3 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7h-70.7L97.4 350.3zm185.7-213.6h36.5l-8.7 44.8c31.5 0 60.7-2.3 74.8 10.7 14.8 13.6 7.7 31-8.3 113.1h-37c15.4-79.4 18.3-86 12.7-92-5.4-5.8-17.7-4.6-47.4-4.6l-18.8 96.6h-36.5l32.7-168.6zM505 242.5c-8 41.1-36.7 36.3-70.1 36.3l13.7-70.6c38.2 0 63.8-4.1 56.4 34.3zM384.2 350.3H421l8.7-44.8c43.2 0 67.1 2.5 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7H417l-32.8 168.7z" />
                    </svg>
                    <p class="mt-2 text-gray-600 max-sm:text-sm">Php 8.1</p>
                </div>
            </div>
            <div class="other-used-button">
                <button data-modal-target="small-modal" data-modal-toggle="small-modal"
                    class="block text-white bg-gray-800 hover:bg-gray-800 focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center 0 hover:scale-90 duration-300"
                    type="button">
                    More
                </button>
            </div>
        </section>



        <!-- Main modal -->

        <div id="small-modal" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full overflow-x-auto overflow-y-scroll md:inset-0 h-[calc(100%-1rem)] min-h-full ">
            <div class="relative w-full max-w-md max-h-full ">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 ">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            More used for this website
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="small-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <ul class="list-disc px-5">
                            <li>jquery 3.7.1</li>
                            <li>Font awesome 6.4.2</li>
                            <li>SplideJS 4.4.1</li>
                            <li>CKEditor 5</li>
                            <li>Toastify-JS</li>
                            <li>MySql</li>
                        </ul>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="small-modal" type="button"
                            class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Oke</button>

                    </div>
                </div>
            </div>
        </div>


        <section class="Project-card grid gap-3 mt-14 justify-items-center">
            <div class="title">
                <p class="text-2xl py-3 px-12 text-white bg-gray-800 rounded-full max-sm:px-8 max-sm:text-lg">
                    Project Recently
                </p>
            </div>
            <div class="subtitle">
                <p class="text-sm text-gray-500">My latest project on bellow</p>
            </div>
            <div class="content-card mt-5">
                <div class="card flex max-md:flex-col gap-5 justify-items-center">
                    @foreach ($projects as $pro)
                        <a href="{{ route('detail_project', $pro->id) }}">
                            <div class="card-body flex flex-col ">
                                <div
                                    class="box-border xl:w-80 [@media(width:1024px)]:w-72 [@media(max-width:645px)]:max-w-[19rem] [@media(max-width:645px)]:min-h-[16rem] md:min-h-[18rem] min-h-[22.5rem]  rounded-lg bg-white border-solid border-2 border-gray-200  shadow-xl shadow-gray-400/50 hover:shadow-gray-900/50 transition hover:scale-105  ease-in-out duration-300">
                                    <img class="object-fill rounded-t-lg border-b border-gray-200 border-solid [@media(max-width:768px)]:max-h-36  h-52 w-full "
                                        src="{{ $pro->photo_cover ? asset('storage/' . $pro->photo_cover) : '/images/img_not_found.png' }}"
                                        alt="" />
                                    <p
                                        class="title-card text-lg px-2 pt-3 font-extrabold [@media(max-width:768px)]:text-sm">
                                        {{ $pro->name_project }}</p>
                                    <p
                                        class="category-card text-md px-2 pb-3 text-gray-500 font-semibold [@media(max-width:768px)]:text-xs">
                                        {{ $pro->category->name_category }}
                                    </p>
                                    <p class="desc-card px-2 pb-2 line-clamp-3 text-sm">
                                        {{ strip_tags($pro->desc_project) }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <a href="/projects"
                class="p-2 px-6 mt-10 bg-gray-800 text-white rounded-md hover:bg-gray-500 hover:text-gray-800 transition ease-in-out delay-75 hover:translate-x-5 hover:scale-105 duration-300 shadow-lg shadow-gray-800/50">See
                All Project
                <span class="pt-2"><i class="fa-solid fa-arrow-right fa-md pl-2" style="color: #ffffff"></i></span></a>
        </section>

        <div class="flex justify-center">
            <div class="border-dashed w-10/12 border-gray-400 border-b-4 mt-16 content-center"></div>
        </div>

        <section
            class="Experience grid [@media(min-width:768px)]:grid-cols-2 gap-3 [@media(min-width:768px)]:mt-20 mt-8 justify-items-start [@media(min-width:768px)]:pl-14 p-5">
            <div class="image-experience max-sm:hidden grid ">
                <img src="images/exp.png" class="place-self-center" alt="" />
            </div>
            <div class="text-experience gap-3">
                <div class="title mb-4 max-sm:text-center">
                    <p class="xl:text-3xl lg:text-xl bg-gray-800 text-white p-3 px-5 rounded-lg inline font-bold">
                        Experience Recently
                    </p>
                </div>
                <div class="subtitle max-sm:text-center">
                    <p class="xl:text-sm text-xs  text-gray-500 max-sm:mt-6">
                        My lastest Experince from each company and include freelance
                        working.
                    </p>
                </div>
                @foreach ($experiences as $exp)
                    <div class="experience-content mt-5">

                        <p class="title-exp xl:text-xl text-lg font-semibold text-gray-800">
                            {{ $exp->title_exp }}
                        </p>

                        <p class="date-exp lg:text-sm md:text-xs text-justify font-semibold text-gray-600 ">
                            {{ $exp->company_exp }}
                        </p>
                        <p class="date-exp lg:text-sm md:text-xs text-justify font-semibold text-gray-600 mb-2">
                            {{ $exp->start_date_exp }} - {{ $exp->end_date_exp }}
                        </p>

                        <p class="desc-exp lg:text-sm text-xs  text-justify">
                            {!! $exp->desc_exp !!}
                        </p>
                    </div>
                @endforeach

                <div
                    class="button-exp mt-10 hover:text-gray-800 max-sm:text-center transition ease-in-out delay-75 hover:translate-x-5 hover:scale-105 duration-300">
                    <a href="/projects"
                        class="xl:p-3 lg:p-2 p-2 px-6 mt-10 bg-gray-800 text-md md:text-sm text-white rounded-md hover:bg-gray-500 hover:text-gray-800 shadow-lg shadow-gray-800/50 ">See
                        Other Experience
                        <span class="pt-2 hover:text-gray-800"><i
                                class="fa-solid fa-arrow-right fa-md pl-2 text-white"></i></span></a>
                </div>
            </div>
        </section>

        <section class="review grid gap-3 [@media(min-width:768px)]:mt-24 mt-12 justify-items-center mx-auto">
            <div class="title mb-12">
                <p class="text-4xl text-gray-800 font-black">Our Review</p>
            </div>
            <div class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide pb-12">
                            <div class="grid justify-items-center">
                                <div
                                    class="border rounded-lg border-solid border-gray-300 p-2 shadow-md shadow-gray-400 mx-3 w-8/12 h-12/12 grid justify-items-center">
                                    <img src="images/logo.png" class="w-12 h-12 mt-2" alt="" />
                                    <p class="mt-2 text-lg font-semibold">User1</p>
                                    <p class="mt-2 mb-2 p-3 text-justify line-clamp-4 hover:line-clamp-0">
                                        Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy
                                        text ever since the 1500s, when an unknown
                                        printer took a galley of type and scrambled
                                        it to make a type specimen book
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="grid justify-items-center">
                                <div
                                    class="border rounded-lg border-solid border-gray-300 p-2 shadow-md shadow-gray-400 mx-3 w-8/12 grid justify-items-center">
                                    <img src="images/logo.png" class="w-12 h-12 mt-2" alt="" />
                                    <p class="mt-2 text-lg font-semibold">User2</p>
                                    <p class="mt-2 mb-2 p-3 text-justify line-clamp-4">
                                        Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy
                                        text ever since the 1500s, when an unknown
                                        printer took a galley of type and scrambled
                                        it to make a type specimen book
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="grid justify-items-center">
                                <div
                                    class="border rounded-lg border-solid border-gray-300 p-2 shadow-md shadow-gray-400 mx-3 w-8/12 grid justify-items-center">
                                    <img src="images/logo.png" class="w-12 h-12 mt-2" alt="" />
                                    <p class="mt-2 text-lg font-semibold">User3</p>
                                    <p class="mt-2 mb-2 p-3 text-justify line-clamp-4">
                                        Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy
                                        text ever since the 1500s, when an unknown
                                        printer took a galley of type and scrambled
                                        it to make a type specimen book
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="card_contact flex justify-center mt-10 md:p-10 ">
            <div
                class="content-card bg-gray-800 flex flex-row h-full max-md:w-full rounded-xl md:justify-between justify-center">
                <div class="title md:m-5 md:pl-8 max-sm:p-4 place-self-center">
                    <p class="pb-2 text-white xl:text-4xl lg:text-3xl md:text-xl text-xl font-extrabold max-sm:mt-3">
                        Intersted build project with me ?
                    </p>
                    <p class="lg:pb-5 pb-3 text-sm md:text-xs  text-gray-400 max-sm:text-center">
                        Lest make an agreetment together.
                    </p>
                    <div
                        class="btn-contact-me xl:mt-3 max-sm:my-3 transition ease-in-out delay-75 hover:-translate-y-2 hover:scale-100 duration-300">
                        <a href="/contact"
                            class="xl:p-3 lg:p-2 md:text-xs p-1.5 max-sm:block text-center bg-white rounded-md hover:bg-gray-400 hover:text-white shadow-xs shadow-gray-100/50 ">Contact
                            Me</a>
                    </div>
                </div>
                <div class="image-content xl:w-3/6 lg:w-5/6 md:w-5/6 max-sm:hidden">
                    <img src="images/card_image.png" class="pr-4" alt="" />
                </div>
            </div>

        </section>

    </div>
@endsection
