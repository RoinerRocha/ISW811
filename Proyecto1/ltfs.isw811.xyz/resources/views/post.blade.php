<x-layout>
    <article>
       <h1>{!! $post->title !!}</h1>
       <p>
            Post de <a href="/categories/{{ $post->category->slug }}">{{$post->category->name}}</a> por <a href="#">{{ $post->user->name}}</a>
        </p>
       <div>
            {!! $post->body !!}
       </div>
    </article>
    <a href="/"> Volver</a>
</x-layout>