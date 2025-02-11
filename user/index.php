<?php
// Include config file
include('../config.php');

// URL of the file you want to request
$url = $invidApi . '/api/v1/channels/' . $_GET['id'];

// Cache file path
$cache_file = '../cache/channels/' . $_GET['id'] . '-main.json';

// Cache duration in seconds (24 hours)
$cache_duration = 24 * 60 * 60;

// Check if cache file exists and is still valid
if (file_exists($cache_file) && (time() - filemtime($cache_file) < $cache_duration)) {
    // Read data from cache
    $data = file_get_contents($cache_file);
} else {
    // Fetch data from URL
    $data = file_get_contents($url);

    // Save data to cache file
    file_put_contents($cache_file, $data);
}

$dataChan = json_decode($data, true);

$author = $dataChan['author'];
$authorId = $dataChan['authorId'];

//Handle fallback
if (isset($dataChan['authorBanners'][0]['url'])) {
$authorBanner = $dataChan['authorBanners'][0]['url'];
} else {
$authorBanner = "//s.ytimg.com/yts/img/channels/c4/default_banner-vfl7DRgTn.png";
}

$authorThumb = $dataChan['authorThumbnails'][3]['url'];
$subCount = number_format($dataChan['subCount']);
$descriptionRaw = str_replace("\n", " ", $dataChan['description']);

if ($dataChan['authorVerified'] == true) {
$verifiedHtml = '<a class="qualified-channel-title-badge" target="_blank" href="//support.google.com/youtube/bin/answer.py?answer=3046484&amp;hl=en"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-channel-title-icon-verified yt-uix-tooltip yt-sprite" data-tooltip-text="Verified" alt=""></a>';
} else {
$verifiedHtml = '';
}

// Handle Tags
$words = "";

foreach($dataChan['tags'] as $key => $wordsText) {
$words = $words . $wordsText . ", ";
}
?>
    <!DOCTYPE html><html lang="en" data-cast-api-enabled="true"><head><script>var ytcsi = {gt: function(n) {n = (n || '') + 'data_';return ytcsi[n] || (ytcsi[n] = {tick: {},span: {},info: {}});},tick: function(l, t, n) {ytcsi.gt(n).tick[l] = t || +new Date();},span: function(l, s, n) {ytcsi.gt(n).span[l] = (typeof s == 'number') ? s :+new Date() - ytcsi.data_.tick[l];},info: function(k, v, n) {ytcsi.gt(n).info[k] = v;}};ytcsi.perf = window.performance || window.mozPerformance ||window.msPerformance || window.webkitPerformance;ytcsi.tick('_start', ytcsi.perf ? ytcsi.perf.timing.responseStart : null);if (document.webkitVisibilityState == 'prerender') {ytcsi.info('prerender', 1);document.addEventListener('webkitvisibilitychange', function() {ytcsi.tick('_start');}, false);}</script>  <script>
    try {window.ytbuffer = {};ytbuffer.handleClick = function(e) {var element = e.target || e.srcElement;while (element.parentElement) {if (element.className.match(/(^| )yt-can-buffer( |$)/)) {window.ytbuffer = {bufferedClick: e};element.className += ' yt-is-buffered';break;}element = element.parentElement;}};if (document.addEventListener) {document.addEventListener('click', ytbuffer.handleClick);} else {document.attachEvent('onclick', ytbuffer.handleClick);}} catch(e) {}
    (function(){function a(b,g,k){var h=document.getElementsByTagName("html")[0],e=[h.className];b&&1251<=(window.innerWidth||document.documentElement.clientWidth)&&(e.push("guide-pinned"),g&&e.push("show-guide"));k&&(b=(window.innerWidth||document.documentElement.clientWidth)-21-50,1251<=(window.innerWidth||document.documentElement.clientWidth)&&g&&(b-=230),e.push(" ",1262<=b?"content-snap-width-3":1056<=b?"content-snap-width-2":"content-snap-width-1"));h.className=e.join(" ")}
var c=["yt","www","masthead","sizing","runBeforeBodyIsReady"],d=this;c[0]in d||!d.execScript||d.execScript("var "+c[0]);for(var f;c.length&&(f=c.shift());)c.length||void 0===a?d[f]?d=d[f]:d=d[f]={}:d[f]=a;})();
yt.www.masthead.sizing.runBeforeBodyIsReady(true,true,true);
  </script>



        <script src="//s.ytimg.com/yts/jsbin/www-scheduler-vfltpmjOU/www-scheduler.js" type="text/javascript" name="www-scheduler"></script>


  
  <link rel="stylesheet" href="//s.ytimg.com/yts/cssbin/www-core-vflyfJFUS.css" name="www-core">
<script>if (window.ytcsi) {window.ytcsi.tick("ce", null, '');}</script>  

    
<title><?php echo $author; ?> - YouTube</title><link rel="search" type="application/opensearchdescription+xml" href="http://www.youtube.com/opensearch?locale=en_US" title="YouTube Video Search"><link rel="shortcut icon" href="https://s.ytimg.com/yts/img/favicon-vfldLzJxy.ico" type="image/x-icon">     <link rel="icon" href="//s.ytimg.com/yts/img/favicon_32-vflWoMFGx.png" sizes="32x32"><link rel="canonical" href="http://www.youtube.com/channel/<?php echo $authorId; ?>"><link rel="alternate" media="handheld" href="https://m.youtube.com/channel/<?php echo $authorId; ?>?"><link rel="alternate" media="only screen and (max-width: 640px)" href="https://m.youtube.com/channel/<?php echo $authorId; ?>?">    <meta name="title" content="<?php echo $author; ?>">

    <meta name="description" content="<?php echo $descriptionRaw; ?>">

<meta name="keywords" content="<?php echo $words; ?>">    <link rel="image_src" href="<?php echo $authorThumb; ?>">
    <link rel="alternate" type="application/rss+xml" title="RSS" href="http://gdata.youtube.com/feeds/base/channel/<?php echo $authorId; ?>/uploads?alt=rss&amp;v=2&amp;orderby=published&amp;client=ytapi-youtube-profile">
    <link rel="publisher" href="https://plus.google.com/117663191659499528404">
          <meta property="og:site_name" content="YouTube">
    <meta property="og:url" content="http://www.youtube.com/channel/<?php echo $authorId; ?>">
    <meta property="og:title" content="<?php echo $author; ?>">
    <meta property="og:image" content="<?php echo $authorThumb; ?>">

      <meta property="og:description" content="<?php echo $descriptionRaw; ?>">

    <meta property="al:ios:app_store_id" content="544007664">
    <meta property="al:ios:app_name" content="YouTube">
      <meta property="al:ios:url" content="vnd.youtube://user/<?php echo $authorId; ?>">
    <meta property="al:android:url" content="http://www.youtube.com/channel/<?php echo $authorId; ?>?feature=applinks">
    <meta property="al:android:app_name" content="YouTube">
    <meta property="al:android:package" content="com.google.android.youtube">
    <meta property="al:web:url" content="http://www.youtube.com/channel/<?php echo $authorId; ?>?feature=applinks">

    <meta property="og:type" content="profile">

    <meta property="fb:app_id" content="87741124305">

      <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@youtube">
    <meta name="twitter:url" content="http://www.youtube.com/channel/<?php echo $authorId; ?>">
    <meta name="twitter:title" content="<?php echo $author; ?>">
    <meta name="twitter:description" content="<?php echo $descriptionRaw; ?>">
    <meta name="twitter:image" content="<?php echo $authorThumb; ?>">
    <meta name="twitter:app:name:iphone" content="YouTube">
    <meta name="twitter:app:id:iphone" content="544007664">
    <meta name="twitter:app:name:ipad" content="YouTube">
    <meta name="twitter:app:id:ipad" content="544007664">
      <meta name="twitter:app:url:iphone" content="vnd.youtube://user/<?php echo $authorId; ?>">
      <meta name="twitter:app:url:ipad" content="vnd.youtube://user/<?php echo $authorId; ?>">
    <meta name="twitter:app:name:googleplay" content="YouTube">
    <meta name="twitter:app:id:googleplay" content="com.google.android.youtube">
    <meta name="twitter:app:url:googleplay" content="http://www.youtube.com/channel/<?php echo $authorId; ?>">

      <link itemprop="url" href="http://www.youtube.com/channel/<?php echo $authorId; ?>">
    <meta itemprop="name" content="<?php echo $author; ?>">
    <meta itemprop="description" content="<?php echo $descriptionRaw; ?>">
    <meta itemprop="paid" content="False">

      <meta itemprop="channelId" content="<?php echo $authorId; ?>">


        <span itemprop="author" itemscope itemtype="http://schema.org/Person">
          <link itemprop="url" href="http://www.youtube.com/channel/<?php echo $authorId; ?>">
        </span>
        <span itemprop="author" itemscope itemtype="http://schema.org/Person">
          <link itemprop="url" href="https://plus.google.com/117663191659499528404">
        </span>

    <link itemprop="thumbnailUrl" href="<?php echo $authorThumb; ?>">
    <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
      <link itemprop="url" href="<?php echo $authorThumb; ?>">
      <meta itemprop="width" content="900">
      <meta itemprop="height" content="900">
    </span>


      <meta itemprop="isFamilyFriendly" content="True">
      <meta itemprop="regionsAllowed" content="AD,AE,AF,AG,AI,AL,AM,AO,AQ,AR,AS,AT,AU,AW,AX,AZ,BA,BB,BD,BE,BF,BG,BH,BI,BJ,BL,BM,BN,BO,BQ,BR,BS,BT,BV,BW,BY,BZ,CA,CC,CD,CF,CG,CH,CI,CK,CL,CM,CN,CO,CR,CU,CV,CW,CX,CY,CZ,DE,DJ,DK,DM,DO,DZ,EC,EE,EG,EH,ER,ES,ET,FI,FJ,FK,FM,FO,FR,GA,GB,GD,GE,GF,GG,GH,GI,GL,GM,GN,GP,GQ,GR,GS,GT,GU,GW,GY,HK,HM,HN,HR,HT,HU,ID,IE,IL,IM,IN,IO,IQ,IR,IS,IT,JE,JM,JO,JP,KE,KG,KH,KI,KM,KN,KP,KR,KW,KY,KZ,LA,LB,LC,LI,LK,LR,LS,LT,LU,LV,LY,MA,MC,MD,ME,MF,MG,MH,MK,ML,MM,MN,MO,MP,MQ,MR,MS,MT,MU,MV,MW,MX,MY,MZ,NA,NC,NE,NF,NG,NI,NL,NO,NP,NR,NU,NZ,OM,PA,PE,PF,PG,PH,PK,PL,PM,PN,PR,PS,PT,PW,PY,QA,RE,RO,RS,RU,RW,SA,SB,SC,SD,SE,SG,SH,SI,SJ,SK,SL,SM,SN,SO,SR,SS,ST,SV,SX,SY,SZ,TC,TD,TF,TG,TH,TJ,TK,TL,TM,TN,TO,TR,TT,TV,TW,TZ,UA,UG,UM,US,UY,UZ,VA,VC,VE,VG,VI,VN,VU,WF,WS,YE,YT,ZA,ZM,ZW">

  <div id="watch-container" itemid="" itemscope itemtype="http://schema.org/YoutubeChannelV2">
        <link itemprop="url" href="http://www.youtube.com/channel/<?php echo $authorId; ?>">
    <meta itemprop="name" content="<?php echo $author; ?>">
    <meta itemprop="description" content="<?php echo $descriptionRaw; ?>">
    <meta itemprop="paid" content="False">

      <meta itemprop="channelId" content="<?php echo $authorId; ?>">


        <span itemprop="author" itemscope itemtype="http://schema.org/Person">
          <link itemprop="url" href="http://www.youtube.com/channel/<?php echo $authorId; ?>">
        </span>
        <span itemprop="author" itemscope itemtype="http://schema.org/Person">
          <link itemprop="url" href="https://plus.google.com/117663191659499528404">
        </span>

    <link itemprop="thumbnailUrl" href="<?php echo $authorThumb; ?>">
    <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
      <link itemprop="url" href="<?php echo $authorThumb; ?>">
      <meta itemprop="width" content="900">
      <meta itemprop="height" content="900">
    </span>


      <meta itemprop="isFamilyFriendly" content="True">
      <meta itemprop="regionsAllowed" content="AD,AE,AF,AG,AI,AL,AM,AO,AQ,AR,AS,AT,AU,AW,AX,AZ,BA,BB,BD,BE,BF,BG,BH,BI,BJ,BL,BM,BN,BO,BQ,BR,BS,BT,BV,BW,BY,BZ,CA,CC,CD,CF,CG,CH,CI,CK,CL,CM,CN,CO,CR,CU,CV,CW,CX,CY,CZ,DE,DJ,DK,DM,DO,DZ,EC,EE,EG,EH,ER,ES,ET,FI,FJ,FK,FM,FO,FR,GA,GB,GD,GE,GF,GG,GH,GI,GL,GM,GN,GP,GQ,GR,GS,GT,GU,GW,GY,HK,HM,HN,HR,HT,HU,ID,IE,IL,IM,IN,IO,IQ,IR,IS,IT,JE,JM,JO,JP,KE,KG,KH,KI,KM,KN,KP,KR,KW,KY,KZ,LA,LB,LC,LI,LK,LR,LS,LT,LU,LV,LY,MA,MC,MD,ME,MF,MG,MH,MK,ML,MM,MN,MO,MP,MQ,MR,MS,MT,MU,MV,MW,MX,MY,MZ,NA,NC,NE,NF,NG,NI,NL,NO,NP,NR,NU,NZ,OM,PA,PE,PF,PG,PH,PK,PL,PM,PN,PR,PS,PT,PW,PY,QA,RE,RO,RS,RU,RW,SA,SB,SC,SD,SE,SG,SH,SI,SJ,SK,SL,SM,SN,SO,SR,SS,ST,SV,SX,SY,SZ,TC,TD,TF,TG,TH,TJ,TK,TL,TM,TN,TO,TR,TT,TV,TW,TZ,UA,UG,UM,US,UY,UZ,VA,VC,VE,VG,VI,VN,VU,WF,WS,YE,YT,ZA,ZM,ZW">

  </div>

      <div class="cmt_iframe_holder" data-href="http://www.youtube.com/channel/<?php echo $authorId; ?>" data-viewtype="FILTERED" style="display: none;"></div>


  <link rel="stylesheet" href="//s.ytimg.com/yts/cssbin/www-pageframe-vflF__vZT.css" name="www-pageframe">
  <link rel="stylesheet" href="//s.ytimg.com/yts/cssbin/www-guide-vfl0yTMs_.css" name="www-guide">
    <link rel="stylesheet" href="//s.ytimg.com/yts/cssbin/www-home-c4-vflhry5mz.css" name="www-home-c4">



  
