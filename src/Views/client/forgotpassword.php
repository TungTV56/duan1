<div class="container">
    <h2 style="text-align: center;">Quên mật khẩu</h2>
    <form class="form-horizontal" action="/client/showforgot" method="post">
        <div class="form-group">
            <label class="control-label col-sm-2" for="username">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" required name="email">
            </div>
            <?php
            if (isset($name)) {
                ?>
                <div class="col-sm-10" style="margin-left: 195px;">
                    <p>
                        <?= $name ?>
                    </p>
                    <p>
                        <?= $pass ?>
                    </p>
                </div>
                <?php
            }
            if (isset($error)) {
                ?>
                <div class="col-sm-10" style="margin-left: 195px;">
                    <p>
                        <?= $error ?>
                    </p>
                </div>
                <?php
            }
            ?>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="submit" class="btn btn-default">Tìm kiếm</button>
            </div>
        </div>
    </form>
</div>