<?php
// Include config file
include('./config.php');

$searchQ = urlencode($_GET['search_query']);

if (isset($_GET['page'])) {
$page = $_GET['page'];
} else {
$page = "1";
}

// URL of the file you want to request
$url = $invidApi . '/api/v1/search?q=' . $searchQ . '&page=' . $page;

// Cache file path
$cache_file = './cache/search/' . $_GET['search_query'] . '-' . $page . '.json';

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

$dataSearch = json_decode($data, true);
?>
  <!DOCTYPE html><html lang="en" data-cast-api-enabled="true"><head><script>var ytcsi = {gt: function(n) {n = (n || '') + 'data_';return ytcsi[n] || (ytcsi[n] = {tick: {},span: {},info: {}});},tick: function(l, t, n) {ytcsi.gt(n).tick[l] = t || +new Date();},span: function(l, s, n) {ytcsi.gt(n).span[l] = (typeof s == 'number') ? s :+new Date() - ytcsi.data_.tick[l];},info: function(k, v, n) {ytcsi.gt(n).info[k] = v;}};ytcsi.perf = window.performance || window.mozPerformance ||window.msPerformance || window.webkitPerformance;ytcsi.tick('_start', ytcsi.perf ? ytcsi.perf.timing.responseStart : null);if (document.webkitVisibilityState == 'prerender') {ytcsi.info('prerender', 1);document.addEventListener('webkitvisibilitychange', function() {ytcsi.tick('_start');}, false);}</script>  <script>
    try {window.ytbuffer = {};ytbuffer.handleClick = function(e) {var element = e.target || e.srcElement;while (element.parentElement) {if (element.className.match(/(^| )yt-can-buffer( |$)/)) {window.ytbuffer = {bufferedClick: e};element.className += ' yt-is-buffered';break;}element = element.parentElement;}};if (document.addEventListener) {document.addEventListener('click', ytbuffer.handleClick);} else {document.attachEvent('onclick', ytbuffer.handleClick);}} catch(e) {}
    (function(){function a(b,g,k){var h=document.getElementsByTagName("html")[0],e=[h.className];b&&1251<=(window.innerWidth||document.documentElement.clientWidth)&&(e.push("guide-pinned"),g&&e.push("show-guide"));k&&(b=(window.innerWidth||document.documentElement.clientWidth)-21-50,1251<=(window.innerWidth||document.documentElement.clientWidth)&&g&&(b-=230),e.push(" ",1262<=b?"content-snap-width-3":1056<=b?"content-snap-width-2":"content-snap-width-1"));h.className=e.join(" ")}
var c=["yt","www","masthead","sizing","runBeforeBodyIsReady"],d=this;c[0]in d||!d.execScript||d.execScript("var "+c[0]);for(var f;c.length&&(f=c.shift());)c.length||void 0===a?d[f]?d=d[f]:d=d[f]={}:d[f]=a;})();
yt.www.masthead.sizing.runBeforeBodyIsReady(true,true,false);
  </script>



        <script src="//s.ytimg.com/yts/jsbin/www-scheduler-vfltpmjOU/www-scheduler.js" type="text/javascript" name="www-scheduler"></script>


  
  <link rel="stylesheet" href="//s.ytimg.com/yts/cssbin/www-core-webp-vflxguuyA.css" name="www-core">
<script>if (window.ytcsi) {window.ytcsi.tick("ce", null, '');}</script>  

    
<title><?php echo $_GET['search_query']; ?> - YouTube</title><link rel="search" type="application/opensearchdescription+xml" href="http://www.youtube.com/opensearch?locale=en_US" title="YouTube Video Search"><link rel="shortcut icon" href="http://s.ytimg.com/yts/img/favicon-vfldLzJxy.ico" type="image/x-icon">     <link rel="icon" href="//s.ytimg.com/yts/img/favicon_32-vflWoMFGx.png" sizes="32x32"><link rel="alternate" media="handheld" href="http://m.youtube.com/results?oq=eagle+cadsoft+&amp;search_query=<?php echo $searchQ; ?>&amp;aq=0&amp;aql=&amp;gs_l=youtube.1.0.0j0i5.270.2053.0.4045.14.12.0.2.2.0.284.1135.9j2j1.12.0...0.0.AGcdJstc1nA&amp;aqi=g1g-m1"><link rel="alternate" media="only screen and (max-width: 640px)" href="http://m.youtube.com/results?oq=eagle+cadsoft+&amp;search_query=<?php echo $searchQ; ?>&amp;aq=0&amp;aql=&amp;gs_l=youtube.1.0.0j0i5.270.2053.0.4045.14.12.0.2.2.0.284.1135.9j2j1.12.0...0.0.AGcdJstc1nA&amp;aqi=g1g-m1"><meta name="description" content="Share your videos with friends, family, and the world"><meta name="keywords" content="video, sharing, camera phone, video phone, free, upload">  <link rel="stylesheet" href="//s.ytimg.com/yts/cssbin/www-pageframe-webp-vfl3lMRK1.css" name="www-pageframe">
  <link rel="stylesheet" href="//s.ytimg.com/yts/cssbin/www-guide-webp-vfle0YU-o.css" name="www-guide">
    <link rel="stylesheet" href="//s.ytimg.com/yts/cssbin/www-results-webp-vflX8rJuX.css" name="www-results">

<script>if (window.ytcsi) {window.ytcsi.tick("cl", null, '');}</script></head>
    <body dir="ltr" class="  ltr  webkit webkit-537     site-center-aligned site-as-giant-card guide-pinning-enabled appbar-hidden     not-nirvana-dogfood not-nirvana-playlist  not-watch8    delayed-frame-styles-not-in  " id="body">

  <div id="early-body">    <iframe id="pyv-iframe-search" style="display:none;" src=""></iframe><script>var yt = yt || {};yt.www = yt.www || {};yt.www.ads = yt.www.ads || {};yt.www.ads.pyvsearch = yt.www.ads.pyvsearch || {};yt.www.ads.pyvsearch.searchTopAdsFromAfc = null;yt.www.ads.pyvsearch.pageJsInit = false;yt.www.ads.pyvsearch.requestAfcAd = function() {var iframeContent = "  \u003cscript\u003e\n    (function() {\n      var called = false;\n      parent.yt.www.ads.pyvsearch.pyvSearchTopAfcCbkWrapper = function(ads) {\n        clearTimeout(parent.yt.www.ads.pyvsearch.cancelTimer);\n        if (called) {\n          return;\n        }\n        called = true;\n        if (parent.yt.www.ads.pyvsearch.pageJsInit) {\n          parent.yt.www.ads.pyvsearch.pyvSearchTopAfcCallback(ads);\n        } else {\n          parent.yt.www.ads.pyvsearch.searchTopAdsFromAfc = ads;\n        }\n      };\n    })();\n\n    window['google_ad_client'] = 'ca-pub-6219811747049371';\n    window['google_ad_block'] = '3';\n    window['google_max_num_ads'] = 2;\n    window['google_ad_output'] = 'js';\n    window['google_ad_type'] = 'text';\n    window['google_loeid'] = \"900356,946023,940650\";\n    window['google_only_pyv_ads'] = true;\n    window['google_page_url'] = parent.document.location.href;\n    window['google_ad_channel'] = \"PyvSearchAfcCpm+PyvWatchNoAdX+PyvSearchAfcNewTemplate+ytdevice_1\";\n    window['google_kw_type'] = 'broad';\n    window['google_kw'] = \"<?php echo $_GET['search_query']; ?>\";\n\n      window['google_language'] = \"en\";\n\n\n\n    window['google_ad_request_done'] = parent.yt.www.ads.pyvsearch.pyvSearchTopAfcCbkWrapper;\n  \u003c\/script\u003e\n  \u003cscript s\u0072c=\"\/\/pagead2.googlesyndication.com\/pagead\/show_ads.js\"\u003e\u003c\/script\u003e\n";yt.www.ads.pyvsearch.adRequestStartTime = new Date().getTime();var frame = document.getElementById('pyv-iframe-search');var iframeDocument =frame.contentDocument || frame.contentWindow.document;iframeDocument.open();var content = '<!DOCTYPE html><html><head></head><body>' +iframeContent + '</body></html>';iframeDocument.write(content);iframeDocument.close();};yt.www.ads.pyvsearch.doAdsRequest = function() {if (window.ytcsi) {window.ytcsi.tick("resultspredclk", null, '');}clearTimeout(yt.www.ads.pyvsearch.timerId_);yt.www.ads.pyvsearch.timerId_ = setTimeout(yt.www.ads.pyvsearch.requestAfcAd, 5);yt.www.ads.pyvsearch.doAdsRequest = null;};yt.www.ads.pyvsearch.doAdsRequest();</script>
