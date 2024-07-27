<?php
namespace Model\Query{
use Model\Conn\Connected;
	class Query extends Connected{
		Public function Q_Code($Code){
			$Conn=$this->Connect();
			$WQ=mysqli_query($Conn,$Code);
			if($WQ){
				return $WQ;
			}else{
				return false;
			}
		}
		// Function To Update
		public function Q_Update($tbl,$Update,$Where,$user = false){
			$D	="";
			if($user == true){
				$D	  =",`edite_user` = '".$_SESSION["ID"]."',`date_edite` = Now()";
			}
			$Conn = $this->Connect();
			$Q	="UPDATE `$tbl` SET $Update $D $Where";
			// echo $Q."<br>";
			$WQ	=mysqli_query($Conn,$Q);

			return $WQ;
		}
		// Function To Insert
		public function Q_Insert($tbl,$Insert,$Part_Year = false,$Date = false){
			$Part="";
			$D	 ="";
			if($Part_Year ==true){
				$Part =",`year` = '".$_SESSION["number_year"]."',`part` = '".$_SESSION["number_part"]."'";
			}
			if($Date ==true){
				$D	  =",`add_user` = '".$_SESSION["ID"]."',`date_reg` = Now()";
			}
			$Conn = $this->Connect();
			$Q	="INSERT INTO `$tbl` SET $Insert $Part $D";
			// echo $Q."<br>";
			$WQ	=mysqli_query($Conn,$Q);

			return $WQ;
		}
		//Functions To Delete
		public function Q_Delete($tbl,$ID,$Column="`ID`"){
			$Conn = $this->Connect();
			$Q	="DELETE FROM `$tbl` WHERE $Column = $ID";
			// echo $Q;
			$WQ	=mysqli_query($Conn,$Q);
			return $WQ;
		}
		public function Q_Delete_W($tbl,$Where){
			$Conn = $this->Connect();
			$Q	="DELETE FROM `$tbl` $Where";
			$WQ	=mysqli_query($Conn,$Q);
			return $WQ;
		}
		//Functions To Select
		public function Get_Any($tbl,$get,$Where = "",$WhPart = false,$Add_Select = ""){
			$Conn=$this->Connect();
			$Part="";
			if($WhPart == true){
				if(empty($Where) || $Where == null){
					$Part="Where `part` = '".$_SESSION["number_part"]."'";
				}else{
					$Part=" And `part` = '".$_SESSION["number_part"]."'";
				}
			}
			$Q="Select * $Add_Select From `$tbl` $Where $Part";
			// echo $Q;
			$WQ=mysqli_query($Conn,$Q);
			while($row=mysqli_fetch_array($WQ)){
				return $row["$get"];
			}
			return null;
		}
		
