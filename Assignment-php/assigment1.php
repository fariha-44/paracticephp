<?php
// ==========================================
// PHP & MySQL - Assignment 1
// Jamhuriya University of Science and Technology
// ==========================================
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP & MySQL | Assignment 1</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f7fb;
            color: #1f2937;
            line-height: 1.7;
        }

        /* =========================
           HEADER
        ========================== */

        .header {
            background: linear-gradient(135deg, #071a35, #123d70);
            color: white;
            padding: 55px 20px;
            text-align: center;
        }

        .header .badge {
            display: inline-block;
            background: rgba(255,255,255,0.12);
            border: 1px solid rgba(255,255,255,0.2);
            padding: 7px 16px;
            border-radius: 30px;
            font-size: 13px;
            margin-bottom: 15px;
        }

        .header h1 {
            font-size: 36px;
            margin-bottom: 8px;
        }

        .header p {
            color: #dbeafe;
            font-size: 16px;
        }

        /* =========================
           MAIN CONTAINER
        ========================== */

        .container {
            width: 90%;
            max-width: 1100px;
            margin: -25px auto 50px;
        }

        .student-info {
            background: white;
            padding: 20px 25px;
            border-radius: 14px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.07);
            margin-bottom: 25px;

            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 15px;
        }

        .student-info span {
            color: #64748b;
            font-size: 14px;
        }

        .student-info strong {
            display: block;
            color: #0f172a;
            font-size: 15px;
        }

        /* =========================
           QUESTION CARDS
        ========================== */

        .question {
            background: white;
            border-radius: 15px;
            margin-bottom: 22px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.06);
            border: 1px solid #e8edf4;
        }

        .question-header {
            background: #f8fafc;
            border-bottom: 1px solid #e5e7eb;
            padding: 17px 22px;

            display: flex;
            align-items: center;
            gap: 13px;
        }

        .number {
            width: 38px;
            height: 38px;
            min-width: 38px;
            background: #123d70;
            color: white;
            border-radius: 9px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-weight: bold;
        }

        .question-header h2 {
            font-size: 18px;
            color: #0f172a;
        }

        .content {
            padding: 22px;
        }

        .input-data {
            color: #64748b;
            font-size: 14px;
            margin-bottom: 12px;
        }

        /* =========================
           RESULT BOX
        ========================== */

        .result {
            background: #eff6ff;
            border-left: 4px solid #2563eb;
            padding: 15px 18px;
            border-radius: 8px;
            color: #1e3a5f;
        }

        .result-title {
            color: #2563eb;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }

        /* =========================
           NUMBER CHIPS
        ========================== */

        .numbers {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 8px;
        }

        .chip {
            background: #e8f0fe;
            color: #174ea6;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: bold;
        }

        /* =========================
           MULTIPLICATION TABLE
        ========================== */

        .table-wrapper {
            overflow-x: auto;
            margin-top: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            min-width: 700px;
        }

        th,
        td {
            border: 1px solid #dbe2ea;
            text-align: center;
            padding: 9px;
        }

        th {
            background: #123d70;
            color: white;
        }

        td:first-child {
            background: #eaf2fb;
            color: #123d70;
            font-weight: bold;
        }

        tr:nth-child(even) td:not(:first-child) {
            background: #f8fafc;
        }

        /* =========================
           FOOTER
        ========================== */

        footer {
            text-align: center;
            color: #94a3b8;
            padding: 20px;
            font-size: 13px;
        }

        @media (max-width: 700px) {

            .header h1 {
                font-size: 27px;
            }

            .container {
                width: 94%;
            }

            .question-header h2 {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>


<!-- =========================
     HEADER
========================== -->

<div class="header">

    <div class="badge">
        Jamhuriya University of Science and Technology
    </div>

    <h1>PHP & MySQL</h1>

    <p>Assignment 1 — PHP Programming Exercises</p>

</div>


<div class="container">


    <!-- INFORMATION -->

    <div class="student-info">

        <div>
            <span>Course</span>
            <strong>PHP & MySQL</strong>
        </div>

        <div>
            <span>Assignment</span>
            <strong>Assignment 1</strong>
        </div>

        <div>
            <span>University</span>
            <strong>Jamhuriya University</strong>
        </div>

        <div>
            <span>Due Date</span>
            <strong>September 29, 2029</strong>
        </div>

    </div>



    <!-- ==========================================
         QUESTION 1
    =========================================== -->

    <div class="question">

        <div class="question-header">
            <div class="number">01</div>
            <h2>Greatest and Smallest of Three Integers</h2>
        </div>

        <div class="content">

            <?php

            $a = 15;
            $b = 8;
            $c = 22;

            $greatest = $a;

            if ($b > $greatest) {
                $greatest = $b;
            }

            if ($c > $greatest) {
                $greatest = $c;
            }


            $smallest = $a;

            if ($b < $smallest) {
                $smallest = $b;
            }

            if ($c < $smallest) {
                $smallest = $c;
            }

            ?>

            <div class="input-data">
                Given numbers:
                <strong><?php echo "$a, $b, $c"; ?></strong>
            </div>

            <div class="result">

                <div class="result-title">Output</div>

                Greatest Number:
                <strong><?php echo $greatest; ?></strong>

                <br>

                Smallest Number:
                <strong><?php echo $smallest; ?></strong>

            </div>

        </div>
    </div>



    <!-- ==========================================
         QUESTION 2
    =========================================== -->

    <div class="question">

        <div class="question-header">
            <div class="number">02</div>
            <h2>Divisible by 3, 5, Both, or None</h2>
        </div>

        <div class="content">

            <?php

            $number = 15;

            if ($number % 3 == 0 && $number % 5 == 0) {

                $message = "$number is divisible by both 3 and 5.";

            } elseif ($number % 3 == 0) {

                $message = "$number is divisible by 3.";

            } elseif ($number % 5 == 0) {

                $message = "$number is divisible by 5.";

            } else {

                $message = "$number is not divisible by 3 or 5.";
            }

            ?>

            <div class="input-data">
                Given number:
                <strong><?php echo $number; ?></strong>
            </div>

            <div class="result">
                <div class="result-title">Output</div>
                <?php echo $message; ?>
            </div>

        </div>
    </div>



    <!-- ==========================================
         QUESTION 3
    =========================================== -->

    <div class="question">

        <div class="question-header">
            <div class="number">03</div>
            <h2>Odd and Even Numbers</h2>
        </div>

        <div class="content">

            <div class="result">

                <div class="result-title">
                    Odd Numbers from 2 to 20
                </div>

                <div class="numbers">

                    <?php

                    for ($i = 2; $i <= 20; $i++) {

                        if ($i % 2 != 0) {
                            echo "<span class='chip'>$i</span>";
                        }
                    }

                    ?>

                </div>

                <br>

                <div class="result-title">
                    Even Numbers from 35 to 7
                </div>

                <div class="numbers">

                    <?php

                    for ($i = 35; $i >= 7; $i--) {

                        if ($i % 2 == 0) {
                            echo "<span class='chip'>$i</span>";
                        }
                    }

                    ?>

                </div>

            </div>

        </div>
    </div>



    <!-- ==========================================
         QUESTION 4
    =========================================== -->

    <div class="question">

        <div class="question-header">
            <div class="number">04</div>
            <h2>Numbers Divisible by 2 and 5</h2>
        </div>

        <div class="content">

            <div class="result">

                <div class="result-title">
                    Output — From 50 to 2
                </div>

                <div class="numbers">

                    <?php

                    for ($i = 50; $i >= 2; $i--) {

                        if ($i % 2 == 0 && $i % 5 == 0) {

                            echo "<span class='chip'>$i</span>";
                        }
                    }

                    ?>

                </div>

            </div>

        </div>
    </div>



    <!-- ==========================================
         QUESTION 5
    =========================================== -->

    <div class="question">

        <div class="question-header">
            <div class="number">05</div>
            <h2>Reverse a Number</h2>
        </div>

        <div class="content">

            <?php

            $number = 12345;

            $original = $number;

            $reverse = 0;

            while ($number > 0) {

                $digit = $number % 10;

                $reverse = ($reverse * 10) + $digit;

                $number = (int)($number / 10);
            }

            ?>

            <div class="input-data">
                Original Number:
                <strong><?php echo $original; ?></strong>
            </div>

            <div class="result">

                <div class="result-title">Output</div>

                Reverse Number:
                <strong><?php echo $reverse; ?></strong>

            </div>

        </div>
    </div>



    <!-- ==========================================
         QUESTION 6
    =========================================== -->

    <div class="question">

        <div class="question-header">
            <div class="number">06</div>
            <h2>Lowest Common Multiple (LCM)</h2>
        </div>

        <div class="content">

            <?php

            $num1 = 8;
            $num2 = 12;

            $lcm = ($num1 > $num2) ? $num1 : $num2;

            while (true) {

                if ($lcm % $num1 == 0 &&
                    $lcm % $num2 == 0) {

                    break;
                }

                $lcm++;
            }

            ?>

            <div class="input-data">
                Numbers:
                <strong><?php echo "$num1 and $num2"; ?></strong>
            </div>

            <div class="result">

                <div class="result-title">Output</div>

                LCM of <?php echo "$num1 and $num2"; ?> =
                <strong><?php echo $lcm; ?></strong>

            </div>

        </div>
    </div>



    <!-- ==========================================
         QUESTION 7
    =========================================== -->

    <div class="question">

        <div class="question-header">
            <div class="number">07</div>
            <h2>Highest Common Factor (HCF)</h2>
        </div>

        <div class="content">

            <?php

            $num1 = 18;
            $num2 = 24;

            $hcf = 1;

            if ($num1 < $num2) {
                $small = $num1;
            } else {
                $small = $num2;
            }

            for ($i = 1; $i <= $small; $i++) {

                if ($num1 % $i == 0 &&
                    $num2 % $i == 0) {

                    $hcf = $i;
                }
            }

            ?>

            <div class="input-data">
                Numbers:
                <strong><?php echo "$num1 and $num2"; ?></strong>
            </div>

            <div class="result">

                <div class="result-title">Output</div>

                HCF of <?php echo "$num1 and $num2"; ?> =
                <strong><?php echo $hcf; ?></strong>

            </div>

        </div>
    </div>



    <!-- ==========================================
         QUESTION 8
    =========================================== -->

    <div class="question">

        <div class="question-header">
            <div class="number">08</div>
            <h2>Multiplication Table — 12 × 12</h2>
        </div>

        <div class="content">

            <div class="table-wrapper">

                <table>

                    <tr>

                        <th>×</th>

                        <?php

                        for ($i = 1; $i <= 12; $i++) {

                            echo "<th>$i</th>";
                        }

                        ?>

                    </tr>


                    <?php

                    for ($i = 1; $i <= 12; $i++) {

                        echo "<tr>";

                        echo "<td>$i</td>";

                        for ($j = 1; $j <= 12; $j++) {

                            echo "<td>" . ($i * $j) . "</td>";
                        }

                        echo "</tr>";
                    }

                    ?>

                </table>

            </div>

        </div>
    </div>



    <!-- ==========================================
         QUESTION 9
    =========================================== -->

    <div class="question">

        <div class="question-header">
            <div class="number">09</div>
            <h2>Prime or Non-Prime Number</h2>
        </div>

        <div class="content">

            <?php

            $number = 17;

            $isPrime = true;

            if ($number <= 1) {

                $isPrime = false;

            } else {

                for ($i = 2; $i < $number; $i++) {

                    if ($number % $i == 0) {

                        $isPrime = false;

                        break;
                    }
                }
            }

            ?>

            <div class="input-data">
                Given Number:
                <strong><?php echo $number; ?></strong>
            </div>

            <div class="result">

                <div class="result-title">Output</div>

                <?php

                if ($isPrime) {

                    echo "<strong>$number</strong> is a prime number.";

                } else {

                    echo "<strong>$number</strong> is a non-prime number.";
                }

                ?>

            </div>

        </div>
    </div>



    <!-- ==========================================
         QUESTION 10
    =========================================== -->

    <div class="question">

        <div class="question-header">
            <div class="number">10</div>
            <h2>Prime Numbers from 10 to 50</h2>
        </div>

        <div class="content">

            <div class="result">

                <div class="result-title">
                    Output
                </div>

                <div class="numbers">

                    <?php

                    for ($number = 10; $number <= 50; $number++) {

                        $isPrime = true;

                        if ($number <= 1) {

                            $isPrime = false;

                        } else {

                            for ($i = 2; $i < $number; $i++) {

                                if ($number % $i == 0) {

                                    $isPrime = false;

                                    break;
                                }
                            }
                        }

                        if ($isPrime) {

                            echo "<span class='chip'>$number</span>";
                        }
                    }

                    ?>

                </div>

            </div>

        </div>
    </div>


</div>


<footer>
    PHP & MySQL • Assignment 1 • Jamhuriya University of Science and Technology
</footer>


</body>
</html>