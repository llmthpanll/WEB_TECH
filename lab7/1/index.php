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
            border-bottom: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }

        td {
            width: 20px;
        }
    </style>
</head>

</body>

<form id="calform" action="index.php" method="post">
    <label for="inpvalue">กรอกสูตรคูณ : </label>
    <input type="text" id="inpvalue" name="inpvalue" value="" />
    <input type="submit" id="submit" value="แสดงตาราง">
</form>
<?php

if (isset($_POST['inpvalue'])) {
    $numstr = $_POST['inpvalue'];
    $va = intval($numstr);
    echo "<table>";
    for ($i = 1; $i <= 12; $i++) {
        echo "<tr>";
        // for ($j = 1; $j <= 5; $j++) {
        echo "<td>$va</td>";
        echo "<td>X</td>";
        echo "<td>$i</td>";
        echo "<td>=</td>";
        echo "<td>" . $i * $va . "</td>";
        // echo "$va X $i = ". $i * $va ."<hr>";
        echo "";
        
        // }
        echo "</tr>";
    }
    echo "</table>";
}
?>
</body>

</html>