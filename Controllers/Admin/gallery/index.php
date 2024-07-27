<?php
use Controller\Controller\Control;
class gallery extends Control{
   function __construct(){
        if(isset($_GET["Del"])){
            $this->Del();
        }
        elseif(isset($_POST["save"])){
                $this->Add();
        }
    }
    private function Add(){
        $name=$_FILES["fle"]["name"];
        $tmp=$_FILES["fle"]["tmp_name"];
        $Span	=explode(".",$name);
        $Span   =strtolower(end($Span));

        if(empty($Span)){
            $Err="<h6 class='alert alert-danger'>هناك بيانات فارغة الرجاء ملئ جميع البيانات المطلوبة</h6>";
            $this->B_State("msg",$Err);
        }
        else if($Span != "jpg" && $Span != "jpeg" && $Span != "png" && $Span != "gif"){
            $Err="<h6 class='alert alert-danger'>لاتستطيع رفع صورة بهذا الامتداد $Span</h6>";
            $this->B_State("msg",$Err);
        }
        else{
            $Q=$this->Q_Insert("gallery"," img='$Span'");
            $id=$this->Get_Any("gallery","id"," Where img='$Span' ORDER BY id DESC");
            $url="Views/Web/upload/".$id.".".$Span;
            move_uploaded_file($tmp,$url);
            if(file_exists($url)){
                $Err="<h6 class='alert alert-success'>تمت الاضافة بنجاح</h6>";
                $this->B_State("msg",$Err);
            } else{
                $Q=$this->Q_Delete("gallery",$id,"`id`");
                $Err="<h6 class='alert alert-danger'>خطاء في الرفع</h6>";
                $this->B_State("msg",$Err);
            } 

        }
    }
    private function Del(){
        $Span=$this->Get_Any("gallery","img"," Where id='".$_GET["Del"]."'");

        unlink("Views/Web/upload/".$_GET["Del"].".".$Span);
        $Q=$this->Q_Delete("gallery",$_GET["Del"],"`id`");
        $Err="<h6 class='alert alert-secondary'>تم الحذف بنجاح</h6>";
        $this->B_State("msg",$Err);
    }
}
$C=new gallery();
?>