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
                                    <img  class="step-image" src="/panel/assets/images/steps/step1-reduce2.png" alt="scholio logo" v-if="step1Select=='reduce'">
                                    <img  class="step-image" src="/panel/assets/images/steps/step1-hand2.png" alt="scholio logo" v-if="step1Select=='amount'">
                                    <img  class="step-image" src="/panel/assets/images/steps/step1-clock2.png" alt="scholio logo" v-if="step1Select=='time'">
                                </div>
                                <select class="selectpicker" data-width="100%" v-model="step1Select">
                                    <option data-icon="fa fa-scissors" value="reduce">&nbsp; Μείωση Διδάκτρων</option>
                                    <option data-icon="fa fa-money" value="amount">&nbsp; Ποσό Επιδότησης</option>
                                    <option data-icon="fa fa-clock-o" value="time">&nbsp; Χρόνος Δωρεάν Φοίτησης</option>
                                </select>

                                <div class="" style="width: 50%; margin-left: 25%;">
                                    <div class="input-group " style="padding: 15px 0; z-index: 1" v-if="step1Select=='reduce'">
                                        <input type="text" class="form-control" placeholder="20" aria-describedby="basic-addon1" :value="financial_amount">
                                        <span class="input-group-addon" id="basic-addon1">%</span>
                                    </div>

                                    <div class="input-group" style=" padding: 15px 0; z-index: 1" v-if="step1Select=='amount'">
                                        <input type="text" class="form-control" placeholder="800" aria-describedby="basic-addon2" :value="financial_amount">
                                        <span class="input-group-addon" id="basic-addon2">€</span>
                                    </div>

                                    <div class="input-group" style=" padding: 15px 0; z-index: 1" v-if="step1Select=='time'">
                                        <input type="text" class="form-control" placeholder="2" aria-describedby="basic-addon3" :value="financial_amount">
                                        <span class="input-group-addon" id="basic-addon3">Μήνες</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="step-2" class="step-anchor" >
                        <div class="step centered-text">
                            <!--<h2>Βήμα 2 </h2>-->
                            <div class="step-box"  :class="{'step3check': (levelsName.length>2)}" >
                                <div class="step-img" v-if="checkedStudies.length">
                                    <div v-for="image in studies[selectedLevel].section">
                                        <img  class="step-image" :src="'/panel/assets/images/steps/'+image.name+'.png'" alt=""
                                              v-if="image.name==sectionsName[selectedLevel][selectedSection]">
                                    </div>
                                </div>

                                    <!--Select  Επιλογή Section -->
                                    <select class="select-step2"  v-model="selectedSection"  @change="pullStudies()" v-if="sectionsCounter>1">
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
                                        <div class="funkyradio" v-if="levelsName.length<4">
                                            <div class="funkyradio-success" v-for="(level, indexLevel) in levelsName">
                                                <input type="radio" :name="'radio-'+indexLevel" @change="changeLevel() "
                                                       :id="'radio-'+indexLevel" :value="indexLevel" v-model="selectedLevel"/>
                                                <label v-if="level!=null" :for="'radio-'+indexLevel" > {{level}}  </label>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <div id="step-3" class="step-anchor">
                        <div class="step centered-text">
                            <!--<h2>Βήμα 3 </h2>-->
                            <div class="step-box" >
                                <div class="step-img">
                                    <img  class="step-image" src="/panel/assets/images/steps/step3-skills1.png" alt="" v-if="step3Select=='talent'">
                                    <img  class="step-image" src="/panel/assets/images/steps/step3-best.png" alt="" v-if="step3Select=='best'">
                                    <img  class="step-image" src="/panel/assets/images/steps/step3-help.png" alt="" v-if="step3Select=='social'">
                                    <img  class="step-image" src="/panel/assets/images/steps/step3-friends2.png" alt="" v-if="step3Select=='friends'">
                                    <img  class="step-image" src="/panel/assets/images/steps/step3-open.png" alt="" v-if="step3Select=='open'">
                                </div>

                                <select class="selectpicker" data-live-search="true" data-mobile="false" data-size='3' data-width="100%"  v-model="step3Select" >
                                    <option data-icon="fa " value="talent">&nbsp; Υποτροφία Ταλέντου/Δεξιοτήτων</option>
                                    <option data-icon="fa " value="best">&nbsp; Υποτροφία Αριστείας</option>
                                    <option data-icon="fa " value="social">&nbsp; Υποτροφια με Κοινωνικά Κριτήρια</option>
                                    <option data-icon="fa " value="friends">&nbsp; 1+1 Φίλοι / Αδέλφια</option>
                                    <option data-icon="fa " value="open">&nbsp; Υποτροφία Ανοιχτού Τύπου</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div id="step-4" class="step-anchor">
                        <div class="step centered-text">

                            <!--<h2>Βήμα 4 </h2>-->
                            <div class="step-box" style="position: relative">
                                <h3>Όροι και Λεπτομέρειες Συμμετοχής</h3>
                                <div class="pull-left">
                                <div style="left: 20px; top: 80px;  position: absolute"> Υποτροφία ενεργή μέχρι: </div>
                                <input type="text" id="datepicker" size="30" class="ll-skin-cangas" 
                                        style="margin-top: 30px; height: 35px; border: 1px solid #d2d2d2; border-radius: 3px;" 
                                        v-bind:value="end_at" onchange="Event.$emit('datePick', event.target.value)">  
                                </div>
                                {{ end_at }}
                                <div class="clearfix"></div>
                                <div class="funkyradio" style="width: 240px; margin: 15px 0 0 0;">
                                    <div class="funkyradio-success">
                                        <input type="checkbox" id="exams" value="examsOn">
                                        <label for="exams"> Υποτροφία με εξετάσεις</label>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div>
                                    <div style="margin: 20px 0; left: 20px; position: absolute" >Δικαίωμα Συμμετοχής</div>
                                     <div class="clearfix" style="margin: 0 0 45px 0"></div>
                                    <textarea style="top: 370px; position: absolute"></textarea>
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
</style>

