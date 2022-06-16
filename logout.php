<?php

if (isset($_COOKIE['usertype'])) {
    setcookie("id", "", time() - 3600);
    setcookie("usertype", "", time() - 3600);
    header("Location:home.php");
} else {
    header("Location:home.php");
}

?>