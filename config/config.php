<?php

$config = array();
Config::Set('router.page.digest', 'PluginDigest_ActionDigest');
Config::Set('block.rule_greet',array(
	'action'  => array('index' ),
	'blocks'  => array( 'right' => array('greetings'=>array('priority'=>101,'params'=>array('plugin'=>'greetings')))))
	);
return $config;

?>