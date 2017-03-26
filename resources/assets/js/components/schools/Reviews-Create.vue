<template>
    <div class="row">
        <div class="row">
            <div class="category" v-for="category in categories">
                <span>{{ category.name }}</span>
                <span :id="category.id + '-1'" v-on:click="star(category.id, 1, $event)">☆</span>
                <span :id="category.id + '-2'" v-on:click="star(category.id, 2, $event)">☆</span>
                <span :id="category.id + '-3'" v-on:click="star(category.id, 3, $event)">☆</span>
                <span :id="category.id + '-4'" v-on:click="star(category.id, 4, $event)">☆</span>
                <span :id="category.id + '-5'" v-on:click="star(category.id, 5, $event)">☆</span>
            </div>
        </div>

        <div class="row">
                <label for="text">Text:</label>
                <textarea v-model='text'></textarea>
                <button v-on:click="save()">Αποθήκευση</button>
        </div>
      
    </div>
</template>

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
                        console.log(response.data)
                        if(response.data == 'OK'){
                            window.location = '/panel/users/review/show'
                        }else{
                            // ERROR HERE
                            console.log('ERROR' + response)
                        }
                    });
            }
        },

        mounted() {
            this.fetchCategories()
        }
    }
</script>