<template>
    <div id="content">
        <div style="margin-left: 20px;" v-if="col_iek_eng_dan_mus">
            <h3  class="title ml20" style="margin-left: -10px">Επιλογή Ειδικοτήτων Σπουδών</h3>
            <div class="row margin-top-30">
                <div v-if="studies.length">
                    <!-- ====== Select DropDown LEVEL ====== -->
                    <div v-if="studies.length>1">
                        <!--Level-->
                        <select class="sel1" v-model="selectedLevel" style="margin: 10px; width: 280px;" @change="selectedSection=0">
                            <option v-for="(level,indexLevel) in studies" :value="indexLevel" >
                                {{ level.name}}
                            </option>
                        </select>
                    </div>
                    <h3 v-else> {{ studies[0].name }} </h3>

                    <div style="clear: both"></div>

                    <!-- ========= Select DropDown SECTION  ========= -->
                <span v-if="studies[selectedLevel].section" >

                <span v-if="studies[selectedLevel].section.length>1">
                    <!--Section-->
                    <select class="sel2" v-model="selectedSection" style="margin: 10px; ">
                        <option v-for="(section,indexSection) in studies[selectedLevel].section" :value="indexSection" >
                            {{ section.name}}
                        </option>
                    </select>
                </span>
                    <!-- ========== Select CheckBox Studies ======== -->
                <div v-if="studies[selectedLevel].section.length>0">
                    <div v-if="studies[selectedLevel].section[selectedSection].study" style="margin-top: 5px; padding: 0">
                        <div v-for="(study,indexStudy) in studies[selectedLevel].section[selectedSection].study" :value="indexStudy"
                             :class="[{'col-md-6 col-xxl-4 col-xxl-3': (studies[selectedLevel].section[selectedSection].study.length>14) }]">
                            <input id=""
                                   type="checkbox"
                                   :checked="study.status"
                                   @click="IfCheck(indexStudy, study.status, study.id, studies[selectedLevel].id, studies[selectedLevel].section[selectedSection].id )"
                                   :value="study.id"
                                   v-model="checkedStudies"
                            ><label for=""> </label>
                            {{ study.name}}
                        </div>
                    </div>
                </div>
            </span>
                    <div class="clearfix" style="clear: both"></div>

                    <!--<button class="btn btn-info" v-on:click="setSchoolStudies" style="margin-top: 20px; margin-left: 10px;" >-->
                        <!--<i class="fa fa-check-square-o"  aria-hidden="true" style="margin-right: 10px;"></i>-->
                        <!--Οριστικοποίηση Επιλογών-->
                    <!--</button>-->

                    <hr style="	height: 10px;!important; border: 0; box-shadow: 0 10px 10px -10px #324c5a inset; margin-top: 30px; margin-left: 10px; margin-right: 30px;">

                    <button class="btn btn-info" v-on:click="clearAllStudies" style="margin-top: 20px; margin-left: 10px;" v-if="checkedStudies.length">
                        <i class="fa fa-trash-o"  aria-hidden="true" style="margin-right: 10px;"></i>
                        Διαγραφή Επιλογών
                    </button>

                    <!-- ======== Preview SELECTED Studies ========== -->
                    <div v-for="(level,indexLevel) in studies" >
                        <div :class="[{'col-md-6': (levels[ studies[indexLevel].id ]>0 ) }]">
                            <h3 class="title ml5"  v-if="levels[ studies[indexLevel].id ]>0" style="clear: both; padding-top: 25px;">
                                {{level.name}} </h3>

                            <div v-for="(section,indexSection) in level.section">
                                <div>
                                    <h4 class="title ml5"  v-if="sections[ studies[indexLevel].id ][ studies[indexLevel].section[indexSection].id ]>0" style="clear: both; margin-top: 10px;">
                                        <!--Section &nbsp {{studies[indexLevel].id}}.{{studies[indexLevel].section[indexSection].id}}: &nbsp-->
                                        {{section.name}}</h4>
                                    <div v-for="(study,indexStudy) in section.study" class="">
                                    <span v-if="studiesStatus[indexLevel][indexSection][indexStudy]">
                                        {{study.name}}
                                        <span>
                                              <i class="fa fa-trash btn-del"
                                                 @click="deleteStudy(indexLevel,indexSection,indexStudy,study.id, studies[indexLevel].id, studies[indexLevel].section[indexSection].id )"
                                                 style="margin-left: 10px;">
                                              </i>
                                        </span>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div v-if="!col_iek_eng_dan_mus">
            <h3  class="title ml20" style="margin-left: -10px">Επιλογή Επιπέδων Σπουδών</h3>
            <div>
                <div v-for="(level,indexLevel) in all_studies">
                    <div v-for="(section,indexSection) in all_studies[indexLevel].section">
                        <div v-for="(study,indexStudy) in all_studies[indexLevel].section[indexSection].study">
                            <input
                                   type="checkbox"
                                   :checked="study.status"
                                   @click="IfCheck(indexStudy, study.status, study.id, studies[indexLevel].id, studies[indexLevel].section[indexSection].id,indexLevel,indexStudy)"
                                   :value="study.id"
                                   v-model="checkedStudies"
                            ><label for=""> </label>
                            {{ study.name}}
                            <!--&#45;&#45;{{indexLevel}}.{{indexLevel}}.{{indexStudy}}=={{study.id}}-->

                        </div>
                    </div>
                </div>
            </div>



        </div>

        </div>

