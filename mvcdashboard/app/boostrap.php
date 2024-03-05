<?php

require_once 'config/config.php';
require_once 'helpers/redirect.php';
require_once 'helpers/flash.php';


spl_autoload_register(function ($class) {
    require_once ('libraries/' . $class . '.php');
});




?>