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
    <style>
        

        /* CSS CHO PHẦN HEADER */
        .header {
            background: aqua;
            border: 1px solid #000;
            font-size: 16px;
            padding: 5px;
        }

        .menu {
            background: black;
            border: 1px solid #000;

            padding: 5px;
            height: 33px;

        }

        .menu ul {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .menu ul li {
            list-style: none;
        }

        .menu li a {
            color: white;
            text-decoration: none;
        }

        .menu li a:hover,
        .dropdown:hover .dropbtn {
            background-color: rgb(225, 0, 43);
            padding: 13px 0;
        }

        .dropdown_content {
            display: none;
            position: absolute;
            background-color: #98FB98;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown_content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: center;

        }

        .dropdown_content a:hover {
            background-color: antiquewhite;
        }

        .dropdown:hover .dropdown_content {
            display: block;
            
        }
    </style>
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