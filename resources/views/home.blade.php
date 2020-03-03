@extends('layout')


@section('content')
<div class="container">
    <h1>POSTS INDEX</h1>

    @if (Session::has('status'))
        <h4 style="color:red;">{{ Session::get('status') }}</h4>
    @endif

    @foreach($posts as $post)
    <h2>{{$post['title']}}</h2>
    <p>{{$post['text']}}</p>
    <a href="{{ route('singlepost', $post['id']) }}" class="btn btn-info">VIEW POST</a>
    <a href="{{ route('delete', $post['id']) }}" class="btn btn-danger">DELETE</a>
    <a href="{{ route('edit', $post['id']) }}" class="btn btn-warning">EDIT</a>
    <br> <br>
    @endforeach

    <h4>{{ $posts->links() }}</h4>

    <h3> <a href="{{ route('form') }}">ADD NEW POST</a> </h3>
</div>
@endsection
