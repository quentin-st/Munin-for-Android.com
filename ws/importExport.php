<?php
header("Status: 301 Moved Permanently");
header("Location: http://ws.munin-for-android.com/importExport.php?". $_SERVER['QUERY_STRING']);
exit;
