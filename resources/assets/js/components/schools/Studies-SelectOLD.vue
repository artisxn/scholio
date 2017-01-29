<template>
<div>
    <h3  class="title ml20">Επιλογή Ειδικοτήτων Σπουδών</h3>

    <button v-on:click="setSchoolStudies">Save</button>

    <div>
        <div class="row margin-top-30">

            <div v-if="studies.length">
                <!-- ====== Select DropDown LEVEL ====== -->
                <div v-if="studies.length>1">
                    Level
                    <select class="sel1" v-model="selectedLevel" style="margin: 20px; width: 280px;" @change="selectedSection=0">
                        <option v-for="(level,indexLevel) in studies" :value="indexLevel" >
                            {{ indexLevel+1 }} &nbsp
                            {{ level.name}}
                        </option>
                    </select>
                </div>
                <h3 v-else> {{ studies[0].name }} </h3>

                <div style="clear: both"></div>

                <!-- ========= Select DropDown SECTION  ========= -->
                <span v-if="studies[selectedLevel].section" >

                <span v-if="studies[selectedLevel].section.length>1">
                    Section
                    <select class="sel2" v-model="selectedSection">
                        <option v-for="(section,indexSection) in studies[selectedLevel].section" :value="indexSection" >
                            {{selectedLevel+1}}.{{indexSection+1}} &nbsp
                            {{ section.name}}

                        </option>

                    </select>
                </span>
                <p v-if="studies[selectedLevel].section.length==1">
                    {{selectedLevel+1}}.1 &nbsp {{studies[selectedLevel].section[0].name}}
                </p>


                <!-- ========== Select CheckBox Studies ======== -->
                <div v-if="studies[selectedLevel].section.length>0">

                    <div v-if="studies[selectedLevel].section[selectedSection].study" style="margin-top: 5px; margin-left: -5px;">

                        <div v-for="(study,indexStudy) in studies[selectedLevel].section[selectedSection].study" :value="indexStudy"
                             :class="{'col-sm-6': (studies[selectedLevel].section[selectedSection].study.length>14)}">
                            <span>   {{selectedLevel+1}}.{{selectedSection+1}}.{{indexStudy+1}} {{ studies[selectedLevel].section[selectedSection].study[indexStudy].status }} - {{ studies[selectedLevel].section[selectedSection].study[indexStudy].id }}</span>

                            <input id=""
                                   type="checkbox"
                                   :checked="study.status"
                                   @click="IfCheck(indexStudy, study.status, study.id)"
                                   :value="study.id"
                                   v-model="checkedStudies"
                            ><label for=""> </label>
                            {{ study.name}}
                        </div>
                    </div>
                </div>

            </span>

                <hr>

                <!-- ======== Preview SELECTED Studies ========== -->
                <div v-for="(level,indexLevel) in studies" style="margin-top: 40px;">
                    <h3 class="title ml5" v-if="levels[indexLevel]>0" style="clear: both; padding-top: 40px;"> Level &nbsp
                        {{indexLevel+1}}: &nbsp {{level.name}} </h3>

                    <div v-for="(section,indexSection) in level.section">
                        <h4 class="title ml5"  v-if="sections[indexLevel][indexSection]>0" style="clear: both; margin-top: 10px;"> Section &nbsp {{indexLevel+1}}.{{indexSection+1}}: &nbsp {{section.name}}</h4>
                        <div v-for="(study,indexStudy) in section.study" class="">
                        <span v-if="studiesStatus[indexLevel][indexSection][indexStudy]"
                              :class="{'col-sm-6': (checkedStudies.length>10)}">
                            {{indexLevel+1}}.{{indexSection+1}}.{{indexStudy+1}} {{study.name}}
                            <span>
                                  <i class="fa fa-trash btn-del" @click="deleteStudy(indexLevel,indexSection,indexStudy,study.id )" style="margin-left: 30px;">
                                  </i>
                            </span>
                        </span>
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
</style>

