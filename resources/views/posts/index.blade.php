@@extends('layout')

@@section('content')
    <h1>Listas</h1>

    <ul>
        @foreach ($post as $post)
            <li>
                <a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a>
            </li>
            
        @endforeach
    </ul>
@endsection