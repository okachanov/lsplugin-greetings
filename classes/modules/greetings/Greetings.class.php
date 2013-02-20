<?php

class PluginGreetings_ModuleGreetings extends Module {		
		
	public function Init() {		
	}
	
	public function GetRandomPhrase(){
		$sFilePath = Plugin::GetTemplatePath(__CLASS__).'list.txt';
		$aPhrases = file($sFilePath);
		
		return $aPhrases[rand(0,count($aPhrases)-1)];
	
	}
	
}
?>