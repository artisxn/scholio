<template>
    <div class="row review-content">

            <div class="review-category" v-for="category in categories">
                <i :class="category.icon"></i>
                <span class="category-name">{{ category.name }}</span>
                <span class="review-stars">
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

    .review-content{padding-left: 10px; margin-top: 20px;}
    i {margin-right: 10px;}
    .review-category{color: #888; position: relative;}
    .review-stars{position: absolute; left: 300px;}
    .up{margin-top: 3px;}
    .text-com{margin: 30px 0 10px 0; letter-spacing:0.5px;}
    .review-area{width: 375px; border-radius: 5px; height: 100px; resize: none; border: 1px solid #008da5}
    .btn-save,.btn-save:focus,.btn-save:visited,.btn-save:active{margin: 15px auto 0 auto; border: none; background: #0090ab!important;  }
    .btn-save:hover{background: #007a94!important;  }
    .star:hover{cursor: pointer;}

    @media (max-width: 600px){
        .review-content{width: 390px; margin-left: auto; margin-right: auto; padding: 0 0 0 14px;}
    }

    @media (max-width: 415px){
        .review-content{width: 370px; padding: 0 0 0 3px;}
    }

    @media (max-width: 390px){
        .up{margin-bottom: 40px;}
        .review-stars{left: 27px; top: 23px; letter-spacing: 1px;}
        .review-content{width: 320px; padding: 0;}
        .review-area{width: 320px;}
        .review-area,.text-com,.btn-save{margin: 15px auto; text-align: center; display: block;}
        .text-com{margin-top: 60px;}
    }
    @media (max-width: 340px){

        .review-content{width: 295px; padding: 0;}
        .review-area{width: 290px; margin-left: -5px;}
    }

    .review-category{text-align: left!important; width: 400px; margin-left: auto; margin-right: auto; padding-left: 13px; }

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
                        window.location = '/panel/users/student/mySchools'
                    });
            }
        },

        mounted() {
            this.fetchCategories()
        }
    }
</script>