<script>if (window.ytcsi) {window.ytcsi.tick("cl", null, '');}</script></head>

      <body dir="ltr" class="  ltr       site-center-aligned site-as-giant-card guide-pinning-enabled appbar-hidden     not-nirvana-dogfood not-nirvana-playlist  not-watch8    flex-width-enabled      flex-width-enabled-snap    delayed-frame-styles-not-in  " id="body">

  <div id="early-body"></div>
  <div id="body-container"><form name="logoutForm" method="POST" action="/logout"><input type="hidden" name="action_logout" value="1"></form><div id="masthead-positioner">  
  <div id="yt-masthead-container" class="yt-grid-box yt-base-gutter"><div id="yt-masthead" class=""><div class="yt-masthead-logo-container ">    <a id="logo-container" href="/" title="YouTube home" class="     spf-link 
"><img id="logo" src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="YouTube home"><?php include('../templates/contentregion.php'); ?></a>
  <div id="appbar-guide-button-container">
    <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-text yt-uix-button-empty yt-uix-button-has-icon appbar-guide-toggle appbar-guide-clickable-ancestor" type="button" onclick=";return false;" id="appbar-guide-button" aria-controls="appbar-guide-menu" aria-label="Guide"><span class="yt-uix-button-icon-wrapper"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-icon yt-uix-button-icon-appbar-guide yt-sprite" alt=""></span><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-arrow yt-sprite" alt=""></button>
    <div id="appbar-guide-button-notification-check" class="yt-valign">
      <img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="appbar-guide-notification-icon yt-valign-content yt-sprite" alt="">
    </div>
  </div>
  <div id="appbar-main-guide-notification-container"></div>
</div><div id="yt-masthead-signin"><span id="appbar-onebar-upload-group"><a href="//www.youtube.com/upload" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-default yt-uix-button-size-default" data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=mhsb" id="upload-btn"><span class="yt-uix-button-content">Upload </span></a></span><button class="yt-uix-button yt-uix-button-size-default yt-uix-button-primary" type="button" onclick=";window.location.href=this.getAttribute(&#39;href&#39;);return false;" href="https://accounts.google.com/ServiceLogin?hl=en&amp;service=youtube&amp;uilel=3&amp;continue=https%3A%2F%2Fwww.youtube.com%2Fsignin%3Fhl%3Den%26next%3D%252Fchannel%252F<?php echo $authorId; ?>%26feature%3Dsign_in_button%26app%3Ddesktop%26action_handle_signin%3Dtrue&amp;passive=true"><span class="yt-uix-button-content">Sign in </span></button></div><div id="yt-masthead-content"><form id="masthead-search" class="search-form consolidated-form" action="/results" onsubmit="if (_gel(&#39;masthead-search-term&#39;).value == &#39;&#39;) return false;"><button class="yt-uix-button yt-uix-button-size-default yt-uix-button-default search-btn-component search-button" type="submit" onclick="if (_gel(&#39;masthead-search-term&#39;).value == &#39;&#39;) return false; _gel(&#39;masthead-search&#39;).submit(); return false;;return true;" dir="ltr" tabindex="2" id="search-btn"><span class="yt-uix-button-content">Search </span></button><div id="masthead-search-terms" class="masthead-search-terms-border" dir="ltr"><label><input id="masthead-search-term" autocomplete="off"  class="search-term yt-uix-form-input-bidi" name="search_query" value="" type="text" tabindex="1" title="Search"></label></div></form></div></div></div>
    <div id="masthead-appbar-container" class="clearfix"><div id="masthead-appbar"><div id="appbar-content" class="    appbar-content-hidden">      <div id="appbar-nav" class="appbar-content-hidable">
  <a href="/channel/<?php echo $authorId; ?>">
    <img class="appbar-nav-avatar" src="<?php echo $authorThumb; ?>" title="<?php echo $author; ?>" alt="<?php echo $author; ?>" height="23" width="23">
  </a>
<ul class="appbar-nav-menu"><li>    <h2 class="epic-nav-item-heading ">
      <?php echo $author; ?>
    </h2>
</li><li>    <a href="/channel/<?php echo $authorId; ?>/videos" class="yt-uix-button   spf-link yt-uix-sessionlink yt-uix-button-epic-nav-item yt-uix-button-size-default" data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;ved=CAMQwy0oAQ"><span class="yt-uix-button-content">Videos </span></a>
</li><li>    <a href="/channel/<?php echo $authorId; ?>/playlists" class="yt-uix-button   spf-link yt-uix-sessionlink yt-uix-button-epic-nav-item yt-uix-button-size-default" data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;ved=CAQQwy0oAg"><span class="yt-uix-button-content">Playlists </span></a>
</li><li>    <a href="/channel/<?php echo $authorId; ?>/channels" class="yt-uix-button   spf-link yt-uix-sessionlink yt-uix-button-epic-nav-item yt-uix-button-size-default" data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;ved=CAUQwy0oAw"><span class="yt-uix-button-content">Channels </span></a>
</li><li>    <a href="/channel/<?php echo $authorId; ?>/discussion" class="yt-uix-button   spf-link yt-uix-sessionlink yt-uix-button-epic-nav-item yt-uix-button-size-default" data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;ved=CAYQwy0oBA"><span class="yt-uix-button-content">Discussion </span></a>
</li><li>    <a href="/channel/<?php echo $authorId; ?>/about" class="yt-uix-button   spf-link yt-uix-sessionlink yt-uix-button-epic-nav-item yt-uix-button-size-default" data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;ved=CAcQwy0oBQ"><span class="yt-uix-button-content">About </span></a>
</li></ul>  </div>

</div></div></div>

</div><div id="masthead-positioner-height-offset"></div><div id="page-container"><div id="page" class="  channel    not-fixed-width-tab-widescreen clearfix"><div id="guide" class="yt-scrollbar">      <div id="appbar-guide-menu" class="appbar-menu appbar-guide-menu-layout appbar-guide-clickable-ancestor yt-uix-scroller" role="navigation">
    <div id="guide-container" class="vve-check" data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;ved=CMUBEP4e">
        <div class="guide-module-content yt-scrollbar">
    <ul class="guide-toplevel">
            <li class="guide-section vve-check"
    data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;ved=CMYBEOYrKAA"
    data-visibility-tracking="">
    <div class="guide-item-container personal-item">
      
      <ul class="guide-user-links yt-uix-tdl yt-box" role="menu">
              <li class="vve-check guide-channel guide-notification-item overflowable-list-item " id="what_to_watch-guide-item"
      data-visibility-tracking="" aria-role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-link   "
    href="/"
    title="What to Watch"
    data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=g-system&amp;ved=CMcBELUsKAA"
    data-visibility-tracking=""
    data-external-id="what_to_watch"
    data-serialized-endpoint="0qDduQEREg9GRXdoYXRfdG9fd2F0Y2g%3D"
  >
    <span class="yt-valign-container">
        <img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="thumb guide-what-to-watch-icon yt-sprite" alt="">
        <span class="display-name  no-count">
          <span>
            What to Watch
          </span>
        </span>
    </span>
  </a>

  </li>

      </ul>
    </div>
      <hr class="guide-section-separator">
  </li>

            <li class="guide-section vve-check"
    data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;ved=CMgBEOYrKAE"
    data-visibility-tracking="">
    <div class="guide-item-container personal-item">
          <h3>
      Best of YouTube
    </h3>

      <ul class="guide-user-links yt-uix-tdl yt-box" role="menu">
              <li class="vve-check guide-channel guide-notification-item overflowable-list-item " id="UCF0pVplsI8R5kcAqgtoRqoA-guide-item"
      data-visibility-tracking="" aria-role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-link   "
    href="/channel/UCF0pVplsI8R5kcAqgtoRqoA"
    title="Popular on YouTube"
    data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=g-channel&amp;ved=CMkBELUsKAA"
    data-visibility-tracking=""
    data-external-id="UCF0pVplsI8R5kcAqgtoRqoA"
    data-serialized-endpoint="0qDduQEaEhhVQ0YwcFZwbHNJOFI1a2NBcWd0b1Jxb0E%3D"
  >
    <span class="yt-valign-container">
        <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-20"
      >
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <img aria-hidden="true" data-thumb="//i.ytimg.com/i/F0pVplsI8R5kcAqgtoRqoA/1.jpg" alt="" src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" width="20"  height="20" >
          <span class="vertical-align"></span>
        </span>
      </span>
    </span>
</span>
        <span class="display-name  no-count">
          <span>
            Popular on YouTube
          </span>
        </span>
    </span>
  </a>

  </li>

              <li class="vve-check guide-channel guide-notification-item overflowable-list-item " id="UC-9-kyTW8ZkZNDHQJ6FgpwQ-guide-item"
      data-visibility-tracking="" aria-role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-link   "
    href="/channel/UC-9-kyTW8ZkZNDHQJ6FgpwQ"
    title="Music"
    data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=g-channel&amp;ved=CMoBELUsKAE"
    data-visibility-tracking=""
    data-external-id="UC-9-kyTW8ZkZNDHQJ6FgpwQ"
    data-serialized-endpoint="0qDduQEaEhhVQy05LWt5VFc4WmtaTkRIUUo2Rmdwd1E%3D"
  >
    <span class="yt-valign-container">
        <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-20"
      >
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <img aria-hidden="true" data-thumb="//i.ytimg.com/i/-9-kyTW8ZkZNDHQJ6FgpwQ/1.jpg" alt="" src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" width="20"  height="20" >
          <span class="vertical-align"></span>
        </span>
      </span>
    </span>
</span>
        <span class="display-name  no-count">
          <span>
            Music
          </span>
        </span>
    </span>
  </a>

  </li>

              <li class="vve-check guide-channel guide-notification-item overflowable-list-item " id="UCEgdi0XIXXZ-qJOFPf4JSKw-guide-item"
      data-visibility-tracking="" aria-role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-link   "
    href="/channel/UCEgdi0XIXXZ-qJOFPf4JSKw"
    title="Sports"
    data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=g-channel&amp;ved=CMsBELUsKAI"
    data-visibility-tracking=""
    data-external-id="UCEgdi0XIXXZ-qJOFPf4JSKw"
    data-serialized-endpoint="0qDduQEaEhhVQ0VnZGkwWElYWFotcUpPRlBmNEpTS3c%3D"
  >
    <span class="yt-valign-container">
        <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-20"
      >
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <img aria-hidden="true" data-thumb="//i.ytimg.com/i/Egdi0XIXXZ-qJOFPf4JSKw/1.jpg" alt="" src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" width="20"  height="20" >
          <span class="vertical-align"></span>
        </span>
      </span>
    </span>
