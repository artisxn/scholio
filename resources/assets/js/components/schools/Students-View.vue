

<template>
    <div class="row">

        <form class="sc-radio pull-left">
            <input id="r1" type="radio" name="status" value="connected" v-model="status" checked> <label for="r1"><div class="r-lab">Ενεργοί</div></label> <br>
            <input id="r2" type="radio" name="status" value="allumni" v-model="status" > <label for="r2"><div class="r-lab">Απόφοιτοι</div></label><br>
        </form>


        <div class="input-group pull-left input-search">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Αναζήτηση"
                   v-model="searchStr">
        </div>


        <button class="btn btn-info pull-right btn-view" v-on:click="changeView"> <!-- <i class="margin-right-10 fa fa-list"></i> --> Αλλαγή Προβολής</button>
        <div class="clearfix"></div>


        <div v-if="selection==true">
            <div class="col-xxs-12 col-xs-6 col-lg-4 col-xl-3 col-xxl-2" v-for="student in filteredStudents" v-if="(student.role=='student')">

                <div class="sc-box">
                    <div class="sc-up"></div>

                    <div class="row">
                        <div class="sc-card">
                            <a class="" href="#">
                                <div class="img-cont">
                                    <img class="img-circle sc-img" width="70" v-bind:src=student.info.avatar alt=""/>
                                </div>
                                <div class="name"> {{student.name}} </div>
                            </a>
                            <div class="email">{{student.email}}</div>
                        </div>
                    </div>
                </div>
                <div class="sc-bottom">
                    <div class="phone">
                        <p><i class="fa fa-phone"></i> {{student.phone}}</p>
                    </div>
                    <form class="sc-radio2 pull-right">
                        <input id="r3" type="radio" name="studentStatus" value="connected" v-model="stStatus" checked> <label for="r3"><div class="r-lab">Ενεργός</div></label><br>
                        <input id="r4" type="radio" name="studentStatus" value="allumni" v-model="stStatus" > <label for="r4"><div class="r-lab">Απόφοιτος</div></label><br>
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
                        Ονοματεπώνυμο
                        <span v-if="sortType == 'name' && !sortReverse" class="fa fa-sort-amount-asc"></span>
                        <span v-if="sortType == 'name' && sortReverse" class="fa fa-sort-amount-desc"></span></a>
                    </th>
                    <th> <a href="#" v-on:click="phoneChangeSort">
                        Τηλέφωνο
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

    .sc-box{min-height: 160px; background: #fafafa; border: 1px solid #cfcfcf; border-top-left-radius: 8px; border-top-right-radius: 8px;  padding: 0 25px;  border-bottom: none;}
    .sc-up{height: 70px; background: #008da5; margin: 0 -25px; border-top-left-radius: 7px; border-top-right-radius: 7px; }
    .sc-img{box-shadow: 0 0 10px 2px #d1d1d1}


    .name{text-transform: capitalize; font-size: 140%; font-weight: 400;}
    .email{font-size: 90%; color: #888; font-weight: 300;}
    /*.name{text-transform: capitalize; font-size: 140%; color: #fff; font-weight: 400; margin: -50px 0 0 90px;}*/
    /*.email{font-size: 90%; color: #888; font-weight: 300; margin: 5px 0 0 90px;}*/
    /*.phone{margin: 20px 0 0 90px;}*/


    /*.sc-bottom{height: 40px; background: #cad8d3; margin: 0 -25px; border-bottom-left-radius: 7px; border-bottom-right-radius: 7px;}*/
    .sc-bottom{height: 50px; background: #cad8d3; margin: 0 0 20px 0; border-bottom-left-radius: 7px; border-bottom-right-radius: 7px; border: 1px solid #cfcfcf; border-top: none; padding: 15px;}
    .sc-radio2{margin:-44px 0; opacity: 0.8}
    .phone{margin: 0;}


    @media (min-width: 1360px) {
        .img-cont{margin: -45px 0 0 0 ; }
        .name{color: #fff; margin: 0; position: absolute; top: 45px; left: 115px;}
        .email{margin: 0; position: absolute; top: 77px; left: 115px;}

    }

    @media (max-width: 1359px) {
        .img-cont, .name, .email{text-align: center;}
        .img-cont{margin: -50px auto; }
        .name{margin: 55px auto 0 auto;  color: #008da5; }
        .email{margin: 5px auto;}
        .sc-box{min-height: 200px;}

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


</style>


<!--  RADIO INPUT STYLE -->
<style>
    input[type=radio]{
        visibility: hidden;
        position: absolute;
    }
    input[type=radio] + label{
        cursor:pointer;
    }
    input[type=radio] + label:before{
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
    input[type=radio]:checked + label:before{
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
<script>
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
