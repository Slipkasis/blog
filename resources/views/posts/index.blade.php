<x-app-layout>
    <div class="container px-5 py-24 mx-auto">

        <div class="py-8 flex flex-wrap md:flex-nowrap gap-6">

            @foreach ($posts as $post)
                <article class="w-full py-8 h-80 bg-cover bg-center @if($loop->first) col-span-1 @endif" style="background-image: url(@if($post->image) {{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2021/05/29/07/06/shiba-6292660_960_720.jpg @endif)">
                    <div class="w-full h-full py-8 px-8 flex-col justify-center">

                        <div>
                            @foreach ($post->tags as $tag)
                                <a href="{{route('posts.tag', $tag)}}" class="inline-block px-3 h-6 bg-{{$tag->color}}-600 text-white rounded-full">{{$tag->name}}</a>                                
                            @endforeach
                        </div>

                        <h1 class="text-4xl text-white leading-8 font-bold mt-2">
                            <a href="{{route('posts.show', $post)}}">
                                {{$post->name}}
                            </a>
                        </h1>

                        <div class="text-lg text-black py-8 mb-2">
                            {!!$post->extract!!}
                        </div>

                    </div>
                </article>                
            @endforeach

        </div>

        <div class="mt-4">

            {{$posts->links()}}

        </div>

    </div>
</x-app-layout>