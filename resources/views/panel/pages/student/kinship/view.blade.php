@extends('panel.layouts.main')

@section('styles')
    {{-- <link href="/panel/assets/css/form.css" rel="stylesheet" type="text/css" /> --}}
    <!-- Polymer Float Form CSS -->
    <link rel="stylesheet" href="/new/css/jquery.polymer-form.min.css" >
    <link rel="stylesheet" href="/new/css/cv.css" type="text/css"  >


<style>
    #content{display: none;}
    .section-text{color: #008DA5; font-weight: 400; font-size: 102%}
    .gap{height: 60px;}
    .mar-right-10{margin-right: 10px;}
    .btn-primary{background-color: #008da5;}
    .btn-primary:hover{background-color: #00758c;}
    .titleText{max-width: 380px; margin-right: auto; margin-left: auto; text-align: center;}

    @media (max-width: 543px){
        .br1{display: none;}
    }
    .header{margin-left: auto; margin-right: auto; text-align: center;}
</style>

@endsection

@section('scriptsBefore')

    <!-- Polymer Float Input Form js -->
    <script src="/new/js/jquery.polymer-form.min.js"></script>
    <script type="text/javascript" src="/panel/assets/js/cv.js"></script>
    <script>
        $(document).ready(function(){$("#content").hide().fadeIn(90);});
    </script>

@endsection

@section('content')


   <div class="row" id="content">
        <div class="col-sm-12">
            <div class="card-box">
                
                <div class="row">
                    <form  method="POST" action="/panel/student/kinship" accept-charset="UTF-8" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        {{-- CHANGE CV'S PHOTO  --}}
                        <div class="col-xs-12 header" >
                            <h4 class="header-title"><b>@lang('/panel/students/cv.editParentInfo')</b></h4>
                            <p class="text-muted m-b-10 font-13 titleText">
                                @lang('/panel/students/cv.textParentInfo')
                            </p>
                                    
                        </div>

                        <div class="col-xs-12">
                            <div class="row inner-section">
                                <div class="section-text centered-text">@lang('/panel/students/cv.parentInfo')</div>
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="{{ trans('settings.admissions.mother_fullname') }}" name="mother_fullname" class="demo-form ad-input" value="{{ auth()->user()->cv->mother_fullname }}">
                                    <i class="icon-inp fa fa-user-o"></i>
                                </div>
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="{{ trans('settings.admissions.') }}" name="mother_id_number" class="demo-form ad-input" value="{{ auth()->user()->cv->mother_id_number }}">
                                    <i class="icon-inp fa fa fa-user-o"></i>
                                </div>
                            
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="{{ trans('settings.admissions.mother_phone') }}" name="mother_phone" class="demo-form ad-input" value="{{ auth()->user()->cv->mother_phone }}">
                                    <i class="icon-inp fa fa-phone"></i>
                                </div>
                                <div class="col-sm-6 input-container">
                                    <input  type="email" label="{{ trans('settings.admissions.mother_email') }}" name="mother_email" class="demo-form ad-input" value="{{ auth()->user()->cv->mother_email }}">
                                    <i class="icon-inp fa fa-envelope"></i>
                                </div>
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="{{ trans('settings.admissions.mother_address') }}" name="mother_address" class="demo-form ad-input" value="{{ auth()->user()->cv->mother_address }}">
                                    <i class="icon-inp fa fa-address-book"></i>
                                </div>
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="{{ trans('settings.admissions.mother_tk') }}" name="mother_tk" class="demo-form ad-input" value="{{ auth()->user()->cv->mother_tk }}">
                                    <i class="icon-inp fa fa-address-book"></i>
                                </div>
                                 <div class="col-sm-6 input-container">
                                    <input  type="text" label="{{ trans('settings.admissions.mother_job') }}" name="mother_job" class="demo-form ad-input" value="{{ auth()->user()->cv->mother_job }}">
                                    <i class="icon-inp fa fa-building"></i>
                                </div>
                                 <div class="col-sm-6 input-container">
                                    <input  type="text" label="{{ trans('settings.admissions.mother_afm') }}" name="mother_afm" class="demo-form ad-input" value="{{ auth()->user()->cv->mother_afm }}">
                                    <i class="icon-inp fa fa-info"></i>
                                </div>
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="{{ trans('settings.admissions.mother_income') }}" name="mother_income" class="demo-form ad-input" value="{{ auth()->user()->cv->mother_income }}">
                                    <i class="icon-inp fa fa-eur"></i>
                                </div>

                                <div class="clearfix"></div>
                                <div class="gap"></div>

                                {{--  Father's Details --}}
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="{{ trans('settings.admissions.mother_income') }}" name="father_fullname" class="demo-form ad-input" value="{{ auth()->user()->cv->father_fullname }}">
                                    <i class="icon-inp fa fa-user-o"></i>
                                </div>
                                 <div class="col-sm-6 input-container">
                                    <input  type="text" label="{{ trans('settings.admissions.mother_income') }}" name="father_id_number" class="demo-form ad-input" value="{{ auth()->user()->cv->father_id_number }}">
                                    <i class="icon-inp fa fa fa-user-o"></i>
                                </div>
                            
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="{{ trans('settings.admissions.father_phone') }}" name="father_phone" class="demo-form ad-input" value="{{ auth()->user()->cv->father_phone }}">
                                    <i class="icon-inp fa fa-phone"></i>
                                </div>
                                <div class="col-sm-6 input-container">
                                    <input  type="email" label="{{ trans('settings.admissions.father_email') }}" name="father_email" class="demo-form ad-input" value="{{ auth()->user()->cv->father_email }}">
                                    <i class="icon-inp fa fa-envelope"></i>
                                </div>
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="{{ trans('settings.admissions.father_address') }}" name="father_address" class="demo-form ad-input" value="{{ auth()->user()->cv->father_address }}">
                                    <i class="icon-inp fa fa-address-book"></i>
                                </div>
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="{{ trans('settings.admissions.father_tk') }}" name="father_tk" class="demo-form ad-input" value="{{ auth()->user()->cv->father_tk }}">
                                    <i class="icon-inp fa fa-address-book"></i>
                                </div>
                                 <div class="col-sm-6 input-container">
                                    <input  type="text" label="{{ trans('settings.admissions.father_job') }}" name="father_job" class="demo-form ad-input" value="{{ auth()->user()->cv->father_job }}">
                                    <i class="icon-inp fa fa-building"></i>
                                </div>
                                 <div class="col-sm-6 input-container">
                                    <input  type="text" label="{{ trans('settings.admissions.father_afm') }}" name="father_afm" class="demo-form ad-input" value="{{ auth()->user()->cv->father_afm }}">
                                    <i class="icon-inp fa fa-info"></i>
                                </div>
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="{{ trans('settings.admissions.father_income') }}" name="father_income" class="demo-form ad-input" value="{{ auth()->user()->cv->father_income }}">
                                    <i class="icon-inp fa fa-eur"></i>
                                </div>

                                <div class="clearfix"></div>
                                <div class="gap"></div>
                               {{--  Guardian's Details --}}
                     
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="{{ trans('settings.admissions.guardian_fullname') }}" name="guardian_fullname" class="demo-form ad-input" value="{{ auth()->user()->cv->guardian_fullname }}">
                                    <i class="icon-inp fa fa-user-o"></i>
                                </div>
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="{{ trans('settings.admissions.guardian_id_number') }}" name="guardian_id_number" class="demo-form ad-input" value="{{ auth()->user()->cv->guardian_id_number }}">
                                    <i class="icon-inp fa fa fa-user-o"></i>
                                </div>
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="{{ trans('settings.admissions.guardian_phone') }}" name="guardian_phone" class="demo-form ad-input" value="{{ auth()->user()->cv->guardian_phone }}">
                                    <i class="icon-inp fa fa-phone"></i>
                                </div>
                                <div class="col-sm-6 input-container">
                                    <input  type="email" label="{{ trans('settings.admissions.guardian_email') }}" name="guardian_email" class="demo-form ad-input" value="{{ auth()->user()->cv->guardian_email }}">
                                    <i class="icon-inp fa fa-envelope"></i>
                                </div>
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="{{ trans('settings.admissions.guardian_address') }}" name="guardian_address" class="demo-form ad-input" value="{{ auth()->user()->cv->guardian_address }}">
                                    <i class="icon-inp fa fa-address-book"></i>
                                </div>
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="{{ trans('settings.admissions.guardian_tk') }}" name="guardian_tk" class="demo-form ad-input" value="{{ auth()->user()->cv->guardian_tk }}">
                                    <i class="icon-inp fa fa-address-book"></i>
                                </div>
                                 <div class="col-sm-6 input-container">
                                    <input  type="text" label="{{ trans('settings.admissions.guardian_job') }}" name="guardian_job" class="demo-form ad-input" value="{{ auth()->user()->cv->guardian_job }}">
                                    <i class="icon-inp fa fa-building"></i>
                                </div>
                                 <div class="col-sm-6 input-container">
                                    <input  type="text" label="{{ trans('settings.admissions.guardian_afm') }}" name="guardian_afm" class="demo-form ad-input" value="{{ auth()->user()->cv->guardian_afm }}">
                                    <i class="icon-inp fa fa-info"></i>
                                </div>
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="{{ trans('settings.admissions.guardian_income') }}" name="guardian_income" class="demo-form ad-input" value="{{ auth()->user()->cv->guardian_income }}">
                                    <i class="icon-inp fa fa-eur"></i>
                                </div>

                            </div>
                            
                        </div>
                         {{-- SAVE FORM --}}


                            <div class="col-xs-12 text-center m-t-40 centered-text">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-save mar-right-10"></i>@lang('/panel/students/cv.saveChanges')
                                </button>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
   
    @if(count($errors) > 0 )
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>

    @endif

{{-- TODO NEEDS CHANGE --}}
    @if(Session::has('updated_profile'))
        <div class="row">
            <p class="alert alert-success col-lg-6"  style="margin: 0 10px">{{session('updated_profile')}}</p>
        </div>
    @endif

@endsection
