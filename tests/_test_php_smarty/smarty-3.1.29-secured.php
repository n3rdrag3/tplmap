<?php
require('lib/smarty-3.1.29/libs/Smarty.class.php');
$smarty = new Smarty;

$tpl=$_GET['inj'];

echo($smarty->fetch('string:'.$tpl));
?>