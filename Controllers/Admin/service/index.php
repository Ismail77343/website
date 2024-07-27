<?php
use Controller\Controller\Control;
class service extends Control{
   function __construct(){
        if(isset($_GET["Del"])){
            $this->Del();
        }
        elseif(isset($_POST["save"])){
            if(empty($_POST["_Edit"])){
                $this->Add();
            }else{
                $this->Edit();
            }
        }
    }
    private function Add(){
        extract($_POST);
        $Name=$this->checkform($Name);
        if(empty($Name)){
            $Err="<h6 class='alert alert-danger'>هناك بيانات فارغة الرجاء ملئ جميع البيانات المطلوبة</h6>";
            $this->B_State("msg",$Err);
        }else{
            $Q=$this->Q_Insert("service"," name='$Name'");
            if($Q){
                $Err="<h6 class='alert alert-success'>تمت الاضافة بنجاح</h6>";
                $this->B_State("msg",$Err);
            }else{
                $Err="<h6 class='alert alert-danger'>خطاء في الاضافة</h6>";
                $this->B_State("msg",$Err);
            }
        }
    }
    private function Edit(){
        extract($_POST);
        $Name=$this->checkform($Name);
        if(empty($Name)){
            $Err="<h6 class='alert alert-danger'>هناك بيانات فارغة الرجاء ملئ جميع البيانات المطلوبة</h6>";
            $this->B_State("msg",$Err);
        }else{
            $Q=$this->Q_Update("service"," name='$Name'"," Where `id`='$_Edit'");
            if($Q){
                $Err="<h6 class='alert alert-success'>تم التعديل بنجاح</h6>";
                $this->B_State("msg",$Err);
            }else{
                $Err="<h6 class='alert alert-danger'>خطاء في التعديل</h6>";
                $this->B_State("msg",$Err);
            }
        }
    }
    private function Del(){
        $Q=$this->Q_Delete("service",$_GET["Del"],"`id`");
        $Err="<h6 class='alert alert-secondary'>تم الحذف بنجاح</h6>";
        $this->B_State("msg",$Err);
    }
}
$C=new service();
?>
