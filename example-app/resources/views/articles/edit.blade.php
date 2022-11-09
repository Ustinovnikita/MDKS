@extends('articles.layout')
@section('content')

<div>
    <div>
        <div>
            <h2>Edit Article</h2>
        </div>

        <div>
            <a href="{{route('articles.index')}}">Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{route('articles.update', $article->id) }}" method="POST">
    @csrf

    @method('PUT')
    <div>
        <div>
            <div>
                <strong>Title:</strong>
                <input type="text" name="title" value="{{$article->title}}" placeholder="Title">
            </div>
        </div>


        <div>
            <div>
                <strong>Description</strong>
                <textarea style="height:150px" name="description" placeholder="Description">{{$article->description}}</textarea>
            </div>
        </div>

        <div>
            <button type="submit">Submit</button>
        </div>
    </div>
</form>
@endsection