<?php
	namespace Model\Conn{
	class Connected{
		private $UName 	= "root";
		private $Pass	="";
		private $Host	="localhost";
		private $DB		="shop";
		
		public function Connect(){
			$Con=@mysqli_connect($this->Host,$this->UName,$this->Pass,$this->DB);
			if($Con){
                mysqli_query($Con,"SET NAMES UTF8");
				return $Con;
			}
		}
	}
	
}
?>