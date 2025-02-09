<?php
header("HTTP/1.1 500 Internal Server Error");
?>
<html>
<head>
<title>500 Internal Server Error</title>
</head>
<h1>500 Internal Server Error</h1>
<p>Sorry, something went wrong.</p>
<p>A team of highly trained monkeys has been dispatched to deal with this situation.</p>
<p>If you see them, show them this information:</p>
<code><?php echo error_get_last(); ?></code>
</html>