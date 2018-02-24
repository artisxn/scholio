<template>
    <div class="row main-content-box">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="m-t-0 header-title"><b>{{ lang('panel_scholarships.view.title') }}</b></h4>

                        <div style="margin-left: -10px">
                            <form class="sc-radio pull-left">
                                <div>
                                    <input id="r1" type="radio" name="status" value="1" v-model="active" checked> <label for="r1"><div class="r-lab">{{ lang('panel_scholarships.view.status.active') }}</div></label>
                                    <span class="sch-counter">{{activeLength}}</span>
                                </div>
                                <div>
                                    <input id="r2" type="radio" name="status" value="0" v-model="active"> <label for="r2"><div class="r-lab">{{ lang('panel_scholarships.view.status.ended') }}</div></label>
                                    <span class="sch-counter">{{endedLength}}</span>
                                </div>
                            </form>
                        </div>

                        <div class="input-group pull-left search-input">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" :placeholder="lang('panel_scholarships.view.search')" v-model="searchStr" v-on:keyup="fetch(1)">
                        </div>

                        <div class="clearfix"></div>


                        <div class="">
                            <div class="table-responsive" data-pattern="priority-columns">
                                <table id="" class="table  table-striped" >
                                    <thead>
                                        <tr>
                                            <!-- <th>ID</th> -->

                                            <!--<th>-->
                                                <!--<a href="#" v-on:click="planChangeSort" class="center-th">-->
                                                    <!--{{ lang('panel_scholarships.view.financial') }}-->
                                                    <!--<span v-if="sortType == 'plan' && !sortReverse" class="fa fa-sort-amount-asc"></span>-->
                                                    <!--<span v-if="sortType == 'plan' && sortReverse" class="fa fa-sort-amount-desc"></span>-->
                                                <!--</a>-->
                                            <!--</th>-->
                                            <th class=" hidden-xsm" style="">
                                                <a href="#" v-on:click="amountChangeSort" class="">
                                                <!--{{ lang('panel_scholarships.view.price') }}-->
                                                    {{ lang('panel_scholarships.view.financial') }}
                                                 <span v-if="sortType == 'financial_amount' && !sortReverse" class="fa fa-sort-amount-asc"></span>
                                                 <span v-if="sortType == 'financial_amount' && sortReverse" class="fa fa-sort-amount-desc"></span>
                                                </a>
                                            </th>
                                            <th class="hidden-xlg"></th>
                                            <th v-if=""> <!-- condition MUST CHANGE-->
                                                <a href="#" v-on:click="studyChangeSort" class="">
                                                    {{ lang('panel_scholarships.view.studies') }}
                                                    <span v-if="sortType == 'study_length' && !sortReverse" class="fa fa-sort-amount-asc"></span>
                                                    <span v-if="sortType == 'study_length' && sortReverse" class="fa fa-sort-amount-desc"></span>
                                                </a>
                                            </th>
                                            <th v-if="showLevel" class="hidden-xxs"> <!-- condition MUST CHANGE-->
                                                <a href="#" v-on:click="levelChangeSort" class="">
                                                    {{ lang('panel_scholarships.view.level') }}
                                                    <span v-if="sortType == 'level_length' && !sortReverse" class="fa fa-sort-amount-asc"></span>
                                                    <span v-if="sortType == 'level_length' && sortReverse" class="fa fa-sort-amount-desc"></span>
                                                </a>
                                            </th>
                                            <th v-if="" class="hidden-mdl"> <!-- condition MUST CHANGE-->
                                                <a href="#" v-on:click="criteriaChangeSort" class="">
                                                    {{ lang('panel_scholarships.view.criteria') }}
                                                    <span v-if="sortType == 'criteria_id' && !sortReverse" class="fa fa-sort-amount-asc"></span>
                                                    <span v-if="sortType == 'criteria_id' && sortReverse" class="fa fa-sort-amount-desc"></span>
                                                </a>
                                            </th>
                                            <th v-if="" class="hidden-lgm"> <!-- condition MUST CHANGE-->
                                                <a href="#" v-on:click="endChangeSort" class="">
                                                    <span v-if="active==1">{{ lang('panel_scholarships.view.end_date') }}</span>
                                                    <span v-if="active==0">{{ lang('panel_scholarships.view.ended') }}</span>
                                                    <span v-if="sortType == 'end_at' && !sortReverse" class="fa fa-sort-amount-asc"></span>
                                                    <span v-if="sortType == 'end_at' && sortReverse" class="fa fa-sort-amount-desc"></span>
                                                </a>
                                            </th>
                                            <th>
                                                <a href="#" v-on:click="admissionChangeSort" class="hidden-xxxs">
                                                {{ lang('panel_scholarships.view.admitted') }}
                                                <span v-if="sortType == 'admissions_length' && !sortReverse" class="fa fa-sort-amount-asc"></span>
                                                <span v-if="sortType == 'admissions_length' && sortReverse" class="fa fa-sort-amount-desc"></span>
                                                </a>
                                            </th>
                                            <!--<th>-->
                                                <!--Admission Limit-->
                                            <!--</th>-->
                                            <!-- <th>Νικητής</th> -->
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="scholarship in filteredStudies">
                                            <!-- <td>{{ scholarship.id }}</td> -->
                                            <!--<td class="center-td tool">-->
                                                    <!--<img :src="'/panel/assets/images/steps/'+scholarship.financial.icon" height="30px" alt="" class="">-->
                                                    <!--<span class="tooltiptext tooltip4">{{ scholarship.plan }}</span>-->

                                            <!--</td>-->

                                            <td class="tool hidden-xsm" style=" padding-left: 0; padding-right: 0">
                                                <div class="dots-text dots-sm hidden-xxlx">
                                                    <img :src="'/panel/assets/images/steps/'+scholarship.financial_icon" height="30px" alt="" class="">
                                                </div>
                                                <span class="tooltiptext tooltip4 hidden-xxlx">
                                                    {{ scholarship.financial_plan }} {{ scholarship.financial_amount }}<span>{{scholarship.financial_metric}}</span>
                                                </span>
                                                <span class=" hidden-xxlxx" >
                                                    {{ scholarship.financial_plan }} {{ scholarship.financial_amount }}<span>{{scholarship.financial_metric}}</span>
                                                </span>

                                            </td>
                                            <td class="hidden-xlg"><img :src="'/panel/assets/images/steps/'+scholarship.section_icon+'.png'" height="30px"></td>
                                            <!--<td v-if="showLevel">-->
                                                <!--<span class="tool">-->
                                                    <!--{{ study(scholarship.study, 30) }}-->
                                                    <!--<span class="tooltiptext">{{scholarship.study}}</span>-->
                                                <!--</span>-->
                                            <!--</td>-->
                                            <td v-if="showLevel">
                                                <span class="tool">
                                                    <div class="dots-text dots-mlg dots-lg dots-xl-left dots-study" v-if="scholarship.study_name">{{scholarship.study_name}}</div>
                                                    <div class="dots-text dots-mlg dots-lg dots-xl-left" v-else>Πολλαπλά Αντικείμενα Σπουδών</div>
                                                    <span class="tooltiptext tooltip3" v-if="scholarship.study_name">{{scholarship.study_name}}</span>
                                                    <span class="tooltiptext tooltip3" v-else>Πολλαπλά Αντικείμενά Σπουδών </span>
                                                </span>
                                            </td>
                                            <td  class="tool hidden-xxs">
                                                <div class="dots-text dots-mlg2 dots-xl-left">{{ scholarship.level_name }}</div>
                                                <span class="tooltiptext tooltip2 hidden-xlxl">{{ scholarship.level_name }}</span>
                                            </td>
                                            <td class="tool hidden-mdl">
                                                <div class="dots-text dots-sm hidden-xxl">
                                                <img :src="'/panel/assets/images/steps/'+ scholarship.criteria_name+'.png'" height="30px" alt="" class="">
                                                </div>
                                                <span class="tooltiptext tooltip5 hidden-xlxl">{{ scholarship.criteria_name }}</span>

                                                <span class="hidden-xl dots-text dots-mlg3 visible-xxl dots-xl-left">{{ scholarship.criteria_name }}</span>

                                            </td>
                                            <td class="hidden-lgm" style=""> <div class="dots-text dots-md"> {{ scholarship.end_at }}</div></td>
                                            <td class="hidden-xxxs"> <div class="dots-text dots-sm"> {{ scholarship.admissions_length}} </div></td>
                                            <td>
                                                {{ scholarship.admissions_limit }}
                                            </td>
                                            <!-- <td>{{ scholarship.winner_id }}</td> -->
                                            <td><button v-on:click="onEdit(scholarship.id)" class="btn btn-success">{{ lang('panel_scholarships.view.show') }}</button></td>
                                            <!--<td><button v-on:click="onDelete(scholarship.id)" class="btn btn-primary">Διαγραφή</button></td>-->
                                            
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <paginator :dataSet="dataSet" @changed="fetch"></paginator>
        </div>

        <div style="max-width: 800px" v-show="sc_amounts.length > 0">
            <div style="font-size: 160%; font-weight: 300; margin-left: 25px">{{ lang('panel_scholarships.view.chart') }}</div>
            <div>
                <chart-vue :chart-data="datacollection" :options="dataoptions"></chart-vue>
            </div>
        </div>
    </div>
