<style>
    .middle-text{ font-size: 140%; font-weight: 300; margin-top: 0; margin-bottom: 20px;}
    .btn-role{border: 1px solid #ccc; height: 140px; padding: 0; border-radius: 6px;}
    .btn-role:hover{ background-color: #eceff0; border: 2px solid #888}
    .role-img,.role-img2,.role-img3,.role-img-cl,.role-img-cl2,.role-img-cl3{width: 90px; margin-top: 15px; position: absolute; top: 10px;}
    .role-img:hover,.role-img2:hover{visibility: hidden}
    .role-img2,.role-img-cl2{ width: 88px; margin-top: 3px}
    .role-img3,.role-img-cl3{ width: 80px; margin-top:0}
    .btn-text{ margin-top: 110px; font-size: 130%; font-weight: 400}
    .colored{opacity: 0.01; }
    .colored:hover, .show{opacity: 1;}

    .btn-next{margin: 30px 0 0 0; width: 160px;}
</style>

    <div class="wrapper-page" style="padding: 5px!important;">

                <div class="panel-heading">
                <div class="text-center">
                    <img src="/new/img/logo-dark-green-144.png" alt="" style="width: 90px;">
                </div>
                    <div class="text-center login-signUp-title">Εγγραφή στο Schol.io</div>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal m-t-20 " method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}

                        <div class="middle-text centered-text"> Επιλέξτε την Ιδιότητα σας</div>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="btn-role centered-text" ng-mouseover="over=true"  ng-mouseleave="over=false" >
                                    <img src="/new/img/student-line.png" class="role-img centered-abs " alt="">
                                    <div class="colored" ng-class="{show: over}">
                                        <img src="/new/img/student.png" class="role-img-cl centered-abs " alt="">
                                        <div class="btn-text">Μαθητής</div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-4">
                                <div class="btn-role centered-text" ng-mouseover="over2=true"  ng-mouseleave="over2=false" >
                                    <img src="/new/img/parent-line.png" class="role-img2 centered-abs " alt="">
                                    <div class="colored" ng-class="{show: over2}">
                                        <img src="/new/img/parent.png" class="role-img-cl2 centered-abs " alt="">
                                        <div class="btn-text">Γονέας</div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-4">
                                <div class="btn-role centered-text" ng-mouseover="over3=true"  ng-mouseleave="over3=false" >
                                        <img src="/new/img/teacher-line.png" class="role-img3 centered-abs " alt="">
                                        <div class="colored" ng-class="{show: over3}">
                                            <img src="/new/img/teacher.png" class="role-img-cl3 centered-abs " alt="">
                                            <div class="btn-text">Καθηγητής</div>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center m-t-40">
                            <div class="col-xs-12">
                                <button class="btn sc-dark-green sc-t-white btn-next" type="submit" onClick="modal2_toggle()">
                                    Συνέχεια
                                    <i class="fa fa-chevron-circle-right" aria-hidden="true" style="margin-left: 15px"></i>
                                </button>
                            </div>
                        </div>


                    </form>
                </div>

        </div>






    <script>

    function modal2_toggle(){
        $('#select-modal').modal('toggle');
        $('#signUp-modal').modal('toggle');
    }

    </script>
