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

    <x-nav>

        <x-nav-link name="Accueil" href="{{ route('home') }}" />

        <x-nav-link name="Cours" href="{{ route('cours.index') }}" />

        <x-nav-link name="Blog" href="{{ route('blog.index') }}" />

        <x-nav-link name="Challenges" href="" />

    </x-nav>


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
