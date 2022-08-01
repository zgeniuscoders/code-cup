@extends('layouts.layout')

@section('title')
    Blog
@endsection

@section('content')
    <section
        class="dark:bg-gray-900 bg-white grid h-custom place-items-center border-b border-gray-200 dark:border-gray-600">
        <div class="container mx-auto md:px-40 px-10">
            <div class="text-center">
                <h1 class="text-4xl">Lorem ipsum dolor sit amet consectetur.</h1>
                <p class="dark:text-gray-300 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto omnis rerum
                    cumque consequatur, at qui a.</p>
            </div>
            <div class="flex items-center justify-center">
                <form action="" method="post"
                    class="flex items-center md:w-2/5 mt-2 justify-center border-2 border-solid border-gray-300 dark:border-gray-600 rounded w-full">
                    <input type="email" name="email" id="email"
                        class="w-full focus:bg-gray-200 outline-none dark:bg-gray-900 text-gray-900 p-2"
                        placeholder="Subscribe to newsletter">
                    <button type="submit" class="bg-blue-700 py-2 px-4 text-white">s'abonnez</button>
                </form>
            </div>
        </div>
    </section>
    <main class="mt-8 container md:px-40 px-10">
        <section class="grid md:grid-cols-2 gap-4 items-center">
            <img src="{{ asset("img/11.png") }}" alt="">
            <div>
                <h2 class="text-5xl my-6"><a href="">Lorem ipsum dolor sit.</a></h2>
                <p class="text-gray-700 dark:text-gray-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error molestiae facere odio eaque at facilis dolore quaerat deserunt explicabo quam nostrum obcaecati a iste perferendis repellendus, harum saepe praesentium iusto!</p>
            </div>
        </section>

        <section class="dark:bg-gray-900 py-16">
            <h3 class="text-3xl my-4">Dérniere</h3>
            @include('partials.blog')
        </section>
        
    </main>
@endsection
