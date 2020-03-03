@extends('layout')


@section('content')
<div class="container">
    @if ($errors->any())
          <ul class="list-group">
              @foreach ($errors->all() as $error)
                  <li class="list-group-item list-group-item-danger">{{ $error }}</li>
              @endforeach
          </ul>
    @endif
    <form class="form-group" action="{{ route('addpost') }}" method="post">
          {{csrf_field()}}
      <label for="title">Insert Title</label>
      <input type="text" name="title" value="">
      <br>
      <label for="text">Insert Post</label>
      <textarea name="text" class="form-control" rows="3"></textarea>
      <br>
      <input type="submit" class="btn btn-primary" name="" value="ADD POST">
    </form>
</div>
@endsection
