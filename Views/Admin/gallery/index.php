<div class="text-right">

    <div class="row">
        <div class="col-md-12">
            <div class="card container border-top shadow border-primary">
                <div class="card-title pt-3">
                    <h5>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-images" viewBox="0 0 16 16">
                            <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                            <path
                                d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z" />
                        </svg>
                        المعرض
                    </h5>
                </div>
                <hr>
                <div class="card-body">
                    <?php
                    echo  $ctrl->check_msg_session("msg");
                    ?>
                    <form action="<?php echo _Project."/gallery/save" ?>" method="Post" enctype="multipart/form-data">
                        <div>
                            <span class="text-dark">اسم الصورة:</span>
                            <input type="file" name="fle" id="Name" class="form-control mb-3" placeholder="اسم الخدمة "
                                required autofocus>
                        </div>


                        <button type="submit" name="save" class="btn btn-primary mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-cloud-upload" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z" />
                                <path fill-rule="evenodd"
                                    d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z" />
                            </svg>
                            رفع</button>

                    </form>
                </div>
            </div>

        </div>
    </div>
    <?php

$Go=24;
if(isset($_GET["page"])){
    $Start = $_GET["page"]; 
}else{
    $Start=0;
}
$Start*=$Go;

$data=$ctrl->Sarch_data("gallery","","ORDER BY `gallery`.`id` DESC limit $Start,$Go");
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
    echo "<li class='page-item'><a class='page-link' href='"._Project."/service/p=$x'>".($x+1)."</a></li>";
}
    ?>


        </ul>
    </nav>

    <!-- Gallery -->
    <div class="row">


        <!-- Gallery -->

        <?php


if($data != null){
    foreach ($data as $row) {
?>
        <div class="col-md-4 mb-4 mb-lg-0">
            <div class="card">
                <div class="card-header">
                    <img src="<?php echo _Project."/Views/Web/upload/".$row["id"].".".$row["img"]; ?>"
                        class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                </div>
                <div class="card-body">
                    <a class="btn btn-danger" title="حذف" href="<?php echo _Project."/gallery/Del=".$row["id"]; ?>"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-trash3" viewBox="0 0 16 16">
                            <path
                                d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                        </svg></a>
                </div>
            </div>


        </div>
        <?php
    }
}

?>
    </div>


</div>