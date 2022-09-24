<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-size: x-large;
        }

        table,
        td {
            /* border-bottom: 1px solid black; */
            border: 1px solid black;
            border-collapse:initial;
            /* padding: 5px; */
        }

        td {
            width: 30px;
            justify-content: center;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    $day_amount = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 23, 24, 25, 26, 27, 29, 30, 31);
    $day = array("Su", "Mo", "Tu", "We", "Th", "Fr", "Sa");
    $dpt = 1;
    // foreach loop
    echo "<table>";
    echo "<tr>";
    for ($i = 0; $i < sizeof($day); $i++) {

        echo "<td>$day[$i]</td>";
    }
    echo "</tr>";

    for ($i = 0; $i < sizeof($day_amount) / 7; $i++) {
        echo "<tr>";
        for ($j = 0; $j < sizeof($day_amount) / 5; $j++) {
            echo "<td>$dpt</td>";
            if ($dpt < 32) {

                $dpt++;
            }else{
                $dpt = "";
                echo "<td></td>";
                echo "<td></td>";   
                echo "<td></td>";
                break;
            }
        }
        echo "</tr>";
    }
    echo "</table>"
    ?>
</body>

</html>