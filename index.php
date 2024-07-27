<?php
session_start();
include_once("Models/Connect.php");
include_once("Models/Query.php");
include_once("Controllers/Controller.php");
use  Controller\Controller\Control;
$ctrl=new Control();
$Conn=$ctrl->Connect();

$directory = new DirectoryIterator(dirname(__FILE__));
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
$url = "https://";   
else  
$url = "http://";

$dir=str_replace("\\","/",__DIR__);
$P=str_replace($_SERVER['DOCUMENT_ROOT'],"",$dir);

define("_Project",$url.$_SERVER['HTTP_HOST']."/".$P);
define("Pro",$P);

if($Conn){
    if(isset($_GET["open"])){
        $open=$_GET["open"];
        include_once("Views/Web/header.php");
        include_once($open);
        include_once("Views/Web/footer.php");

    }
    elseif(isset($_GET["admin_login"])){
        $open=$_GET["admin_login"];
        
        include_once($open);
    }
    elseif(isset($_GET["admin"])){
        $open=$_GET["admin"];
        include_once("Views/Admin/header.php");
        include_once($open);
        include_once("Views/Admin/footer.php");
    }
    elseif(isset($_GET["Controller"])){
        $open=$_GET["Controller"];
        if(!isset($_GET["allow"]))
        {
            if(isset($_SESSION["User"]))
                include_once($open);
            else{
                include_once("Views/index.php");
            }
        }else{
            
            include_once($open);
        }
    }
}else{
    if(isset($_GET["Install"])){
        $open=$_GET["Install"];
        include_once($open);
    }else{
        include_once("Views/Admin/install/install.php");
    }
}
?>