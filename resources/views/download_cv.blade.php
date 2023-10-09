<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Resume_Fadillah_Wahyu_Heryanto</title>

    <link href="https://fonts.bunny.net/css?family=montserrat:400,500,600,700" rel="stylesheet" />



    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased" onload="window.print()">
    <div class="container mx-auto grid justify-items-center ">
        <section class="header_cv text-center mb-3">
            <p class="font-bold text-xl">FADILLAH WAHYU HERYANTO</p>
            <p class="text-xs font-light">Tangerang City, Indonesia • +62-858-1772-2537 •fadillahzx404@gmail.com •</p>
            <p class="text-xs font-light">https://www.linkedin.com/in/fadillah-wahyu-heryanto-947521172/
            </p>
        </section>

        <div class="block border border-gray-700 w-11/12 mb-3"></div>

        <section class="header_cv_2 text-center w-10/12 mb-5">
            <p class="font-light text-sm mb-2">NB:Hello, I'm freshgrade from university mercu buana jakarta. I have some
                skills such
                as
                data
                science, web dev, and also android dev. I have experience being UI/UX Design and programmer
                from the online course, internship and freelance work</p>
            <p class="tex-sm font-light">All My Project : <a
                    class="font-semibold text-blue-800 underline underline-offset-4"
                    href="{{ '/' }}">{{ URL::to('/') }}</a></p>
        </section>



        <p class="title font-bold mb-1">PROFESSIONAL EXPERIENCE</p>
        <div class="block border border-gray-700 w-11/12 mb-3"></div>
        <section class="body_cv w-10/12">
            @foreach ($exp as $ex)
                <div class="title flex flex-row justify-between">
                    <ul class="list-disc">
                        <li class="text-lg text-gray-900 font-bold">{{ $ex->title_exp }}

                        </li>
                    </ul>
                    <p class="font-semibold text-xs grid place-content-center">
                        {{ date('M y', strtotime($ex->start_date_exp)) }} -
                        {{ date('M y', strtotime($ex->end_date_exp)) }}</p>
                </div>
                <div class="company-company">
                    <p class="font-semibold text-gray-600"> {{ $ex->company_exp }}</p>
                </div>

                <div class="desc-exp mb-5 text-justify text-xs pl-3">
                    <p class="">{!! $ex->desc_exp !!}</p>
                </div>
            @endforeach
        </section>
        <p class="title font-bold mb-1">EDUCATION
        </p>
        <div class="block border border-gray-700 w-11/12 mb-3"></div>
        <section class="edu_cv w-10/12 mb-4">
            <div class="head flex flex-row justify-between">
                <p class="text-md text-gray-900 font-normal">
                    Mercu Buana University, Jakarta, Indonesia
                </p>
                <p class="font-semibold text-sm">2018-2023</p>
            </div>
            <div class="body">
                <p class="font-bold">Bachelor of Computer Science (Freshgraduate)</p>
                <p class="text-xs font-normal pl-3">● Awards: won the 10 best websites in the computer science faculty
                    competition at
                    Mercu
                    Buana University - Exhibition of student work <br>
                    ● Faculty level organization: Dewan Perwakilan Mahasiswa (DPM) Fakultas Ilmu komputer
                    UMB or Student Representative Council Faculty Computer Science Period 2020-2021</p>
            </div>
        </section>

        <p class="title font-bold mb-1">SKILLS & OTHER
        </p>
        <div class="block border border-gray-700 w-11/12 mb-3"></div>

        <section class="skill_other_cv w-10/12 mb-4">

            <div class="body">

                <p class="text-xs font-normal">Skills: UI design, UX research, UI/UX design, HTML , CSS , Javascript,
                    Laravel, Flutter, Python, Vue, Codeignither 3 or 4, PHP.
                    Thesis project : Comparison of arima and arimax algorithms for predicting stock price in the middle
                    of a pandemic covid-19</p>
            </div>
        </section>

        <p class="title font-bold mb-1">Portfolio
        </p>
        <div class="block border border-gray-700 w-11/12 mb-3"></div>
        <section class="portfolio w-10/12 mb-4">
            <p class="text-xs font-normal">
                All My Portfolio Software Engineer or Programmer : <a
                    class="font-semibold text-blue-800 underline underline-offset-3"
                    href="https://github.com/fadillahzx404">Github</a>
            </p>
            <p class="text-xs font-normal">All My Portfolio UI/UX Design : <a
                    class="font-semibold text-blue-800 underline underline-offset-3"
                    href="https://medium.com/@fadillahzx/all-my-portfolio-648e931cd255">Medium</a></p>
        </section>
    </div>

</body>

</html>
