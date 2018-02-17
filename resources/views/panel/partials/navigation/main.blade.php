<style>
    .unverified{margin-top: 20px; font-size: 90%; color: #ccc4a7; text-align: center;}
</style>

<div class="left side-menu"  style="position: fixed;">
    <div class="user-details">
        @if(auth()->user()->role != 'admin')
            <div class="pull-left">
            @if(auth()->user()->role == 'school')
                <img src="{{ Auth::user()->info->logo }}" alt="" class="thumb-md" style="margin-top: 5px">
            @else
                <img src="{{substr(Auth::user()->info->avatar, 0, 4) == 'http' ? '' : ''}}{{ Auth::user()->info->avatar }}" alt="" class="thumb-md" style="margin-top: 5px">
            @endif
            </div>
        @endif
        <div class="user-info">
            <div class="">
                    <span class="" style="font-weight: 100; font-size: 95%; color: #fff;">
                        {{ auth()->user()->name }}
                    </span>

            </div>
        </div>


    </div>

    @if(auth()->user()->role == 'school' && auth()->user()->status == 'guest')
        <div class="unverified" style="margin-top: 40px; font-size: 90%; color: #ccc4a7; text-align: center;" data-toggle="modal" data-target="#ModalUnverified">
            <i class="fa fa-exclamation-circle m-r-5"></i>
            Ανεπιβεβαίωτος Λογαριασμός
        </div>
     @endif
        <!--- Divider -->

        <div id="sidebar-menu">
            <ul>
                @if(Auth::user()->role == 'school')
                    @include('panel.partials.navigation.links-schools')
                @endif

                @if(Auth::user()->role == 'admin')
                    @include('panel.partials.navigation.links-admin')
                @endif

                @if(Auth::user()->role == 'student')
                    @include('panel.partials.navigation.links-students')
                @endif

                @if(Auth::user()->role == 'teacher')
                    @include('panel.partials.navigation.links-teachers')
                @endif

                @if(Auth::user()->role == 'parent')
                    @include('panel.partials.navigation.links-parents')
                @endif
            </ul>
        </div>
</div>


<!-- ====== Modal Υποτροφίας =======-->
<div id="ModalUnverified" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none; top: 100px;">
    <div class="modal-dialog" style="width: 600px; ">
        <div class="modal-content" style="padding: 0; border: none; border-radius: 5px;">

            <div class="panel " style="background-color: #324c5a; height: 100px; border-bottom-left-radius: 0; border-bottom-right-radius: 0;">
                <div class="panel-heading" style="height: 55px; color: #fff">
                    <button type="button" class="btn pull-right" data-dismiss="modal" style="background-color: transparent" >
                        x

                    </button>
                    <img src="/new/img/logoNX-light-m.png" alt="scholio logo" class="pull-left" height="80px">
                    <div style="margin: 30px 0 0 70px; font-size: 130%"> Ανεπιβεβαίωτος Λογαριασμός</div>
                    <h3 class="pull-left panel-title" style="margin: 8px 0 0 15px;"></h3>
                </div>

            </div>
            <div class="panel-body" style="min-height: 110px;">

                <div style="text-align: justify"> Ακολουθήστε το σύνδεσμο επιβεβαίωσης που σας έχει αποσταλεί στο email σας κατά την εγγραφή σας, ώστε να αποκτήσετε πλήρη δικαίωματα δημόσιας προβολής και αναζήτησης του εκπαιδευτικού σας φορέα.  </div>
            </div>

            <div class="modal-footer" style="padding: 20px;">
                <button type="button" class="btn btn-default" data-dismiss="modal">Κλείσιμο</button>
            </div>
        </div>
    </div>
</div>
<!-- modal -->
