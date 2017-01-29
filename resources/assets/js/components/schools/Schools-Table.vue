<template>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="m-t-0 header-title"><b>Schools Table</b></h4>
                        <p class="text-muted font-13">
                           Bla Bla
                        </p>
                        <div class="table-rep-plugin">
                            <div class="table-responsive" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table  table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Type</th>
                                            <th>Address</th>
                                            <th>City</th>
                                            <th>Phone</th>
                                            <th>Website</th>
                                            <th>Logo</th>
                                            <th>Approved</th>
                                            <th>Created At</th>
                                            <!-- <th>Updated At</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="school in allSchools">
                                            <td>{{ school.id }}</td>
                                            <td>{{ school.name }}</td>
                                            <td>{{ school.email }}</td>
                                            <td>{{ school.type_id }}</td>
                                            <td>{{ school.address }}</td>
                                            <td>{{ school.city }}</td>
                                            <td>{{ school.phone }}</td>
                                            <td>{{ school.website }}</td>
                                            <td>{{ school.logo_id }}</td>
                                            <td>{{ school.approved }}</td>
                                            <td>{{ school.created_at }}</td>
                                            <!-- <td>{{ school.updated_at }}</td> -->
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
                schools: {}
            }
        },

        computed: {
            allSchools: function(){
                return this.schools
            }
        },

        methods: {
            getSchools: function(){
                axios.get('/api/schools/all')
                    .then(response => {
                        this.schools = response.data['schools']
                        console.log(this.schools)
                    });
            }
        },

        mounted() {
            console.log('Schools-Table component mounted!')

            this.getSchools()
        }
    }
</script>