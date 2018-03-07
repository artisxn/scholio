<style>
    .left-section{padding-left: 10px;}
    @media(max-width: 992px){
        .left-section{padding-left: 20px;}
    }
    .social-link:visited,.social-link:active,.social-link:focus{color: #fff}
    .social-link:hover{color: #FD6A33}

</style>



<footer id="" class="sc-landing-footer sc-dark-blue">

    <div class="container">
        <div class="row" >
            <div class="pull-left pad-top-50 text-incr-125 left-section" >
                <a href="#" class="sc-t-white margin-right-20 social-link">@lang('main.footer.contact')</a>
                <span  class="pad-top-10 pad-bot-10 clear-fix">  <a href="http://scholio.netlify.com/" target="_blank" class="sc-t-white margin-right-20 social-link">@lang('main.footer.blog')</a></span>
                <span class="">  <a href="{{ url('terms') }}" class="sc-t-white social-link">@lang('main.footer.terms')</a></span>
            </div>

            <div class="pull-right pad-top-45 text-incr-175  pad-right-20">
                <a href="mailto:scholioApp@gmail.com" target="_top"class="sc-t-white social-link"> <i class="fa fa-envelope-o" aria-hidden="true"></i>  </a>
                <span>  <a href="https://www.facebook.com/scholioapp/" target="_blank" class="sc-t-white margin-left-20 social-link"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>
                <span>  <a href="https://twitter.com/ScholioApp" target="_blank" class="sc-t-white margin-left-20 social-link"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
                <div style="width: 20px; height: 10px;"></div>
                <span>  <a href="https://www.linkedin.com/company/18063117/" target="_blank" class="sc-t-white social-link"><i class="fa fa-linkedin" aria-hidden="true"></i></a></span>
                <span>  <a href="https://www.instagram.com/schol.io/" target="_blank" class="sc-t-white margin-left-20 social-link"><i class="fa fa-instagram" aria-hidden="true"></i></a></span>
                <span>  <a href="#" class="sc-t-white margin-left-20 social-link"><i class="fa fa-youtube" aria-hidden="true"></i></a></span>
            </div>
        </div>

        <div class=" centered-text margin-bot-50">
            <p class="sc-t-white margin-top-50">@lang('main.footer.message')</p>
            {{--<img height="27px" class="margin-top-20" src="/new/img/laravel-small2.png">--}}
            {{--<img height="31px" class="margin-top-20 margin-left-20 margin-right-20" src="/new/img/angularjs-logo.png">--}}
            {{--<img height="30px" class="margin-top-20" src="/new/img/algolia_small.png">--}}


        </div>
    </div>
</footer>


<script>
function changeLang(el){
        var form = document.getElementById('langForm');
        form.action = '/lang/'+el.value;
        form.submit();
    }
</script>

<script>
    window.lang = <?php
    function rsearch($folder, $pattern) {
        $dir = new RecursiveDirectoryIterator($folder);
        $ite = new RecursiveIteratorIterator($dir);
        $files = new RegexIterator($ite, $pattern, RegexIterator:: GET_MATCH);
        $fileList = array();
        foreach($files as $file) {
            $fileList = array_merge($fileList, $file);
        }
        return $fileList;
    }

    $files = rsearch(resource_path(). '/lang/'.App::getLocale(). '/', '#^(?:[A-Z]:)?(?:/(?!\.Trash)[^/]+)+/[^/]+\.(?:php)$#Di');
    $trans = [];
    $txt = [];
    $test = [];
    foreach($files as $t) {
        $dirname = explode(resource_path(). '/lang/'.App::getLocale(), pathinfo($t)['dirname']);
        $filename = pathinfo($t)['filename'];
        if ($dirname[1] == '') {
            $trans[$filename] = trans($dirname[1]. '/'.$filename);
        } else {
            $directory = substr($dirname[1], 1, strlen($dirname[1]));
            $trans[$directory][$filename] = trans($directory. '/'.$filename);
            // $trans[$directory . '.' . $filename] = trans($directory . '/' . $filename);
        }

    }

    echo json_encode($trans);
    ?>
</script>