</div>
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
</div><div id="yt-masthead-signin"><span id="appbar-onebar-upload-group"><a href="//www.youtube.com/upload" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-default yt-uix-button-size-default" data-sessionlink="feature=mhsb&amp;ei=27XUU4m4GYmH9AbyzYCABQ" id="upload-btn"><span class="yt-uix-button-content">Upload </span></a></span><button class="yt-uix-button yt-uix-button-size-default yt-uix-button-primary" type="button" onclick=";window.location.href=this.getAttribute(&#39;href&#39;);return false;" href="https://accounts.google.com/ServiceLogin?passive=true&amp;continue=https%3A%2F%2Fwww.youtube.com%2Fsignin%3Fnext%3D%252Fresults%253Fsearch_query%253Deagle%252Bcadsoft%252Btutorial%2526oq%253Deagle%252Bcadsoft%252B%2526aq%253D0%2526aqi%253Dg1g-m1%2526aql%253D%2526gs_l%253Dyoutube.1.0.0j0i5.270.2053.0.4045.14.12.0.2.2.0.284.1135.9j2j1.12.0...0.0.AGcdJstc1nA%26app%3Ddesktop%26action_handle_signin%3Dtrue%26feature%3Dsign_in_button%26hl%3Den&amp;uilel=3&amp;hl=en&amp;service=youtube"><span class="yt-uix-button-content">Sign in </span></button></div><div id="yt-masthead-content"><form id="masthead-search" class="search-form consolidated-form" action="/results" onsubmit="if (_gel(&#39;masthead-search-term&#39;).value == &#39;&#39;) return false;"><button class="yt-uix-button yt-uix-button-size-default yt-uix-button-default search-btn-component search-button" type="submit" onclick="if (_gel(&#39;masthead-search-term&#39;).value == &#39;&#39;) return false; _gel(&#39;masthead-search&#39;).submit(); return false;;return true;" id="search-btn" tabindex="2" dir="ltr"><span class="yt-uix-button-content">Search </span></button><div id="masthead-search-terms" class="masthead-search-terms-border" dir="ltr"><label><input id="masthead-search-term" autocomplete="off"  class="search-term yt-uix-form-input-bidi" name="search_query" value="<?php echo $_GET['search_query']; ?>" type="text" tabindex="1" title="Search"></label></div></form></div></div></div>
    <div id="masthead-appbar-container" class="clearfix"><div id="masthead-appbar"><div id="appbar-content" class=""></div></div></div>

</div><div id="masthead-positioner-height-offset"></div><div id="page-container"><div id="page" class="  search  branded-page-v2-secondary-column-wide  no-flex clearfix"><div id="guide" class="yt-scrollbar">      <div id="appbar-guide-menu" class="appbar-menu appbar-guide-menu-layout appbar-guide-clickable-ancestor yt-uix-scroller" role="navigation">
    <div id="guide-container" class="vve-check" data-sessionlink="ei=27XUU4m4GYmH9AbyzYCABQ&amp;ved=CEEQ_h4">
        <div class="guide-module-content yt-scrollbar">
    <ul class="guide-toplevel">
            <li class="guide-section vve-check"
    data-sessionlink="ei=27XUU4m4GYmH9AbyzYCABQ&amp;ved=CEIQ5isoAA"
    data-visibility-tracking="">
    <div class="guide-item-container personal-item">
      
      <ul class="guide-user-links yt-uix-tdl yt-box" role="menu">
              <li class="vve-check guide-channel guide-notification-item overflowable-list-item " id="what_to_watch-guide-item"
      data-visibility-tracking="" aria-role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-link   "
    href="/"
    title="What to Watch"
    data-sessionlink="feature=g-system&amp;ei=27XUU4m4GYmH9AbyzYCABQ&amp;ved=CEMQtSwoAA"
    data-visibility-tracking=""
    data-external-id="what_to_watch"
    data-serialized-endpoint="0qDduQEREg9GRXdoYXRfdG9fd2F0Y2g%3D"
  >
    <span class="yt-valign-container">
        <img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="thumb guide-what-to-watch-icon yt-sprite" alt="">
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
    data-sessionlink="ei=27XUU4m4GYmH9AbyzYCABQ&amp;ved=CEQQ5isoAQ"
    data-visibility-tracking="">
    <div class="guide-item-container personal-item">
          <h3>
      Best of YouTube
    </h3>

      <ul class="guide-user-links yt-uix-tdl yt-box" role="menu">
              <li class="vve-check guide-channel guide-notification-item overflowable-list-item " id="UCR44SO_mdyRq-aTJHO5QxAw-guide-item"
      data-visibility-tracking="" aria-role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-link   "
    href="/channel/UCR44SO_mdyRq-aTJHO5QxAw"
    title="Popular on YouTube"
    data-sessionlink="feature=g-channel&amp;ei=27XUU4m4GYmH9AbyzYCABQ&amp;ved=CEUQtSwoAA"
    data-visibility-tracking=""
    data-external-id="UCR44SO_mdyRq-aTJHO5QxAw"
    data-serialized-endpoint="0qDduQEaEhhVQ1I0NFNPX21keVJxLWFUSkhPNVF4QXc%3D"
  >
    <span class="yt-valign-container">
        <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-20"
      >
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <img aria-hidden="true" alt="" src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//i.ytimg.com/i/R44SO_mdyRq-aTJHO5QxAw/1.jpg" width="20"  height="20" >
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
    data-sessionlink="feature=g-channel&amp;ei=27XUU4m4GYmH9AbyzYCABQ&amp;ved=CEYQtSwoAQ"
    data-visibility-tracking=""
    data-external-id="UC-9-kyTW8ZkZNDHQJ6FgpwQ"
    data-serialized-endpoint="0qDduQEaEhhVQy05LWt5VFc4WmtaTkRIUUo2Rmdwd1E%3D"
  >
    <span class="yt-valign-container">
        <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-20"
      >
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <img aria-hidden="true" alt="" src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//i.ytimg.com/i/-9-kyTW8ZkZNDHQJ6FgpwQ/1.jpg" width="20"  height="20" >
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
    data-sessionlink="feature=g-channel&amp;ei=27XUU4m4GYmH9AbyzYCABQ&amp;ved=CEcQtSwoAg"
    data-visibility-tracking=""
    data-external-id="UCEgdi0XIXXZ-qJOFPf4JSKw"
    data-serialized-endpoint="0qDduQEaEhhVQ0VnZGkwWElYWFotcUpPRlBmNEpTS3c%3D"
  >
    <span class="yt-valign-container">
        <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-20"
      >
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <img aria-hidden="true" alt="" src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//i.ytimg.com/i/Egdi0XIXXZ-qJOFPf4JSKw/1.jpg" width="20"  height="20" >
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
    data-sessionlink="feature=g-channel&amp;ei=27XUU4m4GYmH9AbyzYCABQ&amp;ved=CEgQtSwoAw"
    data-visibility-tracking=""
    data-external-id="UCOpNcN46UbXVtpKMrmU4Abg"
    data-serialized-endpoint="0qDduQEaEhhVQ09wTmNONDZVYlhWdHBLTXJtVTRBYmc%3D"
  >
    <span class="yt-valign-container">
        <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-20"
      >
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <img aria-hidden="true" alt="" src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//i.ytimg.com/i/OpNcN46UbXVtpKMrmU4Abg/1.jpg" width="20"  height="20" >
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
    data-sessionlink="feature=g-channel&amp;ei=27XUU4m4GYmH9AbyzYCABQ&amp;ved=CEkQtSwoBA"
    data-visibility-tracking=""
    data-external-id="UC3yA8nDwraeOfnYfBWun83g"
    data-serialized-endpoint="0qDduQEaEhhVQzN5QThuRHdyYWVPZm5ZZkJXdW44M2c%3D"
  >
    <span class="yt-valign-container">
        <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-20"
      >
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <img aria-hidden="true" alt="" src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//i.ytimg.com/i/3yA8nDwraeOfnYfBWun83g/1.jpg" width="20"  height="20" >
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
    data-sessionlink="feature=g-channel&amp;ei=27XUU4m4GYmH9AbyzYCABQ&amp;ved=CEoQtSwoBQ"
    data-visibility-tracking=""
    data-external-id="UCczhp4wznQWonO7Pb8HQ2MQ"
    data-serialized-endpoint="0qDduQEaEhhVQ2N6aHA0d3puUVdvbk83UGI4SFEyTVE%3D"
  >
    <span class="yt-valign-container">
        <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-20"
      >
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <img aria-hidden="true" alt="" src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="https://yt3.ggpht.com/-DIjHsEMMaRE/AAAAAAAAAAI/AAAAAAAAAAA/q6whn_JcUH8/s88-c-k-no/photo.jpg" width="20"  height="20" >
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
    data-sessionlink="feature=g-channel&amp;ei=27XUU4m4GYmH9AbyzYCABQ&amp;ved=CEsQtSwoBg"
    data-visibility-tracking=""
    data-external-id="UCl8dMTqDrJQ0c8y23UBu4kQ"
    data-serialized-endpoint="0qDduQEaEhhVQ2w4ZE1UcURySlEwYzh5MjNVQnU0a1E%3D"
  >
    <span class="yt-valign-container">
        <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-20"
      >
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <img aria-hidden="true" alt="" src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="https://yt3.ggpht.com/-hFxEr8QHrvM/AAAAAAAAAAI/AAAAAAAAAAA/REjjL0X3gIs/s88-c-k-no/photo.jpg" width="20"  height="20" >
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
    data-sessionlink="feature=g-channel&amp;ei=27XUU4m4GYmH9AbyzYCABQ&amp;ved=CEwQtSwoBw"
    data-visibility-tracking=""
    data-external-id="UCYfdidRxbB8Qhf0Nx7ioOYw"
    data-serialized-endpoint="0qDduQEaEhhVQ1lmZGlkUnhiQjhRaGYwTng3aW9PWXc%3D"
  >
    <span class="yt-valign-container">
        <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-20"
      >
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <img aria-hidden="true" alt="" src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="//i.ytimg.com/i/YfdidRxbB8Qhf0Nx7ioOYw/1.jpg" width="20"  height="20" >
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
    data-sessionlink="feature=g-channel&amp;ei=27XUU4m4GYmH9AbyzYCABQ&amp;ved=CE0QtSwoCA"
    data-visibility-tracking=""
    data-external-id="UCBR8-60-B28hp2BmDPdntcQ"
    data-serialized-endpoint="0qDduQEaEhhVQ0JSOC02MC1CMjhocDJCbURQZG50Y1E%3D"
  >
    <span class="yt-valign-container">
        <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-20"
      >
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <img aria-hidden="true" alt="" src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" data-thumb="https://yt3.ggpht.com/-dL2jeHlm2Ok/AAAAAAAAAAI/AAAAAAAAAAA/ZCMMkRj-hrw/s88-c-k-no/photo.jpg" width="20"  height="20" >
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
    data-sessionlink="ei=27XUU4m4GYmH9AbyzYCABQ&amp;ved=CE4Q5isoAg"
    data-visibility-tracking="">
    <div class="guide-item-container personal-item">
      
      <ul class="guide-user-links yt-uix-tdl yt-box" role="menu">
              <li class="vve-check guide-channel guide-notification-item overflowable-list-item " id="guide_builder-guide-item"
      data-visibility-tracking="" aria-role="menuitem">
      
  <a class="guide-item yt-uix-sessionlink yt-valign spf-nolink   "
    href="/channels"
    title="Browse channels"
    data-sessionlink="feature=g-manage&amp;ei=27XUU4m4GYmH9AbyzYCABQ&amp;ved=CE8QtSwoAA"
    data-visibility-tracking=""
    data-external-id="guide_builder"
    data-serialized-endpoint="0qPduQECCAE%3D"
  >
    <span class="yt-valign-container">
        <img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="thumb guide-builder-icon yt-sprite" alt="">
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
      <a href="https://accounts.google.com/ServiceLogin?passive=true&amp;continue=https%3A%2F%2Fwww.youtube.com%2Fsignin%3Fnext%3D%252Fresults%253Fsearch_query%253Deagle%252Bcadsoft%252Btutorial%2526oq%253Deagle%252Bcadsoft%252B%2526aq%253D0%2526aqi%253Dg1g-m1%2526aql%253D%2526gs_l%253Dyoutube.1.0.0j0i5.270.2053.0.4045.14.12.0.2.2.0.284.1135.9j2j1.12.0...0.0.AGcdJstc1nA%26app%3Ddesktop%26action_handle_signin%3Dtrue%26feature%3Dsign_in_promo%26hl%3Den&amp;uilel=3&amp;hl=en&amp;service=youtube" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary yt-uix-button-size-default" data-sessionlink="ei=27XUU4m4GYmH9AbyzYCABQ"><span class="yt-uix-button-content">Sign In </span></a>
    </div>
  </li>

    </ul>
  </div>

    </div>
  </div>
  <div id="appbar-guide-notifications" class="hid">
        <div id="appbar-guide-notification-watch-later-video-added">
    <!--
    <div class="appbar-guide-notification "><span class="appbar-guide-notification-content-wrapper yt-valign"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="appbar-guide-notification-icon yt-sprite" alt=""><span class="appbar-guide-notification-text-content">Added to Watch Later</span></span></div>
    -->
  </div>


    <div id="appbar-guide-notification-watch-later-video-removed">
    <!--
    <div class="appbar-guide-notification "><span class="appbar-guide-notification-content-wrapper yt-valign"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="appbar-guide-notification-icon yt-sprite" alt=""><span class="appbar-guide-notification-text-content">Removed from Watch Later</span></span></div>
    -->
  </div>


    <div id="appbar-guide-notification-subscription">
    <!--
    <div class="appbar-guide-notification "><span class="appbar-guide-notification-content-wrapper yt-valign"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="appbar-guide-notification-icon yt-sprite" alt=""><span class="appbar-guide-notification-text-content">Subscription added</span></span></div>
    -->
  </div>


    <div id="appbar-guide-notification-unsubscription">
    <!--
    <div class="appbar-guide-notification "><span class="appbar-guide-notification-content-wrapper yt-valign"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="appbar-guide-notification-icon yt-sprite" alt=""><span class="appbar-guide-notification-text-content">Subscription removed</span></span></div>
    -->
  </div>



      <div id="appbar-guide-notification-playlist-like">
    <!--
    <div class="appbar-guide-notification "><span class="appbar-guide-notification-content-wrapper yt-valign"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="appbar-guide-notification-icon yt-sprite" alt=""><span class="appbar-guide-notification-text-content">Playlist added</span></span></div>
    -->
  </div>


      <div id="appbar-guide-notification-playlist-unlike">
    <!--
    <div class="appbar-guide-notification "><span class="appbar-guide-notification-content-wrapper yt-valign"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="appbar-guide-notification-icon yt-sprite" alt=""><span class="appbar-guide-notification-text-content">Playlist removed</span></span></div>
    -->
  </div>


    <div id="appbar-guide-notification-playlist-video-added">
    <!--
    <div class="appbar-guide-notification "><span class="appbar-guide-notification-content-wrapper yt-valign"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="appbar-guide-notification-icon yt-sprite" alt=""><span class="appbar-guide-notification-text-content">Added to playlist</span></span></div>
    -->
  </div>


    <div id="appbar-guide-notification-playlist-video-removed">
    <!--
    <div class="appbar-guide-notification "><span class="appbar-guide-notification-content-wrapper yt-valign"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="appbar-guide-notification-icon yt-sprite" alt=""><span class="appbar-guide-notification-text-content">Removed from playlist</span></span></div>
    -->
  </div>

    <div id="appbar-guide-notification-video-like">
    <!--
    <div class="appbar-guide-notification "><span class="appbar-guide-notification-content-wrapper yt-valign"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="appbar-guide-notification-icon yt-sprite" alt=""><span class="appbar-guide-notification-text-content">Added to Liked videos</span></span></div>
    -->
  </div>


    <div id="appbar-guide-notification-video-unlike">
    <!--
    <div class="appbar-guide-notification "><span class="appbar-guide-notification-content-wrapper yt-valign"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="appbar-guide-notification-icon yt-sprite" alt=""><span class="appbar-guide-notification-text-content">Removed from Liked videos</span></span></div>
    -->
  </div>


    <div id="appbar-guide-notification-event-reminder-set">
    <!--
    <div class="appbar-guide-notification "><span class="appbar-guide-notification-content-wrapper yt-valign"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="appbar-guide-notification-icon yt-sprite" alt=""><span class="appbar-guide-notification-text-content">You&#39;ll be reminded about this event</span></span></div>
    -->
  </div>


    <div id="appbar-guide-notification-event-reminder-removed">
    <!--
    <div class="appbar-guide-notification "><span class="appbar-guide-notification-content-wrapper yt-valign"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="appbar-guide-notification-icon yt-sprite" alt=""><span class="appbar-guide-notification-text-content">Event reminder removed</span></span></div>
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
    data-sessionlink="feature=g-playlists&amp;ei=27XUU4m4GYmH9AbyzYCABQ"
    data-visibility-tracking=""
    data-external-id="__ID__"
    data-serialized-endpoint=""
  >
    <span class="yt-valign-container">
        <img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="thumb guide-playlists-icon yt-sprite" alt="">
        <span class="display-name  no-count">
          <span>
            __TITLE__
          </span>
        </span>
    </span>
  </a>

      <div class="appbar-guide-notification guide-item-insertion-notification"><span class="appbar-guide-notification-content-wrapper yt-valign"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="appbar-guide-notification-icon yt-sprite" alt=""><span class="appbar-guide-notification-text-content">__NOTIFICATION_OVERLAY_MESSAGE__</span></span></div>
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
    data-sessionlink="feature=g-playlists&amp;ei=27XUU4m4GYmH9AbyzYCABQ"
    data-visibility-tracking=""
    data-external-id="__ID__"
    data-serialized-endpoint=""
  >
    <span class="yt-valign-container">
        <img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="thumb guide-mix-icon yt-sprite" alt="">
        <span class="display-name  no-count">
          <span>
            __TITLE__
          </span>
        </span>
    </span>
  </a>

      <div class="appbar-guide-notification guide-item-insertion-notification"><span class="appbar-guide-notification-content-wrapper yt-valign"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="appbar-guide-notification-icon yt-sprite" alt=""><span class="appbar-guide-notification-text-content">__NOTIFICATION_OVERLAY_MESSAGE__</span></span></div>
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
    data-sessionlink="feature=g-channel&amp;ei=27XUU4m4GYmH9AbyzYCABQ"
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

      <div class="appbar-guide-notification guide-item-insertion-notification"><span class="appbar-guide-notification-content-wrapper yt-valign"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="appbar-guide-notification-icon yt-sprite" alt=""><span class="appbar-guide-notification-text-content">__NOTIFICATION_OVERLAY_MESSAGE__</span></span></div>
  </li>

      -->
    </div>

  </div>

</div><div id="alerts" class="content-alignment">  
</div><div id="header">  
</div><div id="player" class="  off-screen  "><div id="theater-background"></div>  <div id="player-mole-container">

    <div id="player-unavailable" class="  hid  ">
      
    </div>

      <div id="player-api" class="player-width player-height off-screen-target player-api"></div>

          <script>if (window.ytcsi) {window.ytcsi.tick("cfg", null, '');}</script>
    <script>var ytplayer = ytplayer || {};ytplayer.config = {"url_v8": "http:\/\/s.ytimg.com\/yts\/swfbin\/player-vflSotbD3\/cps.swf", "html5": true, "url": "http:\/\/s.ytimg.com\/yts\/swfbin\/player-vflSotbD3\/watch_as3.swf", "sts": 16275, "assets": {"js": "\/\/s.ytimg.com\/yts\/jsbin\/html5player-en_US-vflCGk6yw\/html5player.js", "css": "\/\/s.ytimg.com\/yts\/cssbin\/www-player-webp-vflLh2IjB.css", "html": "\/html5_player_template"}, "params": {"allowscriptaccess": "always", "allowfullscreen": "true", "bgcolor": "#000000"}, "attrs": {"id": "movie_player"}, "min_version": "8.0.0", "args": {"autoplay": "0", "enablejsapi": 1, "fexp": "900356,902408,924222,927622,934024,934030,940650,946023", "cr": "GB", "hl": "en_US"}, "url_v9as2": "http:\/\/s.ytimg.com\/yts\/swfbin\/player-vflSotbD3\/cps.swf"};</script>


  </div>

  <div class="clear"></div>
</div>
<div id="content" class="  content-alignment  
">  




  <div class="branded-page-v2-container branded-page-base-bold-titles branded-page-v2-container-flex-width" >

    <div class="branded-page-v2-col-container">
      <div class="branded-page-v2-col-container-inner">
        <div class="branded-page-v2-primary-col">
          <div class="   yt-card  clearfix">
                <div class="branded-page-v2-primary-col-header-container branded-page-v2-primary-column-content">
      
    </div>
  <div class="branded-page-v2-body branded-page-v2-primary-column-content" id="gh-activityfeed">
            <noscript>
      <div class="yt-alert yt-alert-default yt-alert-error  ">  <div class="yt-alert-icon">
    <img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="icon master-sprite yt-sprite" alt="">
  </div>
<div class="yt-alert-buttons"><button class="yt-uix-button yt-uix-button-size-default yt-uix-button-close close yt-uix-close" type="button" onclick=";return false;" data-close-parent-class="yt-alert"><span class="yt-uix-button-content">Close </span></button></div><div class="yt-alert-content" role="alert">    <span class="yt-alert-vertical-trick"></span>
    <div class="yt-alert-message">
            Hello, you seem to have JavaScript turned off. Please enable it to see search results properly.
    </div>
</div></div>

  </noscript>



  <div class="search-header yt-uix-expander yt-uix-expander-collapsed">
      <div class="filter-top">
    <div class="filter-bar-container">
      <div class="filter-button-container">
        <button class="yt-uix-button yt-uix-button-size-small yt-uix-button-default filter-button yt-uix-expander-head" type="button" onclick=";return false;" data-button-menu-id="some-nonexistent-menu" data-button-action="" data-button-toggle="true"><span class="yt-uix-button-content">Filters </span><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-arrow yt-sprite" alt=""></button>
      </div>
      <div class="filter-crumb-spacer"></div>
      <p class="num-results">About <strong>0</strong> results</p>
    </div>
  </div>

    <div id="filter-dropdown" class="yt-uix-expander-body"><div class="filter-col"><h4 class="filter-col-title">Upload date</h4><ul><li>
  

<a class="filter  spf-link "  title="Search for <?php echo $_GET['search_query']; ?>, Last hour" href="/results?filters=hour&amp;search_query=<?php echo $searchQ; ?>&amp;lclk=hour"><span class="filter-text filter-ghost">Last hour</span></a>
</li><li>
  

<a class="filter  spf-link "  title="Search for <?php echo $_GET['search_query']; ?>, Today" href="/results?filters=today&amp;search_query=<?php echo $searchQ; ?>&amp;lclk=today"><span class="filter-text filter-ghost">Today</span></a>
</li><li>
  

<a class="filter  spf-link "  title="Search for <?php echo $_GET['search_query']; ?>, This week" href="/results?filters=week&amp;search_query=<?php echo $searchQ; ?>&amp;lclk=week"><span class="filter-text filter-ghost">This week</span></a>
</li><li>
  

<a class="filter  spf-link "  title="Search for <?php echo $_GET['search_query']; ?>, This month" href="/results?filters=month&amp;search_query=<?php echo $searchQ; ?>&amp;lclk=month"><span class="filter-text filter-ghost">This month</span></a>
</li><li>
  

<a class="filter  spf-link "  title="Search for <?php echo $_GET['search_query']; ?>, This year" href="/results?filters=year&amp;search_query=<?php echo $searchQ; ?>&amp;lclk=year"><span class="filter-text filter-ghost">This year</span></a>
</li></ul></div><div class="filter-col"><h4 class="filter-col-title">Result type</h4><ul><li>
  

<a class="filter  spf-link "  title="Search for <?php echo $_GET['search_query']; ?>, Video" href="/results?filters=video&amp;search_query=<?php echo $searchQ; ?>&amp;lclk=video"><span class="filter-text filter-ghost">Video</span></a>
</li><li>
  

<a class="filter  spf-link "  title="Search for <?php echo $_GET['search_query']; ?>, Channel" href="/results?filters=channel&amp;search_query=<?php echo $searchQ; ?>&amp;lclk=channel"><span class="filter-text filter-ghost">Channel</span></a>
</li><li>
  

<a class="filter  spf-link "  title="Search for <?php echo $_GET['search_query']; ?>, Playlist" href="/results?filters=playlist&amp;search_query=<?php echo $searchQ; ?>&amp;lclk=playlist"><span class="filter-text filter-ghost">Playlist</span></a>
</li><li>
  

<a class="filter  spf-link "  title="Search for <?php echo $_GET['search_query']; ?>, Movie" href="/results?filters=movie&amp;search_query=<?php echo $searchQ; ?>&amp;lclk=movie"><span class="filter-text filter-ghost">Movie</span></a>
</li><li>
  

<a class="filter  spf-link "  title="Search for <?php echo $_GET['search_query']; ?>, Show" href="/results?filters=show&amp;search_query=<?php echo $searchQ; ?>&amp;lclk=show"><span class="filter-text filter-ghost">Show</span></a>
</li></ul></div><div class="filter-col"><h4 class="filter-col-title">Duration</h4><ul><li>
  

<a class="filter  spf-link "  title="Search for <?php echo $_GET['search_query']; ?>, Short (~4 minutes)" href="/results?filters=short&amp;search_query=<?php echo $searchQ; ?>&amp;lclk=short"><span class="filter-text filter-ghost">Short (~4 minutes)</span></a>
</li><li>
  

<a class="filter  spf-link "  title="Search for <?php echo $_GET['search_query']; ?>, Long (20~ minutes)" href="/results?filters=long&amp;search_query=<?php echo $searchQ; ?>&amp;lclk=long"><span class="filter-text filter-ghost">Long (20~ minutes)</span></a>
</li></ul></div><div class="filter-col"><h4 class="filter-col-title">Features</h4><ul><li>
  

<a class="filter  spf-link "  title="Search for <?php echo $_GET['search_query']; ?>, HD (high definition)" href="/results?filters=hd&amp;search_query=<?php echo $searchQ; ?>&amp;lclk=hd"><span class="filter-text filter-ghost">HD (high definition)</span></a>
</li><li>
  

<a class="filter  spf-link "  title="Search for <?php echo $_GET['search_query']; ?>, CC (closed caption)" href="/results?filters=cc&amp;search_query=<?php echo $searchQ; ?>&amp;lclk=cc"><span class="filter-text filter-ghost">CC (closed caption)</span></a>
</li><li>
  

<a class="filter  spf-link "  title="Search for <?php echo $_GET['search_query']; ?>, Creative Commons" href="/results?filters=creativecommons&amp;search_query=<?php echo $searchQ; ?>&amp;lclk=creativecommons"><span class="filter-text filter-ghost">Creative Commons</span></a>
</li><li>
  

<a class="filter  spf-link "  title="Search for <?php echo $_GET['search_query']; ?>, 3D" href="/results?filters=3d&amp;search_query=<?php echo $searchQ; ?>&amp;lclk=3d"><span class="filter-text filter-ghost">3D</span></a>
</li><li>
  

<a class="filter  spf-link "  title="Search for <?php echo $_GET['search_query']; ?>, Live" href="/results?filters=live&amp;search_query=<?php echo $searchQ; ?>&amp;lclk=live"><span class="filter-text filter-ghost">Live</span></a>
</li><li>
  

<a class="filter  spf-link "  title="Search for <?php echo $_GET['search_query']; ?>, Purchased" href="/results?filters=purchased&amp;search_query=<?php echo $searchQ; ?>&amp;lclk=purchased"><span class="filter-text filter-ghost">Purchased</span></a>
</li></ul></div><div class="filter-col"><h4 class="filter-col-title">Sort by</h4><ul><li>

  

<span class="filter filter-sort  spf-link  filter-selected" ><span class="filter-text ">Relevance</span></span>
</li><li>

  

<a class="filter filter-sort  spf-link "  href="/results?search_sort=video_date_uploaded&amp;search_query=<?php echo $searchQ; ?>"><span class="filter-text ">Upload date</span></a>
</li><li>

  

<a class="filter filter-sort  spf-link "  href="/results?search_sort=video_view_count&amp;search_query=<?php echo $searchQ; ?>"><span class="filter-text ">View count</span></a>
</li><li>

  

<a class="filter filter-sort  spf-link "  href="/results?search_sort=video_avg_rating&amp;search_query=<?php echo $searchQ; ?>"><span class="filter-text ">Rating</span></a>
</li></ul></div></div>
  </div>
  <div id="results">
    

      <div class="pyv-afc-ads-container spf-nolink yt-section-hover-container"><div class="pyv-afc-ads-inner"><div class="pyv-afc-ads-video-template"><!--




    <div class="yt-lockup clearfix yt-uix-tile yt-lockup-video yt-lockup-tile"
      data-context-item-id="__video_id__"
  >
    <div class="yt-lockup-thumbnail"
    >
        <a href="__url__" class="ux-thumb-wrap yt-uix-sessionlink contains-addto  spf-link "  data-sessionlink="ei=27XUU4m4GYmH9AbyzYCABQ">    <span class="video-thumb  yt-thumb yt-thumb-185"
      >
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <img aria-hidden="true" alt="" src="__thumbnail_url__" width="185"  >
          <span class="vertical-align"></span>
        </span>
      </span>
    </span>
    <span class="video-time">__length_seconds__</span>


  <button class="yt-uix-button yt-uix-button-size-small yt-uix-button-default yt-uix-button-empty yt-uix-button-has-icon addto-button video-actions spf-nolink hide-until-delayloaded addto-watch-later-button-sign-in yt-uix-tooltip" type="button" onclick=";return false;" title="Watch Later" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="__video_id__"><span class="yt-uix-button-icon-wrapper"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-icon yt-uix-button-icon-addto yt-sprite" alt="Watch Later"></span><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-arrow yt-sprite" alt=""></button>
</a>

    </div>
    <div class="yt-lockup-content">
          <h3 class="yt-lockup-title"><a class="yt-uix-sessionlink yt-uix-tile-link  spf-link  yt-ui-ellipsis yt-ui-ellipsis-2" dir="ltr" title="__title__" data-sessionlink="ei=27XUU4m4GYmH9AbyzYCABQ" href="__url__">__title__</a></h3>

  <div class="yt-lockup-meta">
    <ul class="yt-lockup-meta-info">
<li><span class="yt-badge ad-badge-byline yt-badge-ad" >Ad</span>
by <a href="__channel_url__" class="yt-uix-sessionlink yt-user-name  spf-link " data-sessionlink="ei=27XUU4m4GYmH9AbyzYCABQ" dir="ltr">__channel_name__</a></li><li>__views__ views</li>    </ul>
  </div>


      <div class="yt-lockup-description yt-ui-ellipsis yt-ui-ellipsis-2" >
        __second_line__<br />__third_line__
    </div>


  

  

    </div>
    
  </div>

--></div><div class="pyv-afc-ads-channel-template"><!--



    <div class="yt-lockup clearfix yt-uix-tile yt-lockup-channel yt-lockup-tile"
  >
    <div class="yt-lockup-thumbnail"
    >
        <a href="__url__" class="ux-thumb-wrap yt-uix-sessionlink  spf-link " data-sessionlink="ei=27XUU4m4GYmH9AbyzYCABQ">    <span class="video-thumb  yt-thumb yt-thumb-104"
      >
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <img aria-hidden="true" alt="" src="__thumbnail_url__" width="104"  height="104" >
          <span class="vertical-align"></span>
        </span>
      </span>
    </span>
</a>

    </div>
    <div class="yt-lockup-content">
        <h3 class="yt-lockup-title"><a class="yt-uix-sessionlink yt-uix-tile-link  spf-link  yt-ui-ellipsis yt-ui-ellipsis-2" dir="ltr" title="__title__" data-sessionlink="ei=27XUU4m4GYmH9AbyzYCABQ" href="__url__">__title__</a></h3>
<div class="yt-lockup-meta"><ul class="yt-lockup-meta-info"><li><span class="yt-badge ad-badge-byline yt-badge-ad" >Ad</span>
by <a href="__channel_url__" class="yt-uix-sessionlink yt-user-name  spf-link " data-sessionlink="ei=27XUU4m4GYmH9AbyzYCABQ" dir="ltr">__channel_name__</a></li></ul></div>    <div class="yt-lockup-description yt-ui-ellipsis yt-ui-ellipsis-2" dir="ltr">
        __second_line__<br />__third_line__
    </div>
<div class="yt-lockup-badges"><ul class="item-badge-line"><li class="yt-lockup-badge-item"><span class="yt-badge " >CHANNEL</span></li></ul></div>
    </div>
    
  </div>

--></div></div>  <div class="yt-uix-clickcard ad-info-container">
    <span class="yt-uix-clickcard-target " data-position="bottomleft" data-orientation="vertical">
      <span class="ad-info-icon"></span>
    </span>
    <div class="yt-uix-clickcard-content">
<p>Visit Google's <a href="http://www.google.com/settings/ads">Ad Settings</a> to learn more about how ads are targeted or to opt out of personalized ads.</p>
    </div>
  </div>
</div>


      
<ol class="section-list">
<li>
<ol class="item-section">
<?php
foreach($dataSearch as $key => $search) {
if ($search['type'] == "video") {
// Time on vid
if ($search['lengthSeconds'] > 3600) {
$length = ltrim(gmdate("H:i:s", $search['lengthSeconds'] - 1),"0");
} else {
$lengthM = ltrim(gmdate("i", $search['lengthSeconds']),"0");
$lengthS = gmdate("s", $search['lengthSeconds'] - 1);

// Prevent things like :48 length
if ($lengthM == "") {
$lengthM = "0";
}

$length = $lengthM . ":" . $lengthS;
}

// Init badge list
$badgeList = '';

// Handle video Capabilities
if ($search['isNew'] == true) {
$badgeList = $badgeList . '<li class="yt-badge-item"><span class="yt-badge " >NEW</span></li>';
}

if ($search['is3d'] == true) {
$badgeList = $badgeList . '<li class="yt-badge-item"><span class="yt-badge " >3D</span></li>';
}

if ($search['is4k'] == true || $search['is8k'] == true) {
$badgeList = $badgeList . '<li class="yt-badge-item"><span class="yt-badge " >HD</span></li>';
}

if ($search['hasCaptions'] == true) {
$badgeList = $badgeList . '<li class="yt-badge-item"><span class="yt-badge " >CC</span></li>';
}

echo '<li><div class="yt-lockup yt-lockup-tile yt-lockup-video yt-uix-tile clearfix" data-context-item-id="' . $search['videoId'] . '"><div class="yt-lockup-thumbnail"><a href="/watch?v=' . $search['videoId'] . '" class="contains-addto yt-uix-sessionlink spf-link " data-sessionlink="itct=CD4Q3DAYACITCMmRrZ-H5b8CFYkD3Qod8iYAUCj0JFIWZWFnbGUgY2Fkc29mdCB0dXRvcmlhbA"><div class="video-thumb"><img src="//i.ytimg.com/vi/' . $search['videoId'] . '/mqdefault.jpg" width="185" height="104"/></div><span class="video-time">' . $length . '</span>

  <button class="yt-uix-button yt-uix-button-size-small yt-uix-button-default yt-uix-button-empty yt-uix-button-has-icon addto-button video-actions spf-nolink hide-until-delayloaded addto-watch-later-button-sign-in yt-uix-tooltip" type="button" onclick=";return false;" title="Watch Later" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="' . $search['videoId'] . '"><span class="yt-uix-button-icon-wrapper"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-icon yt-uix-button-icon-addto yt-sprite" alt="Watch Later"></span><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-arrow yt-sprite" alt=""></button>
</a></div><div class="yt-lockup-content"><h3 class="yt-lockup-title"><a href="/watch?v=' . $search['videoId'] . '" class="yt-uix-tile-link yt-ui-ellipsis yt-ui-ellipsis-2 yt-uix-sessionlink spf-link " data-sessionlink="itct=CD4Q3DAYACITCMmRrZ-H5b8CFYkD3Qod8iYAUCj0JFIWZWFnbGUgY2Fkc29mdCB0dXRvcmlhbA" dir="ltr">' . $search['title'] . '</a></h3><div class="yt-lockup-meta"><ul class="yt-lockup-meta-info"><li>by <b><a href="/channel/' . $search['authorId'] . '" class=" yt-uix-sessionlink spf-link  g-hovercard" data-sessionlink="itct=CD4Q3DAYACITCMmRrZ-H5b8CFYkD3Qod8iYAUCj0JA" data-ytid="' . $search['authorId'] . '">' . $search['author'] . '</a></b></li><li>' . $search['publishedText'] . '</li><li>' . number_format($search['viewCount']) . ' views</li></ul></div><div class="yt-lockup-description yt-ui-ellipsis yt-ui-ellipsis-2" dir="ltr">' . $search['descriptionHtml'] . '</div><div class="yt-lockup-badges"><ul class="yt-badge-list ">' . $badgeList . '</ul> </div></div></div></li>';
} else if ($search['type'] == "channel") {
if ($search['authorVerified'] == true) {
$verifiedHtml = '<img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-channel-title-icon-verified yt-uix-tooltip yt-sprite" data-tooltip-text="Verified" alt="">';
} else {
$verifiedHtml = '';
}

echo '<li><div class="yt-lockup yt-lockup-tile yt-lockup-channel yt-uix-tile clearfix"><div class="yt-lockup-thumbnail"><a href="/channel/' . $search['authorId'] . '" class=" yt-uix-sessionlink g-hovercard" data-sessionlink="itct=CDgQ2jAYAiITCJuU_IaRvr8CFcWaRAodaiYA_ij0JA" data-ytid="' . $search['authorId'] . '"><div class="video-thumb"><img src="' . $search['authorThumbnails'][3]['url'] . '" width="104" height="104"/></div></a></div><div class="yt-lockup-content"><h3 class="yt-lockup-title"><a href="/channel/' . $search['authorId'] . '" class="yt-uix-tile-link yt-ui-ellipsis yt-ui-ellipsis-2 yt-uix-sessionlink g-hovercard" data-sessionlink="itct=CDgQ2jAYAiITCJuU_IaRvr8CFcWaRAodaiYA_ij0JA" data-ytid="' . $search['authorId'] . '" dir="ltr">' . $search['author'] . '</a></h3><div class="yt-lockup-meta"><ul class="yt-lockup-meta-info"><li>by <b><a href="/channel/' . $search['authorId'] . '" class=" yt-uix-sessionlink g-hovercard" data-sessionlink="itct=CDgQ2jAYAiITCJuU_IaRvr8CFcWaRAodaiYA_ij0JA" data-ytid="' . $search['authorId'] . '">' . $search['author'] . '</a></b>&nbsp;' . $verifiedHtml . '</li><li>' . number_format($search['videoCount']) . ' videos</li></ul></div><div class="yt-lockup-description yt-ui-ellipsis yt-ui-ellipsis-2" dir="ltr">' . $search['descriptionHtml'] . '</div><div class="yt-lockup-badges"><ul class="yt-badge-list "><li class="yt-badge-item"><span class="yt-badge " >Channel</span></li></ul> <span class="yt-uix-button-subscription-container"><button class="yt-can-buffer yt-uix-button yt-uix-button-size-default yt-uix-subscription-button yt-uix-button-has-icon yt-uix-button-subscribe-unbranded" role="button" type="button" onclick="return false" aria-live="polite" aria-busy="false" aria-role="button" data-style-type="unbranded" data-channel-external-id="' . $search['authorId'] . '" data-sessionlink="itct=CDkQmysiEwiblPyGkb6_AhXFmkQKHWomAP4o9CQ" data-href="https://accounts.google.com/ServiceLogin?passive=true&amp;uilel=3&amp;hl=en&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26app%3Ddesktop%26continue_action%3DQUFFLUhqbUl3Si1sMDRCcWVzbkZNQWFBQkhnUUlyRUg4d3xBQ3Jtc0tsTzVSTlJKcDczcnZfNHA2T3ppbk9rYWhucFpCZUhadElORVNkaHFjTEhVLU5XTFo4YXNVUGg4Mkhsci1WUUpRQ0l1YTlPZm41QUFMX1VvaHdZSXlGZG9qMEg4X2paSXdkTTkxQ19hTXFjMUZJeUpmbWZiN1N2SHhJdk53R2NkMndnYUV6NklXWmloOW4yN042d1M4ME1VT0swak51czJmeDJXMlhVRzM3alFzelNGVFh2NDRYZjFHR1d4N1RFMEtINExackNmUHNVT2E5aVdOQndIUWJLNzNnMENR%26feature%3Dsubscribe%26hl%3Den%26next%3D%252Fchannel%252F' . $search['authorId'] . '&amp;service=youtube"><span class="yt-uix-button-icon-wrapper"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-icon yt-uix-button-icon-subscribe yt-sprite" alt=""></span><span class="yt-uix-button-content"><span class="subscribe-label" aria-label="Subscribe">Subscribe</span><span class="subscribed-label" aria-label="Unsubscribe">Subscribed</span><span class="unsubscribe-label" aria-label="Unsubscribe">Unsubscribe</span></span></button><span class="yt-subscription-button-subscriber-count-unbranded-horizontal" title="' . number_format($search['subCount']) . '">' . number_format($search['subCount']) . '</span></span> </div></div></div></li>';
}
}
?>
</ol>
</li>
</ol>


  </div>


  

    <div class="yt-uix-pager search-pager branded-page-box spf-link " role="navigation">
          
<?php
if ($page !== "1") {
echo '<a href="/results?search_query=' . $searchQ . '&amp;page=' . $page - 1 . '" class="yt-uix-button  yt-uix-pager-button yt-uix-sessionlink yt-uix-button-default yt-uix-button-size-default" data-sessionlink="ei=27XUU4m4GYmH9AbyzYCABQ" data-link-type="next" data-page="' . $page - 1 . '"><span class="yt-uix-button-content"> « Previous </span></a>';
}
?>
          
<a href="/results?search_query=<?php echo $searchQ; ?>&amp;page=1" class="yt-uix-button  yt-uix-pager-button <?php if ($page == "1") { echo 'yt-uix-button-toggled '; }?>yt-uix-sessionlink yt-uix-button-default yt-uix-button-size-default" data-sessionlink="ei=27XUU4m4GYmH9AbyzYCABQ" data-link-type="num" data-page="1" aria-label="Go to page 1"><span class="yt-uix-button-content">1 </span></a>
          
<a href="/results?search_query=<?php echo $searchQ; ?>&amp;page=2" class="yt-uix-button  yt-uix-pager-button <?php if ($page == "2") { echo 'yt-uix-button-toggled '; }?>yt-uix-sessionlink yt-uix-button-default yt-uix-button-size-default" data-sessionlink="ei=27XUU4m4GYmH9AbyzYCABQ" data-link-type="num" data-page="2" aria-label="Go to page 2"><span class="yt-uix-button-content">2 </span></a>
          
<a href="/results?search_query=<?php echo $searchQ; ?>&amp;page=3" class="yt-uix-button  yt-uix-pager-button <?php if ($page == "3") { echo 'yt-uix-button-toggled '; }?>yt-uix-sessionlink yt-uix-button-default yt-uix-button-size-default" data-sessionlink="ei=27XUU4m4GYmH9AbyzYCABQ" data-link-type="num" data-page="3" aria-label="Go to page 3"><span class="yt-uix-button-content">3 </span></a>
          
<a href="/results?search_query=<?php echo $searchQ; ?>&amp;page=4" class="yt-uix-button  yt-uix-pager-button <?php if ($page == "4") { echo 'yt-uix-button-toggled '; }?>yt-uix-sessionlink yt-uix-button-default yt-uix-button-size-default" data-sessionlink="ei=27XUU4m4GYmH9AbyzYCABQ" data-link-type="num" data-page="4" aria-label="Go to page 4"><span class="yt-uix-button-content">4 </span></a>
          
<a href="/results?search_query=<?php echo $searchQ; ?>&amp;page=5" class="yt-uix-button  yt-uix-pager-button <?php if ($page == "5") { echo 'yt-uix-button-toggled '; }?>yt-uix-sessionlink yt-uix-button-default yt-uix-button-size-default" data-sessionlink="ei=27XUU4m4GYmH9AbyzYCABQ" data-link-type="num" data-page="5" aria-label="Go to page 5"><span class="yt-uix-button-content">5 </span></a>
          
<a href="/results?search_query=<?php echo $searchQ; ?>&amp;page=6" class="yt-uix-button  yt-uix-pager-button <?php if ($page == "6") { echo 'yt-uix-button-toggled '; }?>yt-uix-sessionlink yt-uix-button-default yt-uix-button-size-default" data-sessionlink="ei=27XUU4m4GYmH9AbyzYCABQ" data-link-type="num" data-page="6" aria-label="Go to page 6"><span class="yt-uix-button-content">6 </span></a>
          
<a href="/results?search_query=<?php echo $searchQ; ?>&amp;page=7" class="yt-uix-button  yt-uix-pager-button <?php if ($page == "7") { echo 'yt-uix-button-toggled '; }?>yt-uix-sessionlink yt-uix-button-default yt-uix-button-size-default" data-sessionlink="ei=27XUU4m4GYmH9AbyzYCABQ" data-link-type="num" data-page="7" aria-label="Go to page 7"><span class="yt-uix-button-content">7 </span></a>

        
<?php
if ($page !== "7") {
echo '<a href="/results?search_query=' . $searchQ . '&amp;page=' . $page + 1 . '" class="yt-uix-button  yt-uix-pager-button yt-uix-sessionlink yt-uix-button-default yt-uix-button-size-default" data-sessionlink="ei=27XUU4m4GYmH9AbyzYCABQ" data-link-type="next" data-page="' . $page + 1 . '"><span class="yt-uix-button-content">Next » </span></a>';
}
?>
    </div>



  </div>

          </div>
        </div>
          <div class="branded-page-v2-secondary-col">
                <div id="search-secondary-col-contents">
      
        
              


  <div id="ad_creative_1" class="ad-div " style="z-index: 1">
    <div id="ad_creative_div_1"></div>
    <script>(function() {function tagMpuIframe() {var containerEl = document.getElementById('ad_creative_div_1');if (!containerEl) {return;}var iframeEl = document.createElement('iframe');var iframeSrc = '/N4061/adi/com.ytsrc.compu/software;sz=300x250;tile=1;dc_yt=1;kga=-1;kgg=-1;klg=en;kmyd=ad_creative_1;ytexp=900356,946023,940650;ord=' +Math.floor(Math.random() * 10000000000000000) +'?';iframeEl.id = 'ad_creative_iframe_1';iframeEl.width = '300';iframeEl.height = '250';iframeEl.style.cssText = 'z-index:1;';iframeEl.scrolling = 'no';iframeEl.frameBorder = '0';containerEl.appendChild(iframeEl);iframeEl.src = iframeSrc;}tagMpuIframe();})();</script>
      <div style="font-size: 10px; padding-top: 3px;" class="alignC grayText">
          <a href="/t/ads_preferences">
Advertisement
          </a>
      </div>
<script>(function() {if (1193 > document.documentElement.clientWidth) {var adIframe = document.getElementById('ad_creative_iframe_1');adIframe.parentNode.removeChild(adIframe);}})();</script>  </div>


    </div>

          </div>
      </div>
    </div>
  </div>
</div></div></div></div>  <div id="footer-container" class="yt-base-gutter"><div id="footer"><div id="footer-main"><div id="footer-logo"><a href="/" title="YouTube home"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="footer-logo-icon yt-sprite" alt=""></a></div>  <ul class="pickers yt-uix-button-group" data-button-toggle-group="optional">
      <li>
            <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-default yt-uix-button-has-icon" type="button" onclick=";return false;" id="yt-picker-language-button" data-picker-position="footer" data-picker-key="language" data-button-menu-id="arrow-display" data-button-action="yt.www.picker.load" data-button-toggle="true"><span class="yt-uix-button-icon-wrapper"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-icon yt-uix-button-icon-footer-language yt-sprite" alt=""></span><span class="yt-uix-button-content">  <span class="yt-picker-button-label">
Language:
  </span>
  English
 </span><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-arrow yt-sprite" alt=""></button>


      </li>
      <li>
            <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-default" type="button" onclick=";return false;" id="yt-picker-country-button" data-picker-position="footer" data-picker-key="country" data-button-menu-id="arrow-display" data-button-action="yt.www.picker.load" data-button-toggle="true"><span class="yt-uix-button-content">  <span class="yt-picker-button-label">
Country:
  </span>
  United Kingdom
 </span><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-arrow yt-sprite" alt=""></button>


      </li>
      <li>
            <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-default" type="button" onclick=";return false;" id="yt-picker-safetymode-button" data-picker-position="footer" data-picker-key="safetymode" data-button-menu-id="arrow-display" data-button-action="yt.www.picker.load" data-button-toggle="true"><span class="yt-uix-button-content">  <span class="yt-picker-button-label">
Safety:
  </span>
Off
 </span><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-arrow yt-sprite" alt=""></button>


      </li>
  </ul>
      <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-default yt-uix-button-has-icon yt-uix-button-reverse yt-google-help-link inq-no-click " type="button" onclick=";return false;" data-ghelp-tracking-param="" id="google-help" data-ghelp-anchor="google-help"><span class="yt-uix-button-icon-wrapper"><img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-uix-button-icon yt-uix-button-icon-questionmark yt-sprite" alt=""></span><span class="yt-uix-button-content">Help
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
      <a href="https://accounts.google.com/ServiceLogin?passive=true&continue=https%3A%2F%2Fwww.youtube.com%2Fsignin%3Fnext%3D%252Fresults%253Fsearch_query%253Deagle%252Bcadsoft%252Btutorial%2526oq%253Deagle%252Bcadsoft%252B%2526aq%253D0%2526aqi%253Dg1g-m1%2526aql%253D%2526gs_l%253Dyoutube.1.0.0j0i5.270.2053.0.4045.14.12.0.2.2.0.284.1135.9j2j1.12.0...0.0.AGcdJstc1nA%26app%3Ddesktop%26action_handle_signin%3Dtrue%26feature%3Dplaylist%26hl%3Den&uilel=3&hl=en&service=youtube" class="sign-in-link">Sign in</a> to add this to Watch Later

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
<script>spf.script.path({'www/': '//s.ytimg.com/yts/jsbin/www-en_US-vfl0MqD-i/'});var ytdepmap = {"www/base": null, "www/common": "www/base", "www/watch": "www/common", "www/videomanager": "www/common", "www/subscriptionmanager": "www/common", "www/results_starwars": "www/common", "www/results_star_trek": "www/common", "www/results": "www/common", "www/results_harlemshake": "www/common", "www/results_fibonacci": "www/common", "www/promo_join_network": "www/common", "www/legomap": "www/common", "www/feed": "www/common", "www/experiments": "www/common", "www/downloadreports": "www/common", "www/dashboard": "www/common", "www/channels": "www/common", "www/channels_accountupload": "www/common", "www/watch_webdrivertorso": "www/watch", "www/watch_videoshelf": "www/watch", "www/watch_transcript": "www/watch", "www/watch_speedyg": "www/watch", "www/watch_promos": "www/watch", "www/watch_missilecommand": "www/watch", "www/watch_live": "www/watch", "www/watch_editor": "www/watch", "www/watch_edit": "www/watch", "www/watch_commentsrealtime": "www/watch", "www/watch_commentsmoderation": "www/watch", "www/watch_autoplayrenderer": "www/watch", "www/channels_edit": "www/channels"};spf.script.declare(ytdepmap);</script><script>if (window.ytcsi) {window.ytcsi.tick("je", null, '');}</script>        <script src="//s.ytimg.com/yts/jsbin/www-search-ads-vflXT4hRo/www-search-ads.js" type="text/javascript" name="www-search-ads"></script>



  <script>
        yt.setConfig({
      'JS_PAGE_MODULES': [
        'www/results',
        ''
      ],
      'TIMING_REPORT_ON_UNLOAD': true,
      'SPF_PREFETCH': false,
      'SPF_PREFETCH_MAX': 0
    });


      yt.www.ads.pyvsearch.pageJsInit = true;
      if (yt.www.ads.pyvsearch.searchTopAdsFromAfc) {
        yt.www.ads.pyvsearch.pyvSearchTopAfcCallback(yt.www.ads.pyvsearch.searchTopAdsFromAfc);
      }
      yt.setConfig('TIMING_WAIT', ['ol', 'afc']);






      yt.setConfig({
    'GUIDED_HELP_LOCALE': "en_US",
    'GUIDED_HELP_ENVIRONMENT': "prod"
  });

  </script>
<script>yt.setConfig({'EVENT_ID': "27XUU4m4GYmH9AbyzYCABQ",'PAGE_NAME': "results",'LOGGED_IN': false,'SESSION_INDEX': null,'FORMATS_FILE_SIZE_JS': ["%s B", "%s KB", "%s MB", "%s GB", "%s TB"],'DELEGATED_SESSION_ID': null,'GAPI_HOST': "https:\/\/apis.google.com",'GAPI_HINT_PARAMS': "m;\/_\/scs\/abc-static\/_\/js\/k=gapi.gapi.en.0Okf7oXXtpw.O\/m=__features__\/rt=j\/d=1\/rs=AItRSTMGzueE0QJRmrRxQBthM2-0ikJ_cw",'GAPI_LOCALE': "en_US",'UNIVERSAL_HOVERCARDS': true,'VISITOR_DATA': "CgtVcjd4MTRtc3ZPMA%3D%3D",'APIARY_HOST': "",'APIARY_HOST_FIRSTPARTY': "",'INNERTUBE_CONTEXT_HL': "en",'INNERTUBE_CONTEXT_GL': "GB",'INNERTUBE_CONTEXT_CLIENT_VERSION': "20140722",'INNERTUBE_API_KEY': "AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8",'INNERTUBE_API_VERSION': "v1",'GOOGLEPLUS_HOST': "https:\/\/plus.google.com",'PAGEFRAME_JS': "\/\/s.ytimg.com\/yts\/jsbin\/www-pageframe-vflefHNhV\/www-pageframe.js",'JS_COMMON_MODULE': "\/\/s.ytimg.com\/yts\/jsbin\/www-en_US-vfl0MqD-i\/common.js",'PAGE_FRAME_DELAYLOADED_CSS': "\/\/s.ytimg.com\/yts\/cssbin\/www-pageframedelayloaded-webp-vflb-gkBk.css",'GUIDED_HELP_FIND_VIDEO_MANAGER_ENABLED': false,'GUIDED_HELP_CREATOR_STUDIO_ENABLED': true,'PREFETCH_CSS_RESOURCES' : ["\/\/s.ytimg.com\/yts\/cssbin\/www-player-webp-vflLh2IjB.css",''         ],'PREFETCH_JS_RESOURCES': ["\/\/s.ytimg.com\/yts\/jsbin\/html5player-en_US-vflCGk6yw\/html5player.js",''         ],'SAFETY_MODE_PENDING': false,'LOCAL_DATE_TIME_CONFIG': {"formatLongDateOnly": "MMMM d, yyyy", "formatLongDate": "MMMM d, yyyy h:mm a", "formatWeekdayShortTime": "EE h:mm a", "shortMonths": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], "amPms": ["AM", "PM"], "months": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"], "shortWeekdays": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"], "formatShortDate": "MMM d, yyyy", "weekdays": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]},'PAGE_CL': 71838233,'PAGE_BUILD_TIMESTAMP': "Thu Jul 24 10:13:56 2014 (1406222036)",'PLAYER_PERSISTENCE_REFACTOR': true,'FEEDBACK_BUCKET_ID': "Search",'FEEDBACK_LOCALE_LANGUAGE': "en",'FEEDBACK_LOCALE_EXTRAS': {"is_branded": "", "is_partner": "", "guide_subs": "NA", "logged_in": false, "experiments": "900356,902022,902408,906001,911507,912714,912719,912725,912909,914950,916929,918119,918121,919389,920605,920609,921603,921910,921911,922413,922804,924222,925011,927006,927622,927626,927881,927891,929237,929507,929940,929943,930812,930819,931017,931020,931339,931341,931943,931950,931967,933218,934024,934030,934032,934113,935020,935670,935707,937003,937217,937424,937817,938006,938302,938632,938639,938681,938703,938705,939201,940641,940650,941414,941416,941810,943301,943407,944702,945117,945401,945827,946023,947204,949001,951601", "accept_language": null}});  yt.setConfig({
    'GUIDED_HELP_LOCALE': "en_US",
    'GUIDED_HELP_ENVIRONMENT': "prod"
  });
