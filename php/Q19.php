<!DOCTYPE html>
<html>
<head>
    <title>First 15 even numbers</title>
</head>
<body>
     <h3>First 15 even numbers</h3>
    <form action="Q19.php" method="post">
        Result: <br><textarea type="text" rows="5px" cols="35px">
        <?php
        $count=0;
        for($i=1;$i<=100;$i++){
            if($i%2==0){
                $count++;
                if($count<=15){
                    echo $i." ";
                }
            }

        }
        ?>
        </textarea>
    </form>
</body>
</html>