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
                            <h4 class="header-title"><b>Επεξεργασία Στοιχείων Γονέων Και Κηδεμόνων</b></h4>
                            <p class="text-muted m-b-10 font-13">
                                Συμπληρώστε τα στοιχεία των γονέων και κηδεμόνων σας <br class="br1"> για να πραγματοποιείσετε αιτήσεις υποτροφιών πιο εύκολα.
                            </p>
                                    
                        </div>

                        <div class="col-xs-12">
                            <div class="row inner-section">
                                <div class="section-text centered-text"> Στοιχεία Γονέων και Κηδεμόνων</div>
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="Ονοματεπώνυμο Μητέρας" name="mother_fullname" class="demo-form ad-input" value="{{ auth()->user()->cv->mother_fullname }}">
                                    <i class="icon-inp fa fa-user-o"></i>
                                </div>
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="Tαυτότητα Μητέρας" name="mother_id_number" class="demo-form ad-input" value="{{ auth()->user()->cv->mother_id_number }}">
                                    <i class="icon-inp fa fa fa-user-o"></i>
                                </div>
                            
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="Τηλέφωνο Μητέρας" name="mother_phone" class="demo-form ad-input" value="{{ auth()->user()->cv->mother_phone }}">
                                    <i class="icon-inp fa fa-phone"></i>
                                </div>
                                <div class="col-sm-6 input-container">
                                    <input  type="email" label="Email Μητέρας" name="mother_email" class="demo-form ad-input" value="{{ auth()->user()->cv->mother_email }}">
                                    <i class="icon-inp fa fa-envelope"></i>
                                </div>
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="Διεύθυνση,Πόλη Μητέρας" name="mother_address" class="demo-form ad-input" value="{{ auth()->user()->cv->mother_address }}">
                                    <i class="icon-inp fa fa-address-book"></i>
                                </div>
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="ΤΚ Μητέρας" name="mother_tk" class="demo-form ad-input" value="{{ auth()->user()->cv->mother_tk }}">
                                    <i class="icon-inp fa fa-address-book"></i>
                                </div>
                                 <div class="col-sm-6 input-container">
                                    <input  type="text" label="Επάγγελμα Μητέρας" name="mother_job" class="demo-form ad-input" value="{{ auth()->user()->cv->mother_job }}">
                                    <i class="icon-inp fa fa-building"></i>
                                </div>
                                 <div class="col-sm-6 input-container">
                                    <input  type="text" label="ΑΦΜ Μητέρας" name="mother_afm" class="demo-form ad-input" value="{{ auth()->user()->cv->mother_afm }}">
                                    <i class="icon-inp fa fa-info"></i>
                                </div>
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="Εισόδημα Μητέρας" name="mother_income" class="demo-form ad-input" value="{{ auth()->user()->cv->mother_income }}">
                                    <i class="icon-inp fa fa-eur"></i>
                                </div>

                                <div class="clearfix"></div>
                                <div class="gap"></div>

                                {{--  Father's Details --}}
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="Ονοματεπώνυμο Πατέρα" name="father_fullname" class="demo-form ad-input" value="{{ auth()->user()->cv->father_fullname }}">
                                    <i class="icon-inp fa fa-user-o"></i>
                                </div>
                                 <div class="col-sm-6 input-container">
                                    <input  type="text" label="Tαυτότητα Πατέρα" name="father_id_number" class="demo-form ad-input" value="{{ auth()->user()->cv->father_id_number }}">
                                    <i class="icon-inp fa fa fa-user-o"></i>
                                </div>
                            
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="Τηλέφωνο Πατέρα" name="father_phone" class="demo-form ad-input" value="{{ auth()->user()->cv->father_phone }}">
                                    <i class="icon-inp fa fa-phone"></i>
                                </div>
                                <div class="col-sm-6 input-container">
                                    <input  type="email" label="Email Πατέρα" name="father_email" class="demo-form ad-input" value="{{ auth()->user()->cv->father_email }}">
                                    <i class="icon-inp fa fa-envelope"></i>
                                </div>
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="Διεύθυνση,Πόλη Πατέρα" name="father_address" class="demo-form ad-input" value="{{ auth()->user()->cv->father_address }}">
                                    <i class="icon-inp fa fa-address-book"></i>
                                </div>
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="ΤΚ Πατέρα" name="father_tk" class="demo-form ad-input" value="{{ auth()->user()->cv->father_tk }}">
                                    <i class="icon-inp fa fa-address-book"></i>
                                </div>
                                 <div class="col-sm-6 input-container">
                                    <input  type="text" label="Επάγγελμα Πατέρα" name="father_job" class="demo-form ad-input" value="{{ auth()->user()->cv->father_job }}">
                                    <i class="icon-inp fa fa-building"></i>
                                </div>
                                 <div class="col-sm-6 input-container">
                                    <input  type="text" label="ΑΦΜ Πατέρα" name="father_afm" class="demo-form ad-input" value="{{ auth()->user()->cv->father_afm }}">
                                    <i class="icon-inp fa fa-info"></i>
                                </div>
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="Εισόδημα Πατέρα" name="father_income" class="demo-form ad-input" value="{{ auth()->user()->cv->father_income }}">
                                    <i class="icon-inp fa fa-eur"></i>
                                </div>

                                <div class="clearfix"></div>
                                <div class="gap"></div>
                               {{--  Guardian's Details --}}
                     
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="Ονοματεπώνυμο Κηδεμόνα" name="guardian_fullname" class="demo-form ad-input" value="{{ auth()->user()->cv->guardian_fullname }}">
                                    <i class="icon-inp fa fa-user-o"></i>
                                </div>
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="Tαυτότητα Κηδεμόνα" name="guardian_id_number" class="demo-form ad-input" value="{{ auth()->user()->cv->guardian_id_number }}">
                                    <i class="icon-inp fa fa fa-user-o"></i>
                                </div>
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="Τηλέφωνο Κηδεμόνα" name="guardian_phone" class="demo-form ad-input" value="{{ auth()->user()->cv->guardian_phone }}">
                                    <i class="icon-inp fa fa-phone"></i>
                                </div>
                                <div class="col-sm-6 input-container">
                                    <input  type="email" label="Email Κηδεμόνα" name="guardian_email" class="demo-form ad-input" value="{{ auth()->user()->cv->guardian_email }}">
                                    <i class="icon-inp fa fa-envelope"></i>
                                </div>
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="Διεύθυνση,Πόλη Κηδεμόνα" name="guardian_address" class="demo-form ad-input" value="{{ auth()->user()->cv->guardian_address }}">
                                    <i class="icon-inp fa fa-address-book"></i>
                                </div>
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="ΤΚ Κηδεμόνα" name="guardian_tk" class="demo-form ad-input" value="{{ auth()->user()->cv->guardian_tk }}">
                                    <i class="icon-inp fa fa-address-book"></i>
                                </div>
                                 <div class="col-sm-6 input-container">
                                    <input  type="text" label="Επάγγελμα Κηδεμόνα" name="guardian_job" class="demo-form ad-input" value="{{ auth()->user()->cv->guardian_job }}">
                                    <i class="icon-inp fa fa-building"></i>
                                </div>
                                 <div class="col-sm-6 input-container">
                                    <input  type="text" label="ΑΦΜ Κηδεμόνα" name="guardian_afm" class="demo-form ad-input" value="{{ auth()->user()->cv->guardian_afm }}">
                                    <i class="icon-inp fa fa-info"></i>
                                </div>
                                <div class="col-sm-6 input-container">
                                    <input  type="text" label="Εισόδημα Κηδεμόνα" name="guardian_income" class="demo-form ad-input" value="{{ auth()->user()->cv->guardian_income }}">
                                    <i class="icon-inp fa fa-eur"></i>
                                </div>

                            </div>
                            
                        </div>
                         {{-- SAVE FORM --}}


                            <div class="col-xs-12 text-center m-t-40 centered-text">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-save mar-right-10"></i>Αποθήκευση Στοιχείων
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
