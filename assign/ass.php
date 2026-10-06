```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Assignment 1</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #eef7f4, #dff3ec);
            color: #263238;
            padding: 40px 20px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, #087f5b, #0ca678);
            color: white;
            padding: 35px;
            border-radius: 20px;
            text-align: center;
            margin-bottom: 30px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
        }

        .header h1 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .header p {
            font-size: 16px;
            opacity: 0.9;
        }

        /* Question Cards */
        .box {
            background: white;
            padding: 25px;
            margin-bottom: 22px;
            border-radius: 16px;
            border-left: 5px solid #0ca678;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
            transition: 0.3s;
        }

        .box:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
        }

        .box h2 {
            color: #087f5b;
            font-size: 20px;
            margin-bottom: 18px;
        }

        /* Results */
        .result {
            background: #f0faf7;
            border: 1px solid #b7ead9;
            padding: 15px 18px;
            border-radius: 10px;
            color: #075e45;
            font-size: 16px;
            line-height: 1.8;
        }

        .number {
            display: inline-block;
            background: #0ca678;
            color: white;
            padding: 8px 13px;
            margin: 4px;
            border-radius: 8px;
            font-weight: bold;
        }

        /* Table */
        .table-container {
            overflow-x: auto;
        }

        table {
            border-collapse: collapse;
            margin-top: 10px;
            width: 100%;
            min-width: 600px;
            background: white;
        }

        td {
            border: 1px solid #d7eee7;
            padding: 9px;
            text-align: center;
            font-weight: bold;
            color: #087f5b;
        }

        tr:first-child td,
        td:first-child {
            background: #e5f7f1;
        }

        /* Footer */
        .footer {
            text-align: center;
            margin-top: 35px;
            color: #607d8b;
            font-size: 14px;
        }

        .footer strong {
            color: #087f5b;
        }

        @media (max-width: 600px) {
            body {
                padding: 20px 12px;
            }

            .header {
                padding: 25px 15px;
            }

            .header h1 {
                font-size: 24px;
            }

            .box {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <!-- Header -->
    <div class="header">
        <h1>PHP & MySQL</h1>
        <p>Assignment 1 — Programming Exercises</p>
    </div>


    <!-- Question 1 -->
    <div class="box">

        <h2>Question 1: Greatest and Smallest</h2>

        <div class="result">

        <?php

        $a = 15;
        $b = 8;
        $c = 20;

        if ($a >= $b && $a >= $c) {
            $greatest = $a;
        } elseif ($b >= $a && $b >= $c) {
            $greatest = $b;
        } else {
            $greatest = $c;
        }

        if ($a <= $b && $a <= $c) {
            $smallest = $a;
        } elseif ($b <= $a && $b <= $c) {
            $smallest = $b;
        } else {
            $smallest = $c;
        }

        echo "Greatest = <strong>$greatest</strong><br>";
        echo "Smallest = <strong>$smallest</strong>";

        ?>

        </div>
    </div>


    <!-- Question 2 -->
    <div class="box">

        <h2>Question 2: Divisible by 3 and 5</h2>

        <div class="result">

        <?php

        $num = 15;

        if ($num % 3 == 0 && $num % 5 == 0) {
            echo "$num is divisible by both 3 and 5.";
        } elseif ($num % 3 == 0) {
            echo "$num is divisible by 3.";
        } elseif ($num % 5 == 0) {
            echo "$num is divisible by 5.";
        } else {
            echo "$num is divisible by neither 3 nor 5.";
        }

        ?>

        </div>
    </div>


    <!-- Question 3 -->
    <div class="box">

        <h2>Question 3: Odd Numbers from 2 to 20</h2>

        <div class="result">

        <?php

        for ($i = 2; $i <= 20; $i++) {

            if ($i % 2 != 0) {
                echo "<span class='number'>$i</span>";
            }

        }

        ?>

        </div>

        <br>

        <h2>Even Numbers from 35 to 7</h2>

        <div class="result">

        <?php

        for ($i = 35; $i >= 7; $i--) {

            if ($i % 2 == 0) {
                echo "<span class='number'>$i</span>";
            }

        }

        ?>

        </div>
    </div>


    <!-- Question 4 -->
    <div class="box">

        <h2>Question 4: Numbers Divisible by 2 and 5</h2>

        <div class="result">

        <?php

        for ($i = 50; $i >= 2; $i--) {

            if ($i % 2 == 0 && $i % 5 == 0) {
                echo "<span class='number'>$i</span>";
            }

        }

        ?>

        </div>
    </div>


    <!-- Question 5 -->
    <div class="box">

        <h2>Question 5: Reverse a Number</h2>

        <div class="result">

        <?php

        $num = 12345;
        $reverse = 0;

        while ($num > 0) {

            $digit = $num % 10;
            $reverse = ($reverse * 10) + $digit;
            $num = intdiv($num, 10);

        }

        echo "Reverse = <strong>$reverse</strong>";

        ?>

        </div>
    </div>


    <!-- Question 6 -->
    <div class="box">

        <h2>Question 6: LCM</h2>

        <div class="result">

        <?php

        $a = 8;
        $b = 12;

        $lcm = $a;

        while ($lcm % $a != 0 || $lcm % $b != 0) {
            $lcm++;
        }

        echo "LCM of $a and $b = <strong>$lcm</strong>";

        ?>

        </div>
    </div>


    <!-- Question 7 -->
    <div class="box">

        <h2>Question 7: HCF</h2>

        <div class="result">

        <?php

        $a = 18;
        $b = 24;

        $hcf = 1;

        for ($i = 1; $i <= $a && $i <= $b; $i++) {

            if ($a % $i == 0 && $b % $i == 0) {
                $hcf = $i;
            }

        }

        echo "HCF of $a and $b = <strong>$hcf</strong>";

        ?>

        </div>
    </div>


    <!-- Question 8 -->
    <div class="box">

        <h2>Question 8: Multiplication Table</h2>

        <div class="table-container">

            <table>

            <?php

            for ($i = 1; $i <= 12; $i++) {

                echo "<tr>";

                for ($j = 1; $j <= 12; $j++) {

                    echo "<td>" . ($i * $j) . "</td>";

                }

                echo "</tr>";

            }

            ?>

            </table>

        </div>
    </div>


    <!-- Question 9 -->
    <div class="box">

        <h2>Question 9: Prime or Non-Prime</h2>

        <div class="result">

        <?php

        $num = 17;
        $isPrime = true;

        if ($num <= 1) {

            $isPrime = false;

        } else {

            for ($i = 2; $i < $num; $i++) {

                if ($num % $i == 0) {
                    $isPrime = false;
                    break;
                }

            }

        }

        if ($isPrime) {
            echo "$num is a <strong>Prime number</strong>.";
        } else {
            echo "$num is a <strong>Non-Prime number</strong>.";
        }

        ?>

        </div>
    </div>


    <!-- Question 10 -->
    <div class="box">

        <h2>Question 10: Prime Numbers from 10 to 50</h2>

        <div class="result">

        <?php

        for ($num = 10; $num <= 50; $num++) {

            $isPrime = true;

            for ($i = 2; $i < $num; $i++) {

                if ($num % $i == 0) {
                    $isPrime = false;
                    break;
                }

            }

            if ($isPrime) {
                echo "<span class='number'>$num</span>";
            }

        }

        ?>

        </div>
    </div>


    <!-- Footer -->
    <div class="footer">
        PHP & MySQL Assignment 1<br>
        <strong>Prepared by Ikraan</strong>
    </div>

</div>

</body>
</html>
```
