<template>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="m-t-0 header-title"><b>Ειδποιήσεις για Σύνδεση</b></h4>
                        <p class="text-muted font-13">
                           Όλα τα αιτήματα
                        </p>
                        <div class="p-20">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>Ρόλος</th>
                                            <th>Όνομα</th>
                                            <th>Επιλογή</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="notification in notifications">
                                              <td v-if="notification.data.role === 'student'">Μαθητής</td>
                                              <td v-if="notification.data.role === 'teacher'">Καθηγητής</td>
                                            <td>{{ notification.data.name }}</td>
                                            <td>
                                                <a v-bind:href="notification.data.id" class="btn btn-success">Αποδοχή</a>
                                                <a href="" class="btn btn-danger">Απόρριψη</a>
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
            markAsRead: function(){
                axios.post('/api/notifications/read')
                    .then(response => {
                        console.log('Notifications are read')
                });
            }
        },

        mounted() {
            console.log('Notifications-Table component mounted!')

            this.getNotifications()
            this.markAsRead()

            Event.$emit('readNotifications')
        }
    }
</script>
