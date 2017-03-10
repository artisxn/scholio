<template>
        <div class="row" >
            <div id="smartwizard" class="" >
                <ul class="clearfix">
                    <li><a href="#step-1">Βήμα 1<br /><small class="mar-le-10">Οικονομική <p style="margin-top: -18px;">Προσφορά</p> </small></a></li>
                    <li><a href="#step-2">Βήμα 2<br /><small class="mar-le-10">Σπουδές/Ειδικότητα</small></a></li>
                    <li><a href="#step-3">Βήμα 3<br /><small class="mar-le-10">Κριτήρια/Όροι</small></a></li>
                    <li><a href="#step-4">Βήμα 4<br /><small class="mar-le-10">Όροι Συμμετοχής</small></a></li>

                </ul>

                <div class="row" >
                    <div id="step-1" class="step-anchor">
                        <div class="step centered-text">
                            <!--<h2>Βήμα 1 </h2>-->
                            <div class="step-box" style="">
                                <div class="step-img">
                                    <img  class="step-image" src="/panel/assets/images/steps/step1-reduce2.png" alt="scholio logo" v-if="financial_id==1">
                                    <img  class="step-image" src="/panel/assets/images/steps/step1-hand2.png" alt="scholio logo" v-if="financial_id==2">
                                    <img  class="step-image" src="/panel/assets/images/steps/step1-clock2.png" alt="scholio logo" v-if="financial_id==3">
                                </div>
                                <select class="selectpicker" data-width="100%" v-model="financial_id">
                                    <option data-icon="fa fa-scissors" :value="1">&nbsp; Μείωση Διδάκτρων</option>
                                    <option data-icon="fa fa-money" :value="2">&nbsp; Ποσό Επιδότησης</option>
                                    <option data-icon="fa fa-clock-o" :value="3">&nbsp; Χρόνος Δωρεάν Φοίτησης</option>
                                </select>

                                <div class="" style="width: 50%; margin-left: 25%;">
                                    <div class="input-group " style="padding: 15px 0; z-index: 1" v-if="financial_id==1">
                                        <input type="text" class="form-control" placeholder="20" aria-describedby="basic-addon1" v-model="financial_amount">
                                        <span class="input-group-addon" id="basic-addon1">%</span>
                                    </div>

                                    <div class="input-group" style=" padding: 15px 0; z-index: 1" v-if="financial_id==2">
                                        <input type="text" class="form-control" placeholder="800" aria-describedby="basic-addon2" v-model="financial_amount">
                                        <span class="input-group-addon" id="basic-addon2">€</span>
                                    </div>

                                    <div class="input-group" style=" padding: 15px 0; z-index: 1" v-if="financial_id==3">
                                        <input type="text" class="form-control" placeholder="2" aria-describedby="basic-addon3" v-model="financial_amount">
                                        <span class="input-group-addon" id="basic-addon3">Μήνες</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="step-2" class="step-anchor" >
                        <div class="step centered-text">
                            <!--<h2>Βήμα 2 </h2>-->
                            <div class="step-box"  :class="{'step3check': (levelsName.length>2)}" :style="[!col_iek_eng_dan_mus, {minHeight: 380+'px'}]">
                                <div class="step-img" v-if="checkedStudies.length">
                                    <div v-for="image in studies[selectedLevel].section">
                                        <img  class="step-image" :src="'/panel/assets/images/steps/'+image.name+'.png'" alt=""
                                              v-if="image.name==sectionsName[selectedLevel][selectedSection]" >
                                    </div>
                                </div>

                                <div v-if="col_iek_eng_dan_mus">
                                    <!--Select  Επιλογή Section -->
                                    <select class="select-step2"  v-model="selectedSection"  @change="pullStudies()" v-if="sectionsCounter>1 ">
                                        <option :value="indexSection"
                                                v-for="(section,indexSection) in sectionsName[selectedLevel]">
                                            {{section}}</option>
                                    </select>

                                    <!--Select  Επιλογή Study -->
                                    <select class="select-step2"  v-model="selectedStudy" v-if="checkedStudies.length">
                                        <option :value="indexStudy"
                                                v-for="(sect,indexStudy) in studiesArray">
                                            {{sect}}
                                        </option>
                                    </select>

                                    <!--CheckBox  Επιλογή Level -->
                                    <div class="checkBox-step2">

                                        <div class="funkyradio" v-if="levelsName.length>1 && levelsName.length<3">
                                            <div class="funkyradio-success" v-for="(level, indexLevel) in levelsName">
                                                <input type="radio" :name="'radio-'+indexLevel" @change="changeLevel() "
                                                       :id="'radio-'+indexLevel" :value="indexLevel" v-model="selectedLevel"/>
                                                <label v-if="level!=null" :for="'radio-'+indexLevel" > {{level}}  </label>
                                            </div>
                                        </div>

                                        <select class="select-step2"  v-if="levelsName.length>2" v-model="selectedLevel"  @change="changeLevel()" >
                                            <option :value="indexLevel"
                                                    v-for="(level, indexLevel) in levelsName">
                                                    {{level}}
                                            </option>
                                        </select>
                                    </div>
                                </div>


                                <div  v-if="!col_iek_eng_dan_mus && checkedStudies.length">
                                    <select class="select-step2"  v-model="selectedStudy">
                                        <option :value="indexStudy"
                                                v-for="(study,indexStudy) in levelsName">
                                                {{study}}</option>
                                    </select>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div id="step-3" class="step-anchor">
                        <div class="step centered-text">
                            <!--<h2>Βήμα 3 </h2>-->
                            <div class="step-box" >
                                <div class="step-img">
                                    <img  class="step-image" src="/panel/assets/images/steps/step3-skills1.png" alt="" v-if="criteria_id==1">
                                    <img  class="step-image" src="/panel/assets/images/steps/step3-best.png" alt="" v-if="criteria_id==2">
                                    <img  class="step-image" src="/panel/assets/images/steps/step3-help.png" alt="" v-if="criteria_id==3">
                                    <img  class="step-image" src="/panel/assets/images/steps/step3-friends.png" alt="" v-if="criteria_id==4">
                                    <img  class="step-image" src="/panel/assets/images/steps/step3-open.png" alt="" v-if="criteria_id==5">
                                </div>

                                <select class="selectpicker" data-live-search="true" data-mobile="false" data-size='3' data-width="100%"  v-model="criteria_id" >
                                    <option data-icon="fa " value="1">&nbsp; Υποτροφία Ταλέντου/Δεξιοτήτων</option>
                                    <option data-icon="fa " value="2">&nbsp; Υποτροφία Αριστείας</option>
                                    <option data-icon="fa " value="3">&nbsp; Υποτροφια με Κοινωνικά Κριτήρια</option>
                                    <option data-icon="fa " value="4">&nbsp; 1+1 Φίλοι / Αδέλφια</option>
                                    <option data-icon="fa " value="5">&nbsp; Υποτροφία Ανοιχτού Τύπου</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div id="step-4" class="step-anchor">
                        <div class="step centered-text" >

                            <!--<h2>Βήμα 4 </h2>-->
                            <div class="step-box" style="" :class="{'step4MinHeight': !withTerms}">
                                <h3>Όροι και Λεπτομέρειες Συμμετοχής</h3>

                                    <div class="col-lg-4">
                                        <div style="" class="pull-left"> Υποτροφία ενεργή μέχρι: </div>
                                        <div class="clearfix"></div>
                                        <!--v-on:click="errorDate" :class="{'error': error}"-->
                                        <input type="text" id="datepicker" size="30" class="ll-skin-cangas pull-left"
                                               style="margin-top: 10px; height: 35px; border: 1px solid #d2d2d2; border-radius: 3px;"
                                               v-bind:value="end_at" onchange="Event.$emit('datePick', event.target.value)"
                                                :class="{'error':error}">

                                        <div class="clearfix"></div>
                                    </div>




                                <div class="col-lg-4 col-sm-6">
                                    <div class="funkyradio" style="width: 240px; margin: 15px 0 0 0;">
                                        <div class="funkyradio-success">
                                            <input type="checkbox" id="exams" v-model="exams">
                                            <label for="exams"> Υποτροφία με εξετάσεις</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-4 col-sm-6">
                                    <div class="funkyradio" style="width: 240px; margin: 15px 0 0 0;">
                                        <div class="funkyradio-success">
                                            <input type="checkbox" id="withTerms" v-model="withTerms">
                                            <label for="withTerms"> Όροι και Προϋποθέσεις</label>
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>



                                <div id="" v-if="withTerms">
                                    <span style="color: transparent">.</span>
                                    <tinymce id="editor" v-model="terms" :options="tinyOptions" @change="tinyMCE" :content='content'></tinymce>
                                     <div><span>Υπολοιπο Χαρακτήρων:</span> <span id="chars_left"></span></div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</template>

