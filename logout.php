<?php

if (isset($_COOKIE['portalSession'])) {
    unset($_COOKIE['portalSession']); 
    // setcookie('portalSession', null, -1, '/'); 
    setcookie("portalSession", "", time() - 3600);
    header("Location: index.php");   
}

?>