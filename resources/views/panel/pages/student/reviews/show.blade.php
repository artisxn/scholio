@extends('panel.layouts.main')

@section('styles')
    <style>
        .infoContainer{border: 1px solid #aaa; border-radius: 5px; margin-bottom: 20px; box-shadow: 0 0 8px 2px #ccc;}
        .infoPad{min-height: 110px; padding: 15px 15px 10px 15px; margin: 30px 0; color: #008da5}
        .scholar-limit{font-size: 110%; margin: 10px 0;}
        .trophy{height: 85px; float: right; display: inline-block; margin-top: -45px; margin-right: 5px}



        .centered-text {
            text-align:center;
            margin-left: auto;
            margin-right: auto;
            float: none;
        }
        .review-cont{border: 1px solid #b9b9b9; background: #fff; border-radius: 6px; min-height: 520px; padding: 10px 20px; margin: 10px 0; }
        .school-logo{height: 45px;}
        .title{font-size: 140%; font-weight: 400; margin: 5px auto 15px; color: #FD6A33}
        .review-text{margin-top: 50px; border: 1px solid #cdcdcd; border-radius: 5px; padding: 10px; background: #fff; min-height: 170px!important;}
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

    <div class="infoContainer infoPad">
        <div class="scholar-limit"> <i class="fa fa-pencil m-r-10"></i>
            @lang('panel/students/panel.review.write') {{ count(auth()->user()->reviews) }} @lang('panel/students/panel.review.until')
        </div>

        <img class="trophy" src="/new/img/reviewOutline.png" alt="">
    </div>

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
                                <span class="cat-name"> {{ trans('seeder.category.' . $category->category->icon) }}:</span>

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