<style>

/* jQuery Datepicker scholio Styling */
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

    .step4MinHeight {min-height: 300px!important;}

@media (min-width: 1420px) {
    #step-4 .step .step-box { width: 1100px;  margin-left: -290px; margin-right: auto }
}


@media (min-width: 1220px) and (max-width: 1419px) {
    #step-4 .step .step-box { width: 900px;  margin-left: -190px; margin-right: auto }
}

</style>

<script>
    import VueTinymce from 'vue-tinymce'
    Vue.use(VueTinymce)

    var max_chars = 100; //max characters
    var chars_without_html = 0;
    
    export default {
        computed: {
            studies: function(){
                return this.all_studies
            }
        },
        mounted: function () {
            var vm=this

            this.getCheckedStudies()
            this.getTerms()

            Event.$on('saveScholarship', () =>
              this.saveScholarship()
            )

            Event.$on('datePick',function  (val) {
                    vm.end_at = val
                    vm.errorDate()
                }
            )
        },
        data: function() {
            return {
                lastTerms: '',
                financial_id: 1,
                financial_amount: 20,
                criteria_id: 1,
                step1Select: 'reduce', // set the default value
                step3Select: 'talent',
                all_studies: [''],
                selectedLevel: 0,
                selectedSection: 0,
                selectedStudy: 0,
                studiesArray: [],
                checkedStudies: [],
                studyTable: [],
                levelsName: [],
                sectionsName: [],
                studiesName: [],
                sectionsCounter: 0,
                exams: false,
                studiesId: [],
                end_at: null,
                today: null,
                col_iek_eng_dan_mus: false,
                error: false,
                content: '<p> Αναφέρετε εδώ τους <strong> Όρους και Προϋποθεσεις </strong> της Υποτροφίας</p>',
                terms: null,
                withTerms:false,
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
                }
            }
        },

        methods: {
            eww: function(){
                console.log('as')
            },
            tinyMCE: function() {

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
//                console.log(today)
                this.end_at=today
                this.today=today
            },


            getStudies: function () {
                axios.get('/api/school/studies/')
                        .then(response => {
                    console.log('API 1 Full Studies OK ')
                this.all_studies = response.data['levels']
                this.changeLevel()
                this.init()
            });
            },
            changeLevel: function(){
                this.selectedSection=0;
                this.selectedStudy=0;
                this.pullStudies()
                this.countSections()
            },
            countSections: function(){
                this.sectionsCounter=0
                for (var section in this.sectionsName[this.selectedLevel]){
                    this.sectionsCounter++
                }
            },
            getCheckedStudies: function () {
                axios.get('/api/school/getSchoolStudies')
                        .then(response => {
                    this.studyTable = response.data
//                console.log(this.studyTable )
                var parent = this
                console.log('API 2 checkedStudies initial push OK' )
                this.studyTable.forEach(function (studies) {
                    parent.checkedStudies.push(studies[0].id);
                })
                this.getStudies()
            })
            },

            init: function () {
                this.todayDate();

                /* This condition MUST CHANGE .. needed School_Type_ID from an API */
                if (this.studyTable[0][0].section[0].level.id<7  ||  this.studyTable[0][0].section[0].level.id>21
                ){
                    this.col_iek_eng_dan_mus=true
                }

//                console.log(this.studyTable);

                console.log('init DONE ! checkedStudies.length='+this.checkedStudies.length);
                for (var level in this.studyTable ){
                    var i = this.studyTable[level][0].section[0].level;
                    this.levelsName[i.id] = i.name;
//                    console.log(i.id)
                }
//                console.log(this.levelsName);

                  this.levelsName=this.levelsName.filter(function(e){return e});  //** Delete Empty Values **//

                   for (level in this.levelsName){
                       this.sectionsName[level]=[]
                       this.studiesName[level]=[]
                       var section=0
                       for (var study in this.studyTable ) {
                           var lv = this.studyTable[study][0].section[0].level.name;
                           var sec = this.studyTable[study][0].section[0].name;
                           if(this.levelsName[level]==lv ) {
                               var finded=false;
                               for (var i in this.sectionsName[level]) {
                                   if ( this.sectionsName[level][i]==sec ) {finded=true}
                               }
                               if (!finded){
                                   this.studiesName[level][section]=[]
                                   this.sectionsName[level][section]= sec;
                                   section++
                               }
                           }
                        }
                    }
//                console.log(this.levelsName);
                this.pullStudies()
                this.countSections()
                this.todayDate()
                },
                pullStudies: function(){

                    this.studiesArray=[];
                    this.studiesId=[];
                    for ( var study in this.studyTable ){
                        var levNm=this.studyTable[study][0].section[0].level.name
                        var secNm=this.studyTable[study][0].section[0].name
                        var stdNm=this.studyTable[study][0]
//                        console.log(stdNm.id)
                                        /* This condition may have to  CHANGE  for some schools types.. */
                            if( ( levNm == this.levelsName[this.selectedLevel] )  &&  ( secNm==this.sectionsName[this.selectedLevel][this.selectedSection] ) || !this.col_iek_eng_dan_mus  ) {
                                this.studiesArray.push(stdNm.name);
                                this.studiesId.push(stdNm.id);
//                                console.log(stdNm.id)
                            }
                        this.selectedStudy=0;
                    }
                },
                errorDate: function (){
                },

                getTerms: function(){
                    axios.get('/api/terms/last')
                        .then(response => {
                            if(response.data != 'NO'){
                                this.content = response.data
                            }
                        })
                },


                saveScholarship: function(){
                    var temp = 0;
                    if(this.exams) temp = 1;
                    if(!this.col_iek_eng_dan_mus){this.selectedLevel=this.selectedStudy}
                    axios.post('/api/scholarship/save', {
                        'school_id': window.Connection,
                        'financial_id': this.financial_id,
                        'financial_amount': this.financial_amount,
                        'study_id': this.studiesId[this.selectedStudy],
                        'criteria_id': this.criteria_id,
                        'end_at': this.end_at,
                        'winner_id': 0,
                        'exams':temp,
                        'terms':this.terms
                    })
                    .then(response=>{
                        console.log('END AT >> ' + this.end_at)
                        console.log('SAVE study= '+this.studiesArray[this.selectedStudy])
                        console.log('SAVE study_id= '+this.studiesId[this.selectedStudy])
                        console.log(response.data)
                        window.location = response.data.redirect
                    })
                }
            }
    }
</script>