yt.setConfig('SPF_SEARCH_BOX', true);yt.setMsg({'ADDTO_WATCH_LATER': "Watch Later",'ADDTO_WATCH_LATER_ADDED': "Added",'ADDTO_WATCH_LATER_ERROR': "Error",'ADDTO_WATCH_QUEUE': "Watch Queue",'ADDTO_WATCH_QUEUE_ADDED': "Added",'ADDTO_WATCH_QUEUE_ERROR': "Error",'ADDTO_TV_QUEUE': "TV Queue"});    yt.setConfig({
    'XSRF_TOKEN': "QUFFLUhqbmc3aE1XcnNFb0lwSlNCVnNTMEdLaW5EYUlyZ3xBQ3Jtc0ttRk1CTF9RbklYOVhteXNMYWJqNGp0bFJ1aXpqMnh5S3cteXpPaEp4eTFlZ1VmWS13WklCVW4yLWc1UTl4OEQzcFFVQ2RfcENlTDZOaFZKb1kzY0lBTzZwRTdLVW5CQ3c3dEpsb0RaTERJb0x1aFc4TGlLakJxckVkbkxWQW95anBJZ2twY0xiN18tRVQ3QzBfWnFTTUZiN1RHT3c=",
    'XSRF_REDIRECT_TOKEN': "4-1z4OLZxHOfbf4iYrqCr_btM_R8MTQwNjUzNTUxNUAxNDA2NDQ5MTE1",
    'XSRF_FIELD_NAME': "session_token"
  });

  yt.setConfig('FEED_PRIVACY_CSS_URL', "\/\/s.ytimg.com\/yts\/cssbin\/www-feedprivacydialog-webp-vflMofFq_.css");

  yt.setConfig('FEED_PRIVACY_LIGHTBOX_ENABLED', true);
