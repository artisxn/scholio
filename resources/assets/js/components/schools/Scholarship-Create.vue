<template>
    <div>
        <ul id="mmenu" style="z-index: 5">
            <li data-menuanchor="firstPage" class="">
                <a href="#firstPage">
                    <div class="btn-fixed">Κριτήρια</div>
                </a>
            </li>
            <li data-menuanchor="secondPage" v-if="!financial_disabled">
                <a href="#secondPage">
                    <div class="btn-fixed">Οικονομικά</div>
                </a>
            </li>
            <li data-menuanchor="thirdPage" v-if="!levels_disabled">
                <a href="#thirdPage">
                    <div class="btn-fixed">Σπουδές</div>
                </a>
            </li>
            <li data-menuanchor="fourthPage" v-if="!settings_disabled">
                <a href="#fourthPage">
                    <div class="btn-fixed">Ρυθμίσεις</div>
                </a>
            </li>
            <li data-menuanchor="fifthPage" v-if="!terms_disabled">
                <a href="#fifthPage">
                    <div class="btn-fixed">Όροι</div>
                </a>
            </li>
        </ul>



        <div id="sc-frame" class="scholar-frame  scholar-frame-fixed">
            <div class="ribbon-wrapper" v-if="criteria_value && criteria_value.name">
                <div class="ribbon-front sc-medium-grey">
                    <span class="">
                        <img class="criteria-img" :src="criteria_value.icon">
                    </span>
                    <span class="sc-t-dark-green font-weight-400 scholar-title margin-left-10">{{criteria_value.name}}</span>
                </div>
                <div class="ribbon-edge-topright"></div>
                <div class="ribbon-edge-bottomright"></div>
                <div class="ribbon-back-right sc-medium-grey"></div>
            </div>
            <div class="hexagon hex1" v-if="financial_value && financial_amount > 0">
                <img class="hex1-img" :src="financial_value.icon">
            </div>
            <div class="hexagon hex2" v-if="study_value && study_value.length > 0">
                <img class="hex2-img" :src="study_value[0].icon" v-if="!multipleSectionsSelected">
                <img class="hex2-img" src="/panel/assets/images/steps/studies.png" v-else>
            </div>

            <div class="scholar-content  font-weight-400" v-if="financial_value && financial_amount > 0">
                <p class="">{{ financial_value.name }} {{ financial_amount}} {{ financial_value.metric }}</p>

                <div style="margin-top: 45px; " v-if="study_value && study_value.length > 0">
                    <div style="font-size: 102%">{{ level_value.name }}</div>
                    <div style="font-size: 88%; margin-right: 10px;" v-if="study_value.length < 4">
                        <div v-for="st in study_value" v-bind:key="st.key" style="margin-top: 4px;">
                            {{ st.name }}
                            <hr style="margin: 0; padding: 0">
                        </div>

                    </div>
                    <div v-else style="margin-top: 10px; font-size: 88%">Πολλαπλά Αντικείμενα Σπουδών: {{ study_value.length }}</div>
                </div>

            </div>
            <div v-if="level_value && study_value  && study_value.length>0">
                <div style="position: absolute; top: 345px; width: 145px" class="font-weight-400 sc-t-grey">
                    <span class="" style="">
                        <i class="fa fa-thumbs-o-up margin-right-5" aria-hidden="true"></i>
                        {{lang('profile.scholarship.interested')}}:
                        <span class="pull-right">0</span>
                    </span>
                </div>
                <!-- <div style="position: absolute; top: 370px; width: 145px" class="font-weight-400 sc-t-grey">
                    <span class="" style="">
                        <i class="fa fa-pencil margin-right-5" aria-hidden="true"></i>
                        {{lang('profile.scholarship.requested')}}:
                        <span class="pull-right"> 0</span>
                    </span>
                </div> -->
            </div>

        </div>



        <div id="fullpage" class="section-container" style="">

            <div class="section" data-anchor="firstPage">
                <div class="section-box  sec1">
                    <div class="step-title">Βήμα 1ο: Επιλέξτε Κριτήρια</div>
                    <div class="criteria">
                        <multiselect v-model="criteria_value" :options="criteria_options" track-by="name" label="name" :close-on-select="true"
                            :show-labels="false" placeholder="Επιλέξτε Κριτήρια" :deselectLabel="lang('panel_studies.input-delete')"
                            :selectLabel="lang('panel_scholarships.create.select')" :selectedLabel="lang('panel_scholarships.create.selected')"
                            :disabled="criteria_disabled" :custom-label="customLabel" :multiple="false" :taggable="true">

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
                        <span class=" criteria-img-sm" style="margin-top: 11px;">
                            <img class=" img-responsive" :src="criteria_value.icon" alt="">
                        </span>
                        <span class="scholar-text">

                            H
                            <span class="scholarship-name">{{criteria_value.name}}</span> αφορά Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Aperiam, aut fugiat magni nam placeat praesentium sint! Accusamus aspernatur, at cum dolorem
                            id iste iusto magni minus mollitia nemo placeat quaerat tempore vel! Aliquid culpa earum eligendi
                            maxime non ratione similique?
                        </span>

                        <div class="btns-next-container">
                            <a href="#secondPage" class="btn-anchor">
                                <div class="btn btn-success pull-right">Επόμενο
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>


                    </div>

                    <img class="back-img-full img-responsive" :src="criteria_value.icon">



                </div>
            </div>

            <div class="section" data-anchor="secondPage">
                <div class="section-box sec2">

                    <div class="step-title">Βήμα 2ο: Επιλέξτε Οικονομική Προσφορά</div>

                    <div v-if="!financial_disabled">
                        <div>
                            <div class="financial-plan">

                                <multiselect 
                                v-model="financial_value" 
                                :options="financial_options"
                                track-by="name" 
                                label="name"
                                tag-placeholder="Προσθήκη νέου"
                                :close-on-select="true"
                                :show-labels="false" 
                                placeholder="Επιλέξτε Οικονομικό πακέτο" 
                                :deselectLabel="lang('panel_studies.input-delete')"
                                :selectLabel="lang('panel_scholarships.create.select')" 
                                :selectedLabel="lang('panel_scholarships.create.selected')"
                                :disabled="financial_disabled"
                                >
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

                                <div class="input-group financial_value_input" v-if="financial_value.id==3">
                                    <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon3" v-model="financial_amount">
                                    <span class="input-group-addon" id="basic-addon3">{{ lang('panel_scholarships.create.months') }}</span>
                                </div>
                            </div>
                            <div class="row" v-if="financial_value && financial_value.id>0">
                                <span class="" style="margin-top: 55px;">
                                    <img class=" criteria-img-sm img-responsive" style="width: 70px;" :src="financial_value.icon" alt="">
                                </span>

                                <div class="financial-text">
                                    <span class="scholarship-name">{{financial_value.name}}</span> αφορά Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit. Aperiam, aut fugiat magni nam placeat praesentium sint!

                                </div>
                            </div>
                        </div>

                        <img class="back-img-full img-responsive" :src="financial_value.icon">

                    </div>

                    <div v-else class="pre-step"> Συμπληρώστε πρώτα το βήμα 1.</div>


                    <div class="btns-next-container-sec2 financial-text">
                        <a href="#firstPage">
                            <div class="btn btn-success pull-left">
                                <i class="fa fa-caret-left" aria-hidden="true"></i> Προηγούμενο </div>
                        </a>

                        <a href="#thirdPage" v-if="financial_value && financial_amount > 0">
                            <div class="btn btn-success pull-right">Επόμενο
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                            </div>
                        </a>
                    </div>




                </div>
            </div>

            <div class="section" data-anchor="thirdPage">
                <div class="section-box sec3">


                    <div class="step-title">Βήμα 3ο: Επιλέξτε Σπουδές</div>
                    <div v-if="!levels_disabled">
                        <div>
                            <div class="" style="margin: 15px 0 6px 0 ">Επίπεδο Σπουδών</div>
                            <div class="level">
                                <multiselect v-model="level_value" :options="level_options" track-by="name" label="name" :close-on-select="true"
                                    :show-labels="false" placeholder="Επιλέξτε Επίπεδο Σπουδών" :deselectLabel="lang('panel_studies.input-delete')"
                                    :selectLabel="lang('panel_scholarships.create.select')" :selectedLabel="lang('panel_scholarships.create.selected')"
                                    :disabled="levels_disabled"></multiselect>
                            </div>

                        </div>

                        <div v-if="level_value">
                            <div class="" style="margin: 25px 0 6px 0 ">Αντικείμενο Σπουδών</div>
                            <div class="study">
                                <multiselect style="" v-model="study_value" :options="study_options" :multiple="multipleFeature" group-values="study" group-label="section"
                                    placeholder="Επιλέξτε Αντικείμενα Σπουδών" track-by="name" label="name" :disabled="studies_disabled"
                                    @remove="allStudies = false">
                                    <span slot="noResult">Oops! Δεν βρέθηκε...</span>
                                </multiselect>
                            </div>
                            <div style="margin-top: 15px; position: relative; z-index: 4" v-if="study_value && study_value!=null">

                                <div class="funkyradio" style="margin: 8px 0 0 0; ">
                                    <div class="funkyradio-success">
                                        <input type="checkbox" id="checkBox" v-model="allStudies">
                                        <label for="checkBox" style="text-align: center; background: #f8f8f8;"> Επιλογή όλων των σπουδών</label>
                                    </div>
                                </div>

                                <div class="btn-allStudies">
                                    <button class="btn btn-info" @click="study_value = []; allStudies=false" v-if="study_value && study_value.length > 2" style="margin: 15px auto">Διαγραφή Όλων</button>
                                </div>
                            </div>



                            <div class="" v-if="study_value && study_value.length > 0">
                                <img class="back-img-full img-responsive" :src="study_value[0].icon" v-if="!multipleSectionsSelected">
                                <img class="back-img-full img-responsive" src="/panel/assets/images/steps/studies.png" v-else>
                            </div>

                        </div>

                    </div>
                    <div v-else class="pre-step">Συμπληρώστε πρώτα το βήμα 2.</div>


                    <div class="btns-next-container-sec2 btns-sec3">
                        <a href="#secondPage">
                            <div class="btn btn-success pull-left">
                                <i class="fa fa-caret-left" aria-hidden="true"></i> Προηγούμενο </div>
                        </a>

                        <a href="#fourthPage" v-if="study_value && study_value.length > 0">
                            <div class="btn btn-success pull-right">Επόμενο
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                            </div>
                        </a>
                    </div>

                </div>
            </div>


            <div class="section" data-anchor="fourthPage">
                <div class="section-box sec4">


                    <div class="step-title">Βήμα 4ο: Νικητές - Εξετάσεις - Κλειδιά</div>
                    <!--<div v-if="!settings_disabled">-->
                    <div>
                        <div>

                            <div class="row sec4-row" style="">
                                <!--<h3>{{ lang('panel_scholarships.create.terms') }}</h3>-->

                                <div class="col-sm-4 col-lg-4 winners-outer col-xs-6s" style="text-align: center; padding: 0!important;">
                                    <div style="" class=""> {{ lang('panel_scholarships.create.winners') }}</div>

                                    <div class="winners-pack" style="text-align: center; margin-left: 0; padding-left: 0">
                                        <span class="winners-container" style="display: inline-block">
                                            <input class="winners-input" type="number" name="winners" min=1 max=5 v-model="winners" :disabled="allWinners" v-if="!allWinners"
                                                style="">
                                        </span>

                                        <span class="funkyradio" style=" display: inline-block">
                                            <span class="funkyradio-success">
                                                <input type="checkbox" id="multiple" v-model="allWinners">
                                                <label for="multiple" style="text-align: center; ">Πολλαπλοί Νικητές</label>
                                            </span>
                                        </span>

                                    </div>
                                </div>


                                <div class="col-sm-4 col-lg-4 datepicker-outer col-xs-6s" style="text-align: center; padding: 0!important;">
                                    <div> {{ lang('panel_scholarships.create.active') }}: </div>
                                    <div style="z-index: 3; position: relative;">
                                        <input type="text" id="datepicker" size="32" class="ll-skin-cangas datepicker-input" style="text-align: center; height: 37px;"
                                            v-bind:value="end_at" onchange="Event.$emit('datePick', event.target.value)"  />
                                    </div>
                                </div>


                                <div class="clearfix hidden-mdlg"></div>

                                <span class="mobile-hidden">
                                    <div class=" col-sm-4 col-lg-4 col-xs-6s" style="text-align: center;" v-if="">
                                        <div class="amount-text" >Ενδεικτικό αρχικό ποσό διδάκτρων</div>
                                        <div class="input-group " style="width: 240px; margin-left: auto; margin-right: auto; text-align: center;">
                                            <input type="text" class="form-control" style="text-align: center;" placeholder="" aria-describedby="basic-addon2" id="price" v-model="price">
                                            <span class="input-group-addon" id="basic-addon4">€</span>
                                        </div>
                                    </div>

                                    <div class=" col-sm-4 col-lg-4 col-xs-6s" style="margin: 17px 0 0 0; padding: 0!important;" v-if="criteria_value.id != 1">
                                        <div class="funkyradio" style="margin: 8px 0 0 0; text-align: center">
                                            <div class="funkyradio-success exams-container" style="z-index: 3; position: relative;">
                                                <input type="checkbox" id="exams" v-model="exams" :disabled="criteria_value.id == 1">
                                                <label for="exams" style="text-align: center;width: 240px; margin-left: -1%"> {{ lang('panel_scholarships.create.exams') }}</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-lg-4 datepicker-outer col-xs-6s" style="text-align: center; padding: 0!important; margin-top: 18px;" v-show="exams" v-if="criteria_value.id != 1">
                                        <div> Ημερομηνία Εξετάσεων </div>
                                        <div style="z-index: 3; position: relative;">
                                            <input type="text" id="examsdate" size="32" class="ll-skin-cangas datepicker-input" style="text-align: center; height: 37px; margin-top: 1px;"
                                                   v-bind:value="exams_date" onchange="Event.$emit('examsdate', event.target.value)" />
                                        </div>
                                    </div>

                                </span>






                                <!--<div class=" col-sm-4 col-lg-4 col-xs-12s" style="margin: 8px 0 0 0; padding: 0!important;" v-if="">-->
                                    <!--<div class="" style="margin: 8px 0 0 0; text-align: center">-->
                                        <!--<div class="funkyradio-success exams-container" style="">-->
                                            <!--Ενδεικτικό αρχικό ποσό διδάκτρων-->
                                            <!--<input type="number" id="price" v-model="price">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                <!--</div>-->





                            </div>



                        </div>

                        <div class="keys" v-if="!terms_disabled">
                            <div class="keys-text">Προσθέστε λέξεις/ετικέτες "κλειδιά" για στοχευμένη αναζήτηση υποτροφίας</div>
                            <multiselect v-model="value" tag-placeholder="Προσθήκη νέας ετικέτας" placeholder="Αναζητήστε ή Προσθέστε ετικέτα" label="name"
                                track-by="code" :options="options" deselectLabel="Αφαίρεση" :selectLabel="lang('panel_scholarships.create.select')"
                                :selectedLabel="lang('panel_scholarships.create.selected')" :multiple="true" :taggable="true"
                                @tag="addTag">
                            </multiselect>
                        </div>
                    </div>
                    <!--<div v-else>Συμπληρώστε πρώτα το βήμα 3.</div>-->

                    <div class="btns-next-container-sec2 btns-next-container-sec4" style="margin-top: 50px" v-if="!terms_disabled">
                        <a href="#thirdPage">
                            <div class="btn btn-success pull-left">
                                <i class="fa fa-caret-left" aria-hidden="true"></i> Προηγούμενο </div>
                        </a>

                        <a href="#fifthPage">
                            <div class="btn btn-success pull-right">Επόμενο
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                            </div>
                        </a>
                    </div>

                    <img class="back-img-full img-responsive" src="/panel/assets/images/steps/step2-earth.png" style="z-index: 0">

                </div>
            </div>

            <div class="section" data-anchor="fifthPage">
                <div class="section-box sec5" style="">

                    <div class="step-title">Βήμα 5ο: Περιγράψτε τους Όρους Συμμετοχής</div>

                    <div v-if="!terms_disabled">
                        <!--<div class="">-->
                        <!--<div class="funkyradio" style="width: 240px; margin: 8px auto 0 auto; text-align: center;">-->
                        <!--<div class="funkyradio-success">-->
                        <!--<input type="checkbox" id="withTerms" v-model="withTerms">-->
                        <!--<label for="withTerms" style="width: 260px; text-align: center;"> {{ lang('panel_scholarships.create.terms') }}</label>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--</div>-->


                        <div id="" class="terms-container">
                            <span style="color: transparent">.</span>
                            <tinymce id="editor" v-model="terms" :options="tinyOptions" @change="tinyMCE" :content='content'></tinymce>
                            <div>
                                <span>{{ lang('panel_scholarships.create.remaining') }}:</span>
                                <span id="chars_left"></span>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="btn-container">
                            <button class="btn btn-success" @click="saveScholarship()">Δημιουργία Υποτροφίας</button>
                        </div>
                    </div>



                </div>
            </div>





        </div>

    </div>
