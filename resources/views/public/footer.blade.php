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
                <a href="https://blog.schol.io/contact/" target="_blank" class="sc-t-white margin-right-20 social-link">@lang('main.footer.contact')</a>
                <span class="pad-top-10 pad-bot-10 clear-fix margin-right-20 ">  <a href="https://blog.schol.io/" target="_blank" rel="noopener" class="sc-t-white social-link">@lang('main.footer.blog')</a></span>
                <span class="pad-top-10 pad-bot-10 clear-fix margin-right-20 ">  <a href="{{ url('terms') }}" class="sc-t-white social-link">@lang('main.footer.terms')</a></span>
                <span class="pad-top-10 pad-bot-10 clear-fix margin-right-20 ">                   <a href="{{ url('gdpr') }}" class="sc-t-white social-link">@lang('main.footer.gdpr')</a></span><br>
                {{-- <span class="pad-top-10 pad-bot-10 clear-fix margin-right-20 ">                   <a href="{{ url('s/schools') }}" class="sc-t-white social-link">@lang('main.footer.schools')</a></span> --}}
                {{-- <span class="pad-top-10 pad-bot-10 clear-fix">                   <a href="{{ url('s/scholarships') }}" class="sc-t-white social-link">@lang('main.footer.scholarships')</a></span> --}}

            </div>

            <div class="pull-right pad-top-45 text-incr-175  pad-right-20">
                <a href="mailto:scholioApp@gmail.com" target="_top"class="sc-t-white social-link"> <i class="fa fa-envelope-o" aria-hidden="true"></i>  </a>
                <span>  <a href="https://www.facebook.com/scholioapp/" target="_blank" rel="noopener" class="sc-t-white margin-left-20 social-link"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>
                <span>  <a href="https://twitter.com/ScholioApp" target="_blank"  rel="noopener"class="sc-t-white margin-left-20 social-link"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
                <div style="width: 20px; height: 10px;"></div>
                <span>  <a href="https://www.linkedin.com/company/18063117/" target="_blank" rel="noopener" class="sc-t-white social-link"><i class="fa fa-linkedin" aria-hidden="true"></i></a></span>
                <span>  <a href="https://www.instagram.com/schol.io/" target="_blank" rel="noopener" class="sc-t-white margin-left-20 social-link"><i class="fa fa-instagram" aria-hidden="true"></i></a></span>
                <span>  <a href="https://www.youtube.com/channel/UCvjhFZreE17xlGyBewKpYoA/" class="sc-t-white margin-left-20 social-link"><i class="fa fa-youtube" aria-hidden="true"></i></a></span>
            </div>
        </div>

        <div class=" centered-text margin-bot-50">
            <p class="sc-t-white margin-top-50">@lang('main.footer.message')</p>
            {{--<img height="27px" class="margin-top-20" src="/new/img/laravel-small2.png">--}}
            {{--<img height="31px" class="margin-top-20 margin-left-20 margin-right-20" src="/new/img/angularjs-logo.png">--}}
            {{--<img height="30px" class="margin-top-20" src="/new/img/algolia_small.png">--}}


        </div>

        <div class="entered-text margin-bot-50">
            <p class="sc-t-white margin-top-50">
                <a href="https://scholio.test/public/schools?q=%CE%9A%CE%BF%CE%BB%CE%BB%CE%AD%CE%B3%CE%B9%CE%B1%20%CE%98%CE%B5%CF%83%CF%83%CE%B1%CE%BB%CE%BF%CE%BD%CE%B9%CE%BA%CE%B7">Κολλεγια Θεσσαλονικη</a><br>
                <a href="https://scholio.test/public/schools?q=%CE%9A%CE%BF%CE%BB%CE%BB%CE%B5%CE%B3%CE%B9%CE%B1%20%CE%91%CE%B8%CE%B7%CE%BD%CE%B1">Κολλεγια Αθηνα</a><br>
            </p>
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
