<template>
    <div class="row full-content">
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
                                <table class="table m-0 noti-table">
                                    <thead>
                                        <tr>
                                            <th class="sxs-hide"></th>
                                            <th class="text-center">{{ lang('resource.requests.table.role') }}</th>
                                            <th class="text-center">{{ lang('resource.requests.table.name') }}</th>
                                            <th class="text-center lg-hide"> Κατάσταση </th>
                                            <th class="text-center mid-hide"> Σπουδές </th>
                                            <th class="text-center small-hide">{{ lang('resource.requests.table.date') }}</th>
                                            <th class="text-center">
                                                <!--{{ lang('resource.requests.table.action') }}-->
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody v-if="!buttonsDisabled" style="">
                                        <tr v-for="notification in notifications" v-show='notification.type == "App\\Notifications\\UserAppliedForConnection"'>
                                            <td class="table-img sxs-hide"><img v-bind:src=notification.data.avatar style="width: 65px"></td>
                                            <td class="text-center table-info" v-if="notification.data.role == 'student'">{{ lang('resource.requests.table.student') }}</td>
                                            <td class="text-center table-info" v-if="notification.data.role == 'teacher'">{{ lang('resource.requests.table.teacher') }}</td>
                                            <td class="text-center table-info">{{ notification.data.name }}</td>
                                            <td class="text-center table-info lg-hide" v-if="notification.data.role == 'student'">
                                                <span v-if="notification.data.status == 'connected'">{{ lang('["panel/schools"].resource.students.active') }}</span>
                                                <span v-else>{{ lang('["panel/schools"].resource.students.alumni')}}</span>
                                            </td>
                                            <td class="text-center table-info lg-hide" v-if="notification.data.role == 'teacher'">
                                                <span v-if="notification.data.status == 'connected'">{{ lang('["panel/schools"].resource.teachers.active') }}</span>
                                                <span v-else>{{ lang('["panel/schools"].resource.teachers.alumni')}}</span>
                                            </td>
                                            <td class="text-center table-info mid-hide" v-if="notification.data.role == 'student'"> {{ notification.data.study.name }}</td>
                                            <td class="text-center table-info mid-hide" v-if="notification.data.role == 'teacher'"> {{ notification.data.study }}</td>
                                            <td class="text-center table-info small-hide">{{ changeTimeFormat(notification.created_at) }}</td>

                                            <td class="text-center  table-btn">
                                                <button  v-if="notification.data.role == 'student'"  v-on:click="load(notification.id, notification.data)" data-toggle="modal" data-target="#studiesStudent-modal" class="btn btn-info">{{ lang('resource.requests.table.action') }}</button>
                                                <button  v-if="notification.data.role == 'teacher'"  v-on:click="load(notification.id, notification.data)" data-toggle="modal" data-target="#studiesTeacher-modal" class="btn btn-info">{{ lang('resource.requests.table.action') }}</button>
                                                <!--<button v-on:click="load(notification.data)"                     class="btn btn-info" :disabled="buttonsDisabled">{{ lang('resource.requests.table.confirm') }}</button>-->

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <transition name="fade" v-if="buttonsDisabled">
                                    <div style="margin: 5px ">
                                        <div class="animated-background animated-background-Wide col-xs-12 "  v-for="i in notifications.length" style="margin-top: 17px;">
                                            <div class="background-masker background-masker-Wide  header-top " ></div>
                                            <div class="background-masker background-masker-Wide  header-left"></div>
                                            <div class="background-masker background-masker-Wide  header-right header-right-Wide"></div>
                                            <div class="background-masker background-masker-Wide  header-bottom"></div>

                                            <div class="background-masker background-masker-Wide  subheader-left"></div>
                                            <div class="background-masker background-masker-Wide  subheader-right subheader-right-Wide"></div>
                                            <div class="background-masker background-masker-Wide  subheader-bottom"></div>

                                            <div class="background-masker background-masker-Wide  content-top"></div>
                                            <div class="background-masker background-masker-Wide  content-first-end content-first-end-Wide"></div>
                                            <div class="background-masker background-masker-Wide  content-second-line"></div>
                                            <div class="background-masker background-masker-Wide  content-second-end content-second-end-Wide"></div>
                                            <div class="background-masker background-masker-Wide  content-third-line"></div>
                                            <div class="background-masker background-masker-Wide  content-third-end content-third-end-Wide"></div>
                                        </div>
                                    </div>
                                </transition>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- ====== Teacher Modal  ======= -->
        <div id="studiesTeacher-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="top: 75px;">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="panel " style="background-color: #324c5a; height:90px; border-bottom-right-radius: 0; border-bottom-left-radius: 0; padding: 10px">
                        <div class="panel-heading" style=" color: #fff">
                            <button type="button" class="btn pull-right btn-close" data-dismiss="modal"
                                x
                            </button>
                            <img src="/new/img/logoNX-light.png" alt="scholio logo" class="pull-left modal-sc-logo">
                        </div>
                    </div>


                    <div class="panel-body">

                        <img v-bind:src=selectedImg class="modal-img">
                        <span class="modal-name"> {{ selectedName }}</span>
                        <div class="modal-role" style="margin-bottom: 45px">Καθηγητής</div>


                        <div class="section2-container ">
                            <div class="inner-section" style="">
                                <!--<div class="section-text centered-text">   <img class="modal-icon" src="/new/img/teacher/graduate.png" alt="">Περιγραφή Ειδικότητας</div>-->
                                <div class="input-container"  >
                                    <!--<input type="text" v-model="selectedStudy" size="80">-->

                                    <div class="polyfill-input-sc">
                                        <input type="text" label="Περιγραφή Ειδικότητας" name="work-start" class="demo-form ad-input"  id="" v-model="selectedStudy" value="*">
                                        <i class="icon-inp fa fa-graduation-cap"></i>
                                    </div>

                                    <div style="margin-top: 40px" class="modal-input-container">
                                        <div class="section-text centered-text ">
                                            <!--<img class="modal-icon" src="/new/img/teacher/team.png" alt="">-->
                                            Επιλογή Κατάστασης</div>
                                        <i class="fa fa-cogs" style="color: #008da5"></i>
                                        <select v-model="selectedStatus" class="modal-select" style="margin-left: 4px">
                                            <option value="connected">{{ lang('["panel/schools"].resource.teachers.active') }}</option>
                                            <option value="allumni">{{ lang('["panel/schools"].resource.teachers.alumni') }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal" >{{lang('profile.modal.abort')}}</button>
                        <button v-on:click="deny()" class="btn btn-success">{{ lang('resource.requests.table.abort') }}</button>
                        <button type="button" class="btn btn-info" data-dismiss="modal" @click="accept">Αποδοχή</button>
                    </div>
                </div>
            </div>
        </div><!-- /.modal -->


        <!-- ====== Student Modal  ======= -->
        <div id="studiesStudent-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="top: 75px;">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="panel " style="background-color: #324c5a; height:90px; border-bottom-right-radius: 0; border-bottom-left-radius: 0; padding: 10px">
                        <div class="panel-heading" style=" color: #fff">
                            <button type="button" class="btn pull-right btn-close" data-dismiss="modal"
                                    x
                            </button>
                            <img src="/new/img/logoNX-light.png" alt="scholio logo" class="pull-left modal-sc-logo">
                        </div>
                    </div>


                    <div class="panel-body">

                        <img v-bind:src=selectedImg class="modal-img">
                        <div class="modal-name"> {{ selectedName }}</div>
                        <div class="modal-role">Μαθητής</div>

                        <div class="section2-container ">
                            <div class="inner-section" style="">
                                <div class="section-text centered-text">   <img class="modal-icon" src="/new/img/teacher/graduate.png" alt="">Επιλογή Σπουδών</div>
                                <div class="input-container">

                                    <div class="input-container modal-input-container">
                                        <select v-model="selectedStudy" class="modal-select">
                                            <optgroup :label="level.level.name" v-for="level in studies">
                                                <option v-for="study in level.studies" :value="study.study.id">{{ study.study.name }}</option>
                                            </optgroup>
                                        </select>
                                    </div>

                                    <div style="margin-top: 50px" class="modal-input-container">
                                        <div class="section-text centered-text">   <img class="modal-icon" src="/new/img/teacher/team.png" alt="">Επιλογή Κατάστασης</div>
                                        <select v-model="selectedStatus" class="modal-select">
                                            <option value="connected">{{ lang('["panel/schools"].resource.students.active') }}</option>
                                            <option value="allumni">{{ lang('["panel/schools"].resource.students.alumni') }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">{{lang('profile.modal.abort')}}</button>
                        <button v-on:click="deny()" class="btn btn-success" :disabled="buttonsDisabled">{{ lang('resource.requests.table.abort') }}</button>
                        <button type="button" class="btn btn-info" data-dismiss="modal" @click="accept">Αποδοχή</button>
                    </div>
                </div>
            </div>
        </div><!-- /.modal -->





    </div>
</template>


<style>
    tr{height: 112px!important;}
    .table-img{padding-top: 22px!important;}
    .table-info{padding-top: 42px!important;
    }
    .table-btn{padding-top: 34px!important;}
    .btn-info,.btn-info:focus, .btn-info:active,.btn-info:visited{background: #008da5!important; border:none; padding: 6px 17px;}
    .btn-info:hover{background: #005a6e!important; }

    .btn-success,.btn-success:active,.btn-success:visited{background: #f8582b !important; border:none }
    .btn-success:hover{background: #d74c22 !important; }


    @media (max-width: 1400px) {
        .lg-hide{ display: none;}
        .p-20{padding: 5px!important;}

        }
    @media (max-width: 1100px) {
        .mid-hide{ display: none;}
    }
    @media (max-width: 800px) {
        .small-hide{ display: none;}
    }
    @media (max-width: 600px) {
        .sxs-hide{ display: none;}
        .p-20{padding: 5px 0!important; margin: 15px 0;}
        .card-box{margin-left: 0; margin-right: 0; padding: 0}
    }


    /* ========== Polymer Input ============== */
    .input-container{position: relative; padding: 0 5px;}
    .demo-form{ margin: 0!important; font-weight: 300!important; border: none!important;}
    .polymer-form label {color: #008DA5!important; font-size:110%!important; font-weight: 300!important; display: block!important; padding-bottom: -40px!important; margin-left: 11px; }
    .ad-input{font-size: 100%!important; padding-left: 25px!important;}
    .icon-inp{position: absolute; top: 8px;  color: #008DA5}


    /* ========== Modal ============== */

    .modal-img{height: 65px; margin: 0 20px 20px 0; box-shadow: 0 0 10px 3px #ccc; border-radius: 6px}
    .modal-name{font-size: 150%; position: absolute; top: 135px; left: 96px}
    .modal-role{font-size: 105%; margin-left: 80px; margin-top: -52px; color: #999; font-weight: 400}

    .modal-sc-logo{margin-top: -4px; height: 60px;}
    .modal-content{padding: 0!important; border: none; border-radius: 5px!important;}
    .panel-title{margin: 2px 0 0 15px; font-size: 190%; font-weight: 600;}
    .btn-close{background-color: transparent}
    .btn-close:hover{color: #FD6A33;}
    .modal-icon{height: 30px; margin-right: 15px}
    .panel-body{ min-height: 360px}
    .modal-footer{padding: 15px!important;}
    .btn-info{background: #008da5; border: none;}
    .btn-info:hover{background: #007991;}

    .section-text{margin-bottom: 6px; color: #008da5}
    .inner-section{border: none; margin-top: 50px; background-color: transparent;}

    .modal-input-container{border-bottom: 1px solid #008da5;  border-bottom-right-radius: 0!important; border-bottom-left-radius: 0!important;}
    .modal-select{border: none; background: transparent; margin-left: -10px; }


    /* ================================ */

</style>




<script>
    var moment = require('moment');
    export default {

        data: function() {
            return{
                notifications: [],
                studies: [],
                sections: [],
                selectedUser: null,
                selectedStudy: null,
                selectedStatus: 'connected',
                buttonsDisabled: true,
                studyConnection: 0,
                temp: null,
                selectedName:null,
                selectedImg:null,
                currentNotificationID: 0,
                currentUserID: 0
            }
        },

        methods: {
            changeTimeFormat(time){
                return moment(time).format('DD-MM-YYYY')
            },

            getNotifications(){
                var temp = []
                axios.get('/api/notifications/requests')
                    .then(response => {
                        this.notifications = response.data
                        console.log(this.notifications)
                    });
            },

            getSchoolStudies(){
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

            markAsRead(id){
                axios.post('/api/notifications/read/' + id)
                    .then(response => {
                        console.log('Notifications are read')
                        this.getNotifications()
                        Event.$emit('readNotifications')
                });
            },
            accept(){
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
            deny(){
                axios.post('/api/connection/' + this.currentNotificationID + '/deny', {user:this.currentUserID})
                    .then(response => {
                        this.markAsRead(this.currentNotificationID)
                        window.location.reload();
                    });
            },

            load(notificationID, user){
                this.selectedStatus = user.status
                this.currentNotificationID = notificationID
                this.currentUserID = user.id
                if(user.role == 'student') this.selectedStudy = user.study.id
                else this.selectedStudy = user.study

                this.selectedName=user.name
                this.selectedImg=user.avatar
                this.selectedUser = user.id
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
