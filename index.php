<?php
  $pdo = new PDO ("pgsql:host=ec2-99-80-170-190.eu-west-1.compute.amazonaws.com;dbname=d4um8kn4vvubvj;user=ogqdkdyymaudqr;
                   password=875862ff4cc3abd55689b3d3ae76f246e952ea4dda975c5a0108ac8f18676901");
  var_dump ($pdo->getAttribute (PDO::ATTR_SERVER_VERSION));
?>
