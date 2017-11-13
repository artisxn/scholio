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

        <div class="step4">
            <div>

                <!--<h2>Βήμα 4 </h2>-->
                <div>
                    <h3>{{ lang('panel_scholarships.create.terms') }}</h3>



                    <div class="col-lg-4 col-md-6 col-sm-6" >
                        <div style="" class="pull-left"> {{ lang('panel_scholarships.create.winners') }}</div>
                        <div style="width: 240px; margin: 25px 0 0 0;">
                            <input type="number" name="winners" min=1 max=20 v-model="winners" :disabled="allWinners" v-if="!allWinners">
                            <input type="checkbox" v-model="allWinners">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                            <div style="" class="pull-left"> {{ lang('panel_scholarships.create.active') }}: </div>
                            <div class="clearfix" ></div>
                            <!--v-on:click="errorDate" :class="{'error': error}"-->
                            <input type="text" id="datepicker" size="30" class="ll-skin-cangas pull-left"
                                   style="margin-top: 5px; height: 35px; border: 1px solid #d2d2d2; border-radius: 3px;"
                                   v-bind:value="end_at" onchange="Event.$emit('datePick', event.target.value)"
                                    :class="{'error':error}">
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="funkyradio" style="width: 240px; margin: 8px 0 0 0;">
                            <div class="funkyradio-success">
                                <input type="checkbox" id="exams" v-model="exams">
                                <label for="exams"> {{ lang('panel_scholarships.create.exams') }}</label>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="funkyradio" style="width: 240px; margin: 8px 0 0 0;">
                            <div class="funkyradio-success">
                                <input type="checkbox" id="withTerms" v-model="withTerms">
                                <label for="withTerms"> {{ lang('panel_scholarships.create.terms') }}</label>
                            </div>
                        </div>
                    </div>


                    <div id="" v-if="withTerms" style="margin-top: 130px;">
                        <span style="color: transparent">.</span>
                        <tinymce id="editor" v-model="terms" :options="tinyOptions" @change="tinyMCE" :content='content'></tinymce>
                         <div><span>{{ lang('panel_scholarships.create.remaining') }}:</span> <span id="chars_left"></span></div>
                    </div>



                </div>
            </div>
        </div>

        <div>
            <multiselect 
                 v-model="value" 
                 tag-placeholder="Προσθήκη νέας ετικέτας" 
                 placeholder="Αναζητήστε ή Προσθέστε ετικέτα"
                 label="name" 
                 track-by="code" 
                 :options="options" 
                 deselectLabel="Αφαίρεση"
                 :selectLabel="lang('panel_scholarships.create.select')"
                 :selectedLabel="lang('panel_scholarships.create.selected')"
                 :multiple="true" 
                 :taggable="true" 
                 @tag="addTag">
             </multiselect>
        </div>
        
    </div>
</template>

<style>
.step-container-height{height: 500px}
    .tag-name{padding: 0 1px; margin: 3px 0;}
    .step1{
        height: 300px;
    }
    .step4MinHeight {min-height: 300px!important;}

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
                allWinners: false,
                winners: 1,
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
                    console.log(this.options)
                });
            },
            addTag: function(newTag) {
                const tag = {
                  name: newTag,
                  code: newTag
                }
                console.log(newTag)
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
            var vm = this
            this.fetchLevels()
            this.getTags()

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