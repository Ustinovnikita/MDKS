@extends('articles.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 mt-2 mb-2">
        <div class="pull-left">
            <h2>Articles</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('articles.create')}}">Create New Article</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif

<table class="table table-bordered mt-2">
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Price</th>
        <th>Created At</th>
    </tr>
    @foreach($articles as $article)
    <tr>
        <td>{{$article->title}}</td>
        <td>{{$article->description}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('articles.show', $article->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('articles.edit', $article->id) }}">Edit</a>
            <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </from>
        </td>
    </tr>
    @endforeach
</table>
@endsection