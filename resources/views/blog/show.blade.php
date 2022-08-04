@extends('layouts.layout')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
    <div class="container mx-auto md:px-80 px-10 py-28">
        <article class="grid justify-center items-center">
            <div>
                <h3 class="text-3xl my-4">{{ $post->title }}</h3>
                <div class="flex justify-between align-center my-3">
                    <a href="{{ $post->user->id }}"
                        class="bg-gray-500 text-white rounded py-1 px-3 text-sm hover:cursor-pointer">{{ $post->user->name }}</a>
                    <small class="text-gray-400">Le {{ $post->created_at->format('d/m/Y') }}</small>
                </div>
                <img src="{{ asset('img/11.png') }}" alt="">
            </div>
            <div>
                <p class="text-gray-300 my-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae saepe
                    nulla cupiditate! Placeat in nesciunt esse veniam deserunt eveniet fuga cumque itaque dolores! Laborum
                    minus eligendi architecto inventore, sint, tenetur nisi, possimus aspernatur vero molestiae esse cum
                    officiis sequi! Asperiores inventore dolores quisquam, est ea totam nam architecto quibusdam magnam
                    excepturi modi assumenda quae beatae nesciunt laboriosam dolorum doloremque. Voluptates magnam suscipit
                    dolore voluptate adipisci quas cum tempora a consequuntur, eum voluptas accusantium non quo cumque
                    sapiente hic. Quis nulla facere sed expedita dolore suscipit, quibusdam quasi delectus iure mollitia.
                    Quia sint fugit accusamus error eveniet aliquid eius quos est!</p>

                <h4 class="text-3xl">I. Lorem ipsum dolor sit amet.</h4>
                <p class="text-gray-300 my-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae saepe
                    nulla
                    cupiditate! Placeat in nesciunt esse veniam deserunt eveniet fuga cumque itaque dolores! Laborum minus
                    eligendi architecto inventore, sint, tenetur nisi, possimus aspernatur vero molestiae esse cum officiis
                    sequi! Asperiores inventore dolores quisquam, est ea totam nam architecto quibusdam magnam excepturi
                    modi
                    assumenda quae beatae nesciunt laboriosam dolorum doloremque. Voluptates magnam suscipit dolore
                    voluptate
                    adipisci quas cum tempora a consequuntur, eum voluptas accusantium non quo cumque sapiente hic. Quis
                    nulla
                    facere sed expedita dolore suscipit, quibusdam quasi delectus iure mollitia. Quia sint fugit accusamus
                    error
                    eveniet aliquid eius quos est!</p>

                <h4 class="text-3xl">II. Lorem ipsum dolor sit amet.</h4>
                <p class="text-gray-300 my-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae saepe
                    nulla
                    cupiditate! Placeat in nesciunt esse veniam deserunt eveniet fuga cumque itaque dolores! Laborum minus
                    eligendi architecto inventore, sint, tenetur nisi, possimus aspernatur vero molestiae esse cum officiis
                    sequi! Asperiores inventore dolores quisquam, est ea totam nam architecto quibusdam magnam excepturi
                    modi
                    assumenda quae beatae nesciunt laboriosam dolorum doloremque. Voluptates magnam suscipit dolore
                    voluptate
                    adipisci quas cum tempora a consequuntur, eum voluptas accusantium non quo cumque sapiente hic. Quis
                    nulla
                    facere sed expedita dolore suscipit, quibusdam quasi delectus iure mollitia. Quia sint fugit accusamus
                    error
                    eveniet aliquid eius quos est!</p>
            </div>
        </article>
    </div>
@endsection
