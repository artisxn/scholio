<template xmlns:v-bind="http://www.w3.org/1999/xhtml">
    <div class="row">
        <div class="col-xs-12 col-sm-6 com-md-4" v-for="teacher in teachers" v-show="teacher.role=='teacher'">
            <div class="card-box">
                <div class="row">
                    <div class="contact-card">
                        <a class="pull-left" href="#">
                            <img class="img-circle" width="80" height="80" v-bind:src=teacher.info.avatar alt=""/>
                            <!-- <img class="img-circle" width="80" height="80" :src="teacher.avatar"/> -->
                        </a>
                        <div class="member-info">
                            <h4 class="m-t-0 m-b-5 header-title"><b><a href="">{{teacher.name}}</a></b></h4>
                            <p class="text-muted">Καθηγητής</p>
                            <p class="text-dark">
                                <i class="md md-email"></i>
                                <small>{{teacher.email}}</small>
                            </p>
                        </div>
                        <ul class="social-links list-inline m-0">
                            <li>
                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href=""
                                   data-original-title="Facebook">
                                    <i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href=""
                                   data-original-title="Twitter">
                                <i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href=""
                                   data-original-title="LinkedIn">
                                <i class="fa fa-linkedin"></i></a>
                            </li>
                            <li><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href=""
                                   data-original-title="Skype">
                                <i class="fa fa-skype"></i></a>
                            </li>
                            <li><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href=""
                                   data-original-title="Message"><i class="fa fa-envelope-o"></i></a></li>
                        </ul>
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
                teachers: {}
            }
        },

        methods: {
            getAllTeachers: function(){
                axios.get('/connected/teachers')
                    .then(response => {
                        this.teachers = response.data
                    });
            }
        },

        mounted() {
            console.log('Teachers-Table component mounted!')
            this.getAllTeachers()
        }
    }

</script>
