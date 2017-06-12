<style>
    .center-td{vertical-align:middle; text-align:center;}
    .search-input{width: 210px; margin: 10px 0; border: 1px solid #d1d1d1; border-radius: 5px;}

    .btn-info{background-color: #324c5a!important;}
    .btn-info:hover{background-color: #466473 !important;}
    .btn-success{background-color: #00bcd4!important;}
    .btn-success:hover{background-color: #00abc3 !important;}
    .btn-primary{background-color: #008da5!important;}
    .btn-primary:hover{background-color: #007991 !important;}
    .btn-success,.btn-info,.btn-primary{border: none!important; height: 30px; padding: 0 20px}


    /* =========TOOLTIP=========*/
    .tool {
        position: relative;
    }

    .tooltiptext {
        font-weight: 300;
        visibility: hidden;
        width: 300px;
        background-color: #007991;
        color: #fff;
        text-align: center;
        border-radius: 5px;
        padding: 5px 2px;
        position: absolute;
        z-index: 1;
        bottom: 125%;
        left: 50%;
        margin-left: -110px;
        opacity: 0;
        transition: opacity 0.1s;
    }

    .tooltiptext::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: #007991 transparent transparent transparent;
    }
    .tool:hover .tooltiptext {
        visibility: visible;
        opacity: 1;
    }
</style>


<template>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="m-t-0 header-title"><b>Πίνακας Υποτροφιών</b></h4>

                        <div class="input-group pull-left search-input">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Αναζήτηση" v-model="searchStr">
                        </div>

                        <div class="clearfix"></div>


                        <div class="table-rep-plugin">
                            <div class="table-responsive" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table  table-striped">
                                    <thead>
                                        <tr>
                                            <!-- <th>ID</th> -->
                                            <th></th>
                                            <th>
                                                <a href="#" v-on:click="planChangeSort">
                                                    Οικονομική Προσφορά
                                                    <span v-if="sortType == 'plan' && !sortReverse" class="fa fa-sort-amount-asc"></span>
                                                    <span v-if="sortType == 'plan' && sortReverse" class="fa fa-sort-amount-desc"></span>
                                                </a>
                                            </th>
                                            <th>
                                                <a href="#" v-on:click="amountChangeSort">
                                                Ποσό
                                                 <span v-if="sortType == 'amount' && !sortReverse" class="fa fa-sort-amount-asc"></span>
                                                 <span v-if="sortType == 'amount' && sortReverse" class="fa fa-sort-amount-desc"></span>
                                                </a>
                                            </th>
                                            <th></th>
                                            <th v-if="showLevel"> <!-- condition MUST CHANGE-->
                                                <a href="#" v-on:click="studyChangeSort">
                                                    Σπουδές
                                                    <span v-if="sortType == 'study' && !sortReverse" class="fa fa-sort-amount-asc"></span>
                                                    <span v-if="sortType == 'study' && sortReverse" class="fa fa-sort-amount-desc"></span>
                                                </a>
                                            </th>
                                            <th v-if="showLevel"> <!-- condition MUST CHANGE-->
                                                <a href="#" v-on:click="levelChangeSort">
                                                    Επίπεδο Σπουδών
                                                    <span v-if="sortType == 'level' && !sortReverse" class="fa fa-sort-amount-asc"></span>
                                                    <span v-if="sortType == 'level' && sortReverse" class="fa fa-sort-amount-desc"></span>
                                                </a>
                                            </th>
                                            <th v-if="showLevel"> <!-- condition MUST CHANGE-->
                                                <a href="#" v-on:click="criteriaChangeSort">
                                                    Κριτήρια
                                                    <span v-if="sortType == 'criteria_id' && !sortReverse" class="fa fa-sort-amount-asc"></span>
                                                    <span v-if="sortType == 'criteria_id' && sortReverse" class="fa fa-sort-amount-desc"></span>
                                                </a>
                                            </th>
                                            <th v-if="showLevel"> <!-- condition MUST CHANGE-->
                                                <a href="#" v-on:click="endChangeSort">
                                                    Ημερομηνία Λήξης
                                                    <span v-if="sortType == 'end_at' && !sortReverse" class="fa fa-sort-amount-asc"></span>
                                                    <span v-if="sortType == 'end_at' && sortReverse" class="fa fa-sort-amount-desc"></span>
                                                </a>
                                            </th>
                                            <th>
                                                <a href="#" v-on:click="admissionChangeSort">
                                                Αιτήθηκαν
                                                <span v-if="sortType == 'admissions' && !sortReverse" class="fa fa-sort-amount-asc"></span>
                                                <span v-if="sortType == 'admissions' && sortReverse" class="fa fa-sort-amount-desc"></span>
                                                </a>
                                            </th>
                                            <!-- <th>Νικητής</th> -->
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="scholarship in filteredStudies">
                                            <!-- <td>{{ scholarship.id }}</td> -->
                                            <td class="center-td">
                                                    <img :src="'/panel/assets/images/steps/'+scholarship.financial.icon" height="30px" alt="" >
                                            </td>
                                            <td>{{ scholarship.plan }}</td>

                                            <td>{{ scholarship.amount }}
                                                <span>{{scholarship.financial.metric}}</span>
                                            </td>
                                            <td><img :src="'/panel/assets/images/steps/' + scholarship.section.name+ '.png'" height="30px"></td>
                                            <td v-if="showLevel">
                                                <span class="tool">
                                                    {{ study(scholarship.study, 30) }}
                                                    <span class="tooltiptext">{{scholarship.study}}</span>
                                                </span>
                                            </td>
                                            <td>{{ scholarship.level}}</td>
                                            <td>{{ scholarship.criteria.name }}</td>
                                            <td>{{ scholarship.end_at }}</td>
                                            <td>{{ scholarship.admissions}}</td>
                                            <!-- <td>{{ scholarship.winner_id }}</td> -->
                                            <td><button v-on:click="onEdit(scholarship.id)" class="btn btn-success">Προβολή</button></td>
                                            <!--<td><button v-on:click="onDelete(scholarship.id)" class="btn btn-primary">Διαγραφή</button></td>-->
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>

        <div style="max-width: 800px">
            <h2>Chart.js</h2>
            <div>
                <chart-vue :chart-data="datacollection" :options="dataoptions"></chart-vue>
            </div>
        </div>

    </div>


</template>

<script>
import Chart from '../../VueChart.vue'
    export default{
        components: {'chart-vue': Chart},
        data: function() {
            return{
                scholarships: {},
                showLevel:false,
                sortReverse:true,
                sortType:'admissions',
                scholars:[],
                searchStr:"",
                sc_amounts: [],
               sc_names:[],
              // sc_names:[['one','two'],'three',['four five','six'],'seven','eight','noine'],
                datacollection: {
                  labels: ['asd'],
                  datasets: [
                    {
                      label: 's',
                      backgroundColor: '#008da5',
                      data: [123]
                    }
                  ]
                },
                dataoptions: {responsive: true, maintainAspectRatio: false,
                        scales: {
                            xAxes: [{
                                afterFit: function(scaleInstance) {
                                    scaleInstance.width = 100; // sets the width to 100px
                                },
                                ticks: {
//                                    display: false,
//                                    // set the fontSize to 0 so that extra labels are not forced on the right side
//                                    fontSize: 0
                                }
                            }]
                        }
                }
            }
        },
        computed: {

            filteredStudies: function () {
                var filtered_array = this.scholars;
                var searchString = this.searchStr;

                if(!searchString){
                    return filtered_array;
                }
                searchString = searchString.trim().toLowerCase();
                filtered_array = filtered_array.filter(function(item){
                    if( (item.level.toLowerCase().indexOf(searchString) !== -1) ||
                        (item.study.toLowerCase().indexOf(searchString) !== -1) ||
                        (item.plan.toLowerCase().indexOf(searchString) !== -1) ||
                        (item.section.name.toLowerCase().indexOf(searchString) !== -1)

                    ){return item;}
                })
                return filtered_array;
            }
        },
        methods: {
            study: function(st, i){
                var letters = i;
                if(st.length > letters){
                    return st.substring(0,letters);
                }

                return st;
            },
            getScholarships: function(){
                axios.get('/api/scholarship/' + window.Connection)
                    .then(response => {
                        console.log(response.data)
                        this.scholarships = response.data
                        if(this.scholarships[0].level.id<4 || this.scholarships[0].level.id>21 ) {this.showLevel=true}

                        var st1=this.scholarships;
                        for (var i in st1){
                            st1[i].admissions=this.scholarships[i].user.length;
                            st1[i].plan=this.scholarships[i].financial.plan;
                            st1[i].study=this.scholarships[i].study.name;
                            st1[i].level=this.scholarships[i].level.name;
                            st1[i].amount=parseInt(this.scholarships[i].financial_amount);
                            this.sc_amounts.push(st1[i].admissions)
                           this.sc_names.push(this.study(st1[i].study, 12))

                        }
                        st1.sort(this.dynamicSort(this.sortType,this.sortReverse));
                        this.scholars=st1;

                        this.updateChart()

                    });

            },
            updateChart: function(){
                this.datacollection = {
                  labels: this.sc_names,
                  datasets: [
                    {
                      label: 'Πλήθος Αιτούντων',
                      backgroundColor: '#008da5',
                      data: this.sc_amounts.sort(function(a, b){return b-a})
                    }
                  ]
                }
            },
            onEdit: function(id){
                window.location = '/scholarship/' + id + '/edit'
            },
            onDelete: function(id){
                window.location = '/scholarship/' + id + '/delete'
            },

            admissionChangeSort: function(){
                this.sortType = 'admissions';
                this.changeSortType(this.sortType)
            },
            amountChangeSort: function(){
                this.sortType = 'amount';
                this.changeSortType(this.sortType)
            },
            planChangeSort: function(){
                this.sortType = 'plan';
                this.changeSortType(this.sortType)
            },
            studyChangeSort: function(){
                this.sortType = 'study';
                this.changeSortType(this.sortType)
            },
            endChangeSort: function(){
                this.sortType = 'end_at';
                this.changeSortType(this.sortType)
            },
            levelChangeSort: function(){
                this.sortType = 'level';
                this.changeSortType(this.sortType)
            },
            criteriaChangeSort: function(){
                this.sortType = 'criteria_id';
                this.changeSortType(this.sortType)
            },
            changeSortType: function(){
                this.sortReverse=!this.sortReverse;
                var st1= this.scholars;
                st1.sort(this.dynamicSort(this.sortType,this.sortReverse));
                this.scholars =st1;
                return this.scholars;
            },
            dynamicSort: function (property,order) {

                var sortOrder = 1;
                if (order) {sortOrder = -1}

                if(property[0] === "-") {
                    sortOrder = -1;
                    property = property.substr(1);
                }
                return function (a,b) {
                    var result = (a[property] < b[property]) ? -1 : (a[property] > b[property]) ? 1 : 0;
                    return result * sortOrder;
                }
            }
        },

        mounted() {
            console.log('Scholarship-Table component mounted!')
            this.getScholarships()
        }
    }

</script>