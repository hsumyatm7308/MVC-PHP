<?php

function active($url)
{
    if ($_SERVER['REQUEST_URI'] == '/mvc/mvcdashboard/' . $url) {
        echo "rounded-l-md bg-white text-teal-900";
    } else {
        echo "";
    }

}




?>