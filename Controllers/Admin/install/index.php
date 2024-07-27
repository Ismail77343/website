<?php
use Controller\Controller\Control;
include("Models/Install.php");
use  Model\Install\Install;

class Add extends Control{
    public function __construct(){
        if(isset($_POST["Install"])){
            $this->Install();
        }
    }
    public function Install(){
        $DB           =$this->checkform($_POST["DB"]);
        $UName        =$this->checkform($_POST["UName"]);
        $Pass         =$this->checkform($_POST["Pass"]);
        if(empty($DB) ||empty($UName)  ){
            $Err="<h6 class='alert alert-danger'>هناك بيانات فارغة الرجاء ملئ جميع البيانات</h6>";
            $this->B_State("msg",$Err);
        }else{
            $Install=new Install();
            $conn=@mysqli_connect("localhost",$UName,$Pass);
            if($conn){
                $WQ = mysqli_select_db( $conn, $DB );

                
                if(!$WQ)
                    $WQ=$Install->Create_DB($DB,$conn);

                if(!$WQ){
                    $Err="<h6 class='alert alert-danger'>خطاء في انشاء قاعدة البيانات الرجاء تجربة تغيير اسم قاعدة البيانات</h6>";
                    $this->B_State("msg",$Err);
                }else{

                    $Install->Make_Conn_F($UName,$Pass,$DB);
                    $Conn=@mysqli_connect("localhost",$UName,$Pass,$DB);
                    $WQ=$Install->Restore($Conn);
                    
                    if($WQ["type"]!="error"){
                        $Err="<h6 class='alert alert-success'>تم التثبيت بنجاح اسم المستخدم وكلمة المرور admin</h6>";
                        $_SESSION["msg"]=$Err;
                        header("location:"._Project."/login");

                    }else{
                        $Err="<h6 class='alert alert-danger'>خطاء في التثبيت <br>".$WQ["message"]."<br></h6>";
                        $this->B_State("msg",$Err);
                    }
                }
            }else{
                $Err="<h6 class='alert alert-danger'>خطاء في اسم المستخدم او كلمة المرور</h6>";
                $this->B_State("msg",$Err);

            }
        }
    }

}
$Cls= new Add();
?>