</span>
        <span class="display-name  no-count">
          <span>
            Sports
          </span>
        </span>
    </span>
  </a>

  </li>

              <li class="vve-check guide-channel guide-notification-item overflowable-list-item " id="UCOpNcN46UbXVtpKMrmU4Abg-guide-item"
      data-visibility-tracking="" aria-role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-link   "
    href="/channel/UCOpNcN46UbXVtpKMrmU4Abg"
    title="Gaming"
    data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=g-channel&amp;ved=CMwBELUsKAM"
    data-visibility-tracking=""
    data-external-id="UCOpNcN46UbXVtpKMrmU4Abg"
    data-serialized-endpoint="0qDduQEaEhhVQ09wTmNONDZVYlhWdHBLTXJtVTRBYmc%3D"
  >
    <span class="yt-valign-container">
        <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-20"
      >
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <img aria-hidden="true" data-thumb="//i.ytimg.com/i/OpNcN46UbXVtpKMrmU4Abg/1.jpg" alt="" src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" width="20"  height="20" >
          <span class="vertical-align"></span>
        </span>
      </span>
    </span>
</span>
        <span class="display-name  no-count">
          <span>
            Gaming
          </span>
        </span>
    </span>
  </a>

  </li>

              <li class="vve-check guide-channel guide-notification-item overflowable-list-item " id="UC3yA8nDwraeOfnYfBWun83g-guide-item"
      data-visibility-tracking="" aria-role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-link   "
    href="/channel/UC3yA8nDwraeOfnYfBWun83g"
    title="Education"
    data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=g-channel&amp;ved=CM0BELUsKAQ"
    data-visibility-tracking=""
    data-external-id="UC3yA8nDwraeOfnYfBWun83g"
    data-serialized-endpoint="0qDduQEaEhhVQzN5QThuRHdyYWVPZm5ZZkJXdW44M2c%3D"
  >
    <span class="yt-valign-container">
        <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-20"
      >
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <img aria-hidden="true" data-thumb="//i.ytimg.com/i/3yA8nDwraeOfnYfBWun83g/1.jpg" alt="" src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" width="20"  height="20" >
          <span class="vertical-align"></span>
        </span>
      </span>
    </span>
</span>
        <span class="display-name  no-count">
          <span>
            Education
          </span>
        </span>
    </span>
  </a>

  </li>

              <li class="vve-check guide-channel guide-notification-item overflowable-list-item " id="UCczhp4wznQWonO7Pb8HQ2MQ-guide-item"
      data-visibility-tracking="" aria-role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-link   "
    href="/channel/UCczhp4wznQWonO7Pb8HQ2MQ"
    title="Movies"
    data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=g-channel&amp;ved=CM4BELUsKAU"
    data-visibility-tracking=""
    data-external-id="UCczhp4wznQWonO7Pb8HQ2MQ"
    data-serialized-endpoint="0qDduQEaEhhVQ2N6aHA0d3puUVdvbk83UGI4SFEyTVE%3D"
  >
    <span class="yt-valign-container">
        <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-20"
      >
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <img aria-hidden="true" data-thumb="https://yt3.ggpht.com/-DIjHsEMMaRE/AAAAAAAAAAI/AAAAAAAAAAA/q6whn_JcUH8/s88-c-k-no/photo.jpg" alt="" src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" width="20"  height="20" >
          <span class="vertical-align"></span>
        </span>
      </span>
    </span>
</span>
        <span class="display-name  no-count">
          <span>
            Movies
          </span>
        </span>
    </span>
  </a>

  </li>

              <li class="vve-check guide-channel guide-notification-item overflowable-list-item " id="UCl8dMTqDrJQ0c8y23UBu4kQ-guide-item"
      data-visibility-tracking="" aria-role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-link   "
    href="/channel/UCl8dMTqDrJQ0c8y23UBu4kQ"
    title="TV Shows"
    data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=g-channel&amp;ved=CM8BELUsKAY"
    data-visibility-tracking=""
    data-external-id="UCl8dMTqDrJQ0c8y23UBu4kQ"
    data-serialized-endpoint="0qDduQEaEhhVQ2w4ZE1UcURySlEwYzh5MjNVQnU0a1E%3D"
  >
    <span class="yt-valign-container">
        <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-20"
      >
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <img aria-hidden="true" data-thumb="https://yt3.ggpht.com/-hFxEr8QHrvM/AAAAAAAAAAI/AAAAAAAAAAA/REjjL0X3gIs/s88-c-k-no/photo.jpg" alt="" src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" width="20"  height="20" >
          <span class="vertical-align"></span>
        </span>
      </span>
    </span>
</span>
        <span class="display-name  no-count">
          <span>
            TV Shows
          </span>
        </span>
    </span>
  </a>

  </li>

              <li class="vve-check guide-channel guide-notification-item overflowable-list-item " id="UCYfdidRxbB8Qhf0Nx7ioOYw-guide-item"
      data-visibility-tracking="" aria-role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-link   "
    href="/channel/UCYfdidRxbB8Qhf0Nx7ioOYw"
    title="News"
    data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=g-channel&amp;ved=CNABELUsKAc"
    data-visibility-tracking=""
    data-external-id="UCYfdidRxbB8Qhf0Nx7ioOYw"
    data-serialized-endpoint="0qDduQEaEhhVQ1lmZGlkUnhiQjhRaGYwTng3aW9PWXc%3D"
  >
    <span class="yt-valign-container">
        <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-20"
      >
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <img aria-hidden="true" data-thumb="//i.ytimg.com/i/YfdidRxbB8Qhf0Nx7ioOYw/1.jpg" alt="" src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" width="20"  height="20" >
          <span class="vertical-align"></span>
        </span>
      </span>
    </span>
</span>
        <span class="display-name  no-count">
          <span>
            News
          </span>
        </span>
    </span>
  </a>

  </li>

              <li class="vve-check guide-channel guide-notification-item overflowable-list-item " id="UCBR8-60-B28hp2BmDPdntcQ-guide-item"
      data-visibility-tracking="" aria-role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-link   "
    href="/channel/UCBR8-60-B28hp2BmDPdntcQ"
    title="Spotlight"
    data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=g-channel&amp;ved=CNEBELUsKAg"
    data-visibility-tracking=""
    data-external-id="UCBR8-60-B28hp2BmDPdntcQ"
    data-serialized-endpoint="0qDduQEaEhhVQ0JSOC02MC1CMjhocDJCbURQZG50Y1E%3D"
  >
    <span class="yt-valign-container">
        <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-20"
      >
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <img aria-hidden="true" data-thumb="https://yt3.ggpht.com/-dL2jeHlm2Ok/AAAAAAAAAAI/AAAAAAAAAAA/ZCMMkRj-hrw/s88-c-k-no/photo.jpg" alt="" src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" width="20"  height="20" >
          <span class="vertical-align"></span>
        </span>
      </span>
    </span>
</span>
        <span class="display-name  no-count">
          <span>
            Spotlight
          </span>
        </span>
    </span>
  </a>

  </li>

      </ul>
    </div>
      <hr class="guide-section-separator">
  </li>

            <li class="guide-section vve-check"
    data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;ved=CNIBEOYrKAI"
    data-visibility-tracking="">
    <div class="guide-item-container personal-item">
      
      <ul class="guide-user-links yt-uix-tdl yt-box" role="menu">
              <li class="vve-check guide-channel guide-notification-item overflowable-list-item " id="guide_builder-guide-item"
      data-visibility-tracking="" aria-role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-nolink   "
    href="/channels"
    title="Browse channels"
    data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=g-manage&amp;ved=CNMBELUsKAA"
    data-visibility-tracking=""
    data-external-id="guide_builder"
    data-serialized-endpoint="0qPduQECCAE%3D"
  >
    <span class="yt-valign-container">
        <img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="thumb guide-builder-icon yt-sprite" alt="">
        <span class="display-name  no-count">
          <span>
            Browse channels
          </span>
        </span>
    </span>
  </a>

  </li>

      </ul>
    </div>
      <hr class="guide-section-separator">
  </li>

            <li class="guide-section guide-header signup-promo ">
    <p>
      Sign in now to see your channels and recommendations!
    </p>
    <div id="guide-builder-promo-buttons" class="signed-out clearfix">
      <a href="https://accounts.google.com/ServiceLogin?hl=en&amp;service=youtube&amp;uilel=3&amp;continue=https%3A%2F%2Fwww.youtube.com%2Fsignin%3Fhl%3Den%26next%3D%252Fchannel%252F<?php echo $authorId; ?>%26feature%3Dsign_in_promo%26app%3Ddesktop%26action_handle_signin%3Dtrue&amp;passive=true" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary yt-uix-button-size-default" data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA"><span class="yt-uix-button-content">Sign In </span></a>
    </div>
  </li>

    </ul>
  </div>

    </div>
  </div>
  <div id="appbar-guide-notifications" class="hid">
        <div id="appbar-guide-notification-watch-later-video-added">
    <!--
    <div class="appbar-guide-notification "><span class="appbar-guide-notification-content-wrapper yt-valign"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="appbar-guide-notification-icon yt-sprite" alt=""><span class="appbar-guide-notification-text-content">Added to Watch Later</span></span></div>
    -->
  </div>


    <div id="appbar-guide-notification-watch-later-video-removed">
    <!--
    <div class="appbar-guide-notification "><span class="appbar-guide-notification-content-wrapper yt-valign"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="appbar-guide-notification-icon yt-sprite" alt=""><span class="appbar-guide-notification-text-content">Removed from Watch Later</span></span></div>
    -->
  </div>


    <div id="appbar-guide-notification-subscription">
    <!--
    <div class="appbar-guide-notification "><span class="appbar-guide-notification-content-wrapper yt-valign"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="appbar-guide-notification-icon yt-sprite" alt=""><span class="appbar-guide-notification-text-content">Subscription added</span></span></div>
    -->
  </div>


    <div id="appbar-guide-notification-unsubscription">
    <!--
    <div class="appbar-guide-notification "><span class="appbar-guide-notification-content-wrapper yt-valign"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="appbar-guide-notification-icon yt-sprite" alt=""><span class="appbar-guide-notification-text-content">Subscription removed</span></span></div>
    -->
  </div>



      <div id="appbar-guide-notification-playlist-like">
    <!--
    <div class="appbar-guide-notification "><span class="appbar-guide-notification-content-wrapper yt-valign"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="appbar-guide-notification-icon yt-sprite" alt=""><span class="appbar-guide-notification-text-content">Playlist added</span></span></div>
    -->
  </div>


      <div id="appbar-guide-notification-playlist-unlike">
    <!--
    <div class="appbar-guide-notification "><span class="appbar-guide-notification-content-wrapper yt-valign"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="appbar-guide-notification-icon yt-sprite" alt=""><span class="appbar-guide-notification-text-content">Playlist removed</span></span></div>
    -->
  </div>


    <div id="appbar-guide-notification-playlist-video-added">
    <!--
    <div class="appbar-guide-notification "><span class="appbar-guide-notification-content-wrapper yt-valign"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="appbar-guide-notification-icon yt-sprite" alt=""><span class="appbar-guide-notification-text-content">Added to playlist</span></span></div>
    -->
  </div>


    <div id="appbar-guide-notification-playlist-video-removed">
    <!--
    <div class="appbar-guide-notification "><span class="appbar-guide-notification-content-wrapper yt-valign"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="appbar-guide-notification-icon yt-sprite" alt=""><span class="appbar-guide-notification-text-content">Removed from playlist</span></span></div>
    -->
  </div>

    <div id="appbar-guide-notification-video-like">
    <!--
    <div class="appbar-guide-notification "><span class="appbar-guide-notification-content-wrapper yt-valign"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="appbar-guide-notification-icon yt-sprite" alt=""><span class="appbar-guide-notification-text-content">Added to Liked videos</span></span></div>
    -->
  </div>


    <div id="appbar-guide-notification-video-unlike">
    <!--
    <div class="appbar-guide-notification "><span class="appbar-guide-notification-content-wrapper yt-valign"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="appbar-guide-notification-icon yt-sprite" alt=""><span class="appbar-guide-notification-text-content">Removed from Liked videos</span></span></div>
    -->
  </div>


    <div id="appbar-guide-notification-event-reminder-set">
    <!--
    <div class="appbar-guide-notification "><span class="appbar-guide-notification-content-wrapper yt-valign"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="appbar-guide-notification-icon yt-sprite" alt=""><span class="appbar-guide-notification-text-content">You&#39;ll be reminded about this event</span></span></div>
    -->
  </div>


    <div id="appbar-guide-notification-event-reminder-removed">
    <!--
    <div class="appbar-guide-notification "><span class="appbar-guide-notification-content-wrapper yt-valign"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="appbar-guide-notification-icon yt-sprite" alt=""><span class="appbar-guide-notification-text-content">Event reminder removed</span></span></div>
    -->
  </div>


  </div>
  <div id="appbar-guide-item-templates" class="hid">
        <div id="appbar-guide-item-template-playlist">
      <!--
          <li class="vve-check guide-channel guide-notification-item overflowable-list-item show-insertion-notification " id="__ID__-guide-item"
      data-visibility-tracking="" aria-role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-nolink   "
    href="__URL__"
    title="__TITLE__"
    data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=g-playlists"
    data-visibility-tracking=""
    data-external-id="__ID__"
    data-serialized-endpoint=""
  >
    <span class="yt-valign-container">
        <img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="thumb guide-playlists-icon yt-sprite" alt="">
        <span class="display-name  no-count">
          <span>
            __TITLE__
          </span>
        </span>
    </span>
  </a>

      <div class="appbar-guide-notification guide-item-insertion-notification"><span class="appbar-guide-notification-content-wrapper yt-valign"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="appbar-guide-notification-icon yt-sprite" alt=""><span class="appbar-guide-notification-text-content">__NOTIFICATION_OVERLAY_MESSAGE__</span></span></div>
  </li>

      -->
    </div>
    <div id="appbar-guide-item-template-mix">
      <!--
          <li class="vve-check guide-channel guide-notification-item overflowable-list-item show-insertion-notification " id="__ID__-guide-item"
      data-visibility-tracking="" aria-role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-nolink   "
    href="__URL__"
    title="__TITLE__"
    data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=g-playlists"
    data-visibility-tracking=""
    data-external-id="__ID__"
    data-serialized-endpoint=""
  >
    <span class="yt-valign-container">
        <img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="thumb guide-mix-icon yt-sprite" alt="">
        <span class="display-name  no-count">
          <span>
            __TITLE__
          </span>
        </span>
    </span>
  </a>

      <div class="appbar-guide-notification guide-item-insertion-notification"><span class="appbar-guide-notification-content-wrapper yt-valign"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="appbar-guide-notification-icon yt-sprite" alt=""><span class="appbar-guide-notification-text-content">__NOTIFICATION_OVERLAY_MESSAGE__</span></span></div>
  </li>

      -->
    </div>
    <div id="appbar-guide-item-template-channel">
      <!--
          <li class="vve-check guide-channel guide-notification-item overflowable-list-item show-insertion-notification " id="__ID__-guide-item"
      data-visibility-tracking="" aria-role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-nolink   "
    href="__URL__"
    title="__TITLE__"
    data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=g-channel"
    data-visibility-tracking=""
    data-external-id="__ID__"
    data-serialized-endpoint=""
  >
    <span class="yt-valign-container">
        <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-20"
      >
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <img aria-hidden="true" alt="" src="__THUMBNAIL_URL__" width="20"  height="20" >
          <span class="vertical-align"></span>
        </span>
      </span>
    </span>
