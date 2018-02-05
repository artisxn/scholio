@extends('panel.layouts.main')

@section('styles')
<style>
    .scholar-limit,.scholar-count{font-size: 110%; margin: 10px 0;}
    .scholar-count{ margin: 15px 0 20px 0 ;}
    .inactive{
        background-color: #f5f5f5; filter: grayscale(0.6);
    }
    .active{
        background-color: #fdfdfd;
    }

    .outer{border: 1px solid #aaa; border-radius: 5px; margin-bottom: 20px; box-shadow: 0 0 8px 2px #ccc;}
    .request-card,.card-bottom{ padding: 12px;  color: #888 }
    .request-card{ border-top-left-radius: 5px; border-top-right-radius: 5px;  min-height: 350px; }
    .school-logo{ float: left; margin-right: 7px; width: 45px;}
    .school-name{font-size: 120%; float: right; margin-top: 2px; clear: right!important; width: calc(100% - 60px);}
    .line{height: 1px; background-color: #aaa;   position: absolute; top: 65px; left: 22px; right: 22px;}

    .level{font-size: 115%; margin: 32px 0 6px 7px;}
    .studies-container{margin: 20px 0 0 0; min-height: 60px;}
    .studies-img{margin: 6px 0 0 0 ;}

    .financial-container{}
    .criteria-container{margin: 30px 0 40px 0;}
    .financial-img,.criteria-img,.studies-img{ opacity: 0.9; filter: grayscale(0.4); height: 28px; margin-left: auto; margin-right: auto; text-align: center; display: block;}
    .img-container{width: 45px; float: left;   margin-right: 6px;}


    .card-bottom{border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;  background-color: #eee; height: 70px; color: #a5a5a5}
    .ended{color: #008da5}

    .feedback-icon{font-size: 150%; margin-top: 10px;}
    .feedback-icon:hover{cursor: pointer; color: #FD6A33 }

    /* ========== Modal ============== */

    .modal-sc-logo{margin-top: -4px; height: 60px;}
    .modal-content{padding: 0!important; border: none; border-radius: 5px!important;}
    .btn-close{background-color: transparent}
    .btn-close:hover{color: #FD6A33;}
    .panel-body{ min-height: 300px}
    .modal-footer{padding: 15px!important;}


    /* ================================ */


    @media(min-width: 1430px){
        .col-xl-4{width: 33.33%}
    }
    @media(min-width: 1925px){
        .col-xl-4{width: 25%}
    }
    @media(min-width: 2420px){
        .col-xl-4{width: 20%}
    }

    @media(max-width: 920px){
        .school-logo{height: 40px; margin-right: 5px;}
        .school-name{font-size: 106%; }
    }

    @media (min-width: 768px) and (max-width: 840px) , (min-width: 991px) and (max-width: 1080px) {
        .school-logo{display: none;}
        .request-card{font-size: 95%}
        .level{font-size: 99%}

    }
</style>
@endsection

@section('content')
    <div class="scholar-limit"> <i class="fa fa-trophy m-r-10"></i>Έχεις ακόμη {{ auth()->user()->info->admissions_limit }} διαθέσιμες αιτήσεις υποτροφιών.</div>
    <div class="scholar-count"> <i class="fa fa-pencil-square-o m-r-10"></i>Έχεις πραγματοποιήσει {{ count($admissions) }} αιτήματα.</div>

    <div class="row">

        @foreach($admissions as $admission)
            <?php $as =  $admission->scholarship ?>
            <div class=" col-sm-6 col-xl-4">
                <a href="/scholarship/{{ $admission->scholarship_id }}" target="_blank">
                    <div class="outer">
                        <div class="request-card {{ $as->active ? 'active' : 'inactive' }}" >


                            <img class="school-logo" src="{{ $admission->scholarship->school->logo}}">
                            {{--<div>{{ $admission->scholarship->school->type->name}}</div>--}}
                            <div class="school-name ">{{ $admission->scholarship->school->admin->name }}</div>
                            <div class="clearfix"></div>

                            <div class="line"></div>



                            <div class="studies-container">
                                <div class="level">{{ $as->study->section[0]->level->name ?? $admission->scholarship->multipleStudies[0]->section[0]->level->name }}</div>
                               <span class="img-container">
                                   <img  id="img{{ $admission->scholarship_id }}" class="studies-img" src="{{ $as->study->section[0]->icon ?? '/panel/assets/images/steps/studies.png' }}">
                               </span>
                                {{--{{ $as->study->section[0]->name ?? 'POLLAPLI section' }} --}}
                                <span id="{{ $admission->scholarship_id }}" class="studyName">{{ $as->study->name ?? 'Πολλαπλές Σπουδές' }}</span>
                            </div>


                            <div class="criteria-container">
                                 <span class="img-container">
                                    <img class="criteria-img" src="{{ $as->criteria->icon }}">
                                 </span>
                                {{ $as->criteria->name }}
                            </div>

                            <div class="financial-container">
                                 <span class="img-container">
                                    <img class="financial-img" src="/panel/assets/images/steps/{{ $as->financial->icon }}">
                                 </span>
                                <span>{{ $as->financial->plan }} {{ $as->financial_amount}}{{$as->financial->metric }}</span>
                            </div>

                        </div>
                </a>
                        <div class="card-bottom">

                            @if($as->criteria->id==1 && $admission->review)
                                <span class="pull-right feedback-icon" data-toggle="modal" data-target="#feedback-modal-{{ $admission->id }}" >
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </span>
                            @endif

                            <div style="width: 270px">
                                <div style="margin: 0 0 8px 0"> <i class="fa fa-pencil-square-o" style="margin-right: 9px"></i>
                                    <span class="">Δέχθηκε {{ $as->usersLength() }}</span> αιτήσεις συνολικά



                                </div>
                                @if($as->active)
                                    <?php
                                    if(request()->cookie('lang') && request()->cookie('lang') == 'el'){
                                        Carbon\Carbon::setLocale('el');
                                    }
                                    $end = Carbon\Carbon::createFromFormat('Y-m-d', $admission->scholarship->end_at);
                                    $endDiff = ($end->diff(new Carbon\Carbon())->days < 1) ? 'today' : $end->diffForHumans(new Carbon\Carbon());
                                    ?>
                                    <div> <i class="fa fa-flag" style="margin-right: 13px"></i>Λήγει <span class="">{{$endDiff}} </span></div>
                                @else
                                    <div class="ended"> <i class="fa fa-flag" style="margin-right: 13px"></i>Έληξε: {{ $as->winner->contains(auth()->user()->id) ? 'Είσαι Επιλαχών Νικήτης' : 'Δεν επιλέχθηκες ως νικητής' }}</div>
                                @endif
                            </div>

                        </div>
                    </div>




            </div>

            <!-- ====== feedback Modal  ======= -->
            <div id="feedback-modal-{{$admission->id}}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="top: 100px;">
                <div class="modal-dialog">
                    <div class="modal-content">
            
                        <div class="panel " style="background-color: #324c5a; height:90px; border-bottom-right-radius: 0; border-bottom-left-radius: 0; padding: 10px">
                            <div class="panel-heading" style=" color: #fff">
                                <button type="button" class="btn pull-right btn-close" data-dismiss="modal">
                                    x
                                </button>
                                <img src="/new/img/logoNX-light.png" alt="scholio logo" class="pull-left modal-sc-logo">
                            </div>
            
                        </div>
                        <div class="panel-body">
                            {{ $admission->review }}
                        </div>
            
            
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Κλείσιμο</button>
                        </div>
            
                    </div>
                </div>
            </div>
            <!-- /.modal -->
        @endforeach

    </div>



@endsection

@section('scripts')
    <script>
    @foreach($admissions as $admission)
        $( "#{{ $admission->scholarship_id }}" ).ready(
                function test(event) {
                    var heightOfDiv = $( "#{{ $admission->scholarship_id }}" ).height();
                    console.log(heightOfDiv)


                    if (heightOfDiv <20){
                        $("#img{{ $admission->scholarship_id }}").css({
                             marginTop:"-3px"
                        });}
                }
        )
        @endforeach
    </script>
@endsection