yt.setConfig({'SBOX_JS_URL': "\/\/s.ytimg.com\/yts\/jsbin\/www-searchbox-vflSb1S5v\/www-searchbox.js",'SBOX_SETTINGS': {"PQ": "<?php echo $_GET['search_query']; ?>", "HAS_ON_SCREEN_KEYBOARD": false, "REQUEST_DOMAIN": "gb", "SESSION_INDEX": null, "PSUGGEST_TOKEN": null, "REQUEST_LANGUAGE": "en", "EXPERIMENT_ID": -1},'SBOX_LABELS': {"SUGGESTION_DISMISSED_LABEL": "Suggestion dismissed", "SUGGESTION_DISMISS_LABEL": "Dismiss"}});  yt.setConfig({
    'YPC_LOADER_ENABLED': true,
    'YPC_LOADER_CONFIGS': "\/ypc_config_ajax",
    'YPC_LOADER_JS': "\/\/s.ytimg.com\/yts\/jsbin\/www-ypc-vflYG8j4X\/www-ypc.js",
    'YPC_LOADER_CSS': "\/\/s.ytimg.com\/yts\/cssbin\/www-ypc-webp-vflAlXopM.css",
    'YPC_LOADER_CALLBACKS': ['yt.www.ypc.checkout.init', 'yt.www.ypc.subscription.init']
  });
  yt.setConfig('GOOGLE_HELP_CONTEXT', "search_results");
