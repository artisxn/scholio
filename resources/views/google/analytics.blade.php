<!-- Global site tag (gtag.js) - Google Analytics -->
@if(!App::environment('local'))
<script async src="/js/analytics.js"></script>
<script async>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-118487911-1');
</script>
@endif