</span>
        <span class="display-name  no-count">
          <span>
            __TITLE__
          </span>
        </span>
    </span>
  </a>

      <div class="appbar-guide-notification guide-item-insertion-notification"><span class="appbar-guide-notification-content-wrapper yt-valign"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="appbar-guide-notification-icon yt-sprite" alt=""><span class="appbar-guide-notification-text-content">__NOTIFICATION_OVERLAY_MESSAGE__</span></span></div>
  </li>

      -->
    </div>

  </div>

</div><div id="alerts" class="content-alignment">  
</div><div id="header"></div><div id="player" class="  off-screen  "><div id="theater-background"></div>  <div id="player-mole-container">

    <div id="player-unavailable" class="  hid  ">
      
    </div>

      <div id="player-api" class="player-width player-height off-screen-target player-api"></div>

          <script>if (window.ytcsi) {window.ytcsi.tick("cfg", null, '');}</script>
    <script>var ytplayer = ytplayer || {};ytplayer.config = {"html5": false, "url_v8": "https:\/\/s.ytimg.com\/yts\/swfbin\/player-vflSotbD3\/cps.swf", "url_v9as2": "https:\/\/s.ytimg.com\/yts\/swfbin\/player-vflSotbD3\/cps.swf", "min_version": "8.0.0", "assets": {"css": "\/\/s.ytimg.com\/yts\/cssbin\/www-player-vfl_UOZc_.css", "js": "\/\/s.ytimg.com\/yts\/jsbin\/html5player-en_US-vflCGk6yw\/html5player.js", "html": "\/html5_player_template"}, "url": "https:\/\/s.ytimg.com\/yts\/swfbin\/player-vflSotbD3\/watch_as3.swf", "sts": 16275, "params": {"allowscriptaccess": "always", "allowfullscreen": "true", "bgcolor": "#000000"}, "attrs": {"id": "movie_player"}, "args": {"hl": "en_US", "autoplay": "0", "ssl": "1", "enablejsapi": 1, "fexp": "902408,908555,911305,924222,927622,934024,934030,937407,944312,946011,948200", "cr": "US"}};</script>


  </div>

  <div class="clear"></div>
</div>
<div id="content" class="  content-alignment  
">  




  <div class="branded-page-v2-container branded-page-base-bold-titles branded-page-v2-container-flex-width branded-page-v2-has-top-row" id="c4-overview-tab">
      <div class="branded-page-v2-top-row">
        




    <div class="branded-page-v2-header channel-header yt-card">
    <div id="gh-banner">
          <style>
      #c4-header-bg-container {
      background-image: url(<?php echo $authorBanner; ?>);
  }


  @media screen and (-webkit-min-device-pixel-ratio: 1.5),
         screen and (min-resolution: 1.5dppx) {
#c4-header-bg-container {
        background-image: url(<?php echo $authorBanner; ?>);
    }
  }

#c4-header-bg-container .hd-banner-image {
      background-image: url(<?php echo $authorBanner; ?>);
  }

    </style>

<div id="c4-header-bg-container" class=" has-custom-banner">
    <div class="hd-banner">
      <div class="hd-banner-image"></div>
    </div>
    
      <div id="header-links">
  </div>



          <a class="channel-header-profile-image-container spf-link" href="/channel/<?php echo $authorId; ?>">
      <img class="channel-header-profile-image" src="<?php echo $authorThumb; ?>" title="<?php echo $author; ?>" alt="<?php echo $author; ?>">
    </a>

  </div>

    </div>
      
  <div class="">
      <div class="primary-header-contents clearfix" id="c4-primary-header-contents">
    <div class="primary-header-actions clearfix">
                <span class="channel-header-subscription-button-container yt-uix-button-subscription-container with-preferences" ><button class="yt-uix-button yt-uix-button-size-default yt-uix-button-subscribe-branded yt-uix-button-has-icon yt-uix-subscription-button yt-can-buffer" type="button" onclick=";return false;" aria-busy="false" aria-live="polite" aria-role="button" data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=channels4&amp;ved=CMQBEJsr" data-style-type="branded" data-href="https://accounts.google.com/ServiceLogin?hl=en&amp;service=youtube&amp;uilel=3&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Fhl%3Den%26next%3D%252Fchannel%252F<?php echo $authorId; ?>%26app%3Ddesktop%26continue_action%3DQUFFLUhqbUxJbjZTMkQ3QnBoeU5jdk1EbkdwUU1PZEkwUXxBQ3Jtc0tuVDVvdllKN0VZZzlFY3BlVVJyeFdYRkNxdUVZSml2eXdGZm5SVnFCYWJCTUh1N1ZVdDdPaU9xaHMycHhDVk5RUlZpRWNPTURNeWc4T2lrRnY1WV9IT0JXTFhUaU1qc1JBdUd4MW1veUpIUmU3emQwNUdsY0RjdXdPcDc2R1VMSU9OZDNldUdLS2ltMDJfRVJoR3pNM0UyRy16VzdMbG1PUEtNV3hqSjZPN1A1OTBMQjl0eUdjNWdKSmtGOWo3c1hFNTdOZmc%253D%26feature%3Dsubscribe%26action_handle_signin%3Dtrue&amp;passive=true" data-channel-external-id="<?php echo $authorId; ?>"><span class="yt-uix-button-icon-wrapper"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-icon yt-uix-button-icon-subscribe yt-sprite" alt=""></span><span class="yt-uix-button-content"><span class="subscribe-label" aria-label="Subscribe">Subscribe</span><span class="subscribed-label" aria-label="Unsubscribe">Subscribed</span><span class="unsubscribe-label" aria-label="Unsubscribe">Unsubscribe</span> </span></button><button class="yt-uix-button yt-uix-button-size-default yt-uix-button-default yt-uix-button-empty yt-uix-button-has-icon yt-uix-subscription-preferences-button" type="button" onclick=";return false;" data-channel-external-id="<?php echo $authorId; ?>"><span class="yt-uix-button-icon-wrapper"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-icon yt-uix-button-icon-subscription-preferences yt-sprite" alt=""></span></button><span class="yt-subscription-button-subscriber-count-branded-horizontal subscribed" title="<?php echo $subCount; ?>"><?php echo $subCount; ?></span>  <span class="yt-subscription-button-disabled-mask" title=""></span>
  
  <div class="yt-uix-overlay " data-overlay-style="primary"data-overlay-shape="tiny">
    
        <div class="yt-dialog hid ">
    <div class="yt-dialog-base">
      <span class="yt-dialog-align"></span>
      <div class="yt-dialog-fg">
        <div class="yt-dialog-fg-content">
            <div class="yt-dialog-header">
                <h2 class="yt-dialog-title">
                        Subscription preferences


                </h2>
            </div>
          <div class="yt-dialog-loading">
              <div class="yt-dialog-waiting-content">
    <div class="yt-spinner-img"></div><div class="yt-dialog-waiting-text">Loading...</div>
  </div>

          </div>
          <div class="yt-dialog-content">
              <div class="subscription-preferences-overlay-content-container">
    <div class="subscription-preferences-overlay-loading ">
        <p class="yt-spinner">
      <img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img yt-sprite" alt="Loading icon">

    <span class="yt-spinner-message">
Loading...
    </span>
  </p>

    </div>
    <div class="subscription-preferences-overlay-content">
    </div>
  </div>

          </div>
          <div class="yt-dialog-working">
              <div class="yt-dialog-working-overlay"></div>
  <div class="yt-dialog-working-bubble">
    <div class="yt-dialog-waiting-content">
      <div class="yt-spinner-img"></div><div class="yt-dialog-waiting-text">Working...</div>
    </div>
  </div>

          </div>
        </div>
      </div>
    </div>
  </div>


  </div>

</span>

    </div>
    <h1 class="branded-page-header-title">
      <span class="qualified-channel-title ellipsized has-badge"><span class="qualified-channel-title-wrapper"><span dir="ltr" class="qualified-channel-title-text" ><a dir="ltr" href="/channel/<?php echo $authorId; ?>" class="spf-link branded-page-header-title-link yt-uix-sessionlink" title="<?php echo $author; ?>" data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA"      ><?php echo $author; ?></a></span></span><?php echo $verifiedHtml; ?></span>
    </h1>
  </div>

      <div id="channel-subheader" class="clearfix branded-page-gutter-padding appbar-content-trigger">
    <ul id="channel-navigation-menu" class="clearfix">
        <li>
          <h2 class="epic-nav-item-heading ">Home</h2>
        </li>
        <li>
          <a href="/channel/<?php echo $authorId; ?>/videos" class="yt-uix-button  spf-link  yt-uix-sessionlink yt-uix-button-epic-nav-item yt-uix-button-size-default" data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA"><span class="yt-uix-button-content">Videos </span></a>
        </li>
        <li>
          <a href="/channel/<?php echo $authorId; ?>/playlists" class="yt-uix-button  spf-link  yt-uix-sessionlink yt-uix-button-epic-nav-item yt-uix-button-size-default" data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA"><span class="yt-uix-button-content">Playlists </span></a>
        </li>
        <li>
          <a href="/channel/<?php echo $authorId; ?>/channels" class="yt-uix-button  spf-link  yt-uix-sessionlink yt-uix-button-epic-nav-item yt-uix-button-size-default" data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA"><span class="yt-uix-button-content">Channels </span></a>
        </li>
        <li>
          <a href="/channel/<?php echo $authorId; ?>/discussion" class="yt-uix-button  spf-link  yt-uix-sessionlink yt-uix-button-epic-nav-item yt-uix-button-size-default" data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA"><span class="yt-uix-button-content">Discussion </span></a>
        </li>
        <li>
          <a href="/channel/<?php echo $authorId; ?>/about" class="yt-uix-button  spf-link  yt-uix-sessionlink yt-uix-button-epic-nav-item yt-uix-button-size-default" data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA"><span class="yt-uix-button-content">About </span></a>
        </li>
        <li>
          <div id="channel-search" ><label class="show-search epic-nav-item secondary-nav" for="channels-search-field"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="epic-nav-item-heading-icon yt-sprite" alt=""></label><form class="search-form epic-nav-item secondary-nav"action="/channel/<?php echo $authorId; ?>/search"method="get"><span class=" yt-uix-form-input-container yt-uix-form-input-text-container ">    <input class="yt-uix-form-input-text search-field" name="query" id="channels-search-field" type="text" placeholder="Search Channel" maxlength="100" autocomplete="off">
