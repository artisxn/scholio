<?php $__env->startSection('styles'); ?>
 <link rel="stylesheet" href="{{'/panel/assets/css/vue-multiselect.css'}}" />

<link rel="stylesheet" href="/new/css/jquery.polymer-form.min.css" >

<link href="/panel/assets/css/form.css" rel="stylesheet" type="text/css" />
<style>

    /* ======  avoid filled autocomplete input yellow background on chrome ============ */
    input:-webkit-autofill,
    input:-webkit-autofill:hover,
    input:-webkit-autofill:focus,
    input:-webkit-autofill:active{
        -webkit-box-shadow: 0 0 0 30px #FFFFFF inset;
        -webkit-text-fill-color: #555;
    }
    /* =========================================================== */

    .header-title{margin-bottom: 15px;}


    .margin-right-5{margin-right: 5px}
    .btn-primary{background-color: #008da5; border: none;}
    .btn-primary:hover{background-color: #007991
    }
    .btn-photo{padding: 7px 5px!important; height: 34px!important; width: 190px; }
    .btn-label{font-size: 110%; font-weight: 300; cursor: pointer;}

    .full-content{display: none;}
    /*input[type=text],input[type=text]:focus{border-radius:0; border: none; border-bottom: 1px solid #ccc; }*/
    .school-logo{height: 100px; border-radius: 10px; box-shadow: 0 0 10px 2px #bbb;}


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

    .title{font-size: 120%; font-weight:400; color: #555; margin-top: 30px; padding-left: 5px; margin-bottom: -5px}
    .tiny-text{color: #888}

    @media(max-width: 419px){
        .full-content{margin-top: 15px;}
    }
    @media(min-width: 1800px){
        /*.col-xl-3{width: 25%}*/
    }

    .tagText{color: #888; margin-bottom: 10px;}
    .multiSel{}
    .multiselectContainer{margin: 40px 10px 80px 10px;}

    .card-box{margin-top: 20px;}

    /*===========================================*/
    /*=============== FLASH ALERT ===============*/
    .verify-title{margin-left: auto; margin-right: auto; text-align: center; color: #fff; font-weight: 300}
    .alert-primary{background: #7CA2B0; border-color: none;  }
    .close-x{color: #fff !important; font-size: 150%; background: transparent; float: right; border: none; padding: 0; margin-top: -11px;}
    .close-x:hover{color: #FD6A33!important;}
    .alert-dismissable{padding: 20px;}




    /*===========================================*/
    /*=========== Google Autocomplete  ==========*/
    .pac-container:after {
        background-image: none !important;
        height: 0px;
    }

    /*===========================================*/
    /*=========== Multiselect  ==========*/
    .multiselect__tags {
        border: 1px solid #d0d0d0;
    }

</style>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scriptsBefore'); ?>
        <!-- Polymer Float Input Form js -->
<script src="/new/js/jquery.polymer-form.min.js"></script>

<!-- tinyMCE js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.2/tinymce.min.js"></script>

<!-- GoogleMap API -->
<script src="https://maps.googleapis.com/maps/api/js?libraries=geometry,places&key=AIzaSyC18JCENxILnmXA1VGlsjJwBXQi3XZMWVA"></script>

{{--<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>--}}

{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC18JCENxILnmXA1VGlsjJwBXQi3XZMWVA&libraries=places"></script>--}}

<!-- <script src="https://maps.google.com/maps/api/js?libraries=places&region=uk&language=en&sensor=false"></script> -->








<script>



    tinymce.init({
        @if(request()->cookie('lang') == 'el')
            language_url : '/el.js',
        @endif

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

   @if(Session::has('updated_profile'))
        <div class="alert-dismissable alert alert-primary" style="margin-bottom: 40px">
            <button type="button" class="close-x" data-dismiss="alert" aria-hidden="true">
                ×
            </button>
            <h3 class="verify-title"><i class="fa fa-check-circle" style="margin-right: 20px;"></i>{{ session('updated_profile') }}</h3>
        </div>
   @endif


    <div class="card-box">
        <h4 class="m-t-0 header-title text-center"><b>@lang('school_profile.title')</b></h4>
        <p class="text-muted m-b-30 font-13 text-center">
            @lang('school_profile.subtitle')
        </p>
        <div class="row">
            <form class="form-horizontal m-t-20" method="POST" action="/panel/school/profile/<?php echo e($school->id); ?>" accept-charset="UTF-8" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <div class="form-group" align="center">
                    <img src="<?php echo e($logo); ?>" class="school-logo">
                    <div class="clearfix up30"></div>
                     @include('panel.partials.body.uploadImage', ['text' => app('translator')->getFromJson('school_profile.avatar'), 'type' => 'logo'])
                </div>


                <div class="col-xs-12">

                    <div class="title">
                        @lang('school_profile.contact')
                    </div>
                    <!-- change foreach -->
                    <div class="input-container col-xs-12 col-sm-6 col-xl-3">
                        <?php $__currentLoopData = $schoolTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schoolType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($schoolType->id == $school->type_id ): ?>
                        <input type="text" label="@lang('school_profile.type')" name="type" class="demo-form ad-input" value="<?php echo e($schoolType->name); ?>" disabled>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <i class="icon-inp fa fa-university"></i>
                    </div>

                    <div class="input-container col-xs-12 col-sm-6 col-xl-3">
                        <input type="text" label="@lang('school_profile.email')" name="email" class="demo-form ad-input" value="<?php echo e(auth()->user()->email); ?>" disabled>
                        <i class="icon-inp fa fa-envelope"></i>
                    </div>

                    <div class="input-container col-xs-12 col-sm-6 col-xl-3">
                        <input type="text" label="@lang('school_profile.name')" name="name" class="demo-form ad-input" value="<?php echo e($school->name()); ?>">
                        <i class="icon-inp fa fa-university"></i>
                    </div>

                    <div class="input-container col-xs-12 col-sm-6 col-xl-3">
                            <input type="text" label="@lang('school_profile.public_email')" name="public_email" class="demo-form ad-input" value="{{ $school->public_email ?? auth()->user()->email }}">
                            <i class="icon-inp fa fa-envelope"></i>
                        </div>

                    <div class=" input-container col-xs-12 col-sm-6 col-xl-3">
                        <input type="text" label="@lang('school_profile.website')" name="website" class="demo-form ad-input" value="<?php echo e($school->website); ?>" >
                        <i class="icon-inp fa fa-globe"></i>
                    </div>

                    <div class=" input-container col-xs-12 col-sm-6 col-xl-3">
                        <input  id="autocompleteCity"  placeholder=""
                                type="text" label="@lang('school_profile.city')" name="city" class="demo-form ad-input" value="<?php echo e($school->city); ?>">
                        <i class="icon-inp fa fa-map-marker"></i>
                    </div>

                    <div class=" input-container col-xs-12 col-sm-6 col-xl-3">
                        <input id="autocompleteAddress" placeholder=""
                               type="text" label="@lang('school_profile.address')" name="address" class="demo-form ad-input" value="<?php echo e($school->address); ?>">
                        <i class="icon-inp fa fa-home"></i>
                    </div>

                    <div class=" input-container col-xs-12 col-sm-6 col-xl-3">
                        <input type="text" label="@lang('school_profile.phone')" name="phone" class="demo-form ad-input" value="<?php echo e($school->phone); ?>">
                        <i class="icon-inp fa fa-phone"></i>
                    </div>

                    <div class=" input-container col-xs-12 col-sm-6 col-xl-3 ">
                        <input type="text" label="@lang('school_profile.manager')" name="user_name" class="demo-form ad-input" value="<?php echo e(auth()->user()->name); ?>">
                        <i class="icon-inp fa fa-user"></i>
                    </div>

                    <div class="up clearfix"></div>
                    <div class="title">
                        @lang('school_profile.social')
                    </div>

                    <div class=" input-container col-xs-12 col-sm-6 col-xl-3 " style="">
                        <input type="text" label="facebook" name="facebook" class="demo-form ad-input" value="{{ $links->pluck('name')->contains('facebook') ? $links->where('name', 'facebook')->first()->link : '' }}" style="">
                        <i class="icon-inp fa fa-facebook"></i>
                    </div>
                    <div class="input-container col-xs-12 col-sm-6 col-xl-3 ">
                        <input type="text" label="twitter" name="twitter" class="demo-form ad-input" value="{{ $links->pluck('name')->contains('twitter') ? $links->where('name', 'twitter')->first()->link : '' }}">
                        <i class="icon-inp fa fa-twitter"></i>
                    </div>
                    <div class=" input-container col-xs-12 col-sm-6 col-xl-3 ">
                        <input type="text" label="Instagram" name="instagram" class="demo-form ad-input" value="{{ $links->pluck('name')->contains('instagram') ? $links->where('name', 'instagram')->first()->link : '' }}">
                        <i class="icon-inp fa fa-instagram"></i>
                    </div>
                    <div class=" input-container col-xs-12 col-sm-6 col-xl-3 ">
                        <input type="text" label="YouTube" name="youtube" class="demo-form ad-input" value="{{ $links->pluck('name')->contains('youtube') ? $links->where('name', 'youtube')->first()->link : '' }}">
                        <i class="icon-inp fa fa-youtube"></i>
                    </div>
                    <div class=" input-container col-xs-12 col-sm-6 col-xl-3 ">
                        <input type="text" label="skype" name="skype" class="demo-form ad-input" value="{{ $links->pluck('name')->contains('skype') ? $links->where('name', 'skype')->first()->link : '' }}">
                        <i class="icon-inp fa fa-skype"></i>
                    </div>  
                    <div class=" input-container col-xs-12 col-sm-6 col-xl-3 ">
                        <input type="text" label="Google+" name="google" class="demo-form ad-input" value="{{ $links->pluck('name')->contains('google') ? $links->where('name', 'google')->first()->link : '' }}">
                        <i class="icon-inp fa fa-google-plus"></i>
                    </div>
                    <div class=" input-container col-xs-12 col-sm-6 col-xl-3 ">
                        <input type="text" label="Linked in" name="linkedin" class="demo-form ad-input" value="{{ $links->pluck('name')->contains('linkedin') ? $links->where('name', 'linkedin')->first()->link : '' }}">
                        <i class="icon-inp fa fa-linkedin"></i>
                    </div>
                </div>



                <div class="col-xs-12 about-container">
                    <div class="form-group">
                        <p><?php echo e($school->name()); ?>: <span class="tiny-text">@lang('school_profile.about')</p>
                        <textarea value="" name="about"><?php echo e($school->about); ?></textarea>
                        <!-- Height change on scrpit @ tinymce.init-->
                    </div>
                </div>



                <div class="clearfix"></div>
                <div class="text-centered">

                    <div class="multiselectContainer" >
                        <div class="tagText">
                            @lang('school_profile.tags')
                        </div>
                        <multi class="multiSel"></multi>
                    </div>


                    <div class="col-xs-6 col-sm-3 centered-text">
                        <button class="btn btn-primary btn-submit" type="submit">
                            <i class="fa fa-save m-r-10" ></i>
                            @lang('school_profile.button')
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



<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('panel.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<script>
    var input = document.getElementById('autocompleteCity');
    var city = new google.maps.places.Autocomplete(input, {
         types: ['(cities)']
        ,  componentRestrictions: {country: 'GR'}
    });

    var input2 = document.getElementById('autocompleteAddress');
    var address = new google.maps.places.Autocomplete(input2, {
        types: ["geocode"]
        ,  componentRestrictions: {country: 'GR'}
    });



</script>
