<style>
    .card-box{min-height:185px; border: 1px solid #aaa; box-shadow: 3px 3px 12px 1px #bbb;}
    .member-info{margin: -2px 20px;}
    .cont-img{margin: 10px 0;}
    .cont-btn{position: absolute; bottom: 5px; right: 25px; }
    .cont-text{position: absolute; bottom: 35px; right: 25px; }
    .cont-text>a{color: #008da5}
    .admin-name{color: #008da5; font-size: 120%}
    .cont-text>a:hover,.admin-name:hover{color: #FD6A33}
    .sc-btn{padding: 6px; margin-bottom: 30px;}
    .img-logo{height: 75px;}
    .btn-primary{background-color: #008da5;}
    .btn-primary:hover{background-color: #00758c;}


    @media  (min-width:660px) and (max-width:920px) {
        .img-logo{height: 60px;}
        .med-hide{display: none}
    }
    @media  (min-width:1485px) {
        .col-xl-4{width: 33.33%}
    }
    @media  (min-width:1910px) {
        .col-xxl-3{width: 25%}
    }
    @media  (min-width:2500px) {
        .col-xxxl-2{width: 20%}
    }
    @media  (min-width:660px) and (max-width:767px)  {
        .col-xsm-6{width: 50%}
    }
</style>


<template xmlns:v-bind="http://www.w3.org/1999/xhtml">
    <div>
        <div class="infoContainer infoPad">
            <div class="scholar-limit"> <i class="fa fa-pencil m-r-10"></i>
                {{lang('["panel/students"].panel.schools.connect')}} {{ schoolsLength }}  {{lang('["panel/students"].panel.schools.until')}}
            </div>

            <img class="trophy" src="/new/img/univ.png" alt="">
        </div>

        <div class="row ">
            <div class="col-xs-12 col-xsm-6 col-sm-6 col-xl-4 col-xxl-3 col-xxxl-2"  v-for="mySchool in mySchools">
                <div class="card-box">
                    <div class="row">
                        <div class="contact-card" style="">

                            <a target="_blank" :href='"/public/profile/" + mySchool.id'>
                                <div class="admin-name">
                                    {{mySchool.admin.name}}
                                </div>


                                <div class="pull-left  cont-img">
                                    <img class="img-logo" :src="mySchool.logo" alt=""/>
                                </div>
                            </a>

                            <div class="member-info pull-left ">
                                <!--<p class="text-muted">Καθηγητής</p>-->
                                <p class="text-dark">
                                <div class="med-hide">
                                    <i class="fa fa-map-marker"></i>
                                    <small class="pad-left-5">{{mySchool.address}}</small>
                                </div>
                                <div class="">
                                    <i class="fa fa-phone"></i>
                                    <small class="pad-left-3">{{mySchool.phone}}</small>
                                </div>
                                <div class="">
                                    <i class="fa fa-globe"></i>
                                    <small class="pad-left-3">{{mySchool.website}}</small>
                                </div>
                                <div class="">
                                    <i class="fa fa-envelope"></i>
                                    <small>{{mySchool.admin.email}}</small>
                                </div>
                                </p>
                            </div>


                        </div>
                    </div>
                    <div class="pull-right" v-if="mySchool.admin.subscription.plan_id == 2">
                        <div v-if="hasNOTReviewed(mySchool.id)" class="cont-btn" >
                            <a :href="'/panel/users/student/review/create/' + mySchool.id" class="btn btn-primary sc-btn">
                                {{ lang('["panel/students"].panel.review.leave') }}
                            </a>
                        </div>
                        <div v-else class="cont-text">
                            <a href="/panel/users/student/review/show">
                                {{ lang('["panel/students"].panel.review.left') }}

                            </a>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>



</template>
<script>
    export default{
        data: function() {
            return{
                mySchools: {},
                reviews: {}
            }
        },

        computed:{
            schoolsLength(){
                return this.mySchools.length
            }
        },

        methods: {
            getAllMySchools: function(){
                axios.get('/api/student/mySchools')
                    .then(response => {
                        this.mySchools = response.data;
                        console.log(response.data)
                    });
            },

            fetchReviews: function(){
                axios.get('/api/user/reviews')
                    .then(response => {
                        this.reviews = response.data
                    });
            },

            hasNOTReviewed: function(id){
                var result = true
                this.reviews.forEach(function(key){
                    if(key.school_id === id){
                        result = false
                    }
                })
                return result
            }
        },

        mounted() {
            this.fetchReviews()
            this.getAllMySchools()
        }


    }

</script>
