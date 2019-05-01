<?php

function ft_ok(){

    $img = file_get_contents("../img/42.png");
    $img = base64_encode($img);
    echo ("<html><body>");
    echo ("Hello Zaz<br/>");
    echo ("<img src='data:image/png;base64,$img'>");
    echo ("</body></html>\n");

}

function ft_bad(){
    echo ("<html><body>That area is accessible for members only</body></html>\n");
}


function main(){

    if ($_SERVER['PHP_AUTH_USER'] === "zaz" && $_SERVER['PHP_AUTH_PW'] === "jaimelespetitssponeys") {
        ft_ok();
        exit();
    }
    else {
        header("WWW-Authenticate: Basic realm= ''Member area''");
        header('HTTP/1.0 401 Unauthorized');
        ft_bad();
    }
}

main();

//curl --user zaz:jaimelespetitssponeys localhost:8080
//curl -v --user root:root localhost:8080
?>