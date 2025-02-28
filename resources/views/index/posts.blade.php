@extends('main')

@section('container')
    <header class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-semibold tracking-tight text-pretty text-white sm:text-5xl lg:mt-15">
                update perkembangan terkini.</h2>
            <p class="mt-2 text-lg/8 text-gray-400">sosial media ala ala gen Z.</p>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="bg-gray-800 "> {{-- py-24 sm:py-32 --}}
                <div class="mx-auto max-w-7xl px-6 lg:px-8">

                    <div {{-- TEMPAT ARTIKEL --}}
                        class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                        {{-- pt-10 sm:mt-16 sm:pt-16 --}}
                        <article class="flex max-w-xl flex-col items-start justify-between">
                            <div class="flex items-center gap-x-4 text-xs">
                                <time datetime="2020-03-16" class="text-white">Feb,
                                    25 2025</time>
                                <a href="#"
                                    class="relative z-10 border-1 px-2 py-1 font-medium text-white hover:text-gray-800 hover:border-white hover:bg-white transition-colors duration-300 delay-50">Teknologi
                                    &
                                    AI</a>
                            </div>
                            <div class="group relative">
                                <h3 class="mt-3 text-lg/6 font-semibold text-white group-hover:text-gray-400">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        Perkembangan Bahasa Pemrograman Python di era Gen Z
                                    </a>
                                </h3>
                                <p class="mt-5 line-clamp-3 text-sm/6 text-white">Illo sint voluptas. Error
                                    voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo
                                    necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt
                                    vel.
                                    Iusto corrupti dicta.</p>
                            </div>
                            <div class="relative mt-5 flex items-center gap-x-4">
                                <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="" class="size-10 rounded-full bg-gray-50">
                                <div class="text-sm/6">
                                    <p class="font-semibold text-white">
                                        <a href="#">
                                            <span class="absolute inset-0"></span>
                                            Michael Foster
                                        </a>
                                    </p>
                                    <p class="text-gray-500">Influencer</p>
                                </div>
                            </div>
                        </article>
                        <article class="flex max-w-xl flex-col items-start justify-between">
                            <div class="flex items-center gap-x-4 text-xs">
                                <time datetime="2020-03-16" class="text-white">Feb,
                                    25 2025</time>
                                <a href="#"
                                    class="relative z-10 border-1 px-2 py-1 font-medium text-white hover:text-g800 hover:border-white hover:bg-white transition-colors duration-300 delay-50">Teknologi
                                    &
                                    AI</a>
                            </div>
                            <div class="group relative">
                                <h3 class="mt-3 text-lg/6 font-semibold text-white group-hover:text-gray-400">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        Perkembangan Bahasa Pemrograman Python di era Gen Z
                                    </a>
                                </h3>
                                <p class="mt-5 line-clamp-3 text-sm/6 text-white">Illo sint voluptas. Error
                                    voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo
                                    necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt
                                    vel.
                                    Iusto corrupti dicta.</p>
                            </div>
                            <div class="relative mt-5 flex items-center gap-x-4">
                                <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="" class="size-10 rounded-full bg-gray-50">
                                <div class="text-sm/6">
                                    <p class="font-semibold text-white">
                                        <a href="#">
                                            <span class="absolute inset-0"></span>
                                            Michael Foster
                                        </a>
                                    </p>
                                    <p class="text-gray-500">Influencer</p>
                                </div>
                            </div>
                        </article>
                        <article class="flex max-w-xl flex-col items-start justify-between">
                            <div class="flex items-center gap-x-4 text-xs">
                                <time datetime="2020-03-16" class="text-white">Feb,
                                    25 2025</time>
                                <a href="#"
                                    class="relative z-10 border-1 px-2 py-1 font-medium text-white hover:text-g800 hover:border-white hover:bg-white transition-colors duration-300 delay-50">Teknologi
                                    &
                                    AI</a>
                            </div>
                            <div class="group relative">
                                <h3 class="mt-3 text-lg/6 font-semibold text-white group-hover:text-gray-400">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        Perkembangan Bahasa Pemrograman Python di era Gen Z
                                    </a>
                                </h3>
                                <p class="mt-5 line-clamp-3 text-sm/6 text-white">Illo sint voluptas. Error
                                    voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo
                                    necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt
                                    vel.
                                    Iusto corrupti dicta.</p>
                            </div>
                            <div class="relative mt-5 flex items-center gap-x-4">
                                <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="" class="size-10 rounded-full bg-gray-50">
                                <div class="text-sm/6">
                                    <p class="font-semibold text-white">
                                        <a href="#">
                                            <span class="absolute inset-0"></span>
                                            Michael Foster
                                        </a>
                                    </p>
                                    <p class="text-gray-500">Influencer</p>
                                </div>
                            </div>
                        </article>
                        <article class="flex max-w-xl flex-col items-start justify-between">
                            <div class="flex items-center gap-x-4 text-xs">
                                <time datetime="2020-03-16" class="text-white">Feb,
                                    25 2025</time>
                                <a href="#"
                                    class="relative z-10 border-1 px-2 py-1 font-medium text-white hover:text-g800 hover:border-white hover:bg-white transition-colors duration-300 delay-50">Teknologi
                                    &
                                    AI</a>
                            </div>
                            <div class="group relative">
                                <h3 class="mt-3 text-lg/6 font-semibold text-white group-hover:text-gray-400">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        Perkembangan Bahasa Pemrograman Python di era Gen Z
                                    </a>
                                </h3>
                                <p class="mt-5 line-clamp-3 text-sm/6 text-white">Illo sint voluptas. Error
                                    voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo
                                    necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt
                                    vel.
                                    Iusto corrupti dicta.</p>
                            </div>
                            <div class="relative mt-5 flex items-center gap-x-4">
                                <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="" class="size-10 rounded-full bg-gray-50">
                                <div class="text-sm/6">
                                    <p class="font-semibold text-white">
                                        <a href="#">
                                            <span class="absolute inset-0"></span>
                                            Michael Foster
                                        </a>
                                    </p>
                                    <p class="text-gray-500">Influencer</p>
                                </div>
                            </div>
                        </article>


                        <!-- More posts... -->
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
