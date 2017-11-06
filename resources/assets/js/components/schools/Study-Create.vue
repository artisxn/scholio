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
             @tag="addSection">
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
             @tag="addStudy">
             </multiselect>
         </div>

         <div class="col-xs-6 text-left tag-name" >

             {{levels.name}}

         </div>

         <div class="col-xs-6 text-left tag-name" >

             {{sections.name}}

         </div>

         <div v-for="tag in studies" class="col-xs-6 text-left tag-name" >

             {{tag.name}}

         </div>

         <div>
             <button @click="save()">Add study</button>
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
                studies: []
            }
        },

        methods:{
            save(){
                console.log(this.levels.name)
            },

            addStudy(newTag) {
                 const study = {id:0, name: newTag }
                 this.studyOptions.push(study)
                 this.studies.push(study)
            },

            getLevels(){
                axios.get('/api/school/getLevelsWithRelations').then(this._loadData)
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

                        item.study.forEach(function(item){
                            const study = {
                                id: item.id,
                                name: item.name
                            }

                            parent.studyOptions.push(study)
                        })
                    })
                })
            }
        },

        mounted(){
            this.getLevels();
        }
    }
</script>