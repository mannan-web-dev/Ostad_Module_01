<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>named comparison_tool</title>

</head>
<h1> compares two numbers </h1>
<body>
<form  method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

<table>
<tr>
    <td>Enter Your Two value: </td>
    <td><input type="text" name="Value1" id="Value1" value= ""></td>
    <td><input type="text" name="Value2" id="Value2" value= ""></td>
</tr>

<tr>
    <td><input type="submit" name="btnConvert" id="btnConvert" value="Check Larger Number"> </td>
    <td><input type="reset" name="btnReset" id="btnReset" value="Reset"></td>
</tr>



</form>


<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $num_1= $_POST['Value1'];
    $num_2= $_POST['Value2'];

    if ($num_1 && $num_2) {
        $largenumber = ($num_1 > $num_2)? $num_1 : $num_2;
       
    }
}
 ?>


<?php
     if( isset($largenumber)){ ?>
        <div class="row justify-content-center mb-3">
     

                <div style="margin-left: 500px;">
                <span>
                    the largest Number is ::
                </span>
                        <input type="button" value="<?php echo $largenumber; ?>">
                </div>
        </div>
       
        <?php  } ?>




</body>

</html>