<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Cours complets et gratuits HTML, CSS, JavaScript, PHP, MySQL, Python, Bootstrap, etc. pour apprendre à coder. Format texte, vidéo et exemples de code.">
    <title>CODE CUP | @yield('title')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('512x512.png') }}" type="image/x-icon">
</head>

<body class="bg-white dark:bg-gray-900 dark:text-white" id="app">

    <nav
        class="bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class="container flex flex-wrap justify-between items-center mx-auto md:px-40 px-10">

            <a href="{{ route('home') }}" class="flex items-center">
                <img src="{{ asset('logo.svg') }}" class="h-6 sm:h-16" alt="Flowbite Logo">
                <span
                    class="self-center text-xl font-semibold whitespace-nowrap dark:text-white uppercase">Codecup</span>
            </a>

            <div class="flex items-center md:order-2 relative">
                @auth
                    <button @click="userDropDownMenu" type="button"
                        class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                        data-dropdown-placement="bottom">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full" src="{{ asset('logo.svg') }}" alt="user photo">
                    </button>
                    <!-- Dropdown menu -->
                    <div class="hidden absolute right-0 top-10 z-50 my-4 text-xl list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
                        id="user-dropdown">
                        <div class="py-3 px-4">
                            <span class="block text-sm text-gray-900 dark:text-white">{{ auth()->user()->name }}</span>
                            <span
                                class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">{{ auth()->user()->email }}</span>
                        </div>
                        <ul class="py-1" aria-labelledby="user-menu-button">
                            <li>
                                <a href="#"
                                    class="block text-sm py-2 px-4 text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block text-sm py-2 px-4 text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Parametres</a>
                            </li>
                            <li>
                                <form action="{{ route("logout") }}" method="POST">
                                    @csrf
                                    <button 
                                    class="block text-sm py-2 px-4 text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white w-full text-start">Se deconnecter</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @endauth

                @guest
                    <a href="{{ route('login') }}"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Se
                        connecter</a>
                @endguest

                <button @click="showMenu" data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

            <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="{{ route('home') }}"
                            class="
                            block 
                            text-lg 
                            py-2 
                            pr-4 
                            pl-3 
                            text-white 
                            bg-blue-700 
                            rounded 
                            md:bg-transparent  
                            md:text-blue-700 
                            md:p-0 
                            dark:text-white"
                            aria-current="page">Accueil</a>
                    </li>
                    <li>
                        <a href="{{ route('cours.index') }}"
                            class="
                            block text-lg py-2 pr-4 pl-3 
                            text-gray-700 rounded 
                            hover:bg-gray-100 
                            md:hover:bg-transparent 
                            md:hover:text-blue-700 
                            md:p-0 
                            md:dark:hover:text-white 
                            dark:text-gray-400 
                            dark:hover:bg-gray-700 
                            dark:hover:text-white 
                            md:dark:hover:bg-transparent 
                            dark:border-gray-700">Cours</a>
                    </li>
                    <li>
                        <a href="{{ route("blog.index") }}"
                            class="
                            block text-lg py-2 pr-4 pl-3 
                            text-gray-700 rounded 
                            hover:bg-gray-100 
                            md:hover:bg-transparent 
                            md:hover:text-blue-700 
                            md:p-0 
                            md:dark:hover:text-white 
                            dark:text-gray-400 
                            dark:hover:bg-gray-700 
                            dark:hover:text-white 
                            md:dark:hover:bg-transparent 
                            dark:border-gray-700">Blog</a>
                    </li>
                    <li>
                        <a href="#"
                            class="
                            block text-lg py-2 pr-4 pl-3 
                            text-gray-700 rounded 
                            hover:bg-gray-100 
                            md:hover:bg-transparent 
                            md:hover:text-blue-700 
                            md:p-0 
                            md:dark:hover:text-white 
                            dark:text-gray-400 
                            dark:hover:bg-gray-700 
                            dark:hover:text-white 
                            md:dark:hover:bg-transparent 
                            dark:border-gray-700">Challenges</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    @yield('content')

    <footer class="dark:bg-gray-900 py-8 border-t border-gray-200 dark:border-gray-600 border-solid">
        <div class="containner mx-auto md:px-40 grid md:grid-cols-3 items-center gap-12 px-10">

            <div class="text-center md:text-start">
                <div class="flex items-center justify-center md:justify-start">
                    <img src="{{ asset('logo.svg') }}" alt="code cup logo" class="h-28">
                    <h3 class="font-black text-lg">CODE CUP</h3>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident cumque sequi, eveniet ea
                    accusamus quisquam.</p>
            </div>

            <div class="text-center">
                <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta aliquam eaque quae
                    esse, molestias iste vero? Sint ipsa debitis eaque!</p>
                <a href="" class="text-gray-400 block hover:text-gray-200">Conditions d'utilisation</a>
                <a href="" class="text-gray-400 block hover:text-gray-200">Politique de confidentialité</a>
                <p class="text-gray-400 mt-2">&copy; 2022-2023</p>
            </div>

            <div class="flex justify-center items-center gap-6">
                <a href=""><img src="{{ asset('img/icons/logo-facebook.svg') }}" alt="facebook logo"
                        class="h-10"></a>
                <a href=""><img src="{{ asset('img/icons/logo-github.svg') }}" alt="github logo"
                        class="h-10"></a>
                <a href=""><img src="{{ asset('img/icons/logo-twitter.svg') }}" alt="twitter logo"
                        class="h-10"></a>
            </div>

        </div>
    </footer>

</body>
<html>
