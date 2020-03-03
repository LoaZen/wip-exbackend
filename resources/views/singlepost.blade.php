@extends('layout')


@section('content')

<div class="container">
    @if (Session::has('commentstat'))
        <h4 style="color:red;">{{ Session::get('commentstat') }}</h4>
        <br>
    @endif

    <h1>{{$title}}</h1>
    <p>{{$text}}</p>

    <div class="comments">
      <br>
      <h2>Commenti:</h2>
      @if ($comments==NULL)
        <p>Ancora nessun commento presente.</p>
      @else
      <ul class="list-group list-group-flush">
        @foreach($comments as $comment)
          <li class="list-group-item">{{$comment['text']}}</li>
        @endforeach
      </ul>
      @endif
    </div>

    <a href="{{ route('newcomment', $id) }}" class="btn btn-secondary">ADD COMMENT</a>

    <h3><br><a href="{{ route('homepage') }}">BACK TO POSTS INDEX</a></h3>
</div>

@endsection
