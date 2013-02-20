<?php
if (!class_exists('Plugin')) {
	die('Double bass!');
}

class PluginGreetings extends Plugin
{
	public function Activate(){
		return true;
	}
	

	public function Deactivate(){
		return true;
	}
	
	public function Init(){		
	}
		
}

?>
