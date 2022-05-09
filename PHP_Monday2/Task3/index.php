<?php

if(isset($_POST["submit"]))
{
$day = $_POST["Day"];

if ($day == "Monday") {
    echo "Laugh on Monday, laugh for danger.";
} else if($day == "Tuesday") {
    echo "Laugh on Tuesday, kiss a stranger.";
}
else if($day == "Wednesday") {
    echo "Laugh on Wednesday, laugh for a letter.";
}
else if($day == "Thursday") {
    echo "Laugh on Thursday, something better.";
}
else if ($day == "Friday") {
    
    echo "Laugh on Friday, laugh for sorrow.";
}
else if($day == "Saturday") {
    echo "Laugh on Saturday, joy tomorrow.";
    
}else
{
    echo "Sunday is uselss";
}

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
        <label for="Day">insert DAY </label>
        <input type="text" name="Day" id="Day">
        <button type="submit" name="submit">submit</button>
    </form>
    
</body>
</html>