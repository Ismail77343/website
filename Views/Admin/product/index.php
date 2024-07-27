<div class="text-right">

    <div class="row">
        <div class="col-md-12">
            <div class="card container border-top shadow border-primary">
                <div class="card-title pt-3">
                    <h5>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-journal-text" viewBox="0 0 16 16">
                            <path
                                d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                            <path
                                d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                            <path
                                d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                        </svg>
                        خدماتنا
                    </h5>
                </div>
                <hr>
                <div class="card-body">
                    <?php
                    echo  $ctrl->check_msg_session("msg");
                    ?>
                    <form action="<?php echo _Project."admin/product//save" ?>" method="Post">
                        <div>
                            <input type="hidden" id="_Edit" name="_Edit">
                            <span class="text-dark">اسم الخدمة:</span>
                            <input type="text" name="Name" id="Name" class="form-control mb-3" placeholder="اسم الخدمة "
                                required autofocus>
                        </div>


                        <button type="submit" name="save" class="btn btn-primary mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg>
                            حفظ</button>
                        <button type="reset" id="btn_new" onclick="hide('btn_new');window.Name.focus()"
                            class="btn btn-secondary" style="display:none;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-plus-square" viewBox="0 0 16 16">
                                <path
                                    d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                            </svg>
                            جديد</button>
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

$data=$ctrl->Sarch_data("service","","ORDER BY `service`.`id` DESC limit $Start,$Go");
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
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">الخدمة</th>
                <th scope="col">الادوات</th>
            </tr>
        </thead>
        <tbody>
            <?php


if($data != null){
    foreach ($data as $row) {
?>
            <tr>
                <td><?php echo $row["name"]; ?></td>
                <td>
                    <a href="<?php echo _Project."/service/Del=".$row["id"]; ?>" title="حذف" class="btn btn-danger"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-trash3" viewBox="0 0 16 16">
                            <path
                                d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                        </svg></a>
                    <button
                        onclick="EEdit('_Edit','<?php echo $row['id'] ?>');EEdit('Name','<?php echo $row['name'] ?>');show('btn_new');window.Name.focus()"
                        class="btn btn-primary" title="تعديل"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                            <path
                                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                        </svg></button>
                </td>
            </tr>
            <?php
    }
}

?>

        </tbody>
    </table>

</div>
<script>
function EEdit(id, value) {
    inp = document.getElementById(id);
    inp.value = value;
}

function hide(id) {
    inp = document.getElementById(id);
    inp.style.display = "none";
}

function show(id) {
    inp = document.getElementById(id);
    inp.style.display = "inline";
}
</script>