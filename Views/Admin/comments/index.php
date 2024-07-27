 <div class="row text-right">

     <?php

$Go=24;
if(isset($_GET["page"])){
    $Start = $_GET["page"]; 
}else{
    $Start=0;
}
$Start*=$Go;

$data=$ctrl->Sarch_data("connect","","ORDER BY `connect`.`date_reg` DESC limit $Start,$Go");
$NumPage= $data["Len_Row"]??0;


if(isset($data[0])){
    $data      = $data[0];
}else{
    $data=null;
}
$NumPage=ceil($NumPage/$Go);
$pg="";

    ?>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <?php
for($x=0;$x<$NumPage;$x++){
    echo "<li class='page-item'><a class='page-link' href='"._Project."/Comments/p=$x'>".($x+1)."</a></li>";
}
    ?>
    

  </ul>
</nav>
    <?php


if($data != null){
    foreach ($data as $row) {

?>

     <div class="col-12">
         <div class="card bg-primary text-light">
             <div class="card-header text-dark">
                 <h5><?php echo $row["first_name"]." ".$row["last_name"] ?></h5>
                 <h6><span>التاريخ: <?php echo $row["date_reg"];?></span> <span>الهاتف:
                         <?php echo $row["phone"];?></span><span>الايميل:
                         <?php echo $row["email"];?></span></h6>
                 <h6>
                     <a href="<?php echo _Project."/Comments/Del=".$row["id"]; ?>">حذف</a>
                 </h6>
             </div>
             <div class="card-body">
                <div class="card-title">
                    <h3>

                        <?php echo $row["subject"] ?>
                    </h3>
                </div>
                 <h5><?php echo $row["commint"] ?></h5>
             </div>
         </div>
     </div>
     <?php
                    }
             }
 ?>
 </div>