<!DOCTYPE html>
<html>
<head>
    <title>Sum of numbers from 5 to 100</title>
</head>
<body>
    <h1>Sum of numbers from 5 to 100</h1>
    <form action="Q17.php" method="post">
        Result: <br><input type="text" value="
        <?php
        $sum=0;
        for($i=1;$i<=100;$i++){
            if($i%5==0){
                $sum=$sum+$i;
            }
        }
        echo $sum;
        ?>
        ">
    </form>
</body>
</html>