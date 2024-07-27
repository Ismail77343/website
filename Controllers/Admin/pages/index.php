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
        $title=$this->checkform($title);
        $route=$this->checkform($route);
        $_content=$this->checkform_web($_content);

        if(isset($_FILES["fle"])){
            $name=$_FILES["fle"]["name"];
            $tmp=$_FILES["fle"]["tmp_name"];
            $Span	=explode(".",$name);
            $Span   =strtolower(end($Span));
        }
        $Span=$Span??"";
        if(empty($Name) || empty($title) || empty($route) || empty($_content)){
            $Err="<h6 class='alert alert-danger'>هناك بيانات فارغة الرجاء ملئ جميع البيانات المطلوبة</h6>";
            $this->B_State("msg",$Err);
        }
        else if($Span != "jpg" && $Span != "jpeg" && $Span != "png" && $Span != "gif" && !empty($Span)){
            $Err="<h6 class='alert alert-danger'>لاتستطيع رفع صورة بهذا الامتداد $Span</h6>";
            $this->B_State("msg",$Err);
        }
        else{
            $ch=$this->Get_Any("page","id"," Where name='$Name' OR route='$route' ");
            if(empty($ch)){
                $Q=$this->Q_Insert("page"," name='$Name' ,subject='$title',route='$route',content='$_content',img='$Span' ");
                if($Q){
                    if(isset($Span)){
                        $id=$this->Get_Any("page","id"," Where name='$Name' And subject='$title' And route='$route' ORDER BY id DESC");
                        $url="Views/Web/upload/pages/".$id.".".$Span;
                        move_uploaded_file($tmp,$url);
                    }
                    $Err="<h6 class='alert alert-success'>تمت الاضافة بنجاح</h6>";
                    $this->B_State("msg",$Err);
                }else{
                    $Err="<h6 class='alert alert-danger'>خطاء في الاضافة</h6>";
                    $this->B_State("msg",$Err);
                }
            }
            else{
                $Err="<h6 class='alert alert-danger'>اسم الصفحة او اسم التوجية موجود من قبل ومكرر  </h6>";
                $this->B_State("msg",$Err);
            }
        }
    }
    private function Edit(){
        extract($_POST);
        $Name=$this->checkform($Name);
        $title=$this->checkform($title);
        $route=$this->checkform($route);
        $_content=$this->checkform_web($_content);

        if(isset($_FILES["fle"])){
            $name=$_FILES["fle"]["name"];
            $tmp=$_FILES["fle"]["tmp_name"];
            $Span	=explode(".",$name);
            $Span   =strtolower(end($Span));
        }

        $Span=$Span??"";

        if(empty($Name) || empty($title) || empty($route) || empty($_content)){
            $Err="<h6 class='alert alert-danger'>هناك بيانات فارغة الرجاء ملئ جميع البيانات المطلوبة</h6>";
            $this->B_State("msg",$Err);
        }
        else if($Span != "jpg" && $Span != "jpeg" && $Span != "png" && $Span != "gif" && !empty($Span)){
            $Err="<h6 class='alert alert-danger'>لاتستطيع رفع صورة بهذا الامتداد $Span</h6>";
            $this->B_State("msg",$Err);
        }
        else{
            
            if(!empty($Span)){
                if(file_exists("Views/Web/upload/".$_Edit.".".$Span))
                    unlink("Views/Web/upload/".$_Edit.".".$Span);
                
                $url="Views/Web/upload/pages/".$_Edit.".".$Span;
                move_uploaded_file($tmp,$url);
            }
            else{
                $Span=$this->Get_Any("page","img","  Where `id`='$_Edit'");

            }
            $imagePath = _Project . "/Views/Web/upload/pages/" . $_Edit . "." . $Span;
            $content2 = str_replace($imagePath, "{{Uimg}}", $_content);

            $Q=$this->Q_Update("page","name='$Name' ,subject='$title',route='$route',content='$content2',img='$Span' "," Where `id`='$_Edit'");
            if($Q){
                $Err="<h6 class='alert alert-success'>تمت الاضافة بنجاح</h6>";
                $this->B_State("msg",$Err);
            }else{
                $Err="<h6 class='alert alert-danger'>خطاء في الاضافة</h6>";
                $this->B_State("msg",$Err);
            }
        }


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
        $Q=$this->Q_Delete("page",$_GET["Del"],"`id`");
        $Err="<h6 class='alert alert-secondary'>تم الحذف بنجاح</h6>";
        $this->B_State("msg",$Err);
    }
}
$C=new service();
?>
