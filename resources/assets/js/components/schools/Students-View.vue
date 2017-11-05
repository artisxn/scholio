<template>
    <div class="row">

        <form class="sc-radio pull-left">
            <input id="r1" type="radio" name="status" value="connected" v-model="status" @click.prevent="fetch"> <label for="r1"><div class="r-lab" style="width: 100px;">{{ lang('resource.students.active-many') }}
                <span class="pull-right" style="">{{ connectedStudents }}</span>
                </div>
            </label> <br>
            <input id="r2" type="radio" name="status" value="allumni" v-model="status" @click.prevent="fetch">
            <label for="r2">
                <div class="r-lab" style="width: 100px;">{{ lang('resource.students.alumni-many') }}
                    <span class="pull-right" style="">{{ allumniStudents }}</span>
                 </div>
            </label>
            <br>
        </form>


        <div class="input-group pull-left input-search">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" :placeholder="lang('resource.students.search')"
                   v-model="searchStr" v-on:keyup="fetch(1)">
        </div>
        <button class="btn btn-info pull-right btn-view" v-on:click="changeView()"> <!-- <i class="margin-right-10 fa fa-list"></i> --> {{ lang('resource.students.changeView') }}</button>
        <div class="clearfix"></div>


        <div v-if="selection==true">
            <div class="col-xxs-12 col-xs-6 col-lg-4 col-xl-3 col-xxl-2 cards-container" v-for="student in filteredStudents" v-if="(student.role=='student')" >

                <div  class="" style="display: none">
                    <div class="">
                        <div class="sc-box">
                            <div class="sc-up"></div>
                            <div class="row">
                                <div class="sc-card">
                                    <a class="" href="#">
                                        <div class="frame-cont">
                                            <img src="/new/img/photoFrame.png" class="frame" alt="">
                                            <img :src="scholio + student.student.avatar" class="avatar2" alt="">
                                            <img src="/new/img/clip2.png" class="clip" alt="">
                                        </div>
                                        <div class="img-cont"><img class="img-circle sc-img" width="70" :src="scholio + student.student.avatar" alt=""/></div>
                                        <div class="name"> {{student.name}} </div>
                                    </a>
                                    <div class="email"><a :href="'mailto:'+student.email">{{student.email}}</a></div>
                                </div>


                            </div>
                            <div><img src="/new/img/students.png" class="img-students hidden-sm hidden-xs" alt=""></div>
                        </div>
                        <!-- <div class='wave'></div> -->
                        <div class="sc-bottom" >
                            <div class="phone">
                                <a :href="'tel:'+student.cv.student_phone"><div class="circle"></div> <span class="phone-text"><i class="fa fa-phone"></i> {{ student.cv.student_phone }}</span></a>
                            </div>
                            <form class="sc-radio2 pull-right" v-on:change="changeStatus(student.id)">
                                <input v-model="status" :id="'st' + student.id" type="radio" :name="'studentStatus' + student.id" value="connected">

                                <label :for="'st' + student.id"><div class="r-lab">{{ lang('resource.students.active') }}
                                </div>
                                </label>
                                <br>
                                <input v-model="status" :id="'stt' + student.id" type="radio" :name="'studentStatus' + student.id" value="allumni">

                                <label :for="'stt' + student.id">
                                    <div class="r-lab">{{ lang('resource.students.alumni') }}</div>
                                </label>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="double-card"  :id="'card'+student.id">
                    <div class="front">


                        <div class="sc-box">
                            <div class="sc-up"></div>

                            <div class="row">
                                <div class="sc-card">
                                    <a class="" href="#">
                                        <div class="frame-cont">
                                            <img src="/new/img/photoFrame.png" class="frame" alt="">
                                            <img :src="scholio + student.student.avatar" class="avatar2" alt="">
                                            <img src="/new/img/clip2.png" class="clip" alt="">
                                        </div>
                                        <div class="img-cont"><img class="img-circle sc-img" width="70" :src="scholio + student.student.avatar" alt=""/></div>
                                        <div class="name"> {{student.name}} </div>
                                    </a>
                                    <div class="email"><a :href="'mailto:'+student.email">{{student.email}}</a></div>
                                </div>
                            </div>
                            <div><img src="/new/img/students.png" class="img-students hidden-sm hidden-xs" alt=""></div>

                        </div>


                        <div class="sc-bottom" >
                            <div class="phone">
                                <a :href="'tel:'+student.cv.student_phone"><div class=""></div> <span class="phone-text"><i class="fa fa-phone"></i> {{ student.cv.student_phone }}</span></a>
                            </div>
                            <form class="sc-radio2 pull-right" v-on:change="changeStatus(student.id)">
                                <input v-model="status" :id="'st' + student.id" type="radio" :name="'studentStatus' + student.id" value="connected">

                                <label :for="'st' + student.id"><div class="r-lab">{{ lang('resource.students.active') }}
                                </div>
                                </label>
                                <br>
                                <input v-model="status" :id="'stt' + student.id" type="radio" :name="'studentStatus' + student.id" value="allumni">

                                <label :for="'stt' + student.id">
                                    <div class="r-lab">{{ lang('resource.students.alumni') }}</div>
                                </label>
                                <br>
                            </form>
                        </div>


                        <button @click="flip(student.id)" class="btn-flip">flip</button>
                    </div>


                    <div class="back"> 2
                        <button @click="flip(student.id)" class="btn-flip">flip</button>
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
                    <th>
                        {{ lang('resource.students.phone') }}
                    </th>
                    <th> <a href="#" v-on:click="emailChangeSort">
                        e-mail
                        <span v-if="sortType == 'email' && !sortReverse" class="fa fa-sort-amount-asc"></span>
                        <span v-if="sortType == 'email' && sortReverse" class="fa fa-sort-amount-desc"></span></a>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="student in filteredStudents">
                    <td>
                        <a class="" href="#">
                            <img class="img-circle" width="35" v-bind:src=student.student.avatar alt=""/>
                        </a>
                    </td>
                    <td style="text-transform: capitalize">{{ student.name }}</td>
                    <td>{{ student.cv.student_phone }}</td>
                    <td>{{ student.email }}</td>
                </tr>
                </tbody>
            </table>
        </div>

        <paginator :dataSet="dataSet" @changed="fetch"></paginator>
    </div>
