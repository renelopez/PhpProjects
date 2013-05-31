<?php
session_start();
if(isset($_SESSION["start"]) && isset($_SESSION["end"]))
{
    $start=$_SESSION["start"];
    $end=$_SESSION["end"];
    validateRequired($start, $end);
    validateNumbers($start,$end);
    validateRange($start, $end);
    validateEndingValue($start,$end);
}

function validateRequired($start,$end)
{
    $error=0;
    
    if($start==""){
        $_SESSION["startErrorMessage"]="Initial range value is required.";
        $error++;
    }
    if($end==""){
        $_SESSION["endErrorMessage"]="End range value is required.";
        $error++;
    }
    
    if($error > 0){
        header('Location: ./hw5.php');
    }
    
}

function validateNumbers($start,$end)
{
    $error=0;
    
    if(!is_numeric($start)){
        $_SESSION["startErrorMessage"]="Invalid initial range value.";
        $error++;
    }
    if(!is_numeric($end)){
        $_SESSION["endErrorMessage"]="Invalid end range value.";
        $error++;
    }
    
    if($error > 0){
        header('Location: ./hw5.php');
    }
}

function validateRange($start,$end)
{
    $error=0;
    
    if($start< 0 || $start > 100){
        $_SESSION["startErrorMessage"]="Initial value is out of range.";
        $error++;
    }
    if($end< 0 || $end > 100){
        $_SESSION["endErrorMessage"]="End value is out of range.";
        $error++;
    }
    
    if($error > 0){
        header('Location: ./hw5.php');
    }
}

function validateEndingValue($start,$end)
{
    $error=0;
    
    if(!($end>=$start)){
        $_SESSION["endErrorMessage"]="Ending value must be equal or greater than initial value.";
        $error++;
    }
    
    if($error > 0){
        header('Location: ./hw5.php');
    }
}
?>
