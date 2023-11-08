<!DOCTYPE html>
<html>
<head>
    <title>series of 5,10,15,20,.....50</title>
</head>
<body>
     <h3>series of 5,10,15,20,.....50</h3>
    <form action="Q18a.php" method="post">
        Result: <br><textarea type="text" rows="5px" cols="35px">
        <?php
        for($i=1;$i<=50;$i++){
            if($i%5==0){
                echo $i. " ";
            }

        }
        ?>
        </textarea>
    </form>
</body>
</html>