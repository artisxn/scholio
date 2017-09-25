

<template>
    <div class="row">

        <form class="sc-radio pull-left">
            <input id="r1" type="radio" name="status" value="connected" v-model="status" checked> <label for="r1"><div class="r-lab">{{ lang('resource.students.active') }}</div></label> <br>
            <input id="r2" type="radio" name="status" value="allumni" v-model="status" > <label for="r2"><div class="r-lab">{{ lang('resource.students.alumni') }}</div></label><br>
        </form>


        <div class="input-group pull-left input-search">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" :placeholder="lang('resource.students.search')"
                   v-model="searchStr">
        </div>
        <button class="btn btn-info pull-right btn-view" v-on:click="changeView"> <!-- <i class="margin-right-10 fa fa-list"></i> --> {{ lang('resource.students.changeView') }}</button>
        <div class="clearfix"></div>


        <div v-if="selection==true">
            <div class="col-xxs-12 col-xs-6 col-lg-4 col-xl-3 col-xxl-2" v-for="student in filteredStudents" v-if="(student.role=='student')">

                <div class="sc-box">
                    <div class="sc-up"></div>

                    <div class="row">
                        <div class="sc-card">
                            <a class="" href="#">
                                <div class="frame-cont">
                                    <img src="/new/img/photoFrame.png" class="frame" alt="">
                                    <img :src=student.info.avatar class="avatar2" alt="">
                                    <img src="/new/img/clip2.png" class="clip" alt="">
                                </div>
                                <div class="img-cont"><img class="img-circle sc-img" width="70" :src=student.info.avatar alt=""/></div>
                                <div class="name"> {{student.name}} </div>
                            </a>
                            <div class="email"><a :href="'mailto:'+student.email">{{student.email}}</a></div>
                        </div>
                    </div>

                    <div><img src="/new/img/students.png" class="img-students hidden-sm hidden-xs" alt=""></div>
                </div>

                <div class='wave'></div>
                <div class="sc-bottom">
                    <div class="phone">
                        <a :href="'tel:'+student.phone"><div class="circle"></div> <span class="phone-text"><i class="fa fa-phone"></i> {{student.phone}}</span></a>
                    </div>
                    <form class="sc-radio2 pull-right">
                        <input id="r3" type="radio" name="studentStatus" value="connected" v-model="stStatus" checked> <label for="r3"><div class="r-lab">{{ lang('resource.students.active') }}</div></label><br>
                        <input id="r4" type="radio" name="studentStatus" value="allumni" v-model="stStatus" > <label for="r4"><div class="r-lab">{{ lang('resource.students.alumni') }}</div></label><br>
                    </form>
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
                <tr v-for="student in filteredStudents">
                    <td>
                        <a class="" href="#">
                            <img class="img-circle" width="35" v-bind:src=student.info.avatar alt=""/>
                        </a>
                    </td>
                    <td style="text-transform: capitalize">{{student.name}}</td>
                    <td>{{student.phone}}</td>
                    <td>{{student.email}}</td>
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

    .sc-box{min-height: 160px; background: #fafafa; border: 1px solid #a5a5a5; border-top-left-radius: 8px; border-top-right-radius: 8px;  padding: 0 25px;  border-bottom: none; position: relative;}


    .sc-up{height: 70px; background: #008da5; margin: 0 -25px; border-top-left-radius: 7px; border-top-right-radius: 7px; }
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
    .sc-bottom{height: 50px; background: #cad8d3; margin: 0 0 20px 0; border-bottom-left-radius: 7px; border-bottom-right-radius: 7px; border: 1px solid #a5a5a5; border-top: none; padding: 15px;}
    .sc-radio2{margin:-14px 0; opacity: 0.8}
    .phone{margin: 0;}
    .phone>a,.phone>a:visited{color: #008da5;}
    .phone>a:hover, .email>a:hover{color: #FD6A33}

    .phone-text>i{color: #cad8d3; margin-right: 7px}
    .phone-text{position: absolute; bottom: 36px;}

    .img-students{height: 55px; width: auto; position: absolute; right: 20px; top: 85px; opacity: 0.07}

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

    @media (min-width: 1291px) {
        .img-cont{margin: -45px 0 0 0 ; }
        .name, .email{position: absolute; margin:0; left: 95px!important;}
        .email{margin: 0; top: 77px;}
        .name{color: #fff!important; top: 38px;}

    }



    @media (max-width: 1290px) {
        .img-cont, .name, .email{text-align: center;}
        .img-cont{margin: -50px auto; }
        .name{margin: 55px auto 0 auto;  color: #008da5; }
        .email{margin: 5px auto;}
        .sc-box{min-height: 200px;}

        .frame-cont{display: none;}
        .img-cont{display: block}

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

    @media  (max-width: 595px) {
        .col-xxs-12{width: 100%}


    }
    @media  (max-width: 534px) {

        .btn-view{width: 95%; margin: 0 auto 15px auto; float: none!important; display: block; text-align: center!important;}

    }

</style>


<!--  RADIO INPUT STYLE [same @ Scholarships-vue]-->
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
    .sc-radio>input[type=radio]:checked + label:before,.sc-radio2>input[type=radio]:checked + label:before{
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

    $( document ).ready(function() {
//        $(".sc-box").hover(
//                function () {
//                    $(".sc-img").removeClass("gray");
//                }
//        );
    });



    export default{
        data: function() {
            return{
                students: [],
                searchStr:"",
                selection:true,
                sortReverse:false,
                sortType:'name',
                status:'connected',
                stStatus:''
            }
        },
        computed: {
            filteredStudents: function () {
                var filtered_array = [];
                var st=this.students
                for(var i in st){
                    st[i].phone=st[i].cv.student_phone;
                    if(st[i].pivot.status==this.status){
                        filtered_array.push(st[i])
                    }
                }

                var searchString = this.searchStr;

                if(!searchString){
                    return filtered_array;
                }

                searchString = searchString.trim().toLowerCase();
                filtered_array = filtered_array.filter(function(item){
                        if( (item.name.indexOf(searchString) !== -1) ||
                                (item.nameL.toLowerCase().indexOf(searchString) !== -1) ||
                                (item.nameENG.toLowerCase().indexOf(searchString) !== -1) ||
                                (item.phone.indexOf(searchString) !== -1) ||
                                (item.email.toLowerCase().indexOf(searchString) !== -1)

                        ){ return item;   }
                })
                return filtered_array;
            },
        },

        methods: {
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
                var st1= this.students;
                st1.sort(this.dynamicSort(this.sortType,this.sortReverse));
                this.students=st1;
                return this.students
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

            getAllStudents: function(){
                axios.get('/api/connected/students')
                    .then(response => {
                        console.log(response.data)
                        this.students = response.data
                        var st1= this.students;
                        st1.sort(this.dynamicSort(this.sortType,this.sortReverse));
                        for (var i in st1){
                                st1[i].name=st1[i].name.toLowerCase()
                        }
                        var temp = JSON.stringify(st1)
                                .replace(/ά/g,"α")
                                .replace(/έ/g,"ε")
                                .replace(/ή/g,"η")
                                .replace(/ί/g,"ι")
                                .replace(/ό/g,"ο")
                                .replace(/ύ/g,"υ")
                        var st2= JSON.parse(temp);

                        var temp2 = JSON.stringify(st1)
                                .replace(/ά/g,"a")
                                .replace(/α/g,"a")
                                .replace(/έ/g,"e")
                                .replace(/ε/g,"e")
                                .replace(/ή/g,"h")
                                .replace(/η/g,"h")
                                .replace(/ί/g,"i")
                                .replace(/ι/g,"i")
                                .replace(/ό/g,"o")
                                .replace(/ο/g,"o")
                                .replace(/υ/g,"y")
                                .replace(/ύ/g,"y")
                                .replace(/ω/g,"v")
                                .replace(/ώ/g,"v")
                                .replace(/β/g,"b")
                                .replace(/γ/g,"g")
                                .replace(/δ/g,"d")
                                .replace(/ζ/g,"z")
                                .replace(/θ/g,"u")
                                .replace(/κ/g,"k")
                                .replace(/λ/g,"l")
                                .replace(/μ/g,"m")
                                .replace(/ν/g,"n")
                                .replace(/ξ/g,"j")
                                .replace(/π/g,"p")
                                .replace(/ρ/g,"r")
                                .replace(/σ/g,"s")
                                .replace(/ς/g,"s")
                                .replace(/τ/g,"t")
                                .replace(/φ/g,"f")
                                .replace(/χ/g,"x")
                                .replace(/ψ/g,"c")
                        var st3= JSON.parse(temp2);

                        for (var i in st1){
                            st1[i].nameL=st2[i].name
                            st1[i].nameENG=st3[i].name
                        }
                        this.students=st1
                    });
            },
            changeView: function () {
                this.selection=!this.selection;
            }
        },

        mounted() {
//            console.log('Students-Table component mounted!')
            this.getAllStudents()
        }
    }

</script>


