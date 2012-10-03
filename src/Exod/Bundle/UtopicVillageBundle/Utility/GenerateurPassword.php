<?php


class GenerateurPassword{
	static function newChaine( $chrs = "") {
		if( $chrs == "" ) $chrs = 8;
		$chaine = "";
	
		$list = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		mt_srand((double)microtime()*1000000);
		$newstring="";
	
		while( strlen( $newstring )< $chrs ) {
			$newstring .= $list[mt_rand(0, strlen($list)-1)];
		}
		return $newstring;
	}
}

?>
