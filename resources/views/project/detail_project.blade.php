@extends('layouts.app')

@section('title')
    Detail Project
@endsection

@section('content')
    <section id="heading-section" class="heading-section bg-white pt-28">

        <div class="flex flex-row justify-between px-52">
            <div class="title_subtitle">
                <div class="images-and-category flex flex-row mb-5"><img src="{{ asset('storage/' . $projects->icon_project) }}"
                        class="w-12 h-12 " alt="">
                    <p class="pl-2 flex items-center text-md text-gray-500">{{ $projects->category->name_category }}</p>
                </div>
                <p class="title text-gray-800 text-4xl font-extrabold ">{{ $projects->name_project }}</p>
                <div class="date-projects flex items-center">
                    <p class="date-project-text py-5 pr-5 text-lg font-bold text-gray-700">
                        Last Created :
                    </p>
                    <p class="text-sm py-5 font-extrabold text-gray-900">{{ $projects->date }}</p>
                </div>

            </div>
            <div class="mt-2">
                <div class="title mb-5">
                    <p class="font-semibold">Tools used</p>
                </div>
                <div class="list-used">
                    {!! $projects->tools_project !!}
                </div>
            </div>
        </div>
        <div class="bg-gradient-to-t from-gray-500 w-full h-28">

        </div>
    </section>


    <div class="container mx-auto p-10 px-24    ">


        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="/projects"
                        class="inline-flex items-center text-md font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-4 h-4 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        All Projects
                    </a>
                </li>

                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span
                            class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">{{ $projects->name_project }}</span>
                    </div>
                </li>
            </ol>
        </nav>


        <section class="detail-project grid gap-y-10 mt-12 pb-10 justify-items-start">



            <div class="content-heading-1">
                <p class="title-heading-1 text-xl font-bold text-gray-800">
                    Background
                </p>
                <p class="text-md">{{ strip_tags($projects->desc_project) }}</p>
            </div>
            <div class="content-heading-2">
                <p class="title-heading-2 text-xl font-bold text-gray-800">
                    Images Apps
                </p>
                <p class="text-md">some of the pictures in this project.</p>
                <div class="image-project flex flex-row content-center mt-16 mx-auto ">
                    <img src="{{ asset('storage/' . $projects->photo_left) }}"
                        class="h-2/6 w-2/6 relative z-0 shadow-sm shadow-gray-500 rounded-sm transform hover:scale-110 hover:z-30 duration-300"
                        style="left:120px;top:20px" alt="">
                    <img src="{{ asset('storage/' . $projects->photo_center) }}"
                        class="h-2/6 w-2/6 relative z-20 shadow-sm shadow-gray-500 rounded-sm  transform hover:scale-110 duration-300"
                        alt="">
                    <img src="{{ asset('storage/' . $projects->photo_right) }}"
                        class="h-2/6 w-2/6 relative z-10 shadow-sm shadow-gray-500 rounded-sm transform hover:scale-110 hover:z-30 duration-300"
                        style="right:120px; top:20px" alt="">
                </div>
            </div>
            <div class="content-heading-3 mt-24 justify-self-center">
                <p class="title-heading-4 text-2xl font-bold text-gray-800 text-center">
                    Preview Video Project
                </p>
                <p class="text-md text-center">this preview of video project.</p>
                <div class="flex content-center mt-10 mx-auto">
                    <iframe width="660" height="415"
                        src="{{ $projects->video_link ? $projects->video_link : 'https://www.youtube.com/embed/Z5NoQg8LdDk?si=11_1NYJTcrCpZ2or' }}"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>

            <div class="content-heading-4 mt-6 justify-self-center">

                <p class="title-heading-4 text-2xl font-bold text-gray-800 text-center">
                    Link Apps
                </p>
                <p class="text-sm">You can see a full project in link url in bellow.</p>
                <div class="mt-5 flex flex-row gap-2 justify-center">
                    <a href="" target="_blank"
                        class="link-apps-url  hover:scale-90  duration-300 p-2 text-white bg-gray-600 rounded-md hover:bg-gray-300 hover:text-gray-900 shadow-md shadow-gray-500">
                        <i class="fa-solid fa-link"></i> Link Apps
                    </a>
                    <a href="{{ $projects->github_project }}" target="_blank"
                        class="link-apps-url p-2 hover:scale-90 duration-300 text-white bg-gray-600 rounded-md hover:bg-gray-300 hover:text-gray-900 shadow-md shadow-gray-500"><i
                            class="fa-brands fa-github"></i> Github</a>
                </div>
            </div>




        </section>
    </div>
@endsection
