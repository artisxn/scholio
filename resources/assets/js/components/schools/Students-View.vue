<template>
    <div class="row">
        <div class="input-group pull-left " style="width: 210px; margin: 10px 0 10px 10px;; border: 1px solid #d1d1d1; border-radius: 5px;" >
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Αναζήτηση"
                   v-model="searchStr">
        </div>
        <button class="btn btn-info pull-right" v-on:click="changeView" style="margin: 11px 10px 10px 0; height: 38px;">Αλλαγή Προβολής</button>
        <div class="clearfix"></div>
        <div v-if="selection==true">
            <div class="col-xs-12 col-sm-6 col-xl-4 col-xxl-3" v-for="student in filteredStudies" v-if="(student.role=='student'|| student.role=='teacher')">
                <div class="card-box">
                    <div class="row">
                        <div class="contact-card">
                            <a class="pull-left" href="#">
                                <img class="img-circle" width="80" height="80" v-bind:src=student.info.avatar alt=""/>
                            </a>
                            <div class="member-info">
                                <h4 class="m-t-0 m-b-5 header-title"><b style="text-transform: capitalize"> {{ student.name }} -- {{ student.pivot.status }}</b></h4>
                                <p class="text-muted">Φοιτητής</p>
                                <p class="text-dark">
                                    <i class="md md-email"></i>
                                    <small>{{ student.email }} - - {{ student.cv.student_phone }}</small>
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

        <div class="clearfix"></div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover"
                   style="background-color: #fff;" v-if="selection==false">
                <thead>
                <tr>
                    <th style="width: 30px">

                    </th>
                    <th> <a href="#" v-on:click="nameChangeSort">
                        Ονοματεπώνυμο
                        <span v-if="sortType == 'name' && !sortReverse" class="fa fa-sort-amount-asc"></span>
                        <span v-if="sortType == 'name' && sortReverse" class="fa fa-sort-amount-desc"></span></a>
                    </th>
                    <th> <a href="#" v-on:click="emailChangeSort">
                        e-mail
                        <span v-if="sortType == 'email' && !sortReverse" class="fa fa-sort-amount-asc"></span>
                        <span v-if="sortType == 'email' && sortReverse" class="fa fa-sort-amount-desc"></span></a>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="student in filteredStudies"
                    v-if="student.role=='student' || student.role=='teacher' "
                    >
                    <td>
                        <i class="fa fa-user" style="font-size: 140%" aria-hidden="true"></i>
                    </td>
                    <td style="text-transform: capitalize">{{student.name}} -- {{ student.pivot.status }}</td>
                    <td>{{student.email}} - - {{ student.cv.student_phone }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<style>
    @media (min-width: 1360px) {
        .col-xl-4 {  width: 33.33%;  }
    }

    @media (min-width: 1840px) {
        .col-xxl-3 {  width: 25%;  }

    }
    @media (min-width: 2280px) {
        .pull-right{ margin-right: 50px!important;}
    }
</style>

<script>
    export default{
        data: function() {
            return{
                students: [],
                searchStr:"",
                selection:true,
                sortReverse:false,
                sortType:'name'
            }
        },
        computed: {
            filteredStudies: function () {
                var filtered_array1 = this.students,
                        searchString = this.searchStr;

                if(!searchString){
                    return filtered_array1;
                }

                searchString = searchString.trim().toLowerCase();
                filtered_array1 = filtered_array1.filter(function(item){
                        if( (item.name.toLowerCase().indexOf(searchString) !== -1) ||
                                (item.nameL.toLowerCase().indexOf(searchString) !== -1) ||
                                (item.nameENG.toLowerCase().indexOf(searchString) !== -1)

                        ){return item;}
                })
                return filtered_array1;
            },
        },

        methods: {
            nameChangeSort: function(){
                this.sortType = 'name';
                this.changeSortType(this.sortType)
            },
            emailChangeSort: function(){
                this.sortType = 'email';
                this.changeSortType(this.sortType)
            },

            changeSortType: function(){
                this.sortReverse=!this.sortReverse
                var st1= this.students;
                st1.sort(this.dynamicSort(this.sortType,this.sortReverse));
                this.students=st1;
                return this.students
            },
            dynamicSort: function (property,order) {
                    var sortOrder = 1;
                    if (order) {sortOrder = -1}

                    if(property[0] === "-") {
                        sortOrder = -1;
                        property = property.substr(1);
                    }
                    return function (a,b) {
                        var result = (a[property] < b[property]) ? -1 : (a[property] > b[property]) ? 1 : 0;
                        return result * sortOrder;
                    }
                },

            getAllStudents: function(){
                axios.get('/api/connected/students')
                    .then(response => {
                        console.log(response.data)
                        this.students = response.data
                        var st1= this.students;
                        st1.sort(this.dynamicSort(this.sortType,this.sortReverse));
                        for (var i in st1){
                                st1[i].name=st1[i].name.toLowerCase()
                        }
                        var temp = JSON.stringify(st1)
                                .replace(/ά/g,"α")
                                .replace(/έ/g,"ε")
                                .replace(/ή/g,"η")
                                .replace(/ί/g,"ι")
                                .replace(/ό/g,"ο")
                                .replace(/ύ/g,"υ")
                        var st2= JSON.parse(temp);

                        var temp2 = JSON.stringify(st1)
                                .replace(/ά/g,"a")
                                .replace(/α/g,"a")
                                .replace(/έ/g,"e")
                                .replace(/ε/g,"e")
                                .replace(/ή/g,"h")
                                .replace(/η/g,"h")
                                .replace(/ί/g,"i")
                                .replace(/ι/g,"i")
                                .replace(/ό/g,"o")
                                .replace(/ο/g,"o")
                                .replace(/υ/g,"y")
                                .replace(/ύ/g,"y")
                                .replace(/ω/g,"v")
                                .replace(/ώ/g,"v")
                                .replace(/β/g,"b")
                                .replace(/γ/g,"g")
                                .replace(/δ/g,"d")
                                .replace(/ζ/g,"z")
                                .replace(/θ/g,"u")
                                .replace(/κ/g,"k")
                                .replace(/λ/g,"l")
                                .replace(/μ/g,"m")
                                .replace(/ν/g,"n")
                                .replace(/ξ/g,"j")
                                .replace(/π/g,"p")
                                .replace(/ρ/g,"r")
                                .replace(/σ/g,"s")
                                .replace(/ς/g,"s")
                                .replace(/τ/g,"t")
                                .replace(/φ/g,"f")
                                .replace(/χ/g,"x")
                                .replace(/ψ/g,"c")
                        var st3= JSON.parse(temp2);

                        for (var i in st1){
                            st1[i].nameL=st2[i].name
                            st1[i].nameENG=st3[i].name
                        }
                        this.students=st1
                    });
            },
            changeView: function () {
                this.selection=!this.selection;
            }
        },

        mounted() {
            console.log('Students-Table component mounted!')
            this.getAllStudents()
        }
    }

</script>
