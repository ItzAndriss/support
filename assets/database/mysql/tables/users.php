<?php
if(!empty($_GET["prefix"])){
  echo "CREATE TABLE IF NOT EXISTS `".$_GET["prefix"]."users` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `username` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `reg_date` date NOT NULL,
    `reg_ip` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
  COMMIT;"
 }
?>
