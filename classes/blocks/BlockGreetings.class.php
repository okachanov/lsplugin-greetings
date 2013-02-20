<?php

class PluginGreetings_BlockGreetings extends Block {
	public function Exec() {
		$sPhraseUnparsed = $this->PluginGreetings_Greetings_GetRandomPhrase();
		
		if($oUser = $this->User_GetUserCurrent()){
			$sPhraseParsed = str_replace('%username%','<b>'.$oUser->getLogin().'</b>',$sPhraseUnparsed);
		}else $sPhraseParsed = $sPhraseUnparsed;
	
		$this->Viewer_Assign('sPhraseParsed',$sPhraseParsed);
		$this->Viewer_Assign('sPhraseUnparsed',$sPhraseUnparsed);		
	}
}

?>