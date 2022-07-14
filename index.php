<?php
  $pdo = new PDO ("pgsql:host=[host];dbname=[Database];user=[User];
                   password=[Password]");
  var_dump ($pdo->getAttribute (PDO::ATTR_SERVER_VERSION));
?>
