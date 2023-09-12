<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Calculator</title>

</head>
<h1>Basic Calculator</h1>

<body>
<form method="post" action="">
        <div style="margin-left: 265px; margin-top:100px;">
                <div>
                        <label for="Operand1">First Numberr</label>
                        <input id="Operand1" name="Operand1" type="number" class="form-control form-control-custom" value="<?php echo isset($Operand1)?$Operand1:''; ?>">
                </div>
                <div  style="margin-top: 15px;">
                        <label for="Operand2">Second Number</label>
                        <input id="Operand2" name="Operand2" type="number" step="any" class="form-control form-control-custom" value="<?php echo isset($Operand2)?$Operand2:''; ?>">
                </div>
        </div>

                    <select name="Calculate">
                    <option selected="true" disabled="disabled" >Select Operation </option>
                    <option value="+">ADD</option>
                    <option value="-">Sub</option>
                    <option value="x">multiply</option>
                    <option value="/">divide</option>
                    </select>

                <table>
                   <tr>
                        <td><input type="submit" name="btnConvert" id="btnConvert" value="Calculate"></td>
                        <td><input type="reset" name="btnReset" id="btnReset" value="Reset"></td>
                    </tr>
               </table>
      </form>
      

    <?php
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Operand1=$_POST['Operand1'] ?? [] ;
        $Operand2=$_POST['Operand2'] ?? [] ;
        $Operator=$_POST['Calculate'] ?? [] ;

     
        if($Operand1 == '' || $Operand2 == ''){
            $Error = "The input values are required.";
        }
        else{
            if($Operator=="+")
                $Result=$Operand1+$Operand2;
            else if($Operator=="-")
                $Result=$Operand1-$Operand2;
            else if($Operator=="x")
                $Result=$Operand1*$Operand2;
            else if($Operator=="/")
                $Result=$Operand1/$Operand2;
        }
    } 
    
    ?>

    <?php
     if( isset($Result)){ ?>
        <div class="row justify-content-center mb-3">
     
        <label style="margin-left: 400px;">Result</label>
                <div style="margin-left: 400px;" >
                        <input type="text" value="<?php echo $Result; ?>" disabled  />
                </div>
        </div>
       
        <?php  }else{ ?>

            <h1 style="margin-left: 40px;"> তথ্য সন্নিবেশ করুন</h1>

            <?php   }
                   ?>

</body>

</html>