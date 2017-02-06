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
                                            <th>Ποσό</th>
                                            <th v-if="showLevel">Τύπος Σπουδών</th> <!-- condition MUST CHANGE-->
                                            <th>Επίπεδο Σπουδών</th>
                                            <th>Κριτήρια</th>
                                            <th>Ημερομηνία Λήξης</th>
                                            <th>Νικητής</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="scholarship in scholarships">
                                            <td>{{ scholarship.id }}</td>
                                            <td>{{ scholarship.financial.plan }}</td>
                                            <td>{{ scholarship.financial_amount }}
                                                <span v-if="scholarship.financial.id==1">%</span>
                                                <span v-if="scholarship.financial.id==2">€</span>
                                                <span v-if="scholarship.financial.id==3">μήνες</span></td>
                                            </td>
                                            <td v-if="showLevel">{{ scholarship.study.name}}</td>
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
    import VueTinymce from 'vue-tinymce'
    Vue.use(VueTinymce)

    export default {

        data: function() {
            return{
                scholarships: {},
                showLevel:false
            }
        },

        methods: {
            getScholarships: function(){
                axios.get('/api/scholarship/' + window.Connection)
                    .then(response => {
//                        console.logo(response.data)
                        this.scholarships = response.data
                        if(this.scholarships[0].level.id<4 || this.scholarships[0].level.id>21 ) {this.showLevel=true}
                    });

            }
        },

        mounted() {
            console.log('Scholarship-Table component mounted!')
            this.getScholarships()
        }
    }
</script>