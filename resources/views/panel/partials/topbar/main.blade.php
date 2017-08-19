<style>

    /* B U G */

    /*
    S T Y L E S    D O E S N' T    W O R K
    */

/*.icon-navigation-container{position: fixed;  display: inline-block;  margin-top: 14px;  text-align: center; left: 50%; width: 400px; margin-left:-130px;}*/
</style>


<div class="topbar">

    <!-- LOGO -->
    <?php echo $__env->make('panel.partials.topbar.logo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">

            <div class="pull-left">
                <button class="button-menu-mobile open-left">
                    <i class="fa fa-outdent"></i>
                </button>

                <form method="GET" id="langForm" style="display: inline-block; position: absolute; top: 18px; margin-left: 60px; color: #555">
                    <select onchange="changeLang(this)" class="" data-live-search="false" data-mobile="false" data-size='3' data-width="100%" data-style=""
                            style="border: none; background-color: transparent; margin: -15px">
                        <option data-icon="fa" value="en" {{ request()->cookie('lang')=='en' ? 'selected':'' }} >ENG</option>
                        <option data-icon="fa" value="el" {{ request()->cookie('lang')=='el' ? 'selected':'' }} >GR</option>
                    </select>
                </form>
            </div>



            <span class="icon-navigation-container" style="position: fixed;  display: inline-block;  margin-top: 14px;  text-align: center; left: 50%; width: 350px; margin-left:-100px;" >

                 <a href="/panel/school/students"  style="filter: grayscale(100%); margin: 0 6px; opacity: 0.4"
                    onmouseover="{this.style.filter='none'}{this.style.opacity='1'}" onmouseout="{this.style.filter='grayscale(100%)'}{this.style.opacity='0.4'};"
                 >
                     <img src="/new/img/student2.png" alt="photos image" class="" height="30px">
                 </a>

                  <a href="/panel/school/teachers"  style="filter: grayscale(100%); margin: 0 6px; opacity: 0.4"
                     onmouseover="{this.style.filter='none'}{this.style.opacity='1'}" onmouseout="{this.style.filter='grayscale(100%)'}{this.style.opacity='0.4'};"
                  >
                      <img src="/new/img/teacher.png" alt="photos image" class="" height="30px">
                  </a>

                 <a href="/panel/school/studies"  style="filter: grayscale(100%); margin: 0 6px; opacity: 0.4"
                    onmouseover="{this.style.filter='none'}{this.style.opacity='1'}" onmouseout="{this.style.filter='grayscale(100%)'}{this.style.opacity='0.4'};"
                 >
                     <img src="/panel/assets/images/steps/step3-skills2.png" alt="photos image" class="" height="30px">
                 </a>

                 <a href="/panel/school/profile/images"  style="filter: grayscale(100%); margin: 0 6px; opacity: 0.4"
                    onmouseover="{this.style.filter='none'}{this.style.opacity='1'}" onmouseout="{this.style.filter='grayscale(100%)'}{this.style.opacity='0.4'};"
                 >
                     <img src="/panel/assets/images/steps/photo.png" alt="photos image" class="" height="30px">
                 </a>


                 <a href="/panel/school/scholarships/view"  style="filter: grayscale(100%); margin: 0 6px; opacity: 0.4"
                    onmouseover="{this.style.filter='none'}{this.style.opacity='1'}" onmouseout="{this.style.filter='grayscale(100%)'}{this.style.opacity='0.4'};"
                 >
                     <img src="/new/img/trophy4.png" alt="photos image" class="" height="30px">
                 </a>

                 <a href="/panel/school/scholarships/request"  style="filter: grayscale(100%); margin: 0 6px; opacity: 0.4"
                    onmouseover="{this.style.filter='none'}{this.style.opacity='1'}" onmouseout="{this.style.filter='grayscale(100%)'}{this.style.opacity='0.4'};"
                 >
                     <img src="/panel/assets/images/steps/terms.png" alt="photos image" class="" height="30px">
                 </a>

                <a href="/panel/dashboard"  style="filter: grayscale(100%); margin: 0 6px; opacity: 0.4"
                   onmouseover="{this.style.filter='none'}{this.style.opacity='1'}" onmouseout="{this.style.filter='grayscale(100%)'}{this.style.opacity='0.4'};"
                >
                    <img src="/panel/assets/images/steps/stars.png" alt="photos image" class="" height="30px">
                </a>
            </span>



            <ul class="nav navbar-nav navbar-right pull-right">
                <?php echo $__env->make('panel.partials.topbar.item', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </ul>


        </div>
    </div>
</div>
