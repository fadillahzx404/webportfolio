@extends('layouts.app')

@section('title')
    Contact Mes
@endsection

@section('content')
    <div class="container mx-auto p-10 px-20">
        <section class="about-us grid justify-items-center my-12">
            <div class="title">
                <p class="text-2xl font-bold">Contact</p>
            </div>
            <div class="subtitle mb-10">
                <p class="text-gray-500 text-sm">Hello this my contact you can contact me with few option on bellow.</p>
            </div>
            <div class="content-about-us grid grid-cols-2">
                <div class="content-text py-12 flex flex-col place-self-center">
                    <div class="title text-center">
                        <p class="text-xl font-semibold">Contact Us Option</p>
                    </div>

                    <div class="option-button grid grid-col gap-3 w-80 mt-10 ">
                        <a href="https://wa.me/6285817722537" target="_blank"
                            class="p-3 pl-5 rounded-md bg-white border-b boreder-gray-900 transition ease-in-out delay-300 hover:delay-300 hover:-translate-y-2 hover:scale-100 duration-300 shadow-sm shadow-gray-600 hover:bg-gray-100 hover:text-center">
                            <i class="fa-brands fa-whatsapp" style="color: #35a748;"></i> Whatsapp</a>
                        <a href="mailto: fadillahzx404@gmail.com"
                            class="p-3 pl-5 rounded-md bg-white border-b boreder-gray-900 transition ease-in-out delay-300 hover:delay-300 hover:translate-x-5 hover:scale-100 duration-300 shadow-sm shadow-gray-600 hover:bg-gray-100 hover:text-center">
                            <i class="fa-solid fa-envelope"></i> Email</a>
                        <a href="https://www.linkedin.com/in/fadillah-wahyu-heryanto-947521172/" target="_blank"
                            class="p-3 pl-5 rounded-md bg-white border-b boreder-gray-900 transition ease-in-out delay-300 hover:delay-300 hover:-translate-x-5 hover:scale-100 duration-300 shadow-sm shadow-gray-600 hover:bg-gray-100 hover:text-center">
                            <i class="fa-brands fa-linkedin" style="color: #20437e;"></i> LinkedIn</a>
                        <a href="{{ route('download_cv') }}" target="_blank"
                            class="p-3 pl-5 rounded-md bg-white border-b boreder-gray-900 transition ease-in-out delay-300 hover:delay-300 hover:translate-y-2 hover:scale-100 duration-300 shadow-sm shadow-gray-600 hover:bg-gray-100 hover:text-center">
                            <i class="fa-solid fa-download"></i> My CV </a>
                    </div>


                </div>
                <div class="contact-image flex justify-center max-md:hidden">
                    <img src="images/fotoku1.png" class="w-4/5 mb-3" alt="" />
                </div>
            </div>

        </section>
    </div>
@endsection
