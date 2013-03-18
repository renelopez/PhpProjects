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
                <form class="well">
                    <fieldset>
                        <label>Type a word to find its coincidences.</label>
                        <input type="text" placeholder="Type any kind of word...." />
                    </fieldset>
                </form>
            </div>           
            <div class ="span6">
                  <a href='Index.php' class='btn btn-primary'>Return to Index</a>
            </div>                       
        </div>
    </body>
</html>