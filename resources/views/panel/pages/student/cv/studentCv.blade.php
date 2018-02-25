@extends('panel.layouts.main')

@section('styles')
    <!-- Polymer Float Form CSS -->
    <link rel="stylesheet" href="/new/css/jquery.polymer-form.min.css" >
    <link rel="stylesheet" href="/new/css/cv.css" type="text/css"  >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">

    <!-- <link rel="stylesheet" href="/css/croppie.css"> -->


<style>

    /* ======  avoid filled autocomplete input yellow background on chrome ============ */
    input:-webkit-autofill,
    input:-webkit-autofill:hover,
    input:-webkit-autofill:focus,
    input:-webkit-autofill:active{
        -webkit-box-shadow: 0 0 0 30px #F1F4F5 inset;
        -webkit-text-fill-color: #555;
    }
    /* =========================================================== */



    /*#content{display: none;}*/
    .header-title{font-size: 140%}
    .card-box{min-height: 1200px}
    .text{font-size: 14px; font-weight: 400; color: #999;}
    .title-text{max-width: 580px; text-align: center; margin-left: auto; margin-right: auto;}
    select:hover{cursor: pointer}

    .img-avatar{height:100px; margin: 5px 110px; box-shadow: 0 0 10px 2px #555; border-radius: 6px;}
    .btn-choose{ height: 40px!important; padding: 11px 0!important; clear: both; margin: 20px 50px; width: 270px;}
    .btn-primary{background-color: #008da5; border: none;}
    .btn-primary:hover{background-color: #006d7d;}
    label{cursor: pointer; font-size: 102%!important; font-weight: 300!important; }
    .select-gender{ margin: 5px 0 0 5px;}
    .select-transparent{background: transparent; border: none; margin-top: -1px;}
    .col-gender{border-bottom: 1px solid #aaa; padding: 0 14px; height: 56px;}
    .mar-right-10{margin-right: 10px;}
    .section-text{color: #008DA5; font-weight: 400; font-size: 110%}
    .inner-section{min-height: 365px;}

    .info-text{color: #008DA5; font-style: oblique;}



    .clear-fix{clear: both }

    .img-container{text-align: center;}
    /*.members{margin-top: 20px}*/
    .family{margin-top: -60px}

    .social-board{display: inline-block; margin-right: 20px;!important; margin-top: 10px;}
    .youtube{width: 600px;}
    .Embed .Caption {display: none;}

    /* ==================   Dribbble  ========================================= */
    #dribbble-profile #dp-right-shot{display: none!important;}
    #dribbble-profile{width: 200px!important; }

    /* ================== Pinterest   ========================================= */


    /* ================== Instagram   ========================================= */
    .instagram-media{float: left; display: inline; margin-right: 20px!important;}



    @media (min-width: 768px) and (max-width: 1899px){
        .select-icon{top: 333px; left: 9px;}

    }



    @media (min-width: 1900px){
        .col-xl-4{width: 33.33%}
        .col-xl-6{width: 50%}
        .hidden-xl{display: none;}
        .col-xl-line{border-bottom: 1px solid #aaa; margin-top: -6px; width: 100%;}
        .members{margin-top: 0}
        .family{margin-top: 5px;}
        .inner-section{min-height: 360px;}
        .inner1{min-height: 300px;}


    }

    @media (max-width: 1899px){
        .hidden-low{display: none;}
        .sx-clear-fix{float: none;}
    }

    @media (max-width: 543px){
    .br1{display: none;}
    }
    @media (max-width: 1200px){
        .btn-choose{text-align: center; margin: 20px auto;}
        .inner-section{min-height: 390px;}

    }
    @media (max-width: 767px){
        .fa-gender{margin-top: 27px}
        .family{margin-top: -10px}
        .members{margin-top: 10px;}
        .youtube{width: 100%}

    }


    /* /////////////////////////////////////////////////////////////////////////////////////////////// */

    /*==== DATE picker jQuery STYLING ====*/

    .ui-widget-header {
        background: #00bcd4;
        color: #fff
    }

    .ui-icon,
    .ui-icon:hover {
        width: 16px;
        height: 16px;
        /*background-color: #00bcd4;*/
    }

    .ui-widget-header .ui-icon {
        background-image: url("/images/ui-icons_ffffff_256x240.png");
    }

    .ui-state-default,
    .ui-widget-content .ui-state-default,
    .ui-widget-header .ui-state-default,
    .ui-button,
    html .ui-button.ui-state-disabled:hover,
    html .ui-button.ui-state-disabled:active {
        border: none;
        background: #f4f4f4;
        /*font-weight: bold;*/
        color: #004276;
    }

    .ui-state-highlight,
    .ui-widget-content .ui-state-highlight,
    .ui-widget-header .ui-state-highlight {
        border: none;
        background: #008da5;
        color: #fff;
    }

    .ui-state-active,
    .ui-widget-content .ui-state-active,
    .ui-widget-header .ui-state-active,
    .ui-button:active,
    .ui-button.ui-state-active:hover {
        background: #00bcd4;
        /*font-weight: bold;*/
        color: #fff;
    }

    .error {
        color: red
    }

    /*===============================*/

    /* /////////////////////////////////////////////////////////////////////////////////////////////// */
</style>

@endsection

@section('scriptsBefore')

    <script>
        $(document).ready(function(){
            $('#full').fadeIn(90).removeClass('hidden');
            $('#content').fadeIn(200).removeClass('hidden');
            $('#talent').fadeIn(3000).removeClass('hidden');
        });
    </script>
    <!-- Polymer Float Input Form js -->
    <script src="/new/js/jquery.polymer-form.min.js"></script>
    <script type="text/javascript" src="/panel/assets/js/cv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
@endsection


@section('content')
    <div class="row hidden" id="full">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <form method="POST" action="{{route('studentCV-save')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{-- CHANGE CV'S PHOTO  --}}
                       <div class="col-xs-12 img-container" >
                            <h4 class="header-title"><b>@lang('panel/students/cv.editCv')</b></h4>
                            <p class="text title-text">
                                @lang('panel/students/cv.titleText')
                            </p>
                            <div class="row">
                                    <div>
                                        <img class="img-avatar" src="{{ auth()->user()->info->avatar }}" >
                                    </div>

                                     @include('panel.partials.body.uploadImage', ['type' => 'avatar', 'text' => 'Επιλογή φωτογραφίας προφίλ'])
                            </div>
                       </div>

                        <div id="content" class="hidden">

                            {{-- PROFILE DATA --}}
                            <div class="col-xs-12" >
                                <div class="inner-section row inner1">
                                    <div class="section-text centered-text" style="max-width: 280px;"> @lang('panel/students/cv.contactInfo')</div>

                                    <div class="col-sm-6 col-xl-4">
                                        <div class="input-container">
                                            <input  type="text" label=" @lang('panel/students/cv.details.firstName') * " name="firstName" class="demo-form ad-input" value="{{ auth()->user()->info->fname }}">
                                            <i class="icon-inp  fa fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 input-container clear-fix-sm col-xl-4" >
                                        <input type="text" label="@lang('panel/students/cv.details.lastName') * " name="lastName" class="demo-form ad-input" value="{{ auth()->user()->info->lname }}">
                                        <i class="icon-inp fa fa-user"></i>
                                    </div>

                                    <div class="col-sm-6 input-container col-xl-4">
                                        <input type="text" label="@lang('panel/students/cv.details.address')" name="student_address" class="demo-form ad-input" value="{{ auth()->user()->cv->student_address }}">
                                        <i class="icon-inp fa fa-street-view"></i>
                                    </div>
                                    <div class="col-sm-6 input-container col-xl-4">
                                        <input type="text" label="@lang('panel/students/cv.details.city')" name="student_city" class="demo-form ad-input" value="{{ auth()->user()->cv->student_city }}">
                                        <i class="icon-inp fa fa-map-marker"></i>
                                    </div>

                                    <div class="col-sm-6 input-container col-xl-4">
                                        <input type="text" label="@lang('panel/students/cv.details.email')" name="email" class="demo-form ad-input" value="{{ auth()->user()->email}}">
                                        <i class="icon-inp fa fa-envelope"></i>
                                    </div>
                                    <div class="col-sm-6 input-container col-xl-4">
                                        {{--<a href="tel:{{ $user->info->phone }}">--}}
                                        <input type="text" label="@lang('panel/students/cv.details.phone')" name="student_phone" class="demo-form ad-input" value="{{ auth()->user()->cv->student_phone }}">
                                        {{--</a>--}}
                                        <i class="icon-inp fa fa-phone col-xl-4"></i>
                                    </div>

                                    <div class="col-sm-6 input-container col-xl-4">
                                    {{--<input type="text" label="Ημερομηνία Γέννησης" name="dob" class="demo-form ad-input"  value="{{ auth()->user()->cv->student_dob}}">--}}
                                        <input class="demo-form ad-input ll-skin-cangas" name="dob" id="datepicker" size="30" value="{{ \Carbon\Carbon::parse(auth()->user()->cv->student_dob)->format('d/m/Y') }}" label="@lang('panel/students/cv.details.dateOfBirth')" name="dob">

                                        <i class="icon-inp fa fa-calendar"></i>
                                    </div>

                                    <div class="col-sm-6 input-container col-gender col-xl-4">
                                        <div class="drop-title">@lang('panel/students/cv.details.gender') *</div>
                                        <div class="select-gender">
                                            <select name="gender" class="select-transparent">
                                                <option value="male"
                                                        @if (auth()->user()->info->gender == 'male' )
                                                        selected
                                                        @endif
                                                >@lang('panel/students/cv.details.male')</option>
                                                <option value="female"
                                                        @if (auth()->user()->info->gender == 'female' )
                                                        selected
                                                        @endif
                                                >@lang('panel/students/cv.details.female')</option>

                                            </select>
                                        </div>
                                        <i class="icon-inp fa fa-user fa-gender"></i>
                                    </div>

                                    {{-- TODO IS THIS NECESSARY? --}}

                                    {{--   @foreach($fields as $field)
                                          @if($field->category->id == 1 && $settings->{$field->slug})
                                              @if($field->slug != 'student_relatives' && $field->slug != 'student_polyteknos' && $field->slug != 'student_phone' && $field->slug != 'student_address' && $field->slug != 'student_city')
                                                  @if($field->slug == 'student_dob')
                                                      <div class="col-sm-6 input-container">
                                                          <input class="demo-form ad-input ll-skin-cangas" id="datepicker" size="30" value="{{ \Carbon\Carbon::parse($user->info->dob)->format('d/m/Y') }}" label="{{ $field->name }}" name="{{ $field->slug }}">
                                                          <i class="icon-inp {{ $field->icon }}"></i>
                                                      </div>
                                                  @else
                                                      <div class="col-sm-6 input-container">
                                                          <input type="text" label="{{ $field->name }}" name="{{ $field->slug }}" class="demo-form ad-input" value="{{ $user->cv->{$field->slug} }}">
                                                          <i class="icon-inp {{ $field->icon }}"></i>
                                                      </div>
                                                  @endif
                                              @endif
                                          @endif
                                      @endforeach --}}



                                    <div class="col-sm-6 input-container col-xl-4 members  sx-clear-fix" >
                                        <div class="drop-title"> @lang('panel/students/cv.details.largeFamily')</div>

                                        <div class="select-polyteknos col-xl-4">
                                            <select class="select-transparent">
                                                <option value="YES" {{auth()->user()->cv->student_polyteknos == 'YES' ? 'selected' : ''}}> @lang('panel/students/cv.yes')</option>
                                                <option value="NO" {{auth()->user()->cv->student_polyteknos == 'NO' ? 'selected' : ''}}> @lang('panel/students/cv.no')</option>
                                            </select>
                                        </div>
                                        <i class="icon-inp fa fa-users select-icon"></i>
                                        <div class="col-xl-line"></div>
                                    </div>


                                    {{--<div class="clearfix hidden-low"></div>--}}

                                    {{--<div class="col-sm-6 col-xl-4 family">--}}
                                        {{--<div class="drop-title">Πόσα μέλη της οικογένειας σου φοιτούν στο Εκπαιδευτικό Ίδρυμα</div>--}}
                                        {{--<div class="select-polyteknos">--}}
                                            {{--<select class="select-transparent">--}}
                                                {{--<option {{auth()->user()->cv->student_relatives == '0' ? 'selected' : ''}}>0</option>--}}
                                                {{--<option {{auth()->user()->cv->student_relatives == '1' ? 'selected' : ''}}>1</option>--}}
                                                {{--<option {{auth()->user()->cv->student_relatives == '2' ? 'selected' : ''}}>2</option>--}}
                                                {{--<option {{auth()->user()->cv->student_relatives == '3' ? 'selected' : ''}}>3</option>--}}
                                                {{--<option {{auth()->user()->cv->student_relatives == '4' ? 'selected' : ''}}>4</option>--}}
                                                {{--<option {{auth()->user()->cv->student_relatives == '5' ? 'selected' : ''}}>5</option>--}}
                                            {{--</select>--}}
                                        {{--</div>--}}

                                        {{--<i class="icon-inp fa fa-users select-icon2"></i>--}}
                                    {{--</div>--}}
                                </div>
                            </div>

                            {{--CV DATA --}}
                            <div class="col-xs-12 ">
                                <div class="row flex-row">
                                    <div class="col-md-6 section2-container col-xl-4">
                                        <div class="inner-section">
                                            <div class="section-text centered-text">  <i class="icon-title fa fa-flag"></i> @lang('panel/students/cv.details.languages')</div>
                                            <div class=" input-container">
                                                <div class="info-text">
                                                    @lang('panel/students/cv.languagesInfo')

                                                    </div>
                                                <textarea name="languages" class="notes" placeholder="Αγγλικά - Β1&#13;&#10;Γερμανικά - C2">{{ auth()->user()->cv->languages }}</textarea>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- ============================= -->
                                    <div class="col-md-6 section2-container col-xl-4">
                                        <div class="inner-section" >
                                            <div class="section-text centered-text">   <i class="icon-title fa fa-graduation-cap"></i>
                                                @lang('panel/students/cv.details.studies')
                                                </div>
                                            <div class=" input-container">
                                                <div class="info-text">  @lang('panel/students/cv.studiesInfo')</div>
                                                <textarea name="studies" class="notes" placeholder="1. ΜΒΑ in Business Administration / Πανεπιστημιο Μακεδονίας / 2016&#13;&#10;2. Οικονομικά / Αριστοτέλειο Πανεπιστημιο θεσσαλονίκης / 2014&#13;&#10;3. 7ο Λύκειο Θεσσαλονικης / 2009
                                                ">{{ auth()->user()->cv->studies }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    {{--<div class="clearfix hidden-xl"></div>--}}


                                    <div class="col-md-6 section2-container  col-xl-4">
                                        <div class="inner-section" >
                                            <div class="section-text centered-text">   <i class="icon-title fa fa-trophy"></i>@lang('panel/students/cv.details.awards') </div>
                                            <div class=" input-container">
                                                <div class="info-text"> @lang('panel/students/cv.awardsInfo') </div>
                                                <textarea name="awards" class="notes" placeholder="1. &#13;&#10;2.&#13;&#10;3.
                                                ">{{ auth()->user()->cv->awards }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ============================= -->



                                    <div class="col-md-6 section2-container col-xl-6">
                                        <div class="inner-section" >
                                            <div class="section-text centered-text">   <i class="icon-title fa fa-paint-brush"></i>@lang('panel/students/cv.details.interests')</div>
                                            <div class=" input-container">
                                                <div class="info-text"> @lang('panel/students/cv.interestsInfo') <span style="color: transparent">.</span></div>
                                                <textarea name="other_interests" class="notes" placeholder="1.&#13;&#10;2.&#13;&#10;3.
                                                ">{{ auth()->user()->cv->other_interests }}</textarea>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-md-12 section2-container clearfix col-xl-6">
                                        <div class="inner-section" >
                                            <div class="section-text centered-text">   <i class="icon-title fa fa-certificate"></i>@lang('panel/students/cv.details.certifications')</div>
                                            <div class=" input-container">
                                                <div class="info-text"> @lang('panel/students/cv.certificationsInfo') </div>
                                                <textarea name="certifications" class="notes" placeholder="1.&#13;&#10;2.&#13;&#10;3.
                                                ">{{ auth()->user()->cv->certifications }}</textarea>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-xs-12" >
                                        <div class="inner-section row" style="min-height: 100px">
                                            <div class="section-text centered-text " style=""> <i class="icon-title fa fa-music"></i>
                                                @lang('panel/students/cv.details.talents')</div>

                                            <div class="info-text"> @lang('panel/students/cv.talentsInfo') </div>

                                            <div class="col-sm-6 input-container">
                                                <input type="text" label="YouTube Channel" name="youtube" class="demo-form ad-input" value="{{ auth()->user()->sociallinks->where('name', 'youtube')->first()->link ?? '' }}">
                                                <i class="icon-inp fa fa-youtube"></i>
                                            </div>
                                            <div class="col-sm-6 input-container">
                                                <input type="text" label="Google Plus" name="google" class="demo-form ad-input" value="{{ auth()->user()->sociallinks->where('name', 'google')->first()->lin ?? '' }}">
                                                <i class="icon-inp fa fa-google-plus"></i>
                                            </div>

                                            <div class="col-sm-6 input-container">
                                                <input type="text" label="dribbble" name="dribbble" class="demo-form ad-input" value="{{ auth()->user()->sociallinks->where('name', 'dribbble')->first()->link ?? '' }}">
                                                <i class="icon-inp fa fa-dribbble"></i>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-container">
                                                    <input  type="text" label="Pinterest" name="pinterest" class="demo-form ad-input" value="{{ auth()->user()->sociallinks->where('name', 'pinterest')->first()->link ?? '' }}">
                                                    <i class="icon-inp  fa fa-pinterest"></i>
                                                </div>
                                            </div>


                                            <div class="col-sm-6">
                                                <div class="input-container">
                                                    <input  type="text" label="Instagram" name="instagram" class="demo-form ad-input" value="{{ auth()->user()->sociallinks->where('name', 'instagram')->first()->link ?? '' }}">
                                                    <i class="icon-inp  fa fa-instagram"></i>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-container">
                                                    <input  type="text" label="Facebook" name="facebook" class="demo-form ad-input" value="{{ auth()->user()->sociallinks->where('name', 'facebook')->first()->link ?? '' }}">
                                                    <i class="icon-inp  fa fa-facebook"></i>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-container">
                                                    <input  type="text" label="Twitter" name="twitter" class="demo-form ad-input" value="{{ auth()->user()->sociallinks->where('name', 'twitter')->first()->link ?? '' }}">
                                                    <i class="icon-inp  fa fa-twitter"></i>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 ">
                                                <div class="input-container">
                                                    <input  type="text" label="LinkedIn" name="linkedin" class="demo-form ad-input" value="{{ auth()->user()->sociallinks->where('name', 'linkedin')->first()->link ?? '' }}">
                                                    <i class="icon-inp  fa fa-linkedin"></i>
                                                </div>
                                            </div>


                                            <div class="clearfix"></div>


                                            {{--<div class="col-md-6" style="margin-top: 30px;">--}}
                                                {{--<a data-pin-do="embedUser"   data-pin-scale-height="255" data-pin-scale-width="80" href="https://gr.pinterest.com/freiderikosk"></a>--}}
                                                {{--<a data-pin-do="embedBoard"   data-pin-board-width="240" data-pin-scale-height="255" data-pin-scale-width="80" style="overflow-y: hidden!important;"--}}
                                                   {{--href="https://gr.pinterest.com/aidscholarship/college-scholarships-tips-and-resources/"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-md-6" style="margin-top: 30px;">--}}
                                                {{--<iframe src="https://www.youtube.com/embed/?listType=user_uploads&list=apple" width="100%" height="365"></iframe>--}}
                                            {{--</div>--}}

<!-- 
                                            <div id="talent" class="hidden">

                                                <div class="col-md-12" style=" margin-top: 32px;">
                                                    <div class="pull-left social-board" >
                                                        <iframe src="https://www.youtube.com/embed/?listType=user_uploads&list=apple"  height="300" class="youtube"></iframe>
                                                    </div>
                                                    <div class="pull-left social-board">
                                                        <div class="g-person" data-href="//plus.google.com/u/0/116192191945094336260" data-rel="author" data-width="240" data-layout="portrait"></div>
                                                    </div>
                                                    <div class="pull-left social-board">
                                                        <a data-pin-do="embedBoard"   data-pin-board-width="240" data-pin-scale-height="190" data-pin-scale-width="80" style=""
                                                           href="https://gr.pinterest.com/aidscholarship/college-scholarships-tips-and-resources/"></a>
                                                    </div>
                                                </div>


                                                <div class="col-md-12" style="margin-top: 30px;">
                                                    <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="4">
                                                        <a href="https://instagram.com/p/BeZ3zIEHNb_/"></a>
                                                    </blockquote>
                                                    <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="4">
                                                        <a href="https://instagram.com/p/Bc9vdzVAEaD/"></a>
                                                    </blockquote>
                                                </div>

                                                {{--<div class="clearfix"></div>--}}


                                            </div>
 -->

                                        </div>
                                    </div>



                                </div>
                            </div>
                            {{-- SAVE FORM --}}





                            <div class="col-xs-12 text-center m-t-40 centered-text">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-save mar-right-10"></i>
                                    @lang('panel/students/cv.saveChanges')
                                </button>
                            </div>


                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')


    <script>
        $("#datepicker").datepicker({
            dateFormat: "dd/mm/yy"
        });
    </script>


    <script async defer src="//assets.pinterest.com/js/pinit.js"></script>
    <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
    <script async defer src="//apis.google.com/js/platform.js"></script>
    <!-- <script async defer src="//nadikun.com/code/drbbbl-profile/dp-loader.js" ></script> -->




@endsection
