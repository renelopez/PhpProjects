<?php
require_once './IT/ITX.php';
session_start();
if(isset($_SESSION["start"]) && isset($_SESSION["end"]))
{
    $start=$_SESSION["start"];
    $end=$_SESSION["end"];
    if(validateRequired($start, $end)){break;}
    if(validateNumbers($start,$end)){break;}
    if(validateRange($start, $end)){break;}
    if(validateEndingValue($start,$end)){break;}
    renderResults($start,$end);
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
    
    if($error > 0)
    {
        header('Location: ./hw5.php');
        return true;
    }
    else
    {
        return false;
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
    
    if($error > 0)
    {
        header('Location: ./hw5.php');
        return true;
    }
    else
    {
        return false;
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
    
    if($error > 0)
    {
        header('Location: ./hw5.php');
        return true;
    }
    else
    {
        return false;
    }
}

function validateEndingValue($start,$end)
{
    $error=0;
    
    if(!($end>=$start)){
        $_SESSION["endErrorMessage"]="Ending value must be equal or greater than initial value.";
        $error++;
    }
    
    if($error > 0)
    {
        header('Location: ./hw5.php');
        return true;
    }
    else
    {
        return false;
    }
}

function renderResults($start,$end)
{
    $template=new HTML_TEMPLATE_ITX("./templates");
    $template->loadTemplateFile("hw5results.tpl",true,true);
    $i=0;
    for($i=$start;$i<=$end;$i++)
    {
        $template->setCurrentBlock("CONVERSION");
        $template->setVariable("CELSIUS",$i);
        $template->setVariable("FAHRENHEIT",($i*1.8)+32);
        $template->parseCurrentBlock();
    }
    $template->show();
}
?>

