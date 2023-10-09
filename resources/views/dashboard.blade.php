<x-appdashboard-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container">
        <section class="dashboard">
            <div class="title-heading text-center w-full mt-8">
                <p class="text-3xl p-5 animate-bounce">Welcome On Dashboard <b> {{ Auth::user()->name }} </b></p>
            </div>
            <div class="flex flex-row justify-center pt-5 gap-5 px-12 ">


                <a href="/project_admin"
                    class="w-3/12 bg-white dark:bg-gray-800 overflow-hidden shadow-sm shadow-gray-400 sm:rounded-lg transition hover:scale-90 delay-150 duration-300 ease-in-out">
                    <div class="p-5 flex flex-row justify-evenly">
                        <p class="text-gray-900 text-lg font-semibold dark:text-gray-100 p-2">Total My Project</p>
                        <p class="text-white text-md font-semibold rounded-md  dark:text-gray-100 p-2 px-3 bg-gray-800">
                            {{ $countPro }}</p>
                    </div>

                </a>

                <a href="/category_project_admin"
                    class="w-3/12 bg-white dark:bg-gray-800 overflow-hidden shadow-sm shadow-gray-400 sm:rounded-lg transition hover:scale-90 delay-150 duration-300 ease-in-out">
                    <div class="p-5 flex flex-row justify-evenly">
                        <p class="text-gray-900 text-lg font-semibold dark:text-gray-100 p-2 ">Total Category
                            Project
                        </p>
                        <p class="text-white text-md font-semibold rounded-md  dark:text-gray-100 p-2 px-3 bg-gray-800">
                            {{ $countCat }}</p>
                    </div>
                </a>

                <a href="/experience_admin"
                    class="w-3/12 bg-white dark:bg-gray-800 overflow-hidden shadow-sm shadow-gray-400 sm:rounded-lg transition hover:scale-90 delay-150 duration-300 ease-in-out">
                    <div class="p-5 flex flex-row justify-evenly">
                        <p class="text-gray-900 text-lg font-semibold dark:text-gray-100 p-2">Total My Experiences
                        </p>
                        <p class="text-white text-md font-semibold rounded-md  dark:text-gray-100 p-2 px-3 bg-gray-800">
                            {{ $countExp }}</p>
                    </div>

                </a>




            </div>
        </section>
    </div>


</x-appdashboard-layout>
