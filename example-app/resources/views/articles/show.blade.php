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

@csrf

@method('PUT')
<div>
    <div>
        <div>
            <strong>Title:</strong>
            {{$article->title}}
        </div>
    </div>


    <div>
        <div>
            <strong>Description</strong>
            {{$article->description}}
        </div>
    </div>
    <div>
        <div>
            <strong>created_at:</strong>
            {{$article->created_at}}
        </div>
    </div>
    <div>
        <div>
            <strong>updated_at:</strong>
            {{$article->updated_at}}
        </div>
    </div>
    <div>
        <div>
            <strong>price:</strong>
            {{$article->price}}
        </div>
    </div>

</div>

@endsection