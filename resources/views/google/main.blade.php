@include('google.analytics')
<meta name="theme-color" content="#008da5">
<!-- DEEAED -->


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


<!-- @include('google.meta') -->