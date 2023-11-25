<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ustora</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <?php require_once 'components/css.php' ?>
</head>

<body>

    <?php require_once 'components/header.php' ?>

    <?php require_once 'components/branding.php' ?>

    <?php require_once 'components/main_menu.php' ?>

    <?php require_once $view . '.php'; ?>
   
    <?php require_once 'components/footer.php' ?>

    <?php require_once 'components/js.php' ?>
</body>

</html>