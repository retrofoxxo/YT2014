<?php
// Include config file
include('./config.php');

// URL of the file you want to request
$url = $invidApi . '/api/v1/videos/' . $_GET['v'];

// Cache file path
$cache_file = './cache/videos/' . $_GET['v'] . '.json';

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

$dataVid = json_decode($data, true);

$title = $dataVid['title'];
$description = $dataVid['descriptionHtml'];
$descriptionBland = $dataVid['description'];
$likeCount = number_format($dataVid['likeCount']);
$dislikeCount = number_format($dataVid['dislikeCount']);
$viewCount = number_format($dataVid['viewCount']);
$author = $dataVid['author'];
$authorId = $dataVid['authorId'];
$authorVerified = $dataVid['authorVerified'];
$authorImg = $dataVid['authorThumbnails'][1]['url'];
$genre = $dataVid['genre'];
$storyboard = str_replace("/", "\/", $dataVid['storyboards'][2]['templateUrl']);
$vidLength = $dataVid['lengthSeconds'];

// Do video time
$date = $dataVid['published'];
$vidDate = date('d M, Y', $date);

// $video1 = urlencode($dataVid['adaptiveFormats'][8]['url']); //It worked once, then google crushed it :<
$video1 = urlencode($invidApi . '/latest_version?id=' . $_GET['v'] . '&local=true');

if ($authorVerified == true) {
$authorVerifiedHtml = '<a target="_blank" class="qualified-channel-title-badge" href="//support.google.com/youtube/bin/answer.py?answer=3046484&amp;hl=en"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-tooltip-text="Verified" class="yt-channel-title-icon-verified yt-uix-tooltip yt-sprite" alt=""></a>';
} else {
$authorVerifiedHtml = '';
}
?>
<!DOCTYPE html><html lang="en" data-cast-api-enabled="true"><head><script>var ytcsi = {gt: function(n) {n = (n || '') + 'data_';return ytcsi[n] || (ytcsi[n] = {tick: {},span: {},info: {}});},tick: function(l, t, n) {ytcsi.gt(n).tick[l] = t || +new Date();},span: function(l, s, n) {ytcsi.gt(n).span[l] = (typeof s == 'number') ? s :+new Date() - ytcsi.data_.tick[l];},info: function(k, v, n) {ytcsi.gt(n).info[k] = v;}};ytcsi.perf = window.performance || window.mozPerformance ||window.msPerformance || window.webkitPerformance;ytcsi.tick('_start', ytcsi.perf ? ytcsi.perf.timing.responseStart : null);if (document.webkitVisibilityState == 'prerender') {ytcsi.info('prerender', 1);document.addEventListener('webkitvisibilitychange', function() {ytcsi.tick('_start');}, false);}</script>  <script>
    try {window.ytbuffer = {};ytbuffer.handleClick = function(e) {var element = e.target || e.srcElement;while (element.parentElement) {if (element.className.match(/(^| )yt-can-buffer( |$)/)) {window.ytbuffer = {bufferedClick: e};element.className += ' yt-is-buffered';break;}element = element.parentElement;}};if (document.addEventListener) {document.addEventListener('click', ytbuffer.handleClick);} else {document.attachEvent('onclick', ytbuffer.handleClick);}} catch(e) {}
    (function(){function a(b,g,k){var h=document.getElementsByTagName("html")[0],e=[h.className];b&&1251<=(window.innerWidth||document.documentElement.clientWidth)&&(e.push("guide-pinned"),g&&e.push("show-guide"));k&&(b=(window.innerWidth||document.documentElement.clientWidth)-21-50,1251<=(window.innerWidth||document.documentElement.clientWidth)&&g&&(b-=230),e.push(" ",1262<=b?"content-snap-width-3":1056<=b?"content-snap-width-2":"content-snap-width-1"));h.className=e.join(" ")}
var c=["yt","www","masthead","sizing","runBeforeBodyIsReady"],d=this;c[0]in d||!d.execScript||d.execScript("var "+c[0]);for(var f;c.length&&(f=c.shift());)c.length||void 0===a?d[f]?d=d[f]:d=d[f]={}:d[f]=a;})();
yt.www.masthead.sizing.runBeforeBodyIsReady(false,true,false);
  </script>



        <script src="//s.ytimg.com/yts/jsbin/www-scheduler-vfltpmjOU/www-scheduler.js" type="text/javascript" name="www-scheduler"></script>


    <script>var ytimg = {};ytimg.count = 1;ytimg.preload = function(src) {var img = new Image();var count = ++ytimg.count;ytimg[count] = img;img.onload = img.onerror = function() {delete ytimg[count];};img.src = src;};</script>



  <link rel="stylesheet" href="//s.ytimg.com/yts/cssbin/www-core-vflyfJFUS.css" name="www-core">
<script>if (window.ytcsi) {window.ytcsi.tick("ce", null, '');}</script>  
      <script>ytimg.preload("http:\/\/r20---sn-nwj7knl7.googlevideo.com\/crossdomain.xml");ytimg.preload("http:\/\/r20---sn-nwj7knl7.googlevideo.com\/generate_204");</script>


<title><?php echo $title; ?> - YouTube</title><link rel="search" type="application/opensearchdescription+xml" href="http://www.youtube.com/opensearch?locale=en_US" title="YouTube Video Search"><link rel="shortcut icon" href="http://s.ytimg.com/yts/img/favicon-vfldLzJxy.ico" type="image/x-icon">     <link rel="icon" href="//s.ytimg.com/yts/img/favicon_32-vflWoMFGx.png" sizes="32x32"><link rel="canonical" href="http://www.youtube.com/watch?v=<?php echo $_GET['v']; ?>"><link rel="alternate" media="handheld" href="http://m.youtube.com/watch?v=<?php echo $_GET['v']; ?>"><link rel="alternate" media="only screen and (max-width: 640px)" href="http://m.youtube.com/watch?v=<?php echo $_GET['v']; ?>"><link rel="shortlink" href="http://youtu.be/<?php echo $_GET['v']; ?>">      <meta name="title" content="<?php echo $title; ?>">

      <meta name="description" content="<?php echo $descriptionBland; ?>">

      <meta name="keywords" content="Reactions, Dogs, Dog Butts, Sniffing, chemistry, aroma chemistry, pets, communication, dog smells butts, chemical senses, acs, american chemical society, sci...">

      <link rel="alternate" href="android-app://com.google.android.youtube/http/youtube.com/watch/<?php echo $_GET['v']; ?>">


      <link rel="alternate" type="application/json+oembed" href="http://www.youtube.com/oembed?format=json&amp;url=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D<?php echo $_GET['v']; ?>" title="<?php echo $title; ?>">
  <link rel="alternate" type="text/xml+oembed" href="http://www.youtube.com/oembed?format=xml&amp;url=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D<?php echo $_GET['v']; ?>" title="<?php echo $title; ?>">

        <meta property="og:site_name" content="YouTube">
    <meta property="og:url" content="http://www.youtube.com/watch?v=<?php echo $_GET['v']; ?>">
    <meta property="og:title" content="<?php echo $title; ?>">
    <meta property="og:image" content="http://i.ytimg.com/vi/<?php echo $_GET['v']; ?>/maxresdefault.jpg">

      <meta property="og:description" content="<?php echo $descriptionBland; ?>">

    <meta property="al:ios:app_store_id" content="544007664">
    <meta property="al:ios:app_name" content="YouTube">
      <meta property="al:ios:url" content="vnd.youtube://www.youtube.com/watch?v=<?php echo $_GET['v']; ?>&amp;feature=applinks">
    <meta property="al:android:url" content="http://www.youtube.com/watch?v=<?php echo $_GET['v']; ?>&amp;feature=applinks">
    <meta property="al:android:app_name" content="YouTube">
    <meta property="al:android:package" content="com.google.android.youtube">
    <meta property="al:web:url" content="http://www.youtube.com/watch?v=<?php echo $_GET['v']; ?>&amp;feature=applinks">

    <meta property="og:type" content="video">
        <meta property="og:video" content="http://www.youtube.com/v/<?php echo $_GET['v']; ?>?autohide=1&amp;version=3">
      <meta property="og:video:type" content="application/x-shockwave-flash">
      <meta property="og:video:width" content="1280">
      <meta property="og:video:height" content="720">

    <meta property="fb:app_id" content="87741124305">

        <meta name="twitter:card" content="player">
    <meta name="twitter:site" content="@youtube">
    <meta name="twitter:url" content="http://www.youtube.com/watch?v=<?php echo $_GET['v']; ?>">
    <meta name="twitter:title" content="<?php echo $title; ?>">
    <meta name="twitter:description" content="<?php echo $descriptionBland; ?>">
    <meta name="twitter:image" content="http://i.ytimg.com/vi/<?php echo $_GET['v']; ?>/maxresdefault.jpg">
    <meta name="twitter:app:name:iphone" content="YouTube">
    <meta name="twitter:app:id:iphone" content="544007664">
    <meta name="twitter:app:name:ipad" content="YouTube">
    <meta name="twitter:app:id:ipad" content="544007664">
      <meta name="twitter:app:url:iphone" content="vnd.youtube://www.youtube.com/watch?v=<?php echo $_GET['v']; ?>&amp;feature=applinks">
      <meta name="twitter:app:url:ipad" content="vnd.youtube://www.youtube.com/watch?v=<?php echo $_GET['v']; ?>&amp;feature=applinks">
    <meta name="twitter:app:name:googleplay" content="YouTube">
    <meta name="twitter:app:id:googleplay" content="com.google.android.youtube">
    <meta name="twitter:app:url:googleplay" content="http://www.youtube.com/watch?v=<?php echo $_GET['v']; ?>">
      <meta name="twitter:player" content="https://www.youtube.com/embed/<?php echo $_GET['v']; ?>">
      <meta name="twitter:player:width" content="1280">
      <meta name="twitter:player:height" content="720">

      <meta name=attribution content=RPMNetworks/>  
  <link rel="stylesheet" href="//s.ytimg.com/yts/cssbin/www-pageframe-vflF__vZT.css" name="www-pageframe">
        <link rel="stylesheet" href="//s.ytimg.com/yts/cssbin/www-watch-transcript-vflp-Zp3x.css" name="www-watch-transcript">

<script>if (window.ytcsi) {window.ytcsi.tick("cl", null, '');}</script></head>    <body dir="ltr" class="  ltr       site-center-aligned site-as-giant-card appbar-hidden     not-nirvana-dogfood not-nirvana-playlist  not-watch8    delayed-frame-styles-not-in  " id="body">

  <div id="early-body"></div>
  <div id="body-container"><form name="logoutForm" method="POST" action="/logout"><input type="hidden" name="action_logout" value="1"></form><div id="masthead-positioner">  
  <div id="yt-masthead-container" class="yt-grid-box yt-base-gutter"><div id="yt-masthead" class=""><div class="yt-masthead-logo-container ">    <a id="logo-container" href="/" title="YouTube home" class="     spf-link 
"><img id="logo" src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="YouTube home"><?php include('./templates/contentregion.php'); ?></a>
  <div id="appbar-guide-button-container">
    <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-text yt-uix-button-empty yt-uix-button-has-icon appbar-guide-toggle appbar-guide-clickable-ancestor" type="button" onclick=";return false;" id="appbar-guide-button" aria-controls="appbar-guide-menu" aria-label="Guide"><span class="yt-uix-button-icon-wrapper"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-icon yt-uix-button-icon-appbar-guide yt-sprite" alt=""></span><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-arrow yt-sprite" alt=""></button>
    <div id="appbar-guide-button-notification-check" class="yt-valign">
      <img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="appbar-guide-notification-icon yt-valign-content yt-sprite" alt="">
    </div>
  </div>
  <div id="appbar-main-guide-notification-container"></div>
