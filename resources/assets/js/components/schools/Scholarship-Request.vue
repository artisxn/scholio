<template>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="m-t-0 header-title"><b>Ειδποιήσεις για Αιτήματα Υποτροφιών</b></h4>
                        <p class="text-muted font-13">
                           Όλα τα αιτήματα
                        </p>
                        <div class="p-20">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Όνομα Μαθητη</th>
                                            <th>Υποτροφία</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                        <tr v-for="admission in admissions">
                                                <td><a v-bind:href="'/panel/school/admission/' + admission.id"><img v-bind:src="admission.student.avatar"></a></td>
                                                <td><a v-bind:href="'/panel/school/admission/' + admission.id">{{ admission.user.name }}</a></td>
                                                <td>{{admission.scholarship}}</td>
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
                admissions: {}
            }
        },

        methods: {
            getAdmissions: function(){
                axios.get('/api/scholarship/getFullAdmissions')
                    .then(response => {
                        this.admissions = response.data
                        console.log('admiss')
                        console.log(response.data)
                    });
            },
        },

        mounted() {
            this.getAdmissions()
        }
    }
</script>
