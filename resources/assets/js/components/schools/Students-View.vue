<template>
    <div class="row">

        <div v-if="dataSet">

        <form class="sc-radio pull-left">
            <input id="r1" type="radio" name="status" value="connected" v-model="status" @click.prevent="fetch(1, 'connected')"> <label for="r1"><div class="r-lab" style="width: 100px;">{{ lang('resource.students.active-many') }}
                <span class="pull-right" style="">{{ connectedStudents }}</span>
                </div>
            </label> <br>
            <input id="r2" type="radio" name="status" value="allumni" v-model="status" @click.prevent="fetch(1, 'allumni')">
            <label for="r2">
                <div class="r-lab" style="width: 100px;">{{ lang('resource.students.alumni-many') }}
                    <span class="pull-right" style="">{{ allumniStudents }}</span>
                 </div>
            </label>
            <br>
        </form>


        <div class="input-group pull-left input-search">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" :placeholder="lang('resource.students.search')"
                   v-model="searchStr" v-on:keyup="fetch(1)">
            <span class="input-group-addon addon2">
                        <span class="search-counter" >{{ studentCounter }} <i class="fa fa-graduation-cap"></i></span>
            </span>
        </div>

        <span class="tool">
             <div class="addStudent"><i class="fa fa-user-plus" data-toggle="modal" data-target="#ModalAddStudent"></i></div>
             <span class="tooltiptext  tooltiptext2 ">
                  {{ lang('resource.students.modal.addStudent') }}
             </span>
        </span>


        <!--<div class="search-counter" v-else>{{ studentCounter }} Σπουδαστές</div>-->
        <button class="btn btn-info pull-right btn-view" v-on:click="changeView()"> <!-- <i class="margin-right-10 fa fa-list"></i> --> {{ lang('resource.students.changeView') }}</button>
        <div class="clearfix"></div>


        <div v-if="selection==true">

            <div class="col-xxs-12 col-xs-6 col-lg-4 col-xl-3 col-xxl-2 cards-container" v-for="(student, index) in filteredStudents">

                <div class="double-card"  :id="'card'+index"  >
                    <div class="front">
                        <div class="sc-box" :class="[{'fakeFilter': student.role=='fake' ,'alumniFilter': status=='allumni', }]">
                            <div class="sc-up"></div>

                            <div class="row">
                                <div class="sc-card">

                                        <div class="frame-cont">
                                            <img src="/new/img/photoFrame.png" class="frame" alt="">
                                            <img :src="scholio + student.avatar" class="avatar2" alt="">
                                            <img src="/new/img/clip2.png" class="clip" alt="">
                                        </div>
                                        <div class="img-cont"><img class="img-circle sc-img" width="70" :src="scholio + student.avatar" alt=""/></div>
                                        <div class="name"> {{student.name}} </div>

                                    
                                    <div class="email"><a :href="'mailto:'+student.email">{{student.email}}</a></div>
                                </div>
                            </div>
                            <div><img src="/new/img/students.png" class="img-students hidden-sm hidden-xs" alt=""></div>

                        </div>
                        <div class="sc-bottom" >
                            <div class="phone">
                                <a :href="'tel:'+student.student_phone"><div class="circle"></div> <span class="phone-text"><i class="fa fa-phone"></i> {{ student.student_phone }}</span></a>
                            </div>
                            <form class="sc-radio2 pull-right" v-on:change="changeStatus(student.id)">
                                <input v-model="status" :id="'st' + student.id" type="radio" :name="'studentStatus' + student.id" value="connected">

                                <label :for="'st' + student.id"><div class="r-lab">{{ lang('resource.students.active') }}</div>
                                </label>
                                <br>
                                <input v-model="status" :id="'stt' + student.id" type="radio" :name="'studentStatus' + student.id" value="allumni">

                                <label :for="'stt' + student.id">
                                    <div class="r-lab r-lab2">{{ lang('resource.students.alumni') }}</div>
                                </label>
                                <!--<br>-->
                            </form>
                        </div>

                        <i class="fa fa-refresh flip-icon" aria-hidden="true" @click="flip(index)" ></i>
                        <i class="fa fa-file-text-o flip-info" aria-hidden="true"  data-toggle="modal" data-target="#ModalStudentInfo" @click="changeInfo(student)" v-if="studies"></i>

                    </div>


                    <div class="back">
                        <i class="fa fa-refresh flip-icon" aria-hidden="true" @click="flip(index)"></i>

                        <div style="position: absolute; top: 25px">
                            <span style="color:#eee; margin-left: 10px;">
                                <p style=" text-indent: 0px; padding-left: 10px; line-height: 1;">{{ student.type }}</p>

                                    <span style="color:#eee; margin-left: 10px;">
                                        {{ student.level }}
                                    </span>
                                <br>
                                <br>
                                <div style="height: 1px; width: 96%; background: #aaa;margin-left: 3%; margin-bottom: 30px; clear: both"></div>
                                <br>
                            </span>

                            <span style="color:#eee; margin-left: 10px;" v-if="sxoles">
                                {{ student.type2 }}
                                <br>
                                <span style="color:#eee; margin-left: 10px;">
                                    {{ student.level2 }}
                                </span>
                                <br>
                                <br>
                                <div style="height: 1px; width: 96%; background: #aaa;margin-left: 3%; margin-bottom: 30px; clear: both"></div>
                                <br>
                            </span>

                            <div class="fath" style="float: left; font-size: 90%">{{ lang('resource.students.father') }}
                                <br>
                                {{student.father_fullname}}
                                <br>
                                {{student.father_phone}}
                            </div>

                            <div class="fath" style="position: absolute; right: -200px; font-size: 90%">{{ lang('resource.students.mother') }}
                                <br>
                                {{student.mother_fullname}}
                                <br>
                                {{student.mother_phone}}
                            </div>

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
                        {{ lang('resource.students.name') }}
                        <span v-if="sortType == 'name' && !sortReverse" class="fa fa-sort-amount-asc"></span>
                        <span v-if="sortType == 'name' && sortReverse" class="fa fa-sort-amount-desc"></span></a>
                    </th>
                    <th>
                        {{ lang('resource.students.phone') }}
                    </th>
                    <th> <a href="#" v-on:click="emailChangeSort">
                        e-mail
                        <span v-if="sortType == 'email' && !sortReverse" class="fa fa-sort-amount-asc"></span>
                        <span v-if="sortType == 'email' && sortReverse" class="fa fa-sort-amount-desc"></span></a>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="student in filteredStudents">
                    <td>
                        <a class="" href="#">
                            <img class="img-circle" width="35" v-bind:src=student.avatar alt=""/>
                        </a>
                    </td>
                    <td style="text-transform: capitalize">{{ student.name }}</td>
                    <td>{{ student.student_phone }}</td>
                    <td>{{ student.email }}</td>
                </tr>
                </tbody>
            </table>
        </div>


        <!--=============  ModalStudentInfo   ================ -->
        <!--================================================== -->
        <div id="ModalStudentInfo" class="modal" role="dialog">
            <div class="modal-dialog zoomIn animated" id="modalzoom" >
                <!-- Modal content-->
                <div class="modal-content" v-if="info">
                    <div class="modal-up">
                        <button type="button" class="close" data-dismiss="modal" style=" color: #fff;">&times;</button>
                        <!--<h4 class="modal-title" style=" color: #fff"> </h4>-->
                        <img :src="info.avatar" alt="" class="img-avatar">
                        <!--<div class="lastName">{{ info.lname }} </div>-->

                        <input type="text" class="demo-form ad-input cardName " name="student_lname" :value="info.lname " @change="saveCard($event, info)">


                        <!--<div class="firstName">{{ info.fname }} </div>-->
                        <input type="text" class="demo-form ad-input cardFname " name="student_fname" :value="info.fname " @change="saveCard($event, info)">
                    </div>
                    <div class="modal-infos">
                        <!--<p>{{ info.cv.student_address }}</p>-->

                        <div class="input-container modal-input-container">


                            <div class="studies-selection-container" >
                                <div class="first-study-text">
                                    {{ lang('resource.students.modal.study1') }}
                                        <span class="tool">
                                            <i class="fa fa-plus" @click="study2 = true" v-if="!secondStudy && selectedStudy && !study2"></i>
                                            <span class="tooltiptext">
                                                {{ lang('resource.students.modal.addStudy') }}
                                                </span>
                                        </span>

                                </div>
                                <div class="">
                                    <select class="select-transparent" v-model="selectedStudy" v-on:change="saveStudy(1)">
                                        <optgroup :label="level.level.name" v-for="level in studies">
                                            <option v-for="study in level.studies" :value="study.study.id" :disabled="secondStudy == study.study.id">
                                                {{ study.study.name }}
                                            </option>
                                        </optgroup>
                                    </select>
                                    <i class="fa fa-graduation-cap select-icon"></i>
                                    <div class="col-xl-line"></div>
                                </div>





                                <!-- Αν δεν είναι σχολειο, φροντιστηριο, ιεκ, κολλεγιο -->
                                <div v-if="" >
                                    <div class="second-study-text" v-if="selectedStudy">






                                        <span v-if="secondStudy">
                                            {{ lang('resource.students.modal.study2') }}
                                             <span class="second-study-remove"  @click="removeStudy">( <i class="fa fa-trash"></i>{{ lang('resource.students.modal.deleteStudy') }} )</span>
                                        </span>

                                    </div>


                                    <div class="second" v-if="selectedStudy && (study2 || secondStudy)">
                                            <select class="select-transparent  select2" v-model="secondStudy" v-on:change="saveStudy(2)">
                                                <optgroup :label="level.level.name" v-for="level in studies">
                                                    <option v-for="study in level.studies" :value="study.study.id" :disabled="selectedStudy == study.study.id">
                                                        {{ study.study.name }}
                                                    </option>
                                                </optgroup>
                                            </select>
                                            <i class="fa fa-graduation-cap select-icon2"></i>
                                            <div class="col-xl-line col-xl-line2"></div>

                                    </div>

                                </div>


                                <div class="matching" v-if="availableCards && info.role == 'student'">
                                    <div class="info-title">
                                        {{lang('resource.students.modal.matching') }}
                                    </div>

                                    <select v-model="selectedCard" class="select-matching "  @change="updateCards">
                                        <option value="0" selected>{{lang('resource.requests.table.noMatching')}}</option>
                                        <optgroup :label="lang('resource.requests.table.suggestion')" v-if="availableCards.exact">
                                            <option v-if="availableCards.exact.id" :value="availableCards.exact.id">{{ availableCards.exact.name }}</option>
                                        </optgroup>
                                        <optgroup :label="lang('resource.requests.table.noMatchingYet')">
                                            <option v-for="card in availableCards" v-if="card && card.id != exact_id" :value="card.id">{{ card.name }}</option>
                                        </optgroup>
                                    </select>
                                    <i class="fa fa-id-card select-icon"></i>
                                        <div class="col-xl-line"></div>

                                </div>
                            </div>


                            <div class="info-container row">



                                <div class="col-sm-6 col-data">
                                    <div class="info-title">
                                        {{lang('student_details.city') }}

                                    </div>
                                    <div class="input-container">
                                        <div class="fa fa-home icon-data"></div>
                                        <input type="text" class="demo-form ad-input card-input" name="student_city" :value="info.student_city" @change="saveCard($event, info)">

                                    </div>
                                    <div class="line"></div>
                                </div>
                                <div class="col-sm-6 col-data">
                                    <div class="info-title">
                                        {{lang('student_details.address') }}
                                    </div>
                                    <div class="info-data input-container">
                                        <div class="fa fa-map-marker icon-data"></div>
                                        <input type="text" name="student_address"  class="demo-form ad-input card-input"  :value="info.student_address" @change="saveCard($event, info)">
                                    </div>
                                    <div class="line"></div>
                                </div>

                                <div class="col-sm-6 col-data">
                                    <div class="info-title">
                                        {{lang('student_details.phone') }}

                                    </div>
                                    <div class="info-data">
                                        <div class="fa fa-phone icon-data"></div>
                                        <input type="text" name="student_phone" class="card-input"  :value="info.student_phone" @change="saveCard($event, info)">
                                    </div>
                                    <div class="line"></div>
                                </div>
                                <div class="col-sm-6 col-data">
                                    <div class="info-title">
                                        {{lang('student_details.email') }}

                                    </div>
                                    <div class="info-data">
                                        <div class="fa fa-envelope icon-data"></div>
                                        <input type="text" name="email" class="card-input" :value="info.email" @change="saveCard($event, info)">
                                    </div>
                                    <div class="line"></div>
                                </div>



                                <div class="col-sm-6 col-data">
                                    <div class="info-title">
                                        {{lang('student_details.father.fullName') }}
                                    </div>
                                    <div class="info-data">
                                        <div class="fa fa-user icon-data"></div>
                                    <input type="text" name="father_fullname" class="card-input" :value="info.father_fullname" @change="saveCard($event, info)">
                                    </div>
                                    <div class="line"></div>
                                </div>
                                <div class="col-sm-6 col-data">
                                    <div class="info-title">
                                        {{lang('student_details.mother.fullName') }}
                                    </div>
                                    <div class="info-data">
                                        <div class="fa fa-user icon-data"></div>
                                        <input type="text" name="mother_fullname" class="card-input" :value="info.mother_fullname" @change="saveCard($event, info)">
                                    </div>
                                    <div class="line"></div>
                                </div>


                                <div class="col-sm-6 col-data">
                                    <div class="info-title">
                                        {{lang('student_details.father.phone') }}
                                    </div>
                                    <div class="info-data">
                                        <div class="fa fa-phone icon-data"></div>
                                        <input type="text" name="father_phone" class="card-input" :value="info.father_phone" @change="saveCard($event, info)">
                                    </div>
                                    <div class="line"></div>
                                </div>
                                <div class="col-sm-6 col-data">
                                    <div class="info-title">
                                        {{lang('student_details.mother.phone') }}
                                    </div>
                                    <div class="info-data">
                                        <div class="fa fa-phone icon-data"></div>
                                        <input type="text" name="mother_phone" class="card-input" :value="info.mother_phone" @change="saveCard($event, info)">
                                    </div>
                                    <div class="line"></div>
                                </div>



                            </div>


                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-close" data-dismiss="modal" @click="modalClose">Close</button>
                    </div>
                </div>

            </div>
        </div>




            <!--=============  ModalAddStudent    ================ -->
            <!--================================================== -->
            <div id="ModalAddStudent" class="modal" role="dialog">
                <div class="modal-dialog zoomIn animated" id="" >
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-up">
                            <button type="button" class="close" data-dismiss="modal" style=" color: #fff;">&times;</button>

                            <img src="/images/student.png" alt="" class="img-avatar">

                            <input type="text" class="cardName " name="student_lname" placeholder="Επώνυμο"  @change="saveCard($event, info)">

                            <input type="text" class= "cardFname " name="student_fname" placeholder="Όνομα"   @change="saveCard($event, info)">
                        </div>
                        <div class="modal-infos">


                            <div class="input-container modal-input-container">


                                <div class="studies-selection-container" >
                                    <div class="first-study-text">
                                        {{ lang('resource.students.modal.study1') }}
                                        <span class="tool">
                                            <i class="fa fa-plus" @click="study2 = true" v-if="!secondStudy && selectedStudy && !study2"></i>
                                            <span class="tooltiptext">
                                                {{ lang('resource.students.modal.addStudy') }}
                                                </span>
                                        </span>

                                    </div>
                                    <div class="">
                                        <select class="select-transparent" v-model="selectedStudy" v-on:change="saveStudy(1)">
                                            <optgroup :label="level.level.name" v-for="level in studies">
                                                <option v-for="study in level.studies" :value="study.study.id" :disabled="secondStudy == study.study.id">
                                                    {{ study.study.name }}
                                                </option>
                                            </optgroup>
                                        </select>
                                        <i class="fa fa-graduation-cap select-icon"></i>
                                        <div class="col-xl-line"></div>
                                    </div>





                                    <!-- Αν δεν είναι σχολειο, φροντιστηριο, ιεκ, κολλεγιο -->
                                    <div v-if="" >
                                        <div class="second-study-text" v-if="selectedStudy">






                                        <span v-if="secondStudy">
                                            {{ lang('resource.students.modal.study2') }}
                                             <span class="second-study-remove"  @click="removeStudy">( <i class="fa fa-trash"></i>{{ lang('resource.students.modal.deleteStudy') }} )</span>
                                        </span>

                                        </div>


                                        <div class="second" v-if="selectedStudy && (study2 || secondStudy)">
                                            <select class="select-transparent  select2" v-model="secondStudy" v-on:change="saveStudy(2)">
                                                <optgroup :label="level.level.name" v-for="level in studies">
                                                    <option v-for="study in level.studies" :value="study.study.id" :disabled="selectedStudy == study.study.id">
                                                        {{ study.study.name }}
                                                    </option>
                                                </optgroup>
                                            </select>
                                            <i class="fa fa-graduation-cap select-icon2"></i>
                                            <div class="col-xl-line col-xl-line2"></div>

                                        </div>

                                    </div>


                                    <div class="matching" v-if="availableCards && info.role == 'student'">
                                        <div class="info-title">
                                            {{lang('resource.students.modal.matching') }}
                                        </div>

                                        <select v-model="selectedCard" class="select-matching "  @change="updateCards">
                                            <option value="0" selected>{{lang('resource.requests.table.noMatching')}}</option>
                                            <optgroup :label="lang('resource.requests.table.suggestion')" v-if="availableCards.exact">
                                                <option v-if="availableCards.exact.id" :value="availableCards.exact.id">{{ availableCards.exact.name }}</option>
                                            </optgroup>
                                            <optgroup :label="lang('resource.requests.table.noMatchingYet')">
                                                <option v-for="card in availableCards" v-if="card && card.id != exact_id" :value="card.id">{{ card.name }}</option>
                                            </optgroup>
                                        </select>
                                        <i class="fa fa-id-card select-icon"></i>
                                        <div class="col-xl-line"></div>

                                    </div>






                                </div>


                                <div class="info-container row">



                                    <div class="col-sm-6 col-data">
                                        <div class="info-title">
                                            {{lang('student_details.city') }}

                                        </div>
                                        <div class="input-container">
                                            <div class="fa fa-home icon-data"></div>
                                            <input type="text" class="demo-form ad-input card-input" name="student_city"  @change="saveCard($event, info)">

                                        </div>
                                        <div class="line"></div>
                                    </div>
                                    <div class="col-sm-6 col-data">
                                        <div class="info-title">
                                            {{lang('student_details.address') }}
                                        </div>
                                        <div class="info-data input-container">
                                            <div class="fa fa-map-marker icon-data"></div>
                                            <input type="text" name="student_address"  class="demo-form ad-input card-input"   @change="saveCard($event, info)">
                                        </div>
                                        <div class="line"></div>
                                    </div>

                                    <div class="col-sm-6 col-data">
                                        <div class="info-title">
                                            {{lang('student_details.phone') }}

                                        </div>
                                        <div class="info-data">
                                            <div class="fa fa-phone icon-data"></div>
                                            <input type="text" name="student_phone" class="card-input"   @change="saveCard($event, info)">
                                        </div>
                                        <div class="line"></div>
                                    </div>
                                    <div class="col-sm-6 col-data">
                                        <div class="info-title">
                                            {{lang('student_details.email') }}

                                        </div>
                                        <div class="info-data">
                                            <div class="fa fa-envelope icon-data"></div>
                                            <input type="text" name="email" class="card-input"  @change="saveCard($event, info)">
                                        </div>
                                        <div class="line"></div>
                                    </div>



                                    <div class="col-sm-6 col-data">
                                        <div class="info-title">
                                            {{lang('student_details.father.fullName') }}
                                        </div>
                                        <div class="info-data">
                                            <div class="fa fa-user icon-data"></div>
                                            <input type="text" name="father_fullname" class="card-input"  @change="saveCard($event, info)">
                                        </div>
                                        <div class="line"></div>
                                    </div>
                                    <div class="col-sm-6 col-data">
                                        <div class="info-title">
                                            {{lang('student_details.mother.fullName') }}
                                        </div>
                                        <div class="info-data">
                                            <div class="fa fa-user icon-data"></div>
                                            <input type="text" name="mother_fullname" class="card-input"  @change="saveCard($event, info)">
                                        </div>
                                        <div class="line"></div>
                                    </div>


                                    <div class="col-sm-6 col-data">
                                        <div class="info-title">
                                            {{lang('student_details.father.phone') }}
                                        </div>
                                        <div class="info-data">
                                            <div class="fa fa-phone icon-data"></div>
                                            <input type="text" name="father_phone" class="card-input"  @change="saveCard($event, info)">
                                        </div>
                                        <div class="line"></div>
                                    </div>
                                    <div class="col-sm-6 col-data">
                                        <div class="info-title">
                                            {{lang('student_details.mother.phone') }}
                                        </div>
                                        <div class="info-data">
                                            <div class="fa fa-phone icon-data"></div>
                                            <input type="text" name="mother_phone" class="card-input"  @change="saveCard($event, info)">
                                        </div>
                                        <div class="line"></div>
                                    </div>



                                </div>


                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-close" data-dismiss="modal" @click="modalClose">Close</button>
                        </div>
                    </div>

                </div>
            </div>










    </div>
    <div v-else>

        <!-- PRELOADER -->

        <div style="margin-top: 40px;">
            <div class="col-xxs-12 col-xs-6 col-lg-4 col-xl-3 "  v-for="i in 12">
                <transition name="fade">
                        <div class="animated-background" style="margin-top: 100px;">
                            <div class="preloader-container ">
                                <div class="background-masker header-top"></div>
                                <div class="background-masker header-left"></div>
                                <div class="background-masker header-right"></div>
                                <div class="background-masker header-bottom"></div>

                                <div class="background-masker subheader-left"></div>
                                <div class="background-masker subheader-right"></div>
                                <div class="background-masker subheader-bottom"></div>

                                <div class="background-masker content-top"></div>
                                <div class="background-masker content-first-end"></div>
                                <div class="background-masker content-second-line"></div>
                                <div class="background-masker content-second-end"></div>
                                <div class="background-masker content-third-line"></div>
                                <div class="background-masker content-third-end"></div>
                            </div>
                        </div>
                </transition>
            </div>

        </div>




    </div>

        <paginator :dataSet="dataSet" @changed="fetch"></paginator>

    </div>

