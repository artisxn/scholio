@extends('panel.layouts.main')

@section('styles')
    {{-- <link href="/panel/assets/css/form.css" rel="stylesheet" type="text/css" /> --}}
    <!-- Polymer Float Form CSS -->
    <link rel="stylesheet" href="/new/css/jquery.polymer-form.min.css" >
    <link rel="stylesheet" href="/new/css/cv.css" type="text/css"  >


@endsection

@section('scriptsBefore')
    <!-- Polymer Float Input Form js -->
    <script src="/new/js/jquery.polymer-form.min.js"></script>
    <script type="text/javascript" src="/panel/assets/js/cv.js"></script>
   
@endsection

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                
                    <div class="row">
                    <form method="POST" action="/panel/student/cv" accept-charset="UTF-8" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        {{-- CHANGE CV'S PHOTO  --}}
                       <div class="col-xs-12" >                                    
                            <h4 class="header-title"><b>Επεξεργασία Βιογραφικού</b></h4>
                            <p class="text-muted m-b-10 font-13">
                                    Complete your profile .. ... .BLA BLA BLA
                            </p>
                            <div class="row">
                                <div class="col-xs-3">         {{-- TODO AVATAR IS DIFFERENT FROM PHOTO --}}

                                     <img src="{{substr(auth()->user()->info->avatar, 0, 4) == 'http' ? '' : '/images/schools/'}}{{ auth()->user()->info->avatar }}" height="100px">

                                </div>
                                <div class="col-xs-7" id="changePhoto">
                                    <label for="cvPhoto"> Αλλάξτε την φωτογραφία του βιογραφικού σας</label>
                                    <input type="file" id="cvPhoto" class="form-control" name="logo">
                                </div>
                            </div>                                   
                                
                        </div>
                        {{-- PROFILE DATA --}}
                        <div class="col-xs-12" >
                             <div class="inner-section row">
                                <div class="section-text centered-text"> Στοιχεία Επικοινωνίας</div>

                                <div class="col-sm-6">
                                  
                                    <div class="input-container">
                                        <input  type="text" label="Όνομα*" name="firstName" class="demo-form ad-input" value="{{ auth()->user()->name }}">
                                        <i class="icon-inp  fa fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-sm-6 input-container clear-fix-sm" >
                                    <input type="text" label="Επώνυμο*" name="lastName" class="demo-form ad-input" >
                                    <i class="icon-inp fa fa-user"></i>
                                </div>

                                <div class="col-sm-6 input-container">
                                    <input type="text" label="Διεύθυνση" name="student_address" class="demo-form ad-input" value="{{ auth()->user()->info->address }}">
                                    <i class="icon-inp fa fa-street-view"></i>
                                </div>
                                <div class="col-sm-6 input-container">
                                    <input type="text" label="Πόλη/Περιοχή" name="student_city" class="demo-form ad-input" value="{{ auth()->user()->info->city }}">
                                    <i class="icon-inp fa fa-map-marker"></i>
                                </div>

                                <div class="col-sm-6 input-container">
                                    <input type="text" label="Ηλεκτρονικό Tαχυδρομείο/ e-mail" name="email" class="demo-form ad-input" value="{{ auth()->user()->email}}">
                                    <i class="icon-inp fa fa-envelope"></i>
                                </div>
                                <div class="col-sm-6 input-container">
                                    {{--<a href="tel:{{ $user->info->phone }}">--}}
                                    <input type="text" label="Τηλέφωνο" name="student_phone" class="demo-form ad-input" value="{{ auth()->user()->info->phone }}">
                                    {{--</a>--}}
                                    <i class="icon-inp fa fa-phone"></i>
                                </div>
                                
                                <div class="col-sm-6 input-container">
                                    <input type="text" label="Ημερομηνία Γέννησης" name="dob"  class="demo-form ad-input"  value="{{ auth()->user()->info->dob}}">
                                    <i class="icon-inp fa fa-calendar"></i>

                                </div>

                               <div class="col-sm-6 input-container">
                                    <div class="drop-title">Φύλο*</div>
                                    <div class="select-gender">
                                        <select name="gender">
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


                                <div class="clearfix"></div>
                                <div class="col-sm-6 input-container">
                                    <div class="drop-title">Μέλος Πολύτεκνης Οικογένειας</div>

                                    <div class="select-polyteknos">
                                        <select>
                                            <option>Ναι</option>
                                            <option>Όχι</option>
                                        </select>
                                    </div>

                                    <i class="icon-inp fa fa-users select-icon"></i>
                                </div>

                                <div class="col-sm-6 ">
                                    <div class="drop-title">Πόσα μέλη της οικογένειας σου φοιτούν στο Εκπαιδευτικό Ίδρυμα</div>
                                    <div class="select-polyteknos">
                                        <select>
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>

                                    <i class="icon-inp fa fa-users select-icon2"></i>
                                </div>
                            </div>
                        </div>

                        {{--CV DATA --}}
                        <div class="col-xs-12">
                            <div class="row flex-row">
                                <div class="col-md-6 section2-container ">
                                    <div class="inner-section">
                                        <div class="section-text centered-text">   <i class="icon-title fa fa-wrench"></i> Ικανότητες - Δεξιότητες</div>
                                        <div class="input-container">
                                        <div class="info-text"> Γράψε μας τις ικανοτητες και τις δεξιότητες που διαθέτεις.</div>
                                            <textarea class="notes">{{ auth()->user()->cv->skills }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 section2-container ">
                                    <div class="inner-section">
                                        <div class="section-text centered-text">  <i class="icon-title fa fa-flag"></i> Ξένες Γλώσσες</div>
                                        <div class=" input-container">
                                        <div class="info-text"> Γράψε μας γιατί θεωρείς τον εαυτό σου κατάλληλο/κατάλληλη για την συγκεκριμένη υποτροφία.</div>
                                            <textarea name="languages" class="notes" placeholder="Αγγλικά - Β1&#13;&#10;Γερμανικά - C2">{{ auth()->user()->cv->languages }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                
                              
                                <div class="col-md-6 section2-container ">
                                    <div class="inner-section" >
                                        <div class="section-text centered-text">   <i class="icon-title fa fa-graduation-cap"></i> Προηγούμενες Σπουδές</div>
                                        <div class=" input-container">
                                            <div class="info-text"> Γράψε μας τις μέχρι τώρα σπουδές σου, τα εκπαιδευτικά ιδρύματα και το έτος αποφοίτησης, όπως φαίνονται στο επόμενο παράδειγμα.</div>
                                                <textarea name="studies" class="notes" placeholder="1. ΜΒΑ in Business Administration / Πανεπιστημιο Μακεδονίας / 2016&#13;&#10;2. Οικονομικά / Αριστοτέλειο Πανεπιστημιο θεσσαλονίκης / 2014&#13;&#10;3. 7ο Λύκειο Θεσσαλονικης / 2009
                                                ">{{ auth()->user()->cv->studies }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 section2-container ">
                                    <div class="inner-section" >
                                        <div class="section-text centered-text">   <i class="icon-title fa fa-trophy"></i>Έπαινοι - Διακρίσεις</div>
                                        <div class=" input-container">
                                            <div class="info-text"> Γράψε μας τις μέχρι τώρα διακρίσεις σου στις ξένες γλώσσες, στον αθλητισμό, στη μουσική ή σε προηγούμενες σπουδές σου.</div>
                                                <textarea name="awards" class="notes" placeholder="1. &#13;&#10;2.&#13;&#10;3.
                                                ">{{ auth()->user()->cv->awards }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 section2-container ">
                                    <div class="inner-section" >
                                        <div class="section-text centered-text">   <i class="icon-title fa fa-paint-brush"></i>Ενδιαφέροντα - Ασχολίες</div>
                                        <div class=" input-container">
                                            <div class="info-text"> Γράψε μας τα γενικότερα ενδιαφέροντα και τις ασχολίες σου.<br> <span style="color: transparent">.</span></div>
                                                <textarea name="other_interests" class="notes" placeholder="1.&#13;&#10;2.&#13;&#10;3.
                                                ">{{ auth()->user()->cv->other_interests }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 section2-container ">
                                    <div class="inner-section" >
                                        <div class="section-text centered-text">   <i class="icon-title fa fa-certificate"></i>Πιστοποιήσεις - Σεμινάρια</div>
                                        <div class=" input-container">
                                            <div class="info-text"> Γράψε μας τις μέχρι τωρα πιστοποιήσεις σου και τα σεμινάρια που έχεις παρακολουθήσει</div>
                                                <textarea name="certifications" class="notes" placeholder="1.&#13;&#10;2.&#13;&#10;3.
                                                ">{{ auth()->user()->cv->certifications }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                   
                            </div>
                        </div>
                        {{-- SAVE FORM --}}

                        <div class="col-xs-12 text-center m-t-40">
                            <div class="col-xs-5 col-sm-4 centered-text">
                                <button class="btn btn-pink btn-block" type="submit">
                                    Ενημέρωση  Στοιχείων
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
