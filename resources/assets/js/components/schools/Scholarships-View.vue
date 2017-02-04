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
                                            <th>Πλάνο Υποτροφίας</th>
                                            <th>Υποτροφία</th>
                                            <th v-if="scholarships.level_id<4 || scholarships.level_id>21">Τύπος Σπουδών</th>
                                            <th>Επίπεδο Σπουδών</th>
                                            <th>Κριτήρια</th>
                                            <th>Ημερομηνία Λήξης</th>
                                            <th>Νικητής</th>
                                            <!-- <th>Updated At</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="scholarship in scholarships">
                                            <td>{{ scholarship.id }}</td>
                                            <td>{{ scholarship.financial.plan }}</td>
                                            <td>{{ scholarship.financial_amount }} <span v-if="scholarship.financial.id==1">%</span></td>
                                            <td v-if="scholarship.level_id<4 || scholarship.level_id>21">{{ scholarship.study.name}}</td>
                                            <td>{{ scholarship.level.name}}</td>
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
                scholarships: {}
            }
        },

        methods: {
            getScholarships: function(){
                axios.get('/api/scholarship/' + window.Connection)
                    .then(response => {
                        console.log(response.data)
                        this.scholarships = response.data
                    });
            }
        },

        mounted() {
            console.log('Scholarship-Table component mounted!')
            this.getScholarships()
        }
    }
</script>