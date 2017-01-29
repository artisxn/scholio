<template>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="m-t-0 header-title"><b>Notifications Table</b></h4>
                        <p class="text-muted font-13">
                           Bla Bla
                        </p>
                        <div class="p-20">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <!-- <th>ID</th> -->
                                            <th>Type</th>
                                            <th>Notifiable Id</th>
                                            <th>Notifiable Type</th>
                                            <!-- <th>Data</th> -->
                                            <th>Read At</th>
                                            <th>Created At</th>
                                            <!-- <th>Updated At</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="notification in allNotifications">
                                            <!-- <td>{{ notification.id }}</td> -->
                                            <td>{{ notification.type }}</td>
                                            <td>{{ notification.notifiable_id }}</td>
                                            <td>{{ notification.notifiable_type }}</td>
                                            <!-- <td>{{ notification.data }}</td> -->
                                            <td>{{ notification.read_at }}</td>
                                            <td>{{ notification.created_at }}</td>
                                            <!-- <td>{{ notification.updated_at }}</td> -->
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

        computed: {
            allNotifications: function(){
                return this.notifications
            }
        },

        methods: {
            getNotifications: function(){
                axios.get('/api/notifications/all')
                    .then(response => {
                        this.notifications = response.data['notifications']
                        console.log(this.notifications)
                    });
            }
        },

        mounted() {
            console.log('Notifications-Table component mounted!')

            this.getNotifications()
        }
    }
</script>