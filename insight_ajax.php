<?php
header('Content-Type: text/xml');

if (isset($_GET['action_get_statistics_and_data']) && $_GET['action_get_statistics_and_data'] == 1) {
?>
<?xml version="1.0" encoding="utf-8"?><root><error_message><![CDATA[Invalid request.]]></error_message><return_code><![CDATA[1]]></return_code></root>
<?php
}
?>