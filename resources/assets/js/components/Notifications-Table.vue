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
                                                <button v-on:click="accept(notification.data.id)" class="btn btn-info">{{ lang('resource.requests.table.confirm') }}</button>
                                                <button v-on:click="deny(notification.id, notification.data.id)" class="btn btn-success">{{ lang('resource.requests.table.abort') }}</button>
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
    </div>
</template>


<style>
    .btn-info{background: #5b8b9d; border-color: #5b8b9d; }
    .btn-info:hover{background: #456d7f; border-color: #456d7f; }

    .btn-success{background: #00a6be; border-color: #00a6be; }
    .btn-success:hover{background: #0097af; border-color: #0097af; }

</style>


<script>
    export default {

        data: function() {
            return{
                notifications: []
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
            markAsRead: function(id){
                axios.post('/api/notifications/read/' + id)
                    .then(response => {
                        console.log('Notifications are read')
                        this.getNotifications()
                        Event.$emit('readNotifications')
                });
            },
            accept: function(id){
                axios.post('/api/connection/' + id + '/confirm')
                    .then(response => {
                        console.log(response.data)
                        this.getNotifications()
                        this.markAsRead(id)
                        window.location.reload();
                    });
            },
            deny: function(id, user){
                axios.post('/api/connection/' + id + '/deny', {user:user})
                    .then(response => {
                        this.markAsRead(id)
                        window.location.reload();
                    });
            }
        },

        mounted() {
            this.getNotifications()
            // Event.$on('readNotifications', () => {
            //     this.markAsRead(id)
            // });
        }
    }
</script>
