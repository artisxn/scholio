@foreach($schools as $school)
<div class="card clear-fix margin-bot-25 card-portal" >

        <div>

                <div class="">
                    <a href="/{{ '@' . $school->admin->username }}">
                        <img id="img0" class="card-photo pull-left" style="background-image:linear-gradient(rgba(206, 255, 255, 0.01), rgba(0, 0, 0, 0.40)), url({{$school->profileImage()}})">
                    </a>
                </div>
                <div class="card-ribbon">
                    <img id="img2" class=" sc-white img-med hidden-lg hidden-xs" src="{{$school->logo}}">
                    <img id="img3" class=" sc-white img-thumb hidden-lg hidden-md hidden-sm " src="{{$school->logo}}">
                </div>
            </div>


        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 col-xl-custom" >
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-bot-15 cardPad" id="card1{{$school->school_id}}">

                <a href="/{{ '@' . $school->admin->username }}" target="_blank">
                <img id="img1"  class=" img-mini pull-left margin-right-10 margin-top-15 hidden-md hidden-sm hidden-xs" src="{{$school->logo}}">
                </a>
                <span class="pull-left">
                    <h5 class="pad-top-10 titleName"> <a href="/{{ '@' . $school->admin->username }}"> {{$school->name()}}</a></h5>
                </span>
            </div>



            <div ng-show="type_id!=1 && type_id!=2">
                <div class="margin-pad" style=""></div>
            </div>
            <hr class="hr-portal" id="card5{{$school->school_id}}" >
        </div>



        <div class="col-lg-7 col-md-10 col-sm-12 col-xs-12 margin-portal" id="card4{{$school->school_id}}" >

            <div class="" >
                <div class="col-lg-7 col-sm-7 col-xs-12 sc-t-grey pad-rl-2"  style="z-index: 4; position relative; ">
                    <span><i class="fa fa-map-marker pull-left pad-top-3 " aria-hidden="true"></i></span> {{--xs-text-incr-85 text-incr-95 --}}
                    <span class="pull-left pad-left-6  ellipsis">{{$school->address}}</span>  {{--xs-text-incr-85 text-incr-95 --}}
                    <br>
                    <div class="hidden-xs pad-top">
                        <span><i class="fa fa-street-view pull-left pad-top-3 " aria-hidden="true"></i></span>
                        <span class="pull-left pad-left-3 ellipsis">{{$school->city}} </span>

                        <br>
                    </div>
                    <div class="pad-top-3 pad-top clearfix"></div>
                    <span><i class="fa fa-phone pull-left pad-top-2 xs-text-incr-85" aria-hidden="true"></i></span>
                    <span class="pull-left pad-left-5">{{$school->phone}}</span>
                    <br>

              </div>


            <div class="col-lg-5 col-sm-5 col-xs-12 sc-t-grey pad-rl-2" >
                   <div class="hidden-xs ">
                                <div class="pad-top-3"></div>
                                <span><i class="fa fa-envelope  pull-left pad-top-2 " aria-hidden="true"></i></span>
                                <span class="pull-left pad-left-3 "> <a class="ellipsis2" href="mailto:{{$school->email()}}">{{$school->admin->email}}</a></span>
                                <br>
                   </div>

                   <div class="pad-top-3 pad-top">
                            <span><i class="fa fa-globe pull-left pad-top-3 xs-text-incr-85" aria-hidden="true"></i></span>
                            <span class="pull-left pad-left-5"> <a class="ellipsis2"  href="http://{{$school->website}}/" target="_blank">{{$school->website}}</a></span>
                  </div>
           </div>

            <div class="hidden-xs" style=" height: 100px; width: 40%; position: absolute; z-index: 2; left: 20px; bottom: -26px;"></div>



      <div class="col-lg-2  col-md-1 col-sm-5 col-xs-12 margin-top-15 card-buttons text-incr-85">
          <div class="hidden-xs but-pad">
              <a href="">
                  <button type="button" class="sc-button3 sc-dark-green sc-t-white pull-right margin-top-70">
                      <i class="fa fa-link pad-right-15" aria-hidden="true"></i>@lang('schools.cards.request')</button>
                        </a>
                    </div>

                    <div class="hidden-lg hidden-md hidden-sm  centered-text margin-top-30">
                        <a href="">
                            <button type="button" class="sc-button3 sc-dark-green sc-t-white ">
                                <i class="fa fa-link pad-right-10" aria-hidden="true"></i> Σύνδεση</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endforeach