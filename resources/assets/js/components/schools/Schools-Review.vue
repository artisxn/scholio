<template>
    <div class="row" >

        <div class="review-header-container">

            <div class=" ">
                <img src="/panel/assets/images/badge-review.png" alt="" class="badge-image">
                <div class="review-title ">
                    <div class="review-title-header">Συνολική Βαθμολογία</div>
                    <div class="review-title-stars-header"> <stars :id="123" :stars="4.2" data="average" :read="true"></stars></div>
                    <div class="review-title-avg-header">4.2</div>
                </div>
            </div>

            <div class="badge-left">
                <img src="/panel/assets/images/badge-review-Vert2.png" alt="" class="badge-image-left">

                <div class="category-container">

                    <div class="category-master"><i class="fa fa-book mar-right"></i>Πρόγραμμα Σπουδών  <span class="pull-right">4.2</span></div>
                    <div class="category-master"><i class="fa fa-cogs mar-right"></i>Οργάνωση  <span class="pull-right">4.3</span></div>
                    <div class="category-master"><i class="fa fa-user mar-right"></i>Ανθρώπινο Δυναμικό  <span class="pull-right">3.8</span></div>
                    <div class="category-master"><i class="fa fa-building mar-right"></i>Εγκαταστάσεις  <span class="pull-right">4.1</span></div>
                    <div class="category-master"><i class="fa fa-link mar-right"></i>Διασ. με αγορά εργ. <span class="pull-right">3.9</span></div>
                </div>


            </div>

        </div>



        <div class="reviews"></div>


        <div v-for="review in reviews" class="review-container ">

                <div class="review-card">
                    <div class="review-title">
                        <div class="review-title-text">Μέση Βαθμολογία</div>
                        <div class="review-title-stars"><stars :id="review.id" :stars="review.average" data="average"></stars></div>
                        <div class="review-title-avg">{{ review.average }}</div>

                    </div>

                    <div class="review-name">{{ review.user.name }}, {{ review.user.role }}, {{ review.created_at }}</div>

                    <div v-for="category in review.category" class="review-category">
                        <i :class="category.category.icon" class="category-icon"></i> {{ category.category.name }}
                        <stars :id="category.id" :stars="category.stars" data="category" :read="true" class="pull-right"></stars>
                    </div>

                    <div class="review-full-text">
                        {{ review.text }}
                    </div>
                </div>

        </div>
    </div>
</template>

<style>
    .badge-left{position: relative; width: 430px; margin-top: 80px;}
    .badge-image-left{width: 280px; margin-top: -100px;}
    .category-container{position: absolute; top: -30px; left: 40px; width: 200px}
    .category-master{color: #fff; font-family:Roboto; font-weight: 300; margin-bottom: 20px;}
    .mar-right{margin-right: 5px}

    .badge-image{ display: block; margin: 5px auto ; height: 280px;}
    .review-header-container{}
    /*.review-card-header{background-color: #fff; border-radius: 7px; border: 1px solid #FD6A33;  padding: 10px; margin-top:  20px; margin-bottom:  40px;}*/
    .review-title-header{font-size: 160%; font-weight: 300; color: #fff; margin-top: -165px; }
    .review-title-stars-header{font-size: 120%; color: #fff  }
    .review-title-avg-header{font-size: 140%; color: #fff;}



    .reviews{margin-top: 100px; clear: both;}
    .review-container{margin-top: 2px; margin-bottom: 2px; padding: 5px 5px; font-family:Roboto;}
    .review-card{background-color: #f5f5f5; border-radius: 7px; border: 1px solid #999;  padding: 10px;}
    .review-name{margin: 30px 0 15px 0;}
    .review-title{margin: 3px 0 15px 0; text-align: center}
    .review-title-text{font-size: 140%; font-weight: 300; color: #007991  }
    .review-title-stars{font-size: 120%; color: #0097af  }
    .review-title-avg{font-size: 130%; color: #007991;}

    .review-full-text{margin-top: 40px;}

    .category-icon{margin-right: 5px; color: #008da5}


    .review-category{margin: 5px auto;}


    .review-container{float: left}

    @media (min-width: 330px) {
        .review-container{width: 100%}
    }
    @media (min-width: 810px) and (max-width: 1329px){
        .review-container{width: 50%}
        .review-container:nth-child(2n) {clear: right;}
    }
    @media (min-width: 1330px) and (max-width: 1689px){
        .review-container{width: 33.3%}
        .review-container:nth-child(3n) {clear: left;}
    }
    @media (min-width: 1690px) and (max-width: 2049px) {
        .review-container{width: 25%}
        .review-container:nth-child(7n) {clear: left;}
    }
    @media (min-width: 2050px) {
        .review-container{width: 20%}
        /*.review-container:nth-child(5n) {clear: left;}*/
    }




</style>


<script>


    import Stars from './Stars.vue';

    export default {

        components:{Stars},

        data: function() {
            return{
                reviews: {}
            }
        },

        methods: {
            getReviews: function(){
                axios.get('/api/school/getReviews')
                    .then(response => {
                        this.reviews = response.data
                        console.log(this.reviews)
                    });
            }
        },

        mounted() {
            this.getReviews()
        }
    }
</script>