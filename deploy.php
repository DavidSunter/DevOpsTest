<?php
  echo "Deploying Code";
  $message=shell_exec("/root/www/deploy.sh");
  print_r($message);
 ?>
