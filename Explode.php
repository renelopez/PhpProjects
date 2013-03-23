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
        <h3>Count number of characters.</h3>
        <div class="row">
            <div class="span8">
                <?php
                $domain = "orbit.mds.rmit.edu.au";

                echo ("<p>$domain</p>");

                $domain_exploded = explode(".", $domain);
                foreach ($domain_exploded as $word) {
                    echo ("<p>$word</p>");
                }
                ?>
            </div>
            <div class="span4">
                <a href='index.php' class='btn btn-primary'>Return to Index</a>
            </div>
        </div>

    </body>
</html>

