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
            <div class="span12">
                <?php
// Create a PHP script where a user enters a text in a form and clicks a 'submit' button.
// The script should then show a page, where the number of occurrences of the letter 'e' in the input string is shown.
// Here is the form which requests an input string.

                print "<p align=\"center\">\n";

                print "<form action=\"$_SERVER[PHP_SELF]\" form method=\"post\">\n";

                print "Type a string (120 chars max): <input type=\"text\" name=\"message\" maxlength=\"120\" /><br />";

                print "<input type=\"submit\" value=\"GO!\">\n";
                print "</form>\n";

                print "</p>\n";

// END form which requests an input string.

                if (isset($_POST["message"])) {
                    $str = $_POST["message"];

                    $count = countLetters($str, 'e');

                    echo "<p>Your original message:</p>";
                    echo "<p><i>$str</i></p>";

                    echo("The word 'e' was included $count times in your word");
                }
                ?>
            </div>
            <div class="span0">

            </div>
        </div>

    </body>
</html>

