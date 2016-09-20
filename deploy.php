<?php
  echo "Deploying Code";
  $key = $_POST['payload'];
  if ($key == "password") {
    $message=shell_exec("/root/www/deploy.sh");
    print_r($message);
  }

 ?>
