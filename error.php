
<!DOCTYPE html>
<html>
  <head>
    <title>404 Not Found</title>
      <base target="_top">
     <link rel="stylesheet" href="//s.ytimg.com/yts/cssbin/www-core-vflyfJFUS.css" name="www-core">

     <link rel="stylesheet" href="//s.ytimg.com/yts/cssbin/www-error-vflPbKJj6.css" name="www-error">

     <link rel="stylesheet" href="//s.ytimg.com/yts/cssbin/www-pageframe-vflF__vZT.css" name="www-pageframe">
  </head>
  <body>
    <div id="error-page">
      <div id="error-page-content">
        <img id="error-page-hh-illustration" src="//s.ytimg.com/yts/img/image-hh-404-vflvCykRp.png" alt="">
<?php
if (isset($_GET['error'])) {
echo '        <p>
' . $_GET['error'] . '
        </p>';
} else {
echo '        <p>
We\'re sorry, the page you requested cannot be found.
        </p>';
}
?>
        <p>Try searching for something else.</p>
        <div id="yt-masthead">
              <a id="logo-container" href="/" title="YouTube home" class="     spf-link 
"><img id="logo" src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="YouTube home"></a>

          <form id="masthead-search" class="search-form consolidated-form" action="/results" onsubmit="if (_gel(&#39;masthead-search-term&#39;).value == &#39;&#39;) return false;"><button class="yt-uix-button yt-uix-button-size-default yt-uix-button-default search-btn-component search-button" type="submit" onclick="if (_gel(&#39;masthead-search-term&#39;).value == &#39;&#39;) return false; _gel(&#39;masthead-search&#39;).submit(); return false;;return true;" tabindex="2" id="search-btn" dir="ltr"><span class="yt-uix-button-content">Search </span></button><div id="masthead-search-terms" class="masthead-search-terms-border" dir="ltr"><label><input id="masthead-search-term" autocomplete="off"  class="search-term yt-uix-form-input-bidi" name="search_query" value="" type="text" tabindex="1" title="Search"></label></div></form>
        </div>
      </div>
      <span id="error-page-vertical-align"></span>
    </div>
      <script src="//s.ytimg.com/yts/jsbin/www-notfound-vfl0-gUFq/www-notfound.js" type="text/javascript" name="www-notfound"></script>

    <script>
      yt.setConfig({'SBOX_JS_URL': "\/\/s.ytimg.com\/yts\/jsbin\/www-searchbox-vflSb1S5v\/www-searchbox.js",'SBOX_SETTINGS': {"REQUEST_LANGUAGE": "en", "REQUEST_DOMAIN": "us", "HAS_ON_SCREEN_KEYBOARD": false},'SBOX_LABELS': {"SUGGESTION_DISMISSED_LABEL": "Suggestion dismissed", "SUGGESTION_DISMISS_LABEL": "Dismiss"}});
      yt.www.notfound.init();
    </script>
  </body>
</html>