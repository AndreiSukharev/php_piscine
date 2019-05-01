<?php

if ($_SERVER['PHP_AUTH_USER'] === "zaz" && $_SERVER['PHP_AUTH_PW'] === "jaimelespetitssponeys"){

    echo ("<html><body>

Hello Zaz<br/>
<img src=\"../img/42.png\">

</body></html>
");


}
//header('WWW-Authenticate: Basic realm="My Realm"');
//header('HTTP/1.0 401 Unauthorized');
print_r($_SERVER);
?>