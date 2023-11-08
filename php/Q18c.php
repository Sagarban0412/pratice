<!DOCTYPE html>
<html>
<head>
    <title>series of 100, 98, 96, 94, …………. Upto 10 terms</title>
</head>
<body>
     <h3>series of 100, 98, 96, 94, …………. Upto 10 terms</h3>
    <form action="Q18c.php" method="post">
        Result: <br><textarea type="text" rows="5px" cols="35px">
        <?php
        $count=0;
        for($i=100;$i>=1;$i=$i-2){
            $count++;
            if($count<=10){
                echo $i. " "; 
            }
            else{
                break;
            }
        }
        ?>
        </textarea>
    </form>
</body>
</html>