<template>
    <div>
        <div class="step1">
            <div>Step1:</div>
            <div>
                <div style="z-index: 10; position: absolute;">
                    <multiselect 
                    v-model="financial_value" 
                    :options="financial_options" 
                    track-by="name" label="name" 
                    :searchable="false" 
                    :close-on-select="false" 
                    :show-labels="false" 
                    placeholder="Επιλέξτε Οικονομικό πακέτο"
                    :deselectLabel="lang('panel_studies.input-delete')"
                    :selectLabel="lang('panel_scholarships.create.select')"
                    :selectedLabel="lang('panel_scholarships.create.selected')"
                    ></multiselect>
                </div>

                <div class="" style="width: 50%; margin-left: 25%; position: absolute; top: 100px" v-if="financial_value">
                    <div class="input-group " style="padding: 15px 0; z-index: 1" v-if="financial_value.id==1">
                        <input type="text" class="form-control" placeholder="20" aria-describedby="basic-addon1" v-model="financial_amount">
                        <span class="input-group-addon" id="basic-addon1">%</span>
                    </div>

                    <div class="input-group" style=" padding: 15px 0; z-index: 1" v-if="financial_value.id==2">
                        <input type="text" class="form-control" placeholder="800" aria-describedby="basic-addon2" v-model="financial_amount">
                        <span class="input-group-addon" id="basic-addon2">€</span>
                    </div>

                    <div class="input-group" style=" padding: 15px 0; z-index: 1" v-if="financial_value.id==3">
                        <input type="text" class="form-control" placeholder="2" aria-describedby="basic-addon3" v-model="financial_amount">
                        <span class="input-group-addon" id="basic-addon3">{{ lang('panel_scholarships.create.months') }}</span>
                    </div>
                </div>

            </div>
        </div>

        <div class="step2">
            <div>Step2:</div>
            <div>
                <multiselect 
                v-model="criteria_value" 
                :options="criteria_options" 
                track-by="name" label="name" 
                :searchable="false" 
                :close-on-select="false" 
                :show-labels="false" 
                placeholder="Επιλέξτε Κριτήρια"
                :deselectLabel="lang('panel_studies.input-delete')"
                :selectLabel="lang('panel_scholarships.create.select')"
                :selectedLabel="lang('panel_scholarships.create.selected')"
                :disabled="criteria_disabled"
                ></multiselect>

            </div>
        </div>

        <div class="step3">

            <div>
                <multiselect 
                v-model="level_value" 
                :options="level_options" 
                track-by="name" label="name" 
                :searchable="false" 
                :close-on-select="false" 
                :show-labels="false" 
                placeholder="Επιλέξτε Επίπεδο"
                :deselectLabel="lang('panel_studies.input-delete')"
                :selectLabel="lang('panel_scholarships.create.select')"
                :selectedLabel="lang('panel_scholarships.create.selected')"
                :disabled="levels_disabled"
                ></multiselect>
            </div>
            <div>
                <multiselect 
              v-model="study_value" 
              :options="study_options" 
              :multiple="multipleFeature" 
              group-values="study" 
              group-label="section" 
              placeholder="Type to search" 
              track-by="name" 
              label="name"
              :disabled="studies_disabled"
              @remove="allStudies = false">
              <span slot="noResult">Oops! No elements found. Consider changing the search query.</span>
          </multiselect>
            </div>

            <div>
                ALL STUDIES<input id="checkBox" type="checkbox" v-model="allStudies">
                <button @click="study_value = []" v-if="study_value && study_value.length > 2">DELETE ALL</button>
            </div>
        </div>

        <div v-if="study_value && study_value.length > 0 && !multipleSectionsSelected">
            <img :src="study_value[0].icon" height="30px">
        </div>

        
        
    </div>
</template>

<style>
    .step1{
        height: 300px;
    }
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
                multipleFeature: true,
                criteria_disabled: true,
                studies_disabled: true,
                keywords_disabled: true,
                terms_disabled: true,
                levels_disabled: true,
                financial_amount: 0,
                financial_value: [],
                financial_options: [ 
                    { id:1, name:window.lang.panel_scholarships.create.financial1 }, 
                    { id:2, name:window.lang.panel_scholarships.create.financial2 }, 
                    { id:3, name:window.lang.panel_scholarships.create.financial3 }
                ],
                criteria_amount: 0,
                criteria_value: [],
                criteria_options: [ 
                     { id: 1, name: window.lang.panel_scholarships.create.criteria1 },
                     { id: 2, name: window.lang.panel_scholarships.create.criteria2 },
                     { id: 3, name: window.lang.panel_scholarships.create.criteria3 },
                     { id: 4, name: window.lang.panel_scholarships.create.criteria4 },
                     { id: 5, name: window.lang.panel_scholarships.create.criteria5 }
                ],
                study_value: [],
                study_options: [],
                level_value: [],
                level_options: [],
                allStudies: false,
                testStudy: [],
                multipleSectionsSelected: false
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
            }
        },

        watch:{
            financial_value(){
                if(this.financial_value){
                    this.criteria_disabled = false
                }else{
                    this.criteria_value = null
                    this.criteria_disabled = true
                }
            },

            criteria_value(){
                if(this.criteria_value){
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
            }
        },

        mounted(){
            this.fetchLevels()
        }
    }
</script>