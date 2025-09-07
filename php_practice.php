<!-- Hello World!

<h1>Hello World!</h1>

<style>
    h1{
        color:blue
    }
</style>

<script>
    alert("Hello World!");
</script>
-->

<?php 
    //echo "Hello World!";
    # echo "Hello World!";
?>

<!-- Hello -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>This is my first PHP page</h1> -->

    <?php   eChO //"<b>Hello, my name is Ruffa!</b><br>";  -->

    // a-Z09_
    /*$a = 5;
    //echo $a;
    var_dump($a);
    var_dump("John");
    var_dump(3.14);
    var_dump(true);
    var_dump([1,2,3]);
    var_dump(null);
    */

    /*$a = 5; //global

    echo $a."<br>";

    function test(){
        //$a = 0; //local
        static $a = 0; //static
        echo $a."<br>";
        $a++;
    }*/

    // test();
    // test();
    
    // echo("Hello<br>"),("Hello<br>"),("Hello<br>");
    // echo "World!<br>","World!<br>","World!<br>";

    // print("Hello<br>");
    // print "Hello<br>";

    // $a = 5;

    // echo '$a Eggs';

    // $a = "John";
    // $b = -5;
    // $c = 3.14;
    // $d = false;
    // $e = [1,2,3];
    // $f = new stdClass();
    // $g = null;
    // $h = fopen("php_practice.php", "r");

    // var_dump($a);
    // echo '<br>';
    // var_dump($b);
    // echo '<br>';
    // var_dump($c);
    // echo '<br>';
    // var_dump($d);
    // echo '<br>';
    // var_dump($e);
    // echo '<br>';
    // var_dump($f);
    // echo '<br>';
    // var_dump($g);
    // echo '<br>';
    // var_dump($h);
    // echo '<br>';

    // echo strlen($a), "<br>";
    // echo str_word_count($a), "<br>";
    // echo strpos($a, "Cruz"), "<br>";
    // echo strtoupper($a), "<br>";
    // echo strtolower($a), "<br>";
    // echo str_replace("Cruz", "Manaloto", $a), "<br>";
    // echo strrev($a), "<br>";
    // echo trim("Hello Love Goodbye!  "), "<br>";
    // var_dump (explode(" ", "Hello Love!")); //array sha

    //echo "Hello" "World!"; //error
    // echo var_dump("Hello World!");
    // $x = "Hello";
    // $y = "World";

    // //echo $x ." ". $y;
    // echo "$x $y", "<br>";

    // echo 'John \'Bay\' Cruz';

    // $a = 5;
    // $b = 3.14;
    // $c = "25"; //if 'eggs' or '5 eggs', no return

    // echo PHP_INT_MAX, "<br>"; //9223372036854775807
    // echo PHP_INT_MIN, "<br>"; //-9223372036854775808
    // echo PHP_INT_SIZE, "<br>"; //8
    
    // echo is_int($a), "<br>"; //1
    // echo is_int($b), "<br>"; //blank
    // echo is_int($c), "<br>"; //blank

    // echo PHP_FLOAT_MAX, "<br>"; //1.7976931348623E+308
    // echo PHP_FLOAT_MIN, "<br>"; //2.2250738585072E-308
    // echo PHP_FLOAT_DIG, "<br>"; //15
    // echo PHP_FLOAT_EPSILON, "<br>"; //2.2204460492503E-16

    // echo is_float($a), "<br>";

    // echo is_numeric($c), "<br>";

    // $a = (string) "John Cruz";
    // $b = (string) -5;
    // $c = (string) 3.14;
    // $d = (string) true; //1, if false blank
    // $e = (string) null;
    // $f = (string) fopen("php_practice.php", "r");

    // var_dump($a);
    // echo '<br>';
    // var_dump($b);
    // echo '<br>';
    // var_dump($c);
    // echo '<br>';
    // var_dump($d);
    // echo '<br>';
    // var_dump($e);
    // echo '<br>';
    // var_dump($f);

    // $a = (int) "John Cruz";
    // $b = (int) -5;
    // $c = (int) 3.14;
    // $d = (int) true;
    // $e = (int) null;
    // $f = (int) fopen("php_practice.php", "r");

    // $a = (float) "John Cruz";
    // $b = (float) -5;
    // $c = (float) 3.14;
    // $d = (float) true;
    // $e = (float) null;
    // $f = (float) fopen("php_practice.php", "r");

    // $a = (bool) "John Cruz";
    // $b = (bool) -5;
    // $c = (bool) 3.14;
    // $d = (bool) true;
    // $e = (bool) null;
    // $f = (bool) fopen("php_practice.php", "r");

    // $a = (array) "John Cruz";
    // $b = (array) -5;
    // $c = (array) 3.14;
    // $d = (array) true;
    // $e = (array) null;
    // $f = (array) fopen("php_practice.php", "r");

    // $a = (unset) "John Cruz";
    // $b = (unset) -5;
    // $c = (unset) 3.14;
    // $d = (unset) true;
    // $e = (unset) null;
    // $f = (unset) fopen("php_practice.php", "r");
    // unset cast no longer supported

    // echo pi();
    // echo min(5, 1, 3, 4);
    // echo max(5, 1, 3, 4);

    // echo abs(-10);
    // echo abs(10);

    // echo sqrt(4);

    // echo round(3.4);

    // echo round(3.45, 0);
    
    // echo rand();
    // echo rand(4, 14);

    //constants
    // $x = 10;
    // define("_GREETING", "Hello World!");

    // echo $x;
    // var_dump(_GREETING);

    // const _GREETING2 = "Hello People!";

    // echo _GREETING;

    // function test(){
    //     echo _GREETING;
    // }

    // test();

    // echo $x;
    // unset($x);
    // echo $x;

    // echo $x;
    // unset(_GREETING);
    // echo _GREETING;

    //PHP OPERATORS
    
    //ARITHMETICS

    // + addition
    //echo 10 + 100 + 30, "<br>";

    // // - subtraction
    // echo 10 - 100 - 20, "<br>";

    // // add and sub
    // echo 10 - 20 + 100 - 10, "<br>"; //left to right

    // // * multiplication
    // echo 10 * 10 * 100, "<br>";

    // // / division
    // echo 10 / 5 / 2, "<br>";

    // // multi and division
    // echo 10 / 5 * 2, "<br>";

    // // addition/sub and division/multi
    // echo 50 + 10 / 2, "<br>"; //multi/division before add/subtract

    // // % modulus
    // echo 7 % 3, "<br>";

    // // ** expponential
    // echo 10 ** 10;

    // ASSIGNMENT

    // = equals
    //$x = 10;

    // +=
    // $x = $x + 10;
    // $x += 10;

    // -=
    // $x = $x - 10;
    // $ -= 10;

    // /=
    // $x = $x / 10;
    // $x /= 10;

    // *=
    // $x = $x * 10;
    // $x *= 10;

    // echo $x;

    // // COMPARISON OPERATORS

    // // == equals to = similar value
    // var_dump(10 == "10"); //true

    // // === identical = similar value and data types
    // var_dump(10 === "10"); //false, not same data type

    // // != <> not equals to = not similar value
    // var_dump(10 != "10");
    // var_dump(10 <> "10");

    // // !== not identical = not similar value or not similar data types
    // var_dump(10 !== "10"); //true

    // // < less than = check if 1 value is less than second value
    // var_dump(10 < "10"); //false
    // var_dump(10 < 9); //false

    // // > greater than = check if 1 value is greater than second value
    // var_dump(10 > 9); //true

    // // <= less than or equals to = check if 1 value is less than or equal than the second value
    // var_dump(10 <= 10);

    // // >= greater than or equals to
    // var_dump(10 >= 10);

    // // <=> spaceship = check if first value
    // var_dump(1 <=> 2);

    // // PHP INCREMENT AND DECREMENT
    
    // // pre-increment
    // $x = 10;
    // echo ++$x, "<br>"; //11

    // // post-increment
    // $y = 10;
    // echo $y++, "<br>"; //10
    // echo $y, "<br>";

    // // pre-decrement
    // $x = 10;
    // echo --$x, "<br>";

    // // post-decrement
    // $y = 10;
    // echo $y--, "<br>";
    // echo $y, "<br>";
    ?>


</body>
</html>
