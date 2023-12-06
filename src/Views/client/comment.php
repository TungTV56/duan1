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

</head>

<body>
    <h2>Bình luận</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="hidden" name="idpro">
        <div class="submit-review">
            <p><label for="name">Name</label></p>

            <p><label for="review"></label> <textarea name="review" id="" cols="5" rows="10"></textarea></p>
            <p><input type="submit" value="Submit"></p>
        </div>
    </form>
    <?php 
        if(isset($_GET['id'])){
            echo $_GET['id'];
        }
    ?>
</body>

</html>