@extends('panel.layouts.main')

@section('styles')

    <link rel="stylesheet" href="/css/croppie.css">


    <style>
        .title{color: #008da5; font-weight: 400; margin-bottom: 20px;}
        #myform { margin-top: 20px;}
        .span-cont{ padding: 10px ; position: relative} /* border: solid orange 1px; */
        .btn-del,.btn-del-sel{ background-color: #37515f; color: white; opacity: 0.7; bottom: 35px; right: 28px; position: absolute}
        .btn-del-sel{bottom: 35px; right: 28px;}
        .btn-del:hover{color: #ee980e; background-color: #1b2b37;}
        .btn-vis {visibility: visible}
        .info {font-size: 150%;  padding: 3px  10px 0 0;}   /* -webkit-text-stroke: 1px white;  color: transparent; */
        .selectedImg{border: 4px solid #00bcd4; border-radius: 6px;}

       /*.pic:before {*/
             /*content: '';*/
             /*position: absolute;*/
             /*top: 100px;*/
             /*right: 6px;*/
             /*bottom: 21px;*/
             /*left: 25px;*/
             /*background-image: linear-gradient( rgba(255, 255, 255, 0.02), rgb(39, 61, 75));*/
             /*opacity: 0.85;*/
         /*}*/

        .out-div{height: 258px;}
        .pic {
            border: 5px solid #bbb;
            border-radius: 8px;;
            float: left;
            height: 240px;
            width: 100%;
            margin: 5px 5px;
            overflow: hidden;
            text-align:center;
            cursor: pointer;
        }

        .grow img {
            height: 240px;
            width: 100%;
            -webkit-transition: all 0.4s ease;
            -moz-transition: all 0.4s ease;
            -ms-transition: all 0.4s ease;
            transition: all 0.4s ease;
        }

        .grow img:hover {
            width: 130%;
            height: 130%;
        }
        .btn-green{background-color: #00bcd4; padding-top: 4px; color: #fff; outline: none;}
        .btn-green:hover{background-color: #00a5bd; color: #fff; outline: none;}

        .upper-texts{margin-left: auto; text-align: center; margin-right: auto; margin-top: 30px;}
        .text{ width: 410px; font-size: 110%; text-align: center; margin-top: 15px; margin-bottom: 30px; margin-left: auto; margin-right: auto;}
        .photo-container {margin-left: -15px; }
        h3 {font-weight: 300;}

        @media (min-width: 1881px) {
            .span-cont {pading: 0 0.3%; width: 19.8%;}
            .pic, .grow img {height: 250px;}
            .out-div{height: 270px;}
        }

        @media (min-width: 1550px) and (max-width: 1880px){
            .span-cont {pading: 0 0.2%; width: 24.5%;}
            .pic, .grow img{height: 240px;}

        }

        @media (min-width: 768px) and (max-width: 920px) {
            .pic, .grow img {height: 225px;}
            .btn-del{bottom: 40px; right: 28px;}
            .out-div{height: 243px;}
        }

        @media (min-width: 640px) and (max-width: 767px) {
            .pic, .grow img {height: 215px;}
            .out-div{height: 233px;}
        }

        @media (min-width: 481px) and (max-width: 639px) {
            .span-cont {margin-left: 0.5%; width: 49%;}
            .pic, .grow img{height: 205px;}
            .out-div{height: 222px;}
        }

        @media  (max-width: 480px) {
            .span-cont {margin-left: 4%; width: 92%;}
            .pic, .grow img {height: 195px;}
            .out-div{height: 212px;}
        }

        /* ========== Modal ============== */

        .modal-sc-logo{margin-top: -4px; height: 60px;}
        .modal-content{padding: 0!important; border: none; border-radius: 5px!important;}
        .panel-title{margin: 2px 0 0 15px; font-size: 190%; font-weight: 600;}
        .btn-close{background-color: transparent}
        .btn-close:hover{color: #FD6A33;}
        .modal-icon{height: 30px; margin-right: 15px}
        .panel-body{ min-height: 300px}
        .modal-footer{padding: 15px!important;}
        .btn-info{background: #008da5; border: none;}
        .btn-info:hover{background: #007991;}

        .section-text{margin-bottom: 20px;}
        .inner-section2{border: none; margin-top: 30px; background-color: transparent;}

        /* ================================ */

        @media (max-width:709px ){
            .btn-green{display: none;}
        }

    </style>


@endsection

@section('content')

    <!-- Content  ΟΚ  simple upload-->
    <div class="row ">

        <div class="upper-texts">
            <h3 class="title">@lang('school_photos.title')</h3>

            <div class="btn btn-green" data-target="#upload-modal" data-toggle="modal"> @lang('school_photos.button')</div>

            @if(count(auth()->user()->info->image) >4 )
                <p class="text"> @lang('school_photos.subtitle2') </p>
            @else
                <p class="text"> @lang('school_photos.subtitle1') </p>
            {{--@elseif(count(auth()->user()->info->image) >1 )--}}

            @endif
            
            <div class="row">
        </div>

        @if(count(auth()->user()->info->image) == 1 && auth()->user()->info->background != auth()->user()->info->image->first()->id)
            <script>
                $(document).ready(function(){
                    background({{ auth()->user()->info->image->first()->id }});
                })
                
            </script>
        @endif

                    @foreach($images as $image)
                        <div class="photo-container">
                            <span class="  col-lg-4 col-sm-6 col-xs-6 span-cont">
                            <div class="">
                                @if(auth()->user()->info->background == $image->id)
                                    <div class="selectedImg out-div" style="padding-right: 8px;">
                                        <div class="grow pic">
                                            <img id="img{{$image->id}}" class="" src="{{$image->full_path}}" onclick="background({{ $image->id }})"
                                                    {{--onmouseover="hov({{$image->id}})"--}}
                                            />
                                        </div>
                                    </div>
                                @else
                                    <div class="out-div">
                                        <div class="grow pic">
                                            <img id="img{{$image->id}}" class="" src="{{$image->full_path}}" onclick="background({{ $image->id }})"
                                                    {{--onmouseover="hov({{$image->id}})"--}}
                                            />
                                        </div>
                                    </div>

                                @endif


                                <form method="POST" action="/panel/school/profile/images/upload">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}

                                    <input type="hidden" value="{{ $image->id }}" name="image"/>

                                    <button id="bt-{{ $image->id }}" type="submit" class="btn-del btn"> <i class="fa fa-trash-o" aria-hidden="true"></i> </button>
                                </form>
                            </div>

                        </span>
                        </div>
                    @endforeach
                </div>
    </div>

    <!-- ====== Upload Modal  ======= -->
    <div id="upload-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="top: 100px;">
        <div class="modal-dialog">
            <div class="modal-content">
    
                <div class="panel " style="background-color: #324c5a; height:90px; border-bottom-right-radius: 0; border-bottom-left-radius: 0; padding: 10px">
                    <div class="panel-heading" style=" color: #fff">
                        <button type="button" class="btn pull-right btn-close" data-dismiss="modal">
                            x
                        </button>
                        <img src="/new/img/logoNX-light.png" alt="scholio logo" class="pull-left modal-sc-logo">
                        <!-- <h3 class="pull-left panel-title">schol.io</h3> -->
                    </div>
    
                </div>
                <div class="panel-body">
    
    
                    <div class="section2-container ">
                        <div class="inner-section2">
                            <!-- widthHeightRatio:15/10 -->
                            <image-crop img-width="600" img-height="400" img-data="school"></image-crop>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal -->
@endsection

@section('scripts')
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>



    <script>



        window.axios.defaults.headers.common = {
            'X-CSRF-TOKEN': Scholio.csrfToken,
            'X-Requested-With': 'XMLHttpRequest'
        };

    function background(img){
        axios.post('/api/image/background/save', {image: img})
          .then(function (response) {
            if(response.data == 'OK'){
                window.location.reload();
            }
          })
          .catch(function (error) {
            console.log(error);
      });
    }

    function uncheckAll(){
        @foreach($images as $image)
            document.getElementById('img{{$image->id}}').className = '';
        @endforeach
    }


    </script>
@endsection