		public function Q_Select($tbl,$Where,$get,$tag = "h4",$style = "",$after = ""){
			$Conn=$this->Connect();
			if(empty($get)){
				$get="id";
			}
			if(empty($tag)){
				$tag="span";
			}
			if(empty($tbl)){
				return "Error Enter Your Table";
			}
			$Q="Select * From `$tbl` $Where";
			$WQ=mysqli_query($Conn,$Q);
			if($WQ==true){
				$out="";
				while($row = mysqli_fetch_array($WQ)){
					$a=$row["$get"];
					$out.="<$tag $style>$a</$tag>$after";
				}

				return $out;
			}else{
				return "Error In The Query Or In Connect By DataBase $Q";
			}
		}
		public function Q_Select2($tbl,$Where,$get1,$get2,$tag = "h4",$style = "",$after = ""){
			$Conn=$this->Connect();
			if(empty($get1)){
				$get1="id";
			}
			if(empty($tag)){
				$tag="span";
			}
			if(empty($tbl)){
				return "Error Enter Your Table";
			}
			$Q="Select * From `$tbl` $Where";
			$WQ=mysqli_query($Conn,$Q);
			if($WQ==true){
				$out="";
				while($row = mysqli_fetch_array($WQ)){
					$a=$row["$get1"];
					$b=$row["$get2"];
					$out.="<$tag $style>$a : $b</$tag>$after";
				}

				return $out;
			}else{
				return "Error In The Query Or In Connect By DataBase $Q";
			}
		}
		public function select_num_row($tbl,$Where){
			$Conn=$this->Connect();
			$Q="Select * From `$tbl` $Where";
			$WQ=mysqli_query($Conn,$Q);
			$num=mysqli_num_rows($WQ);
			return $num;
		}
		public function Get_Any_Sum($tbl,$Where,$Sum){
			$Conn=$this->Connect();
			$Q="Select Sum(`$Sum`) As '$Sum' From `$tbl` $Where";
			$WQ=mysqli_query($Conn,$Q);
			while($row=mysqli_fetch_array($WQ)){
				if(empty($row["$Sum"])){
					$row["$Sum"]=0;
				}
				return $row["$Sum"];
			}
			return null;
		}
		/////////////Items////////////////////
		public function Item_Exp_Stor($Item,$Storage){//حساب اجمالي الكمية من سندات الصرف المخزني لصنف ومخزن واحد
            $Conn=$this->Connect();
			$Q="SELECT SUM(`amount`) AS `Sum` From `info_storage_stat_imp` Where `item`='".$Item."' And `storage`='$Storage' And `Type`='Export' And `year`=".YEAR_ID." And `part`=".PART_ID." ";
			$WQ=mysqli_query($Conn,$Q);
			while($row=mysqli_fetch_array($WQ)){
				$Sum=$row["Sum"];
			}
			return $Sum;
        }
		public function Item_Imp_Stor($Item,$Storage){//حساب اجمالي الكمية من سندات الايراد المخزني لصنف ومخزن واحد
            $Conn=$this->Connect();
			$Q="SELECT SUM(`amount`) AS `Sum` From `info_storage_stat_imp` Where `item`='".$Item."' And `storage`='$Storage' And `Type`='Import' And `year`=".YEAR_ID." And `part`=".PART_ID." ";
			$WQ=mysqli_query($Conn,$Q);
			while($row=mysqli_fetch_array($WQ)){
				$Sum=$row["Sum"];
			}
			return $Sum;
        }
		public function Item_Sell($Item,$Storage){//حساب اجمالي الكمية من سندات المبيعات  لصنف ومخزن واحد
            $Conn=$this->Connect();
			$Q="SELECT SUM(`amount`) AS `Sum` From `info_dealer_stat` Where `item`='".$Item."' And `storage`='$Storage' And `Type`='Sell' And `year`=".YEAR_ID." And `part`=".PART_ID." ";
			$WQ=mysqli_query($Conn,$Q);
			while($row=mysqli_fetch_array($WQ)){
				$Sum=$row["Sum"];
			}
			return $Sum;
        }
		public function Item_Buy($Item,$Storage){//حساب اجمالي الكمية من سندات المشتريات لصنف ومخزن واحد
            $Conn=$this->Connect();
			$Q="SELECT SUM(`amount`) AS `Sum` From `info_dealer_stat` Where `item`='".$Item."' And `storage`='$Storage' And `Type`='Buy' And `year`=".YEAR_ID." And `part`=".PART_ID." ";
			$WQ=mysqli_query($Conn,$Q);
			while($row=mysqli_fetch_array($WQ)){
				$Sum=$row["Sum"];
			}
			return $Sum;
        }
		public function Item_Start($Item,$Storage){
			$Conn=$this->Connect();
			$Q="SELECT SUM(`balance`) AS `Sum` From `go_storage` Where `item`='".$Item."' And `storage`='$Storage' And `year`=".YEAR_ID." And `part`=".PART_ID." ";
			$WQ=mysqli_query($Conn,$Q);
			while($row=mysqli_fetch_array($WQ)){
				$Sum=$row["Sum"];
			}
			return $Sum;
		}
		public function Item_Balance($Item,$Storage){//حساب الرصيد للصنف لصنف ومخزن واحد
            $balance = ($this->Item_Imp_Stor($Item,$Storage) + $this->Item_Buy($Item,$Storage)+ $this->Item_Start($Item,$Storage))-($this->Item_Exp_Stor($Item,$Storage) + $this->Item_Sell($Item,$Storage));
			return $balance;
        }
		public function Item_Exp_Stor_Monay($Item,$Storage){// حساب اجمالي سعر المنصرف من سندات الصرف المخزني لصنف ومخزن واحد            
			$Conn=$this->Connect();
			$Q="SELECT *,SUM((price*amount)*rate_monay) As Sum_Rate From `info_storage_stat_imp` WHERE `item`= '$Item'  And `storage`='$Storage'  And `Type`='Export' And `year`=".YEAR_ID." And `part`=".PART_ID."";
			$WQ=mysqli_query($Conn,$Q);
			while($row=mysqli_fetch_array($WQ)){
				$Sum=$row["Sum_Rate"];
			}
			return $Sum;
        }
		public function Item_Imp_Stor_Monay($Item,$Storage){//حساب اجمالي سعر الوارد من سندات الايراد المخزني لصنف ومخزن واحد
            $Conn=$this->Connect();
			$Q="SELECT *,SUM((price*amount)*rate_monay) As Sum_Rate From `info_storage_stat_imp` WHERE `item`= '$Item'  And `storage`='$Storage' And `Type`='Import' And `year`=".YEAR_ID." And `part`=".PART_ID."";
			$WQ=mysqli_query($Conn,$Q);
			while($row=mysqli_fetch_array($WQ)){
				$Sum=$row["Sum_Rate"];
			}
			return $Sum;
        }
		public function Item_Sell_Monay($Item,$Storage){//حساب اجمالي سعر البيع من سندات المبيعات لصنف ومخزن واحد
            $Conn=$this->Connect();
			$Q="SELECT *,SUM((all_price*amount)*rate_monay) As Sum_Rate From `info_dealer_stat` WHERE `item`= '$Item'  And `storage`='$Storage' And `Type`='Sell' And `year`=".YEAR_ID." And `part`=".PART_ID."";
			$WQ=mysqli_query($Conn,$Q);
			while($row=mysqli_fetch_array($WQ)){
				$Sum=$row["Sum_Rate"];
			}
			return $Sum;
        }
		public function Item_Buy_Monay($Item,$Storage){//حساب اجمالي سعر الشراء من سندات المشتريات لصنف ومخزن واحد
            $Conn=$this->Connect();
			$Q="SELECT *,SUM((price*amount)*rate_monay) As Sum_Rate From `info_dealer_stat` WHERE `item`= '$Item'  And `storage`='$Storage' And `Type`='Buy' And `year`=".YEAR_ID." And `part`=".PART_ID."";
			$WQ=mysqli_query($Conn,$Q);
			while($row=mysqli_fetch_array($WQ)){
				$Sum=$row["Sum_Rate"];
			}
			return $Sum;
        }
		public function Item_Start_Monay($Item,$Storage){
			$Conn=$this->Connect();
			$Q="SELECT SUM(`price_balance`) AS `Sum` From `go_storage` Where `item`='".$Item."' And `storage`='$Storage' And `year`=".YEAR_ID." And `part`=".PART_ID." ";
			$WQ=mysqli_query($Conn,$Q);
			while($row=mysqli_fetch_array($WQ)){
				$Sum=$row["Sum"];
			}
			return $Sum;
		}
		public function Item_Balance_Monay($Item,$Storage){//حساب الرصيد للصنف لصنف ومخزن واحد
            $balance = ($this->Item_Imp_Stor_Monay($Item,$Storage)+$this->Item_Buy_Monay($Item,$Storage)+$this->Item_Start_Monay($Item,$Storage))-($this->Item_Exp_Stor_Monay($Item,$Storage) + $this->Item_Sell_Monay($Item,$Storage));
			return $balance;
        }
		/////////////Box////////////////////
		public function Box_Sell($Box_ID){//حساب اجمالي دخل صندوق معين في المبيعات
            $Conn=$this->Connect();
			$Q="SELECT SUM((`info_dealer_stat`.`price` * `info_dealer_stat`.`rate_monay`)* `info_dealer_stat`.`amount`) As Sum_Rate FROM `info_dealer_stat` INNER JOIN `dealer_stat` On `dealer_stat`.`ID`=`info_dealer_stat`.`number stat` Where `dealer_stat`.`away_pay`='Cash' AND `info_dealer_stat`.`Type`='Sell' AND `dealer_stat`.`box_bank`='$Box_ID' And `info_dealer_stat`.`year` = ".YEAR_ID." And `info_dealer_stat`.`part`=".PART_ID."";
			$WQ=mysqli_query($Conn,$Q);
			while($row=mysqli_fetch_array($WQ)){
				$Sum=$row["Sum_Rate"];
			}
			return $Sum;
        }
		public function Box_Buy($Box_ID){//حساب اجمالي صرف صندوق معين في المشتريات
            $Conn=$this->Connect();
			$Q="SELECT SUM((`info_dealer_stat`.`price` * `info_dealer_stat`.`rate_monay`)* `info_dealer_stat`.`amount`) As Sum_Rate FROM `info_dealer_stat` INNER JOIN `dealer_stat` On `dealer_stat`.`ID`=`info_dealer_stat`.`number stat` Where `dealer_stat`.`away_pay`='Cash' AND `info_dealer_stat`.`Type`='Buy' AND `dealer_stat`.`box_bank`='$Box_ID' And `info_dealer_stat`.`year` = ".YEAR_ID." And `info_dealer_stat`.`part`=".PART_ID."";
			$WQ=mysqli_query($Conn,$Q);
			while($row=mysqli_fetch_array($WQ)){
				$Sum=$row["Sum_Rate"];
			}
			return $Sum;
        }
		public function Box_Imp_Cash($Box_ID){//حساب اجمالي دخل صندوق معين في سندات القبض النقدي
            $Conn=$this->Connect();
			$Q="SELECT SUM(`amount` * `rate_monay`) As Sum_Rate FROM `cash_stat` WHERE `type`='Import' And `box_bank`='$Box_ID' And `year`=".YEAR_ID." And `part`=".PART_ID."";
			$WQ=mysqli_query($Conn,$Q);
			while($row=mysqli_fetch_array($WQ)){
				$Sum=$row["Sum_Rate"];
			}
			return $Sum;
        }
		public function Box_Exp_Cash($Box_ID){//حساب اجمالي صرف صندوق معين في سندات الصرف النقدي
            $Conn=$this->Connect();
			$Q="SELECT SUM(`amount` * `rate_monay`) As Sum_Rate FROM `cash_stat` WHERE `type`='Export' And `box_bank`='$Box_ID' And `year`=".YEAR_ID." And `part`=".PART_ID."";
			$WQ=mysqli_query($Conn,$Q);
			while($row=mysqli_fetch_array($WQ)){
				$Sum=$row["Sum_Rate"];
			}
			return $Sum;
        }
		public function Box_Start($Box_ID){//الرصيد الافتتاحي لصندوق معين
			$Conn=$this->Connect();
			$Q="SELECT SUM(`balance`) AS `Sum` From `go_box_bank_balance` Where `box_bank`='".$Box_ID."' And `year`=".YEAR_ID." And `part`=".PART_ID." ";
			$WQ=mysqli_query($Conn,$Q);
			while($row=mysqli_fetch_array($WQ)){
				$Sum=$row["Sum"];
			}
			return $Sum;
		}
		public function Box_Balance($Box_ID){//حساب الرصيد للصنف
            $balance = ($this->Box_Sell($Box_ID)+$this->Box_Imp_Cash($Box_ID)+$this->Box_Start($Box_ID))-($this->Box_Exp_Cash($Box_ID) + $this->Box_Buy($Box_ID));
			return $balance;
        }
		/////////////Aside////////////////////
		public function Side_Sell($Side){//حساب اجمالي دين على العميل في المبيعات
            $Conn=$this->Connect();
			$Q="SELECT SUM((`info_dealer_stat`.`price` * `info_dealer_stat`.`rate_monay`)* `info_dealer_stat`.`amount`) As Sum_Rate FROM `info_dealer_stat` INNER JOIN `dealer_stat` On `dealer_stat`.`ID`=`info_dealer_stat`.`number stat` Where `dealer_stat`.`away_pay`='late' AND `info_dealer_stat`.`Type`='Sell' AND `dealer_stat`.`side_import`='$Side' And `info_dealer_stat`.`year` = ".YEAR_ID." And `info_dealer_stat`.`part`=".PART_ID."";
			$WQ=mysqli_query($Conn,$Q);
			while($row=mysqli_fetch_array($WQ)){
				$Sum=$row["Sum_Rate"];
			}
			return $Sum;
        }
		public function Side_Buy($Side){//حساب اجمالي دين المورد في المشتريات
            $Conn=$this->Connect();
			$Q="SELECT SUM((`info_dealer_stat`.`price` * `info_dealer_stat`.`rate_monay`)* `info_dealer_stat`.`amount`) As Sum_Rate FROM `info_dealer_stat` INNER JOIN `dealer_stat` On `dealer_stat`.`ID`=`info_dealer_stat`.`number stat` Where `dealer_stat`.`away_pay`='late' AND `info_dealer_stat`.`Type`='Buy' AND `dealer_stat`.`side_import`='$Side' And `info_dealer_stat`.`year` = ".YEAR_ID." And `info_dealer_stat`.`part`=".PART_ID."";
			$WQ=mysqli_query($Conn,$Q);
			while($row=mysqli_fetch_array($WQ)){
				$Sum=$row["Sum_Rate"];
			}
			return $Sum;
        }
		public function Side_Imp_Cash($Side){//حساب اجمالي دين مورد معين في سندات القبض النقدي
            $Conn=$this->Connect();
			$Q="SELECT SUM(`amount` * `rate_monay`) As Sum_Rate FROM `cash_stat` WHERE `type`='Import' And `side`='$Side' And `year`=".YEAR_ID." And `part`=".PART_ID."";
			$WQ=mysqli_query($Conn,$Q);
			while($row=mysqli_fetch_array($WQ)){
				$Sum=$row["Sum_Rate"];
			}
			return $Sum;
        }
		public function Side_Exp_Cash($Side){//حساب اجمالي دين عميل معين في سندات الصرف النقدي
            $Conn=$this->Connect();
			$Q="SELECT SUM(`amount` * `rate_monay`) As Sum_Rate FROM `cash_stat` WHERE `type`='Export' And `side`='$Side' And `year`=".YEAR_ID." And `part`=".PART_ID."";
			$WQ=mysqli_query($Conn,$Q);
			while($row=mysqli_fetch_array($WQ)){
				$Sum=$row["Sum_Rate"];
			}
			return $Sum;
        }
		public function Side_Start($Side){//الرصيد الافتتاحي لجهة معينة
			$Conn=$this->Connect();
			$Q="SELECT SUM(`balance`) AS `Sum` From `go_aside_balance` Where `aside`='".$Side."' And `year`=".YEAR_ID." And `part`=".PART_ID." ";
			$WQ=mysqli_query($Conn,$Q);
			while($row=mysqli_fetch_array($WQ)){
				$Sum=$row["Sum"];
			}
			return $Sum;
		}
		public function Side_Balance($Side){//حساب الرصيد للصنف
            $balance = ($this->Side_Buy($Side)+$this->Side_Imp_Cash($Side)+$this->Side_Start($Side))-($this->Side_Exp_Cash($Side) + $this->Side_Sell($Side));
			return $balance;
        }
		////////Select Max////////////////////////
		public function Get_Max($tbl,$Column,$Where=""){
			$Conn=$this->Connect();
			$Q="Select Max($Column) As max From `$tbl` $Where";
			$WQ=mysqli_query($Conn,$Q);
			while($row =mysqli_fetch_array($WQ)){
				$max =$row["max"];
				return $max;
			}
		}
		//////////////////////////////////////////
		public function Get_Auto_Stat($tbl,$Col,$Part =false ,$Year =false,$Where=""){
			$Conn = $this->Connect();
			$Q_Part="";
			$Q_Year="";
			if($Part == true){
				if(empty($Where)){
					$Q_Part="Where `part` = '".$_SESSION["number_part"]."'";
				}else{
					$Q_Part="And `part` = '".$_SESSION["number_part"]."'";
				}
			}
			if($Year == true){
				if(($Q_Part == null || empty($Q_Part)) && empty($Where)){
					$Q_Year="Where `Year` = '".$_SESSION["number_year"]."'";
				}else{
					$Q_Year="And `Year` = '".$_SESSION["number_year"]."'";
				}
			}
			$Q="Select Max(`$Col`) As max From `$tbl` $Where $Q_Part $Q_Year";
			$WQ=mysqli_query($Conn,$Q);
			while($row =mysqli_fetch_array($WQ)){
				$max =$row["max"];
				return $max+1;
			}
			return 1;
		}
		public function Sucure_Sess_User($See){
				$ddd=$this->Get_Any("users","Where `id` = '$from_name'","id");
				return $ddd;
		}

