<?php
header('Content-Type: application/json');

// Include config file
include('./config.php');

// URL of the file you want to request
$url = $invidApi . '/api/v1/videos/' . $_GET['video_id'];

// Cache file path
$cache_file = './cache/videos/' . $_GET['video_id'] . '.json';

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
$descriptionBland = str_replace("\n", " ", $dataVid['description']);
$likeCount = number_format($dataVid['likeCount']);
$dislikeCount = number_format($dataVid['dislikeCount']);
$viewCount = number_format($dataVid['viewCount']);
$author = $dataVid['author'];
$authorId = $dataVid['authorId'];
$authorVerified = $dataVid['authorVerified'];
$authorImg = $dataVid['authorThumbnails'][1]['url'];
$genre = $dataVid['genre'];
$storyboard = str_replace("/", "\/", $dataVid['storyboards'][2]['templateUrl']);
$vidLength = $dataVid['lengthSeconds'] - 1;

// Do video time
$date = $dataVid['published'];
$vidDate = date('d M, Y', $date);
?>
{"video_info": {"view_count_string": "<?php echo $viewCount; ?> Views", "view_count": "<?php echo $dataVid['viewCount']; ?>", "dislikes_count_unformatted": 0, "likes_count_unformatted": 5, "description": "<?php echo $descriptionBland; ?>", "subscription_ajax_token": "QUFFLUhqbnJBNkNyZHBITFJIbHo3Y0JsOG96eFlMbmxjZ3xBQ3Jtc0ttWG85N05ZNVFadDYwemJaZHNTbExLVnNYS213QXN3aWxhME94cjM3WlRnNDFhQ2ZRRENjUGVZQmtoWmpDdFdaQnA3Z1hNMElaRmZmRU00UFBJd3lpMmhOaUVSSU9ZZzJRMTZQSWZtWmMtLTNVejRVQW9sc21JS2labnZPdl96ZlM0bmlfcl96djBra3VMM1pvcHg4QWdlbWV0eGc="}, "watch_next": {"id": "nz58R62wALI", "title": "Minecraft Jump Battle Folge 6: Endlich wieder JumpBattle!!!", "view_count": 19}, "user_info": {"channel_title": "<?php echo $author; ?>", "public_name": "<?php echo $author; ?>", "channel_external_id": "<?php echo $authorId; ?>", "username": "<?php echo $author; ?>", "channel_banner_url": "https:\/\/i.ytimg.com\/u\/Df7vGbF6brgHBRVEWADP_A\/channels4_banner.jpg?v=53bbe042", "channel_paid": 0, "channel_url": "\/channel\/<?php echo $authorId; ?>", "external_channel_id": "<?php echo $authorId; ?>", "subscription_button_html": "\u003cspan class=\" yt-uix-button-subscription-container\" \u003e\u003cbutton class=\"yt-uix-button yt-uix-button-size-default yt-uix-button-subscribe-branded yt-uix-button-has-icon yt-uix-subscription-button yt-can-buffer\" type=\"button\" onclick=\";return false;\" aria-busy=\"false\" aria-role=\"button\" aria-live=\"polite\" data-style-type=\"branded\" data-sessionlink=\"ei=IG7YU5DRBMz-qQWjoYKgDQ\u0026amp;feature=trailer-endscreen\" data-channel-external-id=\"UCDf7vGbF6brgHBRVEWADP_A\" data-href=\"https:\/\/accounts.google.com\/ServiceLogin?service=youtube\u0026amp;uilel=3\u0026amp;hl=de\u0026amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Fapp%3Ddesktop%26next%3D%252Fchannel%252F<?php echo $authorId; ?>%26feature%3Dsubscribe%26continue_action%3DQUFFLUhqazFNYnFZbzZUQnlVUF9JYmZTcHNQcDBJQV9KUXxBQ3Jtc0ttM2dfUXRNM1NTRmdFRTFGcFU5dDlyakt0QjExRU5HWkNmcHBoRnpiQU9ESTRyRG1KQV9zazgyWEluSXdEbXNkN3dYRElza09SSUFXX1RpVG1ya0ZHb3hJdzBFcFRYZHExaWFiSVZPMHZSREZVNDlOS2tiY0N2SUNnRjk3OWZMYVVGRDh2cXFqT1FXaUY3ZEJZLXc2b29pNXA1TUItN0dtWlJkdkViYngyWVJXN1ZRNFdJNWNVaGIxaUhvVXJhekVzSzdDZkQ%253D%26action_handle_signin%3Dtrue%26hl%3Dde\u0026amp;passive=true\"\u003e\u003cspan class=\"yt-uix-button-icon-wrapper\"\u003e\u003cimg src=\"http:\/\/s.ytimg.com\/yts\/img\/pixel-vfl3z5WfW.gif\" alt=\"\" class=\"yt-uix-button-icon yt-uix-button-icon-subscribe yt-sprite\"\u003e\u003c\/span\u003e\u003cspan class=\"yt-uix-button-content\"\u003e\u003cspan class=\"subscribe-label\" aria-label=\"Abonnieren\"\u003eSubscribe\u003c\/span\u003e\u003cspan class=\"subscribed-label\" aria-label=\"Abmelden\"\u003eSubscribed\u003c\/span\u003e\u003cspan class=\"unsubscribe-label\" aria-label=\"Abmelden\"\u003eUnsubscribe\u003c\/span\u003e \u003c\/span\u003e\u003c\/button\u003e\u003cspan class=\"yt-subscription-button-subscriber-count-branded-horizontal\" \u003e30\u003c\/span\u003e  \u003cspan class=\"yt-subscription-button-disabled-mask\" title=\"\"\u003e\u003c\/span\u003e\n\u003c\/span\u003e", "external_id": "Df7vGbF6brgHBRVEWADP_A", "subscriber_count": "30", "channel_logo_url": "<?php echo $authorImg; ?>", "image_url": "<?php echo $authorImg; ?>", "subscriber_count_string": "\u003cstrong\u003e30\u003c\/strong\u003e Subscribers"}}