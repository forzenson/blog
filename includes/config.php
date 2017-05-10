<?php
$config = array (
  'title' => 'Мой первый блог',
  'vk_url' => 'http://vk.com/',

  'db' => array (
    'server' => 'git.cms',
    'username' => 'root',
    'password' => '',
    'name' => 'firstblog'
    )
  );
mysql_query("SET NAMES utf8");
require "db.php";
