<?php 
namespace Controller\Controller{
    use Model\Query\Query;
    class Control extends Query{
        public function checkform($z){
            $z=trim($z);
            $z=stripslashes($z);
            $z=strip_tags($z);
            $z=str_replace("أ","ا",$z);
            $z=str_replace("ة","ه",$z);
            $z=str_replace("آ","ا",$z);
            $z=str_replace("إ","ا",$z);
            $z=str_replace('"',"",$z);
            $z=str_replace("'","",$z);
            $z=str_replace("`","",$z);
            
            //كود للحماية من ثغرة SQL injection
            if($this->Connect())
                $z=mysqli_real_escape_string($this->Connect(),$z);
            return $z;
        }
        public function checkform_web($z){
            $z=trim($z);
            $z=stripslashes($z);
            $z=str_replace("أ","ا",$z);
            $z=str_replace("ة","ه",$z);
            $z=str_replace("آ","ا",$z);
            $z=str_replace("إ","ا",$z);
            $z=str_replace('"',"\"",$z);
            $z=str_replace("'","\'",$z);
            $z=str_replace("`","\`",$z);
            
            //كود للحماية من ثغرة SQL injection
            if($this->Connect())
                $z=mysqli_real_escape_string($this->Connect(),$z);
            return $z;
        }
        // Chack Null
		public function Null_Query($String){
			if(empty($String) || $String =null || $String ="null" ){
				$String='is null';
			}else{
				$String="= '$String'";
			}
			return $String;
		}
        public function Se_State($State,$txt,$Url){
            $_SESSION[$State]=$txt;
            header("location:$Url");
        }
        public function Se_State2($State1,$txt1,$Stat,$Url){
            $_SESSION[$State1]=$txt1;
            $_SESSION["Stat"]=$Stat;
            header("location:$Url");
            return true;
        }
        public function B_State($State,$txt){
            $Url =$_SERVER['HTTP_REFERER'];
            $_SESSION[$State]=$txt;
            header("location:$Url");
        }
        public function B_State2($State1,$txt1,$Stat){
            $Url =$_SERVER['HTTP_REFERER'];
            $_SESSION[$State1]=$txt1;
            $_SESSION["Stat"]=$Stat;
            header("location:$Url");
            return true;
        }
        public function check_msg_session($name_session,$close=true ){
            if(isset($_SESSION[$name_session])){
                $s=$_SESSION[$name_session];
                if($close)
                    unset($_SESSION[$name_session]);
                return $s;
            }else{
                return null;
            }
            
        }
        public function Check_See_State($N_State,$Err,$Js = ""){
            $a="";
            if(isset($_SESSION[$Err]) && isset($_SESSION['Stat'])){
                if($_SESSION['Stat']==$N_State){
                        
                    if(!empty($Js)){
                        $a="<script>
                                $Js
                            </script>
                            ";
                    }
                        
                ?><h3 class="<?php echo $Err ?>">
    <?php
                    echo $_SESSION[$Err];
                    unset($_SESSION[$Err]);
                    unset($_SESSION['Stat']);
    
                    ?></h3>
<?php
                
                }
    
            }
            return $a;
        }
        public function Session_State($x){
            if(isset($_SESSION["$x"])){
                ?><h3 class="<?php echo $x;?>">
    <?php
                echo $_SESSION["$x"];
                unset($_SESSION["$x"]);
    
                ?></h3><?php
            }
        }
        public function dis_Session($name){
            unset($_SESSION["$name"]);
            $Url =$_SERVER['HTTP_REFERER'];
            header("location:$Url");
        }
       
        function your_money_format($value,$Mark="ريال",$num=2) {
            if(!empty(Mark_Money) && !empty($Mark)){
                $Mark=Mark_Money;
            }
            return $Mark. number_format($value, $num);
          }
    }
    class Secure extends Query{
        public Function Out($Url){
            unset($_SESSION["ID"]);
            header("location:".$Url."Login/");
        }
        public function Ch_Login($Url){
            if(isset($_SESSION["ID"])){
                $ID             =$_SESSION["ID"];
                $Ch           = $this->Get_Data("users",array("ID"),"Where `ID` = '$ID' And `opened` = 1");
                if($Ch["ID"][0] != $ID ){
                    $this->Out($Url);
                }
            }else{
                $this->Out($Url);
            }
        }
        public function Get_User(){
            if(isset($_SESSION["ID"])){
                $Info           = $this->Get_Data("users",array("name","UName","rule"),"Where `id` = '".$_SESSION["ID"]."'");
                $User["name"]   =$Info["name"][0];
                $User["UName"]   =$Info["UName"][0];
                $User["rule"]   =$Info["rule"][0];
                return $User;
            }
            return "";
        }

    }
}
?>