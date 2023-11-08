<!DOCTYPE html>
<html>
<head>
    <title>Sum of Odd number from 1 to 100</title>
</head>
<body>
     <h3>Sum of odd numbers from 1 to 100</h3>
    <form action="Q20.php" method="post">
        Result: <input type="text" value="
        <?php
        $sum=0;
        for($i=1;$i<=100;$i++){
            if($i%2==1){
                $sum=$sum+$i;
            }
        }
        echo $sum;
        ?>
        "
        >
    </form>
</body>
</html>