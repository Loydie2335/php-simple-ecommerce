<?php 
require "config.php";


function __autoload(string $classname) : void {
    require_once "Model/".$classname.".php";
}

?>