</template>

<style>
    *{
        font-family: Helvetica;
    }
    h3{color: #008da5}
    h4{color: #324c5a; text-decoration:underline }
    p span {color: #a9a9a9}
    .btn-del:hover{color: orange; cursor: pointer;}
    .ml5{margin-left: -10px;}
    .ml20{margin-left: -20px;}
    select {
        margin: 5px;
        border: 1px solid #008da5;
        background: #fefefe;
        padding: 5px 35px 5px 5px;
        font-size: 105%;
        height: 34px;
    }

    .sel1{width: 220px;}
    .sel2{width: 455px; margin-left: 2px;}

    input[type="checkbox"] {
        padding-left:5px;
        padding-right:5px;
        border-radius:5px;

        /*-webkit-appearance:button;*/

        border: solid 1px #008da5;
        background-color: #ffffff;
        color:#FFF;
        white-space: nowrap;
        overflow:hidden;

        width:20px;
        height:15px;
    }
    #cover {position: fixed; height: 100%; width: 100%; top:0; left: 0; background: #e8e8e8; z-index:9999;
        font-size: 60px; text-align: center; padding-top: 200px; color: #fff;
    }

    @media (min-width: 1880px) {
        .col-xxl-4 {  width: 33.33%;  }
    }
    @media (min-width: 2280px) {
        .col-xxl-3 {  width: 24.5%;  }
    }
</style>

<script>
    export default {
        computed: {
            studies: function () {
                return this.all_studies
            }
        },

        data: function () {
            return {
                all_studies: [''],
                checkedStudies: [],
                selectedLevel: 0,
                selectedSection: 0,
                selectedStudy: 0,
                status: [],
                sectionsStatus: [],
                studiesStatus: [],
                levels: [],
                sections: [],
                testClass: true,
                col_iek_eng_dan_mus:false,
                checkedStudiesTemp:{}
            }

        },
        mounted: function () {
            this.getCheckedStudies()
        },

        methods: {
            getCheckedStudies: function () {
                axios.get('/api/school/getSchoolStudies')
                        .then(response => {
                    this.testTable = response.data
                var parent = this
                this.testTable.forEach(function (studies) {
                    parent.checkedStudies.push(studies[0].id);
                    console.log(' API 2 checkedStudies initial push OK' )
                })
                this.getStudies()
                }, success => {
                    console.log('ads')
                });
                
            },
            getStudies: function () {
                axios.get('/api/school/studies/')
                        .then(response => {
                    console.log('API 1 Full Studies OK ')
                    this.all_studies = response.data['levels']
                this.createTableStatus()
                });
            },
            setSchoolStudies: function (schoolCheckedStudies) {
                axios.post('/api/school/studies', { checkedStudies: this.checkedStudies })
                .then(response => {
                   console.log(response.data)
                });
            },
            createTableStatus: function () {
                console.log('createTable DONE !'+this.all_studies.length );
                for (var level = 0; level < this.all_studies.length; level++) {
                    var i = this.all_studies[level].id;
                    this.levels[i] = 0;
                    this.sections[i] = [];
                    this.sectionsStatus[level] = [];
                    this.studiesStatus[level] = [];

                    for (var section = 0; section < this.all_studies[level].section.length; section++) {
                        var j = this.all_studies[level].section[section].id;
                        this.all_studies[level].section[section].status = false;
                        this.sectionsStatus[level][section] = false;
                        this.studiesStatus[level][section] = [];
                        this.sections[i][j] = 0;

                        for (var study = 0; study < this.all_studies[level].section[section].study.length; study++) {

                            if ($.inArray(this.all_studies[level].section[section].study[study].id, this.checkedStudies) == -1) {
                                this.all_studies[level].section[section].study[study].status = false;
                                this.studiesStatus[level][section][study] = false;
                            } else {
                                this.all_studies[level].section[section].study[study].status = true;
                                this.studiesStatus[level][section][study] = true;
                            }
                        }
                    }
                }
                this.init();
            },

            IfCheck: function (indexStudy, check, studyID, levelID,sectionID,indLev,indSec) {

                if(!this.col_iek_eng_dan_mus){
                    this.selectedLevel=indLev
                    this.selectedSection=indSec
                    console.log(indLev,indLev,indexStudy,studyID)
                }

                var i = this.selectedLevel;
                var j = this.selectedSection;
                var k = indexStudy;
                this.all_studies[i].section[j].study[k].status = !this.all_studies[i].section[j].study[k].status;
                this.studiesStatus[i][j][k] = !this.studiesStatus[i][j][k];
                if (!check) {
                    this.levels[levelID]++;           // level[0]=3 έχουμε επιλεξει 3 sections apo to level[0]
                    this.sections[levelID][sectionID]++;      // sections[0][0]=3 έχουμε επιλεξει 3 studies apo to sections[0][0]

//                    NO PUSH with v-model >>> push item, pushes the item for 2nd time after v-model sync
//              this.checkedStudies.push(studyID);

                    console.log(this.checkedStudies)
//                    console.log(this.checkedStudies.length)
                } else {
                    this.levels[levelID]--;
//                    this.sections[levelID][sectionID]--;
                    var index = this.checkedStudies.indexOf(studyID);

                    console.log(this.checkedStudies)
//                    console.log(this.checkedStudies.length)

//                    NO SPLICE  with vue model >>> splice item, delete the item for 2nd time
//                    this.checkedStudies.splice(index, 1);
                    console.log('studyId='+studyID,' index='+index)
                }
                this.setSchoolStudies();
            },

            deleteStudy: function (i, j, k, studyID, levelID, sectionID) {
                this.all_studies[i].section[j].study[k].status = false;
                this.studiesStatus[i][j][k] = false;
                this.levels[levelID]--;
                this.sections[levelID][sectionID]--;
                var index = this.checkedStudies.indexOf(studyID);
                this.checkedStudies.splice(index, 1);
                this.setSchoolStudies();
            },

            clearAllStudies: function () {
                for ( var level in this.all_studies) {
                    var i = this.all_studies[level].id;
                    this.sections[i]=[]
                    for (var section in  this.all_studies[level].section){
                        var j = this.all_studies[level].section[section].id;
                        this.sections[i][j]=0;
                        for (var study in this.all_studies[level].section[section].study){
                            this.all_studies[level].section[section].study[study].status = false;
                            this.studiesStatus[level][section][study] = false;
                        }
                    }
                }
                this.levels.length=0;

                this.checkedStudies=[];
                this.setSchoolStudies();
            },

            selectLevel: function (le) {

                this.selectedLevel = le;
                this.selectedSection = 0;
            },

            selectSection: function (se) {
                this.selectedSection = se;
            },

            init: function () {

                /* This condition MUST CHANGE .. needed School_Type_ID from an API */
              if (this.all_studies[0].section[0].study[0].name!=this.all_studies[0].name){
                  this.col_iek_eng_dan_mus=true
              }
                console.log(this.col_iek_eng_dan_mus)

                console.log('init DONE ! checkedStudies.length='+this.checkedStudies.length);
                for (var level = 0; level < this.checkedStudies.length; level++){
                    var i = this.testTable[level][0].section[0].level.id;
                    var j = this.testTable[level][0].section[0].id;
                    this.levels[i]++
                    this.sections[i][j]++
                }
                console.log(this.checkedStudies)
                console.log(this.checkedStudies.length)
            }
        }
    }

   // $(document).ready(function(){$("#content").hide().fadeIn(2300);});
</script>