<!--<template>-->
    <!--<div class="row">-->
        <!--<div class="col-xs-12 col-sm-6 com-md-4" v-for="teacher in teachers">-->
                <!--<div class="row">-->
                            <!--<img class="img-circle" width="80" height="80" v-bind:src=teacher.info.avatar alt=""/>-->
                            <!--{{teacher.name}}<br>-->
                            <!--{{teacher.email}}-->

                <!--</div>-->
        <!--</div>-->
    <!--</div>-->
<!--</template>-->

<template>
    <div class="row">

        <!--<form class="sc-radio pull-left">-->
            <!--<input id="r1" type="radio" name="status" value="connected" v-model="status" checked> <label for="r1"><div class="r-lab">{{ lang('resource.students.active') }}</div></label> <br>-->
            <!--<input id="r2" type="radio" name="status" value="allumni" v-model="status" > <label for="r2"><div class="r-lab">{{ lang('resource.students.alumni') }}</div></label><br>-->
        <!--</form>-->


        <div class="input-group pull-left input-search">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" :placeholder="lang('resource.students.search')"
                   v-model="searchStr">
        </div>
        <button class="btn btn-info pull-right btn-view" v-on:click="changeView"> <!-- <i class="margin-right-10 fa fa-list"></i> --> {{ lang('resource.students.changeView') }}</button>
        <div class="clearfix"></div>


        <div v-if="selection==true">
            <div class="col-xxs-12 col-xs-6 col-lg-4 col-xl-3 col-xxl-2" v-for="teacher in filteredTeachers">

                <div class="sc-box2 ">
                    <div class="sc-up2"></div>

                    <div class="row">
                        <div class="sc-card ">
                            <a class="" href="#">
                                <div class="frame-cont2">
                                    <!--<img src="/new/img/photoFrame.png" class="frame" alt="">-->
                                    <!--<img :src=teacher.info.avatar class="avatar2" alt="">-->
                                    <!--<img src="/new/img/clip2.png" class="clip" alt="">-->
                                    <img :src=teacher.info.avatar class="avatar1" alt="">
                                </div>
                                <div class="img-cont2"><img class="img-circle2 sc-img2" width="70" :src=teacher.info.avatar alt=""/></div>
                                <div class="name"> {{teacher.name}} </div>
                            </a>
                            <div class="email2"><a :href="'mailto:'+teacher.email">{{teacher.email}}</a></div>
                        </div>
                    </div>

                    <!--<div><img src="/new/img/students.png" class="img-students hidden-sm hidden-xs" alt=""></div>-->
                </div>

                <!--<div class='wave'></div>-->
                <div class="sc-bottom2">
                    <div class="phone2">
                        <a :href="'tel:'+teacher.phone"><div class="circle2"></div> <span class="phone2-text"><i class="fa fa-phone"></i> {{teacher.phone}}</span></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="clearfix"></div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover"
                   style="background-color: #fff;" v-if="selection==false">
                <thead>
                <tr>
                    <th style="width: 30px">

                    </th>
                    <th> <a href="#" v-on:click="nameChangeSort">
                        {{ lang('resource.students.name') }}
                        <span v-if="sortType == 'name' && !sortReverse" class="fa fa-sort-amount-asc"></span>
                        <span v-if="sortType == 'name' && sortReverse" class="fa fa-sort-amount-desc"></span></a>
                    </th>
                    <th> <a href="#" v-on:click="phoneChangeSort">
                        {{ lang('resource.students.phone') }}
                        <span v-if="sortType == 'phone' && !sortReverse" class="fa fa-sort-amount-asc"></span>
                        <span v-if="sortType == 'phone' && sortReverse" class="fa fa-sort-amount-desc"></span></a>
                    </th>
                    <th> <a href="#" v-on:click="emailChangeSort">
                        e-mail
                        <span v-if="sortType == 'email' && !sortReverse" class="fa fa-sort-amount-asc"></span>
                        <span v-if="sortType == 'email' && sortReverse" class="fa fa-sort-amount-desc"></span></a>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="teacher in filteredTeachers">
                    <td>
                        <a class="" href="#">
                            <img class="img-circle" width="35" v-bind:src=teacher.info.avatar alt=""/>
                        </a>
                    </td>
                    <td style="text-transform: capitalize">{{teacher.name}}</td>
                    <td>{{teacher.phone}}</td>
                    <td>{{teacher.email}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>


<style>
    label{font-weight: 400;}
    .r-lab{margin: -23px 0 0 20px;}
    .margin-right-10 { margin-right: 10px; }
    .sc-radio{margin: 10px 15px; }
    .btn-view{margin: 11px 10px 10px 0; height: 38px;}
    .form-control{z-index: 0!important;}
    .input-search{width: 210px; margin: 10px 0 10px 10px; border: 1px solid #d1d1d1; border-radius: 5px;}

    .sc-box2{min-height: 160px; background: #fafafa; border: 1px solid #FD6A33; border-top-left-radius: 8px; border-top-right-radius: 8px;  padding: 0 25px;  border-bottom: none; position: relative;}


    .sc-up2{height: 70px; background: #7f8b85; margin: 0 -25px; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom: 1px solid #FD6A33;}
    .sc-img{box-shadow: 0 0 10px 2px #d1d1d1;  }
    .gray{-webkit-filter: grayscale(100%);}
    /*.opacity{opacity: 0.2}*/


    .name{text-transform: capitalize; font-size: 140%; font-weight: 400;}
    .email2{font-size: 90%; font-weight: 300;}
    .email2>a,.email2>a:visited{color: #7f8b85}
    /*.name{text-transform: capitalize; font-size: 140%; color: #fff; font-weight: 400; margin: -50px 0 0 90px;}*/
    /*.email{font-size: 90%; color: #888; font-weight: 300; margin: 5px 0 0 90px;}*/
    /*.phone{margin: 20px 0 0 90px;}*/

    .circle2{height: 19px; width: 19px; border-radius: 50%; background-color:#FD6A33; position: absolute; left: 22px; bottom: 37px; }

    /*.sc-bottom{height: 40px; background: #cad8d3; margin: 0 -25px; border-bottom-left-radius: 7px; border-bottom-right-radius: 7px;}*/
    .sc-bottom2{height: 50px; background: #cad8d3; margin: 0 0 20px 0; border-bottom-left-radius: 7px; border-bottom-right-radius: 7px; border: 1px solid #FD6A33; border-top: none; padding: 15px;}
    .sc-radio2{margin:-14px 0; opacity: 0.8}
    .phone2{margin: 0;}
    .phone2>a,.phone2>a:visited{color: #FD6A33;}
    .phone2>a:hover, .email2>a:hover{color: #FD6A33}

    .phone2-text>i{color: #cad8d3; margin-right: 7px}
    .phone2-text{position: absolute; bottom: 36px;}

    .img-students{height: 55px; width: auto; position: absolute; right: 20px; top: 85px; opacity: 0.07}

    /* =========== photo frame ==========*/
    /* ==================================*/
    .img-cont2{display: none}
    /*.frame-cont2{position: absolute; top:-3px; left: -10px;}*/
    .frame{height: 70px; width: 70px; display: none;}
    .clip{width: 17px; position: absolute; top:-3px; left: 66px; z-index: 1}
    .avatar2{
        width: 75px; height: auto; border-radius: 5px;;
        box-shadow: 0 0 15px 2px #555;
        position: absolute; top: 4px; left: 12px;
        -webkit-transform: rotate(5deg);
        -moz-transform: rotate(5deg);
        -o-transform: rotate(5deg);
        -ms-transform: rotate(5deg);
        transform: rotate(5deg)
    }
    .avatar1{
        width: 75px; height: auto; border-radius: 5px;;
        box-shadow: 0 0 15px 2px #555;
        position: absolute; top: 20px; left: 30px;
    }
    .img-circle2{ border-radius: 6px;}



    /* ==================================*/

    @media (min-width: 1360px) {
        .img-cont{margin: -45px 0 0 0 ; }
        .name{color: #fff; margin: 0; position: absolute; top: 45px; left: 115px;}
        .email2{margin: 0; position: absolute; top: 77px; left: 115px;}
    }

    @media (max-width: 1359px) {
        .img-cont2, .name, .email2{text-align: center;}
        .img-cont2{margin: -50px auto; }
        .name{margin: 55px auto 0 auto;  color: #008da5; }
        .email2{margin: 5px auto;}
        .sc-box2{min-height: 200px;}
        .avatar1,.frame-cont2{display: none;}
        .img-cont2{display: block;}

    }



    @media (min-width: 1680px) {
        .col-xl-3 {width: 25%;}
        .col-xl-4 {width: 33.33%;}
    }

    @media (min-width: 1980px) {
        .col-xxl-2 {width: 20%;}
        .col-xxl-3 {width: 25%;}
        .col-xxl-4 {width: 33.33%;}

    }
    @media (min-width: 2280px) {
        .pull-right{ margin-right: 50px!important;}
    }


    @media  (max-width: 767px) {
        .img-circle2{ border-radius: 50%}
    }

    @media  (max-width: 595px) {
        .col-xxs-12{width: 100%}
        .img-cont2{display: block}
        .frame-cont2{display: none;}
    }

    @media  (max-width: 534px) {
        .btn-view{width: 95%; margin: 0 auto 15px auto; float: none!important; display: block; text-align: center!important;}
    }

</style>


<!--  RADIO INPUT STYLE -->
<style>
    .sc-radio> input[type=radio],.sc-radio2> input[type=radio]{
        visibility: hidden;
        position: absolute;
    }
    .sc-radio>input[type=radio] + label,.sc-radio2>input[type=radio] + label{
        cursor:pointer;
    }
    .sc-radio>input[type=radio] + label:before,.sc-radio2>input[type=radio] + label:before{
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
    .sc-radio>input[type=radio]:checked + label:before,.sc-radio2>input[type=radio]:checked + label:before{
        background: #008da5;
    }
    .sc-radio>input[type=radio]:checked + label:before{
        box-shadow: inset 0 0 0 3px #EEF1F2;
    }
    .sc-radio2>input[type=radio]:checked + label:before{
        box-shadow: inset 0 0 0 3px #CAD8D3;
    }
</style>
<!--<link rel="stylesheet" type="text/css" href="/new/css/input-radio.css" />-->

<!--  WAVE STYLE -->
<style>
    .wave{
        background:#fafafa;
        height: 10px;
        position: relative;
        border-left: 1px solid #cfcfcf;
        border-right: 1px solid #cfcfcf;
    }
    .wave::before,.wave::after{
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        right: 0;
        background-repeat: repeat;
        /*background-size: 20px 20px;*/
        background-size: 10px 10px;
    }
    .wave::before{
        /*height: 10px;*/
        /*background-image: radial-gradient(circle at 10px -5px, transparent 12px, #cad8d3 13px);*/
        height: 5px;
        background-image: radial-gradient(circle at 5px -2.5px, transparent 6px, #cad8d3 6.5px);
    }
    .wave::after{
        /*height: 15px;*/
        /*background-size: 40px 20px;*/
        /*background-image: radial-gradient(circle at 10px 15px, #cad8d3 12px, transparent 13px);*/
        height: 7.5px;
        background-size: 20px 10px;
        background-image: radial-gradient(circle at 5px 7.5px, #cad8d3 6px, transparent 6.5px);
    }
</style>







<script>




    export default{
        data: function() {
            return{
                teachers: {},
                searchStr:"",
                selection:true,
                sortReverse:false,
                sortType:'name',
                status:'connected',
                stStatus:''
            }
        },
        computed: {
            filteredTeachers: function () {
                var filtered_array = this.teachers;

                var searchString = this.searchStr;

                if(!searchString){
                    return filtered_array;
                }

                searchString = searchString.trim().toLowerCase();
                filtered_array = filtered_array.filter(function(item){
                    if( (item.name.indexOf(searchString) !== -1) ||
                            (item.name.toLowerCase().indexOf(searchString) !== -1) ||
                            (item.email.toLowerCase().indexOf(searchString) !== -1)

                    ){ return item;   }
                })
                return filtered_array;
            },
        },

        methods: {
            getAllTeachers: function(){
                axios.get('/connected/teachers')
                        .then(response => {
                    this.teachers = response.data
                    this.teachers.sort(this.dynamicSort(this.sortType,this.sortReverse));
            });
            },
            nameChangeSort: function(){
                this.sortType = 'name';
                this.changeSortType(this.sortType)
            },
            phoneChangeSort: function(){
                this.sortType = 'phone';
                this.changeSortType(this.sortType)
            },
            emailChangeSort: function(){
                this.sortType = 'email';
                this.changeSortType(this.sortType)
            },

            changeSortType: function(){
                this.sortReverse=!this.sortReverse;
                var st1= this.teachers;
                st1.sort(this.dynamicSort(this.sortType,this.sortReverse));
                this.teachers=st1;
                return this.teachers
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

            changeView: function () {
                this.selection=!this.selection;
            }
        },

        mounted() {
            this.getAllTeachers()
        }
    }

</script>



