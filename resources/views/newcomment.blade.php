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
    <form class="" action="{{ route('addcomment', $postid) }}" method="post">
          {{csrf_field()}}
      <div class="form-group">
        <label for="text">Insert Comment</label>
        <textarea name="text" class="form-control" rows="3"></textarea>
      </div>
      <input type="submit" class="btn btn-primary" name="" value="ADD COMMENT">
    </form>
  </div>
@endsection
