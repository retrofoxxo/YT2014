<?php
header('Content-type: Application/json');

// add config
include('config.php');

// URL of the file you want to request
$url = $invidApi . '/api/v1/channels/' . $_GET['channel_id'] . '/videos?continuation=' . $_GET['continuation'];

$data = file_get_contents($url);

$dataVids = json_decode($data, true);

if (isset($_GET['action_load_more_videos']) && $_GET['action_load_more_videos'] == 1) {
if (isset($dataVids['continuation'])) {
echo '{"load_more_widget_html": "\n    \n\n\n    \u003cbutton class=\"yt-uix-button yt-uix-button-size-default yt-uix-button-default load-more-button yt-uix-load-more \" type=\"button\" onclick=\";return false;\" data-uix-load-more-target-id=\"channels-browse-content-grid\" data-uix-load-more-href=\"\/c4_browse_ajax?action_load_more_videos=1\u0026amp;flow=grid\u0026amp;view=0\u0026amp;continuation=' . $dataVids['continuation'] . '\u0026amp;channel_id=' . $_GET['channel_id'] . '\u0026amp;sort=p\u0026amp;fluid=True\"\u003e\u003cspan class=\"yt-uix-button-content\"\u003e  \u003cspan class=\"load-more-loading hid\"\u003e\n      \u003cspan class=\"yt-spinner\"\u003e\n      \u003cimg src=\"https:\/\/s.ytimg.com\/yts\/img\/pixel-vfl3z5WfW.gif\" class=\"yt-spinner-img yt-sprite\" alt=\"Loading icon\"\u003e\n\nLoading...\n  \u003c\/span\u003e\n\n  \u003c\/span\u003e\n  \u003cspan class=\"load-more-text\"\u003e\nLoad more\n  \u003c\/span\u003e\n \u003c\/span\u003e\u003c\/button\u003e\n\n", "content_html": "';
} else {
echo '{"load_more_widget_html": "", "content_html": "';
}

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

echo '        \u003cli class=\"channels-content-item yt-shelf-grid-item\"\u003e\n        \n\n\n\n    \u003cdiv class=\"yt-lockup clearfix  yt-lockup-video yt-lockup-grid\"\n      data-context-item-id=\"' . $video['videoId'] . '\"\n  \u003e\n    \u003cdiv class=\"yt-lockup-thumbnail\"\n    \u003e\n        \u003ca href=\"\/watch?v=' . $video['videoId'] . '\" class=\"ux-thumb-wrap yt-uix-sessionlink yt-fluid-thumb-link contains-addto \"  data-sessionlink=\"feature=c4-videos-u\u0026amp;ei=D9nYU7n-BM7uqQWhjIKYBA\"\u003e    \u003cspan class=\"video-thumb  yt-thumb yt-thumb-288 yt-thumb-fluid\"\n      \u003e\n      \u003cspan class=\"yt-thumb-default\"\u003e\n        \u003cspan class=\"yt-thumb-clip\"\u003e\n          \u003cimg aria-hidden=\"true\" alt=\"\" src=\"\/\/i.ytimg.com\/vi\/' . $video['videoId'] . '\/mqdefault.jpg\" width=\"288\"  \u003e\n          \u003cspan class=\"vertical-align\"\u003e\u003c\/span\u003e\n        \u003c\/span\u003e\n      \u003c\/span\u003e\n    \u003c\/span\u003e\n    \u003cspan class=\"video-time\"\u003e' . $length . '\u003c\/span\u003e\n\n\n  \u003cbutton class=\"yt-uix-button yt-uix-button-size-small yt-uix-button-default yt-uix-button-empty yt-uix-button-has-icon addto-button video-actions spf-nolink hide-until-delayloaded addto-watch-later-button-sign-in yt-uix-tooltip\" type=\"button\" onclick=\";return false;\" title=\"Watch Later\" data-button-menu-id=\"shared-addto-watch-later-login\" data-video-ids=\"' . $video['videoId'] . '\"\u003e\u003cspan class=\"yt-uix-button-icon-wrapper\"\u003e\u003cimg src=\"https:\/\/s.ytimg.com\/yts\/img\/pixel-vfl3z5WfW.gif\" class=\"yt-uix-button-icon yt-uix-button-icon-addto yt-sprite\" alt=\"Watch Later\"\u003e\u003c\/span\u003e\u003cimg src=\"https:\/\/s.ytimg.com\/yts\/img\/pixel-vfl3z5WfW.gif\" class=\"yt-uix-button-arrow yt-sprite\" alt=\"\"\u003e\u003c\/button\u003e\n\u003c\/a\u003e\n\n    \u003c\/div\u003e\n    \u003cdiv class=\"yt-lockup-content\"\u003e\n          \u003ch3 class=\"yt-lockup-title\"\u003e\u003ca class=\"yt-uix-sessionlink yt-uix-tile-link  yt-ui-ellipsis yt-ui-ellipsis-2\" dir=\"ltr\" title=\"' . str_replace('"', '\u0026quot;', $video['title']) . '\" data-sessionlink=\"feature=c4-videos-u\u0026amp;ei=D9nYU7n-BM7uqQWhjIKYBA\" href=\"\/watch?v=' . $video['videoId'] . '\"\u003e' . str_replace('"', '\u0026quot;', $video['title']) . '\u003c\/a\u003e\u003c\/h3\u003e\n\n  \u003cdiv class=\"yt-lockup-meta\"\u003e\n    \u003cul class=\"yt-lockup-meta-info\"\u003e\n      \u003cli\u003e' . number_format($video['viewCount']) . ' views\u003c\/li\u003e\n        \u003cli class=\"yt-lockup-deemphasized-text\"\u003e\n            ' . $video['publishedText'] . '\n        \u003c\/li\u003e\n    \u003c\/ul\u003e\n  \u003c\/div\u003e\n  \n  \n  \n\n    \u003c\/div\u003e\n    \n  \u003c\/div\u003e\n\n\n\n    \u003c\/li\u003e\n';
}
}
echo '\u003e\n    \u003c\/ul\u003e\n  \u003c\/div\u003e\n  \n  \n  \n\n    \u003c\/div\u003e\n    \n  \u003c\/div\u003e\n\n\n\n    \u003c\/li\u003e\n\n"}';
?>