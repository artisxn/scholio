<template>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="m-t-0 header-title"><b>{{ lang('resource.requests.notifications') }}</b></h4>
                        <p class="text-muted font-13">
                          {{ lang('resource.requests.requests') }}
                        </p>
                        <div class="p-20">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>IMAGE</th>
                                            <th>{{ lang('resource.requests.table.role') }}</th>
                                            <th>{{ lang('resource.requests.table.name') }}</th>
                                            <th>{{ lang('resource.requests.table.action') }}</th>
                                            <th>DATE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="notification in notifications" v-show="!notification.read_at">
                                            <td><img src=""></td>
                                              <td v-if="notification.data.role === 'student'">{{ lang('resource.requests.table.student') }}</td>
                                              <td v-if="notification.data.role === 'teacher'">{{ lang('resource.requests.table.teacher') }}</td>
                                            <td>{{ notification.data.name }}</td>
                                            <td>
                                                <button v-on:click="accept(notification.data.id)" class="btn btn-success">{{ lang('resource.requests.table.confirm') }}</button>
                                                <button v-on:click="deny(notification.data.id)" class="btn btn-danger">{{ lang('resource.requests.table.abort') }}</button>
                                            </td>
                                            <td>{{ notification.created_at }}</td>
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
                notifications: {}
            }
        },

        methods: {
            getNotifications: function(){
                axios.get('/api/notifications/requests')
                    .then(response => {
                        this.notifications = response.data
                        console.log(response.data)
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
            deny: function(id){
                axios.post('/api/connection/' + id + '/deny')
                    .then(response => {
                        console.log(id)
                        this.markAsRead(id)
                        window.location.reload();
                    });
            }
        },

        mounted() {
            console.log('Notifications-Table component mounted!')

            this.getNotifications()
            // Event.$on('readNotifications', () => {
            //     this.markAsRead(id)
            // });
        }
    }
</script>
