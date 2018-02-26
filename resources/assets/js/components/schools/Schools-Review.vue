<template>
    <div class="row schoolReviews">

        <div class="review-header-container">
            <div class="z-up">
                <img src="/panel/assets/images/badge-review-shadow.png" alt="" class="badge-image">
                <div class="review-title ">


                    <svg  class="curved" id="myPath"  x="0px" y="0px" width="300px" height="300px" viewBox="0 0 300 300"
                         xml:space="preserve">

                    <path id="curvedPath" fill="none" stroke="transparent" stroke-miterlimit="10"
                    d="M5,189.375 c83.105-124.873,213.361-124.443,283.333,1.204"/>

                    <filter id = "i1" width = "120%" height = "140%">
                        <!--<feOffset result="offOut" in="SourceAlpha" dx="2" dy="2" />-->
                          <feColorMatrix result = "matrixOut" in = "offOut" type = "matrix" values = "0.36 0 0 0  0.02  0.44 0 0 0  0.06 0.40 0 0 0  0.16  0  0 0 1  0"/>
                          <feGaussianBlur result="blurOut" in="matrixOut" stdDeviation="10" />
                          <feBlend in="SourceGraphic" in2="blurOut" mode="normal" />
                    </filter>


                     <text  fill="#008da5" filter = "url(#i1)">
                         <textPath style="font-size: 170%;" startOffset="52%" text-anchor="middle" xlink:href="#curvedPath" v-if="role=='all' && status=='all'">{{ lang('["panel/schools"].reviews.rating') }}</textPath>
                         <textPath style="font-size: 170%;" startOffset="52%" text-anchor="middle" xlink:href="#curvedPath" v-if="role=='student' && status=='all'">{{ lang('["panel/schools"].reviews.studentsRating') }}</textPath>
                         <textPath style="font-size: 155%;" startOffset="52%" text-anchor="middle" xlink:href="#curvedPath" v-if="role=='student' && status=='connected'">{{ lang('["panel/schools"].reviews.connectedStudentsRating') }}</textPath>
                         <textPath style="font-size: 140%;" startOffset="52%" text-anchor="middle" xlink:href="#curvedPath" v-if="role=='student' && status=='allumni'">{{ lang('["panel/schools"].reviews.alumniStudentsRating') }}</textPath>
                         <textPath style="font-size: 170%;" startOffset="52%" text-anchor="middle" xlink:href="#curvedPath" v-if="role=='parent' && status=='all'">{{ lang('["panel/schools"].reviews.parentsRating') }}</textPath>
                         <textPath style="font-size: 155%;" startOffset="52%" text-anchor="middle" xlink:href="#curvedPath" v-if="role=='parent' && status=='connected'">{{ lang('["panel/schools"].reviews.connectedParentsRating') }}</textPath>
                         <textPath style="font-size: 155%;" startOffset="52%" text-anchor="middle" xlink:href="#curvedPath" v-if="role=='parent' && status=='allumni'">{{ lang('["panel/schools"].reviews.alumniParentsRating') }}</textPath>
                       </text>
                   </svg>

                    <div class="review-title-header"              v-if="role=='all'     && status=='all'">  {{ lang('["panel/schools"].reviews.rating') }}</div>
                    <div class="review-title-header"              v-if="role=='student' && status=='all'">  {{ lang('["panel/schools"].reviews.studentsRating') }}</div>
                    <div class="review-title-header smaller-font" v-if="role=='student' && status=='connected'">  {{ lang('["panel/schools"].reviews.connectedStudentsRating') }}</div>
                    <div class="review-title-header smaller-font" v-if="role=='student' && status=='allumni'">  {{ lang('["panel/schools"].reviews.alumniStudentsRating') }}</div>
                    <div class="review-title-header"              v-if="role=='parent'  && status=='all'">  {{ lang('["panel/schools"].reviews.parentsRating') }}</div>
                    <div class="review-title-header smaller-font" v-if="role=='parent'  && status=='connected'">  {{ lang('["panel/schools"].reviews.connectedParentsRating') }}</div>
                    <div class="review-title-header smaller-font" v-if="role=='parent'  && status=='allumni'">  {{ lang('["panel/schools"].reviews.alumniParentsRating') }}</div>



                    <div class="review-title-stars-header">
                        <span class="star-review" id="total1"></span>
                    </div>
                    <div class="review-title-avg-header">{{ totalStars }}</div>
                </div>
            </div>

            <div class="stats-container">
                <!--<img src="/panel/assets/images/badge-review-Vert2.png" alt="" class="badge-image-left">-->

                <div class="category-container-left">
                    <div class="category-master" v-for="category in totalReviews">
                        <i :class='category.icon + " category-icon"'></i>{{ lang('seeder.category.' + (category.icon) ) }} <span class="pull-right">{{category.stars}}</span>
                    </div>
                </div>

                <div class="category-container-right">
                    <div class="right-title text-center">{{allLength}}  {{ lang('["panel/schools"].reviews.reviews') }}</div>

                    <div class="right-subtitle"><i class="fa fa-graduation-cap category-icon"></i> {{ lang('["panel/schools"].reviews.students') }}:  <span class="pull-right">{{ allStudentsLength }} </span> </div>

                    <div class="students-details">
                        <div style="padding: 2px 0 5px 0">
                            {{ lang('["panel/schools"].reviews.connected') }}: <span class="pull-right">{{connectedStudentsLength}} </span>
                        </div>
                        <div class="">
                            {{ lang('["panel/schools"].reviews.alumni') }}: <span class="pull-right" >{{allumniStudentsLength}} </span>
                        </div>
                    </div>


                    <hr>


                    <div class="right-subtitle"><i class="fa fa-user category-icon mar-right"></i> {{ lang('["panel/schools"].reviews.parents') }}:  <span class="pull-right">{{ allParentsLength }} </span></div>

                    <div class="students-details">
                        <div style="padding: 2px 0 5px 0">
                            {{ lang('["panel/schools"].reviews.connected') }}: <span class="pull-right">{{connectedParentsLength}} </span>
                        </div>
                        <div class="">
                            {{ lang('["panel/schools"].reviews.olden') }}: <span class="pull-right" >{{allumniParentsLength}} </span>
                        </div>
                    </div>




                </div>

            </div>

        </div>


        <div class="filters-container btn-group">
            <div class="filter-text">
                <i class="fa fa-filter margin-right-10"></i>{{ lang('["panel/schools"].reviews.filters') }}
            </div>
            <div class="btn-container">
                <button class="btn btn-primary" :class="{btnActive: role=='all' && status=='all' && reviewsFilteredByRating == -1}" @click="showAllReviews">{{ lang('["panel/schools"].reviews.all') }}
                    <span v-if="role=='all' && status=='all' && reviewsFilteredByRating == -1" class="badge badge-number"> {{ allLength }} </span>
                </button>
            </div>
            <div class="btn-container">
                <button class="btn btn-primary" :class="{btnActive: role=='student' && status=='all'}"        @click="showAllStudents">{{ lang('["panel/schools"].reviews.students') }}
                <span v-if="role=='student' && status=='all'" class="badge badge-number"> {{ allStudentsLength }} </span>
                </button>
            </div>
            <div class="btn-container">
                <button class="btn btn-primary" :class="{btnActive: role=='student' && status=='connected'}"  @click="showActiveStudents"> {{ lang('["panel/schools"].reviews.ActiveStudents') }}
                    <span v-if="role=='student' && status=='connected'" class="badge badge-number"> {{connectedStudentsLength}} </span>
                </button>
            </div>
            <div class="btn-container">
                <button class="btn btn-primary" :class="{btnActive: role=='student' && status=='allumni'}"    @click="showAllumniStudents">{{ lang('["panel/schools"].reviews.AlumniStudents') }}
                    <span v-if="role=='student' && status=='allumni'" class="badge badge-number">  {{allumniStudentsLength}}</span>
                </button>
            </div>
            <div class="btn-container">
                <button class="btn btn-primary" :class="{btnActive: role=='parent' && status=='all'}"         @click="showAllParents">{{ lang('["panel/schools"].reviews.parents') }}
                    <span v-if="role=='parent' && status=='all'" class="badge badge-number"> {{allParentsLength}} </span>
                </button>
            </div>
            <div class="btn-container">
                <button class="btn btn-primary" :class="{btnActive: role=='parent' && status=='connected'}"   @click="showActiveParents">{{ lang('["panel/schools"].reviews.ActiveParents') }}
                    <span v-if="role=='parent' && status=='connected'" class="badge badge-number"> {{connectedParentsLength}} </span>
                </button>
            </div>
            <div class="btn-container">
                <button class="btn btn-primary" :class="{btnActive: role=='parent' && status=='allumni'}"     @click="showAllumniParents">{{ lang('["panel/schools"].reviews.AlumniParents') }}
                    <span v-if="role=='parent' && status=='allumni'" class="badge badge-number"> {{allumniParentsLength}} </span>
                </button>
            </div>

            <div class="clearfix" style="margin-bottom: 35px;"></div>


            <div v-for="(avgRating, index) in ratingStars" @click="filteredByRating(6-index)" class="stars-filter" :class="{activeFilterStars: 6-index==reviewsFilteredByRating}">
                <span :id="'avgRating'+index"></span>
                <span class="badge badge-filter-stars"  :class="{activeFilterBadge: 6-index==reviewsFilteredByRating}">{{ ratingStars[6-index] }}</span>
                <!--{{ lang('["panel/schools"].reviews.reviews') }}-->
            </div>


        </div>



        <div class="reviews"></div>


        <!--/* ========================================================================== */-->
        <!--/* ==================  Column based grid like masonry   ===================== */-->
        <!--/* ========================================================================== */-->
        <div class="masonry">
            <div v-for="review in reviews" class="item">
                    <div class="review-title">
                        <div class="review-title-text">{{ lang('["panel/schools"].reviews.average') }}</div>
                        <div class="review-title-stars">
                            <stars :id="review.id" :stars="review.average" name="average" read="false"></stars>
                        </div>
                        <div class="review-title-avg">{{ review.average }}</div>
                    </div>

                    <div class="review-name">{{ review.user.name }}, {{ review.user.role }}, {{ review.created_at }}</div>

                    <div v-for="(category, index) in review.category" class="review-category">
                        <span class="left">
                            <i :class="category.category.icon" class="category-icon"></i>
                            {{ lang('seeder.category.' + (category.category.icon) ) }}
                        </span>
                        
                        <stars :id="review.user.id + 'stars' + index" :stars="category.stars" name="stars" :read="true" class="pull-right"></stars>
                    </div>

                    <div class="review-full-text">
                        {{ review.text }}
                    </div>
            </div>
        </div>

        <paginator :dataSet="dataSet" @changed="fetch"></paginator>
    </div>
