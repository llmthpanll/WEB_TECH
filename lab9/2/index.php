<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <h1>Employee Form</h1>
        <p>
            <label for="id">ID : </label>
            <input type="text" name="id"><br>
        </p>
        <p>
            <label for="name">Name : </label>
            <input type="text" name="name"><br>
        </p>
        <p>
            <label for="age">Age : </label>
            <input type="text" name="age"><br>
        </p>
        <p>
            <label for="address">Address : </label>
            <textarea cols="25" rows="5" id="Address" name="Address"></textarea><br>
            <br>
        </p>
        <p>
            <label for="salary">Salary : </label>
            <input type="text" name="salary"><br>
        </p>
        <!-- <input type="submit" name="submit" value="Submit"> -->
        <input type="submit" value="submit" class="btn btn-dark"></input>
        <input type="hidden" id="functionname" name="functionname" value="func">
    </form>
    <h1>List of Employees</h1>
    <?php
    // Connect to Database 
    class MyDB extends SQLite3
    {
        function __construct()
        {
            $this->open('employees.db');
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
    //     /* connec to Database */

    //     // Create a Table using SQL 
    //     $sql = <<<EOF
    //     CREATE TABLE employees
    //     (ID INT PRIMARY KEY     NOT NULL,
    //     NAME           TEXT    NOT NULL,
    //     AGE            INT     NOT NULL,
    //     ADDRESS        CHAR(50),
    //     SALARY         REAL);
    //  EOF;

    //     $ret = $db->exec($sql);
    //     if (!$ret) {
    //         echo $db->lastErrorMsg();
    //     } else {
    //         echo "Table created successfully<br>";
    //     }
    if (isset($_POST['functionname'])) {
        //check value of functionname
        if ($_POST['functionname'] == "func") {
            func();
        }
    }

    function func()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $Address = $_POST['Address'];
        $salary = $_POST['salary'];


        $db = new MyDB();
        $sql = <<<EOF

            INSERT INTO employees (ID,NAME,AGE,ADDRESS,SALARY)
            VALUES ($id, '$name', $age, '$Address', $salary );

        EOF;

        $ret = $db->exec($sql);


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
        $db->close();
    }

    ?>


    

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