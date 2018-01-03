<template>
    <div>
        <div class="levels col-xs-12 col-lg-6" style="margin-bottom: 30px;">
             <label class="typo__label">{{ lang('panel_studies.step1') }}</label>
             <multiselect 
             v-model="levels" 
             tag-placeholder="Προσθήκη νέου"
             :placeholder="lang('panel_studies.placeholder1')"
             label="name" 
             track-by="id"
             :optionsLimit="999"
             :options="levelOptions" 
             :deselectLabel="lang('panel_studies.input-delete')"
             :selectLabel="lang('panel_scholarships.create.select')"
             :selectedLabel="lang('panel_scholarships.create.selected')"
             :multiple="false" 
             :taggable="true"
             @tag="addLevel">
             </multiselect>
         </div>

         <div class="sections col-xs-12 col-lg-6" style="margin-bottom: 15px;" :style="[sectionDisabled ? {opacity: 0}:{}]">
             <label class="typo__label">{{ lang('panel_studies.step2') }}</label>
             <multiselect 
             v-model="sections" 
             tag-placeholder="Προσθήκη νέου"
             :placeholder="lang('panel_studies.placeholder2')"
             label="name" 
             track-by="id" 
             :options="sectionOptions" 
             :deselectLabel="lang('panel_studies.input-delete')"
             :selectLabel="lang('panel_scholarships.create.select')"
             :selectedLabel="lang('panel_scholarships.create.selected')"
             :multiple="false"
             :taggable="true"
             :allow-empty="true"
             @tag="addSection" :disabled="sectionDisabled">
             </multiselect>
         </div>

         <div class="studies col-xs-12" style="margin-top: 25px;" :style="[studyDisabled ? {opacity: 0}:{}]">
             <label class="typo__label">{{ lang('panel_studies.step3') }}</label>
             <multiselect 
             v-model="studies" 
             tag-placeholder="Προσθήκη νέας ετικέτας" 
             :placeholder="lang('panel_studies.placeholder3')"
             label="name" 
             track-by="id" 
             :options="studyOptions" 
             :deselectLabel="lang('panel_studies.input-delete')"
             :selectLabel="lang('panel_scholarships.create.select')"
             :selectedLabel="lang('panel_scholarships.create.selected')"
             :multiple="true" 
             :taggable="true" 
             :maxHeight="200"
             @tag="addStudy" :disabled="studyDisabled">
             </multiselect>
         </div>

         <div style="clear: both; margin: 0 0 90px 10px;" :style="[saveDisabled ? {opacity: 0}:{}]">
             <button @click="save()" class="btn btn-primary" :disabled="saveDisabled">{{ lang('panel_studies.save') }}</button>
         </div>


        <div class="mar-right" :class="[{'selected-title-container': currentStudies.length==1 }]">
            <div class="selected-title">{{ lang('panel_studies.selected') }}</div>
        </div>
         <!-- PRELOADER -->

        <div v-if="studiesCounter > 0">
            <transition name="fade">
                <div v-if="currentStudies.length == 0" style="margin: -20px  0 10px 15px;">
                    <div class="animated-background col-xs-12 col-md-6 col-xl-4"  v-for="i in 5" style="margin-top: 80px;">
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




            <transition name="fade2">
                <div  v-if="currentStudies.length > 0"  >
                    <div class="" :class="[{'masonry2': currentStudies.length==1 }]" >

                        <div v-for="(level, index) in currentStudies" class="" style="position: relative!important;"
                             :class="[ {'col-md-6': currentStudies.length==2 },{'col-md-6 col-xl-4': currentStudies.length>2 },{'clearFloat':  currentStudies.length>2 && (index)%2==0 }]">


                            <div v-if="currentStudies.length > 1" style="font-size: 140%; margin-top: 5px; padding-bottom: 10px" >{{ level.level.name }}</div>

                                <div v-for="(section,sc) in level.sections" style="position: relative!important; margin-bottom: 10px;"
                                     :class="[{'item2':  currentStudies.length>0 }]" class="">


                                    <div style="">
                                            <img :src="section.section.icon" alt="" style="height: 24px; filter: grayscale(40%)">

                                              <span class="tool">
                                                <span class="dots-section" style="">  {{ section.section.name }}</span>
                                                <!--<span class="tooltiptext tooltip">{{section.section.name }}</span>-->
                                              </span>
                                    </div>

                                    <div v-for="(study,st) in section.studies" style="position: relative!important;" class="">
                                        <div>
                                            <span class="tool">

                                                <span :id="index+'study'+sc+'_'+st" class="dots-study" :class="[ {'dots-study-xl': currentStudies.length==2 }]">
                                                    {{ study.study.name }}
                                                    <span style="color: #ccc; margin-left: 5px;" v-if="study.study.user.length && study.study.user.length > 0">

                                                    {{ calcUserLength(study.study) }} <i class="fa fa-graduation-cap"></i>
                                                    </span>
                                                </span>

                                                <span class="tooltiptext tooltip">{{study.study.name }}</span>

                                            </span>


                                            <span><i class="fa fa-trash-o btn-delete" style="" aria-hidden="true" @click="deleteStudy(study.study.id)"
                                                     @mouseover="hoverStudy(index+'study'+sc+'_'+st)" @mouseleave="leaveStudy()">
                                            </i></span>

                                        </div>
                                    </div>
                            </div>
                        </div>

                    </div>

                    <div class="btn-deleteAll-container">
                        <button  class="btn btn-primary"  data-toggle="modal" data-target="#delete-modal">{{ lang('panel_studies.delete-all') }}</button>
                    </div>
                </div>
            </transition>
        </div>

        <div v-else>
            {{ counterMessage }}
        </div>




        <!-- ====== Modal Delete All Studies =======-->
        <div id="delete-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="top: 100px;">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="panel " style="background-color: #324c5a; height: 62px; border-bottom-right-radius: 0; border-bottom-left-radius: 0;">
                        <div class="panel-heading" style="height: 55px; color: #fff">
                            <button type="button" class="btn pull-right" data-dismiss="modal" style="background-color: transparent" >
                                x

                            </button>
                            <img src="/new/img/logoNX-light.png" alt="scholio logo" class="pull-left sc-logo" style="margin-top: 2px;">
                            <!--<img src="/new/img/logoNX-light-m.png" alt="scholio logo" class="pull-left sc-logo" style="margin-top: -4px;">-->
                            <!--<h3 class="pull-left panel-title" style="margin: 2px 0 0 15px; font-size: 170%">schol.io</h3>-->
                        </div>

                    </div>
                    <div class="panel-body">

                        <span>{{ lang('panel_studies.modal-message') }}</span>
                    </div>

                    <div class="modal-footer">
                        <div  class="btn btn-default btn-modal1" data-dismiss="modal">{{ lang('panel_studies.modal-reject') }}</div>
                        <div  class="btn btn-primary btn-modal2" data-dismiss="modal" @click="deleteAllStudies()">{{ lang('panel_studies.modal-submit') }}</div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal -->








    </div>




