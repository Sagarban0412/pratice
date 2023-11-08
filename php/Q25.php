<!DOCTYPE html>
<html>
<head>
    <title>Prime number from 1 to 100</title>
</head>
<body>
    <h1>Prime number from 1 to 100</h1>
    <form action="Q25.php" method="post" name="frm">
        <textarea type="text" rows="15px" cols="30px">
        
       <?php
       echo "\n";
       for ($i = 2; $i <= 100; $i++) {
           $isPrime = true;
           for ($j = 2; $j <= sqrt($i); $j++) {
               if ($i % $j == 0) {
                   $isPrime = false;
                   break;
               }
           }
           if ($isPrime) {
               echo $i . " ";
           }
       }
       ?>
        </textarea>
    </form>
</body>
</html>