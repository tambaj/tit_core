<?php 


require 'config.php';
require 'util/Auth.php';

function __autoload($class){

	require LIBS. $class .".php";
}

require LIBS. 'Form/Val.php';

$bootstrap = new Bootstrap();

$bootstrap->init();