</template>

<style>
    .sc-logo{height: 45px;}
    .modal .modal-dialog .modal-content{padding: 0 0 20px 0; border: none; border-radius: 6px;}
    .panel-body{height: 120px; padding-top: 30px}
    .btn-modal1{margin: 0 15px 0 0 }
    .btn-modal2{margin: 0 25px 0 0 }


    .mar-right{margin-right: 20px;}
    .selected-title-container{margin-right: 10px;}
    .selected-title{
        margin-top: 50px; margin-bottom: 10px; color: #008da5; background-color: #f0f0f0; font-size: 150%; border-radius: 7px;  border: 1px solid #ccc; width: 100%; margin-left: 10px; padding: 10px 15px;
    }

    .masonry2{padding-left: 10px;}
    .item,.item2{border-color: #c3c3c3}

    .dots-section{display:inline-block;
        width: 85%;
        white-space: nowrap;
        overflow:hidden !important;
        text-overflow: ellipsis;
        font-size: 115%;
        color: #008da5;
        margin-bottom: -6px;
    }

    .dots-study,.dots-study-xl{
        display:inline-block;
        width: 93%;
        white-space: nowrap;
        overflow:hidden !important;
        text-overflow: ellipsis;
        padding-top: 2px;
    }


    @media (max-width: 1879px) {
        .clearFloat{  clear: both;  }
    }
    @media (min-width: 1880px) {
        .col-xl-6{width: 50%}
        .col-xl-4{width: 33.33%}
        .dots-study-xl{max-width: 85%}
    }

    @media (max-width: 414px) {
        .dots-section{ width: 88%;}
        .dots-study{width: 94%; font-size: 97%}
        .container{padding-left: 0; padding-right: 0}
    }

    @media (min-width: 415px) {
        .dots-section{ width: 90%;}
        .dots-study{width: 95%}
    }

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

    .hover-study{color: #FD6A33!important;}

    .btn-primary,.btn-primary:visited,.btn-primary:focus{background-color: #008da5; border: none;}
    .btn-primary:hover{background-color: #006d7d;}
    .btn-deleteAll-container{clear: both; padding-top: 40px; margin-left: auto; margin-right: auto; text-align: center;}



    /* =========TOOLTIP=========*/

    @media (max-width: 480px) {
            .tool {  position: relative;  }
            .tooltiptext  {
                font-weight: 300;
                visibility: hidden;
                width: 300px;
                background-color: #007991;
                color: #fff;
                text-align: center;
                border-radius: 5px;
                padding: 4px 1px;
                position: absolute;
                z-index: 1;
                bottom: 120%;
                margin-left: -110px;
                opacity: 0;
                transition: opacity 0.1s;
                background-color: #007991;
            }
            .tooltip{width: 230px;  bottom: 25px; left: 150px;}
            .tool:hover .tooltiptext{  visibility: visible; opacity: 1; }
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
                currentStudies: [],
                saveDisabled: true,
                appear: false,
                studiesCounter: 0,
                counterMessage: ''
            }
        },

        methods:{
            calcUserLength(study){
              let i = 0
              study.user.forEach((item)=>{
                if(item.pivot.school_id === window.Connection){
                  i++
                }
              })

              return i + ""
            },

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
                console.log(data)
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

            hoverStudy(id){
               console.log(id)
               console.log($('#'+id))
                $('#'+id).addClass('hover-study')
                // document.getElementById(id).classList.add('hover-study');
            },
            leaveStudy(){
                $('.dots-study').removeClass('hover-study');
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
          console.log(window.Connection)
            this.getLevels();
            this.getCurrentStudies();
            this.getStudiesCounter();
        }
    }
</script>