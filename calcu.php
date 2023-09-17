<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <!-- php -->
        <?php

            @$FirstNumber = $_POST['FirstNumber'];
            @$SecondNumber = $_POST['SecondNumber'];
            @$operator = $_POST['operator'];
            $CalculatorResult = '';

            if(is_numeric($FirstNumber) && is_numeric($SecondNumber)){
                switch($operator){
                    case "Sum": 
                        $CalculatorResult = $FirstNumber + $SecondNumber;
                        break;

                    case "Subtraction":
                        $CalculatorResult = $FirstNumber - $SecondNumber;
                        break;

                    case "Multiplication":
                        $CalculatorResult = $FirstNumber * $SecondNumber;
                        break;

                    case "Division":
                        $CalculatorResult = $FirstNumber / $SecondNumber;
                        break;

                }
            }

        ?>

    <!-- html -->

    <div>
            <h1>Simple Calculator Program</h1>
        <form action="" method="post">
            <p> <b>FirstNumber</b>
                <input type="number" name="FirstNumber" id="FirstNumber" required value="<?php echo $FirstNumber; ?>">
                </p> 

            <p><b>SecondNumber</b>
                <input type="number" name="SecondNumber" id="SecondNumber" required value="<?php echo $SecondNumber; ?>">
                </p>

            <p><b>CalculatorResult</b>
                <input readonly="readonly" name="CalculatorResult" value="<?php echo $CalculatorResult; ?>">
            </p>

            <input type="submit" name="operator" value="Sum">
            <input type="submit" name="operator" value="Subtraction">
            <input type="submit" name="operator" value="Multiplication">
            <input type="submit" name="operator" value="Division">
        </form>
    </div>
    
</body>
</html>