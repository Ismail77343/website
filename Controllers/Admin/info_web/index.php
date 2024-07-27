<?php
use Controller\Controller\Control;
class service extends Control{
   function __construct(){
        if(isset($_GET["Del"])){
            $this->Del();
        }
        elseif(isset($_POST["save"])){
            $this->Save();
        }
    }
    private function Save(){
        extract($_POST);
        $Name=$this->checkform($Name);
        $Address=$this->checkform($Address);
        $Phone=$this->checkform($Phone);
        $Note=$this->checkform($Note);
        if(empty($Name) || empty($Address) || empty($Phone) || empty($Note)){
            $Err="<h6 class='alert alert-danger'>هناك بيانات فارغة الرجاء ملئ جميع البيانات المطلوبة</h6>";
            $this->B_State("msg",$Err);
        }else{
            $Q=$this->Q_Update("info_web"," name='$Name',address='$Address',phone='$Phone',about='$Note'","");
            if($Q){
                $Err="<h6 class='alert alert-success'>تمت الحفظ بنجاح</h6>";
                $this->B_State("msg",$Err);
            }else{
                $Err="<h6 class='alert alert-danger'>خطاء في الحفظ</h6>";
                $this->B_State("msg",$Err);
            }
        }
    }

}
$C=new service();
?>
