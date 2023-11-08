<!DOCTYPE html>
<html>
<head>
    <title>Armstrong number from 1 to 1000</title>
</head>
<body>
    <h1>Armstrong number from 1 to 1000</h1>
    <form action="Q29.php" method="post" name="frm">
        <textarea name="armstg" id="2" cols="30" rows="10">
            <?php
            for ($number = 1; $number <= 1000; $number++) {
                $originalNumber = $number;
                $sum = 0;
                $numDigits = strlen((string)$number);
            
                for ($i = 0; $i < $numDigits; $i++) {
                    $digit = (int)($number / pow(10, $i)) % 10;
                    $sum += pow($digit, $numDigits);
                }
            
                if ($sum === $originalNumber) {
                    echo $originalNumber . " ";
                }
            }
            
            

            ?>
        </textarea>
    </form>
</body>
</html>