</template>


<style>
    .alumniFilter{-webkit-filter: grayscale(85%); opacity: 0.9}
    .fakeFilter{-webkit-filter: grayscale(70%); opacity: 0.7}


    .fade3-enter-active, .fade3-leave-active {
    transition: opacity 1.3s
    }
    .fade3-enter, .fade3-leave-to {
    opacity: 0
    }

    .cards-container{
        margin: 12px 0;
        height:200px;
        perspective: 900px;
    }

    .double-card{
        width: 100%;
        height: 100%;
        transform-style: preserve-3d;
        transition: transform 0.2s;
    }

    .double-card div{
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
    }

   .front {

    }
    .back {
        height: 205px!important;
        background-color: #ddd;
        border-radius: 5px;
        border: 1px solid #a5a5a5;

        transform: rotateY( 180deg );
    }

    .back{
        /*background: -webkit-linear-gradient(top,  #5D5278,#6783B7); !* For Safari 5.1 to 6.0 *!*/
        /*background: -o-linear-gradient(top,  #5D5278,#6783B7); !* For Opera 11.1 to 12.0 *!*/
        /*background: -moz-linear-gradient(top,  #5D5278,#6783B7); !* For Firefox 3.6 to 15 *!*/
        background: linear-gradient(to top,  #008da5,#324c5a); /* Standard syntax */
        /*background: #ddd;*/
    }



    .front,.back{

        /*border-radius: 5px; border: 1px solid #999*/
    }

    .flipped{transform: rotateY( 180deg );}


    .flip-icon,.flip-info{position: absolute; top:13px; right: 13px; color: #00d1e9; cursor: pointer; font-size: 120%}
    .flip-info{ right: 38px;}
    .flip-icon:hover,.flip-info:hover{color: #fafafa;}


    .fath{color: #b8b8b8; font-size: 105%; margin-left: 10px;}









    label{font-weight: 400;}
    .r-lab{margin: -23px 0 0 20px;}
    .margin-right-10 { margin-right: 10px; }
    .sc-radio{margin: 10px 15px; }

    .btn-info,.btn-info:focus{background: #00bcd4; border-color: #00bcd4; }
    .btn-info:hover{background: #00a6be; border-color: #00a6be; }

    .btn-view{margin: 11px 10px 10px 0!important; height: 38px;}
    .form-control{z-index: 0!important;}
    .form-control:focus,.form-control:active{border: none;}
    .input-search{width: 290px!important; margin: 10px 0 10px 10px; border: 1px solid #c2c2c2; border-radius: 5px;}
    .search-counter{display: inline-block; margin:3px 0 0 3px;}
    .addon2{width: 70px; padding: 6px!important;}
    .input-group-addon{border-radius: 5px; border:none; color: #9b9b9b
    }
    .form-control{border: none!important;}

    .addStudent{margin:8px 0 0 15px; font-size: 240%; color: #999; display: inline-block; padding-left: 30px;}
    .addStudent:hover{cursor: pointer; color: #FD6A33}




    .sc-box{min-height: 160px; background: #fafafa; border: 1px solid #a5a5a5; border-top-left-radius: 8px; border-top-right-radius: 8px;  padding: 0 25px;  border-bottom: none; position: relative;}


    .sc-up{height: 70px!important; background: #008da5; margin: 0 -25px; border-top-left-radius: 7px; border-top-right-radius: 7px; }
    .sc-img{box-shadow: 0 0 10px 2px #d1d1d1;  }
    .gray{-webkit-filter: grayscale(100%);}
    /*.opacity{opacity: 0.2}*/


    .name{text-transform: capitalize; font-size: 140%; font-weight: 400;}
    .email{font-size: 90%; font-weight: 300;}
    .email>a,.email>a:visited{color: #888}
    /*.name{text-transform: capitalize; font-size: 140%; color: #fff; font-weight: 400; margin: -50px 0 0 90px;}*/
    /*.email{font-size: 90%; color: #888; font-weight: 300; margin: 5px 0 0 90px;}*/
    /*.phone{margin: 20px 0 0 90px;}*/

    .circle{height: 19px!important; width: 19px!important; border-radius: 50%; background-color:#008da5; position: absolute; left: -4px; bottom: 37px; }

    /*.sc-bottom{height: 40px; background: #cad8d3; margin: 0 -25px; border-bottom-left-radius: 7px; border-bottom-right-radius: 7px;}*/
    .sc-bottom{height: 50px!important; background: #cad8d3; margin: 0 0 20px 0; bottom: -25px;
        border-bottom-left-radius: 7px; border-bottom-right-radius: 7px; border: 1px solid #a5a5a5; border-top: none; padding: 15px;}
    .sc-radio2{margin:-10px 80px 0 0 ; opacity: 0.8;}

    .phone{margin: 10px 0;}
    .phone>a,.phone>a:visited{color: #008da5;}
    .phone>a:hover, .email>a:hover{color: #FD6A33}

    .phone-text>i{color: #cad8d3; margin-right: 7px}
    .phone-text{position: absolute; bottom: 36px;}

    .img-students{height: 55px; width: auto; position: absolute; right: 30px; top: 85px; opacity: 0.07}

    .r-lab2{height: 18px!important; width: 72px!important;}
    /*.r-lab2:hover{cursor: default;}*/

    /* ============ MODAL CARD ==========*/
    /* ==================================*/
    .modal-content{border-radius: 7px!important; background-color: #f4f4f4; padding: 0!important; border: none!important; }
    .modal-up{padding: 20px 15px ; margin: 0; background-color: #007087; height: 110px; border-top-left-radius: 6px; border-top-right-radius: 7px;}
    .modal-footer{padding: 15px; background-color: #a1afaa; border-bottom-left-radius: 7px; border-bottom-right-radius: 7px; height: 80px;
    }
    .img-avatar{position: absolute; top: 35px; left: 20px; height: 110px; border-radius: 50%; border: 3px solid #fff;}
    .lastName{margin-top: 45px; margin-left: 130px; font-size: 200%; color: #fafafa}
    .firstName{margin-top: 8px; margin-left: 130px; font-size: 150%; color: #888}

    .cardName,.cardFname{margin-left: 130px;  background: transparent; border: none; width: 90%}
    .cardName{margin-top: 25px;  font-size: 200%; color: #fafafa; }
    .cardFname{margin-top: 7px;  font-size: 150%; color: #888}
    .cardName:focus{color: #cdcdcd
    }
    .cardFname:focus{color: #006075;
    }

    .cardName::placeholder {
        color:    #cdcdcd;
    }
    .cardFname::placeholder {
        color:    #888;
    }
    .card-input:focus{opacity: 0.65}

    .modal-infos{ min-height: 540px; margin-top: 40px; padding: 15px;}

    .btn-close{margin:0 30px 0 0;}

    .modal-select{width: 100%}

    .select-transparent{background: transparent; border: none; margin-top: 6px; margin-left: 18px;}
    .col-xl-line{border-bottom: 1px solid #008da5; margin-top: -2px; width: 100%;}

    /*.select-icon{margin-top: 8px; display: inline-block; float: left; color: #008da5}*/

    .studies-selection-container{position: relative; margin-top: 10px;}
    .select-icon, .select-icon2{position: absolute; left: -2px; color: #008da5}
    .select-icon {top: 30px;}
    .select-icon2{top: 100px;}
    .col-xl-line2{position: absolute; top:120px;}
    .select2{position: absolute; top: 90px;}

    .first-study-text,.second-study-text{color:#008da5; font-size: 110%}
    .second-study-text{margin-top: 25px;}
    .fa-plus{ margin-right: 10px;}
    .fa-plus:hover{cursor: pointer; color: #FD6A33}
    .second-study-remove{color: #bbb; font-size: 90%; font-weight: 300;}
    .second-study-remove:hover{cursor: pointer; color: #FD6A33}
    .fa-trash{margin-right: 6px;}

    .info-container{position: absolute; top: 360px; width: 100%;}
    .icon-data, .info-title {color: #008da5}
    .col-data{margin-top: 30px;}
    .line{height: 1px; width: 97%; background: #008da5}

    .card-input{border: none; background: transparent;  width: 92%}
    .select-matching{ border: none; background: transparent;border-radius: 0; width: 100%!important; padding-left: 17px; position: relative;}
    .matching{position: absolute; top: 150px;  right: 0; left:0;}
    .fa-id-card{margin-top: -8px;}

    select {
        -webkit-appearance: none;
        -moz-appearance: none;
        /*text-indent: 8px;*/
        text-overflow: '';
    }
    select:hover {
        cursor: pointer;
    }


    @media (min-width: 768px) {
        .modal-content{width:670px }
    }

    @media (min-width: 900px) {
        .modal-content{width:730px }
    }

    @media (min-width: 1200px) {
        .modal-content{width: 840px }
    }
    @media (min-width: 1600px) {
        .modal-content{width: 980px }
    }

    @media (max-width: 767px) {
        .modal-infos{height: 800px }
    }


    /* =========TOOLTIP=========*/
    .tool {
        position: relative;
    }

    .tooltiptext  {
        font-weight: 300;
        font-size: 80%;
        visibility: hidden;
        width: 300px;
        background-color: #007991;
        color: #fff;
        text-align: center;
        border-radius: 5px;
        padding: 4px 1px;
        position: absolute;
        z-index: 1;
        bottom: 130%;
        margin-left: 2px;
        opacity: 0;
        transition: opacity 0.1s;
        background-color: #007991;
    }

    .tooltiptext2{
        background-color: #FD6A33;
        color: #fff;
        width: 200px;}


    .tool:hover .tooltiptext{
        visibility: visible;
        opacity: 0.9;
    }

    /* =================================*/



    /* ============ Animate.CSS ==========*/
    /* ==================================*/

    .animated {
        animation-duration: 0.7s;
        animation-fill-mode: both;
    }

    @keyframes zoomIn {
        from {
            opacity: 0;
            transform: scale3d(.3, .3, .3);
        }

        50% {
            opacity: 1;
        }
    }

    .zoomIn {
        animation-name: zoomIn;
    }

    @keyframes zoomOut {
        from {
            opacity: 1;
        }

        50% {
            opacity: 0;
            transform: scale3d(.3, .3, .3);
        }

        to {
            opacity: 0;
        }
    }

    .zoomOut {
        animation-name: zoomOut;
    }



    /* =========== photo frame ==========*/
   /* ==================================*/
    .img-cont{display: none}
    .frame-cont{position: absolute; top:-3px; left: -10px;}
    .frame{height: 70px; width: 70px; display: none;}
    .clip{width: 17px; position: absolute; top:-3px; left: 66px; z-index: 1}
    .avatar2{
        width: 75px; height: auto; border-radius: 5px;;
        box-shadow: 0 0 15px 2px #555;
        position: absolute; top: 4px; left: 12px;
        -webkit-transform: rotate(5deg);
        -moz-transform: rotate(5deg);
        -o-transform: rotate(5deg);
        -ms-transform: rotate(5deg);
        transform: rotate(5deg)
    }



    /* ==================================*/

    @media (min-width: 1331px) {
        .img-cont{margin: -45px 0 0 0 ; }
        .name, .email{position: absolute; margin:0; left: 95px!important;}
        .email{margin: 0; top: 77px;}
        .name{color: #fff!important; top: 38px;}

    }



    @media (max-width: 1330px) {
        .img-cont, .name, .email{text-align: center;}
        .img-cont{margin: 15px auto; }
        .name{margin: 85px auto 0 auto;  color: #008da5; }
        .email{margin: 110px auto;}
        .sc-box{min-height: 200px;}

        .frame-cont{display: none;}
        .img-cont{display: block}

    }



    @media (min-width: 1790px) {
        .col-xl-3 {width: 25%;}
        .col-xl-4 {width: 33.33%;}
    }

    @media (min-width: 2000px) {
        .col-xxl-2 {width: 20%;}
        .col-xxl-3 {width: 25%;}
        .col-xxl-4 {width: 33.33%;}

    }
    @media (min-width: 2280px) {
        /*.pull-right{ margin-right: 50px!important;}*/
    }

    @media  (max-width: 640px) {
        .btn-view{width: 96%; margin: 0 auto 15px auto!important;  float: none!important; display: block; text-align: center!important;}
        .form-control{ width: 210px;
            border-bottom-right-radius: 4px!important; border-top-right-radius: 4px!important;
            -moz-border-radius-bottomright: 4px!important; -moz-border-radius-topright: 4px;}
        .input-search{width: 70%!important; }

    }

    @media  (max-width: 535px) {
        .addon2{display: none;}
    }

    @media  (max-width: 595px) {
        .col-xxs-12{width: 100%}


    }
    @media  (max-width: 580px) {  .input-search{width: 68%!important; }  }
    @media  (max-width: 540px) {  .input-search{width: 66%!important; }  }
    @media  (max-width: 500px) {  .input-search{width: 62%!important; }  }
    @media  (max-width: 450px) {  .input-search{width: 95%!important; }  .addon2{display: table-cell;} }
    /*@media  (max-width: 380px) {  .input-search{width: 96%!important; }  }*/


    /*RADIO INPUT STYLE [same @ Scholarships-vue]*/

    .sc-radio> input[type=radio],.sc-radio2> input[type=radio]{
        visibility: hidden;
        position: absolute;
    }
    .sc-radio>input[type=radio] + label,.sc-radio2>input[type=radio] + label{
        cursor:pointer;
    }
    .sc-radio>input[type=radio] + label:before,.sc-radio2>input[type=radio] + label:before{
        width:15px;
        height:15px;
        margin-right: 4px;
        content: " ";
        display:inline-block;
        transition: 0.1s;
        border:1px solid #888;
        border-radius:50%;
    }

    /* CHECKED */
    .sc-radio>input[type=radio]:checked + label:before,.sc-radio2>input[type=radio]:checked + label:before{
        background: #008da5;
    }
    .sc-radio>input[type=radio]:checked + label:before,.sc-radio2>input[type=radio]:checked + label:before{
        box-shadow: inset 0 0 0 3px #EEF1F2;
    }
    .sc-radio2>input[type=radio]:checked + label:before{
        box-shadow: inset 0 0 0 3px #CAD8D3;
    }

    /*  WAVE STYLE */
    .wave{
        background:#fafafa;
        height: 10px;
        position: relative;
        border-left: 1px solid #cfcfcf;
        border-right: 1px solid #cfcfcf;
    }
    .wave::before,.wave::after{
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        right: 0;
        background-repeat: repeat;
        /*background-size: 20px 20px;*/
        background-size: 10px 10px;
    }
    .wave::before{
        /*height: 10px;*/
        /*background-image: radial-gradient(circle at 10px -5px, transparent 12px, #cad8d3 13px);*/
        height: 5px;
        background-image: radial-gradient(circle at 5px -2.5px, transparent 6px, #cad8d3 6.5px);
    }
    .wave::after{
        /*height: 15px;*/
        /*background-size: 40px 20px;*/
        /*background-image: radial-gradient(circle at 10px 15px, #cad8d3 12px, transparent 13px);*/
        height: 7.5px;
        background-size: 20px 10px;
        background-image: radial-gradient(circle at 5px 7.5px, #cad8d3 6px, transparent 6.5px);
    }
</style>


<script>


    import Multiselect from '../../scholio-multiselect';

    export default{
        components: { Multiselect },

        props: ['sxoles'],

        data: function() {
            return{
                secondStudy: null,
                items: [],
                searchStr:"",
                selection:true,
                sortReverse:false,
                sortType:'name',
                status:'connected',
                stStatus:'',
                dataSet: false,
                allumniStudents: 0,
                connectedStudents: 0,
                scholio: null,
                info: null,
                studies: null,
                selectedStudy: null,
                std: [],
                multipleStudies: true,
                secondStudy: null,
                study2: false,
                test: true,
                studentCounter: 0,
                cards: null,
                selectedCard: 0,
                availableCards: null,
                exact_id: 0
            }
        },
        computed: {
            activeStudentsLength: function(){
                return this.items[0].connectedStudents;
            },

            allumniStudentsLength: function(){
                return this.items[0].allumniStudents;
            },

            filteredStudents: function () {
                return this.items;
            },

        },

        methods: {
            getCards() {
                axios.get('/api/school/getCards/' + this.info.status + '/' + this.info.type + '/' + this.info.name).then(({ data }) => {
                    this.availableCards = data
                    if (this.availableCards.exact) {
                        this.exact_id = 0
                    }
                    console.log('aaa')
                    console.log(this.availableCards)
                })
            },
            updateCards(){
                axios.post('/api/school/update/cards/swap/' + this.info.id + '/' + this.selectedCard).then(({data})=>{
                    console.log(data)
                })
            },
            saveCard(e, card){
                let field = e.target.name
                let value = e.target.value

                axios.post('/api/school/update/card/' + card.id + '/' + field + '/' + value).then(response =>{
                    console.log(response.data)
                })
            },
            changeStatus: function(id, st){
                var status = '';
                if(document.getElementById('st'+id).checked) status = 'connected';
                else status = 'allumni';

                axios.post('/api/school/changeStudentStatus/' + id + '/' + status)
                    .then(response => {
                        if(response.data == 'ok'){
                            // location.reload(); // ---------------------------------->>>>>>
                            this.fetch()
                        } 
                    })

                    this.status = status
            },
            removeStudy(){
                let c = confirm('Are you sure?')
                if(c){
                    axios.post('/api/student/removeStudy', {study: this.secondStudy, student: this.info.id}).then(response=>{ location.reload()})
                }
            },
            saveStudy(std){
                if(std == 1){
                    if (this.selectedStudy) {
                        axios.post('/api/student/saveStudy', { study: this.selectedStudy, student: this.info.id, std: 1 })
                            .then(response => {
                                // this.fetch()
                            });
                    }
                }

                if(std == 2){
                    if (this.secondStudy) {
                        axios.post('/api/student/saveStudy', { study: this.secondStudy, student: this.info.id, std: 2 })
                            .then(response => {
                                // this.fetch()
                            });
                    }
                }
                
            },
             getSchoolStudies(){
                axios.get('/api/notifications/getSchoolLevelStudies').then(({data})=>{
                    this.studies = data
                    var vm = this

                    var arr = []
                    this.studies.forEach((item)=>{
                        item.studies.forEach((studies)=>{
                            arr.push({id: studies.study.id, name: studies.study.name})
                        })
                        vm.std.push({ level: item.level.name, study: arr })
                        arr = []
                    })
                })
            },
            nameChangeSort: function(){
                this.sortType = 'name';
                this.sortReverse=!this.sortReverse;
                this.fetch(1)
            },
            emailChangeSort: function(){
                this.sortType = 'email';
                this.sortReverse=!this.sortReverse;
                this.fetch(1)
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

                url(page) {
                    if (! page) {
                        let query = location.search.match(/page=(\d+)/);
                        page = query ? query[1] : 1;
                    }

                    let search = this.searchStr

                    if(search == ""){
                        search = "%20"
                    }

                    return `/api/connected/students/card/search/${this.sortType}/${this.sortReverse}/${this.status}/${search}?page=${page}`;
                }, 

                fetch(page, status) {
                    if (status) this.status = status
                    window.scrollTo(0, 0);
                    axios.get(this.url(page)).then(this.refresh);
                },

                refresh({data}) {
                    setTimeout(()=>{
                        this.dataSet = data;
                    }, 700)
                    
                    this.items = data.data;
                    console.log(this.items)
                    this.allumniCount = this.items.allumniStudents
                    this.connectedCount = this.items.connectedStudents

                    this.studentCounter = data.studentCounter
                },

            changeView: function () {
                this.selection=!this.selection;
            },
            flip(id){
                $("#card"+id).toggleClass("flipped");
            },
            changeInfo(data){
                this.info = data
                console.log('info')
                console.log(this.info)
                this.getCards()
                if(this.info.study_id) this.selectedStudy = this.info.study_id
                else this.selectedStudy = 0
                if (this.info.study_id2) this.secondStudy = this.info.study_id2
                else this.secondStudy = 0

                $('.modal').on('shown.bs.modal', function(){
                    // if(!this.study2) this.test = false
                    console.log('second')
                    console.log(this.secondStudy)
                    console.log('study2')
                    console.log(this.study2)

                })

                $('.modal').on('hide.bs.modal', function () {
                    // this.secondStudy = false
                    // this.study2 = false
                    
                    console.log('hide')
                    // location.reload()
//                    $('.modal-dialog').addClass('animated zoomOut');
                })



            },
            modalClose(){
                console.log('click')
//                document.getElementById('modalzoom').classList.add('zoomOut')
                setTimeout(function(){
//                    document.getElementById('modalzoom').classList.remove('zoomOut');
                    document.getElementById('modalzoom').classList.add('zoomIn');
                }, 900);


            }
        },

        created() {
            this.fetch();
        },

        watch: {
            dataSet() {
                this.allumniStudents = this.dataSet.allumniStudents || 0;
                this.connectedStudents = this.dataSet.connectedStudents || 0;
            }
        },

        updated(){
            for(var i=0;i<=this.dataSet.total;i++){
                $("#card"+i).removeClass("flipped");
            }
        },

        mounted() {
            this.getSchoolStudies()
            this.scholio = window.location.origin
        }
    }

</script>


