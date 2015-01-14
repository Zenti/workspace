<!-- [c] Root URL -->
<?php $baseUrl = "http://" . $_SERVER["SERVER_NAME"] . "/"; ?>
<!-- [c] Momentane URL -->
<?php $currentUrl = "http://" . $_SERVER["SERVER_NAME"].strtok($_SERVER["REQUEST_URI"],"?"); ?>

<!DOCTYPE html>
<html lang="de">

    <head>

        <title>CHECK24 | Girokonto vergleichen</title>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta lang="de" content="CHECK24 - Giro Antragsstrecke" name="Description" />
        <meta content="CHECK24, Girokonto, vergleichen" name="Keywords" />
        <meta content="localhost, Michael Zentgraf" name="Author" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->
        <meta charset="UTF-8" />

        <link rel="stylesheet" type="text/css" href="css/layout.css" />
        <link rel="stylesheet" type="text/css" href="css/datepicker.css" />
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />


        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />

    </head>

    <body>

        <div id="c24">

            <!-- [c] Giro Header -->
            <?php include( "tmpl/header.php" ); ?>
            <!-- [c] Product Info -->
            <?php include( "tmpl/productinfo.php"); ?>
            <!-- [c] Single Sign On -->
            <?php include( "tmpl/sso.php" ); ?>
            <!-- [c] Form's -->
            <?php include( "tmpl/form.php" ); ?>
            <!-- [c] Footer -->
            <?php include( "tmpl/footer.php" ) ?>

        </div>

        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <script type="text/javascript" src="js/layout.js"></script>

    </body>

</html>