</template>


<style>

    .cards-container{
        margin: 10px 0;
        height:206px;
        perspective: 900px;
    }

    .double-card{

        width: 100%;
        height: 100%;
        transform-style: preserve-3d;
        transition: transform 0.6s;
    }

    .double-card div{
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
    }

   .front {

    }
    .back {
        background-color: #ddd;

        transform: rotateY( 180deg );
    }

    .front,.back{
        /*border-radius: 5px; border: 1px solid #999*/
    }

    .flipped{transform: rotateY( 180deg );}

    .btn-flip{position: absolute; top:15px; right: 15px;}









    label{font-weight: 400;}
    .r-lab{margin: -23px 0 0 20px;}
    .margin-right-10 { margin-right: 10px; }
    .sc-radio{margin: 10px 15px; }

    .btn-info,.btn-info:focus{background: #00bcd4; border-color: #00bcd4; }
    .btn-info:hover{background: #00a6be; border-color: #00a6be; }

    .btn-view{margin: 11px 10px 10px 0; height: 38px;}
    .form-control{z-index: 0!important;}
    .input-search{width: 210px; margin: 10px 0 10px 10px; border: 1px solid #d1d1d1; border-radius: 5px;}

    .sc-box{min-height: 160px; background: #fafafa; border: 1px solid #a5a5a5; border-top-left-radius: 8px; border-top-right-radius: 8px;  padding: 0 25px;  border-bottom: none; position: relative;}


    .sc-up{height: 70px!important; background: #008da5; margin: 0 -25px; border-top-left-radius: 7px; border-top-right-radius: 7px; }
    .sc-img{box-shadow: 0 0 10px 2px #d1d1d1;  }
    .gray{-webkit-filter: grayscale(100%);}
    /*.opacity{opacity: 0.2}*/


    .name{text-transform: capitalize; font-size: 140%; font-weight: 400;}
    .email{font-size: 90%; font-weight: 300;}
    .email>a,.email>a:visited{color: #888}
    /*.name{text-transform: capitalize; font-size: 140%; color: #fff; font-weight: 400; margin: -50px 0 0 90px;}*/
    /*.email{font-size: 90%; color: #888; font-weight: 300; margin: 5px 0 0 90px;}*/
    /*.phone{margin: 20px 0 0 90px;}*/

    .circle{height: 19px; width: 19px; border-radius: 50%; background-color:#008da5; position: absolute; left: 22px; bottom: 37px; }

    /*.sc-bottom{height: 40px; background: #cad8d3; margin: 0 -25px; border-bottom-left-radius: 7px; border-bottom-right-radius: 7px;}*/
    .sc-bottom{height: 50px!important; background: #cad8d3; margin: 0 0 20px 0; bottom: -25px;
        border-bottom-left-radius: 7px; border-bottom-right-radius: 7px; border: 1px solid #a5a5a5; border-top: none; padding: 15px;}
    .sc-radio2{margin:-10px 80px 0 0 ; opacity: 0.8;}

    .phone{margin: 0;}
    .phone>a,.phone>a:visited{color: #008da5;}
    .phone>a:hover, .email>a:hover{color: #FD6A33}

    .phone-text>i{color: #cad8d3; margin-right: 7px}
    .phone-text{position: absolute; bottom: 36px;}

    .img-students{height: 55px; width: auto; position: absolute; right: 30px; top: 85px; opacity: 0.07}

   /* =========== photo frame ==========*/
   /* ==================================*/
    .img-cont{display: none}
    .frame-cont{position: absolute; top:-3px; left: -10px;}
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



    /* ==================================*/

    @media (min-width: 1331px) {
        .img-cont{margin: -45px 0 0 0 ; }
        .name, .email{position: absolute; margin:0; left: 95px!important;}
        .email{margin: 0; top: 77px;}
        .name{color: #fff!important; top: 38px;}

    }



    @media (max-width: 1330px) {
        .img-cont, .name, .email{text-align: center;}
        .img-cont{margin: -50px auto; }
        .name{margin: 55px auto 0 auto;  color: #008da5; }
        .email{margin: 5px auto;}
        .sc-box{min-height: 200px;}

        .frame-cont{display: none;}
        .img-cont{display: block}

    }



    @media (min-width: 1790px) {
        .col-xl-3 {width: 25%;}
        .col-xl-4 {width: 33.33%;}
    }

    @media (min-width: 2000px) {
        .col-xxl-2 {width: 20%;}
        .col-xxl-3 {width: 25%;}
        .col-xxl-4 {width: 33.33%;}

    }
    @media (min-width: 2280px) {
        .pull-right{ margin-right: 50px!important;}
    }

    @media  (max-width: 595px) {
        .col-xxs-12{width: 100%}


    }
    @media  (max-width: 550px) {

        .btn-view{width: 95%; margin: 0 auto 15px auto; float: none!important; display: block; text-align: center!important;}

    }


    /*RADIO INPUT STYLE [same @ Scholarships-vue]*/

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
    .sc-radio>input[type=radio]:checked + label:before,.sc-radio2>input[type=radio]:checked + label:before{
        box-shadow: inset 0 0 0 3px #EEF1F2;
    }
    .sc-radio2>input[type=radio]:checked + label:before{
        box-shadow: inset 0 0 0 3px #CAD8D3;
    }

<!--  WAVE STYLE -->
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
                items: [],
                searchStr:"",
                selection:true,
                sortReverse:false,
                sortType:'name',
                status:'connected',
                stStatus:'',
                dataSet: false,
                allumniStudents: 0,
                connectedStudents: 0,
                scholio: null
            }
        },
        computed: {
            activeStudentsLength: function(){
                return this.items[0].connectedStudents;
            },

            allumniStudentsLength: function(){
                return this.items[0].allumniStudents;
            },

            filteredStudents: function () {
                return this.items;
            },

        },

        methods: {
            changeStatus: function(id, st){
                var status = '';
                if(document.getElementById('st'+id).checked) status = 'connected';
                else status = 'allumni';
                axios.post('/api/school/changeStudentStatus/' + id + '/' + status)
                    .then(response => {
                        if(response.data == 'ok'){
                            // location.reload(); // ---------------------------------->>>>>>
                            this.fetch()
                        } 
                    })

                    this.status = status
            },
            nameChangeSort: function(){
                this.sortType = 'name';
                this.sortReverse=!this.sortReverse;
                this.fetch(1)
            },
            emailChangeSort: function(){
                this.sortType = 'email';
                this.sortReverse=!this.sortReverse;
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

                    return `/api/connected/students/search/${this.sortType}/${this.sortReverse}/${this.status}/${search}?page=${page}`;
                }, 

                fetch(page) {
                    window.scrollTo(0, 0);
                    axios.get(this.url(page)).then(this.refresh);
                },

                refresh({data}) {
                    this.dataSet = data;
                    this.items = data.data;
                    this.allumniCount = this.items.allumniStudents
                    this.connectedCount = this.items.connectedStudents
                },

            changeView: function () {
                this.selection=!this.selection;
            },
            flip(id){
                $("#card"+id).toggleClass("flipped");
            }
        },

        created() {
            this.fetch();
        },

        watch: {
            dataSet() {
                this.allumniStudents = this.dataSet.allumniStudents || 0;
                this.connectedStudents = this.dataSet.connectedStudents || 0;
            }
        },

        mounted() {
            this.scholio = window.location.origin
        }
    }

</script>


