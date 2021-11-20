<?php

setcookie('username', '', -3600);
setcookie('sign', 'a');
header("Location: ../landing-page.php");
exit;

?>