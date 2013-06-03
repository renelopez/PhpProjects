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
        <div class='row'>
            <div class='span8'>
                <table class='table table-striped table-bordered table-hover'>
                    <tbody>
                        <tr>
                            <td><strong>Celsius</strong></td>
                            <td><strong>Fahrenheit</strong></td>
                        </tr>
                        <!-- BEGIN CONVERSION -->
                        <tr>
                            <td>{CELSIUS}</td>
                            <td>{FAHRENHEIT}</td>
                         </tr>       
                         <!-- END CONVERSION -->
                    </tbody>
                </table>
            </div>
            <div class="span4">
                <p><a href='index.php' class='btn btn-primary'>Return to Index</a></p>
                <p><a href='hw5.php' class='btn btn-primary'>Return to Conversion Form</a></p>
                </p>
            </div>
        </div>
    </body>
</html>