<template xmlns:v-bind="http://www.w3.org/1999/xhtml">
    <div class="row">
        <div class="col-xs-12 col-sm-6 com-md-4" v-for="mySchool in mySchools">
            <div class="card-box">
                <div class="row">
                    <div class="contact-card">
                        <a class="pull-left col-xs-3" href="#">
                            <img width="80" :src="'/images/schools/' + mySchool.logo" alt=""/>
                        </a>
                        <div class="member-info col-xs-9">
                            <h4 class="m-t-0 m-b-5 header-title"><b>
                            <a target="_blank" :href='"/public/profile/" + mySchool.id'>{{mySchool.admin.name}}</a>
                            </b></h4>
                            <!--<p class="text-muted">Καθηγητής</p>-->
                            <p class="text-dark">
                                <div class="col-xs-12">
                                    <i class="fa fa-map-marker"></i>
                                    <small class="pad-left-5">{{mySchool.address}}</small>
                                </div>
                                <div class="col-xs-12">
                                    <i class="fa fa-phone"></i>
                                    <small class="pad-left-3">{{mySchool.phone}}</small>
                                </div>
                                <div class="col-xs-12">
                                    <i class="fa fa-globe"></i>
                                    <small class="pad-left-3">{{mySchool.website}}</small>
                                </div>
                                <div class="col-xs-12">
                                    <i class="md md-email"></i>
                                    <small>{{mySchool.admin.email}}</small>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
                <div v-if="hasNOTReviewed(mySchool.id)">
                    <a :href="'/panel/users/review/create/' + mySchool.id" class="btn btn-primary">
                        ΑΞΙΟΛΟΓΗΣΕ ΤΟ ΣΧΟΛΕΙΟ
                    </a>
                </div>
                <div v-else>
                    ΕΧΕΤΕ ΗΔΗ ΑΞΙΟΛΟΓΗΣΕΙ ΑΥΤΟ ΤΟ ΣΧΟΛΕΙΟ
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

        methods: {
            getAllMySchools: function(){
                axios.get('/api/student/mySchools')
                    .then(response => {
                        this.mySchools = response.data;
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
            console.log('mySchools-Table component mounted!')
            this.fetchReviews()
            this.getAllMySchools()
        }


    }

</script>
