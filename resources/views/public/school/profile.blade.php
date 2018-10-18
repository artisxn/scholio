<!DOCTYPE html>
<html lang="en">

<head>
    <meta property="fb:app_id" content="1167687200016783" />
    <meta property="og:url" content="{{'https://schol.io/@' . $school->admin->username}}" />
    <meta property="og:title" content="Schol.io - {{ $school->name() }}" />
    <meta property="og:description" content="{{$school->city}} | {{$school->phone}}" />
    <meta property="og:image" content="{{url($school->profileImage())}}" />
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="400">
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{asset('new/img/test-black.png')}}" type="image/x-icon" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0">
    <!-- prevent zoomIn in mobile inputs,selects,etc -->

    <meta name="keywords" content="{{ $school->name() }}, {{ $school->city }}, {{ $school->type->name }}">
    <title>{{ $school->name() }} - schol.io</title>
    <meta name="description" content="Schol.io - {{ $school->name() }}, {{ $school->city }}, {{ $school->type->name }}">

    <!-- Above the fold content -->


    <!--====== CSS  Styles =======-->
    
<!-- Favicon -->
<link rel="shortcut icon" href="{{asset('new/img/test-black.png')}}" type="image/x-icon" />


<!-- Bootstrap -->
<!-- <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"> -->

<!-- font-awesome -->
<!-- <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css"> -->


