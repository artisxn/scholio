@extends('panel.layouts.main')

@section('styles')
    <link rel="stylesheet" href="{{'/panel/assets/css/vue-multiselect.css'}}" />
    <!-- Polymer Float Form CSS -->
    <link rel="stylesheet" href="/new/css/jquery.polymer-form.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    {{--<link rel="stylesheet" href="/new/css/cv.css" type="text/css"  >--}}

    <style>
        .verify-title{margin-left: auto; margin-right: auto; text-align: center; color: #fff; font-weight: 300}
    .alert-primary{background: #7CA2B0; border-color: none;
    }
    .close-x{color: #fff !important; font-size: 150%; background: transparent; float: right; border: none; padding: 0; margin-top: -11px;}
    .close-x:hover{color: #FD6A33!important;}
    .alert-dismissable{padding: 20px;}




        /* ===============------------FLIP 1-------------===================*/
        .front, .back {
            width: 300px!important;
            height: 140px!important;
            border-radius: 5px;
            box-shadow: 0px 1px 6px rgba(0,0,0, 0.4);
        }



        /* ===============----------FLIP 2---------------===================*/

        .card {
            perspective: 600px;
            position: relative;
        }
        .card.is-switched .card__wrapper {
            animation: rotate 0.5s linear both;
        }
        .card__wrapper {
            transform-style: preserve-3d;
            animation: rotate-inverse 0.5s linear both;
        }
        .card__side {
            backface-visibility: hidden;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }
        .card__side.is-active {
            position: static;
        }
        .card__side--back {
            transform: rotateY(180deg);
            z-index: 200!important;
        }
        @keyframes rotate {
            0% {
                transform: rotateY(0);
            }
            70% {
                transform: rotateY(200deg);
            }
            100% {
                transform: rotateY(180deg);
            }
        }
        @keyframes rotate-inverse {
            0% {
                transform: rotateY(180deg);
            }
            70% {
                transform: rotateY(-20deg);
            }
            100% {
                transform: rotateY(0);
            }
        }
        .card {
            margin: 2rem auto;
            max-width: 350px;
        }
        .card__side {
            /* padding: 1em;
            border-radius: 5px;
            color: white;
            background-color: #ff4136; */
        }
        .card__side--back {
            /* background-color: #0074d9; */
        }


    </style>

@endsection

@section('scriptsBefore')
            <!-- Polymer Float Input Form js -->
    <script src="/new/js/jquery.polymer-form.min.js"></script>
    <script src="/panel/assets/js/cv.js"></script>
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>--}}

    {{--<script src="https:////cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>--}}
    <script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>


@endsection


@section('content')
@if(session()->has('carddelete'))

<div class="alert-dismissable alert alert-primary" style="margin-bottom: 40px">
    <button type="button" class="close-x" data-dismiss="alert" aria-hidden="true">
        ×
    </button>
    <h3 class="verify-title">
        <i class="fa fa-id-card" style="margin-right: 20px;"></i>{{ session()->get('carddelete') }}</h3>
</div>
@endif


{{--========== FLIP 1 =========--}}
<!-- <div class="cardN">
    <div class="front" style=" background: pink">
        <button onclick="alert('1rrr')">CLLLC</button>
    </div>
    <div class="back" style=" background: greenyellow"><button onclick="alert('2www')">CLLLC</button></div>
</div> -->


{{--========== FLIP 2 =========--}}


<!-- <div class="card js-card">
    <div class="card__wrapper">
        <div class="card__side is-active" style="background: red; height: 90px">
            <h1>FRONT</h1>
            <button id="btn">Flip card</button>
        </div>
        <div class="card__side card__side--back" style="background: greenyellow; height: 90px">
            <h2>BACK</h2>
            <button id="btn">Flip card</button>
        </div>
    </div>
</div> -->


    <!-- {{--<students-view id="chrome" sxoles="{{ (auth()->user()->info->type->id == 4 || auth()->user()->info->type->id == 10 || auth()->user()->info->type->id == 11) }}"> </students-view>--}} -->
    <students-view-safari id="safari" sxoles="{{ (auth()->user()->info->type->id == 4 || auth()->user()->info->type->id == 10 || auth()->user()->info->type->id == 11) }}"></students-view-safari>

@endsection



@section('scripts')



    <script>

        $(document).ready(function() {
//            ======= FLIP 1 ========
            $('.cardN').flip();


//            ======= FLIP 2 ========
            let cardTransitionTime = 500;

            let $card = $('.js-card')
            let switching = false

            $('#btn').click(flipCard)

            function flipCard () {

                console.log('pp')
                if (switching) {
                    return false
                }
                switching = true

                $card.toggleClass('is-switched')
                window.setTimeout(function () {
                    $card.children().children().toggleClass('is-active')
                    switching = false
                }, cardTransitionTime / 2)
            }





        });

        $(document).ready(function(){
//            console.log('polymer')
//            $(".demo-form").polymerForm({
//                bar_height: "1px",
//                active_color: '#008DA5',
//                label_color: '#008DA5',
//                base_color: '#bbb',
//                origin: 'left',
//                margin_top: '25px',
//                margin_bottom: '20px'
//            });
//        console.log("navigator")
//        console.log(navigator)
        
    })
</script>
@endsection
