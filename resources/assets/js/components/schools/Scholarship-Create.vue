<template>

    <div class="forced  ">

        <!--<div class="topbar" style="  top: 100px; z-index: 1; padding: 0 20px; background: #aaa;">-->
            <!--<div class="topbar-left" style="background: transparent">-->
                <!--<div class="text-center" style="">-->
                     <!--<div role="navigation" class=" " style="">-->
                         <!--<div class="container" style="">-->
                             <!--<div style=" padding-left:140%;  " >-->
                                 <!--test-->
                             <!--</div>-->
                         <!--</div>-->
                     <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
        <div style="position: relative; background: transparent;" class="scholarship-creation">

            <div class="fixed-nav-container" style="">
                <ul class="nav-list">
                    <a class="step-anchor" href="#step1"><li class="step-li"> 1.Κριτήρια</li></a>
                    <a class="step-anchor" href="#step2"><li class="step-li" :class="[{'low-opacity': financial_disabled}]"> 2.Οικονομικά</li></a>
                    <a class="step-anchor" href="#step3" v-show="!financial_disabled"><li class="step-li"  :class="[{'low-opacity': levels_disabled}]"> 3.Σπουδές</li></a>
                    <a class="step-anchor" href="#step4" v-show="!levels_disabled"><li class="step-li"  :class="[{'low-opacity': terms_disabled}]"> 4.Όροι</li></a>
                </ul>
            </div>

            <div class="creation-container">


                <div  id="sc-frame" class="scholar-frame  scholar-frame-fixed" style="">
                    <div class="ribbon-wrapper" v-if="criteria_value && criteria_value.name">
                        <div class="ribbon-front sc-medium-grey">
                    <span class="">

                        <img class="criteria-img" :src="criteria_value.icon" alt="" v-if="">
                    </span>
                            <span class="sc-t-dark-green font-weight-400 scholar-title margin-left-10">{{criteria_value.name}}</span>
                        </div>
                        <div class="ribbon-edge-topright"></div>
                        <div class="ribbon-edge-bottomright"></div>
                        <div class="ribbon-back-right sc-medium-grey"></div>
                    </div>
                    <div class="hexagon hex1" v-if="financial_value && financial_amount > 0">
                        <img v-if="" style="" class="hex1-img" :src="financial_value.icon">
                    </div>
                    <div class="hexagon hex2" v-if="study_value && study_value.length > 0">
                        <img class="hex2-img" :src="study_value[0].icon"  v-if="!multipleSectionsSelected">
                        <img class="hex2-img" src="/panel/assets/images/steps/studies.png"  v-else>
                    </div>

                    <div class="scholar-content  font-weight-400" v-if="financial_value && financial_amount > 0">
                        <p class="">{{ financial_value.name }} {{ financial_amount}} {{ financial_value.metric }}</p>

                        <div style="margin-top: 45px; " v-if="study_value && study_value.length > 0">
                            <div class=""  style="font-size: 102%">{{ level_value.name }}</div>
                            <!--<div class=""  style="font-size: 95%" v-if="!multipleSectionsSelected">{{ study_value[0].section_name }}</div>-->
                            <div class=""  style="font-size: 88%; margin-right: 10px;" :class="[{}]" v-if="study_value.length < 4">
                                <div v-for="st in study_value" style="margin-top: 4px;">
                                    {{ st.name }}
                                    <hr style="margin: 0; padding: 0">
                                </div>

                            </div>
                            <div v-else style="margin-top: 10px; font-size: 88%">Πολλαπλά Αντικείμενα Σπουδών: {{ study_value.length }}</div>
                        </div>

                    </div>
                    <div class="" :class="" v-if="level_value && study_value  && study_value.length>0">
                        <div style="position: absolute; top: 345px; width: 145px" class="font-weight-400 sc-t-grey">
                    <span class="" style=""><i class="fa fa-thumbs-o-up margin-right-5" aria-hidden="true"></i>
                        {{lang('profile.scholarship.interested')}}: <span class="pull-right">0</span>
                    </span>
                        </div>
                        <div style="position: absolute; top: 370px; width: 145px" class="font-weight-400 sc-t-grey">
                    <span class="" style=""> <i class="fa fa-pencil margin-right-5" aria-hidden="true"></i>
                        {{lang('profile.scholarship.requested')}}: <span class="pull-right"> 0</span>
                    </span>
                        </div>
                    </div>

                </div>


                <div class="steps"  style="background: transparent">

                    <div id="step1" class="" style="background: transparent">
                        <div class=" step-box" style=" ">
                            <div class="step-title">Βήμα 1ο: Επιλέξτε Κριτήρια</div>
                            <div class="criteria">
                                <multiselect
                                        v-model="criteria_value"
                                        :options="criteria_options"
                                        track-by="name"
                                        label="name"
                                        :searchable="false"
                                        :close-on-select="true"
                                        :show-labels="false"
                                        placeholder="Επιλέξτε Κριτήρια"
                                        :deselectLabel="lang('panel_studies.input-delete')"
                                        :selectLabel="lang('panel_scholarships.create.select')"
                                        :selectedLabel="lang('panel_scholarships.create.selected')"
                                        :disabled="criteria_disabled"
                                        :custom-label="customLabel">

                                    <!--<template slot="option" scope="props">-->
                                    <template slot="option" slot-scope="props">
                                        <div class="option__desc">
                                            <img :src="props.option.icon" height="15px">
                                            <span class="option__title">{{ props.option.name }}</span>
                                            <span class="option__small" style="float: right; color: #999;">{{ props.option.limit }} διαθέσιμες</span>
                                        </div>
                                    </template>
                                </multiselect>
                            </div>
                            <div class="scholarship-info row" v-if="criteria_value && criteria_value.name">
                        <span class="col-xs-2" style="margin-top: 11px;">
                             <img class="criteria-img-sm img-responsive" :src="criteria_value.icon" alt="">
                        </span>
                        <span class="col-xs-10 col-sm-12 scholar-text">
                                   H <span class="scholarship-name">{{criteria_value.name}}</span> αφορά
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, aut fugiat magni nam placeat praesentium sint!
                        Accusamus aspernatur, at cum dolorem id iste iusto magni minus mollitia nemo placeat quaerat tempore vel! Aliquid culpa earum eligendi maxime non ratione similique?
                        </span>



                            </div>
                        </div>
                    </div>


                    <div id="step2" class="step2 " :class="[{'low-opacity': financial_disabled}]">
                        <div class="step-box">
                            <div class="step-title">Βήμα 2ο: Επιλέξτε Οικονομική Προσφορά</div>
                            <div>
                                <div class="financial-plan">
                                    <multiselect
                                            v-model="financial_value"
                                            :options="financial_options"
                                            track-by="name" label="name"
                                            :searchable="false"
                                            :close-on-select="true"
                                            :show-labels="false"
                                            placeholder="Επιλέξτε Οικονομικό πακέτο"
                                            :deselectLabel="lang('panel_studies.input-delete')"
                                            :selectLabel="lang('panel_scholarships.create.select')"
                                            :selectedLabel="lang('panel_scholarships.create.selected')"
                                            :disabled="financial_disabled">

                                    </multiselect>
                                </div>

                                <div class="financial-amount" v-if="financial_value">
                                    <div class="input-group financial_value_input" v-if="financial_value.id==1">
                                        <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" v-model="financial_amount">
                                        <span class="input-group-addon" id="basic-addon1">%</span>
                                    </div>

                                    <div class="input-group financial_value_input" v-if="financial_value.id==2">
                                        <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon2" v-model="financial_amount">
                                        <span class="input-group-addon" id="basic-addon2">€</span>
                                    </div>

                                    <div class="input-group financial_value_input"  v-if="financial_value.id==3">
                                        <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon3" v-model="financial_amount">
                                        <span class="input-group-addon" id="basic-addon3">{{ lang('panel_scholarships.create.months') }}</span>
                                    </div>



                                </div>


                                <div class="row"   v-if="financial_value && financial_value.id>0">
                            <span class="col-xs-1" style="margin-top: 55px;">
                                <img class=" criteria-img-sm img-responsive" style="width: 70px;"  :src="financial_value.icon" alt="">
                            </span>

                                    <div class="col-xs-11 col-sm-12 financial-text">
                                        <span class="scholarship-name">{{financial_value.name}}</span> αφορά
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Aperiam, aut fugiat magni nam placeat praesentium sint!
                                    </div>
                                </div>




                            </div>
                        </div>

                    </div>

                    <div id="step3" class="step3" :class="[{'low-opacity': levels_disabled}]" v-if="">

                        <div class="step-box">
                        <div class="step-title">Βήμα 3ο: Επιλέξτε Σπουδές</div>
                        <div>
                            <div class="" style="margin: 15px 0 6px 0 ">Επίπεδο Σπουδών</div>
                            <div class="level">
                                <multiselect
                                        v-model="level_value"
                                        :options="level_options"
                                        track-by="name" label="name"
                                        :searchable="false"
                                        :close-on-select="true"
                                        :show-labels="false"
                                        placeholder="Επιλέξτε Επίπεδο Σπουδών"
                                        :deselectLabel="lang('panel_studies.input-delete')"
                                        :selectLabel="lang('panel_scholarships.create.select')"
                                        :selectedLabel="lang('panel_scholarships.create.selected')"
                                        :disabled="levels_disabled"
                                ></multiselect>
                            </div>

                        </div>
                        <div class="study">
                            <div class="" style="margin: 25px 0 6px 0 ">Αντικείμενο Σπουδών</div>
                            <multiselect
                                    v-model="study_value"
                                    :options="study_options"
                                    :multiple="multipleFeature"
                                    group-values="study"
                                    group-label="section"
                                    placeholder="Επιλέξτε Αντικείμενα Σπουδών"
                                    track-by="name"
                                    label="name"
                                    :disabled="studies_disabled"
                                    @remove="allStudies = false">
                                <span slot="noResult">Oops! Δεν βρέθηκε...</span>
                            </multiselect>
                        </div>
                        <div style="margin-top: 15px">
                            Επιλογή όλων των σπουδών <input id="checkBox" type="checkbox" v-model="allStudies">
                            <button @click="study_value = []; allStudies=false" v-if="study_value && study_value.length > 2" style="margin: 0 15px;">Διαγραφή Όλων</button>
                        </div>
                        </div>



                    </div>

                </div>


            </div>

            <div id="step4" class="step4" :class="[{'low-opacity': terms_disabled}]" v-if="">
                <div>
                    <div class="step-title">Βήμα 4ο: Περιγράψτε τους Όρους Συμμετοχής</div>
                    <div class="row">
                        <!--<h3>{{ lang('panel_scholarships.create.terms') }}</h3>-->

                        <div class="col-sm-6" >
                            <div style="" class="pull-left"> {{ lang('panel_scholarships.create.winners') }}</div>
                            <div style="width: 240px; margin: 25px 0 0 0;">
                                <input type="number" name="winners" min=1 max=20 v-model="winners" :disabled="allWinners" v-if="!allWinners">
                                <input type="checkbox" v-model="allWinners">Πολλαπλοί Νικητές
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div style="" class="pull-left"> {{ lang('panel_scholarships.create.active') }}: </div>
                            <div class="clearfix" ></div>
                            <!--v-on:click="errorDate" :class="{'error': error}"-->
                            <input type="text" id="datepicker" size="30" class="ll-skin-cangas pull-left"
                                   style="margin-top: 5px; height: 35px; border: 1px solid #d2d2d2; border-radius: 3px;"
                                   v-bind:value="end_at" onchange="Event.$emit('datePick', event.target.value)"
                                   :class="{'error':error}">
                        </div>

                        <div class=" col-sm-6">
                            <div class="funkyradio" style="width: 240px; margin: 8px 0 0 0;">
                                <div class="funkyradio-success">
                                    <input type="checkbox" id="exams" v-model="exams">
                                    <label for="exams"> {{ lang('panel_scholarships.create.exams') }}</label>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="funkyradio" style="width: 240px; margin: 8px 0 0 0;">
                                <div class="funkyradio-success">
                                    <input type="checkbox" id="withTerms" v-model="withTerms">
                                    <label for="withTerms"> {{ lang('panel_scholarships.create.terms') }}</label>
                                </div>
                            </div>
                        </div>


                        <div id="" v-if="withTerms" style="margin-top: 120px;">
                            <span style="color: transparent">.</span>
                            <tinymce id="editor" v-model="terms" :options="tinyOptions" @change="tinyMCE" :content='content'></tinymce>
                            <div><span>{{ lang('panel_scholarships.create.remaining') }}:</span> <span id="chars_left"></span></div>
                        </div>
                    </div>
                </div>

                <div style="margin: 40px 0">
                    <div>Προσθέστε λέξεις/ετικέτες "κλειδιά" για στοχευμένη αναζήτηση υποτροφίας</div>
                    <multiselect
                            v-model="value"
                            tag-placeholder="Προσθήκη νέας ετικέτας"
                            placeholder="Αναζητήστε ή Προσθέστε ετικέτα"
                            label="name"
                            track-by="code"
                            :options="options"
                            deselectLabel="Αφαίρεση"
                            :selectLabel="lang('panel_scholarships.create.select')"
                            :selectedLabel="lang('panel_scholarships.create.selected')"
                            :multiple="true"
                            :taggable="true"
                            @tag="addTag">
                    </multiselect>
                </div>


                <div>
                    <button @click="saveScholarship()">Δημιουργία Υποτροφίας</button>
                </div>


            </div>


        </div>







    </div>






