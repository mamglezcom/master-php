<?php

function app_autoloader($class,$clase){
    require_once 'clases/'.$class.'.php';
    require_once 'class/'.$clase.'.php';
}

spl_autoload_register('app_autoloader');