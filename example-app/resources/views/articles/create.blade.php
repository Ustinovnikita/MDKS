@extends('articles.layout')

@section('content')
<div>
    <div>
        <div>
            <h2> Add New Article</h2>
        </div>
        <div>
            <a href="{{route('articles.index')}}">Back</a>
        </div>
    </div>
</div>
@if($errors->any())
<div>
    <ul>
        @foreach($errors->all() as $errors)
        <li>{{$errors}}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{route('articles.store')}}" method="POST">
    @csrf

    <div>
        <div>
            <div>
                <strong>Name:</strong>
                <input type="text" name="title" placeholder="Title">
            </div>
        </div>

        <div>
            <div>
                <strong>Description:</strong>
                <textarea style="height:150px" name="description" placeholder="Description"></textarea>
            </div>
        </div>

        <div>
            <div>
                <strong>Price:</strong>
                <input type="text" name="price" placeholder="Price">
            </div>
        </div>

        <div>
            <button type="submit">Submit</button>
        </div>
    </div>
</form>