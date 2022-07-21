<?php
  $pdo = new PDO ("pgsql:host=ec2-54-155-110-181.eu-west-1.compute.amazonaws.com;dbname=dfi2g2clnmgms5;user=xodwsmsnsplecw;
                   password=14ed8601b9a86b0432906a894d4751d78dd5de5e576eb7aa22fc56ccad9d006b");
  var_dump ($pdo->getAttribute (PDO::ATTR_SERVER_VERSION));
?>
