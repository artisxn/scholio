<template>
    <div>
        <ul id="mmenu">
            <li data-menuanchor="firstPage" class="">
                <a href="#firstPage">
                    <div class="btn-fixed">Κριτήρια</div>
                </a>
            </li>
            <!--<li data-menuanchor="secondPage" class="" :class="[{'low-opacity': financial_disabled}]" v-if="!financial_disabled">-->
            <li data-menuanchor="secondPage" class="" >
                <a href="#secondPage">
                    <div class="btn-fixed">Οικονομικά</div>
                </a>
            </li>
            <li data-menuanchor="thirdPage" class="" :class="[{'low-opacity': levels_disabled}]" v-if="!levels_disabled">
                <a href="#thirdPage">
                    <div class="btn-fixed">Σπουδές</div>
                </a>
            </li>
            <li data-menuanchor="fourthPage" class="" :class="[{'low-opacity': terms_disabled}]" v-if="!terms_disabled">
                <a href="#fourthPage">
                    <div class="btn-fixed">Όροι</div>
                </a>
            </li>
        </ul>
        <div id="right" class="right"></div>
        <div id="fullpage" class="section-container">
            <div class="section sec1" data-anchor="firstPage">
                <div class="" >
                    <div class="step-title">Βήμα 1ο: Επιλέξτε Κριτήρια</div>
                    <div class="criteria">
                        <multiselect   v-model="criteria_value" 
                        :options="criteria_options" 
                        track-by="name" 
                        label="name" 
                        :searchable="false" 
                        :close-on-select="true" 
                        :show-labels="false" 
                        placeholder="Επιλέξτε Κριτήρια" 
                        :deselectLabel="lang('panel_studies.input-delete')" 
                        :selectLabel="lang('panel_scholarships.create.select')" 
                        :selectedLabel="lang('panel_scholarships.create.selected')" 
                        :disabled="criteria_disabled" 
                        :custom-label="customLabel">
                        <template slot="option" slot-scope="props">
                            <div class="option__desc">
                                <img :src="props.option.icon" height="15px">
                                <span class="option__title">{{ props.option.name }}</span>
                                <span class="option__small" style="float: right; color: #999;">{{ props.option.limit }} διαθέσιμες</span>
                            </div>
                        </template>
                        </multiselect>
                    </div>
                    <div class="scholarship-info row" v-if="criteria_value && criteria_value.name">
              <span class="col-xs-2" style="margin-top: 11px;">
                <img class="criteria-img-sm img-responsive" :src="criteria_value.icon" alt="">
                </span>
                <span class="col-xs-10 col-sm-12 scholar-text"> 
                    <div>Test
                    </div>
                </div>
            </div>
            <div class="section sec2" data-anchor="secondPage" ></div>
            <!--<div class="section sec2" data-anchor="secondPage" v-if="!financial_disabled"></div>-->
            <div class="section sec3" data-anchor="thirdPage"  v-if="!levels_disabled"></div>
            <div class="section sec4" data-anchor="fourthPage" v-if="!terms_disabled"></div>
        </div>
    </div>
</template>


<style>   

.section-container { 
margin-top: -30px; 
margin-bottom: 30px; 
} 
.btn-fixed {
color: #999;
    border: 1px solid #bbb;
    border-radius: 13px; background: #e1e1e1; padding: 5px 20px; font-size: 110%; margin-left: 15px; 
    box-shadow: 0 0 10px 2px #ccc; 
}    

li.active a {} 
li.active a.btn-fixed {
border-color: #008da5;  background: # fff;
color: #008da5!important;} 

 .btn-fixed:hover{border-color: #FD6A33!important;
border-radius: 13px;
background: #e1e1e1; 
}  
li.active a.btn-fixed: hover {
color: #FD6A33!important;
}   

#mmenu > li {
float: left;list-style: none;
}

  #mmenu { 
height: 100 % ; width: 100 % ; top: 90 px; margin: 0 0 0 - 50 px;  position: fixed; z - index: 0; 
}

  #mmenu.section-container {}  
                               .fp-section.f -table, .fp-slide.fp-table { 
width: 90%; margin: 90px 3% 0 5%; padding: 20px; 
}  .section {
border: 1px solid #bbb; border-radius: 6 px;height: 80% ;
} 
.sec1 {
background: #fff
}
 .sec2 {
background: #f2f2f2
}
 .sec3 {
background: #e8e8e8
} 
.sec4 {
background: #dddddd 
}    
.right {
width: 200px;top: 200px;right: 20% ;background: cyan;height: 300px; position: fixed;z - index: 200;
}  
.scholar-frame-fixed {
position: fixed;
} 
.scholar-frame-relative {
position: absolute;top: 570px;
}
 .scholar-frame-relative2 {
position: absolute;top: 530px;
}

</style>




