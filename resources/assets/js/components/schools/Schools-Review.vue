<template>
    <div class="row" >

        <div class="review-container review-header-container">
            <div class="col-md-8 col-md-offset-2 ">

                <img src="/panel/assets/images/badge-review.png" alt="" class="badge-image">
                <div class="review-title ">
                    <div class="review-title-header">Συνολική Βαθμολογία</div>
                    <div class="review-title-stars-header"> <stars :id="123" :stars="4.2" data="average"></stars></div>
                    <div class="review-title-avg-header">4.2</div>

                </div>
            </div>
        </div>



        <div class="reviews"></div>


        <div v-for="review in reviews" class="review-container  col-md-6 col-lg-4">

                <div class="review-card">
                    <div class="review-title">
                        <div class="review-title-text">Μέση Βαθμολογία</div>
                        <div class="review-title-stars"><stars :id="review.id" :stars="review.average" data="average"></stars></div>
                        <div class="review-title-avg">{{ review.average }}</div>

                    </div>

                    <div class="review-name">Δημήτριος Ι., Μαθητής, 12/07/2017</div>

                    <div v-for="category in review.category" class="review-category">
                        <i :class="category.category.icon"></i> {{ category.category.name }}
                        <stars :id="category.id" :stars="category.stars" data="category" class="pull-right"></stars>
                    </div>
                </div>

        </div>
    </div>
</template>

<style>
    .badge-image{ display: block; margin: 5px auto ; height: 280px;}
    .review-header-container{}
    /*.review-card-header{background-color: #fff; border-radius: 7px; border: 1px solid #FD6A33;  padding: 10px; margin-top:  20px; margin-bottom:  40px;}*/
    .review-title-header{font-size: 160%; font-weight: 300; color: #fff; margin-top: -170px; }
    .review-title-stars-header{font-size: 120%; color: #fff  }
    .review-title-avg-header{font-size: 140%; color: #fff;}



    .reviews{margin-top: 300px;}
    .review-container{margin-top: 2px; margin-bottom: 2px; padding: 5px 5px; font-family:Roboto;}
    .review-card{background-color: #f5f5f5; border-radius: 7px; border: 1px solid #999;  padding: 10px;}
    .review-name{margin: 30px 0 15px 0;}
    .review-title{margin: 3px 0 15px 0; text-align: center}
    .review-title-text{font-size: 140%; font-weight: 300; color: #007991  }
    .review-title-stars{font-size: 120%; color: #0097af  }
    .review-title-avg{font-size: 130%; color: #007991;}


    .review-category{margin: 5px auto;}
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