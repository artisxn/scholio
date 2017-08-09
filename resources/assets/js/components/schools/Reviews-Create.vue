<template>
    <div class="row content">

            <div class="category" v-for="category in categories">
                <i :class="category.icon"></i>
                <span class="category-name">{{ category.name }}</span>
                <span class="stars">
                    <span class="star" :id="category.id + '-1'" v-on:click="star(category.id, 1, $event)">☆</span>
                    <span class="star" :id="category.id + '-2'" v-on:click="star(category.id, 2, $event)">☆</span>
                    <span class="star" :id="category.id + '-3'" v-on:click="star(category.id, 3, $event)">☆</span>
                    <span class="star" :id="category.id + '-4'" v-on:click="star(category.id, 4, $event)">☆</span>
                    <span class="star" :id="category.id + '-5'" v-on:click="star(category.id, 5, $event)">☆</span>
                </span>
                <div class="up"></div>

            </div>



        <div class="text-com">Γράψτε τα σχόλια σας για το εκπαιδευτικό ίδρυμα</div>
                <!--<label for="text">Text:</label>-->
                <textarea v-model='text' class="review-area"></textarea>
                <div class="clearfix"></div>
                <button v-on:click="save()" class="btn btn-primary btn-save">Αποθήκευση</button>

      
    </div>
</template>

<style>
    .content{padding-left: 10px; margin-top: 20px;}
    i {margin-right: 10px;}
    .category{color: #888; position: relative;}
    .category-name{}
    .stars{position: absolute; left: 272px;}
    .up{margin-top: 3px;}
    .text-com{margin: 30px 0 10px 0; letter-spacing:0.5px;}
    .review-area{width: 355px; border-radius: 5px; height: 100px; resize: none;}
    .btn-save{margin: 15px 0 0 120px;}

    @media (max-width: 620px){
        /*.content{text-align: center;}*/
    }

</style>

<script>
    export default {

        data: function() {
            return{
                categories: {},
                review: [],
                text: null
            }
        },

        methods: {
            fetchCategories: function(){
                axios.get('/api/categories/' + SchoolID)
                    .then(response => {
                        this.categories = response.data
                    });
            },

            star: function(category, stars, e){
                this.fillArray(category, stars)
                this.fillStars(category, stars)
            },

            fillArray: function(category, stars){
                var contain = false
                var keys = null
                this.review.forEach(function(key){
                    if(key.category == category){
                        keys = key
                    }
                })
                if(keys){
                    keys.category = category
                    keys.stars = stars
                }else{
                    this.review.push({category:category, stars:stars})
                }
            },

            fillStars: function(row, stars){
                for(var i = 1; i<= 5; i++){
                    document.getElementById( row + '-' + i).innerHTML = '☆';
                }
                for (var i = 1 ; i <= stars; i++) {
                    document.getElementById( row + '-' + i).innerHTML = '★';
                }

                return true;
            },

            save: function(){
                axios.post('/api/review/' + SchoolID + '/save', {
                        text: this.text,
                        review: this.review
                    })
                    .then(response => {
                        window.location = '/panel/users/review/show'
                        // if(response.data == 'OK'){
                        //     window.location = '/panel/users/review/show'
                        // }else{
                        //     // ERROR HERE
                        //     console.log('ERROR' + response)
                        // }
                    });
            }
        },

        mounted() {
            this.fetchCategories()
        }
    }
</script>