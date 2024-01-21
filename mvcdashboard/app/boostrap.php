<?php



spl_autoload_register(function ($class) {
    require_once('libraries/' . $class . '.php');
});



require_once('libraries/Core.php');

$obj = new Core();
$obj->geturl();
?>