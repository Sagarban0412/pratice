<!DOCTYPE html>
<html>
<head>
    <title>Numbers from 1 to 100</title>
</head>
<body>
     <h1>Numbers from 1 to 100</h1>
    <form action="Q16.php" method="post">
        Result: <br><textarea type="text" rows="10px" cols="28px">
        <?php
        for($i=1;$i<=100;$i++)
            echo $i." ";
        ?>
        </textarea>
    </form>
</body>
</html>