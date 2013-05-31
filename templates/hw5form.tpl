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
    </head>
    <body>
        <h2>Conversion table from Celsius to Fahrenheit</h2>       
        <form class="form-horizontal" action="./hw5.php">
            <div class="{STARTVALIDATION}">
                <label class="control-label" for="start">Starting temperature °C(0-100)</label>
                <div class="controls">
                    <input type="text" id="start" name="start" value="{STARTVALUE}" placeholder="Type the initial range" />
                    <input type="hidden" id="startHidden" name="startHidden" value="hiddenValue" />
                    <span class="help-inline">{STARTMESSAGE}</span>
                </div>
            </div>    
            <div class="{ENDVALIDATION}">
                <label class="control-label" for="end">Starting temperature °C(0-100)</label>
                <div class="controls">
                    <input type="text" id="start" name="end" value="{ENDVALUE}" placeholder="Type the final range" />
                     <input type="hidden" id="endHidden" name="endHidden" value="hiddenValue" />
                     <span class="help-inline">{ENDMESSAGE}</span>
                </div>
            </div>
             <div class="control-group">
                <div class="controls">
                   <button type="submit" class="btn">Convert</button>
                    <a href='index.php' class='btn btn-primary'>Return to Index</a>     
                </div>
            </div>
        </form>              
    </body>
</html>