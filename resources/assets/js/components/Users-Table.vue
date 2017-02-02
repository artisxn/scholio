<template>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="m-t-0 header-title"><b>Users Table</b></h4>
                        <p class="text-muted font-13">
                           Bla Bla
                        </p>
                        <div class="p-20">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <!-- <th>Avatar</th> -->
                                            <th>Created At</th>
                                            <!-- <th>Updated At</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="user in allUsers">
                                            <td>{{ user.id }}</td>
                                            <td>{{ user.name }}</td>
                                            <td>{{ user.email }}</td>
                                            <td>{{ user.role }}</td>
                                            <!-- <td>{{ user.avatar }}</td> -->
                                            <td>{{ user.created_at }}</td>
                                            <!-- <td>{{ user.updated_at }}</td> -->
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
                users: {}
            }
        },

        computed: {
            allUsers: function(){
                return this.users
            }
        },

        methods: {
            getUsers: function(){
                axios.get('/api/users/all')
                    .then(response => {
                        this.users = response.data['users']
                        console.log(this.users)
                    });
            }
        },

        mounted() {
            console.log('Users-Table component mounted!')
            this.getUsers()
        }
    }
</script>