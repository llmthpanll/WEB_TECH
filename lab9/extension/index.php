<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /* Connect and Open Database */

    // SQL SELECT 
    $sql = "SELECT * from employees";

    $ret = $db->query($sql);

    echo "<div class='container-fluid'>";
    echo "<table class='table'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Address</th>";
    echo "<th>Phone</th>";
    echo "<th>Email</th>";
    echo "</tr>";
    while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['NAME'] . "</td>";
        echo "<td>" . $row['AGE'] . "</td>";
        echo "<td>" . $row['ADDRESS'] . "</td>";
        echo "<td>" . $row['SALARY'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";


    // Close database
    $db->close();
    ?>
</body>

</html>