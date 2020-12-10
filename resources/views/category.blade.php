@extends('master')

@section('title', 'Категория' . $category->name)

@section('content')
    <div class="container">
        <h1 class="my-4">Category ({{$category->name}})</h1>
    </div>
@endsection
