<?php
use Controller\Controller\Control;
class Login extends Control{
   function __construct(){
        if(isset($_POST["change_pass"])){
            $this->change_pass();
        }
        elseif(isset($_POST["change_UName"])){
            $this->change_UName();
        }
    }
    private function change_pass(){
        extract($_POST);
        if(empty($old_pass) || empty($pass) || empty($pass2)){
            $Err="<h6 class='alert alert-danger'>هناك بيانات فارغة الرجاء ملئ جميع الحقول</h6>";
            $this->B_State("msg1",$Err);
        }
        elseif($pass != $pass2){
            $Err="<h6 class='alert alert-danger'>كلمتان المرور غير متطابقتان</h6>";
            $this->B_State("msg1",$Err);
        }
        else{
            $old_pass=$this->checkform($old_pass);
            $pass=$this->checkform($pass);
            $pass2=$this->checkform($pass2);

            $id=$this->Get_Any("users","id"," Where pass=MD5('$old_pass') And id='".$_SESSION["User"]."'");

            if($id>0){
                $Q=$this->Q_Update("users"," `pass`=MD5('$pass') "," Where `id`='$id'");
                if($Q){
                    unset($_SESSION["User"]);
                    unset($_SESSION["UName"]);
                    $Err="<h6 class='alert alert-success'>تم تغيير كلمة المرور</h6>";
                    $_SESSION["msg"]=$Err;
                    header("location:"._Project."/login");
                }else{
                    $Err="<h6 class='alert alert-danger'>خطاء تغيير كلمة المرور</h6>";
                    $this->B_State("msg1",$Err);
                }
            }else{
                $Err="<h6 class='alert alert-danger'>خطاء في كلمة المرور</h6>";
                $this->B_State("msg1",$Err);
            }

        }
    }
    private function change_UName(){
        extract($_POST);
        if(empty($UName) || empty($pass)){
            $Err="<h6 class='alert alert-danger'>هناك بيانات فارغة الرجاء ملئ جميع الحقول</h6>";
            $this->B_State("msg",$Err);
        }
        else{
            $UName=$this->checkform($UName);
            $pass=$this->checkform($pass);

            

            $id=$this->Get_Any("users","id"," Where pass=MD5('$pass') And id='".$_SESSION["User"]."'");

            if($id>0){
                $Q=$this->Q_Update("users"," `UName`='$UName' "," Where `id`='$id'");
                if($Q){
                    $_SESSION["UName"]=$UName;
                    $Err="<h6 class='alert alert-success'>تم تغيير اسم المستخدم</h6>";
                    $this->B_State("msg",$Err);
                }else{
                    $Err="<h6 class='alert alert-danger'>خطاء في تغيير اسم المستخدم </h6>";
                    $this->B_State("msg",$Err);
                }
            }else{
                $Err="<h6 class='alert alert-danger'>خطاء في كلمة المرور</h6>";
                $this->B_State("msg",$Err);
            }

        }
    }
}
$C=new Login();
?>
