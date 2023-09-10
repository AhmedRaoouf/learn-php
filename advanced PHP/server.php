<?php

echo $_SERVER['REQUEST_SCHEME']."<br>"; // http or https

echo $_SERVER['REQUEST_METHOD']."<br>"; // GET or POST

echo $_SERVER['SERVER_NAME']."<br>"; // server name (localhost)

echo $_SERVER['REQUEST_URI']."<br>";  // URL

echo $_SERVER['QUERY_STRING']."<br>";// query string

echo "<hr>";
echo $_SERVER['DOCUMENT_ROOT']."<br>"; // root

echo $_SERVER['SCRIPT_NAME']."<br>"; // script URL
