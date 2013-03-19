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
                <form class="well" action="<?php echo("$_SERVER[PHP_SELF]") ?>" method="post">
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
                    $newWord = cleanChars($word);
                    echo("<div class='well'");
                    echo("<p><strong>Cryptogram text:</strong><br />");
                    echo($newWord . "</p>");
                    echo("<p><strong>Number of characters:</strong><br />");
                    echo(strlen($newWord) . "</p>");
                    echo("</div>");
                    ?>
                </div>
                <div class="span6">                
                </div>
            </div>
            <div class="row">
                <div class="span6">
                    <table class='table table-bordered table-hover'>
                        <tbody>
    <?php
    $wordUpper = strtoupper($newWord);
    $arrayOcurrences = count_chars($wordUpper, 1);
    arsort($arrayOcurrences);
    echo("<strong>Letter Frequency</strong><br />");
    echo ("<tr>");
    foreach ($arrayOcurrences as $key => $value) {
        echo("<td>" . chr($key) . "</td>");
    }
    echo ("</tr>");
    echo ("<tr>");
    foreach ($arrayOcurrences as $key => $value) {
        echo("<td>" . $value . "</td>");
    }
    echo ("</tr>");
    ?>
                        </tbody>
                    </table>
                </div>
                <div class="span6">
                    <table class='table table-bordered table-hover'>
                        <tbody> 
    <?php
    $wordLower = strtolower($word);
    $wordCased = ucwords($wordLower);
    $firstWords="";
    preg_match_all('/[A-Z]/', $wordCased, $matches, PREG_OFFSET_CAPTURE);
    foreach ($matches[0] as $value) {
        $firstWords.=$value[0];
    }

    $arrayFirstOcurrences = count_chars($firstWords, 1);
    arsort($arrayFirstOcurrences);
    echo("<strong>Word Initial Letter Frequency</strong><br />");
    echo ("<tr>");
    foreach ($arrayFirstOcurrences as $key => $value) {
        echo("<td>" . chr($key) . "</td>");
    }
    echo ("</tr>");
    echo ("<tr>");
    foreach ($arrayFirstOcurrences as $key => $value) {
        echo("<td>" . $value . "</td>");
    }
    echo ("</tr>");
}
?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>