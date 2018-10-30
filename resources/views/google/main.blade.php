<script type=”application/ld+json”>
{
  "@context": "http://schema.org",
  "@type": "WebSite",
  "url": "https://schol.io",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://schol.io/public/schools?q={q}",
    "query-input": "required name=q"
  }
}
</script>


@include('google.analytics')
@include('cookieConsent::index')
<meta name="theme-color" content="#004a6b"/>
<!-- <link rel="manifest" href="/manifest.json"> -->
<!-- DEEAED -->

@if(request()->path() == '/' && false)
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/el_GR/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution="setup_tool"
  page_id="934370089973049"
  theme_color="#008da5"
  logged_in_greeting="Γεια σας, πως μπορουμε να σας βοηθήσουμε;"
  logged_out_greeting="Γεια σας, πως μπορουμε να σας βοηθήσουμε;">
</div>
@endif

<style>
  .cookie-consent{
    position: fixed;
    width: 100%;
    bottom: 0;
    right: 0;
    left: 0;
    height: 60px;
    text-align: center;
    color: white;
    background-color: #999;
    /*background-color: #FD6A33;*/
    z-index: 100;
    opacity: 0.9;
  }

  .cookie-consent__message{
    margin-top: 20px;
    display: inline-block;
    margin-right: 20px;
  }

  .cookie-consent__agree{
    background-color: #777;
    padding: 8px 20px;
    border-radius: 5px;
    border: none;
  }

  @media(max-width: 480px){
    .cookie-consent{
      height: 120px;
    }

    .cookie-consent__message{
      margin-bottom: 10px;
    }
  }
</style>


<!-- @include('google.meta') -->
