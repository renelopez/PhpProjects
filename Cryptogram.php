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
        <h2>Cryptogram</h2>
        <div class ="row">
            <div class ="span6">
                <form class="well" action="<?php echo("$_SERVER[PHP_SELF]")?>" method="post">
                    <fieldset>
                        <label>Type a word to find its coincidences.</label>
                        <textarea maxlength="100" name="WORD" placeholder="Type any kind of word...." rows="4"></textarea>
                        <input type="submit" class="btn" />
                    </fieldset>
                </form>
            </div>                       
            <div class ="span6">
                  <a href='Index.php' class='btn btn-primary'>Return to Index</a>
            </div>                       
        </div>
        <div class="row">
            <div class="span6">
                <?php
                    if (isset($_POST["WORD"])) {
                        $word = $_POST["WORD"];                        
                        echo("<div class='well'");
                        echo("<p><strong>Cryptogram text:</strong><br />");
                        echo($word."</p>");
                        echo("<p><strong>Number of characters:</strong><br />");
                        echo(strlen($word."</p>"));
                        echo("</div>");
                    }
            ?>
            </div>
            <div class="span6">
                
            </div>
        </div>
    </body>
</html>