</span></form></div>
        </li>
    </ul>
  </div>

  </div>

  </div>


      </div>

    <div class="branded-page-v2-col-container">
      <div class="branded-page-v2-col-container-inner">
        <div class="branded-page-v2-primary-col">
          <div class="   yt-card  clearfix">
              <div class="branded-page-v2-body branded-page-v2-primary-column-content" id="gh-overviewtab">
      
  

      <div class="c4-spotlight-module  yt-section-hover-container">
      <div class="c4-spotlight-module-component upsell">
          




      </div>
  </div>

      <div id="c4-shelves-container">
                <div class="expanded-shelf shelf-item vve-check branded-page-box yt-section-hover-container"  id="" data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;ved=CCYQ3BwoAA"><div >        <h2 class="branded-page-module-title">
      <a href="/channel/<?php echo $authorId; ?>/videos?view=0&amp;shelf_id=0&amp;sort=dd" class="yt-uix-sessionlink branded-page-module-title-link spf-nolink" data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA">
            <span class="branded-page-module-title-text">
      <span class="" >Uploads</span>
    </span>

      </a>
        <a href="/watch?v=7V9a-s5kdu8&amp;list=UU-lHJZR3Gqxm24_Vd_AJ5Yw" class="yt-uix-button  shelves-play yt-uix-sessionlink yt-uix-button-default yt-uix-button-size-small" data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA"><span class="yt-uix-button-icon-wrapper"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-icon yt-uix-button-icon-play-all yt-sprite" alt=""></span><span class="yt-uix-button-content">Play </span></a>

  </h2>

</div><ul class="expanded-shelf-content-list clearfix has-multiple-items"><?php
// URL of the file you want to request
$url = $invidApi . '/api/v1/channels/' . $_GET['id'] . '/videos';

// Cache file path
$cache_file = '../cache/channels/' . $_GET['id'] . '-videos.json';

// Cache duration in seconds (24 hours)
$cache_duration = 24 * 60 * 60;

// Check if cache file exists and is still valid
if (file_exists($cache_file) && (time() - filemtime($cache_file) < $cache_duration)) {
    // Read data from cache
    $data = file_get_contents($cache_file);
} else {
    // Fetch data from URL
    $data = file_get_contents($url);

    // Save data to cache file
    file_put_contents($cache_file, $data);
}

$dataVids = json_decode($data, true);

if (empty($dataVids['videos'])) {
echo '            <p class="no-content-message">
This channel doesn\'t have any video\'s.
  </p>';
} else {
foreach($dataVids['videos'] as $key => $video) {
// Time on vid
if ($video['lengthSeconds'] > 3600) {
$length = ltrim(gmdate("H:i:s", $video['lengthSeconds'] - 1),"0");
} else {
$lengthM = ltrim(gmdate("i", $video['lengthSeconds']),"0");
$lengthS = gmdate("s", $video['lengthSeconds'] - 1);

// Prevent things like :48 length
if ($lengthM == "") {
$lengthM = "0";
}

$length = $lengthM . ":" . $lengthS;
}

echo '<li class="expanded-shelf-content-item-wrapper">




    <div class="yt-lockup clearfix expanded-shelf-content-item yt-lockup-video yt-lockup-tile fluid"
      data-context-item-id="' . $video['videoId'] . '"
  >
    <div class="yt-lockup-thumbnail"
    >
        <a href="/watch?v=' . $video['videoId'] . '" class="ux-thumb-wrap yt-uix-sessionlink yt-fluid-thumb-link contains-addto  spf-link "  data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=c4-overview&amp;ved=CCsQwBs">    <span class="video-thumb  yt-thumb yt-thumb-185 yt-thumb-fluid"
      >
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <img aria-hidden="true" data-thumb="//i.ytimg.com/vi/' . $video['videoId'] . '/mqdefault.jpg" alt="" src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" width="185"  >
          <span class="vertical-align"></span>
        </span>
      </span>
    </span>
    <span class="video-time">' . $length . '</span>


  <button class="yt-uix-button yt-uix-button-size-small yt-uix-button-default yt-uix-button-empty yt-uix-button-has-icon addto-button video-actions spf-nolink hide-until-delayloaded addto-watch-later-button-sign-in yt-uix-tooltip" type="button" onclick=";return false;" title="Watch Later" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="' . $video['videoId'] . '"><span class="yt-uix-button-icon-wrapper"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-icon yt-uix-button-icon-addto yt-sprite" alt="Watch Later"></span><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-arrow yt-sprite" alt=""></button>
</a>

    </div>
    <div class="yt-lockup-content">
          <h3 class="yt-lockup-title"><a class="yt-uix-sessionlink yt-uix-tile-link  spf-link  yt-ui-ellipsis yt-ui-ellipsis-2" dir="ltr" title="Sculpturing Kim K&#39;s Butt!" data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=c4-overview&amp;ved=CCwQvxs" href="/watch?v=' . $video['videoId'] . '">' . $video['title'] . '</a></h3>

  <div class="yt-lockup-meta">
    <ul class="yt-lockup-meta-info">
<li>' . $video['publishedText'] . '</li><li>' . number_format($video['viewCount']) . ' views</li>    </ul>
  </div>


      <div class="yt-lockup-description yt-ui-ellipsis yt-ui-ellipsis-2" dir="ltr">
        ' . $video['descriptionHtml'] . '
    </div>


  

  

    </div>
    
  </div>

</li>';
}
}
?>
</ul></div>
  


    </div>




  
    <img class="hid" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/962985656/?data=type%3Dcview%3Butuid%3D-lHJZR3Gqxm24_Vd_AJ5Yw" border="0" width="1" height="1">

        


  <div id="ad_creative_1" class="ad-div hid" style="z-index: 1">
    <div id="ad_creative_div_1"></div>
    <script>(function() {function tagMpuIframe() {var containerEl = document.getElementById('ad_creative_div_1');if (!containerEl) {return;}var iframeEl = document.createElement('iframe');var iframeSrc = 'https://ad.doubleclick.net/N4061/adi/com.ytbc/<?php echo $author; ?>;sz=1x1;kvid=MkXVM6ad9nI;kpu=<?php echo $author; ?>;kpeid=-lHJZR3Gqxm24_Vd_AJ5Yw;kpid=666950;tile=1;ssl=1;afv=1;dc_yt=1;k5=3_8_36_41_211_613;kclt=1;kga=-1;kgg=-1;klg=en;kmsrd=1;kmyd=ad_creative_1;ko=p;kpco=12045;kr=F;kvz=205;longads=1;nlfb=1;yt3pav=1;yt_vrallowed=1;ytcat=20;ytdevice=1;ytexp=937407,948200,911305,944312,908555,946011;!c=666950;k2=3;k2=8;k2=36;k2=41;k2=211;k2=613;kvlg=en;ord=' +Math.floor(Math.random() * 10000000000000000) +'?';iframeEl.id = 'ad_creative_iframe_1';iframeEl.width = '1';iframeEl.height = '1';iframeEl.style.cssText = 'z-index:1;';iframeEl.scrolling = 'no';iframeEl.frameBorder = '0';containerEl.appendChild(iframeEl);iframeEl.src = iframeSrc;}tagMpuIframe();})();</script>
  </div>



  </div>

          </div>
        </div>
          <div class="branded-page-v2-secondary-col">
            


    

        <div class="branded-page-related-channels branded-page-box  yt-card" >
            <h2 class="branded-page-module-title yt-uix-tooltip" data-tooltip-text="These recommendations have been automatically generated by YouTube." dir="ltr">
        Related channels on YouTube
    </h2>

          <ul class="branded-page-related-channels-list">
        <li class="branded-page-related-channels-item  spf-link  clearfix" data-external-id="UCcMTZY1rFXO3Rj44D5VMyiw">
    




    <span class="yt-lockup clearfix  yt-lockup-channel yt-lockup-mini"
  >
    <div class="yt-lockup-thumbnail"
        style="width: 34px;"
    >
        <a href="/user/machinima" class="ux-thumb-wrap yt-uix-sessionlink  spf-link " data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=rc-rel&amp;ved=CA8QwBs">    <span class="video-thumb  yt-thumb yt-thumb-34 g-hovercard"
        data-ytid="UCcMTZY1rFXO3Rj44D5VMyiw"
      >
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <img aria-hidden="true" data-thumb="https://yt3.ggpht.com/-pymaumvxDsA/AAAAAAAAAAI/AAAAAAAAAAA/3Br0EbtsPDU/s176-c-k-no/photo.jpg" alt="" src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" width="34"  height="34" >
          <span class="vertical-align"></span>
        </span>
      </span>
    </span>
</a>

    </div>
    <div class="yt-lockup-content">
          <h3 class="yt-lockup-title"><a class="yt-uix-sessionlink yt-uix-tile-link  spf-link " dir="ltr" title="Machinima" data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=rc-rel&amp;ved=CA4Qvxs" href="/user/machinima">Machinima<span class="qualified-channel-title-badge"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-tooltip-text="Verified" class="yt-channel-title-icon-verified yt-uix-tooltip yt-sprite" alt=""></span></a></h3>


  <div class="yt-lockup-meta spf-nolink">
      <span class=" yt-uix-button-subscription-container" ><button class="yt-uix-button yt-uix-button-size-default yt-uix-button-subscribe-unbranded yt-uix-button-has-icon yt-uix-subscription-button yt-can-buffer yt-uix-hovercard yt-uix-tooltip" type="button" onclick=";return false;" aria-busy="false" title="11,604,229 subscribers" aria-role="button" aria-live="polite" data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=rc-rel&amp;ved=CA0Qmys" data-subscriber-count-tooltip="True" data-channel-external-id="UCcMTZY1rFXO3Rj44D5VMyiw" data-style-type="unbranded" data-subscriber-count-title="11,604,229 subscribers" data-href="https://accounts.google.com/ServiceLogin?hl=en&amp;service=youtube&amp;uilel=3&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Fhl%3Den%26next%3D%252Fchannel%252FUCcMTZY1rFXO3Rj44D5VMyiw%26app%3Ddesktop%26continue_action%3DQUFFLUhqbFlsZzc0Zl9HaWdpakxTUHdQY21Gemg1LU1rd3xBQ3Jtc0trV1hjOV9oaWVlQUhtZDhwYUpkUWFDRGtyYkVmVXhTcVVDWXlxbURXNElPeEY5YjIyeW1rTXBUemJmazVTS3I0N0NaSGhBWmJCcHhoU0ZrRlphR2RfYnQxdm9ya0UtZTZ2a1N0MDBiTnJqSlZXNDBReVNOdF84RmpyOWxKTWhiWWhSa2UtMDB4LXN4RGE5YlFyZ2Ezc21DdTdyTm1fU19ibDhBVXpNU1pQSHNvUnBSNUZBbUVNTXBpcWxaVlBPb3YzQTZTRlA%253D%26feature%3Dsubscribe%26action_handle_signin%3Dtrue&amp;passive=true"><span class="yt-uix-button-icon-wrapper"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-icon yt-uix-button-icon-subscribe yt-sprite" alt="11,604,229 subscribers"></span><span class="yt-uix-button-content"><span class="subscribe-label" aria-label="Subscribe">Subscribe</span><span class="subscribed-label" aria-label="Unsubscribe">Subscribed</span><span class="unsubscribe-label" aria-label="Unsubscribe">Unsubscribe</span> </span></button>  <span class="yt-subscription-button-disabled-mask" title=""></span>
