<div class="header-area">
    <div class="container">
        <div class="row" >
            <div class="col-md-8">
                <div class="user-menu">
                    <ul>
                        <li><a href="/client/yourorder"><i class="fa fa-shopping-cart"></i> Đơn hàng của tôi</a></li>
                        <li><a href="#"><i class="fa fa-user"></i> My Account</a></li>
                        <?php
                        if (!isset($_SESSION["user"])) {
                        ?>
                            <li><a href="/client/login"><i class="fa fa-user"></i> Login</a></li>
                        <?php
                        } else {
                        ?>
                            <li><a href="/client/logout"> Logout</a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div style="float: right; margin-top: 10px;">
                <p> <?= isset($_SESSION['user']['username']) ? "Xin chào, ". $_SESSION['user']['username'] : "" ?></p>
            </div>
        </div>
    </div>
</div> <!-- End header area -->