@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="{{ route('admin.posts.update', $post->id) }}" method="post">
        @csrf
        @method('PUT')
            <h2>modifica post: {{$post->slug}}</h2>
            <div class="mb-3">
                <label for="titolo" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="titolo" name="title" value="{{$post->title}}">
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Descrizione</label>
                <textarea class="form-control" name="content" id="desc" cols="30" rows="10">{{$post->content}}</textarea>            
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection