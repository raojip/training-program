<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
    setcookie('test', 45, time()+(60*60*24*7));    // (name, id, time);

    $var = $_COOKIE['test'];
    echo $var
    ?>

<!-- <?php  
    //setcookie('test', 45, time()-(60*60*24*7));
?> -->
</body>
</html>