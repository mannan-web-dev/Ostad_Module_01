<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Even/Odd checker</title>

</head>

<body>

<h1> checking even or odd </h1>
<form  method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

<table>
<tr>
    <td>Enter your number  </td>
    <td><input type="number" name="chck" id="chck" ></td>
</tr>

<tr>
    <td><input type="submit" name="btnConvert" id="btnConvert" value="Check"></td>
    <td><input type="reset" name="btnReset" id="btnReset" value="Reset"></td>
</tr>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $get_num= $_POST['chck'] ?: [];
    if ($get_num == '') {
        echo "Insert The value, Please ";
    }else {
        if ($get_num%2==0) {
            $even = "Even ";
        }elseif ($get_num % 2==1) {
            $odd = "odd ";
        }
    }
}
 ?>
 <?php
 if(isset($even)){ ?>  

 <div class="row justify-content-center mb-3">
     

     <div style="margin-left: 500px;">
     <span>
         The value is  ::
     </span>
             <input type="button" value="<?php echo $even; ?>">
     </div>
</div>

 <?php }?>

 <?php
 if(isset($odd)){ ?>  

 <div class="row justify-content-center mb-3">
     

     <div style="margin-left: 500px;">
     <span>
         The value is  ::
     </span>
             <input type="button" value="<?php echo $odd; ?>">
     </div>
</div>

 <?php }?>

 
</body>

</html>