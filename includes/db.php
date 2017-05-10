<?php

$connection = mysqli_connect (
  $config['db']['server'],
  $config['db']['username'],
  $config['db']['password'],
  $config['db']['name']
);

if ( $connection == false )
{
  echo 'не получится братан';
  echo mysqli_connect_error();
  exit();
}
mysql_query("SET NAMES utf8");
