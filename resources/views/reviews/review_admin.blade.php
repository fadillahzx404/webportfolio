<x-app_dashbord-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Review Admin') }}
        </h2>
    </x-slot>

    <div class="flash-data" data-flash="{!! \Session::get('Success') !!}"></div>

    <div class="container py-12 p-12 max-sm:p-8 max-sm:min-w-full">


        <section class="table-reviews bg-white">

            <div class="relative overflow-x-auto shadow-lg border-b border-gray-200 sm:rounded-lg p-5">

                <div class="pb-4 bg-white dark:bg-gray-900">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative mt-1">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text"
                            class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search for items" id="searchInput">
                    </div>
                </div>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 datatable display"
                    id="datatable">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="p-4">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Name Review
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Photo Review
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Review Description
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($reviews as $rv)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 py-4 p-4 text-center">
                                    {{ $loop->iteration }}
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $rv->name_review }}
                                </th>

                                <td class="px-6 py-4">
                                    <img src="{{ asset('storage/'. $rv->foto_profile) }}" class="rounded-full h-24" alt="">
                                </td>
                                <td class="px-6 py-4">
                                   {!! $rv->review_desc !!}
                                </td>

                                <td class="px-6 py-4">

                                    <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider-{{ $rv->id }}"
                                        class="inline-flex items-center  border border-transparent p-2 text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150 shadow-sm shadow-gray-400">
                                        <div>Aksi</div>

                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>

                                    <div id="dropdownDivider-{{ $rv->id }}"
                                        class="z-10 hidden  divide-y divide-gray-100 rounded-lg shadow w-44 bg-gray-300 dark:divide-gray-600">
                                        <ul class="py-0 text-sm  dark:text-gray-200"
                                            aria-labelledby="dropdownDividerButton">
                                            <li>
                                                <a class=" hover:bg-yellow-200 mt-0"
                                                    href="{{ route('review_edit', $rv->id) }}">
                                                    <div
                                                        class="text-center text-gray-700 py-2 rounded-t-md hover:bg-yellow-200">
                                                        <i class="fa-regular fa-pen-to-square"></i> Edit
                                                    </div>
                                                </a>
                                            </li>

                                        </ul>
                                        <div class="py-0">
                                            <a class="hover:bg-green-200"
                                                href="{{ route('review_delete', $rv->id) }}">
                                                <div
                                                    class="text-center text-gray-700 py-2 rounded-b-md hover:bg-red-700 hover:text-white">
                                                    <i class="fa-solid fa-trash"></i> Delete
                                                </div>

                                            </a>
                                        </div>
                                    </div>



                                </td>


                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </section>
    </div>

</x-app_dashbord-layout>
