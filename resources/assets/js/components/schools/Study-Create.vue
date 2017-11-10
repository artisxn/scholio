<template>
    <div>

        <div >

        </div>
        <div class="levels col-xs-12 col-lg-6" style="margin-bottom: 30px;">
             <label class="typo__label">Βήμα 1: Επιλέξτε Επίπεδο Σπουδών</label>
             <multiselect 
             v-model="levels" 
             tag-placeholder="Προσθήκη νέας ετικέτας" 
             placeholder="Αναζητήστε ή Προσθέστε ετικέτα"
             label="name" 
             track-by="id"
             :optionsLimit="999"
             :options="levelOptions" 
             deselectLabel="Αφαίρεση"
             :selectLabel="lang('panel_scholarships.create.select')"
             :selectedLabel="lang('panel_scholarships.create.selected')"
             :multiple="false" 
             :taggable="true"
             @tag="addLevel">
             </multiselect>
         </div>

         <div class="sections col-xs-12 col-lg-6" style="margin-bottom: 15px;" :style="[sectionDisabled ? {opacity: 0.6}:{}]">
             <label class="typo__label">Βήμα 2: Επιλέξτε Τομέα Σπουδών</label>
             <multiselect 
             v-model="sections" 
             tag-placeholder="Προσθήκη νέας ετικέτας" 
             placeholder="Αναζητήστε ή Προσθέστε ετικέτα"
             label="name" 
             track-by="id" 
             :options="sectionOptions" 
             deselectLabel="Αφαίρεση"
             :selectLabel="lang('panel_scholarships.create.select')"
             :selectedLabel="lang('panel_scholarships.create.selected')"
             :multiple="false"
             :taggable="true"
             :allow-empty="true"
             @tag="addSection" :disabled="sectionDisabled">
             </multiselect>
         </div>

         <div class="studies col-xs-12" style="margin-top: 25px;" :style="[studyDisabled ? {opacity: 0.1}:{}]">
             <label class="typo__label">Βήμα 3: Επιλέξτε Ειδικότητα Σπουδών</label>
             <multiselect 
             v-model="studies" 
             tag-placeholder="Προσθήκη νέας ετικέτας" 
             placeholder="Αναζητήστε ή Προσθέστε ετικέτα"
             label="name" 
             track-by="id" 
             :options="studyOptions" 
             deselectLabel="Αφαίρεση"
             :selectLabel="lang('panel_scholarships.create.select')"
             :selectedLabel="lang('panel_scholarships.create.selected')"
             :multiple="true" 
             :taggable="true" 
             :maxHeight="200"
             @tag="addStudy" :disabled="studyDisabled">
             </multiselect>
         </div>

         <div style="clear: both; margin: 0 0 90px 10px;" :style="[saveDisabled ? {opacity: 0.3}:{}]">
             <button @click="save()" class="btn btn-primary" :disabled="saveDisabled">Αποθήκευση</button>
         </div>


        <div style="margin-top: 50px; margin-bottom: 10px; color: #008da5; background-color: #f0f0f0; font-size: 150%; border-radius: 7px;  border: 1px solid #ccc; width: 100%; padding:12px;">
            <div>Επιλεγμένες Σπουδές</div>
        </div>
         <!-- PRELOADER -->

        <div v-if="studiesCounter > 0">
            <transition name="fade">
                <div v-if="currentStudies.length == 0" style="margin: -20px  0 10px 0;">
                    <div class="animated-background col-xs-12 col-sm-6"  v-for="i in 5" style="margin-top: 80px;">
                        <div class="background-masker header-top"></div>
                        <div class="background-masker header-left"></div>
                        <div class="background-masker header-right"></div>
                        <div class="background-masker header-bottom"></div>

                        <div class="background-masker subheader-left"></div>
                        <div class="background-masker subheader-right"></div>
                        <div class="background-masker subheader-bottom"></div>

                        <div class="background-masker content-top"></div>
                        <div class="background-masker content-first-end"></div>
                        <div class="background-masker content-second-line"></div>
                        <div class="background-masker content-second-end"></div>
                        <div class="background-masker content-third-line"></div>
                        <div class="background-masker content-third-end"></div>
                    </div>
                </div>
            </transition>


            <transition name="fade2" >
                <div  v-if="currentStudies.length > 0" >
                    <div style="position: relative!important;">

                        <div v-for="(level, index) in currentStudies" class="col-xs-12"  :class="{'col-md-6': currentStudies.length>1}" style="position: relative!important; background-color: #bbb;">
                            <div style="font-size: 140%; margin-top: 20px;" >{{ level.level.name }}</div>

                                <div v-for="section in level.sections" style="position: relative!important;" :class="{'col-md-6': currentStudies.length==1}" >
                                <div style="">
                                    <img :src="section.section.icon" alt="" style="height: 24px; filter: grayscale(90%)">

                                  <span style="font-size: 111%; display: inline-block; margin: 0 0 10px 4px; padding-top: 30px; background-color: #aaa;">
                                       {{ section.section.name }}
                                  </span>


                                </div>
                                <div v-for="study in section.studies" style="position: relative!important; background-color: #999;">
                                    <div>{{ study.study.name }}
                            <span>
                                <i class="fa fa-trash-o btn-delete" aria-hidden="true" @click="deleteStudy(study.study.id)"></i>
                            </span>
                                    </div>
                                </div>
                                <div style="margin-bottom: 30px;"></div>
                            </div>
                            <div :class="{'clearfix': (index+1)%2==0}">
                                
                            </div>
                        </div>

                        <div style="clear: both;">
                            <button @click="deleteAllStudies" class="btn btn-danger">Delete All Studies</button>
                        </div>
                    </div>
                </div>
            </transition>
        </div>

        <div v-else>
            {{ counterMessage }}
        </div>

    </div>




