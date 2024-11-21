<?php
//Power Up
define("DB_HOST", "localhost");
mysql_connect("localhost", "id18293863_root", "IVsi_pdcM!=J3/zF", "id18293863_trackers") ;
//Find Destination Page
$redirect = mysql_real_escape_string($_GET['page']);
//Record Metrics
$page_insert = mysql_query("INSERT INTO tracking_table (`rec_use_page`, `rec_use_date`) VALUES ('$redirect', now())");
//Redirect
header("Location: $redirect");
?>