ytcsi.span('st', 281);yt.setConfig({'TIMING_ACTION': "results",'TIMING_INFO': {"yt_spf": 0, "ei": "27XUU4m4GYmH9AbyzYCABQ", "yt_li": 0, "e": "900356,902408,924222,927622,934024,934030,940650,946023", "yt_lt": "cold"}});  yt.setConfig({
    'XSRF_TOKEN': "QUFFLUhqbmc3aE1XcnNFb0lwSlNCVnNTMEdLaW5EYUlyZ3xBQ3Jtc0ttRk1CTF9RbklYOVhteXNMYWJqNGp0bFJ1aXpqMnh5S3cteXpPaEp4eTFlZ1VmWS13WklCVW4yLWc1UTl4OEQzcFFVQ2RfcENlTDZOaFZKb1kzY0lBTzZwRTdLVW5CQ3c3dEpsb0RaTERJb0x1aFc4TGlLakJxckVkbkxWQW95anBJZ2twY0xiN18tRVQ3QzBfWnFTTUZiN1RHT3c=",
    'XSRF_REDIRECT_TOKEN': "4-1z4OLZxHOfbf4iYrqCr_btM_R8MTQwNjUzNTUxNUAxNDA2NDQ5MTE1",
    'XSRF_FIELD_NAME': "session_token"
  });
  yt.setConfig('THUMB_DELAY_LOAD_BUFFER', 0);
if (window.ytcsi) {window.ytcsi.tick("jl", null, '');}</script>
</body></html>

