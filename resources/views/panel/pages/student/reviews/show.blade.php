@extends('panel.layouts.main')

@section('styles')
    <style>
        .centered-text {
            text-align:center;
            margin-left: auto;
            margin-right: auto;
            float: none;
        }
        .review-cont{border: 1px solid #bbb; background: #fff; border-radius: 6px; min-height: 520px; padding: 10px 20px; margin: 10px 0; }
        .school-logo{height: 45px;}
        .title{font-size: 140%; font-weight: 400; margin: 5px auto 15px; color: #FD6A33}
        .review-text{margin-top: 50px; border: 1px solid #008da5; border-radius: 5px; padding: 10px; background: #fafafa; min-height: 170px!important;}
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

        @media  (min-width:991px) and (max-width:1050px)  {
            .col-med-12{width: 70%; margin-left: 15%; margin-right: auto;}
        }

        @media  (min-width:630px) and (max-width:870px)  {
            .col-med-12{width: 70%; margin-left: 15%; margin-right: auto;}
        }
        @media  (max-width:410px) {
            .star-row{font-size: 95%}
            .cat-name{left: 46px;}
            .star-full,.star-empty{ letter-spacing: 1px;}
            .review-cont{padding-left: 8px; padding-right: 8px;}
        }

        @media  (max-width:390px) {
            .cat-name{letter-spacing: 0;}
            .star-full,.star-empty{ letter-spacing: -2px;}
            .review-cont{padding-left: 6px; padding-right: 6px;}
        }

        @media  (max-width:376px) {
            .cat-name{letter-spacing: -1px;}
            .star-full,.star-empty{ letter-spacing: -3px;}
            .review-cont{padding-left: 5px; padding-right: 5px;}
            .cat-name{left: 37px;}
        }
    </style>
@endsection

@section('content')
    <div class="row">
        @foreach($reviews as $review)
            <div class="col-xs-12 col-sm-6 col-xl-4 col-xxl-3 col-med-12">
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
