<x-app-layout>
    <div class="container">

        <div class="grid grid-cols-3 gap-6">

            @foreach ($posts as $post)
                <article>
                    {{$post->image->url}}
                    {{-- <img src="{{Storage::url($post->image->url)}}" alt=""> --}}    
                </article>                
            @endforeach

        </div>

    </div>
</x-app-layout>