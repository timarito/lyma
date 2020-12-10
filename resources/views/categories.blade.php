@extends('master')

@section('title', 'Все категории')

@section('content')
    <div class="container">
        <h1 class="my-4">categories</h1>
        <div class="row">
            @foreach($categories as $category)
                <div class="col-3">
                    <div class="position-relative border p-3">
                        <p class="h4">{{ $category->name }}</p>
                        <p>{{ $category->description }}</p>
                        <a href="{{ route('category', $category->code) }}" class="stretched-link"></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

