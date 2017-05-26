@extends('panel.layouts.main')

@section('styles')

    {{--<link rel="stylesheet" href="/panel/assets/css/cropper.css">--}}
    {{--<link rel="stylesheet" href="/panel/assets/css/mainCrop.css">--}}


    <style>
        #myform { margin-top: 20px;}
        .span-cont{ padding: 10px ; position: relative} /* border: solid orange 1px; */
        .btn-del,.btn-del-sel{ background-color: #37515f; color: white; opacity: 0.7; bottom: 35px; right: 28px; position: absolute}
        .btn-del-sel{bottom: 35px; right: 28px;}
        .btn-del:hover{color: #ee980e; background-color: #1b2b37;}
        .btn-vis {visibility: visible}
        .info {font-size: 150%;  padding: 3px  10px 0 0;}   /* -webkit-text-stroke: 1px white;  color: transparent; */
        .selectedImg{border: 5px solid #00bcd4;}

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
            border: 6px solid #fff;
            float: left;
            height: 240px;
            width: 100%;
            margin: 5px 5px;
            overflow: hidden;
            text-align:center;
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
        .text{ max-width: 620px; font-size: 110%; text-align: justify; margin-top: 15px;}
        .upper-texts{margin-left: 20px;}
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
    </style>
@endsection

@section('content')



        <!-- Content trial for crop-->
    <div class="container cropp">
        {{--<div class="row">--}}
            {{--<div class="col-md-8">--}}
                {{--<!-- <h3 class="page-header">Demo:</h3> -->--}}
                {{--<div class="img-container">--}}
                    {{--<img id="image" src="/panel/assets/images/logo/logo.png" alt="Picture" >--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-4">--}}
                {{--<!-- <h3 class="page-header">Preview:</h3> -->--}}
                {{--<div class="docs-preview clearfix">--}}
                    {{--<div class="img-preview preview-lg"></div>--}}
                {{--</div>--}}


            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-8 docs-buttons">--}}
                {{--<!-- <h3 class="page-header">Toolbar:</h3> -->--}}

                {{--<!--ZOOM -->--}}
                {{--<div class="btn-group">--}}
                    {{--<button type="button" class="btn btn-primary" data-method="zoom" data-option="0.1" title="Zoom In">--}}
                        {{--<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, 0.1)">--}}
                          {{--<span class="fa fa-search-plus"></span>--}}
                        {{--</span>--}}
                    {{--</button>--}}
                    {{--<button type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1" title="Zoom Out">--}}
                        {{--<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, -0.1)">--}}
                          {{--<span class="fa fa-search-minus"></span>--}}
                        {{--</span>--}}
                    {{--</button>--}}
                {{--</div>--}}
                {{--<!--FLIP & RESET-->--}}
                {{--<div class="btn-group">--}}
                    {{--<button type="button" class="btn btn-primary" data-method="scaleX" data-option="-1" title="Flip Horizontal">--}}
                        {{--<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;scaleX&quot;, -1)">--}}
                          {{--<span class="fa fa-arrows-h"></span>--}}
                        {{--</span>--}}
                    {{--</button>--}}
                    {{--<button type="button" class="btn btn-primary" data-method="reset" title="Reset">--}}
                        {{--<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;reset&quot;)">--}}
                          {{--<span class="fa fa-refresh"></span>--}}
                        {{--</span>--}}
                    {{--</button>--}}
                {{--</div>--}}

                {{--<!-- Upload & Get-->--}}
                {{--<div class="btn-group btn-group-crop">--}}
                    {{--<label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">--}}
                                        {{--<input type="file" class="sr-only" id="inputImage" name="file" accept="image/*">--}}
                                            {{--<span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs">--}}
                                              {{--<span class="fa fa-upload"></span>--}}
                                            {{--</span>--}}
                    {{--</label>--}}
                    {{--<button type="button" class="btn btn-primary" data-method="getCroppedCanvas">--}}
                        {{--<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;)">--}}
                          {{--Προβολή--}}
                        {{--</span>--}}
                    {{--</button>--}}

                {{--</div>--}}

                {{--<!-- Show the cropped image in modal -->--}}
                {{--<div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getclickCroppedCanvasTitle" role="dialog" tabindex="-1">--}}
                    {{--<div class="modal-dialog">--}}
                        {{--<div class="modal-content">--}}
                            {{--<div class="modal-header">--}}
                                {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>--}}
                                {{--<h4 class="modal-title" id="getCroppedCanvasTitle">Cropped</h4>--}}
                            {{--</div>--}}
                            {{--<div class="modal-body"></div>--}}
                            {{--<div class="modal-footer">--}}
                                {{--<button type="button" class="btn btn-default" data-dismiss="modal">Άκυρο</button>--}}
                                {{--<a class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.jpg">Ανέβασμα</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div><!-- /.modal -->--}}



            {{--</div><!-- /.docs-buttons -->--}}

            {{--<div class="col-md-4 docs-toggles">--}}
                {{--<!-- <h3 class="page-header">Toggles:</h3> -->--}}
                {{--<div class="btn-group btn-group-justified" data-toggle="buttons">--}}
                    {{--<label class="btn btn-primary ">--}}
                        {{--<input type="radio" class="sr-only" id="aspectRatio0" name="aspectRatio" value="1.7777777777777777">--}}
                             {{--<span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 16 / 9">--}}
                                {{--16:9--}}
                           {{--</span>--}}
                    {{--</label>--}}
                    {{--<label class="btn btn-primary">--}}
                        {{--<input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio" value="1.3333333333333333">--}}
                             {{--<span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 4 / 3">--}}
                                    {{--4:3--}}
                            {{--</span>--}}
                    {{--</label>--}}
                    {{--<label class="btn btn-primary active">--}}
                        {{--<input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio" value="1.5">--}}
                            {{--<span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 15 / 10">--}}
                                  {{--15:10--}}
                            {{--</span>--}}
                    {{--</label>--}}
                    {{--<label class="btn btn-primary">--}}
                        {{--<input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio" value="NaN">--}}
                            {{--<span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: NaN">--}}
                                  {{--Free--}}
                             {{--</span>--}}
                    {{--</label>--}}
                {{--</div>--}}


            {{--</div><!-- /.docs-toggles -->--}}
        {{--</div>--}}
    </div>
    <!-- Content  ΟΚ  simple upload-->
    <div class="row  old">

        <div class="upper-texts">
            <h3 class="">Φωτογραφίες Δημόσιου Προφίλ</h3>
            <form id='myform' method="POST" action="/panel/school/profile/images/upload" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="file"  class="hidden" id="files" name="images[]" onchange="document.getElementById('myform').submit()" multiple/>
                <label for="files" class="btn btn-green"> <i class="fa fa-upload info info"  aria-hidden="true"></i> Ανέβασμα Φωτογραφίας</label>   <!--fa-cloud-upload  -->
            </form>

            <p class="text"> Για να ενεργοποιήστε το slideshow φωτογραφιών στο δημόσιο προφίλ σας θα πρέπει να ανεβάσετε τουλάχιστον 4  φωτογραφίες.
                Στη συνέχεια με ένα κλικ επιλέγετε τη βασική φωτογραφία που θα εμφανίζεται το προφίλ σας στις αναζητήσεις.</p>
            <div class="row">
        </div>

                    @foreach($images as $image)
                        <div class="photo-container">
                            <span class="  col-lg-4 col-sm-6 col-xs-6 span-cont">
                            <div class="">
                                @if(auth()->user()->info->background == $image->id)
                                    <div class="selectedImg out-div" style="padding-right: 8px;">
                                        <div class="grow pic">
                                            <img id="img{{$image->id}}" class="" src="{{substr($image->full_path, 0, 4) == 'http' ? '' : '/images/schools/'}}{{$image->full_path}}" onclick="background(this, {{ $image->id }})"
                                                    {{--onmouseover="hov({{$image->id}})"--}}
                                            />
                                        </div>
                                    </div>
                                @else
                                    <div class="out-div">
                                        <div class="grow pic" style="opacity: 0.;">
                                            <img id="img{{$image->id}}" class="" src="{{substr($image->full_path, 0, 4) == 'http' ? '' : '/images/schools/'}}{{$image->full_path}}" onclick="background(this, {{ $image->id }})"
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
@endsection

@section('scripts')
    {{--<script src="/panel/assets/js/cropper.min.js"></script>--}}
    {{--<script src="/panel/assets/js/mainCrop.js"></script>--}}

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>



    <script>
        window.axios.defaults.headers.common = {
            'X-CSRF-TOKEN': Scholio.csrfToken,
            'X-Requested-With': 'XMLHttpRequest'
        };

    function background(vm, img){
        axios.post('/api/image/background/save', {image: img})
          .then(function (response) {
            console.log(response.data);
            if(response.data == 'OK'){
                uncheckAll();
                vm.className = 'selectedImg';
                console.log('LEME');
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
        // $("span").hover(
        //         function () {
        //             $('button').addClass('btn-vis');
        //         },
        //         function () {
        //             $('button').removeClass('btn-vis');
        //         }
        // );

//        function hov(el){
//            console.log(el);
//            var g = "#bt-" + el;
//            document.getElementById(g).addClass('btn-vis');

            // el.style.hidden = false;
//        }


    </script>
@endsection
