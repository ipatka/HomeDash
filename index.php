<?php
session_start();

require $_SERVER['DOCUMENT_ROOT'].'/controller/Home.php';

$Home = new Controller_Home();
$tpl = $Home->templates->loadTemplate('Home.mustache');
$data = $Home->route();


echo $tpl->render($data);