</span>
  </div>

    </div>
    
  </span>


  </li>

        <li class="branded-page-related-channels-item  spf-link  clearfix" data-external-id="UCKlhpmbHGxBE6uw9B_uLeqQ">
    




    <span class="yt-lockup clearfix  yt-lockup-channel yt-lockup-mini"
  >
    <div class="yt-lockup-thumbnail"
        style="width: 34px;"
    >
        <a href="/user/SkyDoesMinecraft" class="ux-thumb-wrap yt-uix-sessionlink  spf-link " data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=rc-rel&amp;ved=CBMQwBs">    <span class="video-thumb  yt-thumb yt-thumb-34 g-hovercard"
        data-ytid="UCKlhpmbHGxBE6uw9B_uLeqQ"
      >
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <img aria-hidden="true" data-thumb="//i.ytimg.com/i/KlhpmbHGxBE6uw9B_uLeqQ/mq1.jpg" alt="" src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" width="34"  height="34" >
          <span class="vertical-align"></span>
        </span>
      </span>
    </span>
</a>

    </div>
    <div class="yt-lockup-content">
          <h3 class="yt-lockup-title"><a class="yt-uix-sessionlink yt-uix-tile-link  spf-link " dir="ltr" title="Sky Does Minecraft" data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=rc-rel&amp;ved=CBIQvxs" href="/user/SkyDoesMinecraft">Sky Does Minecraft</a></h3>


  <div class="yt-lockup-meta spf-nolink">
      <span class=" yt-uix-button-subscription-container" ><button class="yt-uix-button yt-uix-button-size-default yt-uix-button-subscribe-unbranded yt-uix-button-has-icon yt-uix-subscription-button yt-can-buffer yt-uix-hovercard yt-uix-tooltip" type="button" onclick=";return false;" aria-busy="false" title="10,210,710 subscribers" aria-role="button" aria-live="polite" data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=rc-rel&amp;ved=CBEQmys" data-subscriber-count-tooltip="True" data-channel-external-id="UCKlhpmbHGxBE6uw9B_uLeqQ" data-style-type="unbranded" data-subscriber-count-title="10,210,710 subscribers" data-href="https://accounts.google.com/ServiceLogin?hl=en&amp;service=youtube&amp;uilel=3&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Fhl%3Den%26next%3D%252Fchannel%252FUCKlhpmbHGxBE6uw9B_uLeqQ%26app%3Ddesktop%26continue_action%3DQUFFLUhqbjh6Skg2OU1fU01BWXZzT0M0YmowZmxPOUdzd3xBQ3Jtc0tuN090Zm9jdklWSmtwZHVXNFp6UmlGR2ZzZ2ZiQUlQMWJmUHdvM3NKeDVTdVhsRFlsdWlpR2Z3OTg3dlpJX2g1NmZSYnFKakRyZVA2ZEQ0dWlBdVhSTTEwcmhqQzM2dUhPYkRydWJPXzhLWW5nSk5tbmoyXzlnSHU0WmkxWV82VnExT0dYNE9jdUx1NHQ4d1FaRW5Oakp4bjhxeWNXZXEzN0ZhRXdtNjhvRVdBQWc2QlQ1UnV5a2h3Q0dUcUFidVdRNWJjUTk%253D%26feature%3Dsubscribe%26action_handle_signin%3Dtrue&amp;passive=true"><span class="yt-uix-button-icon-wrapper"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-icon yt-uix-button-icon-subscribe yt-sprite" alt="10,210,710 subscribers"></span><span class="yt-uix-button-content"><span class="subscribe-label" aria-label="Subscribe">Subscribe</span><span class="subscribed-label" aria-label="Unsubscribe">Subscribed</span><span class="unsubscribe-label" aria-label="Unsubscribe">Unsubscribe</span> </span></button>  <span class="yt-subscription-button-disabled-mask" title=""></span>
</span>
  </div>

    </div>
    
  </span>


  </li>

        <li class="branded-page-related-channels-item  spf-link  clearfix" data-external-id="UCshoKvlZGZ20rVgazZp5vnQ">
    




    <span class="yt-lockup clearfix  yt-lockup-channel yt-lockup-mini"
  >
    <div class="yt-lockup-thumbnail"
        style="width: 34px;"
    >
        <a href="/user/CaptainSparklez" class="ux-thumb-wrap yt-uix-sessionlink  spf-link " data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=rc-rel&amp;ved=CBcQwBs">    <span class="video-thumb  yt-thumb yt-thumb-34 g-hovercard"
        data-ytid="UCshoKvlZGZ20rVgazZp5vnQ"
      >
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <img aria-hidden="true" data-thumb="https://yt3.ggpht.com/-Ns-YNJxjh28/AAAAAAAAAAI/AAAAAAAAAAA/0Tf1gK8GBbE/s176-c-k-no/photo.jpg" alt="" src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" width="34"  height="34" >
          <span class="vertical-align"></span>
        </span>
      </span>
    </span>
</a>

    </div>
    <div class="yt-lockup-content">
          <h3 class="yt-lockup-title"><a class="yt-uix-sessionlink yt-uix-tile-link  spf-link " dir="ltr" title="CaptainSparklez" data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=rc-rel&amp;ved=CBYQvxs" href="/user/CaptainSparklez">CaptainSparklez<span class="qualified-channel-title-badge"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-tooltip-text="Verified" class="yt-channel-title-icon-verified yt-uix-tooltip yt-sprite" alt=""></span></a></h3>


  <div class="yt-lockup-meta spf-nolink">
      <span class=" yt-uix-button-subscription-container" ><button class="yt-uix-button yt-uix-button-size-default yt-uix-button-subscribe-unbranded yt-uix-button-has-icon yt-uix-subscription-button yt-can-buffer yt-uix-hovercard yt-uix-tooltip" type="button" onclick=";return false;" aria-busy="false" title="7,780,740 subscribers" aria-role="button" aria-live="polite" data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=rc-rel&amp;ved=CBUQmys" data-subscriber-count-tooltip="True" data-channel-external-id="UCshoKvlZGZ20rVgazZp5vnQ" data-style-type="unbranded" data-subscriber-count-title="7,780,740 subscribers" data-href="https://accounts.google.com/ServiceLogin?hl=en&amp;service=youtube&amp;uilel=3&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Fhl%3Den%26next%3D%252Fchannel%252FUCshoKvlZGZ20rVgazZp5vnQ%26app%3Ddesktop%26continue_action%3DQUFFLUhqazh3Z3VEa2E3YUJkMXEyejJtd182aTNNNkh2UXxBQ3Jtc0tsMjExMUxkUElBeTJIWkJpbTN6OGpfemZjeWUtNVZaVXRUanVJQlVBeHZfRm8xMXlqWGNqYTVkTGZfUERlTUJuYjgtaDZsZXFwQzQ3UnY3T3R4WE5wczZ5TzRjSFg0SV9VNC04WXQwd1M0UG1oWW93MW0yLVlxYmJHcGFGRjF5aEpKQVI0azNBNGN6SFBjUC1Sem14czZ4bzRKQk1LaXQza0VTTlJyeXZQc2JTX3FpanNJVFpfNGg2RU1jRHNBT1RkMjFMQ3Q%253D%26feature%3Dsubscribe%26action_handle_signin%3Dtrue&amp;passive=true"><span class="yt-uix-button-icon-wrapper"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-icon yt-uix-button-icon-subscribe yt-sprite" alt="7,780,740 subscribers"></span><span class="yt-uix-button-content"><span class="subscribe-label" aria-label="Subscribe">Subscribe</span><span class="subscribed-label" aria-label="Unsubscribe">Subscribed</span><span class="unsubscribe-label" aria-label="Unsubscribe">Unsubscribe</span> </span></button>  <span class="yt-subscription-button-disabled-mask" title=""></span>
</span>
  </div>

    </div>
    
  </span>


  </li>

        <li class="branded-page-related-channels-item  spf-link  clearfix" data-external-id="UC1ieoHqKW-yYgDhLHIcx28w">
    




    <span class="yt-lockup clearfix  yt-lockup-channel yt-lockup-mini"
  >
    <div class="yt-lockup-thumbnail"
        style="width: 34px;"
    >
        <a href="/user/TheSyndicateProject" class="ux-thumb-wrap yt-uix-sessionlink  spf-link " data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=rc-rel&amp;ved=CBsQwBs">    <span class="video-thumb  yt-thumb yt-thumb-34 g-hovercard"
        data-ytid="UC1ieoHqKW-yYgDhLHIcx28w"
      >
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <img aria-hidden="true" data-thumb="https://yt3.ggpht.com/-p5YBPFbcf5c/AAAAAAAAAAI/AAAAAAAAAAA/cIexIK8Xh78/s176-c-k-no/photo.jpg" alt="" src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" width="34"  height="34" >
          <span class="vertical-align"></span>
        </span>
      </span>
    </span>
</a>

    </div>
    <div class="yt-lockup-content">
          <h3 class="yt-lockup-title"><a class="yt-uix-sessionlink yt-uix-tile-link  spf-link " dir="ltr" title="TheSyndicateProject" data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=rc-rel&amp;ved=CBoQvxs" href="/user/TheSyndicateProject">TheSyndicateProject<span class="qualified-channel-title-badge"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-tooltip-text="Verified" class="yt-channel-title-icon-verified yt-uix-tooltip yt-sprite" alt=""></span></a></h3>


  <div class="yt-lockup-meta spf-nolink">
      <span class=" yt-uix-button-subscription-container" ><button class="yt-uix-button yt-uix-button-size-default yt-uix-button-subscribe-unbranded yt-uix-button-has-icon yt-uix-subscription-button yt-can-buffer yt-uix-hovercard yt-uix-tooltip" type="button" onclick=";return false;" aria-busy="false" title="7,733,831 subscribers" aria-role="button" aria-live="polite" data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=rc-rel&amp;ved=CBkQmys" data-subscriber-count-tooltip="True" data-channel-external-id="UC1ieoHqKW-yYgDhLHIcx28w" data-style-type="unbranded" data-subscriber-count-title="7,733,831 subscribers" data-href="https://accounts.google.com/ServiceLogin?hl=en&amp;service=youtube&amp;uilel=3&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Fhl%3Den%26next%3D%252Fchannel%252FUC1ieoHqKW-yYgDhLHIcx28w%26app%3Ddesktop%26continue_action%3DQUFFLUhqbkMtTFhaRXp4Y2VTNVFBNm01Y014M2dxcnRBd3xBQ3Jtc0ttcHdnTmpMR0hxMWVrZm01WXJ6dTJSRDRzYjhYMHBvXzVDa2Exc3dZaElnN3F6czhSeGtzWGNfYTI4V280TFFEY0ZsMU94SEI2Y05CWjNYWUoxWHIwV0huVmxsajhfQWhXNEpSRnZJeG1fdWEyeDloUV9kVExJZ3QyaXRIYkJtbW9WZ3pndzh1OGpleGE2X013RDlWOGdwcHJlc21Cdm9ucEhseG5Ib1BKeGdYeTdldVhIMVBaM3ZMblg0Y3ZDN0M5OXJSTng%253D%26feature%3Dsubscribe%26action_handle_signin%3Dtrue&amp;passive=true"><span class="yt-uix-button-icon-wrapper"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-icon yt-uix-button-icon-subscribe yt-sprite" alt="7,733,831 subscribers"></span><span class="yt-uix-button-content"><span class="subscribe-label" aria-label="Subscribe">Subscribe</span><span class="subscribed-label" aria-label="Unsubscribe">Subscribed</span><span class="unsubscribe-label" aria-label="Unsubscribe">Unsubscribe</span> </span></button>  <span class="yt-subscription-button-disabled-mask" title=""></span>
</span>
  </div>

    </div>
    
  </span>


  </li>

        <li class="branded-page-related-channels-item  spf-link  clearfix" data-external-id="UCH-_hzb2ILSCo9ftVSnrCIQ">
    




    <span class="yt-lockup clearfix  yt-lockup-channel yt-lockup-mini"
  >
    <div class="yt-lockup-thumbnail"
        style="width: 34px;"
    >
        <a href="/user/BlueXephos" class="ux-thumb-wrap yt-uix-sessionlink  spf-link " data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=rc-rel&amp;ved=CB8QwBs">    <span class="video-thumb  yt-thumb yt-thumb-34 g-hovercard"
        data-ytid="UCH-_hzb2ILSCo9ftVSnrCIQ"
      >
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <img aria-hidden="true" data-thumb="https://yt3.ggpht.com/-FMO2nSO2pP8/AAAAAAAAAAI/AAAAAAAAAAA/QZLWwqsqMIU/s176-c-k-no/photo.jpg" alt="" src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" width="34"  height="34" >
          <span class="vertical-align"></span>
        </span>
      </span>
    </span>
