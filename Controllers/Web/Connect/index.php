<?php
use Controller\Controller\Control;

class comment extends Control{
    function __construct(){
        if(isset($_POST["send"])){
            $this->comment();
        }
    }
    private function comment(){
        echo "sdds";
        extract($_POST);
        if(empty($name) ||empty($email) || empty($phone) || empty($subject) || empty($message)){
            $Err="<h6 class='alert alert-danger'>هناك بيانات فارغة الرجاء ملئ جميع البيانات المطلوبة</h6>";
            $_SESSION["msg_err"]=$Err;
            header("location:"._Project."#fname");
        }else{
            $name=$this->checkform($name);
            $email=$this->checkform($email);
            $phone=$this->checkform($phone);
            $subject=$this->checkform($subject);
            $message=$this->checkform($message);
            $Q=$this->Q_Insert("connect"," `first_name`='$name', `email`='$email', `phone`='$phone', `subject`='$subject', `commint`='$message' ");

            $Err="<h6 class='alert alert-success'>Thank you for contacting us. We will contact you as soon as possible (نشكرك على التواصل معنا، وسنتواصل معك في أقرب وقت ممكن)</h6>";
            $_SESSION["msg_err"]=$Err;
            header("location:"._Project."");
            

        }
    }
}
$C=new comment();
?>