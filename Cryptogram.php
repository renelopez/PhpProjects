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
                <a href='index.php' class='btn btn-primary'>Return to Index</a>
            </div>                       
        </div>
        <div class="row">
            <div class="span6">
                <?php
                if (isset($_POST["WORD"])) {
                    $word = $_POST["WORD"];
                    $newWord = cleanChars($word);
                    $newWordWithoutSpaces=  str_replace(' ', '', $newWord);
                    echo("<div class='well'");
                    echo("<p><strong>Cryptogram text:</strong><br />");
                    echo(strtoupper($newWord)."</p>");
                    echo("<p><strong>Number of characters:</strong><br />");
                    echo(strlen($newWordWithoutSpaces)."</p>");
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
                            $wordUpper = str_replace(" ", '', strtoupper($newWord));
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
                            $firstWords = "";
                            preg_match_all('/[A-Z]/', $wordCased, $matches, PREG_OFFSET_CAPTURE);
                            foreach ($matches[0] as $value) {
                                $firstWords.=$value[0];
                            }

                            $arrayFirstOcurrences = count_chars($firstWords, 1);
                            arsort($arrayFirstOcurrences);
                            echo("<strong>Word Initial Letter Frequency</strong><br />");
                            echo ("<tr>");
                            foreach ($arrayFirstOcurrences as $key => $value) {
                                echo("<td>" . strtoupper(chr($key)) . "</td>");
                            }
                            echo ("</tr>");
                            echo ("<tr>");
                            foreach ($arrayFirstOcurrences as $key => $value) {
                                echo("<td>" . $value . "</td>");
                            }
                            echo ("</tr>");
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class ="row">
                <div class="span6">
                    <table class='table table-bordered table-hover'>
                        <tbody>
                            <?php
                            $wordReverseCased = "";
                            $words = str_word_count($wordLower, 1);
                            foreach ($words as $value) {
                                $temp = strrev($value);
                                $wordReverseCased.= ucfirst($temp);
                            }
                            $firstWordsReverse = "";
                            preg_match_all('/[A-Z]/', $wordReverseCased, $matches, PREG_OFFSET_CAPTURE);
                            foreach ($matches[0] as $value) {
                                $firstWordsReverse.=$value[0];
                            }

                            $arrayReverseFirstOcurrences = count_chars($firstWordsReverse, 1);
                            arsort($arrayReverseFirstOcurrences);
                            echo("<strong>Word Final Letter Frequency</strong><br />");
                            echo ("<tr>");
                            foreach ($arrayReverseFirstOcurrences as $key => $value) {
                                echo("<td>" . strtoupper(chr($key)) . "</td>");
                            }
                            echo ("</tr>");
                            echo ("<tr>");
                            foreach ($arrayReverseFirstOcurrences as $key => $value) {
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
    $splittedWords = str_word_count($newWord, 1);
    $oneElementArray = array();
    $twoElementArray = array();
    $threeElementArray = array();
    foreach ($splittedWords as $word) {
        switch (strlen($word)) {
            case 1:array_push($oneElementArray, $word);
                break;
            case 2:array_push($twoElementArray, $word);
                break;
            case 3:array_push($threeElementArray, $word);
                break;
            default:break;
        }
    }
    $arrayOneElementCount = array_count_values($oneElementArray);
    $arrayTwoElementCount = array_count_values($twoElementArray);
    $arrayThreeElementCount = array_count_values($threeElementArray);
    echo("<strong>One letter words</strong><br />");
    echo ("<tr>");
    foreach ($arrayOneElementCount as $key => $value) {
        echo("<td>" . strtoupper($key) . "</td>");
    }
    echo ("</tr>");
    echo ("<tr>");
    foreach ($arrayOneElementCount as $key => $value) {
        echo("<td>" . $value . "</td>");
    }
    echo ("</tr>");
    ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class='row'>
                <div class='span6'>
                    <table class='table table-bordered table-hover'>
                        <tbody>
                            <?php
                            echo("<strong>Two letter words</strong><br />");
                            echo ("<tr>");
                            foreach ($arrayTwoElementCount as $key => $value) {
                                echo("<td>" . strtoupper($key) . "</td>");
                            }
                            echo ("</tr>");
                            echo ("<tr>");
                            foreach ($arrayTwoElementCount as $key => $value) {
                                echo("<td>" . $value . "</td>");
                            }
                            echo ("</tr>");
                            ?>
                        </tbody>
                    </table>
                </div>

                <div class='span6'>
                    <table class='table table-bordered table-hover'>
                        <tbody>
                            <?php
                            echo("<strong>Three letter words</strong><br />");
                            echo ("<tr>");
                            foreach ($arrayThreeElementCount as $key => $value) {
                                echo("<td>" . strtoupper($key) . "</td>");
                            }
                            echo ("</tr>");
                            echo ("<tr>");
                            foreach ($arrayThreeElementCount as $key => $value) {
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