<script>

    export default {
        
        computed: {
            studies: function(){
                return this.all_studies
            }
        },

        data: function() {
            return{
                all_studies: [''],
                checkedStudies:[],
                selectedLevel:0,
                selectedSection:0,
                selectedStudy:0,
                status:[],
                sectionsStatus:[],
                studiesStatus:[],
                levels:[],
                sections:[],
                testClass:true,
                test: [],
                testTable: []
            }

        },
        mounted: function () {
            this.getStudies()
            this.getCheckedStudies()
        },

        methods: {
            getCheckedStudies: function(){
                axios.get('/api/school/getSchoolStudies')
                    .then(response => {
                        this.testTable = response.data
                        console.log('>>>>' + response.data[0][0].section[0].level.id +' ' +response.data[0][0].section[0].level.name )
                        console.log('>>>>' + response.data[0][0].section[0].id+ ' ' + response.data[0][0].section[0].name)
                        console.log('>>>>' + response.data[0][0].name)
                        var parent = this
                        this.testTable.forEach(function(studies){
                            parent.checkedStudies.push(studies[0].id);
                        })
                    });
            },

            setSchoolStudies: function(schoolCheckedStudies){
                axios.post('/api/school/studies/', {checkedStudies: this.checkedStudies}).then(response => {
                    console.log(response.data)
                });
            },

            getStudies: function(){
                axios.get('/api/school/studies/')
                    .then(response => {
                        console.log(response.data['levels'])
                        this.all_studies = response.data['levels']
                        this.createTableStatus()
                    });
            },

            createTableStatus: function(){
                for (var level = 0; level < this.all_studies.length; level++)
                {       
                        // this.all_studies.status=false;
                        this.levels[level]=0;
                        this.sections[level]=[];
                        this.sectionsStatus[level]=[];
                        this.studiesStatus[level]=[];

                    for (var section = 0; section < this.all_studies[level].section.length; section++) {
                                this.all_studies[level].section[section].status=false;
                                this.sectionsStatus[level][section]=false;
                                this.studiesStatus[level][section]=[];
                                this.sections[level][section]=0;

                        for (var study = 0; study < this.all_studies[level].section[section].study.length; study++) {

                            if($.inArray(this.all_studies[level].section[section].study[study].id, this.checkedStudies) == -1){
                                this.all_studies[level].section[section].study[study].status = false;
                                this.studiesStatus[level][section][study]= false;
                            }else{
                                this.all_studies[level].section[section].study[study].status = true;
                                this.studiesStatus[level][section][study] = true;
                            }
                        }
                    }
                }
            },

            IfCheck: function(ppp,check,studyID){
                var i=this.selectedLevel;
                var j=this.selectedSection;
                var k=ppp;
                console.log('i='+(i+1)+' j='+(j+1)+' k ='+(k+1));
                this.all_studies[i].section[j].study[k].status = !this.all_studies[i].section[j].study[k].status;
                this.studiesStatus[i][j][k]=!this.studiesStatus[i][j][k];
                console.log('i='+(i+1)+' j='+(j+1)+' k ='+(k+1));
                console.log('status changed to '+this.studiesStatus[i][j][k]);
                if (!check) {
                    this.levels[i]++;           // level[0]=3 έχουμε επιλεξει 3 sections apo to level[0]
                    this.sections[i][j]++;      // sections[0][0]=3 έχουμε επιλεξει 3 studies apo to sections[0][0]
                    this.checkedStudies.push(studyID);
                    console.log('import studies'+(i+1)+'.'+(j+1)+'='+this.sections[i][j]);
                } else {
                    this.levels[i]--;
                    this.sections[i][j]--;
                    console.log('delete studies'+(i+1)+'.'+(j+1)+'='+this.sections[i][j]);
                }
            },

            deleteStudy: function(i,j,k,studyID){
                this.all_studies[i].section[j].study[k].status=false;
                this.studiesStatus[i][j][k]=false;
                this.levels[i]--;
                this.sections[i][j]--;
                var index = this.checkedStudies.indexOf(studyID);
                this.checkedStudies.splice(index, 1);
            },

            selectLevel: function(le){
                console.log((le+1));
                this.selectedLevel=le;
                this.selectedSection=0;
            },

            selectSection: function(se){
                console.log((se+1));
                this.selectedSection=se;
            },

//            searchLevel: function (levelID){
//
//                for (var level = 0; level < this.checkedStudies.length; level++){
////                    if(  this.testTable[level][0].section[0].level.id ==levelID){ return true }
//                }
//
//            }



        }
    }
</script>