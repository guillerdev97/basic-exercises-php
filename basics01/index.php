<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication</title>
    <link rel="stylesheet" type="text/css" href="./styles.css">
</head>
<body>

   

    <?php 
        
    for($firstNumber = 0; $firstNumber < 11; $firstNumber++) {
        for($secondNumber = 0;$secondNumber < 11; $secondNumber++) {
            $result = $firstNumber * $secondNumber;
            echo "$firstNumber * $secondNumber = $result<br>";
        }
    }
    
    
    
    
    
    ?>
</body>
</html>