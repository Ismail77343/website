<?php
use Controller\Controller\Control;
class comments extends Control{
   function __construct(){
        if(isset($_GET["Del"])){
            $this->Delete();
        }
    }
    private function Delete(){
        $Q=$this->Q_Delete("connect",$_GET["Del"],"`id`");
        $Err="";
        $this->B_State("msg",$Err);
    }
}
$C=new comments();
?>
