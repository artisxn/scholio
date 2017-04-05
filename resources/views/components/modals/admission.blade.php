
<style>
    .upper-box{background-color: #008DA5; height: 160px; border-radius: 4px; border-bottom-left-radius: 0; border-bottom-right-radius: 0}
    .outer{ padding: 40px;}
    .title-to{ font-size: 140%; color: #fafafa; font-weight: 300; margin: 35px 0 0 10px;}
    .inner-box{ background-color: #F1F4F5; border: 1px solid #ddd; border-radius: 26px; height: 500px; margin-top: 15px;
     box-shadow: -5px 0  4px #fff, 0 -5px  4px #fff, 5px 0 4px #fff;
        border-bottom-left-radius:17px; border-bottom-right-radius:17px;
    }
    .input-cont{ border: none ; background: transparent; border-bottom: 1px solid #888; border-radius: 0!important; padding-bottom: -10px!important;}
    .text-labels{ font-weight: 300; color: #888;  padding: 20px; font-size: 110%;  letter-spacing: 1px;}

</style>


<div style="height: 700px">
    <div class="upper-box" >
        <div class="col-xs-12 outer">
            <div class="title-to">
                <img src="/new/img/trophy-fff.png" style="height: 45px; margin: -35px 10px 0 -10px" alt="">
                Αίτηση υποτροφίας προς <span> {{ $scholarship->school->name() }}</span></div>
            <div class="inner-box">
                <div style="margin-top: 30px">
                    <div class="col-sm-3 text-labels">
                        Όνομα
                    </div>
                    <div class="col-sm-9">
                        <input type="text" class="input-cont">
                    </div>
                    <div class="col-sm-3 text-labels clear-fix">
                       Επώνυμο
                    </div>
                    <div class="col-sm-9">
                        <input type="text" class="input-cont">
                    </div>

                </div>

            </div>

        </div>
    </div>


</div>