</template>

<style>




    /* ///////////////////////////////////////////////////////////////////// */


    .step-box{border: 1px solid #ddd; border-radius: 6px; background-color: #fafafa; min-height: 510px; width:8vw; padding: 20px}
    /* ///////////////////////////////////////////////////////////////////// */





    .top-fix{
        background: greenyellow; height: 100px; top: 250px; width: 100%; padding-left: 250px;
    }


    .fixed-nav-container{ z-index: 20!important;
        height: 70px; background-color: #fafafa;
        border-radius:6px;  border: 1px solid #bbb; box-shadow: 0 0 12px 1px #bbb;
        position: fixed!important; top: 70px;
        /*width: -webkit-calc(100% - 260px);*/
        /*width: 78vw;*/
        /*left: 250px;*/
        /*right: 10px;*/
        width: 70%;

    }


    .nav-list{list-style-type: none ;padding: 23px 0}
    .step-li{padding: 0 15px; float: left;}
    .step-anchor,.step-anchor:visited,.step-anchor:focus{color: #888}
    .step-anchor:hover{color: #FD6A33}


    .creation-container{
        position: relative;  margin-top: 10px;
        width: 90%; margin-left: 5%;
    }


    .steps{padding-top: 80px;}
    #step1,#step2,#step3,#step4{
        min-height: 300px; margin-bottom:150px;
        padding-top: 220px; margin-top:-220px;
    }

    #step2,#step3{
        padding-top: 180px; margin-top:-180px;
    }
    .step2,#step3{padding-bottom: 7vh}
    .step-title{font-size: 130%; margin-bottom: 10px;}
    /*.criteria{ max-width: 400px;}*/

    .step3{padding-bottom: 35vh}

    .criteria-img-sm{display: none}

    .financial-plan{width: 300px; z-index: 1; position: absolute;}
    .financial-amount{width: 130px;  }
    .financial-text{max-width: 520px;  padding-top: 1px; padding-bottom: 90px;}

    .financial_value_input{ position: absolute; left: 380px; z-index: 1; width: 150px;}

    .input-group-addon{border: 1px solid #E3E3E3}


    /*.step3{padding-bottom: 530px}*/
    #step2,#step3,#step4,.scholarship-info{
        /*width: -webkit-calc(100% - 430px);*/
    }
    /*#step1,#step2,#step3,#step4,.scholarship-info{ width: -webkit-calc(100% - 430px);}*/

    .low-opacity{opacity: 0.2; cursor: default; pointer-events: none; display: none}
    .low-opacity:hover{color: #888}

    /* ///////////////////////////////////////////////////////////////////////////// */
    /* //////////////////////// Scholarship Profile //////////////////////////////// */

    

    .criteria-img{height: 25px; margin: 7px 0 0 10px;}


    .scholar-frame{
        /*background-image: linear-gradient(#f3f3f3, #fbfbfb);*/
        background-color: #fff;
        min-height: 420px; margin-bottom: 25px; width: 338px; padding-left: 22px;
        border: 1px solid #ebebeb; border-radius: 10px;
        box-shadow: 0 0 12px 1px #bbb;

    }

    .scholar-frame-fixed{
        top: 210px;
        position: fixed;
        right: 70px;
    }
    .scholar-frame-relative{
        position: absolute;
        left: -webkit-calc(100% - 382px);
        top: 2090px;
    }

    /* //////////////////////////////////////////////////////////////////// */
    /* //////////////////////////////////////////////////////////////////// */

    .ribbon-wrapper{ position: absolute; left:-14px; width: 430px;}
    .scholarship-info{width: 100%; max-width: 540px; margin: 20px 0; letter-spacing: 0.2px; word-spacing: 3px;  line-height: 180%; text-align: justify;}
    .scholarship-name{color: #008191; font-weight: 400; }


    .margin-left-10 { margin-left: 10px; }
    .margin-right-5 { margin-right: 5px; }
    .sc-t-dark-green{color: #008da5;}
    .sc-medium-grey{background: #dde5e8;}
    .hex1{top: 90px;  z-index: 0;}
    .hex2{top: 130px; z-index: 0;}
    .hex1-img{z-index: 5; height: 33px; position: absolute; left:0; right:0; margin-left: auto; margin-right: auto; text-align: center;}
    .hex2-img{z-index: 5; height: 38px; position: absolute; left:0; right:0; margin-left: auto; margin-right: auto; text-align: center;}
    .font-weight-400 {font-weight: 400;}


    .scholar-content{position: absolute; left: 90px; top: 110px;}

    .scholar-title{top: 7px; position: absolute}



    /* //////////////////////////////////////////////////////////////////// */

    .step4{width: 90%; margin-left: 5%}

    /* //////////////////////////////////////////////////////////////////// */




    .criteria .multiselect,         .step3 .multiselect{width: 480px;}
    .criteria .multiselect__input,  .step3 .multiselect__input{width: 450px;}
    .criteria .multiselect__single, .step3 .multiselect__single{width: 430px;}

    .study .multiselect{width: 835px}
    .study .multiselect__input{width: 800px}
    .study .multiselect__single{width: 780px}

    .step1 .multiselect,.step2 .multiselect,.step3 .multiselect {z-index: 1}


    /* //////////////////////////////////////////////////////////////////// */

    @media (max-width: 1330px) {

        .financial-plan{width: 290px;}
        .financial-text{max-width:490px; margin-top: 50px; margin-left: -80px}
        .financial_value_input{left: 380px; width: 130px;}

        /*.step1 .multiselect,         .step3 .multiselect{width: 500px;}*/
        /*.step1 .multiselect__input,  .step3 .multiselect__input{width: 460px;}*/
        /*.step1 .multiselect__single, .step3 .multiselect__single{width: 440px;}*/

        .step1 .multiselect,         .level .multiselect{width: 500px;}
        .step1 .multiselect__input,  .level .multiselect__input{width: 460px;}
        .step1 .multiselect__single, .level .multiselect__single{width: 440px;}

    }


    @media (max-width: 1250px) {
        .financial-plan{width: 280px;}
        .financial-text{max-width:460px; margin-left: -65px}
        .financial_value_input{left: 310px;}

        .step1 .multiselect,         .level .multiselect{width: 400px;}
        .step1 .multiselect__input,  .level .multiselect__input{width: 360px;}
        .step1 .multiselect__single, .level .multiselect__single{width: 340px;}

        .study .multiselect{width: 630px}
        .study .multiselect__input{width: 600px}
        .study .multiselect__single{width: 570px}
        .scholar-text{ width: 410px; margin-left: -95px}


    }


    @media (max-width: 1040px) {
        .scholar-frame{  right: 5%; }
        .step1 .multiselect,         .step3 .multiselect{width:10px;}
        .step1 .multiselect__input,  .step3 .multiselect__input{width: 470px;}
        .step1 .multiselect__single, .step3 .multiselect__single{width: 450px;}
    }


    @media (max-width: 990px) {
        .fixed-nav-container{display: none  }
        .steps{padding-top: 0;}
        /*.fixed-nav-container{  left:80px;  width: -webkit-calc(100% - 90px);  }*/
        /*#step1,#step2,#step3,#step4{ width: -webkit-calc(100% - 350px);}*/
        .creation-container{  width: 98%; margin-left: -5px;}
        .scholar-frame{  right: 5.5%; top: 165px }

        .steps,.creation-container,.scholarship-info{ padding-right: 0!important; margin-right: 0!important;}
        .criteria{width: 57%}
        .criteria .multiselect,         .step3 .multiselect{width: 90%}
        .criteria .multiselect__input,  .step3 .multiselect__input{width: 87%;}
        .criteria .multiselect__single, .step3 .multiselect__single{width: 85%;}
        .scholar-text{width: 340px}
        .step-box{width: 88vw}

    }

    @media (max-width: 835px) {
        .steps,.creation-container,.scholarship-info{ padding-right: 0!important; margin-right: 0!important;}
        .step1 .multiselect,         .step3 .multiselect{width: 275px}
        .step1 .multiselect__input,  .step3 .multiselect__input{width: 270px;}
        .step1 .multiselect__single, .step3 .multiselect__single{width: 241px;}
        .scholar-text{width: 285px;}
        .step-box{width: 88.2vw;}
        .scholar-frame{  right: 4.3%;  }


    }

    @media (min-width: 768px) and (max-width: 1040px ) {
        .option__small{display: none!important;}
    }





    @media (max-width: 767px) {
        /*.fixed-nav-container{  left:10px;  width: -webkit-calc(98%);  }*/
        /*#step1,#step2,#step3,#step4{ width: -webkit-calc(100% - 355px);}*/
        /*.scholar-frame{  right: 3.8%;  }*/
        /*#step1,#step2,#step3,#step4,.scholarship-info{ width: 98%; max-width: 900px;}*/
        .scholar-frame{  display: none  }
        .creation-container{  width: 98%; margin-left: 2%;}

        .criteria-img-sm{display: inline; width: 80px;}


        .financial-plan .multiselect{width: 430px;}
        .financial-plan .multiselect__input{width: 400px;}
        .financial-plan .multiselect__single{width: 380px;}
        .financial_value_input{left: 75%}
        .financial-text{width: 80%; max-width: 640px;}

        .step1 .multiselect,         .step3 .multiselect{width: 80vw}
        .step1 .multiselect__input,  .step3 .multiselect__input{width: 75vw;}
        .step1 .multiselect__single, .step3 .multiselect__single{width: 65vw;}
        .scholar-text{margin-left: 2px; width: -webkit-calc(82%)}

    }

    @media (max-width: 560px) {
        .step1 .multiselect,         .step3 .multiselect        {width: 85vw;}
        .step1 .multiselect__input,  .step3 .multiselect__input {width: 380px;}
        .step1 .multiselect__single, .step3 .multiselect__single{width: 360px;}
        .step-box{border: none; background-color: transparent;}

        .col-xs-2, .col-xs-10{width: 100%}
        .col-xs-2{margin-left: 36%; margin-bottom: 10px;}
        .scholar-text{ width: 390px;}
        .step-box{padding-left: 5px;}
        .scholar-text{width: 87vw; margin-left: -18px}
        .step1{ margin-left: auto; margin-right: auto; text-align: center;}



    }
    @media (max-width: 430px) {
        .scholarship-info{width: 385px;}
        .step1 .multiselect,         .step3 .multiselect        {width: 350px;}
        .step1 .multiselect__input,  .step3 .multiselect__input {width: 320px;}
        .step1 .multiselect__single, .step3 .multiselect__single{width: 300px;}
        .option__small{display: none;}
        .col-xs-2{margin-left: 30%;}


    }

    @media (max-width: 380px) {
        .scholarship-info{width: 360px;}
        .step1 .multiselect,         .step2 .multiselect,         .step3 .multiselect        {width: 310px;}
        .step1 .multiselect__input,  .step2 .multiselect__input,  .step3 .multiselect__input {width: 280px;}
        .step1 .multiselect__single, .step2 .multiselect__single, .step3 .multiselect__single{width: 260px;}
        .col-xs-2{margin-left: 24%;}
        .scholar-text{width: 320px; margin-left: -20px}
    }

    @media (max-width: 370px) {
        .step-title{margin-left: 15px;}
        .criteria-img-sm{display: none;}
        .scholarship-info{width: 355px;  padding-right: 10px; padding-left: 0;}
        .step1 .multiselect,         .step2 .multiselect,         .step3 .multiselect        {width: 310px; }
        .step1 .multiselect__input,  .step2 .multiselect__input,  .step3 .multiselect__input {width: 260px;}
        .step1 .multiselect__single, .step2 .multiselect__single, .step3 .multiselect__single{width: 240px;}
        .step1{margin-left: 1px;}
        .scholar-text{width: 96%; margin-left: -35px}

    }

    @media (max-width: 359px) {
        .scholarship-info{width: 317px;  padding-right: 18px; padding-left: 0;}
        .step1 .multiselect,         .step2 .multiselect,         .step3 .multiselect        {width: 300px; margin-left: -23px;}
        .step1 .multiselect__input,  .step2 .multiselect__input,  .step3 .multiselect__input {width: 260px;}
        .step1 .multiselect__single, .step2 .multiselect__single, .step3 .multiselect__single{width: 240px;}

    }

    @media (max-width: 675px) {
        /*.fixed-nav-container{  left:10px;  width: -webkit-calc(98%);  }*/
        .scholarship-info{margin-left: 10px;}
        /*#step1,#step2,#step3,#step4{ width: 98%}*/
        /*.scholar-frame{  display: none  }*/    }


    @media (min-width: 991px) {
        .creation-container{  width: 99%; margin-left: .5%;}
        /*#step1,#step2,#step3,#step4{ width: -webkit-calc(100% - 400px);}*/
        .step-box{width: 72vw; padding: 10px;}
        .scholar-frame{  right: 4%;  }

        .criteria .multiselect,         .step3 .multiselect{width: 310px;}
        .criteria .multiselect__input,  .step3 .multiselect__input{width: 270px;}
        .criteria .multiselect__single, .step3 .multiselect__single{width: 250px;}
        .scholar-text{width: 310px;}
        .step-box{width: 72.8vw;}
        .fixed-nav-container{width: 73%}
    }

    @media (min-width: 1041px) {
        .criteria .multiselect,         .step3 .multiselect{width: 365px;}
        .criteria .multiselect__input,  .step3 .multiselect__input{width: 340px;}
        .criteria .multiselect__single, .step3 .multiselect__single{width: 320px;}
        .scholar-text{width: 380px;}
        .step-box{width: 100%;}
        .fixed-nav-container{width: 74%}
    }
    @media (min-width: 1130px) {
        .criteria .multiselect,         .step3 .multiselect{width: 420px;}
        .criteria .multiselect__input,  .step3 .multiselect__input{width: 340px;}
        .criteria .multiselect__single, .step3 .multiselect__single{width: 320px;}
        .scholar-text{width: 410px;}
        /*.step-box{width: 75vw;}*/
        .scholar-frame{  right: 5.3%;  }
        .fixed-nav-container{width: 76%}
    }

    @media (min-width: 1200px) {
        .creation-container{  width: 98%; margin-left: 1%;}
        .scholar-frame{  right: 6%;  }
        /*#step1,#step2,#step3,#step4{ width: -webkit-calc(100% - 430px);}*/
        /*.step-box{width: 75vw; padding: 30px;}*/

        .criteria .multiselect,         .step3 .multiselect{width: 470px;}
        .criteria .multiselect__input,  .step3 .multiselect__input{width: 410px;}
        .criteria .multiselect__single, .step3 .multiselect__single{width: 400px;}
        .scholar-text{width: 480px;}
        .fixed-nav-container{width: 78%}

    }
    @media (min-width: 1279px) {
        .scholar-frame-relative{  left: -webkit-calc(100% - 337px);  top: 790px;  }
        /*.step-box{width: 76vw}*/
        .fixed-nav-container{width: 79%}
    }
    @media (min-width: 1302px) {
        .scholar-frame-relative{  left: -webkit-calc(100% - 336px);  top: 770px;  }
        /*.step-box{width: 78vw}*/
        .financial-text{padding-top: 50px; margin-left: -80px}
        .fixed-nav-container{width: 80%}

    }
    @media (min-width: 1391px) {
        /*.financial-text{padding-top: 50px; margin-left: -40px;}*/
        .scholar-frame-relative{
            left: -webkit-calc(100% - 348px);
            top: 740px;
        }
        .fixed-nav-container{width: 81%}
    }
    @media (min-width: 1400px) {
        .creation-container{  width: 90%; margin-left: 5%;}
        .scholar-frame{  right: 8.2%;  }
        /*.step-box{width: 73vw}*/
        .fixed-nav-container{width: 81%}
    }

    @media (min-width: 1502px) {
        .financial-text{ }
        /*.step-box{width: 74vw}*/
        .fixed-nav-container{width: 82%}
    }

    @media (min-width: 1600px) {
        .creation-container{  width: 84%; margin-left: 8%;}
        .scholar-frame{  right: 14%;  }
        /*.step-box{width: 68vw}*/
        .fixed-nav-container{width: 84%}
    }


    @media (min-width: 1800px) {
        .creation-container{  width: 80%; margin-left: 10%;}
        .scholar-frame{  right: 20%;  }
        /*.step-box{width: 64vw; padding: 50px;}*/
        .fixed-nav-container{width: 85%}
    }
    @media (min-width: 2100px) {
        .creation-container{  width: 60%; margin-left: 15%;}
        .scholar-frame{  right: 24%;  }
        .financial-text{ margin-left: -110px}
        /*.step-box{width: 60vw;}*/
        .fixed-nav-container{width: 86%}
    }

    /* //////////////////////////////////////////////////////////////////// */
    /* //////////////////////////////////////////////////////////////////// */





 /*==== DATE picker jQuery STYLING ====*/
    .ui-widget-header {
        background: #00bcd4;
        color: #fff}

    .ui-icon, .ui-icon:hover  {
        width: 16px;
        height: 16px;
        /*background-color: #00bcd4;*/
    }

    .ui-widget-header .ui-icon {
        background-image: url("/images/ui-icons_ffffff_256x240.png");
    }

    .ui-state-default,
    .ui-widget-content .ui-state-default,
    .ui-widget-header .ui-state-default,
    .ui-button,
    html .ui-button.ui-state-disabled:hover,
    html .ui-button.ui-state-disabled:active {
        border: none;
        background: #f4f4f4;
        /*font-weight: bold;*/
        color: #004276;
    }

    .ui-state-highlight,
    .ui-widget-content .ui-state-highlight,
    .ui-widget-header .ui-state-highlight {
        border: none;
        background: #008da5 ;
        color: #fff;
    }
    .ui-state-active,
    .ui-widget-content .ui-state-active,
    .ui-widget-header .ui-state-active,
    .ui-button:active,
    .ui-button.ui-state-active:hover{
        background: #00bcd4;
        /*font-weight: bold;*/
        color: #fff;
    }
        .error {color: red}

    /*===============================*/


</style>




<script>

    import Multiselect from '../../scholio-multiselect';
    import VueTinymce from 'vue-tinymce';
    Vue.use(VueTinymce)

    var max_chars = 100; //max characters
    var chars_without_html = 0;

    export default {
        components: {Multiselect},
        data(){
            return{
                allWinners: false,
                winners: 1,
                multipleFeature: true,
                criteria_disabled: false,
                financial_disabled: true,
                studies_disabled: true,
                keywords_disabled: true,
                terms_disabled: true,
                levels_disabled: true,
                financial_amount: 0,
                financial_value: [],
                financial_options: [ 
                    { id:1, name:window.lang.panel_scholarships.create.financial1, metric: '%', icon: '/panel/assets/images/steps/step1-reduce2.png' }, 
                    { id:2, name:window.lang.panel_scholarships.create.financial2, metric: '€', icon: '/panel/assets/images/steps/step1-hand2.png' }, 
                    { id:3, name:window.lang.panel_scholarships.create.financial3, metric: 'Μήνες', icon: '/panel/assets/images/steps/step1-clock2.png' }
                ],
                criteria_amount: 0,
                criteria_value: [],
                criteria_options: [ 
                     { id: 1, name: window.lang.panel_scholarships.create.criteria1, icon: '/panel/assets/images/steps/talent.png' },
                     { id: 2, name: window.lang.panel_scholarships.create.criteria2, icon: '/panel/assets/images/steps/medal.png' },
                     { id: 3, name: window.lang.panel_scholarships.create.criteria3, icon: '/panel/assets/images/steps/social.png' },
                     { id: 4, name: window.lang.panel_scholarships.create.criteria4, icon: '/panel/assets/images/steps/friends.png' },
                     { id: 5, name: window.lang.panel_scholarships.create.criteria5, icon: '/panel/assets/images/steps/open.png' }
                ],
                study_value: [],
                study_options: [],
                level_value: [],
                level_options: [],
                allStudies: false,
                testStudy: [],
                multipleSectionsSelected: false,
                withTerms:false,
                error: false,
                end_at: null,
                today: null,
                exams: false,
                content: '<p> Αναφέρετε εδώ τους <strong> Όρους και Προϋποθεσεις </strong> της Υποτροφίας</p>',
                terms: null,
                tinyOptions: {
                    language_url : '/el.js',
                    entity_encoding : "raw",
                    height: 300,
                    menubar: false,
                    plugins: [
                        'textcolor table autolink lists link image charmap print preview anchor',
                        'searchreplace visualblocks code',
                        'insertdatetime media table contextmenu paste code'
                    ],
                    setup: function (ed) {
                    ed.on("KeyDown", function (ed, evt) {
                                        chars_without_html = $.trim(tinyMCE.activeEditor.getContent().replace(/(<([^>]+)>)/ig, "")).length;
                                        var key = ed.keyCode;
                                        console.log(ed.keyCode)

                                        var remaining = max_chars - chars_without_html;

                                        $('#chars_left').html(remaining);

                                        if (remaining <= 0  && (key != 8 && key != 46)) {
                                            ed.stopPropagation();
                                            ed.preventDefault();
                                            $('#chars_left').html('ΟΧΙ ΑΛΛΟ!')
                                        }
                                    });
                },
                    toolbar: 'undo redo | insert copy paste | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | forecolor backcolor | table '
                },
                value: [],
                options: []
            }
        },

        methods:{
            fetchStudies(){
                axios.get('/api/school/getStudiesGroupedFromLevel/'+this.level_value.id).then(({data})=>{
                    this.study_options = data
                })
            },

            fetchLevels(){
                axios.get('/api/school/getLevels').then(({data})=>{
                    this.level_options = data;
                })
                
            },

            uniqueArray(arr){
                return !!arr.reduce(function(a, b){ return (a === b) ? a : NaN; });
            },

            tinyMCE: function() {

            },

            getTags: function(){
                axios.get('/api/hashtag/all').then(response => {
                    this.options = response.data
                    this.options.forEach(function(item){
                        item.code = item.slag
                    });
                });
            },

            addTag: function(newTag) {
                const tag = {
                  name: newTag,
                  code: newTag
                }
                this.options.push(tag)
                this.value.push(tag)
            },

            todayDate: function() {
                var today = new Date();
                var dd = today.getDate();
                var mm = today.getMonth()+1; //January is 0!
                var yyyy = today.getFullYear();

                if(dd<10) {
                    dd='0'+dd
                }

                if(mm<10) {
                    mm='0'+mm
                }

                today = dd+'-'+mm+'-'+yyyy;
                // today = mm + '-' + dd + '-' + yyyy
                this.end_at=today
                this.today=today
            },

            getLimits(){
                var parent = this
                var i=1
                axios.get('/api/getScholarshipLimits').then(({data})=>{
                    parent.criteria_options.forEach((item)=>{
                        console.log(data['cr'+i])
                        item.limit = data['cr'+i]
                        if(item.limit == 0 ){
                            item.$isDisabled = true
                        }
                        i++
                    })
                })
            },

            customLabel ({ name, limit }) {
              return `${name}`
            },

            saveScholarship(){
                axios.post('/api/school/scholarshipSave', {
                                'financial': this.financial_value.id,
                                'financial_amount': this.financial_amount,
                                'level': this.level_value,
                                'studies': this.study_value,
                                'criteria': this.criteria_value.id,
                                'end_at': this.end_at,
                                'exams':this.exams,
                                'terms':this.terms,
                                'tags': this.value,
                                'allWinners': this.allWinners,
                                'winners': this.winners
                            }).then(({data})=>{
                                console.log(data)
                                if(data.message == 'SAVED SUCCESSFULLY') window.location = data.url
                            })
            }
        },

        watch:{
            criteria_value(){
                if(this.criteria_value){
                    this.financial_disabled = false
                }else{
                    this.financial_value = null
                    this.financial_disabled = true
                }
            },

            financial_value(){
                if(this.financial_value && this.financial_amount > 0){
                    this.levels_disabled = false
                }else{
                    this.level_value = null
                    this.levels_disabled = true
                }
            },

            financial_amount(){
                if(this.financial_value && this.financial_amount > 0){
                    this.levels_disabled = false
                }else{
                    this.level_value = null
                    this.levels_disabled = true
                }
            },

            level_value(){
                if(this.level_value){
                    this.study_value = null
                    this.fetchStudies()
                    this.studies_disabled = false
                }else{
                    this.study_value = []
                    this.studies_disabled = true
                }
            },

            allStudies(){
                if(this.allStudies){
                    this.study_value = []
                    var parent = this
                    this.study_options.forEach((item)=>{
                        item.study.forEach((i)=>{
                            parent.study_value.push(i)
                        })
                    })
                }
            },

            study_value(){
                var parent = this
                if(this.study_value){
                    parent.testStudy = []
                    this.study_value.forEach((item)=>{
                        parent.testStudy.push(item.section_id)
                    })
                }
                if(this.testStudy && this.testStudy.length > 1) this.multipleSectionsSelected = !this.uniqueArray(parent.testStudy)
                else this.multipleSectionsSelected = false

                if(this.study_value && this.study_value.length > 0) this.terms_disabled = false 
                else this.terms_disabled = true
            }
        },

        created(){
                    $(window).scroll(function() {
                    var scroll = $(window).scrollTop();
                    var width= $(window).width();
                    console.log('test1')

                if(width<1301){
                    if (scroll >= 1830) {
                        $("#sc-frame").removeClass("scholar-frame-fixed").addClass("scholar-frame-relative");
                    } else{
                        $("#sc-frame").removeClass("scholar-frame-relative").addClass("scholar-frame-fixed");
                    }
                }else if (width>=1302){
                    if (scroll >= 1950) {
                        $("#sc-frame").removeClass("scholar-frame-fixed").addClass("scholar-frame-relative");
                    } else{
                        $("#sc-frame").removeClass("scholar-frame-relative").addClass("scholar-frame-fixed");
                    }
                }

            });
        },

        mounted(){
            var vm = this
            this.fetchLevels()
            this.getTags()
            this.getLimits()

            setTimeout(function() {console.log(vm.criteria_options)}, 100);

            // Event.$on('saveScholarship', () =>
            //   this.saveScholarship()
            // )

            Event.$on('datePick',function  (val) {
                    vm.end_at = val
                    // vm.errorDate()
                }
            )
        }
    }
</script>