</a>

    </div>
    <div class="yt-lockup-content">
          <h3 class="yt-lockup-title"><a class="yt-uix-sessionlink yt-uix-tile-link  spf-link " dir="ltr" title="YOGSCAST Lewis &amp; Simon" data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=rc-rel&amp;ved=CB4Qvxs" href="/user/BlueXephos">YOGSCAST Lewis &amp; Simon<span class="qualified-channel-title-badge"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-tooltip-text="Verified" class="yt-channel-title-icon-verified yt-uix-tooltip yt-sprite" alt=""></span></a></h3>


  <div class="yt-lockup-meta spf-nolink">
      <span class=" yt-uix-button-subscription-container" ><button class="yt-uix-button yt-uix-button-size-default yt-uix-button-subscribe-unbranded yt-uix-button-has-icon yt-uix-subscription-button yt-can-buffer yt-uix-hovercard yt-uix-tooltip" type="button" onclick=";return false;" aria-busy="false" title="7,060,125 subscribers" aria-role="button" aria-live="polite" data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=rc-rel&amp;ved=CB0Qmys" data-subscriber-count-tooltip="True" data-channel-external-id="UCH-_hzb2ILSCo9ftVSnrCIQ" data-style-type="unbranded" data-subscriber-count-title="7,060,125 subscribers" data-href="https://accounts.google.com/ServiceLogin?hl=en&amp;service=youtube&amp;uilel=3&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Fhl%3Den%26next%3D%252Fchannel%252FUCH-_hzb2ILSCo9ftVSnrCIQ%26app%3Ddesktop%26continue_action%3DQUFFLUhqbkxnMXJkVlhsQWVNRVZXdFZraW5zMC1SaTJkUXxBQ3Jtc0ttWk4yM0dQdmZ4R3A5SVR6Z0lSQVczV2NVT0tQNjNEa01YdzNaWTRKbkdRU1U1U3MzYUVQWTUteDFYbzNsUFhDZFYxUkRGam1xQ0NuTVd5U3BWMGdpYmQ1Smh5a3BuemdqbzJVLW1TTVdEZjV2MlRWQ012VVZRNWZ0S3gtYnJCWTJpc1dieV9ZZHlhYWotLTVUeGdueVpuRm1iMnBweHlTaGdwOG5vMzBjWW9XU1daSTBNNlpqdUdMRVhOM092eHFjcDVzalk%253D%26feature%3Dsubscribe%26action_handle_signin%3Dtrue&amp;passive=true"><span class="yt-uix-button-icon-wrapper"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-icon yt-uix-button-icon-subscribe yt-sprite" alt="7,060,125 subscribers"></span><span class="yt-uix-button-content"><span class="subscribe-label" aria-label="Subscribe">Subscribe</span><span class="subscribed-label" aria-label="Unsubscribe">Subscribed</span><span class="unsubscribe-label" aria-label="Unsubscribe">Unsubscribe</span> </span></button>  <span class="yt-subscription-button-disabled-mask" title=""></span>
</span>
  </div>

    </div>
    
  </span>


  </li>

        <li class="branded-page-related-channels-item  spf-link  clearfix" data-external-id="UCKqH_9mk1waLgBiL2vT5b9g">
    




    <span class="yt-lockup clearfix  yt-lockup-channel yt-lockup-mini"
  >
    <div class="yt-lockup-thumbnail"
        style="width: 34px;"
    >
        <a href="/user/VanossGaming" class="ux-thumb-wrap yt-uix-sessionlink  spf-link " data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=rc-rel&amp;ved=CCMQwBs">    <span class="video-thumb  yt-thumb yt-thumb-34 g-hovercard"
        data-ytid="UCKqH_9mk1waLgBiL2vT5b9g"
      >
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <img aria-hidden="true" data-thumb="https://yt3.ggpht.com/-CCKHNHdlWLI/AAAAAAAAAAI/AAAAAAAAAAA/5ccNwzQGPVI/s176-c-k-no/photo.jpg" alt="" src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" width="34"  height="34" >
          <span class="vertical-align"></span>
        </span>
      </span>
    </span>
</a>

    </div>
    <div class="yt-lockup-content">
          <h3 class="yt-lockup-title"><a class="yt-uix-sessionlink yt-uix-tile-link  spf-link " dir="ltr" title="VanossGaming" data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=rc-rel&amp;ved=CCIQvxs" href="/user/VanossGaming">VanossGaming<span class="qualified-channel-title-badge"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-tooltip-text="Verified" class="yt-channel-title-icon-verified yt-uix-tooltip yt-sprite" alt=""></span></a></h3>


  <div class="yt-lockup-meta spf-nolink">
      <span class=" yt-uix-button-subscription-container" ><button class="yt-uix-button yt-uix-button-size-default yt-uix-button-subscribe-unbranded yt-uix-button-has-icon yt-uix-subscription-button yt-can-buffer yt-uix-hovercard yt-uix-tooltip" type="button" onclick=";return false;" aria-busy="false" title="8,033,668 subscribers" aria-role="button" aria-live="polite" data-sessionlink="ei=3xDXU5-cDciS-gOdqILYDA&amp;feature=rc-rel&amp;ved=CCEQmys" data-subscriber-count-tooltip="True" data-channel-external-id="UCKqH_9mk1waLgBiL2vT5b9g" data-style-type="unbranded" data-subscriber-count-title="8,033,668 subscribers" data-href="https://accounts.google.com/ServiceLogin?hl=en&amp;service=youtube&amp;uilel=3&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Fhl%3Den%26next%3D%252Fchannel%252FUCKqH_9mk1waLgBiL2vT5b9g%26app%3Ddesktop%26continue_action%3DQUFFLUhqblVXMVdNM0tfOEh2MThhUmgxY3lCakM4ekpSd3xBQ3Jtc0tubVVYOVJxdXZ0Q09aSHVkQm9HcEltSFlEaUppVUlLM1RWdWZneTVkX3N3akFmakFBX04tNmRxcDNSVGMweUZPeXFoWTNaSThyUHNPcHM2QjZzelFZX2tmNWNrTkRGc1NFTE9ub3hFR2wyZ0FjSWIyZVktZ05iMUlvYXBOTW91MFJsU3JQRFpBVFhxYnZnRERzbVVaMllYdkREbTczaHcyZFFZeFlCSXdnU2ZRZjlrZG0zQ2tkVmdTcWdqNk5rbXBFdnpNOV8%253D%26feature%3Dsubscribe%26action_handle_signin%3Dtrue&amp;passive=true"><span class="yt-uix-button-icon-wrapper"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-icon yt-uix-button-icon-subscribe yt-sprite" alt="8,033,668 subscribers"></span><span class="yt-uix-button-content"><span class="subscribe-label" aria-label="Subscribe">Subscribe</span><span class="subscribed-label" aria-label="Unsubscribe">Subscribed</span><span class="unsubscribe-label" aria-label="Unsubscribe">Unsubscribe</span> </span></button>  <span class="yt-subscription-button-disabled-mask" title=""></span>
</span>
  </div>

    </div>
    
  </span>


  </li>

  </ul>

    </div>


          </div>
      </div>
    </div>
  </div>
</div></div></div></div>  <div id="footer-container" class="yt-base-gutter"><div id="footer"><div id="footer-main"><div id="footer-logo"><a href="/" title="YouTube home"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="footer-logo-icon yt-sprite" alt=""></a></div>  <ul class="pickers yt-uix-button-group" data-button-toggle-group="optional">
      <li>
            <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-default yt-uix-button-has-icon" type="button" onclick=";return false;" id="yt-picker-language-button" data-button-action="yt.www.picker.load" data-picker-key="language" data-button-menu-id="arrow-display" data-picker-position="footer" data-button-toggle="true"><span class="yt-uix-button-icon-wrapper"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-icon yt-uix-button-icon-footer-language yt-sprite" alt=""></span><span class="yt-uix-button-content">  <span class="yt-picker-button-label">
Language:
  </span>
  English
 </span><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-arrow yt-sprite" alt=""></button>


      </li>
      <li>
            <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-default" type="button" onclick=";return false;" id="yt-picker-country-button" data-button-action="yt.www.picker.load" data-picker-key="country" data-button-menu-id="arrow-display" data-picker-position="footer" data-button-toggle="true"><span class="yt-uix-button-content">  <span class="yt-picker-button-label">
Country:
  </span>
  Worldwide
 </span><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-arrow yt-sprite" alt=""></button>


      </li>
      <li>
            <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-default" type="button" onclick=";return false;" id="yt-picker-safetymode-button" data-button-action="yt.www.picker.load" data-picker-key="safetymode" data-button-menu-id="arrow-display" data-picker-position="footer" data-button-toggle="true"><span class="yt-uix-button-content">  <span class="yt-picker-button-label">
Safety:
  </span>
Off
 </span><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-arrow yt-sprite" alt=""></button>


      </li>
  </ul>
      <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-default yt-uix-button-has-icon yt-uix-button-reverse yt-google-help-link inq-no-click " type="button" onclick=";return false;" data-ghelp-tracking-param="" id="google-help" data-ghelp-anchor="google-help"><span class="yt-uix-button-icon-wrapper"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-icon yt-uix-button-icon-questionmark yt-sprite" alt=""></span><span class="yt-uix-button-content">Help
 </span></button>
      <div id="yt-picker-language-footer" class="yt-picker" style="display: none">
      <p class="yt-spinner">
      <img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img yt-sprite" alt="Loading icon">

    <span class="yt-spinner-message">
Loading...
    </span>
  </p>

  </div>

      <div id="yt-picker-country-footer" class="yt-picker" style="display: none">
      <p class="yt-spinner">
      <img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img yt-sprite" alt="Loading icon">

    <span class="yt-spinner-message">
Loading...
    </span>
  </p>

  </div>

      <div id="yt-picker-safetymode-footer" class="yt-picker" style="display: none">
      <p class="yt-spinner">
      <img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img yt-sprite" alt="Loading icon">

    <span class="yt-spinner-message">
Loading...
    </span>
  </p>

  </div>

</div><div id="footer-links"><ul id="footer-links-primary">  <li><a href="//www.youtube.com/yt/about/">About</a></li>
  <li><a href="//www.youtube.com/yt/press/">Press &amp; Blogs</a></li>
  <li><a href="//www.youtube.com/yt/copyright/">Copyright</a></li>
  <li><a href="//www.youtube.com/yt/creators/">Creators &amp; Partners</a></li>
  <li><a href="//www.youtube.com/yt/advertise/">Advertising</a></li>
  <li><a href="//www.youtube.com/yt/dev/">Developers</a></li>
  <li><a href="https://plus.google.com/+youtube" dir="ltr">+YouTube</a></li>
</ul><ul id="footer-links-secondary">  <li><a href="/t/terms">Terms</a></li>
  <li><a href="https://www.google.com/intl/en/policies/privacy/">Privacy</a></li>
  <li><a href="//www.youtube.com/yt/policyandsafety/">
Policy &amp; Safety
  </a></li>
  <li><a href="//support.google.com/youtube/?hl=en" onclick="return yt.www.feedback.start(59);" class="reportbug">Send feedback</a></li>
  <li><a href="/testtube">Try something new!</a></li>
  <li></li>
</ul></div></div></div>


      <div class="yt-dialog hid " id="feed-privacy-lb">
    <div class="yt-dialog-base">
      <span class="yt-dialog-align"></span>
      <div class="yt-dialog-fg">
        <div class="yt-dialog-fg-content">
          <div class="yt-dialog-loading">
              <div class="yt-dialog-waiting-content">
    <div class="yt-spinner-img"></div><div class="yt-dialog-waiting-text">Loading...</div>
  </div>

          </div>
          <div class="yt-dialog-content">
              <div id="feed-privacy-dialog">
  </div>

          </div>
          <div class="yt-dialog-working">
              <div class="yt-dialog-working-overlay"></div>
  <div class="yt-dialog-working-bubble">
    <div class="yt-dialog-waiting-content">
      <div class="yt-spinner-img"></div><div class="yt-dialog-waiting-text">Working...</div>
    </div>
  </div>

          </div>
        </div>
      </div>
    </div>
  </div>


<div class="hid">    <div id="shared-addto-watch-later-login" class="hid">
      <a href="https://accounts.google.com/ServiceLogin?hl=en&service=youtube&uilel=3&continue=https%3A%2F%2Fwww.youtube.com%2Fsignin%3Fhl%3Den%26next%3D%252Fchannel%252F<?php echo $authorId; ?>%26feature%3Dplaylist%26app%3Ddesktop%26action_handle_signin%3Dtrue&passive=true" class="sign-in-link">Sign in</a> to add this to Watch Later

    </div>
  <div id="yt-uix-videoactionmenu-menu" class="yt-ui-menu-content">
    <div class="hide-on-create-pl-panel">
      <h3>
Add to
      </h3>
    </div>
    <div class="add-to-widget">
    </div>
  </div>
