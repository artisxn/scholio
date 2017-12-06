<template>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="m-t-0 header-title"><b>{{ lang('resource.requests.notifications') }}</b></h4>
                        <!--<p class="text-muted font-13">-->
                          <!--{{ lang('resource.requests.requests') }}-->
                        <!--</p>-->
                        <div class="p-20">
                            <div class="table-responsive">
                                <table class="table table-striped m-0 noti-table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th class="text-center">{{ lang('resource.requests.table.role') }}</th>
                                            <th>{{ lang('resource.requests.table.name') }}</th>
                                            <th class="text-center">{{ lang('resource.requests.table.date') }}</th>
                                            <th class="text-center">{{ lang('resource.requests.table.action') }}</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="notification in notifications" v-show='notification.type == "App\\Notifications\\UserAppliedForConnection"'>
                                            <td><img v-bind:src=notification.data.avatar style="width: 65px"></td>
                                              <td v-if="notification.data.role == 'student'" class="text-center">{{ lang('resource.requests.table.student') }}</td>
                                              <td v-if="notification.data.role == 'teacher'" class="text-center">{{ lang('resource.requests.table.teacher') }}</td>
                                            <td>{{ notification.data.name }}</td>
                                            <td class="text-center">{{ notification.created_at }}</td>
                                            <td class="text-center">
                                                <button v-on:click="load(notification.data)" class="btn btn-info" :disabled="buttonsDisabled">{{ lang('resource.requests.table.confirm') }}</button>
                                                <button v-on:click="deny(notification.id, notification.data.id)" class="btn btn-success" :disabled="buttonsDisabled">{{ lang('resource.requests.table.abort') }}</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <modal name="studiesTeacher" :width="800" :height="200">
            <div>
                Choose the study:
                <select v-model="selectedStudy">
                    <optgroup :label="level.level.name" v-for="level in sections">
                            <option v-for="section in level.sections">{{ section.section.name }}</option>
                    </optgroup>
                </select>

                or <input type="text" v-model="selectedStudy" size="80">
            </div>

            <div>
                Choose status of the user:
                <select v-model="selectedStatus">
                    <option>connected</option>
                    <option>allumni</option>
                </select>
            </div>
            
            <div>
                <button class="btn btn-primary" @click="accept">Save</button>
            </div>
        </modal>



        <!-- ====== studiesStudent Modal  ======= -->
        <modal name="studiesStudent" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="" name="form-work">

                        <div class="panel " style="background-color: #324c5a; height:90px; border-bottom-right-radius: 0; border-bottom-left-radius: 0; padding: 10px">
                            <div class="panel-heading" style=" color: #fff">
                                <button type="button" class="btn pull-right btn-close" >
                                    x
                                </button>
                                <img src="/new/img/logoNX-light.png" alt="scholio logo" class="pull-left modal-sc-logo">

                            </div>

                        </div>
                        <div class="panel-body">

                            <div class="section2-container ">
                                <div class="inner-section" style="">
                                    <div class="section-text centered-text">   <img class="modal-icon" src="/new/img/teacher/graduate.png" alt="">Επιλογή Σπουδών</div>
                                    <div class="input-container">

                                        <div>
                                            <select v-model="selectedStudy">
                                                <optgroup :label="level.level.name" v-for="level in studies">
                                                    <option v-for="study in level.studies" :value="study.study.id">{{ study.study.name }}</option>
                                                </optgroup>
                                            </select>
                                        </div>

                                        <div style="margin-top: 40px">
                                            <div class="section-text centered-text">   <img class="modal-icon" src="/new/img/teacher/team.png" alt="">Επιλογή Κατάστασης</div>
                                            <select v-model="selectedStatus">
                                                <option>connected</option>
                                                <option>allumni</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default">{{lang('profile.modal.abort')}}</button>
                            <button type="button" onClick="accept"  class="btn btn-info" @click="accept">Αποδοχή</button>
                        </div>
                    </form>
                </div>
            </div>
        </modal><!-- /.modal -->






    </div>
</template>


<style>
    .btn-info{background: #5b8b9d; border-color: #5b8b9d; }
    .btn-info:hover{background: #456d7f; border-color: #456d7f; }

    .btn-success{background: #00a6be; border-color: #00a6be; }
    .btn-success:hover{background: #0097af; border-color: #0097af; }

    /* ========== Modal ============== */
    div.v--modal-box.v--modal{height: 900px; overflow: visible; top: 200px;}

    .modal-sc-logo{margin-top: -4px; height: 60px;}
    .modal-content{padding: 0!important; border: none; border-radius: 5px!important;}
    .panel-title{margin: 2px 0 0 15px; font-size: 190%; font-weight: 600;}
    .btn-close{background-color: transparent}
    .btn-close:hover{color: #FD6A33;}
    .modal-icon{height: 30px; margin-right: 15px}
    .panel-body{ min-height: 300px}
    .modal-footer{padding: 15px!important;}
    .btn-info{background: #008da5; border: none;}
    .btn-info:hover{background: #007991;}

    .section-text{margin-bottom: 20px;}
    .inner-section{border: none; margin-top: 30px; background-color: transparent;}

    /* ================================ */

</style>


<script>
    export default {

        data: function() {
            return{
                notifications: [],
                studies: [],
                sections: [],
                selectedUser: null,
                selectedStudy: null,
                selectedStatus: null,
                buttonsDisabled: true,
                studyConnection: 0
            }
        },

        methods: {
            getNotifications: function(){
                var temp = []
                axios.get('/api/notifications/requests')
                    .then(response => {
                        this.notifications = response.data
                        console.log(this.notifications)
                    });
            },

            getSchoolStudies: function(){
                // school/getCurrentStudies
                axios.get('/api/notifications/getSchoolLevelStudies').then(({data})=>{
                    this.studies = data
                    console.log(this.studies)
                })
            },

            getSchoolSections(){
                axios.get('/api/notifications/getSchoolLevelSections').then(({data})=>{
                    this.sections = data
                })
            },

            markAsRead: function(id){
                axios.post('/api/notifications/read/' + id)
                    .then(response => {
                        console.log('Notifications are read')
                        this.getNotifications()
                        Event.$emit('readNotifications')
                });
            },
            accept: function(){
                // console.log(this.selectedStudy)
                if(this.selectedUser && this.selectedStudy && this.selectedStatus){
                    axios.post('/api/connection/' + this.selectedUser + '/' + this.selectedStudy + '/' + this.selectedStatus +'/confirm')
                    .then(response => {
                        console.log(response.data)
                        this.getNotifications()
                        this.markAsRead(this.selectedUser)
                        window.location.reload();
                    });
                }
            },
            deny: function(id, user){
                axios.post('/api/connection/' + id + '/deny', {user:user})
                    .then(response => {
                        this.markAsRead(id)
                        window.location.reload();
                    });
            },

            load(user){
                this.selectedUser = user.id
                if(user.role == 'student') this.$modal.show('studiesStudent')
                else this.$modal.show('studiesTeacher')
            }
        },

        watch: {
            studies() {
                if(this.studies) this.buttonsDisabled = false
            },

            sections(){
                if(this.sections) this.buttonsDisabled = false
            }
        },

        mounted() {
            this.getNotifications()
            this.getSchoolStudies()
            this.getSchoolSections()
            // Event.$on('readNotifications', () => {
            //     this.markAsRead(id)
            // });
        }
    }
</script>
