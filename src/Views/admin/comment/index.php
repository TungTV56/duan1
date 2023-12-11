<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Bình Luận</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/admin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Bình Luận</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Danh sách Bình luận</h5>

                                    
                                </div>
                                
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Content</th>
                                                    <th>Username</th>
                                                    <th>Id_pro</th>
                                                    <th>Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($comment as $comments) {
                                                ?>
                                                    <tr>
                                                        <td><?=$comments['id'] ?></td>
                                                        <td><?=$comments['content'] ?></td>
                                                        <td><?=$comments['username'] ?></td>
                                                        <td><?=$comments['id_product'] ?></td>
                                                        <td><?=$comments['date_cmt'] ?></td>
                                                        <td>
                                                            <form action="/admin/comment/delete?id=<?= $comments['id']?>" method="post">
                                                                <button type="submit" onclick="return confirm('Bạn có chắc chắn xóa?');" class="btn btn-danger btn-sm mt-2">Xóa</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                                    <!-- <tr>
                                                        <td>2</td>
                                                        <td>Tuyệt vời!</td>
                                                        <td>user0506</td>
                                                        <td>1</td>
                                                        <td>12:05:56 06-07-2023</td>
                                                        <td>
                                                            <form action="/admin/comment/delete?id=<?= $comments['id'] ?>" method="post">
                                                                <button type="submit" onclick="return confirm('Bạn có chắc chắn xóa?');" class="btn btn-danger btn-sm mt-2">Xóa</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Good</td>
                                                        <td>anh</td>
                                                        <td>17</td>
                                                        <td>09:56:43 04-07-2023</td>
                                                        <td>
                                                            <form action="/admin/comment/delete?id=<?= $comments['id'] ?>" method="post">
                                                                <button type="submit" onclick="return confirm('Bạn có chắc chắn xóa?');" class="btn btn-danger btn-sm mt-2">Xóa</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>đasad</td>
                                                        <td>tung</td>
                                                        <td>12</td>
                                                        <td>22:35:56 05-07-2023</td>
                                                        <td>
                                                            <form action="/admin/comment/delete?id=<?= $comments['id'] ?>" method="post">
                                                                <button type="submit" onclick="return confirm('Bạn có chắc chắn xóa?');" class="btn btn-danger btn-sm mt-2">Xóa</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>dsadasd</td>
                                                        <td>quan</td>
                                                        <td>4</td>
                                                        <td>12:08:56 06-07-2023</td>
                                                        <td>
                                                            <form action="/admin/comment/delete?id=<?= $comments['id'] ?>" method="post">
                                                                <button type="submit" onclick="return confirm('Bạn có chắc chắn xóa?');" class="btn btn-danger btn-sm mt-2">Xóa</button>
                                                            </form>
                                                        </td>
                                                    </tr> -->
                                                
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>