<?php
if ($_GET['gender'] == "female") {
      require_once("templates/girl.php");
   }else {
      require_once("templates/boy.php");
   }

?>