<?php

include_once('silnikInterface.php');

class Silnik implements SilnikInterface{

	public $moc;

	public function Silnik($moc){
		$this->moc=$moc;
	}
	public function getMoc(){
		return $this->moc;
	}

}







?>