<!-- Main CSS -->
<!-- <link href="{{asset('new/css/main.css')}}" rel="stylesheet"> -->

    <!-- BX Slider CSS -->
    <!-- <link href="/new/css/jquery.bxslider.css" rel="stylesheet"> -->

    <!-- Profile  CSS -->
    <!-- <link href="/new/css/profile.css" rel="stylesheet"> -->

    <!-- Horizontal Ribbons  CSS -->
    <!-- <link href="/new/css/ribbonHorizontal.css" rel="stylesheet"> -->

    <!-- Hexagon CSS -->
    <!-- <link href="/new/css/Hexagon.css" rel="stylesheet"> -->

    <!-- jQuery js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script>
        window.Scholio = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <style>
            /*!
            *  Font Awesome 4.7.0 by @davegandy - http://fontawesome.io - @fontawesome
            *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
            */@font-face{font-family:'FontAwesome';src:url('../fonts/fontawesome-webfont.eot?v=4.7.0');src:url('../fonts/fontawesome-webfont.eot?#iefix&v=4.7.0') format('embedded-opentype'),url('../fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'),url('../fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'),url('../fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'),url('../fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');font-weight:normal;font-style:normal}.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.fa-lg{font-size:1.33333333em;line-height:.75em;vertical-align:-15%}.fa-2x{font-size:2em}.fa-3x{font-size:3em}.fa-4x{font-size:4em}.fa-5x{font-size:5em}.fa-fw{width:1.28571429em;text-align:center}.fa-ul{padding-left:0;margin-left:2.14285714em;list-style-type:none}.fa-ul>li{position:relative}.fa-li{position:absolute;left:-2.14285714em;width:2.14285714em;top:.14285714em;text-align:center}.fa-li.fa-lg{left:-1.85714286em}.fa-border{padding:.2em .25em .15em;border:solid .08em #eee;border-radius:.1em}.fa-pull-left{float:left}.fa-pull-right{float:right}.fa.fa-pull-left{margin-right:.3em}.fa.fa-pull-right{margin-left:.3em}.pull-right{float:right}.pull-left{float:left}.fa.pull-left{margin-right:.3em}.fa.pull-right{margin-left:.3em}.fa-spin{-webkit-animation:fa-spin 2s infinite linear;animation:fa-spin 2s infinite linear}.fa-pulse{-webkit-animation:fa-spin 1s infinite steps(8);animation:fa-spin 1s infinite steps(8)}@-webkit-keyframes fa-spin{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}@keyframes fa-spin{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}.fa-rotate-90{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg)}.fa-rotate-180{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";-webkit-transform:rotate(180deg);-ms-transform:rotate(180deg);transform:rotate(180deg)}.fa-rotate-270{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";-webkit-transform:rotate(270deg);-ms-transform:rotate(270deg);transform:rotate(270deg)}.fa-flip-horizontal{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";-webkit-transform:scale(-1, 1);-ms-transform:scale(-1, 1);transform:scale(-1, 1)}.fa-flip-vertical{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";-webkit-transform:scale(1, -1);-ms-transform:scale(1, -1);transform:scale(1, -1)}:root .fa-rotate-90,:root .fa-rotate-180,:root .fa-rotate-270,:root .fa-flip-horizontal,:root .fa-flip-vertical{filter:none}.fa-stack{position:relative;display:inline-block;width:2em;height:2em;line-height:2em;vertical-align:middle}.fa-stack-1x,.fa-stack-2x{position:absolute;left:0;width:100%;text-align:center}.fa-stack-1x{line-height:inherit}.fa-stack-2x{font-size:2em}.fa-inverse{color:#fff}.fa-glass:before{content:"\f000"}.fa-music:before{content:"\f001"}.fa-search:before{content:"\f002"}.fa-envelope-o:before{content:"\f003"}.fa-heart:before{content:"\f004"}.fa-star:before{content:"\f005"}.fa-star-o:before{content:"\f006"}.fa-user:before{content:"\f007"}.fa-film:before{content:"\f008"}.fa-th-large:before{content:"\f009"}.fa-th:before{content:"\f00a"}.fa-th-list:before{content:"\f00b"}.fa-check:before{content:"\f00c"}.fa-remove:before,.fa-close:before,.fa-times:before{content:"\f00d"}.fa-search-plus:before{content:"\f00e"}.fa-search-minus:before{content:"\f010"}.fa-power-off:before{content:"\f011"}.fa-signal:before{content:"\f012"}.fa-gear:before,.fa-cog:before{content:"\f013"}.fa-trash-o:before{content:"\f014"}.fa-home:before{content:"\f015"}.fa-file-o:before{content:"\f016"}.fa-clock-o:before{content:"\f017"}.fa-road:before{content:"\f018"}.fa-download:before{content:"\f019"}.fa-arrow-circle-o-down:before{content:"\f01a"}.fa-arrow-circle-o-up:before{content:"\f01b"}.fa-inbox:before{content:"\f01c"}.fa-play-circle-o:before{content:"\f01d"}.fa-rotate-right:before,.fa-repeat:before{content:"\f01e"}.fa-refresh:before{content:"\f021"}.fa-list-alt:before{content:"\f022"}.fa-lock:before{content:"\f023"}.fa-flag:before{content:"\f024"}.fa-headphones:before{content:"\f025"}.fa-volume-off:before{content:"\f026"}.fa-volume-down:before{content:"\f027"}.fa-volume-up:before{content:"\f028"}.fa-qrcode:before{content:"\f029"}.fa-barcode:before{content:"\f02a"}.fa-tag:before{content:"\f02b"}.fa-tags:before{content:"\f02c"}.fa-book:before{content:"\f02d"}.fa-bookmark:before{content:"\f02e"}.fa-print:before{content:"\f02f"}.fa-camera:before{content:"\f030"}.fa-font:before{content:"\f031"}.fa-bold:before{content:"\f032"}.fa-italic:before{content:"\f033"}.fa-text-height:before{content:"\f034"}.fa-text-width:before{content:"\f035"}.fa-align-left:before{content:"\f036"}.fa-align-center:before{content:"\f037"}.fa-align-right:before{content:"\f038"}.fa-align-justify:before{content:"\f039"}.fa-list:before{content:"\f03a"}.fa-dedent:before,.fa-outdent:before{content:"\f03b"}.fa-indent:before{content:"\f03c"}.fa-video-camera:before{content:"\f03d"}.fa-photo:before,.fa-image:before,.fa-picture-o:before{content:"\f03e"}.fa-pencil:before{content:"\f040"}.fa-map-marker:before{content:"\f041"}.fa-adjust:before{content:"\f042"}.fa-tint:before{content:"\f043"}.fa-edit:before,.fa-pencil-square-o:before{content:"\f044"}.fa-share-square-o:before{content:"\f045"}.fa-check-square-o:before{content:"\f046"}.fa-arrows:before{content:"\f047"}.fa-step-backward:before{content:"\f048"}.fa-fast-backward:before{content:"\f049"}.fa-backward:before{content:"\f04a"}.fa-play:before{content:"\f04b"}.fa-pause:before{content:"\f04c"}.fa-stop:before{content:"\f04d"}.fa-forward:before{content:"\f04e"}.fa-fast-forward:before{content:"\f050"}.fa-step-forward:before{content:"\f051"}.fa-eject:before{content:"\f052"}.fa-chevron-left:before{content:"\f053"}.fa-chevron-right:before{content:"\f054"}.fa-plus-circle:before{content:"\f055"}.fa-minus-circle:before{content:"\f056"}.fa-times-circle:before{content:"\f057"}.fa-check-circle:before{content:"\f058"}.fa-question-circle:before{content:"\f059"}.fa-info-circle:before{content:"\f05a"}.fa-crosshairs:before{content:"\f05b"}.fa-times-circle-o:before{content:"\f05c"}.fa-check-circle-o:before{content:"\f05d"}.fa-ban:before{content:"\f05e"}.fa-arrow-left:before{content:"\f060"}.fa-arrow-right:before{content:"\f061"}.fa-arrow-up:before{content:"\f062"}.fa-arrow-down:before{content:"\f063"}.fa-mail-forward:before,.fa-share:before{content:"\f064"}.fa-expand:before{content:"\f065"}.fa-compress:before{content:"\f066"}.fa-plus:before{content:"\f067"}.fa-minus:before{content:"\f068"}.fa-asterisk:before{content:"\f069"}.fa-exclamation-circle:before{content:"\f06a"}.fa-gift:before{content:"\f06b"}.fa-leaf:before{content:"\f06c"}.fa-fire:before{content:"\f06d"}.fa-eye:before{content:"\f06e"}.fa-eye-slash:before{content:"\f070"}.fa-warning:before,.fa-exclamation-triangle:before{content:"\f071"}.fa-plane:before{content:"\f072"}.fa-calendar:before{content:"\f073"}.fa-random:before{content:"\f074"}.fa-comment:before{content:"\f075"}.fa-magnet:before{content:"\f076"}.fa-chevron-up:before{content:"\f077"}.fa-chevron-down:before{content:"\f078"}.fa-retweet:before{content:"\f079"}.fa-shopping-cart:before{content:"\f07a"}.fa-folder:before{content:"\f07b"}.fa-folder-open:before{content:"\f07c"}.fa-arrows-v:before{content:"\f07d"}.fa-arrows-h:before{content:"\f07e"}.fa-bar-chart-o:before,.fa-bar-chart:before{content:"\f080"}.fa-twitter-square:before{content:"\f081"}.fa-facebook-square:before{content:"\f082"}.fa-camera-retro:before{content:"\f083"}.fa-key:before{content:"\f084"}.fa-gears:before,.fa-cogs:before{content:"\f085"}.fa-comments:before{content:"\f086"}.fa-thumbs-o-up:before{content:"\f087"}.fa-thumbs-o-down:before{content:"\f088"}.fa-star-half:before{content:"\f089"}.fa-heart-o:before{content:"\f08a"}.fa-sign-out:before{content:"\f08b"}.fa-linkedin-square:before{content:"\f08c"}.fa-thumb-tack:before{content:"\f08d"}.fa-external-link:before{content:"\f08e"}.fa-sign-in:before{content:"\f090"}.fa-trophy:before{content:"\f091"}.fa-github-square:before{content:"\f092"}.fa-upload:before{content:"\f093"}.fa-lemon-o:before{content:"\f094"}.fa-phone:before{content:"\f095"}.fa-square-o:before{content:"\f096"}.fa-bookmark-o:before{content:"\f097"}.fa-phone-square:before{content:"\f098"}.fa-twitter:before{content:"\f099"}.fa-facebook-f:before,.fa-facebook:before{content:"\f09a"}.fa-github:before{content:"\f09b"}.fa-unlock:before{content:"\f09c"}.fa-credit-card:before{content:"\f09d"}.fa-feed:before,.fa-rss:before{content:"\f09e"}.fa-hdd-o:before{content:"\f0a0"}.fa-bullhorn:before{content:"\f0a1"}.fa-bell:before{content:"\f0f3"}.fa-certificate:before{content:"\f0a3"}.fa-hand-o-right:before{content:"\f0a4"}.fa-hand-o-left:before{content:"\f0a5"}.fa-hand-o-up:before{content:"\f0a6"}.fa-hand-o-down:before{content:"\f0a7"}.fa-arrow-circle-left:before{content:"\f0a8"}.fa-arrow-circle-right:before{content:"\f0a9"}.fa-arrow-circle-up:before{content:"\f0aa"}.fa-arrow-circle-down:before{content:"\f0ab"}.fa-globe:before{content:"\f0ac"}.fa-wrench:before{content:"\f0ad"}.fa-tasks:before{content:"\f0ae"}.fa-filter:before{content:"\f0b0"}.fa-briefcase:before{content:"\f0b1"}.fa-arrows-alt:before{content:"\f0b2"}.fa-group:before,.fa-users:before{content:"\f0c0"}.fa-chain:before,.fa-link:before{content:"\f0c1"}.fa-cloud:before{content:"\f0c2"}.fa-flask:before{content:"\f0c3"}.fa-cut:before,.fa-scissors:before{content:"\f0c4"}.fa-copy:before,.fa-files-o:before{content:"\f0c5"}.fa-paperclip:before{content:"\f0c6"}.fa-save:before,.fa-floppy-o:before{content:"\f0c7"}.fa-square:before{content:"\f0c8"}.fa-navicon:before,.fa-reorder:before,.fa-bars:before{content:"\f0c9"}.fa-list-ul:before{content:"\f0ca"}.fa-list-ol:before{content:"\f0cb"}.fa-strikethrough:before{content:"\f0cc"}.fa-underline:before{content:"\f0cd"}.fa-table:before{content:"\f0ce"}.fa-magic:before{content:"\f0d0"}.fa-truck:before{content:"\f0d1"}.fa-pinterest:before{content:"\f0d2"}.fa-pinterest-square:before{content:"\f0d3"}.fa-google-plus-square:before{content:"\f0d4"}.fa-google-plus:before{content:"\f0d5"}.fa-money:before{content:"\f0d6"}.fa-caret-down:before{content:"\f0d7"}.fa-caret-up:before{content:"\f0d8"}.fa-caret-left:before{content:"\f0d9"}.fa-caret-right:before{content:"\f0da"}.fa-columns:before{content:"\f0db"}.fa-unsorted:before,.fa-sort:before{content:"\f0dc"}.fa-sort-down:before,.fa-sort-desc:before{content:"\f0dd"}.fa-sort-up:before,.fa-sort-asc:before{content:"\f0de"}.fa-envelope:before{content:"\f0e0"}.fa-linkedin:before{content:"\f0e1"}.fa-rotate-left:before,.fa-undo:before{content:"\f0e2"}.fa-legal:before,.fa-gavel:before{content:"\f0e3"}.fa-dashboard:before,.fa-tachometer:before{content:"\f0e4"}.fa-comment-o:before{content:"\f0e5"}.fa-comments-o:before{content:"\f0e6"}.fa-flash:before,.fa-bolt:before{content:"\f0e7"}.fa-sitemap:before{content:"\f0e8"}.fa-umbrella:before{content:"\f0e9"}.fa-paste:before,.fa-clipboard:before{content:"\f0ea"}.fa-lightbulb-o:before{content:"\f0eb"}.fa-exchange:before{content:"\f0ec"}.fa-cloud-download:before{content:"\f0ed"}.fa-cloud-upload:before{content:"\f0ee"}.fa-user-md:before{content:"\f0f0"}.fa-stethoscope:before{content:"\f0f1"}.fa-suitcase:before{content:"\f0f2"}.fa-bell-o:before{content:"\f0a2"}.fa-coffee:before{content:"\f0f4"}.fa-cutlery:before{content:"\f0f5"}.fa-file-text-o:before{content:"\f0f6"}.fa-building-o:before{content:"\f0f7"}.fa-hospital-o:before{content:"\f0f8"}.fa-ambulance:before{content:"\f0f9"}.fa-medkit:before{content:"\f0fa"}.fa-fighter-jet:before{content:"\f0fb"}.fa-beer:before{content:"\f0fc"}.fa-h-square:before{content:"\f0fd"}.fa-plus-square:before{content:"\f0fe"}.fa-angle-double-left:before{content:"\f100"}.fa-angle-double-right:before{content:"\f101"}.fa-angle-double-up:before{content:"\f102"}.fa-angle-double-down:before{content:"\f103"}.fa-angle-left:before{content:"\f104"}.fa-angle-right:before{content:"\f105"}.fa-angle-up:before{content:"\f106"}.fa-angle-down:before{content:"\f107"}.fa-desktop:before{content:"\f108"}.fa-laptop:before{content:"\f109"}.fa-tablet:before{content:"\f10a"}.fa-mobile-phone:before,.fa-mobile:before{content:"\f10b"}.fa-circle-o:before{content:"\f10c"}.fa-quote-left:before{content:"\f10d"}.fa-quote-right:before{content:"\f10e"}.fa-spinner:before{content:"\f110"}.fa-circle:before{content:"\f111"}.fa-mail-reply:before,.fa-reply:before{content:"\f112"}.fa-github-alt:before{content:"\f113"}.fa-folder-o:before{content:"\f114"}.fa-folder-open-o:before{content:"\f115"}.fa-smile-o:before{content:"\f118"}.fa-frown-o:before{content:"\f119"}.fa-meh-o:before{content:"\f11a"}.fa-gamepad:before{content:"\f11b"}.fa-keyboard-o:before{content:"\f11c"}.fa-flag-o:before{content:"\f11d"}.fa-flag-checkered:before{content:"\f11e"}.fa-terminal:before{content:"\f120"}.fa-code:before{content:"\f121"}.fa-mail-reply-all:before,.fa-reply-all:before{content:"\f122"}.fa-star-half-empty:before,.fa-star-half-full:before,.fa-star-half-o:before{content:"\f123"}.fa-location-arrow:before{content:"\f124"}.fa-crop:before{content:"\f125"}.fa-code-fork:before{content:"\f126"}.fa-unlink:before,.fa-chain-broken:before{content:"\f127"}.fa-question:before{content:"\f128"}.fa-info:before{content:"\f129"}.fa-exclamation:before{content:"\f12a"}.fa-superscript:before{content:"\f12b"}.fa-subscript:before{content:"\f12c"}.fa-eraser:before{content:"\f12d"}.fa-puzzle-piece:before{content:"\f12e"}.fa-microphone:before{content:"\f130"}.fa-microphone-slash:before{content:"\f131"}.fa-shield:before{content:"\f132"}.fa-calendar-o:before{content:"\f133"}.fa-fire-extinguisher:before{content:"\f134"}.fa-rocket:before{content:"\f135"}.fa-maxcdn:before{content:"\f136"}.fa-chevron-circle-left:before{content:"\f137"}.fa-chevron-circle-right:before{content:"\f138"}.fa-chevron-circle-up:before{content:"\f139"}.fa-chevron-circle-down:before{content:"\f13a"}.fa-html5:before{content:"\f13b"}.fa-css3:before{content:"\f13c"}.fa-anchor:before{content:"\f13d"}.fa-unlock-alt:before{content:"\f13e"}.fa-bullseye:before{content:"\f140"}.fa-ellipsis-h:before{content:"\f141"}.fa-ellipsis-v:before{content:"\f142"}.fa-rss-square:before{content:"\f143"}.fa-play-circle:before{content:"\f144"}.fa-ticket:before{content:"\f145"}.fa-minus-square:before{content:"\f146"}.fa-minus-square-o:before{content:"\f147"}.fa-level-up:before{content:"\f148"}.fa-level-down:before{content:"\f149"}.fa-check-square:before{content:"\f14a"}.fa-pencil-square:before{content:"\f14b"}.fa-external-link-square:before{content:"\f14c"}.fa-share-square:before{content:"\f14d"}.fa-compass:before{content:"\f14e"}.fa-toggle-down:before,.fa-caret-square-o-down:before{content:"\f150"}.fa-toggle-up:before,.fa-caret-square-o-up:before{content:"\f151"}.fa-toggle-right:before,.fa-caret-square-o-right:before{content:"\f152"}.fa-euro:before,.fa-eur:before{content:"\f153"}.fa-gbp:before{content:"\f154"}.fa-dollar:before,.fa-usd:before{content:"\f155"}.fa-rupee:before,.fa-inr:before{content:"\f156"}.fa-cny:before,.fa-rmb:before,.fa-yen:before,.fa-jpy:before{content:"\f157"}.fa-ruble:before,.fa-rouble:before,.fa-rub:before{content:"\f158"}.fa-won:before,.fa-krw:before{content:"\f159"}.fa-bitcoin:before,.fa-btc:before{content:"\f15a"}.fa-file:before{content:"\f15b"}.fa-file-text:before{content:"\f15c"}.fa-sort-alpha-asc:before{content:"\f15d"}.fa-sort-alpha-desc:before{content:"\f15e"}.fa-sort-amount-asc:before{content:"\f160"}.fa-sort-amount-desc:before{content:"\f161"}.fa-sort-numeric-asc:before{content:"\f162"}.fa-sort-numeric-desc:before{content:"\f163"}.fa-thumbs-up:before{content:"\f164"}.fa-thumbs-down:before{content:"\f165"}.fa-youtube-square:before{content:"\f166"}.fa-youtube:before{content:"\f167"}.fa-xing:before{content:"\f168"}.fa-xing-square:before{content:"\f169"}.fa-youtube-play:before{content:"\f16a"}.fa-dropbox:before{content:"\f16b"}.fa-stack-overflow:before{content:"\f16c"}.fa-instagram:before{content:"\f16d"}.fa-flickr:before{content:"\f16e"}.fa-adn:before{content:"\f170"}.fa-bitbucket:before{content:"\f171"}.fa-bitbucket-square:before{content:"\f172"}.fa-tumblr:before{content:"\f173"}.fa-tumblr-square:before{content:"\f174"}.fa-long-arrow-down:before{content:"\f175"}.fa-long-arrow-up:before{content:"\f176"}.fa-long-arrow-left:before{content:"\f177"}.fa-long-arrow-right:before{content:"\f178"}.fa-apple:before{content:"\f179"}.fa-windows:before{content:"\f17a"}.fa-android:before{content:"\f17b"}.fa-linux:before{content:"\f17c"}.fa-dribbble:before{content:"\f17d"}.fa-skype:before{content:"\f17e"}.fa-foursquare:before{content:"\f180"}.fa-trello:before{content:"\f181"}.fa-female:before{content:"\f182"}.fa-male:before{content:"\f183"}.fa-gittip:before,.fa-gratipay:before{content:"\f184"}.fa-sun-o:before{content:"\f185"}.fa-moon-o:before{content:"\f186"}.fa-archive:before{content:"\f187"}.fa-bug:before{content:"\f188"}.fa-vk:before{content:"\f189"}.fa-weibo:before{content:"\f18a"}.fa-renren:before{content:"\f18b"}.fa-pagelines:before{content:"\f18c"}.fa-stack-exchange:before{content:"\f18d"}.fa-arrow-circle-o-right:before{content:"\f18e"}.fa-arrow-circle-o-left:before{content:"\f190"}.fa-toggle-left:before,.fa-caret-square-o-left:before{content:"\f191"}.fa-dot-circle-o:before{content:"\f192"}.fa-wheelchair:before{content:"\f193"}.fa-vimeo-square:before{content:"\f194"}.fa-turkish-lira:before,.fa-try:before{content:"\f195"}.fa-plus-square-o:before{content:"\f196"}.fa-space-shuttle:before{content:"\f197"}.fa-slack:before{content:"\f198"}.fa-envelope-square:before{content:"\f199"}.fa-wordpress:before{content:"\f19a"}.fa-openid:before{content:"\f19b"}.fa-institution:before,.fa-bank:before,.fa-university:before{content:"\f19c"}.fa-mortar-board:before,.fa-graduation-cap:before{content:"\f19d"}.fa-yahoo:before{content:"\f19e"}.fa-google:before{content:"\f1a0"}.fa-reddit:before{content:"\f1a1"}.fa-reddit-square:before{content:"\f1a2"}.fa-stumbleupon-circle:before{content:"\f1a3"}.fa-stumbleupon:before{content:"\f1a4"}.fa-delicious:before{content:"\f1a5"}.fa-digg:before{content:"\f1a6"}.fa-pied-piper-pp:before{content:"\f1a7"}.fa-pied-piper-alt:before{content:"\f1a8"}.fa-drupal:before{content:"\f1a9"}.fa-joomla:before{content:"\f1aa"}.fa-language:before{content:"\f1ab"}.fa-fax:before{content:"\f1ac"}.fa-building:before{content:"\f1ad"}.fa-child:before{content:"\f1ae"}.fa-paw:before{content:"\f1b0"}.fa-spoon:before{content:"\f1b1"}.fa-cube:before{content:"\f1b2"}.fa-cubes:before{content:"\f1b3"}.fa-behance:before{content:"\f1b4"}.fa-behance-square:before{content:"\f1b5"}.fa-steam:before{content:"\f1b6"}.fa-steam-square:before{content:"\f1b7"}.fa-recycle:before{content:"\f1b8"}.fa-automobile:before,.fa-car:before{content:"\f1b9"}.fa-cab:before,.fa-taxi:before{content:"\f1ba"}.fa-tree:before{content:"\f1bb"}.fa-spotify:before{content:"\f1bc"}.fa-deviantart:before{content:"\f1bd"}.fa-soundcloud:before{content:"\f1be"}.fa-database:before{content:"\f1c0"}.fa-file-pdf-o:before{content:"\f1c1"}.fa-file-word-o:before{content:"\f1c2"}.fa-file-excel-o:before{content:"\f1c3"}.fa-file-powerpoint-o:before{content:"\f1c4"}.fa-file-photo-o:before,.fa-file-picture-o:before,.fa-file-image-o:before{content:"\f1c5"}.fa-file-zip-o:before,.fa-file-archive-o:before{content:"\f1c6"}.fa-file-sound-o:before,.fa-file-audio-o:before{content:"\f1c7"}.fa-file-movie-o:before,.fa-file-video-o:before{content:"\f1c8"}.fa-file-code-o:before{content:"\f1c9"}.fa-vine:before{content:"\f1ca"}.fa-codepen:before{content:"\f1cb"}.fa-jsfiddle:before{content:"\f1cc"}.fa-life-bouy:before,.fa-life-buoy:before,.fa-life-saver:before,.fa-support:before,.fa-life-ring:before{content:"\f1cd"}.fa-circle-o-notch:before{content:"\f1ce"}.fa-ra:before,.fa-resistance:before,.fa-rebel:before{content:"\f1d0"}.fa-ge:before,.fa-empire:before{content:"\f1d1"}.fa-git-square:before{content:"\f1d2"}.fa-git:before{content:"\f1d3"}.fa-y-combinator-square:before,.fa-yc-square:before,.fa-hacker-news:before{content:"\f1d4"}.fa-tencent-weibo:before{content:"\f1d5"}.fa-qq:before{content:"\f1d6"}.fa-wechat:before,.fa-weixin:before{content:"\f1d7"}.fa-send:before,.fa-paper-plane:before{content:"\f1d8"}.fa-send-o:before,.fa-paper-plane-o:before{content:"\f1d9"}.fa-history:before{content:"\f1da"}.fa-circle-thin:before{content:"\f1db"}.fa-header:before{content:"\f1dc"}.fa-paragraph:before{content:"\f1dd"}.fa-sliders:before{content:"\f1de"}.fa-share-alt:before{content:"\f1e0"}.fa-share-alt-square:before{content:"\f1e1"}.fa-bomb:before{content:"\f1e2"}.fa-soccer-ball-o:before,.fa-futbol-o:before{content:"\f1e3"}.fa-tty:before{content:"\f1e4"}.fa-binoculars:before{content:"\f1e5"}.fa-plug:before{content:"\f1e6"}.fa-slideshare:before{content:"\f1e7"}.fa-twitch:before{content:"\f1e8"}.fa-yelp:before{content:"\f1e9"}.fa-newspaper-o:before{content:"\f1ea"}.fa-wifi:before{content:"\f1eb"}.fa-calculator:before{content:"\f1ec"}.fa-paypal:before{content:"\f1ed"}.fa-google-wallet:before{content:"\f1ee"}.fa-cc-visa:before{content:"\f1f0"}.fa-cc-mastercard:before{content:"\f1f1"}.fa-cc-discover:before{content:"\f1f2"}.fa-cc-amex:before{content:"\f1f3"}.fa-cc-paypal:before{content:"\f1f4"}.fa-cc-stripe:before{content:"\f1f5"}.fa-bell-slash:before{content:"\f1f6"}.fa-bell-slash-o:before{content:"\f1f7"}.fa-trash:before{content:"\f1f8"}.fa-copyright:before{content:"\f1f9"}.fa-at:before{content:"\f1fa"}.fa-eyedropper:before{content:"\f1fb"}.fa-paint-brush:before{content:"\f1fc"}.fa-birthday-cake:before{content:"\f1fd"}.fa-area-chart:before{content:"\f1fe"}.fa-pie-chart:before{content:"\f200"}.fa-line-chart:before{content:"\f201"}.fa-lastfm:before{content:"\f202"}.fa-lastfm-square:before{content:"\f203"}.fa-toggle-off:before{content:"\f204"}.fa-toggle-on:before{content:"\f205"}.fa-bicycle:before{content:"\f206"}.fa-bus:before{content:"\f207"}.fa-ioxhost:before{content:"\f208"}.fa-angellist:before{content:"\f209"}.fa-cc:before{content:"\f20a"}.fa-shekel:before,.fa-sheqel:before,.fa-ils:before{content:"\f20b"}.fa-meanpath:before{content:"\f20c"}.fa-buysellads:before{content:"\f20d"}.fa-connectdevelop:before{content:"\f20e"}.fa-dashcube:before{content:"\f210"}.fa-forumbee:before{content:"\f211"}.fa-leanpub:before{content:"\f212"}.fa-sellsy:before{content:"\f213"}.fa-shirtsinbulk:before{content:"\f214"}.fa-simplybuilt:before{content:"\f215"}.fa-skyatlas:before{content:"\f216"}.fa-cart-plus:before{content:"\f217"}.fa-cart-arrow-down:before{content:"\f218"}.fa-diamond:before{content:"\f219"}.fa-ship:before{content:"\f21a"}.fa-user-secret:before{content:"\f21b"}.fa-motorcycle:before{content:"\f21c"}.fa-street-view:before{content:"\f21d"}.fa-heartbeat:before{content:"\f21e"}.fa-venus:before{content:"\f221"}.fa-mars:before{content:"\f222"}.fa-mercury:before{content:"\f223"}.fa-intersex:before,.fa-transgender:before{content:"\f224"}.fa-transgender-alt:before{content:"\f225"}.fa-venus-double:before{content:"\f226"}.fa-mars-double:before{content:"\f227"}.fa-venus-mars:before{content:"\f228"}.fa-mars-stroke:before{content:"\f229"}.fa-mars-stroke-v:before{content:"\f22a"}.fa-mars-stroke-h:before{content:"\f22b"}.fa-neuter:before{content:"\f22c"}.fa-genderless:before{content:"\f22d"}.fa-facebook-official:before{content:"\f230"}.fa-pinterest-p:before{content:"\f231"}.fa-whatsapp:before{content:"\f232"}.fa-server:before{content:"\f233"}.fa-user-plus:before{content:"\f234"}.fa-user-times:before{content:"\f235"}.fa-hotel:before,.fa-bed:before{content:"\f236"}.fa-viacoin:before{content:"\f237"}.fa-train:before{content:"\f238"}.fa-subway:before{content:"\f239"}.fa-medium:before{content:"\f23a"}.fa-yc:before,.fa-y-combinator:before{content:"\f23b"}.fa-optin-monster:before{content:"\f23c"}.fa-opencart:before{content:"\f23d"}.fa-expeditedssl:before{content:"\f23e"}.fa-battery-4:before,.fa-battery:before,.fa-battery-full:before{content:"\f240"}.fa-battery-3:before,.fa-battery-three-quarters:before{content:"\f241"}.fa-battery-2:before,.fa-battery-half:before{content:"\f242"}.fa-battery-1:before,.fa-battery-quarter:before{content:"\f243"}.fa-battery-0:before,.fa-battery-empty:before{content:"\f244"}.fa-mouse-pointer:before{content:"\f245"}.fa-i-cursor:before{content:"\f246"}.fa-object-group:before{content:"\f247"}.fa-object-ungroup:before{content:"\f248"}.fa-sticky-note:before{content:"\f249"}.fa-sticky-note-o:before{content:"\f24a"}.fa-cc-jcb:before{content:"\f24b"}.fa-cc-diners-club:before{content:"\f24c"}.fa-clone:before{content:"\f24d"}.fa-balance-scale:before{content:"\f24e"}.fa-hourglass-o:before{content:"\f250"}.fa-hourglass-1:before,.fa-hourglass-start:before{content:"\f251"}.fa-hourglass-2:before,.fa-hourglass-half:before{content:"\f252"}.fa-hourglass-3:before,.fa-hourglass-end:before{content:"\f253"}.fa-hourglass:before{content:"\f254"}.fa-hand-grab-o:before,.fa-hand-rock-o:before{content:"\f255"}.fa-hand-stop-o:before,.fa-hand-paper-o:before{content:"\f256"}.fa-hand-scissors-o:before{content:"\f257"}.fa-hand-lizard-o:before{content:"\f258"}.fa-hand-spock-o:before{content:"\f259"}.fa-hand-pointer-o:before{content:"\f25a"}.fa-hand-peace-o:before{content:"\f25b"}.fa-trademark:before{content:"\f25c"}.fa-registered:before{content:"\f25d"}.fa-creative-commons:before{content:"\f25e"}.fa-gg:before{content:"\f260"}.fa-gg-circle:before{content:"\f261"}.fa-tripadvisor:before{content:"\f262"}.fa-odnoklassniki:before{content:"\f263"}.fa-odnoklassniki-square:before{content:"\f264"}.fa-get-pocket:before{content:"\f265"}.fa-wikipedia-w:before{content:"\f266"}.fa-safari:before{content:"\f267"}.fa-chrome:before{content:"\f268"}.fa-firefox:before{content:"\f269"}.fa-opera:before{content:"\f26a"}.fa-internet-explorer:before{content:"\f26b"}.fa-tv:before,.fa-television:before{content:"\f26c"}.fa-contao:before{content:"\f26d"}.fa-500px:before{content:"\f26e"}.fa-amazon:before{content:"\f270"}.fa-calendar-plus-o:before{content:"\f271"}.fa-calendar-minus-o:before{content:"\f272"}.fa-calendar-times-o:before{content:"\f273"}.fa-calendar-check-o:before{content:"\f274"}.fa-industry:before{content:"\f275"}.fa-map-pin:before{content:"\f276"}.fa-map-signs:before{content:"\f277"}.fa-map-o:before{content:"\f278"}.fa-map:before{content:"\f279"}.fa-commenting:before{content:"\f27a"}.fa-commenting-o:before{content:"\f27b"}.fa-houzz:before{content:"\f27c"}.fa-vimeo:before{content:"\f27d"}.fa-black-tie:before{content:"\f27e"}.fa-fonticons:before{content:"\f280"}.fa-reddit-alien:before{content:"\f281"}.fa-edge:before{content:"\f282"}.fa-credit-card-alt:before{content:"\f283"}.fa-codiepie:before{content:"\f284"}.fa-modx:before{content:"\f285"}.fa-fort-awesome:before{content:"\f286"}.fa-usb:before{content:"\f287"}.fa-product-hunt:before{content:"\f288"}.fa-mixcloud:before{content:"\f289"}.fa-scribd:before{content:"\f28a"}.fa-pause-circle:before{content:"\f28b"}.fa-pause-circle-o:before{content:"\f28c"}.fa-stop-circle:before{content:"\f28d"}.fa-stop-circle-o:before{content:"\f28e"}.fa-shopping-bag:before{content:"\f290"}.fa-shopping-basket:before{content:"\f291"}.fa-hashtag:before{content:"\f292"}.fa-bluetooth:before{content:"\f293"}.fa-bluetooth-b:before{content:"\f294"}.fa-percent:before{content:"\f295"}.fa-gitlab:before{content:"\f296"}.fa-wpbeginner:before{content:"\f297"}.fa-wpforms:before{content:"\f298"}.fa-envira:before{content:"\f299"}.fa-universal-access:before{content:"\f29a"}.fa-wheelchair-alt:before{content:"\f29b"}.fa-question-circle-o:before{content:"\f29c"}.fa-blind:before{content:"\f29d"}.fa-audio-description:before{content:"\f29e"}.fa-volume-control-phone:before{content:"\f2a0"}.fa-braille:before{content:"\f2a1"}.fa-assistive-listening-systems:before{content:"\f2a2"}.fa-asl-interpreting:before,.fa-american-sign-language-interpreting:before{content:"\f2a3"}.fa-deafness:before,.fa-hard-of-hearing:before,.fa-deaf:before{content:"\f2a4"}.fa-glide:before{content:"\f2a5"}.fa-glide-g:before{content:"\f2a6"}.fa-signing:before,.fa-sign-language:before{content:"\f2a7"}.fa-low-vision:before{content:"\f2a8"}.fa-viadeo:before{content:"\f2a9"}.fa-viadeo-square:before{content:"\f2aa"}.fa-snapchat:before{content:"\f2ab"}.fa-snapchat-ghost:before{content:"\f2ac"}.fa-snapchat-square:before{content:"\f2ad"}.fa-pied-piper:before{content:"\f2ae"}.fa-first-order:before{content:"\f2b0"}.fa-yoast:before{content:"\f2b1"}.fa-themeisle:before{content:"\f2b2"}.fa-google-plus-circle:before,.fa-google-plus-official:before{content:"\f2b3"}.fa-fa:before,.fa-font-awesome:before{content:"\f2b4"}.fa-handshake-o:before{content:"\f2b5"}.fa-envelope-open:before{content:"\f2b6"}.fa-envelope-open-o:before{content:"\f2b7"}.fa-linode:before{content:"\f2b8"}.fa-address-book:before{content:"\f2b9"}.fa-address-book-o:before{content:"\f2ba"}.fa-vcard:before,.fa-address-card:before{content:"\f2bb"}.fa-vcard-o:before,.fa-address-card-o:before{content:"\f2bc"}.fa-user-circle:before{content:"\f2bd"}.fa-user-circle-o:before{content:"\f2be"}.fa-user-o:before{content:"\f2c0"}.fa-id-badge:before{content:"\f2c1"}.fa-drivers-license:before,.fa-id-card:before{content:"\f2c2"}.fa-drivers-license-o:before,.fa-id-card-o:before{content:"\f2c3"}.fa-quora:before{content:"\f2c4"}.fa-free-code-camp:before{content:"\f2c5"}.fa-telegram:before{content:"\f2c6"}.fa-thermometer-4:before,.fa-thermometer:before,.fa-thermometer-full:before{content:"\f2c7"}.fa-thermometer-3:before,.fa-thermometer-three-quarters:before{content:"\f2c8"}.fa-thermometer-2:before,.fa-thermometer-half:before{content:"\f2c9"}.fa-thermometer-1:before,.fa-thermometer-quarter:before{content:"\f2ca"}.fa-thermometer-0:before,.fa-thermometer-empty:before{content:"\f2cb"}.fa-shower:before{content:"\f2cc"}.fa-bathtub:before,.fa-s15:before,.fa-bath:before{content:"\f2cd"}.fa-podcast:before{content:"\f2ce"}.fa-window-maximize:before{content:"\f2d0"}.fa-window-minimize:before{content:"\f2d1"}.fa-window-restore:before{content:"\f2d2"}.fa-times-rectangle:before,.fa-window-close:before{content:"\f2d3"}.fa-times-rectangle-o:before,.fa-window-close-o:before{content:"\f2d4"}.fa-bandcamp:before{content:"\f2d5"}.fa-grav:before{content:"\f2d6"}.fa-etsy:before{content:"\f2d7"}.fa-imdb:before{content:"\f2d8"}.fa-ravelry:before{content:"\f2d9"}.fa-eercast:before{content:"\f2da"}.fa-microchip:before{content:"\f2db"}.fa-snowflake-o:before{content:"\f2dc"}.fa-superpowers:before{content:"\f2dd"}.fa-wpexplorer:before{content:"\f2de"}.fa-meetup:before{content:"\f2e0"}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);border:0}.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;margin:0;overflow:visible;clip:auto}
           
            .bx-wrapper{position:relative;margin:0;padding:0 10px;*zoom:1;-ms-touch-action:pan-y;touch-action:pan-y;}
            .bx-wrapper img{max-width:100%;display:block;}
            .bxslider{margin:0;padding:0;}
            ul.bxslider{list-style:none;}
            .bx-viewport{-webkit-transform:translatez(0);}
            .bx-wrapper{background:none;}
            .bx-wrapper .bx-pager,
            .bx-wrapper .bx-controls-auto{position:absolute;bottom:-30px;width:100%;}
            .bx-wrapper .bx-loading{min-height:50px;background:url('images/bx_loader.gif') center center no-repeat #d3d3d3;height:100%;width:100%;position:absolute;top:0;left:0;z-index:2000;}
            .bx-wrapper .bx-pager{text-align:center;font-size:.85em;font-family:Arial;font-weight:bold;color:#666;padding-top:20px;}
            .bx-wrapper .bx-pager.bx-default-pager a{background:#666;text-indent:-9999px;display:block;width:10px;height:10px;margin:0 5px;outline:0;-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;}
            .bx-wrapper .bx-pager.bx-default-pager a:hover,
            .bx-wrapper .bx-pager.bx-default-pager a.active,
            .bx-wrapper .bx-pager.bx-default-pager a:focus{background:#000;}
            .bx-wrapper .bx-pager-item,
            .bx-wrapper .bx-controls-auto .bx-controls-auto-item{display:inline-block;*zoom:1;*display:inline;}
            .bx-wrapper .bx-pager-item{font-size:0;line-height:0;}
            .bx-wrapper .bx-prev{left:10px;background:url('images/controls.webp') no-repeat 0 -32px;}
            .bx-wrapper .bx-prev:hover,
            .bx-wrapper .bx-prev:focus{background-position:0 0;}
            .bx-wrapper .bx-next{right:10px;background:url('images/controls.webp') no-repeat -43px -32px;}
            .bx-wrapper .bx-next:hover,
            .bx-wrapper .bx-next:focus{background-position:-43px 0;}
            .bx-wrapper .bx-controls-direction a{position:absolute;top:50%;margin-top:-16px;outline:0;width:32px;height:32px;text-indent:-9999px;z-index:400;}
            .bx-wrapper .bx-controls-direction a.disabled{display:none;}
            .bx-wrapper .bx-controls-auto{text-align:center;}
            .bx-wrapper .bx-controls-auto .bx-start{display:block;text-indent:-9999px;width:10px;height:11px;outline:0;background:url('images/controls.webp') -86px -11px no-repeat;margin:0 3px;}
            .bx-wrapper .bx-controls-auto .bx-start:hover,
            .bx-wrapper .bx-controls-auto .bx-start.active,
            .bx-wrapper .bx-controls-auto .bx-start:focus{background-position:-86px 0;}
            .bx-wrapper .bx-controls-auto .bx-stop{display:block;text-indent:-9999px;width:9px;height:11px;outline:0;background:url('images/controls.webp') -86px -44px no-repeat;margin:0 3px;}
            .bx-wrapper .bx-controls-auto .bx-stop:hover,
            .bx-wrapper .bx-controls-auto .bx-stop.active,
            .bx-wrapper .bx-controls-auto .bx-stop:focus{background-position:-86px -33px;}
            .bx-wrapper .bx-controls.bx-has-controls-auto.bx-has-pager .bx-pager{text-align:left;width:80%;}
            .bx-wrapper .bx-controls.bx-has-controls-auto.bx-has-pager .bx-controls-auto{right:0;width:35px;}
            .bx-wrapper .bx-caption{position:absolute;bottom:0;left:0;background:#666;background:rgba(80, 80, 80, 0.75);width:100%;}
            .bx-wrapper .bx-caption span{color:#fff;font-family:Arial;display:block;font-size:.85em;padding:10px;}
            /*!
            * Bootstrap v3.3.4 (http://getbootstrap.com)
            * Copyright 2011-2015 Twitter, Inc.
            * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
            */
           /*! normalize.css v3.0.2 | MIT License | git.io/normalize */
           html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:700}dfn{font-style:italic}h1{margin:.67em 0;font-size:2em}mark{color:#000;background:#ff0}small{font-size:80%}sub,sup{position:relative;font-size:75%;line-height:0;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{height:0;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}button,input,optgroup,select,textarea{margin:0;font:inherit;color:inherit}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=reset],input[type=submit]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0}input{line-height:normal}input[type=checkbox],input[type=radio]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;-webkit-appearance:textfield}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}fieldset{padding:.35em .625em .75em;margin:0 2px;border:1px solid silver}legend{border:0}textarea{overflow:auto}optgroup{font-weight:700}table{border-spacing:0;border-collapse:collapse}legend,td,th{padding:0}
           /*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */
           @-webkit-keyframes progress-bar-stripes{0%{background-position:40px 0}to{background-position:0 0}}@-o-keyframes progress-bar-stripes{0%{background-position:40px 0}to{background-position:0 0}}@keyframes progress-bar-stripes{0%{background-position:40px 0}to{background-position:0 0}}@media print{*,:after,:before{color:#000!important;text-shadow:none!important;background:0 0!important;-webkit-box-shadow:none!important;box-shadow:none!important}a,a:visited{text-decoration:underline}a[href]:after{content:" (" attr(href) ")"}abbr[title]:after{content:" (" attr(title) ")"}a[href^="#"]:after,a[href^="javascript:"]:after{content:""}blockquote,pre{border:1px solid #999}thead{display:table-header-group}blockquote,img,pre,tr{page-break-inside:avoid}img{max-width:100%!important}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}select{background:#fff!important}.navbar{display:none}.btn>.caret,.dropup>.btn>.caret{border-top-color:#000!important}.label{border:1px solid #000}.table{border-collapse:collapse!important}.table td,.table th{background-color:#fff!important}.table-bordered td,.table-bordered th{border:1px solid #ddd!important}}@font-face{font-family:'Glyphicons Halflings';src:url(../fonts/glyphicons-halflings-regular.eot);src:url(../fonts/glyphicons-halflings-regular.eot?#iefix) format('embedded-opentype'),url(../fonts/glyphicons-halflings-regular.woff2) format('woff2'),url(../fonts/glyphicons-halflings-regular.woff) format('woff'),url(../fonts/glyphicons-halflings-regular.ttf) format('truetype'),url(../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format('svg')}.glyphicon{position:relative;top:1px;display:inline-block;font-family:'Glyphicons Halflings';font-style:normal;font-weight:400;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.glyphicon-asterisk:before{content:"\2a"}.glyphicon-plus:before{content:"\2b"}.glyphicon-eur:before,.glyphicon-euro:before{content:"\20ac"}.glyphicon-minus:before{content:"\2212"}.glyphicon-cloud:before{content:"\2601"}.glyphicon-envelope:before{content:"\2709"}.glyphicon-pencil:before{content:"\270f"}.glyphicon-glass:before{content:"\e001"}.glyphicon-music:before{content:"\e002"}.glyphicon-search:before{content:"\e003"}.glyphicon-heart:before{content:"\e005"}.glyphicon-star:before{content:"\e006"}.glyphicon-star-empty:before{content:"\e007"}.glyphicon-user:before{content:"\e008"}.glyphicon-film:before{content:"\e009"}.glyphicon-th-large:before{content:"\e010"}.glyphicon-th:before{content:"\e011"}.glyphicon-th-list:before{content:"\e012"}.glyphicon-ok:before{content:"\e013"}.glyphicon-remove:before{content:"\e014"}.glyphicon-zoom-in:before{content:"\e015"}.glyphicon-zoom-out:before{content:"\e016"}.glyphicon-off:before{content:"\e017"}.glyphicon-signal:before{content:"\e018"}.glyphicon-cog:before{content:"\e019"}.glyphicon-trash:before{content:"\e020"}.glyphicon-home:before{content:"\e021"}.glyphicon-file:before{content:"\e022"}.glyphicon-time:before{content:"\e023"}.glyphicon-road:before{content:"\e024"}.glyphicon-download-alt:before{content:"\e025"}.glyphicon-download:before{content:"\e026"}.glyphicon-upload:before{content:"\e027"}.glyphicon-inbox:before{content:"\e028"}.glyphicon-play-circle:before{content:"\e029"}.glyphicon-repeat:before{content:"\e030"}.glyphicon-refresh:before{content:"\e031"}.glyphicon-list-alt:before{content:"\e032"}.glyphicon-lock:before{content:"\e033"}.glyphicon-flag:before{content:"\e034"}.glyphicon-headphones:before{content:"\e035"}.glyphicon-volume-off:before{content:"\e036"}.glyphicon-volume-down:before{content:"\e037"}.glyphicon-volume-up:before{content:"\e038"}.glyphicon-qrcode:before{content:"\e039"}.glyphicon-barcode:before{content:"\e040"}.glyphicon-tag:before{content:"\e041"}.glyphicon-tags:before{content:"\e042"}.glyphicon-book:before{content:"\e043"}.glyphicon-bookmark:before{content:"\e044"}.glyphicon-print:before{content:"\e045"}.glyphicon-camera:before{content:"\e046"}.glyphicon-font:before{content:"\e047"}.glyphicon-bold:before{content:"\e048"}.glyphicon-italic:before{content:"\e049"}.glyphicon-text-height:before{content:"\e050"}.glyphicon-text-width:before{content:"\e051"}.glyphicon-align-left:before{content:"\e052"}.glyphicon-align-center:before{content:"\e053"}.glyphicon-align-right:before{content:"\e054"}.glyphicon-align-justify:before{content:"\e055"}.glyphicon-list:before{content:"\e056"}.glyphicon-indent-left:before{content:"\e057"}.glyphicon-indent-right:before{content:"\e058"}.glyphicon-facetime-video:before{content:"\e059"}.glyphicon-picture:before{content:"\e060"}.glyphicon-map-marker:before{content:"\e062"}.glyphicon-adjust:before{content:"\e063"}.glyphicon-tint:before{content:"\e064"}.glyphicon-edit:before{content:"\e065"}.glyphicon-share:before{content:"\e066"}.glyphicon-check:before{content:"\e067"}.glyphicon-move:before{content:"\e068"}.glyphicon-step-backward:before{content:"\e069"}.glyphicon-fast-backward:before{content:"\e070"}.glyphicon-backward:before{content:"\e071"}.glyphicon-play:before{content:"\e072"}.glyphicon-pause:before{content:"\e073"}.glyphicon-stop:before{content:"\e074"}.glyphicon-forward:before{content:"\e075"}.glyphicon-fast-forward:before{content:"\e076"}.glyphicon-step-forward:before{content:"\e077"}.glyphicon-eject:before{content:"\e078"}.glyphicon-chevron-left:before{content:"\e079"}.glyphicon-chevron-right:before{content:"\e080"}.glyphicon-plus-sign:before{content:"\e081"}.glyphicon-minus-sign:before{content:"\e082"}.glyphicon-remove-sign:before{content:"\e083"}.glyphicon-ok-sign:before{content:"\e084"}.glyphicon-question-sign:before{content:"\e085"}.glyphicon-info-sign:before{content:"\e086"}.glyphicon-screenshot:before{content:"\e087"}.glyphicon-remove-circle:before{content:"\e088"}.glyphicon-ok-circle:before{content:"\e089"}.glyphicon-ban-circle:before{content:"\e090"}.glyphicon-arrow-left:before{content:"\e091"}.glyphicon-arrow-right:before{content:"\e092"}.glyphicon-arrow-up:before{content:"\e093"}.glyphicon-arrow-down:before{content:"\e094"}.glyphicon-share-alt:before{content:"\e095"}.glyphicon-resize-full:before{content:"\e096"}.glyphicon-resize-small:before{content:"\e097"}.glyphicon-exclamation-sign:before{content:"\e101"}.glyphicon-gift:before{content:"\e102"}.glyphicon-leaf:before{content:"\e103"}.glyphicon-fire:before{content:"\e104"}.glyphicon-eye-open:before{content:"\e105"}.glyphicon-eye-close:before{content:"\e106"}.glyphicon-warning-sign:before{content:"\e107"}.glyphicon-plane:before{content:"\e108"}.glyphicon-calendar:before{content:"\e109"}.glyphicon-random:before{content:"\e110"}.glyphicon-comment:before{content:"\e111"}.glyphicon-magnet:before{content:"\e112"}.glyphicon-chevron-up:before{content:"\e113"}.glyphicon-chevron-down:before{content:"\e114"}.glyphicon-retweet:before{content:"\e115"}.glyphicon-shopping-cart:before{content:"\e116"}.glyphicon-folder-close:before{content:"\e117"}.glyphicon-folder-open:before{content:"\e118"}.glyphicon-resize-vertical:before{content:"\e119"}.glyphicon-resize-horizontal:before{content:"\e120"}.glyphicon-hdd:before{content:"\e121"}.glyphicon-bullhorn:before{content:"\e122"}.glyphicon-bell:before{content:"\e123"}.glyphicon-certificate:before{content:"\e124"}.glyphicon-thumbs-up:before{content:"\e125"}.glyphicon-thumbs-down:before{content:"\e126"}.glyphicon-hand-right:before{content:"\e127"}.glyphicon-hand-left:before{content:"\e128"}.glyphicon-hand-up:before{content:"\e129"}.glyphicon-hand-down:before{content:"\e130"}.glyphicon-circle-arrow-right:before{content:"\e131"}.glyphicon-circle-arrow-left:before{content:"\e132"}.glyphicon-circle-arrow-up:before{content:"\e133"}.glyphicon-circle-arrow-down:before{content:"\e134"}.glyphicon-globe:before{content:"\e135"}.glyphicon-wrench:before{content:"\e136"}.glyphicon-tasks:before{content:"\e137"}.glyphicon-filter:before{content:"\e138"}.glyphicon-briefcase:before{content:"\e139"}.glyphicon-fullscreen:before{content:"\e140"}.glyphicon-dashboard:before{content:"\e141"}.glyphicon-paperclip:before{content:"\e142"}.glyphicon-heart-empty:before{content:"\e143"}.glyphicon-link:before{content:"\e144"}.glyphicon-phone:before{content:"\e145"}.glyphicon-pushpin:before{content:"\e146"}.glyphicon-usd:before{content:"\e148"}.glyphicon-gbp:before{content:"\e149"}.glyphicon-sort:before{content:"\e150"}.glyphicon-sort-by-alphabet:before{content:"\e151"}.glyphicon-sort-by-alphabet-alt:before{content:"\e152"}.glyphicon-sort-by-order:before{content:"\e153"}.glyphicon-sort-by-order-alt:before{content:"\e154"}.glyphicon-sort-by-attributes:before{content:"\e155"}.glyphicon-sort-by-attributes-alt:before{content:"\e156"}.glyphicon-unchecked:before{content:"\e157"}.glyphicon-expand:before{content:"\e158"}.glyphicon-collapse-down:before{content:"\e159"}.glyphicon-collapse-up:before{content:"\e160"}.glyphicon-log-in:before{content:"\e161"}.glyphicon-flash:before{content:"\e162"}.glyphicon-log-out:before{content:"\e163"}.glyphicon-new-window:before{content:"\e164"}.glyphicon-record:before{content:"\e165"}.glyphicon-save:before{content:"\e166"}.glyphicon-open:before{content:"\e167"}.glyphicon-saved:before{content:"\e168"}.glyphicon-import:before{content:"\e169"}.glyphicon-export:before{content:"\e170"}.glyphicon-send:before{content:"\e171"}.glyphicon-floppy-disk:before{content:"\e172"}.glyphicon-floppy-saved:before{content:"\e173"}.glyphicon-floppy-remove:before{content:"\e174"}.glyphicon-floppy-save:before{content:"\e175"}.glyphicon-floppy-open:before{content:"\e176"}.glyphicon-credit-card:before{content:"\e177"}.glyphicon-transfer:before{content:"\e178"}.glyphicon-cutlery:before{content:"\e179"}.glyphicon-header:before{content:"\e180"}.glyphicon-compressed:before{content:"\e181"}.glyphicon-earphone:before{content:"\e182"}.glyphicon-phone-alt:before{content:"\e183"}.glyphicon-tower:before{content:"\e184"}.glyphicon-stats:before{content:"\e185"}.glyphicon-sd-video:before{content:"\e186"}.glyphicon-hd-video:before{content:"\e187"}.glyphicon-subtitles:before{content:"\e188"}.glyphicon-sound-stereo:before{content:"\e189"}.glyphicon-sound-dolby:before{content:"\e190"}.glyphicon-sound-5-1:before{content:"\e191"}.glyphicon-sound-6-1:before{content:"\e192"}.glyphicon-sound-7-1:before{content:"\e193"}.glyphicon-copyright-mark:before{content:"\e194"}.glyphicon-registration-mark:before{content:"\e195"}.glyphicon-cloud-download:before{content:"\e197"}.glyphicon-cloud-upload:before{content:"\e198"}.glyphicon-tree-conifer:before{content:"\e199"}.glyphicon-tree-deciduous:before{content:"\e200"}.glyphicon-cd:before{content:"\e201"}.glyphicon-save-file:before{content:"\e202"}.glyphicon-open-file:before{content:"\e203"}.glyphicon-level-up:before{content:"\e204"}.glyphicon-copy:before{content:"\e205"}.glyphicon-paste:before{content:"\e206"}.glyphicon-alert:before{content:"\e209"}.glyphicon-equalizer:before{content:"\e210"}.glyphicon-king:before{content:"\e211"}.glyphicon-queen:before{content:"\e212"}.glyphicon-pawn:before{content:"\e213"}.glyphicon-bishop:before{content:"\e214"}.glyphicon-knight:before{content:"\e215"}.glyphicon-baby-formula:before{content:"\e216"}.glyphicon-tent:before{content:"\26fa"}.glyphicon-blackboard:before{content:"\e218"}.glyphicon-bed:before{content:"\e219"}.glyphicon-apple:before{content:"\f8ff"}.glyphicon-erase:before{content:"\e221"}.glyphicon-hourglass:before{content:"\231b"}.glyphicon-lamp:before{content:"\e223"}.glyphicon-duplicate:before{content:"\e224"}.glyphicon-piggy-bank:before{content:"\e225"}.glyphicon-scissors:before{content:"\e226"}.glyphicon-bitcoin:before,.glyphicon-btc:before,.glyphicon-xbt:before{content:"\e227"}.glyphicon-jpy:before,.glyphicon-yen:before{content:"\00a5"}.glyphicon-rub:before,.glyphicon-ruble:before{content:"\20bd"}.glyphicon-scale:before{content:"\e230"}.glyphicon-ice-lolly:before{content:"\e231"}.glyphicon-ice-lolly-tasted:before{content:"\e232"}.glyphicon-education:before{content:"\e233"}.glyphicon-option-horizontal:before{content:"\e234"}.glyphicon-option-vertical:before{content:"\e235"}.glyphicon-menu-hamburger:before{content:"\e236"}.glyphicon-modal-window:before{content:"\e237"}.glyphicon-oil:before{content:"\e238"}.glyphicon-grain:before{content:"\e239"}.glyphicon-sunglasses:before{content:"\e240"}.glyphicon-text-size:before{content:"\e241"}.glyphicon-text-color:before{content:"\e242"}.glyphicon-text-background:before{content:"\e243"}.glyphicon-object-align-top:before{content:"\e244"}.glyphicon-object-align-bottom:before{content:"\e245"}.glyphicon-object-align-horizontal:before{content:"\e246"}.glyphicon-object-align-left:before{content:"\e247"}.glyphicon-object-align-vertical:before{content:"\e248"}.glyphicon-object-align-right:before{content:"\e249"}.glyphicon-triangle-right:before{content:"\e250"}.glyphicon-triangle-left:before{content:"\e251"}.glyphicon-triangle-bottom:before{content:"\e252"}.glyphicon-triangle-top:before{content:"\e253"}.glyphicon-console:before{content:"\e254"}.glyphicon-superscript:before{content:"\e255"}.glyphicon-subscript:before{content:"\e256"}.glyphicon-menu-left:before{content:"\e257"}.glyphicon-menu-right:before{content:"\e258"}.glyphicon-menu-down:before{content:"\e259"}.glyphicon-menu-up:before{content:"\e260"}*,:after,:before,input[type=search]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px;-webkit-tap-highlight-color:transparent}body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#333;background-color:#fff}button,input,select,textarea{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#337ab7;text-decoration:none}a:focus,a:hover{color:#23527c;text-decoration:underline}a:focus,input[type=checkbox]:focus,input[type=file]:focus,input[type=radio]:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}figure{margin:0}img{vertical-align:middle}.carousel-inner>.item>a>img,.carousel-inner>.item>img,.img-responsive,.thumbnail a>img,.thumbnail>img{display:block;max-width:100%;height:auto}.img-rounded{border-radius:6px}.img-thumbnail{display:inline-block;max-width:100%;height:auto;padding:4px;line-height:1.42857143;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;transition:all .2s ease-in-out}.img-circle{border-radius:50%}hr{margin-top:20px;margin-bottom:20px;border:0;border-top:1px solid #eee}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);border:0}.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;margin:0;overflow:visible;clip:auto}[role=button]{cursor:pointer}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}.h1 .small,.h1 small,.h2 .small,.h2 small,.h3 .small,.h3 small,.h4 .small,.h4 small,.h5 .small,.h5 small,.h6 .small,.h6 small,h1 .small,h1 small,h2 .small,h2 small,h3 .small,h3 small,h4 .small,h4 small,h5 .small,h5 small,h6 .small,h6 small{font-weight:400;line-height:1;color:#777}.h1,.h2,.h3,h1,h2,h3{margin-top:20px;margin-bottom:10px}.h1 .small,.h1 small,.h2 .small,.h2 small,.h3 .small,.h3 small,h1 .small,h1 small,h2 .small,h2 small,h3 .small,h3 small{font-size:65%}.h4,.h5,.h6,dl,h4,h5,h6,ol,ul{margin-top:10px;margin-bottom:10px}.h4 .small,.h4 small,.h5 .small,.h5 small,.h6 .small,.h6 small,h4 .small,h4 small,h5 .small,h5 small,h6 .small,h6 small{font-size:75%}.h1,h1{font-size:36px}.h2,h2{font-size:30px}.h3,h3{font-size:24px}.h4,h4{font-size:18px}.h5,h5{font-size:14px}.h6,h6{font-size:12px}p{margin:0 0 10px}.lead{margin-bottom:20px;font-size:16px;font-weight:300;line-height:1.4}@media (min-width:768px){.lead{font-size:21px}}.small,small{font-size:85%}.mark,mark{padding:.2em;background-color:#fcf8e3}.text-left,th{text-align:left}.text-right{text-align:right}.text-center{text-align:center}.text-justify{text-align:justify}.text-nowrap{white-space:nowrap}.text-lowercase{text-transform:lowercase}.text-uppercase{text-transform:uppercase}.text-capitalize{text-transform:capitalize}.text-muted{color:#777}.text-primary{color:#337ab7}a.text-primary:hover{color:#286090}.text-success{color:#3c763d}a.text-success:hover{color:#2b542c}.text-info{color:#31708f}a.text-info:hover{color:#245269}.text-warning{color:#8a6d3b}a.text-warning:hover{color:#66512c}.text-danger{color:#a94442}a.text-danger:hover{color:#843534}.bg-primary{color:#fff;background-color:#337ab7}a.bg-primary:hover{background-color:#286090}.bg-success{background-color:#dff0d8}a.bg-success:hover{background-color:#c1e2b3}.bg-info{background-color:#d9edf7}a.bg-info:hover{background-color:#afd9ee}.bg-warning{background-color:#fcf8e3}a.bg-warning:hover{background-color:#f7ecb5}.bg-danger{background-color:#f2dede}a.bg-danger:hover{background-color:#e4b9b9}.page-header{padding-bottom:9px;margin:40px 0 20px;border-bottom:1px solid #eee}dl,ol,ul{margin-top:0}ol ol,ol ul,ul ol,ul ul{margin-bottom:0}.list-inline,.list-unstyled{padding-left:0;list-style:none}.list-inline{margin-left:-5px}.list-inline>li{display:inline-block;padding-right:5px;padding-left:5px}dl{margin-bottom:20px}dd,dt{line-height:1.42857143}dt{font-weight:700}dd{margin-left:0}@media (min-width:768px){.dl-horizontal dt{float:left;width:160px;overflow:hidden;clear:left;text-align:right;text-overflow:ellipsis;white-space:nowrap}.dl-horizontal dd{margin-left:180px}}abbr[data-original-title],abbr[title]{cursor:help;border-bottom:1px dotted #777}.initialism{font-size:90%;text-transform:uppercase}blockquote{padding:10px 20px;margin:0 0 20px;font-size:17.5px;border-left:5px solid #eee}blockquote ol:last-child,blockquote p:last-child,blockquote ul:last-child{margin-bottom:0}blockquote .small,blockquote footer,blockquote small{display:block;font-size:80%;line-height:1.42857143;color:#777}blockquote .small:before,blockquote footer:before,blockquote small:before{content:'\2014 \00A0'}.blockquote-reverse,blockquote.pull-right{padding-right:15px;padding-left:0;text-align:right;border-right:5px solid #eee;border-left:0}.blockquote-reverse .small:before,.blockquote-reverse footer:before,.blockquote-reverse small:before,blockquote.pull-right .small:before,blockquote.pull-right footer:before,blockquote.pull-right small:before{content:''}.blockquote-reverse .small:after,.blockquote-reverse footer:after,.blockquote-reverse small:after,blockquote.pull-right .small:after,blockquote.pull-right footer:after,blockquote.pull-right small:after{content:'\00A0 \2014'}address{margin-bottom:20px;font-style:normal;line-height:1.42857143}code,kbd,pre,samp{font-family:Menlo,Monaco,Consolas,"Courier New",monospace}code,kbd,pre{padding:2px 4px;font-size:90%;color:#c7254e;background-color:#f9f2f4;border-radius:4px}kbd{color:#fff;background-color:#333;border-radius:3px;-webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,.25);box-shadow:inset 0 -1px 0 rgba(0,0,0,.25)}kbd kbd{padding:0;font-size:100%;font-weight:700;-webkit-box-shadow:none;box-shadow:none}pre{display:block;padding:9.5px;margin:0 0 10px;font-size:13px;line-height:1.42857143;color:#333;word-break:break-all;word-wrap:break-word;background-color:#f5f5f5;border:1px solid #ccc}pre code{padding:0;font-size:inherit;color:inherit;white-space:pre-wrap;border-radius:0}.pre-scrollable{max-height:340px;overflow-y:scroll}.container{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.container-fluid{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}.row{margin-right:-15px;margin-left:-15px}.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{position:relative;min-height:1px;padding-right:15px;padding-left:15px}.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{float:left}.col-xs-12{width:100%}.col-xs-11{width:91.66666667%}.col-xs-10{width:83.33333333%}.col-xs-9{width:75%}.col-xs-8{width:66.66666667%}.col-xs-7{width:58.33333333%}.col-xs-6{width:50%}.col-xs-5{width:41.66666667%}.col-xs-4{width:33.33333333%}.col-xs-3{width:25%}.col-xs-2{width:16.66666667%}.col-xs-1{width:8.33333333%}.col-xs-pull-12{right:100%}.col-xs-pull-11{right:91.66666667%}.col-xs-pull-10{right:83.33333333%}.col-xs-pull-9{right:75%}.col-xs-pull-8{right:66.66666667%}.col-xs-pull-7{right:58.33333333%}.col-xs-pull-6{right:50%}.col-xs-pull-5{right:41.66666667%}.col-xs-pull-4{right:33.33333333%}.col-xs-pull-3{right:25%}.col-xs-pull-2{right:16.66666667%}.col-xs-pull-1{right:8.33333333%}.col-xs-pull-0{right:auto}.col-xs-push-12{left:100%}.col-xs-push-11{left:91.66666667%}.col-xs-push-10{left:83.33333333%}.col-xs-push-9{left:75%}.col-xs-push-8{left:66.66666667%}.col-xs-push-7{left:58.33333333%}.col-xs-push-6{left:50%}.col-xs-push-5{left:41.66666667%}.col-xs-push-4{left:33.33333333%}.col-xs-push-3{left:25%}.col-xs-push-2{left:16.66666667%}.col-xs-push-1{left:8.33333333%}.col-xs-push-0{left:auto}.col-xs-offset-12{margin-left:100%}.col-xs-offset-11{margin-left:91.66666667%}.col-xs-offset-10{margin-left:83.33333333%}.col-xs-offset-9{margin-left:75%}.col-xs-offset-8{margin-left:66.66666667%}.col-xs-offset-7{margin-left:58.33333333%}.col-xs-offset-6{margin-left:50%}.col-xs-offset-5{margin-left:41.66666667%}.col-xs-offset-4{margin-left:33.33333333%}.col-xs-offset-3{margin-left:25%}.col-xs-offset-2{margin-left:16.66666667%}.col-xs-offset-1{margin-left:8.33333333%}.col-xs-offset-0{margin-left:0}@media (min-width:768px){.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9{float:left}.col-sm-12{width:100%}.col-sm-11{width:91.66666667%}.col-sm-10{width:83.33333333%}.col-sm-9{width:75%}.col-sm-8{width:66.66666667%}.col-sm-7{width:58.33333333%}.col-sm-6{width:50%}.col-sm-5{width:41.66666667%}.col-sm-4{width:33.33333333%}.col-sm-3{width:25%}.col-sm-2{width:16.66666667%}.col-sm-1{width:8.33333333%}.col-sm-pull-12{right:100%}.col-sm-pull-11{right:91.66666667%}.col-sm-pull-10{right:83.33333333%}.col-sm-pull-9{right:75%}.col-sm-pull-8{right:66.66666667%}.col-sm-pull-7{right:58.33333333%}.col-sm-pull-6{right:50%}.col-sm-pull-5{right:41.66666667%}.col-sm-pull-4{right:33.33333333%}.col-sm-pull-3{right:25%}.col-sm-pull-2{right:16.66666667%}.col-sm-pull-1{right:8.33333333%}.col-sm-pull-0{right:auto}.col-sm-push-12{left:100%}.col-sm-push-11{left:91.66666667%}.col-sm-push-10{left:83.33333333%}.col-sm-push-9{left:75%}.col-sm-push-8{left:66.66666667%}.col-sm-push-7{left:58.33333333%}.col-sm-push-6{left:50%}.col-sm-push-5{left:41.66666667%}.col-sm-push-4{left:33.33333333%}.col-sm-push-3{left:25%}.col-sm-push-2{left:16.66666667%}.col-sm-push-1{left:8.33333333%}.col-sm-push-0{left:auto}.col-sm-offset-12{margin-left:100%}.col-sm-offset-11{margin-left:91.66666667%}.col-sm-offset-10{margin-left:83.33333333%}.col-sm-offset-9{margin-left:75%}.col-sm-offset-8{margin-left:66.66666667%}.col-sm-offset-7{margin-left:58.33333333%}.col-sm-offset-6{margin-left:50%}.col-sm-offset-5{margin-left:41.66666667%}.col-sm-offset-4{margin-left:33.33333333%}.col-sm-offset-3{margin-left:25%}.col-sm-offset-2{margin-left:16.66666667%}.col-sm-offset-1{margin-left:8.33333333%}.col-sm-offset-0{margin-left:0}}@media (min-width:992px){.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9{float:left}.col-md-12{width:100%}.col-md-11{width:91.66666667%}.col-md-10{width:83.33333333%}.col-md-9{width:75%}.col-md-8{width:66.66666667%}.col-md-7{width:58.33333333%}.col-md-6{width:50%}.col-md-5{width:41.66666667%}.col-md-4{width:33.33333333%}.col-md-3{width:25%}.col-md-2{width:16.66666667%}.col-md-1{width:8.33333333%}.col-md-pull-12{right:100%}.col-md-pull-11{right:91.66666667%}.col-md-pull-10{right:83.33333333%}.col-md-pull-9{right:75%}.col-md-pull-8{right:66.66666667%}.col-md-pull-7{right:58.33333333%}.col-md-pull-6{right:50%}.col-md-pull-5{right:41.66666667%}.col-md-pull-4{right:33.33333333%}.col-md-pull-3{right:25%}.col-md-pull-2{right:16.66666667%}.col-md-pull-1{right:8.33333333%}.col-md-pull-0{right:auto}.col-md-push-12{left:100%}.col-md-push-11{left:91.66666667%}.col-md-push-10{left:83.33333333%}.col-md-push-9{left:75%}.col-md-push-8{left:66.66666667%}.col-md-push-7{left:58.33333333%}.col-md-push-6{left:50%}.col-md-push-5{left:41.66666667%}.col-md-push-4{left:33.33333333%}.col-md-push-3{left:25%}.col-md-push-2{left:16.66666667%}.col-md-push-1{left:8.33333333%}.col-md-push-0{left:auto}.col-md-offset-12{margin-left:100%}.col-md-offset-11{margin-left:91.66666667%}.col-md-offset-10{margin-left:83.33333333%}.col-md-offset-9{margin-left:75%}.col-md-offset-8{margin-left:66.66666667%}.col-md-offset-7{margin-left:58.33333333%}.col-md-offset-6{margin-left:50%}.col-md-offset-5{margin-left:41.66666667%}.col-md-offset-4{margin-left:33.33333333%}.col-md-offset-3{margin-left:25%}.col-md-offset-2{margin-left:16.66666667%}.col-md-offset-1{margin-left:8.33333333%}.col-md-offset-0{margin-left:0}}@media (min-width:1200px){.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9{float:left}.col-lg-12{width:100%}.col-lg-11{width:91.66666667%}.col-lg-10{width:83.33333333%}.col-lg-9{width:75%}.col-lg-8{width:66.66666667%}.col-lg-7{width:58.33333333%}.col-lg-6{width:50%}.col-lg-5{width:41.66666667%}.col-lg-4{width:33.33333333%}.col-lg-3{width:25%}.col-lg-2{width:16.66666667%}.col-lg-1{width:8.33333333%}.col-lg-pull-12{right:100%}.col-lg-pull-11{right:91.66666667%}.col-lg-pull-10{right:83.33333333%}.col-lg-pull-9{right:75%}.col-lg-pull-8{right:66.66666667%}.col-lg-pull-7{right:58.33333333%}.col-lg-pull-6{right:50%}.col-lg-pull-5{right:41.66666667%}.col-lg-pull-4{right:33.33333333%}.col-lg-pull-3{right:25%}.col-lg-pull-2{right:16.66666667%}.col-lg-pull-1{right:8.33333333%}.col-lg-pull-0{right:auto}.col-lg-push-12{left:100%}.col-lg-push-11{left:91.66666667%}.col-lg-push-10{left:83.33333333%}.col-lg-push-9{left:75%}.col-lg-push-8{left:66.66666667%}.col-lg-push-7{left:58.33333333%}.col-lg-push-6{left:50%}.col-lg-push-5{left:41.66666667%}.col-lg-push-4{left:33.33333333%}.col-lg-push-3{left:25%}.col-lg-push-2{left:16.66666667%}.col-lg-push-1{left:8.33333333%}.col-lg-push-0{left:auto}.col-lg-offset-12{margin-left:100%}.col-lg-offset-11{margin-left:91.66666667%}.col-lg-offset-10{margin-left:83.33333333%}.col-lg-offset-9{margin-left:75%}.col-lg-offset-8{margin-left:66.66666667%}.col-lg-offset-7{margin-left:58.33333333%}.col-lg-offset-6{margin-left:50%}.col-lg-offset-5{margin-left:41.66666667%}.col-lg-offset-4{margin-left:33.33333333%}.col-lg-offset-3{margin-left:25%}.col-lg-offset-2{margin-left:16.66666667%}.col-lg-offset-1{margin-left:8.33333333%}.col-lg-offset-0{margin-left:0}}pre code,table{background-color:transparent}caption{padding-top:8px;padding-bottom:8px;color:#777;text-align:left}.table{width:100%;max-width:100%;margin-bottom:20px}.table>tbody>tr>td,.table>tbody>tr>th,.table>tfoot>tr>td,.table>tfoot>tr>th,.table>thead>tr>td,.table>thead>tr>th{padding:8px;line-height:1.42857143;vertical-align:top;border-top:1px solid #ddd}.table>thead>tr>th{vertical-align:bottom;border-bottom:2px solid #ddd}.panel>.table>tbody:first-child>tr:first-child td,.panel>.table>tbody:first-child>tr:first-child th,.table>caption+thead>tr:first-child>td,.table>caption+thead>tr:first-child>th,.table>colgroup+thead>tr:first-child>td,.table>colgroup+thead>tr:first-child>th,.table>thead:first-child>tr:first-child>td,.table>thead:first-child>tr:first-child>th{border-top:0}.table>tbody+tbody{border-top:2px solid #ddd}.table .table{background-color:#fff}.table-condensed>tbody>tr>td,.table-condensed>tbody>tr>th,.table-condensed>tfoot>tr>td,.table-condensed>tfoot>tr>th,.table-condensed>thead>tr>td,.table-condensed>thead>tr>th{padding:5px}.table-bordered,.table-bordered>tbody>tr>td,.table-bordered>tbody>tr>th,.table-bordered>tfoot>tr>td,.table-bordered>tfoot>tr>th,.table-bordered>thead>tr>td,.table-bordered>thead>tr>th{border:1px solid #ddd}.table-bordered>thead>tr>td,.table-bordered>thead>tr>th{border-bottom-width:2px}.table-striped>tbody>tr:nth-of-type(odd){background-color:#f9f9f9}.table-hover>tbody>tr:hover,.table>tbody>tr.active>td,.table>tbody>tr.active>th,.table>tbody>tr>td.active,.table>tbody>tr>th.active,.table>tfoot>tr.active>td,.table>tfoot>tr.active>th,.table>tfoot>tr>td.active,.table>tfoot>tr>th.active,.table>thead>tr.active>td,.table>thead>tr.active>th,.table>thead>tr>td.active,.table>thead>tr>th.active{background-color:#f5f5f5}table col[class*=col-]{position:static;display:table-column;float:none}table td[class*=col-],table th[class*=col-]{position:static;display:table-cell;float:none}.table-hover>tbody>tr.active:hover>td,.table-hover>tbody>tr.active:hover>th,.table-hover>tbody>tr:hover>.active,.table-hover>tbody>tr>td.active:hover,.table-hover>tbody>tr>th.active:hover{background-color:#e8e8e8}.table>tbody>tr.success>td,.table>tbody>tr.success>th,.table>tbody>tr>td.success,.table>tbody>tr>th.success,.table>tfoot>tr.success>td,.table>tfoot>tr.success>th,.table>tfoot>tr>td.success,.table>tfoot>tr>th.success,.table>thead>tr.success>td,.table>thead>tr.success>th,.table>thead>tr>td.success,.table>thead>tr>th.success{background-color:#dff0d8}.table-hover>tbody>tr.success:hover>td,.table-hover>tbody>tr.success:hover>th,.table-hover>tbody>tr:hover>.success,.table-hover>tbody>tr>td.success:hover,.table-hover>tbody>tr>th.success:hover{background-color:#d0e9c6}.table>tbody>tr.info>td,.table>tbody>tr.info>th,.table>tbody>tr>td.info,.table>tbody>tr>th.info,.table>tfoot>tr.info>td,.table>tfoot>tr.info>th,.table>tfoot>tr>td.info,.table>tfoot>tr>th.info,.table>thead>tr.info>td,.table>thead>tr.info>th,.table>thead>tr>td.info,.table>thead>tr>th.info{background-color:#d9edf7}.table-hover>tbody>tr.info:hover>td,.table-hover>tbody>tr.info:hover>th,.table-hover>tbody>tr:hover>.info,.table-hover>tbody>tr>td.info:hover,.table-hover>tbody>tr>th.info:hover{background-color:#c4e3f3}.table>tbody>tr.warning>td,.table>tbody>tr.warning>th,.table>tbody>tr>td.warning,.table>tbody>tr>th.warning,.table>tfoot>tr.warning>td,.table>tfoot>tr.warning>th,.table>tfoot>tr>td.warning,.table>tfoot>tr>th.warning,.table>thead>tr.warning>td,.table>thead>tr.warning>th,.table>thead>tr>td.warning,.table>thead>tr>th.warning{background-color:#fcf8e3}.table-hover>tbody>tr.warning:hover>td,.table-hover>tbody>tr.warning:hover>th,.table-hover>tbody>tr:hover>.warning,.table-hover>tbody>tr>td.warning:hover,.table-hover>tbody>tr>th.warning:hover{background-color:#faf2cc}.table>tbody>tr.danger>td,.table>tbody>tr.danger>th,.table>tbody>tr>td.danger,.table>tbody>tr>th.danger,.table>tfoot>tr.danger>td,.table>tfoot>tr.danger>th,.table>tfoot>tr>td.danger,.table>tfoot>tr>th.danger,.table>thead>tr.danger>td,.table>thead>tr.danger>th,.table>thead>tr>td.danger,.table>thead>tr>th.danger{background-color:#f2dede}.table-hover>tbody>tr.danger:hover>td,.table-hover>tbody>tr.danger:hover>th,.table-hover>tbody>tr:hover>.danger,.table-hover>tbody>tr>td.danger:hover,.table-hover>tbody>tr>th.danger:hover{background-color:#ebcccc}.table-responsive{min-height:.01%;overflow-x:auto}@media screen and (max-width:767px){.table-responsive{width:100%;margin-bottom:15px;overflow-y:hidden;-ms-overflow-style:-ms-autohiding-scrollbar;border:1px solid #ddd}.table-responsive>.table{margin-bottom:0}.table-responsive>.table>tbody>tr>td,.table-responsive>.table>tbody>tr>th,.table-responsive>.table>tfoot>tr>td,.table-responsive>.table>tfoot>tr>th,.table-responsive>.table>thead>tr>td,.table-responsive>.table>thead>tr>th{white-space:nowrap}.table-responsive>.table-bordered{border:0}.table-responsive>.table-bordered>tbody>tr>td:first-child,.table-responsive>.table-bordered>tbody>tr>th:first-child,.table-responsive>.table-bordered>tfoot>tr>td:first-child,.table-responsive>.table-bordered>tfoot>tr>th:first-child,.table-responsive>.table-bordered>thead>tr>td:first-child,.table-responsive>.table-bordered>thead>tr>th:first-child{border-left:0}.table-responsive>.table-bordered>tbody>tr>td:last-child,.table-responsive>.table-bordered>tbody>tr>th:last-child,.table-responsive>.table-bordered>tfoot>tr>td:last-child,.table-responsive>.table-bordered>tfoot>tr>th:last-child,.table-responsive>.table-bordered>thead>tr>td:last-child,.table-responsive>.table-bordered>thead>tr>th:last-child{border-right:0}.table-responsive>.table-bordered>tbody>tr:last-child>td,.table-responsive>.table-bordered>tbody>tr:last-child>th,.table-responsive>.table-bordered>tfoot>tr:last-child>td,.table-responsive>.table-bordered>tfoot>tr:last-child>th{border-bottom:0}}fieldset,legend{padding:0;border:0}fieldset{min-width:0;margin:0}legend{width:100%;margin-bottom:20px;font-size:21px;line-height:inherit;color:#333;border-bottom:1px solid #e5e5e5}label{display:inline-block;max-width:100%;margin-bottom:5px;font-weight:700}input[type=checkbox],input[type=radio]{margin:4px 0 0;margin-top:1px \9;line-height:normal}input[type=file],legend{display:block}input[type=range]{display:block;width:100%}select[multiple],select[multiple].input-sm,select[size],textarea.form-control,textarea.input-sm{height:auto}.form-control,output{display:block;font-size:14px;line-height:1.42857143;color:#555}output{padding-top:7px}.form-control{width:100%;height:34px;padding:6px 12px;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s}.form-control:focus{border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6)}.form-control::-moz-placeholder{color:#999;opacity:1}.form-control:-ms-input-placeholder{color:#999}.form-control::-webkit-input-placeholder{color:#999}.form-control[disabled],.form-control[readonly],fieldset[disabled] .form-control{background-color:#eee;opacity:1}.form-control[disabled],fieldset[disabled] .form-control{cursor:not-allowed}input[type=search]{-webkit-appearance:none}@media screen and (-webkit-min-device-pixel-ratio:0){input[type=date],input[type=datetime-local],input[type=month],input[type=time]{line-height:34px}.input-group-sm input[type=date],.input-group-sm input[type=datetime-local],.input-group-sm input[type=month],.input-group-sm input[type=time],input[type=date].input-sm,input[type=datetime-local].input-sm,input[type=month].input-sm,input[type=time].input-sm{line-height:30px}.input-group-lg input[type=date],.input-group-lg input[type=datetime-local],.input-group-lg input[type=month],.input-group-lg input[type=time],input[type=date].input-lg,input[type=datetime-local].input-lg,input[type=month].input-lg,input[type=time].input-lg{line-height:46px}}.form-group{margin-bottom:15px}.checkbox,.radio{position:relative;display:block;margin-top:10px;margin-bottom:10px}.checkbox label,.checkbox-inline,.radio label,.radio-inline{padding-left:20px;margin-bottom:0;font-weight:400;cursor:pointer}.checkbox label,.radio label{min-height:20px}.checkbox input[type=checkbox],.checkbox-inline input[type=checkbox],.radio input[type=radio],.radio-inline input[type=radio]{position:absolute;margin-top:4px \9;margin-left:-20px}.checkbox+.checkbox,.radio+.radio{margin-top:-5px}.checkbox-inline,.radio-inline{position:relative;display:inline-block;vertical-align:middle}.checkbox-inline+.checkbox-inline,.radio-inline+.radio-inline{margin-top:0;margin-left:10px}.checkbox-inline.disabled,.checkbox.disabled label,.radio-inline.disabled,.radio.disabled label,fieldset[disabled] .checkbox label,fieldset[disabled] .checkbox-inline,fieldset[disabled] .radio label,fieldset[disabled] .radio-inline,fieldset[disabled] input[type=checkbox],fieldset[disabled] input[type=radio],input[type=checkbox].disabled,input[type=checkbox][disabled],input[type=radio].disabled,input[type=radio][disabled]{cursor:not-allowed}.form-control-static{min-height:34px;padding-top:7px;padding-bottom:7px;margin-bottom:0}.form-control-static.input-lg,.form-control-static.input-sm{padding-right:0;padding-left:0}.form-group-sm .form-control,.input-sm{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}select.form-group-sm .form-control,select.input-sm{height:30px;line-height:30px}select[multiple].form-group-sm .form-control,select[multiple].input-lg,textarea.form-group-sm .form-control,textarea.input-lg{height:auto}.form-group-sm .form-control-static{height:30px;min-height:32px;padding:5px 10px;font-size:12px;line-height:1.5}.form-group-lg .form-control,.input-lg{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}select.form-group-lg .form-control,select.input-lg{height:46px;line-height:46px}select[multiple].form-group-lg .form-control,textarea.form-group-lg .form-control{height:auto}.form-group-lg .form-control-static{height:46px;min-height:38px;padding:10px 16px;font-size:18px;line-height:1.3333333}.has-feedback{position:relative}.has-feedback .form-control{padding-right:42.5px}.form-control-feedback{position:absolute;top:0;right:0;z-index:2;display:block;width:34px;height:34px;line-height:34px;text-align:center;pointer-events:none}.input-lg+.form-control-feedback{width:46px;height:46px;line-height:46px}.input-sm+.form-control-feedback{width:30px;height:30px;line-height:30px}.has-success .checkbox,.has-success .checkbox-inline,.has-success .control-label,.has-success .help-block,.has-success .radio,.has-success .radio-inline,.has-success.checkbox label,.has-success.checkbox-inline label,.has-success.radio label,.has-success.radio-inline label{color:#3c763d}.has-success .form-control{border-color:#3c763d;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-success .form-control:focus{border-color:#2b542c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #67b168;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #67b168}.has-success .input-group-addon{color:#3c763d;background-color:#dff0d8;border-color:#3c763d}.has-success .form-control-feedback{color:#3c763d}.has-warning .checkbox,.has-warning .checkbox-inline,.has-warning .control-label,.has-warning .help-block,.has-warning .radio,.has-warning .radio-inline,.has-warning.checkbox label,.has-warning.checkbox-inline label,.has-warning.radio label,.has-warning.radio-inline label{color:#8a6d3b}.has-warning .form-control{border-color:#8a6d3b;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-warning .form-control:focus{border-color:#66512c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #c0a16b;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #c0a16b}.has-warning .input-group-addon{color:#8a6d3b;background-color:#fcf8e3;border-color:#8a6d3b}.has-warning .form-control-feedback{color:#8a6d3b}.has-error .checkbox,.has-error .checkbox-inline,.has-error .control-label,.has-error .help-block,.has-error .radio,.has-error .radio-inline,.has-error.checkbox label,.has-error.checkbox-inline label,.has-error.radio label,.has-error.radio-inline label{color:#a94442}.has-error .form-control{border-color:#a94442;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-error .form-control:focus{border-color:#843534;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483}.has-error .input-group-addon{color:#a94442;background-color:#f2dede;border-color:#a94442}.has-error .form-control-feedback{color:#a94442}.has-feedback label~.form-control-feedback{top:25px}.has-feedback label.sr-only~.form-control-feedback{top:0}.help-block{display:block;margin-top:5px;margin-bottom:10px;color:#737373}@media (min-width:768px){.form-inline .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}.form-inline .form-control{display:inline-block;width:auto;vertical-align:middle}.form-inline .form-control-static{display:inline-block}.form-inline .input-group{display:inline-table;vertical-align:middle}.form-inline .input-group .form-control,.form-inline .input-group .input-group-addon,.form-inline .input-group .input-group-btn{width:auto}.form-inline .input-group>.form-control{width:100%}.form-inline .control-label{margin-bottom:0;vertical-align:middle}.form-inline .checkbox,.form-inline .radio{display:inline-block;margin-top:0;margin-bottom:0;vertical-align:middle}.form-inline .checkbox label,.form-inline .radio label{padding-left:0}.form-inline .checkbox input[type=checkbox],.form-inline .radio input[type=radio]{position:relative;margin-left:0}.form-inline .has-feedback .form-control-feedback{top:0}}.form-horizontal .checkbox,.form-horizontal .checkbox-inline,.form-horizontal .radio,.form-horizontal .radio-inline{padding-top:7px;margin-top:0;margin-bottom:0}.form-horizontal .checkbox,.form-horizontal .radio{min-height:27px}.form-horizontal .form-group{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.form-horizontal .control-label{padding-top:7px;margin-bottom:0;text-align:right}}.form-horizontal .has-feedback .form-control-feedback{right:15px}@media (min-width:768px){.form-horizontal .form-group-lg .control-label{padding-top:14.33px}.form-horizontal .form-group-sm .control-label{padding-top:6px}}.btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:400;line-height:1.42857143;text-align:center;white-space:nowrap;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-image:none;border:1px solid transparent;border-radius:4px}.btn.active.focus,.btn.active:focus,.btn.focus,.btn:active.focus,.btn:active:focus,.btn:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}.btn.focus,.btn:focus,.btn:hover{color:#333;text-decoration:none}.btn.active,.btn:active{background-image:none;outline:0;-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125)}.btn.disabled,.btn[disabled],fieldset[disabled] .btn{pointer-events:none;cursor:not-allowed;filter:alpha(opacity=65);-webkit-box-shadow:none;box-shadow:none;opacity:.65}.btn-default{color:#333;background-color:#fff;border-color:#ccc}.btn-default.active,.btn-default.focus,.btn-default:active,.btn-default:focus,.btn-default:hover,.open>.dropdown-toggle.btn-default{color:#333;background-color:#e6e6e6;border-color:#adadad}.btn-default.active,.btn-default:active,.open>.dropdown-toggle.btn-default{background-image:none}.btn-default.disabled,.btn-default.disabled.active,.btn-default.disabled.focus,.btn-default.disabled:active,.btn-default.disabled:focus,.btn-default.disabled:hover,.btn-default[disabled],.btn-default[disabled].active,.btn-default[disabled].focus,.btn-default[disabled]:active,.btn-default[disabled]:focus,.btn-default[disabled]:hover,fieldset[disabled] .btn-default,fieldset[disabled] .btn-default.active,fieldset[disabled] .btn-default.focus,fieldset[disabled] .btn-default:active,fieldset[disabled] .btn-default:focus,fieldset[disabled] .btn-default:hover{background-color:#fff;border-color:#ccc}.btn-default .badge{color:#fff;background-color:#333}.btn-primary{color:#fff;background-color:#337ab7;border-color:#2e6da4}.btn-primary.active,.btn-primary.focus,.btn-primary:active,.btn-primary:focus,.btn-primary:hover,.open>.dropdown-toggle.btn-primary{color:#fff;background-color:#286090;border-color:#204d74}.btn-primary.active,.btn-primary:active,.open>.dropdown-toggle.btn-primary{background-image:none}.btn-primary.disabled,.btn-primary.disabled.active,.btn-primary.disabled.focus,.btn-primary.disabled:active,.btn-primary.disabled:focus,.btn-primary.disabled:hover,.btn-primary[disabled],.btn-primary[disabled].active,.btn-primary[disabled].focus,.btn-primary[disabled]:active,.btn-primary[disabled]:focus,.btn-primary[disabled]:hover,fieldset[disabled] .btn-primary,fieldset[disabled] .btn-primary.active,fieldset[disabled] .btn-primary.focus,fieldset[disabled] .btn-primary:active,fieldset[disabled] .btn-primary:focus,fieldset[disabled] .btn-primary:hover{background-color:#337ab7;border-color:#2e6da4}.btn-primary .badge{color:#337ab7;background-color:#fff}.btn-success{color:#fff;background-color:#5cb85c;border-color:#4cae4c}.btn-success.active,.btn-success.focus,.btn-success:active,.btn-success:focus,.btn-success:hover,.open>.dropdown-toggle.btn-success{color:#fff;background-color:#449d44;border-color:#398439}.btn-success.active,.btn-success:active,.open>.dropdown-toggle.btn-success{background-image:none}.btn-success.disabled,.btn-success.disabled.active,.btn-success.disabled.focus,.btn-success.disabled:active,.btn-success.disabled:focus,.btn-success.disabled:hover,.btn-success[disabled],.btn-success[disabled].active,.btn-success[disabled].focus,.btn-success[disabled]:active,.btn-success[disabled]:focus,.btn-success[disabled]:hover,fieldset[disabled] .btn-success,fieldset[disabled] .btn-success.active,fieldset[disabled] .btn-success.focus,fieldset[disabled] .btn-success:active,fieldset[disabled] .btn-success:focus,fieldset[disabled] .btn-success:hover{background-color:#5cb85c;border-color:#4cae4c}.btn-success .badge{color:#5cb85c;background-color:#fff}.btn-info{color:#fff;background-color:#5bc0de;border-color:#46b8da}.btn-info.active,.btn-info.focus,.btn-info:active,.btn-info:focus,.btn-info:hover,.open>.dropdown-toggle.btn-info{color:#fff;background-color:#31b0d5;border-color:#269abc}.btn-info.active,.btn-info:active,.open>.dropdown-toggle.btn-info{background-image:none}.btn-info.disabled,.btn-info.disabled.active,.btn-info.disabled.focus,.btn-info.disabled:active,.btn-info.disabled:focus,.btn-info.disabled:hover,.btn-info[disabled],.btn-info[disabled].active,.btn-info[disabled].focus,.btn-info[disabled]:active,.btn-info[disabled]:focus,.btn-info[disabled]:hover,fieldset[disabled] .btn-info,fieldset[disabled] .btn-info.active,fieldset[disabled] .btn-info.focus,fieldset[disabled] .btn-info:active,fieldset[disabled] .btn-info:focus,fieldset[disabled] .btn-info:hover{background-color:#5bc0de;border-color:#46b8da}.btn-info .badge{color:#5bc0de;background-color:#fff}.btn-warning{color:#fff;background-color:#f0ad4e;border-color:#eea236}.btn-warning.active,.btn-warning.focus,.btn-warning:active,.btn-warning:focus,.btn-warning:hover,.open>.dropdown-toggle.btn-warning{color:#fff;background-color:#ec971f;border-color:#d58512}.btn-warning.active,.btn-warning:active,.open>.dropdown-toggle.btn-warning{background-image:none}.btn-warning.disabled,.btn-warning.disabled.active,.btn-warning.disabled.focus,.btn-warning.disabled:active,.btn-warning.disabled:focus,.btn-warning.disabled:hover,.btn-warning[disabled],.btn-warning[disabled].active,.btn-warning[disabled].focus,.btn-warning[disabled]:active,.btn-warning[disabled]:focus,.btn-warning[disabled]:hover,fieldset[disabled] .btn-warning,fieldset[disabled] .btn-warning.active,fieldset[disabled] .btn-warning.focus,fieldset[disabled] .btn-warning:active,fieldset[disabled] .btn-warning:focus,fieldset[disabled] .btn-warning:hover{background-color:#f0ad4e;border-color:#eea236}.btn-warning .badge{color:#f0ad4e;background-color:#fff}.btn-danger{color:#fff;background-color:#d9534f;border-color:#d43f3a}.btn-danger.active,.btn-danger.focus,.btn-danger:active,.btn-danger:focus,.btn-danger:hover,.open>.dropdown-toggle.btn-danger{color:#fff;background-color:#c9302c;border-color:#ac2925}.btn-danger.active,.btn-danger:active,.open>.dropdown-toggle.btn-danger{background-image:none}.btn-danger.disabled,.btn-danger.disabled.active,.btn-danger.disabled.focus,.btn-danger.disabled:active,.btn-danger.disabled:focus,.btn-danger.disabled:hover,.btn-danger[disabled],.btn-danger[disabled].active,.btn-danger[disabled].focus,.btn-danger[disabled]:active,.btn-danger[disabled]:focus,.btn-danger[disabled]:hover,fieldset[disabled] .btn-danger,fieldset[disabled] .btn-danger.active,fieldset[disabled] .btn-danger.focus,fieldset[disabled] .btn-danger:active,fieldset[disabled] .btn-danger:focus,fieldset[disabled] .btn-danger:hover{background-color:#d9534f;border-color:#d43f3a}.btn-danger .badge{color:#d9534f;background-color:#fff}.btn-link{font-weight:400;color:#337ab7;border-radius:0}.btn-link,.btn-link.active,.btn-link:active,.btn-link[disabled],fieldset[disabled] .btn-link{background-color:transparent;-webkit-box-shadow:none;box-shadow:none}.btn-link,.btn-link:active,.btn-link:focus,.btn-link:hover{border-color:transparent}.btn-link:focus,.btn-link:hover{color:#23527c;text-decoration:underline;background-color:transparent}.btn-link[disabled]:focus,.btn-link[disabled]:hover,fieldset[disabled] .btn-link:focus,fieldset[disabled] .btn-link:hover{color:#777;text-decoration:none}.btn-group-lg>.btn,.btn-lg{padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}.btn-group-sm>.btn,.btn-group-xs>.btn,.btn-sm,.btn-xs{padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}.btn-group-xs>.btn,.btn-xs{padding:1px 5px}.btn-block{display:block;width:100%}.alert>p+p,.btn-block+.btn-block{margin-top:5px}input[type=button].btn-block,input[type=reset].btn-block,input[type=submit].btn-block{width:100%}.fade{opacity:0;-webkit-transition:opacity .15s linear;-o-transition:opacity .15s linear;transition:opacity .15s linear}.fade.in{opacity:1}.collapse{display:none}.collapse.in{display:block}tr.collapse.in{display:table-row}tbody.collapse.in{display:table-row-group}.collapsing{position:relative;height:0;overflow:hidden;-webkit-transition-timing-function:ease;-o-transition-timing-function:ease;transition-timing-function:ease;-webkit-transition-duration:.35s;-o-transition-duration:.35s;transition-duration:.35s;-webkit-transition-property:height,visibility;-o-transition-property:height,visibility;transition-property:height,visibility}.caret{display:inline-block;width:0;height:0;margin-left:2px;vertical-align:middle;border-top:4px dashed;border-right:4px solid transparent;border-left:4px solid transparent}.dropdown,.dropup{position:relative}.dropdown-toggle:focus{outline:0}.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:160px;padding:5px 0;margin:2px 0 0;font-size:14px;text-align:left;list-style:none;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #ccc;border:1px solid rgba(0,0,0,.15);border-radius:4px;-webkit-box-shadow:0 6px 12px rgba(0,0,0,.175);box-shadow:0 6px 12px rgba(0,0,0,.175)}.dropdown-menu-right,.dropdown-menu.pull-right{right:0;left:auto}.dropdown-menu .divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}.dropdown-menu>li>a{display:block;padding:3px 20px;clear:both;font-weight:400;line-height:1.42857143;color:#333;white-space:nowrap}.dropdown-menu>li>a:focus,.dropdown-menu>li>a:hover{color:#262626;text-decoration:none;background-color:#f5f5f5}.dropdown-menu>.active>a,.dropdown-menu>.active>a:focus,.dropdown-menu>.active>a:hover{color:#fff;text-decoration:none;background-color:#337ab7;outline:0}.dropdown-menu>.disabled>a,.dropdown-menu>.disabled>a:focus,.dropdown-menu>.disabled>a:hover{color:#777}.dropdown-menu>.disabled>a:focus,.dropdown-menu>.disabled>a:hover{text-decoration:none;cursor:not-allowed;background-color:transparent;background-image:none;filter:progid:DXImageTransform.Microsoft.gradient(enabled=false)}.open>.dropdown-menu{display:block}.open>a{outline:0}.dropdown-menu-left{right:auto;left:0}.dropdown-header{display:block;padding:3px 20px;font-size:12px;line-height:1.42857143;color:#777;white-space:nowrap}.dropdown-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:990}.pull-right>.dropdown-menu{right:0;left:auto}.dropup .caret,.navbar-fixed-bottom .dropdown .caret{content:"";border-top:0;border-bottom:4px solid}.dropup .dropdown-menu,.navbar-fixed-bottom .dropdown .dropdown-menu{top:auto;bottom:100%;margin-bottom:2px}@media (min-width:768px){.navbar-right .dropdown-menu{right:0;left:auto}.navbar-right .dropdown-menu-left{right:auto;left:0}}.btn-group,.btn-group-vertical{position:relative;display:inline-block;vertical-align:middle}.btn-group-vertical>.btn,.btn-group>.btn{position:relative}.btn-group>.btn{float:left}.btn-group-vertical>.btn.active,.btn-group-vertical>.btn:active,.btn-group-vertical>.btn:focus,.btn-group-vertical>.btn:hover,.btn-group>.btn.active,.btn-group>.btn:active,.btn-group>.btn:focus,.btn-group>.btn:hover{z-index:2}.btn-group .btn+.btn,.btn-group .btn+.btn-group,.btn-group .btn-group+.btn,.btn-group .btn-group+.btn-group{margin-left:-1px}.btn-toolbar{margin-left:-5px}.btn-toolbar .btn-group,.btn-toolbar .input-group{float:left}.btn-toolbar>.btn,.btn-toolbar>.btn-group,.btn-toolbar>.input-group{margin-left:5px}.btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle){border-radius:0}.btn-group>.btn:first-child{margin-left:0}.btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle){border-top-right-radius:0;border-bottom-right-radius:0}.btn-group>.btn:last-child:not(:first-child),.btn-group>.dropdown-toggle:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}.btn-group>.btn-group{float:left}.btn-group>.btn-group:not(:first-child):not(:last-child)>.btn{border-radius:0}.btn-group>.btn-group:first-child:not(:last-child)>.btn:last-child,.btn-group>.btn-group:first-child:not(:last-child)>.dropdown-toggle{border-top-right-radius:0;border-bottom-right-radius:0}.btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child{border-top-left-radius:0;border-bottom-left-radius:0}.btn-group .dropdown-toggle:active,.btn-group.open .dropdown-toggle{outline:0}.btn-group>.btn+.dropdown-toggle{padding-right:8px;padding-left:8px}.btn-group>.btn-lg+.dropdown-toggle{padding-right:12px;padding-left:12px}.btn-group.open .dropdown-toggle{-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125)}.btn-group.open .dropdown-toggle.btn-link{-webkit-box-shadow:none;box-shadow:none}.btn .caret{margin-left:0}.btn-lg .caret{border-width:5px 5px 0}.dropup .btn-lg .caret{border-width:0 5px 5px}.btn-group-vertical>.btn,.btn-group-vertical>.btn-group,.btn-group-vertical>.btn-group>.btn{display:block;width:100%;max-width:100%;float:none}.nav-tabs.nav-justified>li{float:none}.btn-group-vertical>.btn+.btn,.btn-group-vertical>.btn+.btn-group,.btn-group-vertical>.btn-group+.btn,.btn-group-vertical>.btn-group+.btn-group{margin-top:-1px;margin-left:0}.btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn,.btn-group-vertical>.btn:not(:first-child):not(:last-child){border-radius:0}.btn-group-vertical>.btn:first-child:not(:last-child){border-top-right-radius:4px;border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn:last-child:not(:first-child){border-top-left-radius:0;border-top-right-radius:0;border-bottom-left-radius:4px}.btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child,.btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle{border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child{border-top-left-radius:0;border-top-right-radius:0}.btn-group-justified,.input-group{display:table;border-collapse:separate}.btn-group-justified{width:100%;table-layout:fixed}.btn-group-justified>.btn,.btn-group-justified>.btn-group{display:table-cell;float:none;width:1%}.btn-group-justified>.btn-group .btn{width:100%}.btn-group-justified>.btn-group .dropdown-menu{left:auto}[data-toggle=buttons]>.btn input[type=checkbox],[data-toggle=buttons]>.btn input[type=radio],[data-toggle=buttons]>.btn-group>.btn input[type=checkbox],[data-toggle=buttons]>.btn-group>.btn input[type=radio]{position:absolute;clip:rect(0,0,0,0);pointer-events:none}.input-group{position:relative}.input-group[class*=col-]{float:none;padding-right:0;padding-left:0}.input-group .form-control{position:relative;z-index:2;float:left;width:100%;margin-bottom:0}.input-group-lg>.form-control,.input-group-lg>.input-group-addon,.input-group-lg>.input-group-btn>.btn{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}select.input-group-lg>.form-control,select.input-group-lg>.input-group-addon,select.input-group-lg>.input-group-btn>.btn{height:46px;line-height:46px}select[multiple].input-group-lg>.form-control,select[multiple].input-group-lg>.input-group-addon,select[multiple].input-group-lg>.input-group-btn>.btn,textarea.input-group-lg>.form-control,textarea.input-group-lg>.input-group-addon,textarea.input-group-lg>.input-group-btn>.btn{height:auto}.input-group-sm>.form-control,.input-group-sm>.input-group-addon,.input-group-sm>.input-group-btn>.btn{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}select.input-group-sm>.form-control,select.input-group-sm>.input-group-addon,select.input-group-sm>.input-group-btn>.btn{height:30px;line-height:30px}select[multiple].input-group-sm>.form-control,select[multiple].input-group-sm>.input-group-addon,select[multiple].input-group-sm>.input-group-btn>.btn,textarea.input-group-sm>.form-control,textarea.input-group-sm>.input-group-addon,textarea.input-group-sm>.input-group-btn>.btn{height:auto}.input-group .form-control,.input-group-addon,.input-group-btn{display:table-cell}.input-group .form-control:not(:first-child):not(:last-child),.input-group-addon:not(:first-child):not(:last-child),.input-group-btn:not(:first-child):not(:last-child){border-radius:0}.input-group-addon{white-space:nowrap}.input-group-addon,.input-group-btn{width:1%;vertical-align:middle}.input-group-addon{padding:6px 12px;font-size:14px;font-weight:400;line-height:1;color:#555;text-align:center;background-color:#eee;border:1px solid #ccc;border-radius:4px}.input-group-addon.input-sm{padding:5px 10px;font-size:12px;border-radius:3px}.input-group-addon.input-lg{padding:10px 16px;font-size:18px;border-radius:6px}.input-group-addon input[type=checkbox],.input-group-addon input[type=radio]{margin-top:0}.input-group .form-control:first-child,.input-group-addon:first-child,.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group>.btn,.input-group-btn:first-child>.dropdown-toggle,.input-group-btn:last-child>.btn-group:not(:last-child)>.btn,.input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle){border-top-right-radius:0;border-bottom-right-radius:0}.input-group-addon:first-child{border-right:0}.input-group .form-control:last-child,.input-group-addon:last-child,.input-group-btn:first-child>.btn-group:not(:first-child)>.btn,.input-group-btn:first-child>.btn:not(:first-child),.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group>.btn,.input-group-btn:last-child>.dropdown-toggle{border-top-left-radius:0;border-bottom-left-radius:0}.input-group-addon:last-child{border-left:0}.input-group-btn{font-size:0;white-space:nowrap}.input-group-btn,.input-group-btn>.btn{position:relative}.input-group-btn>.btn+.btn{margin-left:-1px}.input-group-btn>.btn:active,.input-group-btn>.btn:focus,.input-group-btn>.btn:hover{z-index:2}.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group{margin-right:-1px}.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group{margin-left:-1px}.nav{padding-left:0;margin-bottom:0;list-style:none}.nav>li,.nav>li>a{position:relative;display:block}.nav>li>a{padding:10px 15px}.nav>li>a:focus,.nav>li>a:hover{text-decoration:none;background-color:#eee}.nav>li.disabled>a{color:#777}.nav>li.disabled>a:focus,.nav>li.disabled>a:hover{color:#777;text-decoration:none;cursor:not-allowed;background-color:transparent}.nav .open>a,.nav .open>a:focus,.nav .open>a:hover{background-color:#eee;border-color:#337ab7}.nav .nav-divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}.nav>li>a>img{max-width:none}.nav-tabs{border-bottom:1px solid #ddd}.nav-tabs>li{float:left;margin-bottom:-1px}.nav-tabs>li>a{margin-right:2px;line-height:1.42857143;border:1px solid transparent;border-radius:4px 4px 0 0}.nav-tabs>li>a:hover{border-color:#eee #eee #ddd}.nav-tabs>li.active>a,.nav-tabs>li.active>a:focus,.nav-tabs>li.active>a:hover{color:#555;cursor:default;background-color:#fff;border:1px solid #ddd;border-bottom-color:transparent}.nav-tabs.nav-justified{width:100%;border-bottom:0}.nav-tabs.nav-justified>li>a{margin-bottom:5px;text-align:center}.nav-justified>.dropdown .dropdown-menu,.nav-tabs.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}@media (min-width:768px){.nav-tabs.nav-justified>li{display:table-cell;width:1%}.nav-tabs.nav-justified>li>a{margin-bottom:0}}.nav-tabs.nav-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:focus,.nav-tabs.nav-justified>.active>a:hover{border:1px solid #ddd}@media (min-width:768px){.nav-tabs.nav-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:focus,.nav-tabs.nav-justified>.active>a:hover{border-bottom-color:#fff}}.nav-pills>li{float:left}.nav-pills>li>a{border-radius:4px}.nav-pills>li+li{margin-left:2px}.nav-pills>li.active>a,.nav-pills>li.active>a:focus,.nav-pills>li.active>a:hover{color:#fff;background-color:#337ab7}.nav-justified>li,.nav-stacked>li{float:none}.nav-stacked>li+li{margin-top:2px;margin-left:0}.nav-justified{width:100%}.nav-justified>li>a{margin-bottom:5px;text-align:center}@media (min-width:768px){.nav-justified>li{display:table-cell;width:1%}.nav-justified>li>a{margin-bottom:0}}.nav-tabs-justified{border-bottom:0}.nav-tabs-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:focus,.nav-tabs-justified>.active>a:hover{border:1px solid #ddd}@media (min-width:768px){.nav-tabs-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:focus,.nav-tabs-justified>.active>a:hover{border-bottom-color:#fff}}.tab-content>.tab-pane{display:none}.navbar-brand>img,.tab-content>.active{display:block}.nav-tabs .dropdown-menu{margin-top:-1px;border-top-left-radius:0;border-top-right-radius:0}.navbar{position:relative;min-height:50px;margin-bottom:20px;border:1px solid transparent}@media (min-width:768px){.navbar{border-radius:4px}.navbar-header{float:left}}.navbar-collapse{padding-right:15px;padding-left:15px;overflow-x:visible;-webkit-overflow-scrolling:touch;border-top:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.1);box-shadow:inset 0 1px 0 rgba(255,255,255,.1)}.navbar-collapse.in{overflow-y:auto}@media (min-width:768px){.navbar-collapse{width:auto;border-top:0;-webkit-box-shadow:none;box-shadow:none}.navbar-collapse.collapse{display:block!important;height:auto!important;padding-bottom:0;overflow:visible!important}.navbar-collapse.in{overflow-y:visible}.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse,.navbar-static-top .navbar-collapse{padding-right:0;padding-left:0}}.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse{max-height:340px}@media (max-device-width:480px)and (orientation:landscape){.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse{max-height:200px}}.container-fluid>.navbar-collapse,.container-fluid>.navbar-header,.container>.navbar-collapse,.container>.navbar-header{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.container-fluid>.navbar-collapse,.container-fluid>.navbar-header,.container>.navbar-collapse,.container>.navbar-header{margin-right:0;margin-left:0}}.navbar-static-top{z-index:1000;border-width:0 0 1px}@media (min-width:768px){.navbar-static-top{border-radius:0}}.navbar-fixed-bottom,.navbar-fixed-top{position:fixed;right:0;left:0;z-index:1030}@media (min-width:768px){.navbar-fixed-bottom,.navbar-fixed-top{border-radius:0}}.navbar-fixed-top{top:0;border-width:0 0 1px}.navbar-fixed-bottom{bottom:0;margin-bottom:0;border-width:1px 0 0}.navbar-brand{float:left;height:50px;padding:15px;font-size:18px;line-height:20px}.navbar-brand:focus,.navbar-brand:hover{text-decoration:none}@media (min-width:768px){.navbar>.container .navbar-brand,.navbar>.container-fluid .navbar-brand{margin-left:-15px}}.navbar-toggle{position:relative;float:right;padding:9px 10px;margin-top:8px;margin-right:15px;margin-bottom:8px;background-color:transparent;background-image:none;border:1px solid transparent;border-radius:4px}.navbar-toggle:focus{outline:0}.navbar-toggle .icon-bar{display:block;width:22px;height:2px;border-radius:1px}.navbar-toggle .icon-bar+.icon-bar{margin-top:4px}@media (min-width:768px){.navbar-toggle{display:none}}.navbar-nav{margin:7.5px -15px}.navbar-nav>li>a{padding-top:10px;padding-bottom:10px;line-height:20px}@media (max-width:767px){.navbar-nav .open .dropdown-menu{position:static;float:none;width:auto;margin-top:0;background-color:transparent;border:0;-webkit-box-shadow:none;box-shadow:none}.navbar-nav .open .dropdown-menu .dropdown-header,.navbar-nav .open .dropdown-menu>li>a{padding:5px 15px 5px 25px}.navbar-nav .open .dropdown-menu>li>a{line-height:20px}.navbar-nav .open .dropdown-menu>li>a:focus,.navbar-nav .open .dropdown-menu>li>a:hover{background-image:none}}@media (min-width:768px){.navbar-nav{float:left;margin:0}.navbar-nav>li{float:left}.navbar-nav>li>a{padding-top:15px;padding-bottom:15px}}.navbar-form{padding:10px 15px;margin:8px -15px;border-top:1px solid transparent;border-bottom:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1);box-shadow:inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1)}@media (min-width:768px){.navbar-form .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}.navbar-form .form-control{display:inline-block;width:auto;vertical-align:middle}.navbar-form .form-control-static{display:inline-block}.navbar-form .input-group{display:inline-table;vertical-align:middle}.navbar-form .input-group .form-control,.navbar-form .input-group .input-group-addon,.navbar-form .input-group .input-group-btn{width:auto}.navbar-form .input-group>.form-control{width:100%}.navbar-form .control-label{margin-bottom:0;vertical-align:middle}.navbar-form .checkbox,.navbar-form .radio{display:inline-block;margin-top:0;margin-bottom:0;vertical-align:middle}.navbar-form .checkbox label,.navbar-form .radio label{padding-left:0}.navbar-form .checkbox input[type=checkbox],.navbar-form .radio input[type=radio]{position:relative;margin-left:0}.navbar-form .has-feedback .form-control-feedback{top:0}}@media (max-width:767px){.navbar-form .form-group{margin-bottom:5px}.navbar-form .form-group:last-child{margin-bottom:0}}@media (min-width:768px){.navbar-form{width:auto;padding-top:0;padding-bottom:0;margin-right:0;margin-left:0;border:0;-webkit-box-shadow:none;box-shadow:none}}.navbar-nav>li>.dropdown-menu{margin-top:0;border-top-left-radius:0;border-top-right-radius:0}.navbar-fixed-bottom .navbar-nav>li>.dropdown-menu{margin-bottom:0;border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:0;border-bottom-left-radius:0}.navbar-btn{margin-top:8px;margin-bottom:8px}.navbar-btn.btn-sm{margin-top:10px;margin-bottom:10px}.navbar-btn.btn-xs{margin-top:14px;margin-bottom:14px}.navbar-text{margin-top:15px;margin-bottom:15px}@media (min-width:768px){.navbar-text{float:left;margin-right:15px;margin-left:15px}.navbar-left{float:left!important}.navbar-right{float:right!important;margin-right:-15px}.navbar-right~.navbar-right{margin-right:0}}.navbar-default{background-color:#f8f8f8;border-color:#e7e7e7}.navbar-default .navbar-brand,.navbar-default .navbar-nav>li>a,.navbar-default .navbar-text{color:#777}.navbar-default .navbar-brand:focus,.navbar-default .navbar-brand:hover{color:#5e5e5e;background-color:transparent}.navbar-default .navbar-nav>li>a:focus,.navbar-default .navbar-nav>li>a:hover{color:#333;background-color:transparent}.navbar-default .navbar-nav>.active>a,.navbar-default .navbar-nav>.active>a:focus,.navbar-default .navbar-nav>.active>a:hover{color:#555;background-color:#e7e7e7}.navbar-default .navbar-nav>.disabled>a,.navbar-default .navbar-nav>.disabled>a:focus,.navbar-default .navbar-nav>.disabled>a:hover{color:#ccc;background-color:transparent}.navbar-default .navbar-toggle{border-color:#ddd}.navbar-default .navbar-toggle:focus,.navbar-default .navbar-toggle:hover{background-color:#ddd}.navbar-default .navbar-toggle .icon-bar{background-color:#888}.navbar-default .navbar-collapse,.navbar-default .navbar-form{border-color:#e7e7e7}.navbar-default .navbar-nav>.open>a,.navbar-default .navbar-nav>.open>a:focus,.navbar-default .navbar-nav>.open>a:hover{color:#555;background-color:#e7e7e7}@media (max-width:767px){.navbar-default .navbar-nav .open .dropdown-menu>li>a{color:#777}.navbar-default .navbar-nav .open .dropdown-menu>li>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>li>a:hover{color:#333;background-color:transparent}.navbar-default .navbar-nav .open .dropdown-menu>.active>a,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover{color:#555;background-color:#e7e7e7}.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover{color:#ccc;background-color:transparent}}.navbar-default .btn-link,.navbar-default .navbar-link{color:#777}.navbar-default .navbar-link:hover,a.list-group-item .list-group-item-heading{color:#333}.navbar-default .btn-link:focus,.navbar-default .btn-link:hover{color:#333}.navbar-default .btn-link[disabled]:focus,.navbar-default .btn-link[disabled]:hover,fieldset[disabled] .navbar-default .btn-link:focus,fieldset[disabled] .navbar-default .btn-link:hover{color:#ccc}.navbar-inverse{background-color:#222;border-color:#080808}.navbar-inverse .navbar-brand,.navbar-inverse .navbar-nav>li>a,.navbar-inverse .navbar-text{color:#9d9d9d}.navbar-inverse .navbar-brand:focus,.navbar-inverse .navbar-brand:hover,.navbar-inverse .navbar-nav>li>a:focus,.navbar-inverse .navbar-nav>li>a:hover{color:#fff;background-color:transparent}.navbar-inverse .navbar-nav>.active>a,.navbar-inverse .navbar-nav>.active>a:focus,.navbar-inverse .navbar-nav>.active>a:hover{color:#fff;background-color:#080808}.navbar-inverse .navbar-nav>.disabled>a,.navbar-inverse .navbar-nav>.disabled>a:focus,.navbar-inverse .navbar-nav>.disabled>a:hover{color:#444;background-color:transparent}.navbar-inverse .navbar-toggle{border-color:#333}.navbar-inverse .navbar-toggle:focus,.navbar-inverse .navbar-toggle:hover{background-color:#333}.navbar-inverse .navbar-toggle .icon-bar{background-color:#fff}.navbar-inverse .navbar-collapse,.navbar-inverse .navbar-form{border-color:#101010}.navbar-inverse .navbar-nav>.open>a,.navbar-inverse .navbar-nav>.open>a:focus,.navbar-inverse .navbar-nav>.open>a:hover{color:#fff;background-color:#080808}@media (max-width:767px){.navbar-inverse .navbar-nav .open .dropdown-menu>.dropdown-header{border-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu .divider{background-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu>li>a{color:#9d9d9d}.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover{color:#fff;background-color:transparent}.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:hover{color:#fff;background-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:hover{color:#444;background-color:transparent}}.navbar-inverse .btn-link,.navbar-inverse .navbar-link{color:#9d9d9d}.navbar-inverse .navbar-link:hover{color:#fff}.navbar-inverse .btn-link:focus,.navbar-inverse .btn-link:hover{color:#fff}.navbar-inverse .btn-link[disabled]:focus,.navbar-inverse .btn-link[disabled]:hover,fieldset[disabled] .navbar-inverse .btn-link:focus,fieldset[disabled] .navbar-inverse .btn-link:hover{color:#444}.breadcrumb{padding:8px 15px;margin-bottom:20px;list-style:none;background-color:#f5f5f5;border-radius:4px}.breadcrumb>li,.pagination{display:inline-block}.breadcrumb>li+li:before{padding:0 5px;color:#ccc;content:"/\00a0"}.breadcrumb>.active{color:#777}.pagination{padding-left:0;margin:20px 0;border-radius:4px}.pager li,.pagination>li{display:inline}.pagination>li>a,.pagination>li>span{position:relative;float:left;padding:6px 12px;margin-left:-1px;line-height:1.42857143;color:#337ab7;text-decoration:none;background-color:#fff;border:1px solid #ddd}.pagination>li:first-child>a,.pagination>li:first-child>span{margin-left:0;border-top-left-radius:4px;border-bottom-left-radius:4px}.pagination>li:last-child>a,.pagination>li:last-child>span{border-top-right-radius:4px;border-bottom-right-radius:4px}.pagination>li>a:focus,.pagination>li>a:hover,.pagination>li>span:focus,.pagination>li>span:hover{color:#23527c;background-color:#eee;border-color:#ddd}.pagination>.active>a,.pagination>.active>a:focus,.pagination>.active>a:hover,.pagination>.active>span,.pagination>.active>span:focus,.pagination>.active>span:hover{z-index:2;color:#fff;cursor:default;background-color:#337ab7;border-color:#337ab7}.pagination>.disabled>a,.pagination>.disabled>a:focus,.pagination>.disabled>a:hover,.pagination>.disabled>span,.pagination>.disabled>span:focus,.pagination>.disabled>span:hover{color:#777;cursor:not-allowed;background-color:#fff;border-color:#ddd}.pagination-lg>li>a,.pagination-lg>li>span{padding:10px 16px;font-size:18px}.pagination-lg>li:first-child>a,.pagination-lg>li:first-child>span{border-top-left-radius:6px;border-bottom-left-radius:6px}.pagination-lg>li:last-child>a,.pagination-lg>li:last-child>span{border-top-right-radius:6px;border-bottom-right-radius:6px}.pagination-sm>li>a,.pagination-sm>li>span{padding:5px 10px;font-size:12px}.pagination-sm>li:first-child>a,.pagination-sm>li:first-child>span{border-top-left-radius:3px;border-bottom-left-radius:3px}.pagination-sm>li:last-child>a,.pagination-sm>li:last-child>span{border-top-right-radius:3px;border-bottom-right-radius:3px}.pager{padding-left:0;margin:20px 0;text-align:center;list-style:none}.pager li>a,.pager li>span{display:inline-block;padding:5px 14px;background-color:#fff;border:1px solid #ddd;border-radius:15px}.pager li>a:focus,.pager li>a:hover{text-decoration:none;background-color:#eee}.pager .next>a,.pager .next>span{float:right}.pager .previous>a,.pager .previous>span{float:left}.pager .disabled>a,.pager .disabled>a:focus,.pager .disabled>a:hover,.pager .disabled>span{color:#777;cursor:not-allowed;background-color:#fff}.label{display:inline;padding:.2em .6em .3em;font-size:75%;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25em}a.badge:focus,a.badge:hover,a.label:focus,a.label:hover{color:#fff;text-decoration:none;cursor:pointer}.label:empty{display:none}.btn .label{position:relative;top:-1px}.label-default{background-color:#777}.label-default[href]:focus,.label-default[href]:hover{background-color:#5e5e5e}.label-primary{background-color:#337ab7}.label-primary[href]:focus,.label-primary[href]:hover{background-color:#286090}.label-success{background-color:#5cb85c}.label-success[href]:focus,.label-success[href]:hover{background-color:#449d44}.label-info{background-color:#5bc0de}.label-info[href]:focus,.label-info[href]:hover{background-color:#31b0d5}.label-warning{background-color:#f0ad4e}.label-warning[href]:focus,.label-warning[href]:hover{background-color:#ec971f}.label-danger{background-color:#d9534f}.label-danger[href]:focus,.label-danger[href]:hover{background-color:#c9302c}.badge{display:inline-block;min-width:10px;padding:3px 7px;font-size:12px;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;background-color:#777;border-radius:10px}.badge:empty{display:none}.btn .badge{position:relative;top:-1px}.btn-group-xs>.btn .badge,.btn-xs .badge{top:0;padding:1px 5px}.list-group-item.active>.badge,.nav-pills>.active>a>.badge{color:#337ab7;background-color:#fff}.list-group-item>.badge{float:right}.list-group-item>.badge+.badge{margin-right:5px}.nav-pills>li>a>.badge{margin-left:3px}.jumbotron{padding:30px 15px;margin-bottom:30px;background-color:#eee}.jumbotron,.jumbotron .h1,.jumbotron h1,a.list-group-item-danger .list-group-item-heading,a.list-group-item-info .list-group-item-heading,a.list-group-item-success .list-group-item-heading,a.list-group-item-warning .list-group-item-heading{color:inherit}.jumbotron p{margin-bottom:15px;font-size:21px;font-weight:200}.jumbotron>hr{border-top-color:#d5d5d5}.container .jumbotron,.container-fluid .jumbotron{border-radius:6px}.jumbotron .container{max-width:100%}@media screen and (min-width:768px){.jumbotron{padding:48px 0}.container .jumbotron,.container-fluid .jumbotron{padding-right:60px;padding-left:60px}.jumbotron .h1,.jumbotron h1{font-size:63px}}.thumbnail{display:block;padding:4px;margin-bottom:20px;line-height:1.42857143;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:border .2s ease-in-out;-o-transition:border .2s ease-in-out;transition:border .2s ease-in-out}.thumbnail a>img,.thumbnail>img{margin-right:auto;margin-left:auto}a.thumbnail.active,a.thumbnail:focus,a.thumbnail:hover{border-color:#337ab7}.thumbnail .caption{padding:9px;color:#333}.alert{padding:15px;margin-bottom:20px;border:1px solid transparent;border-radius:4px}.alert h4{margin-top:0;color:inherit}.alert .alert-link{font-weight:700}.alert>p,.alert>ul{margin-bottom:0}.alert-dismissable,.alert-dismissible{padding-right:35px}.alert-dismissable .close,.alert-dismissible .close{position:relative;top:-2px;right:-21px;color:inherit}.alert-success{color:#3c763d;background-color:#dff0d8;border-color:#d6e9c6}.alert-success hr{border-top-color:#c9e2b3}.alert-success .alert-link{color:#2b542c}.alert-info{color:#31708f;background-color:#d9edf7;border-color:#bce8f1}.alert-info hr{border-top-color:#a6e1ec}.alert-info .alert-link{color:#245269}.alert-warning{color:#8a6d3b;background-color:#fcf8e3;border-color:#faebcc}.alert-warning hr{border-top-color:#f7e1b5}.alert-warning .alert-link{color:#66512c}.alert-danger{color:#a94442;background-color:#f2dede;border-color:#ebccd1}.alert-danger hr{border-top-color:#e4b9c0}.alert-danger .alert-link{color:#843534}.progress{height:20px;margin-bottom:20px;overflow:hidden;background-color:#f5f5f5;border-radius:4px;-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,.1);box-shadow:inset 0 1px 2px rgba(0,0,0,.1)}.progress-bar{float:left;width:0;height:100%;font-size:12px;line-height:20px;color:#fff;text-align:center;background-color:#337ab7;-webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,.15);box-shadow:inset 0 -1px 0 rgba(0,0,0,.15);-webkit-transition:width .6s ease;-o-transition:width .6s ease;transition:width .6s ease}.progress-bar-striped,.progress-striped .progress-bar{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);-webkit-background-size:40px 40px;background-size:40px 40px}.progress-bar.active,.progress.active .progress-bar{-webkit-animation:progress-bar-stripes 2s linear infinite;-o-animation:progress-bar-stripes 2s linear infinite;animation:progress-bar-stripes 2s linear infinite}.progress-bar-success{background-color:#5cb85c}.progress-striped .progress-bar-danger,.progress-striped .progress-bar-info,.progress-striped .progress-bar-success,.progress-striped .progress-bar-warning{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)}.progress-bar-info{background-color:#5bc0de}.progress-bar-warning{background-color:#f0ad4e}.progress-bar-danger{background-color:#d9534f}.media{margin-top:15px}.media:first-child{margin-top:0}.media,.media-body{overflow:hidden;zoom:1}.media-body{width:10000px}.media-object{display:block}.media-right,.media>.pull-right{padding-left:10px}.media-left,.media>.pull-left{padding-right:10px}.media-body,.media-left,.media-right{display:table-cell;vertical-align:top}.media-middle{vertical-align:middle}.media-bottom{vertical-align:bottom}.media-heading{margin-top:0;margin-bottom:5px}.media-list{padding-left:0;list-style:none}.list-group{padding-left:0;margin-bottom:20px}.list-group-item{position:relative;display:block;padding:10px 15px;margin-bottom:-1px;background-color:#fff;border:1px solid #ddd}.list-group-item:first-child{border-top-left-radius:4px;border-top-right-radius:4px}.list-group-item:last-child{margin-bottom:0;border-bottom-right-radius:4px;border-bottom-left-radius:4px}a.list-group-item{color:#555}a.list-group-item:focus,a.list-group-item:hover{color:#555;text-decoration:none;background-color:#f5f5f5}.list-group-item.disabled,.list-group-item.disabled:focus,.list-group-item.disabled:hover{color:#777;cursor:not-allowed;background-color:#eee}.list-group-item.disabled .list-group-item-heading,.list-group-item.disabled:focus .list-group-item-heading,.list-group-item.disabled:hover .list-group-item-heading{color:inherit}.list-group-item.disabled .list-group-item-text,.list-group-item.disabled:focus .list-group-item-text,.list-group-item.disabled:hover .list-group-item-text{color:#777}.list-group-item.active,.list-group-item.active:focus,.list-group-item.active:hover{z-index:2;color:#fff;background-color:#337ab7;border-color:#337ab7}.list-group-item.active .list-group-item-heading,.list-group-item.active .list-group-item-heading>.small,.list-group-item.active .list-group-item-heading>small,.list-group-item.active:focus .list-group-item-heading,.list-group-item.active:focus .list-group-item-heading>.small,.list-group-item.active:focus .list-group-item-heading>small,.list-group-item.active:hover .list-group-item-heading,.list-group-item.active:hover .list-group-item-heading>.small,.list-group-item.active:hover .list-group-item-heading>small{color:inherit}.list-group-item.active .list-group-item-text,.list-group-item.active:focus .list-group-item-text,.list-group-item.active:hover .list-group-item-text{color:#c7ddef}.list-group-item-success{color:#3c763d;background-color:#dff0d8}a.list-group-item-success{color:#3c763d}a.list-group-item-success:focus,a.list-group-item-success:hover{color:#3c763d;background-color:#d0e9c6}a.list-group-item-success.active,a.list-group-item-success.active:focus,a.list-group-item-success.active:hover{color:#fff;background-color:#3c763d;border-color:#3c763d}.list-group-item-info{color:#31708f;background-color:#d9edf7}a.list-group-item-info{color:#31708f}a.list-group-item-info:focus,a.list-group-item-info:hover{color:#31708f;background-color:#c4e3f3}a.list-group-item-info.active,a.list-group-item-info.active:focus,a.list-group-item-info.active:hover{color:#fff;background-color:#31708f;border-color:#31708f}.list-group-item-warning{color:#8a6d3b;background-color:#fcf8e3}a.list-group-item-warning{color:#8a6d3b}a.list-group-item-warning:focus,a.list-group-item-warning:hover{color:#8a6d3b;background-color:#faf2cc}a.list-group-item-warning.active,a.list-group-item-warning.active:focus,a.list-group-item-warning.active:hover{color:#fff;background-color:#8a6d3b;border-color:#8a6d3b}.list-group-item-danger{color:#a94442;background-color:#f2dede}a.list-group-item-danger{color:#a94442}a.list-group-item-danger:focus,a.list-group-item-danger:hover{color:#a94442;background-color:#ebcccc}a.list-group-item-danger.active,a.list-group-item-danger.active:focus,a.list-group-item-danger.active:hover{color:#fff;background-color:#a94442;border-color:#a94442}.list-group-item-heading{margin-top:0;margin-bottom:5px}.list-group-item-text{margin-bottom:0;line-height:1.3}.panel{margin-bottom:20px;background-color:#fff;border:1px solid transparent;border-radius:4px;-webkit-box-shadow:0 1px 1px rgba(0,0,0,.05);box-shadow:0 1px 1px rgba(0,0,0,.05)}.panel-body{padding:15px}.panel-heading{padding:10px 15px;border-bottom:1px solid transparent;border-top-left-radius:3px;border-top-right-radius:3px}.panel-heading>.dropdown .dropdown-toggle,.panel-title,.panel-title>.small,.panel-title>.small>a,.panel-title>a,.panel-title>small,.panel-title>small>a{color:inherit}.panel-title{margin-top:0;margin-bottom:0;font-size:16px}.panel-footer{padding:10px 15px;background-color:#f5f5f5;border-top:1px solid #ddd;border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.list-group,.panel>.panel-collapse>.list-group{margin-bottom:0}.panel>.list-group .list-group-item,.panel>.panel-collapse>.list-group .list-group-item{border-width:1px 0;border-radius:0}.panel>.list-group:first-child .list-group-item:first-child,.panel>.panel-collapse>.list-group:first-child .list-group-item:first-child{border-top:0;border-top-left-radius:3px;border-top-right-radius:3px}.panel>.list-group:last-child .list-group-item:last-child,.panel>.panel-collapse>.list-group:last-child .list-group-item:last-child{border-bottom:0;border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel-heading+.list-group .list-group-item:first-child{border-top-width:0}.list-group+.panel-footer{border-top-width:0}.panel>.panel-collapse>.table,.panel>.table,.panel>.table-responsive>.table{margin-bottom:0}.panel>.panel-collapse>.table caption,.panel>.table caption,.panel>.table-responsive>.table caption{padding-right:15px;padding-left:15px}.panel>.table-responsive:first-child>.table:first-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child,.panel>.table:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child,.panel>.table:first-child>thead:first-child>tr:first-child{border-top-left-radius:3px;border-top-right-radius:3px}.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:first-child,.panel>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table:first-child>thead:first-child>tr:first-child th:first-child{border-top-left-radius:3px}.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:last-child,.panel>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table:first-child>thead:first-child>tr:first-child th:last-child{border-top-right-radius:3px}.panel>.table-responsive:last-child>.table:last-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child,.panel>.table:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child{border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:first-child,.panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:first-child{border-bottom-left-radius:3px}.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:last-child{border-bottom-right-radius:3px}.panel-group .panel-heading+.panel-collapse>.list-group,.panel-group .panel-heading+.panel-collapse>.panel-body,.panel>.panel-body+.table,.panel>.panel-body+.table-responsive,.panel>.table+.panel-body,.panel>.table-responsive+.panel-body{border-top:1px solid #ddd}.panel>.table-bordered,.panel>.table-responsive>.table-bordered{border:0}.panel>.table-bordered>tbody>tr>td:first-child,.panel>.table-bordered>tbody>tr>th:first-child,.panel>.table-bordered>tfoot>tr>td:first-child,.panel>.table-bordered>tfoot>tr>th:first-child,.panel>.table-bordered>thead>tr>td:first-child,.panel>.table-bordered>thead>tr>th:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,.panel>.table-responsive>.table-bordered>thead>tr>td:first-child,.panel>.table-responsive>.table-bordered>thead>tr>th:first-child{border-left:0}.panel>.table-bordered>tbody>tr>td:last-child,.panel>.table-bordered>tbody>tr>th:last-child,.panel>.table-bordered>tfoot>tr>td:last-child,.panel>.table-bordered>tfoot>tr>th:last-child,.panel>.table-bordered>thead>tr>td:last-child,.panel>.table-bordered>thead>tr>th:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,.panel>.table-responsive>.table-bordered>thead>tr>td:last-child,.panel>.table-responsive>.table-bordered>thead>tr>th:last-child{border-right:0}.panel>.table-bordered>tbody>tr:first-child>td,.panel>.table-bordered>tbody>tr:first-child>th,.panel>.table-bordered>thead>tr:first-child>td,.panel>.table-bordered>thead>tr:first-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>th,.panel>.table-responsive>.table-bordered>thead>tr:first-child>td,.panel>.table-responsive>.table-bordered>thead>tr:first-child>th{border-bottom:0}.panel>.table-bordered>tbody>tr:last-child>td,.panel>.table-bordered>tbody>tr:last-child>th,.panel>.table-bordered>tfoot>tr:last-child>td,.panel>.table-bordered>tfoot>tr:last-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th{border-bottom:0}.panel>.table-responsive{margin-bottom:0;border:0}.panel-group{margin-bottom:20px}.panel-group .panel{margin-bottom:0;border-radius:4px}.panel-group .panel+.panel{margin-top:5px}.panel-group .panel-heading{border-bottom:0}.panel-group .panel-footer{border-top:0}.panel-group .panel-footer+.panel-collapse .panel-body{border-bottom:1px solid #ddd}.panel-default,.well blockquote{border-color:#ddd}.panel-default>.panel-heading{color:#333;background-color:#f5f5f5;border-color:#ddd}.panel-default>.panel-heading+.panel-collapse>.panel-body{border-top-color:#ddd}.panel-default>.panel-heading .badge{color:#f5f5f5;background-color:#333}.panel-default>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#ddd}.panel-primary{border-color:#337ab7}.panel-primary>.panel-heading{color:#fff;background-color:#337ab7;border-color:#337ab7}.panel-primary>.panel-heading+.panel-collapse>.panel-body{border-top-color:#337ab7}.panel-primary>.panel-heading .badge{color:#337ab7;background-color:#fff}.panel-primary>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#337ab7}.panel-success{border-color:#d6e9c6}.panel-success>.panel-heading{color:#3c763d;background-color:#dff0d8;border-color:#d6e9c6}.panel-success>.panel-heading+.panel-collapse>.panel-body{border-top-color:#d6e9c6}.panel-success>.panel-heading .badge{color:#dff0d8;background-color:#3c763d}.panel-success>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#d6e9c6}.panel-info{border-color:#bce8f1}.panel-info>.panel-heading{color:#31708f;background-color:#d9edf7;border-color:#bce8f1}.panel-info>.panel-heading+.panel-collapse>.panel-body{border-top-color:#bce8f1}.panel-info>.panel-heading .badge{color:#d9edf7;background-color:#31708f}.panel-info>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#bce8f1}.panel-warning{border-color:#faebcc}.panel-warning>.panel-heading{color:#8a6d3b;background-color:#fcf8e3;border-color:#faebcc}.panel-warning>.panel-heading+.panel-collapse>.panel-body{border-top-color:#faebcc}.panel-warning>.panel-heading .badge{color:#fcf8e3;background-color:#8a6d3b}.panel-warning>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#faebcc}.panel-danger{border-color:#ebccd1}.panel-danger>.panel-heading{color:#a94442;background-color:#f2dede;border-color:#ebccd1}.panel-danger>.panel-heading+.panel-collapse>.panel-body{border-top-color:#ebccd1}.panel-danger>.panel-heading .badge{color:#f2dede;background-color:#a94442}.panel-danger>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#ebccd1}.embed-responsive{position:relative;display:block;height:0;padding:0;overflow:hidden}.embed-responsive .embed-responsive-item,.embed-responsive embed,.embed-responsive iframe,.embed-responsive object,.embed-responsive video{position:absolute;top:0;bottom:0;left:0;width:100%;height:100%;border:0}.embed-responsive-16by9{padding-bottom:56.25%}.embed-responsive-4by3{padding-bottom:75%}.well{min-height:20px;padding:19px;margin-bottom:20px;background-color:#f5f5f5;border:1px solid #e3e3e3;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.05);box-shadow:inset 0 1px 1px rgba(0,0,0,.05)}.well blockquote{border-color:rgba(0,0,0,.15)}.well-lg{padding:24px;border-radius:6px}.well-sm{padding:9px;border-radius:3px}.close{float:right;font-size:21px;font-weight:700;line-height:1;color:#000;text-shadow:0 1px 0 #fff;filter:alpha(opacity=20);opacity:.2}.close:focus,.close:hover{color:#000;text-decoration:none;cursor:pointer;filter:alpha(opacity=50);opacity:.5}button.close{-webkit-appearance:none;padding:0;cursor:pointer;background:0 0;border:0}.modal,.modal-open{overflow:hidden}.modal{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;-webkit-overflow-scrolling:touch;outline:0}.modal.fade .modal-dialog{-webkit-transition:-webkit-transform .3s ease-out;-o-transition:-o-transform .3s ease-out;transition:transform .3s ease-out;-webkit-transform:translate(0,-25%);-ms-transform:translate(0,-25%);-o-transform:translate(0,-25%);transform:translate(0,-25%)}.modal.in .modal-dialog{-webkit-transform:translate(0,0);-ms-transform:translate(0,0);-o-transform:translate(0,0);transform:translate(0,0)}.modal-open .modal{overflow-x:hidden;overflow-y:auto}.modal-dialog{position:relative;width:auto;margin:10px}.modal-content{position:relative;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #999;border:1px solid rgba(0,0,0,.2);border-radius:6px;outline:0;-webkit-box-shadow:0 3px 9px rgba(0,0,0,.5);box-shadow:0 3px 9px rgba(0,0,0,.5)}.modal-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1040;background-color:#000}.modal-backdrop.fade{filter:alpha(opacity=0);opacity:0}.modal-backdrop.in{filter:alpha(opacity=50);opacity:.5}.modal-header{min-height:16.43px;padding:15px;border-bottom:1px solid #e5e5e5}.modal-header .close{margin-top:-2px}.modal-title{margin:0;line-height:1.42857143}.modal-body{position:relative;padding:15px}.modal-footer{padding:15px;text-align:right;border-top:1px solid #e5e5e5}.modal-footer .btn+.btn{margin-bottom:0;margin-left:5px}.modal-footer .btn-group .btn+.btn{margin-left:-1px}.modal-footer .btn-block+.btn-block{margin-left:0}.modal-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}@media (min-width:768px){.modal-dialog{width:600px;margin:30px auto}.modal-content{-webkit-box-shadow:0 5px 15px rgba(0,0,0,.5);box-shadow:0 5px 15px rgba(0,0,0,.5)}.modal-sm{width:300px}}@media (min-width:992px){.modal-lg{width:900px}}.tooltip{position:absolute;z-index:1070;display:block;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:12px;font-weight:400;line-height:1.4;filter:alpha(opacity=0);opacity:0}.tooltip.in{filter:alpha(opacity=90);opacity:.9}.tooltip.top{padding:5px 0;margin-top:-3px}.tooltip.right{padding:0 5px;margin-left:3px}.tooltip.bottom{padding:5px 0;margin-top:3px}.tooltip.left{padding:0 5px;margin-left:-3px}.tooltip-inner{max-width:200px;padding:3px 8px;color:#fff;text-align:center;text-decoration:none;background-color:#000;border-radius:4px}.tooltip-arrow{position:absolute;width:0;height:0;border-color:transparent;border-style:solid}.tooltip.top .tooltip-arrow{bottom:0;left:50%;margin-left:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.top-left .tooltip-arrow,.tooltip.top-right .tooltip-arrow{bottom:0;margin-bottom:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.top-left .tooltip-arrow{right:5px}.tooltip.top-right .tooltip-arrow{left:5px}.tooltip.right .tooltip-arrow{top:50%;left:0;margin-top:-5px;border-width:5px 5px 5px 0;border-right-color:#000}.tooltip.left .tooltip-arrow{top:50%;right:0;margin-top:-5px;border-width:5px 0 5px 5px;border-left-color:#000}.tooltip.bottom .tooltip-arrow{top:0;left:50%;margin-left:-5px;border-width:0 5px 5px;border-bottom-color:#000}.tooltip.bottom-left .tooltip-arrow{top:0;right:5px;margin-top:-5px;border-width:0 5px 5px;border-bottom-color:#000}.tooltip.bottom-right .tooltip-arrow{top:0;left:5px;margin-top:-5px;border-width:0 5px 5px;border-bottom-color:#000}.popover{position:absolute;top:0;left:0;z-index:1060;display:none;max-width:276px;padding:1px;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:1.42857143;text-align:left;white-space:normal;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #ccc;border:1px solid rgba(0,0,0,.2);border-radius:6px;-webkit-box-shadow:0 5px 10px rgba(0,0,0,.2);box-shadow:0 5px 10px rgba(0,0,0,.2)}.popover.top{margin-top:-10px}.popover.right{margin-left:10px}.popover.bottom{margin-top:10px}.popover.left{margin-left:-10px}.popover-title{padding:8px 14px;margin:0;font-size:14px;background-color:#f7f7f7;border-bottom:1px solid #ebebeb;border-radius:5px 5px 0 0}.popover-content{padding:9px 14px}.popover>.arrow,.popover>.arrow:after{position:absolute;display:block;width:0;height:0;border-color:transparent;border-style:solid}.popover>.arrow{border-width:11px}.popover>.arrow:after{content:"";border-width:10px}.popover.top>.arrow{bottom:-11px;left:50%;margin-left:-11px;border-top-color:#999;border-top-color:rgba(0,0,0,.25);border-bottom-width:0}.popover.top>.arrow:after{bottom:1px;margin-left:-10px;content:" ";border-top-color:#fff;border-bottom-width:0}.popover.right>.arrow{top:50%;left:-11px;margin-top:-11px;border-right-color:#999;border-right-color:rgba(0,0,0,.25);border-left-width:0}.popover.right>.arrow:after{bottom:-10px;left:1px;content:" ";border-right-color:#fff;border-left-width:0}.popover.bottom>.arrow{top:-11px;left:50%;margin-left:-11px;border-top-width:0;border-bottom-color:#999;border-bottom-color:rgba(0,0,0,.25)}.popover.bottom>.arrow:after{top:1px;margin-left:-10px;content:" ";border-top-width:0;border-bottom-color:#fff}.popover.left>.arrow{top:50%;right:-11px;margin-top:-11px;border-right-width:0;border-left-color:#999;border-left-color:rgba(0,0,0,.25)}.popover.left>.arrow:after{right:1px;bottom:-10px;content:" ";border-right-width:0;border-left-color:#fff}.carousel,.carousel-inner{position:relative}.carousel-inner{width:100%;overflow:hidden}.carousel-inner>.item{position:relative;display:none;-webkit-transition:.6s ease-in-out left;-o-transition:.6s ease-in-out left;transition:.6s ease-in-out left}.carousel-inner>.item>a>img,.carousel-inner>.item>img{line-height:1}@media all and (transform-3d),(-webkit-transform-3d){.carousel-inner>.item{-webkit-transition:-webkit-transform .6s ease-in-out;-o-transition:-o-transform .6s ease-in-out;transition:transform .6s ease-in-out;-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-perspective:1000;perspective:1000}.carousel-inner>.item.active.right,.carousel-inner>.item.next{left:0;-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}.carousel-inner>.item.active.left,.carousel-inner>.item.prev{left:0;-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0)}.carousel-inner>.item.active,.carousel-inner>.item.next.left,.carousel-inner>.item.prev.right{left:0;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}.carousel-inner>.active,.carousel-inner>.next,.carousel-inner>.prev{display:block}.carousel-inner>.active,.carousel-inner>.next.left,.carousel-inner>.prev.right{left:0}.carousel-control,.carousel-inner>.next,.carousel-inner>.prev{position:absolute;top:0;width:100%}.carousel-inner>.next{left:100%}.carousel-inner>.active.left,.carousel-inner>.prev{left:-100%}.carousel-inner>.active.right{left:100%}.carousel-control{bottom:0;left:0;width:15%;font-size:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,.6);filter:alpha(opacity=50);opacity:.5}.carousel-control.left{background-image:-webkit-linear-gradient(left,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.5)),to(rgba(0,0,0,.0001)));background-image:linear-gradient(to right,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);background-repeat:repeat-x}.carousel-control.right{right:0;left:auto;background-image:-webkit-linear-gradient(left,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.0001)),to(rgba(0,0,0,.5)));background-image:linear-gradient(to right,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);background-repeat:repeat-x}.carousel-control:focus,.carousel-control:hover{color:#fff;text-decoration:none;filter:alpha(opacity=90);outline:0;opacity:.9}.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next,.carousel-control .icon-prev{position:absolute;top:50%;z-index:5;display:inline-block}.carousel-control .glyphicon-chevron-left,.carousel-control .icon-prev{left:50%;margin-left:-10px}.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next{right:50%;margin-right:-10px}.carousel-control .icon-next,.carousel-control .icon-prev{width:20px;height:20px;margin-top:-10px;font-family:serif;line-height:1}.carousel-control .icon-prev:before{content:'\2039'}.carousel-control .icon-next:before{content:'\203a'}.carousel-indicators{position:absolute;bottom:10px;left:50%;z-index:15;width:60%;padding-left:0;margin-left:-30%;text-align:center;list-style:none}.carousel-indicators li{display:inline-block;width:10px;height:10px;margin:1px;text-indent:-999px;cursor:pointer;background-color:#000 \9;background-color:transparent;border:1px solid #fff;border-radius:10px}.carousel-indicators .active{width:12px;height:12px;margin:0;background-color:#fff}.carousel-caption{position:absolute;right:15%;bottom:20px;left:15%;z-index:10;padding-top:20px;padding-bottom:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,.6)}.carousel-caption .btn{text-shadow:none}@media screen and (min-width:768px){.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next,.carousel-control .icon-prev{width:30px;height:30px;margin-top:-15px;font-size:30px}.carousel-control .glyphicon-chevron-left,.carousel-control .icon-prev{margin-left:-15px}.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next{margin-right:-15px}.carousel-caption{right:20%;left:20%;padding-bottom:30px}.carousel-indicators{bottom:20px}}.btn-group-vertical>.btn-group:after,.btn-group-vertical>.btn-group:before,.btn-toolbar:after,.btn-toolbar:before,.clearfix:after,.clearfix:before,.container-fluid:after,.container-fluid:before,.container:after,.container:before,.dl-horizontal dd:after,.dl-horizontal dd:before,.form-horizontal .form-group:after,.form-horizontal .form-group:before,.modal-footer:after,.modal-footer:before,.nav:after,.nav:before,.navbar-collapse:after,.navbar-collapse:before,.navbar-header:after,.navbar-header:before,.navbar:after,.navbar:before,.pager:after,.pager:before,.panel-body:after,.panel-body:before,.row:after,.row:before{display:table;content:" "}.btn-group-vertical>.btn-group:after,.btn-toolbar:after,.clearfix:after,.container-fluid:after,.container:after,.dl-horizontal dd:after,.form-horizontal .form-group:after,.modal-footer:after,.nav:after,.navbar-collapse:after,.navbar-header:after,.navbar:after,.pager:after,.panel-body:after,.row:after{clear:both}.center-block{display:block;margin-right:auto;margin-left:auto}.pull-right{float:right!important}.pull-left{float:left!important}.hide{display:none!important}.show{display:block!important}.invisible{visibility:hidden}.text-hide{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0}.hidden{display:none!important}.affix{position:fixed}@-ms-viewport{width:device-width}.visible-lg,.visible-lg-block,.visible-lg-inline,.visible-lg-inline-block,.visible-md,.visible-md-block,.visible-md-inline,.visible-md-inline-block,.visible-sm,.visible-sm-block,.visible-sm-inline,.visible-sm-inline-block,.visible-xs,.visible-xs-block,.visible-xs-inline,.visible-xs-inline-block{display:none!important}@media (max-width:767px){.visible-xs,.visible-xs-block{display:block!important}table.visible-xs{display:table}tr.visible-xs{display:table-row!important}td.visible-xs,th.visible-xs{display:table-cell!important}.visible-xs-inline{display:inline!important}.visible-xs-inline-block{display:inline-block!important}}@media (min-width:768px)and (max-width:991px){.visible-sm,.visible-sm-block{display:block!important}table.visible-sm{display:table}tr.visible-sm{display:table-row!important}td.visible-sm,th.visible-sm{display:table-cell!important}.visible-sm-inline{display:inline!important}.visible-sm-inline-block{display:inline-block!important}}@media (min-width:992px)and (max-width:1199px){.visible-md,.visible-md-block{display:block!important}table.visible-md{display:table}tr.visible-md{display:table-row!important}td.visible-md,th.visible-md{display:table-cell!important}.visible-md-inline{display:inline!important}.visible-md-inline-block{display:inline-block!important}}@media (min-width:1200px){.visible-lg,.visible-lg-block{display:block!important}table.visible-lg{display:table}tr.visible-lg{display:table-row!important}td.visible-lg,th.visible-lg{display:table-cell!important}.visible-lg-inline{display:inline!important}.visible-lg-inline-block{display:inline-block!important}}@media (max-width:767px){.hidden-xs{display:none!important}}@media (min-width:768px)and (max-width:991px){.hidden-sm{display:none!important}}@media (min-width:992px)and (max-width:1199px){.hidden-md{display:none!important}}@media (min-width:1200px){.hidden-lg{display:none!important}}.visible-print{display:none!important}@media print{.visible-print{display:block!important}table.visible-print{display:table}tr.visible-print{display:table-row!important}td.visible-print,th.visible-print{display:table-cell!important}}.visible-print-block{display:none!important}@media print{.visible-print-block{display:block!important}}.visible-print-inline{display:none!important}@media print{.visible-print-inline{display:inline!important}}.visible-print-inline-block{display:none!important}@media print{.visible-print-inline-block{display:inline-block!important}.hidden-print{display:none!important}}




            *{box-sizing:border-box;margin:0;padding:0;font-family:'Roboto', sans-serif;}
            .sc-logo{height:50px;}
            .main{background-color:#F1F4F5;}
            .centered-text{text-align:center;margin-left:auto;margin-right:auto;float:none;}
            .center-block{}
            .centered,.centered-abs{margin-left:auto;margin-right:auto;}
            .centered-abs{left:0;right:0}
            .verticalcenter{display:inline-block;vertical-align:middle;float:none;}
            .test-box{height:30px;width:30px;border:1px solid #ccc;display:block}
            hr{height:0;max-height:0;font-size:1px;line-height:0;clear:both;border-top:1px solid #9b9b9b;}
            .ellipsis{display:inline-block;max-width:93%;white-space:nowrap;overflow:hidden !important;text-overflow:ellipsis;}
            .ellipsis2{display:inline-block;max-width:167px;white-space:nowrap;overflow:hidden !important;text-overflow:ellipsis;}
            .ellipsis3{display:inline-block;max-width:167px;white-space:nowrap;overflow:hidden !important;text-overflow:ellipsis;}
            .text-incr-78{font-size:78%;}
            .text-incr-85{font-size:85%;}
            .text-incr-90{font-size:90%;}
            .text-incr-95{font-size:95%;}
            .text-incr-115{font-size:115%;}
            .text-incr-120{font-size:120%;}
            .text-incr-125{font-size:125%;}
            .text-incr-150{font-size:150%;}
            .text-incr-175{font-size:175%;}
            .text-incr-200{font-size:200%;}
            .font-weight-100{font-weight:100;}
            .font-weight-300{font-weight:300;}
            .font-weight-400{font-weight:400;}
            .font-weight-500{font-weight:500;}
            .pad-lr-0-mar-lr-0{padding-right:2px!important;padding-left:2px!important;}
            .pad-0{padding:0;}
            .mar-0{margin:0}
            .pad-0-mar-0{padding:0;margin:0}
            .pad-top-2{padding-top:2px;}
            .pad-top-3{padding-top:3px;}
            .pad-top-5{padding-top:5px;}
            .pad-top-7{padding-top:7px;}
            .pad-top-8{padding-top:8px;}
            .pad-top-10{padding-top:10px;}
            .pad-top-20{padding-top:20px;}
            .pad-top-30{padding-top:30px;}
            .pad-top-40{padding-top:40px;}
            .pad-top-45{padding-top:44px;}
            .pad-top-50{padding-top:50px;}
            .pad-top-100{padding-top:100px;}
            .pad-bot-5{padding-bottom:5px;}
            .pad-bot-10{padding-bottom:10px;}
            .pad-bot-20{padding-bottom:20px;}
            .pad-left-0{padding-left:0;}
            .pad-left-2{padding-left:2px;}
            .pad-left-3{padding-left:3px;}
            .pad-left-5{padding-left:5px;}
            .pad-left-6{padding-left:6px;}
            .pad-left-8{padding-left:8px;}
            .pad-left-10{padding-left:10px;}
            .pad-left-20{padding-left:20px;}
            .pad-left-35{padding-left:35px;}
            .pad-left-42{padding-left:42px;}
            .pad-left-50{padding-left:50px;}
            .pad-right-0{padding-right:0;}
            .pad-right-5{padding-right:5px;}
            .pad-right-10{padding-right:10px;}
            .pad-right-15{padding-right:15px;}
            .pad-right-20{padding-right:20px;}
            .margin-left-7{margin-left:7px;}
            .margin-left-10{margin-left:10px;}
            .margin-left-20{margin-left:20px;}
            .margin-left-30{margin-left:30px;}
            .margin-right-5{margin-right:5px;}
            .margin-right-10{margin-right:10px;}
            .margin-right-20{margin-right:20px;}
            .margin-right-25{margin-right:25px;}
            .margin-right-30{margin-right:30px;}
            .margin-right-50{margin-right:80px;}
            .margin-top--8{margin-top:-8px;}
            .margin-top-0{margin-top:0;}
            .margin-top-2{margin-top:2px;}
            .margin-top-3{margin-top:3px;}
            .margin-top-5{margin-top:5px;}
            .margin-top-8{margin-top:8px;}
            .margin-top-10{margin-top:10px;}
            .margin-top-15{margin-top:15px;}
            .margin-top-20{margin-top:20px;}
            .margin-top-30{margin-top:30px;}
            .margin-top-40{margin-top:40px;}
            .margin-top-50{margin-top:50px;}
            .margin-top-60{margin-top:60px;}
            .margin-top-70{margin-top:70px;}
            .margin-bot-10{margin-bottom:10px;}
            .margin-bot-3{margin-bottom:3px;}
            .margin-bot-5{margin-bottom:5px;}
            .margin-bot-8{margin-bottom:8px;}
            .margin-bot-10{margin-bottom:10px;}
            .margin-bot-15{margin-bottom:15px;}
            .margin-bot-25{margin-bottom:25px;}
            .margin-bot-50{margin-bottom:50px;}
            .overflow-x{overflow-x:hidden}
            a:link, a:visited, a:hover, a:active{background-color:transparent;text-decoration:none;}
            a:hover{color:#FD6A33;}
            .card a:link, .card a:active, .card a:visited{color:#888;}
            .col-md-11 .nav a:hover{color:#00bcd4;}
            .sc-landing-footer{z-index:200;background-image:linear-gradient(to bottom, rgba(50, 76, 90, 0.89) 0%, rgba(50, 76, 90, 0.79) 100%), url("/new/img/back.png")!important;}
            .schools-nav-row{padding-left:0;padding-right:12px;}
            .scholarship-profile-nav-row{padding-left:12px;padding-right:13px;}
            .landing-nav-row{padding-left:12px;padding-right:20px;}
            .clearFloat{clear:both;}
            @media (max-width:991px){.schools-nav-row{padding-right:0}
            .landing-nav-row,.scholarship-profile-nav-row{margin-left:-27px!important;padding-right:0!important;}
            }
            @media (max-width:767px){.schools-nav-row{margin-left:-30px!important;}
            .landing-nav-row,.scholarship-profile-nav-row{margin-left:-42px!important;}
            }
            .sc-no-border{border:0!important;}
            .sc-gray-back{background:#F1F4F5}
            .sc-dark-blue{background:#324c5a;}
            .sc-blue{background:#025888;}
            .sc-green{background:#00bcd4;}
            .sc-teal{background:#7fafbb}
            .sc-dark-green{background:#008da5;}
            .sc-light-grey{background:#f5f5f5;}
            .sc-medium-grey{background:#dde5e8;}
            .sc-dark-grey{background:#888;}
            .sc-white{background:#ffffff;}
            .sc-primary{background:#337AB7;}
            .sc-dark-primary{background:#1d4567;}
            .sc-orange{background:#FD6A33;}
            .sc-t-light-gray{color:#aaa;}
            .sc-t-white{color:white;}
            .sc-t-dark-blue{color:#324c5a;}
            .sc-t-dark-green{color:#008da5;}
            .sc-t-dark-green-facebook-logo{color:#007a91;}
            .sc-t-green{color:#00bcd4;}
            .sc-t-grey{color:#888;}
            .sc-t-dark-grey{color:#4a5a62;}
            .sc-t-orange{color:#FD6A33;}
            .sc-t-primary{color:#337AB7;}
            .fa-linear{-webkit-text-stroke:0.7px black;color:transparent}
            .fa-linear2{-webkit-text-stroke:0.8px white;color:transparent}
            .fa-linear3{-webkit-text-stroke:0.9px #00bcd4;color:transparent}
            .fa-linear4{-webkit-text-stroke:1px black;color:transparent}
            .fa-linear5{-webkit-text-stroke:0.9px #008da5;color:transparent}
            h1,h2,h3,h4,h5,h6,p,div,span,a,button{font-family:'Roboto', sans-serif;}
            h1{font-size:60px;}
            h3{font-size:30px;}
            h4{font-size:20px;}
            h5{font-size:18px;}
            .sc-button{min-width:110px;height:40px;text-align:center;border-radius:5px;border:0;outline:none;}
            .sc-button:focus{outline:none;}
            .sc-button:active{outline:none;}
            .sc-button2{min-width:140px;height:35px;text-align:center;border-radius:30px;border:0;outline:none;}
            .sc-button2:focus{outline:none;}
            .sc-button2:active{outline:none;}
            .sc-button3{min-width:160px;height:35px;text-align:center;border-radius:5px;border:0;outline:none;margin-bottom:10px;}
            .btn-succes{background-color:#00bcd4!important;}
            .btn-succes:hover{background-color:#00abc3 !important;}
            .btn-primary{background-color:#008da5!important;}
            .btn-primary:hover{background-color:#007991 !important;}
            button:focus, button:active{outline:none;!important;}
            .btn-primary.active, .btn-primary.focus, .btn-primary:active, .btn-primary:focus{border:none!important;outline:none!important;}
            .sc-green:hover{background:#00a6be;}
            .sc-dark-green:hover{background:#007087;}
            .sc-orange:hover{background:#f8582b;}
            a>.sc-dark-blue:hover{background:#135b91;}
            input[type="text"]{border-radius:3px;width:100%;height:40px;outline:none;padding:10px;}
            input[type="submit"]{border-radius:3px;width:100%;height:40px;outline:none;padding:10px;}
            select{color:#A4B0B4;border-radius:3px;width:100%;height:40px;outline:none;padding:10px;}
            select{-moz-appearance:treeview;cursor:pointer;}
            select:-moz-focusring{color:transparent;text-shadow:0 0 0 #000;}
            ::-moz-focus-inner{border:0;}
            option:focus{-moz-appearance:none;cursor:pointer;}
            :focus{outline:none;}
            ::-moz-focus-inner{border:0;}
            a, a:visited, a:focus, a:active, a:hover{outline:0 none !important;}
            .bootstrap-select.btn-group .dropdown-menu li a span.text:hover{color:#FD6A33;}
            .bootstrap-select:focus, .bootstrap-select:active, .bootstrap-select:visited{border:none!important;box-shadow:none!important;outline:none!important;}
            .img-circle{}
            .img-responsive{}
            .img-mini{width:50px;}
            .img-med{width:50px;}
            .img-thumb{width:65px;}
            .login-signUp-title{margin:0 0 20px 0;font-size:190%;font-weight:300}
            .login-signUp-text{margin-top:5px;margin-bottom:0;padding-bottom:0;font-size:150%;font-weight:300}
            .btn-block, .form-group .btn{height:40px;color:#f5f5f5;font-weight:300}
            .form-group .btn:hover{background-color:#00839b;color:#fff;font-weight:400;}
            .ribbonSm{height:73px;width:auto;position:absolute;right:-3.5px;top:-3px;z-index:1;}
            .ribbonMed{height:120px;width:auto;position:absolute;right:-4.5px;top:-4.5px;z-index:1;}
            .ribbonL{height:170px;width:auto;position:absolute;right:-4.5px;top:-5px;z-index:1;}
            .ribbonLarge{height:164px;width:auto;position:absolute;right:-3px;top:-5px;z-index:1;}
            .text-corner{position:absolute;z-index:2;color:#fff;font-size:110%;font-weight:400;-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-ms-transform:rotate(45deg);-o-transform:rotate(45deg);}
            .text-Sm{right:-2px;top:13px;color:#008DA5;font-weight:500}
            .text-Med{right:8px;top:34px;color:#fff;}
            .text-L{right:17px;top:60px;color:#fff;font-weight:400;}
            .text-Med,.text-L{}
            .font-weight-300{font-weight:300}
            .font-weight-400{font-weight:400}
            div>ul>.selected{background-color:transparent;border:none;box-shadow:none;}
            .langDropWhite{margin:4px -3px;width:80px;}
            .langDropWhite .dropdown-menu{background-color:#eee;padding-top:15px}
            .btn-white{background-color:transparent;box-shadow:none}
            .btn-white:focus{box-shadow:none;outline:0}
            .btn-white:hover{color:#FD6A33!important;}
            .hide{display:none}
            .btn-white:selected{color:red}
            .checkbox > label > a:visited{color:black}
            .checkbox > label > a:hover{color:black}
            .btn-facebook{background-color:#3b5998 !important;}btn-facebook
            .btn-facebook:hover{background-color:#384682 !important;}
            .btn-googleplus{background-color:#dd4b39 !important;}
            .btn-googleplus:hover{background-color:#cd4937 !important;}
            .a-text:visited{color:black}
            .wrapper-Tage{padding:0 70px;!important;}
            .checkbox{padding-left:20px;}
            .checkbox label{display:inline-block;padding-left:5px;position:relative;}
            .checkbox label::before{-o-transition:0.3s ease-in-out;-webkit-transition:0.3s ease-in-out;background-color:transparent;border-radius:3px;border:2px solid #98a6ad;content:"";display:inline-block;height:17px;left:0;top:2px;margin-left:-20px;position:absolute;transition:0.3s ease-in-out;width:17px;outline:none !important;}
            .checkbox label::after{color:#eeeeee;display:inline-block;font-size:11px;height:16px;left:0;margin-left:-20px;padding-left:3px;padding-top:1px;position:absolute;top:2px;width:16px;}
            .checkbox input[type="checkbox"]{cursor:pointer;opacity:0;z-index:1;outline:none !important;}
            .checkbox input[type="checkbox"]:disabled + label{opacity:0.65;}
            .checkbox input[type="checkbox"]:focus + label::before{outline-offset:-2px;outline:none;}
            .checkbox input[type="checkbox"]:checked + label::after{content:"\f00c";font-family:'FontAwesome';}
            .checkbox input[type="checkbox"]:disabled + label::before{background-color:#eeeeee;cursor:not-allowed;}
            .checkbox-primary input[type="checkbox"]:checked + label::before{background-color:#5d9cec;border-color:#5d9cec;}
            .checkbox-primary input[type="checkbox"]:checked + label::after{color:#ffffff;}
            input:-webkit-autofill,
            input:-webkit-autofill:hover,
            input:-webkit-autofill:focus,
            input:-webkit-autofill:active{-webkit-box-shadow:0 0 0 30px white inset!important;-webkit-text-fill-color:#000 !important;}
            .algolia-autocomplete{width:100%;outline:none!important;border-radius:5px;}
            .algolia-autocomplete .aa-input, .algolia-autocomplete .aa-hint{width:100%;}
            .algolia-autocomplete .aa-hint{}
            .algolia-autocomplete .aa-dropdown-menu{width:100%;background-color:#fff;border:1px solid #ccc;border-top:none;}
            .algolia-autocomplete .aa-dropdown-menu .aa-suggestion{cursor:pointer;padding:5px 4px;}
            .algolia-autocomplete .aa-dropdown-menu .aa-suggestion.aa-cursor{background-color:#ebebeb;}
            .algolia-autocomplete .aa-dropdown-menu .aa-suggestion em{font-weight:bold;font-style:normal;}
            .filter-title{color:#008da5;}
            .btn-change-search{border:1px solid #777;border-radius:5px;padding:9px 13px!important;margin-top:4px;margin-right:15px;}
            
            
            
            .sc-landing-menu-item>.btn-change-search:hover{border-color:#008da5!important;color:#008da5!important;}
            .clear-filter{width:100%;margin-left:0;}
            .clear-filter-mobile{width:230px;margin-left:0;}
            .sc-landing-logo-sticky, .sc-landing-menu-sandwitch-button-sticky{margin-top:-10px}
            @media (min-width:1440px){.container{width:1390px;}
            }
            @media (min-width:1350px) and (max-width:1449px){.container{width:1320px;}
            }
            @media (min-width:1250px) and (max-width:1349px){.container{width:1230px;}
            }
            @media (min-width:1200px) and (max-width:1249px){.container{width:1190px;}
            }
            @media (min-width:1150px) and (max-width:1199px){.container{width:1140px;}
            }
            @media (min-width:1110px) and (max-width:1149px){.container{width:1100px;}
            }
            @media (min-width:1050px) and (max-width:1109px){.container{width:1040px;}
            }
            @media (min-width:992px) and (max-width:1049px){.container{width:980px;}
            }
            @media (min-width:930px) and (max-width:991px){.container{width:920px;}
            }
            @media (min-width:860px) and (max-width:929px){.container{width:850px;}
            }
            @media (min-width:992px) and (max-width:1199px){}
            @media (max-width:991px){.sc-logo{height:45px;}
            .sc-landing-logo-sticky{margin-top:-16px}
            .algolia-autocomplete .aa-input, .algolia-autocomplete .aa-dropdown-menu{width:121%!important;}
            }
            @media (max-width:767px){.algolia-autocomplete .aa-input, .algolia-autocomplete .aa-dropdown-menu{width:100%!important;}
            }
            @media (max-width:480px){.hidden-xxxs{display:none !important;}
            }
            @media (max-width:340px){.hidden-xxxxs{display:none !important;}
            }
            .svg-box{position:relative;left:50%;transform:translateX(-30%);}
            #Logo{margin-top:-160px;display:block;fill:#005c73;stroke:#004a5f;stroke-miterlimit:5;}
            .Animate-Draw{fill-opacity:0;animation-timing-function:ease-in-out;animation-fill-mode:forwards;animation-iteration:1;animation-name:DrawLine, FadeStroke, FillIn;animation-delay:0.5s, 0.8s, 1s;animation-duration:1s, 0.8s, 0.9s;}
            #Draw-upperArc{stroke-dashArray:1300;stroke-dashoffset:1300;}
            #Draw-Hat{animation-delay:0.6s, 1.5s, 1.5s;animation-duration:1.5s, 0.5s, 0.5s;stroke-dashArray:1500;stroke-dashoffset:1500;}
            #Draw-Flags{animation-delay:1.3s, 1.6s, 1.6s;animation-duration:1s, 1s, 1s;stroke-dashArray:960;stroke-dashoffset:960;}
            @keyframes DrawLine{to{stroke-dashOffset:0;}
            }
            @keyframes FadeStroke{to{stroke-opacity:0;}
            }
            @keyframes FillIn{from{fill-opacity:0;}
            to{fill-opacity:1;}
            }
            * {
                font-family: 'Roboto', sans-serif;
            }
            
            .clear-fix {
                clear: both;
                display: block;
            }
            
            body {
                padding-top:140px;
                margin-top: -140px;
            }
            
            
            
            
            
            /*=============================================*/
            /*  /////////////////////////////////////////  */
            /* -------------  HEADER      ------------- */
            /*  /////////////////////////////////////////  */
            
            #header {
                background:rgba(240,240,240,0.92);
                border-bottom: 1px solid #c1c1c1;
                height: 61px;
            }
            
            #header .active a {
                padding-bottom: 5px;
                border-bottom: 2px solid #8e8e8e;
            }
            
            #header2 {z-index: 90}
            
            #header2 a:link, #header2 a:visited  {
                background-color: transparent!important;
                color: #fff;
            }
            
            
            #header2 .active a {
                color: #FD6A33;
            }
            #header2 a:hover {
                color: #dde0e1 !important;
            }
            
            /*  /////////////////////////////////////////  */
            
            .navbar-scroll li {
                top: -11px;
            }
            
            .nav-web .sc-landing-logo, .nav-web .sc-landing-logo-sticky {
                padding-top: 15px;
            }
            
            
            
            
            .nav-mobile {
                padding-top: 11px;
            }
            
            section{padding-top:100px!important; padding-bottom:100px!important;}
            /*Landing Header */
            .sc-landing-header{height:79px;background:transparent; }
            
            .sc-landing-header-sticky{background:transparent; }
            
            .sc-landing-brand{padding-top:26px!important;}
            
            .sc-landing-menu{  padding-top:10px;  }
            
            .sc-landing-menu a{  color:#324c5a;}
            .sc-landing-menu li>a:hover{background-color:transparent}
            .sc-landing-menu li>a:focus{background-color:transparent}
            /*.sc-landing-menu li>a:hover{color:#ffffff;}*/
            /*.sc-landing-menu li>a:focus{color:#ffffff;}*/
            
            
            .sc-landing-menu .btn-change-search-profile{color: #00a7bd;}
            .btn-change-search-profile:hover{color: #008a9a; !important;}
            
            .sc-landing-menu-item{padding-top:8px;}
            
            .sc-button-landing{margin-top:-4px;}
            
            .sc-landing-logo-sticky{display:block}
            .sc-landing-logo{}
            
            .sc-landing-menu-mobile-sandwitch{padding-right:20px;margin-top: 25px!important; cursor:pointer;}
            .sc-landing-menu-button-sandwitch{}
            .sc-landing-menu-sandwitch-button-sticky{display:block;}
            .sc-landing-menu-sandwitch{}
            
            .sc-landing-menu-mobile-holder{padding:20px;width:230px;height:100%;position:fixed;right:0; top:0;z-index: 999;display:none;}
            .sc-landing-menu-mobile-close{font-size:25px;cursor:pointer;}
            .sc-landing-menu-mobile-item{font-size:18px;text-align:right;color:white;font-weight:300;padding-top:20px;}
            /*=============================================*/
            
            
            /*=============================================*/
            
            body {
                background-color: #F1F4F5;
            }
            
            .main {
                min-height: 1200px;
            }
            
            .up {
                height: 70px;
            }
            
            .main-box,.main-box2 {
                min-height: 390px;
                /*border: solid 1px #e1e1e1;*/
                padding-bottom: 10px;
            }
            
            #ypotrofies{ }
            
            .main-box3 {
                /*border: solid 1px #e1e1e1;*/
                padding-bottom: 10px;
                background-color: #fff;
            }
            
            .main-box{
                background-color: #fff;
            }
            
            .main-box2 {
                background-color: #fdfdfd;
            }
            
            
            .affix {  top: 61px;  }
            
            .sidebar {  width: 300px;
                /*position: fixed;*/
                z-index: -1;
            }
            
            
            
            
            .nav-ul {height: 50px;}
            
            .sticky-bar-affix{margin-left: -15px;
                /*position: fixed;*/
                width: 705px;
                z-index: 3;
            }
            
            .hidden {display: none}
            .visible {display: block}
            
            .sticky-bar-affix li a {  padding: 0 0 0 15px; margin-top: 15px}
            
            
            .img-grid, .img-grid2 {height: 230px; width: 100%; margin-bottom: 25px;}
            .img-grid2 {height: 190px;}
            .mob-hr{display: none}
            
            /*=============================================*/
            /*  /////////////////////////////////////////  */
            /* ---------------  LEFT BOX    -------------- */
            /*  /////////////////////////////////////////  */
            .box {
                height: 213px;
                border: solid 1px #e1e1e1;
            }
            
            
            .box2 {
                height: 250px;
                border: solid 1px #e1e1e1;
            }
            
            
            
            
            
            .left-box1{
                background-color: #fff;
                border-bottom: none;
            }
            
            .left-box2{
                background-color: #f5f5f5;
                /*border-top: none;*/
            }
            
            
            .box a:link,  .box a:active, .box a:visited {  color: black}
            
            
            /* ///////////////////////  Section headers   ////////////////////////////// */
            
            
            .section-header,.section-header2,.section-header3{
                /*opacity: 0.8;*/
                background-size: cover;
                background-position: center;
                /* background-attachment: fixed;*/
                height:106px;
                border: none;
            }
            
            .section-header{
                background-image: -webkit-linear-gradient(rgba(5,5,16,0.4), rgba(0,0,5,1)),url("/new/img/section-headers/hero11c.png") ;
                background-image: linear-gradient(rgba(199, 199, 199, 0.4), #fff),url("/new/img/section-headers/hero11c2.png") ;
            }
            .section-header2{
                background-image: linear-gradient(rgba(199, 199, 199, 0.4), #fdfdfd),url("/new/img/section-headers/hero11e2.png") ;
            }
            .section-header3{
                background-image: linear-gradient(rgba(199, 199, 199, 0.4), #fff),url("/new/img/section-headers/hero11h2.png") ;
            }
            
            
            
            .title {
                /*position: absolute; top: 90px;*/
            }
            
            
            .like-btn{position: absolute; left: 22px; bottom: 5px;}
            .show-btn{position: absolute; right: 8%; bottom: 5px;}
            
            .show-more {  padding-bottom: 15px;  text-align: center; color: #777; font-weight: 200; background-color: #fff; margin-bottom: 30px;}
            .show-more:hover {cursor: pointer; color: #FD6A33}
            .more-scholarships-text,.more-scholarships-text:active,.more-scholarships-text:visited,.more-scholarships-text:focus{color: #777}
            .more-scholarships-text:hover{color: #FD6A33}
            
            
            .hex1{top: 37px; z-index: 0;}
            .hex2{top: 65px; position: relative; z-index: 0;}
            .hex-img{z-index: 5; max-height: 37px; max-width:85%; position: absolute; top: 50%; transform: translateY(-50%); margin-left: auto; margin-right: auto; left: 0; right:0;}
            
            .scholar-content{position: relative; padding-left: 70px; margin-top: -60px;}
            .scholar-text{color: #464646}
            
            .scholar-title{top: 7px; position: absolute}
            
            #img1 {height: 88px}
            .social{color: #888; font-size: 120%;}
            .socials{margin:-35px -5px; padding:0;}
            .lg-pull-left{float: left;}
            
            .socials>li>a{padding:5px 9px;}
            .socials>li:first-child a{padding-left: 0px;}
            .socials>li>a:hover{background-color: transparent;}
            .socials>li>a>i:hover{color: #FD6A33!important;}
            
            .xs-h4{padding-top: 15px;}
            
            
            /* //////////////////////////////////////////////////////////////////// */
            /* //////////////////////////////////////////////////////////////////// */
            .user-header{height: 90px; margin: 0; padding: 0;
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
                border-bottom: 1.7px solid #00bcd4;
                /*background-image: url("/new/img/wood-grey-wide3.jpg");*/
                /*background-image: url("/new/img/Grey-linen2.jpg");*/
            }
            
            .user-header,.xs-user-header{background-image: linear-gradient(#b4bebe, #c8c8c8); }
            .user-card ,.xs-user-card {  background-image: linear-gradient(#c8c8c8, #F2F2F2);  }
            
            
            .user-card { height: 180px; margin-bottom: 30px;  padding: 0;  }
            .user-img{ height: 90px; width: 90px;margin-top: 45px; margin-left: 20px; border: 1.7px solid #00bcd4; }
            .user-name{position: absolute; top: 54px;  margin-left: 5px; font-size: 150%; font-weight: 400}
            .user-info{position: absolute; top: 101px;  margin-left: 5px; font-size: 120%; font-weight: 300}
            
            .xs-user-header{height: 120px; border-bottom: 2px solid #00bcd4;}
            .xs-user-card {margin-bottom: 30px; height: 370px;}
            .xs-user-img{ height: 115px; margin-top: 55px; border: 2px solid #00bcd4;}
            .xs-user-name{font-size: 150%; font-weight: 400;  margin-top: 15px; margin-bottom: 10px; }
            .xs-name{ border-bottom: 0.2px solid #00bcd4;}
            .xs-user-info{font-size: 130%;  font-weight: 400; color: #00bcd4;   }
            
            
            
            
            
            .affix-button {height:35px;text-align:center;border-radius:5px;border:0;outline:none; margin-bottom: 10px; margin-top: 33px!important;
                 width: 316px!important;
            }
            
            /* //////////////////////////////////////////////////////////////////////////// */
            /* ///////////////////// /NEW CONTAINER WIDTH //////////////////////////////// */
            
            
            @media (max-width: 1449px)  {
               .affix-button{width: 300px!important;}
            }
            
            @media (max-width: 1349px)  {
                .affix-button{width: 277px!important;}
            }
            
            @media (max-width: 1249px)  {
                .affix-button{width: 281px!important;}
            }
            
            @media (max-width: 1199px)  {
                .affix-button{width: 265px!important;}
            }
            
            @media (max-width: 1149px)  {
                .affix-button{width: 241px!important;}
            }
            
            @media (min-width: 991px) and (max-width: 1090px)  {
                .affix-button{width: 235px!important;}
            }
            
            @media (min-width: 991px) and (max-width: 1090px)  {
                .affix-button{width: 235px!important;}
            }
            
            @media (min-width: 362px) and (max-width: 405px)  {
                .xs-none{display: none}
                .sc-button-landing{margin-top: 25px;}
            }
            
            
            /* //////////////////////////////////////////////////////////////////// */
            /* //////////////////////////////////////////////////////////////////// */
            
            .criteria-img{height: 25px; margin: 7px 0 0 10px;}
            
            /* //////////////////////////////////////////////////////////////////// */
            /* //////////////////////////////////////////////////////////////////// */
            
            
            
            .scholar-box { margin-bottom: 20px;}
            .scholar-frame{
            /*background-color: #f5f5f5;*/
            background-image: linear-gradient(#f3f3f3, #fbfbfb);
            min-height: 410px; margin-bottom: 25px; left: 55px; position: absolute; width: 340px; padding-left: 22px;
            border: 1px solid #ebebeb; border-radius: 10px;}
            .ribbon-wrapper{ position: absolute; left:-28px; width: 420px;}
            
            
            
            /* //////////////////////////////////////////////////////////////////// */
            /* //////////////////////////////////////////////////////////////////// */
            
            
            
            
            
            
            
            /* //////////////////////////////////////////////////////////////////////////////////////////////// */
            /* //////////////////////////////    MEDIA QUERIES   ////////////////////////////////////////////// */
            /* //////////////////////////////////////////////////////////////////////////////////////////////// */
            
            
            
            
            @media (min-width: 1450px)  {
                /*  */
                .sticky-bar-affix{  width: 951px;}
                .xl-margin-right { margin-right: -4px;}
            }
            
            
            
            
            
            @media (min-width: 1200px) and (max-width: 1449px) {
                .sticky-bar-affix{  width: 906px; }
                .sidebar { width: 288px!important;  }
                .xl-margin-right { margin-right: -9px;}
            
            
            }
            
            
            @media (min-width: 1200px) and (max-width: 1238px) {
                .sticky-bar-affix{  width: 854px; }
            
            
            }
            
            
            
            
            
            
            /* Landscape tablets IPAD  col-md-class */
            @media (min-width: 992px) and (max-width: 1199px) {
                /*  */
            
                .sidebar { width: 220px!important; position: relative; }
                .sticky-bar-affix{  width: 704px;}
            
                .scholar-frame{  left: 0; border: 1px solid #dcdcdc; width: 315px;}
                .ribbon-wrapper{ position: absolute; left:-25px; width: 387px;}
                .sm-margin-left{margin-left: 12px;}
            }
            
            
            /* Portrait tablets and small desktops */
            @media (min-width: 768px) and (max-width: 991px) {
                /*  */
                .sidebar {  width: 170px; position: relative;}
                .sticky-bar-affix{  width: 539px;}
                .scholar-frame{  z-index: 12; left: 0; border: 1px solid #dcdcdc; width: 320px;}
                .ribbon-wrapper{ position: absolute; left:-25px; width: 392px;}
                .sm-margin-left{margin-left: 13px;}
            }
            
            
            
            /* Landscape phones and portrait tablets */
            @media (min-width: 481px) and (max-width: 767px) {
                /*  */
                .sticky-bar-affix{   width: 680px;}
                .scholar-frame{  left: 10%; width: 80%; border-color: #00bcd4;}
                .ribbon-wrapper{ position: absolute; left:-8%; width: 133%;}
            
            }
            /* Bootstrap xs class */
            @media (min-width:601px) and (max-width: 767px) {
                /*  */
                .sticky-bar-affix{   width: 95.3%}
            
            
            }
            
            @media (min-width: 541px) and (max-width: 600px) {
                /*  */
                .sticky-bar-affix{   width: 94.5%}
            
            }
            
            
            @media (min-width: 481px) and (max-width: 540px) {
                /*  */
                .sticky-bar-affix{   width: 94.1%}
            
            }
            
            
            
            
            /* Portrait phones and smaller */
            @media (max-width: 480px) {
                /* */
                .sticky-bar-affix{   width: 93.3%}
                .img-med {width: 40px;}
                .xs-pad-top{padding-top: 6px; }
                .xs-slider{margin-top: 180px;}
                .xs-h4{font-size: 135%;}
                .socials{margin-top: 20px;    width: 107%;     text-align:center;}
                .social {font-size: 120%; }
                .socials>li{display: inline-block;}
                .lg-pull-left{float: none;}
                .xs-center{display: flex; justify-content: center; align-items: center;}
                #img1{  max-width: 30%; padding-top:5px;}
                .xs-review{float: none; clear: both;}
            
                .xs-centered-text {
                text-align:center;
                margin-left: auto;
                margin-right: auto;
                float: none;
                }
            
                .lg-pull-left{display: inline; float: left;}
            
            
                .sticky-bar-affix{   width: 680px;}
            
            
                .scholar-frame{  left: 3%; width: 94%; border-color: #00bcd4;}
                .ribbon-wrapper{ position: absolute; left:-25px; width: 133%;}
            
            }
            
            
            
            
            @media (max-width: 400px) {
                .sticky-bar-affix{   width: 91.4%}
                .img-med {width: 50px;}
                .xs-slider{margin-top: 200px;}
            
            }
            
            @media (min-width: 362px) and (max-width: 405px) {
                .like-btn{display: none}
                /*.show-btn{position: relative; text-align: center; margin-top: 110px; margin-left: 23px;}*/
                .show-btn{left: 17%; top: 330px;}
                .show-btn>a>button{ width: 160px;}
                .show-btn>a>button>i{margin-left: -5px; margin-right: 20px;}
                .text-up{margin-top: 140px!important;}
            }
            
            
            @media (min-width: 362px) and (max-width: 405px) {
                .provoli {  margin-left: 10%  }
            }
            
            
            
            @media (max-width: 361px) {
            
                /*.ribbon-wrapper{margin-left: -30px; width: 115%;}*/
                .like-btn{display: none}
                .show-btn{position: relative; text-align: center; margin-top: 85px; margin-left: 23px;}
                .show-btn>a>button{ width: 160px;}
                .show-btn>a>button>i{margin-left: -5px; margin-right: 20px;}
            
                .hex1,.hex2{ margin-left: -30px!important;}
                .scholar-left{margin-left: -30px;}
                .xxs-text{display: none;}
                .xxs-up{padding-top: -20px!important;}
                .xxs-up2{margin-top: 46px;}
                .mob-hr{display: block; margin-left: -9%; margin-top: -5%; border-color: #aaa}
            
                .scholar-title{font-size: 122%}
            
                .scholar-frame{  left: 0px; width: 260px; border-color: #00bcd4; padding-left: 37px;}
                .ribbon-wrapper{ position: absolute; left:-43px; width: 322px;}
            
                .scholar-frame{  left: -1%; width: 103%; border-color: #00bcd4;}
                .ribbon-wrapper{ position: absolute; left:-18%; width: 143%;}
                .ribbon-front{height: 40px!important;}
                .ribbon-edge-bottomright2,.ribbon-edge-bottomright,.ribbon-back-right{display: none}
                .provoli{margin-left: -25px}
            
            
            }
            
            /*@media (max-width: 405px) {*/
                /*.provoli {  margin-left: 10%  }*/
            /*}*/
            
            @media (max-width: 384px) {
                .ribbon-front{height: 55px!important;}
                .ribbon-back-right {  height: 55px!important;}
                .ribbon-edge-bottomright{  top: 55px!important;  }
            }* {
                font-family: 'Roboto', sans-serif;
            }
            
            .clear-fix {
                clear: both;
                display: block;
            }
            
            body {
                padding-top:140px;
                margin-top: -140px;
            }
            
            
            
            
            
            /*=============================================*/
            /*  /////////////////////////////////////////  */
            /* -------------  HEADER      ------------- */
            /*  /////////////////////////////////////////  */
            
            #header {
                background:rgba(240,240,240,0.92);
                border-bottom: 1px solid #c1c1c1;
                height: 61px;
            }
            
            #header .active a {
                padding-bottom: 5px;
                border-bottom: 2px solid #8e8e8e;
            }
            
            #header2 {z-index: 90}
            
            #header2 a:link, #header2 a:visited  {
                background-color: transparent!important;
                color: #fff;
            }
            
            
            #header2 .active a {
                color: #FD6A33;
            }
            #header2 a:hover {
                color: #dde0e1 !important;
            }
            
            /*  /////////////////////////////////////////  */
            
            .navbar-scroll li {
                top: -11px;
            }
            
            .nav-web .sc-landing-logo, .nav-web .sc-landing-logo-sticky {
                padding-top: 15px;
            }
            
            
            
            
            .nav-mobile {
                padding-top: 11px;
            }
            
            section{padding-top:100px!important; padding-bottom:100px!important;}
            /*Landing Header */
            .sc-landing-header{height:79px;background:transparent; }
            
            .sc-landing-header-sticky{background:transparent; }
            
            .sc-landing-brand{padding-top:26px!important;}
            
            .sc-landing-menu{  padding-top:10px;  }
            
            .sc-landing-menu a{  color:#324c5a;}
            .sc-landing-menu li>a:hover{background-color:transparent}
            .sc-landing-menu li>a:focus{background-color:transparent}
            /*.sc-landing-menu li>a:hover{color:#ffffff;}*/
            /*.sc-landing-menu li>a:focus{color:#ffffff;}*/
            
            
            .sc-landing-menu .btn-change-search-profile{color: #00a7bd;}
            .btn-change-search-profile:hover{color: #008a9a; !important;}
            
            .sc-landing-menu-item{padding-top:8px;}
            
            .sc-button-landing{margin-top:-4px;}
            
            .sc-landing-logo-sticky{display:block}
            .sc-landing-logo{}
            
            .sc-landing-menu-mobile-sandwitch{padding-right:20px;margin-top: 25px!important; cursor:pointer;}
            .sc-landing-menu-button-sandwitch{}
            .sc-landing-menu-sandwitch-button-sticky{display:block;}
            .sc-landing-menu-sandwitch{}
            
            .sc-landing-menu-mobile-holder{padding:20px;width:230px;height:100%;position:fixed;right:0; top:0;z-index: 999;display:none;}
            .sc-landing-menu-mobile-close{font-size:25px;cursor:pointer;}
            .sc-landing-menu-mobile-item{font-size:18px;text-align:right;color:white;font-weight:300;padding-top:20px;}
            /*=============================================*/
            
            
            /*=============================================*/
            
            body {
                background-color: #F1F4F5;
            }
            
            .main {
                min-height: 1200px;
            }
            
            .up {
                height: 70px;
            }
            
            .main-box,.main-box2 {
                min-height: 390px;
                /*border: solid 1px #e1e1e1;*/
                padding-bottom: 10px;
            }
            
            #ypotrofies{ }
            
            .main-box3 {
                /*border: solid 1px #e1e1e1;*/
                padding-bottom: 10px;
                background-color: #fff;
            }
            
            .main-box{
                background-color: #fff;
            }
            
            .main-box2 {
                background-color: #fdfdfd;
            }
            
            
            .affix {  top: 61px;  }
            
            .sidebar {  width: 300px;
                /*position: fixed;*/
                z-index: -1;
            }
            
            
            
            
            .nav-ul {height: 50px;}
            
            .sticky-bar-affix{margin-left: -15px;
                /*position: fixed;*/
                width: 705px;
                z-index: 3;
            }
            
            .hidden {display: none}
            .visible {display: block}
            
            .sticky-bar-affix li a {  padding: 0 0 0 15px; margin-top: 15px}
            
            
            .img-grid, .img-grid2 {height: 230px; width: 100%; margin-bottom: 25px;}
            .img-grid2 {height: 190px;}
            .mob-hr{display: none}
            
            /*=============================================*/
            /*  /////////////////////////////////////////  */
            /* ---------------  LEFT BOX    -------------- */
            /*  /////////////////////////////////////////  */
            .box {
                height: 213px;
                border: solid 1px #e1e1e1;
            }
            
            
            .box2 {
                height: 250px;
                border: solid 1px #e1e1e1;
            }
            
            
            
            
            
            .left-box1{
                background-color: #fff;
                border-bottom: none;
            }
            
            .left-box2{
                background-color: #f5f5f5;
                /*border-top: none;*/
                position: relative;
            }
            
            
            .box a:link,  .box a:active, .box a:visited {  color: black}
            
            
            /* ///////////////////////  Section headers   ////////////////////////////// */
            
            
            .section-header,.section-header2,.section-header3{
                /*opacity: 0.8;*/
                background-size: cover;
                background-position: center;
                /* background-attachment: fixed;*/
                height:106px;
                border: none;
            }
            
            .section-header{
                background-image: -webkit-linear-gradient(rgba(5,5,16,0.4), rgba(0,0,5,1)),url("/new/img/section-headers/hero11c.png") ;
                background-image: linear-gradient(rgba(199, 199, 199, 0.4), #fff),url("/new/img/section-headers/hero11c2.png") ;
            }
            .section-header2{
                background-image: linear-gradient(rgba(199, 199, 199, 0.4), #fdfdfd),url("/new/img/section-headers/hero11e2.png") ;
            }
            .section-header3{
                background-image: linear-gradient(rgba(199, 199, 199, 0.4), #fff),url("/new/img/section-headers/hero11h2.png") ;
            }
            
            
            
            .title {
                /*position: absolute; top: 90px;*/
            }
            
            
            .like-btn{position: absolute; left: 22px; bottom: 5px;}
            .show-btn{position: absolute; right: 8%; bottom: 5px;}
            
            .show-more {  padding-bottom: 15px;  text-align: center; color: #777; font-weight: 200; background-color: #fff; margin-bottom: 30px;}
            .show-more:hover {cursor: pointer; color: #FD6A33}
            .more-scholarships-text,.more-scholarships-text:active,.more-scholarships-text:visited,.more-scholarships-text:focus{color: #777}
            .more-scholarships-text:hover{color: #FD6A33}
            
            
            .hex1{top: 37px; z-index: 0;}
            .hex2{top: 65px; position: relative; z-index: 0;}
            .hex-img{z-index: 5; max-height: 37px; max-width:85%; position: absolute; top: 50%; transform: translateY(-50%); margin-left: auto; margin-right: auto; left: 0; right:0;}
            
            .scholar-content{position: relative; padding-left: 70px; margin-top: -60px;}
            .scholar-text{color: #464646}
            
            .scholar-title{top: 7px; position: absolute}
            
            #img1 {height: 88px}
            .social{color: #888; font-size: 120%;}
            .socials{margin:-35px -5px; padding:0;}
            .lg-pull-left{float: left;}
            
            .socials>li>a{padding:5px 9px;}
            .socials>li:first-child a{padding-left: 0px;}
            .socials>li>a:hover{background-color: transparent;}
            .socials>li>a>i:hover{color: #FD6A33!important;}
            
            .xs-h4{padding-top: 15px;}
            
            
            /* //////////////////////////////////////////////////////////////////// */
            /* //////////////////////////////////////////////////////////////////// */
            .user-header{height: 90px; margin: 0; padding: 0;
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
                border-bottom: 1.7px solid #00bcd4;
                /*background-image: url("/new/img/wood-grey-wide3.jpg");*/
                /*background-image: url("/new/img/Grey-linen2.jpg");*/
            }
            
            .user-header,.xs-user-header{background-image: linear-gradient(#b4bebe, #c8c8c8); }
            .user-card ,.xs-user-card {  background-image: linear-gradient(#c8c8c8, #F2F2F2);  }
            
            
            .user-card { height: 180px; margin-bottom: 30px;  padding: 0;  }
            .user-img{ height: 90px; width: 90px;margin-top: 45px; margin-left: 20px; border: 1.7px solid #00bcd4; }
            .user-name{position: absolute; top: 54px;  margin-left: 5px; font-size: 150%; font-weight: 400}
            .user-info{position: absolute; top: 101px;  margin-left: 5px; font-size: 120%; font-weight: 300}
            
            .xs-user-header{height: 120px; border-bottom: 2px solid #00bcd4;}
            .xs-user-card {margin-bottom: 30px; height: 370px;}
            .xs-user-img{ height: 115px; margin-top: 55px; border: 2px solid #00bcd4;}
            .xs-user-name{font-size: 150%; font-weight: 400;  margin-top: 15px; margin-bottom: 10px; }
            .xs-name{ border-bottom: 0.2px solid #00bcd4;}
            .xs-user-info{font-size: 130%;  font-weight: 400; color: #00bcd4;   }
            
            
            
            
            
            .affix-button {height:35px;text-align:center;border-radius:5px;border:0;outline:none; margin-bottom: 10px; margin-top: 33px!important;
                 width: 316px!important;
            }
            
            .boxAlsoContainer{padding: 0;}
            .innerPadding{padding:15px;}
            .boxAlso{
                height: 285px; border: 1px solid #bbb; border-radius: 5px; background: #f8f8f8; padding: 0; box-sizing: border-box;
            }
            
            .upImgContainer{height: 170px; background: #f0f0f0}
            
            
            .boxAlso, .upImg{ border-top-left-radius: 4px; border-top-right-radius: 4px;
            }
            
            .upImg{ width: 100%; height: 170px; object-fit: cover; opacity: 0.7;
            }
            
            
            a .boxAlso h1{font-size: 130%; color: #006373; text-align: center; padding: 5px 15px; line-height: 23px
            }
            
            /*.alsoText:hover{color: #FD6A33}*/
            
            /* //////////////////////////////////////////////////////////////////////////// */
            /* ///////////////////// /NEW CONTAINER WIDTH //////////////////////////////// */
            
            
            @media (max-width: 1449px)  {
               .affix-button{width: 300px!important;}
            }
            
            @media (max-width: 1349px)  {
                .affix-button{width: 277px!important;}
            }
            
            @media (max-width: 1249px)  {
                .affix-button{width: 281px!important;}
            }
            
            @media (max-width: 1199px)  {
                .affix-button{width: 265px!important;}
            }
            
            @media (max-width: 1149px)  {
                .affix-button{width: 241px!important;}
            }
            
            @media (min-width: 991px) and (max-width: 1090px)  {
                .affix-button{width: 235px!important;}
            }
            
            @media (min-width: 991px) and (max-width: 1090px)  {
                .affix-button{width: 235px!important;}
            }
            
            @media (min-width: 362px) and (max-width: 405px)  {
                .xs-none{display: none}
                .sc-button-landing{margin-top: 25px;}
            }
            
            
            /* //////////////////////////////////////////////////////////////////// */
            /* //////////////////////////////////////////////////////////////////// */
            
            .criteria-img{height: 25px; margin: 7px 0 0 10px;}
            
            /* //////////////////////////////////////////////////////////////////// */
            /* //////////////////////////////////////////////////////////////////// */
            
            
            
            .scholar-box { margin-bottom: 20px;}
            .scholar-frame{
            /*background-color: #f5f5f5;*/
            background-image: linear-gradient(#f3f3f3, #fbfbfb);
            min-height: 410px; margin-bottom: 25px; left: 55px; position: absolute; width: 340px; padding-left: 22px;
            border: 1px solid #ebebeb; border-radius: 10px;}
            .ribbon-wrapper{ position: absolute; left:-28px; width: 420px;}
            
            
            
            /* //////////////////////////////////////////////////////////////////// */
            /* //////////////////////////////////////////////////////////////////// */
            
            
            
            
            
            
            
            /* //////////////////////////////////////////////////////////////////////////////////////////////// */
            /* //////////////////////////////    MEDIA QUERIES   ////////////////////////////////////////////// */
            /* //////////////////////////////////////////////////////////////////////////////////////////////// */
            
            
            
            
            @media (min-width: 1450px)  {
                /*  */
                .sticky-bar-affix{  width: 951px;}
                .xl-margin-right { margin-right: -4px;}
            }
            
            
            
            
            
            @media (min-width: 1200px) and (max-width: 1449px) {
                .sticky-bar-affix{  width: 906px; }
                .sidebar { width: 288px!important;  }
                .xl-margin-right { margin-right: -9px;}
            
            
            }
            
            
            @media (min-width: 1200px) and (max-width: 1238px) {
                .sticky-bar-affix{  width: 854px; }
            
            
            }
            
            
            
            
            
            
            /* Landscape tablets IPAD  col-md-class */
            @media (min-width: 992px) and (max-width: 1199px) {
                /*  */
            
                .sidebar { width: 220px!important; position: relative; }
                .sticky-bar-affix{  width: 704px;}
            
                .scholar-frame{  left: 0; border: 1px solid #dcdcdc; width: 315px;}
                .ribbon-wrapper{ position: absolute; left:-25px; width: 387px;}
                .sm-margin-left{margin-left: 12px;}
            }
            
            
            /* Portrait tablets and small desktops */
            @media (min-width: 768px) and (max-width: 991px) {
                /*  */
                .sidebar {  width: 170px; position: relative;}
                .sticky-bar-affix{  width: 539px;}
                .scholar-frame{  z-index: 12; left: 0; border: 1px solid #dcdcdc; width: 320px;}
                .ribbon-wrapper{ position: absolute; left:-25px; width: 392px;}
                .sm-margin-left{margin-left: 13px;}
            }
            
            
            
            /* Landscape phones and portrait tablets */
            @media (min-width: 481px) and (max-width: 767px) {
                /*  */
                .sticky-bar-affix{   width: 680px;}
                .scholar-frame{  left: 10%; width: 80%; border-color: #00bcd4;}
                .ribbon-wrapper{ position: absolute; left:-8%; width: 133%;}
            
            }
            /* Bootstrap xs class */
            @media (min-width:601px) and (max-width: 767px) {
                /*  */
                .sticky-bar-affix{   width: 95.3%}
            
            
            }
            
            @media (min-width: 541px) and (max-width: 600px) {
                /*  */
                .sticky-bar-affix{   width: 94.5%}
            
            }
            
            
            @media (min-width: 481px) and (max-width: 540px) {
                /*  */
                .sticky-bar-affix{   width: 94.1%}
            
            }
            
            
            
            
            /* Portrait phones and smaller */
            @media (max-width: 480px) {
                /* */
                .sticky-bar-affix{   width: 93.3%}
                .img-med {width: 40px;}
                .xs-pad-top{padding-top: 6px; }
                .xs-slider{margin-top: 180px;}
                .xs-h4{font-size: 135%;}
                .socials{margin-top: 20px;    width: 107%;     text-align:center;}
                .social {font-size: 120%; }
                .socials>li{display: inline-block;}
                .lg-pull-left{float: none;}
                .xs-center{display: flex; justify-content: center; align-items: center;}
                #img1{  max-width: 30%; padding-top:5px;}
                .xs-review{float: none; clear: both;}
            
                .xs-centered-text {
                text-align:center;
                margin-left: auto;
                margin-right: auto;
                float: none;
                }
            
                .lg-pull-left{display: inline; float: left;}
            
            
                .sticky-bar-affix{   width: 680px;}
            
            
                .scholar-frame{  left: 3%; width: 94%; border-color: #00bcd4;}
                .ribbon-wrapper{ position: absolute; left:-25px; width: 133%;}
            
            }
            
            
            
            
            @media (max-width: 400px) {
                .sticky-bar-affix{   width: 91.4%}
                .img-med {width: 50px;}
                .xs-slider{margin-top: 200px;}
            
            }
            
            @media (min-width: 362px) and (max-width: 405px) {
                .like-btn{display: none}
                /*.show-btn{position: relative; text-align: center; margin-top: 110px; margin-left: 23px;}*/
                .show-btn{left: 17%; top: 330px;}
                .show-btn>a>button{ width: 160px;}
                .show-btn>a>button>i{margin-left: -5px; margin-right: 20px;}
                .text-up{margin-top: 140px!important;}
            }
            
            
            @media (min-width: 362px) and (max-width: 405px) {
                .provoli {  margin-left: 10%  }
            }
            
            
            
            @media (max-width: 361px) {
            
                /*.ribbon-wrapper{margin-left: -30px; width: 115%;}*/
                .like-btn{display: none}
                .show-btn{position: relative; text-align: center; margin-top: 85px; margin-left: 23px;}
                .show-btn>a>button{ width: 160px;}
                .show-btn>a>button>i{margin-left: -5px; margin-right: 20px;}
            
                .hex1,.hex2{ margin-left: -30px!important;}
                .scholar-left{margin-left: -30px;}
                .xxs-text{display: none;}
                .xxs-up{padding-top: -20px!important;}
                .xxs-up2{margin-top: 46px;}
                .mob-hr{display: block; margin-left: -9%; margin-top: -5%; border-color: #aaa}
            
                .scholar-title{font-size: 122%}
            
                .scholar-frame{  left: 0px; width: 260px; border-color: #00bcd4; padding-left: 37px;}
                .ribbon-wrapper{ position: absolute; left:-43px; width: 322px;}
            
                .scholar-frame{  left: -1%; width: 103%; border-color: #00bcd4;}
                .ribbon-wrapper{ position: absolute; left:-18%; width: 143%;}
                .ribbon-front{height: 40px!important;}
                .ribbon-edge-bottomright2,.ribbon-edge-bottomright,.ribbon-back-right{display: none}
                .provoli{margin-left: -25px}
            
            
            }
            
            /*@media (max-width: 405px) {*/
                /*.provoli {  margin-left: 10%  }*/
            /*}*/
            
            @media (max-width: 384px) {
                .ribbon-front{height: 55px!important;}
                .ribbon-back-right {  height: 55px!important;}
                .ribbon-edge-bottomright{  top: 55px!important;  }
            }
            /* //////////////////////// Horizontal ribbon style ////////////////////////////// */
            /* /////////////////////////////////////////////////////////////////////////////// */
            
            
            .ribbon-wrapper {
                position: relative;
                top: 20px;
            }
            .ribbon-front {
                width:84%;   /*++++++++++++*/
                position: relative;
                left: 0;
                z-index: 2;
                height: 40px;
                height: 40px;
            }
            
            /*.ribbon-front {background-color: #00bcd4;}*/
            
            
            
            .ribbon-front,
            .ribbon-back-right
            {
                -moz-box-shadow: 0px 0px 4px rgba(0,0,0,0.55);
                -khtml-box-shadow: 0px 0px 4px rgba(0,0,0,0.55);
                -webkit-box-shadow: 0px 0px 4px rgba(0,0,0,0.55);
                -o-box-shadow: 0px 0px 4px rgba(0,0,0,0.55);
            }
            
            .ribbon-edge-topright,
            .ribbon-edge-bottomright,
            .ribbon-edge-topright2,
            .ribbon-edge-bottomright2 {
                position: absolute;
                z-index: 1;
                border-style:solid;
                height:0px;
                width:0px;
            }
            
            .ribbon-edge-bottomright,.ribbon-edge-bottomright2 {  top: 40px;  }
            
            
            .ribbon-edge-topright,
            .ribbon-edge-bottomright,
            .ribbon-edge-topright2,
            .ribbon-edge-bottomright2 {
                left: 82%;        /*++++++++++++*/
                border-color: transparent #008da5;
                z-index: 1;
            }
            
            .ribbon-edge-topright2,
            .ribbon-edge-bottomright2 {
                border-color: transparent #1d4567;
            }
            
            
            .ribbon-edge-topright,.ribbon-edge-topright2 {
                top: 0px;
                border-width: 0px 0 0 10px;
            }
            .ribbon-edge-bottomright,.ribbon-edge-bottomright2 {
                border-width: 0 0 5px 10px;
            }
            
            
            .ribbon-back-right {
                position: absolute;
                top: 5px;
                left: 82%;        /*++++++++++++*/
                width: 20px;
                height: 40px;
                z-index: 0;
            }
            
            /*.ribbon-back-right {  background-color: #00bcd4;  }*/
            
            .hexagon,.hexagon2,.hexagon3  {
                position: relative;
                width: 60px;
                height: 34.64px;
                background-color: #f6f6f6;
                margin: 17.32px 0;
                border-left: solid 2px #00bcd4;
                border-right: solid 2px #00bcd4;
            }
            
            .hexagon2,.hexagon2:before, .hexagon2:after, .hexagon3,.hexagon3:before, .hexagon3:after {box-shadow: 0 0 20px rgba(175, 175, 175, 0.6);}
            
            .hexagon2  {
                border-left: solid 2px #FD6A33;
                border-right: solid 2px #FD6A33;
            }
            
            .hexagon:before, .hexagon:after,
            .hexagon2:before, .hexagon2:after,
            .hexagon3:before, .hexagon3:after
            {
                content: "";
                position: absolute;
                z-index: 1;
                width: 42.43px;
                height: 42.43px;
                -webkit-transform: scaleY(0.5774) rotate(-45deg);
                -ms-transform: scaleY(0.5774) rotate(-45deg);
                transform: scaleY(0.5774) rotate(-45deg);
                background-color: inherit;
                left: 6.7868px;
            }
            
            .hexagon:before,.hexagon3:before {
                top: -21.2132px;
                border-top: solid 2.8284px #00bcd4;
                border-right: solid 2.8284px #00bcd4;
            }
            .hexagon:after,.hexagon3:after  {
                bottom: -21.2132px;
                border-bottom: solid 2.8284px #00bcd4;
                border-left: solid 2.8284px #00bcd4;
            }
            .hexagon2:before  {
                top: -21.2132px;
                border-top: solid 2.8284px #FD6A33;
                border-right: solid 2.8284px #FD6A33;
            }
            .hexagon2:after  {
                bottom: -21.2132px;
                border-bottom: solid 2.8284px #FD6A33;
                border-left: solid 2.8284px #FD6A33;
            }
            
            
            /*cover up extra shadows*/
            .hexagon2 span, .hexagon3 span {
                display: block;
                position: absolute;
                top:1.1547005383792515px;
                left: 0;
                width:56px;
                height:32.3316px;
                z-index: 2;
                background: inherit;
            }
        .schoolname{
            font-size: 160%;
        }
        .schooltype{
            display: inline;
            font-size: 100%;
            font-weight: 400;
        }

        .bx-img{
            cursor: pointer;}

        .disabledButton{
            opacity: 20%;
            cursor:not-allowed;
        }

        @media(max-width: 1250px) {
            .right-side-bar{padding-left: 2px}
        }

        @media(min-width: 1020px) and (max-width: 1090px){
            .container-profile{width: 1010px!important;}
        }
        @media(min-width: 1010px) and (max-width: 1019px){
            .container-profile{width: 1010px!important;}
        }
        @media(min-width: 992px) and (max-width: 1009px){
            .container-profile{width: 990px!important;}
            .right-side-bar{padding-left: 0}
        }


        span.fulltext {
            text-indent: 0;
        }

        .main-box2  ul li{text-indent: -20px;}
        .bx-wrapper img {height: 230px !important;}
        .slideup, .slidedown {
            background-color: #fff;
            overflow-y: hidden;
            -webkit-transition: max-height 0.3s ease-in-out;
            transition: max-height 0.3s ease-in-out;
            margin-bottom: 0;
            padding-bottom: 25px;
        }
        .slidedown {  max-height: 3000px ;   }
        .slideAbout {max-height: 400px;}
        .slideStudies {max-height: 400px;}
        .slideScholarships {}
        .slideReviews {max-height: 500px;}
        .slideTeachers {max-height: 520px;}

        #horizontal-style {
            text-align: justify;
            margin-left: -15px;
            font-size: 115%;
        }

        #horizontal-style:after {
            content: '';
            display: inline-block;
        }
        #horizontal-style li {
            display: inline-block;
            height: 100%;
        }

        #horizontal-style li a {
            height: 100%;
        }
        #horizontal-style li a:hover {
            color: #FD6A33!important;
            background-color: #00bcd4;
        }
        #horizontal-style li a:visited,
        #horizontal-style li a:focus,
        #horizontal-style li a:active {
            background-color: transparent;
        }

        #submButton{ width: 100%;  position: relative; margin-top: 25px;}

        #about-li { margin: 20px}

        #about-li >div> ul > li { margin-left: 20px;}

        .lead {
            font-weight: bold;
            padding: 0; margin: 0;
        }
        .total-score{margin-top: -8px;}

        .raty {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        .person-review{margin: 25px 0 5px 16px;}
        .review-text{ margin-bottom: 25px}

        #total-reviews{margin: 35px 0;}
        .xs-stars{margin: 27px 0;}


        .pad-left-0{padding-left: 0}
        .stats-box-xs{ background-color: #fff; margin-bottom: 30px; padding: 10px;}

        .school-links, .school-links:visited, .school-links:focus{color: #888!important;}
        .school-links:hover{color: #FD6A33!important;}


        .xxs-custom-line{display: none; height: 1px; background-color: #bbb; left:3%; width: 94%;
            right:auto; position: absolute; top:165px;}


        .modal-close{background-color: transparent; margin-top: 20px}
        .modal-close:hover{color:#FD6A33}
        .modal-select{border: none; background: transparent;}
        .modal-icon{height: 45px; margin:0 15px 0 5px}
        .select-container{border-bottom: 1px solid #777; margin-bottom: 20px}
        .input-text{margin-top: 40px; font-size: 110%; color: #777}
        .input-text-interest{margin-top: 40px; font-size: 110%; color: #777; margin-bottom: -10px; }
        .cursor-hand{cursor: pointer;}

            .ellipsis{width: 90%}
            .webHover:hover{color:#FD6A33!important;}


        @media (min-width: 992px) and (max-width: 1160px) {
            .affix-button{font-size: 90%;}
            .fa-pencil{padding-right: 4px!important;}
        }


        @media(max-width: 1109px) {
        .school-profile-nav-link{padding-right: 8px!important; padding-left: 8px!important; font-size: 95%;}
            .ellipsis{width: 89%}
        }


        @media(max-width: 540px) {
            .xxs-custom-contact{width: 52.5%}
            .xxs-custom-stats{width: 46.5%}
        }


        @media(max-width: 480px) {
            .xxs-custom-contact{width: 99%}
            .xxs-custom-stats{width: 60%; float: left!important; margin-top: 35px;}
            .xxs-custom-line{display: block; top: 195px;}
            .socials{margin-top: 5px!important;}

        }

        @media(max-width: 410px) {
            .xxs-custom-stats{width: 65%; }
        }

        @media(max-width: 395px) {
            .xxs-custom-stats{width: 75%;}

        }

        @media(max-width: 345px) {
            .xxs-custom-stats{width: 99%;}
            .slideup>div>.title{font-size: 155%}
        }

        hr {
            margin-left: auto;
            margin-right: auto;
            width: 94%;
            margin-top: 30px;
        }

        @media (min-width: 991px) and (max-width: 1450px) {
            /*.ribbon-front {height: 55px;}*/
            /*.ribbon-back-right {  height: 55px;}*/
            /*.ribbon-edge-bottomright{  top: 55px;  left: 81%;  }*/
/*            #submButton{ top: 5px; margin-left: 15px; position: relative}
*/        }

/*  @media (min-width: 481px) and  (max-width: 769px) {
            #xs-submButton{ z-index: 2000; top: 90%; margin-left: 1%;  width: 70%;  position: fixed; }
        }*/

        @media (max-width: 991px) {
            #xs-submButton{ height: 41px; z-index: 99; bottom: 10px; left: 13%;   width: 74%; right: auto; position: fixed; }
        }


        @media (max-width: 689px) {
            #xs-submButton{ height: 39px;  bottom: 3px; left: 8%; width: 84%; }
        }
        @media (max-width: 489px) {
            #xs-submButton{ height: 37px;  bottom: -1px; left: 4%; width: 92%; }
        }
        @media (max-width: 399px) {
            #xs-submButton{ left: 4%; width: 92%;}
        }


        @media  (max-width: 490px) {
            /*!*.ribbon-front {height: 55px;}*!*/
            /*.ribbon-back-right {  height: 55px;}*/
            /*.ribbon-edge-bottomright{  top: 55px;  left: 81%;  }*/
        }


    </style>
</head>


<body data-spy="scroll" data-target=".spy" data-offset="270" id="home" ng-app="profileApp" ng-controller="profileCtrl"
    data-ng-init="init()" ng-cloak>
    <!-- @include('components.preloader') -->

    <!-- Scholio Header -->

    <header class="spy navbar navbar-fixed-top navbar-scroll sc-landing-header" id="header" style="z-index: 99990">

        <div class="container container-profile" style="">
            <div class="row scholarship-profile-nav-row">

                <div class="pull-left visible-lg visible-md nav-web ">
                    <!-- Scholio Branding -->
                    <a class="sc-landing-brand" href="{{ url('/') }}">
                        <div class="sc-landing-logo-sticky" style=" padding-top: 15px">
                            
                            <picture>
                                <source class="sc-logo" alt="scholio logo" style="height: 63px; padding-top: 2px;" srcset="{{asset('new/img/logoNX.webp')}}" type="image/webp">
                                <source class="sc-logo" alt="scholio logo" style="height: 63px; padding-top: 2px;" srcset="{{asset('new/img/logoNX.png')}}" type="image/png">
                                <img src="{{asset('new/img/logoNX.png')}}" class="sc-logo" alt="scholio logo" style="height: 63px; padding-top: 2px;">
                            </picture>
                        </div>
                    </a>
                </div>

                <div class="col-xs-6  visible-sm visible-xs">
                    <div class="nav-mobile">
                        <a class="" href="{{ url('/') }}">
                            <div class="navbar-brand  sc-landing-logo-sticky">
                                <picture>
                                    <source srcset="{{asset('new/img/logoNX-m.webp')}}" type="image/webp" class="sc-logo" alt="scholio logo" style="height: 60px; padding-top: 2px;">
                                    <source srcset="{{asset('new/img/logoNX-m.png')}}" type="image/png" class="sc-logo" alt="scholio logo" style="height: 60px; padding-top: 2px;">
                                    <img src="{{asset('new/img/logoNX-m.png')}}" class="sc-logo" alt="scholio logo" style="height: 63px; padding-top: 2px;">
                                </picture>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Scholio sMenu -->

                <!-- Large Menu -->
                <div class="pull-right visible-md visible-lg">
                    <ul class="nav navbar-nav navbar-right sc-landing-menu">


                        <li class="sc-landing-menu-item">
                            <a href="{{url('public/schools')}}" class="btn-change-search-profile">
                                <i class="fa fa-university margin-right-5"></i>
                                @lang('scholarships.search_institution_short')
                            </a>
                        </li>

                        @if($school->settings->about)<li class="sc-landing-menu-item "><a href="#sxetika" class="school-profile-nav-link ">@lang('profile.navigation.about')</a></li>@endif
                        @if($school->settings->studies && count($school->study) > 0)<li ng-show="studies.length && col_iek_eng_dan_mus"
                            class="sc-landing-menu-item"><a href="#spoudes" class="school-profile-nav-link ">@lang('profile.navigation.studies')</a></li>@endif
                        @if($school->settings->scholarships && count($school->scholarship) > 0)<li class="sc-landing-menu-item"><a
                                href="#ypotrofies" class="school-profile-nav-link">@lang('profile.navigation.scholarships')</a></li>@endif
                        @if($school->settings->teachers && count($school->teachers) > 0)<li class="sc-landing-menu-item"><a
                                href="#faculty" class="school-profile-nav-link">@lang('profile.navigation.teachers')</a></li>@endif
                        @if($school->settings->reviews && count($school->reviews) > 0)<li class="sc-landing-menu-item"><a
                                href="#reviews" class="school-profile-nav-link">@lang('profile.navigation.reviews')</a></li>@endif



                        <li class="langDropWhite " style="margin-top: 15px;">
                            <form method="GET" id="langForm">
                                <select onchange="changeLang(this)" class="selectpicker select-white landDrop school-profile-lang"
                                    data-live-search="false" data-mobile="false" data-size='2' data-width="100%"
                                    data-style="btn-white">
                                    <option style="color: black" data-icon="fa" value="en"
                                        {{ request()->cookie('lang')=='en' ? 'selected':'' }}>&nbsp; EN</option>
                                    <option style="color: black" data-icon="fa" value="el"
                                        {{ request()->cookie('lang')=='el' ? 'selected':'' }}>&nbsp; GR</option>
                                </select>
                            </form>
                        </li>




                        @if(auth()->check())
                        <li><a href="{{ url('/dashboard') }}"><button type="button" class="sc-button-landing sc-button sc-orange sc-t-white">@lang('main.navigation.admin')</button></a></li>
                        <li><a href="{{ url('/out') }}"><button type="button" class="sc-button-landing sc-button sc-dark-green sc-t-white ">@lang('main.navigation.logout')</button></a></li>
                        @else
                        <li><a href="{{ url('/register/role') }}"><button type="button" class="sc-button-landing sc-button sc-green sc-t-white"
                                    {{--data-toggle="modal" data-target="#select-modal"--}}>@lang('main.navigation.register')</button></a></li>
                        <li>
                            <a href="{{ url('/login') }}">
                                <button type="button" class="sc-button-landing sc-button sc-dark-green sc-t-white">@lang('main.navigation.login')</button>
                            </a>
                        </li>
                        @endif




                    </ul>
                </div>

                <!-- Mobile Menu -->
                <div class="col-xs-6 visible-sm visible-xs " style="z-index: 6000; height: 20px;">
                    <div class="">
                        <div class="sc-landing-menu-mobile-sandwitch nav navbar-nav navbar-right pull-right">
                            <div class="sc-landing-menu-sandwitch-button-sticky sc-landing-menu-sandwitch">
                                <img src="{{asset('new/img/collapse-dark2.png')}}" alt="scholio logo" style="height:22px; margin-top: 7px;">
                                
                                {{--<img src="{{asset('new/img/collapse-dark.png')}}" alt="scholio logo">--}}
                            </div>
                        </div>
                    </div>

                </div>

                <!-- ======= Sandwich Menu =======-->
                @include('public.sandwich-menu-schoolProfile')



            </div> <!-- row -->
        </div><!-- container-->
    </header>

    <!-- Scholio Main Section. -->
    <div>
        <main id="main" class="main" style="overflow-x: hidden">

            <div class="container container-profile" style="overflow-x: hidden">

                <div class="row up">
                </div>
                <!-- Logo & School Name -->
                <div class="up">
                    <div class=" margin-bot-15 ">
                        <div class="">
                            <div class="xs-center">
                                <img id="img1" alt="logo" class="pull-left margin-right-10 margin-top-15 margin-bot-10" src="{{ substr($school->logo, 0, -4)}}png">
                            </div>
                            <div class=" xs-centered-text">
                                <h2 class="xs-h4 schoolname">{{ $school->name()}}</h2>
                                @if($school->settings->reviews && count($school->reviews) >0)
                                <span class="pad-top-5 xs-pad-top xs-review">

                                    <span>
                                        <rating class="text-incr-85 sc-t-orange" id="Rating"></rating>
                                    </span>
                                    <span class="sc-t-orange"> {{ $school->averageStars() }} </span>
                                    <span class="xs-text-incr-85"> &nbsp; ( {{ $school->countReviews() }}
                                        @lang('profile.reviews'))</span>
                                </span>

                                @else

                                <style>.socials{  margin-top: -54px; }</style>

                                @endif

                            </div>


                            <div class="clearfix"></div>

                            @if($school->settings->social)
                            <ul class="nav nav-ul socials" id="" style="">
                                @foreach($school->admin->socialLinks as $link)
                                <li>
                                    <a class="lg-pull-left" href="{{ $link->link }}" target="_blank">
                                        <i style="" class="social fa fa-{{ $link->name }}" aria-hidden="true"></i>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                            @endif


                        </div>
                    </div>
                </div>

                <!-- BX SLIDER -->

                <div class="margin-top-70 xs-slider" style="overflow-x: hidden">
                    <div class="row xl-margin-right " style="padding-left: 7px;">
                        <ul class="bxslider" id="bx" style="visibility: hidden;">
                            @if($school->image->count() >= 4)
                            <!-- <li data-ng-repeat="image in contactInfo.image" data-notify-when-repeat-finished>
                                    <img class="bx-img" id="@{{image.full_path}}" data-ng-src="@{{image.full_path}}" onclick="test(event.target)" alt="School images"/>
                                </li> -->
                            @foreach($school->image as $image)
                            <li>
                                <picture>
                                    <source srcset="{{$image->path}}" type="image/webp">
                                    <source srcset="{{$image->full_path}}" type="image/jpeg">
                                    <img class="bx-img" id="bx-img-{{$image->id}}" src="{{$image->full_path}}" onclick="test(event.target)" alt="{{ $school->name() }} Image"/>
                                </picture>
                            </li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                </div>


                <div class="row">
                    <button id="xs-submButton" type="button" class="hidden-lg hidden-md visible-sm visible-xs sc-button3 sc-orange sc-t-white margin-top-10 center-block"
                        data-toggle="modal" data-target="#interest-modal">
                        <i class="fa fa-pencil pad-right-15" aria-hidden="true"></i>
                        @lang('profile.interest')
                    </button>
                    @if($school->admin->subscription->plan_id == 2)
                    @if(auth()->check())
                    @if(auth()->user()->role != 'school')
                    @if(auth()->user()->apply->contains($school))
                    <button id="xs-submButton" type="button" class="hidden-lg hidden-md visible-sm visible-xs sc-button3 sc-green sc-t-white margin-top-10 center-block"
                        style="background-color: #7fafbb" disabled>
                        <i class="fa fa-link pad-right-15" aria-hidden="true"></i>
                        @lang('profile.pending')
                    </button>


                    @elseif(auth()->user()->connectedSchool->contains($school))

                    <button id="xs-submButton" type="button" class="hidden-lg hidden-md visible-sm visible-xs sc-button3 sc-orange sc-t-white margin-top-10 center-block"
                        style="background-color: #bbb" disabled>
                        <i class="fa fa-link pad-right-15" aria-hidden="true"></i>
                        @lang('profile.connected')
                    </button>



                    @else
                    <button id="xs-submButton" type="button" class="hidden-lg hidden-md visible-sm visible-xs sc-button3 sc-orange sc-t-white margin-top-10 center-block"
                        data-toggle="modal" data-target="#connect-modal">
                        <i class="fa fa-link pad-right-15" aria-hidden="true"></i>
                        @lang('profile.request')
                    </button>
                    @endif
                    @endif
                    @endif
                    @endif

                    <!-- MAIN Section-->
                    <div class="col-lg-9 col-md-9 margin-top-30 margin-bot-25">
                        <!-- Main LEFT scroll bar menu-->


                        <!-- Main Info profile ng-repeat -->





                        <!-- SM - XS  contact & stats section -->
                        <div class="sc-t-grey hidden-lg hidden-md visible-sm visible-xs clearfix">
                            <div class="col-xs-12 margin-top-10 stats-box-xs">


                                <div class="col-xs-7 col-sm-7 pad-left-0 xxs-custom-contact">

                                    <span><i class="fa fa-university pad-top-3 xs-text-incr-85 " aria-hidden="true"></i></span>
                                    <span class=" pad-left-8 xs-text-incr-85 text-incr-95 ellipsis">{{
                                        $school->type->name }}</span>
                                    <div class="pad-top-10"></div>

                                    <span><i class="fa fa-map-marker pad-top-3 xs-text-incr-85 " aria-hidden="true"></i></span>
                                    <span class="pad-left-8 xs-text-incr-85 text-incr-95 ellipsis">{{ $school->address
                                        }}</span>

                                    <div class="pad-top-10"></div>
                                    <div class="">
                                        <span><i class="fa fa-street-view pad-top-3 " aria-hidden="true"></i></span>
                                        <span class="pad-left-5">{{ $school->city }}</span>
                                    </div>

                                    <div class="pad-top-10"></div>
                                    <span><i class="fa fa-phone pad-top-2 xs-text-incr-85" aria-hidden="true"></i></span>
                                    <span class="pad-left-5">{{ $school->phone }}</span>

                                    <div class="pad-top-10"></div>
                                    <span><i class="fa fa-envelope  pad-top-2 " aria-hidden="true"></i></span>
                                    <span class="pad-left-5 ellipsis"> <a href="mailto:{{ $school->email() }}" class="school-links">{{
                                            $school->email() }}</a></span>

                                    <span ng-if="contactInfo.website">
                                        <div class="pad-top-10"></div>
                                        <span><i class="fa fa-globe pad-top-3 xs-text-incr-85" aria-hidden="true"></i></span>
                                        <span class="pad-left-5 ellipsis"> <a href="/schoolink/redirect/{{$school->id}}/"
                                                target="_blank" class="school-links">{{ $school->website }}</a></span>
                                    </span>

                                </div>

                                <div class="xxs-custom-line"></div>
                                <div class="col-xs-5 col-sm-4 pad-left-0 pull-right xxs-custom-stats">

                                    <span class="">
                                        <i class="fa fa-trophy  pad-top-3 " aria-hidden="true"></i>
                                        <span class="pad-left-5">@lang('profile.statistics.scholarships')</span>
                                        <span class="badge pull-right" style="margin-right: -4px"> {{
                                            count($school->activeScholarships()) }}</span>
                                    </span>


                                    <div ng-show="contactInfo.type_id==1 || contactInfo.type_id==2 ">
                                        <div class="clearfix pad-top-10"></div>
                                        <span class="">
                                            <i class="fa fa-paint-brush pad-top-3 " aria-hidden="true"></i>
                                            <span class="pad-left-5">@lang('profile.statistics.studies')</span>
                                            <span class="pull-right">{{ $school->lengthStudies() }}</span>
                                        </span>
                                    </div>

                                    @if($school->settings->statistics)
                                    <div class="clearfix pad-top-10"></div>
                                    <span class="">
                                        <i class="fa fa-user pull-left pad-top-2 " aria-hidden="true"></i>
                                        <span class="pad-left-10" ng-show="contactInfo.type_id==1 || contactInfo.type_id==2 ">@lang('profile.statistics.students')</span>
                                        <span class="pad-left-10" ng-show="contactInfo.type_id!=1 && contactInfo.type_id!=2">@lang('profile.statistics.students_s')</span>
                                        <span class="pull-right">{{ $school->lengthStudents() }}</span>
                                    </span>

                                    <div class="clearfix pad-top-10"></div>
                                    <span class="">
                                        <i class="fa fa-graduation-cap pad-top-3 " aria-hidden="true"></i>
                                        <span class="pad-left-2 pad-bot-10">@lang('profile.statistics.teachers')</span>
                                        <span class="pull-right">{{ $school->lengthTeachers() }}</span>
                                    </span>

                                    @endif
                                </div>


                            </div>

                        </div>


                        @if($school->settings->about)
                        <!-- Σχετικά  Να προσθέσουμε την slideAbout κλαση  και να ανοιξουμε το show more-->
                        <div class="margin-bot-25 slideup" id="sxetika">
                            <div class="section-header">
                                <p class=" title margin-left-20 pad-top-40 text-incr-175 font-weight-300" style="">
                                    <i class="fa fa-info-circle fa-linear4 margin-right-10" aria-hidden="true"></i>
                                    <span>@lang('profile.cards.about') </span>
                                </p>
                            </div>
                            <div class=" sc-t-grey text-justify">
                                <div class="margin-top-10" id="about-li">
                                    <div>{!! $school->about !!}</div>
                                </div>
                            </div>
                        </div>
                        <!-- Show More About  -->
                        <div class="show-more" style="background-color: #fff">
                            <div class="pad-top-20">
                                <!--
                                    <span ng-click="showMoreAbout('sxetika')">@{{textAbout}}
                                     <i class="@{{ iconAbout }}"></i></span>
                                     -->
                            </div>
                        </div>
                        @endif

                        @if($school->settings->studies)
                        <!-- ======= Σπουδές  slideStudies class========-->
                        @if($school->lengthStudies() > 0 && ($school->type->id == 1 || $school->type->id == 2 ||
                        $school->type->id == 3 || $school->type->id == 4 || $school->type->id == 10 ||
                        $school->type->id == 11 || $school->type->id == 12) || $school->type->id == 13)
                        <div id="spoudes" style="overflow-x: hidden">
                            <div id="sliderStudies" class=" main-box-2 slideup">
                                <div class="section-header2">
                                    <p class="title margin-left-20 pad-top-40 text-incr-175 font-weight-300">
                                        <i class="fa fa-book fa-linear4 margin-right-10" aria-hidden="true"></i> <span>@lang('profile.cards.studies')
                                        </span>
                                    </p>
                                </div>
                                <!-- Σπουδές Κολλέγια & ΙΕΚ  -->
                                @if($school->type->id == 1 || $school->type->id == 2 || $school->type->id == 3 ||
                                $school->type->id == 4 || $school->type->id == 10 || $school->type->id == 11 ||
                                $school->type->id == 12)
                                <div>
                                    @foreach($data as $key=>$level)
                                    <div>
                                        @if($levelsCounter > 1)
                                        <ul class="col-md-6">
                                            @elseif($levelsCounter > 1 && ($key+1)%2==1 )
                                            <ul class="clearFloat">
                                                @else
                                                <ul class="col-sm-12">
                                                    @endif
                                                    @if($school->type->id != 2)
                                                    <div class=" text-incr-150 font-weight-300 margin-top-30 margin-left-10" style="margin-bottom: 0">
                                                        {{ $level["level"]["name"] }}
                                                    </div>
                                                    @endif

                                                    @foreach($level["sections"] as $key2=>$section)
                                                    @if($school->type->id ==2 || ($school->type->id ==4  && $levelsCounter == 1))
                                                    <ul class="col-lg-6" style="list-style-type: none;  padding-top: 16px;">
                                                        @elseif(($key2+1)%2 == 1)
                                                        <ul class="clearFloat" style="list-style-type: none;  padding-top: 16px;">
                                                            @else
                                                            <ul style="list-style-type: none;  padding-top: 16px;">
                                                                @endif

                                                                <li class="margin-top-10 margin-left-10">
                                                                    <img src="{{ $section['section']['icon'] }}" alt="section name" style="height: 22px; margin-top: -12px; filter: grayscale(80%); opacity: 0.8" />
                                                                    <span class="pad-left-5 text-incr-125 font-weight-300" style="text-indent: 100%;">
                                                                        {{ $section["section"]["name"] }}
                                                                    </span>
                                                                </li>

                                                                @foreach($section["studies"] as $study)
                                                                <ul style="list-style-type: none;">
                                                                    <li class="pad-top-7 margin-left-10">
                                                                        @if($study["link"] != '')
                                                                        <span class="font-weight-300">
                                                                            <a href="/studylink/redirect/{{ $school->id }}/{{ $study['study']['id'] }}"
                                                                                target="_blank">{{ $study["study"]["name"] }}</a>
                                                                        </span>
                                                                        @else
                                                                        <span class="font-weight-300">
                                                                            {{ $study["study"]["name"] }}
                                                                        </span>
                                                                        @endif
                                                                    </li>
                                                                </ul>
                                                                @endforeach
                                                            </ul>
                                                            @endforeach
                                                        </ul>
                                    </div>
                                    @endforeach
                                </div>
                                @endif
                                

                                <!-- Σπουδές Φροντιστηρια  -->


                                <!-- Σπουδές Σχολεια -->
                                @if($school->type->id == 13)
                                <div>
                                    @foreach($data as $key3=>$level)
                                    <div>
                                        @if($levelsCounter > 1)
                                        <ul class="col-md-6" style="padding-bottom: 20px;">
                                            @elseif(($levelsCounter > 1) && ($key+1)%2==1 )
                                            <ul class="clearFloat" style="padding-bottom: 20px;">
                                                @else
                                                <ul class="col-sm-12" style="padding-bottom: 20px;">
                                                    @endif
                                                    <div class="text-incr-150 font-weight-300 margin-top-30 margin-left-10"
                                                        style="margin-bottom: 0"> {{ $level["level"]["name"] }} </div>
                                                </ul>
                                    </div>
                                    @endforeach
                                </div>
                                @endif

                            </div>
                            <!-- Show More Studies  -->
                                <div class="pad-top-30">
                                </div>

                        </div>
                        @endif
                        @endif

                        @if($school->settings->scholarships && count($school->scholarship) > 0 &&
                        count($school->activeScholarships()) > 0 )
                        <div class="slideup slideScholarships" id="ypotrofies" style="overflow-x: hidden;" ng-style="(studies.length<6 || !col_iek_eng_dan_mus) && {'margin-top':'30px'}">
                            <div class="section-header3">
                                <p class=" title margin-left-20 pad-top-40 text-incr-175 font-weight-300">
                                    <i class="fa fa-trophy fa-linear4 margin-right-10" aria-hidden="true"></i> <span>@lang('profile.cards.scholarships')
                                    </span>
                                </p>
                            </div>


                            <div class=" scholar-box col-sm-12">
                                @foreach($school->scholarship as $key=>$scholarship)
                                @if($key <= 6) <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="height: 400px!important; position: relative; margin: 20px 0 ; padding-left: 40px;">

                                    <div class="scholar-frame " ng-class="{'sm-margin-left':($index%2==1)}">
                                        <div class="ribbon-wrapper">
                                            <div class="ribbon-front sc-medium-grey">
                                                <span class="">
                                                    <img class="criteria-img" src="{{$scholarship->criteria->icon}}"
                                                        alt="criteria icon">
                                                </span>

                                                <span class="sc-t-dark-green font-weight-400 text-incr-120 margin-left-10 scholar-title">{{$scholarship->criteria->name}}</span>
                                            </div>
                                            <div class="ribbon-edge-topright"></div>
                                            <div class="ribbon-edge-bottomright"></div>
                                            <div class="ribbon-back-right sc-medium-grey"></div>
                                        </div>

                                        <div class="hexagon hex1">
                                            <img class="hex-img" src="{{ $scholarship->financial->icon }}" alt="icon">
                                        </div>
                                        <div class="hexagon hex2">
                                            @if($scholarship->multiple == 0)
                                            <img class="hex-img" src="/panel/assets/images/steps/{{$scholarship->section[0]->name}}.png" alt="icon">
                                            @else
                                            <img class="hex-img" src="/panel/assets/images/steps/studies.png" alt="icon">
                                            @endif
                                        </div>

                                        <div class="scholar-content sc-t-grey font-weight-400">
                                            <p class="scholar-left xxs-up">{{$scholarship->financial->plan}}
                                                {{$scholarship->financial_amount}}
                                                @if($scholarship->financial->id !=3 )
                                                <span> {{$scholarship->financial->metric}}</span>
                                                @else
                                                <span> @lang('profile.months')</span>
                                                @endif
                                            </p>

                                            @if($school->type->id == 1 || $school->type->id ==3 || $school->type->id ==
                                            2)
                                            <div class="scholar-left xxs-text" style="padding-top: 40px;">
                                                {{$scholarship->level->name}}
                                            </div>
                                            @endif

                                            @if($scholarship->multiple == 0)
                                            <div class="scholar-left xxs-up2" style="margin-right: 10px; color: #464646;"
                                                ng-class="{'margin-top-50': (contactInfo.type_id!=1 && contactInfo.type_id!=2 && contactInfo.type_id!=3),'margin-top-0': (contactInfo.type_id==1 || contactInfo.type_id==2 || contactInfo.type_id==3) }">
                                                {{$scholarship->study->name}}
                                            </div>
                                            @endif

                                            @if($scholarship->multiple == 1)
                                            <div class="scholar-left xxs-up2" style="margin-right: 10px; color: #464646;"
                                                ng-class="{'margin-top-50': (contactInfo.type_id!=1 && contactInfo.type_id!=2 && contactInfo.type_id!=3),'margin-top-0': (contactInfo.type_id==1 || contactInfo.type_id==2 || contactInfo.type_id==3) }">
                                                @if(count($scholarship->multipleStudies) < 3) @foreach($scholarship->multipleStudies
                                                    as $ms)
                                                    <div>
                                                        {{ $ms->name }}
                                                    </div>
                                                    @endforeach
                                                    @endif

                                                    @if(count($scholarship->multipleStudies) > 2)

                                                    <div>
                                                        Πολλαπλα αντικείμενα σπουδών: {{
                                                        count($scholarship->multipleStudies) }}
                                                    </div>

                                                    @endif
                                            </div>
                                            @endif


                                        </div>

                                        <div class="xxs-text xs-none" ng-class="{'text-up':contactInfo.type_id!=1}">
                                            @if($scholarship->interestsLength() > 3 &&
                                            count($scholarship->multipleStudies)<3) <div style="position: absolute; top: 300px; width: 145px"
                                                class="font-weight-400 sc-t-grey">
                                                <span class="" style=""><i class="fa fa-thumbs-o-up margin-right-5"
                                                        aria-hidden="true"></i>
                                                    @lang('profile.scholarship.interested'): <span class="pull-right">{{
                                                        $scholarship->interestsLength() }}</span>
                                                </span>
                                        </div>
                                        @endif

                                        @if(count($scholarship->admission) > 2 && count($scholarship->multipleStudies)<3)
                                            <div style="position: absolute; top: 320px; width: 145px" class="font-weight-400 sc-t-grey">
                                            <span class="" style=""> <i class="fa fa-pencil margin-right-5" aria-hidden="true"></i>
                                                @lang('profile.scholarship.requested'): <span class="pull-right"> {{
                                                    count($scholarship->admission) }}</span>
                                            </span>
                                    </div>
                                    @endif

                            </div>

                            @if(auth()->check() && auth()->user()->role != 'school' && auth()->user()->role !=
                            'teacher' )

                            <ul class="like-btn">
                                <a href=""><button id="b@{{scholarship.id}}" type="button" ng-click="interested(scholarship.id, $index)"
                                        class="sc-button-landing sc-button sc-dark-green sc-t-white" style="width:140px;">
                                        <i id="i@{{scholarship.id}}" class="fa fa-thumbs-o-up margin-right-10 margin-left-5"
                                            aria-hidden="true"></i>
                                        <span id="t@{{scholarship.id}}" ng-init="test(scholarship)">@lang('profile.scholarship.like')</span>
                                    </button>
                                </a>
                            </ul>
                            @endif

                            <ul class="show-btn">
                                <a href="/scholarship/{{$scholarship->id}}"><button type="button" class="sc-button-landing sc-button sc-green sc-t-white provoli">
                                        <i class="fa fa-file-text-o margin-right-10" aria-hidden="true"></i>
                                        @lang('profile.scholarship.show')</button></a>
                                {{--<span class="sc-t-grey font-weight-400" style="left: -210px; top: 10px; position: absolute">--}}
                                    {{--<i class="fa fa-file-text-o" aria-hidden="true" style="margin-right: 10px;"></i>Αιτήθηκαν:
                                    @{{ scholarship.length}} </span>--}}
                                {{--<div style="height: 1px; width: 390px; background-color: lightgrey;--}}
                                                        {{--margin: 50px 0 0 0; right: -20px;  position: absolute"></div>--}}
                                                    </ul>
                                                    {{--<div ng-if="($index%2==0)" class="hidden-xs hidden-sm"--}}
                                                         {{--style="border-right: 1px solid #dbdbdb; height: 355px; position: absolute; top: 18px; right:  5px"></div>--}}


                                                    {{--<hr class="mob-hr">--}}
                                                </div>

                                    </div>
                                    @endif
                                    @endforeach

                                </div>


                            </div>
                            <!-- Show More Scholarships  -->
                            <div class="
                                    show-more" ng-if="contactInfo.lengthScholarships>6" style="background-color: #fff">
                                    {{--ng-if="contactInfo.lengthScholarships>2"--}}
                                    <div class="pad-top-20">
                                        {{-- <span ng-click="showMoreScholarships('ypotrofies')">@{{textScholarships}}
                                            <i class="@{{ iconScholarships }}"></i></span> --}}

                                        <span><a class="more-scholarships-text" href="{{ url('/public/scholarships?q=' . $school->admin->name) }}"
                                                target="_blank">@{{textScholarships}}</a></span>
                                    </div>
                                </div>
                                @endif


                                @if($school->settings->teachers && count($school->teachers) > 0)
                                <!-- Διδακτικό Προσωπικό  -->
                                <div class="slideTeachers slideup margin-bot-25" id="faculty" style="overflow-x: hidden">
                                    <div class="section-header3">
                                        <p class=" title margin-left-20 pad-top-40 text-incr-175 font-weight-300">
                                            <i class="fa fa-graduation-cap fa-linear4 text-incr-115 margin-right-10"
                                                aria-hidden="true"></i> <span>@lang('profile.cards.teachers') </span></span>
                                        </p>
                                    </div>

                                    <div class="sc-t-grey text-justify">
                                        <div class="margin-top-10" id="about-li">
                                            <div ng-repeat="teacher in contactInfo.teachers">

                                                <div class="col-sm-12 col-md-6 hidden-xs">
                                                    <div class="col-sm-12 user-card">
                                                        <div class="user-header ">
                                                            <a href="/public/profile/teacher/@{{teacher.info.id}}">
                                                                <img class="user-img img-circle" ng-src="@{{teacher.info.avatar}}"
                                                                    alt="teacher">
                                                                <span class="user-name">
                                                                    <span style="color: #fff !important;">@{{teacher.name}}</span>
                                                                </span>
                                                            </a>
                                                            <span class="user-info"> @{{ teacher.info.title }}</span>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="xs-user-card visible-xs hidden-sm hidden-md">
                                                    <div class="xs-user-header  center-block centered-text">
                                                        <a href="/public/profile/teacher/@{{teacher.info.id}}">
                                                            <img class="xs-user-img img-circle" ng-src="@{{teacher.info.avatar}}"
                                                                alt="teacher">
                                                            <div class="xs-user-name">
                                                                <span class="xs-name" style="color: #888 !important;">@{{teacher.name}}</span>
                                                            </div>
                                                        </a>
                                                        <span class="xs-user-info"> @{{ teacher.info.title }}</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Show More Reviews  -->
                                <div class="show-more" style="background-color: #fff">
                                    <div class="pad-top-20">
                                        <span ng-click="showMoreTeachers('faculty')">@{{textTeachers}}
                                            <i class="@{{ iconTeachers }}"></i></span>
                                    </div>
                                </div>
                                @endif


                                @if($school->settings->reviews && count($school->reviews) > 0)
                                <!-- Αξιολογησεις -->
                                <div class="slideReviews slideup margin-bot-25 " id="reviews" style="overflow-x: hidden">
                                    <div class="section-header2">
                                        <p class=" title margin-left-20 pad-top-40 text-incr-175 font-weight-300">
                                            <i class="fa fa-star fa-linear4 margin-right-10" aria-hidden="true"></i>
                                            <span>@lang('profile.cards.reviews') </span>
                                        </p>
                                    </div>

                                    <!--  Total Score -->
                                    <div id="total-reviews" class="row col-sm-12">

                                        <div class="font-weight-400 sc-t-green col-xs-12 col-lg-4 col-lg-push-8 text-center total-score">
                                            <span class="lead">{{ $school->stars}}</span>
                                            <br />
                                            <span class="sc-t-grey">@lang('profile.total')</span>

                                            <br />
                                            <div class="raty" id="totalRating"></div>
                                            <span class="sc-t-grey">({{ $school->countReviews() }}
                                                @lang('profile.reviews'))</span>
                                        </div>

                                        <div class="row font-weight-400 sc-t-grey col-xs-12 col-lg-8 col-lg-pull-4 xs-stars">


                                            <div ng-repeat="review in contactInfo.avgReviews">
                                                <div class="col-xs-12 col-sm-6 pad-0">
                                                    <i class="@{{review.icon}} margin-right-10" aria-hidden="true"></i>
                                                    <span>@{{ categ(review.icon) }}</span>
                                                </div>
                                                <div class="col-xs-12 col-sm-6" style="margin-left: -12px; margin-bottom: 9px;">
                                                    <span id="catReview-@{{$index}}" ng-init="categoryReview($index, review.stars)"
                                                        value="@{{review.stars}}" class="margin-left-20 raty" id="studyProgram"></span>
                                                    <span> @{{review.stars}}</span>
                                                </div>
                                            </div>


                                        </div>

                                    </div>

                                    <!--  Personal Reviews-->
                                    <div id="reviews-container" ng-repeat="review in contactInfo.reviews">
                                        <hr class="sc-t-grey" />
                                        {{-- @{{ contactInfo.reviews }} --}}
                                        <div class="col-lg-12">
                                            <div class="margin-left-10  person-review">
                                                <span>@{{review.user.name}}</span> - @{{ role(review.user.role) }}
                                                <br />
                                                <span value="@{{review.stars.total}}" class="raty margin-right-10 sc-t-grey"
                                                    style="margin-left: -3px"></span>
                                                <span class="sc-t-grey">
                                                    <div class="raty" id="totalRating-@{{review.id}}" ng-init="rate(review.id, review.average)">@{{
                                                        review.average }}</div>
                                                </span>
                                                <br />
                                                <span class="sc-t-grey">@{{review.created_at}}</span>
                                                <br />
                                            </div>
                                            <span class="col-lg-12 font-weight-400 sc-t-grey review-text fulltext">@{{review.text}}</span>
                                        </div>

                                    </div>
                                </div>
                                <!-- Show More Reviews  -->
                                <div class="show-more" style="background-color: #fff">
                                    <div class="pad-top-20">
                                        <span ng-click="showMoreReviews('reviews')">@{{textReviews}}
                                            <i class="@{{ iconReviews }}"></i></span>
                                    </div>
                                </div>
                                @endif



                                @if($school->settings->map)
                                <!-- SM - XS  contact & stats section -->
                                <div class="hidden-lg hidden-md visible-sm visible-xs clearfix">
                                    <div class="margin-top-10 stats-box-xs">
                                        <div class="" id="googleMapXS" style="height: 310px; width: 100%; "></div>
                                    </div>
                                </div>
                                @endif



                                <div class="row" style="padding: 0">
                                    <hr>
                                </div>


                                <!-- ================= Δες Επίσης =================  -->
                                <div id="otherSchools" class="row boxAlsoContainer">


                                    <p class=" title margin-left-20 pad-top-40 text-incr-175 font-weight-300">
                                        <i class="fa fa-university fa-linear4 margin-right-10" aria-hidden="true"></i>
                                        <span>Αναζήτησε παρόμοιες σπουδές</span>
                                    </p>

                                    <div class="innerPadding col-sm-4">
                                        @if($school->type->id==1)
                                        <a id="c1" style="color: #fff" href="https://schol.io/public/schools?q={{ $school->type->name }}">
                                            <div id="c1b" class="boxAlso">
                                                <div class="upImgContainer">
                                                    <picture>
                                                        <source srcset="{{asset('/new/img/sect-photo/college.webp')}}" type="image/webp">
                                                        <source srcset="{{asset('/new/img/sect-photo/college.jpg')}}" type="image/jpeg">
                                                        <img id="c1im" class="upImg" src="/new/img/sect-photo/college.webp" alt="icons">
                                                    </picture>
                                                
                                                </div>
                                                <h1 id="c1t" class="alsoText">{{ $school->type->name }} σε Ελλάδα</h1>
                                            </div>
                                        </a>
                                        @else
                                        <a id="c1" style="color: #fff" href="https://schol.io/public/schools?hFR%5Btype%5D%5B0%5D={{ $school->type->name }}&is_v=1&hPP=8&idx=dummySchools&p=0&hFR%5Bcategories.lvl0%5D%5B0%5D={{ $school->city}} > {{ $school->region}}">
                                            <div id="c1b" class="boxAlso">
                                                <div class="upImgContainer">
                                                    <picture>
                                                        <source srcset="{{asset('/new/img/sect-photo/college.webp')}}" type="image/webp">
                                                        <source srcset="{{asset('/new/img/sect-photo/college.jpg')}}" type="image/jpeg">
                                                        <img id="c1im" class="upImg" src="/new/img/sect-photo/college.webp" alt="icons">
                                                    </picture>
                                                </div>
                                                <h1 id="c1t" class="alsoText">{{ $school->type->name }} σε {{
                                                    $school->city}} {{ $school->region}}</h1>
                                            </div>
                                        </a>

                                        @endif
                                    </div>


                                    <div class="innerPadding col-sm-4">
                                        <a id="c2" style="color: #fff" href="https://schol.io/public/schools?q=&hPP=8&idx=dummySchools&p=0&hFR%5Bcategories.lvl0%5D%5B0%5D={{ $school->city}}&hFR%5Btype%5D%5B0%5D={{ $school->type->name }}&is_v=1">
                                            <div id="c2b" class="boxAlso">
                                                <div class="upImgContainer">
                                                
                                                <picture>
                                                        <source srcset="{{asset('/new/img/sect-photo/student.webp')}}" type="image/webp">
                                                        <source srcset="{{asset('/new/img/sect-photo/student.jpg')}}" type="image/jpeg">
                                                            <img id="c2im" class="upImg" src="/new/img/sect-photo/student.webp" alt="icons">
                                                    </picture>
                                                </div>
                                                <h1 id="c2t" class="alsoText">{{ $school->type->name }} σε {{
                                                    $school->city}} </h1>
                                            </div>
                                        </a>
                                    </div>


                                    <div class="innerPadding col-sm-4 ">

                                        @if($school->type->id==1)
                                        <a id="c3" style="color: #fff" href="https://schol.io/public/schools?q=&hPP=8&idx=dummySchools&p=0&hFR%5Bcategories.lvl0%5D%5B0%5D={{ $school->city}}&hFR%5Btype%5D%5B0%5D=ΙΕΚ%20-%20Επαγγελματική%20Σχολή%20-%20ΚΔΒΜ&is_v=1">
                                            <div id="c3b" class="boxAlso">
                                                <div class="upImgContainer">
                                                    <picture>
                                                        <source srcset="{{asset('/new/img/sect-photo/doct2.webp')}}" type="image/webp">
                                                        <source srcset="{{asset('/new/img/sect-photo/doct2.jpg')}}" type="image/jpeg">
                                                        <img id="c3im" class="upImg" src="/new/img/sect-photo/doct2.webp" alt="icons">
                                                    </picture>
                                                
                                                
                                                </div>
                                                <h1 id="c3t" class="alsoText">IEK σε σε {{ $school->city}} </h1>
                                            </div>
                                        </a>
                                        @elseif($school->type->id!=4)
                                        <a id="c3" style="color: #fff" href="https://schol.io/public/schools?hFR%5Btype%5D%5B0%5D=Φροντιστήριο Ξένων Γλωσσών / Πληροφορικής&is_v=1&hPP=8&idx=dummySchools&p=0&hFR%5Bcategories.lvl0%5D%5B0%5D={{ $school->city}} > {{ $school->region}}">
                                            <div id="c3b" class="boxAlso">
                                                <div class="upImgContainer">
                                                    <picture>
                                                        <source srcset="{{asset('/new/img/sect-photo/Schoolchildren2.webp')}}" type="image/webp">
                                                        <source srcset="{{asset('/new/img/sect-photo/Schoolchildren2.jpg')}}" type="image/jpeg">
                                                            <img id="c3im" class="upImg" src="new/img/sect-photo/Schoolchildren2.webp" alt="icons">
                                                    </picture>
                                                
                                                </div>
                                                <h1 id="c3t" class="alsoText">Κέντρα Ξένων Γλωσσών σε σε {{
                                                    $school->city}} {{ $school->region}}</h1>
                                            </div>
                                        </a>
                                        @else
                                        <a id="c3" style="color: #fff" href="https://schol.io/public/schools?hFR%5Btype%5D%5B0%5D=Φροντιστήριο Μέσης Εκπαίδευσης&is_v=1&hPP=8&idx=dummySchools&p=0&hFR%5Bcategories.lvl0%5D%5B0%5D={{ $school->city}} > {{ $school->region}} ">
                                            <div id="c3b" class="boxAlso">
                                                <div class="upImgContainer">
                                                    <picture>
                                                        <source srcset="{{asset('/new/img/sect-photo/student.webp')}}" type="image/webp">
                                                        <source srcset="{{asset('/new/img/sect-photo/student.jpg')}}" type="image/jpeg">
                                                            <img id="c3im" class="upImg" src="/new/img/sect-photo/student.webp" alt="icons">
                                                    </picture>
                                                
                                                </div>
                                                <h1 id="c3t" class="alsoText">Φροντιστήρια Μέσης Εκπαίδευσης σε σε {{
                                                    $school->city}} {{ $school->region}}</h1>
                                            </div>
                                        </a>
                                        @endif
                                    </div>
                                </div>

                                





                        </div> <!-- //col-lg-9-->



                        <!-- ============================================================================= --!>


                <!-- Right Sidebar  -->
                        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs margin-top-30 right-side-bar">





                            @if($school->settings->info)
                            <div>
                                <div class="box left-box1" style="height: 250px;">

                                    <div class="col-lg-12" style="">




                                        <div class="pad-top-20"></div>
                                        <span><i class="fa fa-university pull-left pad-top-3 xs-text-incr-85 "
                                                aria-hidden="true"></i></span>
                                        <span class="pull-left pad-left-8 xs-text-incr-85 text-incr-95 ellipsis">
                                            <h1 class="schooltype">{{ $school->type->name }}</h1>

                                        </span>
                                        <br>
                                        <div class="pad-top-20"></div>
                                        <span><i class="fa fa-map-marker pull-left pad-top-3 xs-text-incr-85 "
                                                aria-hidden="true"></i></span>
                                        <span class="pull-left pad-left-8 xs-text-incr-85 text-incr-95 ellipsis">{{
                                            $school->address}}</span>
                                        <br>
                                        <div class="pad-top-20"></div>
                                        <div class="hidden-xs">
                                            <span><i class="fa fa-street-view pull-left pad-top-3 " aria-hidden="true"></i></span>
                                            <span class="pull-left pad-left-5">{{ $school->city}}</span>
                                            <br>
                                        </div>
                                        <div class="pad-top-20"></div>
                                        <span><i class="fa fa-phone pull-left pad-top-2 xs-text-incr-85" aria-hidden="true"></i></span>
                                        <span class="pull-left pad-left-5">{{ $school->phone}}</span>

                                        <div class="hidden-xs ">
                                            <br>
                                            <div class="pad-top-20"></div>
                                            <span><i class="fa fa-envelope  pull-left pad-top-2 " aria-hidden="true"></i></span>
                                            <span class="pull-left pad-left-5 ellipsis"> <a href="mailto:{{ $school->email()}}">{{
                                                    $school->email()}}</a></span>
                                        </div>

                                        <span ng-if="contactInfo.website">
                                            <br>
                                            <div class="pad-top-20"></div>
                                            <a class="webHover" href="/schoolink/redirect/{{$school->id}}/" target="_blank">
                                                <span><i class="fa fa-globe pull-left pad-top-3 xs-text-incr-85"
                                                        aria-hidden="true"></i></span>
                                                <span class="pull-left pad-left-5 ellipsis"> {{ $school->website }}</span>
                                            </a>
                                        </span>


                                    </div>
                                </div>
                            </div>
                            @endif

                            <div class="">

                                <div class=" box left-box2 sc-t-grey">
                                    <div class="col-lg-12 margin-top-30" id="box-2nd" style="">
                                        <span><i class="fa fa-trophy pull-left pad-top-3 " aria-hidden="true"></i></span>
                                        <span class="pull-left pad-left-5">@lang('profile.statistics.scholarships')</span>
                                        <span class="pull-right badge" style="margin-right: -4px"> {{
                                            count($school->activeScholarships()) }}</span>
                                        <br>

                                        <div ng-show="contactInfo.type_id==1 || contactInfo.type_id==2 ">
                                            <div class="pad-top-20"></div>
                                            <span><i class="fa fa-paint-brush pull-left pad-top-3 " aria-hidden="true"></i></span>
                                            <span class="pull-left pad-left-5">@lang('profile.statistics.studies')</span>
                                            <span class="pull-right">{{ $school->lengthStudies() }}</span>
                                            <br>
                                        </div>

                                        @if($school->settings->statistics)
                                        <div class="pad-top-20"></div>
                                        <span>
                                            <i class="fa fa-user pull-left pad-top-2 " aria-hidden="true"></i>
                                        </span>
                                        <span class="pull-left pad-left-10" ng-show="contactInfo.type_id==1 || contactInfo.type_id==2 ">@lang('profile.statistics.students')</span>
                                        <span class="pull-left pad-left-10" ng-show="contactInfo.type_id!=1 && contactInfo.type_id!=2">@lang('profile.statistics.students_s')</span>
                                        <span class="pull-right">{{ $school->lengthStudents() }}</span>
                                        <br>
                                        <div class="pad-top-20"></div>
                                        <span><i class="fa fa-graduation-cap pull-left pad-top-3 " aria-hidden="true"></i></span>
                                        <span class="pull-left pad-left-2 pad-bot-10">@lang('profile.statistics.teachers')</span>
                                        <span class="pull-right">{{ $school->lengthTeachers() }}</span>
                                        @endif


                                    </div>
                                    <div class="clearfix"></div>
                                </div>


                                @if($school->settings->map)
                                <div class="box" style="margin-top: 30px; margin-bottom: 90px;">
                                    <div class="" id="googleMap" style="height: 270px; width: 100%; "></div>
                                </div>
                                @endif

                                @if($school->admin->subscription->plan_id == 2)
                                @if(auth()->check())
                                @if(auth()->user()->role != 'school')
                                @if(auth()->user()->apply->contains($school))
                                <nav data-spy="affix" data-offset-top="1160" id="connectionButton" style="top: 120px!important">
                                    <button id="submButton" type="button" class="affix-button  sc-t-white center-block"
                                        style="background-color: #7fafbb" disabled>
                                        <i class="fa fa-link pad-right-15" aria-hidden="true"></i>
                                        @lang('profile.pending')
                                    </button>
                                </nav>

                                @else

                                @if(auth()->user()->connectedSchool->contains($school))
                                <nav data-spy="affix" data-offset-top="1160" id="connectionButton" style="top: 120px!important">
                                    <button id="submButton" type="button" class="affix-button sc-t-white center-block"
                                        style="background-color: #bbb" disabled>
                                        <i class="fa fa-link pad-right-15" aria-hidden="true"></i>
                                        @lang('profile.connected')
                                    </button>
                                </nav>
                                @else
                                <nav data-spy="affix" data-offset-top="1170" id="connectionButton" style="top: 120px!important">
                                    <button id="submButton" type="button" class="affix-button sc-orange sc-t-white center-block"
                                        data-toggle="modal" data-target="#connect-modal" ng-disabled="!showButton">
                                        <i class="fa fa-link pad-right-15" aria-hidden="true"></i>@lang('profile.request')
                                    </button>
                                </nav>
                                @endif

                                @endif
                                @endif

                                @else
                                <nav data-spy="affix" data-offset-top="1240" id="connectionButton" style="top: 120px!important">
                                    <a href="{{ url('/login') }}">
                                        <button id="submButton" type="button" class="affix-button sc-orange sc-t-white center-block">
                                            <i class="fa fa-link pad-right-15" aria-hidden="true"></i>@lang('profile.request')
                                        </button>
                                    </a>

                                </nav>
                                @endif
                                @endif

                                <nav data-spy="affix" data-offset-top="1180">
                                    <button id="interestButton" type="button" class="affix-button sc-orange sc-t-white center-block"
                                        data-toggle="modal" data-target="#interest-modal">
                                        <i class="fa fa-pencil pad-right-15" aria-hidden="true"></i>@lang('profile.interest')
                                    </button>
                                </nav>

                            </div>

                            <!-- <a class="twitter-timeline" href="https://twitter.com/DEREE_ACG?ref_src=twsrc%5Etfw">Tweets by DEREE_ACG</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> -->


                        </div><!-- //col-lg-3-->



                    </div>


                </div> <!-- //container-->



                <!-- ====== Modal Connect =======-->
                <div id="connect-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="top: 100px;">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="panel " style="background-color: #324c5a; height: 90px; border-bottom-right-radius: 0; border-bottom-left-radius: 0;">
                                <div class="panel-heading" style="height: 55px; color: #fff">
                                    <button type="button" class="btn pull-right modal-close" data-dismiss="modal">
                                        x

                                    </button>
                                    <img src="/new/img/logoNX-light-m.webp" alt="scholio logo" class="pull-left sc-logo"
                                        style="margin-top: 14px;" alt="scholio logo">
                                    <h3 class="pull-left panel-title" style="margin: 20px 0 0 15px;">@lang('profile.request')</h3>
                                </div>

                            </div>
                            <div class="panel-body">
                                <img class="pull-left margin-right-10" style="height: 45px;" src="{{ $school->logo}}">


                                @if(auth()->check() && auth()->user()->role == 'student')
                                <span> @{{ contactInfo.name }}: @lang('profile.modal.message') </span>


                                <div class="input-container">

                                    <div class="select-container">
                                        <div class="input-text">
                                            <img class="modal-icon" src="/new/img/teacher/graduate.png" alt="icon">
                                            @lang('profile.modal.studiesSelect')
                                        </div>
                                        <select ng-model="selectedStudy" class="modal-select">
                                            <optgroup label="@{{level.level.name}}" ng-repeat="level in schoolStudies">
                                                <option ng-repeat="study in level.studies" value="@{{study.study.id}}">@{{
                                                    study.study.name }}</option>
                                            </optgroup>
                                        </select>
                                    </div>

                                    <div class="select-container">
                                        <div class="input-text">
                                            <img class="modal-icon" src="/new/img/teacher/team.png" alt="icon">@lang('profile.modal.statusSelect')
                                        </div>
                                        <select ng-model="selectedStatus" class="modal-select cursor-hand">
                                            <option value="connected">@lang('panel/schools/resource.students.active')</option>
                                            <option value="allumni">@lang('panel/schools/resource.students.alumni')</option>
                                        </select>
                                    </div>
                                </div>

                                @elseif(auth()->check() && auth()->user()->role == 'teacher')
                                <span>@{{ contactInfo.name }}: Με τη σύνδεση σας, το δημόσιο προφίλ σας θα φαίνεται στο
                                    εκπαιδευτικό ίδρυμα</span>

                                <div class="input-container">
                                    <div class="select-container">
                                        <div class="input-text">
                                            <img class="modal-icon" src="/new/img/teacher/graduate.png" alt="icon">Περιγραφή
                                            Βασικής Ειδικότητας/Σπουδών
                                        </div>
                                        <input type="text" ng-model="selectedStudy" class="modal-select" />
                                        {{-- <select ng-model="selectedStudy">
                                            <optgroup label="@{{level.level.name}}" ng-repeat="level in sections">
                                                <option ng-repeat="section in level.sections" value="@{{section.section.id}}">@{{
                                                    section.section.name }}</option>
                                            </optgroup>
                                        </select> --}}
                                    </div>

                                    <div class="select-container">
                                        <div class="input-text">
                                            <img class="modal-icon" src="/new/img/teacher/team.png" alt="icon" style="height: 45px">Επιλογή
                                            Κατάστασης
                                        </div>
                                        <select ng-model="selectedStatus" class="modal-select cursor-hand">
                                            <option value="connected">@lang('panel/schools/resource.teachers.active')</option>
                                            <option value="allumni">@lang('panel/schools/resource.teachers.alumni')</option>
                                        </select>
                                    </div>
                                </div>

                                @endif


                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">@lang('profile.modal.abort')</button>
                                <button type="button" ng-click="sendRequest()" data-dismiss="modal" class="btn btn-info"
                                    ng-class="[{'disabledButton': !(selectedStudy && selectedStatus)}]" ng-disabled="!(selectedStudy && selectedStatus)">@lang('profile.modal.send')</button>
                            </div>
                        </div>
                    </div>
                </div><!-- /.modal -->

                <!-- ====== interest Modal =======-->
                <div id="interest-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="top: 100px;">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="panel " style="background-color: #324c5a; height: 90px; border-bottom-right-radius: 0; border-bottom-left-radius: 0;">
                                <div class="panel-heading" style="height: 55px; color: #fff">
                                    <button type="button" class="btn pull-right modal-close" data-dismiss="modal">
                                        x

                                    </button>
                                    <img src="/new/img/logoNX-light-m.webp" alt="scholio logo" class="pull-left sc-logo"
                                        style="margin-top: 14px;">
                                    <h3 class="pull-left panel-title" style="margin: 20px 0 0 15px;">Αίτημα
                                        Ενδιαφέροντος</h3>
                                </div>

                            </div>
                            <div class="panel-body">

                                <div class="clearfix"></div>

                                <div class="select-container">
                                    <div class="input-text-interest">Ονοματεπώνυμο
                                    </div>
                                    <input type="text" ng-model="interestName" class="modal-select" />
                                </div>
                                <div class="select-container">
                                    <div class="input-text-interest">
                                        Τηλεφωνο
                                    </div>
                                    <input type="text" ng-model="interestTel" class="modal-select" />
                                </div>
                                <div class="select-container">
                                    <div class="input-text-interest">
                                        Email
                                    </div>
                                    <input type="text" ng-model="interestEmail" class="modal-select" />
                                </div>


                                <div class="select-container">
                                    <div class="input-text">
                                        <img class="modal-icon" src="/new/img/teacher/graduate.png" alt="icon">
                                        @lang('profile.modal.studiesSelect')
                                    </div>
                                    <select ng-model="interestStudy" class="modal-select">
                                        <optgroup label="@{{level.level.name}}" ng-repeat="level in schoolStudies">
                                            <option ng-repeat="study in level.studies" value="@{{study.study.id}}">@{{
                                                study.study.name }}</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="">
                                    <input type="radio" ng-model="interestStudent" value="student"> Μαθητής<br>
                                    <input type="radio" ng-model="interestStudent" value="guardian"> Γονέας<br>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="checkbox checkbox-primary">
                                            <input ng-model="checkbox" id="checkbox-signup" type="checkbox" name="terms"
                                                onclick="checkboxClicked()" required>
                                            <label for="checkbox-signup">@lang('register-step2.accept')<a href="{{ url('terms') }}">
                                                    <span class=" orange-hover">@lang('register-step2.terms')</span></a></label>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="modal-footer" style="margin-bottom: 40px;">
                                <button type="button" class="btn btn-default" data-dismiss="modal">@lang('profile.modal.abort')</button>
                                <button type="button" ng-click="sendInterest()" data-dismiss="modal" class="btn btn-info"
                                    ng-class="[{'disabledButton': !(interestStudy && interestName)}]" ng-disabled="!(interestName && interestTel && interestEmail && interestStudy && checkbox)">@lang('profile.modal.send')</button>
                            </div>
                        </div>
                    </div>
                </div><!-- /.modal -->

                <!-- ====== MODAL IMAGES =======-->
                <div id="img-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none; top: 100px;">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <img src="/" id="bigImage" width="120%" height="auto" alt="icon"/>


                        </div>
                    </div>
                </div>


                <!-- ====== Modal Υποτροφίας =======-->
                <div id="scholarship-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none; top: 100px;">
                    <div class="modal-content">

                        <div class="panel " style="background-color: #324c5a;">
                            <div class="panel-heading" style="height: 55px; color: #fff">
                                <button type="button" class="btn pull-right" data-dismiss="modal" style="background-color: transparent">
                                    x

                                </button>
                                <img src="/new/img/logoNX-light-m.webp" alt="scholio logo" class="pull-left">
                                <h3 class="pull-left panel-title" style="margin: 8px 0 0 15px;">Υποτροφία @{{'>> send
                                    id here <<<'}}</h3> </div> </div> <div class="panel-body">
                                        <img class="pull-left margin-right-10" style="height: 45px;" ng-src="{{ $school->logo}}" alt="scholio logo">
                                        <span>{{ $school->type->name }} {{ $school->name() }}: </span>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">@lang('profile.modal.abort')</button>
                                <button type="button" class="btn btn-info">@lang('profile.modal.request')</button>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- modal -->


        </main>
    </div>

    <!-- Footer -->
    @include('public.footer')

    <script src="https://maps.googleapis.com/maps/api/js?libraries=geometry,places&language=el&region=GR&key=AIzaSyDCdWDTJpvexNyV0DzIpbR69XatKp9Litg"></script>


    <!-- Bootstrap js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Angular js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.min.js"></script>

    <!-- Rating js-->
    <script src="/new/js/jquery.raty-fa.js"></script>

    <!-- BX Slider-->
    <script src="/new/js/jquery.bxslider412.js"></script>

    <script src="/js/in-view.min.js"></script>




</body>

<script>
    

    $(document).ready(function () {
        inView('#otherSchools').on('enter', isInView).on('exit', saveAnalytic);

        var seconds;

        function isInView(){
            seconds = 0;
            startTimer();
        }

        function startTimer() {
            setInterval(function () {
                seconds++;
            }, 1000);
        }

        function saveAnalytic() {
            console.log(seconds + " seconds");
            seconds = 0;
        }
    });

</script>

<script>

    $(document).ready(function () {

        $("#c1").mouseover(function () {
            $("#c1t").css("color", "#FD6A33");
            $("#c1b").css("box-shadow", "0 0 10px #999").css("background", "#fff");
            $("#c1im").css("opacity", "1");
        });
        $("#c1").mouseout(function () {
            $("#c1t").css("color", "#006373");
            $("#c1b").css("box-shadow", "none").css("background", "#f8f8f8");
            $("#c1im").css("opacity", "0.7");
        });
        $("#c2").mouseover(function () {
            $("#c2t").css("color", "#FD6A33");
            $("#c2b").css("box-shadow", "0 0 10px #999").css("background", "#fff");
            $("#c2im").css("opacity", "1");
        });
        $("#c2").mouseout(function () {
            $("#c2t").css("color", "#006373");
            $("#c2b").css("box-shadow", "none").css("background", "#f8f8f8");
            $("#c2im").css("opacity", "0.7");
        });

        $("#c3").mouseover(function () {
            $("#c3t").css("color", "#FD6A33");
            $("#c3b").css("box-shadow", "0 0 10px #999").css("background", "#fff");
            $("#c3im").css("opacity", "1");
        });
        $("#c3").mouseout(function () {
            $("#c3t").css("color", "#006373");
            $("#c3b").css("box-shadow", "none").css("background", "#f8f8f8");
            $("#c3im").css("opacity", "0.7");
        });
    });
</script>


<!-- birme 800 x 560 ratio 1.4285 -->
<script>
    $(function () {
        $('.bxslider').bxSlider({
            pager: false,
            controls: true,
            minSlides: 1,
            maxSlides: 5,
            moveSlides: 1,
            slideWidth: 328.5,
            slideMargin: 10,
            infiniteLoop: true,
            hideControlOnEnd: false,
            onSliderLoad: function () {
                $("#bx").css("visibility", "visible")
            }
        });
    });
</script>

<script>
    function test(e) {
        var IMG = e.id

        $('#bigImage').attr("src", IMG);

        $('#img-modal').modal('toggle');
    }

    var lengthStudents = 0;


    $(function () {
        var bt = $('#connectionButton');
        var offset = bt.offset() || 0;
        bt.attr("data-offset-top", offset.top + 120);

        //caches a jQuery object containing the header element
        var sb = $("#submButton1");
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            if (scroll >= 595) {
                sb.removeClass('hidden').addClass("vissible");
            } else {
                sb.removeClass("vissible").addClass('hidden');
            }
        });
    });

    var lengthStudents = 0;
    angular.module("profileApp", [])
        .controller("profileCtrl", function ($timeout, $scope, $http, $sce) {

            $scope.notifications = []
            $scope.studies = []
            $scope.sections = []
            $scope.selectedUser = null
            $scope.selectedStudy = null
            $scope.selectedStatus = null
            $scope.buttonsDisabled = true
            $scope.studyConnection = 0
            $scope.showButton = false
            $scope.schoolStudies = null

            $scope.role = function (r) {
                return lang.seeder.role['' + r]
            }

            $scope.categ = function (icon) {
                return lang.seeder.category['' + icon]
            }

            $scope.getSchoolStudies = function () {
                $http.get('/api/notifications/getSchoolLevelStudies/public/{{$id}}', {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': window.Scholio.csrfToken
                    }
                })
                    .success(function (data) {
                        $scope.schoolStudies = data
                        $scope.showButton = true



                    })
            }

            $scope.getSchoolSections = function () {
                $http.get('/api/notifications/getSchoolLevelSections/public/{{$id}}', {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': window.Scholio.csrfToken
                    }
                })
                    .success(function (data) {
                        $scope.sections = data
                        $scope.showButton = true
                    })

            }

            $scope.categoryReview = function (index, stars) {
                setTimeout(function () {
                    $('#catReview-' + index).raty({
                        score: stars,
                        halfShow: true,
                        half: true,
                        readOnly: true,
                        starHalf: 'fa fa-fw fa-star-half'
                    });
                }, 500);

            }

            $scope.uniqueArray = function (arr) {

                return !!arr.reduce(function (a, b) { return (a === b) ? a : NaN; });
            }

            $scope.rate = function (id, stars) {
                setTimeout(function () {
                    $('#totalRating-' + id).raty({
                        score: stars,
                        halfShow: true,
                        half: true,
                        readOnly: true,
                        starHalf: 'fa fa-fw fa-star-half'
                    });
                }, 20);
            }

            $scope.test = function (scholarship) {
                setTimeout(function () {

                    if (scholarship.userInterested) {
                        $('#i' + scholarship.id).toggleClass('fa-thumbs-up fa-thumbs-o-up');
                        $('#t' + scholarship.id).text("@lang('profile.scholarship.button.like')")
                        $('#b' + scholarship.id).css("background-color", "#ccc");
                    }
                }, 30);
            }

            $scope.ratings = function () {
                $('rating').raty({
                    score: window.totalStars,
                    halfShow: true,
                    half: true,
                    readOnly: true,
                    starHalf: 'fa fa-fw fa-star-half'
                });

                $('#totalRating').raty({
                    score: window.totalStars,
                    halfShow: true,
                    half: true,
                    readOnly: true,
                    starHalf: 'fa fa-fw fa-star-half'
                });
            }

            $scope.init = function () {
                $scope.interestStudent = 'student';
                $scope.trustAsHtml = $sce.trustAsHtml;
                $scope.message = null;
                $scope.scholarship = ['sd'];
                $scope.col_iek_eng_dan_mus = false;
                $scope.sxoleio = false;

                @if(auth()->check() && auth()->user()->role == 'student')
                    $scope.getSchoolStudies();
                @elseif(auth()->check() && auth()->user()-> role == 'teacher')
                $scope.showButton = true
                // $scope.getSchoolSections();
                @endif

                var apiLink = '';
                @if(auth()->check())
                    apiLink = '/api/profile/auth/{{ $id }}';
                @else
                apiLink = '/api/profile/{{ $id }}';
                @endif
                $http.get(apiLink, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': window.Scholio.csrfToken
                    }
                })
                    .success(function (data) {
                        $scope.contactInfo = data;

                        window.totalStars = data.stars
                        $scope.ratings();
                        $scope.studies = data.levels;
                        if (data.scholarship[0]) $scope.message = $sce.trustAsHtml(data.scholarship[0].terms);
                        else $scope.message = ''

                        if ($scope.studies.length) $scope.initial();

                        var type = data.type_id
                        if (type == 1 || type == 2 || type == 3 || type == 4 || type == 10 || type == 11 || type == 12) $scope.col_iek_eng_dan_mus = true
                        if (type == 13) $scope.sxoleio = true

                        $scope.multipleSectionsSelected = {};
                        $scope.mStudies = {};
                        var multipleStudies = []

                        // data.scholarship.forEach(function(item){
                        //         item.multipleStudies.forEach(function(st){
                        //             multipleStudies.push(st.section[0].id)
                        //             $scope.mStudies[item.id] = multipleStudies
                        //             $scope.multipleSectionsSelected[item.id] = !$scope.uniqueArray(multipleStudies)
                        //         })
                        //         multipleStudies = []
                        // })


                    });


                $scope.interestedCheck = function (id) {
                    $scope.interested1 = $http.post('/api/interested/save', { 'scholarship': id }, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': window.Scholio.csrfToken
                        }
                    })
                        .success(function (data) {
                            if (data == 'YES') {
                                $('#t' + id).text("@lang('profile.scholarship.button.interested')")
                                $('#i' + id).toggleClass('fa-thumbs-up fa-thumbs-o-up');
                            } else {
                                $('#t' + id).text("@lang('profile.scholarship.button.like')")
                                $('#i' + id).toggleClass('fa-thumbs-o-up fa-thumbs-up');
                                $('#b' + id).style.backgroundColor = '#ccc'
                            }

                        });
                }
                $scope.levelsName = [];
                $scope.sectionsName = [];
                $scope.sectionsIcon = [];
                $scope.studiesName = [];
                $scope.studiesUrl = [];
                $scope.studiesID = [];

                $scope.initial = function () {
                    $scope.getSchoolStudies();
                    /* ========== BUILD levelsName ARRAY============ */
                    $scope.levelsName[0] = $scope.studies[0][0].section[0].level.name
                    //
                    var length = 0
                    var found = false
                    for (var std in $scope.studies) {
                        found = false
                        for (var lev in $scope.levelsName) {
                            if ($scope.levelsName[lev] == $scope.studies[std][0].section[0].level.name) {
                                found = true
                            }
                        }
                        if (!found) {
                            length++
                            $scope.levelsName[length] = $scope.studies[std][0].section[0].level.name
                            //
                        }
                    }
                    //
                    /* ========== BUILD sectionsName ARRAY============ */
                    for (lev in $scope.levelsName) {
                        $scope.sectionsName[lev] = [];
                        $scope.sectionsIcon[lev] = [];
                    }
                    length = 0

                    for (lev in $scope.levelsName) {
                        for (std in $scope.studies) {
                            if ($scope.levelsName[lev] == $scope.studies[std][0].section[0].level.name) {
                                if (!length) {
                                    $scope.sectionsName[lev][0] = $scope.studies[std][0].section[0].name
                                    $scope.sectionsIcon[lev][0] = $scope.studies[std][0].section[0].icon
                                    length = 1
                                }
                                found = false
                                for (var sec in $scope.sectionsName[lev]) {
                                    if ($scope.sectionsName[lev][sec] == $scope.studies[std][0].section[0].name) {
                                        found = true
                                    }
                                }
                                if (!found) {
                                    $scope.sectionsName[lev][length] = $scope.studies[std][0].section[0].name
                                    $scope.sectionsIcon[lev][length] = $scope.studies[std][0].section[0].icon
                                    length++
                                }
                            }
                        }
                        length = 0
                    }
                    /* ========== BUILD studiesName ARRAY============ */
                    var study = 0
                    for (lev in $scope.levelsName) {
                        $scope.studiesName[lev] = [];
                        $scope.studiesUrl[lev] = [];
                        $scope.studiesID[lev] = [];
                        for (sec in $scope.sectionsName[lev]) {
                            $scope.studiesName[lev][sec] = [];
                            $scope.studiesUrl[lev][sec] = [];
                            $scope.studiesID[lev][sec] = [];

                            study = 0
                            for (std in $scope.studies) {
                                if ($scope.levelsName[lev] == $scope.studies[std][0].section[0].level.name
                                    && $scope.sectionsName[lev][sec] == $scope.studies[std][0].section[0].name
                                ) {
                                    //
                                    $scope.studiesName[lev][sec][study] = $scope.studies[std][0].name
                                    $scope.studiesID[lev][sec][study] = $scope.studies[std][0].id
                                    // console.log($scope.studiesID[lev][sec][study])
                                    // $scope.studiesID[lev][sec][study]=$scope.studies[std][0].id
                                    $scope.studiesUrl[lev][sec][study] = $scope.contactInfo.study[std].pivot.url
                                    //

                                    // $scope.studiesIcon[lev][sec][study]=$scope.studies[std][0].icon
                                    study++
                                }
                            }
                        }
                    }
                    @if($school->settings->map)
                        $scope.mapInitial()
                    @endif
                }
            };
            $scope.interested = function (id, index) {
                $scope.interested1 = $http.post('/api/interested/save', { 'scholarship': id }, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': window.Scholio.csrfToken
                    }
                })
                    .success(function (data) {

                        if (data == 'YES') {
                            $scope.contactInfo.scholarship[index].interests++;
                            $('#i' + id).toggleClass('fa-thumbs-up fa-thumbs-o-up');
                            $('#t' + id).text("@lang('profile.scholarship.button.like')")
                            $('#b' + id).css("background-color", "#ccc");
                        } else {
                            $scope.contactInfo.scholarship[index].interests--;
                            $('#i' + id).toggleClass('fa-thumbs-o-up fa-thumbs-up');
                            $('#t' + id).text("@lang('profile.scholarship.button.interested')")
                            $('#b' + id).css("background-color", "#008da5");
                        }
                    });
            }


            $scope.mapInitial = function () {
                var myLatlng = new google.maps.LatLng($scope.contactInfo.lat, $scope.contactInfo.lng);
                var myOptions = {
                    zoom: 15,
                    center: myLatlng,
                    scrollwheel: false,
                    scaleControl: true,
                }
                var map = new google.maps.Map(document.getElementById("googleMap"), myOptions);
                var mapXS = new google.maps.Map(document.getElementById("googleMapXS"), myOptions);
                //

                var marker = new google.maps.Marker({
                    position: myLatlng,
                    //animation: google.maps.Animation.DROP,
                    title: $scope.contactInfo.name,
                    icon: "/../new/img/markers/marker-teal-sm.webp",
                    map: map,
                    mapTypeId: google.maps.MapTypeId.ROADMAP

                });
                var marker2 = new google.maps.Marker({
                    position: myLatlng,
                    //animation: google.maps.Animation.DROP,
                    title: $scope.contactInfo.name,
                    icon: "/../new/img/markers/marker-teal-sm.webp",
                    map: mapXS,
                    mapTypeId: google.maps.MapTypeId.ROADMAP

                });


                var styledMapType = new google.maps.StyledMapType(
                    [
                        {
                            "featureType": "poi.park",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    //"color": "#9ec4ae"
                                    //"color": "#A3BFA8"
                                    //"color": "#B5C5B8"
                                    //"color": "#D9F0D1"
                                    "color": "#E2F0DA"

                                    //"color": "#CBE6A3"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    //"color": "#00bcd4"
                                    //"color": "#53D0D9"
                                    //"color": "#00C9E1"
                                    //"color": "#00D1E9"
                                    //"color": "#00E2FF"

                                    //"color": "#A4E2E7"
                                    "color": "#A4DBE7"

                                    //"color": "#A3CCFF"
                                }
                            ]
                        }
                    ]
                )

                map.mapTypes.set('styled_map', styledMapType);
                map.setMapTypeId('styled_map');

                mapXS.mapTypes.set('styled_map', styledMapType);
                mapXS.setMapTypeId('styled_map');
            }



            $scope.sendRequest = function () {
                if ($scope.selectedStudy && $scope.selectedStatus) {
                    $scope.sendRequestToSchool = $http.post('/api/request/school', { 'school': $scope.contactInfo.id, 'study': $scope.selectedStudy, 'status': $scope.selectedStatus }, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': window.Scholio.csrfToken
                        }
                    })
                        .success(function (data) {
                            window.location.reload();
                        });
                }
            }

            $scope.sendInterest = function () {
                gtag('event', 'conversion', {
                    'send_to': 'AW-799029410/Q5PICN2dvIUBEKLxgP0C'
                });

                $scope.sendInterestToSchool = $http.post('/api/interest/school', { 'school_id': $scope.contactInfo.id, 'study_id': $scope.interestStudy, 'name': $scope.interestName, 'email': $scope.interestEmail, 'tel': $scope.interestTel, 'student': $scope.interestStudent }, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': window.Scholio.csrfToken
                    }
                })
                    .success(function (data) {
                        window.location.reload();
                    });
            }

            $scope.textAbout = "@lang('profile.more')";
            $scope.iconAbout = 'fa fa-angle-down'
            $scope.showMoreAbout = function (hash) {
                if ($scope.textAbout === "@lang('profile.more')") {
                    $scope.textAbout = "@lang('profile.less')";
                    $scope.iconAbout = 'fa fa-angle-up'
                    $("#sxetika").removeClass('slideAbout').toggleClass("slidedown slideup");
                } else {
                    $scope.textAbout = "@lang('profile.more')";
                    $scope.iconAbout = 'fa fa-angle-down'
                    $("#sxetika").toggleClass("slidedown slideup").addClass('slideAbout');
                    //                        location.hash = '#';
                    //                        location.hash = "#" + hash;
                };
            }
            $scope.textStudies = "@lang('profile.more')";
            $scope.iconStudies = 'fa fa-angle-down'
            $scope.showMoreStudies = function (hash) {
                if ($scope.textStudies === "@lang('profile.more')") {
                    $scope.textStudies = "@lang('profile.less')";
                    $scope.iconStudies = 'fa fa-angle-up'
                    $("#sliderStudies").removeClass('slideStudies').toggleClass("slidedown slideup");
                } else {
                    $scope.textStudies = "@lang('profile.more')";
                    $scope.iconStudies = 'fa fa-angle-down'
                    $("#sliderStudies").toggleClass("slidedown slideup").addClass('slideStudies');
                    location.hash = '#';
                    location.hash = "#" + hash;
                    //
                };
            }
            $scope.textScholarships = "@lang('profile.more')";
            $scope.iconScholarships = 'fa fa-angle-down'
            $scope.showMoreScholarships = function (hash) {
                if ($scope.textScholarships === "@lang('profile.more')") {
                    $scope.textScholarships = "@lang('profile.less')";
                    $scope.iconScholarships = 'fa fa-angle-up'
                    $("#ypotrofies").removeClass('slideScholarships').toggleClass("slidedown slideup");
                } else {
                    $scope.textScholarships = "@lang('profile.more')";
                    $scope.iconScholarships = 'fa fa-angle-down'
                    $("#ypotrofies").toggleClass("slidedown slideup").addClass('slideScholarships');
                    location.hash = '#';
                    location.hash = "#" + hash;
                };
            }
            $scope.textReviews = "@lang('profile.more')";
            $scope.iconReviews = 'fa fa-angle-down'
            $scope.showMoreReviews = function (hash) {
                if ($scope.textReviews === "@lang('profile.more')") {
                    $scope.textReviews = "@lang('profile.less')";
                    $scope.iconReviewst = 'fa fa-angle-up'
                    $("#reviews").removeClass('slideReviews').toggleClass("slidedown slideup");
                } else {
                    $scope.textReviews = "@lang('profile.more')";
                    $scope.iconReviews = 'fa fa-angle-down'
                    $("#reviews").toggleClass("slidedown slideup").addClass('slideReviews');
                    location.hash = '#';
                    location.hash = "#" + hash;
                };
            }
            $scope.textTeachers = "@lang('profile.more')";
            $scope.iconTeachers = 'fa fa-angle-down'
            $scope.showMoreTeachers = function () {
                if ($scope.textTeachers === "@lang('profile.more')") {
                    $scope.textTeachers = "@lang('profile.less')";
                    $scope.iconTeachers = 'fa fa-angle-up'
                    $("#faculty").removeClass('slideTeachers').toggleClass("slidedown slideup");
                } else {
                    $scope.textTeachers = "@lang('profile.more')";
                    $scope.iconTeachers = 'fa fa-angle-down'
                    $("#faculty").toggleClass("slidedown slideup").addClass('slideTeachers');
                    location.hash = '#';
                    location.hash = "#" + hash;
                };
            }

            $scope.getAVG = function (category) {

                var avg = 0;

                for (var i = $scope.reviews.length - 1; i >= 0; i--) {
                    avg += $scope.reviews[i].stars[category];
                }

                if ($scope.reviews.length > 0)
                    return Math.round((avg / $scope.reviews.length) * 10) / 10;
                else
                    return "?";
            }
        })


</script>


</html>