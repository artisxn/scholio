<?php $__env->startSection('styles'); ?>
        <!-- Polymer Float Form CSS -->
<link rel="stylesheet" href="/new/css/jquery.polymer-form.min.css" >

<link href="/panel/assets/css/form.css" rel="stylesheet" type="text/css" />
<style>
    .full-content{display: none;}
    input[type=text],input[type=text]:focus{border-radius:0; border: none; border-bottom: 1px solid #ccc; }
    .school-logo{height: 100px; border-radius: 10px; box-shadow: 0 0 10px 2px #bbb;}
    .btn-photo{padding: 7px 0!important; height: 34px!important; width: 190px;}
    .btn-label{font-size: 110%; font-weight: 300;}
    .btn-submit{height: 36px!important;}

    /*=================*/
    .up20{height: 2px;}
    .up30{margin-top: 30px;}
    .input-container{position: relative; padding: 0 5px;}
    .demo-form{ margin: 0!important; font-weight: 300!important; border: none!important;}
    .polymer-form label {color: #008DA5!important; font-size:110%!important; font-weight: 300!important; display: block!important; padding-bottom: -40px!important; margin-left: 11px; }
    .ad-input{font-size: 100%!important; padding-left: 25px!important;}
    .icon-inp{position: absolute; top: 32px;  color: #008DA5}
    .about-container{padding: 0 22px; margin-top: 35px;}
    .about-container>.form-group>p{color: #008DA5; font-size: 105%; margin-bottom: 10px;}

    .title{font-size: 120%; font-weight:400; color: #FD6A33; margin-top: 30px; padding-left: 5px; margin-bottom: -5px}
    .tiny-text{color: #FD6A33}

    @media(max-width: 419px){
        .full-content{margin-top: 15px;}
    }
    @media(min-width: 1800px){
        /*.col-xl-3{width: 25%}*/
    }
</style>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scriptsBefore'); ?>
        <!-- Polymer Float Input Form js -->
<script src="/new/js/jquery.polymer-form.min.js"></script>

<!-- tinyMCE js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.2/tinymce.min.js"></script>

<script>
    tinymce.init({
        language_url : '/el.js',

        entity_encoding : "raw",
        selector: 'textarea',
        height: 490,
        menubar: false,

        plugins: [
            'autolink lists link  charmap  preview anchor',
            'visualblocks  fullscreen',
            'insertdatetime media table paste '
        ],
        toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link table',

        setup: function (ed) {
            ed.on("KeyDown", function (ed, evt) {
                chars_without_html = $.trim(tinyMCE.activeEditor.getContent().replace(/(<([^>]+)>)/ig, "")).length;
                var key = ed.keyCode;
                console.log(ed.keyCode)

                var remaining = max_chars - chars_without_html;

                $('#chars_left').html(remaining);

                if (remaining <= 0  && (key != 8 && key != 46)) {
                    ed.stopPropagation();
                    ed.preventDefault();
                    $('#chars_left').html('ΟΧΙ ΑΛΛΟ!')
                }
            });
        }

    });


    $(document).ready(function() {
        $(".demo-form").polymerForm({
            bar_height: "1px",
            active_color: '#008DA5',
            label_color: '#008DA5',
            base_color: '#bbb',
            origin: 'left',
            margin_top: '25px',
            margin_bottom: '20px'

        });

        $(".full-content").hide().fadeIn(100);
    });


</script>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

<div class="row full-content">
    <div class="card-box">
        <h4 class="m-t-0 header-title"><b><?php echo app('translator')->getFromJson('school_profile.title'); ?></b></h4>
        <p class="text-muted m-b-30 font-13">
            <?php echo app('translator')->getFromJson('school_profile.subtitle'); ?>
        </p>
        <div class="row">

            <form class="form-horizontal m-t-20" method="POST" action="/panel/school/profile/<?php echo e($school->id); ?>" accept-charset="UTF-8" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>


                <div class="form-group" align="center">
                    <img src="<?php echo e(substr($logo, 0, 4) == 'http' ? '' : '/images/schools/'); ?><?php echo e($logo); ?>" class="school-logo">
                    <div class="clearfix up30"></div>
                    <div class="btn btn-primary text-centered btn-photo">
                        <label for="avatar" class="btn-label"> <i class="fa fa-upload mar-right-10"></i><?php echo app('translator')->getFromJson('school_profile.avatar'); ?></label>
                        <input type="file" id="avatar" class="form-control" name="logo" style="visibility: hidden;">
                    </div>
                </div>


                <div class="col-xs-12">



                    <div class="title">Στοιχεία Επικοινωνίας</div>
                    <!-- change foreach -->
                    <div class="input-container col-xs-12 col-sm-6 col-xl-3">
                        <?php $__currentLoopData = $schoolTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schoolType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($schoolType->id == $school->type_id ): ?>
                        <input type="text" label="<?php echo app('translator')->getFromJson('school_profile.type'); ?>" name="type" class="demo-form ad-input" value="<?php echo e($schoolType->name); ?>" disabled>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <i class="icon-inp fa fa-university"></i>
                    </div>


                    <div class="input-container col-xs-12 col-sm-6 col-xl-3">
                        <input type="text" label="<?php echo app('translator')->getFromJson('school_profile.email'); ?>" name="email" class="demo-form ad-input" value="<?php echo e(auth()->user()->email); ?>" disabled>
                        <i class="icon-inp fa fa-envelope"></i>
                    </div>



                    <div class="input-container col-xs-12 col-sm-6 col-xl-3">
                        <input type="text" label="<?php echo app('translator')->getFromJson('school_profile.name'); ?>" name="name" class="demo-form ad-input" value="<?php echo e($school->name()); ?>">
                        <i class="icon-inp fa fa-university"></i>
                    </div>


                    <div class=" input-container col-xs-12 col-sm-6 col-xl-3">
                        <input type="text" label="<?php echo app('translator')->getFromJson('school_profile.website'); ?>" name="website" class="demo-form ad-input" value="<?php echo e($school->website); ?>" >
                        <i class="icon-inp fa fa-globe"></i>
                    </div>


                    <div class=" input-container col-xs-12 col-sm-6 col-xl-3">
                        <input type="text" label="<?php echo app('translator')->getFromJson('school_profile.city'); ?>" name="city" class="demo-form ad-input" value="<?php echo e($school->city); ?>">
                        <i class="icon-inp fa fa-map-marker"></i>
                    </div>


                    <div class=" input-container col-xs-12 col-sm-6 col-xl-3">
                        <input type="text" label="<?php echo app('translator')->getFromJson('school_profile.address'); ?>" name="address" class="demo-form ad-input" value="<?php echo e($school->address); ?>">
                        <i class="icon-inp fa fa-home"></i>
                    </div>


                    <div class=" input-container col-xs-12 col-sm-6 col-xl-3">
                        <input type="text" label="<?php echo app('translator')->getFromJson('school_profile.phone'); ?>" name="phone" class="demo-form ad-input" value="<?php echo e($school->phone); ?>">
                        <i class="icon-inp fa fa-phone"></i>
                    </div>


                    <div class=" input-container col-xs-12 col-sm-6 col-xl-3 ">
                        <input type="text" label="<?php echo app('translator')->getFromJson('school_profile.manager'); ?>" name="user_name" class="demo-form ad-input" value="<?php echo e(auth()->user()->name); ?>">
                        <i class="icon-inp fa fa-user"></i>
                    </div>


                    <div class="up clearfix"></div>
                    <div class="title">Σύνδεσμοι των μέσων κοινωνικής δικτύωσης</div>

                    <div class=" input-container col-xs-12 col-sm-6 col-xl-3 " style="">
                        <input type="text" label="facebook" name="" class="demo-form ad-input" value="" style="">
                        <i class="icon-inp fa fa-facebook"></i>
                    </div>
                    <div class=" input-container col-xs-12 col-sm-6 col-xl-3 ">
                        <input type="text" label="twitter" name="" class="demo-form ad-input" value="">
                        <i class="icon-inp fa fa-twitter"></i>
                    </div>
                    <div class=" input-container col-xs-12 col-sm-6 col-xl-3 ">
                        <input type="text" label="Instagram" name="" class="demo-form ad-input" value="">
                        <i class="icon-inp fa fa-instagram"></i>
                    </div>
                    <div class=" input-container col-xs-12 col-sm-6 col-xl-3 ">
                        <input type="text" label="YouTube" name="" class="demo-form ad-input" value="">
                        <i class="icon-inp fa fa-youtube"></i>
                    </div>
                    <div class=" input-container col-xs-12 col-sm-6 col-xl-3 ">
                        <input type="text" label="skype" name="" class="demo-form ad-input" value="">
                        <i class="icon-inp fa fa-skype"></i>
                    </div>
                    <div class=" input-container col-xs-12 col-sm-6 col-xl-3 ">
                        <input type="text" label="Google+" name="" class="demo-form ad-input" value="">
                        <i class="icon-inp fa fa-google-plus"></i>
                    </div>
                    <div class=" input-container col-xs-12 col-sm-6 col-xl-3 ">
                        <input type="text" label="Pinterest" name="" class="demo-form ad-input" value="">
                        <i class="icon-inp fa fa-pinterest"></i>
                    </div>
                    <div class=" input-container col-xs-12 col-sm-6 col-xl-3 ">
                        <input type="text" label="Linked in" name="" class="demo-form ad-input" value="">
                        <i class="icon-inp fa fa-linkedin"></i>
                    </div>


                </div>

                <div class="col-xs-12 about-container">
                    <div class="form-group">
                        <p><?php echo e($school->name()); ?>: <span class="tiny-text"><?php echo app('translator')->getFromJson('school_profile.about'); ?></span></p>
                        <textarea value="" name="about"><?php echo e($school->about); ?></textarea>
                        <!-- Height change on scrpit @ tinymce.init-->
                    </div>
                </div>



                <div class="clearfix"></div>
                <div class="text-centered">
                    <div class="col-xs-6 col-sm-3 centered-text">
                        <button class="btn btn-primary btn-submit" type="submit">
                            <?php echo app('translator')->getFromJson('school_profile.button'); ?>
                        </button>
                    </div>
                </div>

            </form>

        </div>
    </div>

</div>

<?php if(count($errors) > 0 ): ?>
<div class="alert alert-danger">
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>

<?php if(Session::has('updated_profile')): ?>
<div class="row">
    <p class="alert alert-success col-lg-6"  style="margin: 0 10px"><?php echo e(session('updated_profile')); ?></p>
</div>
<?php endif; ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('panel.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>