<?php

require_once './IT/ITX.php';
session_start();
if(isset($_SESSION["startErrorMessage"])||isset($_SESSION["endErrorMessage"]))
  {
    $startError="";
    $endError="";
    $startStyle="control-group";
    $endStyle="control-group";
    
    if(isset($_SESSION["startErrorMessage"]))
    {
      $startError=$_SESSION["startErrorMessage"];
      $startStyle="control-group error";
    }
    
    if(isset($_SESSION["endErrorMessage"]))
    {
      $endError=$_SESSION["endErrorMessage"];
      $endStyle="control-group error";
    }  
    $template=new HTML_TEMPLATE_ITX("./templates");
    $template->loadTemplateFile("hw5form.tpl",true,true);
    $template->setCurrentBlock();
    $template->setVariable("STARTVALIDATION",$startStyle);
    $template->setVariable("STARTMESSAGE",$startError);    
    $template->setVariable("ENDVALIDATION",$endStyle);
    $template->setVariable("ENDMESSAGE",$endError);
    $template->setVariable("STARTVALUE",$_SESSION["start"]);
    $template->setVariable("ENDVALUE",$_SESSION["end"]);
    $template->parseCurrentBlock();
    $template->show();
    session_destroy();
}
else if(!isset($_GET["startHidden"])&&!isset($_GET["endHidden"]))
{
    $template=new HTML_TEMPLATE_ITX("./templates");
    $template->loadTemplateFile("hw5form.tpl",true,true);
    $template->setCurrentBlock();
    $template->setVariable("STARTVALIDATION","control-group");
    $template->setVariable("ENDVALIDATION","control-group");
    $template->setVariable("STARTVALUE",null);
    $template->setVariable("ENDVALUE",null);
    $template->parseCurrentBlock();
    $template->show();
}

else
{
    $startRange=isset($_GET["start"])? $_GET["start"]:"";
    $endRange=isset($_GET["end"])? $_GET["end"]:"";
    $_SESSION["start"]=$startRange;
    $_SESSION["end"]=$endRange;
    header('Location: ./hw5validation.php');
    
}






?>