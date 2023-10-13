@extends('layouts.app')

@section('title')
    All Project
@endsection

@section('content')
    <section id="heading-section" class="heading-section bg-white pt-28">
        <div class="title_subtitle z-1">
            <p class="title text-gray-800 text-4xl font-extrabold px-20">All Project</p>
            <p class="subtitle text-gray-500 px-20 pt-3">This a previously project has been build by myself or by teamwork
                and
                various
                company.</p>
        </div>
        <div class="bg-gradient-to-t from-gray-500 w-full h-28 -z-1">

        </div>
    </section>
    <div class="container mx-auto [@media(min-width:768px)]:px-20">

        <section class="menu-toggle flex min-md:flex-row max-sm:flex-col [@media(max-width:625px)]:-ml-3 justify-between mt-10">
            <div class="menu-start flex max-sm:hidden">
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


                </ol>
            </div>
            <div class="menu-end flex min-md:justify-end gap-3">
                <div class="search-field self-center">
                    <div>

                        <div class="relative rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <span class="text-gray-500 sm:text-sm"><i class="fa-solid fa-magnifying-glass"></i></span>
                            </div>
                            <input type="text" name="price" id="price"
                                class="rounded-full border-0 py-1.5 pl-8 min-md:pr-20 text-gray-900 ring-1 ring-inset ring-gray-500 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-900 sm:text-sm sm:leading-6"
                                placeholder=" Search Project">

                        </div>
                    </div>
                </div>
                <div class="filter-field self-center">
                    <button id="filter-field" class="flex"><i class="fa-solid fa-filter text-gray-500 self-center"></i>
                        <p class="text-sm text-gray-500 pl-2">Filter</p>
                    </button>
                </div>
                <div class="list-field self-center">
                    <button id="list-field" class="flex"><i class="fa-solid fa-list text-gray-500 self-center"></i>
                        <p class="text-sm text-gray-500 pl-2">List</p>
                    </button>
                </div>
            </div>
        </section>
        <section
            class="card-project grid grid-cols-4 max-xl:grid-cols-3 max-sm:grid-cols-1 gap-y-12 gap-x-10 mt-12 pb-10 justify-items-center ">
            @foreach ($projects as $project)
                <a href="{{ route('detail_project', $project->id) }}">
                    <div class="card-body flex flex-col">
                        <div
                            class="box-border min-md:w-72 h-auto  max-lg:overflow-hidden rounded-lg bg-white border-solid border-2 border-gray-200  shadow-xl shadow-gray-400/50 hover:shadow-gray-900/50 transition hover:scale-105  ease-in-out duration-300">
                            <img class="object-fill rounded-t-lg border-b border-gray-200 border-solid w-full "
                                src="{{ $project->photo_cover ? asset('storage/' . $project->photo_cover) : '/images/img_not_found.png' }}"
                                alt="" />
                            <p class="title-card text-md px-2 pt-3 font-extrabold ">
                                {{ $project->name_project }}</p>
                            <p class="category-card text-sm px-2 pb-3 text-gray-500 font-semibold">
                                {{ $project->category->name_category }}
                            </p>
                            <p class="desc-card px-2 pb-2  line-clamp-3 text-xs text-justify">
                                {{ strip_tags(str_replace('&nbsp;', '', $project->desc_project)) }}
                            </p>
                        </div>
                    </div>
                </a>
            @endforeach

        </section>
    </div>
@endsection
