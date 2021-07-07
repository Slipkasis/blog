<x-app-layout>
    <div class="container py-8 ">

        <div class="py-8 gap-6">

            @foreach ($posts as $post)
                <article class=" mx-8 @if($loop->first) @endif" style="background-image: url(@if($post->image) {{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2021/05/29/07/06/shiba-6292660_960_720.jpg @endif)">
                    <div class="w-full h-full py-8 px-8 my-8 flex-col justify-center">

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
                    </div>
                </article>                
            @endforeach

        </div>

        <div class="mt-4">

            {{$posts->links()}}

        </div>

    </div>
</x-app-layout>