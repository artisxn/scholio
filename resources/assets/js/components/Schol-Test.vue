

<template>
    <div>
        <ul id="mmenu">
            <li data-menuanchor="firstPage" class="">
                <a href="#firstPage">
                    <div class="btn-fixed">Κριτήρια</div>
                </a>
            </li>
            <!--<li data-menuanchor="secondPage" class="" :class="[{'low-opacity': financial_disabled}]" v-if="!financial_disabled">-->
            <li data-menuanchor="secondPage" class="" >
                <a href="#secondPage">
                    <div class="btn-fixed">Οικονομικά</div>
                </a>
            </li>
            <li data-menuanchor="thirdPage" class="" :class="[{'low-opacity': levels_disabled}]" v-if="!levels_disabled">
                <a href="#thirdPage">
                    <div class="btn-fixed">Σπουδές</div>
                </a>
            </li>
            <li data-menuanchor="fourthPage" class="" :class="[{'low-opacity': terms_disabled}]" v-if="!terms_disabled">
                <a href="#fourthPage">
                    <div class="btn-fixed">Όροι</div>
                </a>
            </li>
        </ul>
        <div id="right" class="right"></div>
        <div id="fullpage" class="section-container">

            <div class="section sec1" data-anchor="firstPage">
                <div class="section-box" >
                    <div class="step-title">Βήμα 1ο: Επιλέξτε Κριτήρια</div>
                    <div class="criteria">
                        <multiselect   v-model="criteria_value" 
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
                            <div>Lorem Ipsum</div>
                        </span>
                    </div>
                </div>
            </div>

            <div class="section sec2" data-anchor="secondPage" ></div>
            <!--<div class="section sec2" data-anchor="secondPage" v-if="!financial_disabled"></div>-->
            <div class="section sec3" data-anchor="thirdPage"  v-if="!levels_disabled"></div>
            <div class="section sec4" data-anchor="fourthPage" v-if="!terms_disabled"></div>
        </div>

    </div>
</template>

<style>
    .section-container{
        margin-top: -30px;
        margin-bottom: 30px;
    }
    .section{}


    li.active a{
        color: orange!important;
    }


    .btn-fixed {
        color: #999;
        border: 1px solid #bbb;
        border-radius: 13px; background: #e1e1e1; padding: 5px 20px;
        margin-left: 15px;
        font-size: 120%;
    }

     li.active a {}
     li.active a .btn-fixed {
     border-color: #008da5;  background: #fff;
      color: #008da5!important;}

     .btn-fixed:hover {
         border-color: #FD6A33 !important;
         border-radius: 13px;
         background: #e1e1e1;
         color: #FD6A33!important;
     }
     li.active a.btn-fixed:hover {
       color: #FD6A33!important;
     }

    #mmenu>li{
        float:left;
        list-style: none;
    }
    #mmenu{
        top: 90px;
        height: 40px;
        width: 100%;
        margin:  0 0 0 -50px;
        position: fixed;
        z-index: 50;
    }

    .section-box{
        background: greenyellow; height: 80%; padding: 20px; border-radius: 10px;
        box-shadow: 0 0 10px 2px #bbb
    }

    .fp-tableCell {
        vertical-align: top;
        padding-top:120px!important;
    }


    .sec1 {
        background: transparent;
    }
    .sec2{
        background: #f2f2f2
    }
    .sec3 {
        background: #e8e8e8
    }
    .sec4 {background: #ddd}



    .right{width: 200px; top: 200px; right:90px; background: cyan; height: 300px; position: fixed; z-index: 200;}


    .criteria .multiselect,         .step3 .multiselect{width: 480px;}
    .criteria .multiselect__input,  .step3 .multiselect__input{width: 450px;}
    .criteria .multiselect__single, .step3 .multiselect__single{width: 430px;}
</style>




<script>

    import Multiselect from '../scholio-multiselect';
    import VueTinymce from 'vue-tinymce';
    Vue.use(VueTinymce)

    var max_chars = 100; //max characters
    var chars_without_html = 0;

    export default {
        components: {Multiselect},
        data(){
            return{
                hash: window.location.hash,
                check: false,
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

        watch:{
            hash(){
                console.log(this.hash)
            }
        },

        mounted(){

            $('#fullpage').fullpage({
                anchors:['firstPage', 'secondPage', 'thirdPage', 'fourthPage'],
                scrollingSpeed: 500,
                menu: '#mmenu'
            });

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