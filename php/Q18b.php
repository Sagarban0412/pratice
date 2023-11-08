<!DOCTYPE html>
<html>
<head>
    <title>Series of  1, 4, 9, 16, ….. upto 20 terms</title>
</head>
<body>
     <h3>Series of  1, 4, 9, 16, ….. upto 20 terms</h3>
    <form action="Q18a.php" method="post">
        Result: <br><textarea type="text" rows="5px" cols="35px">
        <?php
        for($i=1;$i<=20;$i++){
            echo $i*$i." "; 

        }
        ?>
        </textarea>
    </form>
</body>
</html>