</template>

<style>

    /*.fade-enter-active, .fade-leave-active {*/
        /*transition: opacity 0.3s*/
    /*}*/
    /*.fade-enter, .fade-leave-to {*/
        /*opacity: 0*/
    /*}*/

    .fade2-enter-active, .fade2-leave-active {
        transition: opacity 0.8s
    }
    .fade2-enter, .fade2-leave-to  {
        opacity: 0;
    }


    .studies{
        padding-bottom: 30px;
    }

    .btn-delete{cursor: pointer}
    .btn-delete:hover{color: #FD6A33}

    .btn-primary{background-color: #008da5; border: none;}
    .btn-primary:hover{background-color: #006d7d;}
</style>

<script>
    import Multiselect from '../../scholio-multiselect';

    export default{
        components: {Multiselect},
        data(){
            return{
                levelOptions: [],
                sectionOptions: [],
                studyOptions: [],
                levels: [],
                sections: [],
                studies: [],
                newSection: false,
                newLevel: false,
                allStudies: [],
                allSections:[],
                sectionDisabled: true,
                studyDisabled: true,
                currentStudies: [],
                saveDisabled: true,
                appear: false,
                studiesCounter: 0,
                counterMessage: ''
            }
        },

        methods:{
            save(){
                if(this.levels && this.sections && this.studies){
                    axios.post('/api/school/studySave',{
                        level: this.levels,
                        section: this.sections,
                        study: this.studies
                    }).then(({data})=>{
                        if(data == 'OK'){
                            window.location.reload();
                        }
                    })
                }
            },

            addStudy(newTag) {
                 const study = {id:0, name: newTag }
                 this.studyOptions.push(study)
                 this.studies.push(study)
            },

            addSection(newTag){
                this.newSection = true
                var section = {id:0, name: newTag}

                this.sections = []
                this.sectionOptions.push(section)
                this.sections = (section)
            },

            addLevel(newTag){
                this.newLevel = true
                const level = {id:0, name: newTag }

                this.levels = []
                this.levelOptions.push(level)
                this.levels = (level)
                this.sections = []
                this.newSection = true
            },

            getLevels(){
                axios.get('/api/school/getLevelsWithRelations').then(this._loadData)
            },

            getCurrentStudies(){
                axios.get('/api/school/getCurrentStudies').then(this._loadStudies)
            },

            _loadStudies({data}){
                this.currentStudies = data
            },

            _loadData({data}){
                var parent = this
                data.forEach(function(item){
                    const level = {
                        id: item.level_id,
                        name: item.level_name
                    }

                    parent.levelOptions.push(level)
    
                    item.section.forEach(function(item){
                        const section = {
                            id: item.section_id,
                            name: item.section_name
                        }

                        parent.sectionOptions.push(section)
                        parent.allSections.push(section)

                        item.study.forEach(function(item){
                            const study = {
                                id: item.id,
                                name: item.name
                            }

                            parent.studyOptions.push(study)
                            parent.allStudies.push(study)
                        })
                    })
                })
            },

            deleteStudy(study){
                axios.post('/api/school/deleteStudy', {study:study}).then(({data})=>{
                    if(data == 'OK'){
                        window.location.reload();
                    }
                })
            },

            deleteAllStudies(){
                axios.post('/api/school/deleteAllStudies').then(({data})=>{
                    if(data == 'OK'){
                        window.location.reload();
                    }
                })
            },

            getStudiesCounter(){
                axios.get('/api/school/studiesCount').then(({data})=>{
                    this.studiesCounter = data
                    if(data == 0){
                        this.counterMessage = 'Δεν εχεις επιλεξει σπουδες ακομα'
                    }
                })
            }
        },

        watch:{
            sections(){
                if(this.sections && !this.newSection){
                    var parent = this
                    axios.get('/api/school/getStudiesFromSection/ '+ this.sections.id).then(({data})=>{
                        parent.studyOptions = data
                    })

                    axios.get('/api/school/getCheckedStudiesFromSection/'+ this.sections.id).then(({data})=>{
                        parent.studies = data
                    })
                }

                if(this.newSection){
                    this.studyOptions = (this.allStudies)
                    this.studies = null
                    this.newSection = false
                }

                if(this.sections && this.sections != []){
                    this.saveDisabled = false
                    this.studyDisabled = false
                } 
                else { 
                    this.saveDisabled = true
                    this.studyDisabled = true 
                    this.studies = null
                }

                if(this.sections && this.sections.length == 0){
                    this.studyDisabled = true 
                    this.studies = null
                }
            },

            levels(){
                if(this.levels && !this.newLevel){
                    var parent = this
                    axios.get('/api/school/getSectionsFromLevel/'+ this.levels.id).then(({data})=>{
                        parent.sectionOptions = data
                        parent.sections = null
                    })
                }

                if(this.levels && this.levels != []){
                    this.sectionDisabled = false
                } else{
                    this.studies = null
                    this.studyDisabled = true 
                    this.sections = []
                    this.sectionDisabled = true
                } 

                if(this.newLevel){
                    this.newSection = true
                }
                
            },

            studies(){
                
            }
        },

        mounted(){
            this.getLevels();
            this.getCurrentStudies();
            this.getStudiesCounter();
        }
    }
</script>