@extends('layouts.main')
@section('content')
    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link
        rel="apple-touch-icon"
        sizes="76x76"
        href="./assets/img/apple-icon.png"
    />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"
    />

</head>
<body class="text-gray-800 antialiased">

<main>
    <div
        class="relative pt-16 pb-32 flex content-center items-center justify-center"
        style="min-height: 75vh;"
    >
        <div
            class="absolute top-0 w-full h-full bg-center bg-cover"
            style='background-image: url("https://images.unsplash.com/photo-1549082969-62ab24fa9d7d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80");'
        >
          <span
              id="blackOverlay"
              class="w-full h-full absolute opacity-75 bg-black"
          ></span>
        </div>
        <div class="container relative mx-auto">
            <div class="items-center flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                    <div class="pr-12">
                        <h1 class="text-white font-semibold text-5xl">
                            Привет я DEVOPS
                        </h1>
                        <p class="mt-4 text-lg text-gray-300">
                          Я бекенд разработчик и создаю сайты от лендингов, одностраничных сайтов,
                          сайтов визиток, онлайн магазинов и CRM систем до интернет порталов.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
            style="height: 70px;"
        >
            <svg
                class="absolute bottom-0 overflow-hidden"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none"
                version="1.1"
                viewBox="0 0 2560 100"
                x="0"
                y="0"
            >
                <polygon
                    class="text-gray-300 fill-current"
                    points="2560 0 2560 100 0 100"
                ></polygon>
            </svg>
        </div>
    </div>
    <section class="pb-20 bg-gray-300 -mt-24">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                    >
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-800"
                            >
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Защита от Угроз</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                Осуществляю защиту сайта/сервера от хакерских атак,
                                фишинга, mitm атак, smurf, udp storm ...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-4/12 px-4 text-center">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                    >
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400"
                            >
                                <i class="fas fa-user-shield"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Администрирование</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                               Полная поддержка сайтов, установка и настройка SSL сертификатов на сайт,
                               настройка и обслуживание vps/vds серверов, настройка vpn соеденений,
                               рабочих станций.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                    >
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400"
                            >
                                <i class="fab fa-sketch"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Разное</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                              Составление технического задания на сайт, проектирование баз данных,
                              Работаю как с физическими так и с юридическими лицами.
                                С юридическими лицами заключаю договор ГПХ.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap items-center mt-20">
                <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                    <div
                        class="text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-200"
                    >
                        <i class="fab fa-laravel"></i>
                    </div>
                    <h5 class="text-3xl mb-2 font-semibold leading-normal">
                       Разработка сайтов
                    </h5>
                    <p
                        class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700"
                    >
                        Разработка полностью адаптивных сайтов включая сам продуманный до мелочей дизайн, а также разработка
                        веб приложений с использовании
                        топовых фреймворков и технологий.
                    </p>
                    <p
                        class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700"
                    >
                      В разработке всегда использую бекенд/фронтенд и UI фреймворки,
                        очень редко использую cms системы для сайтов.
                        Стек технологий реализуемый:
                        ssr, pwa, spa.
                    </p>
                </div>
                <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-600"
                    >
                        <img
                            alt="..."
                            src="https://images.unsplash.com/photo-1627398242454-45a1465c2479?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=774&q=80"
                            class="w-full align-middle rounded-t-lg"
                        />
                        <blockquote class="relative p-8 mb-4">
                            <svg
                                preserveAspectRatio="none"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 583 95"
                                class="absolute left-0 w-full block"
                                style="height: 95px; top: -94px;"
                            >
                                <polygon
                                    points="-30,95 583,95 583,65"
                                    class="text-pink-600 fill-current"
                                ></polygon>
                            </svg>
                            <h4 class="text-xl font-bold text-white">
                                Изысканность и Уникальность
                            </h4>
                            <p class="text-md font-light mt-2 text-green-100">
                             Подберу каждому заказчику топовый вариант сайта включая дизайн,
                             продвину в поиске и ранжированию. Индивидуальный подход каждому.
                            </p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="relative py-20">
        <div
            class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px;"
        >
            <svg
                class="absolute bottom-0 overflow-hidden"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none"
                version="1.1"
                viewBox="0 0 2560 100"
                x="0"
                y="0"
            >
                <polygon
                    class="text-white fill-current"
                    points="2560 0 2560 100 0 100"
                ></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4">
            <div class="items-center flex flex-wrap">
                <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
                    <img
                        alt="..."
                        class="max-w-full rounded-lg shadow-lg"
                        src="https://images.unsplash.com/reserve/oGLumRxPRmemKujIVuEG_LongExposure_i84.jpeg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=873&q=80"
                    />
                </div>
                <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                    <div class="md:pr-12">
                        <div
                            class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300"
                        >
                            <i class="fas fa-rocket text-xl"></i>
                        </div>
                        <h3 class="text-3xl font-semibold">Скорость загрузки</h3>
                        <p class="mt-4 text-lg leading-relaxed text-gray-600">
                       Реализумые мной сайты всегда будут в топе и иметь быструю загрузку страниц.
                        </p>
                        <ul class="list-none mt-6">
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                        <span
                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                        ><i class="far fa-star"></i>
                            ></span>
                                    </div>
                                    <div>
                                        <h4 class="text-gray-600">
                                            Уникальность кода
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                        <span
                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                        ><i class="fab fa-html5"></i
                            ></span>
                                    </div>
                                    <div>
                                        <h4 class="text-gray-600">Маленький вес HTML-страниц</h4>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                        <span
                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                        ><i class="fab fa-node-js"></i>
                            ></span>
                                    </div>
                                    <div>
                                        <h4 class="text-gray-600">Использование SSR, PWA</h4>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-20 pb-48">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center text-center mb-24">
                <div class="w-full lg:w-6/12 px-4">
                    <h2 class="text-4xl font-semibold">Я знаю и люблю своё дело</h2>
                    <p class="text-lg leading-relaxed m-4 text-gray-600">
                Реализую Вам любой сайт от простого до сложного проекта.
                    </p>
                </div>
            </div>

        </div>
    <section class="pb-20 relative block bg-gray-900">
        <div
            class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px;"
        >
            <svg
                class="absolute bottom-0 overflow-hidden"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none"
                version="1.1"
                viewBox="0 0 2560 100"
                x="0"
                y="0"
            >
                <polygon
                    class="text-gray-900 fill-current"
                    points="2560 0 2560 100 0 100"
                ></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
            <div class="flex flex-wrap text-center justify-center">
                <div class="w-full lg:w-6/12 px-4">
                    <h2 class="text-4xl font-semibold text-white">Связь со мной</h2>
                    <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                       Вы можете связаться со мной по почте, телеграм.
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap mt-12 justify-center">
                <div class="w-full lg:w-3/12 px-12 text-center">
                    <div
                        class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
                    >
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h6 class="text-xl mt-5 font-semibold text-white">
                        chinyanana@gmail.com
                    </h6>
                </div>
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <div
                        class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
                    >
                        <i class="fab fa-telegram-plane"></i>
                    </div>
                    <h5 class="text-xl mt-5 font-semibold text-white">
                        R3M1X
                    </h5>
                </div>
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <div
                        class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
                    >
                        <i class="fas fa-lightbulb text-xl"></i>
                    </div>
                    <h5 class="text-xl mt-5 font-semibold text-white">fancy@404.city+OTR</h5>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="relative bg-gray-300 pt-8 pb-6">
    <div
        class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
        style="height: 80px;"
    >
        <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
        >
            <polygon
                class="text-gray-300 fill-current"
                points="2560 0 2560 100 0 100"
            ></polygon>
        </svg>
    </div>
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4">
                <h4 class="text-3xl font-semibold">Пишите!</h4>
                <h5 class="text-lg mt-0 mb-2 text-gray-700">
                    Я всегда на связи отвечу всем.
                </h5>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                    </div>
                </div>
        <hr class="my-6 border-gray-400" />
        <div
            class="flex flex-wrap items-center md:justify-between justify-center"
        >
            <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                <div class="text-sm text-gray-900 font-semibold py-1">
                    Copyright © 2020-2022 BY DEVOPS
                    <div
                        class="text-gray-600 hover:text-red-500"
                    >Creative Coder</div
                    >.
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
<script>
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
    }
</script>
</html>
@endsection
