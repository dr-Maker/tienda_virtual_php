<?php

function controller_autoload($class_name){
    include 'controllers/'.$class_name.'.php';
}

spl_autoload_register("controller_autoload");