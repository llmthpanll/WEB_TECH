<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <?php
    // Connect to Database 
    class MyDB extends SQLite3
    {
        function __construct()
        {
            $this->open('customers.db');
        }
    }

    // Open Database 
    $db = new MyDB();
    // if (!$db) {
    //     echo $db->lastErrorMsg();
    // } else {
    //     echo "Opened database successfully<br>";
    // }

    // Query process 
    /* Connect and Open Database */

    // SQL SELECT 
    $sql = "SELECT * from customers";

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
        echo "<td>" . $row['CustomerId'] . "</td>";
        echo "<td>" . $row['FirstName'] . " " . $row['LastName'] . "</td>";
        echo "<td>" . $row['Address'] . "</td>";
        echo "<td>" . $row['Phone'] . "</td>";
        echo "<td>" . $row['Email'] . "</td>";
        echo "</tr>";
        $id = $row['CustomerId'];
    }
    echo "</table>";

    //loop get last row
    while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
        $lastID = $row["CustomerId"];
    }
    $db->close();
    //first check var function name
    
    if (isset($_POST['functionname'])) {
        //check value of functionname
        if ($_POST['functionname'] == "func") {
            func();
        }
    }


    function func()
    {

        $db = new MyDB();
        if (!$db) {
            echo $db->lastErrorMsg();
        } else {
            echo "Opened database successfully<br>";
        }
        $lastID = $_POST['lastID'];
        $sql = "DELETE from customers where CustomerId = $lastID;";
        // echo $lastID;
        $ret = $db->exec($sql);

        $db->close();
    }


    ?>
    <form>
        <input id="lastID" name="lastID" type="hidden" value="<?php echo $lastID; ?>" />
        <input type="submit" value="Delete last row" class="btn btn-dark"></input>
        <input type="hidden" id="functionname" name="functionname" value="func">
    </form>
    </div>
    <script>
        $(document).ready(function() {
            $('form').submit(function(event) {
                // event.preventDefault();
                var $form = $(this);
                var $inputs = $form.find('input'); //get input tag
                var serializedData = $form.serialize(); //  get all inputtag's value in form return obj
                $.ajax({
                    url: "index.php",
                    type: 'POST',
                    data: serializedData, // http method

                    success: function(data, status, xhr) {
                        console.log("success");
                    },
                    error: function(jqXhr, textStatus, errorMessage) {
                        console.log(errorMessage);
                    }
                });
            });
        });
    </script>
</body>

</html>