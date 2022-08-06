@extends('layouts.layout')

@section('title')
    Accueil
@endsection

@section('content')
    <main>
        @include('partials.banner')

        {{-- courses --}}
        @include('partials.courses')

        {{-- accordion --}}
        <div class="container md:px-40 px-10 mx-auto">

            <div class="grid md:grid-cols-2 gap-9 align-center">

                <div class="w-full bg-gray-50 flex align-center justify-center my-auto">
                    <img src="{{ asset('img/question.png') }}" alt="" class="md:h-80 h-40">
                </div>

                <section class="shadow">

                    <article class="border-b accordion-items">

                        <div class="border-l-2 bg-grey-lightest border-indigo">

                            <header class="flex justify-between items-center p-5 pl-8 pr-8 cursor-pointer select-none">
                                <span class="text-indigo font-thin text-xl">
                                    Lorem ipsum dolor sit amet
                                </span>
                                <div
                                    class="rounded-full border border-indigo w-7 h-7 flex items-center justify-center bg-indigo">
                                    <!-- icon by feathericons.com -->
                                    <svg aria-hidden="true" data-reactid="281" fill="none" height="24" stroke="white"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24"
                                        width="24" xmlns="http://www.w3.org/2000/svg">
                                        <polyline points="18 15 12 9 6 15">
                                        </polyline>
                                        @click="showAccordion"
                                    </svg>
                                </div>
                            </header>

                            <div class="hidden">
                                <div class="pl-8 pr-8 pb-5 text-grey-darkest">
                                    <ul class="pl-4">
                                        <li class="pb-2">
                                            consectetur adipiscing elit
                                        </li>
                                        <li class="pb-2">
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                                        </li>
                                        <li class="pb-2">
                                            Viverra orci sagittis eu volutpat odio facilisis mauris
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </article>

                </section>

            </div>

        </div>

        {{-- blog --}}
        <section class="dark:bg-gray-900 py-16 container mx-auto md:px-40 px-40">

            <div class="text-center mb-4 block">
                <h3 class="text-4xl text-blue-700">Blog</h3>
                <p class="text-2xl text-gray-700 dark:text-gray-300">Venez découvrir les actualités autour de l'univers <br>
                    du développement
                    web.
                </p>
            </div>

            @include('partials.blog')
        </section>
    </main>
    
@endsection
