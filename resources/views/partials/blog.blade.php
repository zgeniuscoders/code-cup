<div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8 z-20">

    @foreach ($posts as $post)
    <article>
        <img src="{{ asset('img/1.jpg') }}" alt="" class="rounded">
        <h3 class="text-2xl dark:text-gray-300 hover:text-blue-700"><a href="{{ route("blog.show",$post->id) }}">{{ $post->title }}</a></h3>
        <div class="flex justify-between align-center my-3">
            <a href="" class="bg-gray-500 text-white rounded py-1 px-3 text-sm hover:cursor-pointer">{{ $post->user->name }}</a>
            <small class="text-gray-400">Le {{ $post->created_at->format("d/m/Y") }}</small>
        </div>
        <p class="text-gray-700 dark:text-gray-300 break-words mb-4">{{ $post->getExerpt() }}.</p>
    </article>    
    @endforeach
    
</div>