</div><div id="yt-masthead-signin"><span id="appbar-onebar-upload-group"><a href="//www.youtube.com/upload" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-default yt-uix-button-size-default" data-sessionlink="feature=mhsb&amp;ei=20HYU_PNJIee-gPU5oLACw" id="upload-btn"><span class="yt-uix-button-content">Upload </span></a></span><button class="yt-uix-button yt-uix-button-size-default yt-uix-button-primary" type="button" onclick=";window.location.href=this.getAttribute(&#39;href&#39;);return false;" href="https://accounts.google.com/ServiceLogin?continue=https%3A%2F%2Fwww.youtube.com%2Fsignin%3Ffeature%3Dsign_in_button%26next%3D%252Fwatch%253Fv%253D<?php echo $_GET['v']; ?>%26hl%3Den%26action_handle_signin%3Dtrue%26app%3Ddesktop&amp;uilel=3&amp;service=youtube&amp;passive=true&amp;hl=en"><span class="yt-uix-button-content">Sign in </span></button></div><div id="yt-masthead-content"><form id="masthead-search" class="search-form consolidated-form" action="/results" onsubmit="if (_gel(&#39;masthead-search-term&#39;).value == &#39;&#39;) return false;"><button class="yt-uix-button yt-uix-button-size-default yt-uix-button-default search-btn-component search-button" type="submit" onclick="if (_gel(&#39;masthead-search-term&#39;).value == &#39;&#39;) return false; _gel(&#39;masthead-search&#39;).submit(); return false;;return true;" id="search-btn" tabindex="2" dir="ltr"><span class="yt-uix-button-content">Search </span></button><div id="masthead-search-terms" class="masthead-search-terms-border" dir="ltr"><label><input id="masthead-search-term" autocomplete="off"  class="search-term yt-uix-form-input-bidi" name="search_query" value="" type="text" tabindex="1" title="Search"></label></div></form></div></div></div>
    <div id="masthead-appbar-container" class="clearfix"><div id="masthead-appbar"><div id="appbar-content" class=""></div></div></div>

</div><div id="masthead-positioner-height-offset"></div><div id="page-container"><div id="page" class="  watch      watch-non-stage-mode   clearfix"><div id="guide" class="yt-scrollbar">    <div id="appbar-guide-menu" class="appbar-menu appbar-guide-menu-layout appbar-guide-clickable-ancestor">
    <div id="guide-container">
      <div class="guide-module-content guide-module-loading">
          <p class="yt-spinner">
      <img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img yt-sprite" alt="Loading icon">

    <span class="yt-spinner-message">
Loading...
    </span>
  </p>

      </div>
    </div>
  </div>


</div><div id="alerts" class="content-alignment">    <div class="yt-alert yt-alert-default yt-alert-info  " id="old-browser-alert">  <div class="yt-alert-icon">
    <img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" class="icon master-sprite yt-sprite">
  </div>
<div class="yt-alert-buttons"><button class="yt-uix-button yt-uix-button-size-default yt-uix-button-close close yt-uix-close" type="button" onclick="yt.net.cookies.set('hideOldBrowserBox', 'true', 604800);;return false;" data-close-parent-class="yt-alert"><span class="yt-uix-button-content">Close </span></button></div><div class="yt-alert-content" role="alert">    <span class="yt-alert-vertical-trick"></span>
    <div class="yt-alert-message">
            You're using an older version of Internet Explorer that we'll soon stop supporting. Please <a href="/supported_browsers">update your browser</a> to the latest version.

    </div>
</div></div>
    



</div><div id="header"></div><div id="player" class="      watch-small  "><div id="theater-background"></div>  <div id="player-mole-container">

    <div id="player-unavailable" class="    hid    player-width player-height    player-unavailable ">
              <img class="icon meh" src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-icon="//s.ytimg.com/yts/img/meh7-vflGevej7.png" alt="">
  <div class="content">
    <h1 id="unavailable-message" class="message">
            This video is unavailable.
    </h1>
    <div id="unavailable-submessage" class="submessage">
    </div>
  </div>


    </div>

      <div id="player-api" class="player-width player-height off-screen-target player-api"></div>

          <script>if (window.ytcsi) {window.ytcsi.tick("cfg", null, '');}</script>
    <script>var ytplayer = ytplayer || {};ytplayer.config = {"url_v9as2": "http:\/\/s.ytimg.com\/yts\/swfbin\/player-vflSotbD3\/cps.swf", "args": {"ytfocEnabled": "1", "enablejsapi": 1, "afv_video_min_cpm": 6000000, "pyv_in_related_cafe_experiment_id": "", "trueview": true, "tag_for_child_directed": false, "focEnabled": "1", "iv3_module": "1", "ad_slots": "0", "ad_host_tier": "3660190", "aftv": true, "ad_tag": "http:\/\/pubads.g.doubleclick.net\/gampad\/ads?ad_rule=0\u0026ciu_szs=300x60,300x250\u0026env=vp\u0026gdfp_req=1\u0026impl=s\u0026iu=\/4061\/com.ytpwatch.scitech\/3406642\/OSPWQJ3BSQL4KZTP4G5N4V2GLI\u0026output=xml_vast3\u0026scor=1\u0026scp=kpeid%3DdJ9oJ2GUF8Vmb-G63ldGWg%26kpid%3D3406642%26kpu%3DACSReactions%26kvid%3D<?php echo $_GET['v']; ?>%26mpvid%3DHu39qu4brxHm_Q7m%26ord%3D752307870%26afv%3D1%26dc_yt%3D1%26excl_cat%3D3406642%26k2%3D211%26k5%3D211%26kclt%3D1%26kga%3D-1%26kgg%3D-1%26kgpt%3D1%26klg%3Den%26kmyd%3Dwatch-channel-brand-div%26ko%3Dp%26kpco%3D12045%26kr%3DF%26kvlg%3Den%26kvz%3D205%26nlfb%3D1%26yt3pav%3D1%26ytcat%3D28%26ytdevice%3D1%26ytexp%3D940670,946013%26yt_ec%3D1%26yt_vrallowed%3D1\u0026sz=480x361%7C480x70\u0026unviewed_position_start=1\u0026vid=<?php echo $_GET['v']; ?>", "cr": "US", "t": "1", "mpvid": "Hu39qu4brxHm_Q7m", "adsense_video_doc_id": "yt_<?php echo $_GET['v']; ?>", "pltype": "content", "dclk": true, "sourceid": "y", "atc": "a=3\u0026b=ps0wTMc6vGBm7IQMMHl7P3lVCPE\u0026c=1406681563\u0026d=1\u0026e=<?php echo $_GET['v']; ?>\u0026c3a=24\u0026c1a=1\u0026hh=8LclxMjOCYkeaxdQ2HwHBfhisf4", "fmt_list": "22\/1280x720\/9\/0\/115,43\/640x360\/99\/0\/0,18\/640x360\/9\/0\/115,5\/320x240\/7\/0\/0,36\/320x240\/99\/1\/0,17\/176x144\/99\/1\/0", "cafe_experiment_id": "", "allow_html5_ads": 1, "cut_ad_for_ypc": false, "uid": "dJ9oJ2GUF8Vmb-G63ldGWg", "ad_video_pub_id": "ca-pub-6219811747049371", "aid": "P9BWj8HuFTA", "allowed_ads": [0, 1, 2, 4, 8, 9, 10], "ad_flags": 0, "rmktPingThreshold": 0, "iv_load_policy": 1, "hl": "en_US", "gpt_migration": 1, "baseUrl": "http:\/\/googleads.g.doubleclick.net\/pagead\/viewthroughconversion\/962985656\/", "loeid": "940670,946013", "cid": 3406642, "account_playback_token": "QUFFLUhqblJVQmNyLUxFRFA0RjR1OHhCejc2a3o4bjQ0UXxBQ3Jtc0tueVVITGhOTWRaS1FGUTRLM3R6X0YtT05XbUtvQm1qcGpZN3BhaDI0MlA4aHBRTVRFblhDalNhWUszTnBSb3NWYjctc2g2Z2FJOVVhMl9DaG8zWlFCTVJMRVZiZTVLZF9lV09JR1hyQzJTMXRHc2dnaw==", "host_language": "en", "iv_module": "http:\/\/s.ytimg.com\/yts\/swfbin\/player-vflSotbD3\/iv_module.swf", "ad3_module": "1", "c": "WEB", "invideo": true, "sffb": true, "loaderUrl": "http:\/\/www.youtube.com\/watch?v=<?php echo $_GET['v']; ?>", "as_launched_in_country": "1", "cc_asr": 1, "storyboard_spec": "<?php echo $storyboard; ?>|48#27#100#10#10#0#default#AWTMSMgpI9xwexeZvbLEDgKYw5s|80#45#75#10#10#2000#M$M#8jQ2VruXbMv-UJoDGg0Bat8kNR0|160#90#75#5#5#2000#M$M#EnErc2AW6jW2doJMHAKnFMJnCJk", "ad_channel_code_instream": "yt_mpvid_Hu39qu4brxHm_Q7m,yt_cid_3406642,yt_no_ap,ytdevice_1,afv_user_id_dJ9oJ2GUF8Vmb-G63ldGWg,afv_user_acsreactions,ytel_detailpage,ytps_default,Vertical_211,afv_instream,afv_instream_us", "cc_font": "Arial Unicode MS, arial, verdana, _sans", "yt_pt": "APb3F29pydlet71zg4RDozCSiGCyFMNZT1qsgKczAk3WdQqNh4F0BnIoJPZ5NPNapZ-JZDJEiPTC2KHeg2YxZfoiCpyWHURzPbkgAhtzD93JNYauViBos4l_ziY6bH-E0tJwGRhOBk0RwWn_tHCL", "tmi": "1", "midroll_freqcap": 420.0, "ad_eurl": "http:\/\/www.youtube.com\/video\/<?php echo $_GET['v']; ?>", "ad_host": "ca-host-pub-4184977541492624", "dashmpd": "http:\/\/manifest.googlevideo.com\/api\/manifest\/dash\/cmbypass\/yes\/mv\/m\/sver\/3\/ipbits\/0\/mm\/31\/upn\/Dfh_KE1nOCo\/mt\/1406681503\/itag\/0\/playback_host\/r20---sn-nwj7knl7.googlevideo.com\/mws\/yes\/fexp\/902408%2C924222%2C927622%2C934024%2C934030%2C940670%2C946013\/sparams\/as%2Ccmbypass%2Cgcr%2Cid%2Cip%2Cipbits%2Citag%2Cplayback_host%2Csource%2Cexpire\/id\/o-AE9ihuvyJUfcbTO8j-i6rA1y3P3CdI3dUoFHjUxKWPDm\/ms\/au\/expire\/1406703163\/ip\/207.241.226.173\/signature\/633F307E778ECE701570849B6D95EF0610B4C315.213B3EA5C07596DB3C263CEC3C876FB742FC0C2E\/key\/yt5\/source\/youtube\/gcr\/us\/as\/fmp4_audio_clear%2Cwebm_audio_clear%2Cfmp4_sd_hd_clear%2Cwebm_sd_hd_clear%2Cwebm2_sd_hd_clear", "ptchn": "dJ9oJ2GUF8Vmb-G63ldGWg", "gut_tag": "\/4061\/ytpwatch\/3406642", "afv": true, "afv_ad_tag": "http:\/\/googleads.g.doubleclick.net\/pagead\/ads?ad_type=skippablevideo\u0026client=ca-pub-6219811747049371\u0026description_url=http%3A%2F%2Fwww.youtube.com%2Fvideo%2F<?php echo $_GET['v']; ?>\u0026hl=en\u0026host=ca-host-pub-4184977541492624\u0026ht_id=3660190\u0026loeid=940670,946013\u0026max_ad_duration=15000\u0026url=http%3A%2F%2Fwww.youtube.com%2Fvideo%2F<?php echo $_GET['v']; ?>\u0026video_cpm=6000000\u0026ytdevice=1\u0026yt_pt=APb3F29pydlet71zg4RDozCSiGCyFMNZT1qsgKczAk3WdQqNh4F0BnIoJPZ5NPNapZ-JZDJEiPTC2KHeg2YxZfoiCpyWHURzPbkgAhtzD93JNYauViBos4l_ziY6bH-E0tJwGRhOBk0RwWn_tHCL\u0026channel=yt_mpvid_Hu39qu4brxHm_Q7m%2Byt_cid_3406642%2Byt_no_ap%2Bytdevice_1%2Bafv_user_id_dJ9oJ2GUF8Vmb-G63ldGWg%2Bafv_user_acsreactions%2Bytel_detailpage%2Bytps_default%2BVertical_211%2Bafv_instream%2Bafv_instream_us", "adaptive_fmts": "bitrate=2213432\u0026size=1280x720\u0026url=<?php echo $video1; ?>\u0026type=video%2Fmp4%3B+codecs%3D%22avc1.4d401f%22\u0026lmt=1406320984921903\u0026clen=30347587\u0026itag=136\u0026index=709-1100\u0026init=0-708,bitrate=1106654\u0026size=854x480\u0026url=<?php echo $video1; ?>\u0026type=video%2Fmp4%3B+codecs%3D%22avc1.4d401e%22\u0026lmt=1406320982008364\u0026clen=14714810\u0026itag=135\u0026index=709-1100\u0026init=0-708,bitrate=605066\u0026size=640x360\u0026url=<?php echo $video1; ?>\u0026type=video%2Fmp4%3B+codecs%3D%22avc1.4d401e%22\u0026lmt=1406320979919750\u0026clen=7578868\u0026itag=134\u0026index=709-1100\u0026init=0-708,bitrate=255430\u0026size=426x240\u0026url=<?php echo $video1; ?>\u0026type=video%2Fmp4%3B+codecs%3D%22avc1.4d4015%22\u0026lmt=1406320976904468\u0026clen=4505867\u0026itag=133\u0026index=673-1064\u0026init=0-672,bitrate=110941\u0026size=256x144\u0026url=<?php echo $video1; ?>\u0026type=video%2Fmp4%3B+codecs%3D%22avc1.42c00c%22\u0026lmt=1406320975085345\u0026clen=2012530\u0026itag=160\u0026index=671-1062\u0026init=0-670,bitrate=129721\u0026url=<?php echo $video1; ?>\u0026type=audio%2Fmp4%3B+codecs%3D%22mp4a.40.2%22\u0026lmt=1406320972017975\u0026clen=2368101\u0026itag=140\u0026index=592-803\u0026init=0-591", "mpu": true, "ad_preroll": "1", "timestamp": 1406681563, "video_id": "<?php echo $_GET['v']; ?>", "shortform": true, "ad_channel_code_overlay": "yt_mpvid_Hu39qu4brxHm_Q7m,yt_cid_3406642,yt_no_ap,ytdevice_1,afv_user_id_dJ9oJ2GUF8Vmb-G63ldGWg,afv_user_acsreactions,ytel_detailpage,ytps_default,Vertical_211,afv_overlay,invideo_overlay_480x70_cat28", "dash": "1", "keywords": "Reactions,Dogs,Dog Butts,Sniffing,chemistry,aroma chemistry,pets,communication,dog smells butts,chemical senses,acs,american chemical society,science video,ifl science,dog videos", "no_get_video_log": "1", "excluded_ads": "2=1_2,2_2", "plid": "AAT_XpLpoGnoRzyB", "ad_logging_flag": 1, "instream_long": false, "idpj": "-5", "length_seconds": <?php echo $vidLength; ?>, "midroll_prefetch_size": 1, "title": "<?php echo $title; ?>", "vid": "<?php echo $_GET['v']; ?>", "fexp": "902408,924222,927622,934024,934030,940670,946013", "ttsurl": "http:\/\/www.youtube.com\/api\/timedtext?expire=1406706763\u0026v=<?php echo $_GET['v']; ?>\u0026asr_langs=de%2Cko%2Cja%2Cen%2Cfr%2Ces%2Cru%2Cit%2Cnl%2Cpt\u0026signature=829D3B02F8C32A0637C1BFBF676DD67598C5387B.A8BF4FEF375145168DF3BED826CE4158E85F3EFA\u0026sparams=asr_langs%2Ccaps%2Cv%2Cexpire\u0026caps=asr\u0026hl=en_US\u0026key=yttt1", "cc_module": "http:\/\/s.ytimg.com\/yts\/swfbin\/player-vflSotbD3\/subtitle_module.swf", "ldpj": "-35", "cc3_module": "1", "referrer": "http:\/\/www.youtube.com\/embed\/<?php echo $_GET['v']; ?>", "iv_invideo_url": "http:\/\/www.youtube.com\/annotations_invideo?cap_hist=1\u0026cta=2\u0026video_id=<?php echo $_GET['v']; ?>", "csi_page_type": "watch,watch7ad", "rmktEnabled": "1", "afv_instream_max": 15000, "oid": "DQwHBTIc-poR1tMSuxNSmg", "enablecsi": "1", "watermark": ",http:\/\/s.ytimg.com\/yts\/img\/watermark\/youtube_watermark-vflHX6b6E.png,http:\/\/s.ytimg.com\/yts\/img\/watermark\/youtube_hd_watermark-vflAzLcD6.png", "eventid": "20HYU_PNJIee-gPU5oLACw", "sdetail": "p:\/embed\/<?php echo $_GET['v']; ?>", "afv_ad_tag_restricted_to_instream": "http:\/\/googleads.g.doubleclick.net\/pagead\/ads?ad_type=skippablevideo\u0026client=ca-pub-6219811747049371\u0026description_url=http%3A%2F%2Fwww.youtube.com%2Fvideo%2F<?php echo $_GET['v']; ?>\u0026hl=en\u0026host=ca-host-pub-4184977541492624\u0026ht_id=3660190\u0026loeid=940670,946013\u0026max_ad_duration=15000\u0026url=http%3A%2F%2Fwww.youtube.com%2Fvideo%2F<?php echo $_GET['v']; ?>\u0026video_cpm=6000000\u0026ytdevice=1\u0026yt_pt=APb3F29pydlet71zg4RDozCSiGCyFMNZT1qsgKczAk3WdQqNh4F0BnIoJPZ5NPNapZ-JZDJEiPTC2KHeg2YxZfoiCpyWHURzPbkgAhtzD93JNYauViBos4l_ziY6bH-E0tJwGRhOBk0RwWn_tHCL\u0026channel=yt_mpvid_Hu39qu4brxHm_Q7m%2Byt_cid_3406642%2Byt_no_ap%2Bytdevice_1%2Bafv_user_id_dJ9oJ2GUF8Vmb-G63ldGWg%2Bafv_user_acsreactions%2Bytel_detailpage%2Bytps_default%2BVertical_211%2Bafv_instream%2Bafv_instream_us", "ptk": "RPMNetworks", "ad_device": 1, "ucid": "<?php echo $authorId; ?>", "url_encoded_fmt_stream_map": "type=video%2Fmp4%3B+codecs%3D%22avc1.64001F%2C+mp4a.40.2%22\u0026itag=22\u0026url=<?php echo $video1; ?>\u0026quality=hd720\u0026fallback_host=tc.v2.cache7.googlevideo.com,type=video%2Fwebm%3B+codecs%3D%22vp8.0%2C+vorbis%22\u0026itag=43\u0026url=<?php echo $video1; ?>\u0026quality=medium\u0026fallback_host=tc.v10.cache1.googlevideo.com,type=video%2Fmp4%3B+codecs%3D%22avc1.42001E%2C+mp4a.40.2%22\u0026itag=18\u0026url=<?php echo $video1; ?>\u0026quality=medium\u0026fallback_host=tc.v21.cache2.googlevideo.com,type=video%2Fx-flv\u0026itag=5\u0026url=<?php echo $video1; ?>\u0026quality=small\u0026fallback_host=tc.v21.cache4.googlevideo.com,type=video%2F3gpp%3B+codecs%3D%22mp4v.20.3%2C+mp4a.40.2%22\u0026itag=36\u0026url=<?php echo $video1; ?>\u0026quality=small\u0026fallback_host=tc.v15.cache2.googlevideo.com,type=video%2F3gpp%3B+codecs%3D%22mp4v.20.3%2C+mp4a.40.2%22\u0026itag=17\u0026url=<?php echo $video1; ?>\u0026quality=small\u0026fallback_host=tc.v6.cache1.googlevideo.com", "vq": "auto"}, "min_version": "8.0.0", "assets": {"js": "\/\/s.ytimg.com\/yts\/jsbin\/html5player-en_US-vflCGk6yw\/html5player.js", "css": "\/\/s.ytimg.com\/yts\/cssbin\/www-player-vfl_UOZc_.css", "html": "\/html5_player_template"}, "html5": false, "url_v8": "http:\/\/s.ytimg.com\/yts\/swfbin\/player-vflSotbD3\/cps.swf", "attrs": {"id": "movie_player"}, "params": {"allowscriptaccess": "always", "bgcolor": "#000000", "allowfullscreen": "true"}, "sts": 16275, "url": "http:\/\/s.ytimg.com\/yts\/swfbin\/player-vflSotbD3\/watch_as3.swf"};(function() {var encoded = [];for (var key in ytplayer.config.args) {encoded.push(encodeURIComponent(key) + '=' + encodeURIComponent(ytplayer.config.args[key]));}var swf = "      \u003cembed type=\"application\/x-shockwave-flash\"     s\u0072c=\"http:\/\/s.ytimg.com\/yts\/swfbin\/player-vflSotbD3\/watch_as3.swf\"     name=\"movie_player\"     id=\"movie_player\"    flashvars=\"__flashvars__\"     allowscriptaccess=\"always\" bgcolor=\"#000000\" allowfullscreen=\"true\"\u003e\n  \u003cnoembed\u003e\u003cdiv class=\"yt-alert yt-alert-default yt-alert-error  yt-alert-player\"\u003e  \u003cdiv class=\"yt-alert-icon\"\u003e\n    \u003cimg s\u0072c=\"http:\/\/s.ytimg.com\/yts\/img\/pixel-vfl3z5WfW.gif\" class=\"icon master-sprite yt-sprite\" alt=\"\"\u003e\n  \u003c\/div\u003e\n\u003cdiv class=\"yt-alert-buttons\"\u003e\u003c\/div\u003e\u003cdiv class=\"yt-alert-content\" role=\"alert\"\u003e    \u003cspan class=\"yt-alert-vertical-trick\"\u003e\u003c\/span\u003e\n    \u003cdiv class=\"yt-alert-message\"\u003e\n            You need Adobe Flash Player to watch this video. \u003cbr\u003e \u003ca href=\"http:\/\/get.adobe.com\/flashplayer\/\"\u003eDownload it from Adobe.\u003c\/a\u003e\n    \u003c\/div\u003e\n\u003c\/div\u003e\u003c\/div\u003e\u003c\/noembed\u003e\n\n";swf = swf.replace('__flashvars__', encoded.join('&'));document.getElementById("player-api").innerHTML = swf;ytplayer.config.loaded = true}());</script>


  </div>

  <div class="clear"></div>
</div>
<div id="content" class="  content-alignment      yt-card
">    <div id="watch7-container" class="">
    <div id="watch7-main-container">
      <div id="watch7-main" class="clearfix">
        <div id="watch7-content" class="watch-content " itemscope itemid="" itemtype="http://schema.org/VideoObject"
        >
              <link itemprop="url" href="http://www.youtube.com/watch?v=<?php echo $_GET['v']; ?>">
    <meta itemprop="name" content="<?php echo $title; ?>">
    <meta itemprop="description" content="<?php echo $descriptionBland; ?>">
    <meta itemprop="paid" content="False">

      <meta itemprop="channelId" content="<?php echo $authorId; ?>">
      <meta itemprop="videoId" content="<?php echo $_GET['v']; ?>">

      <meta itemprop="duration" content="PT2M28S">
      <meta itemprop="unlisted" content="False">

        <span itemprop="author" itemscope itemtype="http://schema.org/Person">
          <link itemprop="url" href="http://www.youtube.com/user/ACSReactions">
        </span>
        <span itemprop="author" itemscope itemtype="http://schema.org/Person">
          <link itemprop="url" href="https://plus.google.com/102363777671586241145">
        </span>

    <link itemprop="thumbnailUrl" href="http://i.ytimg.com/vi/<?php echo $_GET['v']; ?>/maxresdefault.jpg">
    <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
      <link itemprop="url" href="http://i.ytimg.com/vi/<?php echo $_GET['v']; ?>/maxresdefault.jpg">
      <meta itemprop="width" content="1280">
      <meta itemprop="height" content="720">
    </span>

      <link itemprop="embedURL" href="https://www.youtube.com/embed/<?php echo $_GET['v']; ?>">
      <meta itemprop="playerType" content="HTML5 Flash">
      <meta itemprop="width" content="1280">
      <meta itemprop="height" content="720">

      <meta itemprop="isFamilyFriendly" content="True">
      <meta itemprop="regionsAllowed" content="AD,AE,AF,AG,AI,AL,AM,AO,AQ,AR,AS,AT,AU,AW,AX,AZ,BA,BB,BD,BE,BF,BG,BH,BI,BJ,BL,BM,BN,BO,BQ,BR,BS,BT,BV,BW,BY,BZ,CA,CC,CD,CF,CG,CH,CI,CK,CL,CM,CN,CO,CR,CU,CV,CW,CX,CY,CZ,DE,DJ,DK,DM,DO,DZ,EC,EE,EG,EH,ER,ES,ET,FI,FJ,FK,FM,FO,FR,GA,GB,GD,GE,GF,GG,GH,GI,GL,GM,GN,GP,GQ,GR,GS,GT,GU,GW,GY,HK,HM,HN,HR,HT,HU,ID,IE,IL,IM,IN,IO,IQ,IR,IS,IT,JE,JM,JO,JP,KE,KG,KH,KI,KM,KN,KP,KR,KW,KY,KZ,LA,LB,LC,LI,LK,LR,LS,LT,LU,LV,LY,MA,MC,MD,ME,MF,MG,MH,MK,ML,MM,MN,MO,MP,MQ,MR,MS,MT,MU,MV,MW,MX,MY,MZ,NA,NC,NE,NF,NG,NI,NL,NO,NP,NR,NU,NZ,OM,PA,PE,PF,PG,PH,PK,PL,PM,PN,PR,PS,PT,PW,PY,QA,RE,RO,RS,RU,RW,SA,SB,SC,SD,SE,SG,SH,SI,SJ,SK,SL,SM,SN,SO,SR,SS,ST,SV,SX,SY,SZ,TC,TD,TF,TG,TH,TJ,TK,TL,TM,TN,TO,TR,TT,TV,TW,TZ,UA,UG,UM,US,UY,UZ,VA,VC,VE,VG,VI,VN,VU,WF,WS,YE,YT,ZA,ZM,ZW">

                <div id="watch7-speedyg-area">
      <div class="yt-alert yt-alert-actionable yt-alert-info hid " id="speedyg-template">  <div class="yt-alert-icon">
    <img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="icon master-sprite yt-sprite" alt="">
  </div>
<div class="yt-alert-buttons">  <a href="https://www.google.com/get/videoqualityreport/?v=<?php echo $_GET['v']; ?>" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-alert-info yt-uix-button-size-default" data-sessionlink="ei=20HYU_PNJIee-gPU5oLACw" id="speedyg-link" target="_blank"><span class="yt-uix-button-content">Find out why </span></a>
<button class="yt-uix-button yt-uix-button-size-default yt-uix-button-close close yt-uix-close" type="button" onclick=";return false;" data-close-parent-class="yt-alert"><span class="yt-uix-button-content">Close </span></button></div><div class="yt-alert-content" role="alert">    <span class="yt-alert-vertical-trick"></span>
    <div class="yt-alert-message">
    </div>
</div></div>
    </div>
  <div id="watch-header" class="">
        <div id="watch7-headline" class="clearfix">
    <h1 id="watch-headline-title" class="yt">
      


  


  <span id="eow-title" class="watch-title  " dir="ltr" title="<?php echo $title; ?>">
    <?php echo $title; ?>
  </span>

    </h1>
  </div>

      <div id="watch7-user-header" class=" spf-link "><a href="/channel/<?php echo $authorId; ?>" class="yt-user-photo  yt-uix-sessionlink" data-sessionlink="feature=watch&amp;ei=20HYU_PNJIee-gPU5oLACw" >    <span class="video-thumb  yt-thumb yt-thumb-48 g-hovercard"
        data-ytid="<?php echo $authorId; ?>"
      >
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <img src="<?php echo $authorImg; ?>" alt="<?php echo $author; ?>" width="48"  height="48" >
          <span class="vertical-align"></span>
        </span>
      </span>
    </span>
</a><div class="yt-user-info"><a href="/channel/<?php echo $authorId; ?>" class="g-hovercard yt-uix-sessionlink yt-user-name " data-sessionlink="feature=watch&amp;ei=20HYU_PNJIee-gPU5oLACw" dir="ltr" data-ytid="<?php echo $authorId; ?>" data-name="watch"><?php echo $author; ?></a><?php echo $authorVerifiedHtml; ?></div><span id="watch7-subscription-container"><span class=" yt-uix-button-subscription-container with-preferences" ><button class="yt-uix-button yt-uix-button-size-default yt-uix-button-subscribe-branded yt-uix-button-has-icon yt-uix-subscription-button yt-can-buffer" type="button" onclick=";return false;" aria-live="polite" aria-busy="false" aria-role="button" data-sessionlink="feature=watch&amp;ei=20HYU_PNJIee-gPU5oLACw&amp;ved=CBcQmys" data-channel-external-id="<?php echo $authorId; ?>" data-href="https://accounts.google.com/ServiceLogin?continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Ffeature%3Dsubscribe%26next%3D%252Fchannel%252F<?php echo $authorId; ?>%26app%3Ddesktop%26action_handle_signin%3Dtrue%26continue_action%3DQUFFLUhqbV91eFcyYUlDX050SUtDX0JvT2JBRThFTUZ5UXxBQ3Jtc0ttdXZaV3I0WUw5c19iQW5ERU9TTmRfdXV6a0xmQUI1aVNYWWpGN0RObTlibTFWbnJ5aV9KcmhOQ3lOTWdwUnhtcmFhUVI4NjVBN3FWRlV2R0dvZGpHeEsyZzNOSDM0bHNSb05BUVYtTFFRSzh0Q3d1RGZwLThGc1BubC1uUzBQdjBXdlZoVHgxbU9oYXhzZFdfdzRzVjhEM3E0NGhSZ0Jab3hzRkVyT21FQVFfS3laLVM3TGo1dTQ4Y2dGeV9OdGFaRjJCVHA%253D%26hl%3Den&amp;uilel=3&amp;service=youtube&amp;passive=true&amp;hl=en" data-style-type="branded"><span class="yt-uix-button-icon-wrapper"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-icon yt-uix-button-icon-subscribe yt-sprite" alt=""></span><span class="yt-uix-button-content"><span class="subscribe-label" aria-label="Subscribe">Subscribe</span><span class="subscribed-label" aria-label="Unsubscribe">Subscribed</span><span class="unsubscribe-label" aria-label="Unsubscribe">Unsubscribe</span> </span></button><button class="yt-uix-button yt-uix-button-size-default yt-uix-button-default yt-uix-button-empty yt-uix-button-has-icon yt-uix-subscription-preferences-button" type="button" onclick=";return false;" data-channel-external-id="<?php echo $authorId; ?>"><span class="yt-uix-button-icon-wrapper"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-icon yt-uix-button-icon-subscription-preferences yt-sprite" alt=""></span></button><span class="yt-subscription-button-subscriber-count-branded-horizontal" title="0">0</span>  <span class="yt-subscription-button-disabled-mask" title=""></span>
  
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
      <img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img yt-sprite" alt="Loading icon">

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

</span></span><div id="watch7-views-info"><div class="watch-view-count"><?php echo $viewCount; ?></div>
  <div class="video-extras-sparkbars">
    <div class="video-extras-sparkbar-likes" style="width: 100.0%"></div>
    <div class="video-extras-sparkbar-dislikes" style="width: 0.0%"></div>
  </div>
    <span class="video-extras-likes-dislikes">
        <img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="icon-watch-stats-like yt-sprite" title="Like" alt="">
  <span class="likes-count"><?php echo $likeCount; ?></span>

      &nbsp;&nbsp;&nbsp;
        <img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="icon-watch-stats-dislike yt-sprite" title="Dislike" alt="">
  <span class="dislikes-count"><?php echo $dislikeCount; ?></span>

    </span>
</div></div>
  </div>
        <div id="watch7-action-buttons" class="clearfix">
    <div id="watch7-sentiment-actions">
      



<span id="watch-like-dislike-buttons" class="yt-uix-button-group " data-vote-state="2" data-button-toggle-group="optional"><span class="yt-uix-clickcard"><button class="yt-uix-button yt-uix-button-size-default yt-uix-button-text yt-uix-button-has-icon yt-uix-clickcard-target yt-uix-tooltip" type="button" onclick=";return false;" id="watch-like" title="" data-orientation="vertical" data-position="bottomright" data-like-tooltip="I like this" data-force-position="true" data-unlike-tooltip="Unlike" data-button-toggle="true"><span class="yt-uix-button-icon-wrapper"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-icon yt-uix-button-icon-watch-like yt-sprite" alt=""></span><span class="yt-uix-button-content">Like </span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
      <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your Google Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to like <span class="yt-user-name  g-hovercard" dir="ltr" data-ytid="<?php echo $authorId; ?>"><?php echo $author; ?></span>'s video.

    </div>
      <ul class="watch7-hovercard-icon-strip clearfix">
        <li class="watch7-hovercard-icon">
          <div class="watch7-hovercard-youtube-icon"></div>
        </li>
        <li class="watch7-hovercard-icon">
          <div class="watch7-hovercard-gplus-icon"></div>
        </li>
        <li class="watch7-hovercard-icon">
          <div class="watch7-hovercard-gmail-icon"></div>
        </li>
        <li class="watch7-hovercard-icon">
          <div class="watch7-hovercard-picasa-icon"></div>
        </li>
        <li class="watch7-hovercard-icon">
          <div class="watch7-hovercard-chrome-icon"></div>
        </li>
      </ul>
    <div class="watch7-hovercard-account-line">
      <a href="https://accounts.google.com/ServiceLogin?continue=https%3A%2F%2Fwww.youtube.com%2Fsignin%3Ffeature%3D__FEATURE__%26next%3D%252Fwatch%253Fv%253D<?php echo $_GET['v']; ?>%26hl%3Den%26action_handle_signin%3Dtrue%26app%3Ddesktop&amp;uilel=3&amp;service=youtube&amp;passive=true&amp;hl=en" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary yt-uix-button-size-default" data-sessionlink="ei=20HYU_PNJIee-gPU5oLACw"><span class="yt-uix-button-content">Sign in </span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button class="yt-uix-button yt-uix-button-size-default yt-uix-button-text yt-uix-button-empty yt-uix-button-has-icon yt-uix-clickcard-target yt-uix-tooltip" type="button" onclick=";return false;" id="watch-dislike" title="I dislike this" data-orientation="vertical" data-position="bottomright" data-force-position="true" data-button-toggle="true"><span class="yt-uix-button-icon-wrapper"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-icon yt-uix-button-icon-watch-dislike yt-sprite" alt="I dislike this"></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
      <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your Google Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to dislike <span class="yt-user-name  g-hovercard" dir="ltr" data-ytid="<?php echo $authorId; ?>"><?php echo $author; ?></span>'s video.

    </div>
      <ul class="watch7-hovercard-icon-strip clearfix">
        <li class="watch7-hovercard-icon">
          <div class="watch7-hovercard-youtube-icon"></div>
        </li>
        <li class="watch7-hovercard-icon">
          <div class="watch7-hovercard-gplus-icon"></div>
        </li>
        <li class="watch7-hovercard-icon">
          <div class="watch7-hovercard-gmail-icon"></div>
        </li>
        <li class="watch7-hovercard-icon">
          <div class="watch7-hovercard-picasa-icon"></div>
        </li>
        <li class="watch7-hovercard-icon">
          <div class="watch7-hovercard-chrome-icon"></div>
        </li>
      </ul>
    <div class="watch7-hovercard-account-line">
      <a href="https://accounts.google.com/ServiceLogin?continue=https%3A%2F%2Fwww.youtube.com%2Fsignin%3Ffeature%3D__FEATURE__%26next%3D%252Fwatch%253Fv%253D<?php echo $_GET['v']; ?>%26hl%3Den%26action_handle_signin%3Dtrue%26app%3Ddesktop&amp;uilel=3&amp;service=youtube&amp;passive=true&amp;hl=en" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary yt-uix-button-size-default" data-sessionlink="ei=20HYU_PNJIee-gPU5oLACw"><span class="yt-uix-button-content">Sign in </span></a>
    </div>
  </div>
</span></span>
    </div>
    <div id="watch7-secondary-actions"  class="yt-uix-button-group" data-button-toggle-group="required">
      <span ><button class="yt-uix-button yt-uix-button-size-default yt-uix-button-text action-panel-trigger  yt-uix-button-toggled yt-uix-tooltip" type="button" onclick=";return false;" title="" data-trigger-for="action-panel-details" data-button-toggle="true"><span class="yt-uix-button-content">About </span></button></span>
        <span ><button class="yt-uix-button yt-uix-button-size-default yt-uix-button-text action-panel-trigger   yt-uix-tooltip" type="button" onclick=";return false;" title="" data-trigger-for="action-panel-share" data-button-toggle="true"><span class="yt-uix-button-content">Share </span></button></span>

      <span class="yt-uix-clickcard"><button class="yt-uix-button yt-uix-button-size-default yt-uix-button-text action-panel-trigger addto-button  yt-uix-clickcard-target yt-uix-tooltip" type="button" onclick=";return false;" title="" data-orientation="vertical" data-upsell="playlist" data-trigger-for="action-panel-none-addto" data-position="bottomleft" data-button-toggle="true"><span class="yt-uix-button-content">Add to </span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
      <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your Google Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to add <span class="yt-user-name  g-hovercard" dir="ltr" data-ytid="<?php echo $authorId; ?>"><?php echo $author; ?></span>'s video to your playlist.

    </div>
      <ul class="watch7-hovercard-icon-strip clearfix">
        <li class="watch7-hovercard-icon">
          <div class="watch7-hovercard-youtube-icon"></div>
        </li>
        <li class="watch7-hovercard-icon">
          <div class="watch7-hovercard-gplus-icon"></div>
        </li>
        <li class="watch7-hovercard-icon">
          <div class="watch7-hovercard-gmail-icon"></div>
        </li>
        <li class="watch7-hovercard-icon">
          <div class="watch7-hovercard-picasa-icon"></div>
        </li>
        <li class="watch7-hovercard-icon">
          <div class="watch7-hovercard-chrome-icon"></div>
        </li>
      </ul>
    <div class="watch7-hovercard-account-line">
      <a href="https://accounts.google.com/ServiceLogin?continue=https%3A%2F%2Fwww.youtube.com%2Fsignin%3Ffeature%3D__FEATURE__%26next%3D%252Fwatch%253Fv%253D<?php echo $_GET['v']; ?>%26hl%3Den%26action_handle_signin%3Dtrue%26app%3Ddesktop&amp;uilel=3&amp;service=youtube&amp;passive=true&amp;hl=en" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary yt-uix-button-size-default" data-sessionlink="ei=20HYU_PNJIee-gPU5oLACw"><span class="yt-uix-button-content">Sign in </span></a>
    </div>
  </div>
</span>

        <span ><button class="yt-uix-button yt-uix-button-size-default yt-uix-button-text yt-uix-button-empty yt-uix-button-has-icon action-panel-trigger   yt-uix-tooltip" type="button" onclick=";return false;" title="Transcript" data-trigger-for="action-panel-transcript" data-button-toggle="true"><span class="yt-uix-button-icon-wrapper"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-icon yt-uix-button-icon-action-panel-transcript yt-sprite" alt="Transcript"></span></button></span>

        <span ><button class="yt-uix-button yt-uix-button-size-default yt-uix-button-text yt-uix-button-empty yt-uix-button-has-icon action-panel-trigger   yt-uix-tooltip" type="button" onclick=";return false;" title="Statistics" data-trigger-for="action-panel-stats" data-button-toggle="true"><span class="yt-uix-button-icon-wrapper"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-icon yt-uix-button-icon-action-panel-stats yt-sprite" alt="Statistics"></span></button></span>

      <span ><button class="yt-uix-button yt-uix-button-size-default yt-uix-button-text yt-uix-button-empty yt-uix-button-has-icon action-panel-trigger   yt-uix-tooltip" type="button" onclick=";return false;" title="Report" data-trigger-for="action-panel-report" data-button-toggle="true"><span class="yt-uix-button-icon-wrapper"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-icon yt-uix-button-icon-action-panel-report yt-sprite" alt="Report"></span></button></span>
    </div>
  </div>

        <div id="watch7-action-panels" class="yt-uix-button-panel      yt-card-has-expander">
      <div id="action-panel-details" class="action-panel-content       yt-card-has-expander">
    <div id="watch-description" class="yt-uix-expander yt-uix-expander-collapsed yt-uix-button-panel">
      <div id="watch-description-content">
        <div id="watch-description-clip">
          <p id="watch-uploader-info">
              <strong>Published on <?php echo $vidDate; ?></strong>
          </p>
          <div id="watch-description-text">
            <p id="eow-description" ><?php echo $description; ?></p>
          </div>
              <div id="watch-description-extras" class="yt-uix-expander-body">
    <ul class="watch-extras-section">
          <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>

      <li>
        <h4 class="title">
Category
        </h4>
        <div class="content">
              <p id="eow-category">
    <a href="/" class=" yt-uix-sessionlink spf-link " data-sessionlink="ei=20HYU_PNJIee-gPU5oLACw"><?php echo $genre; ?></a>
  </p>

        </div>
      </li>
      <li>
        <h4 class="title">License</h4>
        <div class="content">
            <p id="eow-reuse">
Standard YouTube License
  </p>

        </div>
      </li>
    </ul>
  </div>

        </div>
          <ul id="watch-description-extra-info">
            
          </ul>
      </div>
        <div class="toggle-wrapper yt-uix-expander-head">
    <div class="yt-uix-expander-collapsed-body">
        <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-text toggle-button" type="button" onclick=";return false;"><span class="yt-uix-button-content">Show more </span></button>

    </div>
    <div class="yt-uix-expander-body">
        <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-text toggle-button" type="button" onclick=";return false;"><span class="yt-uix-button-content">Show less </span></button>

    </div>
  </div>

    </div>
  </div>

      <div id="action-panel-share" class="action-panel-content hid">
      <div id="watch-actions-share-loading">
    <div class="action-panel-loading">
        <p class="yt-spinner">
      <img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img yt-sprite" alt="Loading icon">

    <span class="yt-spinner-message">
Loading...
    </span>
  </p>

    </div>
  </div>
  <div id="watch-actions-share-panel"></div>

  </div>

        <div id="action-panel-addto" class="action-panel-content hid" data-auth-required="true">
    <div class="action-panel-loading">
        <p class="yt-spinner">
      <img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img yt-sprite" alt="Loading icon">

    <span class="yt-spinner-message">
Loading...
    </span>
  </p>

    </div>
  </div>

        <div id="action-panel-transcript" class="action-panel-content hid">
    <div id="watch-actions-transcript-loading">
      <div class="action-panel-loading">
          <p class="yt-spinner">
      <img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img yt-sprite" alt="Loading icon">

    <span class="yt-spinner-message">
Loading...
    </span>
  </p>

      </div>
    </div>
      <div id="watch-actions-transcript" class="watch-actions-panel hid">
      <div id="caption-line-template" class="hid">
    <!--
    <div class="caption-line-time">
      <div class="caption-line-start">__start__</div>
    </div>
    <div class="editable-line-text">
      <span class="editable-line-text-original">__original__</span>
      <label class="editable-line-text-current hid">__current__</label>
      <textarea class="editable-line-text-input hid">__input__</textarea>
    </div>
    -->
  </div>



    <div id="watch-transcript-container" class="yt-scrollbar" >
      <div id="watch-transcript-not-found" class="hid">
The interactive transcript could not be loaded.
      </div>

      
    </div>
  </div>

  </div>

      <div id="action-panel-stats" class="action-panel-content hid">
    <div class="action-panel-loading">
        <p class="yt-spinner">
      <img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img yt-sprite" alt="Loading icon">

    <span class="yt-spinner-message">
Loading...
    </span>
  </p>

    </div>
  </div>

      <div id="action-panel-report" class="action-panel-content hid" data-auth-required="true">
    <div class="action-panel-loading">
        <p class="yt-spinner">
      <img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img yt-sprite" alt="Loading icon">

    <span class="yt-spinner-message">
Loading...
    </span>
  </p>

    </div>
  </div>

      <div id="action-panel-login" class="action-panel-content hid">
    <div class="action-panel-login">
      <a href="https://accounts.google.com/ServiceLogin?continue=https%3A%2F%2Fwww.youtube.com%2Fsignin%3Ffeature%3D__FEATURE__%26next%3D%252Fwatch%253Fv%253D<?php echo $_GET['v']; ?>%26hl%3Den%26action_handle_signin%3Dtrue%26app%3Ddesktop&amp;uilel=3&amp;service=youtube&amp;passive=true&amp;hl=en" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-default yt-uix-button-size-default" data-sessionlink="ei=20HYU_PNJIee-gPU5oLACw"><span class="yt-uix-button-content">Sign in </span></a>
    </div>
  </div>

  <div id="action-panel-ratings-disabled" class="action-panel-content hid">
      <div id="watch-actions-ratings-disabled" class="watch-actions-panel">
    <em>Ratings have been disabled for this video.</em>
  </div>

  </div>

  <div id="action-panel-rental-required" class="action-panel-content hid">
      <div id="watch-actions-rental-required" class="watch-actions-panel">
    <strong>Rating is available when the video has been rented.</strong>
  </div>

  </div>

  <div id="action-panel-error" class="action-panel-content hid">
    <div class="action-panel-error">
      This feature is not available right now. Please try again later.
    </div>
  </div>

    <div id="watch7-action-panel-footer">
      <hr class="yt-horizontal-rule ">
    </div>
  </div>


          <div class="cmt_iframe_holder" data-href="http://www.youtube.com/watch?v=<?php echo $_GET['v']; ?>" data-viewtype="FILTERED" style="display: none;"></div>

  <div id="watch-discussion" class="     yt-card-has-expander">
              
  
  <div class="comments-iframe-container">
    <div id="comments-test-iframe"></div>
    <div id="distiller-spinner" class="action-panel-loading">
        <p class="yt-spinner">
      <img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img yt-sprite" alt="Loading icon">

    <span class="yt-spinner-message">
Loading...
    </span>
  </p>

    </div>
  </div>


  </div>


        </div>
        <div id="watch7-sidebar" class="watch-sidebar">
                <div id="watch7-sidebar-playlist">
      
    </div>
  <div id="watch7-sidebar-contents" class="watch-sidebar-gutter       yt-card-has-expander">
    <div id="watch7-sidebar-offer">
      
    </div>

    <div id="watch7-sidebar-discussion"></div>

    <div id="watch7-sidebar-ads">
              <div id="watch-channel-brand-div" class="" >
      <div id="watch-channel-brand-div-text">
Advertisement
      </div>
      <div id="google_companion_ad_div">
      </div>
    </div>


    </div>

    <div id="watch7-sidebar-modules">
                <div class="watch-sidebar-section">
    <div class="watch-sidebar-body">
      <ul id="watch-related" class="video-list">
          <?php
foreach ($dataVid['recommendedVideos'] as $key => $video) {
if ($video['lengthSeconds'] > 3600) {
$length = ltrim(gmdate("H:i:s", $video['lengthSeconds']),"0");
} else {
$lengthM = ltrim(gmdate("i", $video['lengthSeconds']),"0");
$lengthS = gmdate("s", $video['lengthSeconds']);

// Prevent things like :48 length
if ($lengthM == "") {
$lengthM = "0";
}

$length = $lengthM . ":" . $lengthS;
}

echo '<li class="video-list-item related-list-item">  <a href="/watch?v=' . $video['videoId'] . '" class=" related-video spf-link  yt-uix-sessionlink"  data-sessionlink="feature=relmfu&amp;ei=20HYU_PNJIee-gPU5oLACw&amp;ved=CAMQzRooAA"><span class="yt-uix-simple-thumb-wrap yt-uix-simple-thumb-related" data-vid="' . $video['videoId'] . '"><img data-thumb="//i.ytimg.com/vi/' . $video['videoId'] . '/default.jpg" aria-hidden="true" src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" width="120" height="90" ><span class="video-time">' . $length . '</span>

  <button class="yt-uix-button yt-uix-button-size-small yt-uix-button-default yt-uix-button-empty yt-uix-button-has-icon addto-button video-actions spf-nolink hide-until-delayloaded addto-watch-later-button-sign-in yt-uix-tooltip" type="button" onclick=";return false;" title="Watch Later" data-video-ids="' . $video['videoId'] . '" data-button-menu-id="shared-addto-watch-later-login"><span class="yt-uix-button-icon-wrapper"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-icon yt-uix-button-icon-addto yt-sprite" alt="Watch Later"></span><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-arrow yt-sprite" alt=""></button>
</span>  <span dir="ltr" class="title" title="Marijuana Chemistry - Reactions">
    ' . $video['title'] . '
  </span>
    <span class="stat attribution">
      <span class="g-hovercard"
          data-ytid="' . $video['authorId'] . '"
          data-name="relmfu"
        >
        by <b><span class=" g-hovercard" data-ytid="' . $video['authorId'] . '">' . $video['author'] . '</span></b>
      </span>
    </span>
    <span class="stat view-count">' . number_format($video['viewCount']) . ' views</span>
</a>
</li>';
}
?>
      </ul>
    </div>   </div> 

    </div>
  </div>

        </div>
      </div>
    </div>

    <div id="watch7-hidden-extras">
        <div style="visibility: hidden; height: 0px; padding: 0px; overflow: hidden;">
      <img src="//www.youtube-nocookie.com/gen_204?attributionpartner=RPMNetworks" border="0" width="1" height="1">
  </div>

    </div>
  </div>

</div></div></div></div>  <div id="footer-container" class="yt-base-gutter"><div id="footer"><div id="footer-main"><div id="footer-logo"><a href="/" title="YouTube home"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="footer-logo-icon yt-sprite" alt=""></a></div>  <ul class="pickers yt-uix-button-group" data-button-toggle-group="optional">
      <li>
            <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-default yt-uix-button-has-icon" type="button" onclick=";return false;" id="yt-picker-language-button" data-button-menu-id="arrow-display" data-picker-key="language" data-button-action="yt.www.picker.load" data-picker-position="footer" data-button-toggle="true"><span class="yt-uix-button-icon-wrapper"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-icon yt-uix-button-icon-footer-language yt-sprite" alt=""></span><span class="yt-uix-button-content">  <span class="yt-picker-button-label">
Language:
  </span>
  English
 </span><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-arrow yt-sprite" alt=""></button>


      </li>
      <li>
            <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-default" type="button" onclick=";return false;" id="yt-picker-country-button" data-button-menu-id="arrow-display" data-picker-key="country" data-button-action="yt.www.picker.load" data-picker-position="footer" data-button-toggle="true"><span class="yt-uix-button-content">  <span class="yt-picker-button-label">
Country:
  </span>
  Worldwide
 </span><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-arrow yt-sprite" alt=""></button>


      </li>
      <li>
            <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-default" type="button" onclick=";return false;" id="yt-picker-safetymode-button" data-button-menu-id="arrow-display" data-picker-key="safetymode" data-button-action="yt.www.picker.load" data-picker-position="footer" data-button-toggle="true"><span class="yt-uix-button-content">  <span class="yt-picker-button-label">
Safety:
  </span>
Off
 </span><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-arrow yt-sprite" alt=""></button>


      </li>
  </ul>
      <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-default yt-uix-button-has-icon yt-uix-button-reverse yt-google-help-link inq-no-click " type="button" onclick=";return false;" id="google-help" data-ghelp-anchor="google-help" data-ghelp-tracking-param=""><span class="yt-uix-button-icon-wrapper"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-icon yt-uix-button-icon-questionmark yt-sprite" alt=""></span><span class="yt-uix-button-content">Help
 </span></button>
      <div id="yt-picker-language-footer" class="yt-picker" style="display: none">
      <p class="yt-spinner">
      <img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img yt-sprite" alt="Loading icon">

    <span class="yt-spinner-message">
Loading...
    </span>
  </p>

  </div>

      <div id="yt-picker-country-footer" class="yt-picker" style="display: none">
      <p class="yt-spinner">
      <img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img yt-sprite" alt="Loading icon">

    <span class="yt-spinner-message">
Loading...
    </span>
  </p>

  </div>

      <div id="yt-picker-safetymode-footer" class="yt-picker" style="display: none">
      <p class="yt-spinner">
      <img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img yt-sprite" alt="Loading icon">

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
      <a href="https://accounts.google.com/ServiceLogin?continue=https%3A%2F%2Fwww.youtube.com%2Fsignin%3Ffeature%3Dplaylist%26next%3D%252Fwatch%253Fv%253D<?php echo $_GET['v']; ?>%26hl%3Den%26action_handle_signin%3Dtrue%26app%3Ddesktop&uilel=3&service=youtube&passive=true&hl=en" class="sign-in-link">Sign in</a> to add this to Watch Later

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
<script>spf.script.path({'www/': '//s.ytimg.com/yts/jsbin/www-en_US-vfl0MqD-i/'});var ytdepmap = {"www/base": null, "www/common": "www/base", "www/watch": "www/common", "www/videomanager": "www/common", "www/subscriptionmanager": "www/common", "www/results_starwars": "www/common", "www/results_star_trek": "www/common", "www/results": "www/common", "www/results_harlemshake": "www/common", "www/results_fibonacci": "www/common", "www/promo_join_network": "www/common", "www/legomap": "www/common", "www/feed": "www/common", "www/experiments": "www/common", "www/downloadreports": "www/common", "www/dashboard": "www/common", "www/channels": "www/common", "www/channels_accountupload": "www/common", "www/watch_webdrivertorso": "www/watch", "www/watch_videoshelf": "www/watch", "www/watch_transcript": "www/watch", "www/watch_speedyg": "www/watch", "www/watch_promos": "www/watch", "www/watch_missilecommand": "www/watch", "www/watch_live": "www/watch", "www/watch_editor": "www/watch", "www/watch_edit": "www/watch", "www/watch_commentsrealtime": "www/watch", "www/watch_commentsmoderation": "www/watch", "www/watch_autoplayrenderer": "www/watch", "www/channels_edit": "www/channels"};spf.script.declare(ytdepmap);</script><script>if (window.ytcsi) {window.ytcsi.tick("je", null, '');}</script>      <script>
    yt.setConfig({
      'VIDEO_ID': "<?php echo $_GET['v']; ?>",
      'THUMB_NON_DELAY_LOAD_COUNT': 0,
      'THUMB_LOADER_PAUSE_MS': 0,
      'THUMB_LOADER_GROUP_PX': 400,
      'THUMB_LOADER_IGNORE_FOLD': false,
      'WAIT_TO_DELAYLOAD_FRAME_CSS': true,
      'IS_UNAVAILABLE_PAGE': false,

      'JS_PAGE_MODULES': [
        'www/watch',
          'www/watch_transcript',
          'www/watch_speedyg',
        ''       ],



      'REPORTVIDEO_JS': "\/\/s.ytimg.com\/yts\/jsbin\/www-reportvideo-vflmLyfoB\/www-reportvideo.js",
      'REPORTVIDEO_CSS': "\/\/s.ytimg.com\/yts\/cssbin\/www-watch-reportvideo-vflKz2sX_.css",




      'WATCH_MISSILECOMMAND_JS': "\/\/s.ytimg.com\/yts\/jsbin\/www-watch-missilecommand-vfljGpXiH\/www-watch-missilecommand.js",
      'WATCH_MISSILECOMMAND_CSS': "\/\/s.ytimg.com\/yts\/cssbin\/www-watch-missile-command-vfl9eaIzr.css",

      'ENABLE_AUTO_LARGE': true    });


    yt.setConfig({'EMBED_HTML_TEMPLATE': "\u003ciframe width=\"__width__\" height=\"__height__\" src=\"__url__\" frameborder=\"0\" allowfullscreen\u003e\u003c\/iframe\u003e",'EMBED_HTML_URL': "\/\/www.youtube.com\/embed\/__videoid__",'FLASH_UPGRADE': "\u003cdiv class=\"yt-alert yt-alert-default yt-alert-error  yt-alert-player\"\u003e  \u003cdiv class=\"yt-alert-icon\"\u003e\n    \u003cimg s\u0072c=\"http:\/\/s.ytimg.com\/yts\/img\/pixel-vfl3z5WfW.gif\" class=\"icon master-sprite yt-sprite\" alt=\"\"\u003e\n  \u003c\/div\u003e\n\u003cdiv class=\"yt-alert-buttons\"\u003e\u003c\/div\u003e\u003cdiv class=\"yt-alert-content\" role=\"alert\"\u003e    \u003cspan class=\"yt-alert-vertical-trick\"\u003e\u003c\/span\u003e\n    \u003cdiv class=\"yt-alert-message\"\u003e\n            You need to upgrade your Adobe Flash Player to watch this video. \u003cbr\u003e \u003ca href=\"http:\/\/get.adobe.com\/flashplayer\/\"\u003eDownload it from Adobe.\u003c\/a\u003e\n    \u003c\/div\u003e\n\u003c\/div\u003e\u003c\/div\u003e",'PLAYER_FALLBACK': "The Adobe Flash Player or an HTML5 supported browser is required for video playback. \u003cbr\u003e \u003ca href=\"http:\/\/get.adobe.com\/flashplayer\/\"\u003eGet the latest Flash Player\u003c\/a\u003e \u003cbr\u003e \u003ca href=\"\/html5\"\u003eLearn more about upgrading to an HTML5 browser\u003c\/a\u003e",'QUICKTIME_FALLBACK': "The Adobe Flash Player or QuickTime is required for video playback. \u003cbr\u003e \u003ca href=\"http:\/\/get.adobe.com\/flashplayer\/\"\u003eGet the latest Flash Player\u003c\/a\u003e \u003cbr\u003e \u003ca href=\"http:\/\/www.apple.com\/quicktime\/download\/\"\u003eGet the latest version of QuickTime\u003c\/a\u003e"});

    yt.setConfig({
      'TIMING_WFF': true,
      'YPC_CAN_RATE_VIDEO': true,






        'RELATED_PLAYER_ARGS': {"rvs": "id=4ukdUDCE56c\u0026length_seconds=173\u0026title=Marijuana+Chemistry+-+Reactions\u0026author=Reactions\u0026session_data=feature%3Dendscreen,id=Kq7I-Rt2SnY\u0026length_seconds=170\u0026title=How+does+Tylenol+work%3F+The+truth+is%2C+we+don%27t+know...+-+Reactions\u0026author=Reactions\u0026session_data=feature%3Dendscreen,id=YuJOhpNS0IY\u0026length_seconds=146\u0026title=The+Science+of+Caffeine%3A+The+World%27s+Most+Popular+Drug+-+Reactions\u0026author=Reactions\u0026session_data=feature%3Dendscreen,id=-rlapUkWCSM\u0026length_seconds=265\u0026title=Ice+Cream+Science+-+Reactions\u0026author=Reactions\u0026session_data=feature%3Dendscreen,id=ReGfd_s9gXA\u0026length_seconds=228\u0026title=4+Chemistry+Life+Hacks+for+Everyday+Problems+-+Reactions\u0026author=Reactions\u0026session_data=feature%3Dendscreen,id=54-rMC_67TM\u0026length_seconds=199\u0026title=Sexy+Chem%3A+4+Ways+Chemistry+Transformed+Sex+-+Reactions\u0026author=Reactions\u0026session_data=feature%3Dendscreen,id=kb-XDGcAuLM\u0026length_seconds=115\u0026title=Raychelle+Burks+on+Poisons%2C+Medicine%2C+and+Communicating+Science+-+Reaction\u0026author=Reactions\u0026session_data=feature%3Dendscreen,id=bAIwFaPycaU\u0026length_seconds=199\u0026title=4+Science+Secrets+About+Money+-+Reactions\u0026author=Reactions\u0026session_data=feature%3Dendscreen,id=vFZlxQU0Pyk\u0026length_seconds=160\u0026title=Why+Do+We+Get+Allergies%3F+-+Reactions\u0026author=Reactions\u0026session_data=feature%3Dendscreen,id=nPHegSulI_M\u0026length_seconds=392\u0026title=The+Chemistry+of+Fireworks+-+Reactions\u0026author=Reactions\u0026session_data=feature%3Dendscreen,id=C5RZRkhk0OM\u0026length_seconds=148\u0026title=Here+Are+a+Bunch+of+Chemistry+Jokes+-+Reactions\u0026author=Reactions\u0026session_data=feature%3Dendscreen,id=Gnqjh-L4e9g\u0026length_seconds=273\u0026title=4+Amazing+Science+Facts+about+Motherhood+-+Reactions\u0026author=Reactions\u0026session_data=feature%3Dendscreen"},




          'BG_P': "E3hifKojI8r\/5h1a88UTiB6eXsr\/ev5t6fil8RfhVl6S9nNz23h35cbpxRA2hJYszA+pXhN4brinXlZoGo6aJDUj9DltjhW7Oeo\/QLaA1A4agF6qoRLsiNtV\/9K2JRD1vaiNhFBfO6m6zo+aKc4MFkE909deunsYCi\/M9QHfEmW3jom5p85veYJjWI3C+EnPqP4cqv\/Q8yGZBpa64FyyKuSJEk2qRnb+u93nIETBY4XJlAMT+zy47B03s2+r6UK7yK2eBnfye0rps\/fd4kOzCuHU48fmuzhfWDE7j+RFirfHvRzCw7Tffhu\/iXmzfyC5q76hW8WkqIhEAjdK9ixtR8QnsbF9Q6iYtKt5kwYidnnAe+TdaCUgHAt2vvAMMNu3xyjIpaX6463TAxO3sOCR\/PiDFR8+q17CsZkn7oXUBbrRAC\/2NXFQV3V\/BsKF\/1tdFmoUIhdeQpTvGF+Zaaq7Ff+E9KWbVCoPC0L1\/a0V\/vKJJpgtPKUax3obA3FePNtxpBGcpVvysSkglf5iExl+wTZomRqwfV13tW+A+ZXlqUsUUeEtegkFqq8dhycy4w9vyYZG3Yl54G6qQzrQuaaoNRYIKR\/izHzf+swesjxUG5DquUSWE0gqDkX3GHFiIIHO49v2St0jaLvNGHZaXID4JbNlIhRk0JtKGpLqBYoklWqazTYMsQgP24OpEvF7bxB3rSACeZtQIFAaczYA\/eY5ipgrmTFysOo0p+GePYTxeUyp9OkSNovkOR30QUm6ot65eysPKUVlH0Igm8ZknDIEwmShdwDCnSUo37ABBOAYioHP5Wy9vhL5BMqpU1JT\/eUfEtbSmH6fSb83HS8ruC6tzIJEFp8G99DjJIFiUXLSeiGrTZNDlhP8tP5jwPUoT7CKiSFnmdi0bb5uM9TOIxLPhKIqL2SMZu9OSOroZS92LtoebG1n+9ifZsMp9XdOWbXLAorR3cV6NQdeBu\/GwH1yPr\/oRSvi68joZcjvYxYBZdUN5PhRU4QdmBLDdW+r8wEf9+CvOrXXlvyl1syVjvxzdLMzSOyoljAUmO\/olH4CGg2btg4Cao1BEgzvWoVox50WTT7AFl+PUEMcG+dF5eSMJGSpY1a3Ocgs\/D2sGpRMO8SgvIphrKyvBDzwal4Rj\/AJejdluo2YVvdw4WaD4AelF5J5y08PjEocgydBtXIQUFNlw9XeDnZKvLUtPjB\/yuOhRyxC1TDaFOGliuNSNJKzZK\/8oPYa1UZdy6DeXlvDjuWVvMJd7x7Li592x6dPkpt8JjZzqSSTUgh1Bm3ehUUW6vjAjyS30sn1jVGT6jDaZTrHpIDhs1OxeqPEfGAj0E7BvA1B4dSUwnhoFtueZHiyRSOD89OsFPdfH3NSKmdJvem+pZCYfKsAZlZEaZ02\/SXuriqKbI222obb8nTQw4+ZCSI\/dalsxiYYwjP5vs+4uzj3jAfOhPhKVbjeMgKASBQgb7qQyZAd\/hjW4oLHQBPeMwPrC+rLGAqR+0m0yUiFK0qDc26uJtL32pnPcOqLgS2vrz9uMVNKItER\/sdDdXPvtOlNJyknJL79M37cHsE0fsS1Y9QwB11r7F5ZmizRBeudAhkLKzWXHspTbn34OusFqoy22DHPTyiY9ilwDwTqog2919K5TN2v5q1QnCH\/2GOfOnESV1Xv+FjBootJ3VtTx2+mZTfq9rCrJNWlzxwz0WhIUgXcpB1G6JjeTgBYvf4VOfjqNXdLBiARqdFOfgXHxmzMgjatLwLMbZ7j\/hDXhJPzLR6+7+hbExYaYjDW82QkTQYKrk4LbfW0xeTQS5iC0wDMaLZUiqwueA2zCRE4Mx1dAvPGzagEHemv8JZzonQg1BWOPFVBod1\/ATAP0VBcyktec5tv33QrbSWvnD031Bcx2YxBNLm1ZQFw0jxm0B4o50Dqr8nWiOtt+\/fqyUzGtlNhaBmOr4UpBxlwFpZ4TwogvmTAeKIz4mmmuxjCbw38Qh0tTq3ULdTTt\/7hCPZAUCGZk2AQ+uIb4u35TmdOYjtYjetwHfhuqLAgCEOG2Ckk3qmCTLzYmcO6aeTboSeR4iLPmFb03XBvjuP5I5Wm\/\/kXvjAH9F9LA3RpixUKpjVelVtYnRt+xHPSr0Ca+hsnijng+0vfdd7Jeky2yd3G+uyzTSbRV1mSnnYP7PNQtRYbvlwlphQteDqsBexkespPggvONww7SEPQovHE5V2q1lkaEjZcN99VKLTfW1TkTwPLsKV3gS3wPykq\/q7+SjGRcrDnat7QU+cmuukkbXOMzKcuMaDQGVjvs4rmtHA8FHzQjMezFwItVfD\/MHzuLdzTsVRfrVjEevWUKANGHauCuF8wZi21lhwnBFvXmjtabM6F8We8F5MhBAR1v\/o3X0cTUBU9G0DP09khZrCP95JUQUf2unjr8PwcnNCn19K986x7VeVKyy5i3Y6jeOqzHuNENLyjtrEQDSqQQr6ynMDmhW+drxfT3J1g3xbcQVifc2Pkogf7H8g6avJMWkE61rygcVcueuGB6s90Y1UaR5InpGjaiujqGATsjKjl\/LGyN5zLjuLxDonvg7KNK5B8QI+\/jfidMIivtc3ygnTu41F4id6n+2RSyJfhCuff+qm2pZK\/lOCGp5zO+h7NLqXU+v2uMUuH7AlJvAq2kD4HTkLLPdJMSGbF1nLxixllHOlIfgLjzoD5Wa1j2xEo3zB4KbJZd6z5tTDSjOhifcErJlfFdVFsOUOb43wyRkSvo7MSi4qGh\/g7ODJm\/o9hy3mDj4lWbf\/IgVe48RyVDilGnbEkCD2asyItf8R6Jh7PDPx3o+Gx22Wr6A8kOoDO\/BE2mMddTtf+Pxv\/pOEgQjc4iXvGoe6uBPsWiq9yRRGyym9HrCrVQZKasl\/xoO+eOf8KKp\/G3W95HiE294uWoJnmoCPd1SNRV8cgyAioEijbC4CA3mX2CSw7Mtsxe5HE8pXtO0\/fHaXvJuSyFvqp9IfxxUMlkX2j1vrhdKCpdd6LI8pUdw0I4gvGJQefHAOtbX+Ki8Wt0T3Z\/IuSPwcqZm4lf1bgpCQXyR\/gatxZdOKUgxz9npiOnXVOowW1NbL\/JOMnHzxYBmuJIaqJcLbotupZXPUv6KJDw5eNXc9TwTYVxZmHkfQ85PPH6+fCrMP4z0lsX22bZjm1qvlcnrXtcwouIapVi\/h\/rqd2ZUKZzzILPb+xkGuW6f4\/c0hxDwQN42b4d+C+FJ6rvcqhwfKNCoJ8Z2JOPBlPLkcmRqgWqsDVeLhyH7hIXB\/ZUFJ4QYP\/dAABWUELQQPQzJjP\/I\/W\/GKYRqL\/HDTSBzSnoyFHkq\/F7iZ2rm+BCTPvva\/7QNBj7HjXRNnGUibg7uO8n\/cSiCCzN\/5en01R3hBUdBpKXD0YSP8pNudsN4dlDqUZBk1w\/UtQYP1rseLnQ7CxRFGlSHYVLbQS73RtBKcS50ferFgOzav3GccWwHZ5j4DTT3M\/J4DC2v24KPzlnhnh0p+MkOdxjCfMTMlIIa7hZKB\/2NaaAkS3b2fXeLaFYKCDuItSi\/5hhs\/J3wItBGklVTyiGRJopAl5KDxPq6qrVnpFcS46TOCKNR3xVzxB9ZpRtstpHbMvnvtg2Hozrj42WCNgP4FMkmv1o30xsv5gP89c6qZgbFc2yHGVsvIf8tTdcige3BtI\/S290UGlfKnLUiG5TEi1Lc9RdQFy7QW\/TwL0yAbanzPuFMcbWskhVOW\/hDebpSqq7eYRXA+WCnL048sAf3QWDio4o+AU+iKP4cZtx5weKLNRC43l\/NBwbExAGUkbbesLLTvaWD5tM1i3dmJEyqP+\/Ongm\/A5vk18Jo\/uYgTosjwvD04bhBD5n8id7lPHSLidJwWkHNz323LgfBhjkzoISoeb1DPV8o9v0\/1esqla4RMGqMMaVfahsv\/XD7azcnbuxxb+jS7Q+Z6ZxyijKUz1RQNiAxWV7T4Ob8\/z93ErEZll8xtZENIMjfCe2Ek3JBYc10zVvYz19Hzy4GVUG1vgjlTRzOhiciwcPw5PQxNa6rbm1u2CWkH4eCEhRJMnVo\/r5g7sPdg6fiD9Ycp8jLA2LI1PcQ2Ynss2i1LGmOH5d+eeK1newz8OpJDXS87Stda5idK1VT\/qklTVZhVumbPO6oWqJFOVn0oEG3y\/1421ueJuhwEtw++Pj2XKyjLQ\/nT\/MbZAx9S2XzsEoH5imaDWk3X1BAoA3tZ8yyrxqBTTj8vu3kiPWr+bRPcP0dqmP3HVJz1YcBrdzz\/MUscinVXXv4dla51MqWd\/Dfk16ZejJDFcg0z7f8tFXCTtSQiEYKsZdOtXmyqvgUS5M+jKthmPxUfwr+R6kQ1RmG6OKenDRBrk7DB7rhqdF\/w0OQwjkRZyGw08Xvl\/K1INspKMyHytraqcGw9JgIACexKzK0r7QRki2OEiQo4+iIGFK0zG5QkU+xf1Vd0Jcbkh8Zhnx1QfcHzY+hyY0SDGCBQZa6vQzWdHT2t6fLHMiS9K55xITVUV6Zap+fYyK\/KfWQzcGmRnYkgzJeJtnXB613sFT7lGxR2spXEoZIaoJPBrryzYF9Odsh5hRq53gvvf62Hxe81NmMrRYzi+LsgyVdyFt8frXErN3neKNF3raHZLD8i8fCacp2+hFCIoAO\/l0ta+aBkAUQrIpCbTMyCoK5gFeDZ0yrCjSZH7QD2fVBqURKP0NoJVyjvA7LjSCTdqxyhPlCAUSQGUSWR92mQVhMhdnIks5hMvwdiR5RtRLUWhrIv7ZdEMagbT4eicM2F2q0E500sDaT4DGhsug8h3Gljs1XZ77xNQRKyJ7dhY4uLdUzeCTeazOtscdDjtOUgxBix5220iRJ0l\/N9T1TPIXmWBo+FWuskEzHLBrNLB+rLpxaRmf8rFAa2bGHqKgDq59lgKr0BTy0jZkiTsq382OR8ESq4Dw7cGYsj4fB7eN\/i5VL95Ki1M+2gukTC9DxsKY4CP2GvD8ssGhAtR11wNRSFxk3ihMiPbVS8F3n3VUrStwqi+3lGpOoZR68bnybKb8m1cd7fIJKlbmNktIHUBkIQ5rNB0hvFB6vZa5epdFQa+8fPTMCl\/yZX+pnRECsz4QkPSqSZ82vXIwzSUuvtHuTMAZ0Y9xOZUKbUPh2XuxpDZuuvfbyxCaQpxsuWm4oQHYJYmbC8AiVFD2EF+YykJOkuD\/0FospbDcA5Y0JO8DvwNipLXbZp8XUAUtk1rQDXAR200Jm3TiJwhfMY1nnURBmj8YwDZ\/5iYSydnLU9V7R6EDBisy\/JCbcE6xE\/9kdLoNaMZZjP\/yjKE\/nHRQiXKY\/8eZwHUUgfi+Ubmlg\/5as\/PMgEdp6EIA07Wy9mE1j7Jcbbvo4Yoh76wLuas4qOKD6oe867kShN84SJEXUrZopo64QzR0KXOIHESFUTD9k\/obt+9FJF\/JGP9hk87SNBC21rJRPIX0+Qsq6ntjKPNy4mjjiWSppzmu1qCsNTGfHPa\/wMk0+MfrsKF3FmKTV1OyqqBTBUnPD8FnTWncY0IxDGHrKRAh5pZg4gR9idcO22W+voSSDmjd17PQ40KIYltPOj77OB+hROAcuYIHnmNUkz0Z52u2u06Htt8YCqNc0RK8fz52RzPkHlo3H6fEj7RQ9C9t6Bi6PYDcSYHkPshSDMvZNzZMiPlcTqDdkNyqiWaNI8\/GrI0sTIbXhGDCxBTRPz0JXGq5D7WdQ28jppvjcDUmkEi3sKbAnvO\/T66dCLrLkkA69e1xH\/W0Frq4suPet\/CzCji9waXUvZJFGPUyl76Vex+lE8sVFp71Pdn\/i93zQgHqhgkdBc7eA1ZvDDDBOGecHL7leuC+t0HHRFiekTAWLL32Y5nEgaHlmh3aarlONjuTFiM3yznB4m5KRs\/MaMjo+p4uW6n2l7xG++648BWvDXmfcjJMIKVccVBAByKbA1nRuUMFHNUacORw3K2xFIWAp0XXeuu2OYqjT\/I+a551nwgD2UsjsDF99gGKdpdbs\/0im2+s+3YuFCtSwJoIDt4oGz6u2EaCQe7Hulcoks7FtIug9Av3ANlz\/Nzvvd88BbrIEfIdnBOfYkCfMyXVLtoWfKkCB9cIr05\/Hhf3Zw3Ub5+g+ASNjc3hUpYgvtbqaujgroWxxLuohKRwgSFo2zni9I7TvA9jJN+PDWbeC0fEgtVjHjof35wwNaK9CTUAlIP5ASxDJ+luwB+k3ALoxuzu0hdC\/vM31jh9IE2Fx63vIS6EJTYtaPVeCcmBnDqoqGilnoBzSX+2eX7M5luYXfMtJ6X9cqYNSj02EIq5NdMap7RKprohHwiDSiddjeS9vhqlHDdA1TvVLvmLhCLBvp5Vz+PDO29RLl\/EIy5QEWUs7EkjzhgccPc6wpqdKvAGWha3T4POTOnoJmdyymPikUCZZ7OgeUvcJ4HpAVKFIrFMsRvjMZGUuaqaK7NLmPtTZikj2BIj4pOmlpjJ+\/6fJNXzEIx5n1sprc6N7skaiCbJNEEi+z9iKIlPFx2YY9qdG7v\/RebKNNRAn9DonRXJ0NQvFefcT4+ZeEIQ31IuyxTnejlBDYrm4xY3is+72KESgTpxoNR2c+mbjqqwNdpsNz5QK90RPZG6GMP98gK51GwKNmfLEffMaA1qLsZwPe0fsHifm9eScpGE9MGppTkOtdXFRR3Twtzrq8B0ZBYSx\/YPekqwhhzip7LLpuQnqQcNS1D+V1RBwxsGDeVt0wh8K3c4it2Tk5vQ7kYIwOM6K0ThDqF8Mqva3E8NZXiyLL1cE4Jna9ZnBq20i86F413rahlCS0q28HamZHEJHbapxs4TMCrfL6Ix6urbyupwxcr8gC9f60tn1691EhEdLg0dDNoksWLuUw0CRwghxLmF9LjbjV0Cum8xHw8YTQHZ2BfEM5f6ju4g0wVY6ZLl7BcDyI7OTTVXhfS\/+A06MDcTTL9K0CQP\/fxoQw2QcnQHeCGeIBGvLvWV87EayjpNL7vx+PyFkSvTDKaCuS9av8pFcoSIifMxaneU2Qig1linstseavFyMfDWj3q89KM+MuNrI8CeG7WRukwp\/3tkGG2XfJR6QbcN63mYaMqw3X3W\/TbS0ZgBaTYrwAXMu6ywi61EQmhGka4NHIKJ9qmA9DEygXy94CaT+FGB9vNxjPuAG6j8GOUmZhJICJ2hpJBlEgzbJ5OYu8TpP1pOGJfYwuxCyQrp5swHuS29z22G0AhBvO9G4h33kp1DSzGdLo+msY6SHnSNqN0NehEbcnOx9W8GB0EG3Tr1eSz1phQCIpuFz9i6doUpMdbhvP0sSYDFXUHZ+zCLgMztrEIsGE6+dba24u1rKsJHrDjJbhRKRV11aAmpwC0+i1qJkPSgEI95GlvlaeJ+Ms5lYOBZWdq7IFztg0IoTmEugzRXgVikyRQQFWFRV5NZvOG2HJ51xBYLW3XoILl6kXYJu9c+2NuCpq63HhwqKqm4td7lUOKwBTAn7hTd2vUsUoV9bKgd51H7Hdr9Wo7aRhzgoL9jPqGaDCQsuxzxKU2T6cFrwqWiZfL2JkiQdXZvSRNlotnJDuCvNcXjFTZXqkpRpW6U9ZuGECwXVO441VJLb4Ri0j7S5ln3d4PnT0eWkI\/XeLukJ1N30YTZwqt8QkcaMSbOS93bxHhfQC7qXG5qDpPRWvecnHZ0Ld3nOVGFM7VYLiHd\/tnzQQt98TFBnf5gBPubkzMvnIx9bO+LqUhoUhMaGe7SOCTR4iMz59l9ygY3g08hd3l1S+nje34mc0tmDo+MGZZ5EK9tdw+XpZJgrs8oWAP4f5O9uT\/tLxYIan2nOcaQjMprbCQQFz0E2yn6x+2k1HzGkOFd9CFQnPPqp+Itb\/N1djGm8xSrOjZxtJa4p\/RcBn4sj4hn355y5UXi2wiw9nUPZcE9307EAX4KfVDhzl70vsO2zOA+N+I9vxrVESkgXOnxCCnRZOgQOQNhZ0kmyRGdeLrRzwrYn3zqIMYTKHaU5rXzupo8cM6K3hxz2OqUXRIhvMzoB\/w8fQw5lg4gKg8d+lahGmAd3R7Eg\/Ja1MHik0H9Va3RqQ3F1GRQExFNaLCiCtKnv47Z7Jwn+bbvmuUyeiET6ZVz8zMZm9xrDHVFoybQcyWSuo8dgv96FdBKyBvH\/GyLB8g8rNDvsXKMJVHRmj7KwxisV1MrjjN39W78yEuyexRXirjsQzoiUeyxMRHiDWWZL2VphjyX5PEq0bK88omcvHHuzt+\/gXvJHVZqsHHIduXqHrV6JEpQQqc9wRJltANZNMRj2Y7HeF6xA8krL74wlkUc8MKsq3xml0pErpY+pIbpYrNtGXdLt678+94ZFHKb9a2NOiJQXz52p3lKMs49vbi4jPH7tKoEiZQaYSsnWPQktgeuwmjT34rcD7jr3LGHZRmdGlJFOT2Pf7BBVzPdmXQacos+FdOen8IhYb7HUYrJf7iN7e\/dS81lywrpAKw0pe6txnEHY6cV\/mY+Oli89YP0jO7HP87juSgg+f2yDTgWRI5t3pdyMqldH\/giUDF+uMgCJgGWx7U7A\/b2AjAyTKpfxjw+OujcTTusyMC8w+gKCvvUcgELolvK4mEVxq9enKOa022HBdxubBsV2CwqquSw9f4MuNHmyARFQQEwE0VPffsITqq1LKBUr5CNEZ\/DuFN66ssSVAY0Vu0jzH9K\/mjK6kk8hdCTOsO+41ua5NjXoO7rGGK\/CaZoXLtPnUKzNfRvU79EHpdX0\/jLoj7cenwmArNFZQulFXniGXbfN6pL5kIT5lTDB00COtdyb2+p\/RbF8TkDEI3lWccSWCGuQ6n55BjP3KLUZhsD4w1tcqNSFRyRRGywjY=",
          'BG_IU': "\/\/www.google.com\/js\/bg\/b2WeZoKTGjI-EAoFyFgGA_fP1JUxjtBew07XDJA1nIU.js",

      'HL_LOCALE': "en_US",
      'TTS_URL': "http:\/\/www.youtube.com\/api\/timedtext?expire=1406706763\u0026v=<?php echo $_GET['v']; ?>\u0026asr_langs=de%2Cko%2Cja%2Cen%2Cfr%2Ces%2Cru%2Cit%2Cnl%2Cpt\u0026signature=829D3B02F8C32A0637C1BFBF676DD67598C5387B.A8BF4FEF375145168DF3BED826CE4158E85F3EFA\u0026sparams=asr_langs%2Ccaps%2Cv%2Cexpire\u0026caps=asr\u0026hl=en_US\u0026key=yttt1",
      'JS_DELAY_LOAD': 0,
      'LIST_AUTO_PLAY_VALUE': 1,
      'SHUFFLE_VALUE': 0,
      'SKIP_RELATED_ADS': false,
      'SKIP_TO_NEXT_VIDEO': false,
      'SPF_PREFETCH': false,
      'SPF_PREFETCH_MAX': 0,
      'RESUME_COOKIE_NAME': null,
      'LIST_END_TIME': null,
      'CONVERSION_CONFIG_DICT': {"baseUrl": "http:\/\/googleads.g.doubleclick.net\/pagead\/viewthroughconversion\/962985656\/", "ytfocEnabled": true, "socialEnabled": false, "vid": "<?php echo $_GET['v']; ?>", "uid": "dJ9oJ2GUF8Vmb-G63ldGWg", "ytfocHistoryEnabled": false, "rmktPingThreshold": 0, "aid": "P9BWj8HuFTA", "focEnabled": true, "rmktEnabled": true},
      'RESOLUTION_TRACKING_ENABLED': false,
      'MEMORY_TRACKING_ENABLED': false,
      'ADBLOCK_TRACKING_ENABLED': false,
      'NAVIGATION_TRACKING_ENABLED': false,
      'WATCH_LEGAL_TEXT_ENABLE_AUTOSCROLL': true,
      'SHARE_ON_VIDEO_END': true,
      'SHARE_ON_VIDEO_START': false,
      'ADS_DATA': {"gut_vars": {"tag": "\/4061\/ytpwatch\/3406642"}, "log_pyv": false, "pyv_vars": {"iframe_json": "{\"google_ad_client\": \"ca-pub-6219811747049371\", \"google_only_pyv_ads\": true, \"google_page_url\": \"http:\\\/\\\/www.youtube.com\\\/video\\\/<?php echo $_GET['v']; ?>\", \"google_ad_host_tier_id\": \"3660190\", \"google_ad_channel\": \"PyvWatchInRelated+PyvYTWatch+PyvWatchNoAdX+pw+non_lpw+yt_mpvid_Hu39qu4brxHm_Q7m+yt_cid_3406642+yt_no_ap+ytdevice_1+afv_user_id_dJ9oJ2GUF8Vmb-G63ldGWg+afv_user_acsreactions\", \"google_loeid\": \"940670,946013\", \"google_ad_block\": \"3\", \"google_language\": \"en\", \"google_ad_output\": \"js\", \"google_lact\": -1, \"google_yt_pt\": \"APb3F28-jMRTdS18GC469KZgOw5wR9H-pa9LeIZ3TtQLAnYwbQAhAQn373c_4GujqpF9tDEjYEXWVuvb7otGxIIPqkWXnUSdAbKp8P4pGw\", \"google_video_doc_id\": \"yt_<?php echo $_GET['v']; ?>\", \"google_max_num_ads\": 1, \"google_ad_type\": \"text\", \"google_ad_host\": \"ca-host-pub-4184977541492624\"}"}, "show_afc": false, "check_status": false, "show_afv": true, "use_gut": true, "afv_vars": {"google_lact": -1, "google_ad_client": "ca-pub-6219811747049371", "google_ad_host": "ca-host-pub-4184977541492624", "google_page_url": "http:\/\/www.youtube.com\/video\/<?php echo $_GET['v']; ?>", "google_alternate_ad_url": "http:\/\/www.youtube.com\/ad_frame?id=watch-channel-brand-div", "google_yt_pt": "APb3F28-jMRTdS18GC469KZgOw5wR9H-pa9LeIZ3TtQLAnYwbQAhAQn373c_4GujqpF9tDEjYEXWVuvb7otGxIIPqkWXnUSdAbKp8P4pGw", "google_video_doc_id": "yt_<?php echo $_GET['v']; ?>", "google_ad_height": "250", "google_ad_format": "300x250_as", "google_ad_host_tier_id": "3660190", "google_ad_channel": "yt_mpvid_Hu39qu4brxHm_Q7m+yt_cid_3406642+yt_no_ap+ytdevice_1+afv_user_id_dJ9oJ2GUF8Vmb-G63ldGWg+afv_user_acsreactions+ytel_detailpage+ytps_default+0854550288+Vertical_211", "google_ad_type": "image", "google_loeid": "940670,946013", "google_ad_block": "2", "google_language": "en"}, "afc_vars": {"ad_type": "image", "ad_host": "ca-host-pub-4184977541492624", "language": "en", "ad_channel": "yt_mpvid_Hu39qu4brxHm_Q7m+yt_cid_3406642+yt_no_ap+ytdevice_1+afv_user_id_dJ9oJ2GUF8Vmb-G63ldGWg+afv_user_acsreactions+ytel_detailpage+ytps_default+0854550287+Vertical_211+afc_on_page", "ad_host_tier_id": "3660190", "format": "300x250_as", "ad_client": "ca-pub-6219811747049371", "ad_block": "2", "alternate_ad_url": "http:\/\/www.youtube.com\/ad_frame?id=watch-channel-brand-div", "video_doc_id": "yt_<?php echo $_GET['v']; ?>", "lact": -1}, "show_pyv": true, "show_instream": true},
      'PLAYBACK_ID': "AAT_XpLpoGnoRzyB",
      'IS_ACTIVE_LIVE_VIDEO': false,
      'IS_DISTILLER': true,
      'SHARE_CAPTION': null,
      'SHARE_REFERER': "",
      'PLAYLIST_INDEX': null
    });

    yt.setMsg({
        'HTML5_SUBS_ASR': "automatic captions",
      'LOADING': "Loading..."    });

      yt.setMsg('SPEEDYG_INFO', "Experiencing interruptions?");
      yt.setConfig('SPEEDYG_PING', "https:\/\/ad.doubleclick.net\/activity;src=2542116;type=youtu444;cat=YouTu000;ord=");

      yt.setMsg({
    'UNBLOCK_USER': "Are you sure you want to unblock this user?",
    'BLOCK_USER': "Are you sure you want to block this user?"
  });
  yt.setConfig('BLOCK_USER_AJAX_XSRF', 'QUFFLUhqazVuYng0TzdndW9ZV2huMngybmZaWmc2bDNvQXxBQ3Jtc0tud0FKcW80d0gwRVpVS09sOFN6dkVlVkNqSGQzTmpSVWRDS3pQZHcwTTFEQ3JjUl9nTWlsUi1lRDU3VUd0ZEd4QUpLNmlkQkF5WlhHbDBPRk1PVzA5SzJ6V2gxZ3RoaTZKNzJXNUsxZFhkWXVRQmdhbzgyUjhPeHJ6U044WlZIT01hYk5CZEdhQ1dseVdULUo0X204VnBwOTI4dGc=');


    







    



      yt.setConfig({
    'GUIDED_HELP_LOCALE': "en_US",
    'GUIDED_HELP_ENVIRONMENT': "prod"
  });


      
      yt.setConfig('DISTILLER_CONFIG', {"page_size": null, "video_id": "<?php echo $_GET['v']; ?>", "reauth": false, "host_override": "https:\/\/plus.googleapis.com", "owner_id": "dJ9oJ2GUF8Vmb-G63ldGWg", "privacy_setting": "PUBLIC", "query": "http:\/\/www.youtube.com\/watch?v=<?php echo $_GET['v']; ?>", "signin_url": "https:\/\/accounts.google.com\/ServiceLogin?continue=https%3A%2F%2Fwww.youtube.com%2Fsignin%3Ffeature%3Dcomments%26next%3D%252Fwatch%253Fv%253D<?php echo $_GET['v']; ?>%26hl%3Den%26action_handle_signin%3Dtrue%26app%3Ddesktop\u0026uilel=3\u0026service=youtube\u0026passive=true\u0026hl=en", "channel_id": "UCdJ9oJ2GUF8Vmb-G63ldGWg"});


  </script>


<script>yt.setConfig({'EVENT_ID': "20HYU_PNJIee-gPU5oLACw",'PAGE_NAME': "watch",'LOGGED_IN': false,'SESSION_INDEX': null,'FORMATS_FILE_SIZE_JS': ["%s B", "%s KB", "%s MB", "%s GB", "%s TB"],'DELEGATED_SESSION_ID': null,'GAPI_HOST': "https:\/\/apis.google.com",'GAPI_HINT_PARAMS': "m;\/_\/scs\/abc-static\/_\/js\/k=gapi.gapi.en.0Okf7oXXtpw.O\/m=__features__\/rt=j\/d=1\/rs=AItRSTMGzueE0QJRmrRxQBthM2-0ikJ_cw",'GAPI_LOCALE': "en_US",'UNIVERSAL_HOVERCARDS': true,'VISITOR_DATA': "CgtGakRKTHlPdTUzRQ%3D%3D",'APIARY_HOST': "",'APIARY_HOST_FIRSTPARTY': "",'INNERTUBE_CONTEXT_HL': "en",'INNERTUBE_CONTEXT_GL': "US",'INNERTUBE_CONTEXT_CLIENT_VERSION': "20140722",'INNERTUBE_API_KEY': "AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8",'INNERTUBE_API_VERSION': "v1",'GOOGLEPLUS_HOST': "https:\/\/plus.google.com",'PAGEFRAME_JS': "\/\/s.ytimg.com\/yts\/jsbin\/www-pageframe-vflefHNhV\/www-pageframe.js",'JS_COMMON_MODULE': "\/\/s.ytimg.com\/yts\/jsbin\/www-en_US-vfl0MqD-i\/common.js",'PAGE_FRAME_DELAYLOADED_CSS': "\/\/s.ytimg.com\/yts\/cssbin\/www-pageframedelayloaded-vflqo114_.css",'GUIDE_DELAY_LOAD': true,'GUIDE_DELAYLOADED_CSS': "\/\/s.ytimg.com\/yts\/cssbin\/www-guide-vfl0yTMs_.css",'GUIDED_HELP_FIND_VIDEO_MANAGER_ENABLED': false,'GUIDED_HELP_CREATOR_STUDIO_ENABLED': true,'PREFETCH_CSS_RESOURCES' : ["\/\/s.ytimg.com\/yts\/cssbin\/www-player-vfl_UOZc_.css",''         ],'PREFETCH_JS_RESOURCES': ["\/\/s.ytimg.com\/yts\/jsbin\/html5player-en_US-vflCGk6yw\/html5player.js",''         ],'SAFETY_MODE_PENDING': false,'LOCAL_DATE_TIME_CONFIG': {"weekdays": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"], "shortMonths": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], "amPms": ["AM", "PM"], "formatLongDateOnly": "MMMM d, yyyy", "months": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"], "formatLongDate": "MMMM d, yyyy h:mm a", "formatWeekdayShortTime": "EE h:mm a", "formatShortDate": "MMM d, yyyy", "shortWeekdays": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"]},'PAGE_CL': 71838233,'PAGE_BUILD_TIMESTAMP': "Thu Jul 24 10:13:56 2014 (1406222036)",'PLAYER_PERSISTENCE_REFACTOR': true,'FEEDBACK_BUCKET_ID': "Watch",'FEEDBACK_LOCALE_LANGUAGE': "en",'FEEDBACK_LOCALE_EXTRAS': {"guide_subs": "NA", "is_branded": "", "logged_in": false, "is_partner": "", "accept_language": null, "experiments": "901608,902022,902408,906001,911507,912714,912719,912725,914950,916928,916929,918119,918121,919389,920605,920609,921603,921910,921911,922413,922804,924222,925011,927006,927622,927626,927881,927891,929237,929507,929940,929943,930812,930819,931017,931020,931025,931339,931341,931943,931950,931967,933218,934024,934030,934032,934113,935020,935670,935707,937003,937217,937422,937424,937817,938006,938302,938632,938639,938646,938681,938703,938705,939201,940641,940670,941414,941416,941810,943301,943407,944702,945117,945401,945827,946013,947204,949001,951601"}});  yt.setConfig({
    'GUIDED_HELP_LOCALE': "en_US",
    'GUIDED_HELP_ENVIRONMENT': "prod"
  });
yt.setConfig('SPF_SEARCH_BOX', true);yt.setMsg({'ADDTO_WATCH_LATER': "Watch Later",'ADDTO_WATCH_LATER_ADDED': "Added",'ADDTO_WATCH_LATER_ERROR': "Error",'ADDTO_WATCH_QUEUE': "Watch Queue",'ADDTO_WATCH_QUEUE_ADDED': "Added",'ADDTO_WATCH_QUEUE_ERROR': "Error",'ADDTO_TV_QUEUE': "TV Queue"});    yt.setConfig({
    'XSRF_TOKEN': "QUFFLUhqazVuYng0TzdndW9ZV2huMngybmZaWmc2bDNvQXxBQ3Jtc0tud0FKcW80d0gwRVpVS09sOFN6dkVlVkNqSGQzTmpSVWRDS3pQZHcwTTFEQ3JjUl9nTWlsUi1lRDU3VUd0ZEd4QUpLNmlkQkF5WlhHbDBPRk1PVzA5SzJ6V2gxZ3RoaTZKNzJXNUsxZFhkWXVRQmdhbzgyUjhPeHJ6U044WlZIT01hYk5CZEdhQ1dseVdULUo0X204VnBwOTI4dGc=",
    'XSRF_REDIRECT_TOKEN': "DcfXhkzN8Bn9Fe53bUZR_l197JR8MTQwNjc2Nzk2M0AxNDA2NjgxNTYz",
    'XSRF_FIELD_NAME': "session_token"
  });

  yt.setConfig('FEED_PRIVACY_CSS_URL', "\/\/s.ytimg.com\/yts\/cssbin\/www-feedprivacydialog-vflp_YgUv.css");

  yt.setConfig('FEED_PRIVACY_LIGHTBOX_ENABLED', true);
yt.setConfig({'SBOX_JS_URL': "\/\/s.ytimg.com\/yts\/jsbin\/www-searchbox-vflSb1S5v\/www-searchbox.js",'SBOX_SETTINGS': {"REQUEST_LANGUAGE": "en", "HAS_ON_SCREEN_KEYBOARD": false, "REQUEST_DOMAIN": "us", "EXPERIMENT_ID": -1, "PSUGGEST_TOKEN": null, "PQ": "", "SESSION_INDEX": null},'SBOX_LABELS': {"SUGGESTION_DISMISSED_LABEL": "Suggestion dismissed", "SUGGESTION_DISMISS_LABEL": "Dismiss"}});  yt.setConfig({
    'YPC_LOADER_ENABLED': true,
    'YPC_LOADER_CONFIGS': "\/ypc_config_ajax",
    'YPC_LOADER_JS': "\/\/s.ytimg.com\/yts\/jsbin\/www-ypc-vflYG8j4X\/www-ypc.js",
    'YPC_LOADER_CSS': "\/\/s.ytimg.com\/yts\/cssbin\/www-ypc-vfl2lS1_U.css",
    'YPC_LOADER_CALLBACKS': ['yt.www.ypc.checkout.init', 'yt.www.ypc.subscription.init']
  });
  yt.setConfig('GOOGLE_HELP_CONTEXT', "watch");
ytcsi.span('st', 124);yt.setConfig({'TIMING_ACTION': "watch,watch7ad",'TIMING_INFO': {"yt_spf": 0, "yt_lt": "cold", "yt_ad_an": "aftv,afv,dclk", "yt_pl": 0, "yt_ref": "embed", "ei": "20HYU_PNJIee-gPU5oLACw", "yt_ad_pr": 1, "e": "902408,924222,927622,934024,934030,940670,946013", "yt_ad": 1, "yt_li": 0}});  yt.setConfig({
    'XSRF_TOKEN': "QUFFLUhqazVuYng0TzdndW9ZV2huMngybmZaWmc2bDNvQXxBQ3Jtc0tud0FKcW80d0gwRVpVS09sOFN6dkVlVkNqSGQzTmpSVWRDS3pQZHcwTTFEQ3JjUl9nTWlsUi1lRDU3VUd0ZEd4QUpLNmlkQkF5WlhHbDBPRk1PVzA5SzJ6V2gxZ3RoaTZKNzJXNUsxZFhkWXVRQmdhbzgyUjhPeHJ6U044WlZIT01hYk5CZEdhQ1dseVdULUo0X204VnBwOTI4dGc=",
    'XSRF_REDIRECT_TOKEN': "DcfXhkzN8Bn9Fe53bUZR_l197JR8MTQwNjc2Nzk2M0AxNDA2NjgxNTYz",
    'XSRF_FIELD_NAME': "session_token"
  });
  yt.setConfig('THUMB_DELAY_LOAD_BUFFER', 0);
if (window.ytcsi) {window.ytcsi.tick("jl", null, '');}</script>
</body></html>