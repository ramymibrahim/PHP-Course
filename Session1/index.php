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
    include('./functions.php');
    //one line comment
    /*
    Multi line comments
     */
    echo '<h1>This is valid PHP code</h1>';
    echo 'It\'s a rainy day <br />';

    echo "5"."6.5 </br >";
    $i = 6.5;
    echo $i;
    define('PI',3.14);
    echo PI;
    echo "<br />";
    echo gettype($i);
    echo is_float($i);
    echo "<br />";
    var_dump("Text");
    echo "<br />";
    settype($i, 'integer');
    var_dump($i);
    var_export(is_float($i));
    die();
    echo "<br />";
    $i = 6.5;
    echo "i=$i<br />";
    $x = (int) $i;
    echo "x=$x<br />";

    $obj = new stdClass();
    echo $obj instanceof stdClass;
    ?>
</body>
</html>