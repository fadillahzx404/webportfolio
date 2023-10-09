@extends('layouts.app')

@section('title')
    All Experiences
@endsection

@section('content')
    <section id="heading-section" class="relative heading-section bg-slate-300 ">
        <div class="bg-gray-900 py-32 tranform -skew-x-[35deg] max-sm:-skew-x-[0deg] mx-[5.5rem] max-sm:mx-3">

        </div>
        <div class="absolute top-16 left-60  max-lg:left-36 max-sm:left-0 max-sm:px-5 title_subtitle">
            <p class="title text-white text-5xl px-12 font-black max-sm:text-[2rem] max-sm:text-center">Experiences
            </p>
            <p class="subtitle text-gray-400 pt-3 max-lg:text-sm max-sm:text-[0.95rem] max-sm:text-center">All my work
                experience in various
                company
                and various
                project i
                can
                build it</p>




            <hr class="border-solid border-gray-400 border-b-2 mt-4 ">
        </div>

    </section>

    <div class="container mx-auto p-5 my-10 ">
        <section class="content-experience px-20 max-sm:px-5 flex flex-col gap-6">
            <div class="save_cv text-end p-4 hover:scale-y-95">
                <a href="/download_cv" target="_blank"
                    class="p-2 bg-gray-700 text-sm text-white rounded-md shadow-md shadow-gray-400 transition delay-150 duration-300 ease-in-out hover:text-gray-700 hover:bg-gray-400 hover:scale-75"><i
                        class="fa-solid fa-download"></i> Save
                    as Resume</a>
            </div>
            @foreach ($exp as $ex)
                <div class="exp">
                    <div class="title">
                        <ul class="list-disc">
                            <li class="text-xl text-gray-900 font-bold">{{ $ex->title_exp }}</li>
                        </ul>
                    </div>
                    <div class="date-company">
                        <p class="company font-semibold text-gray-600"> {{ $ex->company_exp }}</p>
                    </div>
                    <div class="date-company flex flex-row">
                        <p class="date font-semibold text-gray-600">{{ $ex->start_date_exp }} - {{ $ex->end_date_exp }}</p>
                    </div>
                    <div class="desc-exp text-justify">
                        <p class="font-xs ">{!! $ex->desc_exp !!}</p>
                    </div>
                </div>
            @endforeach

        </section>
    </div>
@endsection
