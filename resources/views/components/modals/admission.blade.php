{{-- <link href="/new/css/jquery.polymer-form.min.css" rel="stylesheet">
<script src="/new/js/jquery.polymer-form.min.js"></script>




<style>
    .upper-box{background-color: #008DA5; height: 120px; border-radius: 4px; border-bottom-left-radius: 0; border-bottom-right-radius: 0}
    .outer{ padding: 25px; margin-top:15px;}
    .title-to{ font-size: 140%; color: #fafafa; font-weight: 300; margin: 35px 0 0 10px;}
    /*.inner-box{ background-color: #F1F4F5; border: 1px solid #ddd; border-radius: 26px; height: 500px; margin-top: 15px;*/
     /*box-shadow: -5px 0  4px #fff, 0 -5px  4px #fff, 5px 0 4px #fff;*/
        /*border-bottom-left-radius:17px; border-bottom-right-radius:17px;*/
    /*}*/
    .inner-section{ margin: 80px 0 0 0; padding: 5px; border: 1px solid #aaa; border-radius: 8px; background-color: #F1F4F5; min-height: 270px;}
    .input-cont{ border: none ; background: transparent; border-bottom: 1px solid #888; border-radius: 0!important; padding-bottom: -10px!important;}
    .text-labels{ font-weight: 300; color: #888;  padding: 20px; font-size: 110%;  letter-spacing: 1px;}
    .in-cont{ width: 200px; margin-left: auto; margin-right: auto;}

    .demo-form{ margin: 0!important; font-weight: 300!important;}
    .polymer-form label {color: #008DA5!important; font-size:110%!important; font-weight: 300!important; display: block!important; padding-bottom: -40px!important; margin-left: 11px; }
    .ad-input{font-size: 100%!important; padding-left: 20px!important;}
    .icon-inp{position: absolute; top: 30px; color: #008DA5}
    .section-text{color: #888; font-size: 110%; font-weight: 300; margin-left: 10px; margin-top: -25px;;
        border: 1px solid #aaa; border-radius: 6px; padding: 7px; min-width: 190px; max-width: 250px; background-color: #fafafa;
    box-shadow: 0 0 9px #aaa}


    @media  (max-width: 767px) {
        .icon-inp{top: 5px;}
        .input-container{margin-bottom: 40px; margin-top: 10px;}
        .outer{ padding: 15px;}
    }
    @media  (max-width: 600px) {
        .icon-inp{top: 5px;}
        .outer{ padding: 5px;}
    }
</style>



<div style="min-height: 900px">
    <div class="upper-box" >
        <div class="col-xs-12 outer">
            <div class="title-to">
                <img src="/new/img/trophy-fff.png" style="height: 45px; margin: -35px 10px 0 -10px" alt="">
                Αίτηση υποτροφίας προς <span> {{ $scholarship->school->name() }}</span></div>
            <div class="inner-box">
                <div class="inner-section">
                    {{--<div class="col-sm-3 text-labels">--}}
                        {{--Όνομα--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-9">--}}
                        {{--<input type="text" class="input-cont">--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-3 text-labels clear-fix">--}}
                       {{--Επώνυμο--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-9">--}}
                        {{--<input type="text" class="input-cont">--}}
                    {{--</div>--}}

                    <div class="section-text centered-text"> Στοιχεία Σπουδαστή</div>
                    <div class="col-sm-6 input-container">
                        <input type="text" label="Όνομα" name="firstName" class="demo-form ad-input">
                        <i class="icon-inp fa fa-user-o"></i>
                    </div>
                    <div class="col-sm-6 input-container">
                        <input type="text" label="Επώνυμο" name="lastName" class="demo-form ad-input">
                        <i class="icon-inp fa fa-user"></i>
                    </div>
                    <div class="col-sm-6 input-container">
                        <input type="text" label="Διεύθυνση" name="address" class="demo-form ad-input">
                        <i class="icon-inp fa fa-street-view"></i>
                    </div>
                    <div class="col-sm-6 input-container">
                        <input type="text" label="Πόλη/Περιοχή" name="city" class="demo-form ad-input">
                        <i class="icon-inp fa fa-map-marker"></i>
                    </div>
                    <div class="col-sm-6 input-container">
                        <input type="text" label="Τηλέφωνο" name="phone" class="demo-form ad-input">
                        <i class="icon-inp fa fa-phone"></i>
                    </div>
                    <div class="col-sm-6 input-container">
                        <input type="text" label="Ημερομηνία Γέννησης" name="birthOfDate" class="demo-form ad-input">
                        <i class="icon-inp fa fa-calendar"></i>
                    </div>

                </div>

                <div class="inner-section">
                    <div class="section-text centered-text"> Στοιχεία Γονέων-Κηδεμόνων</div>
                    <div class="col-sm-6 input-container">
                        <input  type="text" label="Όνοματεπώνυμο Μητέρας" name="mothersName" class="demo-form ad-input">
                        <i class="icon-inp fa fa-user-o"></i>
                    </div>
                    <div class="col-sm-6 input-container">
                        <input type="text" label="Τηλέφωνο Μητέρας" name="mothersPhone" class="demo-form ad-input">
                        <i class="icon-inp fa fa-phone"></i>
                    </div>

                    <div class="col-sm-6 input-container">
                        <input  type="text" label="Όνοματεπώνυμο Πατέρα" name="fathersName" class="demo-form ad-input">
                        <i class="icon-inp fa fa-user-o"></i>
                    </div>
                    <div class="col-sm-6 input-container">
                        <input type="text" label="Τηλέφωνο Πατέρα" name="fathersPhone" class="demo-form ad-input">
                        <i class="icon-inp fa fa-phone"></i>
                    </div>

                    <div class="col-sm-6 input-container">
                        <input type="text" label="Διεύθυνση" name="nothersAddress" class="demo-form ad-input">
                        <i class="icon-inp fa fa-street-view"></i>
                    </div>
                    <div class="col-sm-6 input-container">
                        <input type="text" label="Πόλη/Περιοχή" name="mothersCity" class="demo-form ad-input">
                        <i class="icon-inp fa fa-map-marker"></i>
                    </div>



                </div>
            </div>

        </div>
    </div>

</div>






<script>
    $(document).ready(function(){
        $(".demo-form").polymerForm({
            bar_height: "1px",
            active_color:'#008DA5',
            label_color:'#008DA5',
            base_color:'#bbb',
            origin:'left',
            margin_top: '25px',
            margin_bottom: '20px'

        });
    });
</script>
 --}}