</template>

<style>

    /* ======  avoid yellow input background on chrome ============ */
    input:-webkit-autofill,
    input:-webkit-autofill:hover,
    input:-webkit-autofill:focus,
    input:-webkit-autofill:active{
        -webkit-box-shadow: 0 0 0 30px #FFF inset;
        -webkit-text-fill-color: #555;
    }
    /* =========================================================== */




    .section-container {
        margin-top: -30px;
        margin-bottom: 30px;
    }




    /* //////////////////////////////////////////////////////////////////// */

    #mmenu>li {
        float: left;
        list-style: none;
    }

    #mmenu {
        top: 80px;
        height: 40px;
        width: 100%;
        margin: 0 0 0 -50px;
        position: fixed;
        z-index: 50;
    }

    li.active a {
        color: orange!important;
    }


    .btn-fixed {
        color: #999;
        border: 1px solid #bbb;
        border-radius: 8px;
        background: #e1e1e1;
        padding: 5px 11px;
        margin-left: 15px;
        font-size: 103%;
    }

    li.active a .btn-fixed {
        border-color: #008da5;
        background: #fff;
        color: #008da5!important;
    }

    .btn-fixed:hover {
        border-color: #FD6A33 !important;
        background: #e1e1e1;
        color: #FD6A33!important;
    }

    li.active a .btn-fixed:hover {
        color: #008da5!important;
        border-color: #008da5 !important;
    }


    /* //////////////////////////////////////////////////////////////////// */

    .section-box {
        background: #fcfcfc;
        height: 84%;
        padding: 32px 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px 2px #bbb;
        width: 80%;
        margin-left: 10%;
    }

    .fp-tableCell {
        vertical-align: top;
        padding-top: 90px!important;
        padding-bottom: 0!important;
    }


    .sec1 {
        background: #f7faf7;
    }

    .sec2 {
        background: #f7f7ff;
    }

    .sec3 {
        background: #fffbf4
    }

    .sec4 {
        background: #f7faf7
    }

    .sec5 {
        background: #f7f7ff
    }








    /* //////////////////////////////////////////////////////////////////// */

    .pre-step {
        margin: 20px auto;
        color: #999;
    }

    .step-title {
        font-size: 130%;
        margin-bottom: 10px;
    }

    .criteria-img-sm {
        display: none
    }

    /*.financial_value_input{margin-top: 20px}*/

    .financial-text {
        margin-top: 20px;
        padding-left: 10px;
    }

    .financial-plan .multiselect {
        z-index: 20
    }

    .financial-text,
    label,
    .btns-sec3 {
        width: 540px;
    }

    .criteria .multiselect,
    .financial-plan .multiselect,
    .level .multiselect,
    .financial_value_input {
        width: 540px;
    }

    .criteria .multiselect__input,
    .financial-plan .multiselect__input,
    .level .multiselect__input {
        width: 520px;
    }

    .criteria .multiselect__single,
    .financial-plan .multiselect__single,
    .level .multiselect__single {
        width: 490px;
    }


    .study .multiselect {
        width: 540px;
    }

    .study .multiselect__input {
        width: 490px;
    }

    .study .multiselect__single {
        width: 470px;
    }


    .study .multiselect__tag {
        background: transparent;
        color: #008da5;
        display: inline-block;
        width: 99%;
        font-size: 90%;
        white-space: nowrap;
        overflow: hidden !important;
        text-overflow: ellipsis;
        padding-top: 2px;
    }

    .study .multiselect__option {
        font-size: 90%;
        font-weight: 300;
    }



    .multiselect {
        margin-top: 20px;
        margin-bottom: 15px;
    }

    .study .multiselect {
        margin-top: 20px;
        margin-bottom: 15px;
    }

    .study .multiselect,
    .level .multiselect,
    .keys .multiselect {
        z-index: 10!important;
        position: relative;
    }

    .study .multiselect__tags {
        max-height: 110px;
        overflow-y: scroll;
    }

    .financial-amount {
        margin-top: 30px;
        margin-bottom: 20px;
    }

    .criteria .multiselect {
        margin-top: 15px;
        margin-bottom: 15px;
    }

    .btn-anchor {
        display: block;
        z-index: 3;
    }

    .btns-next-container,
    .btns-next-container-sec2 {
        margin: 40px 10px 0 5px;
        z-index: 3;
        position: relative;
    }

    .btns-next-container-sec2 {
        margin: 40px -5px 0 -5px;
    }

    .back-img-full {
        max-height: 40%;
        opacity: 0.06;
        position: absolute;
        left: 0;
        right: 0;
        bottom: 20%;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
    }

    .sec4-row {
        margin-top: 40px;
    }

    .btns-next-container-sec4 {
        padding-left: 8px;
        padding-right: 8px;
    }


    .amount-text{margin-bottom: 10px;}




    /* /////////////////////////////////////////////////////////////////////////////////////////////// */

    /* /////////////////////////////////////////////////////////////////////////////////////////////// */

    .scholar-frame {
        /*background-image: linear-gradient(#f3f3f3, #fbfbfb);*/
        background-color: #fff;
        min-height: 390px;
        margin-bottom: 25px;
        width: 338px;
        padding-left: 22px;
        border: 1px solid #ebebeb;
        border-radius: 10px;
        box-shadow: 0 0 12px 1px #bbb;

    }

    .scholar-frame-fixed {
        top: 210px;
        position: fixed;
        right: 70px;
        z-index: 4;
    }


    /*.scholar-frame-relative{*/

    /*position: absolute;*/

    /*left: -webkit-calc(100% - 382px);*/

    /*top: 2090px;*/

    /*}*/

    .criteria-img {
        height: 25px;
        margin: 7px 0 0 10px;
    }

    .winners-container {
        margin: 0 8px 0 -6px;
    }

    .winners-input {
        border-radius: 6px;
        border: 1px solid #D1D3D4;
        box-shadow: none;
        padding: 0 0 0 10px!important;
        height: 37px;
        width: 37px;
    }

    .winners-pack .funkyradio {
        margin: -5px 0 0 -5px;
        width: 195px;
        padding: 5px auto
    }

    /* input[type="number"]::-webkit-input-placeholder { Chrome/Opera/Safari} */

    .btn-allStudies {
        width: 540px;
        text-align: center;
    }


    .datepicker-input {
        margin-top: 10px;
        height: 32px;
        border: 1px solid #D1D3D4;
        border-radius: 4px;
    }

    .terms-container {
        margin-top: 10px;
    }

    .btn-container {
        margin-top: 15px;
        text-align: center;
    }

    .btn-success,
    .btn-success:focus,
    .btn-success:visited {
        border: none;
        background: #008da5!important;
    }

    .btn-success:hover {
        background: #006f87!important;
    }

    .btn-info,
    .btn-info:focus,
    .btn-info:visited {
        border: none;
        background: #b9b9b9 !important;
    }

    .btn-info:hover {
        background: #96a5a3 !important;
    }

    .keys-text {
        margin: 40px 0 -10px 0;
        position: relative;
        z-index: 10;
        color: #777
    }



    /* ////////////////////CheckBox///////////////////////////////// */

    /* //////////////////////////////////////////////////////////////////// */

    .ribbon-wrapper {
        position: absolute;
        left: -14px;
        width: 430px;
    }

    .scholarship-info {
        width: 100%;
        max-width: 540px;
        margin: 20px 0;
        letter-spacing: 0.2px;
        word-spacing: 3px;
        line-height: 180%;
        text-align: justify;
    }

    .scholarship-name {
        color: #008191;
        font-weight: 400;
    }


    .margin-left-10 {
        margin-left: 10px;
    }

    .margin-right-5 {
        margin-right: 5px;
    }

    .sc-t-dark-green {
        color: #008da5;
    }

    .sc-medium-grey {
        background: #dde5e8;
    }

    .hex1 {
        top: 90px;
        z-index: 0;
    }

    .hex2 {
        top: 130px;
        z-index: 0;
    }

    .hex1-img {
        z-index: 5;
        height: 33px;
        position: absolute;
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
    }

    .hex2-img {
        z-index: 5;
        height: 38px;
        position: absolute;
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
    }

    .font-weight-400 {
        font-weight: 400;
    }


    .scholar-content {
        position: absolute;
        left: 90px;
        top: 110px;
    }

    .scholar-title {
        top: 7px;
        position: absolute
    }



    /* /////////////////////////////////////////////////////////////////////////////////////////////// */

    /* /////////////////////////////////////////////////////////////////////////////////////////////// */

    /*==== DATE picker jQuery STYLING ====*/

    .ui-widget-header {
        background: #00bcd4;
        color: #fff
    }

    .ui-icon,
    .ui-icon:hover {
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
        background: #008da5;
        color: #fff;
    }

    .ui-state-active,
    .ui-widget-content .ui-state-active,
    .ui-widget-header .ui-state-active,
    .ui-button:active,
    .ui-button.ui-state-active:hover {
        background: #00bcd4;
        /*font-weight: bold;*/
        color: #fff;
    }

    .error {
        color: red
    }

    /*===============================*/

    /* /////////////////////////////////////////////////////////////////////////////////////////////// */

    @media (max-width: 560px) {
        .section-box {
            width: 100%;
            margin: auto;
        }
    }



    @media (min-width: 861px) {
        .showPreview {
            display: block
        }
        .section-box {
            width: 102%;
            margin-left: -1%;
            height: 94%;
            margin-top: -20px;
        }
        .scholar-frame-fixed {
            right: 4%;
        }

    }


    @media (min-width: 1200px) {
        .row,
        .col-lg-4 {
            padding: auto 0;
        }
        .section-box {
            width: 96%;
            margin-left: 2%;
        }
        .scholar-frame-fixed {
            right: 7%;
        }

    }

    @media (min-width: 1500px) {
        .section-box {
            width: 82%;
            margin-left: 9%;
        }
        .scholar-frame-fixed {
            right: 13%;
        }

    }

    @media (min-width: 1900px) {
        .section-box {
            width: 80%;
            margin-left: 10%;
        }
        .scholar-frame-fixed {
            right: 13%;
        }

    }



    @media (max-width: 1300px) {
        .criteria .multiselect,
        .financial-plan .multiselect,
        .level .multiselect,
        .study .multiselect {
            width: 440px;
        }
        .criteria .multiselect__input,
        .financial-plan .multiselect__input,
        .level .multiselect__input,
        .study .multiselect__input {
            width: 390px;
        }
        .criteria .multiselect__single,
        .financial-plan .multiselect__single,
        .level .multiselect__single,
        .study .multiselect__single {
            width: 370px;
        }
        .financial_value_input,
        .scholarship-info,
        .scholar-text,
        .financial-text,
        .btns-sec3,
        .btn-allStudies,
        label {
            width: 440px;
        }
    }


    @media (max-width: 1130px) {
        .criteria .multiselect,
        .financial-plan .multiselect,
        .level .multiselect {
            width: 340px;
        }
        .criteria .multiselect__input,
        .financial-plan .multiselect__input,
        .level .multiselect__input {
            width: 300px;
        }
        .criteria .multiselect__single,
        .financial-plan .multiselect__single,
        .level .multiselect__single {
            width: 280px;
        }

        .study .multiselect {
            width: 340px;
        }
        .study .multiselect__input {
            width: 290px;
        }
        .study .multiselect__single {
            width: 270px;
        }

        .financial_value_input,
        .scholarship-info,
        .scholar-text,
        .financial-text,
        .btns-sec3,
        .btn-allStudies,
        label {
            width: 340px;
        }
        .option__small {
            display: none;
        }
    }


    @media (max-width:690px) {
        .btn-fixed {
            margin-bottom: 9px;
        }
        .fp-tableCell {
            padding-top: 124px!important;

        }
    }



    @media (max-width:540px) {
        .section-box {
            padding: 20px 10px;
        }
        .container {
            padding: 8px;
        }
    }



    @media (max-width:415px) {
        .section-box {
            padding: 20px 7px;
        }
        .container {
            padding: 5px;
        }
    }




    /* /////////////////////////////////////////////////////////////////////////////////////////////// */

    @media (min-width: 1071px) {
        .hidden-mdlg{display: none}
    }

    @media (max-width: 1070px) {
        .amount-text{margin-top: 18px; margin-bottom: 1px}

        .col-xs-6s {
            width: 50%
        }
        .col-xs-12s {
            width: 102%;
            margin-left: -1%!important;
        }

    }

    @media (max-width: 1020px) {
        .col-xs-12s {
            width: 105%;
            margin-left: -2.5%!important;
        }
    }

       @media (max-width: 1024px) {

        iframe#editor_ifr {
            height: 240px!important;
        }
 
    }

    @media (max-width: 990px) {
        .col-xs-12s {
            width: 97%;
            margin-left: 1.5%!important;
        }
    }

    @media (max-width: 930px) {
        .col-xs-12s {
            width: 100%;
            margin-left: 0!important;
        }
    }

    @media (max-width: 880px) {
        .col-xs-12s {
            width: 102%;
            margin-left: -1%!important;
        }
    }

    @media (max-width: 860px) {
        .col-xs-12s {
            width: 114%;
            margin-left: -7%!important;
        }
    }

    @media (max-width: 840px) {
        .col-xs-6s,
        .col-xs-12s {
            width: 100%;
            margin-left: 0!important;
        }
        .col-xs-6s {
            margin-bottom: 20px;
        }
        .exams-container {
            width: 240px;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }
        .winners-outer {
            margin-bottom: 35px;
        }
        .keys-text {
            margin: 30px auto 5px auto;
        }
        .keys .multiselect {
            margin-top: 0;
        }
        .section-box {
            padding-top: 8px;
            padding-bottom: 8px;
            margin-top: -10px;
        }
    }



    @media (max-width: 835px) {

        /*.winners-pack{margin-left: 22%; width: 60%;}*/
        /*.winners-outer,.datepicker-outer{ margin-bottom: 20px;}*/
    }

    @media (max-width: 766px) {
        .mobile-hidden{display: none}
        .col-xs-6s {
            margin-bottom: 15px;
        }
        #mmenu {
            text-align: center;
        }
        /*.mce-container, .terms-container{height: 40px;}*/
        /*.mce-tinymce .mce-container .mce-panel{height: 40px;}*/
    }

    @media (max-width: 640px) {
        .btns-next-container,
        .btns-next-container-sec2 {
            display: none;
        }
        .sec4-row {
            margin-top: 10px;
        }

    }

    @media (max-width: 860px) {
        .col-sm-6 {
            width: 100%
        }
        .scholar-frame {
            display: none
        }
        .section-box {
            text-align: center;
            height: 80%;
        }
        .terms-container {
            margin-top: 5px;
        }
        .btns-sec3 {
            width: 100%;
            margin-left: 0;
        }
        .scholarship-info,
        .financial_value_input,
        .financial-text {
            width: 88%;
            margin-left: 6%;
        }
        .criteria .multiselect,
        .financial-plan .multiselect {
            width: 88%;
            margin-left: 6%;
        }
        .criteria .multiselect__input,
        .financial-plan .multiselect__input {
            width: -webkit-calc(88% - 10px);
        }
        .criteria .multiselect__single,
        .financial-plan .multiselect__single {
            width: -webkit-calc(88% - 20px);
        }



        .level .multiselect,
        .study .multiselect,
        label,
        .btn-allStudies {
            width: 100%;
            margin: auto;
        }
        .level .multiselect__input,
        .study .multiselect__input {
            width: -webkit-calc(100% - 10px);
        }
        .level .multiselect__single,
        .study .multiselect__single {
            width: -webkit-calc(100% - 20px);
        }
        iframe#editor_ifr {
            height: 190px!important;
        }
    }

    @media (max-width: 540px) {
        .scholarship-info,
        .financial_value_input,
        .financial-text,
        .btns-sec3 {
            width: 98%;
            margin-left: 1%;
        }
        .criteria .multiselect,
        .financial-plan .multiselect {
            width: 100%;
            margin: auto 0;
        }
        .criteria .multiselect__input,
        .financial-plan .multiselect__input {
            width: -webkit-calc(100% - 10px);
        }
        .criteria .multiselect__single,
        .financial-plan .multiselect__single {
            width: -webkit-calc(100% - 20px);
        }
        iframe#editor_ifr {
            height: 90px!important;
        }
    }

    .hidePreview {
        display: none;
    }