</div><script>if (window.ytcsi) {window.ytcsi.tick("hr", null, '');}</script>  <script>var ytspf = ytspf || {};ytspf.enabled = true;ytspf.config = {};ytspf.config['navigate-limit'] = 10;ytspf.config['navigate-lifetime'] = 64800000;</script>  <script src="//s.ytimg.com/yts/jsbin/spf-vflXXmh9y/spf.js" type="text/javascript" name="spf"></script>
  <script src="//s.ytimg.com/yts/jsbin/www-en_US-vfl0MqD-i/base.js" name="www/base"></script>
<script>spf.script.path({'www/': '//s.ytimg.com/yts/jsbin/www-en_US-vfl0MqD-i/'});var ytdepmap = {"www/base": null, "www/common": "www/base", "www/watch": "www/common", "www/videomanager": "www/common", "www/subscriptionmanager": "www/common", "www/results_starwars": "www/common", "www/results_star_trek": "www/common", "www/results": "www/common", "www/results_harlemshake": "www/common", "www/results_fibonacci": "www/common", "www/promo_join_network": "www/common", "www/legomap": "www/common", "www/feed": "www/common", "www/experiments": "www/common", "www/downloadreports": "www/common", "www/dashboard": "www/common", "www/channels": "www/common", "www/channels_accountupload": "www/common", "www/watch_webdrivertorso": "www/watch", "www/watch_videoshelf": "www/watch", "www/watch_transcript": "www/watch", "www/watch_speedyg": "www/watch", "www/watch_promos": "www/watch", "www/watch_missilecommand": "www/watch", "www/watch_live": "www/watch", "www/watch_editor": "www/watch", "www/watch_edit": "www/watch", "www/watch_commentsrealtime": "www/watch", "www/watch_commentsmoderation": "www/watch", "www/watch_autoplayrenderer": "www/watch", "www/channels_edit": "www/channels"};spf.script.declare(ytdepmap);</script><script>if (window.ytcsi) {window.ytcsi.tick("je", null, '');}</script>  

  <script>
    
      (function() {
      var channelHeaderEl = document.querySelector('.channel-header');

      if (!/channel-header-auto-hide/.test(channelHeaderEl.className)) {
        return;
      }

      var brandedPageContainer = document.querySelector('.branded-page-v2-container');
      var originalHeight = brandedPageContainer.clientHeight;
      channelHeaderEl.className = channelHeaderEl.className.replace(/\bhid\b/);
      var height = brandedPageContainer.clientHeight;
      var scrollDistance = height - originalHeight;

      document.body.style.minHeight = 0;

      var bodyScrollHeight = document.body.scrollHeight;
      var bodyClientHeight = document.body.clientHeight;
      var heightToIncrease = scrollDistance - (bodyScrollHeight - bodyClientHeight);
      if (heightToIncrease > 0) {
        document.body.style.minHeight = bodyScrollHeight + heightToIncrease + 'px';
      }

      document.body.scrollTop = document.documentElement.scrollTop = scrollDistance;
    }());

      yt.setConfig('CHANNEL_TAB', 'featured');
        



    
    yt.setConfig('CHANNEL_ID', "<?php echo $authorId; ?>");
    yt.setConfig('JS_PAGE_MODULES', [
      'www/channels',
      ''
    ]);
    yt.setConfig('CHANNEL_EDITABLE', false);
      yt.setConfig('CONVERSION_CONFIG_DICT', {"vid": "MkXVM6ad9nI", "uid": "-lHJZR3Gqxm24_Vd_AJ5Yw", "focEnabled": true, "rmktEnabled": true, "ytfocHistoryEnabled": false, "socialEnabled": false, "ytfocEnabled": true, "baseUrl": "https:\/\/googleads.g.doubleclick.net\/pagead\/viewthroughconversion\/962985656\/", "rmktPingThreshold": 0, "aid": "P8nR0u7zuRQ"});



      yt.setConfig({
        'GUIDE_SELECTED_ITEM': "0qDduQEaEhhVQy1sSEpaUjNHcXhtMjRfVmRfQUo1WXc%3D"
      });

      yt.setConfig({
    'GUIDED_HELP_LOCALE': "en_US",
    'GUIDED_HELP_ENVIRONMENT': "prod"
  });

  </script>
<script>yt.setConfig({'EVENT_ID': "3xDXU5-cDciS-gOdqILYDA",'PAGE_NAME': "channel",'LOGGED_IN': false,'SESSION_INDEX': null,'FORMATS_FILE_SIZE_JS': ["%s B", "%s KB", "%s MB", "%s GB", "%s TB"],'DELEGATED_SESSION_ID': null,'GAPI_HOST': "https:\/\/apis.google.com",'GAPI_HINT_PARAMS': "m;\/_\/scs\/abc-static\/_\/js\/k=gapi.gapi.en.0Okf7oXXtpw.O\/m=__features__\/rt=j\/d=1\/rs=AItRSTMGzueE0QJRmrRxQBthM2-0ikJ_cw",'GAPI_LOCALE': "en_US",'UNIVERSAL_HOVERCARDS': true,'VISITOR_DATA': "CgtzS1YtZzdEY2RFWQ%3D%3D",'APIARY_HOST': "",'APIARY_HOST_FIRSTPARTY': "",'INNERTUBE_CONTEXT_HL': "en",'INNERTUBE_CONTEXT_GL': "US",'INNERTUBE_CONTEXT_CLIENT_VERSION': "20140722",'INNERTUBE_API_KEY': "AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8",'INNERTUBE_API_VERSION': "v1",'GOOGLEPLUS_HOST': "https:\/\/plus.google.com",'PAGEFRAME_JS': "\/\/s.ytimg.com\/yts\/jsbin\/www-pageframe-vflefHNhV\/www-pageframe.js",'JS_COMMON_MODULE': "\/\/s.ytimg.com\/yts\/jsbin\/www-en_US-vfl0MqD-i\/common.js",'PAGE_FRAME_DELAYLOADED_CSS': "\/\/s.ytimg.com\/yts\/cssbin\/www-pageframedelayloaded-vflqo114_.css",'GUIDED_HELP_FIND_VIDEO_MANAGER_ENABLED': false,'GUIDED_HELP_CREATOR_STUDIO_ENABLED': true,'PREFETCH_CSS_RESOURCES' : ["\/\/s.ytimg.com\/yts\/cssbin\/www-player-vfl_UOZc_.css",''         ],'PREFETCH_JS_RESOURCES': ["\/\/s.ytimg.com\/yts\/jsbin\/html5player-en_US-vflCGk6yw\/html5player.js",''         ],'SAFETY_MODE_PENDING': false,'LOCAL_DATE_TIME_CONFIG': {"amPms": ["AM", "PM"], "weekdays": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"], "shortWeekdays": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"], "months": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"], "shortMonths": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], "formatLongDate": "MMMM d, yyyy h:mm a", "formatShortDate": "MMM d, yyyy", "formatLongDateOnly": "MMMM d, yyyy", "formatWeekdayShortTime": "EE h:mm a"},'PAGE_CL': 71838233,'PAGE_BUILD_TIMESTAMP': "Thu Jul 24 10:13:56 2014 (1406222036)",'PLAYER_PERSISTENCE_REFACTOR': true,'FEEDBACK_BUCKET_ID': "Channels 4",'FEEDBACK_LOCALE_LANGUAGE': "en",'FEEDBACK_LOCALE_EXTRAS': {"accept_language": null, "is_branded": "", "guide_subs": "NA", "logged_in": false, "experiments": "902022,902408,906001,908555,911305,911507,912714,912719,912725,912909,914950,916929,918119,918121,919389,920605,920609,921603,921910,921911,922413,922804,923024,924222,925011,927006,927622,927626,927881,927891,929237,929507,929940,929943,930812,930819,931017,931020,931339,931341,931943,931950,931967,933218,934024,934030,934032,934113,935020,935670,935707,937003,937217,937407,937424,937817,938006,938009,938302,938632,938639,938681,938683,938703,938705,939201,940641,941414,941416,941810,941815,943301,943407,944312,944702,945117,945401,945827,946011,947204,948200,949001,951601", "is_partner": ""}});  yt.setConfig({
    'GUIDED_HELP_LOCALE': "en_US",
    'GUIDED_HELP_ENVIRONMENT': "prod"
  });
yt.setConfig('SPF_SEARCH_BOX', true);yt.setMsg({'ADDTO_WATCH_LATER': "Watch Later",'ADDTO_WATCH_LATER_ADDED': "Added",'ADDTO_WATCH_LATER_ERROR': "Error",'ADDTO_WATCH_QUEUE': "Watch Queue",'ADDTO_WATCH_QUEUE_ADDED': "Added",'ADDTO_WATCH_QUEUE_ERROR': "Error",'ADDTO_TV_QUEUE': "TV Queue"});    yt.setConfig({
    'XSRF_TOKEN': "QUFFLUhqa3NOTGdIZl9WUExxcTRjRV9mVmxkZ04zMTBmd3xBQ3Jtc0tuWGpEcDF5WThfZmQ5YzRjRWxBSTExcE41TTU1RjhMRzBjd3ZKOWJiM1RGdGhYb1pUZXhVYmcxWXR3TFBaOVpJOEpIZ0NMMjc2MzZKLWhFNkd2YkZhbzc2S2lMTTBPRkM4a0g1Q242X1pvWkJmUWdUSUJLMlRMblhfQXo4UWZGV0FqcmZtc25QMloyX18yV3M3V1lKcVEyWE9keWc=",
    'XSRF_REDIRECT_TOKEN': "mgnvmxU6MU78NIQV-xuUhOWg6Kd8MTQwNjY4OTg4N0AxNDA2NjAzNDg3",
    'XSRF_FIELD_NAME': "session_token"
  });

  yt.setConfig('FEED_PRIVACY_CSS_URL', "\/\/s.ytimg.com\/yts\/cssbin\/www-feedprivacydialog-vflp_YgUv.css");

  yt.setConfig('FEED_PRIVACY_LIGHTBOX_ENABLED', true);
yt.setConfig({'SBOX_JS_URL': "\/\/s.ytimg.com\/yts\/jsbin\/www-searchbox-vflSb1S5v\/www-searchbox.js",'SBOX_SETTINGS': {"SESSION_INDEX": null, "PQ": "", "REQUEST_LANGUAGE": "en", "EXPERIMENT_ID": -1, "REQUEST_DOMAIN": "us", "PSUGGEST_TOKEN": null, "HAS_ON_SCREEN_KEYBOARD": false},'SBOX_LABELS': {"SUGGESTION_DISMISS_LABEL": "Dismiss", "SUGGESTION_DISMISSED_LABEL": "Suggestion dismissed"}});  yt.setConfig({
    'YPC_LOADER_ENABLED': true,
    'YPC_LOADER_CONFIGS': "\/ypc_config_ajax",
    'YPC_LOADER_JS': "\/\/s.ytimg.com\/yts\/jsbin\/www-ypc-vflYG8j4X\/www-ypc.js",
    'YPC_LOADER_CSS': "\/\/s.ytimg.com\/yts\/cssbin\/www-ypc-vfl2lS1_U.css",
    'YPC_LOADER_CALLBACKS': ['yt.www.ypc.checkout.init', 'yt.www.ypc.subscription.init']
  });
  yt.setConfig('GOOGLE_HELP_CONTEXT', "default");
ytcsi.span('st', 200);yt.setConfig({'TIMING_ACTION': "channels4",'TIMING_INFO': {"yt_lt": "cold", "ei": "3xDXU5-cDciS-gOdqILYDA", "yt_spf": 0, "yt_li": 0, "e": "902408,908555,911305,924222,927622,934024,934030,937407,944312,946011,948200"}});  yt.setConfig({
    'XSRF_TOKEN': "QUFFLUhqa3NOTGdIZl9WUExxcTRjRV9mVmxkZ04zMTBmd3xBQ3Jtc0tuWGpEcDF5WThfZmQ5YzRjRWxBSTExcE41TTU1RjhMRzBjd3ZKOWJiM1RGdGhYb1pUZXhVYmcxWXR3TFBaOVpJOEpIZ0NMMjc2MzZKLWhFNkd2YkZhbzc2S2lMTTBPRkM4a0g1Q242X1pvWkJmUWdUSUJLMlRMblhfQXo4UWZGV0FqcmZtc25QMloyX18yV3M3V1lKcVEyWE9keWc=",
    'XSRF_REDIRECT_TOKEN': "mgnvmxU6MU78NIQV-xuUhOWg6Kd8MTQwNjY4OTg4N0AxNDA2NjAzNDg3",
    'XSRF_FIELD_NAME': "session_token"
  });
  yt.setConfig('THUMB_DELAY_LOAD_BUFFER', 0);
if (window.ytcsi) {window.ytcsi.tick("jl", null, '');}</script>
</body></html>


