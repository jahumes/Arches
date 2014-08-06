<?php
$directory = "assets/stylesheets";

require "scssphp/scss.inc.php";
scss_server::serveFrom($directory);