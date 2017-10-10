<template>
    <div class="row" >
        <div v-for="review in reviews">
            AVERAGE: - <stars :id="review.id" :stars="review.average" data="average"></stars>
            <div v-for="category in review.category">
                <i :class="category.category.icon"></i> {{ category.category.name }} - 
                <stars :id="category.id" :stars="category.stars" data="category"></stars>
            </div>
        </div>
    </div>
</template>

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