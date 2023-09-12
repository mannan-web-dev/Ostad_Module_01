<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grade Calculator</title>

</head>

<body>
<h1> that computes the average of three test scores  </h1>

<form  method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

<table>
<tr>
    <td>Enter Your marks.. </td>
    <td><input type="text" name="mark1" id="mark1" value= ""></td>
    <td><input type="text" name="mark2" id="mark2" value= ""></td>
    <td><input type="text" name="mark3" id="mark3" value= ""></td>
</tr>

<tr>
    <td><input type="submit" name="btnConvert" id="btnConvert" value="Grade Calculate"> </td>
    <td><input type="reset" name="btnReset" id="btnReset" value="Reset"></td>
</tr>



</form>

<?php
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $result1=$_POST['mark1'] ? : null;
        $result2=$_POST['mark2'] ? : null;
        $result3=$_POST['mark3'] ? : null;

        if ( $result1 &&  $result2 &&  $result3) {
             $avg = (($result1 + $result3 + $result3)/3);
        };

        switch ($avg) {
            case ($avg >= "80"):
                echo "Your grade is : A+";
                break;
            case ($avg >= "70"):
                    echo " Your grade is : A";
                    break;
            
             case ($avg >= "60"):
                     echo "Your grade is :A-";
                     break;
            
             case ($avg >= "50"):
                         echo "Your grade is : B";
                         break;
                    
             case ($avg >= "40"):
                        echo "Your grade is : C";
                        break;
                        
             case ($avg >= "33"):
                     echo "Your grade is : D";
                     break;
                            
            default:
            echo "Your grade is : F";
                break;
        }
    } 

    ?>

<?php
     if( isset($avg)){ ?>
        <div class="row justify-content-center mb-3">
     

                <div style="margin-left: 500px;">
                <span>
                    Your marks is  ::
                </span>
                        <input type="button" value="<?php echo $avg; ?>">
                </div>
        </div>
       
        <?php  } ?>
</body>

</html>