</style>




<script>

    window.onhashchange = function () {
        if (window.location.hash == '#fourthPage' || window.location.hash == '#fifthPage') {
            $('#sc-frame').addClass('hidePreview')
            $("#datepicker").datepicker({ minDate: 0, maxDate: "+5M +10D" })
            $("#examsdate").datepicker({ minDate: 0, maxDate: "+5M +10D" })
        } else {
            $('#sc-frame').removeClass('hidePreview')
        }
    };

    import Multiselect from '../../scholio-multiselect';
    import VueTinymce from 'vue-tinymce';
    //    import disableScroll from 'disable-scroll';
    Vue.use(VueTinymce)

    var max_chars = 100; //max characters
    var chars_without_html = 0;

    export default {
        components: { Multiselect },
        data() {
            return {
                hash: window.location.hash,
                allWinners: false,
                winners: 1,
                multipleFeature: true,
                criteria_disabled: false,
                financial_disabled: true,
                studies_disabled: true,
                keywords_disabled: true,
                settings_disabled: true,
                terms_disabled: true,
                levels_disabled: true,
                financial_amount: 0,
                financial_value: [],
                date_value: null,
                financial_options: [
                    { id: 1, name: window.lang.panel_scholarships.create.financial1, metric: '%', icon: '/panel/assets/images/steps/step1-reduce2.png' },
                    { id: 2, name: window.lang.panel_scholarships.create.financial2, metric: '€', icon: '/panel/assets/images/steps/step1-hand2.png' },
                    { id: 3, name: window.lang.panel_scholarships.create.financial3, metric: 'Μήνες', icon: '/panel/assets/images/steps/step1-clock2.png' }
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
                withTerms: false,
                currentHash: window.location.hash,
                error: false,
                end_at: null,
                today: null,
                exams: false,
                exams_date: null,
                price: null,
                content: '<p> Αναφέρετε εδώ τους <strong> Όρους και Προϋποθεσεις </strong> της Υποτροφίας</p>',
                terms: null,
                tinyOptions: {
                    language_url: '/el.js',
                    entity_encoding: "raw",
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

                            if (remaining <= 0 && (key != 8 && key != 46)) {
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

        methods: {
            fetchStudies() {
                axios.get('/api/school/getStudiesGroupedFromLevel/' + this.level_value.id).then(({ data }) => {
                    this.study_options = data
                })
            },

            fetchLevels() {
                axios.get('/api/school/getLevels').then(({ data }) => {
                    this.level_options = data;
                })

            },

            uniqueArray(arr) {
                return !!arr.reduce(function (a, b) { return (a === b) ? a : NaN; });
            },

            tinyMCE: function () {

            },

            getTags: function () {
                axios.get('/api/hashtag/all').then(response => {
                    this.options = response.data
                    this.options.forEach(function (item) {
                        item.code = item.slag
                    });
                });
            },

            addTag: function (newTag) {
                const tag = {
                    name: newTag,
                    code: newTag
                }
                this.options.push(tag)
                this.value.push(tag)
            },

            todayDate: function () {
                var today = new Date();
                var dd = today.getDate();
                var mm = today.getMonth() + 1; //January is 0!
                var yyyy = today.getFullYear();

                if (dd < 10) {
                    dd = '0' + dd
                }

                if (mm < 10) {
                    mm = '0' + mm
                }

                today = dd + '-' + mm + '-' + yyyy;
                // today = mm + '-' + dd + '-' + yyyy
                this.end_at = today
                this.today = today
            },

            getLimits() {
                var parent = this
                var i = 1
                axios.get('/api/getScholarshipLimits').then(({ data }) => {
                    parent.criteria_options.forEach((item) => {
                        console.log(data['cr' + i])
                        item.limit = data['cr' + i]
                        if (item.limit == 0) {
                            item.$isDisabled = true
                        }
                        i++
                    })
                })
            },

            customLabel({ name, limit }) {
                return `${name}`
            },

            saveScholarship() {
                axios.post('/api/school/scholarshipSave', {
                    'financial': this.financial_value.id,
                    'financial_amount': this.financial_amount,
                    'level': this.level_value,
                    'studies': this.study_value,
                    'criteria': this.criteria_value.id,
                    'end_at': this.end_at,
                    'exams': this.exams,
                    'exams_date': this.exams_date,
                    'terms': this.terms,
                    'tags': this.value,
                    'allWinners': this.allWinners,
                    'winners': this.winners,
                    'price': this.price
                }).then(({ data }) => {
                    if (data.message == 'SAVED SUCCESSFULLY') window.location = data.url
                    else {
                        console.log(data.message)
                        // window.location = "/error"
                    }
                })
            }
        },

        watch: {
            criteria_value() {
                if (this.criteria_value) {
                    this.financial_disabled = false
                    console.log(this.financial_disabled)



                } else {
                    this.financial_value = null
                    this.financial_disabled = true
                    console.log(this.financial_disabled)
                }
            },

            financial_value() {
                if (this.financial_value && this.financial_amount > 0) {
                    this.levels_disabled = false
                } else {
                    this.level_value = null
                    this.levels_disabled = true
                }
            },

            financial_amount() {
                if (this.financial_value && this.financial_amount > 0) {
                    this.levels_disabled = false
                } else {
                    this.level_value = null
                    this.levels_disabled = true
                }
            },

            level_value() {
                if (this.level_value) {
                    this.study_value = null
                    this.fetchStudies()
                    this.studies_disabled = false
                } else {
                    this.study_value = []
                    this.studies_disabled = true
                }
            },

            end_at() {
                if (this.end_at) {
                    this.terms_disabled = false
                } else {
                    this.terms_disabled = true
                }
            },

            allStudies() {
                if (this.allStudies) {
                    this.study_value = []
                    var parent = this
                    this.study_options.forEach((item) => {
                        item.study.forEach((i) => {
                            parent.study_value.push(i)
                        })
                    })
                }
            },

            study_value() {
                var parent = this
                if (this.study_value) {
                    parent.testStudy = []
                    this.study_value.forEach((item) => {
                        parent.testStudy.push(item.section_id)
                    })
                }
                if (this.testStudy && this.testStudy.length > 1) this.multipleSectionsSelected = !this.uniqueArray(parent.testStudy)
                else this.multipleSectionsSelected = false

                if (this.study_value && this.study_value.length > 0) this.settings_disabled = false
                else this.settings_disabled = true
            },

            hashChanged() {
                console.log(this.hash)
            }
        },

        updated() {
            console.log(window.location.hash)
        },


        mounted() {
            $('#fullpage').fullpage({
                anchors: ['firstPage', 'secondPage', 'thirdPage', 'fourthPage', 'fifthPage'],
                scrollingSpeed: 500,
                menu: '#mmenu'
            });
            $.fn.fullpage.setAllowScrolling(false);

            var vm = this
            this.fetchLevels()
            this.getTags()
            this.getLimits()

            setTimeout(function () { console.log(vm.criteria_options) }, 100);

            // Event.$on('saveScholarship', () =>
            //   this.saveScholarship()
            // )

            Event.$on('datePick', function (val) {
                vm.end_at = val
                // vm.errorDate()
            })

            Event.$on('examsdate', function (val) {
                vm.exams_date = val
                // vm.errorDate()
            })
        }
    }
</script>