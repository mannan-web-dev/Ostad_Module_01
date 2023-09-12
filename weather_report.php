<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>weather Report</title>

</head>

<body>

   <h1>Weather Report</h1>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <div style="margin-left: 265px; margin-top:100px;">
                <div>
                        <label for="Operand1"> Enter current weather value</label>
                        <input id="Operand1" name="Operand1" type="number" class="form-control form-control-custom" value="<?php echo isset($Operand1)?$Operand1:''; ?>">
                </div>

        </div>

                    <select name="temperature">
                    <option selected="true" disabled="disabled" >Select  temperature </option>
                    <option value="+">Celsius </option>
                    <option value="-">farenheit </option>
                    </select>

                <table>
                   <tr>
                        <td><input type="submit" name="btnConvert" id="btnConvert" value="Check"></td>
                        <td><input type="reset" name="btnReset" id="btnReset" value="Reset"></td>
                    </tr>
               </table>
      </form>
      

      <?php
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Operand1=$_POST['Operand1'] ?? [] ;
        $Operator=$_POST['temperature'] ?? [] ;

     
        if($Operand1 == ''){
            $Error = "The input values are required.";
        }
        else{
            if($Operator=="+")

              $Result_f=((9/5)*$Operand1) +(32);
                 
            else if($Operator=="-")
                
            $Result_c= (5/9* $Operand1-(32));
        }
    } 
    
    ?>

    <?php
     if( isset($Result_f)){ 
          
            // echo $Result_f;
            switch ($Result_f) {
               case ($Result_f <= 32):
                  echo "the weather is freezing";
                  break;

                  case ($Result_f <= 86):
                     echo "the weather is cool";
                     break;
               
               default:
                  echo "the weather is warm";
                  break;
            }
            }?>


<?php
     if( isset($Result_c)){ 
            switch ($Result_c) {
               case ($Result_c <= -17.7778):
                  echo "the weather is freezing";
                  break;

                  case ($Result_c <= 86):
                     echo "the weather is cool";
                     break;
               
               default:
                  echo "the weather is warm";
                  break;
            }
      

            }?>
</body>

</html>