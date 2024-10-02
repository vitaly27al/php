<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>PHP</title>
</head>

<body>
    <div class="div">
        <?php
        $variable = 'qweqwe';
        echo $variable;
        ?>
        <!--  -->
        <?php
        $num = 12;
        $string = '12';
        $result = $num + $string;
        var_dump($result);
        echo $result;
        ?>
        <!--  -->
        <?php
        define('name', 'Albus');
        echo name;
        ?>
        <!--  -->
        <?php
        var_dump(name);
        ?>
        <!--  -->
        <?php
        define('fullAge', 23);
        define('age', 23.8);
        var_dump(fullAge);
        var_dump(age);
        ?>
        <!--  -->
        <?php
        $args = [1, 'two', [1, 'two', 3.14], 3.14];
        var_dump($args);
        ?>
        <?php
        $args2 = [1, 'two', [1, 'two', 3.14], 3.14];
        var_dump($args2[0]);
        ?>
        <!--  -->
        <?php
        $profile = [
            'name' => 'Alex',
            'age' => 23,
            'height' => 178.5,
            'is_man' => true,
            'is_woman' => false,
        ];
        var_dump($profile['is_man'])
        ?>
        <!--  -->
        <?php
        $array = ['Hello', 'world'];
        $var = 'world';
        echo 'Hello' . ' ' . 'world' . '  ' . 'Hello' . ' ' . $var . '  ' . $array[0] . ' ' . $array[1]
        ?>
        <!--  -->
        <br>
        <?php
        $word = ' world';
        echo "Hello {$word}s"
        ?>
        <!--  -->
        <br>
        <?php
        echo "Hello \"little\" world"
        ?>
        <!--  -->
        <br>
        <?php
        echo 2 / 3
        ?>
        <?php
        $a = 2 + 5;
        echo $a
        ?>
        <!--  -->
        <br>
        <?php
        for ($i = 0; $i < 10; $i++) { ?>
            <!-- echo "<span class='$i'>" . "Hello$i" . "</span><br>"; -->

            <span class="class <?php echo $i ?>">я span <?php echo $i + 1 ?></span> <br>
        <?php } ?>
        <!-- Подключение файда sample.php -->
        <div class="div">
            <?php
            include 'sample.php'; //если путь не правильный, все продолжает фенкционировать кроме этого include
            require 'sample.php'; //код, который идет после require останавливается
            ?>

            <?php
            // function doSomething($argument)
            // {
            //     echo $argument;
            // }
            // doSomething('Аргумент');
            ?>
            <?php
            // function doSomething($argument)
            // {
            //     echo $argument;
            // }
            // doSomething('Аргумент');
            // function doSomething($argument)
            // {
            //     return 'Аргумент';
            // }
            // echo doSomething();
            ?>
        </div>


        <!-- Homework Lesson 7 -->


        <div class="homework1">
            <?php
            include 'output.php';

            ?>

        </div>
        <div class="homework2">
            <?php
            include 'output_cycle.php';
            ?>
        </div>
        <div class="homework3">
            <?php
            include 'counter-even.php'
            ?>
        </div>
    </div>
</body>

</html>