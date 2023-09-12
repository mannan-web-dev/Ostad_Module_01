<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Celsius to Fahrenheit </title>

</head>

<body>
<h1> (Celsius to Fahrenheit) </h1>

<form  method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

<table>
<tr>
    <td>Enter value to Celsius temperature  </td>
    <td><input type="text" name="celcius" id="celcius" value= ""></td>
</tr>

<tr>
    <td><input type="submit" name="btnConvert" id="btnConvert" value="Convert"></td>
    <td><input type="reset" name="btnReset" id="btnReset" value="Reset"></td>
</tr>

</table>

</form>

<?php
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valueconver=$_POST['celcius'] ? :null;

        if($valueconver == '' ){
            $Error = "The input values are required.";
        }
        else{
            if($valueconver)
                $Result=((9/5)*$valueconver) +(32);
        }
    } 
    
    ?>



<?php
     if( isset($Result)){ ?>
        <div class="row justify-content-center mb-3">
     

                <div style="margin-left: 500px;">
                <span>
                    the temperature in Fahrenheit ::
                </span>
                        <input type="button" value="<?php echo $Result; ?>">
                </div>
        </div>
       
        <?php  } ?>



</body>

</html>