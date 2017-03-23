@extends('panel.layouts.main')

@section('styles')
@endsection

@section('content')
    @foreach($reviews as $review)
        <h3>{{ $review->school->name() }}</h3>
        <br />
        @foreach($review->allCategories() as $category)
            <strong>{{$category->category->name}}</strong> -

            @for($i = 1; $i<= 5; $i++)
                @if($i>$category->stars)
                    <span>☆</span>
                @else
                    <span>★</span>
                @endif
            @endfor

            <br />
        @endforeach
        <br />
        <strong>TEXT</strong>: {{ $review->text }}
    @endforeach
@endsection

@section('scriptsBefore')
@endsection


@section('scripts')
@endsection
