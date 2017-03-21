<template>
    <div class="row">
      <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
    </div>
</template>

<script>
    export default {

        data: function() {
            return{
                categories: {}
            }
        },

        methods: {
            fetchCategories: function(){
                axios.get('/connected/teachers')
                    .then(response => {
                        this.teachers = response.data
                        console.log(response.data)
                    });
            }
        },

        mounted() {
            console.log('Notifications-Table component mounted!')
        }
    }
</script>