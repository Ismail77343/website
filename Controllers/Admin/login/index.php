<?php
use Controller\Controller\Control;
class Login extends Control{
   function __construct(){
        if(isset($_POST["login"])){
            $this->login();
        }
    }
    private function login(){
        extract($_POST);
        $Err="";
        if(empty($UName) || empty($Pass)){
            $Err="<h6 class='alert alert-danger'>كلمة المرور او اسم المستخدم فارغة</h6>";
            $this->B_State("msg",$Err);
        }else{
            $id= $this->Get_Any("users","id"," Where `UName`='$UName' And `pass`=MD5('$Pass')");
            if($id>0)
            {
                $this->Q_Update("users"," d_login=NOW()" ," Where `id`=$id");
                $_SESSION["User"]=$id;
                $_SESSION["UName"]=$UName;
                header("location:"._Project."/Home");
            }else{
                $Err="<h6 class='alert alert-danger'>خطاء في اسم المستخدم او كلمة المرور</h6>";
                $this->B_State("msg",$Err);
            }

        }
        
        
    }
}
$C=new Login();
?>
