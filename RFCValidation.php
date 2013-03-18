<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <?php include_once './Functions.php'; ?>
    </head>
    <body>
        <h2>Regular Expressions</h2>
        <div class ="row">
            <div class ="span6">
                <form class="well" action="<?php echo("$_SERVER[PHP_SELF]")?>" method="post">
                    <fieldset>
                        <label>Type your RFC to be validated</label>
                        <input type="text" name="RFC" max="13" placeholder="RFC goes here...." />
                        <input type="submit" class="btn" />
                    </fieldset>
                </form>
                <p>
                    <?php
                    if (isset($_POST["RFC"])) {
                        $rfc = $_POST["RFC"];
                        $isValid=  validateRFC($rfc);
                        if ($isValid)
                        {
                            echo("<p>Your RFC {$rfc} is valid</p>");
                        }
                        else{
                            echo("<p>Your RFC {$rfc} is invalid</p>");
                        }
                    }
                    ?>

                </p>
            </div>           
            <div class ="span6">
                <a href='Index.php' class='btn btn-primary'>Return to Index</a>
            </div>                       
        </div>
    </body>
</html>
