<template>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="m-t-0 header-title"><b>Πίνακας Υποτροφιών</b></h4>
                        <p class="text-muted font-13">
                           Μπλά μπλά μπλά
                        </p>
                        <div class="table-rep-plugin">
                            <div class="table-responsive" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table  table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Εκπαιδευτικό Ίδρυμα</th>
                                            <th>Πλάνο Υποτροφίας</th>
                                            <th>Υποτροφία</th>
                                            <th>Τύπος Σπουδών</th>
                                            <th>Επίπεδο Σπουδών</th>
                                            <th>Κριτήρια</th>
                                            <th>Ημερομηνία Λήξης</th>
                                            <th>Νικητής</th>
                                            <!-- <th>Updated At</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="scholarship in allScholarships">
                                            <td>{{ scholarship.id }}</td>
                                            <td>{{ scholarship.school['name'] }}</td>
                                            <td>{{ scholarship.financial['plan'] }}</td>
                                            <td>{{ scholarship.financial_amount }}</td>
                                            <td>{{ scholarship.study_type }}</td>
                                            <td>{{ scholarship.level['name'] }}</td>
                                            <td>{{ scholarship.criteria_id }}</td>
                                            <td>{{ scholarship.end_at }}</td>
                                            <td>{{ scholarship.winner_id }}</td>
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
                scholarship: {}
            }
        },

        computed: {
            allScholarships: function(){
                return this.scholarship
            }
        },

        methods: {
            getScholarship: function(){
                axios.get('/api/scholarships/all')
                    .then(response => {
                        this.scholarship = response.data['scholarships']
                    });
            },

            getSchoolFromId: function(id){
                var name = ''
                axios.get('/api/school/id/' + id)
                    .then(response => {
                        name = response.data.name
                        console.log(name + 'name')
                    });
                return name
            }
        },

        mounted() {
            console.log('Scholarship-Table component mounted!')
            this.getScholarship()
        }
    }
</script>