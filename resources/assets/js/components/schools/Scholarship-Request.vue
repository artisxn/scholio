<style>
    .avatar{height: 50px; border-radius: 6px; box-shadow: 0 0 10px #999;}
    .text{margin-top: 15px}
    .unread{color:red;}
</style>

<template>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="m-t-0 header-title"><b>{{ lang('panel_scholarships.admissions.title') }}</b></h4>
                        <!--<p class="text-muted font-13">-->
                            <!--{{ lang('panel_scholarships.admissions.subtitle') }}-->
                        <!--</p>-->
                        <div class="p-20">
                            <div class="table-responsive">
                                <table class="table m-0 table-striped">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>{{ lang('panel_scholarships.admissions.name') }}</th>
                                        <th>{{ lang('panel_scholarships.admissions.scholarship') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr v-for="admission in allAdmissions">
                                        <td><a v-bind:href="'/panel/school/admission/' + admission.id"><img v-bind:src="admission.student.avatar" class="avatar"></a></td>
                                        <td><a v-bind:href="'/panel/school/admission/' + admission.id">
                                            <div class="text">
                                                <span :class="{ unread: admission.unread }">
                                                    {{ admission.user.name }}
                                                </span>
                                            
                                        </div></a></td>
                                        <td><div class="text">{{admission.scholarship}}</div></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data: function() {
            return{
                admissions: {},
                allAdmissions: {},
                unreadNotification: [],
                not:[]
            }
        },

        methods: {
            getAdmissions: function(){
                axios.get('/api/scholarship/getFullAdmissions')
                    .then(response => {
                        this.admissions = response.data
                        this.getUnreadNotifications()
                    });
            },

            getUnreadNotifications: function(){
                axios.get('/api/notifications/requests')
                    .then(response => {
                        var parent = this
                        response.data.forEach(function(e){
                            if(e.type == "App\\Notifications\\StudentAppliedOnScholarship" && !e.read_at){
                                parent.unreadNotification.push(e.data.user.id + '-' + e.data.scholarship)
                                console.log(parent.unreadNotification)
                            }
                        })

                            
                        this.admissions.forEach(function(item){

                            if(Object.values(parent.unreadNotification).indexOf(item.user.id + '-' + item.scholarship_id) > -1){
                                // var index = Object.values(parent.unreadNotification).indexOf(item.user.id + '-' + item.scholarship_id)
                                item.unread = true
                            }
                        })
                        this.allAdmissions = this.admissions
                        console.log(this.admissions)
                    });
            },

            watch:{
                admissions: function(){
                    this.allAdmissions = this.admissions
                }
            }

        },

        mounted() {
            this.getAdmissions()
        }
    }
</script>
