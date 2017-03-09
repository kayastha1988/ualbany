<?php

setcookie("user","", time()-3600);
setcookie("id","", time()-3600);
header("Location:index.php?err=Logged out!");
session_start();
session_destroy();
unset($_SESSION["cart"]);

?>