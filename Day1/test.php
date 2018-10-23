<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="1">
    <title>Document</title>
</head>
<body>
<pre>
    <?php
        
        date_default_timezone_set('America/Edmonton');
        echo date("Y-m-d H:i:s");
        echo "<br>";
        $num1 = 10;
        $num2 = 20;
        var_dump($num1);
        $txt = "Hi there!";
        echo "\n";
        $name = "My name is Joel";
        echo $txt;
        echo " Test ";
        echo " Hello " . $txt;
        echo $txt . $name;
        echo "\n";
        echo "<br>";
        echo $num1 + $num2;
        echo "\n";
        echo $num2 - $num1;
        echo "\n";
        echo $num1 * $num2;
        echo "\n";

        $a = 2;
        $b = "String";
        $c = 2 + 4;
        $d = [1, 2, "foo"];
        $e = true;
        $f = new stdClass();
        $g = 9;

        var_dump($a, $b, $c, $d, $e, $f, $g);
        define('CONSTANT', 13);
        var_dump(CONSTANT);
    ?>
</body>
</html>