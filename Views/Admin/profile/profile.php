<div class="text-right">

</div>
<div class="row text-right">

    <div class="col-md-6">
        <div class="card container border-top shadow border-primary">
            <div class="card-title pt-3">
                <h5>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                        class="bi bi-key-fill" viewBox="0 0 16 16">
                        <path
                            d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    </svg>|
                    تغيير كلمة المرور
                </h5>
            </div>
            <hr>
            <div class="card-body">
                <?php
                    echo  $ctrl->check_msg_session("msg1");
                    ?>
                <form action="<?php echo _Project."/profile/" ?>" method="Post">
                    <div>

                        <span class="text-dark">كلمة المرور القديمة:</span>
                        <input type="password" name="old_pass" class="form-control mb-3"
                            placeholder="كلمة المرور القديمة " required>
                    </div>
                    <div>

                        <span class="text-dark">كلمة المرور الجديد:</span>
                        <input type="password" name="pass" class="form-control mb-3" placeholder="كلمة المرور الجديد"
                            required>
                    </div>
                    <div>
                        <span class="text-dark">اعادة كلمة المرور الجديده:</span>

                        <input name="pass2" type="password" class="form-control mb-3"
                            placeholder="اعادة كلمة المرور الجديده" required />

                    </div>

                    <button type="submit" name="change_pass" class="btn btn-primary mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path
                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd"
                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg>
                        حفظ
                    </button>
                </form>
            </div>
        </div>

    </div>
    <div class="col-md-6">
        <div class="card container border-top shadow border-primary">
            <div class="card-title pt-3">
                <h5>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                        class="bi bi-person-fill-lock" viewBox="0 0 16 16">
                        <path
                            d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5v-1a1.9 1.9 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2Zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1Z" />
                    </svg>|
                    تغيير اسم المستخدم
                </h5>
            </div>
            <hr>
            <div class="card-body">
                <?php
                    echo  $ctrl->check_msg_session("msg");
                    ?>
                <form action="<?php echo _Project."/profile/" ?>" method="Post">

                    <div>
                        <span class="text-dark">اسم المستخدم:</span>
                        <input type="text" name="UName" value="<?php echo $ctrl->check_msg_session("UName",false); ?>"
                            class="form-control mb-3" placeholder="اسم المستخدم">
                    </div>
                    <div>
                        <span class="text-dark">كلمة المرور:</span>
                        <input type="password" name="pass" class="form-control mb-3" placeholder="كلمة المرور">
                    </div>
                    <button type="submit" name="change_UName" class="btn btn-primary mb-3">
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