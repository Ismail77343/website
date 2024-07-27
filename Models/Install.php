<?php
namespace Model\Install;
class Install{
    
   public function Restore($conn,$filePath="Models/DB/DB.sql")
    {
        $sql = '';
        $error = '';
        
        if (file_exists($filePath)) {
            echo "Found";
            $lines = file($filePath);
            
            foreach ($lines as $line) {
                
                // Ignoring comments from the SQL script
                if (substr($line, 0, 2) == '--' || $line == '') {
                    continue;
                }
                
                $sql .= $line;
                
                if (substr(trim($line), - 1, 1) == ';') {
                    $result = mysqli_query($conn, $sql);
                    if (! $result) {
                        $error .= mysqli_error($conn) . "\n";
                    }
                    $sql = '';
                }
            } // end foreach
            
            if ($error) {
                $response = array(
                    "type" => "error",
                    "message" => $error
                );
            } else {
                $response = array(
                    "type" => "success",
                    "message" => "Database Restore Completed Successfully."
                );
            }
        } // end if file exists
        return $response;
    }
    public  function Create_DB($DB,$conn){
        $SQL="CREATE DATABASE $DB ";
        $WQ=mysqli_query($conn,$SQL);
        return $WQ;
    }
    public function Make_Conn_F($Name,$Pass,$NameDB){
		$Make_Conn='<?php
	namespace Model\Conn{
	class Connected{
		private $UName 	= "'.$Name.'";
		private $Pass	="'.$Pass.'";
		private $Host	="localhost";
		private $DB		="'.$NameDB.'";
		
		public function Connect(){
			$Con=@mysqli_connect($this->Host,$this->UName,$this->Pass,$this->DB);
			if($Con){
                mysqli_query($Con,"SET NAMES UTF8");
				return $Con;
			}
		}
	}
	
}
?>';
					    $file = fopen("Models/Connect.php",'w+');
						fwrite($file,$Make_Conn);
						fclose($file);
	}

}



?>