@extends('layouts.app')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('posts.store')}}" method="post">
    @csrf
    @method('POST')
    <div class="form-group">
      <label for="title">Titolo</label>
      <input type="text" name="title" class="form-control"  placeholder="Inserisci il titolo">
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" name="body" rows="3"></textarea>
      </div>

    <div class="form-gropu">
      @foreach ($tags as $tag)
      <label for="title">{{$tag->name}}</label>
      <input type="checkbox" name="tags[]" value="{{$tag->id}}">
      @endforeach
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection