@extends('panel.layouts.main')

@section('styles')
    <!-- Polymer Float Form CSS -->
    <link rel="stylesheet" href="/new/css/jquery.polymer-form.min.css" >
    <link rel="stylesheet" href="/new/css/cv.css" type="text/css"  >


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
    .card-box{min-height: 1200px}
    .text{font-size: 14px; font-weight: 400; color: #999;}

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

    .clear-fix{clear: both }

    .img-container{text-align: center;}
    .members{margin-top: 20px}
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





    @media (min-width: 1900px){
        .col-xl-4{width: 33.33%}
        .col-xl-6{width: 50%}
        .hidden-xl{display: none;}
        .col-xl-line{border-bottom: 1px solid #aaa; margin-top: -6px; width: 100%;}
        .members{margin-top: 0}
        .family{margin-top: 5px;}
        .inner-section{min-height: 260px;}


    }

    @media (max-width: 1899px){
        .hidden-low{display: none;}
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

    }
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





@endsection


@section('content')
    <div class="row hidden" id="full">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <form method="POST" action="/panel/student/cv" accept-charset="UTF-8" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        {{-- CHANGE CV'S PHOTO  --}}
                       <div class="col-xs-12 img-container" >
                            <h4 class="header-title"><b>Επεξεργασία Βιογραφικού</b></h4>
                            <p class="text">
                                    Συμπληρώστε τα στοιχεία επικοινωνίας σας και του βιογραφικού σας, <br class="br1"> για να διευκολυνθούν οι αιτήσεις υποτροφιών που θα πραγματοποιείσετε.
                            </p>
                            <div class="row">
                                    <div>
                                        <img class="img-avatar" src="{{substr(auth()->user()->info->avatar, 0, 4) == 'http' ? '' : ''}}{{ auth()->user()->info->avatar }}" >
                                    </div>


                                    <div id="changePhoto" class="btn btn-primary btn-choose">
                                        <label for="cvPhoto" class="label"> <i class="fa fa-upload mar-right-10"></i>Επιλογή φωτογραφίας προφίλ</label>
                                        <input type="file" id="cvPhoto" class="form-control" name="logo" style="visibility:hidden;">
                                    </div>

                            </div>
                       </div>

                        <div id="content" class="hidden">

                            {{-- PROFILE DATA --}}
                            <div class="col-xs-12" >
                                <div class="inner-section row">
                                    <div class="section-text centered-text" style="max-width: 280px;"> Στοιχεία Επικοινωνίας Σπουδαστή</div>

                                    <div class="col-sm-6 col-xl-4">
                                        <div class="input-container">
                                            <input  type="text" label="Όνομα*" name="firstName" class="demo-form ad-input" value="{{ auth()->user()->info->fname }}">
                                            <i class="icon-inp  fa fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 input-container clear-fix-sm col-xl-4" >
                                        <input type="text" label="Επώνυμο*" name="lastName" class="demo-form ad-input" value="{{ auth()->user()->info->lname }}">
                                        <i class="icon-inp fa fa-user"></i>
                                    </div>

                                    <div class="col-sm-6 input-container col-xl-4">
                                        <input type="text" label="Διεύθυνση" name="student_address" class="demo-form ad-input" value="{{ auth()->user()->cv->student_address }}">
                                        <i class="icon-inp fa fa-street-view"></i>
                                    </div>
                                    <div class="col-sm-6 input-container col-xl-4">
                                        <input type="text" label="Πόλη/Περιοχή" name="student_city" class="demo-form ad-input" value="{{ auth()->user()->cv->student_city }}">
                                        <i class="icon-inp fa fa-map-marker"></i>
                                    </div>

                                    <div class="col-sm-6 input-container col-xl-4">
                                        <input type="text" label="Ηλεκτρονικό Tαχυδρομείο/ e-mail" name="email" class="demo-form ad-input" value="{{ auth()->user()->email}}">
                                        <i class="icon-inp fa fa-envelope"></i>
                                    </div>
                                    <div class="col-sm-6 input-container col-xl-4">
                                        {{--<a href="tel:{{ $user->info->phone }}">--}}
                                        <input type="text" label="Τηλέφωνο" name="student_phone" class="demo-form ad-input" value="{{ auth()->user()->cv->student_phone }}">
                                        {{--</a>--}}
                                        <i class="icon-inp fa fa-phone col-xl-4"></i>
                                    </div>

                                    <div class="col-sm-6 input-container col-xl-4">
                                        <input type="text" label="Ημερομηνία Γέννησης" name="dob"  class="demo-form ad-input"  value="{{ auth()->user()->cv->student_dob}}">
                                        <i class="icon-inp fa fa-calendar"></i>
                                    </div>

                                    <div class="col-sm-6 input-container col-gender col-xl-4">
                                        <div class="drop-title">Φύλο*</div>
                                        <div class="select-gender">
                                            <select name="gender" class="select-transparent">
                                                <option value="male"
                                                        @if (auth()->user()->info->gender == 'male' )
                                                        selected
                                                        @endif
                                                >Ανδρας</option>
                                                <option value="female"
                                                        @if (auth()->user()->info->gender == 'female' )
                                                        selected
                                                        @endif
                                                >Γυναίκα</option>

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



                                    <div class="col-sm-6 input-container col-xl-4 members" >
                                        <div class="drop-title">Μέλος Πολύτεκνης Οικογένειας</div>

                                        <div class="select-polyteknos col-xl-4">
                                            <select class="select-transparent">
                                                <option value="YES" {{auth()->user()->cv->student_polyteknos == 'YES' ? 'selected' : ''}}>Ναι</option>
                                                <option value="NO" {{auth()->user()->cv->student_polyteknos == 'NO' ? 'selected' : ''}}>Όχι</option>
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
                                            <div class="section-text centered-text">  <i class="icon-title fa fa-flag"></i> Ξένες Γλώσσες</div>
                                            <div class=" input-container">
                                                <div class="info-text"> Γράψε τις ξένες γλώσσες που μιλάς και σε πιο επίπεδο.</div>
                                                <textarea name="languages" class="notes" placeholder="Αγγλικά - Β1&#13;&#10;Γερμανικά - C2">{{ auth()->user()->cv->languages }}</textarea>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- ============================= -->
                                    <div class="col-md-6 section2-container col-xl-4">
                                        <div class="inner-section" >
                                            <div class="section-text centered-text">   <i class="icon-title fa fa-graduation-cap"></i> Προηγούμενες Σπουδές</div>
                                            <div class=" input-container">
                                                <div class="info-text"> Γράψε μας τις μέχρι τώρα σπουδές σου, τα εκπαιδευτικά ιδρύματα και το έτος αποφοίτησης, όπως φαίνονται στο επόμενο παράδειγμα.</div>
                                                <textarea name="studies" class="notes" placeholder="1. ΜΒΑ in Business Administration / Πανεπιστημιο Μακεδονίας / 2016&#13;&#10;2. Οικονομικά / Αριστοτέλειο Πανεπιστημιο θεσσαλονίκης / 2014&#13;&#10;3. 7ο Λύκειο Θεσσαλονικης / 2009
                                                ">{{ auth()->user()->cv->studies }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    {{--<div class="clearfix hidden-xl"></div>--}}


                                    <div class="col-md-6 section2-container  col-xl-4">
                                        <div class="inner-section" >
                                            <div class="section-text centered-text">   <i class="icon-title fa fa-trophy"></i>Έπαινοι - Διακρίσεις</div>
                                            <div class=" input-container">
                                                <div class="info-text"> Γράψε μας τις μέχρι τώρα διακρίσεις σου στις ξένες γλώσσες, στον αθλητισμό, στη μουσική ή σε προηγούμενες σπουδές σου.</div>
                                                <textarea name="awards" class="notes" placeholder="1. &#13;&#10;2.&#13;&#10;3.
                                                ">{{ auth()->user()->cv->awards }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ============================= -->



                                    <div class="col-md-6 section2-container col-xl-6">
                                        <div class="inner-section" >
                                            <div class="section-text centered-text">   <i class="icon-title fa fa-paint-brush"></i>Ενδιαφέροντα - Ασχολίες</div>
                                            <div class=" input-container">
                                                <div class="info-text"> Γράψε μας τα γενικότερα ενδιαφέροντα και τις ασχολίες σου.<span style="color: transparent">.</span></div>
                                                <textarea name="other_interests" class="notes" placeholder="1.&#13;&#10;2.&#13;&#10;3.
                                                ">{{ auth()->user()->cv->other_interests }}</textarea>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-md-12 section2-container clearfix col-xl-6">
                                        <div class="inner-section" >
                                            <div class="section-text centered-text">   <i class="icon-title fa fa-certificate"></i>Πιστοποιήσεις - Σεμινάρια</div>
                                            <div class=" input-container">
                                                <div class="info-text"> Γράψε μας τις μέχρι τωρα πιστοποιήσεις σου και τα σεμινάρια που έχεις παρακολουθήσει</div>
                                                <textarea name="certifications" class="notes" placeholder="1.&#13;&#10;2.&#13;&#10;3.
                                                ">{{ auth()->user()->cv->certifications }}</textarea>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-xs-12" >
                                        <div class="inner-section row" style="min-height: 100px">
                                            <div class="section-text centered-text ">Μy talent links</div>

                                            <div class="col-sm-6 input-container" >
                                                <input type="text" label="YouTube Channel" name="YouTube " class="demo-form ad-input" value="">
                                                <i class="icon-inp fa fa-youtube"></i>
                                            </div>
                                            <div class="col-sm-6 input-container" >
                                                <input type="text" label="Google Plus Profile Number" name="googleplus" class="demo-form ad-input" value="">
                                                <i class="icon-inp fa fa-google-plus"></i>
                                            </div>

                                            <div class="col-sm-6 input-container" >
                                                <input type="text" label="dribbble nickName" name="dribbble" class="demo-form ad-input" value="">
                                                <i class="icon-inp fa fa-dribbble"></i>
                                            </div>
                                            <div class="col-sm-6 ">
                                                <div class="input-container">
                                                    <input  type="text" label="Pinterest Board" name="Pinterest" class="demo-form ad-input" value="">
                                                    <i class="icon-inp  fa fa-pinterest"></i>
                                                </div>
                                            </div>


                                            <div class="col-sm-6 ">
                                                <div class="input-container">
                                                    <input  type="text" label="Instagram Picture" name="Instagram" class="demo-form ad-input" value="">
                                                    <i class="icon-inp  fa fa-instagram"></i>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 ">
                                                <div class="input-container">
                                                    <input  type="text" label="Instagram Picture" name="Instagram" class="demo-form ad-input" value="">
                                                    <i class="icon-inp  fa fa-instagram"></i>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 ">
                                                <div class="input-container">
                                                    <input  type="text" label="Instagram Picture" name="Instagram" class="demo-form ad-input" value="">
                                                    <i class="icon-inp  fa fa-instagram"></i>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 ">
                                                <div class="input-container">
                                                    <input  type="text" label="Instagram Picture" name="Instagram" class="demo-form ad-input" value="">
                                                    <i class="icon-inp  fa fa-instagram"></i>
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


                                            <div id="talent" class="hidden">

                                                <div class="col-md-12" style=" margin-top: 32px;">
                                                    <div class="pull-left social-board" >
                                                        <iframe src="https://www.youtube.com/embed/?listType=user_uploads&list=apple"  height="300" class="youtube"></iframe>
                                                    </div>
                                                    <div class="pull-left social-board">
                                                        <div class="g-person" data-href="//plus.google.com/u/0/116192191945094336260" data-rel="author" data-width="240" data-layout="portrait"></div>
                                                    </div>
                                                    <div class="pull-left social-board">
                                                        <div data-dribbble-id="rork" ></div>
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



                                        </div>
                                    </div>



                                </div>
                            </div>
                            {{-- SAVE FORM --}}





                            <div class="col-xs-12 text-center m-t-40 centered-text">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-save mar-right-10"></i>Αποθήκευση Στοιχείων
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
    <script async defer src="//assets.pinterest.com/js/pinit.js"></script>
    <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
    <script async defer src="//apis.google.com/js/platform.js"></script>
    <script async defer src="//nadikun.com/code/drbbbl-profile/dp-loader.js" ></script>




@endsection