		// Function Search
		public function Sarch_data($tbl,$Where,$Limit,$WhPart = false,$Whyear =false,$INNER="",$Add_Sel=""):array{
			$Conn = $this->Connect();
			$Part="";
			$year="";
			if($WhPart == true){
				if(empty($Where) || $Where == null){
					$Part="Where `$tbl`.`part` = '".$_SESSION["number_part"]."'";
				}else{
					$Part=" And `$tbl`.`part` = '".$_SESSION["number_part"]."'";
				}
			}
			if($Whyear == true){
				if((empty($Where) || $Where == null) && $WhPart == false){
					$year="Where `$tbl`.`year` = '".$_SESSION["number_year"]."'";
				}else{
					$year=" And `$tbl`.`year` = '".$_SESSION["number_year"]."'";
				}
			}
			$Q="Select `$tbl`.* $Add_Sel From `$tbl` $INNER $Where $Part $year $Limit";
			// echo $Q."<br>";
			$WQ=array();
			$WQ[]=mysqli_query($Conn,$Q);
			if($WQ[0]){
				$Q2="Select * From `$tbl` $Where";
				$WQ2=mysqli_query($Conn,$Q2);
				$WQ["Len_Row"]=mysqli_num_rows($WQ2);
			}
			return $WQ;
		}
			//Search With Relation
		public Function Search_Rel($tbl,$Q,$Tp_Search,$N_Search,array $Tp,array $Where,array $INNER=array(),$WhPart =false,$Whyear = false,$Add_Sel=""){
            if(empty($Q) || empty($Tp_Search)){
                $Err="هناك بيانات فارغة الرجاء ملئ جميع البيانات";
                return $this->B_State2("Err",$Err,"Search_State");
            }else{
                $Go=24;
                    if(isset($_GET["page"])){
                       $Start = $_GET["page"]; 
                    }else{
                        $Start=0;
                    }
                    $Start*=$Go;
                
					
                $Ch = false;
                for($x=0;$x<count($Tp);$x++){
                    if($Tp_Search == $this->checkform($Tp[$x])){
                        if(isset($Where[$x])){
                            $Wh = $Where[$x];
                        }else{
                            $Wh = "";
                        }
                        if(isset($INNER[$x])){
                            $INNER = $INNER[$x];
                        }else{
                            $INNER ="";
                        }
                        $Ch =true;
                        break;    
                    }
                }
                if($Ch == false){
                    $Err="خطاء في ايجاد البيانات الرجاء الاتصال بالمبرمج";
                    return $this->B_State2("Err",$Err,"Search_State");
                }
                $WQ = $this->Sarch_data("$tbl","$INNER $Wh","ORDER BY `$tbl`.`ID` DESC limit $Start,$Go",$WhPart,$Whyear,"",$Add_Sel);
				// return 0;
				if($WQ[0]){
                    $_SESSION["$N_Search"]=array();
                    while($row=mysqli_fetch_array($WQ[0])){
                        $_SESSION["$N_Search"][0][]=$row;
                    }
                    $_SESSION["$N_Search"]["Len_Row"]  =$WQ["Len_Row"];
                    $_SESSION["$N_Search"]["Q"]        =$Q;
                    $_SESSION["$N_Search"]["Tp_Search"]=$Tp_Search;
                    $_SESSION["$N_Search"]["Go"]       =$Go;
                    $Err="نتايج البحث في $Tp_Search عن ($Q)";
                    return $this->B_State2("Secf",$Err,"Search_State");
                }else{
                    $_SESSION["$N_Search"]=array();
                    $_SESSION["$N_Search"]=$WQ;
                    $Err="خطاء في ايجاد البيانات الرجاء الاتصال بالمبرمج";
                    return $this->B_State2("Err",$Err,"Search_State");
                }
            }
        }
			//Search With Not Relation
        public Function Search_One($tbl,$Q,$Tp_Search,$N_Search,array $Tp,array $Where_Tp,$WhPart=false,$Go=24){
            if(isset($_POST["Search"])){
				$Q              =$this->checkform($_POST["Q"]);
				$Tp_Search      =$this->checkform($_POST["Tp_Search"]);
			}elseif(isset($_GET["page"])){
				$Q              =$_SESSION["$N_Search"]["Q"];
				$Tp_Search      =$_SESSION["$N_Search"]["Tp_Search"];
			}else{
				 unset($_SESSION["$N_Search"]);
				 $Err="";
                return $this->B_State2("Secf",$Err,"Search_State");
			}
            if(empty($Q) || empty($Tp_Search)){
                $Err="هناك بيانات فارغة الرجاء ملئ جميع البيانات";
                return $this->B_State2("Err",$Err,"Search_State");
            }else{
                    if(isset($_GET["page"])){
                       $Start = $_GET["page"]; 
                    }else{
                        $Start=0;
                    }
                    $Start*=$Go;
                
                $Ch = false;
                for($x=0;$x<count($Tp);$x++){
                    if($Tp_Search == $Tp[$x]){
                        if(isset($Where_Tp[$x])){
                            $Tp =$Where_Tp[$x];
                        }else{
                            $Err="خطاء في ايجاد البيانات الرجاء الاتصال بالمبرمج";
                            return $this->B_State2("Err",$Err,"Search_State");
                        }
                        $Ch =true;
                        break;    
                    }
                }
                if($Ch == false){
                    $Err="خطاء في ايجاد البيانات الرجاء الاتصال بالمبرمج";
                    return $this->B_State2("Err",$Err,"Search_State");
                }
                $WQ = $this->Sarch_data("$tbl","Where `$Tp` like '%$Q%'","ORDER BY `$tbl`.`ID` DESC limit $Start,$Go",$WhPart);
                if($WQ[0]){
                    $_SESSION["$N_Search"]=array();
                    while($row=mysqli_fetch_array($WQ[0])){
                        $_SESSION["$N_Search"][0][]=$row;
                    }
                    $_SESSION["$N_Search"]["Len_Row"]  =$WQ["Len_Row"];
                    $_SESSION["$N_Search"]["Q"]        =$Q;
                    $_SESSION["$N_Search"]["Tp_Search"]=$Tp_Search;
                    $_SESSION["$N_Search"]["Go"]       =$Go;
                    $Err="نتايج البحث في $Tp_Search عن ($Q)";
                    return $this->B_State2("Secf",$Err,"Search_State");
                }else{
                    $_SESSION["$N_Search"]=array();
                    $_SESSION["$N_Search"]=$WQ;
                    $Err="خطاء في ايجاد البيانات الرجاء الاتصال بالمبرمج";
                    return $this->B_State2("Err",$Err,"Search_State");
                }
            }
        }
        
		// End Function Search

		public function Get_Data($tbl,array $get,$Where = "",$Limit = "",$Add_Sel="*"){
			$Conn = $this->Connect();
			$Q="Select $Add_Sel From `$tbl` $Where $Limit";
			// echo $Q."<br>";
			$Arr=array();
			$WQ	=mysqli_query($Conn,$Q);
			While($row=mysqli_fetch_array($WQ)){
				$Num=count($get);
				for($x=0;$x<$Num;$x++){
					$Arr["$get[$x]"][]=$row["$get[$x]"];
				}
			}
			$Q2		="Select $Add_Sel From `$tbl` $Where";
			$WQ2	=mysqli_query($Conn,$Q2);
			$WQ2	=mysqli_num_rows($WQ2);
			
			$Arr["Count77"]=$WQ2;
			if(!$WQ || $WQ2 == 0 ){
				$Num=count($get);
				for($x=0;$x<$Num;$x++){
					$Arr["$get[$x]"][]=null;
				}
			}
			return $Arr;
			
		}
		

	}	
}
?>