@extends('panel.layouts.main')

@section('styles')
    <style>
        .centered-text {
            text-align:center;
            margin-left: auto;
            margin-right: auto;
            float: none;
        }
        .review-cont{border: 1px solid #bbb; background: #fff; border-radius: 6px; min-height: 480px; padding: 10px 20px; margin: 10px 0;}
        .school-logo{height: 45px;}
        .title{font-size: 140%; font-weight: 400; margin: 5px auto 15px; color: #FD6A33}
        .review-text{margin-top: 50px;}
        .up{margin-top: 20px;}
        .category{font-weight: 400; color: #008da5}
        .stars{float: right;}
        .star-empty,.star-full{color: #008da5}
        .star-row{margin-top: 5px;}
        .cat-name{position: absolute; left: 55px;}


        @media  (min-width:1485px) {
            .col-xl-4{width: 33.33%}
        }
        @media  (min-width:1910px) {
            .col-xxl-3{width: 25%}
        }
        @media  (min-width:2500px) {
            .col-xxxl-2{width: 20%}
        }
        @media  (min-width:660px) and (max-width:767px)  {
            .col-xsm-6{width: 50%}
        }

    </style>
@endsection

@section('content')
    <div class="row">
        @foreach($reviews as $review)
            <div class="col-xs-12 col-sm-6 col-xl-4 col-xxl-3">
                <div class="review-cont">
                    <div class="centered-text">
                        <img class="school-logo" src="/images/schools/{{ $review->school->logo }}" alt="">
                        <h3 class="title">{{ $review->school->name() }}</h3>
                    </div>


                    <div class="clearfix up"></div>



                    @foreach($review->allCategories() as $category)
                        <div class="star-row">
                            <span class="category">
                                <i class="{{$category->category->icon}}"></i>
                                <span class="cat-name"> {{$category->category->name}}:</span>

                            </span>
                            <span class="stars">
                                     @for($i = 1; $i<= 5; $i++)
                                    @if($i>$category->stars)
                                        <span class="star-empty">☆</span>
                                    @else
                                        <span class="star-full">★</span>
                                    @endif
                                @endfor
                            </span>

                        </div>


                    @endforeach

                    <div class="review-text">
                        {{ $review->text }}
                    </div>
                </div>
            </div>

        @endforeach
    </div>

@endsection

@section('scriptsBefore')
@endsection


@section('scripts')
@endsection
