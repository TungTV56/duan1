<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <?php require_once 'components/css.php' ?>
    <style>
        .username {
            display: flex;
        }
    </style>

</head>

<body>
    <?php
    foreach ($comment as $comments) {    
    ?>
        <div class="username">
            <label for="name">
                <?= $comments['username'] ?>
            </label>
            <p class="text-muted"><small> | <?= $comments['date_cmt'] ?></small></p>
            <p></p>
        </div>
        <p></p>
        <table cellspacing=0>
            <tr>
                <td><?= $comments['content'] ?></td>
            </tr>
        </table>
        <hr>
    <?php } ?>
    <?php
    if (isset($_SESSION['user'])) {
    ?>
        <form action="/client/comment/create" method="post">
            <input type="hidden" name="idsp" value="<?=$_GET['idsp'] ?>">
            <div class="submit-review">
                <p><label for="review"></label> <textarea name="content" id="" cols="5" rows="10"></textarea></p>
                <p><input type="submit" value="Submit" name="btn-submit"></p>
            </div>
        </form>
    <?php
    } else {
    ?>
        <h4 class="text-danger">Vui lòng Đăng nhập để bình luận!</h4>
    <?php } ?>


</body>

</html>