<script>
    export default {
        computed: {
            studies: function(){
                return this.all_studies
            }
        },
        mounted: function () {
            
            this.getCheckedStudies()

            Event.$on('saveScholarship', () =>
              this.saveScholarship()
            )

            Event.$on('datePick', (val) =>
              this.end_at = val
            )
        },
        data: function() {
            return{
                financial_amount: 0,
                step1Select:'reduce', // set the default value
                step3Select: 'talent',
                all_studies: [''],
                selectedLevel:0,
                selectedSection:0,
                selectedStudy:0,
                studiesArray:[],
                checkedStudies:[],
                studyTable:[],
                levelsName:[],
                sectionsName:[],
                studiesName:[],
                sectionsCounter:0,
                examsOn:true,
                studiesId:[],
                end_at: 13
            }
        },

        methods: {
            eww: function(){
                console.log('as')
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
                var parent = this
                console.log('API 2 checkedStudies initial push OK' )
                this.studyTable.forEach(function (studies) {
                    parent.checkedStudies.push(studies[0].id);
                })
                this.getStudies()
            })
            },

            init: function () {
                console.log('init DONE ! checkedStudies.length='+this.checkedStudies.length);
                for (var level in this.studyTable ){
                    var i = this.studyTable[level][0].section[0].level;
                    this.levelsName[i.id] = i.name;
                }
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
                this.pullStudies()
                this.countSections()
                },
                pullStudies: function(){
                    this.studiesArray=[];
                    this.studiesId=[];
                    for ( var study in this.studyTable ){
                        var levNm=this.studyTable[study][0].section[0].level.name
                        var secNm=this.studyTable[study][0].section[0].name
                        var stdNm=this.studyTable[study][0]
                            if( ( levNm == this.levelsName[this.selectedLevel] )  &&  ( secNm==this.sectionsName[this.selectedLevel][this.selectedSection] )  ) {
                                this.studiesArray.push(stdNm.name);
                                this.studiesId.push(stdNm.id);
                            }
                        this.selectedStudy=0;
                    }
                },

                saveScholarship: function(){
                    axios.post('/ppp', {
                        'school_id': window.Connection,
                        'financial_id': 1,
                        'financial_amount': this.financial_amount,
                        'study_id': this.studiesId[0],
                        'criteria_id': 2,
                        'end_at': this.end_at,
                        'winner_id': 0
                    })
                    .then(response=>{
                        console.log(response.data)
                    })
                }
            }
    }
</script>