</template>

<style>
    .curved{position: absolute; top: -90px; margin-right: auto; margin-left: auto; left: 0; right: 0; display: none;}
    /*.badge-left{position: relative; width: 430px; margin-top: 80px;}*/
    /*.badge-image-left{width: 280px; margin-top: -100px;}*/
    .category-container-left,.category-container-right{ width: 250px}
    .category-container-left{float: left; margin-top: 15px;}
    .category-container-right{float: right;}
    .category-master{color: #888;font-weight: 300; margin-bottom: 18px;}


    .badge-image{ display: block; margin: 0 auto ; height: 360px; }
    .schoolReviews{font-family:Roboto;}
    .review-title{color: #fff}
    /*.review-card-header{background-color: #fff; border-radius: 7px; border: 1px solid #FD6A33;  padding: 10px; margin-top:  20px; margin-bottom:  40px;}*/
    .review-title-header{font-size: 160%; font-weight: 300; margin-top: -205px; }
    .review-title-stars-header{font-size: 120%;}
    .smaller-font{font-size: 112%; padding-top: 6px; margin-bottom: 4px;}
    .review-title-avg-header{font-size: 140%;}

    .stats-container{ border: 1.3px solid #007991; border-radius: 7px; background-color: #fafafa; padding: 20px 15px 0 15px; margin-top: -40px; height: 230px; }
    .stats-container{margin-left: auto; margin-right: auto; width: 100%; box-shadow: 0 0 15px #aaa;}

    .z-up{position: relative; z-index: 3;}
    .students-details{width: 120px; font-weight: 300; color: #aaa; font-size: 90%; padding: 0 0 0 35px; }
    .right-title{color: #888; font-size: 110%; font-weight: 300; margin-bottom: 10px;}
    .right-subtitle{color: #777; font-weight: 300;}


    .reviews{margin-top: 70px; clear: both;}
    .review-container{margin-top: 2px; margin-bottom: 2px; padding: 5px 5px; }
    .review-card{background-color: #f5f5f5; border-radius: 7px; border: 1px solid #999;  padding: 10px;}
    .review-name{margin: 30px 0 15px 0;}
    .review-title{margin: 3px 0 15px 0; text-align: center}
    .review-title-text{font-size: 140%; font-weight: 300; color: #007991  }
    .review-title-stars{font-size: 120%; color: #0097af }
    .review-title-avg{font-size: 130%; color: #007991;}

    .review-full-text{margin-top: 40px;}
    .category-icon{margin-right: 5px; color: #008da5; display: inline-block; width: 15px;}
    /*.mar-right{margin-right: 12px}*/
    .review-category{margin: 5px auto;}



    .filters-container{margin: 20px 0 40px 0;}
    .btn-primary,.btn-primary:focus{background-color: #008da5; outline:none !important; border: none;  opacity: 0.5}
    .btn-primary:hover{background-color: #006880;   opacity: 0.8}
    .btn-container{float: left; margin: 15px 12px 3px 0;}
    .margin-right-10{margin-right: 10px}
    .filter-text{font-family: Roboto; font-size: 120%; font-weight: 400; margin-top: 30px; color: #0097af}
    .btnActive{background-color: #b95140 !important;  opacity: 1!important;}

    .badge-number{margin-right: -20px; margin-left: 3px; margin-top: -22px;}


    .stars-filter{cursor: pointer; color: #008da5; opacity: 0.4}
    .badge-filter-stars{ margin-left: 10px; background-color: #008da5;}

    .activeFilterStars{color: #b95140!important; font-weight: 600; opacity: 1!important;}
    .activeFilterBadge{background-color: #b95140!important; opacity: 1!important;}

    .stars-filter:hover{cursor: pointer!important; color: #0097af; opacity: 1!important;}
    .badge-filter-stars:hover{cursor: pointer!important; background-color: #0097af!important; opacity: 1!important;}




    @media (min-width: 1061px) {
        .stats-container{ width: 98%;}
    }
    @media (min-width: 1400px) {
        .stats-container{ width: 85%;}
    }
    @media (min-width: 1580px) {
        .stats-container{ width: 65%;}
    }
    @media (min-width: 1680px) {
        .stats-container{ width: 60%;}
    }
    @media (min-width: 1800px) {
        .stats-container{ width: 60%;}
    }
    @media (min-width: 2000px) {
        .stats-container{ width: 50%;}
    }





    @media (max-width: 1060px) {
        .stats-container{ width: 70%; height: 570px; }
        .category-container-left,.category-container-right{float: none;margin-left: auto; margin-right: auto; }
        .category-container-left{ margin-top: 100px;}
        .category-container-right{ margin-top: 60px;}
    }
    @media (max-width: 860px) {
        .stats-container{ width: 75%;  }
    }

    @media (max-width: 830px) {
        .filters-container{margin: 0 20px 0 50px;}

    }
    @media (max-width: 560px) {
        .filters-container{margin: 0 20px;}

        .stats-container{ width: 100%;  margin-top: 20px; height: 550px;}
        .badge-image{height: 300px; }
        .review-title-header{display: none;}
        .curved{display: block}
        .review-title-stars-header{margin-top: -165px;}
        .category-container-left{ margin-top: 50px;}
        .reviews{margin-top:30px;}
    }
    @media (max-width: 370px) {
        .filters-container{margin: 0 10px;}
        .left{display: inline-block; width: 173px}
        .badge-image{height: 250px; }
        .review-title-stars-header{margin-top: -140px;}
    }




</style>


<script>




    import Stars from './Stars.vue';

    export default {

        components:{Stars},

        data: function() {
            return{
                reviews: {},
                totalReviews:{},
                totalStars: null,
                stars: {},
                items: [],
                dataSet: false,
                status: 'all',
                role: 'all',
                allLength: 0,
                connectedStudentsLength: 0,
                allumniStudentsLength: 0,
                connectedParentsLength: 0,
                allumniParentsLength: 0,
                allStudentsLength: 0,
                allParentsLength:0,
                allumniStudents: 0,
                connectedStudents: 0,
                selected:'all',
                ratingStars: [],
                reviewsFilteredByRating: -1
            }
        },

        methods: {
            url(page) {
                if (! page) {
                    let query = location.search.match(/page=(\d+)/);
                    page = query ? query[1] : 1;
                }
                console.log('axios = ' + this.role + ' - ' + this.status)
                return `/api/school/getReviews/${this.role}/${this.status}/${this.reviewsFilteredByRating}/?page=${page}`;
            }, 

            fetch(page) {
                axios.get(this.url(page)).then(this.refresh);
            },

            refresh({data}) {
                this.dataSet = data
                this.items = data.data
                this.reviews = this.items
                console.log(this.items)
                window.scrollTo(0, 0);
                // vm.$forceUpdate();
            },

            getAvg(){
                axios.get(`/api/school/getAvgReviews/${this.role}/${this.status}`).then(this.setAvg)
            }, 

            setAvg({data}){
                this.totalReviews = data.avgReviews
                this.totalStars = data.stars
                console.log(data)
            },

            showActiveStudents(){
                this.reviewsFilteredByRating = -1
                this.status = 'connected'
                this.role = 'student'
                this.getAvg()
                this.fetch(1)
            },
            showAllumniStudents(){
                this.reviewsFilteredByRating = -1
                this.status = 'allumni'
                this.role = 'student'
                this.getAvg()
                this.fetch(1)
            },
            showAllStudents(){
                this.reviewsFilteredByRating = -1
                this.status = 'all'
                this.role = 'student'
                this.getAvg()
                this.fetch(1)
            },
            showActiveParents(){
                this.reviewsFilteredByRating = -1
                this.status = 'connected'
                this.role = 'parent'
                this.getAvg()
                this.fetch(1)
            },
            showAllumniParents(){
                this.reviewsFilteredByRating = -1
                this.status = 'allumni'
                this.role = 'parent'
                this.getAvg()
                this.fetch(1)
            },
            showAllParents(){
                this.reviewsFilteredByRating = -1
                this.status = 'all'
                this.role = 'parent'
                this.getAvg()
                this.fetch(1)
            },

            showAllReviews(){
                this.reviewsFilteredByRating = -1
                this.status = 'all'
                this.role = 'all'
                this.getAvg()
                this.fetch(1)
            },

            filteredByRating(stars){
                this.status = 'all'
                this.role = 'all'
                this.reviewsFilteredByRating = stars
                this.getAvg()
                this.fetch()
                console.log(stars)
            }
        },

        watch:{
            dataSet(){
                this.connectedStudentsLength = this.dataSet.connectedStudents
                this.allumniStudentsLength = this.dataSet.allumniStudents
                this.connectedParentsLength = this.dataSet.connectedParents
                this.allumniParentsLength = this.dataSet.allumniParents
                this.allStudentsLength = this.connectedStudentsLength + this.allumniStudentsLength
                this.allParentsLength = this.connectedParentsLength + this.allumniParentsLength
                this.allLength = this.allStudentsLength + this.allParentsLength
                this.ratingStars = this.dataSet.ratingStars
            },
            totalStars(){
                $('#total1').raty({
                    score    :this.totalStars,
                    halfShow :true,
                    half     :true,
                    readOnly :true,
                    starHalf : 'fa fa-fw fa-star-half'
                });
            }
        },

        created() {
            console.log('created')
            this.getAvg()
            this.fetch()
        }, 

        updated(){
            for(var i = 5; i>=1; i--){
                    $('#avgRating' + (6 - i)).raty({
                        score    :i,
                        halfShow :true,
                        half     :true,
                        readOnly :true,
                        starHalf : 'fa fa-fw fa-star-half'
                    });
                }
        },

        mounted(){
            for(var i = 5; i>=1; i--){
                $('#avgRating' + (6 - i)).raty({
                    score    :i,
                    halfShow :true,
                    half     :true,
                    readOnly :true,
                    starHalf : 'fa fa-fw fa-star-half'
                });
            }
        }
    }
</script>