</template>

<style>
     th, td {text-align: center; vertical-align:middle;}


    .search-input{width: 310px; margin: 10px 0; border: 1px solid #d1d1d1; border-radius: 5px;}

    .btn-info{background-color: #324c5a!important;}
    .btn-info:hover{background-color: #466473 !important;}
    .btn-success{background-color: #00bcd4!important;}
    .btn-success:hover{background-color: #00abc3 !important;}
    .btn-primary{background-color: #008da5!important;}
    .btn-primary:hover{background-color: #007991 !important;}
    .btn-success,.btn-info,.btn-primary{border: none!important; height: 30px; padding: 0 20px}
    .sch-counter{color: #888; margin:0 30px 0 15px; float: right}
    .card-box .row .col-lg-12 div .sc-radio{width:  210px; margin-right: 5px; padding-right: 10px; }
    .dots-text{display:inline-block;
        /*min-width: 150px;*/
        /*max-width: 200px;*/
        width: 150px;
        white-space: nowrap;
        overflow:hidden !important;
        text-overflow: ellipsis;
    }

     @media(min-width: 1420px){
         .dots-text{width:210px}
         .hidden-xxl{display: none;}
         .visible-xxl{display: block}
         .dots-xl-left{text-align: left}
     }
     @media(min-width: 1580px){
         .dots-text{width:220px}
         /*.dots-lg{width:95%;}*/
         /*.dots-mlg3{width: 65%}*/
         .hidden-xlxl{display: none;}
     }
     @media(min-width: 1700px){
         .hidden-xxlx{display: none;}
         .visible-xxlx{display: block}
     }
     @media(min-width: 1840px){
         /*.dots-lg{width: 100%}*/

     }
     @media(min-width: 2140px){
         /*.dots-lg{width:100% }*/
     }
     .dots-sm{width: 90px;}
     .dots-md{width: 110px;}

     @media(max-width: 1699px){
         .hidden-xxlxx{display: none;}
         .visible-xxlxx{display: block}
     }

     @media(max-width: 1579px){
         .dots-mlg3{width: 120px}
     }

     @media(max-width: 1419px){
         .hidden-xl{display: none;}
     }
     @media(max-width: 1280px){
         .hidden-xlg{display: none;}
     }
     @media(max-width: 1210px){
         .dots-mlg{width: 130px}
         .dots-mlg2{width: 100px}
     }
     @media(max-width: 1140px){
         .hidden-lgm{display: none;}
     }
     @media(max-width: 845px){
         .hidden-mdl{display: none;}
     }
     @media(max-width: 688px){
         .hidden-xsm{display: none;}
     }
     @media(max-width: 585px){
         .hidden-xxs{display: none;}
         .dots-mlg{width: 170px}
     }
     @media(max-width: 515px){

         .dots-mlg{width: 150px}
         .dots-sm{width: 70px;}
         .container,.col-lg-12{padding: 0!important;}
     }
     @media(max-width: 409px){
         .hidden-xxxs{display: none;}
         .dots-mlg{width: 160px}

     }


     /*  ================ */



    @media (max-width: 570px) {
        .search-input{width: 235px;}

    }

    @media (max-width: 535px) {
        .search-input{width: 100%;  float: none!important; text-align: center; margin: 5px auto 20px auto;}
    }

    @media(max-width: 419px){
        .main-content-box{margin-top: 15px;}
    }

    /* =========TOOLTIP=========*/
    .tool {
        position: relative;
    }

    .tooltiptext  {
        font-weight: 300;
        visibility: hidden;
        width: 300px;
        background-color: #007991;
        color: #fff;
        text-align: center;
        border-radius: 5px;
        padding: 4px 1px;
        position: absolute;
        z-index: 1;
        bottom: 120%;
        margin-left: -110px;
        opacity: 0;
        transition: opacity 0.1s;
        background-color: #007991;
    }

    .tooltip2{width: 230px;  bottom: 40px; left: 140px;}
    .tooltip3{width: 270px;  bottom: 27px; left: 140px;}
    .tooltip4{width: 180px;  bottom: 50px; left: 140px;}
    .tooltip5{width: 215px;  bottom: 45px; left: 150px;}

     @media (max-width: 767px) {
         .tooltip3{width:420px;}
         }

     @media (max-width: 430px) {
         .tooltip3{width:370px;}
     }

     @media (max-width: 380px) {
         .tooltip3{width:310px;}
     }

    /*.tooltiptext::after {*/
        /*content: "";*/
        /*position: absolute;*/
        /*top: 100%;*/
        /*left: 50%;*/
        /*margin-left: -5px;*/
        /*border-width: 5px;*/
        /*border-style: solid;*/
        /*border-color: #007991 transparent transparent transparent;*/
    /*}*/
    .tool:hover .tooltiptext{
        visibility: visible;
        opacity: 1;
    }

    /*.dots-study{max-width: 90%!important; }*/

     /* =================================*/



     /*RADIO INPUT STYLE [same @ Students-vue]*/

    .sc-radio>input[type=radio]{
        visibility: hidden;
        position: absolute;
    }
    .sc-radio>input[type=radio] + label{
        cursor:pointer;
    }
    .sc-radio>input[type=radio] + label:before{
        width:15px;
        height:15px;
        margin-right: 4px;
        content: " ";
        display:inline-block;
        transition: 0.1s;
        border:1px solid #888;
        border-radius:50%;
    }

    /* CHECKED */
    .sc-radio>input[type=radio]:checked + label:before{
        background: #008da5;
    }
    .sc-radio>input[type=radio]:checked + label:before{
        box-shadow: inset 0 0 0 3px #EEF1F2;
    }
</style>

<script>
import Chart from '../../VueChart.vue'
    export default{
        components: {'chart-vue': Chart},
        data: function() {
            return{
                items: [],
                dataSet: false,
                activeLength:0,
                endedLength:0,
                active:'1',
                scholarships: {},
                showLevel:false,
                sortReverse:true,
                sortType:'admissions_length',
                scholars:[],
                searchStr:"",
                sc_amounts: [],
                sc_names:[],
                sc_labels:[],

                datacollection: {
                  labels: this.sc_labels,
                  datasets: [
                    {
                      label: this.sc_labels,
                      backgroundColor: '#008da5',
                      data: this.sc_labels
                    }
                  ]
                },
                dataoptions: {responsive: true, maintainAspectRatio: false,
//                    tooltips: {
//                        mode: 'label',
//                        callbacks: {
//                            title: function (i,data) {
//                                return 'study: '+ data.labels[0] ;
//                            },
////                            label: function (tooltipItem,data) {
////                                return data.datasets[tooltipItem.datasetIndex].label + ": " + tooltipItem.yLabel;
////                            }
//                        }
//                    },




                        scales: {
                            xAxes: [{
                                afterFit: function(scaleInstance) {
                                    scaleInstance.width = 500; // sets the width to 100px
                                },
                                ticks: {
                                   // set the fontSize to 0 so that extra labels are not forced on the right side
                                   fontSize: 0
                                }
                            }]
                        }
                }
            }
        },
        computed: {
            filteredStudies: function () {
                return this.items;
            }
        },
        watch:{
           active(){
                this.fetch()
           } 
        },
        methods: {
            counters:function(){
                this.activeLength=this.dataSet.active
                this.endedLength=this.dataSet.deactive
            },
            study: function(st, i){
                var letters = i;
                if(st.length > letters){
                    return st.substring(0,letters);
                }

                return st;
            },
            updateChart: function(){
                this.datacollection = {
                  labels: this.sc_names,
                  datasets: [
                    {
                      label: window.lang.panel_scholarships.view.applicants,
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
                this.changeSortType('admissions_length')
            },
            amountChangeSort: function(){
                this.changeSortType('financial_amount')
            },
            planChangeSort: function(){
                this.changeSortType('financial_plan')
            },
            studyChangeSort: function(){
                this.changeSortType('study_name')
            },
            endChangeSort: function(){
                this.changeSortType('end_at')
            },
            levelChangeSort: function(){
                this.changeSortType('level_name')
            },
            criteriaChangeSort: function(){
                this.changeSortType('criteria_name')
            },
            changeSortType: function(sort){
                this.sortReverse=!this.sortReverse;
                this.sortType = sort
                this.fetch(1)
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
            },

            url(page) {
                if (! page) {
                    let query = location.search.match(/page=(\d+)/);
                    page = query ? query[1] : 1;
                }

                let search = this.searchStr

                if(search == ""){
                    search = "%20"
                }

                return `/api/school/getScholarships/${this.sortType}/${this.sortReverse}/${this.active}/${search}?page=${page}`;
            }, 

            fetch(page) {
                axios.get(this.url(page)).then(this.refresh);
            },

            refresh({data}) {
                this.sc_amounts= []
                this.sc_names= []
                this.sc_labels= []
                this.dataSet = data;
                this.items = data.data;
                this.scholarships = this.items
                var parent = this
                this.scholarships.forEach(function(i){
                    if(i.admissions_length > 0 && i.study_name){
                        parent.sc_amounts.push(i.admissions_length)
                        parent.sc_labels.push( i.study_name.substring(0,12)+'...' )
                        parent.sc_names.push( i.study_name )
                    }
                })

                if(this.dataSet.school_type < 6 || this.dataSet.school_type > 9 ) {this.showLevel=true}

                this.updateChart()
                this.counters()
                window.scrollTo(0, 0);
            },
        },

        mounted() {
            this.fetch()
        }
    }

</script>