<template>
    <div>
        <div class="levels">
             <label class="typo__label">Level</label>
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

         <div class="sections">
             <label class="typo__label">Section</label>
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

         <div class="studies">
             <label class="typo__label">Study</label>
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

         <div class="col-xs-6 text-left tag-name" v-if="levels">

             {{levels.name}}

         </div>

         <div class="col-xs-6 text-left tag-name" v-if="sections">
            {{ sections.name }}
         </div>

         <div v-for="tag in studies" class="col-xs-6 text-left tag-name" >

             {{tag.name}}

         </div>

         <div>
             <button @click="save()" class="btn btn-primary">Add study</button>
         </div>

         <hr>
         <div>
             <button @click="deleteAllStudies" class="btn btn-danger">Delete All Studies</button>
         </div>
         <div v-for="level in currentStudies">
             <div style="font-size: 30px">{{ level.level.name }}</div>
             <div v-for="section in level.sections">
                <div style="font-size: 20px">{{ section.section.name }}</div>
                <hr>
                <div v-for="study in section.studies">
                    <div>{{study.study.name}} 
                        <span>
                            <i class="fa fa-trash-o" aria-hidden="true" @click="deleteStudy(study.study.id)"></i>
                        </span>
                    </div>
                </div>
                <hr>
            </div>
         </div>
    </div>
</template>

<style>
    .studies{
        padding-bottom: 300px;
    }
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
                currentStudies: []
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
                console.log(data)
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
                    console.log(data)
                })
            },

            deleteAllStudies(){
                axios.post('/api/school/deleteAllStudies').then(({data})=>{
                    console.log(data)
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
                    this.newSection = false
                }

                if(this.sections) this.studyDisabled = false
                else { 
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

                if(this.levels) this.sectionDisabled = false
                
            }
        },

        mounted(){
            this.getLevels();
            this.getCurrentStudies();
        }
    }
</script>