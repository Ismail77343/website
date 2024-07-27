<?php
use Controller\Controller\Control;

$data=$ctrl->Get_Data("info_web",array("name","address","about","phone"));
$name=$data["name"][0];
$address=$data["address"][0];
$phone=$data["phone"][0];
$about=$data["about"][0];

?>
<div class="row text-right">
    <div class="col-md-12">
        <div class="card container border-top shadow border-primary">
            <div class="card-title pt-3">
                <h5>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                    </svg>
                    عننا
                </h5>
            </div>
            <hr>
            <div class="card-body">
                <?php
                    echo  $ctrl->check_msg_session("msg");
                    ?>
                <form action="<?php echo _Project."/info_web/save" ?>" method="Post">
                    <div>
                        <span class="text-dark">اسم الموقع:</span>
                        <input type="text" name="Name" value="<?php echo $name; ?>" id="Name" class="form-control mb-3"
                            placeholder="اسم الموفع " required autofocus>
                    </div>
                    <div>
                        <span class="text-dark">العنوان :</span>
                        <input type="text" name="Address" id="Address" value="<?php echo $address; ?>"
                            class="form-control mb-3" placeholder="العنوان " required>
                    </div>
                    <div>
                        <span class="text-dark">الهاتف :</span>
                        <input type="text" name="Phone" id="Phone" value="<?php echo $phone; ?>"
                            class="form-control mb-3" placeholder="الهاتف " required>
                    </div>
                    <div>
                        <span class="text-dark">نبذة :</span>
                        <textarea name="Note" id="Note" class="form-control mb-3" placeholder="نبذة "
                            required><?php echo $about; ?></textarea>
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

                </form>
            </div>
        </div>

    </div>
</div>