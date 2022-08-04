<section class="dark:bg-gray-900 text-gray-900 pb-16 pt-4">
    <div class="text-center my-12 block">
        <h3 class="text-4xl text-blue-700">Cours</h3>
        <p class="text-2xl text-gray-700 dark:text-gray-300">Venez découvrir les actualités autour de l'univers <br> du développement web.
        </p>
    </div>

    <div class="grid sm:grid-cols-3 gap-8 z-20 container mx-auto md:px-40 px-10">

        @foreach ($courses as $course)
        <article class="border-solid border-2 border-gray-300 rounded overflow-hidden">
            <div class="">
                <img src="{{ asset("img/html.png") }}" alt="" class="">
            </div>
            <div class="p-4">
                <h3 class="text-2xl dark:text-gray-300 hover:text-blue-700"><a href="{{ route("cours.show",$course->id) }}">{{ $course->title }}</a></h3>
                <div class="flex justify-between align-center my-3">
                    <a href=""
                        class="bg-green-500 text-white rounded py-1 px-3 text-sm hover:cursor-pointer">Débutant</a>
                    <small class="text-gray-400">{{ $course->participants }} participant @if(strlen($course->participants > 1)) s @endif</small>
                </div>
                <p class="text-gray-700 dark:text-gray-400 break-words mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Vero labore officiis
                    praesentium. Deleniti dignissimos sapiente beatae minima obcaecati repellendus, magnam dolore.
                    Reiciendis, impedit! Magni sit dicta rerum placeat iusto, est alias eius nulla atque consequuntur
                </p>
                <a href="{{  route("cours.show",$course->id)  }}"
                    class="inline-block w-full bg-blue-700 hover:bg-blue-800 text-white text-center py-2 px-8 rounded">Commencez</a>
            </div>
        </article>
        @endforeach
        

        {{-- <article class="border-solid border-2 border-gray-300 rounded overflow-hidden">
            <div class="">
                <img src="{{ asset("img/css.png") }}" alt="" class="">
            </div>
            <div class="p-4">
                <h3 class="text-2xl dark:text-gray-300 hover:text-blue-700"><a href="">Apprendre l'html</a></h3>
                <div class="flex justify-between align-center my-3">
                    <a href=""
                        class="bg-yellow-500 text-white rounded py-1 px-3 text-sm hover:cursor-pointer">Débutant</a>
                    <small class="text-gray-400">15 jours</small>
                </div>
                <p class="text-gray-700 dark:text-gray-400 break-words mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Vero labore officiis
                    praesentium. Deleniti dignissimos sapiente beatae minima obcaecati repellendus, magnam dolore.
                    Reiciendis, impedit! Magni sit dicta rerum placeat iusto, est alias eius nulla atque consequuntur
                </p>
                <a href=""
                    class="inline-block w-full bg-blue-700 hover:bg-blue-800 text-white text-center py-2 px-8 rounded">Commencez</a>
            </div>
        </article>

        <article class="border-solid border-2 border-gray-300 rounded overflow-hidden">
            <div class="">
                <img src="{{ asset("img/js.png") }}" alt="" class="">
            </div>
            <div class="p-4">
                <h3 class="text-2xl dark:text-gray-300 hover:text-blue-700"><a href="">Apprendre l'html</a></h3>
                <div class="flex justify-between align-center my-3">
                    <a href=""
                        class="bg-red-500 text-white rounded py-1 px-3 text-sm hover:cursor-pointer">Débutant</a>
                    <small class="text-gray-400">15 jours</small>
                </div>
                <p class="text-gray-700 dark:text-gray-400 break-words mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Vero labore officiis
                    praesentium. Deleniti dignissimos sapiente beatae minima obcaecati repellendus, magnam dolore.
                    Reiciendis, impedit! Magni sit dicta rerum placeat iusto, est alias eius nulla atque consequuntur
                </p>
                <a href=""
                    class="inline-block w-full bg-blue-700 hover:bg-blue-800 text-white text-center py-2 px-8 rounded">Commencez</a>
            </div>
        </article> --}}


    </div>
</section>