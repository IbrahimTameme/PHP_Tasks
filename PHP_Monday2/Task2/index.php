<?php

if(isset($_POST["submit"]))
{

$city = $_POST["city"];
echo "your faviorte city is ".$city;

$arr1 = array($city);


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">
        <label for="city">insert faviorte city</label>
        <input type="text" name="city" id="city">
        <button type="submit" name="submit">submit</button>
    </form>
    
</body>
</html>